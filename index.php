<?php
  session_start(); // Starting session for user login and cart option;
  //$_SESSION['cart']=array();//intializing cart session
	include("function/function.php");
	if($_SESSION['cart']);
	else
		$_SESSION['cart']=[];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Patanjali E-Shop </title>
	<meta name="description" content="Patanjali E Shop">
	
	<!-- Linking Offline Files -->
	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/bootstrap-theme.css" >
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" >

	<link rel="stylesheet" href="css/style.css">
</head>

<style>
#hi{float:right;text-decoration:underline;margin-top:5px; margin-bottom:5px;}

</style>
<body>
	<!-- Adding navbar from other file -->
	<?php include("include/navbar.html"); ?>


	<!-- Carousel ================================================== -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    	<!-- Indicators -->
    	<ol class="carousel-indicators">
        	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        	<li data-target="#myCarousel" data-slide-to="1"></li>
        	<li data-target="#myCarousel" data-slide-to="2"></li>
      	</ol>
      	<div class="carousel-inner" role="listbox">
        	<div class="item active" >
          		<img class="first-slide center-block" src="images/poster22.jpg" alt="First slide" >
          		<div class="container">
            		<div class="carousel-caption">
              			<h3>Wide range of products to choose from</h3>
              			<p><a class="btn btn-lg btn-primary" href="all_products.php" role="button">View All Products</a></p>
            		</div>
          		</div>
        	</div>
        	<div class="item">
          		<img class="second-slide center-block" src="images/poster11.jpg" alt="second slide">
          		<div class="container">
            		<div class="carousel-caption">
              			<h3>Wide range of products to choose from</h3>
              			<p><a class="btn btn-lg btn-primary" href="all_products.php" role="button">View All Products</a></p>
            		</div>
          		</div>
        	</div>
        	<div class="item ">
          		<img class="third-slide center-block" src="images/poster33.jpg" alt="Third slide">
          		<div class="container">
            		<div class="carousel-caption">
              			<h3>Wide range of products to choose from</h3>
              			<p><a class="btn btn-lg btn-primary" href="all_products.php" role="button">View All Products</a></p>
            		</div>
          		</div>
        	</div>
        </div>
        

      	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
       		<span class="sr-only">Previous</span>
      	</a>
      	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        	<span class="sr-only">Next</span>
      	</a>
    </div><!-- /.carousel -->
	
<!--Images-->
<!--	<div class="container">-->
		
	
	

	
<!--detail 2-->
<div class="container">
	<div class="page header">
		<h3 style="margin-bottom:10px">Trending</h3>
	</div>
	<hr>
	<div class="row">
		<?php show_trending(); ?>
	</div>
</div>

<!--detail 3-->
<div class="container">
	<div class="page header">
		<h3 style="margin-bottom:10px">New Arrivals</h3>
	</div>
	<hr>
	<div class="row">
		<?php show_new() ?>
	</div>
</div>	


<!--detail-5-->
<div class="container">
	<div class="page header">
		<h3 style="margin-bottom:10px">Special offer</h3>
	</div>
	<hr>
	<div class="row">
		<?php show_offer() ?>
	</div>
</div>
	
<!--footer-->
	<footer>
    	
       		<div class="jumbotron">
        	<div class="container text-center">
          		<div class="row">
          		 		<div class="col-lg-3">
                    	<h3> About Us</h3>
    
                        <p><h5> dummy things ahead</h5></p>
                     	</div>
                
          			 	<div class="col-lg-3">
                    	<h3> Contact Us</h3>
                        <p><h5> dummy things ahead</h5></p>
                     	</div>
               
               
          			 	<div class="col-lg-3">
                    	<h3>Information </h3>
                        <h5>	
                        	<ul style="list-style-type:none">
                        	<li>About us</li>
                            <li>Delivery Information</li>
                    		<li>Terms and Privecy</li>
                            <li>Contact us</li>
          				      <li>Return Policy</li>     
                    		</ul>
                            </h5>
                     	</div>
       
       		   		 	<div class="col-lg-3">
                    	<h3> Customer support</h3>
                        <h5>
                        	<ul style="list-style-type:none">
                            	<li>Contact us</li>
                            <li>Returns
                                </li>
                                <li > rder history
                                </li>
                                <li > Seller Login
                                </li>
                            </ul>
                       	</h5>
                     </div>
                    
               </div>
              </div>
             </div>
 
            <div style="float:right; padding-right:20px">
            	<ul class="list-inline" >   
            		<li><a href="http://www.quora.com/mohit-khandelwal-31" title="Quora" ><img src="images/social/quora.png" alt="text" ></a></li>
          			<li><a href="#" title="Twitter"><img src="images/social/twitter.png" alt="text" ></a></li>
            		<li><a href="#" title="Linkedin"><img src="images/social/linkedin.png" alt="text"></a></li>
            		<li><a href="#" title="Facebook"><img src="images/social/FBButton.png" alt="text"></a></li>
            	</ul>
            </div>

            <div style="text-align:center">	
          		<p>Designed & Developed by Hemadri Khandelwal and Mohit Khandelwal  </p>
    		</div>
    </footer>

<!--linking of js -->
	<script src="js/jquery.js"</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/add_to_cart.js"></script>
	<script>
		//custom JS 
	</script>
</body>
</html>
