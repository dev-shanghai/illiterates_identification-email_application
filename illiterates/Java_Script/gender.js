// JavaScript Document
//alert("Hi Nad Asalmualekum");
var divTop = null;
var divMid = null;
var main = null;
var divBottom = null;
var screenHeight, screenWidth;
var viewPortWidth;
var viewPortHeight;
var oneButton = null;
var twoButton = null;
var borderTop = null;
var borderDown = null;
var red = null;
var green = null;
var blue = null;
var imgMen = null;
var imgWomen = null;
var imgHelp = null;
var space = null;
var backBtn = null;
var ear = null;
function initial()
{
	// Here we go
 getViewport();
 screenWidth= viewPortWidth;
 screenHeight = viewPortHeight;
 //alert(screenWidth + "   " + screenHeight );
main = document.getElementById("Main"); 
divTop = document.getElementById("Top");
divMid = document.getElementById("Mid");
divBottom = document.getElementById("Bottom");
borderTop= document.getElementById("borderTop");
borderDown = document.getElementById("borderDown");
main.style.backgroundColor = '#ffffff';

divTop.style.height = (screenHeight * (0.10)) + 'px';
divTop.style.width = (screenWidth * (0.8)) + 'px';
divTop.style.backgroundColor = '#ffffff';
//divTop.style.width = screenWidth;
//divTop.style.height = screenHeight;
divTop.style.marginRight = '10px';
divMid.style.marginRight = '10px';
divBottom.style.marginRight = '10px';
divTop.style.marginLeft = '-10px';
divMid.style.marginLeft = '-10px';
divBottom.style.marginLeft = '-10px';

divMid.style.height = (screenHeight * (0.7)) + 'px';
divMid.style.width = (screenWidth * (0.8)) + 'px';
divMid.style.backgroundColor = '#ffffff';

divBottom.style.height = (screenHeight * (0.10)) + 'px';
divBottom.style.width = (screenWidth * (0.8)) + 'px';
divBottom.style.backgroundColor = '#ffffff';
 
 borderTop.style.height = (screenHeight * (0.0125)) + 'px';
 borderDown.style.height = (screenHeight * (0.0125)) + 'px';
 borderTop.style.width = (screenWidth * (0.8)) + 'px';
 borderDown.style.width = (screenWidth * (0.8)) + 'px';
 borderTop.style.marginLeft = '-10px';
 borderDown.style.marginLeft = '-10px';
 borderTop.style.marginRight = '10px';
 borderDown.style.marginRight = '10px';
 borderTop.style.backgroundColor = '#000000';
 borderDown.style.backgroundColor = '#000000';
 
 //twoButton = document.getElementById("topButton");
 //oneButton = document.getElementById("botButton");
 
//twoButton.style.height = (screenHeight * (0.7)) + 'px';
//twoButton.style.width =  (screenWidth * (0.8)) + 'px';
//oneButton.style.height = (screenHeight * (0.7)) + 'px';
//oneButton.style.width  = (screenWidth * (0.4)) + 'px';

//twoButton.style.backgroundColor = '#ff72ff';
//oneButton.style.backgroundColor = '#ffffff';

// Now Inside Divs
red = document.getElementById("colorRed");
red.style.margin = '10px';
red.style.height = (screenHeight * (0.6)) + 'px';
red.style.width = (screenWidth * (0.35)) + 'px';

//green = document.getElementById("colorGreen");
//green.style.margin = '10px';
//green.style.height = (screenHeight * (0.3)) + 'px';
//green.style.width = (screenWidth * (0.35)) + 'px';

blue = document.getElementById("colorBlue");
blue.style.margin = '10px';
blue.style.marginLeft = (screenWidth * (0.075)) + 'px';
//blue.style.marginLeft = (screenWidth * (0.225)) + 'px';
//blue.style.marginRight = (screenWidth * (0.175)) + 'px';
blue.style.height = (screenHeight * (0.6)) + 'px';
blue.style.width = (screenWidth * (0.35)) + 'px';
// Images
imgMen = document.getElementById("men");
imgMen.style.height = (screenHeight * (0.10)) + 'px';
imgMen.style.width =  (screenWidth * (0.15)) + 'px';
imgMen.style.marginRight = '20px';
space =document.getElementById("space"); 
//space.style.height = (screenHeight * (0.10)) + 'px';
//space.style.width = (screenWidth * (0.005)) + 'px';
space.style.backgroundColor = '#000000';
backBtn = document.getElementById("back");
backBtn.style.height = (screenHeight * (0.10)) + 'px';
backBtn.style.width =  (screenWidth * (0.15)) + 'px';
backBtn.style.marginRight = '20px';


imgWomen = document.getElementById("women");
imgWomen.style.height = (screenHeight * (0.10)) + 'px';
imgWomen.style.width =  (screenWidth * (0.15)) + 'px';
imgWomen.style.marginLeft = '10px';
imgHelp = document.getElementById("help");
imgHelp.style.height = (screenHeight * (0.10)) + 'px';
imgHelp.style.width =  (screenWidth * (0.15)) + 'px';
imgHelp.style.marginTop = '10px';
ear = document.getElementById("Ear");
ear.style.height = (screenHeight * (0.10)) + 'px';
ear.style.width =  (screenWidth * (0.15)) + 'px';
ear.style.marginTop = '10px';
}
function getViewport() {
	 // the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight
 if (typeof window.innerWidth != 'undefined') {
   viewPortWidth = window.innerWidth,
   viewPortHeight = window.innerHeight
 }

// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
 else if (typeof document.documentElement != 'undefined'
 && typeof document.documentElement.clientWidth !=
 'undefined' && document.documentElement.clientWidth != 0) {
    viewPortWidth = document.documentElement.clientWidth,
    viewPortHeight = document.documentElement.clientHeight
 }

 // older versions of IE
 else {
   viewPortWidth = document.getElementsByTagName('body')[0].clientWidth,
   viewPortHeight = document.getElementsByTagName('body')[0].clientHeight
 }
 return [viewPortWidth, viewPortHeight];
}// JavaScript Document