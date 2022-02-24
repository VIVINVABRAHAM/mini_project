<?php

session_start();
ob_start();

?>
<html>

<center>

	<head>
		<title>Sign up</title>

		<link rel="stylesheet" type="text/css" href="sign.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

		<script type="text/javascript">
		$(document).ready(function() {
			$("form").submit(function() {

				
				var validation = $(this); // Select Form
				//var log_type = $("#type");


				if (validation.find("[name='reg_name']").val() == '') {
					alert('Enter Valid Name');
					return false;
				}


				if (validation.find("[name='log_email']").val() == '') {
					alert('Enter  a Valid email id');
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

				if (validation.find("[name='reg_dob']").val() == '') {
					alert('Select your date of birth');
					return false;
				}
				if (validation.find("[name='log_password']").val() == '') {
					alert('Enter a password');
					return false;
				}
				if (validation.find("[name='confirm_password']").val() == '') {
					alert('Password Should Match');
					return false;
				}
				
				if (validation.find("[name='reg_phone']").val() == '') {
					alert('Enter a Valid Phone number');
					return false;
				}
				if (validation.find("[name='log_type']").val() == '') {
					alert('Select who you are');
					return false;
				}
				
				alert('You registered sucessfully');

				$("#myform")[1].reset();
			});
		});
		</script>


	</head>
	<script>
	function pageRedirect() {
		window.location.href = "user_index.php";
	}
	</script>

	<body>
		<div class="bg">



			<br>
			<div class="container">
				
				<div class="logo">
					<a href="user_index.php"><img src="logo.png"></a>
				</div>
				<div class="con1">
				<div class="logi">Register Here!</div>
				<br>

				<form id="myform" name="form" method="POST" action="sign_check.php"
					onsubmit="return validation(this);">
					<div class="act">
						<br>
						<div class="user">
							<input class="input" type=text name=reg_name id=name placeholder="Name">
							<br> <br>
							<input class="input" type=text name=log_email id=email placeholder="Email-ID">
							<br> <br>

							<input class="radio" type=radio name=reg_gender value="Male" checked><label
								class="label">Male</label>
							<input class="radio" type=radio name=reg_gender value="Female"><label
								class="label">Female</label>
							<input class="radio" type=radio name=reg_gender value="Trans"><label
								class="label">Other</label> <br> <br>
							<input class="input" type="text" name=reg_dob placeholder="Date of birth"
								onfocus="(this.type='date')">
							<br> <br>
							<input class="input" type=password id="log_password" name=log_password
								placeholder="Password">
								<br> <br>
							<input class="input" type=password id="confirm_password" name=confirm_password
								placeholder="Confirm Password">

							<br> <br>
							<input class="input" type=text name=reg_phone id=phone_number
								placeholder="Phone Number">
						</div>

						<div class="select">
							<select id=type name=log_type>
								<option value="">
									<div class="text">Who am I</div>
								</option>

								<option value=0>
									<div class="text">User</div>
								</option>
								<option value=1>
									<div class="text">Evaluator</div>
								</option>
							</select>
						





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
											<input class="input" id="submit" type=submit name=submit
												value=Continue>
										</div>

									</td>
									<td>
										<div class="cancel">
											<input class="input" type=button value=Cancel
												onclick="pageRedirect()">


										</div>
									</td>
								</tr>
							</table>




						</div>


					</div>


				</form>
			</div>
		</div>
		</div>

</center>

<?php
	include 'footer.php';

	?>
</div>

</body>

</html>