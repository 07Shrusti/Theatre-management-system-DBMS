<?php
//echo "Starting ";
$user = 'root';
$password = '';

$database = 'theatre';


$servername='localhost';
$mysqli = new Mysqli($servername, $user,$password, $database);
//Checking for connections
if ($mysqli->connect_error)
{
die($mysqli->connect_error);
}
$result=mysqli_query($mysqli,"select T_ID,T_NAME FROM theatre");
//echo"<center>"
echo"<select>";
echo"<option> Theatre Id</option>";
while($row=mysqli_fetch_array($result))
{
    echo"<option>$row[T_ID] - $row[T_NAME] </option>";
}
echo"</select>";
mysqli_close($mysqli);

?>