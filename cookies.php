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
		  <title>Healthcare & Fitness: Ragi cookies</title>
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
  <p id="title"> <b> Ragi cookies</b></p>

  <img id="recipe" src="images/cookies.jpg">
  </div>
  <div class="recipeinfo">
  <p id="ingredients"><b>Ingredients:</b></p>
  <ul type="disc">
  <li>1 cup ragi flour</li>
  <li>1/2 cup brown cane sugar</li>
  <li>1/2 Tbsp green cardamom powder</li>
  <li>2 pinches of ginger powder</li>
  <li>1/2 Tbsp baking powder</li>
  <li>1/2 cup oil (rice bran)</li>
  <li>1 egg whisked</li>
  <li>1/2 Tbsp salt or to taste</li>
  </ul>
  <p id="method"><b>Method:</b></p>

  <ol type="numbered">
   <li>In a pan mix the ragi flour and cardamom powder. Then roast this gently on a tawa till the color gets a wee bit darker. (for a minute or two). </li>
   <li>In a bowl break an egg and whisk it. Add the roasted ragi and sugar into it. </li>
   <li>Mix well.</li>
   <li>Add the dry ginger and salt to it.</li>
  <li>Then add the oil and mix well. It will look like a dark dough.</li>
  <li> Make round balls and flatten them in your palms.</li>
  <li>Pre-heat the oven for 5-7 minutes. Take a flat dish, put butter paper on it. No need to grease it. </li>
  <li>Place the biscuit roundels an inch away from each other and bake for 8 minutes at 180 degree Celsius.</li>
  

<div class="space">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>
  