<?php 
require 'connect.php';

$p_id = $_GET['pid'];
$sql = mysqli_query($con,"SELECT * FROM `product_up` join product on product_up.person_id = product.person_id where product.pro_id='$p_id'");

 while($row = mysqli_fetch_assoc($sql)){ 
   echo $row['names'];
   echo $row['pro_year'];
   echo $row['pro_id'];
   echo $row['pro_color'];
   echo $row['names'];
 }
?>