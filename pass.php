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
//include "db_conn.php";
if(isset($_POST['uname'])  &&  isset($_POST['uname'])){
     function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		
	 }
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if(empty($uname)){
		header(("Location: home.php?error=User Name is required"));
		exit();
	}else if(empty($pass)){
		header(("Location: home.php?error=Password is required"));
	}else{
		$sql = "SELECT * FROM USERS WHERE USERNAME='$uname' AND  PASS='$pass'";
		$result = mysqli_query($mysqli, $sql);

		if(mysqli_num_rows($result)  ===1){
			$row = mysqli_fetch_assoc($result);
			if ($row['USERNAME'] == $uname && $row['PASS'] == $pass){
				//echo "Logged in!";
                echo '<script>alert("logged in!!")</script>';
				header("location:main_menu.php");
                //<a href="main_menu.php"><button type="submit">Login</button></a>
               // header("Location:main_menu.php?error=Incorrect user name or password");
			}else{
				header("Location:home.php?error=Incorrect user name or password");
				exit();
			}
		}else{
			header("Location:home.php?error=Incorrect user name or password");
			exit();
		}
	}
	

}else{
	header("Location: home.php?");
	exit();
}

