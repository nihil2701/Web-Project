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
<!DOCTYPE HTML>
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
  		1. Combine strength days with cardio days.
  	</h1>
	<p>
		It’s a simple equation: the more muscle you can get working, the more it will challenge your heart and your cardiovascular system. Instead of building cardio-only workouts (the pitfall that’ll prevent you from building endurance) make sure to weave strength days into your training. “Most people reserve one day for strength and another day for cardio. Try combining the two instead,” says Torres. “Use a bench press, immediately followed by pull-ups, then run a mile as fast as you can… and repeat.” Another good example: Jump rope for a minute, followed by squats, an overhead press, and finally sit ups. Repeat.
Men typically give themselves between 30 and 90 seconds of recovery time in between sets, but if your goal is greater endurance, be prepared to sacrifice break time. “By the end of your sets, your muscles should be burning—you should be breathing heavily and sweating,” says Torres. “Only take a break if you physically can not continue.” Torres suggests selecting a series of movements like 10 pull-ups, 10 squats, 10 push-ups, 10 sit-ups. Do three rounds of the series back to back, taking as minimal a break as possible.

</p>
  <div class="exercise">
  <img src="images/stamina.jpg"></a>
</div>
 

<h1>2. Do fast-paced, high-intensity lifting.</h1>
<p>
“When you use weights at an extremely rapid pace, it will not only improve your strength, but also carry over to improve your endurance activity,” says Torres. “It’s one of the best ways to ignite your metabolism. When people do an excessive amount of endurance-only training, they actually slow down their metabolism because it starts to eat away at your muscle tissue.”
</p>
<div class="exercise">
  <img src="images/cycle.jpg"></a>
</div>
<h1>3. Choose compound movements over isolation.</h1>
<p>
	
Compound moves that require using more than one joint—like squats, step-ups, push-ups and pull-ups—will improve your endurance more so than exercises in isolation. “Isolated exercises like bicep curls and leg lifts aren’t going to stimulate you enough to increase your stamina,” he says.

</p>
<h1>4. Remember: Routine is the enemy.</h1>
<p>
	Switching up your workout is essential to building endurance and stamina. According to Torres, the human body gets used to a workout after two weeks. So if you’re always running, start doing Muay Thai instead. Or if you’re an avid cyclist, change it up by running stairs. “You need to move the muscles in a different way so that you don’t develop overuse. Plus, it becomes more motivating,” he says. “It’s important to keep the mind guessing.”
</p>
<div class="exercise">
  <img src="images/jump.jpg"></a>
</div>
<h1>5. Go for hybrid exercises.</h1>
<p>
	A squat with an added overhead press (a “thruster”), jumping pull-ups, and lunges with bicep curls are all great hybrids: exercises that take two separate movements and combine them. “The more muscles you can get working in a movement, the more it will stimulate your heart muscles, which in turn improves your stamina.”
</p>
<h1>6. Add explosive movements to your workout.</h1>
<p>
Explosive movements that take a lot of energy challenge your strength, endurance and stamina simultaneously. Once you become more explosive, you’ll notice that you’ll actually start moving faster. Torres says: try adding things like burpees, box jumps, jumping knee tucks and power push-ups to your workout routine.	
</p>

  </div>
	</body>
</html>
