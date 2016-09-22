function checkPassword()
{
	var firstPw = document.getElementById("password1button").value;
	var secondPw = document.getElementById("password2button").value;
	if(firstPw.length <= 7)
	{
		alert("Password must be at least 8 characters long!");
		return;
	}
	if(secondPw.length == 0)
		secondPw = "*empty string*";
	if(firstPw == secondPw)
	{
		alert("Congratulations! " + firstPw + " and " + secondPw +  " match!");
	}
	else
	{
		alert(firstPw + " and " + secondPw + " don't match!");
	}
//	alert("Password to be checked later!");
}

var currentImage="img/ccgen.jpg";

function nextImage()
{
	if(currentImage == "img/ccgen.jpg")
		currentImage = "img/ddc.jpg";
	else if(currentImage == "img/ddc.jpg")
		currentImage = "img/possiblesc3.png";
	else if(currentImage == "img/possiblesc3.png")
		currentImage = "img/starcraftII.jpg";
	else if(currentImage == "img/starcraftII.jpg")
		currentImage = "img/supcom_fa.jpg";
	else if(currentImage == "img/supcom_fa.jpg")
		currentImage = "img/totalwar.jpg";
	else if(currentImage == "img/totalwar.jpg")
		currentImage = "img/dow.jpg";
	else
		currentImage = "img/ccgen.jpg";
	document.getElementById("imageView").src = currentImage;
}

function prevImage()
{
	if(currentImage == "img/ccgen.jpg")
		currentImage = "img/dow.jpg";
	else if(currentImage == "img/ddc.jpg")
		currentImage = "img/ccgen.jpg";
	else if(currentImage == "img/possiblesc3.png")
		currentImage = "img/ddc.jpg";
	else if(currentImage == "img/starcraftII.jpg")
		currentImage = "img/possiblesc3.png";
	else if(currentImage == "img/supcom_fa.jpg")
		currentImage = "img/starcraftII.jpg";
	else if(currentImage == "img/totalwar.jpg")
		currentImage = "img/supcom_fa.jpg";
	else
		currentImage = "img/totalwar.jpg";
	document.getElementById("imageView").src = currentImage;
}

function changeColor()
{
	var box = document.getElementById("potgText");
	var borderWidth = document.getElementById("border_width").value;
	if(borderWidth.length == 0)
		borderWidth = 0;
	var redBorderText = document.getElementById("red_bdr").value;
	if(redBorderText.length == 0) //it now exists as, or converts to a number
		redBorderText = 0;
	var bluBorderText = document.getElementById("blu_bdr").value;
	if(bluBorderText.length == 0)
		bluBorderText = 0;
	var grnBorderText = document.getElementById("grn_bdr").value;
	if(grnBorderText.length == 0)
		grnBorderText = 0;
	box.style.border = "thick solid #0000FF";
	box.style.borderWidth = borderWidth;
	box.style.borderColor = "rgb(" + redBorderText + "," + bluBorderText + "," + grnBorderText + ")";
	var redBkgColor = document.getElementById("red_bkg").value;
	if(redBkgColor.length == 0) //it now exists as, or converts to a number
		redBkgColor = 0;
	var bluBkgColor = document.getElementById("blu_bkg").value;
	if(bluBkgColor.length == 0)
		bluBkgColor = 0;
	var grnBkgColor = document.getElementById("grn_bkg").value;
	if(grnBkgColor.length == 0)
		grnBkgColor = 0;
	box.style.backgroundColor = "rgb(" + redBkgColor + "," + bluBkgColor + "," + grnBkgColor + ")";
}
