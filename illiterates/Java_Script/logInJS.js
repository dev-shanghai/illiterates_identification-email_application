// JavaScript Document
// JavaScript Document
// JavaScript Document
// JavaScript Document
var viewPortWidth = null;
var vewPortHeight = null;
function aa()
{
    window.alert("sffhebf");
    getViewport();
	window.alert("sffhebf");	
}
function initial()
{
	getViewport();
	document.getElementById("top").style.height = (viewPortHeight - 10 ) + 'px';
	document.getElementById("top").style.width= (viewPortWidth -20) + 'px';
	document.body.style.backgroundColor = '#ffffff';
	
	document.getElementById("picFrame").style.width= (viewPortWidth * (0.86)) + 'px';
    document.getElementById("midDivInner").style.width= (viewPortWidth * (0.86)) + 'px';
    document.getElementById("picFrame").style.paddingRight = (viewPortWidth * (0.05)) + 'px';
    document.getElementById("picFrame").style.paddingLeft = (viewPortWidth * (0.05)) + 'px';

   
    document.getElementById("midDivInner").style.marginLeft = (viewPortWidth * (0.07)) + 'px';
	
	
	

    document.getElementById("midDivInner").style.marginRight = (viewPortWidth * (0.07)) + 'px';

document.getElementById("midDivInner").style.backgroundColor = '#F00';  
document.getElementById("logInId").style.backgroundColor = '#f00000';
document.getElementById("picSelect1").style.backgroundColor = '#d84040';
document.getElementById("picSelect2").style.backgroundColor = '#d84040';
document.getElementById("picSelect3").style.backgroundColor = '#d84040';
document.getElementById("picSelect4").style.backgroundColor = '#d84040';
	
if(viewPortWidth < 1000)
{
	//window.alert("hi Asim");
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("menDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("womenDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';	
document.getElementById("help").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("ear").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("backArrowDiv").style.marginRight = (viewPortWidth * (0.1)) + 'px';
document.getElementById("menDiv").style.marginRight = (viewPortWidth * (0.1)) + 'px';
document.getElementById("womenDiv").style.marginRight = (viewPortWidth * (0.1)) + 'px';	
document.getElementById("help").style.marginRight = (viewPortWidth * (0.1)) + 'px';
document.getElementById("ear").style.marginRight = (viewPortWidth * (0.1)) + 'px';
// See Now

document.getElementById("logInId").style.width = (viewPortWidth * (0.9)) + 'px';
document.getElementById("logInId").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("logInId").style.marginRight = '15px';
document.getElementById("logInId").style.margin = (viewPortWidth * (0.1)) + 'px';
//document.getElementById("picSelect2").style.marginLeft = (viewPortWidth * (0.1)) + 'px';



}
else
{
	
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.05)) + 'px';
document.getElementById("menDiv").style.marginLeft = (viewPortWidth * (0.15)) + 'px';

//document.getElementById("logInId").style.marginRight = (viewPortWidth * (0.50)) + 'px';
document.getElementById("womenDiv").style.marginLeft = '20px';	
document.getElementById("help").style.marginLeft = (viewPortWidth * (0.05)) + 'px';
document.getElementById("ear").style.marginLeft = (viewPortWidth * (0.75)) + 'px';
document.getElementById("logInId").style.marginTop = '0px';
document.getElementById("logInId").style.padding = '5px';
document.getElementById("logInId").style.width = (viewPortWidth * (0.35)) + 'px';
document.getElementById("logInId").style.height = (viewPortWidth * (0.10)) + 'px';
document.getElementById("logInId").style.paddingLeft = (viewPortWidth * (0.010)) + 'px';
document.getElementById("logInId").style.marginLeft = (viewPortWidth * (0.16)) + 'px';

	
//document.getElementById("logInId").style.paddingRight = '-20px';




//document.getElementById("backArrow").style.height = '150px';
//document.getElementById("backArrow").style.width = '150px';


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
 //return [viewPortWidth, viewPortHeight];
}