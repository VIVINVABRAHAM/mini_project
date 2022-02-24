<?php
session_start();
ob_start();

require 'connect.php';

 


       //demand
       $id=$_SESSION['id'];
$pro_id=$_GET['pid'];

$dem_name=$_POST['dem_name'];
$dem_category = $_POST['dem_category'];
  $dem_brand = $_POST['dem_brand']; 
      $dem_color = $_POST['dem_color']; 
      $dem_year = $_POST['dem_year'];
      $dem_spec = $_POST['dem_spec']; 
	 $dem_value = $_POST['dem_value'];
   
  

  $sql3="INSERT INTO demand (person_id,pro_id,dem_name,dem_category,dem_brand,dem_color,dem_year,dem_spec,dem_value)VALUES ( '$id','$pro_id','$dem_name', '$dem_category', '$dem_brand','$dem_color','$dem_year','$dem_spec','$dem_value')";

    
if(mysqli_query($con,$sql3))
{
               echo "profile saved successfully.<br />";
              // header("location:index.php?id=$id");
}

               //echo "product updated successfully.<br />";




//echo $sql;
	
?>

