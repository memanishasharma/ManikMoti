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
<h1>Terms And Conditions</h1><!doctype html><hr>
<!--?php
                                  $get_cat=mysql_query("SELECT * FROM static_page WHERE static_title='About Us'")or die(mysql_error());
                                  $num_cat=mysql_num_rows($get_cat);
                                  
								  
								  for($i=0;$i<$num_cat;$i++)
                                 {  $cat=mysql_result($get_cat,$i,'static_info');
									 
                            ?><p><!--?php    
                      echo $cat;?></p>
								 <!--?php }
                                 ?-->
                                <h4 align="center"> MANIKMOTI: One stop solution for all your jewelries </h4><br/>

<p align="justify"><ul><li>
1) Any individual or organization can lend their items on our platform with suitable description.</li><li>
2) The platform currently allows only faux jewelries or artificial ornaments to be lend OR rented.</li><li>
3) Lender is solely responsible for the item, any case of misplace, replace, loss by borrower WILL NOT be borne by ManikMoti</li><li> 
4) Users renting from a posted ad are advised to thoroughly verify the price, security deposit etc. from the lender before meeting </li><li>
5) We are digital business operating from app and website and we are operational currently only in Jaipur.
</li>
</p><br/><br/>
<h4 align="center">!!!!! HAPPY ORNAMENTING WITH MANIKMOTI !!!!!</h4><br/>



</div></div></section>
</body>
</html>