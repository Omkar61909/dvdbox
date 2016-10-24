<html>
    <head>
    
        <title>DVDbox- Login!!</title>
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" type="text/css" href="footer.css">
         <link rel="stylesheet" type="text/css"href="pagecss.css">
		 <link rel="stylesheet" type="text/css"href="login.css"> 
		 <style>
			table, th, td {
			//  border: 1px solid black;
			border-collapse: collapse;
			}
			th, td {
			padding: 10px;
			text-align: left;
			border-right: 1px solid #ddd;
			}
</style>
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
                    
                    <a href="userhome.php"><button class="dropbtn">User Home</button></a>        
                </li>  
							
             </ul>
        </div>
    
        
     <div class="reg">   
		<?php
	session_start(); //starts the session
	
		if(isset($_SESSION['user']))
			{$userid=$_SESSION['user'];} 
		
		if($_SERVER["REQUEST_METHOD"] == "GET")
		{	
			echo "Details of Movies are as follows<br/>";
			//$id=$_GET["id"];
			//if(isset($_GET['id'])){
				 $movieid=mysql_real_escape_string ($_GET['movieid']);
				 
				 $qty=mysql_real_escape_string ($_GET['qty']);
				  echo "$movieid<br/>$qty";
				$issdate = date("Y-m-d H:i:s");
				//$userid=100;	
					
					
					mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
					mysql_select_db("userinfo") or die("Cannot connect to database"); //Connect to database
					
					
						 
				mysql_query("INSERT INTO ordercart (movieid,userid,buydate,qua) VALUES ('$movieid','$userid','$issdate','$qty')") or die(mysql_error());
						
						//Print '<script>alert("book issued successfully!" );</script>'; 
						//print "Book Name =$biname<br/>ISBN=$id<br/>Issuedate=$issdate<br/>Due Date=$dudate";
						//echo $flag;
					
 				$query = mysql_query("Select * from ordercart where userid='$userid'"); //Query the users table
				while($row = mysql_fetch_array($query))
				{
					print '<br/>';
					print $row['buydate'];
				}
				
		}

		?>
      </div>  
      
	  <div class="footer">
   
            <footer>
                    DVDbox
            </footer>
           
        
        </div>
        
    </body>

</html>
