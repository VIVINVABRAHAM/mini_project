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

<?php

if(isset($_POST['sub']))
{
   //demand
       $id=$_SESSION['id'];
$pro_id=$_GET['pid'];

$dem_name=$_POST['dem_name'];
$dem_category = $_POST['dem_category'];
  $dem_brand = $_POST['dem_brand']; 
      $dem_color = $_POST['dem_color']; 
      $dem_year = $_POST['dem_year'];
      $dem_spec = $_POST['dem_spec']; 
	
   
  

  $sql3="INSERT INTO demand (person_id,pro_id,dem_name,dem_category,dem_brand,dem_color,dem_year,dem_spec)VALUES ( '$id','$pro_id','$dem_name', '$dem_category', '$dem_brand','$dem_color','$dem_year','$dem_spec')";

    
if(mysqli_query($con,$sql3))
{
               echo "profile saved successfully.<br />";
               header("location:index.php?id=$id");
}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" type="text/css" href="demanded.css" />
	<title>Profile</title>
	
</head>

<body>

	<?php
     
          include 'log_header.php';
          ?>

		<title>Profile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$("form").submit(function() {

			var validation = $(this); // Select Form
			//var log_type = $("#type");
		if (validation.find("[name='dem_category']").val() == '') {
				alert('Select your product category');
				return false;
			}
			if (validation.find("[name='dem_name']").val() == '') {
				alert('Select product s');
				return false;
			}

			
			
			if (validation.find("[name='dem_brand']").val() == '') {
				alert('Enter your product brand');
				return false;
			}
			if (validation.find("[name='dem_color']").val() == '') {
				alert('Enter color');
				return false;
			}
			if (validation.find("[name='dem_year']").val() == '') {
				alert('Enter manufacture year');
				return false;
			}
			if (validation.find("[name='dem_spec']").val() == '') {
				alert('Enter specification');
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
		
		<div class="content">

			<div class="before">
			<div class="pro">ADD DEMANDED PRODUCT</div>
				
				<div class="right">
					
					

					<form name="form" method="POST" action=""
						onsubmit="return validation(this);">

						
						<div id="product">
							<table>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>
										<div class="text">Category</div>
									</td>
									<td>
										<select id=cate name=dem_category>
											<option value="">
												<div class="text">Select</div>
											</option>

											<option value="House Hold">
												<div class="text">House Hold</div>
											</option>
											<option value="Personal">
												<div class="text">Personal</div>
											</option>
										</select>
									</td>

								</tr>

								<tr>
									<td>
										<div class="text">Product Name</div>
									</td>
										<td>
										<select id=cate name=dem_name>
											<option value="">
												<div class="text">Select</div>
											</option>

											<option value="Fan">
												<div class="text">Fan</div>
											</option>
											<option value="Mixie">
												<div class="text">Mixie</div>
											</option>
											<option value="Grainder">
												<div class="text">Grainder</div>
											</option>
											<option value="Watch">
												<div class="text">Watch</div>
											</option>
											<option value="Bicycle">
												<div class="text">Bicycle</div>
											</option>
										</select>
									</td>
								</tr>
								
								<tr>
									<td>
										<div class="text">Brand</div>
									</td>
									<td><input class="input" type=text name=dem_brand placeholder="" value="">
									</td>
								</tr>


								<tr>
									<td>
										<div class="text">Color</div>
									</td>
									<td><input class="input" type=text name=dem_color placeholder="" value="">
									</td>
								</tr>

								<tr>
									<td>
										<div class="text">Period of Manufacture</div>
									</td>
									<td> <select id=cate name=dem_year>
											<option value="">
												<div class="text">Select</div>
											</option>

											<option value="2022">


												<div class="text">2022</div>
											</option>
											<option value="2021">
												<div class="text">2021</div>
											</option>

											<option value="2020">
												<div class="text">2020</div>
											</option>
											<option value="2019">
												<div class="text">2019</div>
											</option>

											<option value="2018">
												<div class="text">2018</div>
											</option>
											<option value="2017">
												<div class="text">2017</div>
											</option>

											<option value="2016">
												<div class="text">2016</div>
											</option>
											<option value="2015">
												<div class="text">2015</div>
											</option>

											<option value="2014">
												<div class="text">2014</div>
											</option>
											<option value="2013">
												<div class="text">2013</div>
											</option>

											<option value="2012">
												<div class="text">2012</div>
											</option>
											<option value="2011">
												<div class="text">2011</div>
											</option>

											<option value="2010">
												<div class="text">2010</div>
											</option>
											<option value="below 2009">
												<div class="text">2009</div>
											</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<div class="text">Specifiactions</div>
									</td>
									<td><input class="input" type=text name=dem_spec placeholder="" value="">
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
									<input class="input" type=submit value=Submit name="sub">
								</div>

							</td>
							<td>
								<div class="cancel">
									<input class="input" type=button value=Cancel onclick="pageRedirect()">
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