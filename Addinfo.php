<?php
include('config.php');
include('function.php');
session_start();
    

  if (isset($_POST['submit'])) {
      
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
        $piu= $_SESSION["piu"];
     $status = mysqli_real_escape_string($conn,$_POST['status']);
       $watersupplystart = mysqli_real_escape_string($conn,$_POST['watersupplystart']); 
         $added_on=date('Y-m-d h:i:s');

       $sql = "INSERT INTO `addinfo`( `agreementno`, `projectname`, `district`, `villages`, `source`,`capacity`, `projectpopulation`, `noofhousehold`, `projectcost`, `projectcost2`, `funding_agency`,`projectduaration`, `projectstartdate`,`dateofcompletion`, `expecteddate`, `agencyname`, `projectmanagername`, `financialprogress`, `physicalprogress`,`piu`,`status`,`watersupplystart`, `added_on`) VALUES ('$agreementno','$projectname','$district',$villages,'$source',$capacity,$projectpopulation,$noofhousehold,$projectcost,$projectcost2,'$funding_agency',$projectduaration,'$projectstartdate','$dateofcompletion', '$expecteddate','$agencyname','$projectmanagername',$financialprogress,$physicalprogress,'$piu','$status','$watersupplystart','$added_on')";
 

if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Sucessfully Inserted');document.location='dashboard.php'</script>";
        } else {
            echo "<script>alert('Invalid Record Insertion');document.location='dashboard.php'</script>";
            }

        $conn->close();
}
 ?>

 <!DOCTYPE html>
<html>
<head>
    <title>ADD DETAIL</title>
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
    font-family: Times, Times New Roman, serif;;
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
        <form class="login-form" action="Addinfo.php" method="POST">
            <div class="form-header">

                <h1>ADD DETAIL</h1>
            </div>
            
            <div class="form-group">
                <label>AGREEMENT NO/DATE</label>
                <input type="text" class="form-input" placeholder="Agreement Date" name="Agreementno" required>
            </div>
          
            <div class="form-group">
               <input type="text" class="form-input" placeholder="Name of Project" name="projectname" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="District" name="District" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="No of villages" name="villages" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Source" name="Source" required>
            </div>
             
             <div class="form-group">
               <input type="text" class="form-input" placeholder="Capacity of Water Treatment Plant (in MLD)" name="capacity" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Project Population" name="ProjectPopulation" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="No of Households" name="noofhousehold" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Project Cost(RS in Cr)" name="ProjectCost" required>
            </div>

            <div class="form-group">
                   <input type="text" class="form-input" placeholder="Project Cost after up to date variation(Rs in Cr)" name="ProjectCost2" required>
            </div>

            <div class="form-group">
            <label>FUNDING_AGENCY</label>
               <select class="form-input" name="funding_agency" placeholder="funding_agency" required>
                <option value="NABARD">NABARD</option>
                <option value="NDB">NDB</option>
                <option value="STATE HEAD">STATE HEAD</option>
                <option value="MINING AREA SES">MINING AREA SES</option>
                <option value="DISTRICT MINING">DISTRICT MINING</option>
               </select>
            </div>


            <div class="form-group">
               <input type="text" class="form-input" placeholder="Project Duaration(in Month)" name="Projectduaration" required>
            </div>

            <div class="form-group">
                        <label>Project Start Date </label>
               <input type="date" class="form-input" placeholder="Project Start Date" name="projectstartdate" required>
            </div>

            <div class="form-group">
                        <label>Project Completion Date(As Per Agreement) </label>
               <input type="date" class="form-input" placeholder="Date of Completion as per agreement" name="Dateofcompletion" required>
            </div>

            <div class="form-group">
                        <label>Expected Date of Completion(As Per Agreement)</label>
               <input type="date" class="form-input" placeholder="Expected date of Completion After Time Extension EX:1990/09/10" name="Expecteddate" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Name of Agency" name="Agencyname" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Name of Project Manager/Contact no" name="ProjectManagername" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Financial Progress in %" name="FinancialProgress" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Physical Progress in %" name="PhysicalProgress" required>
            </div>

            <div class="form-group">
               <input type="text" class="form-input" placeholder="Status" name="status" required>
            </div>

           
            <div class="form-group">
                        <label>Water Supply Start Date</label>
               <input type="date" class="form-input" placeholder="Water Supply Start Date" name="watersupplystart" required>
            </div>

           
            <div class="form-group">
                <button class="form-button" type="submit" name="submit">SUBMIT</button>
            </div>
        </form>
    </div>
</body>
</html>
         