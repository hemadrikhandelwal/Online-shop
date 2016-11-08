<!-- Page to insert new category -->
<?php
	include("../function/function.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add Product</title>
	</head>

	<body >
		<form action="add_product.php" method="POST" enctype="multipart/form-data">
			<table align="center" width="600"  bgcolor="#abc7f4">
				<tr align="center">
					<td colspan="2">Add New Product <br /><hr /></td>
				</tr>
				<tr>
					<td>Title : </td>
					<td><input type="text" placeholder="Enter Title" name="title" size="30" required/></td>
				</tr>
				<tr>
					<td>Category : </td>
					<td>
						<select name="cat" >
							<?php cat_option(); ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Quantity : </td>
					<td>
						<input type="text" placeholder="Enter Quantity" name="qty" required />
						&nbsp; &nbsp;
						<select name="dim">
							<option value="gm">gm</option>
							<option value="kg">kg</option>
							<option value="ml">ml</option>
							<option value="ltr">ltr</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Price : </td>
					<td>₹<input type="text" name="price" placeholder="Enter price " required></td>
				</tr>
				
				<tr>
					<td>Image : </td>
					<td><input type="file" name="image" /></td>
				<tr>
					<td>Description : </td>
					<td><textarea cols="50" rows="10" name="desc"></textarea></td>
				</tr>
				<tr>
					<td>Keywords : </td>
					<td><input type="text" name="keys" placeholder="e.g. cheap, best, healty" size="50" required></td>
				</tr>


				<tr align="center">
					<td colspan="2"><input type="submit" name="submit" value="Add" /></td>
				</tr>
			</table>
		</form>
		

	</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$title=$_POST['title'];
		$cat = $_POST['cat'];
		$qty=$_POST['qty'];
		$dim = $_POST['dim'];
		$price = $_POST['price'];
		$keys = $_POST['keys'];
		$desc = $_POST['desc'];

		//Checking Cat
		if($cat==-1)
			$cat=7;

		//Taking Images
		$image=$_FILES['image']['name'];
		$image_tmp=$_FILES['image']['tmp_name'];

		//Copying File to designated folder
		move_uploaded_file($image_tmp,"product_images/$image");

		//writing insert query
		$q="insert into products (product_title,product_cat,product_qty,product_dim,product_image,product_price,product_keys,product_desc,product_views) values ('$title','$cat','$qty','$dim','$image','$price','$keys','$desc','0') ";
		$run=mysqli_query($con,$q);
		if($run)
		{
			echo"<script>alert('Product Added Succesfully.')</script>";
			echo"<script>window.open('add_product.php','_self');</script>";
		}
		else
		{
			echo"<script>alert('Something went wrong.')</script>";
			echo"<script>window.open('add_product.php','_self');</script>";
		}
	}
?>