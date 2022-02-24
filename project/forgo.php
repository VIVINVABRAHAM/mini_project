<?php
session_start();
ob_start();
 //$id=$_SESSION['id'];
if(!empty($_SESSION['email']))
{
//header("location:profile.php?err=session not expired...");
}
?>


<!DOCTYPE html>
<html>
<title>login</title>

<head>

	<link rel="stylesheet" type="text/css" href="forgo.css" />


</head>

<body>


	<div class="bg">


		<div class="container">
			<div class="erro"> <?php

		$err=@$_REQUEST['err'];
		echo $err;
		?> </div>
			<div class="logo">
				<a href="user_index.php"><img src="logo.png"></a>
			</div>

			<h1 class="label">Password Assistance</h1>
			<form class="login_form" action="forgo_check.php" method="POST" name="form"
				onsubmit="return validated()">
				<div class="font">Name</div>
				<input  autocomplete="off" type="text" name="names">
				<div id="name_error">Please Enter your name</div>
				<div class="font font2">Email </div>
				<input autocomplete="off" type="text" name="email">
				<div id="email_error">Please fill up your Email </div>
				<div class="font font2">Phone Number</div>
				<input autocomplete="off" type="text" name="phone">
				<div id="phone_error">Please fill up your Phone Number</div>
				
				<button type="submit" name="sub">Submit</button>
				<div class="clickhere">

					<a href="sign.php">Click here</a> to Sign-In

				</div>
			
			</form>


		</div>
		<script src="forgo.js"></script>


	</div>
	<?php
include 'footer.php';

?>
</body>

</html>