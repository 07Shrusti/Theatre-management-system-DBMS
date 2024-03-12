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
/*$sql = "INSERT INTO THEATRE (TID, TNAME, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
if(isset($_POST['save']))
{
//$M_ID = $_POST['Movieid'];
$M_NAME = $_POST['Moviename'];
$LANGUAGE_ = $_POST['lang'];
$RUNNING_TIME = $_POST['time'];
$F_LEAD = $_POST['Flead'];
$M_LEAD = $_POST['Mlead'];
$OTHER_CAST = $_POST['ocast'];
$M_DESCRIPTION = $_POST['Mdesc'];
$RATE=$_POST['rate'];
//echo $M_ID;
/*echo $M_NAME;
echo $LANGUAGE_;
echo $RUNNING_TIME;
echo $F_LEAD;
echo $M_LEAD;
echo $OTHER_CAST;
echo $M_DESCRIPTION;*/
//For inserting the values to mysql database 
$sql_query = "INSERT INTO MOVIE(M_NAME,LANGUAGE_,RUNNING_TIME,F_LEAD,M_LEAD,OTHER_CAST,M_DESCRIPTION,RATE)
VALUES ('$M_NAME','$LANGUAGE_','$RUNNING_TIME','$F_LEAD','$M_LEAD','$OTHER_CAST','$M_DESCRIPTION','$RATE')";
/*if (mysqli_query($conn, $sql_query)) 
{
   echo " Details Entry inserted successfully !";
} 
else
{
   echo "Error: " . $sql . "" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}*/
if (mysqli_query($mysqli, $sql_query)) 
{
   echo '<script>alert("Select movie is INSERTED successfully")</script>'; 
} 
else
{
   echo "Error: " . $sql . "" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
include("movie_menu.html");
}
?>