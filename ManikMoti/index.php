<?php
session_start() ;
 include ("header.php");
 ?>

 

<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/sliderstyle.css">
<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>


<body>

<section class="category" id="main-content" >
<div class="wrapper">
<div class="container">

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/3.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images/2.jpg" alt="Flower" width="460" height="345">
         <div class="carousel-caption">
        <!--h3>Chania</h3>
        <!--p>The atmosphere in Chania has a touch of Florence and Venice.</p-->
      </div>
      </div>
<div class="item">
        <img src="images/4.jpg" alt="Flower" width="460" height="345">
         <div class="carousel-caption">
        <!--h3>Chania</h3>
        <!--p>The atmosphere in Chania has a touch of Florence and Venice.</p-->
      </div>
      </div>
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<hr>
<h2>How it Works</h2>
<hr>
  <p></p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th bgcolor="#FFd777">Step 1</th>
        <th bgcolor="#FFd777">Step 2</th>
        <th bgcolor="#FFd777">Step 3</th>
        <th bgcolor="#FFd777">Step 4</th>
      </tr>
    </thead>
    <tbody>
    
     <tr>
        <td><ul><li><img src="images/gold.png" alt="" border=3 height=100 width=150></img></li><li><font color="#bc1515">Rent what you&nbsp; want</font></li></ul></td>
        <td><ul><li><img src="images/box.jpg" alt="" border=3 height=100 width=200></img></li><li><font color="#bc1515">Receive your jewelry</font></li></ul></td>
        <td><ul><li><img src="images/look1.jpg" alt="" border=3 height=100 width=200></img></li><li><font color="#bc1515">Look Fabulous</font></li></ul></td>
        <td><ul><li><img src="images/jeweldeliver.jpg" alt="" border=3 height=100 width=200></img></li><li><font color="#bc1515">Return to owner</font></li></ul></td>
      </tr>
      <tr>
        <td>First User:Post Your Add<br/>Second User :Select what you want</td>
        <td>Get Contact details of owner and Receive your jewelry</td>
        <td>Take lots of pictures and be prepared for lots of compliments.</td>
         <td>Second User:Return to owner<br/>First User:Get paid </td>
      </tr>
     
      
    </tbody>
  </table>




<hr>
<h1>Choose Category </h1>
<hr>
<!--row start-->
     <a href="fetchCat.php?cat=BridalJewelry">
            <div class="col-md-2 ">
            <div class="zoom-container">
			<img src="images/category/bridal.png" alt="#" />
		    </div>
            <span class="zoom-caption">
						<h3>Bridal Jewelry</h3>
					</span>
            </div></a>
            <a href="fetchCat.php?cat=PartyWear">
            <div class="col-md-2 ">
            <div class="zoom-container">
			<img src="images/category/fashion.png" alt="#" />
			</div>
            <span class="zoom-caption">
						<h3>Bridal Dress </h3>
		    </span>
            </div>	</a>
            
            <a href="fetchCat.php?cat=BrideGroom">
            <div class="col-md-2 ">
            <div class="zoom-container">
				
					
					<img src="images/category/dulha.png" alt="#" />
				
			</div>
            <span class="zoom-caption">
						<h3>Bride groom</h3>
					</span>
		</div></a> 
        
        
            
              
  <a href="fetchCat.php?cat=Forehead">
      <div class=" col-md-2">
	  <div class="zoom-container">
	  <img src="images/category/forehead.png"  alt="#"/>
	  </div>
      <span class="zoom-caption">
	  <h3>Forehead </h3>
      
	  </span>
       </div>	
  </a>
            
            
  <a href="fetchCat.php?cat=NoseWear">
       <div class=" col-md-2 ">
	   <div class="zoom-container">
	   <img src="images/category/nosering.png" alt="#" />
       </div>
       <span class="zoom-caption">
		<h3>Nose wear</h3>
		</span>
        </div>	
  </a>
            
            <a href="fetchCat.php?cat=EarWear">
             <div class="col-md-2 ">
			<div class="zoom-container">
			<img src="images/category/EarRing.png"  alt="#"/>
				
			</div><span class="zoom-caption">
						<h3>Ear wear</h3>
					</span>
            </div></a>
            
            <a href="fetchCat.php?cat=Necklace">
             <div class="col-md-2 ">
			<div class="zoom-container">
		     <img src="images/category/necklace.png" alt="#" />
			  </div><span class="zoom-caption">
						<h3>Necklace</h3>
					</span>
             </div>
             </a>
             
             
             <a href="fetchCat.php?cat=ArmWear">
             <div class="col-md-2 ">
			<div class="zoom-container">
		    <img src="images/category/armbracelet.png"  alt="#"/>
			</div><span class="zoom-caption">
			<h3>Arm wear</h3>
			</span>
            </div>
            </a>
            
            <a href="fetchCat.php?cat=Bangles">
            <div class="col-md-2 ">
            <div class="zoom-container">
			<img src="images/category/bangle.png"  alt="#"/>
			</div>
            <span class="zoom-caption">
						<h3>Bangle's</h3>
					</span>
            </div>	</a>
            
            <!--****row end**********-->
            <!--*****row**********-->
            
            
            	<a href="fetchCat.php?cat=Rings">
            <div class="col-md-2 ">
			<div class="zoom-container">
		    <img src="images/category/hand.png"  alt="#"/>
	        </div>
            <span class="zoom-caption">
						<h3>Ring's</h3>
			</span>
            </div>	</a>
            
            <a href="fetchCat.php?cat=WaistWear">
            <div class="col-md-2 ">
			<div class="zoom-container">
			<img src="images/category/kamar.png" alt="#" />
			</a>
			</div>
            <span class="zoom-caption">
						<h3>Waist wear</h3>
			</span>
            </div>
            
            <a href="fetchCat.php?cat=AnkelWear">
            <div class="col-md-2 ">
			<div class="zoom-container">
		    <img src="images/category/ankel.png"  alt="#" />
			</div>
            <span class="zoom-caption">
						<h3>Ankel wear</h3>
					</span>
            </div>	</a>
            
            
            
            
            
        </div>
		<!--/.image-zoom-container-->
		
		<hr/>
        <!-- Section for latest add-->
        
        
        
        <!-- End Section for latest add-->
		
 </div>
    
</section>
<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://web.facebook.com/manikmotiJPR/"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google"></i></a>
				

			</div>

			<div class="footer-center">

				

				<p>ManikMoti &copy; 2016</p>
			</div>

		</footer>
</body>


