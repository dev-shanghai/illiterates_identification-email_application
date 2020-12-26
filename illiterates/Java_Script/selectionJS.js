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
	//window.alert("hi Asim");
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';

document.getElementById("backArrowDiv").style.marginRight = (viewPortWidth * (0.1)) + 'px';	

//document.getElementById("backArrow").style.height = '150px';
//document.getElementById("backArrow").style.width = '150px';
//
//ocument.getElementById("menDiv").style.paddingLeft = '0px';
//document.getElementById("mainHeader").style.paddingLeft = '0px';
//document.getElementById("menDiv").style.paddingTop = '0px';
//document.getElementById("mainHeader").style.paddingTop = '0px';
/*document.getElementById("backArrowDiv").style.marginLeft = '10px';
document.getElementById("menDiv").style.marginLeft = '10px';
document.getElementById("men").style.width = '150px';
document.getElementById("womenDiv").style.marginLeft = '10px';
document.getElementById("women").style.width = '150px';
*/
document.getElementById("midDivInner").style.padding = (viewPortWidth * (0.01)) + 'px';

//document.getElementById("menA").style.height = (viewPortHeight * (0.30)) + 'px';
//document.getElementById("menA").style.width = (viewPortWidth * (0.20)) + 'px';

//document.getElementById("womenA").style.height = (viewPortHeight * (0.30)) + 'px';
//document.getElementById("womenA").style.width = (viewPortWidth * (0.20)) + 'px';

/*document.getElementById("menDivA").style.paddingTop = (viewPortWidth * (0.005)) + 'px';
document.getElementById("menDivA").style.paddingBottom = (viewPortWidth * (0.005)) + 'px';
document.getElementById("womenDivA").style.paddingTop = (viewPortWidth * (0.005)) + 'px';
document.getElementById("womenDivA").style.paddingBottom = (viewPortWidth * (0.005)) + 'px';
document.getElementById("menDivA").style.paddingLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("womenDivA").style.paddingLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("menDivA").style.paddingRight = (viewPortWidth * (0.05)) + 'px';
document.getElementById("womenDivA").style.paddingRight = (viewPortWidth * (0.05)) + 'px';
*/
//document.getElementById("midDivInner").style.marginTop = (viewPortWidth * (0.1)) + 'px';


//document.getElementById("mainHeader").style.paddingLeft = '0px';	
	
}
else
{
	
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.32)) + 'px';
document.getElementById('backArrowDiv').style.height = (viewPortHeight * 0.15) + 'px';
document.getElementById("backArrow").style.width = (viewPortWidth * (0.30)) + 'px';
document.getElementById('backArrow').style.height = (viewPortHeight * 0.13) + 'px';
document.getElementById('backArrowDiv').style.width = (viewPortWidth * 0.36) + 'px';

//document.getElementById("womenDivA").style.width = '250px';

/* document.getElementById("menDivA").style.height = (viewPortHeight * 0.4) + 'px';
document.getElementById("menDivA").style.width = (viewPortWidth * 0.4) + 'px';
document.getElementById("womenDivA").style.height = (viewPortHeight * 0.4) + 'px';
document.getElementById("womenDivA").style.width = (viewPortWidth * 0.4) + 'px';
/*/
//document.getElementById("womenDiv").style.height = '160px';
//document.getElementById("menDiv").style.height = '160px';
//document.getElementById("help").style.height = '160px';
//document.getElementById("ear").style.height = '160px';

//document.getElementById("midDiv").style.padding = '0px';
//document.getElementById("midDiv").style.margin = '0px';
document.getElementById("midDivInner").style.padding = (viewPortWidth * (0.01)) + 'px';
//document.getElementById("midDivInner").style.marginTop = '0px';
//document.getElementById("midDivInner").style.marginBottom = '0px';
document.getElementById("menA").style.height = (viewPortHeight * (0.30)) + 'px';
document.getElementById("menA").style.width = (viewPortWidth * (0.20)) + 'px';

document.getElementById("womenA").style.height = (viewPortHeight * (0.30)) + 'px';
document.getElementById("womenA").style.width = (viewPortWidth * (0.20)) + 'px';

document.getElementById("menDivA").style.paddingTop = (viewPortWidth * (0.005)) + 'px';
document.getElementById("menDivA").style.paddingBottom = (viewPortWidth * (0.005)) + 'px';
document.getElementById("menDivA").style.paddingRight = (viewPortWidth * (0.005)) + 'px';
document.getElementById("womenDivA").style.paddingTop = (viewPortWidth * (0.005)) + 'px';
document.getElementById("womenDivA").style.paddingBottom = (viewPortWidth * (0.005)) + 'px';
document.getElementById("menDivA").style.marginLeft = (viewPortWidth * (0.05)) + 'px';
document.getElementById("womenDivA").style.marginLeft = (viewPortWidth * (0.30)) + 'px';
document.getElementById("midDivInner").style.backgroundColor = '#ffffff';
//document.getElementById("womenDivA").style.width = '250px';
//document.getElementById("menDivA").style.width = (viewPortWidth * (0.20)) + 'px';
//document.getElementById("midDivInner").style.marginTop = (viewPortWidth * (0.1)) + 'px';
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