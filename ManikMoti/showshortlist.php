
<?php 
session_start();
include ("header.php");?>
<?php include ("config.php");

$value=$_GET['cat'];

echo "<br/>";
$img_url = "http://www.manikmoti.com/pictures/";
$sql="select * from wish_list ";
$res= mysql_query($sql);
echo '<section class="category" id="main-content" >';
echo '<div class="wrapper">';
echo '<div class="container">';
 echo  '<div class="row">';
  
while($th=@mysql_fetch_array($res, MYSQL_NUM))
{    
  
   echo   '<div class="col-md-4">';
	
	
	
		
		echo '<div class="thumbnail">';
	//echo '<a href="fetchview.php?id='.$th[0].'" ><img  src="data:image/jpeg;base64,'.base64_encode($th['7']).'" width="100px" //height="100px"/>';
echo '<div class="img">';
echo '<a href="fetchview.php?id='.$th[0].'" ><img src="'.$th['14'].'" width="180px" height="auto" />'; 
echo '</div>';
	echo '<br>';
	echo 'Ad Title: ';
	echo $th['4'];
	echo '<br>';
	echo 'Fare: ';
	echo $th['5'];
echo '<br>';
	
	echo '<button class="btn btn-danger name="b1" value="View" >View Detail</button>&nbsp;&nbsp;</a>';
	
	echo '<a href="shortlist.php?id='.$th[0].'">';
	echo '<button class="btn btn-danger name="b2" value="deleteshortlist" >Remove from wishlist</button></a>';

	echo '</div>';
	echo '</div>';
	
	}


echo '</div>';	
echo '</div>';
echo '</div>';
;	
	
  ?>
  
</div>
</section>
  