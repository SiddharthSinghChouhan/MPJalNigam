
<?php

include('config.php'); 
include('function.php'); 
session_start();

$username="";
$password="";

    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql="SELECT `id` FROM `admin_login` WHERE `username`='$username' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);  
       if($result -> num_rows > 0){
        while($row = $result ->fetch_assoc()){
             $_SESSION["id"] = $row["id"];
            echo "<script>alert('You are Successfully Login to Admin Dashboard');document.location='admin_dashboard.php'</script>";
        }  
    }
        else{  
            echo "<script>alert('Invalid Username or Password');document.location='admin.html'</script>";
        }     
?>

