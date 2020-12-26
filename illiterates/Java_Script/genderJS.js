// JavaScript Document
// JavaScript Document
var viewPortWidth = null;
var vewPortHeight = null;
function initial()
{
	getViewport();
	//WinJS.Navigation.navigate("occupation.php", "ASIM KHAN");
	document.getElementById("top").style.height = (viewPortHeight - 10 ) + 'px';
	document.getElementById("top").style.width= (viewPortWidth -20) + 'px';
	document.body.style.backgroundColor = '#ffffff';
	//onloading();
if(viewPortWidth < 1000)
{
	//window.alert("hi Asim");
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';	
document.getElementById("backArrowDiv").style.marginRight = (viewPortWidth * (0.1)) + 'px';
document.getElementById("menA").style.paddingLeft = (viewPortWidth * (0.2)) + 'px';
document.getElementById("womenA").style.paddingLeft = (viewPortWidth * (0.2)) + 'px';
document.getElementById("menA").style.marginBottom = (viewPortWidth * (0.05)) + 'px';
//document.getElementById("mainHeader").style.paddingLeft = '0px';	
	
}
else
{
	
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.32)) + 'px';
document.getElementById('backArrowDiv').style.height = (viewPortHeight * 0.15) + 'px';
document.getElementById("backArrow").style.width = (viewPortWidth * (0.30)) + 'px';
document.getElementById('backArrow').style.height = (viewPortHeight * 0.13) + 'px';
document.getElementById('backArrowDiv').style.width = (viewPortWidth * 0.36) + 'px';

document.getElementById("midDivInner").style.padding = (viewPortWidth * (0.01)) + 'px';
document.getElementById("midDivInner").style.paddingTop = (viewPortWidth * (0.05)) + 'px';
document.getElementById("midDivInner").style.paddingBottom = (viewPortWidth * (0.05)) + 'px';
//document.getElementById("midDivInner").style.marginTop = '0px';
//document.getElementById("midDivInner").style.marginBottom = '0px';
document.getElementById("menA").style.height = (viewPortHeight * (0.30)) + 'px';
document.getElementById("menA").style.width = (viewPortWidth * (0.20)) + 'px';

document.getElementById("womenA").style.height = (viewPortHeight * (0.30)) + 'px';
document.getElementById("womenA").style.width = (viewPortWidth * (0.20)) + 'px';

document.getElementById("menDivA").style.paddingTop = (viewPortWidth * (0.005)) + 'px';
document.getElementById("menDivA").style.padding = (viewPortWidth * (0.005)) + 'px';
document.getElementById("womenDivA").style.padding = (viewPortWidth * (0.005)) + 'px';
document.getElementById("womenDivA").style.paddingBottom = (viewPortWidth * (0.005)) + 'px';
document.getElementById("menDivA").style.marginLeft = (viewPortWidth * (0.05)) + 'px';
document.getElementById("womenDivA").style.marginLeft = (viewPortWidth * (0.30)) + 'px';

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