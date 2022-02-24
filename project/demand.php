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
		<div class="det"> Demanded Product Details</div>
		<table border=1>
			<tr>
				<th>Sl.No</th>
				<th>Product</th>
				<th>Category</th>
				<th>Brand</th>
				<th>Color</th>
				<th>Period of Manufacture (from)</th>
				<th>Specifiactions</th>
				
				<th>Action</th>
				
				
			</tr>
			<?php
			require 'connect.php';
			
			$sql=mysqli_query($con,"SELECT * from demand where person_id='$id' and status=0");

			$count=0;
			
			while($row=mysqli_fetch_assoc($sql)){?>
			
			<tr>
			<td><?php echo ++$count; ?></td>
			<td><?php  echo $row["dem_name"];?></td>
			<td><?php echo$row["dem_category"];?></td>
			<td><?php echo $row["dem_brand"];?></td>
			<td><?php echo $row["dem_color"];?></td>
			<td><?php echo $row["dem_year"];?></td>
			<td><?php echo $row["dem_spec"];?></td>
			<td><input type=button onClick="location='dem.php?pid=<?php echo $row['pro_id'];?>'"value='Update'>
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