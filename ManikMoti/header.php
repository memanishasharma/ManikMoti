<?php include ("postadd.php");
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ManikMoti Rent Wedding and party jewelries on reasonable fare and security amount,Bridal jewelleries in jaipur india's Latest designer ,in trend jewelleries on rent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Jewellery on rent,wedding jewellery on rent,bridal jewellery on rent,Lahanga's on rent,Sherwani on rent,ornaments on rent">

    <meta name="description" content="Post Free ad of jewelleris,accessories,bridal dresses,wedding and party dresses,as well as rent exclusive bridal and wedding jewellery in jaipur,Latest in trend jewellery including mang tikka,hathphool,rani har,rakhadi,kadde,payal and many more... ">
    
    

  
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-contact-form.css">
    
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
     
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php include_once("analyticstracking.php") ?>
  <section id="container" >
      <!--TOP NAVIGATION BAR -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>ManikMoti</b></a>
            <!--logo end-->
            
             <?php
			  
			  if(isset($_SESSION['mail']))
			  {
                       echo '<div class="top-menu">';
            	echo '<ul class="nav pull-right top-menu">';
                  echo' <li><a class="logout" href="logout.php">';
				 echo  'Log Out';
				 echo '</a></li>';
            	echo '</ul>';
            echo '</div>';
			  }
              else
              {
                       echo '<div class="top-menu">';
            	echo '<ul class="nav pull-right top-menu">';
                  echo' <li><a class="logout" href="login.php">';
				 echo  'Log In';
				 echo '</a></li>';
				  echo' <li><a class="logout" href="register.php">';
				 echo  'Register';
				 echo '</a></li>';
            	echo '</ul>';
            echo '</div>';
			  }
			echo '<div class="top-menu">';
            	echo '<ul class="nav pull-right top-menu">';
                  echo' <li><a class="logout" href="https://goo.gl/qC1KKx">';
				 echo  'Download App';
				 echo '</a></li>';
            	echo '</ul>';
            echo '</div>';  
			  
			  
			  ?>
           
           
           
             
        </header>
      <!--header end-->
      
      <!-- MAIN SIDEBAR MENU-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <?php
			
			  if(!isset($_SESSION['mail']))
			  {
             
             echo " <ul class='sidebar-menu' id='nav-accordion'> ";
              
            echo "<p class='centered'><a href='profile.php'><img src='assets/img/ui-sam.jpg' class='img-circle' width='60'></a></p> ";
              	  echo "<h5 class='centered'></h5>" ;
              	  	
                  echo "<li class='mt'>";
                   echo "<a  href='index.php'>";
                         echo '<i class="fa fa-home"></i>';
                           echo '<span>Home</span>';
                       echo ' </a>';
                  echo  '</li>';

                  

          echo' <li class="sub-menu">';
                   echo    ' <a href="aboutus.php" >';
                          echo ' <i class="fa fa-spinner fa-pulse"></i>';
                           echo '<span>About Us</span>';
                      echo ' </a>';
                     
                  echo ' </li>';
                   echo '<li class="sub-menu">';
                       echo '<a href="contactus.php" >';
                          echo ' <i class="fa fa-envelope-o fa-fw"></i>';
                          echo ' <span>Contact US</span>';
                       echo '</a>';
                     
                   echo '</li>';
                   echo '<li class="sub-menu">';
                       echo '<a href="feedbackView.php" >';
                          echo ' <i class="fa fa-users"></i>';
                          echo ' <span>Our User Says</span>';
                       echo '</a>';
                     
                  echo ' </li>';
				   
				 
                     
                  echo ' </li>';
				    echo '<li class="sub-menu">';
                       echo '<a href="latest.php" >';
                          echo ' <i class="fa fa-star-o"></i>';
                          echo ' <span>Latest Ad</span>';
                       echo '</a>';
                     
                  echo ' </li>';
				  // echo '<li class="sub-menu">';
                       //echo '<a href="share.php" >';
                          //echo ' <i class="fa fa-dashboard"></i>';
                          //echo ' <span>Share</span>';
                       //echo '</a>';
                     
                  //echo ' </li>';
				   echo '<li class="sub-menu">';
                       echo '<a href="faq.php" >';
                          echo ' <i class="fa fa-question"></i>';
                          echo ' <span>Faqs</span>';
                       echo '</a>';
                     
                  echo ' </li>';
				   
				   
                  
                  

               echo '</ul>';
			  }
			   if(isset($_SESSION['mail']))
			  {
				  echo " <ul class='sidebar-menu' id='nav-accordion'> ";
              
            echo "<p class='centered'><a href='profile.php'><img src='assets/img/ui-sam.jpg' class='img-circle' width='60'></a></p> ";
              	  echo "<h5 class='centered'>";
				  if(isset($_SESSION['mail']))
 {
  $username=$_SESSION['mail'];


 echo $username;
  }
  
  
  else
  echo "Not LogIn";
				  
				  
				  
				 echo " </h5>" ;
              	  	
                  echo "<li class='mt'>";
                   echo "<a  href='index.php'>";
                         echo '<i class="fa fa-home"></i>';
                           echo '<span>Home</span>';
                       echo ' </a>';
                  echo  '</li>';

                  echo  '<li class="sub-menu">';
                      echo  "<a href='profile.php'>";
                          echo " <i class='fa fa-user'></i>";
                           echo "<span>My Account</span>";
                       echo "</a>";
                     
                  echo  '</li>';

                 
                
				   
				   
				   
				   
                   echo '<li class="sub-menu">';
                       echo '<a href="javascriopt:;" >';
                          echo ' <i class="fa fa-bullhorn"></i>';
						 echo  '<span>Feedback</span></a>';
						 
						 echo  '<ul class="sub">';
					   echo ' <li><a  href="feedbackview.php">';
					   echo ' <i class="fa fa-users"></i>';
                       echo ' <span>Our User Says</span>';
                       echo '</a></li>';
                       echo '<li>';
                       echo '<a href="feedbackWrite.php" >';
                       echo ' <i class="fa fa-edit"></i>';
                       echo ' <span>Write Feedback</span>';
                       echo '</a>';
                       echo ' </li></ul>';
				  
				  
				  echo '<li class="sub-menu">';
				  echo '<a href="javascriopt:;" >';
				  echo ' <i class="fa fa-desktop"></i>';
				   echo  '<span>My Ad</span></a>';
				    echo  '<ul class="sub">';
					 echo ' <li><a  href="myad.php">';
					 echo ' <i class="fa fa-shield"></i>';
					  echo ' <span>Posted By me</span>';
                       echo '</a></li>';
                       echo '<li>';
                       echo '<a href="showshortlist.php" >';
                       echo ' <i class="fa fa-heart"></i>';
                       echo ' <span>Shortlist Ad</span>';
                       echo '</a</li>';
                       echo '<li>';
					   
                       echo '<a href="recentad.php" >';
                          echo ' <i class="fa fa-star-o"></i>';
                          echo ' <span>Recent Ad</span>';
                       echo '</a>';
					   
					   echo '</ul>';
                       
				 
				  
				    
                     
                 //echo ' </li>';
				  // echo '<li class="sub-menu">';
                       //echo '<a href="share.php" >';
                         // echo ' <i class="fa fa-dashboard"></i>';
                          //echo ' <span>Share</span>';
                      // echo '</a>';                     
                 // echo ' </li>';
				   echo '<li class="sub-menu">';
                       echo '<a href="faq.php" >';
                          echo ' <i class="fa fa-question"></i>';
                          echo ' <span>Faqs</span>';
                       echo '</a>';
                     
                  echo ' </li>';
				    echo' <li class="sub-menu">';
                   echo    ' <a href="aboutus.php" >';
                          echo ' <i class="fa fa-spinner fa-pulse"></i>';
                           echo '<span>About Us</span>';
                      echo ' </a>';
                     
                  echo ' </li>';
                   echo '<li class="sub-menu">';
                       echo '<a href="contactus.php" >';
                          echo ' <i class="fa fa-envelope-o fa-fw"></i>';
                          echo ' <span>Contact US</span>';
                       echo '</a>';
                     
                   echo '</li>';
                  
                  

               echo '</ul>';
				  
			  }
			  ?>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      <!--sidebar end-->
      </section>
      
      <!-- js placed at the end of the document so the pages load faster -->
    
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
   <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
   </body>
</html>