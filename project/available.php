<?php
session_start();
ob_start();
$id=$_SESSION['id'];
//echo $id;
require 'connect.php';

if(empty($_SESSION['email']))
{
//header("location:index.php?err=session not expired...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" type="text/css" href="available.css" />
	<title>Profile</title>

</head>

<body>

	<?php
     
          include 'log_header.php';
          ?>

	
	<div class="prod_details">
		<div class="det"> Available Products Details</div>
		<table border=1>
			<tr>

			<th>Sl.No</th>
				
				<th>Product</th>
				<th>Image</th>
				<th>Category</th>
				<th>Brand</th>
				<th>Color</th>
				<th>Year of Manufacture</th>
				<th>Specifiactions</th>
				<th>Value</th>
				<th>Action</th>
				
			</tr>
			<?php
			require 'connect.php';
			
			$sql=mysqli_query($con,"SELECT * from product where person_id='$id' and status=0");
			$count=0;

			while($row=mysqli_fetch_assoc($sql)){
			$img = $row['image_dir'];
			?>
			<tr>
			<td><?php echo ++$count; ?></td>
			 <td><?php  echo $row["pro_name"];?></td>
			<td><?php echo"<img src='{$img}'>";?></td>
			<td><?php echo $row["pro_category"];?></td>
               <td><?php echo $row["pro_brand"];?></td>
               <td><?php echo $row["pro_color"];?></td>
               <td><?php echo $row["pro_year"];?></td>
               <td><?php echo $row["pro_spec"];?></td>
               <td><?php echo $row["pro_value"];?></td>
		   <td><input type=button onClick="location='prod.php?pid=<?php echo $row['pro_id'];?>'"value='Update'>
		   <input type=button onClick="location='delete.php?pid=<?php echo $row['pro_id'];?>'"value='Delete'>
               </td>
               </tr>
               <?php
          }

			echo "</table>";
			echo $row;
			
			
			$con->close();
			?>
			</table>


			
	






	</div>






	<?php
include 'footer.php';

?>

</body>

</html>