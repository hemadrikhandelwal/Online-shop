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
<body style="margin-top:70px;">
	
	<!-- Adding Navbar from external file -->
	<?php include("include/navbar.html") ?>

	<div class="container">
		<div class="page-header"><h2>Search Result</h2></div>
		
		<?php
			if(isset($_GET['query']))
			{
				$query=$_GET['query'];
				$q="select * from products WHERE product_keys LIKE '%$query%' ";
				$run=mysqli_query($con,$q);
				if(mysqli_num_rows($run)==0)
				{
					echo "<div style='text-align:center; font-size:1.5em; margin-bottom:50px;'> No Relevant Product found for query <u><b><i>$query</i></b></u></div>";
				}
				while($row=mysqli_fetch_array($run))
				{
					$id=$row['product_id'];
					$title=$row['product_title'];
					$cat=$row['product_cat'];
					$price=$row['product_price'];
					$qty=$row['product_qty'];
					$dim=$row['product_dim'];
					$image=$row['product_image'];
					$desc=$row['product_desc'];
					$keys=$row['product_keys'];
					$views=$row['product_views'];

					echo "
						<div class='row'>
							<div class='col-md-2 col-xs-2'>
								<img src='admin_area/product_images/$image' width='200' height='200'class='img-responsive'/>
							</div>
							<div class='col-md-10 col-xs-10'>
								<div class='col-xs-12 col-md-8'>
									<h3>$title</h3>
									<p>Price : ₹$price &nbsp;&nbsp;&nbsp;Qty : $qty $dim</p>
								</div>
								<div class='col-xs-12 col-md-4'>
									<div class='col-xs-6'>
										<button class='btn btn-primary'>Details</button>
									</div>
									<div class='col-xs-6'>
										<button class='btn btn-success'>Add to cart</button>
									</div>
								</div>
							</div>
							
						</div><!-- rows -->
						<hr />
					";
				}
			}
			
		?>
		
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
	<script src="js/npm.js"</script>

</body>
</html>
