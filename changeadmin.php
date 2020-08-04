<?php
include('config.php');

$username="";
$password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = test_input($_POST["username"]);
            $password = test_input($_POST["password"]);

            $sql = "UPDATE `admin_login` SET `username`='$username',`password`='$password'";

			if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Admin Credentials Successfully Change');document.location='fetchdata.php'</script>";
				} else {
    				            echo "<script>alert('Error in Changing Credentials');document.location='changeadmin.php'</script>"; . $conn->error;
						}

				$conn->close();
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
?>

<html>
<head>
    <title> Change Admin Credentials </title>
    <meta charset="utf-8">
    <style type="text/css">
      
      body{
    margin: 0;
    padding: 0;
    background-size: cover;
    background-position: center;
    font-family: Times, Times New Roman, serif;
}
.login-box{
    width: 350px;
    height: 420px;
    background: rgba(0, 0, 0, 0.8);
    color: #fff;
    top: 60%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
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
  font-size: 45px;
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
      </div>
        </div>


    <div class="login-box">
    <img src="img/avatar.png" class="avatar">
        <h1>Change Admin Credentials</h1>
            <form action="changeadmin.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter New Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter New Password">
            <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </body>
</html>


