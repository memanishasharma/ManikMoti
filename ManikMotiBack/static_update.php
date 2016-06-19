<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	header('Location:login.php');
	die;
}
$admin_username = $_SESSION['user_id']
?>
<?php include 'header.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Static Page Information
                         
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Static Page Information
                            </li>
                        </ol>
                        
                        
                        
                        <form class="form-horizontal" action="static_updateinfo.php" method="post" enctype="multipart/form-data">
                         <?php
								 include 'config.php';
								 $id= $_GET['id'];
								 $sql1="select * from `static_page` where `static_id`='$id'";
								 $res1=mysql_query($sql1) or die(mysql_error());
								 $th1=@mysql_fetch_array($res1, MYSQL_NUM);
							   ?>
                              <div class="row">
                                  <label  class="col-sm-6 control-label"></label>
                              </div>
                              <div class="col-sm-offset-2 col-sm-8">
                                  <input type="hidden" name="id" value="<?php echo $th1[0] ?>">
                                                                        
                                  <div class="form-group">
                                    <label  class="col-sm-2 control-label">Heading</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="static_title" value="<?php echo $th1[1] ?>"  class="form-control">
                                    </div>
                                  </div>
                         <div class="form-group">
                                    <label  class="col-sm-2 control-label">Content</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="static_info" value="<?php echo $th1[2] ?>"  class="form-control">
                                    </div>
                                  </div>
                                      <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <input type="submit" class="btn btn-info" value="Submit" >
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-2"></div>
      						</form>
                      
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
 <?php include 'footer.php';?>
   
