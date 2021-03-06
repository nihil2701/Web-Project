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
		  <title>Healthcare & Fitness: Oat Idli</title>
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
  <p id="title"> <b> Oat Idli</b></p>

  <img id="recipe" src="images/oatidli.jpg">
  </div>
  <div class="recipeinfo">
  <p id="ingredients"><b>Ingredients:</b></p>
  <ul type="disc">
  <li>2 cups oats</li>
  <li>1/2 liter curd (slightly sour)</li>
  <li>1 Tbsp mustard seeds</li>
  <li>1 Tbsp urad dal</li>
  <li>1/2 Tbsp channa dal</li>
  <li>1/2 Tbsp oil</li>
  <li>2 tsp finely chopped green chillies</li>
  <li>1 cup grated carrots</li>
  <li>2 Tbsp finely chopped coriander</li>
  <li>1/2 Tbsp turmeric powder</li>
  <li>2 Tbsp salt</li>
  <li>Eno fruit salt, a pinch</li>
  </ul>
  <p id="method"><b>Method:</b></p>

  <ol type="numbered">
   <li>On a tawa, dry roast the oats until it turns slightly brown and then powder the oats in a mixer. </li>
   <li>In a pan, add oil, mustard seeds, urad dal, channa dal and allow the mustard to splutter and the dals to turn golden. </li>
   <li>To this, add the chopped chillies, coriander and grated carrots.</li>
   <li>Add the turmeric powder and fry for a minute.</li>
  <li> Add this seasoning to the powdered oats mixture and add the curd to it to make a batter like that of idli batter's consistency.
  </li>
  <li> You can add as much curd to the mixture to achieve the consistency, but do not add water to the batter.</li>
  <li> Grease the idli steamer plates with oil and pour the batter into each area of the steamer.</li>
  <li> Steam the idlis for 15 minutes.</li>
  <p><b>Note:</b> To know if the idli is cooked, poke an idli with knife and check if the batter does not stick to the knife.</p>
  <li> Once done remove the idlis and serve with Onion chutney.</li>
  <ol>
  </div>

<div class="space">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>
  