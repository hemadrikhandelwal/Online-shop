<!DOCTYPE HTML>
<?php
 include("data.php");
 if (isset($_Post['submit']))
 {
 	if(!empty($_POST['username'])&& !empty($POST['password']))
 	{
 		$username=$_POST['username'];
 		$password=$_POST['password'];
 		$select="select*from mlogin where user_name='$username' && password='$password'";
 		$sql=mysql_query($select) or die(mysql_error());
 		if(mysql_num_rows($sql)==1)
 		{
 			echo;

 		}
 		else
 		{
 			echo"invalid username and id";
 		}
 	}
 }
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Minor Project </title>
	<!--linking css file-->
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<meta name="description" content=" The Project">
	<style type="text/css">
	body{
		margin-top:90px;
		padding:0px;
		background:url(6.jpeg);

	}
	li {
    -webkit-border-radius:25px; -moz-border-radius:25px; border-radius:25px;
}

	.menu ul{
		list-style:none;
		margin:0;
	}
	.menu ul li {
		padding: 15px;
		position: relative;
		width:200px;
		color: #fff;
		background-color: #34495E;
		border-top:1px solid #BDC3C7;
		
	}
	.menu ul li:hover{
		background-color:#3D0521;
		border-top:1px solid #000;
		padding-left:50px;
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
		margin-top: 5px;
		margin-bottom:5px;



	}
	.menu ul li a:hover{
		color:#8C95D4;
		font-family:"Andale Mono",monospace;
	}
	.menu ul li a{
		color: #fff;
		text-decoration:none;

	}
	.menu ul li.selected{
		background-color: #D8A7B4;
		color:#000;
		margin-left:15px;
		margin-top:5px;
		margin-bottom: 5px;
	}

	i{
		margin-right:15px;
	}
	.container{
		margin-bottom:50px;
		margin-top:0px;
	}
	.row{
		margin-top:10px;
	}
	.wrap-login{
		margin:0px;
		background-color:#F1E6E9;
		border:solid 1px #d0d0d0;
	
	}
	.btn-login{
		margin-left:auto;
		margin-right:auto;
		display:block;
		margin-bottom: 10px;
	}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="menu">
				<ul>
					<a href="index.php"><li class="selected"><i class="fa fa-lock"></i>Login</li></a>
					<a href="hospital.php"><li><i class="fa fa-hospital-o"></i>Hospitals</li></a>
					<a href="bb.php"><li><i class="fa fa-heartbeat"></i>Blood Bank</li></a>
						
					<a href=""><li><i class="fa fa-tint"></i>Blood group</li></a>
						
					<a href="donation.php"><li><i class="fa fa-id-card"></i>Donation List</li></a>

				</ul>	
			</div>
		</div>

		<div class=" wrap-login col-md-6">
		<h2 style="margin-top:30px;margin-left:145px;">Admin Login</h2>
			<form action="hospital.php" method="post">
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" name="username" class="form-control" id="" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" name="password" class="form-control" id="" placeholder="Password" required>
				</div>
				<div class="checkbox">
				<label>
					<input type="checkbox">Remember Me
				</label>
				</div>
				<button type="submit" class="btn-login btn btn-primary">Submit</button>

		
			</form>
		</div>
	</div>
</div>


	<script type="text/javascript">
	alert("Welcome to the BLOOD BANK MANAGEMENT!");
	</script>


	<!--linking of js -->
	<script src="js/jquery.js"</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/npm.js"</script>

</body>
</html>