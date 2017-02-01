<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

	<head>
		  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" >
		  <title>Healthcare & Fitness: Home</title>
		  <link rel="stylesheet" href="css/img.css">
		  <link rel="stylesheet" href="css/words.css">
		  <link rel="stylesheet" href="css/nav.css">
		  <link rel="stylesheet" href="css/effects.css">
      <link type="text/css" rel="stylesheet" href="css/slider.css"/>
     <script>
function bpm() {
    var a, text;

   
	a = document.getElementById("numb").value;
	if(a<60)

{
text="Your heart is in a bad shape visit a doc";
}	
else if(a>60 && a<75)
{
if(a === 72)
{
text="Your heart awesome!!!!";
break;
}
text="Your heart is good";
}
else if(a>75)
{
text="Your heart is beating faster than the average heart rate	";
}
    document.getElementById("demo").innerHTML = text;
}</script>
	 </head>
   <div class="i">
	<body bgcolor="coral">
		
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
  <br><br><br><br><br><br>
  <p>enter beats per minute of your heart<input id="numb" type="number">
  
<button type="button" onclick="bpm()">Submit</button>
</p>
<p id="demo"></p>
</div>
	</body>
</html>
