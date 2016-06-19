<?php

$id= $_GET['id'];

require 'config.php';

$sql="delete from `static_page` where static_id='$id'";

$result= mysql_query($sql);

if(isset($result))
{
	header('location: show_static.php');
}
?>