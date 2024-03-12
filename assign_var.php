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
/*$sql = "INSERT INTO THEATRE (TID, TNAME, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
if(isset($_POST['save']))
{
$M_ID = $_POST['Mid'];
$T_ID=$_POST['Tid'];
$S_ID = $_POST['scid'];
$ST_ID = $_POST['stid'];

echo $M_ID;
echo $T_ID;
echo $S_ID;
echo $ST_ID;
mysqli_close($mysqli);
}
?>