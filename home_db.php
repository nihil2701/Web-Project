<?php
	session_start();
	
	$host= 'localhost';
    $dbname = 'login_system2';
    $user = 'root'; 
    $pass = '';
	if(!isset($_SESSION["user"])){
  header("Location: login_db.php");
  }
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
			<link rel="stylesheet" href="style.css" type="text/css" />
		  
		  <title>Healthcare & Fitness: Profile</title>
		  <link rel="stylesheet" href="css/img.css" type="text/css"/>
		  <link rel="stylesheet" href="css/words.css" type="text/css"/>
		  <link rel="stylesheet" href="css/nav.css" type="text/css"/>
		  <link rel="stylesheet" href="css/effects.css" type="text/css"/>
      <link rel="stylesheet" href="css/style.css" type="text/css" />
      <link rel="stylesheet" href="css/slider.css" type="text/css"/>
      <script src="js/slider.js"></script>
	 </head>
	<body>
		
  <header>
  	<div class="p"><a href="index.php"><img src="images/health_logo.jpg"></a></div>
    <div class="nav">
      <div id="rectangle" class="head">
      <ul>
        <li class="home"><a href="index.php">Home</a></li>
        <li class="tutorials sub"><a href="recipe.php">Recipes</a>
          <ul>
            <li><a href="breakfast.php">Breakfast</a></li>
            <li><a href="lunch.php">Lunch</a></li>
            <li><a href="snacks.php">Snacks</a></li>
            <li><a href="dinner.php">Dinner</a></li>
          </ul>
        </li>
        <li class="tutorials sub"><a href="exercise.php">Excercise</a>
          <ul>
            <li><a href="Endurance.php">Endurance</a></li>
            <li><a href="strength.php">Strength</a></li>
            <li><a href="balance.php">Balance</a></li>
		      	<li><a href="flexibility.php">Flexibility</a></li>
          </ul>
        </li>
        <li class="articles"><a href="articles.php">Articles</a></li>
        <li class="contact"><a href="contactus.php">Contact</a></li>
        <li class="login"><a href="home_db.php">Login</a></li>
        </div>
      </ul>
    </div>
  </header>

</head>
<body>
<br><br><br> 
<center>
<div id="login-form">
<table align="center" width="45%" border="0">
<tr>
<td><font size="24"><b>Profile</b></font>
</tr>
<tr>
<td><font size="4"><b>Hi</b> <?php echo $userName; ?>!</font>
</tr>
<tr>
<td><font size="4"><b>Full Name:</b> <?php echo $firstname; ?> <?php echo $middlename; ?> <?php echo $lastname; ?></font>
</tr>
<tr>
<td><font size="4"><b>Email-ID:</b> <?php echo $email; ?></font>
</tr>
<tr>
<td><font size="4"><b>User-ID:</b> <?php echo $userName; ?></font>
</tr>
<tr>
<td><a href="logout_db.php?logout" style="text-decoration : none;"><button type="submit" name="btn-login">Sign Out</button></a></td>
</tr>

</table>
</div>
</center>




</body>
</html>