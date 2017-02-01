         (man)
BMR = 10 * weight(kg) + 6.25 * height(cm) - 5 * age(y) - 161     (woman)
function bmr() {
    var a,x,y,g,bmr, text;

    
    x = document.getElementById("numb").value;
	y = document.getElementById("numb").value;
	g = document.getElementById("numb1").value;
	a = document.getElementById("numb2").value;
	z = document.getElementById("numb3").value;
	if(g == male)
	{
		bmr = (10*x)+(6.25*y)-(5*a)+5;
		text=" +bmr this is your calories to maintain your weight";
	}
	else 
	{
		bmr = (10*x)+(6.25*y)-(5*a)+161;
		text=" +bmr this is your calories to maintain your weight";
	}
	
    document.getElementById("demo").innerHTML = text;
}
