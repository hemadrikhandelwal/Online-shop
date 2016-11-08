<!-- Page to make a new sub category -->
<?php
	include("../function/function.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Sub Category</title>
	</head>

	<body >
		<form action="add_sub_cat.php" method="POST">
			<table align="center" width="600"  bgcolor="#008080">
				<tr align="center">
					<td colspan="2">Add New Sub Category <br /><hr /></td>
				</tr>
				<tr>
					<td>Name : </td>
					<td><input type="text" placeholder="Enter Title" name="title" required/></td>
				</tr>
				<tr>
					<td>Super Category : </td>
					<td>
						<select name="parent" >
							<?php cat_option(); ?>
						</select>
					</td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="submit" name="submit" value="Add" /></td>
				</tr>
				<tr>
					<td><div id="msg"></div></td>
				</tr>
			</table>
		</form>
		

	</body>
</html>

<?php
	
	if(isset($_POST['submit']))
	{
		$title=$_POST['title'];
		$parent=$_POST['parent'];
		$q="insert into sub_cats (sub_cat_title,sub_cat_parent) values ('$title','$parent')";
		$run=mysqli_query($con,$q);
		if($run)
		{
			echo "<script>document.getElementById('msg').innerHTML='$title is Added.'</script>";
			echo "<script>alert('Sub category added');</script>";
			echo "<script>window.open('add_sub_cat.php','_self')</script>";
		}
		else
		{
			echo "<script>document.getElementById('msg').innerHTML='Error in Adding $title.'</script>";
			echo $q;
		}
	}
?>
