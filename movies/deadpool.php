<?php include 'test.php'; ?>
<html>
    <head>
    
        <title>DVDbox- Deadpool!!</title>
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
			<h1 align='center'>Deadpool </h1>
			<table style="width:100%">
				<tr>
					<th rowspan='4'><img src="movieimage/deadpooloff.jpg" alt="error" ></th>
					<th rowspan="4"><h4>Rating: 8/10</h4><br>
                        <p>A former Special Forces operative turned
						mercenary is subjected to a rogue experiment that leaves him with
						accelerated healing powers, adopting the alter ego Deadpool.
                        </p></th>
				</tr>
				<tr>
					<th rowspan="4"><h4>Director:</h4>
						<ol><li>Tim Miller </li></ol>  
						<br>
						<h4>Writers:</h4>
						<ol>
							<li>Rhett Reese</li><br>
							<li>Paul Wernick</li><br>
							<li>Fabian Nicieza</li><br>
							<li>Rob Liefeld</li><br>
						</ol> 
					</th>
					<th rowspan="4"><h4>Actors:</h4>   
						<ol>
						<li>Ryan Reylonds <i>as Deadpool</i></li>
						<br>
						<li>Morena Baccarin <i>as Vanessa</i></li>
						<br>
						<li>T.J Miller <i>as Weasel</i></li>
						<br>
						<li>Karan Soni <i>as the Dopinder</i></li>
						<br>
						<li>Ed Skerin <i>as Ajax</i></li>
					</th>
				</tr>
			</table>
		</div>
		<div class="cart">
			<form action="cart.php" method="GET">
				Quantity <input type="text" name="qty" size="5"  value="1"> 
				<input type="hidden" name="movieid" value="1004">
				<input type="submit" name="cart" size="5" value="add to cart"> 

		</div>   
			
		<div class="footer">
	   
			<footer>
						DVDbox
			</footer>
			   
			
		</div>
	</body>

</html>
