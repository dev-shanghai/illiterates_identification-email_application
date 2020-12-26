// JavaScript Document
var viewPortWidth = null;
var vewPortHeight = null;
var audio = null;
var newSong;
function changeSong(){ 
   // window.alert("efwjfrhwhrfewh");        
   document.getElementById("mainAudio").src = 'sounds/pushto/Mesg2Pushto.m4a';
}

function initial()
{
	getViewport();
	document.getElementById("top").style.marginRight = (viewPortWidth * (0.015)) + 'px';
	document.getElementById("top").style.marginLeft = (viewPortWidth * (0.015)) + 'px';
    document.body.style.backgroundColor = '#ffffff';
	
if(viewPortWidth < 1000)
{

document.getElementById("midDivInner").style.marginTop = (viewPortHeight * 0.150) + 'px';
document.getElementById("midDivInner").style.padding = (viewPortHeight * 0.050) + 'px';
//window.alert("ASim one");
	
document.getElementById('red').style.height = (viewPortHeight * 0.40) + 'px';
document.getElementById('red').style.width  = (viewPortWidth * 0.80) + 'px';
document.getElementById('colorRed').style.height = (viewPortHeight * 0.39) + 'px';
document.getElementById('colorRed').style.width  = (viewPortWidth * 0.79) + 'px';
//document.getElementById("colorRed").style.backgroundColor = '#8a0000';

document.getElementById('blue').style.height = (viewPortHeight * 0.40) + 'px';
document.getElementById('blue').style.width  = (viewPortWidth * 0.80) + 'px';
document.getElementById('colorBlue').style.height = (viewPortHeight * 0.39) + 'px';
document.getElementById('colorBlue').style.width  = (viewPortWidth * 0.79) + 'px';
//document.getElementById("colorBlue").style.backgroundColor = '#00008a';

document.getElementById("midDivInner").style.marginTop = (viewPortHeight * 0) + 'px';
document.getElementById("midDivInner").style.padding = (viewPortHeight * 0.03) + 'px';

//document.getElementById('red').height = (viewPortHeight * 0.70) + 'px';
//document.getElementById('red').width  = (viewPortWidth * 0.20) + 'px';
//document.getElementById("colorRed").style.backgroundColor = '#8a0000';
//window.alert("ewrewre");
//document.getElementById("blue").style.marginLeft = (viewPortWidth* (0.25)) + 'px';
//document.getElementById("blue").style.marginLeft = (viewPortWidth* (0.05)) + 'px';	


}
else
{

//document.getElementById("mainHeader").style.width = (viewPortWidth * (0.90)) + 'px';
//document.getElementById("mainHeader").style.height = (viewPortHeight* (0.25)) + 'px';
//document.getElementById("mainHeader").style.backgroundColor = '#00b100';
/*document.getElementById("midDivInner").style.paddingTop = (viewPortWidth* (0.05)) + 'px';
document.getElementById("midDivInner").style.paddingBottom = (viewPortWidth* (0.05)) + 'px';
document.getElementById("midDivInner").style.paddingRight = (viewPortWidth* (0.02)) + 'px';
document.getElementById("midDivInner").style.paddingLeft = (viewPortWidth* (0.02)) + 'px'
window.alert("ewrewre");
*/
//window.alert("ASim one asim");
document.getElementById('red').style.height = (viewPortHeight * 0.30) + 'px';
document.getElementById('red').style.width  = (viewPortWidth * 0.30) + 'px';
document.getElementById('colorRed').style.height = (viewPortHeight * 0.29) + 'px';
document.getElementById('colorRed').style.width  = (viewPortWidth * 0.29) + 'px';
//document.getElementById("colorRed").style.backgroundColor = '#8a0000';

document.getElementById('blue').style.height = (viewPortHeight * 0.30) + 'px';
document.getElementById('blue').style.width  = (viewPortWidth * 0.30) + 'px';
document.getElementById('colorBlue').style.height = (viewPortHeight * 0.29) + 'px';
document.getElementById('colorBlue').style.width  = (viewPortWidth * 0.29) + 'px';
//document.getElementById("colorBlue").style.backgroundColor = '#00008a';

document.getElementById("midDivInner").style.marginTop = (viewPortHeight * 0.150) + 'px';
document.getElementById("midDivInner").style.padding = (viewPortHeight * 0.050) + 'px';

//document.getElementById('red').height = (viewPortHeight * 0.70) + 'px';
//document.getElementById('red').width  = (viewPortWidth * 0.20) + 'px';
//document.getElementById("colorRed").style.backgroundColor = '#8a0000';
//window.alert("ewrewre");
//document.getElementById("blue").style.marginLeft = (viewPortWidth* (0.25)) + 'px';
//document.getElementById("red").style.marginLeft = (viewPortWidth* (0.1)) + 'px';
//document.getElementById("blue").style.marginLeft = (viewPortWidth* (0.1)) + 'px';
}
}

// View Port
function getViewport() {
	
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