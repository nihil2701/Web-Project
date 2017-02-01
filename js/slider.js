var myImage=document.getElementById("img1");

var imageArray=["images/recipes.jpg","images/exercise.jpg","images/doc.jpg"]

var imageIndex=0;

function changeImage(){
		img1.setAttribute("src",imageArray[imageIndex]);
		imageIndex++;
		if(imageIndex>=imageArray.length){
			imageIndex=0;
		}
}

var intervalHandle= setInterval(changeImage,2000);

img1.omclick=function(){
	clearInterval(intervalHandle);
}