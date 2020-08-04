<?php
require('config.php');
$id=$_REQUEST['id'];
$query = "SELECT * from addinfo where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<?php
include('config.php');
include('function.php');
session_start();
    

  if (isset($_POST['submit'])) {
        $id=$_POST['id'];

      $agreementno = mysqli_real_escape_string($conn,$_POST['Agreementno']);
      $projectname = mysqli_real_escape_string($conn,$_POST['projectname']);
       $district = mysqli_real_escape_string($conn,$_POST['District']); 
      $villages = mysqli_real_escape_string($conn,$_POST['villages']);
      $source = mysqli_real_escape_string($conn,$_POST['Source']);
      $capacity = mysqli_real_escape_string($conn,$_POST['capacity']);
      $projectpopulation = mysqli_real_escape_string($conn,$_POST['ProjectPopulation']);
      $noofhousehold = mysqli_real_escape_string($conn,$_POST['noofhousehold']); 
      $projectcost = mysqli_real_escape_string($conn,$_POST['ProjectCost']);
      $projectcost2 = mysqli_real_escape_string($conn,$_POST['ProjectCost2']);
     $funding_agency = mysqli_real_escape_string($conn,$_POST['funding_agency']);
      $projectduaration = mysqli_real_escape_string($conn,$_POST['Projectduaration']);
    $projectstartdate = mysqli_real_escape_string($conn,$_POST['projectstartdate']);
      $dateofcompletion = mysqli_real_escape_string($conn,$_POST['Dateofcompletion']);
      $expecteddate = mysqli_real_escape_string($conn,$_POST['Expecteddate']);
      $agencyname = mysqli_real_escape_string($conn,$_POST['Agencyname']);
      $projectmanagername = mysqli_real_escape_string($conn,$_POST['ProjectManagername']); 
       $financialprogress = mysqli_real_escape_string($conn,$_POST['FinancialProgress']); 
       $physicalprogress = mysqli_real_escape_string($conn,$_POST['PhysicalProgress']); 
     $status = mysqli_real_escape_string($conn,$_POST['status']);
        $watersupplystart = mysqli_real_escape_string($conn,$_POST['watersupplystart']);


       
            $sql = "UPDATE `addinfo` SET `agreementno`='$agreementno',`projectname` ='$projectname',`district` = '$district',`villages` = $villages,`source` = '$source',`capacity`='$capacity',`projectpopulation` = $projectpopulation,`noofhousehold`= $noofhousehold,`projectcost` = $projectcost,`projectcost2` = $projectcost2,`funding_agency`='$funding_agency',`projectduaration` = $projectduaration,`projectstartdate`='$projectstartdate',`dateofcompletion` = '$dateofcompletion',`expecteddate`='$expecteddate',`agencyname`='$agencyname',`projectmanagername` ='$projectmanagername',`financialprogress`=$financialprogress,`physicalprogress`= $physicalprogress,`status`='$status',`watersupplystart`='$watersupplystart' WHERE `id`=$id";


if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Updated Successfully');document.location='dashboard.php'</script>";
        } else {
            echo "<script>alert('Error in Updating Record');document.location='dashboard.php'</script>";
            }

        $conn->close();
}
 ?>

 <!DOCTYPE html>
<html>
<head>
    <title>UPDATE INFO</title>
    <meta charset="utf-8">
    <style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    html{
        height: 100%;
    }

  body{
    margin: 0;
    padding: 0;
    background: url(img/background.jpg);
    background-size: cover;
    background-position: center;
    font-family: Times, Times New Roman, serif;
}

