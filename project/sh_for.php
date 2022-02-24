<?php


session_start();
ob_start();
$id=$_SESSION['id'];
?>
<html>

<head>

	<link rel="stylesheet" type="text/css" href="sh_for.css" />


</head>

<body>
<div class="container">

<div class="logo">
				<a href="user_index.php"><img src="logo.png"></a>
			</div>

			<h1 class="label">Personal Information</h1>
			<form class="login_form" action="forgo_check.php" method="POST" name="form"
				onsubmit="return validated()">
	<div id="table2">

		<table>

			
			<?php
                              require 'connect.php';
                              //$id=$_SESSION['id'];
                              $sql=mysqli_query($con,"SELECT * FROM register WHERE reg_id='$id'") ;
                              
                              while($row=mysqli_fetch_array($sql))
                              {
                         
                              ?>
			<tr>
				<td>
					<div class="text">Name</div>
				</td>
				<?php echo 
                                   "<td>".$row["reg_name"]."</td></tr>
                                        <tr>";
                                        ?>
				<td>
					<div class="text">Email-id</div>
				</td>
				<?php echo 
                                   "<td>".$row["log_email"]."</td></tr>
                                        <tr>";
                                        ?>
				<td>
					<div class="text"> Gender</div>
				</td>
				<?php echo 
                                   "<td>".$row["reg_gender"]."</td></tr>
                                        <tr>";
                                        ?>
				<td>
					<div class="text"> Date of Birth</div>
				</td>
				<?php echo 
                                        "<td>".$row["reg_dob"]."</td></tr>
                                        <tr>";
                                   ?><td>
					<div class="text">Phone Number</div>
				</td>
				<?php echo 
                                   "<td>".$row["reg_phone"]."</td></tr>
                                   <tr>";
                                   ?><td>
					<div class="text">District</div>
				</td>
				<?php echo 
                                   "<td>".$row["district"]."</td></tr>
							  <tr>";
                                   ?><td>
					<div class="text">Password</div>
				</td>
				<?php echo 
                                   "<td>".$row["log_password"]."</td></tr>
                                        
                                        ";
                                        }
                                   ?>




		</table>
	</div>
	</form>


		</div>
	<?php


?>
	</div>
</body>

</html>