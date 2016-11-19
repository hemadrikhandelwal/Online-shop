<!-- This Page will show all products -->
<?php
	include("function/function.php");
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
<body style="margin-top: 70px">

	<!-- Adding Navbar from external file -->
	<?php include("include/navbar.html") ?>	
	
<!--All Products -->
<div class="container">
	<div class="row">
		<div class="col-sm-2 bg-info" >
			<form name="">
				<div style="margin-top:20px">
					Sort By : 
					<select name="sort" id="sort">
						<option value="1">Popularity</option>
						<option value="2">Price: Low to High</option>
						<option value="3">Price: High to Low</option>
						<option value="4">Latest</option>
						<option value="5">Oldest</option>
					</select>
				</div>

				<hr />

				Category : 
				<select name="cat" id="cat">
					<option value="0">All Categories</option>
					<?php cat_option() ?>
				</select>

				<hr />

				Price Range : 
				<br />
				From : ₹ <input type="text" name="p_start" size="5" id="p_start"/>
				<br />
				<div style="margin-top:10px">
					To : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹ <input type="text" name="p_end" size="5" id="p_end" /></div>

				<hr />


				<div style="text-align:center; margin-bottom:10px">
					<input type="submit" value="GO" name="s"/>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" />
				</div>

			</form>
		</div>
		<div class="col-sm-10">
			<div class="page header" >
				<h3>All Products</h3>
			</div>
			<hr>
			<div class="row">
				<?php show_all(); ?>
			</div>
		</div>
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
                                <li > Order history
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
	<script src="js/add_to_cart.js"></script>
	<!-- To select the form automatically -->
	<script>
		var val = location.href.match(/[?&]cat=(.*?)[$&]/)[1];   // get params from URL
		$('#cat').val(val);

		val = location.href.match(/[?&]sort=(.*?)[$&]/)[1];
		$('#sort').val(val);

		val = location.href.match(/[?&]p_start=(.*?)[$&]/)[1];
		$('#p_start').val(val);

		val = location.href.match(/[?&]p_end=(.*?)[$&]/)[1];
		$('#p_end').val(val);
	</script>
</body>
</html>
