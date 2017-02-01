<?php
	session_start();
	$userName = $_POST['Username']; 
    $passWord = $_POST['Password'];
	
    $host= 'localhost';
    $dbname = 'login_system2';
    $user = 'root'; 
    $pass = '';

    $result = mysqli_connect($host, $user, $pass);
	if(!$result){
		echo "Connection Problem!";
	}
	$db_check = mysqli_select_db($result , $dbname);
	/*if(!$db_check){
		shell_exec('create.sql');
		mysqli_select_db($result , $dbname);
	}*/
	
    $query = "SELECT * FROM user WHERE username ='$userName' and  password ='$passWord'";
    $res = mysqli_query($result , $query);
    $rows = mysqli_num_rows($res);

    if ($rows == 1){
		echo "<script type='text/javascript'>alert('Login Successful!')</script>";
		$_SESSION["user"] = $userName;
		header("Location:home_db.php");
    }
    else{
        echo "Invalid Login";
    }

?>
