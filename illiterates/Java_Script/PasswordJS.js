// JavaScript Document
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

function evaluate()
{
	window.alert('Asim Khan');
	//window.location='profile.php';
   // location.replace('selection.php')
}

function showUser(str)
{
	if(document.getElementById('hidenVar').value == '0')
	{
		
		
	}
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("midDivInner").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Framing.php?q="+str,true);
xmlhttp.send();
}


function initial()
{
	getViewport();
	document.getElementById("top").style.marginRight = (viewPortWidth * (0.015)) + 'px';
	document.getElementById("top").style.marginLeft = (viewPortWidth * (0.015)) + 'px';
	
	document.body.style.backgroundColor = '#ffffff';
	
	//document.getElementById("").style.width= (viewPortWidth * (0.86)) + 'px';
    document.getElementById("midDivInner").style.width= (viewPortWidth * (0.86)) + 'px';
    //document.getElementById("picFrame").style.paddingRight = (viewPortWidth * (0.05)) + 'px';
    //document.getElementById("picFrame").style.paddingLeft = (viewPortWidth * (0.05)) + 'px';

   
    document.getElementById("midDivInner").style.marginLeft = (viewPortWidth * (0.07)) + 'px';
	
	
	

    document.getElementById("midDivInner").style.marginRight = (viewPortWidth * (0.07)) + 'px';

document.getElementById("midDivInner").style.backgroundColor = '#F00';  
document.getElementById("logInId").style.backgroundColor = '#ffffff';
/*document.getElementById("picSelect1").style.backgroundColor = '#ff2121';
document.getElementById("picSelect2").style.backgroundColor = '#ff2121';
document.getElementById("picSelect3").style.backgroundColor = '#ff2121';
document.getElementById("picSelect4").style.backgroundColor = '#ff2121';
*/


if(viewPortWidth < 1000)
{
	//window.alert("hi Asim");
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("backArrowDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';

document.getElementById("womenDiv").style.marginLeft = (viewPortWidth * (0.1)) + 'px';	

document.getElementById("backArrowDiv").style.marginRight = (viewPortWidth * (0.1)) + 'px';


document.getElementById("logInId").style.width = (viewPortWidth * (0.5)) + 'px';
document.getElementById("logInId").style.marginLeft = (viewPortWidth * (0.1)) + 'px';
document.getElementById("logInId").style.marginRight = '15px';
//document.getElementById("logInId").style.margin = (viewPortWidth * (0.1)) + 'px';

document.getElementById("women").style.width = (viewPortWidth * (0.50)) + 'px';
document.getElementById("women").style.height = (viewPortWidth * (0.30)) + 'px';
document.getElementById("backArrow").style.width = (viewPortWidth * (0.95)) + 'px';
document.getElementById("backArrow").style.height = (viewPortWidth * (0.30)) + 'px';
document.getElementById("backArrowDiv").style.width = (viewPortWidth * (0.95)) + 'px';
document.getElementById("backArrowDiv").style.height = (viewPortWidth * (0.30)) + 'px';

document.getElementById("backArrowDiv").style.marginBottom = (viewPortHeight * (0.2)) + 'px'; 
document.getElementById("mainHeader").style.marginBottom = (viewPortHeight * (0.4)) + 'px';
}
else
{
document.getElementById("logInId").style.marginTop = '0px';
document.getElementById("logInId").style.padding = '5px';
document.getElementById("logInId").style.width = (viewPortWidth * (0.35)) + 'px';
document.getElementById("logInId").style.height = (viewPortWidth * (0.10)) + 'px';

document.getElementById("logInId").style.marginLeft = (viewPortWidth * (0.16)) + 'px';

document.getElementById("womenDiv").style.marginLeft = (viewPortWidth * (0.07)) + 'px';

document.getElementById("women").style.width = (viewPortWidth * (0.12)) + 'px';
document.getElementById("women").style.height = (viewPortWidth * (0.08)) + 'px';
document.getElementById("backArrow").style.width = (viewPortWidth * (0.15)) + 'px';
document.getElementById("backArrow").style.height = (viewPortWidth * (0.08)) + 'px';
document.getElementById("backArrowDiv").style.width = (viewPortWidth * (0.15)) + 'px';
document.getElementById("backArrowDiv").style.height = (viewPortWidth * (0.10)) + 'px';


}

document.getElementById('actualDo').style.visibility = 'hidden';
document.getElementById('doButton').style.visibility = 'hidden';
document.getElementById('do').style.visibility = 'hidden';

// See Now
if(document.getElementById('hidenVar').value == '0')
{	
showUser('framea');
}
else if(document.getElementById('hidenVar').value == '1')
{	
showUser('frameb');
//document.getElementById('pic1').style.s
}
else if(document.getElementById('hidenVar').value == '2')
{	
showUser('framec');
}
else if(document.getElementById('hidenVar').value == '3')
{	
showUser('framed');
}
else if(document.getElementById('hidenVar').value == '4')
{
document.getElementById('actualDo').style.visibility = 'visible';
document.getElementById('doButton').style.visibility = 'visible';
document.getElementById('do').style.visibility = 'visible';
//document.getElementById('actualDo').style.backgroundColor = '#009933';
document.getElementById('actualDo').style.width = (viewPortWidth * (0.30)) + 'px';
document.getElementById('actualDo').style.height = (viewPortHeight * (0.25)) + 'px';
document.getElementById('actualDo').style.marginLeft = (viewPortWidth * (0.30)) + 'px';
document.getElementById('doButton').style.padding = (viewPortWidth * (0.010)) + 'px';	
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

// Go Next

function goNext()
{



}