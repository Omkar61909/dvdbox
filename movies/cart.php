<?php include 'test.php'; ?>

<html>
<head>
	<title>DVDbox- Cart!!</title>
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



<?php
	echo '<div class="phpc">';
	
	//session_start(); //starts the session
	
		if(isset($_SESSION['user']))
			{$userid=$_SESSION['user'];} 
		
		if($_SERVER["REQUEST_METHOD"] == "GET")
		{	
			echo "<p>Details of Movies are as follows</p>";
			//$id=$_GET["id"];
			//if(isset($_GET['id'])){
				 $movieid=mysql_real_escape_string ($_GET['movieid']);
				 
				 $qty=mysql_real_escape_string ($_GET['qty']);
				//  echo "$movieid<br/>$qty";
				$issdate = date("Y-m-d H:i:s");
				//$userid=100;	
					
					
					mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
					mysql_select_db("userinfo") or die("Cannot connect to database"); //Connect to database
					$query2 = mysql_query("Select * from movies where movieid = '$movieid' ");
					while($row2 = mysql_fetch_array($query2))
				{
					$price=$qty*$row2['price'];
					$mname=$row2['mname'];
				}	 
				mysql_query("INSERT INTO ordercart (movieid,userid,buydate,qua,mname,price) VALUES ('$movieid','$userid','$issdate','$qty','$mname','$price')") or die(mysql_error());
						
						//Print '<script>alert("book issued successfully!" );</script>'; 
						//print "Book Name =$biname<br/>ISBN=$id<br/>Issuedate=$issdate<br/>Due Date=$dudate";
						//echo $flag;
				echo "<table>"	;
				echo"<tr><th>Date</th><th>Movie name</th><th>Price</th></td>";
 				$query1 = mysql_query("Select * from ordercart where userid='$userid'"); //Query the users table
				
				while($row1 = mysql_fetch_array($query1))
				{
					//echo '<br/>';
					echo "<tr><td>".$row1['buydate']."</td>";
					echo '<br/>';
					echo "<td>".$row1['mname']."</td>";
					echo '<br/>';
					echo "<td>".$row1['price']."</td></tr>";
				}
				/*while($row2 = mysql_fetch_array($query2))
				{
					print '<br/>';
					print '<td>'.$row2['mname'].'</td>';
					print '<br/>';
					print '<td>'.$qty*$row2['price'].'</td></tr>';
				}*/
		}
echo '</div>';
?>
<div class="butt">
<form action="checkout.php" method="POST">
<input type="hidden" name="movieid" value="1001">
<input type="submit" name="cart" size="100" value="checkout">
</form>
<form action="../userhome.php">
<input type="submit" name="cart" size="100" value="More Movies"></form>
</div>
<!--
<div class="footer">
	   
			<footer>
						DVDbox
			</footer>
			   
			
		</div>

-->
</body>
</html>