<?php
session_start();
if(!isset($_SESSION['mail']))
{   ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access your profile');
  window.location='login.php';
 </script>
 <?php
 }
 ?>
<?php 

//include ("header.php");
include ("config.php");
$username=$_SESSION['mail'];
  $get= @mysql_query("SELECT * FROM wish_list WHERE user_mail= '$username'")or die(mysql_error());
  $num= @mysql_num_rows($get);
  
  for($i=0;$i<$num;$i++)
  {
   
   $post_id=@mysql_result($get,$i,'post_id');
   echo $post_id;
   $get1= @mysql_query("SELECT * FROM post_ad WHERE post_id= '$post_id'")or die(mysql_error());
$res= @mysql_query($get1);
echo '<section class="category" id="main-content" >';
echo '<div class="wrapper">';
echo '<div class="container">';
 echo  '<div class="row">';
while($th=@mysql_fetch_array($res, MYSQL_NUM))
{    
   echo   '<div class="col-md-3">';
	if(  $th['12']=='1')
	{
    echo '<div class="thumbnail">';
	//echo '<a href="fetchview.php?id='.$th[0].'" ><img src="data:image/jpeg;base64,'.base64_encode($th['7']).'" />';

	echo '<br>';
	echo 'Ad Title: ';
	echo $th['4'];
	echo '<br>';
	echo 'Fare: ';
	echo 'Rs. '.$th['10'];
	echo '<br>';
	echo '<button class="btn btn-danger name="b1" value="View" >View Detail</button>&nbsp;&nbsp;</a>';
	
	echo '<a href="shortlist.php?id='.$th[0].'">';
	echo '<button class="btn btn-danger name="b2" value="shortlist" >Add to wishlist</button></a>';

	echo '</div>';
	echo '</div>';
	
	}

    }}
  ?>


                 
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                                  
                 
 