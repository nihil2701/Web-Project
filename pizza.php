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
		  <title>Healthcare & Fitness: Multigrain pizzza</title>
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
  <p id="title"> <b>Multigrain Pizza</b></p>

  <img id="recipe" src="images/pizza.jpg">
  </div>
  <div class="recipeinfo">
  <p id="ingredients"><b>Ingredients:</b></p>
  <ul type="disc">

    <b>Pizza Dough:</b>
  <li>1 glass of lukewarm water</li>
  <li>2 Tbsp sugar</li>
  <li>1 Tbsp yeast</li>
  <li>2 cup whole wheat flour</li>
  <li>1 cup oatmeal</li>
  <li>2 Tbsp maize flour (makki atta)</li>
  <li>2 Tbsp flax seed</li>
  <li>1 Tbsp sunflower seeds</li>
  <li>1 Tbsp olive oil</li>

  <b>Pesto Toppings:</b>

  <li>1 1/2 tsp crushed garlic</li>
  <li>Pine nuts</li>
  <li>2 cups of fresh basil leaves</li>
  <li>1 cup extra virgin olive oil</li>
  <li>1 Tbsp salt</li>
  <li>1 Tbsp black pepper</li>
  <li>1 cup regiano Parmesan cheese</li>
  <li>1/2 a cup of mozarella cheese</li>
  <b>Mushroom Topping:</b>

  <li>100 ml water</li>
  <li>50 gm porcini Mushroom</li>
  <li>50 gm mushroom</li>
  <li>1 Tbsp extra Virgin Olive oil</li>
  <li>Onions</li>
  <li>1 Tbsp salt</li>
  <li>1/2 Tbsp black pepper</li>
  <li>Red chilli</li>
  <li>Garlic</li>
  <li>Fresh Oregano leaves</li>
  <li>1/4 cup of mozarella cheese</li>

  </ul>
  <p id="method"><b>Method:</b></p>

  <ol type="numbered">
    <li>
      <b>For the Pizza Dough:</b>
      <ul>
        <li>Take a lukewarm glass of water and mix  2 teaspoons of sugar.  </li>
        <li>Take a tablespoon of active yeast. </li>
        <li>Sprinkle it on top of the water, cover the glass and put away in a draught free zone. You will see bubbles arise on the surface in 20 minutes or so.</li>
        <li>Take another bowl, add two cups of whole wheat flour, one cup of ready to eat oats, maize flour, flax seed powder and some sunflower seeds. Now add the fermented yeast water.  Mix the dough and add a tablespoon  of olive oil.</li>
        <li> Knead the dough a bit till it looks shiny. It will feel hard to the touch. 
        </li>
          <li> Take a glass bowl and grease it with olive oil, now put the kneaded dough in it, and cover it with a muslin cloth.</li>
        </ul>
  <li><b>For Pesto Sauce:</b>
      <ul>
        <li>Take one and half spoon of garlic, some pine nuts and churn them in a  mixie.</li>
        <li>Now add two cups of basil leaves and add 1 cup of extra virgin olive oil to it and churn it some more.</li>
        <li>Add salt and pepper to the mixture. Add a cup of grated Parmesan cheese to this. </li>
        <li>Mix the above and take it out in a bowl. Now add some olive oil to it. The Pesto Sauce is done.</li>
      </ul>
</li>
  <li>
  <b>For Mushroom Topping:</b>
      <ul>
        <li>In a pan, roast whole garlic with red chillies and olive oil.</li>
        <li>Take some porcini mushrooms and soak them in warm water. Take a pan add some extra virgin olive oil and then add onions and fry.</li>
        <li>To the caramelized onions add the porcini mushrooms and regular mushrooms. </li>
        <li>Add some salt and fresh pepper and then add the roasted garlic pods and then add some fresh oregano leaves.</li>
      </ul> 
  </li>
  <li> Put the pizza together.</li>
  <li> Take chillies infused in olive oil and apply on the edges of the base.</li>
  <li> Now apply the pesto sauce and apply on the base and add the toppings and grated cheese.</li>
  <li> Put the pizza in the oven at 180 degrees till the cheese melts</li>
  <ol>
    <p><b>Tip:</b>If you like a crisp crust, you can bake it in the oven  for 5 minutes, and then put the toppings.</p>
  </div>

<div class="space">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>
  