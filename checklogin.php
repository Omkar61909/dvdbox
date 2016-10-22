<?php
	session_start();
	$emailid = mysql_real_escape_string($_POST['emailid']);
	$password = mysql_real_escape_string($_POST['password']);
	
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("userinfo") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("SELECT * from reguser WHERE email='$emailid'"); 
	$exists = mysql_num_rows($query);
	$table_users = "";
	$table_password = "";
	if($exists > 0) 
	{
		while($row = mysql_fetch_assoc($query)) 
		{
			$table_email = $row['email']; 
			$table_password = $row['pass'];
		}
		if(($emailid == $table_email) && ($password == $table_password)) 
		{
				if($password == $table_password)
				{
					$_SESSION['user'] = $row['userid']; 
					
					header("location: home.php");
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; 
			Print '<script>window.location.assign("login.html");</script>'; // redirects to login.php
		}

	}
	else
	{
		Print '<script>alert("Incorrect email!");</script>'; //Prompts the user
		Print '<script>window.location.assign("login.html");</script>'; // redirects to login.php
	}
?>