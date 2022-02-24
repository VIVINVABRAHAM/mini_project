<?php
session_start();
ob_start();
$id=$_SESSION['id'];

$usrmail=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$names=$_REQUEST['names'];
require 'connect.php';
//$sql2="SELECT * FROM register,address WHERE register.reg_id=address.person_id and register.reg_id='$id'";

//$sql=mysqli_query($con,"select * from register,address where register.reg_id=address.person_id and register.reg_id='$id'") or die("query error");
$sql=mysqli_query($con,"select * from register where log_email='$usrmail' and reg_phone='$phone' and reg_name='$names'") or die("query error");
//$sql=mysqli_query($con,$sql2)or die("query error");
	//echo $sql;
//echo $ans;
//$count=mysql_num_rows($ans);
//$count==0;
if(mysqli_num_rows($sql)==1)
{

	//header("location:sh_for.php?id=$id");
 
 

	//session_start();
	$ar=mysqli_fetch_array($sql);
	$id=$ar['reg_id'];
	echo $id;
	$_SESSION['id']=$id;
	$_SESSION['email']=$usrmail;
	$sql2=mysqli_query($con,"SELECT * FROM register WHERE reg_id='$id'");
	if(mysqli_num_rows($sql2)==1)
	{
		header("location:sh_for.php");
	}
	else
	{
		//header("location:login_profile.php?id='$id'");
	}
		
}
else
{
	header("location:forgo.php?err=Not a Valid Credentials");
}

?>
