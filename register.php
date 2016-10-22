<html>
    <head>
    
        <title>DVDbox-Registration</title>
		<link rel="stylesheet" type="text/css" href="register.css" />
        <link rel="stylesheet" type="text/css" href="regheader.css">
        <link rel="stylesheet" type="text/css" href="regfooter.css">
         <link rel="stylesheet" type="text/css"href="regpagecss.css">
    </head>
    <body>
    
        <div class="header">
            
            <a href="homepage.html"><img src="image/logo.jpg" alt="error" ></a>
            <ul class="navbar">
                <li class="menubar">
                    <div class="dropdown">
                        <button class="dropbtn">Help</button>
                          <div class="dropdown-content">
                            <a href="#">Order Help</a>
                            <a href="#">Product Help</a>
                            <a href="#">Contact Us</a>
                          </div>
                    </div>
                </li>
                <li> 
                     <a href="#"><button class="dropbtn">Checkout</button></a>
                </li>
               
				<li> 
                    
                    <a href="login.html"><button class="dropbtn">Login</button></a>        
                </li>  				
             </ul>
        </div>
    
	<div class="reg">
	
	
	
	<form action="register.php" method="POST">
	
	<p>Personal Info</p>
	
    <input type="text" placeholder="First Name" id="fname" name="firstname">
	<br>
    <input type="text" placeholder="Last Name" id="lname" name="lastname">
	<br>
	<div class="divradio">
	<input type="radio" name="gender" value="male">Male
	<br>
	<input type="radio" name="gender" value="female">Female
	<br>
	</div>
	<br>
	<br>

	
	<p>Contact Info</p>
	
	<input type="text" placeholder="Address" id="address" name="address">
	<br>
    <input type="text" placeholder="Mobile Number" id="mobileno" name="mobileno">
	<br>
	<input type="text" placeholder="E - Mail ID" id="emailid" name="emailid">
	<br>
	<br>
	<br>
	
	
	<p>Credentials</p>
	
	<input type="password" name="password" placeholder="Password ( 8 - 16 characters )" id="password">
	<input type="password" name="repassword" placeholder="Re - Enter Password" id="repassword">
	<br>
	<br>
	<br>
	<br>
	
	<input type="reset" value="Reset Entire Form">
	<br>
	<input type="submit" value="Submit">
	</form>
  
	</div>

	
	
        
    <div class="footer">
   
        <footer>
               DVDbox
        </footer>
           
        
     </div>
        
    </body>

</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$fname = mysql_real_escape_string($_POST['firstname']);
	$lname = mysql_real_escape_string($_POST['lastname']);
	$addreg = mysql_real_escape_string($_POST['address']);
	$mobno = mysql_real_escape_string($_POST['mobileno']);
	$email = mysql_real_escape_string($_POST['emailid']);
	$pass = mysql_real_escape_string($_POST['password']);
	$repass=mysql_real_escape_string($_POST['repassword']);
	$gen=$_POST['gender'];
    $bool = true;
	
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("userinfo") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("Select * from reguser"); //Query the users table
	while($row = mysql_fetch_array($query)) //display all rows from query
	{
		$table_email = $row['email']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_email) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("email is already registered, Try login!!");</script>'; //Prompts the user
			//Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
		}
	}

	if($bool) // checks if bool is true
	{
		mysql_query("INSERT INTO reguser (fname,lname,addre,gen,mobno,email,pass) VALUES ('$fname','$lname','$addreg','$gen','$mobno','$email','$pass')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered! You will be Redirected to Login Page");</script>'; // Prompts the user
		Print '<script>window.location.assign("login.html");</script>'; // redirects to register.php
	}

}




?>
