<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>movie rate report</title>
<!-- CSS FOR STYLING THE PAGE -->
<!--<style>
table {
          margin: 0 auto;
          font-size: large;
          border: 1px solid black;
       }
       h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',' Calibri', 'Trebuchet MS', 'sans-serif';
           }
        td {
            background-color: #40E0D0;
            border: 1px solid black;
          }
        th,
        td {
            font-weight: bold;
             border: 1px solid black;
             padding: 30px;
             text-align: center;
           }
  td {
          font-weight: lighter;
      }
     </style>-->
    <style>
     * {
    /* Change your font family */
    font-family: sans-serif;
}

table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

 tr {
    background-color: #BCE29E;
    color: #030100;
    text-align: left;
    /*font-weight: bold;*/
}

 th,
 td {
    padding: 12px 15px;
}

 tr {
    border-bottom: 1px solid #dddddd;
}

tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

tr:last-of-type {
    border-bottom: 2px solid #009879;
}

 tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
</head>
<body>
    
    

     <section>
        <h1><u>MOVIE RATING REPORT </u></h1>
        <!-- TABLE CONSTRUCTION -->
        <?php
    include("mov_rep_display.php");
    ?>
         <!--<table>
           <tr>
                <th>theatre id</th>
                <th>t name</th>
                <th>phone </th>
                <th>address</th>
                <th>mail</th>
                <th>rate</th>
                <th>price</th>
         </tr>
          <tr>
                // FETCHING DATA FROM EACH
                 //ROW OF EVERY COLUMN 
                <td> echo $rows['T_ID'];</td>
                <td> echo $rows['T_NAME'];</td>
                <td> echo $rows['PH_NO'];</td>
                <td> echo $rows['ADDRRESS'];</td>
                <td> echo $rows['MAIL'];</td>
                <td> echo $rows['RATE'];</td>
                <td> echo $rows['PRICE'];</td>
            </tr>
           
    </table>-->
     </section>
</body>
</html>
