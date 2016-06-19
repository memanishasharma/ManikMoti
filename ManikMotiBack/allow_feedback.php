
<?php
include 'config.php';

    $feedback_id = mysql_real_escape_string($_GET['id']);
	//$feedback_status = mysql_real_escape_string($_POST['feedback_status']);
	
	$sql="UPDATE `feedback` SET `feedback_status`= '1' where feedback_id='$feedback_id'";
	if(mysql_query($sql)){
	header('Location:show_feedback.php');
} 
?>