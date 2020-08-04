<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no>
    <meta charset="utf-8">
    <style type="text/css">

* {box-sizing: border-box;}

body{
    margin: 0;
    padding: 0;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
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
  box-shadow: 0 5px 0 darkblue;
  color: white;
  margin-right: 20px;
}

.header-right a:hover{
  background-color: #1A237E;
}

.header-right a:active{
  box-shadow: none;
  top: 5px;
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

@media screen and (min-width: 800px) {
  .header a.logo{
    font-size: 40px;
  }
}
@media screen and (max-width: 600px){
  .header a.logo {
    font-size: 30px;
  }
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

<div>  
  <div>
  <h2 align="center" style="background-color:#0283c9">DASHBOARD</h2>
  </div>

    <?php 
    if (isset($_GET['msg']))  {
      echo $_GET['msg'];
    }
  ?>

  <div class="bt" style="text-orientation: flex">


    <div class="dashboard_button" align="center" style="margin-top:110px;">
      <a class="waves-effect waves-light btn-large" href="Addinfo.php"><i class="material-icons left">add_circle</i>ADD INFO</a>
	    <a class="waves-effect waves-light btn-large" href="userview.php"><i class="material-icons left">cloud_upload</i>USER VIEW</a>
    </div>

  </div>

</div>
</body>
</html>