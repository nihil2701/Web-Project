function myFunction() {
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


