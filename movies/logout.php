<?php
	session_start();
	session_destroy();
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("userinfo") or die("Cannot connect to database"); //Connect to database
	mysql_query("DELETE FROM `ordercart` WHERE 1");
	header("location:../homepage.html");
?>