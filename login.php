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
</head>
<body style="margin-top:70px;">
	<?php include("include/navbar.html") ?>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="text-center">Login</h1>
			</div>
			<div class="modal-body">
				<form class="col-md-12 center-block">
					<div class="form-group">
						<input type="text" class="form-control input-lg" placeholder="Username">
						
					</div>
					<div class="form-group">
						<input type="password" class="form-control input-lg" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-block btn-lg btn-primary" value="Login">
						<span class="pull-right"><a href="signup.php">Register</a></span>
						<span><a href="#">Forget Password </a></span>
					</div>
				</form>
				<div class="modal-footer">
					<div class="col-md-12">
						<button class="btn">Cancel</button>
					</div>
				</div>
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