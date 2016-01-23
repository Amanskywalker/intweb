<?php
	//islogin.func.php
	/*
		function to check wether user is loged in or not 
	*/

	function islogin()
	{
		if (isset($_SESSION['id']) && !empty($_SESSION['id']))
		{
			return true;
		} 
		else 
		{
			return false;
		}
		
	}
?>

