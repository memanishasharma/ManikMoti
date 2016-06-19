<?php

$id= $_GET['id'];

require 'config.php';

$sql="delete from `feedback` where feedback_id='$id'";

$result= mysql_query($sql);

if(isset($result))
{
	header('location: show_feedback.php');
}
?>