<?php
//echo "Starting ";
$user = 'root';
$password = '';
// Database name is geeksforgeeks
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
$sql = "SELECT * FROM employee";
$result = $mysqli->query($sql);

if (!$result) 
{
    die(" Data Connectiom error :".$mysqli->error);
}
$rows = $result->num_rows;
echo "<table><tr><th>Employee_ID</th><th>Theatre_ID</th> <th>Employee-name</th><th>Salary</th><th>Phone</th><th>Address</th><th>Mail</th><th>Designation</th></tr>";
for ($j = 0 ; $j < $rows; ++$j)
{
 $result->data_seek($j);
$row=$result->fetch_array(MYSQLI_NUM);
echo "<tr>";
for ( $k = 0; $k < 8; ++$k) 
{
echo "<td>$row[$k]</td>";
}
echo "</tr>";
}
echo "</table>";
?>
