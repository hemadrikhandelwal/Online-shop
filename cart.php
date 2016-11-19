<?php
	include("function/function.php");
	// remove function
	if(isset($_GET['action']) AND $_GET['action']=='remove')
	{
		unset($_SESSION['cart'][$_GET['id']]);
	}

	// update function
	if(isset($_GET['action']) AND $_GET['action']=='update')
	{
		$_SESSION['cart'][$_GET['id']]['qty']=$_GET['qty'];
	}
	// Empty cart function
	if(isset($_GET['action']) AND $_GET['action']=='empty')
	{
		unset($_SESSION['cart']);
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
	<style>
		th{
			padding:10px !important
		}
		td{
			vertical-align:middle !important;
		}
		table{
			border: 1px solid #ddd;
		}
	</style>
</head>

<style>
#hi{float:right;text-decoration:underline;margin-top:5px; margin-bottom:5px;}

</style>
<body style="margin-top:70px;">
	
	<!-- Adding Navbar from external file -->
	<?php include("include/navbar.html") ?>

	<div class="container">
		<div class="page-header" style="margin-top:10px"><h2>Cart</h2></div>
		<?php
			if(isset($_GET['action']))
			{
				if($_GET['action']=="remove")
					echo '<div class="alert alert-danger alert-dismissible" style="padding:10px 35px 10px 15px">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						Product removed from cart.</div>';
				if($_GET['action']=="update")
					echo '<div class="alert alert-success alert-dismissible" style="padding:10px 35px 10px 15px">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						Product quantity updated.</div>';
			}
		?>
		<script>
			history.pushState({}, null,"cart.php");
		</script>
		<div class="row">
			<div class="col-lg-12" align="right">
				<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm" style="margin-bottom: 10px" > <b>X</b> &nbsp;Empty Cart </button>
			</div>
		</div>
		<div class="table-responsive">

			<table class="table table-striped table-hover table-condensed" style="vertical-align: middle">
				<thead>
					<tr class="info">
						<th>S.No.</th>
						<th>Image</th>
						<th>Product Title</th>
						<th>Price</th>
						<th>Amount</th>
						<th>Quantity</th>
						<th>Remove</th>
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
										<td>₹$tprice</td>
										<td><input type="text" class="form-control qty" size="1" value="$qty" id="$id" onChange="update($id)"/></td>
										<td><a href="?action=remove&id=$id"><button class="btn btn-warning btn-sm">Remove</button></a></td>
									</tr>
EOT;
							
							}
							echo "<tr class='info'>
							<td colspan='3'></td>
							<td>Total Price : </td>
							<td colspan='3'><h4>₹$sum</h4></td>
							</tr>";
							//Table ends here 
							//row begins

						}
					?>
				</tbody>
			</table>			
		</div>

		<div class="row" style="text-align:right">
			<div class="col-md-8 col-sm-4 "></div>
			<div class="col-md-4 col-sm-8 col-xs-12">
				<a href="index.php">
					<button class="btn btn-primary">Continue Shopping</button>
				</a>
				&nbsp;
				<a href="checkout.php">
					<button class="btn btn-success " id="checkoutButton">Checkout</button>
				</a>
			</div>
		</div>
		<br />
		<br />
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

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="confirm">
  		<div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content">
    			<div class="modal-body">
    				Are you sure?
		  		</div>
		  		<div class="modal-footer">
		    		<button type="button" data-dismiss="modal" class="btn btn-primary" onClick="emptyCart()">Delete</button>
		    		<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		  		</div>
    		</div>
  		</div>
	</div>
	

<!--linking of js -->
	<script src="js/jquery.js"</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="js/add_to_cart.js"></script>-->
	<script>
		function update(id)
		{
			//var id=$(this).parent().attr("id");
			var val=$("#"+id).val();
			if(!(val>1 && val<100))
				val=1;
			var url="cart.php?action=update&id="+id+"&qty="+val;
			window.open(url,"_self");
		}

		function emptyCart()
		{
			window.open("cart.php?action=empty","_self");
			//window.location.reload();
		}
		var item = <?php echo sizeof($_SESSION['cart']) ?>;
		if(item==0)
		{
			$('#checkoutButton').addClass('disabled');
		}
	</script>
</body>
</html>

