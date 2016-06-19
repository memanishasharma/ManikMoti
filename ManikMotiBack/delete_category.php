<?php

$id= $_GET['id'];

require 'config.php';

$sql="delete from `category` where category_id='$id'";

$result= mysql_query($sql);

if(isset($result))
{
	header('location: show_categoryinfo.php');
}
?>