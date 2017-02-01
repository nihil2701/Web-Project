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
      <title>Healthcare & Fitness: Eggless Cake</title>
      <link rel="stylesheet" href="css/img.css">
      <link rel="stylesheet" href="css/effects.css">
      <link rel="stylesheet" href="css/nav.css"> 
      <link rel="stylesheet" href="css/recipe1.css">  
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
  <div class="recipe">
  <p id="title"> <b>Grilled Veggie and Hummus Wraps</b></p>

  <img id="recipe" src="images/grilledwarps.jpg">
  </div>
  <div class="recipeinfo">
  <p id="ingredients"><b>Ingredients:</b></p>
  <ul type="disc">
  <li>4 (1/2-inch-thick) slices red onion</li>
  <li>1 red bell pepper, seeded and quartered </li>
  <li>1 (12-ounce) eggplant, cut into 1/2-inch-thick slices </li>
  <li>2 tablespoons olive oil, divided </li>
  <li>1/4 cup chopped fresh flat-leaf parsley </li>
  <li>1/8 teaspoon kosher salt </li>
  <li>1 (8-ounce) container plain hummus </li>
  <li>4 (1.9-ounce) whole-grain flatbreads (such as Flatout Light) </li>
  <li>1/2 cup crumbled feta cheese </li>
  </ul>
  <p id="method"><b>Method:</b></p>

  <ol type="numbered">
   <li>Heat a large grill pan over medium-high heat. Brush onion, bell pepper, and eggplant with 1 tablespoon oil. Add onion and bell pepper to pan; cook 3 minutes on each side or until grill marks appear. Remove from pan. Add eggplant to pan; cook 3 minutes on each side or until grill marks appear. Remove from pan; coarsely chop vegetables. Combine vegetables, remaining 1 tablespoon oil, parsley, and salt; toss to combine. </li>
   <li>Spread 1/4 cup hummus over each flatbread, leaving a 1/2-inch border around edges. Divide vegetables over each flatbread; top each serving with 2 tablespoons cheese. Roll up wraps, and cut diagonally in half.</li>
   
  <ol>
  </div>

<div class="space">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>
