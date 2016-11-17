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
</head>
<body style="margin-top:70px">
	<!-- Adding Navbar from external file -->
	<?php include("include/navbar.html") ?>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="text-center">Register</h1>
			</div>
			<div class="modal-body">
				<form class="col-md-12 center-block">
					<div class="form-group">
						<input type="text" class="form-control input-lg" placeholder="First Name">
						
					</div>
					<div class="form-group">
						<input type="text" class="form-control input-lg" placeholder="Last name">
						
					</div>
					<div class="form-group">
						<input type="text" class="form-control input-lg" placeholder="Username">
						
					</div>
					<div class="form-group">
						<input type="password" class="form-control input-lg" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="password" class="form-control input-lg" placeholder="Retype Password">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-block btn-lg btn-primary" value="Register">
						<h6 style="margin-bottom:3px; text-align:center;">Already a user </h6>
					<span class="pull-right">  <a href="#">Login</a></span>
						<span><a href="#">Forget Password ?</a></span>
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