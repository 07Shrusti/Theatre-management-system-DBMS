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
$E_ID = $_POST['Empid'];
$T_ID=$_POST['Tid'];
$NAME = $_POST['Empname'];
$SALARY = $_POST['salary'];
$PHONE = $_POST['phone'];
$ADDRESS = $_POST['address'];
$MAIL = $_POST['email'];
$DESIGNATION = $_POST['designation'];
/*echo $E_ID;
echo $T_ID;
echo $NAME;
echo $SALARY;
echo $PHONE;
echo $ADDRESS;
echo $MAIL;
echo $DESIGNATION;*/
//For inserting the values to mysql database 
$sql_query = "INSERT INTO EMPLOYEE(E_ID,T_ID,NAME,SALARY,PHONE,ADDRESS,MAIL,DESIGNATION)
VALUES ('$E_ID','$T_ID','$NAME','$SALARY','$PHONE','$ADDRESS','$MAIL','$DESIGNATION')";
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
   echo '<script>alert("Selected employee is INSERTED successfully")</script>';
} 
else
{
   echo "Error: " . $sql . "" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
include("emp_menu.html");
}
?>