<?php
session_start();

		if(isset($_SESSION['user'])){$_SESSION['user']=$_SESSION['user'];}
	
		$user=$_SESSION['user']; 
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("userinfo") or die("Cannot connect to database"); //Connect to database
		$query=mysql_query("select fname from reguser where userid='$user'");
		$name= mysql_fetch_assoc($query);
?>