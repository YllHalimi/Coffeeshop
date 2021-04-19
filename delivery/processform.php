<?php 
session_start();
//Create  short variable names
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$date = date('D, d M Y H:i:s');
?>
<html>
<head>
<title>Cattegat Coffee Shop - Order Results</title>
</head>
<body>
<h1>Cattegat Coffee Shop</h1>
<h2>Order Results</h2>

<?php
echo "<p>Order processed at ".$date."</p>";
echo "<p>Your order is as follows: </p>";
$totalqty = 0;
$totalqty = (float)$_SESSION['expressoqty'] +  (float)$_SESSION['latteqty']+  (float)$_SESSION['teaqty'];
echo "Items ordered: ".$totalqty."<br/>";

if( $totalqty ==0) {
	
	echo "You did not order anything on the previous page <br/>";
}
else{
	
		if((int)$_SESSION['expressoqty'] > 0){
			echo (int)$_SESSION['expressoqty']." expresso<br/>";
		}
		if( (int)$_SESSION['latteqty'] > 0){
			echo  (int)$_SESSION['latteqty'] ." latte<br/>";
		}
		if((int)$_SESSION['teaqty'] > 0){
			echo (int)$_SESSION['teaqty']." tea<br/>";
		}
	}
	
	$totalamount = 0.00;
	
	define('EXPRESSOPRICE', 5);
	define('LATTEPRICE', 6);
	define('TEAPRICE', 4);
	
	$totalamount =(int)$_SESSION['expressoqty']   * EXPRESSOPRICE + (int)$_SESSION['latteqty'] * LATTEPRICE + (int)$_SESSION['teaqty']* TEAPRICE;
	$totalamount=number_format($totalamount, 2, '.', ' ');
	
	echo "<p>Total of order is $". $totalamount."</p>";
	echo"<p>Address to ship to is: ". $_SESSION['address']."</p>";
	echo"<p>Email Address : ". $_SESSION['email']."</p>";
	
	$outputstring = $date. "\t".(int)$_SESSION['expressoqty']." expresso \t".(int)$_SESSION['latteqty']." latte \t"
						.(int)$_SESSION['teaqty']. " tea \t$".$totalamount
						."\t". $_SESSION['address']."\n";
					

// open file for appending
	@ $fp = fopen("orders.txt", 'ab');
	flock($fp, LOCK_EX);

   
	
	if(!$fp) {
			echo "<p><strong> Your order could not be processed at this time.
			Please try again later. </strong></p></body></html>";
			exit;
	}
	fwrite($fp, $outputstring, strlen($outputstring));
	flock($fp, LOCK_UN);
	fclose($fp);
	echo "<p>Order written.</p>"

?>
<a href="vieworders.php"> view all delivery's-------> </a>

</body>
</html>
