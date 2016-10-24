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
	//error_reporting(0);
	
	if(isset($_SESSION['user']))
			{$userid=$_SESSION['user'];} 
		
		if($_SERVER["REQUEST_METHOD"] == "GET")
		{	
			echo "<p style='padding:10px 40px;'>Details of Movies are as follows</p>";
//			$movieid=mysql_real_escape_string ($_GET['movieid']);
				 
		//		 $qty=mysql_real_escape_string ($_GET['qty']);
				//  echo "$movieid<br/>$qty";
				$issdate = date("Y-m-d H:i:s");
				//$userid=100;	
				$total=mysql_real_escape_string($_GET['total']);
					
					mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
					mysql_select_db("userinfo") or die("Cannot connect to database"); //Connect to database
					$query3=mysql_query("select balance from reguser where userid='$userid' ");
					$row = mysql_fetch_row($query3);
					//echo $row[0];
					if($row[0]<$total)
					{
						
						echo "<b><p style='padding:10px 40px;'>Your Wallet Balance is Low</p></b>";
					}
				/*	$query2 = mysql_query("Select * from movies where movieid = '$movieid' ");
					while($row2 = mysql_fetch_array($query2))
				{
					$price=$qty*$row2['price'];
					$mname=$row2['mname'];
				}	 
				mysql_query("INSERT INTO ordercart (movieid,userid,buydate,qua,mname,price) VALUES ('$movieid','$userid','$issdate','$qty','$mname','$price')") or die(mysql_error());
				*/		
						//Print '<script>alert("book issued successfully!" );</script>'; 
						//print "Book Name =$biname<br/>ISBN=$id<br/>Issuedate=$issdate<br/>Due Date=$dudate";
						//echo $flag;
				echo "<table>"	;
				echo"<tr><th>Date</th><th>Movie name</th><th>Price</th></td>";
 				$query1 = mysql_query("Select * from ordercart where userid='$userid'"); //Query the users table
				
				//echo $orderid[0];
				while($row1 = mysql_fetch_array($query1))
				{
					//echo '<br/>';
					//$total=$total+$row1['price'];
					echo "<tr><td>".$row1['buydate']."</td>";
					echo '<br/>';
					echo "<td>".$row1['mname']."</td>";
					echo '<br/>';
					echo "<td>".$row1['price']."</td></tr>";
					
				}
				echo "</table>";
				echo '<table style="border:none;">';
				echo "<tr style='border:none;'><td style='border:none;'>Total Amount</td><td style='border:none;'><b>".$total."</b></td></tr>";
				echo "</table>";
				$query5 = mysql_query("Select orderid from ordercart where userid='$userid'");
				$orderid = mysql_fetch_row($query5);
				//echo $orderid[0];
		}
				/*while($row2 = mysql_fetch_array($query2))
				{
					print '<br/>';
					print '<td>'.$row2['mname'].'</td>';
					print '<br/>';
					print '<td>'.$qty*$row2['price'].'</td></tr>';
				}*/
		
		
echo '</div>';
?>
<form action="confirm.php" method="GET">
<!--<input type="hidden" name="orderid" size="100" value="<?php echo $orderid[0]; ?>">-->
<input type="hidden" name="total" size="100" value="<?php echo $total; ?>">
<input type="submit" name="confirm" size="100" value="confirm"></form>	
	
</body>	
</html>
