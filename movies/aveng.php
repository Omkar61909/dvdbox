<?php
session_start();
 if(isset($_SESSION['user'])){$_SESSION['user']=$_SESSION['user'];}
$user=$_SESSION['user']; 
mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
mysql_select_db("userinfo") or die("Cannot connect to database"); //Connect to database
$query=mysql_query("select fname from reguser where userid='$user'");
$name= mysql_fetch_assoc($query);
?>

<html>
    <head>
    
        <title>DVDbox- Avenger!!</title>
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" type="text/css" href="footer.css">
         <link rel="stylesheet" type="text/css"href="pagecss.css">
		 <link rel="stylesheet" type="text/css"href="login.css"> 
		 <style>
			table, th, td {
			//  border: 1px solid black;
			border-collapse: collapse;
			table-layout:fixed;
			}
			th, td {
			padding: 10px;
			text-align: center;
			border-right: 5px solid #ddd;
			}
</style>
    </head>
    <body >
    
        <div class="header">
            
            <a href="homepage.html"><img src="../image/logo.jpg" alt="error" ></a>
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
                    <div class="dropdown">
                   <button class="dropbtn">Hi!! <?php echo $name['fname'];?></button>
					<div class="dropdown-content">
                            <a href="logout.php">logout</a>
                            </div>
                          </div>
                </li>  
							
             </ul>
        </div>
    
        
		 <div class="reg">   
			<h1 align='center'>Avengers: Age of Ultron </h1>
			<table style="width:100%">
				<tr>
					<th rowspan='4'><img src="movieimage/avengersoff.jpg" alt="error" ></th>
					<th rowspan="4"><h4>Rating: 8/10</h4><br><p>Fearing that the actions of Superman are left unchecked, Batman takes on the Man of Steel, while the world wrestles with what kind of a hero it really needs.</p></th>
				</tr>
				<tr>
					<th rowspan="4"><h4>Director:</h4>
						<ol><li>Joss Whedon</li></ol>  
						<br>
						<h4>Writers:</h4>
						<ol><li>Joss Whedon</li><br>
						<li>Stan Lee</li><br>
						<li>Jack Kirby</li></ol> 
					</th>
					<th rowspan="4"><h4>Actors:</h4>   
						<ol>
						<li>Robert Downey Jr. <i>as Tony Stark</i></li>
						<br>
						<li>Chris Evans <i>as Steve Rodgers</i></li>
						<br>
						<li>Mark Ruffalo <i>as Bruce Banner</i></li>
						<br>
						<li>Scarlett Johansson <i>as Natasha Romanoff</i></li>
						<br>
						<li>Chris Hemsworth <i>as Thor</i></li>
					</th>
				</tr>
			</table>
		</div>
		<div class="cart">
			<form action="cart.php" method="GET">
				Quantity <input type="text" name="qty" size="5"  value="1"> 
				<input type="hidden" name="movieid" value="1001">
				<input type="submit" name="cart" size="5" value="add to cart"> 

		</div>   
			
		<div class="footer">
	   
			<footer>
						DVDbox
			</footer>
			   
			
		</div>
	</body>

</html>
