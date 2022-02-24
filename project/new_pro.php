<?php
session_start();
ob_start();
$id=$_SESSION['id'];
//echo $id;
require 'connect.php';
if(empty($_SESSION['email']))
{
header("location:index.php?err=session not expired...");
}
//echo $id;
if(isset($_POST['submit']))
{
   // $name=$_POST["file"];
   echo $id;
    $id=$_SESSION['id'];
    $fileName=$_FILES["file"]["name"];
    $targetDir="uploads/";
    $targetFilePath = $targetDir . $fileName; 
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
    //$sql1="UPDATE images SET (person_id,c_name,c_image) VALUES  ('$id','$fileName','$targetFilePath')";
     $up3="UPDATE images SET c_name='$fileName',c_image='$targetFilePath' WHERE person_id='$id'";
    //INSERT INTO images(person_id,c_name,c_image) VALUES (345,'dgf','gfdsw');
    mysqli_query($con,$up3);
    

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" type="text/css" href="pro.css" />
	<title>Profile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$("form").submit(function() {

			var validation = $(this); // Select Form
			//var log_type = $("#type");
			if (validation.find("[name='house_name']").val() == '') {
				alert('Enter Your House name');
				return false;
			}

			if (validation.find("[name='street_name']").val() == '') {
				alert('Enter  a Valid Street Name');
				return false;
			}
			// if($('input[type=radio][name=reg_gender]:checked').length == 0)
			// {
			//    alert("Select your gender");
			//    return false;
			// }
			//  else
			// {
			//    // alert("radio button selected value: ");
			// }      

			if (validation.find("[name='place']").val() == '') {
				alert('Enter your place');
				return false;
			}
			if (validation.find("[name='post_office']").val() == '') {
				alert('Enter your post office');
				return false;
			}
			if (validation.find("[name='pincode']").val() == '') {
				alert('Enter a your pincode');
				return false;
			}
			if (validation.find("[name='taluk']").val() == '') {
				alert('Enter your taluk');
				return false;
			}
			
			alert('Details updated sucessfully');

			$("#myform")[1].reset();
		});
	});
	</script>

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
				<form action="profile.php" method="post" enctype="multipart/form-data">
					<div class="cho">
						<input accept="image/*" type="file" name="file" id="fileToUpload">

					</div>
					<div class="continue">
						<div class="cho_up">
							<input type="submit" value="Upload Photo" name="submit">
						</div>
					</div>
				</form>
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
					
					<form name="form" method="POST" action="profile_checkup.php"
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
									<td><input class="input" type=text name=house_name placeholder=""
											value="<?php echo $house;?>"></td>
								</tr>
								<tr>

									<td>
										<div class="text">Street No./Street Name</div>
									</td>
									<td><input class="input" type=text name=street_name placeholder=""
											value="<?php echo $street;?>"></td>
								</tr>
								<tr>
									<td>
										<div class="text">Place</div>
									</td>
									<td><input class="input" type=text name=place placeholder=""
											value="<?php echo $place;?>"></td>
								</tr>
								<tr>
									<td>
										<div class="text">Post Office</div>
									</td>
									<td><input class="input" type=text name=post_office placeholder=""
											value="<?php echo $post_office;?>"></td>
								</tr>
								<tr>
									<td>
										<div class="text">Pin Code</div>
									</td>
									<td><input class="input" type=text name=pincode placeholder=""
											value="<?php echo $pincode;?>"></td>
								</tr>
								<tr>
									<td>
										<div class="text">Taluk</div>
									</td>
									<td><input class="input" type=text name=taluk placeholder=""
											value="<?php echo $taluk;?>"></td>
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
										<div class="reset">
											<input class="input" type=button value="Reset"
												onclick="this.form.reset();">
										</div>
									</td>
									<td>

										<div class="continue">
											<input class="input" type=submit value=Save>
										</div>

									</td>
									<td>
										<div class="cancel">
											<input class="input" type=button value=Cancel
												onclick="pageRedirect()">
											<script>
											function pageRedirect() {
												window.location.href = "profile.php";
											}
											</script>

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