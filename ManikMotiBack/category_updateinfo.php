
<?php
include 'config.php';

    $category_id = mysql_real_escape_string($_POST['id']);
	$category_name = mysql_real_escape_string($_POST['category_name']);
	
	$bike_image= addslashes(file_get_contents( $_FILES['category_icon']['tmp_name']));
		
	
	$sql= "UPDATE `category` SET `category_name`='$category_name',`category_icon`='$category_icon' WHERE `category_id`= '$category_id'";
	
		
if(mysql_query($sql)){
	header('Location:show_categoryinfo.php');
} 




?>