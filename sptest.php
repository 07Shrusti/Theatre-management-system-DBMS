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

//echo " ending ";
 if(isset($_POST['save']))
{
$M_ID = $_POST['Mid'];
$T_ID=$_POST['Tid'];
$S_ID = $_POST['scid'];
$ST_ID = $_POST['stid'];
/*echo $M_ID;
echo $T_ID;
echo $S_ID;
echo $ST_ID; */
//mysqli_close($mysqli);
} 
// SQL query to select data from database
/*$t=1;
$m=1;
$s=1;
$st='A';
$mysqli->query("SET @msg=' '");*/

/*
$sql = "call MAssign(1,1,1,'A;,@msg)";
$sql1 = mysqli_prepare($mysqli,$sql);
//$sqli->query("SET @msg=' '");
mysqli_stmt_bind_param($sql1,$t,$m,$s,$st);
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
$stm=$mysqli->prepare("call MAssign(?,?,?,?,@msg)");
$stm->bind_param("iiis",$TID, $MID,$SID,$STID);
$TID=$T_ID;
$MID=$M_ID;
$SID=$S_ID;
$STID=$ST_ID;
$stm->execute();

$result = $mysqli->query("select @msg as pout");
$row=$result->fetch_assoc();


echo $row['pout']; 


?>