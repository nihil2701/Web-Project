<?php
	session_start();
	
	$host= 'localhost';
    $dbname = 'login_system2';
    $user = 'root'; 
    $pass = '';
	
	$result = mysqli_connect($host, $user, $pass);
	if(!$result){
		echo "Connection Problem!";
	}
	$db_check = mysqli_select_db($result , $dbname);
	if(!$db_check){
		shell_exec('create.sql');
		mysqli_select_db($result , $dbname);
	}
	$userName = $_SESSION["user"];
	$query = "SELECT * FROM user WHERE username ='$userName'";
	$row = mysqli_query($result , $query);
	
	$data = mysqli_fetch_assoc($row);
	$username2 = $data["username"];
	
	$Reviewin = $_POST['revin'];
	
	
	$query2 ="UPDATE user SET reviewstat='1',reviewin='$Reviewin' WHERE username='$username2'";

		$res2 = mysqli_query($result , $query2);
	if($res2){
		echo "<script type='text/javascript'>alert('Updated Successfully!')</script>";
		header("Location:index.php");
		exit();
	}
?>