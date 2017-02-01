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
  		MAKE YOR OWN FITNESS LEVEL
  	</h1>
	<p>Body shape, lifestyle, genes, and cardiovascular ability all help to shape your individual fitness factor.Evaluating your fitness level is not a one-size-fits-all process. Differences in lifestyle, muscle tissue, genetic makeup, and overall health all help determine your personal fitness level.</p>
	<p>"It is an individual measurement that is not always dependent on how much physical activity you do," notes Jim Pivarnik, PhD, president of the American College of Sports Medicine and director of the Center for Physical Activity and Health at Michigan State University in East Lansing .

<br>So how can you tell if your exercise and healthy diet habits are paying off? There are several ways to measure your fitness level.
</p>
<h1>The Five Components of Fitness</h1>
<p>"Measuring fitness is multi-dimensional," explains Pivarnik. "Long-distance runners have excellent cardiovascular health, but if all you are is legs and lungs, you won't have a lot of strength or flexibility. By the same measure, someone who is overweight and aerobically fit is healthier than someone who is in the normal weight range but doesn't exercise.”</p>
<h1>Overall physical fitness is said to consist of five different elements:</h1>

<p>	
	<br>Aerobic or cardiovascular endurance	<br>Muscular strength
	<br>Muscular endurance
	<br>Body composition
	<br>Flexibility
</p>
<p>Thorough fitness evaluations include exercises and activities that specifically measure your ability to participate in aerobic, or cardiovascular, exercise as well as your muscular strength, endurance, and joint flexibility. Special tools are also used to determine your body composition or percentage of total body fat.

Working to optimize each of these five components of fitness is crucial to enhancing your overall fitness and general health.
</p>
<p>Fitness: How to Develop an Action Plan

<br></>If you have specific health problems, check with your doctor before implementing a routine to boost fitness. Once your doctor gives you the go-ahead, you have no more excuses. 
<br><br>To improve your fitness level, take these important steps:

<br><br><br>Follow U.S. guidelines for the minimum amount of exercise. That means exercising at a moderate intensity level for at least 2.5 hours spread over most days each week. At least twice a week, supplement aerobic exercise with weight-bearing activities that target all major muscles. Avoid inactivity; some exercise at any level of intensity is better than none while you’re building up your endurance.

<br><br><br>Walking is the easiest way to get started. Get motivated by enlisting a friend to join you and adding variety to your routine. "Walking is simple and manageable for anyone," says Jill Grimes, MD, a family physician in Austin, Texas. "Wear a pedometer from day one. Think of it in three parts: a five-minute warm-up of walking slowly, followed by a fast walk, then a five-minute cool-down of walking slowly."
Compete only against yourself. No matter what activity you choose for getting fit, never compare your progress to someone else's. "Do set goals, and if you are out of shape and hate exercise, start low and go slow," recommends Dr. Grimes. "Do not compare yourself with your best friend who weighs 50 pounds less and just finished her 10th triathlon." Pivarnik agrees: "Even if the same group of women walked at the same pace every morning, they would not all show the same fitness measures."
Avoid overexertion. One preventive step Pivarnik suggests is checking your resting heart rate before getting out of bed every morning and making a chart so you can see a consistent, but gradual, decrease over time. If your resting heart rate begins to increase, you may be overdoing it. Another indicator of overexertion is muscle soreness that doesn't go away after a couple days. "People generally err on the side of not pushing themselves enough," says Pivarnik. "But the worst offenders are those who think they can jump in where they left off — the bunch of 40-year-old guys who think they are still on the high school football team and start running laps, but end up red in the face."
As you work on improving your fitness, take it slow and steady to avoid injury or burnout. Above all, remember that consistency is key — if you keep at it, your hard work will pay off.
</p>
<p></p>
  </div>
	</body>
</html>
