<?php
session_start();
include ("header.php");?>
<?php include ("config.php");?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="assets/css/screen.css" type="text/css" />
</head>

<body>
<section class="category" id="main-content" >
<div class="wrapper">
<div class="container">
<hr>
<h1>What User Say About Us </h1>

<hr><?php $get_cat=mysql_query("SELECT * FROM feedback")or die(mysql_error());
                                  $num_cat=mysql_num_rows($get_cat);
                                  
								  
								  for($i=0;$i<$num_cat;$i++)
                                 {  $cat=mysql_result($get_cat,$i,'feedback_id');
									 $cat_title=mysql_result($get_cat,$i,'feedback_subject');
                                $cat_disc=mysql_result($get_cat,$i,'feedback_content');
                                 
			         
                       
                                        
?>
<div id="block" ><br/>
		<h3>User's Feedback </h3>
		<div class="photo">
			<img src="images/img1/photo-bg.png" alt="" class="photo-bg"/>
			<img src="images/img1/photo.jpg" alt="" class="photo" />
		</div>";
        <p class="content"><span class="laquo">&nbsp;</span>"<?php echo  "$cat_disc" ;?><span class="raquo">&nbsp;</span></p>;
        <!--?php echo $cat_disc;?-->
		
		<div class="sign">
			<a href="#"> <?php// echo $cat;?></a>
			
		</div><br/><br/><br/><?php }?>
	</div>
     </div>
    </div>
    
    </section>
</body>
</html>