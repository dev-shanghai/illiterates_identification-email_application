// JavaScript Document
// JavaScript Document
// JavaScript Document
var viewPortWidth = null;
var vewPortHeight = null;

function initial()
{
	getViewport();
	document.getElementById("top").style.marginRight = (viewPortWidth * (0.015)) + 'px';
	document.getElementById("top").style.marginLeft = (viewPortWidth * (0.015)) + 'px';
    document.body.style.backgroundColor = '#ffffff';
	
	document.getElementById("midDivInner").style.width = (viewPortWidth * (0.98)) + 'px';
	document.getElementById("midDivInner").style.marginTop = (viewPortWidth * (-0.01)) + 'px';
	document.getElementById("midDivInner").style.marginLeft = (viewPortWidth * (-0.03)) + 'px';
	document.getElementById("midDivInner").style.paddingLeft = (viewPortWidth * (0.25)) + 'px';
	
	//document.getElementById("CameraOn").style.marginLeft = 
	
	
if(viewPortWidth < 1000)
{
	//window.alert("hi Asim");
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';	
//document.getElementById("help").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("backArrowDiv").style.marginRight = (viewPortWidth * (0.1)) + 'px';

document.getElementById("midDivInner").style.padding = (viewPortWidth * (0.01)) + 'px';


//document.getElementById("mainHeader").style.paddingLeft = '0px';	
	
}
else
{
	

document.getElementById("midDivInner").style.backgroundColor = '#ffffff';
document.getElementById("backArrowDiv").style.width = (viewPortWidth * (0.25)) + 'px';

document.getElementById("backArrowDivA").style.height = (viewPortHeight * (0.2)) + 'px';
document.getElementById("backArrowDivA").style.width = (viewPortWidth * (0.15)) + 'px';

document.getElementById("backArrowDivB").style.height = (viewPortHeight * (0.2)) + 'px';
document.getElementById("backArrowDivB").style.width = (viewPortWidth * (0.15)) + 'px';

document.getElementById("backArrowDivC").style.height = (viewPortHeight * (0.2)) + 'px';
document.getElementById("backArrowDivC").style.width = (viewPortWidth * (0.15)) + 'px';

document.getElementById("backArrowDivA").style.marginLeft = (viewPortWidth * (0.0155)) + 'px';
document.getElementById("backArrowDivB").style.marginLeft = (viewPortWidth * (0.025)) + 'px';
document.getElementById("backArrowDivC").style.marginLeft = (viewPortWidth * (0.025)) + 'px';

//document.getElementById("Cross").style.marginTop = (viewPortWidth * (0.025)) + 'px';
//document.getElementById("Tick").style.marginTop = (viewPortWidth * (0.025)) + 'px';
//document.getElementById("Camera").style.marginTop = (viewPortWidth * (0.025)) + 'px';

}	
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
