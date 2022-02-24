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
			if (validation.find("[name='file']").val() == '') {
				alert('Upload your Image');
				return false;
			}

			if (validation.find("[name='house_name']").val() == '') {
				alert('Upload the Image and Enter Your House name');
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
			if (validation.find("[name='district']").val() == '') {
				alert('Select Your District');
				return false;
			}

			alert('Details updated sucessfully');

			$("#myform")[1].reset();
		});
	});
	</script>

</head>

<body>
	<div class="nav">

		<?php
     
          include 'log_header.php';
          ?>
	</div>



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
				<form action="" method="post" enctype="multipart/form-data">
					<div class="cho">
						<input accept="image/*" type="file" name="file" id="fileToUpload">

					</div>
					<div class="continues">
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
                                        $district = $row2["district"];
                                        

                                        
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
										<div class="text">District</div>
									</td>
									<td>

										<select id=district name=district>
											<option value=" <?php echo $district;?>">
												<div class="text">Select</div>
											</option>
											<option value="Thiruvananthapuram " <?php

                                                       if($district=='Thiruvananthapuram ')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Thiruvananthapuram</div>
											</option>
											<option value="Kollam " <?php

                                                       if($district=='Kollam ')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Kollam</div>
											</option>

											<option value="Pathanamthitta" <?php

                                                       if($district=='Pathanamthitta ')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Pathanamthitta</div>
											</option>
											<option value="Alappuzha" <?php

                                                       if($district=='Alappuzha')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Alappuzha</div>
											</option>
											<option value="Kottayam" <?php

                                                       if($district=='Kottayam')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Kottayam</div>
											</option>
											<option value="Idukki" <?php

                                                       if($district=='Idukki')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Idukki</div>
											</option>
											<option value="Ernakulam" <?php

                                                       if($district=='Ernakulam')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Ernakulam</div>
											</option>
											<option value="Thrissur" <?php

                                                       if($district=='Thrissur')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Thrissur</div>
											</option>
											<option value="Palakkad" <?php

                                                       if($district=='Palakkad')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Palakkad</div>
											</option>
											<option value="Malappuram" <?php

                                                       if($district=='Malappuram')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Malappuram</div>
											</option>
											<option value="Kozhikkode" <?php

                                                       if($district=='Kozhikkode')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Kozhikkode</div>
											</option>
											<option value="Wayanad" <?php

                                                       if($district=='Wayanad')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Wayanad</div>
											</option>
											<option value="Kannur" <?php

                                                       if($district=='Kannur')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Kannur</div>
											</option>
											<option value="Kasargod" <?php

                                                       if($district=='Kasargod')
                                                       echo "selected";

                                                       ?>>
												<div class="text">Kasargod</div>
											</option>

										</select>
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