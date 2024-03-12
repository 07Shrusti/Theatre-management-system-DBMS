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


$tstm=$mysqli->prepare("select T_ID, T_NAME from theatre");
$mstm=$mysqli->prepare("select M_ID, M_NAME from movie");
$sstm=$mysqli->prepare("select SCREEN_ID from screen where T_ID=?");
$tstm->execute();
//$mstm->execute();
//$sstm->bind_param("i",$t);
$t=1;
//$sstm->execute();

$tresult = $tstm->get_result();
//$mresult = $mstm->get_result();
//$sresult = $sstm->get_result();


While ($row=$tresult->fetch_assoc())
{
echo $row['T_NAME'];
//echo $row['M_NAME'];
echo $row['T_ID'];
//echo $row['SCREEN_ID'];
}



?>