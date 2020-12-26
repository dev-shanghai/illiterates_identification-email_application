// JavaScript Document
function checque()
{
if(navigator.webkitGetUserMedia!=null) {
	
var options = {
  video:true,
  audio:true
  };
 
 
  navigator.webkitGetUserMedia(options,
  function(stream) {
 var video = document.
 querySelector('video');
 video.src = window.webkitURL.
 createObjectURL(stream);
  },
  function(e) {
	  window.alert("You hhhh need to allow webcam access for this page");
  console.log("There was a problem with webkitGetUserMedia");
  }
   );
   
  document.getElementById('capture').onclick =
 function() {
 var video = document.
 querySelector('video');
 var canvas = document.
 getElementById('canvas');
 var ctx = canvas.getContext('2d');
 ctx.drawImage(video,0,0);
 ctx.drawImage(video,0,0,300,250);
 ctx.putImageData(data,0,0);
 
  }  
   
 window.alert("YESSSS");
}
else
{
	window.alert("YES");
	}
}