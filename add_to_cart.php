<?php
	//Add to cart
	session_start();
	if(isset($_GET['action']) AND $_GET['action']=="add")
	{
		$flag=1;
		//$_SESSION['cart']=[]; //reset cart
		$arr=array("id"=>$_GET['id'],"qty"=>1);
		//check for not to add a product twice
		foreach($_SESSION['cart'] as $id=>$pro)
		{

			if($id==$_GET['id'])
				$flag=0;
		}
		if($flag==1)
		{
			$_SESSION['cart'][$_GET['id']]=$arr;
		}

		echo json_encode(array($flag,sizeof($_SESSION['cart']))); //this will be display in navbar
	}
?>
