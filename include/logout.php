<?php
	// Logout
	unset($_SESSION['email']);
	echo "<script>window.reload()</script>";
?>