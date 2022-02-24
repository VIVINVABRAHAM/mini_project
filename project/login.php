
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

	<link rel="stylesheet" type="text/css" href="login.css" />


</head>

<body>


<div class="bg">


<div class="container">
<div class="erro"> <?php

		$err=@$_REQUEST['err'];
		echo $err;
		?>  </div>
		<div class="logo">
		<a href="user_index.php"><img src="logo.png" ></a>
	</div>

		<h1 class="label">User Login</h1>
		<form class="login_form" action="login_check.php" method="POST" name="form" onsubmit="return validated()">
			<div class="font">Email </div>
			<input autocomplete="off" type="text" name="email">
			<div id="email_error">Please fill up your Email </div>
			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Please fill up your Password</div>
			<button type="submit" name="login" >Login</button>
			<div class="clickhere">

                    <a href="sign.php">Click here</a> to Sign-In
                    
                    </div>
			<div class="forgot">

                    <a href="forgo.php">Forgot Password</a>
                    
                    </div>
               </form>

		
	</div>
	<script src="login.js"></script>	
	

</div>
	<?php
include 'footer.php';

?>
</body>

</html>

