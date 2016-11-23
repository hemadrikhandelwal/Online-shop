<!-- function for all_products page -->
<!-- show_all() -> display all products -->

<?php
//Function to display all products
	//error_reporting(E_ERROR | E_PARSE); // This will not show Error
	function show_all()
	{
		global $con;
		$i=0;
		// This will show them by category
		if($_GET['cat'])
			$q_cat=$_GET['cat'];
		else
			$q_cat=0;

		// This will show them by price range 
		//Price start
		if($_GET['p_start'])
			$q_p_start=$_GET['p_start'];
		else
			$q_p_start=0;

		//price end
		if($_GET['p_end'])
			$q_p_end=$_GET['p_end'];
		else
			$q_p_end=2000;

		//sorting 
		/* 
			popularity (views) -> 1
			price low to highest -> 2
			price highest to lowest -> 3
			latest ->4
			oldest ->5
		*/ 
		if($_GET['sort'])
			$sort=$_GET['sort'];
		else
			$sort=0;

		//Now writing query based on no.
		if($sort==0)
			$q_sort="ORDER BY product_views desc";
		if($sort==1)
			$q_sort='ORDER BY product_views desc';
		if($sort==2)
			$q_sort='ORDER BY product_price asc';
		if($sort==3)
			$q_sort='ORDER BY product_price desc';
		if($sort==4)
			$q_sort='ORDER BY product_id desc';
		if($sort==5)
			$q_sort='ORDER BY product_id asc';

		if($q_cat==0)
			$q="select * from products where product_price between '$q_p_start' AND '$q_p_end' $q_sort";
		else
			$q="select * from products where product_cat='$q_cat' AND  product_price between '$q_p_start' AND '$q_p_end' $q_sort";
		$run=mysqli_query($con,$q);
		$count=mysqli_num_rows($run);
		if($count==0)
			echo "<div class='col-lg-12 text-danger' style='text-align:center;'><h1>No Product Found </h1></div>";
		else
		{
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


					echo "
						<div class='col-xs-6 col-sm-6 col-md-3 box' >
							
							<a href='details.php?product_id=$id' >
								<div class='title'>$title</div>
								<img src='admin_area/product_images/$image' alt='$image' height='200px' width='200px' border='1px solid black'/>
							</a>
								<div class='text'>
									Price : <b>₹ $price</b> <br />Qty: $qty $dim
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
	}

	//function to display form 
	
?>