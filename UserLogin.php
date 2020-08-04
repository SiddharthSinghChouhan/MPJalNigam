<?php

include('config.php');  
include('alert.php');
session_start();
    
$msg ="";
$username="";
$password="";
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql="SELECT `piu` FROM `user_login` WHERE `username`='$username' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);  
        if($result -> num_rows > 0){
        while($row = $result ->fetch_assoc()){
             $_SESSION["piu"] = $row["piu"];
            
            echo "<script>alert('You are Successfully Login to User Dashboard');document.location='dashboard.php'</script>";
        }  
    }
        else{  
            echo "<script>alert('Invalid Username or Password');document.location='user.html'</script>";
        }     

?>

