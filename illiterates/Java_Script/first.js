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
function initial()
{
	// Here we go
 getViewport();
 
 
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
}