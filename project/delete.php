<?php
session_start();
ob_start();
require 'connect.php';
$pid=$_GET['pid'];

$id=$_SESSION['id'];



 $id=$_SESSION['id'];
 $pid=$_GET['pid'];

   


$up2="UPDATE product SET status=1 WHERE pro_id = '$pid'";
$up3="UPDATE demand SET status=1 WHERE pro_id = '$pid'";

if(mysqli_query($con,$up2) && mysqli_query($con,$up3))
{
               echo "profile updated successfully.<br />";
              header("location:index.php?id=$id");
}

               //echo "product updated successfully.<br />";




//echo $sql;

	
?>