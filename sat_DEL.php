<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    //<meta http-equiv="X-UA-Compatible" content="IE=edge">
    //<meta name="viewport"
    //content="width=device-width, initial-scale=1.0">   
</head>
<body>
    <form method="POST">
      
        <label>Select a Theater</label>
        <select name="tid">
            <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($tid = mysqli_fetch_array($results,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $tid["T_ID"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $tid["T_Name"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <br>
</body>
</html>