<?php

$id= $_GET['id'];

require 'config.php';

$sql="delete from `post_ad` where post_id='$id'";

$result= mysql_query($sql);

if(isset($result))
{
	header('location: show_postAd.php');
}
?>