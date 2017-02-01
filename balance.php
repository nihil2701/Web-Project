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
  		Cranes
  	</h1>
	<p>
		Stand on one leg, arms out to the sides. Bend at the hips to horizontal and extend the airborne leg up and back so you feel it in the grounded leg’s hamstring. Pause, then stand up. Try to keep your foot airborne until you have completed all reps.

Sets and reps: 3 sets of 8-12 each leg.

</p>
  <div class="img3">
  <img src="images/crane.jpg"></a>
</div>
 

<h1>Swiss ball balances</h1>
<p>
 Sit on a Swiss ball, feet flat on the ground, thighs slightly tilting up. Lift your sternum away from your bellybutton. With your spine long and hips stable, lift one foot off the ground. Brace and stay strong through your core. Hold with control for a few seconds, place your foot down again softly, then change legs. When you get the hang of this, try sitting on the ball with both feet off the ground (pictured), while maintaining posture.

Sets and reps: 3 sets of 20-60 seconds.

Safety check: This workout might lead to a few tumbles so remove all sharp or dangerous items from around you when doing these img2s.

</p>
<div class="img3">
  <img src="images/balance1.jpg"></a>
</div>
<h1>Side step push-ups
 
</h1>
<p>
	
Place a 30cm hurdle (such as a rolled-up towel) lengthways in front of you. Assume a push-up position parallel to the hurdle. Perform a slow and controlled push-up, then step laterally with your hands and feet to the other side of the hurdle. Perform another push-up and step back over to where you started.

Sets and reps: 3 sets of 6-15.

</p>
<div class="img3">
  <img src="images/steps.jpg"></a>
</div>
<h1>Squat hold and throws</h1>
<p>
	Hold a tennis ball in one hand and stand with good posture. Squat so your thighs finish horizontal to the ground and your feet stay flat. Hold this position and throw the ball to a friend or against a wall. Try for 10 consecutive throws and catches without dropping the ball. Stand up and repeat.

Sets and reps: 3 sets of 5-10.

</p>
<div class="img3">
  <img src="images/squats.jpg"></a>
</div>
<h1>Foam roller leg lifts

</h1>
<p>
	Lie face up on top of a foam roller so that it runs down the length of your spine. The top of the roller should be above your head and your butt should be just before the other end. Have your arms crossed on your chest, your knees bent and your feet flat on the floor. Raise one foot off the ground and hold it for five seconds. Repeat on the other side. Keep alternating sides.

Sets and reps: 3 sets of 10-20.</p>
<div class="img3">
  <img src="images/foam.jpg"></a>
</div>
<h1>Balance tips</h1>
<ul>
	<li>	If you're finding these moves really tough, try these tips.
	
</li>
	<li>Keep your gaze fixed on a non-moving object in front of you.
	</li>
	<li>If you're standing, focus on keeping your ankles strong and stable.
</li>
	<li>	At all times, keep tall in your torso and engage your core. A strong core is at the heart of good balance.
</li>
	<li>	Move slowly and deliberately.</li>
</ul>

  </div>
	</body>
</html>
