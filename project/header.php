<?php
//session_start();
//ob_start();
//$id=$_SESSION['id'];
require 'connect.php';
?><!DOCTYPE html>
<html>
<title>header</title>

<head>
	<link type="text/css" href="header.css" rel="stylesheet">
</head>



<body>
	<div class="heade">
	</div>

	<div class="header">

		<table border=0 width=auto height=70px>
			</td>
			<tr align=left>



				<td>
					<form action="user_index.php">
						<div class="home">
							<input class="input" type=submit value=HOME>
						</div>
					</form>
				</td>
				<td>
					<form action="login.php">
						<div class="home">
							<input class="input" type=submit value=LOGIN>
						</div>
					</form>
				</td>
				<td>
					<form action="sign.php">
						<div class="home">
							<input class="input" type=submit value=SIGNUP>
						</div>
					</form>
				</td>

			</tr>

		</table>
	</div>
	<div class="logo">
		<img src="logo.png">
	</div>

<?php

?>
</body>


</html>
<?php

?>