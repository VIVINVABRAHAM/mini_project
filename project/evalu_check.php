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



   
  

$sql="INSERT INTO address (person_id,house_name,street_name,place,post_office,pincode,district)VALUES ('$id','$house_name', '$street_name', '$place','$post_office','$pincode','$district')";
 
    
if(mysqli_query($con,$sql))
{
               echo "profile saved successfully.<br />";
               header("location:eva_up_profile.php?id=$id");
}

               //echo "product updated successfully.<br />";




//echo $sql;
	
?>

