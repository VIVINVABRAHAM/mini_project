<?php
session_start();
ob_start();
require 'connect.php';
$pid=$_GET['pid'];

//  $id=$_SESSION['id'];
// $house_name = $_POST['house_name'];  
//       $street_name = $_POST['street_name']; 
//       $place = $_POST['place'];
//       $post_office = $_POST['post_office']; 
// 	 $pincode = $_POST['pincode'];
//       $taluk = $_POST['taluk'];

//product
 $id=$_SESSION['id'];
 $pid=$_GET['pid'];
$pro_name=$_POST['pro_name'];
 $pro_category = $_POST['pro_category']; 
 $pro_brand = $_POST['pro_brand'];  
 
      $pro_color = $_POST['pro_color']; 
     $pro_year = $_POST['pro_year'];
      $pro_spec = $_POST['pro_spec']; 
	 $pro_value = $_POST['pro_value'];
	

//        //demand
//        $id=$_SESSION['id'];
// $dem_name=$_POST['dem_name'];
// $dem_category = $_POST['dem_category'];
  
//       $dem_color = $_POST['dem_color']; 
//       $dem_year = $_POST['dem_year'];
//       $dem_spec = $_POST['dem_spec']; 
// 	 $dem_value = $_POST['dem_value'];
   
  

//$sql="INSERT INTO address (person_id,house_name,street_name,place,post_office,pincode,district)VALUES ('$id','$house_name', '$street_name', '$place','$post_office','$pincode','$district')";
//$up1="UPDATE address SET house_name = '$house_name', street_name = '$street_name',place='$place',post_office='$post_office',pincode='$pincode',district='$district' WHERE reg_id = $id";
$up2="UPDATE product SET pro_name = '$pro_name',pro_category='$pro_category',pro_brand='$pro_brand',pro_color='$pro_color',pro_color='$pro_color',pro_spec='$pro_spec',pro_value='$pro_value' WHERE pro_id = $pid";
//$up3="UPDATE demand SET dem_name = '$dem_name', dem_category = '$dem_category',dem_color='$dem_color',dem_year='$dem_year',dem_spec='$dem_spec',dem_value='$dem_value' WHERE person_id = $id";
 //$up3="UPDATE address,product,demand SET address.house_name='$house_name',address.street_name='$street_name',address.place='$place',address.pincode='$pincode',address.taluk='$taluk',address.post_office='$post_office',product.pro_name='$pro_name',product.pro_category='$pro_category',product.pro_color='$pro_color',product.pro_year='$pro_year',product.pro_spec='$pro_spec',product.pro_value='$pro_value',demand.dem_name='$dem_name',demand.dem_category='$dem_category',demand.dem_color='$dem_color',demand.dem_year='$dem_year',demand.dem_spec='$dem_spec',demand.dem_value='$dem_value' WHERE address.person_id=product.person_id and demand.person_id=product.person_id and address.person_id='$id'";
if( (mysqli_query($con,$up2)))
{
               echo "profile updated successfully.<br />";
              header("location:index.php?id=$id");
}

               //echo "product updated successfully.<br />";




//echo $sql;
	
?>

