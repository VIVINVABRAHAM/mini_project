<?php
session_start();
ob_start();
$pid=$_GET['pid'];

$id=$_SESSION['id'];
//echo $id;
require 'connect.php';
if(empty($_SESSION['email']))
{
//header("location:index.php?err=session not expired...");
}
?>
<?php
session_start();
ob_start();
require 'connect.php';
$pid=$_GET['pid'];
if(isset($_POST['subm']))
{

 $id=$_SESSION['id'];
 $pid=$_GET['pid'];
$pro_name=$_POST['pro_name'];
 $pro_category = $_POST['pro_category']; 
 $pro_brand = $_POST['pro_brand'];  
 
      $pro_color = $_POST['pro_color']; 
     $pro_year = $_POST['pro_year'];
      $pro_spec = $_POST['pro_spec']; 
	 $pro_value = $_POST['pro_value'];
    $fileName=$_FILES["file"]["name"];

$targetFilePath=$img;
if($fileName!="")
{

    $targetDir="products_up/";
    $targetFilePath = $targetDir . $fileName; 
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
}

$up2="UPDATE product SET pro_name = '$pro_name',pro_category='$pro_category',pro_brand='$pro_brand',pro_color='$pro_color',pro_year='$pro_year',pro_spec='$pro_spec',pro_value='$pro_value' WHERE pro_id = '$pid'";

if( (mysqli_query($con,$up2)))
{
               echo "profile updated successfully.<br />";
              header("location:index.php?id=$id");
}

               //echo "product updated successfully.<br />";




//echo $sql;
}
	
?>



