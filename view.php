<!DOCTYPE html>
<html>
<head>
	<title>view</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no>
    <meta charset="utf-8">

</head>
<style type="text/css">
	table{
		margin-top: 10px;
		border:1px solid black;
		width: 100%;
		font-family: Times, Times New Roman, serif;
		font-size: 12px;
		text-align: center;
		text-orientation: flex;
    background-color: #BBDEFB;
overflow-x:auto;


	}

	th{
		border: 1px solid black;
	}
	td{
		border: 1px solid black;
	}

	@media screen and (max-width: 500px){
		table{
			width: 100%;
			text-orientation: flex;
		}
	}


      * {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Times, Times New Roman, serif;
  background-image: url("img/background.jpg");
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
  font-size: 30px;
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
  padding-right: 5px;
  box-shadow: 0 0 0 darkblue;
  color: white;
}

.header-right a{
  margin-left: 10px;
}

.header-right a:hover{
    background-color: #1A237E;
}

.header-right a:active {
  box-shadow: none;
  top: 5px;
}

table td {
text-align: center;
}
table th {
text-align: center;
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

  .bt{
  	text-align: center;
  }


</style>
<body>

	<div class="header">
  		<a href="#default" class="logo">Madhya Pradesh Jal Nigam Maryadit</a>
  			<div class="header-right">
    		<a class="active" href="Logout.php">Logout</a>

  			</div>
	</div>

	<h2 align="center" style="background-color:#0283c9" >DETAILS</h2>

	<div style="overflow-x: auto;">

<?php
include("config.php");
 
 if (isset($_GET["id"])) {
    $id = $_GET['id'];

 
	$sql= "SELECT * FROM addinfo WHERE id=$id";
     $result = $conn->query($sql);

if($result -> num_rows > 0){
     	while($row = $result ->fetch_assoc()){

     		echo " 
     				<table>

     				<tr>
     				<th>ID</th>
     				<td>" . $row["id"]. "</td>
     				</tr>

     				<tr>
     				<th>Agreement NO</th>
     				<td>" .$row["agreementno"]. "</td>
     				</tr>

     				<tr>
     				<th>Project Name</th>
     				<td>".$row["projectname"]."</td>
     				</tr>

     				<tr>
     				<th>District</th>
     				<td>".$row["district"]."</td>
     				</tr>

     				<tr>
     				<th>Villages</th>
     				<td>".$row["villages"]."</td>
     				</tr>

     				<tr>
     				<th>Source</th>
     				<td>".$row["source"]."</td>
     				</tr>

                     
     				<tr>
     				<th>Capacity of Water Treatment Plant(in LMD)</th>
     				<td>".$row["capacity"]."</td>
     				</tr>

     				<tr>
     				<th>Project Population</th>
     				<td>".$row["projectpopulation"]."</td>
     				</tr>

     				<tr>
     				<th>No of Household</th>
     				 <td>".$row["noofhousehold"]."</td>
     				</tr>

     				<tr>
     				<th>Project Cost (Rs in Cr)</th>
     				<td>".$row["projectcost"]."</td>
     				</tr>

     				<tr>
     				<th>Project Cost after up to date variation(Rs in Cr)</th>
     				<td>".$row["projectcost2"]."</td>
     				</tr>

                     
     				<tr>
     				<th>Funding_Agency</th>
     				<td>".$row["funding_agency"]."</td>
     				</tr>

     				<tr>
     				<th>Project Duaration</th>
     				<td>".$row["projectduaration"]."</td>
     				</tr>

                     	<tr>
     				<th>Project Start Date</th>
     				<td>".$row["projectstartdate"]."</td>
     				</tr>

     				<tr>
     				<th>Project Completion Date (As per agreement)</th>
     				<td>".$row["dateofcompletion"]."</td>
     				</tr>

     				<tr>
     				<th>Expected date of Completion After Time Extension</th>
     				<td>".$row["expecteddate"]."</td>
     				</tr>

     				<tr>
     				<th>Agency Name</th>
     				<td>".$row["agencyname"]."</td>
     				</tr>

     				<tr>
     					<th>Project Manager Name/Contact No</th>
     					<td>".$row["projectmanagername"]."</td>
     				</tr>

     				<tr>
     				<th>Financial Progress(in %)</th>
     				<td>".$row["financialprogress"]."</td>
     				</tr>

     				<tr>
     				<th>Physical Progress(in %)</th>
     				<td>".$row["physicalprogress"]."</td>
     				</tr>

                     
     				<tr>
     				<th>Status</th>
     				<td>".$row["status"]."</td>
     				</tr>

            <tr>
            <th>PIU</th>
            <td>" .$row["piu"]. "</td>
            </tr>

     				<tr>
     				<th>Water Supply Start Date</th>
     				<td>".$row["watersupplystart"]."</td>
     				</tr>

     				<tr>
     				<th>Date</th>
     				<td> ".$row["added_on"]." </td>
     				</tr>
     				";
     	}
     }
     echo"</div>";
     	echo "</table>";
     }else{echo "0 result";}
     $conn->close();
?>
</table>
</div>
</body>
</html>