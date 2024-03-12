<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form method="POST">
    <label>Select a Theater ID</label>
        <select name="TheatreID">
           <?php
                // use a while loop to fetch data
     // from the $allTID variable
 
                // and individually display as an option
               while ($td = mysqli_fetch_array($result,MYSQLI_ASSOC)):;
            ?>
            <option value="<?php echo $td["T_ID"];?>">
                  <?php echo $theatreID["T_Name"];?>
              </option>
           <?php
              endwhile;
      ?>
    </select>
      <br>
    <input type="submit" value="submit" name="submit">
  </form>
<br>
</body>
</html>
