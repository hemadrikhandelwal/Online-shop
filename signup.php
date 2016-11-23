<?php
	include("function/function.php")
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<meta name="description" content=" The Grocery Shop">
	
	<!-- Linking Offline Files -->
	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/bootstrap-theme.css" >
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
	<style>
		body{
			
			background-image: url("images/bg.jpg")  ;
			background-position: center;
    		background-size: cover;    	
		}
	</style>
</head>
<body style="margin-top:70px">
	<!-- Adding Navbar from external file -->
	<?php include("include/navbar.html") ?>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="text-center">Register</h1>
			</div>

			<form class="col-md-12 center-block modal-body" action="signup.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Name" name="uname" required>
				</div>

				<div class="form-group">
					<input type="email" class="form-control input-lg" placeholder="Email" name="uemail" required>	
				</div>

				<div class="form-group">
					<input type="password" class="form-control input-lg" placeholder="Password" name="upass">
				</div>

				<div class="form-group">
					<input type="password" class="form-control input-lg" placeholder="Retype Password" name="urepass">
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-block btn-lg btn-primary" value="Register" name="register" >
					<br />
					<span class="pull-right">Already a user ?  <a href="login.php">Login Here</a></span>
					
				</div>
			</form>

			<div class="modal-footer">
				<div class="col-md-12">
					<button class="btn btn-default">Cancel</button>
				</div>
			</div>
		</div>
	</div>


<!--linking of js -->
	<script src="js/jquery.js"</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/npm.js"</script>

</body>
</html>
<?php 
	$flag=1;
	if(isset($_POST['register']))
	{
		$uname=$_POST['uname'];
		$uemail=$_POST['uemail'];
		$upass=$_POST['upass'];
		$urepass=$_POST['urepass'];
		/*/ form validation
		echo "$upass $repass";
		if($upass!=$urepass)
		{
			echo "123";
			//to be done when password and repassword mismatch
			echo "<script>alert('Password Mismatch')</script>";
			//echo "<script>window.open('signup.php','_self')</script>";
			$flag=0;
		}
		$q="select * from user where user_email='$uemail'";
		$run=mysqli_query($con,$q);
		if(mysqli_num_rows($run)>0 && $flag)
		{
			//to be done when already exist in database
			echo "<script>alert('Email already exist')</script>";
			echo "<script>window.open('signup.php','_blank')</script>";
			$flag=0;
		}*/
		$d=date("j/m/Y");
		$t=date("H:i:s");
		if($flag)
		{
			$q="insert into user (user_name,user_email,user_password,reg_date,reg_time) values ('$uname','$uemail','$upass','$d','$t')";
			$run=mysqli_query($con,$q);
			if($run)
			{
				//If registration successful
				phpAlert("Account succesfully registered");
				echo "<script>window.history.back()</script>";
			}
			else
			{
				//If registration failed
				phpAlert('something went wrong');
				echo "<script>window.open('signup.php','_self')</script>";
			}
		}
	}
?>