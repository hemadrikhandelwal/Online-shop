<?php
	//checkout
	include("function/function.php");

	//validating
	if(!isset($_SESSION['email']))
	{
		phpLoad("login.php");	//function to load particular page 
	}
	else if(sizeof($_SESSION['cart'])==0)
	{
		phpLoad("cart.php");
	}
	else
	{
		echo "";
	}
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
	<style type="text/css">
		.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
	border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
	margin-bottom: -1px;
}
.panel .nav
{
	font-size:18px;
}

/*** PANEL SUCCESS ***/
/* Src -> http://bootsnipp.com/snippets/featured/panels-with-nav-tabs*/
.with-nav-tabs.panel-success .nav-tabs > li > a,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
}
.with-nav-tabs.panel-success .nav-tabs > .open > a,
.with-nav-tabs.panel-success .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-success .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
	background-color: #d6e9c6;
	border-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.active > a,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:focus {
	color: #3c763d;
	background-color: #fff;
	border-color: #d6e9c6;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #3c763d;   
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #3c763d;
}
	.disabledTab{
    pointer-events: none;
}
    	th{
			padding:10px !important
		}
		td{
			vertical-align:middle !important;
		}
		table{
			border: 1px solid #ddd;
		}

		.row img
		{
			margin:auto;
			max-width:50%;
		}
		.row p
		{
			margin:10px auto;
			font-size:1.2em;
		}
	</style>
</head>

