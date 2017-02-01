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
		  <title>Healthcare & Fitness: Lentil Mushroom Burgers</title>
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
  <p id="title"> <b> Lentil Mushroom Burgers</b></p>

  <img id="recipe" src="images/burger.jpg">
  </div>
  <div class="recipeinfo">
  <p id="ingredients"><b>Ingredients:</b></p>
  <ul type="disc">
  <li>• 5 whole-wheat hamburger buns</li>
  <li>2-3 Tbsp olive oil</li>
  <li>1 medium onion, diced small</li>
    <li>3 cloves of garlic, minced</li>
    <li>1 package cremini or button mushrooms, minced</li>
    <li>4 sun-dried tomatoes, chopped fine</li>
    <li>1 cup cooked brown lentils </li>
    <li>1/2 an egg</li>
    <li>Salt</li>
    <li>Pinch of black pepper</li>
    <li>Pinch of white pepper</li>
    <li>1 blob of butter with 2-3 cloves minced garlic (for buns)</li>
    <li>Caramelized onions</li>
    <li>5 lettuce leaves</li>
    <li>5 slices of tomatoes</li>

  </ul>
  <p id="method"><b>Method:</b></p>

  <ol type="numbered">
   <li>Put the mixture into a mixing bowl and mix in the egg, a pinch of salt, black and white pepper. </li>
   <li>Divide the lentil mixture into four portions, make each into a ball and flatten into a patty.  </li>
   <li>Coat the patty with the breadcrumbs.</li>
   <li>Heat oil in a pan. Add the lentil patties and shallow fry on each side until crisp and deep golden.</li>
  <li> Now bake the patties for 5-6 minutes at 180 degree Celsius.</li>
  <li>We put it in the oven because the patties were shallow fried i.e the outside gets cooked but the inside is still mushy.</li>
  <li> Place a lettuce leaf, tomato slice and some caramelized onions on each of the buns.</li>
  <li> Top with the patty and close with the other half and Serve.</li>
  <ol>
  </div>

<div class="space">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>
  