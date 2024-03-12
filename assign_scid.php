<?php
//echo "Starting ";
$user = 'root';
$password = '';
// Database name is theatre
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
//$T_ID=$_POST['Tid'];
$result=mysqli_query($mysqli,"select SCREEN_ID,T_ID FROM SCREEN  ");
//echo"<center>"
echo"<select>";
echo"<option> SCREEN Id</option>";
while($row=mysqli_fetch_array($result))
{
    echo"<option>$row[SCREEN_ID] - $row[T_ID]</option>";
}
echo"</select>";
mysqli_close($mysqli);

?>