<!-- function for all_products page -->
<!-- show_all() -> display all products -->

<?php
//Function to display all products 
	function show_all()
	{
		global $con;
		$i=0;
		if(isset($_GET['start']))
			$start=$_GET['start'];
		else
			$start=0;

		if(isset($_GET['end']))
			$end=$_GET['end'];
		else
			$end=10;

		$q="select * from products LIMIT $start,$end";
		$run=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($run))
		{
			$i+=1;
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
					<div class='col-xs-6 col-md-3 box' >
						
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
								<button type='button' class='btn btn-success'>Add to cart</button>
							</div>
								
					</div>
				";
		}
	}
?>