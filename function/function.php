<!-- Contains Function for whole project -->
<!-- Making Database Connection -->
<?php
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
	function cat_option()
	{
		echo "<option value='-1'>Select Category</option>";
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