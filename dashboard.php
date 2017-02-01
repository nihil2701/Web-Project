<?php
	session_start();
	include 'global.php';
	global $host , $dbname , $user , $pass;

	$result = mysqli_connect($host, $user, $pass);
	if(!$result){
		echo "Connection Problem!";
	}
	$db_check = mysqli_select_db($result , $dbname);
	
	$userName = $_SESSION["user"];
	$query = "SELECT * FROM user WHERE username ='$userName'";
	$row = mysqli_query($result , $query);
	
	$data = mysqli_fetch_assoc($row);
	$firstname = $data["firstname"];
	$middlename = $data["middlename"];
	$lastname = $data["lastname"];
	$email = $data["email"];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Social Network</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
	<div id="left">
    <label>Welcome to Social Network</label>
    </div>
    <div id="right">
    	<div id="content">
        	hi <?php echo $userName; ?>!<br><a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
<div id="body">
    <div class = "sidebar">
		<ul>
			<li><a href="home.php">View Posts</a></li>
			<li><a href="chat.php">Enter Chat Room</a></li>
			<li><a href="dashboard.php">DashBoard</a></li>
		</ul>
	</div>
	<h1>DashBoard</h1>
	<div class="user_info">
			<div class="section">
				<ul>
					<li>
						<div class="profile_img">
							<div class="box">
								<img src="no-avatar.png" alt="Img" height="250" width="250">
							</div>
						</div>
						<p>
							<b><?php echo $userName; ?></b><br> Name: <?php echo $firstname;?> <?php echo $middlename;?> <?php echo $lastname;?><br> Email ID: <?php echo $email;?>
						</p>
					</li>	
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>