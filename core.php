<?php
//ini_set('display_errors','0');	//to be set active when site goes live
// core file must be include in all pages (almost all)
//include "dbms/dbms_imp.php";		// monved to respective functions & classes to increase the security 

spl_autoload_register(function ($class) 
{
    include 'class/'.$class.'.class.php';
});

//@ob_start();

@session_start();

$current_file=$_SERVER['SCRIPT_NAME'];
$http_referer=@$_SERVER['HTTP_REFERER'];
	//default values
	
	//echo $current_file;

$userid=@$_SESSION['id'];
?>