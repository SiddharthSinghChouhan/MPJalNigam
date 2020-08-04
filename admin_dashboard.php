<?php
include("config.php");

$sql="SELECT count(id) AS total from user_login";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `physicalprogress`< 100";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows1=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `physicalprogress`= 100";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows2=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows3=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT sum(villages) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows4=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT sum(projectcost) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows5=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT sum(projectpopulation) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows6=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `funding_agency`= 'NABARD' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows7=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `funding_agency`='NDB' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows8=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `funding_agency`='STATE HEAD' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows9=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `funding_agency`='MINING AREA SES' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows10=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `funding_agency`='DISTRICT MINING' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows11=$values['total'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">

	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

	<style type="text/css">

		body{
			background-image:#fff;
			background-size: cover;
			background-position: center;
  font-family: Times, Times New Roman, serif;
		}
		.counter-section{
			margin: 5% auto;
			color: #000000;
			margin-left: 25% auto;
		}

        .icon-box3{
			border: 1px solid #000000;
			height: 50px;
			width: 1000px;
			margin: 10px auto;
	  background-color: #0283c9;
	  text-orientation: flex;
		}

		.icon-box{
			border: 1px solid #000000;
			height: 100px;
			width: 200px;
			margin: 20px auto;
			margin-top: 0px;

		}
		.icon-box2{
			border: 1px solid #000000;
			height: 50px;
			width: 200px;
			margin: 20px auto;
	  background-color: #0283c9;


		}
		.icon-box .p{
			font-size: 30px;
			margin: 25px auto;
			color: #000000;
		}
		.counter-box p{
			font-size: 30px;
			text-align: center;
			margin-top: 28px;
		}
		.counter-box .counter{
			font-size: 30px;
		}
		.counter-box .top{
			font-size: 20px;
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
  margin-right: 10px;
}

.header-right {
  float: right;
}

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

.top{
  text-align: center;
  margin-top: 6px;
  background-color: #0283c9;
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
  .bottom{
    background-color: #0283c9 ;
  }
 .h3{
  margin-top: 5px;
 }


	</style>
</head>
<body>


      <div class="header">
       <a href="#default" class="logo">Madhya Pradesh Jal Nigam Maryadit</a>
         <div class="header-right">
           <a class="active" href="Logout.php">Logout</a>
           <a class="active" href="fetchdata.php">Show Data</a>
      </div>
        </div>

          <h2 align="center" style="background-color:#0283c9; margin-top: 20px;">ADMIN DASHBOARD</h2>



<div class="container counter-section">


<div class="col-md-12 counter-box">

<div style="border: 4px solid #03a9f4;">

<h2 style="font-size:4vw; text-align:center; background-color:#0283c9;">FUNDING AGENCY</h2>        
		<div class="row text-center">

		<div class="col-md-4 counter-box">
			<div class="icon-box2"><h3 class="top">NABARD</h3></div>
			<div class="icon-box"><p class="counter"><?php echo $num_rows7; ?></p></div>		
		</div>


		<div class="col-md-4 counter-box">
			<div class="icon-box2"><h3 class="top">NDB</h3></div>	
			<div class="icon-box"><p class="counter"><?php echo $num_rows8; ?></p></div>		
		</div>

		<div class="col-md-4 counter-box">
			<div class="icon-box2"><h3 class="top">STATE HEAD</h3></div>	
			<div class="icon-box"><p class="counter"><?php echo $num_rows9; ?></p></div>		
		</div>

		<div class="col-md-6 counter-box">
			<div class="icon-box2"><h3 class="top">MINING AREA SES</h3></div>	
			<div class="icon-box"><p class="counter"><?php echo $num_rows10; ?></p></div>		
		</div>

		<div class="col-md-6 counter-box">
			<div class="icon-box2"><h3 class="top">DISTRICT MINING</h3></div>	
			<div class="icon-box"><p class="counter"><?php echo $num_rows11; ?></p></div>		
		</div>
	</div>

    </div>

	<div class="row text-center">

		<div class="col-md-4 counter-box">
			<div class="icon-box2"><h3 class="top">Total PIU</h3></div>
			<div class="icon-box"><p class="counter"><?php echo $num_rows; ?></p></div>		
		</div>


		<div class="col-md-4 counter-box">
			<div class="icon-box2"><h3 class="top">ONGOING PROJECTS</h3></div>	
			<div class="icon-box"><p class="counter"><?php echo $num_rows1; ?></p></div>		
		</div>

		<div class="col-md-4 counter-box">
			<div class="icon-box2"><h3 class="top">COMPLETED PROJECTS</h3></div>	
			<div class="icon-box"><p class="counter"><?php echo $num_rows2; ?></p></div>		
		</div>
	</div>



	<div class="row text-center">
		<div class="col-md-4 counter-box"></div>

		<div class="col-md-4 counter-box">
			<div class="icon-box2"><h3 class="top">Total Projects</h3></div>	
			<div class="icon-box"><p class="counter"><?php echo $num_rows3; ?></p></div>		
		</div>

		<div class="col-md-4 counter-box"></div>

	</div>

	<div class="row text-center">
		
		<div class="col-md-4 counter-box">
			<div class="icon-box2"><h3 class="top">Total Villages Covered</h3></div>	
			<div class="icon-box"><p class="counter"><?php echo $num_rows4; ?></p></div>		
		</div>

		<div class="col-md-4 counter-box">
			<div class="icon-box2"><h3 class="top">Total Project Cost</h3></div>	
			<div class="icon-box"><p class="counter"><?php echo $num_rows5; ?></p></div>		
		</div>

		<div class="col-md-4 counter-box">
			<div class="icon-box2"><h3 class="top">Total Population Covered</h3></div>	
			<div class="icon-box"><p class="counter"><?php echo $num_rows6; ?></p></div>		
		</div>

	</div>

</div>
 <script src="assets/js/jquery.counterup.min.js"></script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

 <script>
 	
 	jQuery(document).ready(function( $ )
 	{
 		$('.counter').counterUp({
    	delay: 10,
    	time: 1000
		});
 	});
 </script>
</body>
</html>