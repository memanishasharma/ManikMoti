<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	header('Location:login.php');
	die;
}
?>
<?php include 'header.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Post Add
                        
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Show Posted Ads
                            </li>
                        </ol>
                        
                                            
                        
                        
    <div class="row">
	<div class="col-sm-offset-1 col-sm-10 ">
    		<?php
				
				include 'config.php';
				$sql= "select * from post_ad";
				$res=mysql_query($sql) or die(mysql_error());
				echo '<div class="row">';
					echo '<div class="col-sm-2"><strong>Name</strong></div>';
					echo '<div class="col-sm-2"><strong>AD Title</strong></div>';
					echo '<div class="col-sm-2"><strong> AD Discription</strong></div>';
					
					
					
					echo '<div class="col-sm-2"><strong>Allow</strong></div>';
					
		             echo '<div class="col-sm-2"><strong>Operation</strong></div>';
				
				echo '</div>';
				
				
				echo '<hr>';
						while($th=@mysql_fetch_array($res, MYSQL_NUM))
						{
							//$name=explode('|',$th[1]);
							//$sql2="select `user_fname` from `user_profile` where `user_id`='.$th[1].'";
							//$res1=mysql_query($sql2) or die(mysql_error());
							//$name="mysql_fetch_object($res1)";
							//$th[1]=$name;											
							echo '<div class="row">';
								
								echo '<div class="col-sm-2">'.$th[1].'</div>';
								echo '<div class="col-sm-2">'.$th[5].'</div>';
								echo '<div class="col-sm-2">'.$th[6].'</div>';
								echo '<div class="col-sm-2">'.$th[12].'</div>';
								
								
								if(!$th['12'])
								echo '<div class="col-sm-2"><a href="allow_postAd.php?id='.$th[0].'"><button class="btn btn-danger btn-xs">Allow</button></a></div>';
								else
								echo '<div class="col-sm-2"><a href="allow_postAd.php?id='.$th[0].'"><button class="btn btn-danger btn-xs">Not Allow</button></a></div>';
								 echo '<div class="col-sm-2"><a href="delete_post_Ad.php?id='.$th[0].'"><button class="btn btn-danger btn-xs">Delete</button></a></div>';
								
							echo '</div></br>';
							echo '<div class="row">';
							echo '<a href=""><img width="120px" src="data:image/jpeg;base64,'.base64_encode($th['7']).'" /></a>';
							
							echo '</div></br>';
							
						}
			
			?>
                    </div>
                   
            </div>   
           </div>
           
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>

