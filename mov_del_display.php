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
$sql = "SELECT * FROM movie";
$result = $mysqli->query($sql);

if (!$result) 
{
    die(" Data Connectiom errpr :".$mysqli->error);
}
$rows = $result->num_rows;
echo "<table><tr><th>Movie id</th> <th>movie-name</th><th>Language</th><th>Running_time</th><th>F_lead</th><th>M_lead</th><th>other cast</th><th>desc</th></tr>";
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
