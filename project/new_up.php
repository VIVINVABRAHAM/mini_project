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

	<link rel="stylesheet" type="text/css" href="new_up.css" />
	<title>Profile</title>
	
</head>

<body>

	<?php
     
          include 'log_header.php';
          ?>

	<div class="container">
		<div class="newss">
			<div class="ph">


				<?php
               $table='images';
               //$result=$mysqli->query(SELECT * From $table WHERE person_id='$id');
                $sql4=mysqli_query($con,"SELECT * From $table WHERE person_id='$id'") ;
               while ( $row4=mysqli_fetch_assoc($sql4)){
               //$row4=mysqli_fetch_assoc($sql4)
               //echo "<h3>{$row4['c_name']}</h3>";
               echo "<img src='{$row4['c_image']}' >";
               }



               ?>
			</div>
			<div class="tx">
			
			</div>


		</div>

		<div class="content">

			<div class="before">
				<div class="pro">PROFILE</div>
				<div class="right">
					<div id="table2">

						<table>

							<tr>
								<td>
									<div class="text1"><b>Personal Info</b> (Non-edit)</div>
								</td>

								<th>

								</th>
							</tr>
							<?php
                              require 'connect.php';
                              //$id=$_SESSION['id'];
                              $sql=mysqli_query($con,"SELECT * FROM register WHERE reg_id='$id'") ;
                              
                              while($row=mysqli_fetch_array($sql))
                              {
                         
                              ?>
							<tr>
								<td>
									<div class="text">Name</div>
								</td>
								<?php echo 
                                   "<td>".$row["reg_name"]."</td></tr>
                                        <tr>";
                                        ?>
								<td>
									<div class="text">Email-id</div>
								</td>
								<?php echo 
                                   "<td>".$row["log_email"]."</td></tr>
                                        <tr>";
                                        ?>
								<td>
									<div class="text"> Gender</div>
								</td>
								<?php echo 
                                   "<td>".$row["reg_gender"]."</td></tr>
                                        <tr>";
                                        ?>
								<td>
									<div class="text"> Date of Birth</div>
								</td>
								<?php echo 
                                        "<td>".$row["reg_dob"]."</td></tr>
                                        <tr>";
                                   ?><td>
									<div class="text">Phone Number</div>
								</td>
								<?php echo 
                                   "<td>".$row["reg_phone"]."</td></tr>
                                   <tr>";
                                   ?><td>
									<div class="text">District</div>
								</td>
								<?php echo 
                                   "<td>".$row["district"]."</td></tr>
                                        
                                        ";
                                        }
                                   ?>




						</table>
					</div>
				




					</div>

					<form name="form" method="POST" action="profile.php"
						onsubmit="return validation(this);">

						<div id="table">
							<table border=0>

								<tr>
									<td>
										<div class="text1"><b>Address<b></div>
									</td>
								</tr>

								<?php
                              
                              $sql2=mysqli_query($con,"SELECT * from address,register where register.reg_id=address.person_id and reg_id='$id'") ;
                              while($row2=mysqli_fetch_array($sql2))
                              {
                              
                              ?>

								<?php
                                        $house = $row2["house_name"];
                                        $street = $row2["street_name"];
                                        $place = $row2["place"];
                                        $post_office = $row2["post_office"];
                                        $pincode = $row2["pincode"];
                                        $taluk = $row2["taluk"];
                                        

                                        
                                   ?>
								<tr>
									<td>
										<div class="text">House No./House Name</div>
									</td>
									<td>
											<?php echo $house;?></td>
								</tr>
								<tr>

									<td>
										<div class="text">Street No./Street Name</div>
									</td>
									<td>
											<?php echo $street;?></td>
								</tr>
								<tr>
									<td>
										<div class="text">Place</div>
									</td>
									<td><?php echo $place;?></td>
								</tr>
								<tr>
									<td>
										<div class="text">Post Office</div>
									</td>
									<td><?php echo $post_office;?></td>
								</tr>
								<tr>
									<td>
										<div class="text">Pin Code</div>
									</td>
									<td>
											<?php echo $pincode;?></td>
								</tr>
								<tr>
									<td>
										<div class="text">Taluk</div>
									</td>
									<td><?php echo $taluk;?></td>
								</tr>
								<?php
                                        
                                        }
                                        ?>
							</table>
						</div>

						<div class="new">
							<table>
								<tr>
									<td>
									<div class="update">

										<a href=profile.php>	<input class="input" type=submit value=update></a>
										</div>
									</td>
								</tr>
							</table>

						</div>

					</form>
				</div>

			</div>

		</div>
	</div>




	<?php
include 'footer.php';

?>

</body>

</html>