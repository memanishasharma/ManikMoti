
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ManikMoti </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="http://kylemitofsky.com/libraries/libraries/datepicker.css">
    <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
    
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">ManikMoti</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile_settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                  <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#page1"><i class="fa fa-fw fa-arrows-v"></i> Category Information <i class="fa fa-fw fa-caret-down"></i></a>
                   
                        <ul id="page1" class="collapse">
                            <li>
                                <a href="category_info.php">Add category Informations</a>
                            </li>
                            <li>
                                <a href="show_categoryinfo.php">View category Informations</a>
                            </li>
			    </ul>
                  
                  <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#page2"><i class="fa fa-fw fa-arrows-v"></i> User Feedback<i class="fa fa-fw fa-caret-down"></i></a>
                   
                        <ul id="page2" class="collapse">
                           
                            <li>
                                <a href="show_feedback.php">View User Feedbacks</a>
                            </li>
			    </ul>

			 </li>
             <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#page3"><i class="fa fa-fw fa-arrows-v"></i> Posted Ad<i class="fa fa-fw fa-caret-down"></i></a>
                   
                        <ul id="page3" class="collapse">
                           
                            <li>
                                <a href="show_postAd.php">View User Ads</a>
                            </li>
			    </ul>

			 </li>
		
        
        <li>
                        
                  
                        <ul id="page4" class="collapse">
                            <li>
                                <a href="static.php"></a>
                            </li>
                            <li>
                                <a href="show_static.php">f</a>
                            </li>
			    </ul>       
                 <li>
                        <a href="regUserInfo.php"><i class="fa fa-fw fa-bar-chart-o"></i>View Registered User</a>
                    </li>
                 <li>
                        <a href="profile_settings.php"><i class="fa fa-fw fa-bar-chart-o"></i>Profile Settings</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
  <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    </body>