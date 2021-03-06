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
n <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
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
  		10 Ways to Work In Effective Workouts
  	</h1>
	<p>You work eight hours a day, have kids, and manage a household � so when do you have time for a workout? You owe it to yourself, and your health, to find the time for both aerobic exercise and strength training.
Everyone needs to get a certain level of physical activity just to stay healthy. Each week, you should be engaging in at least 150 minutes of moderate aerobic exercise or 75 minutes of vigorous aerobic exercise, plus a minimum of two strength-training sessions. And if you want to lose weight, you may need to work out even more. Stretching is necessary, too, during your warm-up and cool-down � and possibly as a separate practice if you want the additional mind-body benefits of yoga or tai chi, for instance.

These workout goals can be fairly intimidating if you�re new to an exercise program and are unsure of how to fit them into a full and hectic schedule. Here are some ideas for how you can work out and burn calories on even your busiest days.
</p>
<h1>How to Work In Working Out</h1>
<p></>Schedule 10-minute workout sessions. If blocking out time for a 30-minute aerobic exercise workout seems impossible at first, start by finding 10 minutes three times a day. For example, instead of sipping another cup of coffee in the break room at work, take 10 minutes to walk around the block or up and down a few flights of stairs.
<br><br><br>
Find a workout buddy. Having a friend to exercise with can help motivate you to schedule a regular workout and stick with it because you won't want to let down your buddy. You can encourage each other and share tips on what works and what doesn't to make your workouts more effective.
Join a fitness club with a schedule that meets your needs. You may find even more motivation from working out in a group and feel challenged to extend yourself more if other members are slightly more fit than you are. But the secret to making a health club membership pay off is to join one that has a schedule that meshes with yours. If your job often has you working late, look for a club with extended hours.
Make your chores part of your fitness routine. You can burn calories by doing everyday chores. Raking leaves, mowing the lawn, washing the car, dusting around the house, or running a vacuum cleaner can count as moderate exercise, particularly if you perform these activities vigorously.
Take extra steps. Make it a little harder on yourself to get where you're going. Take the stairs, not the elevator. Park farther away from a store's entrance, and walk between stores, if possible, when you�re out running errands. Research says if you take 10,000 steps a day, you'll be on your way to better physical fitness.
<br><br><br>
Find an exercise activity that really engages you. It could be a team sport such as basketball or softball, a more solitary pursuit such as jogging or bicycling, or a group activity like step aerobics or Zumba. The important thing is that the activity appeals to you so much that you look forward to it and want to carve time out of your day to pursue it.
Pick a workout time that feels right to you. Do you find it easier to exercise before you go to work and enjoy the satisfaction of knowing it�s done? Or would you rather exercise at lunchtime, as a nice break from the workday? Maybe you prefer to cap your day with a session at the gym before heading home for dinner. Once you identify your best time, you�ll be more likely to work out at that hour on a consistent basis.
Work your workout into family time. Spend time with your family pursuing activities that will improve everyone's health. Play a family game of softball or touch football. Take a weekend hike around a park or through a nature preserve. Walk or ride your bikes around the neighborhood in the evening after supper. You�ll all enjoy quality time and increased physical fitness.
Use social gatherings as a stepping-off point for exercise. Set up a lunchtime walking group at work. Organize an after-church bicycle ride with other members of the congregation. It's easier to get moving when you're already out of the house, and the members of your group will motivate each other.

</p>
<p>
	Use social gatherings as a stepping-off point for exercise. Set up a lunchtime walking group at work. Organize an after-church bicycle ride with other members of the congregation. It's easier to get moving when you're already out of the house, and the members of your group will motivate each other.
	<br><br><br>
Reset your daily schedule. Get up a half-hour earlier to give yourself time to fit in a workout. Take a red pen to your daily calendar and look for activities you can drop or do at another time to make room for exercise. Remember that every minute spent exercising is a worthwhile investment.
<br><br>Remember that part of fitting exercise into your day is wanting to fit it in. If you have a routine and it�s beginning to bore you, look for ways to shake it up and renew your commitment.

</p>

  </div>
	</body>
</html>
