<!-- This Page will be used to display single product -->
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
<body style="margin-top:70px">
	<!--navbar-->
	
	<nav class="navbar navbar-inverse navbar-fixed-top twoRow" id="my-navbar">
		<div class="container">
			<div class="navbar-header">
				<div class="row">

					<div class="col-lg-2">
						<div class="navbar-header">
							<a href="index.php" class="navbar-brand">Patanjali E-Shop</a>
						</div>
					</div>
		
					<div class="col-lg-4">
						<div class="input-group" style="margin-top:8px">
							<input type="text" class="form-control" placeholder="Search for..." />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
							</span>
						</div>
					</div>

					<div class="col-lg-4">					
					</div>
				
					<div class="col-lg-1" >
						<div class="form-group">
							<div class="col-lg-12" style="text-align:ceter;margin-top:10px">
								<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;Cart</button>
							</div>
						</div>
					</div>
			
					<div class="col-lg-1">
								<div class="btn-group" style="margin:2px">
									<button type="button" class="btn btn-success navbar-btn dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></button>
									<div class="dropdown-menu"  >
										<div class="col-sm-12">
											<div class="col-sm-12">Login</div>
												<div class="col-sm-12" width="50px">
												<input type="text" placeholder="User name" onClick="return false;" class="form-control input-sm" id="inputError"/>
												</div>
												<br/>
												<div class="col-sm-12">
												<input type="password" placeholder="Password" class="form-control input-sm" name="password" id="Password1" />
												</div>
												<sub><span id="hi">Forget password?</span></sub>
												<div class="col-sm-12" style="text-align:center; margin-top:3px">
												<button type="submit" class="btn btn-success btn-sm">Sign in</button>
												<div class="form_orDivider">-or-</div>
												<button type="submit" class="btn btn-primary btn-sm" style="margin-top:5px">Sign up</button>
												</div>
									  </div>
								  </div>
							  </div>
				  </div>
						
					<!--<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
					<li class="active"><a href="#">Ediable</a></li>
						
					<li><a href="#cosmetic">Cosmetic</a></li>
					<li><a href="#daily products">Daily products</a></li>
					<li><a href="#contact">Contact</a></li>
					</ul>
				</div>-->

				</div>
			</div>
		</div>
	</nav>

	
	<!-- Main Page content begins here -->
	<div class="container">
	<div class="jumbotron">
		<ol class="breadcrumb">
	    	<li><a href="#">Home</a></li>
	    	<li><a href="#">Edible</a></li>
	    	<li class="active">Namkin</li>
	    </ol>
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
	<script src="js/npm.js"</script>

</body>
</html>
