<?php
	//include
	include("function/function.php");

	//to ensure logged in user can never access it
	if(isset($_SESSION['email']))
	{
		echo"<script>window.open('index.php','_self');</script>";
	}

	//Login script
	
	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$q="select * from user where user_email='$email'";
		$run=mysqli_query($con,$q);
		if(mysqli_num_rows($run)==0)
		{
			phpAlert("Email not registered");
		}
		else
		{
			$row=mysqli_fetch_array($run);
			$db_pass=$row['user_password'];
			if($db_pass!=$pass)
			{
				//when password is wrong
				phpAlert("Wrong Password ");
			}
			else
			{
				//login successful
				$_SESSION['email']=$email;
				//updating last active
				$dt=date("d/m/Y G:i:s");
				$q="update user set user_last_active='$dt' where user_email='$email'";
				$run=mysqli_query($con,$q);
				// Redirecting
				echo"<script>window.open('index.php','_self');</script>";
			}
		}
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login </title>
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
<body style="margin-top:70px;">
	<?php include("include/navbar.html") ?>

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="text-center">Login</h1>
			</div>

			<form class="col-md-12 center-block modal-body" action="login.php" method="POST" >
				<div class="form-group">
					<input type="email" class="form-control input-lg" placeholder="Email" name="email">
				</div>
				<div class="form-group">
					<input type="password" class="form-control input-lg" placeholder="Password" name="password">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-block btn-lg btn-primary" value="Login" name="login" >
					<br />
					<span class="pull-right">Not yet registered ? <a href="signup.php">Register Here</a></span>
					<span><a href="#">Forget Password </a></span>
				</div>
			</form>

			<div class="modal-footer">
					<div class="col-md-12">
						<a href="index.php">
							<button class="btn btn-default">Cancel</button>
						</a>
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

