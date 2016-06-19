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
                           Different  Category 
                         
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Category Information
                            </li>
                        </ol>
                        
                        
                        
                        <form class="form-horizontal" action="category_information.php" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <label  class="col-sm-6 control-label">Category</label>
                              </div>
                              <div class="col-sm-offset-2 col-sm-8">
                                  
                                                                        
                                  <div class="form-group">
                                    <label  class="col-sm-2 control-label">Category Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="category_name" placeholder="Category Name" class="form-control">
                                    </div>
                                  </div>
                        
                                 
                                  
                                  
                                  
                                  
                                  
                                  <div class="form-group">
                                    <label  class="col-sm-2 control-label">Category Icon</label>
                                    <div class="col-sm-10">
                                      <input type="file" name="category_icon" placeholder="Category Icon" class="form-control">
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

   
