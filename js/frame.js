function setScreenSize()
{
	var size = screen.width;
	size = size - 125;
	document.getElementById("container").style.width = size+"px";
	document.getElementById("container").style.marginLeft = "auto";
	document.getElementById("container").style.marginRight = "auto";
	document.getElementById("container").style.opacity = "1";

}