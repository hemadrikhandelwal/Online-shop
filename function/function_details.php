<!-- Contains Function details Page  -->

<!-- 
increase_views($id)->increment view by 1;
-->

<?php
	function increase_views($id)
	{
		global $con;
		$q="update products set product_views=product_views+1 where product_id='$id'";
		$run=mysqli_query($con,$q);
	}
?>


