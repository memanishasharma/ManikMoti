
<?php include ("config.php");?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title><?php include ("config.php");?>
</head>


<?php
                                  $get_cat=mysql_query("SELECT * FROM category")or die(mysql_error());
                                 $num_cat=mysql_fetch_array($get_cat);
								 $images = array();
while ($row = mysql_fetch_assoc($get_cat)) {
	$cat_id[]=$row['category_id'];
  $images[] = $row['category_icon'];
}

foreach ($images as $category_icon) {
  echo '<img src="data:image/jpeg;base64,'. base64_encode($category_icon) .'" />';
  echo $cat_id;
  echo $cat;
}
  ?>
  
  
  
 

<body>
</body>
</html>