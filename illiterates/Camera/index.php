<?php
session_start();
$access = 'Muhammad';
$value = 'camera1';
if($_REQUEST['access'] == '2')
{
unlink($_SESSION['fname']);
include 'connection.php';
$idvalue=$_SESSION["fname"];
$access = $_SESSION['oldname'];
//echo($idvalue);
    $sql="DELETE FROM entry WHERE image='$idvalue'";
    //echo($sql);
	$result=mysqli_query($con,$sql)
            or die("error in query");
			 
}

else
{}
?>


<html>
<head>
<title>Taking Picture</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../css/moveme.css" rel="stylesheet">
<link href="../css/myCSS.css" rel="stylesheet">
<!--    -->
<script src="../Java_Script/SignUpJS.js" > </script>
<style>
a:hover{
   border: solid;
   border-width:20%;
   border-radius:20%;
   border-color:#F00;
  
   	
	}
</style>
</head>
<!--  Header -->
<body onLoad="initial();">
<div id="top" style="background-color:#FFF; width:1200px;">
<!--  Main Div  -->
<div id="mainHeader" style="background-color:#FFF; padding-top:0px; padding-bottom:0px;">
 <div class="row tpad myTooltip" >
      
      <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style=" margin-left:10px; width:100px; height:120px; border-color:#00F;" >
            <a href="../Selection.php?occ=<?php echo($_SESSION['occupation']); ?>" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="backArrow" src="../images/baku.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div>
        
        
 


</div>
</div>

 <div id="midDiv" class="container padded" style="padding-top:0px; padding-bottom:0px;">
    <div id="midDivInner" class="row tpad myTooltip" style="background-color:#CCC; padding:0px; margin:0px;">
       
      
  <script type="text/javascript" src="webcam.js"></script>

<script language="JavaScript">
var viewPortWidth = null;
var vewPortHeight = null;

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
       getViewport();
        if(viewPortWidth < 1000)
		{
		    document.write( webcam.get_html((viewPortWidth * (0.5)),(viewPortWidth * (0.5))));
        }
		else
		{
			document.write( webcam.get_html((viewPortWidth * (0.505)),(viewPortWidth * (0.25))));
		}
</script>

		
        <!--<input type=button value="Configure..." onClick="webcam.configure()">
		&nbsp;&nbsp;
		<input type=button value="Take Snapshot" onClick="take_snapshot()">
-->

<div class="row tpad myTooltip" >
     
       <div id="backArrowDivA" class="col-sm-6 col-md-3 bpad" style=" margin-left:10px; width:100px; height:120px; border-color:#00F;" onClick="take_snapshot();" >
       <a data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
          <img id="Camera" src="../images/Camera.png" style="height:100px; width:100px;" alt="logo">
          </a>
        </div> 
     
      <div id="backArrowDivB" class="col-sm-6 col-md-3 bpad" style=" visibility:hidden; margin-left:10px; width:100px; height:120px; border-color:#00F;" >
            <a href="index.php?access=2" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="Cross" src="../images/red cross.png" style="height:100px; width:100px;" alt="logo">
            </a>
        </div>
        
        <div id="backArrowDivC" class="col-sm-6 col-md-3 bpad" style="visibility:hidden; margin-left:10px; width:100px; height:120px; border-color:#00F;" >
            <a href="../password.php?access=2&id=0&Pic_Name=Muhammad" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="Tick" src="../images/green tick.png" style="height:100px; width:100px;" alt="logo">
            </a>
        </div>
 


</div>



<!---<form action="" method="post">
    <input type="button" value="" id="CameraOn" style=" background-image:url(../images/Camera.png); border:none; width:220px; height:214px;" onClick="take_snapshot()">
    <input type="submit" name="notDone" id="notDone" value="" style=" background-image:url(../images/Cross.png);visibility:hidden; background-color:#FFF; width:225px; height:255px;" >
    <input id="next" style=" background-image:url(../images/Tick.png);   visibility:hidden; background-color:#F00; width:225px; height:255px;" type=button value="" onClick="window.location='../password.php?access=2&id=0&Pic_Name=Muhammad';" >
</form>
-->
<script language="JavaScript">
		//document.write( webcam.get_html(320, 240) );
</script>

<script language="JavaScript">
    
        webcam.set_api_url( 'test.php' );
	
	    webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		webcam.set_hook( 'onComplete', 'my_completion_handler' );

		function take_snapshot(){
			// take snapshot and upload to server
			document.getElementById('backArrowDivB').style.visibility = 'visible';
			document.getElementById('backArrowDivC').style.visibility = 'visible';
		
			//document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
			webcam.snap();
			var lang = document.getElementById('lang').value;
			document.getElementById('mainAudio').src ='../sounds/'+ lang +'/camera2.mp3';
			document.getElementById('mainAudio').reset();
			document.getElementById('mainAudio').start();
		}

		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				// show JPEG image in page
				//document.getElementById('upload_results').innerHTML ='<h1>Upload Successful!</h1>';
				// reset camera for another shot
				//webcam.reset();
				
				
			}
			else {alert("PHP Error: " + msg);
		}
	}	
	</script>       



 </div>


</div> 
        
 <div  style="background-color:#FFF; padding-top:0px;  padding-bottom:0px;">
 <div class="row tpad myTooltip">
       
        



 </div>



</div>
        
<audio id="mainAudio" loop autoplay="true" hidden="true">
   <source src="../sounds/<?php echo($_SESSION['language']); ?>/<?php echo($value); ?>.mp3" type="audio/mpeg">
</audio>

 
<input type="hidden" name="hiden" id="hiden" value="2" />
<input type="hidden" name="lang" id="lang"  value="<?php echo($_SESSION['language']); ?>" />
</div>
</body>


</html>