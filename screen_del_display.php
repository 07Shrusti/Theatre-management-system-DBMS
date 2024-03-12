<?php
//echo "Starting ";
$user = 'root';
$password = '';

$database = 'theatre';
// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new Mysqli($servername, $user,$password, $database);
//Checking for connections
if ($mysqli->connect_error)
{
die($mysqli->connect_error);
}

//echo " ending ";
// SQL query to select data from database
$sql = "SELECT * FROM screen";
$result = $mysqli->query($sql);

if (!$result) 
{
    die(" Data Connectiom errpr :".$mysqli->error);
}
$rows = $result->num_rows;
echo "<table><tr><th>Screen id</th> <th>Theatre id</th><th>no. of rows</th><th>No. of columns</th></tr>";
for ($j = 0 ; $j < $rows; ++$j)
{
 $result->data_seek($j);
$row=$result->fetch_array(MYSQLI_NUM);
echo "<tr>";
for ( $k = 0; $k < 4; ++$k) 
{
echo "<td>$row[$k]</td>";
}
echo "</tr>";
}
echo "</table>";
?>
