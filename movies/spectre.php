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
    
        <title>DVDbox- Spectre!!</title>
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
			<h1 align='center'>Cinderella </h1>
			<table style="width:100%">
				<tr>
					<th rowspan='4'><img src="movieimage/spectreoff.jpg" alt="error" ></th>
					<th rowspan="4"><h4>Rating: 7/10</h4><br>
                        <p>A cryptic message from Bond's past sends him on a trail to uncover a sinister organization.
						While M battles political forces to keep the secret service alive,
						Bond peels back the layers of deceit to reveal the terrible truth behind SPECTRE.
                        </p></th>
				</tr>
				<tr>
					<th rowspan="4"><h4>Director:</h4>
						<ol><li> Sam Mendes</li></ol>  
						<br>
						<h4>Writers:</h4>
						<ol>
							<li>John Logan</li><br>
							<li>Neal Purvis</li><br>
							<li>Robert Wade</li><br>
							<li>Jez Butterworth</li><br>
						</ol> 
					</th>
					<th rowspan="4"><h4>Actors:</h4>   
						<ol>
						<li>Daniel Craig <i>as James Bond </i></li>
						<br>
						<li>Christoph Waltz <i>as Blofield </i></li>
						<br>
						<li>Lea Seydoux <i>as Madeline</i></li>
						<br>
						<li>Ralph <i>as the M</i></li>
						<br>
						</th>
				</tr>
			</table>
		</div>
		<div class="cart">
			<form action="cart.php" method="GET">
				Quantity <input type="text" name="qty" size="5"  value="1"> 
				<input type="hidden" name="movieid" value="1005">
				<input type="submit" name="cart" size="5" value="add to cart"> 
			</form
		</div>   
			
		<div class="footer">
	   
			<footer>
						DVDbox
			</footer>
			   
			
		</div>
	</body>

</html>
