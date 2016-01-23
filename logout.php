<?php
	// page used to logout 
	include 'core.php';
	session_destroy();
	header('location: '.$http_referer); 	//to redirect to current page
 ?>