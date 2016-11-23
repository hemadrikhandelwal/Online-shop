<?php
	// Logout
	include("function/function.php");
	
	unset($_SESSION['email']);
	echo "<script>window.history.back()</script>";
?>