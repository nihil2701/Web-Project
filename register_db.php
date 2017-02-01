<?php
	session_start();
	$first_name = $_POST['FName'];
	$middle_name = $_POST['MName'];
	$last_name = $_POST['LName'];
	$email_id = $_POST['email'];
	$username = $_POST['User'];
	$password = $_POST['Pass'];
	
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
	
	$query = "INSERT INTO user (username , password , firstname , middlename , lastname , email) VALUES ('$username' , '$password' , '$first_name' , '$middle_name' , '$last_name' , '$email_id')";
	$res = mysqli_query($result , $query);
	if($res){
		echo "<script type='text/javascript'>alert('Registered Successfully!')</script>";
		$_SESSION["user"] = $_POST['User'];
		header("Location:home_db.php");
		exit();
	}
?>