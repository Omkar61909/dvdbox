<html>
<head>
	<title>DVDbox</title>
        <link rel="stylesheet" type="text/css" href="header.css">
      <!--  <link rel="stylesheet" type="text/css" href="footer.css">-->
         <link rel="stylesheet" type="text/css"href="pagecss.css">
		 <link rel="stylesheet" type="text/css"href="login.css"> 
		 <style>
	<style type="text/css">
	
	</style>
</head>
<body>
<div class="header">
            
            <a href="../userhome.php"><img src="../image/logo.jpg" alt="error" ></a>
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
                    
                      
                        <a href="cart.php"><button class="dropbtn">Cart</button></a>
                        
                    
                
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
