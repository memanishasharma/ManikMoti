<form name="f1" method="post" action="insert.php" enctype="multipart/form-data">
<input type="file" name="img">
<input type="submit" value="insert" name="submit">
</form>

<?php

if(isset($_POST['submit']))
{
	$image= addslashes(file_get_contents($_FILES['img']['tmp_name']));
	
	include "config.php";
	$sql="insert into `post_addd`(`post_image`) values ('$image')";
	
	if(mysql_query($sql))
	
	echo "success";
}
?>