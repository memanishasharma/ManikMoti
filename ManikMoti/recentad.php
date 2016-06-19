
<?php 
session_start();
include ("header.php");?>
<?php include ("config.php");



echo "<br/>";
$sql="select * from post_ad ORDER BY timestamp DESC";

$res= mysql_query($sql);
echo '<section class="category" id="main-content" >';
echo '<div class="wrapper">';
echo '<div class="container">';
 echo  '<div class="row">';
while($th=@mysql_fetch_array($res, MYSQL_NUM))
{    
  
   echo   '<div class="col-md-4">';
	
	echo '<a href="fetchview.php?id='.$th[0].'" class="thumbnail"><img  src="data:image/jpeg;base64,'.base64_encode($th['7']).'"/>';
	echo '<br>';
	echo 'Ad Title: ';
	echo $th['5'];
	echo '<br>';
	echo 'Fare: ';
	echo 'RS'.$th['10'];
	echo '<br>';
	echo '<button class="btn btn-danger  name="b1" value="View" >View Detail</button></a>';

	echo '</div>';
	
	

}
echo '</div>';	
echo '</div>';
echo '</div>';
;	
	
  ?>
  
</div>
</section>
  
  


