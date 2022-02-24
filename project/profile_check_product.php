<?php
session_start();
ob_start();
require 'connect.php';

if(isset($_POST['sub']))
{


//product
 $id=$_SESSION['id'];
$pro_name=$_POST['pro_name'];
$pro_category = $_POST['pro_category'];  
$pro_brand = $_POST['pro_brand']; 
      $pro_color = $_POST['pro_color']; 
      $pro_year = $_POST['pro_year'];
      $pro_spec = $_POST['pro_spec']; 
	 $pro_value = $_POST['pro_value'];

       //demand
    $id=$_SESSION['id'];
    $fileName=$_FILES["file"]["name"];
    $targetDir="products_up/";
    $targetFilePath = $targetDir . $fileName; 
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
    //$sql3="INSERT INTO product_up(person_id,names,image_dir) VALUES  ('$id','$fileName','$targetFilePath')";
    //INSERT INTO images(person_id,c_name,c_image) VALUES (345,'dgf','gfdsw');
    //mysqli_query($con,$sql3);
   
   
  


 $sql2="INSERT INTO product (person_id,pro_name,pro_category,pro_brand,pro_color,pro_year,pro_spec,pro_value,names,image_dir)VALUES ( '$id','$pro_name', '$pro_category', '$pro_brand','$pro_color','$pro_year','$pro_spec','$pro_value','$fileName','$targetFilePath')";
  
    
if( (mysqli_query($con,$sql2)) )
{
               echo "profile saved successfully.<br />";
               //header("location:demanded.php?id=$id");
}

               //echo "product updated successfully.<br />";

}


//echo $sql;
	
?>

