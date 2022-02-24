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
//echo "heelo";
 $id=$_SESSION['id'];
 $pid=$_GET['pid'];
$dem_name=$_POST['dem_name'];
 $dem_category = $_POST['dem_category']; 
 $dem_brand = $_POST['dem_brand'];  
 
      $dem_color = $_POST['dem_color']; 
     $dem_year = $_POST['dem_year'];
      $dem_spec = $_POST['dem_spec']; 	
$up="UPDATE demand SET dem_name='$dem_name',dem_category='$dem_category',dem_brand='$dem_brand',dem_color='$dem_color',dem_year='$dem_year',dem_spec='$dem_spec' WHERE pro_id = '$pid'";

if(mysqli_query($con,$up))
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

	<link rel="stylesheet" type="text/css" href="dem.css" />
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
				alert('Select Your product');
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
				alert('Select Year of Manufacture year');
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
	<div class="before">
		<div class="pro">UPDATE DEMANDED PRODUCT </div>

		<div class="container">





			<form name="form" method="POST" action="" onsubmit="return validation(this);">
				<div id="product">
					<table>




						<?php
                              
                              $sql3=mysqli_query($con,"SELECT * from demand where pro_id='$pid'") ;
                              while($row3=mysqli_fetch_array($sql3))
                              {
                              
                              ?>

						<?php
                                        $product = $row3["dem_name"];
                                        $category = $row3["dem_category"];
								 $brand = $row3["dem_brand"];
                                        $color = $row3["dem_color"];
                                        $year = $row3["dem_year"];
                                        $specific = $row3["dem_spec"];
                                        
                                        
                                        

                                        
                                   ?>
							<tr>
							<td>
								<div class="text">Category</div>
							</td>
							<td>
								<select id=cate name=dem_category>
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
								<select id=cate name=dem_name>
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
							<td><input class="input" type=text name=dem_brand placeholder=""
									value="<?php echo $brand;?>">
							</td>
						</tr>


						<tr>
							<td>
								<div class="text">Color</div>
							</td>
							<td><input class="input" type=text name=dem_color placeholder=""
									value="<?php echo $color;?>">
							</td>
						</tr>

						<tr>
							<td>
								<div class="text">Year of Manufacture</div>
							</td>
							<td> <select id=cate name=dem_year>
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
									<option value="2009" <?php

                                                       if($year=='2009')
                                                       echo "selected";

                                                       ?>>
										<div class="text">2009</div>
									</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<div class="text">Specifiactions</div>
							</td>
							<td><input class="input" type=text name=dem_spec placeholder=""
									value="<?php echo $specific;?>"></td>
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