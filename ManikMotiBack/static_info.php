
<?php
include 'config.php';
	$heading =$_POST['heading'];
	$content = $_POST['content'];
	$admin_id= $_POST['admin'];
	
	
	$sql= "INSERT INTO `static_page`(`static_title`, `static_info`) VALUES ('$heading', '$content')";
	
	
	
if(mysql_query($sql)){
	header('Location:show_static.php');
} 
else{
	header('Location: static.php');
}



?>