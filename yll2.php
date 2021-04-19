<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q ="";
$q = intval($_GET['q']);

//lidhja me db
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach($db as $key => $value){

define(strtoupper($key), $value);	
		
}

$connection = mysqli_connect(DB_HOST,  DB_USER, DB_PASS, DB_NAME);

if($connection) {
	
mysqli_select_db($connection,"cms");
$query="SELECT * FROM posts WHERE post_id = '".$q."'";
$result = mysqli_query($connection,$query);

echo "<table>
	<tr>
		<th style='text-align:center;'>Title</th>
		<th style='text-align:center;'>author</th>
		<th style='text-align:center;'>date</th>
		<th style='text-align:center;'>Content</th>
	</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['post_title'] . "</td>";
    echo "<td>" . $row['post_author'] . "</td>";
	echo "<td>" . $row['post_date'] . "</td>";
    echo "<td>" . $row['post_content'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
mysqli_close($connection);
?>
</body>
</html>