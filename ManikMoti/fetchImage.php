<?php include ("config.php");?><?php 
    $img_url = "http://www.manikmoti.com/pictures/"; 
    $result = mysql_query("SELECT * FROM post_ad"); 
    while($row = mysql_fetch_assoc($result)) 
    { 
        echo '<img src="'.$img_url.$row['post_images'].'" />'; 
    } 
?>

<?php $files = glob("images/*.*"); for ($i=1; $i<count($files); $i++) { $num = $files[$i]; print $num."<br />"; echo '<img src="'.$num.'" alt="random image" />'."<br /><br />"; } ?>

