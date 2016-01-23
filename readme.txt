About website 

The stylesheet of this website is based on the material lite design made by google
and PHP 5.4 and MYSQL for the content and user managment system.


---------------------------------------------------------------------------------------------------------------

Lampp module is used in the development of this site and it is tested to be working on ubuntu server 15.04

---------------------------------------------------------------------------------------------------------------

to run this on your system install xampp or lampp module (xampp for windows or lampp for linux)
   
copy this whole folder (intern) in the htdocs of lampp/xampp module.

If lampp is used make sure appropriate permissions are set for the file.


---------------------------------------------------------------------------------------------------------------

Setting up database

---------------------------------------------------------------------------------------------------------------

intern/dbms/dbms_imp.php

	contains the information for the connection to the database (default is 'user') edit this according to the need.

intern/class/login.class.php
intern/class/traits/password.trait.php
intern/functions/login.func.php

	contains the query to get the user details from the table (default is 'userdetail').which is structured as follow.

	Table structure for table userdetail

		|-------------------------------------------|
		|Column		|Type		|Null	|Default 	|
		|-------------------------------------------|
		|uniqueid	|int(11)	|No		|			|
		|username	|varchar(40)|No		|			|
		|password	|varchar(33)|No		|			|
		|emailid	|varchar(50)|No		|			|
		|firstname	|varchar(40)|No		|			|
		|surname	|varchar(40)|No		|			|
		|gender		|varchar(2)	|No		|			|
		|dob		|date 		|No		|			|
		|status		|varchar(20)|No		|			|
		|level		|varchar(10)|No		|user 		|
		|-------------------------------------------|

---------------------------------------------------------------------------------------------------------------

Site structure

---------------------------------------------------------------------------------------------------------------

Site contains only 3 pages (templates as it changes according to the content stored in database).
index.php 			this is the index page of the site which displays the content list
entry.php 			this page displayes the content specified by database (based on primary key)
entry_login.php 	same as entry.php by requried the user to login

---------------------------------------------------------------------------------------------------------------

all the functins used to display is stored in display/
all classes is stored in class/
all global functions are stored in functions/

	these folders can be explored to know more

---------------------------------------------------------------------------------------------------------------
By-
	Aman