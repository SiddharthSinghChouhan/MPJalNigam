<?php
include("config.php");
if (isset($_GET["id"])) {

	$id=$_GET['id'];

	$sql=" DELETE FROM `user_login` WHERE `id`=$id";
      if (mysqli_query($conn,$sql)) {
            echo "<script>alert('Record Deleted Sucessfully');document.location='showuser.php'</script>";
      }else{
               echo "<script>alert('Error in Deleting Record');document.location='showuser.php'</script>";
   }
}
?>