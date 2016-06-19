
 <?php
session_start();
if(!isset($_SESSION['mail']))
{
	header('Location:login.php');
	die;
	$mail = $_SESSION['user_id'];
}
?>
 
 <?php
include("config.php");
$usermail=$_SESSION['mail'];

echo  $usermail;
if($_POST['submitMain'])
  {
$fname=mysql_real_escape_string($_POST['name']);
$lname=mysql_real_escape_string($_POST['lname']);
//$gen=mysql_real_escape_string($_POST['gender']);
$mobile=mysql_real_escape_string($_POST['mobile']);
$mail=mysql_real_escape_string($_POST['mail']);
$password=mysql_real_escape_string($_POST['password']);
//$dob=mysql_real_escape_string($_POST['dob']);
//$address=mysql_real_escape_string($_POST['address']);
$sql="UPDATE `user_profile` SET `user_fname`='$fname',`user_lname`='$lname',`user_mob`='$mobile',`user_mail`='$mail',`user_password`='$password'  WHERE `user_mail`='$usermail'";

 //echo "<script>alert('Account Details Changed sucessfully !!');</script>";
   //echo "<script>window.location='profile.php';</script>";
  if(mysql_query($sql)){
  echo "<script>alert('Account Details Changed sucessfully !!');</script>";
	header('Location:profile.php');
} 
else{
	echo "Some error occured Try Again";
}
   
  }
 ?>
