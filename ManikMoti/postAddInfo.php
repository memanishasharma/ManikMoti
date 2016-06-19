<?php
include 'config.php';
session_start();
$usermail=$_SESSION['mail'];
$cat_id=mysql_real_escape_string($_POST['cat']);
//$subcat=mysql_real_escape_string($_POST['subcat']);
$title=mysql_real_escape_string($_POST['title']);

$disc=mysql_real_escape_string($_POST['disc']);

$fare=mysql_real_escape_string($_POST['fare']);


$sec=mysql_real_escape_string($_POST['sec']);

//$loc=mysql_real_escape_string($_POST['loc']);

$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
$name=mysql_real_escape_string($_POST['name']);
$mail=mysql_real_escape_string($_POST['mail']);
$mobile=mysql_real_escape_string($_POST['mobile']);
$address=mysql_real_escape_string($_POST['address']);
//$sql="INSERT INTO `post_ad`(`post_name`, `post_mail`, `post_mobile`,`category_name`, `post_adtitle`, `post_addiscription`,`post_image`, `post_address`, `post_fare`,`post_security`,`user_mail`) VALUES ('$name','$mail','$mobile','$cat_id','$title','$disc','$image','$address','$fare','$sec','$usermail')";


$sql="UPDATE `post_ad` SET `post_mobile`='$mobile',`category_name`='$cat_id',`post_adtitle`='$title',`post_addiscription`='$disc',`post_address`='$address',`post_fare`='$fare',`post_security`='$sec'  WHERE `user_mail`='$usermail'";

if(mysql_query($sql))
{
	//echo "Success";
	$aler_script="<script> alert(\'Once we verified your ad will soon post on our wall\')</script>";
	echo $aler_script; 
	//header ('Location:updateAd.php');
} 
else{
	echo "Try Again";
}
?>