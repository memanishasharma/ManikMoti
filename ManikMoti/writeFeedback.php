<?php
include("config.php");
session_start();
$mail=$_SESSION['mail'];
$title=mysql_real_escape_string($_POST['title']);
$content=mysql_real_escape_string($_POST['content']);





$sql= " INSERT INTO feedback(`user_mail`,`feedback_subject`, `feedback_content`) VALUES ('$mail','$title','$content')";
if(mysql_query($sql)){
	header('Location:index.php');
} 
else{
	echo "Try Again";
}
?>