.wrap{
    width: 320px;
    height: 420px;
    color: #fff;
    top: 40%;
    left: 38%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

    .login-form{
        width: 600px;
        margin: 0 auto;
        border: 2px solid #ddd;
        padding: 2rem;
        background: #292c2d;
    }
    .form-input{
        background: #fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }
    .form-group{
        margin-bottom: 1rem;
        color: #fff;
    }
    .form-button{
        background: #69d2e7;
        border: 1px solid #ddd;
        color: #ffffff;
        padding: 10px;
        width: 100%;
        text-transform: uppercase;
    }
    .form-button:hover{
        background: #69c8e7;
    }
    .form-header{
        text-align: center;
        margin-bottom : 2rem;
        color: #ffffff;
    }
    .form-footer{
        text-align: center;
    }

    .header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  background-color: #0283c9 ;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }


    </style>
</head>
<body>

    <div class="header">
  <a href="#default" class="logo">Madhya Pradesh Jal Nigam Maryadit</a>
  <div class="header-right">
    <a class="active" href="Logout.php">Logout</a>
  </div>
</div>


    <div class="wrap">
        <form class="login-form" action="update.php" method="POST">
            <div class="form-header">

                <h1>UPDATE DETAIL</h1>
            </div>

            <div class="form-group">
            <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
            </div>
            
            <div class="form-group">
            <label>Agreement NO/Date</label>
                <input type="text" class="form-input" value="<?php echo $row['agreementno'];?>" name="Agreementno" required>
            </div>
          
            <div class="form-group">
            <label>Project Name</label>
               <input type="text" class="form-input" value="<?php echo $row['projectname'];?>" name="projectname" required>
            </div>

            <div class="form-group">
                        <label>DISTRICT</label>
               <input type="text" class="form-input" value="<?php echo $row['district'];?>" name="District" required>
            </div>

            <div class="form-group">
                        <label>Villages</label>

               <input type="text" class="form-input" value="<?php echo $row['villages'];?>" name="villages" required>
            </div>

            <div class="form-group">
                        <label>Source</label>
               <input type="text" class="form-input" value="<?php echo $row['source'];?>" name="Source" required>
            </div>
             
             <div class="form-group">
                         <label>Capacity Of Water Treatment Plant(in MLD)</label>

               <input type="text" class="form-input" value="<?php echo $row['capacity'];?>" name="capacity" required>
            </div>

            <div class="form-group">
                        <label>Project Population</label>

               <input type="text" class="form-input" value="<?php echo $row['projectpopulation'];?>" name="ProjectPopulation" required>
            </div>

            <div class="form-group">
                        <label>No of Household</label>

               <input type="text" class="form-input" value="<?php echo $row['noofhousehold'];?>" name="noofhousehold" required>
            </div>
        

            <div class="form-group">
                        <label>Project Cost(in Cr)</label>

               <input type="text" class="form-input" value="<?php echo $row['projectcost'];?>" name="ProjectCost" required>
            </div>

            <div class="form-group">
                        <label>Project Cost after up to date variation(Rs in Cr)</label>

                   <input type="text" class="form-input" value="<?php echo $row['projectcost2'];?>" name="ProjectCost2" required>
            </div>

            <div class="form-group">
            <label>FUNDING_AGENCY</label>
               <select class="form-input" name="funding_agency" value="<?php echo $row['funding_agency'];?>" required>
                <option value="NABARD">NABARD</option>
                <option value="NDB">NDB</option>
                <option value="STATE HEAD">STATE HEAD</option>
                <option value="MINING AREA SES">MINING AREA SES</option>
                <option value="DISTRICT MINING">DISTRICT MINING</option>
               </select>
            </div>


            <div class="form-group">
                        <label>Project Duaration</label>

               <input type="text" class="form-input" value="<?php echo $row['projectduaration'];?>" name="Projectduaration" required>
            </div>

            <div class="form-group">
                        <label>Project Start Date</label>
               <input type="date" class="form-input" value="<?php echo $row['projectstartdate'];?>" name="projectstartdate" required>
            </div>

            <div class="form-group">
                        <label>Project Completion Date(As per Agreement)</label>
               <input type="date" class="form-input" value="<?php echo $row['dateofcompletion'];?>" name="Dateofcompletion" required>
            </div>

            <div class="form-group">
                        <label>EXPECTED Date of Project Completion(As per Agreement)</label>
               <input type="date" class="form-input" value="<?php echo $row['expecteddate'];?>" name="Expecteddate" required>
            </div>

            <div class="form-group">
                        <label>Agency Name</label>
               <input type="text" class="form-input" value="<?php echo $row['agencyname'];?>" name="Agencyname" required>
            </div>

            <div class="form-group">
                        <label>Project Manager Name</label>

               <input type="text" class="form-input" value="<?php echo $row['projectmanagername'];?>" name="ProjectManagername" required>
            </div>

            <div class="form-group">
                        <label>Financial Progress</label>

               <input type="text" class="form-input" value="<?php echo $row['financialprogress'];?>" name="FinancialProgress" required>
            </div>

            <div class="form-group">
                        <label>Physical Progress</label>

               <input type="text" class="form-input" value="<?php echo $row['physicalprogress'];?>" name="PhysicalProgress" required>
            </div>

            <div class="form-group">
                        <label>Status</label>

               <input type="text" class="form-input" value="<?php echo $row['status'];?>" name="status" required>
            </div>

            <div class="form-group">
                        <label>Water Supply Start Date</label>
               <input type="date" class="form-input" value="<?php echo $row['watersupplystart'];?>" name="watersupplystart" required>
            </div>
           
            <div class="form-group">
                <button class="form-button" type="submit" name="submit">SUBMIT</button>
            </div>
        </form>
    </div>
</body>
</html>
         