
<?php
 
 // Connect to database
$user = 'root';
$password = '';
$database = 'theatre';
$servername='localhost';
$con = new Mysqli($servername, $user,$password, $database);
//Checking for connections
if ($con->connect_error)
{
die($con->connect_error);
}
 // Get all the categories from category table
 $sql = "SELECT * FROM `movie`";
 $result = mysqli_query($con,$sql);

 // The following code checks if the submit button is clicked
 // and inserts the data in the database accordingly
 if(isset($_POST['submit']))
 {
    
     
     // Store the theator ID in a "id" variable
     $id = mysqli_real_escape_string($con,$_POST['mid']);
     
     // Creating an insert query using SQL syntax and
     // storing it in a variable.
     $sql_delete = "delete from movie where M_ID=$id";
         
       
       // The following code attempts to execute the SQL query
       // if the query executes with no errors
       // a javascript alert message is displayed
       // which says the data is inserted successfully
       if(mysqli_query($con,$sql_delete))
     {
         echo '<script>alert("Select movie is deleted")</script>';
     }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">  
</head>
<body>
<?php
 include("m_delete_html.php");
 ?>
 <form method="POST">
      <label>Movie ID to delete :</label>
       <input type="text" name="mid" required>
     <!--<label>Select a Theater</label>
     //<select name="tid">
        // -->
             <!--// use a while loop to fetch data
             // from the $all_categories variable
             // and individually display as an option
             while ($tid = mysqli_fetch_array($results,MYSQLI_ASSOC)):;
        // ?>
            // <option value="(<echo $tid["T_ID"];
                 // The value we usually set is the primary key
            // ?>">
                //  echo $tid["T_Name"];
                     // To show the category name to the user
             //    ?>
            // </option>
        // 
          //   endwhile;
             // While loop must be terminated
        // ?>
     //</select>-->
     <br>
     <input type="submit" value="submit" name="submit">
 </form>
 <br>
 
</body>
</html>