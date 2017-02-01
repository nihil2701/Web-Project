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
	$query = "SELECT username,reviewin FROM user WHERE reviewstat ='1'";
	$row = mysqli_query($result , $query);
	
	$data = mysqli_fetch_assoc($row);
	$i=0;while ($i < $num) {CODE$i++;}
	$Uname=mysql_result($result,$i,"username");
	$review=mysql_result($result,$i,"reviewin");
	
