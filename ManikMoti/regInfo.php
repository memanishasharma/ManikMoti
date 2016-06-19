<?php
include("config.php");
$fname=mysql_real_escape_string($_POST['name']);
$lname=mysql_real_escape_string($_POST['lname']);
//$gen=mysql_real_escape_string($_POST['gender']);
$mobile=mysql_real_escape_string($_POST['mobile']);
$mail=mysql_real_escape_string($_POST['mail']);
$password=mysql_real_escape_string($_POST['password']);
$dob=mysql_real_escape_string($_POST['dob']);
$address=mysql_real_escape_string($_POST['address']);




$sql= " INSERT INTO user_profile(`user_fname`, `user_lname`, `user_mob`, `user_mail`,`user_password`, `user_dob`, `user_address`) VALUES ('$fname','$lname','$mobile','$mail','$password','$dob','$address')";
if(mysql_query($sql)){
	header('Location:login.php');
} 
else{
	echo "Try Again";
}
?>