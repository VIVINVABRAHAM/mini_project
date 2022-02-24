<?php
session_start();
ob_start();
$id=$_SESSION['id'];

$usrmail=$_REQUEST['email'];
$password=$_REQUEST['password'];
require 'connect.php';
//$sql2="SELECT * FROM register,address WHERE register.reg_id=address.person_id and register.reg_id='$id'";

//$sql=mysqli_query($con,"select * from register,address where register.reg_id=address.person_id and register.reg_id='$id'") or die("query error");
$sql=mysqli_query($con,"select * from register where log_email='$usrmail' and log_password='$password'") or die("query error");
$row=mysqli_fetch_array($sql);
    $Status= $row['log_type'];
//$sql=mysqli_query($con,$sql2)or die("query error");
	//echo $sql;
//echo $ans;
//$count=mysql_num_rows($ans);
//$count==0;
if(mysqli_num_rows($sql)==1 && $Status==0)
{
	//session_start();
	$sql=mysqli_query($con,"select * from register where log_email='$usrmail' and log_password='$password'") or die("query error");
	$ar=mysqli_fetch_array($sql);
	$id=$ar['reg_id'];
	echo $id;
	$_SESSION['id']=$id;
	$_SESSION['email']=$usrmail;
	$sql2=mysqli_query($con,"SELECT * FROM address WHERE person_id='$id'");
	if(mysqli_num_rows($sql2)==1)
	{
		header("location:index.php?id='$id'");
	}
	else
	{
		header("location:login_profile.php?id='$id'");
	}
		
}
elseif(mysqli_num_rows($sql)==1 && $Status==1)
{
	//session_start();
	$sql=mysqli_query($con,"select * from register where log_email='$usrmail' and log_password='$password'") or die("query error");
	$ar=mysqli_fetch_array($sql);
	$id=$ar['reg_id'];
	echo $id;
	$_SESSION['id']=$id;
	$_SESSION['email']=$usrmail;
	$sql2=mysqli_query($con,"SELECT * FROM address WHERE person_id='$id'");
	if(mysqli_num_rows($sql2)==1)
	{
		header("location:eva_up_profile.php?id='$id'");
	}
	else
	{
		header("location:evaluator_profile.php?id='$id'");
	}
		
}
else
{
	header("location:login.php?err=Incorrect Password or user email");
}

?>
