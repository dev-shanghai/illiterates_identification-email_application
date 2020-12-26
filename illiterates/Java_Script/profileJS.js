// JavaScript Document
// JavaScript Document
// JavaScript Document
var viewPortWidth = null;
var vewPortHeight = null;
var input ="sounds/english/men/Page2.mp3";
function playSong(option){         
   if(option == 1)
   {
	 document.getElementById("currSong").src = input;
	 document.getElementById("newSong").pause();
	 document.getElementById("currSong").currentTime = 0;
     document.getElementById("currSong").play(); 
	 
	}
   else if(option == 2)
   {
	 document.getElementById("currSong").src = input;
	 if(document.getElementById("currSong").play() == true)
	 {
	 window.alert("HI");
	 }
	 document.getElementById("currSong").play();  
	}
}


function hoverSetting(value)
{
	//window.alert('doo');
	document.getElementById("value").style.border = 'double';
	document.getElementById("value").style.borderColor = '#00b100';
	
}

function hoverUnSetting(value)
{
	document.getElementById("value").style.border = 'none';
	//document.getElementById("value").style.borderColor = '#00b100';
	
}


function onloading()
{
 if(document.getElementById('lang').value == 'eng')
 {
		input = "sounds/english/men/Page2.mp3";
        playSong(1); 
 }
 else if(document.getElementById('lang').value == 'urd')
 {
	//var audio1 = new Audio("sounds/urdu/men/Page2.mp3");
		input = "sounds/urdu/men/Page2.mp3";
        playSong(1); 
 }
 else 
 {
	 //var audio1 = new Audio("sounds/pushto/men/Page2.mp3");
		input = "sounds/pushto/men/Page2.mp3";
        playSong(1);
 } 	
}
function initial()
{
	getViewport();
	document.getElementById("top").style.marginRight = (viewPortWidth * (0.015)) + 'px';
	document.getElementById("top").style.marginLeft = (viewPortWidth * (0.015)) + 'px';
    document.body.style.backgroundColor = '#ffffff';
	//onloading();
if(viewPortWidth < 1000)
{
	//window.alert("hi Asim");
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';	
document.getElementById("NewMail").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("Profile").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
//document.getElementById("ear").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("backArrowDiv").style.marginRight = (viewPortWidth * (0.1)) + 'px';

document.getElementById("midDivInner").style.padding = (viewPortWidth * (0.01)) + 'px';




//document.getElementById("mainHeader").style.paddingLeft = '0px';	
	
}
else
{
//document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.32)) + 'px';
document.getElementById('backArrowDiv').style.height = (viewPortHeight * 0.15) + 'px';
document.getElementById("backArrow").style.width = (viewPortWidth * (0.20)) + 'px';
document.getElementById('backArrow').style.height = (viewPortHeight * 0.13) + 'px';
document.getElementById('backArrowDiv').style.width = (viewPortWidth * 0.22) + 'px';	
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.05)) + 'px';

document.getElementById("Profile").style.height = (viewPortHeight * 0.13) + 'px';
document.getElementById("Profile").style.marginLeft = (viewPortHeight * 0.23) + 'px';

document.getElementById("NewMail").style.marginLeft = (viewPortWidth * (0.50)) + 'px';
document.getElementById("Profile").style.marginLeft = (viewPortWidth * (0.01)) + 'px';
//document.getElementById("help").style.marginLeft = '30px';
//document.getElementById("womenDivA").style.marginLeft = (viewPortWidth * (0.01)) + 'px';
//document.getElementById("womenDivB").style.marginLeft = (viewPortWidth * (0.01)) + 'px';
//document.getElementById("womenDivC").style.marginLeft = (viewPortWidth * (0.01)) + 'px';


//document.getElementById("midDivInner").style.padding = (viewPortWidth * ()) + 'px';
//document.getElementById("midDivInner").style.paddingTop = (viewPortWidth * (0.05)) + 'px';
//document.getElementById("midDivInner").style.paddingBottom = (viewPortWidth * (0.05)) + 'px';

//document.getElementById("midDivInner").style.marginTop = '0px';
//document.getElementById("midDivInner").style.marginBottom = '0px';
//document.getElementById("menA").style.height = (viewPortHeight * (0.30)) + 'px';
//document.getElementById("menA").style.width = (viewPortWidth * (0.20)) + 'px';

//document.getElementById("womenDivA").style.height = (viewPortHeight * (0.2)) + 'px';
//document.getElementById("womenDivA").style.width = (viewPortWidth * (0.250)) + 'px';
document.getElementById("womenDivA").style.height = (viewPortHeight * (0.2)) + 'px';
document.getElementById("womenDivA").style.width = (viewPortWidth * (0.250)) + 'px';

document.getElementById("womenDivB").style.height = (viewPortHeight * (0.2)) + 'px';
document.getElementById("womenDivB").style.width = (viewPortWidth * (0.250)) + 'px';
//document.getElementById("listen").style.backgroundImage = (viewPortWidth * (0.250)) + 'px';


}	
}

function NewFtn()
{
document.getElementById("Listening").style.visibility = 'visible';	
}
// View Port
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
}