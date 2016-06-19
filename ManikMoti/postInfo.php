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
$sql="INSERT INTO `post_ad`(`post_name`, `post_mail`, `post_mobile`,`category_name`, `post_adtitle`, `post_addiscription`,`post_image`, `post_address`, `post_fare`,`post_security`,`user_mail`) VALUES ('$name','$mail','$mobile','$cat_id','$title','$disc','$image','$address','$fare','$sec','$usermail')";


if(mysql_query($sql))
{
	//echo "Success";
	if(!isset($_SESSION['mail']))
{   ?>
 
  alert('Once we verified your ad details then soon we will post your ad on our wall until HAPPY ORNAMENTING WITH MANIKMOTI ');
  window.location='index.php';
 </script><?php
 }
	//header ('Location:index.php');
} 
else{
	echo "Try Again";
}
?>