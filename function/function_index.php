<!-- Contains Function Index Page  -->

<!-- 
show_new -> display latest added product
show_trending -> display most viewed product
show_offer -> display products on which offers are there
-->

<?php
	//Function to display new arrivals
	function show_new()
	{
		global $con;
		$q="select * from products order by product_id desc limit 4";
		$run=mysqli_query($con,$q);
		$num=mysqli_num_rows($run);
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
					<div class='col-xs-6 col-md-3 box' >
						
						<a href='details.php?product_id=$id' >
							<div class='title'>$title</div>
							<img src='admin_area/product_images/$image' alt='$image' height='200px' width='200px' border='1px solid black'/>
						</a>
							<div class='text'>
								Price : <b>₹$price</b> <br />Qty: $qty $dim
							</div>

							<div class='buttons'>
								<a href='details.php?product_id=$id'>
									<button type='button' class='btn btn-primary'>Details</button>
								</a>
									<button type='button' class='btn btn-success addToCart' id='$id' >Add to cart</button>
							</div>
								
					</div>
				";
		}
	}

	//Function to display Trending
	function show_trending()
	{
		global $con;
		$q="select * from products order by product_views desc limit 4";
		$run=mysqli_query($con,$q);
		$num=mysqli_num_rows($run);
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
					<div class='col-xs-6 col-md-3 box' >
						
						<a href='details.php?product_id=$id' >
							<div class='title'>$title</div>
							<img src='admin_area/product_images/$image' alt='$image' height='200px' width='200px' border='1px solid black'/>
						</a>
							<div class='text'>
								Price : <b>₹$price</b> <br />Qty: $qty $dim
							</div>

							<div class='buttons'>
								<a href='details.php?product_id=$id'>
									<button type='button' class='btn btn-primary'>Details</button>
								</a>
								<button type='button' class='btn btn-success addToCart' id='$id' >Add to cart</button>
							</div>
								
					</div>
				";
		}
	}

	//Function to display Special Offer
	function show_offer()
	{
		global $con;
		$q="select * from products order by RAND() limit 3";
		$run=mysqli_query($con,$q);
		$num=mysqli_num_rows($run);
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

				$new_price=round((.8*$price)/5)*5;

				echo "
					<div class='col-xs-6 col-md-4 box' >
						
						<a href='details.php?product_id=$id' >
							<div class='title'>$title</div>
							<img src='admin_area/product_images/$image' alt='$image' height='200px' width='200px' border='1px solid black'/>
						</a>
							<div class='text'>
								Price : <b>₹</b><strike>$price</strike> <b style='color:red'>$new_price</b> <br />Qty: $qty $dim
							</div>

							<div class='buttons'>
								<a href='details.php?product_id=$id'>
									<button type='button' class='btn btn-primary'>Details</button>
								</a>
								<button type='button' class='btn btn-success addToCart' id='$id'>Add to cart</button>
							</div>
								
					</div>
				";
		}
	}
?>


