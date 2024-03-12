<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enter screen_form</title>
</head>
<body>
    
<!-- Container Start -->
<div id="container">
    <!-- Form Wrap Start -->
    <div class="form-wrap">
      <!--<h1>Sign Up</h1>
      <p>It's Free and Only takes a minute</p>
      // Form Start -->
      <form action="screen_insert.php" method="post">
        <!--<div class="form-group">
          <label for="emp ID">Employee ID</label>
          <input type="text" name="Empid" id="EmpID">
        </div>-->
        <div class="form-group">
          <label for="T ID">Theatre Id</label>
          <!--<select name="Tid">-->
            <!--php
             // use a while loop to fetch data
              // from the $all_categories variable
            // and individually display as an option
            /* while ($name = mysqli_fetch_array(
            $all_name,
            MYSQLI_ASSOC)):;
            ?>
           <option value="?php echo $name["T_ID"];
            // The value we usually set is the primary key
            ?>">
           ?php echo $name["T_Name"];
            // To show the category name to the user
            ?>
           </option>
           //?php
            endwhile;
             // While loop must be terminated
             ?>
            </select>*/-->
          <input type="text" name="Tid" id="TID">
        
            <?php
            include("screen_form_tid.php");
            ?>
        </div>
        <div class="form-group">
          <label for="screen_id">Screen id</label>
          <input type="text" name="scid" id="scid">
        </div>
        <div class="form-group">
          <label for="rows">number of rows</label>
          <input type="text" name="nrows" id="nrows">
        </div>
        <div class="form-group">
          <label for="columns">Number of columns</label>
          <input type="text" name="ncols" id="ncols">
        </div>
        


         
         <br>
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
$M_ID = $_POST['Movieid'];
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