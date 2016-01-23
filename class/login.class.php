<?php
	// login.class.php
	
	include_once 'traits/password.trait.php';
	/*
		login class 
	*/
	class login 
	{
		
		// including password trait methods
		use password;

		function __construct($email,$password)
		{
			// add a sentizer script to neutralize the var
			if ($this->password_hash_comp($email,$password)) 
			{
				include 'dbms/dbms_imp.php';
				$query_run=$connection-> query("SELECT `uniqueid` FROM `userdetail` WHERE `emailid`='$email'");	
				mysqli_close($connection);
				$row=$query_run->fetch_array();

				$id=$row[0];
				$_SESSION['id']=$id;
				$GLOBALS[$id]=$_SESSION['id'];

				// redirect to userpage
				$current_file=$_SERVER['SCRIPT_NAME'];
				header('location: '.$current_file); 	//to redirect to current page
				echo "Logged in";
			} 
			else 
			{
				echo "Email and password combination is not correct";
			}
			
		}
	}
?>
