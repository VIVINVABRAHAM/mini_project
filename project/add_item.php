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


//product
 $id=$_SESSION['id'];

$date = date('Y-m-d H:i:s');
//.date("d M Y")


$pro_name=$_POST['pro_name'];
$pro_category = $_POST['pro_category'];  
$pro_brand = $_POST['pro_brand']; 
      $pro_color = $_POST['pro_color']; 
      $pro_year = $_POST['pro_year'];
      $pro_spec = $_POST['pro_spec']; 
	 $pro_value = $_POST['pro_value'];

       //demand
    $id=$_SESSION['id'];
    $fileName=$_FILES["file"]["name"];
    $targetDir="products_up/";
    $targetFilePath = $targetDir . $fileName; 
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
    //$sql3="INSERT INTO product_up(person_id,names,image_dir) VALUES  ('$id','$fileName','$targetFilePath')";
    //INSERT INTO images(person_id,c_name,c_image) VALUES (345,'dgf','gfdsw');
    //mysqli_query($con,$sql3);
   
   
  


 $sql2="INSERT INTO product (person_id,pro_name,pro_category,pro_brand,pro_color,pro_year,pro_spec,pro_value,names,image_dir,pro_date)VALUES ( '$id','$pro_name', '$pro_category', '$pro_brand','$pro_color','$pro_year','$pro_spec','$pro_value','$fileName','$targetFilePath','$date')";
  
    
if( (mysqli_query($con,$sql2)) )
{
$pid=mysqli_insert_id($con);
$_SESSION["pro_id"] = $pid;
               echo "profile saved successfully.<br />";
			if($pro_value<10000){

               header("location:demanded.php?pid=$pid");
			}
			else
			{

               header("location:highdem.php?pid=$pid");
			}

}

               //echo "product updated successfully.<br />";

}




?>


<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" type="text/css" href="add_item.css" />
	<title>Profile</title>

</head>

<body>

	<?php
     
         // include 'log_header.php';
          ?>

	<title>Profile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$("form").submit(function() {

			var validation = $(this); // Select Form
			//var log_type = $("#type");

				if (validation.find("[name='pro_category']").val() == '') {
				alert('Select your product category');
				return false;
			}

			if (validation.find("[name='pro_name']").val() == '') {
				alert('Select Your product');
				return false;
			}

		
			if (validation.find("[name='pro_brand']").val() == '') {
				alert('Enter your product brand');
				return false;
			}
			if (validation.find("[name='pro_color']").val() == '') {
				alert('Enter color');
				return false;
			}
			if (validation.find("[name='pro_year']").val() == '') {
				alert('Enter manufacture year');
				return false;
			}
			if (validation.find("[name='pro_spec']").val() == '') {
				alert('Enter specification');
				return false;
			}
			if (validation.find("[name='pro_value']").val() == '') {
				alert('Enter Expected value');
				return false;
			}
			
			if (validation.find("[name='file']").val() == '') {
				alert('Upload Product Image');
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
					<div class="pro">ADD PRODUCT</div>

					<div class="right">

						<form name="form" method="POST" action="" enctype="multipart/form-data"
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
											<select id=cate name=pro_category>
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
										<select id=cate name=pro_name>
											<option value="">
												<div class="text">Select</div>
											</option>

											<option value="Fridge">
												<div class="text">Fridge</div>
											</option>
											<option value="Washing Machine">
												<div class="text">Washing Machine</div>
											</option>
											<option value="Smart Phone">
												<div class="text">Smart Phone</div>
											</option>
											<option value="Smart Watch">
												<div class="text">Smart Watch</div>
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
										<td><input class="input" type=text name=pro_brand placeholder=""
												value="">
										</td>
									</tr>


									<tr>
										<td>
											<div class="text">Color</div>
										</td>
										<td><input class="input" type=text name=pro_color placeholder=""
												value="">
										</td>
									</tr>

									<tr>
										<td>
											<div class="text">Year of Manufacture</div>
										</td>
										<td> <select id=cate name=pro_year>
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
										<td><input class="input" type=text name=pro_spec placeholder=""
												value="">
										</td>
									</tr>
									<tr>
										<td>
											<div class="text">Market Value(In Rs.)</div>
										</td>
										<td><input class="input" type=text name=pro_value placeholder=""
												value="">
										</td>
									</tr>
									<tr>
										<td>
											<div class="text">Upload Product Image</div>
										</td>
										<td> <input accept="image/*" type="file" name="file"
												id="fileToUpload">
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
												<input class="input" type=submit value=Save name="sub">
											</div>

										</td>
										<td>
											<div class="cancel">
												<input class="input" type=button value=Cancel
													onclick="pageRedirect()">
												<script>
												function pageRedirect() {
													window.location.href = "add_item.php";
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