<?php 

session_start();
include ("header.php");
if(!isset($_SESSION['mail']))
{   ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access Ad details');
  window.location='login.php';
 </script>
 <?php
 }
 ?>
<?php include ("config.php");

$usermail=$_SESSION['mail'];


echo "<br/>";
$sql="select * from post_ad WHERE user_mail = '$usermail'";

$res= mysql_query($sql);
echo '<section class="category" id="main-content" >';
echo '<div class="wrapper">';
echo '<div class="container">';
 echo  '<div class="row">';
while($th=@mysql_fetch_array($res, MYSQL_NUM))

{   
    $ID=$th[0];
    echo '<table class="table">';
    echo '<tr><td>';
	echo '<a href="fetchview.php?id='.$th[0].'" class="thumbnail"><img src="data:image/jpeg;base64,'.base64_encode($th['7']).'" width=200px height=200px /></a>';
	
	echo '</td><td>';
	echo 'Ad Title: ';
	echo $th['5'];
	echo '<br>';
	echo 'Fare: ';
	echo 'Rs.'.$th['10'];
	echo '<br>';
	echo '<a href="fetchview.php?id='.$ID.'"><button class="btn btn-danger name="b1" value="View" >View Detail</button></a>&nbsp;';
	
	//echo '</td></tr><tr><td>';
    echo '<a href="UpdateAd.php"><button class="btn btn-danger name="b1" value="View" >Update</button></a>&nbsp;';
	if(!$th['14'])
	 echo '<a href="change.php?id='.$th[0].'"><button class="btn btn-danger name="b1" value="View"  >Inactive</button></a>';
	if($th['14']) 
	echo '<a href="change.php?id='.$th[0].'"><button class="btn btn-danger name="b1" value="View" >Active</button></a>';
	;
	
	
	echo '</td></tr></table></div>';
	}
echo '</div>';	
echo '</div>';
echo '</div>';
;	
?>
 </div>
</section>
  
  


