<!-- Contains Function for whole project -->
<!-- Making Database Connection -->
<?php
	session_start();
	$con=mysqli_connect("localhost","root","","patanjali");
	if(mysqli_connect_errno())
	{
		echo "The connection was not established.". mysqli_connect_errno();
	}
?>

<?php
	include('function_index.php');
	/*
		function for index page

		show_new -> display latest added product
		show_trending -> display most viewed product
		show_offer -> display products on which offers are there
	*/
	include('function_all_products.php');
	/*
		function for all_products page

		show_all()->display all products
	*/
	include('function_details.php');
	/*
		function for details page 

		increase_views($id)->it will increment views
	*/
 ?>


	


<?php
	// function to get IP address of user
	function getIp()
	{
		$ip=$_SERVER['REMOTE_ADDR'];

		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		return $ip;
	}

	// Function which o clicking add cart button add product to cart
	function cart()
	{
		global $con;
		$ip=getIp();
		echo "<script>alert($ip)</script>";
		if(isset($_GET['add_cart']))
		{
			$pro_id=$_GET['add_cart'];
			$check_pro="select * from cart where ip_add='$ip' AND p_id='$pro_id'";
			$run_check=mysqli_query($con,$check_pro);
			// only 1 product added at a time in cart
			if(mysqli_num_rows($run_check) )
				echo "";
			else
			{
				$insert_pro="insert into cart (p_id,ip_add) VALUES ('$pro_id','$ip')";
				$run_pro=mysqli_query($con,$insert_pro);

				echo "<script>window.open('index.php','_self')</script>";
			}
		}
	}

	//This function returns cat as an option
	function cat_option()
	{
		global $con;
		$q="select * from categories";
		$run=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($run))
		{
			$title=$row['cat_title'];
			$id=$row['cat_id'];
			echo "<option value='$id'>$title</option>";
		}
	}
	
?>




<?php

// this function returns category name
function cat_show($no)
{
	global $con;
	$q="select * from categories where cat_id='$no'";
	$run=mysqli_query($con,$q);
	$row=mysqli_fetch_array($run);
	$title=$row['cat_title'];
	return "$title";
}
function add_to_cart()
{
	$_SESSION['cart'][91]=["id"=>91,"qty"=>1];
} 
?>