<body style="margin-top:70px">
	<!-- Adding navbar from other file -->
	<?php include("include/navbar.html"); ?>

	<div class="container">
		<div class="page-header" style="margin-top:10px"><h2>Checkout</h2></div>

		<!--<ul class="nav nav-tabs nav-justified">
  			<li role="presentation" class="active"><a href="#">Home</a>
  			<li role="presentation" ><a href="#">Message</a>
  			<li role="presentation" ><a href="#">Role</a>
		</ul>
		<div id="xyz" class="container">
			fbjhbsfgjbsfdjbjsfdvfsjbjvb
		</div>
		<br />-->

		<div class="panel with-nav-tabs panel-success">
            <div class="panel-heading">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active" ><a href="#tab1" data-toggle="tab" >Step 1 : Confirm Cart &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-check" aria-hidden="true"></span></a></li>
                        <li><a href="#tab2" data-toggle="tab" class="disabledTab">Step 2 : Billing Address &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></a></li>
                        <li><a href="#tab3" data-toggle="tab" class="disabledTab">Step 3 : Payment Option &nbsp;&nbsp;&nbsp;<b>₹</b></a></li>
                    </ul>
            </div>

            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
	                    <div class="table-responsive">
		                    <table class="table table-striped table-hover table-condensed" style="margin-top:15px">
			                    <thead>
									<tr class="info">
										<th>S.No.</th>
										<th>Image</th>
										<th>Product Title</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
								<?php
									if(!sizeof($_SESSION['cart']))
									{
										echo "<tr><td colspan='7' style='text-align:center'><h3>No Product in Cart</h3><br /></td></tr>";
										
									}
									else
									{ 
										$arr=$_SESSION['cart'];
										$i=0;
										$sum=0;
										foreach($arr as $x=>$pro)
										{
											++$i;
											$id=$pro['id'];
											$q="select * from products where product_id='$id'";
											$run=mysqli_query($con,$q);
											$row=mysqli_fetch_array($run);

											$title=$row['product_title'];
											$image=$row['product_image'];
											$qty=$pro['qty'];//from session
											$price=$row['product_price'];
											$tprice=$price*$qty;
											$sum+=$tprice;
											echo <<< EOT
												<tr>
													<td>$i</td>
													<td><img src="admin_area/product_images/$image" height="50px"  /></td>
													<td><big>$title</big></td>
													<td>₹$price</td>
													<td>$qty</td>
													<td>₹$tprice</td>
												</tr>
EOT;
										
										}
										echo "<tr class='info'>
										<td colspan='4'></td>
										<td>Total Price : </td>
										<td><h4>₹$sum</h4></td>
										</tr>";
										//Table ends here 
										//row begins

									}
								?>
								</tbody>
							</table>			
						</div><!-- responsive table end -->
						<div class="row" style="text-align:right">
							<div class="col-md-8 col-sm-4 "></div>
							<div class="col-md-4 col-sm-8 col-xs-12">
								<a href="cart.php">
									<button class="btn btn-warning">Edit Cart</button>
								</a>
								&nbsp;
								<button class="btn btn-success" id="proceedto2">Confirm & Proceed</button>
							</div>
						</div>
						<br />
                    </div>

                    <div class="tab-pane fade" id="tab2">
                    	<form class="form-horizontal">
							<fieldset>

								<!-- Form Name -->
								<legend>Shipping Address Details</legend>

								<!-- Text input-->
								<div class="form-group">
									<label class="col-sm-3 col-md-3 control-label" for="address">Address : </label>  
									<div class="col-sm-8 col-md-8">
										<input id="address" name="address" type="text" placeholder="Address" class="form-control input-md" required>
										<span class="help-block"></span>  
									</div>
									<div class="col-sm-1 col-md-1"></div>
								</div>


								<div class="form-group">
									<label class="col-sm-3 col-md-3 control-label" for="area">Village/Town/City : </label>  
									<div class="col-sm-8 col-md-3">
										<input id="area" name="area" type="text" placeholder="Village/Town/City" class="form-control input-md" >
										<span class="help-block"></span>  
									</div>
									<label class="col-sm-3 col-md-2 control-label" for="pin">PIN Code : </label>  
									<div class="col-sm-8 col-md-3">
										<input id="pin" name="pin" type="text" placeholder="6 Digit PIN Code" class="form-control input-md" required="">
										<span class="help-block"></span>  
									</div>
									<div class="col-sm-1 col-md-1"></div>
									
								</div>

								<div class="form-group">
									<label class="col-sm-3 col-md-3 control-label" for="district">District :</label>  
									<div class="col-sm-8 col-md-3">
										<input id="district" name="district" type="text" placeholder="District" class="form-control input-md" >
										<span class="help-block"></span>  
									</div>
									<label class="col-sm-3 col-md-2 control-label" for="state">State :</label>  
									<div class="col-sm-8 col-md-3">
										<input id="state" name="state" type="text" placeholder="state" class="form-control input-md" >
										<span class="help-block"></span>  
									</div>
									<div class="col-sm-1 col-md-1"></div>
									
								</div>

								<div class="form-group">
									<label class="col-sm-3 col-md-3 control-label" for="contact">Contact Number : </label>  
									<div class="col-sm-8 col-md-3">
										<input id="contact" name="contact" type="text" placeholder="e.g. 9879876789" class="form-control input-md" required="">
										<span class="help-block"></span>  
									</div>
									<label class="col-sm-3 col-md-2 control-label" for="street">Alternate Number :</label>  
									<div class="col-sm-8 col-md-3">
										<input id="altNo" name="altNo" type="text" placeholder="e.g. 9879876789" class="form-control input-md">
										<span class="help-block"></span>  
									</div>
									<div class="col-sm-1 col-md-1"></div>
									
								</div>

								



							</fieldset>
						</form>
						<br />
						<div class="row" style="text-align:right">
							<div class="col-md-8 col-sm-4 "></div>
							<div class="col-md-4 col-sm-8 col-xs-12">
								<button class="btn btn-success" id="proceedto3">Proceed to Payment</button>
							</div>
						</div>
						<br />
                    </div><!--tab2 ends -->

                    <div class="tab-pane fade" id="tab3">
	                    	
	                    	<div style="text-align:center">
	                    		<h4>Net Amount to pay : 
	                    			<span style="font-size: 1.8em">
	                    				<div class="label label-success">₹
			                    		<?php
			                    			echo $sum;
			                    		?>
	                    				</div>
	                    			</span>
	                    		</h4>
	                    	</div>

	                    	<div class="page-header"><h4>Choose Payment Option :</h4></div>

	                    	<div class="row" style="text-align: center;">
	                    		<div class="col-sm-4 col-xs-12">
									<img src="images/icons/check.png" alt="Lights" class="img-responsive" id="check">
									 <p>Pay via Check</p>
									    
								</div>
	                    		<div class="col-sm-4 col-xs-12">
	                    			<img src="images/icons/wallet.png" alt="Lights" class="img-responsive" id="cod">
									 <p>Cash on Delivery</p>
	                    		</div>
	                    		<div class="col-sm-4 col-xs-12">
	                    			<img src="images/icons/credit-card.png" alt="Lights" class="img-responsive" id="credit">
									 <p>Pay via Card</p>
	                    		</div>
	                    	</div>

	                    	<div class="row" >
								<div class="col-md-8 col-sm-4 "></div>
								<div class="col-md-4 col-sm-8 col-xs-12" style="text-align:right">
									<br />
									<a href="cart.php" class="btn btn-default">Cancel</a>
									&nbsp;
									<button class="btn btn-success" id="proceedto4">Place Order</button>
								</div>
							</div>
						<br />
                    </div><!-- tab 3 ends -->
                    
                </div><!--tab-content-->
            </div><!-- panel body-->
        </div><!--container-->
        <!--
        <br />
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  			<div class="panel panel-default">
  			<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    			<div class="panel-heading" role="tab" id="headingOne">
      				<h4 class="panel-title">
        				
          					Collapsible Group Item #1
        				
      				</h4>
    			</div>
    		</a>
    			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      				<div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      				</div>
    			</div>
  			</div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
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
		//$("ul.nav li").removeClass('active').addClass('disabledTab');
		$("#proceedto2").on("click",function(){
			$("li:nth-child(2) a").removeClass('disabledTab');
			$("li:nth-child(2) a").tab('show');
		})
		$("#proceedto3").on("click",function(){
			$("li:nth-child(3) a").removeClass('disabledTab');
			$("li:nth-child(3) a").tab('show');
		})
		$("#proceedto4").on("click",function(){
			alert("Order Placed");
			window.open("index.php","_self");
		})
		//$("li:nth-child(2) a").removeClass('disabledTab'); 
	</script>
</body>
</html>
