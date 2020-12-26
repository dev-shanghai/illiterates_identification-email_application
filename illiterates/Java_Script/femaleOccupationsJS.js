// JavaScript Document
function setPicture()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }	
	
}

function loading(val,val1)
{
	window.alert(val);
	//document.getElementById(val1).style.borderColor = '#008000';
	//document.getElementById('hiden').value = val;
	var someVarName = "value";
    localStorage.setItem("someVarName", someVarName);
	location.replace('selection.php');
}