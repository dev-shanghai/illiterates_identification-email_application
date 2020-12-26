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
	
if(viewPortWidth < 1000)
{
	
}
else
{
	


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