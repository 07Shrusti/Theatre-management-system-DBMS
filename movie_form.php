<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enterMOVIE_form</title>
</head>
<body>
    
<!-- Container Start -->
<div id="container">
    <!-- Form Wrap Start -->
    <div class="form-wrap">
      <!--<h1>Sign Up</h1>
      <p>It's Free and Only takes a minute</p>
      // Form Start -->
      <form action="movie_insert.php" method="post">
        <!--<div class="form-group">
          <label for="movie ID">Movie ID</label>
          <input type="text" name="Movieid" id="MovieID">
        </div>-->
        <div class="form-group">
          <label for="Movie-name">Movie Name</label>
          <input type="text" name="Moviename" id="Movie-name">
        </div>
        <div class="form-group">
          <label for="language">Language</label>
          <input type="text" name="lang" id="lang">
        </div>
        <div class="form-group">
            <label for="Running time">Running Time</label>
            <input type="text" name="time" >
          </div>
          <div class="form-group">
            <label for="Flead">Female lead</label>
            <input type="text" name="Flead" size="100">
         </div>
         <div class="form-group">
            <label for="Mlead">Male lead</label>
            <input type="text" name="Mlead" >
         </div>
         <div class="form-group">
            <label for="other">Other cast</label>
            <input type="text" name="ocast" >
         </div>
         <div class="form-group">
            <label for="mdesc">Movie description</label>
            <input type="text" name="Mdesc" >
         </div>
         <div class="form-group">
         <label for="Rate">Rate</label>
            <select name="rate" id="rate">
             
             <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
             </select>
             </div>


         
         <!--<button type="submit">Submit</button>-->
          <!--<p class="bottom-text">
            By Clicking the Sign Up Button, you agree to our
            <a href="#">Term & Conditions</a> and <a href="#">Primary Policy</a>
          </p>--><br>
          <button type="submit" name="save" value="Submit" style="font-size:20px">Submit</button>
        </form>
        <!-- Form Close -->
      </div>
    </div>
</body>
<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  font-family: 'poppins';
  background-color: #ECEDEF;
  color: #fff;
  line-height: 1.8;
}

a{
  text-decoration: none;
}

#container{
  margin: 30px auto;
  max-width: 430px;
  padding: 20px;
}

.form-wrap{
  background-color: #fff;
  padding: 15px 25px;
  color: #333;
  border-top: 4px solid #49c1a2;
  border-radius: 05px;
}

.form-wrap h1,
.form-wrap p{
  text-align: center;
}

.form-wrap .form-group{
  margin-top: 15px;
}
.form-wrap .form-group label{
  display: block;
  color: #666;
}

.form-wrap .form-group input{
  width: 100%;
  padding: 10px;
  border: #ddd 1px solid;
  border-radius: 5px;
}

.form-wrap button{
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color: #49c1a2;
  color: #fff;
  cursor: pointer;
  border: 1px solid #49c1a2;
  font-family: 'poppins';
  font-size: 15px;
  transition: 1s;
}

.form-wrap button:hover{
  background-color: #37a08e;
  transition: 1s;
}

.form-wrap .bottom-text{
  font-size: 13px;
  margin-top: 20px;
}
.checked {
color: orange;
}
/*php
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
/*if(isset($_POST['save']))
{
$T_ID = $_POST['Theatreid'];
$T_NAME = $_POST['Theatrename'];
$MAIL = $_POST['email'];
$PH_NO = $_POST['phone'];
$ADDRESS = $_POST['address'];
$PRICE = $_POST['Price'];

//For inserting the values to mysql database 
$sql_query = "INSERT INTO THEATRE(T_ID,t_NAME,PH_NO,ADDRESS,MAIL,RATE,PRICE)
VALUES ('$first_name','$last_name','$gender','$email','$phone')";
if (mysqli_query($conn, $sql_query)) 
{
   echo "New Details Entry inserted successfully !";
} 
else
{
   echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>*/
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
//$M_ID = $_POST['Movieid'];
$M_NAME = $_POST['Moviename'];
$LANGUAGE_ = $_POST['lang'];
$RUNNING_TIME = $_POST['time'];
$F_LEAD = $_POST['Flead'];
$M_LEAD = $_POST['Mlead'];
$OTHER_CAST = $_POST['ocast'];
$M_DESCRIPTION = $_POST['Mdesc'];
echo $M_ID;
echo $M_NAME;
echo $LANGUAGE_;
echo $RUNNING_TIME;
echo $F_LEAD;
echo $M_LEAD;
echo $OTHER_CAST;
echo $M_DESCRIPTION;
//For inserting the values to mysql database 
$sql_query = "INSERT INTO MOVIE(M_ID,M_NAME,LANGUAGE_,RUNNING_TIME,F_LEAD,M_LEAD,OTHER_CAST,M_DESCRIPTION)
VALUES ('$M_ID','$M_NAME','$LANGUAGE_','$RUNNING_TIME','$F_LEAD','$M_LEAD','$OTHER_CAST','$M_DESCRIPTION')";
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
   echo "New Details Entry inserted successfully !";
} 
else
{
   echo "Error: " . $sql . "" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}
?>
</style>
</html>