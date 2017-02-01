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
		  <title>Healthcare & Fitness: Whole Wheat Pasta in Mushroom Sauce</title>
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
  <p id="title"> <b>Whole Wheat Pasta in Mushroom Sauce</b></p>

  <img id="recipe" src="images/pasta.jpg">
  </div>
  <div class="recipeinfo">
  <p id="ingredients"><b>Ingredients:</b></p>
  <ul type="disc">
  <li>50 gm shitake mushroom-soaked in warm water for 15 minutes</li>
  <li>100 gm fresh mushroom-sliced</li>
  <li>1 Tbsp chopped onion</li>
  <li>1 clove garlic</li>
  <li>1 Tbsp fresh thyme or fresh parsley, chopped</li>
  <li>30 ml white wine</li>
  <li>100 gm whole wheat pasta-penne or linguine</li>
  <li>Salt and pepper for seasoning</li>
  </ul>
  <p id="method"><b>Method:</b></p>

  <ol type="numbered">
   <li>Put the pasta in boiling salted water for the time specified on the packet. Whilst the pasta is boiling prepare the sauce. </li>
   <li>In a heavy bottomed saucepan, saute onion and garlic in olive oil, add mushroom and wine. </li>
   <li>Once the wine has evaporated, add some of the water in which shitake mushroom was soaked.</li>
   <li>Fell free to throw in any fruits that you like.</li>
    <li>Fell free to throw in any fruits that you like.</li>
   <ol>
  </div>

<div class="space">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>
  