
<?php
include 'config.php';

    $static_id = mysql_real_escape_string($_POST['id']);
	$static_title = mysql_real_escape_string($_POST['static_title']);
	$static_info = mysql_real_escape_string($_POST['static_info']);
	
		
	
	$sql= "UPDATE `static_page` SET `static_title`='$static_title',`static_info`='$static_info' WHERE `static_id`= '$static_id'";
	
		
if(mysql_query($sql)){
	header('Location:show_static.php');
} 




?>