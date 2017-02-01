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
  		The Lifelong Benefits of Exercise
  	</h1>
	<p>Physical Fitness: What the Benefits of Exercise Mean for You<br><br>
	There's more good news. Research also shows that exercise enhances sleep, prevents weight gain, and reduces the risk of high blood pressure, stroke, type 2 diabetes, and even depression.

"One study found that when breast cancer survivors engaged in exercise, there were marked improvements in physical activity, strength, maintaining weight, and social well-being," explains Rachel Permuth-Levine, PhD, deputy director for the Office of Strategic and Innovative Programs at the National Heart, Lung, and Blood Institute of the National Institutes of Health.

"Another study looked at patients with stable heart failure and determined that exercise relieves symptoms, improves quality of life, reduces hospitalization, and in some cases, reduces the risk of death," adds Dr. Permuth-Levine. She points out that exercise isn't just important for people who are already living with health conditions: "If we can see benefits of moderate exercise in people who are recovering from disease, we might see even greater benefits in those of us who are generally well."

</p>

<h1>When incorporating more physical activity into your life, remember three simple guidelines:</h1>
<p>Exercise at moderate intensity for at least 2 hours and 30 minutes spread over the course of each week.
Avoid periods of inactivity; some exercise at any level of intensity is better than none.
At least twice a week, supplement aerobic exercise (cardio) with weight-bearing activities that strengthen all major muscle groups.
Physical Fitness: Making Exercise a Habit

The number one reason most people say they don't exercise is lack of time. If you find it difficult to fit extended periods of exercise into your schedule, keep in mind that short bouts of physical activity in 10-minute segments will nonetheless help you achieve health benefits. Advises Permuth-Levine, "Even in the absence of weight loss, relatively brief periods of exercise every day reduce the risk of cardiovascular disease."

Set realistic goals and take small steps to fit more movement into your daily life, such as taking the stairs instead of the elevator and walking to the grocery store instead of driving. "The key is to start gradually and be prepared," says Permuth-Levine. "Have your shoes, pedometer, and music ready so you don't have any excuses."

<br><br><br>
To help you stick with your new exercise habit, vary your routine, like swimming one day and walking the next. Get out and start a baseball or soccer game with your kids. Even if the weather doesn't cooperate, have a plan B — use an exercise bike in your home, scope out exercise equipment at a nearby community center, or consider joining a health club. The trick is to get to the point where you look at exercise like brushing your teeth and getting enough sleep — as essential to your well-being.

Remember that physical fitness is attainable. Even with small changes, you can reap big rewards that will pay off for years to come.


</p>


  </div>
	</body>
</html>
