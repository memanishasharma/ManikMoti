<?php
include 'config.php';

    $post_id = mysql_real_escape_string($_GET['id']);
	
	//$feedback_status = mysql_real_escape_string($_POST['feedback_status']);
	
	$get= @mysql_query("SELECT * FROM post_ad WHERE post_id= '$post_id'")or die(mysql_error());
  $num= @mysql_num_rows($get);
  
 for($i=0;$i<$num;$i++)
  {  
   $status=@mysql_result($get,$i,'active');
   
 }
	
	
	
	 if(!$status)
	 {
		 $sql=@mysql_query("UPDATE `post_ad` SET `active`='1' WHERE post_id= '$post_id' ")or die(mysql_error());
		 
	 }
	else 
	{$sql=@mysql_query("UPDATE `post_ad` SET `active`='0' WHERE post_id= '$post_id'")or die(mysql_error());
 

	}
header('Location:myad.php');
?>