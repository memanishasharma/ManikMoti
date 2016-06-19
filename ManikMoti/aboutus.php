<?php 
session_start();
include ("header.php");?>
<?php include ("config.php");?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
<section class="category" id="main-content" >
<div class="wrapper">
<div class="container">
<hr>
<h1>About US </h1><!doctype html><hr>
<!--?php
                                  $get_cat=mysql_query("SELECT * FROM static_page WHERE static_title='About Us'")or die(mysql_error());
                                  $num_cat=mysql_num_rows($get_cat);
                                  
								  
								  for($i=0;$i<$num_cat;$i++)
                                 {  $cat=mysql_result($get_cat,$i,'static_info');
									 
                            ?><p><!--?php    
                      echo $cat;?></p>
								 <!--?php }
                                 ?-->
                                
                                
                                <div class="col-lg-12">
                                <h4 align="center"> MANIKMOTI: One stop solution for all your jewelries </h4><br/>

<p align="justify">Are you a jeweler looking to expand your base or a college diva who has purchased more jewelries for party than books , or is the jewelry you worn last year for  Sharma ji’s 25th anniversary biting dust? Then you are in for a treat. We at ManikMoti have brought a full platter for you, an online platform just for you to rent your jewelries to people nearby and earn out of it. ManikMoti is an idea conceptualized by two girls who understood the problem faced by fellow girls who have to buy an entire set of jewelry for a single event and it lies unused after that, not any more, with ManikMoti, if you have set of ornaments which you are not using you can put them on rent on our secure platform, or if you have a friend’s wedding scheduled for next week and you are in fix if you shall buy an entire new set? No other thoughts  just ManikMoti it ,find your preference on the website/app and look for the best item on rent ,find the contact details of lender and you are done ,yes its that simple ,few clicks and you have a glittering set of new jewelries which you can flaunt to your friends ,but don’t forget to mention about ManikMoti.</p>

</div>

</div></div></section>
</body>
</html>