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
  <p id="title"> <b> Eggless cake</b></p>

  <img id="recipe" src="images/egglesscake.jpg">
  </div>
  <div class="recipeinfo">
  <p id="ingredients"><b>Ingredients:</b></p>
  <ul type="disc">
  <li>2 cups atta / whole wheat flour</li>
  <li>1-2 cups shakar or gur(depending on your taste)</li>
  <li>1/2 Tbsp baking powder</li>
  <li>1 1/2 Tbsp soda bicarbonate (meetha soda)</li>
  <li>2 Tbsp cinnamon powder</li>
  <li>3/4 cup refined oil</li>
  <li>1 cup curd</li>
  <li>Water (to be added according to the consistency of the batter)</li>
  <li>A handful of walnuts, raisins & figs</li>
  </ul>
  <p id="method"><b>Method:</b></p>

  <ol type="numbered">
   <li>Pre-heat the oven to 200 degrees C. </li>
   <li>Mix all the dry ingredients together in a large bowl. </li>
   <li>Blend the curd and oil together in another bowl. Then mix the dry ingredients into this bowl and fold well. </li>
   <li>Bring it to dripping consistency, adding water if needed.</li>
  <li> Oil the bottom of a baking dish and bake at 170 degrees C for 1 hour 15 minutes while checking at intervals.</li>
  <li> Cut and serve when cool.</li>
  <ol>
  </div>


<div class="space">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>
