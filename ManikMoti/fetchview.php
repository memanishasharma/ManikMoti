<?php
session_start();
 include ("header.php");
echo '<head> <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css"></head>';
if(!isset($_SESSION['mail']))
{   ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access Ad details');
  window.location='login.php';
 </script>
 <?php
 }
 ?>
 
 <body>
<section class="category" id="main-content" >
<div class="wrapper">
<div class="container">

<div class="container">

<?php include ("config.php");

$value=$_GET['id'];
$sql="select * from post_ad where post_id='$value'";
$res= mysql_query($sql);

while($th=@mysql_fetch_array($res, MYSQL_NUM))
{    
echo '<br><br>';
echo '<table class="table">';
	echo ' <tbody>
	<tr><td colspan="1">';
	//echo '<a class="example-image-link" href="data:image/jpeg;base64,'.base64_encode($th['7']).' " ><img class="example-image" //src="data:image/jpeg;base64,'.base64_encode($th['7']).' " width="200px" height="200px" /></a>';
echo '<a class="example-image-link" href="'.$th['14'].'"><img class="example-image" src="'.$th['14'].'" width="200px" height="200px" /></a>'; 
	echo '</td></tr>';
	echo '<tr><td>';
	echo '<h4>Ad Detail:</h4> ';
	echo '</td>';
	echo '<tr><td>';
	echo 'Ad Title: ';
	
	echo $th['5'];
	echo '</td>';
	echo '</tr>';
	
	echo '<tr><td>';
	echo 'Fare: ';

	
	echo 'RS. '.$th['8'];
	echo '</td></tr>';

echo '<tr><td>';
	echo 'Security Amount: ';
        

	
	echo $th['9'];
	echo '</td></tr>';
	echo '<tr><td>';
	echo 'Ad Description: ';
	
	echo $th['6'];
	echo '</td></tr><tr><td>';
	echo '<h4>Owner Contact Detail:</h4> ';
	echo '</td><td></td></tr>';
	echo '<tr><td>';
	echo 'Mail ID :';
	
	echo $th['2'];
	echo '</td></tr>';
	echo '<tr><td>';
	
    echo 'Mobile No. ';
	
	echo $th['3'];
	echo '</td></tr>';
	if($th['14'])
	{echo '<tr><td>';
	
    echo '<p style="color:#bc1515">Inactive By Owner</p>';
	
	
	echo '</td></tr>';}
	
	echo '</div>';
	
}

  ?>
</div></div></div></section>  
 <script type="text/javascript" src="assets/js/lightbox-plus-jquery.min.js"></script>

</body>

