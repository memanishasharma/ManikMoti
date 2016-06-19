
<?php
include 'config.php';
	$category_name = mysql_real_escape_string($_POST['category_name']);
	$category_image= addslashes(file_get_contents( $_FILES['category_icon']['tmp_name']));
		
	
	$sql= "INSERT INTO `category`(`category_name`, `category_icon`) VALUES ('$category_name','$category_image')";
	
		
if(mysql_query($sql)){
	header('Location:show_categoryinfo.php');
} 
else{
	
	header('Location:category_info.php');
}



?>