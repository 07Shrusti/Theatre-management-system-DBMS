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
$result=mysqli_query($mysqli,"select ST_ID FROM SHOWTIME");
//echo"<center>"
echo"<select>";
echo"<option> SHOWTIME Id</option>";
while($row=mysqli_fetch_array($result))
{
    echo"<option>$row[ST_ID]  </option>";
}
echo"</select>";
mysqli_close($mysqli);

?>