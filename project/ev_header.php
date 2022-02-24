
<!DOCTYPE html>
<html>
<title>header</title>

<head>
	<link type="text/css" href="ev_header.css" rel="stylesheet">
</head>



<body>
	<div class="heade">
	</div>

	<div class="header">


	</div>
	<div class="logo">
		
		<a href="#"><img src="logo.png" ></a>
	</div>
	<!-- <div class="product">
		<button class="prod">Work Status</button>
		<div class="product-content">
			<a href="#">Not Evaluated</a>
			<a href="#">Evaluated</a>

		</div>
	</div> -->

	<div class="district">
		<button class="dis">District</button>
		<div class="district-content">
			<a href="ev_ddash.php">Thiruvananthapuram</a>
			<a href="#">Kollam</a>
			<a href="#">Pathanamthitta</a>
			<a href="#">Alappuzha</a>
			<a href="#">Kottayam</a>
			<a href="#">Idukki</a>
			<a href="#">Ernakulam</a>
			<a href="#">Thrissur</a>
			<a href="#">Palakkad</a>
			<a href="#">Malappuram</a>
			<a href="#">Kozhikkode</a>
			<a href="#">Wayanad</a>
			<a href="#">Kannur</a>
			<a href="#">Kasargod</a>
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
			<a href="eva_up_profile.php">Profile</a>
			<a href="login.php">Logout</a>
			<!-- <a href="updated_profile.php">Your Account</a>
				<a href="logout.php">Logout</a> -->

		</div>
	</div>
	
	
	
	</div>
	



	<?php

?>
</body>


</html>
<?php

?>