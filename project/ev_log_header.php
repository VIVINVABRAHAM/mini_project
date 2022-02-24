<?php
//session_start();
//ob_start();
//$id=$_SESSION['id'];
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<title>header</title>

<head>
	<link type="text/css" href="ev_log_header.css" rel="stylesheet">
</head>



<body>
	<div class="heade">
	</div>

	<div class="header">

		<table border=0 width=auto height=70px>
			</td>
			<tr align=left>


				<td>

					<div class="evaluated">
						<a href=evaluated.php><input class="input" type=button value=EVALUATED></a>
					</div>
				</td>
				<td>

					<div class="to_be">
						<a href=to_be_evaluate.php><input class="input" type=button value="TO BE EVALUATED"></a>
					</div>
				</td>
				<td>
					<a href="index.php">
						<div class="home">
							<input class="input" type=button value=HOME>
						</div>
					</a>
				</td>
				<td>

					<div class="logout">
						<a href=logout.php><input class="input" type=button value=LOGOUT></a>
					</div>
				</td>





				</form>


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