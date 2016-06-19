<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	header('Location:login.php');
	die;
}
include 'header.php';
include 'config.php';
?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Admin Panel of ManikMoti
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>&nbsp;&nbsp;Welcome to <a href="http://aaronsoftech.com">ManikMoti</a></li>
                        </ol>
                    </div>
                </div>
                <!-- /.row --><!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        
                        
                                <div class="row">
                                <div class="col-md-10"></div>
                                    <div class="col-md-2">
                                        
                                        <img src="images/logo.png" alt="logo"  width="400px">
                                        
                                    </div> 
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
	
            <!-- /.container-fluid -->

       
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

</body>

</html>
