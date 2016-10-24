<?php include 'test.php'; ?>

<html>
    <head>
    
        <title>DVDbox- wellcome!!</title>
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" type="text/css" href="footer.css">
         <link rel="stylesheet" type="text/css"href="pagecss.css">
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
                    <div class="dropdown">
                   <button class="dropbtn">Hi ! <?php echo $name['fname'];?></button>
					<div class="dropdown-content">
						<a href="mywallet.php">My Wallet</a>
                        <a href="movies/logout.php">Logout</a>
                            </div>
                          </div>
                </li>  				
             </ul>
        </div>
    
        
        
        <div class="mainbody">
           <img src="image/bvson.jpg">
            
         </div>   
            
        <div class="wrapper">New Movies
            <div class="scrolls">
                 <a href="./movies/aveng.php"><img class="imgr" src="image/avengersoff.jpg" ></a>
                <a href="./movies/cinderella.php">  <img class="imgr" src="image/cinderellaon.jpg" ></a>
                <a href="./movies/hg.php">  <img class="imgr" src="image/hgon.jpg" ></a>
                <a href="./movies/cinderella.php">  <img class="imgr" src="image/cinderellaon.jpg" ></a>
                <a href="./movies/deadpool.php">  <img class="imgr" src="image/deadpooloff.jpg"></a>
                <a href="./movies/spectre.php">  <img class="imgr" src="image/spectreon.jpg" ></a>
                <a href="#">  <img class="imgr" src="image/jurassicon.jpg" ></a>
                <a href="#">  <img class="imgr" src="image/insurgenton.jpg" ></a>
                <a href="#">  <img class="imgr" src="image/ithotson.jpg" ></a>
                <a href="#">  <img class="imgr" src="image/ralong2on.jpg" ></a>
                <a href="#">    <img class="imgr" src="image/legendon.jpg" ></a>
            </div>
        </div>
            <div class="wrapper sconscroll">Top Movies
            <div class="scrolls">
               <a href="./movies/aveng.php"><img class="imgr" src="image/avengersoff.jpg" ></a>
                <a href="./movies/cinderella.php">  <img class="imgr" src="image/cinderellaon.jpg" ></a>
                <a href="./movies/hg.php">  <img class="imgr" src="image/hgon.jpg" ></a>
                <a href="./movies/cinderella.php">  <img class="imgr" src="image/cinderellaon.jpg" ></a>
                <a href="./movies/deadpool.php">  <img class="imgr" src="image/deadpooloff.jpg"></a>
                <a href="./movies/spectre.php">  <img class="imgr" src="image/spectreon.jpg" ></a>
                <a href="#">  <img class="imgr" src="image/jurassicon.jpg" ></a>
                <a href="#">  <img class="imgr" src="image/insurgenton.jpg" ></a>
                <a href="#">  <img class="imgr" src="image/ithotson.jpg" ></a>
                <a href="#">  <img class="imgr" src="image/ralong2on.jpg" ></a>
                <a href="#">    <img class="imgr" src="image/legendon.jpg" ></a>
            </div>
        </div>
        
        
        
        
        
        <div class="footer">
   
            <footer>
                    DVDbox
            </footer>
           
        
        </div>
        
    </body>

</html>
