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
	
    document.getElementById("midDivInner").style.width= (viewPortWidth * (0.86)) + 'px';
    
if(viewPortWidth < 1000)
{
	//window.alert("hi Asim");
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
	
document.getElementById("backArrowDiv").style.marginRight = (viewPortWidth * (0.1)) + 'px';
document.getElementById("midDivInner").style.paddingLeft = (viewPortWidth * (0.10)) + 'px';
//document.getElementById("womenDiv").style.marginRight = (viewPortWidth * (0.1)) + 'px';	

}
else
{
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.18)) + 'px';
//document.getElementById('backArrowDiv').style.height = (viewPortHeight * 0.15) + 'px';
//document.getElementById("backArrow").style.width = (viewPortWidth * (0.30)) + 'px';
//document.getElementById('backArrow').style.height = (viewPortHeight * 0.13) + 'px';
//document.getElementById('backArrowDiv').style.width = (viewPortWidth * 0.36) + 'px';

    
     
document.getElementById("midDivInner").style.paddingLeft = (viewPortWidth * (0.01)) + 'px';
//document.getElementById("midDivInner").style.paddingTop = (viewPortWidth * (-0.2)) + 'px';
//document.getElementById("midDivInner").style.padding = (viewPortWidth * (0.01)) + 'px';
document.getElementById("midDivInner").style.paddingLeft = (viewPortWidth * (0.05)) + 'px';
document.getElementById("midDivInner").style.backgroundColor = '#ffffff';
document.getElementById("midDivInner").style.marginLeft = '-170px';
document.getElementById("midDivInner").style.width = (viewPortWidth * (0.90)) + 'px';
//document.getElementById("midDivInner").style.backgroundColor = '#00b100';
//document.getElementById("midDivInner").style.marginBottom = '0px';



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