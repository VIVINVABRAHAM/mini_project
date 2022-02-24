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
			<p class="scroll">
	<div class="content">



		<div class="prod_details">
			<div class="det"> Product Details</div>
			<table border=1>
				<tr>
					<th>Sl.No</th>
					<th>Date</th>

					<th>Available Product</th>
					<th>Product Image</th>
					
					<th>Brand</th>

					<th>Year of Manufacture</th>

					<th>Product Value</th>
					<th>Demand Product</th>
				
					<th>Brand</th>

					<th>Period of Manufacture (from)</th>

					


				</tr>
				<?php
			require 'connect.php';
			
			$sql=mysqli_query($con,"SELECT p.pro_date,p.pro_name,p.image_dir,p.pro_brand,p.pro_year,p.pro_value,d.dem_name,d.dem_brand,d.dem_year from product p, demand d where p.pro_id=d.pro_id and p.person_id='$id' and p.status=d.status and p.status=0");
			$count=0;
			while($row=mysqli_fetch_assoc($sql)){
			$img = $row['image_dir'];
			?>
				<tr>
				<td><?php echo ++$count; ?></td>
					<td><?php  echo $row["pro_date"];?></td>
					<td><?php  echo $row["pro_name"];?></td>
					<td><?php echo"<img src='{$img}'>";?></td>
					
					<td><?php echo $row["pro_brand"];?></td>
					<td><?php echo $row["pro_year"];?></td>
					<td><?php echo $row["pro_value"];?></td>
					<td><?php  echo $row["dem_name"];?></td>
					
					<td><?php echo $row["dem_brand"];?></td>
					<td><?php echo $row["dem_year"];?></td>

				


				</tr>
				<?php
          }

			echo "</table>";
			echo $row;
			
			
			$con->close();
			?>
		</div>
		
		

	</div>
	</p>






	<?php
include 'footer.php';

?>

</body>

</html>