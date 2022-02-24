<?php
session_start();
ob_start();
 //$id=$_SESSION['id'];
  require 'connect.php';
$usrname = $_POST['reg_name'];  
$usrmail = $_POST['log_email']; //store in login_table
$usrgender = $_POST['reg_gender'];
$usrdob = $_POST['reg_dob'];
$usrpassword = $_POST['log_password']; //store in login_table
$usrphone = $_POST['reg_phone'];
$usrtype = $_POST['log_type'];//store in login_table

//$sqll=;
$result= mysqli_query($con,"SELECT * FROM register WHERE log_email='$usrmail'");
$count = mysqli_num_rows($result);
//echo $count;
//echo "error".$sqll."<br>".$con->error;

if($count>0)
{
	//echo $count;
	header('location:login.php?show=User already exits');
	exit();
	//echo "error".$sql."<br>".$con->error;

} 
else
{
//$sql=;
//$sql1="INSERT INTO login (log_email,log_password,log_type)VALUES('$usrmail','$usrpassword','$usrtype')";   
if(mysqli_query($con,"INSERT INTO register (reg_name,log_email,reg_gender,reg_dob,log_password,reg_phone,log_type)VALUES ('$usrname', '$usrmail','$usrgender', '$usrdob','$usrpassword','$usrphone','$usrtype')"))
{     
	//echo "error".$sql."<br>".$con->error;  
	       
header('location:login.php?show=added sucessfully');
}  
else
{
	echo "error".$sql."<br>".$con->error;
}    
}	
//echo "error".$sql."<br>".$con->error;

		   			
?>