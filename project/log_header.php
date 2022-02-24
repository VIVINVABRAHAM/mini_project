<?php 
@session_start();
$id = $_SESSION['id'];
if($id == ""){
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<title>header</title>

<head>
	<link type="text/css" href="log_header.css" rel="stylesheet">
</head>



<body>
	<div class="container">
		<div class="heade">
		</div>

		<div class="header">


		</div>
		<div class="logo">
			<img src="logo.png">
		</div>

		<div class="home">
			<form action="index.php">
				<div class="home">
					<input class="input" type=submit value=Home>
				</div>
			</form>
		</div>
		<div class="product">
			<button class="prod">Products</button>
			<div class="product-content">
				<a href="#">House Hold</a>
				<a href="#">Personal</a>

			</div>
		</div>
		<div class="login">
			<?php
          require 'connect.php';
                              
                              $sql3=mysqli_query($con,"SELECT * from register where reg_id='$id'") ;
                              while($row3=mysqli_fetch_array($sql3))
                              {
                              
                              ?>

			<?php
                                        $user = $row3["reg_name"];
                                        ?>

			<a class="log">Welcome,  <?php echo $user;?></a>
			<?php
                              }
                              ?>


			<div class="login-content">
				<!-- <a href="login.php">Log In</a>
                    <a href="sign.php">Sign Up</a> -->
				<a href="updated_profile.php">Profile</a>
				<a href="logout.php">Logout</a>

			</div>
		</div>


		<div class="about">
			<button class="abo">Product Status</button>
			<div class="about-content">
				<div class="aboutt">
					<a href="add_item.php">Add Product</a>

	
					<a href="available.php">Available Products</a>
					<a href="demand.php">Demanded Products</a>
					<a href="avde.php">Available & Demanded</a>


				</div>
			</div>
		</div>
		<div class="contact">
			<button class="con">Activities</button>
			<div class="contact-content">
				<a href="l_month.php">Last Month</a>
				<a href="l_year.php">Last Year</a>


			</div>
		</div>
		<div class="wsearch">
			<div class="bxsearch">
				<form method="post">
					<input type="text" placeholder="search here....." name="search">
			</div>
			<div class="search">
				<input class="input" type=submit value=Search>
			</div>

			</form>


		</div>
	</div>




	<?php

?>
</body>


</html>
<?php

?>