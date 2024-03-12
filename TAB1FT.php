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
/*$sql = "INSERT INTO THEATRE (TID, TNAME, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
if(isset($_POST['save']))
{
//$T_ID = $_POST['Theatreid'];
$T_NAME = $_POST['Theatrename'];
$MAIL = $_POST['email'];
$PH_NO = $_POST['phone'];
$ADDRESS = $_POST['address'];
$PRICE = $_POST['Price'];
$RATE=$_POST['rate'];
//echo $T_ID;
/*echo $T_NAME;
echo $MAIL;
echo $PH_NO;
echo $ADDRESS;
echo $PRICE;*/
//For inserting the values to mysql database 
$sql_query = "INSERT INTO THEATRE(T_NAME,PH_NO,ADDRESS,MAIL,RATE,PRICE)
VALUES ('$T_NAME','$PH_NO','$ADDRESS','$MAIL','$RATE','$PRICE')";
if (mysqli_query($mysqli, $sql_query)) 
{
   echo '<script>alert("New Details Entry inserted successfully !")</script>';
} 
else
{
   echo "Error: " . $sql . "" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
include("theatre_menu.html");
}
?>