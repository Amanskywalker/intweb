<?php

// basic page to connect to database to fetch the user details

$mysql_host="127.0.0.1";
$mysql_username="root";
$mysql_password="";
$mysql_db="book";
$connection=@mysqli_connect($mysql_host,$mysql_username,$mysql_password);
if(!$connection)
{
	echo "unable to connect to server<br/>".mysqli_connect_error();
	die();
}

$mysql_charset=@mysqli_set_charset($connection,'utf8');
if(!$mysql_charset)
{
	echo "unable to set database connection encoding<br/>".mysqli_connect_error();
	die();
}

$mysql_sdb=@mysqli_select_db($connection,$mysql_db);
if(!$mysql_sdb)
{
	echo "unable to locate database".mysqli_error($connection);
	die();

}

?>
