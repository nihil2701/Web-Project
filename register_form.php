<!DOCTYPE html>

<html>
    
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link rel="stylesheet" href="style.css" type="text/css" />
		  
		  <title>Healthcare & Fitness: Registration</title>
		  <link rel="stylesheet" href="css/img.css">
		  <link rel="stylesheet" href="css/words.css">
		  <link rel="stylesheet" href="css/nav.css">
		  <link rel="stylesheet" href="css/effects.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
      <link type="text/css" rel="stylesheet" href="css/slider.css"/>
      <script src="js/slider.js"></script>
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




<script type="text/javascript">
function validatePassword(){
	var x = document.forms["register-form"]["Pass"].value;
	var y = document.forms["register-form"]["CPass"].value;
	if(x != y){
		alert("Passwords not match")
		return false;
	}
}
</script></head>

<body>
<center>
<div id="register-form">
  <br><br><br>
<form name = "register-form" method = "post" action = "register_db.php" onsubmit="return validatePassword()">

<table align="center" width="45%" border="0">
<tr>
<td><font size="24" color="#007D00"><b>LOGIN</b></font>
</tr>
<tr>
<td><input type="text" name="FName" placeholder="Your First name" required /></td>
</tr>
<tr>
<td><input type="text" name="MName" placeholder="Your Middle name" required /></td>
</tr>
<tr>
<td><input type="text" name="LName" placeholder="Your Last name" required /></td>
</tr>
<tr>
<td><input type="text" name="email" placeholder="Your Email-ID" required /></td>
</tr>
<tr>
<td><input type="text" name="User" placeholder="Enter A User Name" required /></td>
</tr>
<tr>
<td><input type="password" name="Pass" placeholder="Enter Password" required /></td>
</tr>
<tr>
<td><input type="password" name="CPass" placeholder="Re-Enter Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign Up</button></td>
</tr>

</table></form>
</div>
</center>


</body>
</html>