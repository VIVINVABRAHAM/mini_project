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

	<link rel="stylesheet" type="text/css" href="l_year.css" />
	<title>Profile</title>
	
</head>

<body>

	<?php
     
          include 'log_header.php';
          ?>






	<?php
include 'footer.php';

?>

</body>

</html>