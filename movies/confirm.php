<?php include 'test.php'; 
 include 'header.php'; ?>
 
 <?php
 
	if(isset($_SESSION['user']))
			{$userid=$_SESSION['user'];} 
	echo '<div class="phpc">';
	echo '<h2>Bill</h2><hr/>	';
	if($_SERVER["REQUEST_METHOD"] == "GET")
		{	
			mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
			mysql_select_db("userinfo") or die("Cannot connect to database");
			$total=mysql_real_escape_string ($_GET['total']);
			$query1=mysql_query("select balance from reguser where userid='$userid'");
			$balance=mysql_fetch_row($query1);
			if ($balance[0] < $total)
			{
				echo "<script>alert('balance is less')</script>";
				header("location:mywallet.php");
			}
			else
			{
				$balance[0]=$balance[0]-$total;
				mysql_query("update reguser set balance='$balance[0]' where userid='$userid'");
			}				
			$query=mysql_query("select fname,lname,addre,mobno,email from reguser where userid='$userid'");
			while($row = mysql_fetch_array($query))
			{
				echo "<table style='border:3px'>";
				echo "<tr style='border:3px'><th style='border:3px;' >Name:</th><th style='border:3px'>".$row['fname']." ". $row['lname']."</th></tr>";
				echo "<tr style='border:3px'><th style='border:3px'>Address:</th><th style='border:3px'>".$row['addre']."</th></tr>";
				echo "<tr style='border:3px'><th style='border:3px'>Mobile no.:</th><th style='border:3px'>".$row['mobno']."</th></tr>";
				echo "<tr style='border:3px'><th style='border:3px'>Email:</th><th style='border:3px'>".$row['email']."</th></tr>";
				echo "<tr style='border:3px'><th style='border:3px'>Total:</th><th style='border:3px'>".$total."</th></tr>";
				echo "</table>";
				
			
			}
			echo "<br/>";
			echo "<h3>Thank you ! for shopping with us</h3>";
		}
?>