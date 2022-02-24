<?php
session_start();
ob_start();
require 'connect.php';

 $id=$_SESSION['id'];
$house_name = $_POST['house_name'];  
      $street_name = $_POST['street_name']; 
      $place = $_POST['place'];
      $post_office = $_POST['post_office']; 
	 $pincode = $_POST['pincode'];
      $district = $_POST['district'];


 $up3="UPDATE address SET house_name='$house_name',street_name='$street_name',place='$place',pincode='$pincode',district='$district',post_office='$post_office' WHERE person_id='$id'";
if( (mysqli_query($con,$up3)))
{
               echo "profile updated successfully.<br />";
              header("location:index.php?id=$id");
}

               //echo "product updated successfully.<br />";




//echo $sql;
	
?>

