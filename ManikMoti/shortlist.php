  
<?php
session_start();
if(!isset($_SESSION['mail']))
{   ?>
 <script>
  alert('You Are Not Logged In !! Pleasbjbkkke Login to access Ad details');
  window.location='login.php';
 </script>
 <?php
 }
 ?>
 <?php
 include 'config.php';
$usermail=$_SESSION['mail'];
$value=$_GET['id'];
$sql="INSERT INTO `wish_list`(`post_id`,`user_mail`) VALUES ('$value','$usermail')";
if(mysql_query($sql))
{
	
	
 header ('Location:index.php');
} 
else{
	echo "Try Again";
}
?>