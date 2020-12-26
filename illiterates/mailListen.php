<?php
session_start();
?>
<?php

$connection = mysqli_connect("localhost","root","");
	  mysqli_select_db($connection,"illiterates_db");
	  $Query = "UPDATE mailbox SET Status='1' WHERE M_Id='".$_SESSION['recording']."'";
	  $Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
?>

<html>

<head>
<script src="http://lab.subinsb.com/projects/jquery/core/jquery-2.1.1.js"></script>
		<script src="cdn/record.js"></script>
		<script src="http://lab.subinsb.com/projects/jquery/voice/jquery.voice.min.js"></script>
		<script src="cdn/recorder.js"></script>

</head>
<body>
<div id="mainHeader" style="background-color:#FFF; padding-top:0px; padding-bottom:0px;">
 <div class="row tpad myTooltip" >
    
      <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style=" border:double; margin-left:10px; width:100px; height:120px; border-color:#00F;" >
            <a href="mailHandle.php?M_Id=<?php echo($_SESSION['recording']); ?>" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="backArrow" src="images/baku.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div> 
        </div>
        </div>
<div style="height:200px; width:320px; background-color:#000; padding-top:150px; padding-left:50px; margin-top:150px; margin-left:450px;">

			<audio title="Player" controls src="Record/Audio/<?php echo($_SESSION['R_Name']); ?>.mp3" id="audio" >
            </audio>

     </div>      
</body>
</html>