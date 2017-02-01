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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		  <title>Healthcare & Fitness: Home</title>
		  <link rel="stylesheet" href="css/img.css">
		  <link rel="stylesheet" href="css/words.css">
		  <link rel="stylesheet" href="css/nav.css">
		  <link rel="stylesheet" href="css/effects.css">
      <link type="text/css" rel="stylesheet" href="css/slider.css"/>
      <script src="slider.js"></script>
	 </head>
	<body>
		
  <header>
  	<div class="p"><a href="index.php"><img src="images/health_logo.jpg"></a></div>
    <div class="nav">
      <div id="rectangle" class="head">
      <ul>
        <li class="home"><a href="index.php">Home</a></li>
        <li class="tutorials sub"><a href="recipes.php">Recipes</a>
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
  <div class="font">
  	<br><br><br><br><h1>
  		Get Fit Without Going to the Gym
  	</h1>
	<p>
To improve your fitness without straining your wallet, try these everyday ways to torch calories.
If a gym membership is not in your budget and a personal trainer is too pricey, you can still get fit and lose weight — for free. Wherever you exercise, whether at the gym, outdoors, or at home, it doesn’t really matter, says Mickey Harpaz, PhD, a nutritionist and exercise physiologist and author of Menopause Reset!. What does matter is that you exercise regularly. “The trick is consistency over a long period,” he says.
<br><br><br>
When planning your fitness routine, remember that the U.S. Centers for Disease Control and Prevention recommends that adults get at least 150 minutes of moderate-intensity aerobic exercise each week, through activities such as brisk walking, biking, jogging, and swimming, and two to three strength-training sessions per week. To be safe, talk to your doctor before starting an exercise program — especially if you have a health condition. Once you get the go-ahead to work out, try these budget-friendly options.
									
Park far away. It’s tempting to park as close as you can to the entrance of your destination. Instead, you can squeeze some exercise into your day just by parking at the end of every lot and walking the rest of the way, whether you’re going to work, shopping at the mall, or seeing your doctor.
<br><br><br>
Get off the bus early. This is another way to encourage working out — by walking to your destination. Walking is one of the best exercises you can do, says Bob Sallis, MD, a family physician and sports medicine expert for Kaiser Permanente in Southern California. “It requires no special equipment other than a pair of comfortable sneakers, and it can be done anywhere,” he adds.

Choose the stairs. Whenever you have the option of taking the stairs instead of an elevator, go for it. Climbing a few flights of stairs several times a day is a great way of working out for free. If you run up the stairs or take them two at a time, you can give your glutes and thigh muscles a toning boost.
	
</p>



  </div>
	</body>
</html>
