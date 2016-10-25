/*<?php include 'test.php';
include 'header.php'; 

?>*/

<?php 
	if(isset($_SESSION['user']))
	{
		$userid=$_SESSION['user'];
	} 
		
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{	
		error_reporting(0);
		$newbalance=$_GET['balance'];

		
		echo '<div class="phpc">';
		echo '<h3>My Wallet</h3>';
		echo '<hr/>';
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("userinfo") or die("Cannot connect to database"); 
		$query1=mysql_query("select balance from reguser where userid='$userid'");
		$balance=mysql_fetch_row($query1);
		//echo "<table>";
		//echo "<tr style='border:3px'><th style='border:3px'>Balance:</th><th style='border:3px'>".$balance[0]."</th></tr>";
		//echo "</table>";
		//echo "<br/>";
		//echo '<h3>Add Money</h3>';
		//echo '<hr/>';
		$balance[0]=$balance[0]+$newbalance;
		mysql_query("update reguser set balance='$balance[0]' where userid='$userid'");
		header('location:mywallet.php');
		mysql_close();
		
		//header('Location: '.$_SERVER['PHP_SELF']);
		/// echo "<meta http-equiv='refresh' content='0'>";
		//header('HTTP/1.1 303 See Other');
		//header('Location: '.$_SERVER['HTTP_REFERER']);
		
	}


?>
	<!--<form action="mywallet.php" method="GET"  >
	<input type="radio" name="balance" value="200">Rs.200
	
	
	<input type="radio" name="balance" value="500">Rs.500
	
	
	<input type="radio" name="balance" value="1000">Rs.1000
	<input type="submit" value="Add"><b style='padding:0px 0px 0px 127px;'>(click again to confirm)</b>
	
	</form>

	
	</body>
<html>
-->
