<?php
//echo "Starting ";
$user = 'root';
$password = '';

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
if(isset($_POST['save']))
{
    $m = $_POST['Mid'];
}
//echo " ending ";
 /*if(isset($_POST['save']))
{
$M_ID = $_POST['Mid'];
$T_ID=$_POST['Tid'];
$S_ID = $_POST['scid'];
$ST_ID = $_POST['stid'];
echo $M_ID;
echo $T_ID;
echo $S_ID;
echo $ST_ID; */
//mysqli_close($mysqli);
//} 
// SQL query to select data from database
/*$t=1;
$m=1;
$s=1;
$st='A';
$mysqli->query("SET @msg=' '");*/


/*
$sql = "select * SELECT T_NAME, M_NAME, ST_ID, SCREEN_ID FROM showdetails where T_ID=?";
$sql1 = mysqli_prepare($mysqli,$sql);
//$sqli->query("SET @msg=' '");
mysqli_stmt_bind_param($sql1,$t);
mysqli_stmt_execute($sql);

mysqli_stmt_close($sql1);
$sql2= "select @msg";
$r1=mysqli_query($mysqli,$sql2);
$r2=mysqli_fetch_rows($r1);
echo $r2[0]; */

/*
//$sql->bind_param($TID,$MID,$SID,$STID,@msg);
$TID=1;
$MID=1;
$SID=1;
$STID='A';
//$m =' ';
$mysqli->query("SET @msg=' '");
//$sql->execute(); */
//$sql = "call MAssign(1,1,1,'A',@msg)";
//$mysqli->query("call MAssign(1,1,1,'A',@msg)");
$stm=$mysqli->prepare("select T_NAME, M_NAME, ST_ID, SCREEN_ID FROM showdetails where M_ID=?");
$stm->bind_param("i",$t);
//$t=2;

/* $TID=$T_ID;
$MID=$M_ID;
$SID=$S_ID;
$STID=$ST_ID; */
$stm->execute();

$result = $stm->get_result();
$rows = $result->num_rows;
//echo "<table><tr> <th>t-name</th><th>m name</th><th>st id</th><th>screen id</th></tr>";
//While ($row=$result->fetch_assoc())
//{
/*echo $row['T_NAME'];
echo $row['M_NAME'];
echo $row['ST_ID'];
echo $row['SCREEN_ID'];*/
/*for ($j = 0 ; $j < $rows; ++$j)
{
$result->get_result($j);
$row=$result->fetch_assoc();
echo "<tr>";
for ( $k = 0; $k < 4; ++$k) 
{
echo "<td>$row[$k]</td>";
//echo "<td>$row['M_NAME']</td>";
//echo //"<td>$row['ST_ID']</td>";
//echo "<td>$row['SCREEN_ID']</td>";
}
echo "</tr>";
}
echo "</table>"; */

echo "<table><tr><th>Theatre Nmae</th><th>Movie Nmae</th><th>Show time</th><th>Screen ID</th></tr>";
While ($row=$result->fetch_assoc())
{

   
//for ( $k = 0; $k < 4; ++$k) 
//{
   // $row=$result->fetch_assoc();
//echo// "<td>$row[$k]</td>";
//}
//echo "<td> $row["T_NAME"]</td>";
//echo  $row['T_NAME'];
/*echo "<td> $row['M'NAME']</td>";
echo "<td> $row['ST_ID']</td>"; */
echo "<tr><td>".$row['T_NAME']."</td><td>".$row['M_NAME']."</td><td>".$row['ST_ID']."</td><td>".$row['SCREEN_ID']."</td></tr>";
//echo $row['T_NAME'];"
//echo $row['M_NAME'];
//echo $row['ST_ID'];
//echo $row['SCREEN_ID'];
//echo "</tr>";
}
echo "</table>";

//echo "</table>";


?>