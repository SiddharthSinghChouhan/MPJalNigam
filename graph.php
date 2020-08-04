<?php
include('config.php');

     $sql= "SELECT * FROM addinfo";
     $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>graph</title>

	<style type="text/css">
	table{
		margin-top: 10px;
		border:4px solid black;
		width: 100%;
		font-family: monospace;
		font-size: 15px;
		text-align: center;
		text-orientation: flex;

	}

	th{
		border: 3px solid black;
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
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  background-color: #0283c9 ;
  width:1520px;
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
  font-size: 50px;
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
}
	</style>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        
        var data = google.visualization.arrayToDataTable([
          ['projectname', {label: 'PhysicalProgress', type: 'number'}, {label: 'FinancialProgress', type: 'number'}],

          <?php 
if (mysqli_num_rows($result)>0) {

	while ($row=mysqli_fetch_array($result)) {
		
		echo "['".$row['projectname']."', '".$row['physicalprogress']."',['".$row['financialprogress']."']],";
	}
}
           ?>
        ]);

        var options = {
          title : 'Progress Graph',
          vAxis: {title: 'Percentage'},
          hAxis: {title: 'Project Name'},
          seriesType: 'bars',
          series: {6: {type: 'line'}}        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

  	<div class="header">
  		<a href="#default" class="logo">Madhya Pradesh Jal Nigam Maryadit</a>
  			<div class="header-right">
    		<a class="active" href="Logout.php">Logout</a>
  			</div>
	</div>
		
	<h2 align="center" style="background-color:#0283c9; width:1520px;" >Progress Graph</h2>
		

    <div id="chart_div" style="width: 1520px; height: 700px;"></div>
  </body>
</html>