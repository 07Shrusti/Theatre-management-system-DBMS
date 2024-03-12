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
else 
{ echo " connected:"; }
$sql = "SELECT * FROM theatre";
$result = $mysqli->query($sql);
$rows = $result->num_rows;
echo $rows;

/*if (mysqli_query($conn, $sql) SELECT * FROM `theatre`) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
if(isset($_POST['submit']))
{
$T_ID = $_POST['TheatreID'];

//For deleting the record  from theatre table database 
$sql_query = "delete * from THEATRE whete T_ID=$T_ID";
if (mysqli_query($mysqli, $sql_query)) 
{
   echo "elected Theatre ID is deleted";
} 
else
{
   echo "Error: " . $sql . "" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}
?>