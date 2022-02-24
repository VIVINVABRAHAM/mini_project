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
    $sql1="INSERT INTO images(person_id,c_name,c_image) VALUES  ('$id','$fileName','$targetFilePath')";
    //INSERT INTO images(person_id,c_name,c_image) VALUES (345,'dgf','gfdsw');
    mysqli_query($con,$sql1);
    

}

?>
<?php
if(isset($_POST['sub']))
{
   // $name=$_POST["file"];
   echo $id;
    $id=$_SESSION['id'];
    $fileName=$_FILES["file"]["name"];
    $targetDir="products_up/";
    $targetFilePath = $targetDir . $fileName; 
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
    $sql2="INSERT INTO product_up(person_id,names,image_dir) VALUES  ('$id','$fileName','$targetFilePath')";
    //INSERT INTO images(person_id,c_name,c_image) VALUES (345,'dgf','gfdsw');
    mysqli_query($con,$sql2);
    

}




?>

<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" type="text/css" href="login_profile.css" />
	<title>Profile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$("form").submit(function() {

			var validation = $(this); // Select Form
			//var log_type = $("#type");

			if (validation.find("[name='file']").val() == '') {
				alert('Upload Your Photo');
				return false;
			}


			

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
			if (validation.find("[name='district']").val() == '') {
				alert('select your district');
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
				<form action="login_profile.php" method="post" enctype="multipart/form-data">
					<div class="cho">
						<input accept="image/*" type="file" name=file id="fileToUpload">

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
                                   
                                        }
                                   ?>




						</table>
					</div>

					<form name="form" method="POST" action="profile_check.php" onsubmit="return validation(this);">

						<div id="table">
							<table border=0>

								<tr>
									<td>
										<div class="text1"><b>Address<b></div>
									</td>
								</tr>


								<tr>
									<td>
										<div class="text">House No./House Name</div>
									</td>
									<td><input class="input" type=text name=house_name placeholder="" value="">
									</td>
								</tr>
								<tr>

									<td>
										<div class="text">Street No./Street Name</div>
									</td>
									<td><input class="input" type=text name=street_name placeholder=""
											value=""></td>
								</tr>
								<tr>
									<td>
										<div class="text">Place</div>
									</td>
									<td><input class="input" type=text name=place placeholder="" value=""></td>
								</tr>
								<tr>
									<td>
										<div class="text">Post Office</div>
									</td>
									<td><input class="input" type=text name=post_office placeholder=""
											value=""></td>
								</tr>
								<tr>
									<td>
										<div class="text">Pin Code</div>
									</td>
									<td><input class="input" type=text name=pincode placeholder="" value="">
									</td>
								</tr>
								<tr>
									<td>
										<div class="text">District</div>
									</td>
									<td>
								
						<div class="inpute">
							<select id=district name=district>
								<option value=" ">Select</option>
								<option value="Thiruvananthapuram ">Thiruvananthapuram</option>
								<option value="KOLLAM ">Kollam</option>
								<option value="Pathanamthitta ">Pathanamthitta</option>
								<option value="Alappuzha ">Alappuzha</option>
								<option value="Kottayam ">Kottayam</option>
								<option value="Idukki ">Idukki</option>
								<option value="Ernakulam ">Ernakulam</option>
								<option value="Thrissur ">Thrissur</option>
								<option value="Palakkad ">Palakkad</option>
								<option value="Malappuram ">Malappuram</option>
								<option value="Kozhikkode ">Kozhikkode</option>
								<option value="Wayanad ">Wayanad</option>
								<option value="Kannur ">Kannur</option>
								<option value="Kasargod ">Kasargod</option>
							</select>
					</td>
								</tr>

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