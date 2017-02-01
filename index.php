<?php
  session_start();
  
  $host= 'localhost';
    $dbname = 'login_system2';
    $user = 'root'; 
    $pass = '';
  if(!isset($_SESSION["user"])){
  header("Location: index_norev.php");
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


    $query2 = "SELECT username,reviewin FROM user WHERE reviewstat ='1'";
  $row2 = mysqli_query($result , $query2);
  
  
  $Uname = array();
  $review = array();
  while($data2 = mysqli_fetch_array($row2)){
 $Uname[]= "\"".$data2['username']."\"";
 $review[]="\"".$data2['reviewin']."\"";
 }
$username_string = implode(" ", $Uname);
$review_string = implode(" ", $review);

?>
<!DOCTYPE HTML>
<html>
    
		<head>
		  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		  <title>Healthcare & Fitness: Home</title>
		  <link rel="stylesheet" href="css/img.css">
		  <link rel="stylesheet" href="css/words.css">
		  <link rel="stylesheet" href="css/nav.css">
		  <link rel="stylesheet" href="css/effects.css">
      <link type="text/css" rel="stylesheet" href="css/slider.css"/>
      <link type="text/css" rel="stylesheet" href="css/review.css"/>
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
  <center>
  <div class="slide">
  <img id="img1" src="images/recipes.jpg">
  </div>
 
 <div class="img-circle hover02 img">
    <figure><b><a href="bpm.php" style="text-decoration : none; color : #000000;" ><img src="images/bpm.jpg" class="imag1"></figure>
  <div class="desc"><b>Beats per minute calculator</div></a></div>
  <div class="img-circle hover02 img"><figure><a href="tablets.php" style="text-decoration : none; color : #000000;"><img src="images/doc.png" class="imag2"></figure>
  <div class="desc2">Reputated Doctors</div></a></div>
  <div class="img-circle hover02 img "><figure><a href="bmi.php" style="text-decoration : none; color : #000000;"><img src="images/bmi.png" class="imag3"></figure>
    <div class="desc3"><b>Body mass index calculator</div></a></div>
  <div class="img-circle hover02 img"><figure><a href="bmi.php" style="text-decoration : none; color : #000000;"><img src="images/cal.png" class="imag4"></figure>
    <div class="desc4">Calorie counter</div></a></div>



<div class="recipe">
  <a href="recipe.php"><img src="images/Recipes1.jpg"></a>
</div>


<div class="l hover10 img1" id="image1"><figure><a href="breakfast.php" style="text-decoration : none; color : #000000;"><img src="images/breakfast.jpg"></figure>
  <div class="desc5">Breakfast</div></a></div>
  <div class="l hover10 img1" id="image2"><figure><a href="lunch.php" style="text-decoration : none; color : #000000;"><img src="images/lunch.jpg"></figure>
  <div class="desc6">Lunch</div></a></div>
  <div class="l hover10 img1" id="image3"><figure><a href="snacks.php" style="text-decoration : none; color : #000000;"><img src="images/snacks.jpg"></figure>
    <div class="desc7">Snacks</div></a></div>
  <div class="l hover10 img1" id="image4"><figure><a href="dinner.php" style="text-decoration : none; color : #000000;"><img src="images/dinner.jpg"></figure>
    <div class="desc8">Dinner</div></a></div>


<div class="exercise">
  <a href="exercise.php"><img src="images/exercise2.jpg"></a>
</div>

<div class="l hover10 img1" id="image5"><figure><a href="endurance.php" style="text-decoration : none; color : #000000;"><img src="images/endurance.jpg"></figure>
  <div class="desc9">Endurance</div></a></div>
  <div class="l hover10 img1" id="image6"><figure><a href="strength.php" style="text-decoration : none; color : #000000;"><img src="images/strength.jpg"></figure>
  <div class="desc10">Strength</div></a></div>
  <div class="l hover10 img1" id="image7"><figure><a href="balance.php" style="text-decoration : none; color : #000000;"><img src="images/balance.jpg"></figure>
  <div class="desc11">Balance</div></a></div>
  <div class="l hover10 img1" id="image8"><figure><a href="flexibility.php" style="text-decoration : none; color : #000000;"><img src="images/flexibility.jpg"></figure>
  <div class="desc12">Flexibility</div></a></b></div>
<div class="space">
  <br><br><br><br><br>
</div>



<div class="review">
    <div id="review_in">
      <form name = "review-form" method = "post" action = "recrev1.php">
      <table align="center" width="45%" border="0">
      <tr>
      <td><font size="24" color="#007D00"><b>Reviews</b></font>
      </tr>
      <tr>
       <td><textarea name="revin" style="width:1000px;height:80px;" class="recrevin" name="recrev" placeholder="Enter Your Review"></textarea></td>
      </tr>
      <tr>
      <td><button type="submit" name="btn-recrev">Submit</button></td>
      </tr>
    </form>

  
      
    </div>
    <div class="review_out">
      </tr>
      <tr>
      <td>Reviews:
      </tr>
      <tr>
        <td>            
          <?php
            $length = count($Uname);
            for ($i = 0; $i < $length; $i++) {
              print $Uname[$i]." ------------Says: -";
              print $review[$i]."<br/>";
            }
           
            ?>
         
          
        
         
      </td>

      </tr>

    </div>
  </div>

</center>
</body>
</html>