<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" type="text/css" href="prod.css" />
	<title>Profile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$("form").submit(function() {

			var validation = $(this); // Select Form
			//var log_type = $("#type");

			if (validation.find("[name='file']").val() == '') {
				alert('Upload Product Image');
				return false;
			}

			if (validation.find("[name='pro_name']").val() == '') {
				alert('Select Your product');
				return false;
			}

			if (validation.find("[name='pro_category']").val() == '') {
				alert('Select your product category');
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
	<div class="before">
		<div class="pro">UPDATE AVAILABLE PRODUCT </div>

		<div class="container">
			<div class="prod_img">
				<div class="text1"><b>Product Image</b></div>
				<div class="prodi">



					<?php
                                              $table='product';
                                             //$result=$mysqli->query(SELECT * From $table WHERE person_id='$id');
                                              $sql5=mysqli_query($con,"SELECT * From $table WHERE pro_id='$pid'") ;
                                                  while ( $row5=mysqli_fetch_assoc($sql5)){
										$img=$row5['image_dir'];
                                             //$row4=mysqli_fetch_assoc($sql4)
                                             //echo "<h3>{$row4['c_name']}</h3>";
                                              echo "<img src='{$row5['image_dir']}'>";
                                              }




                                             ?>
				</div>
			</div>



			<form name="form" method="POST" action="" onsubmit="return validation(this);"
				enctype="multipart/form-data">
				<div id="product">
					<table>




						<?php
                              
                              $sql3=mysqli_query($con,"SELECT * from product where pro_id='$pid'") ;
                              while($row3=mysqli_fetch_array($sql3))
                              {
                              
                              ?>

						<?php
                                        $product = $row3["pro_name"];
                                        $category = $row3["pro_category"];
								 $brand = $row3["pro_brand"];
                                        $color = $row3["pro_color"];
                                        $year = $row3["pro_year"];
                                        $specific = $row3["pro_spec"];
                                        $value = $row3["pro_value"];
                                        $img = $row3["image_dir"];
                                        
                                        

                                        
                                   ?>

						<tr>
							<td>
								<div class="text">Category</div>
							</td>
							<td>
								<select id=cate name=pro_category>
									<option value="<?php echo $category;?>">
										<div class="text">Select</div>
									</option>

									<option value="House Hold" <?php

                                                       if($category=='House Hold')
                                                       echo "selected";

                                                       ?>>
										<div class="text">House Hold</div>
									</option>
									<option value="Personal" <?php

                                                       if($category=='Personal')
                                                       echo "selected";

                                                       ?>>
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
									<option value="<?php echo $product;?>">
										<div class="text">Select</div>
									</option>

									<option value="Fridge" <?php

                                                       if($product=='Fridge')
                                                       echo "selected";

                                                       ?>>
										<div class="text">Fridge</div>
									</option>
									<option value="Washing Machine" <?php

                                                       if($product=='Washing Machine')
                                                       echo "selected";

                                                       ?>>
										<div class="text">Washing Machine</div>
									</option>
									<option value="Smart Phone" <?php

                                                       if($product=='Smart Phone')
                                                       echo "selected";

                                                       ?>>
										<div class="text">Smart Phone</div>
									</option>
									<option value="Smart Watch" <?php

                                                       if($product=='Smart Watch')
                                                       echo "selected";

                                                       ?>>
										<div class="text">Smart Watch</div>
								
									</option>
									<option value="Fan" <?php

                                                       if($product=='Fan')
                                                       echo "selected";

                                                       ?>>
										<div class="text">Fan</div>
									</option>
									<option value="Mixie" <?php

                                                       if($product=='Mixie')
                                                       echo "selected";

                                                       ?>>
										<div class="text">Mixie</div>
									</option>
									<option value="Grainder" <?php

                                                       if($product=='Grainder')
                                                       echo "selected";

                                                       ?>>
										<div class="text">Grainder</div>
									</option>
									<option value="Watch" <?php

                                                       if($product=='Watch')
                                                       echo "selected";

                                                       ?>>
										<div class="text">Watch</div>
									</option>
									<option value="Bicycle" <?php

                                                       if($product=='Bicycle')
                                                       echo "selected";

                                                       ?>>
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
									value="<?php echo $brand;?>">
							</td>
						</tr>


						<tr>
							<td>
								<div class="text">Color</div>
							</td>
							<td><input class="input" type=text name=pro_color placeholder=""
									value="<?php echo $color;?>">
							</td>
						</tr>

						<tr>
							<td>
								<div class="text">Year of Manufacture</div>
							</td>
							<td> <select id=cate name=pro_year>
									<option value="<?php echo $year;?>">
										<div class="text">Select</div>
									</option>

									<option value="2022" <?php

                                                       if($year=='2022')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2022</div>
									</option>
									<option value="2021" <?php

                                                       if($year=='2021')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2021</div>
									</option>

									<option value="2020" <?php

                                                       if($year=='2020')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2020</div>
									</option>
									<option value="2019" <?php

                                                       if($year=='2019')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2019</div>
									</option>

									<option value="2018" <?php

                                                       if($year=='2018')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2018</div>
									</option>
									<option value="2017" <?php

                                                       if($year=='2017')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2017</div>
									</option>

									<option value="2016" <?php

                                                       if($year=='2016')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2016</div>
									</option>
									<option value="2015" <?php

                                                       if($year=='2015')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2015</div>
									</option>

									<option value="2014" <?php

                                                       if($year=='2014')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2014</div>
									</option>
									<option value="2013" <?php

                                                       if($year=='2013')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2013</div>
									</option>

									<option value="2012" <?php

                                                       if($year=='2012')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2012</div>
									</option>
									<option value="2011" <?php

                                                       if($year=='2011')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2011</div>
									</option>

									<option value="2010" <?php

                                                       if($year=='2010')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2010</div>
									</option>
									<option value="below 2010" <?php

                                                       if($year=='below 2010')
                                                       echo "selected";

                                                       ?>>
										<div class="text">below 2010</div>
									</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<div class="text">Specifiactions</div>
							</td>
							<td><input class="input" type=text name=pro_spec placeholder=""
									value="<?php echo $specific;?>"></td>
						</tr>
						<tr>
							<td>
								<div class="text">Expected Market Value</div>
							</td>
							<td><input class="input" type=text name=pro_value placeholder=""
									value="<?php echo $value;?>">
							</td>
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
									<input class="input" type=submit value=Save name="subm">

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



		<?php
include 'footer.php';

?>

</body>

</html>