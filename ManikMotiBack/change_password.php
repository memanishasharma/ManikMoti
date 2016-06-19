<?php
	
	//require_once('../abell_backend/Connections/invoice.php');
	include 'config.php'; 
	session_start();
	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];
	$admin_name=$_SESSION['user_id'];
	$sql="select `admin_password` from `admin_login` where  `admin_name` ='$admin_name' and `admin_password`='$old_password'";
	$res=mysql_query($sql);
	$th=@mysql_fetch_array($res, MYSQL_NUM);
	if($th[0]!="" || $th[0]!=NULL)
	{
		$sql="update `admin_login` set `admin_password`='$new_password' where `admin_name`='$admin_name'";
		mysql_query($sql);
		echo 1;
	} 
	else
	{
		echo 0;
	}
?>
