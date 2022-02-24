<?php
session_start();
ob_start();
$id=$_SESSION['id'];
//echo $id;
require 'connect.php';
if(empty($_SESSION['email']))
{
//header("location:index.php?err=session not expired...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" type="text/css" href="ev_first.css" />
	<title>Profile</title>

</head>

<body>

	<?php
     
          include 'ev_header.php';
          ?>

	<div class="container">
	<div class="work_history">History</div>
	<div class="work_load">Work Load</div>
	<div class="instructions">Instructions</div>
	
		
		</div>
	




	<?php
include 'footer.php';

?>

</body>

</html>