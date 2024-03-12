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
$SCREEN_ID=$_POST['scid'];
$T_ID=$_POST['Tid'];
$N_rows = $_POST['nrows'];
$N_COLS = $_POST['ncols'];

/*echo $E_ID;
echo $T_ID;
echo $NAME;
echo $SALARY;
echo $PHONE;
echo $ADDRESS;
echo $MAIL;
echo $DESIGNATION;*/
//For inserting the values to mysql database 
$sql_query = "INSERT INTO SCREEN(SCREEN_ID,T_ID,NO_OF_ROWS,NO_OF_COLUMNS)
VALUES ('$SCREEN_ID','$T_ID','$N_rows','$N_COLS')";
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
   echo '<script>alert("inserted successfully!!")</script>';

  // header("location:screen_form.php");
  
   // include("screen_form.php");
    
}  

else
{
   echo "Error: " . $sql . "" . mysqli_error($mysqli);
}

mysqli_close($mysqli);
include("screen_form.php");
}
?>