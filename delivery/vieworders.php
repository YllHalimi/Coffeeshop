

		
<?php
//Read in the entire file.
//Each order becomes an element in the array
$orders= file("orders.txt");
// count the number of orders in the array
$number_of_orders = count($orders);
if ($number_of_orders == 0) {
echo "<p><strong>No orders pending.
Please try again later.</strong></p>";
}
echo "<table border=\"1\">\n";
echo "<tr><th bgcolor=\"#CCCCFF\">Order Date</th>
<th bgcolor=\"#CCCCFF\">Expresso</th>
<th bgcolor=\"#CCCCFF\">Latte</th>
<th bgcolor=\"#CCCCFF\">Tea</th>
<th bgcolor=\"#CCCCFF\">Total</th>
<th bgcolor=\"#CCCCFF\">Address</th>
<tr>";
for ($i=0; $i<$number_of_orders; $i++) {
//split up each line
$line = explode("\t", $orders[$i]);
// keep only the number of items ordered
$line[1] = intval($line[1]);
$line[2] = intval($line[2]);
$line[3] = intval($line[3]);
// output each order
echo "<tr>
<td>".$line[0]."</td>
<td align=\"right\">".$line[1]."</td>
<td align=\"right\">".$line[2]."</td>
<td align=\"right\">".$line[3]."</td>
<td align=\"right\">".$line[4]."</td>
<td>".$line[5]."</td>
</tr>";
}
echo "</table>";
?>
<br/>
<br/>
<br/>
<a href="index.php"> <-------Back to form</a>
		
		
	   
