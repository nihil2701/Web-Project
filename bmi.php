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
     <script>function myFunction() {
    var x,y,bmi, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;
	y = document.getElementById("numb1").value;
	bmi = x/(y*y);
	if(bmi< 18.5)
	{
		text= "underwieght";
	}
	else if(bmi>18.5 && bmi<24.9)
	{
		text="normal weight";
	}
	else if(bmi>25 && bmi<29.9)
	{
		text="normal overweight";
	}
	else if(bmi>30 && bmi<39.9)
	{
		text=" indicates obesity";
	}
	else if(bmi>40)
	{
		text="morbid obesity";
	}
    document.getElementById("demo").innerHTML = text;
}

</script>
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
        <li class="login"><a href="login.php">Login</a></li>
        </div>
      </ul>
    </div>
  </header>
  <br><br><br><br><br><br>
  <p>enter the height<input id="numb" type="number">
  <br>enter the weight<input id="numb1" type="number"></p>

<button type="button" onclick="myFunction()">Submit</button>

<p id="demo"></p>
	</body>
</html>
