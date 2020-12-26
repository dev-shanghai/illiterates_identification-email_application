<?php
session_start();
?>
<Doctype! Html ..>
<?php 
//Print_r( $_SESSION);

//if(isset ($_POST["Done"]))
$value = '';
$firstClick = '';


if($_REQUEST['access'] == '12')
{
	$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"illiterates_db");
$rname = $_SESSION['rname'];
 $Query = "SELECT Id FROM user WHERE U_Name='".$_SESSION['rec_pic']."'";
 $Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
 $row = mysqli_fetch_assoc($Q_Result);
$reciever=  $row['Id'];
$sender= $_SESSION['U_Id'];
//echo($reciever);
$status = '0';
$date = date('Ymd');

$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"illiterates_db");
$Query = "INSERT INTO mailbox(M_Name,R_Id,S_Id,Status,Date) VALUES('".$rname."','".$reciever."','".$sender."','".$status."','".$date."')";
$Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
$_SESSION['access'] = '3';
header('Location:../../profile.php?access=1');
}

else
{
 $_SESSION['rec_pic'] = $_REQUEST['Pic_Name'];
 $value = 'messageA';
 //$_SESSION['message'] = 'NotSEND';
}


?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Message Recording</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/moveme.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
    <script type="text/javascript" src="../js/swfobject.js"></script>
    <script type="text/javascript" src="../js/recorder.js"></script>
    <script type="text/javascript" src="basic.js"></script>
    <script type="text/javascript">
    function doIt()
	{
		
document.getElementById('mainAudio').pause();
document.getElementById('mainAudio').currentTime = 0;	
	   	
	}
	function doItAgain()
	{
		    val = document.getElementById("lang").value;
            document.getElementById('mainAudio').play();
            document.getElementById('mainAudio').src ='../../sounds/'+ val +'/messageB.mp3';
			document.getElementById('mainAudio').reset();
			document.getElementById('mainAudio').start();
//document.getElementById('mainAudio').currentTime = 0;	
	   	
	}
	
	function doItthird()
	{
		
            val = document.getElementById("lang").value;
			document.getElementById('mainAudio').play();
            document.getElementById('mainAudio').src ='../../sounds/'+ val +'/messageC.mp3';
			document.getElementById('mainAudio').reset();
			document.getElementById('mainAudio').start();
//document.getElementById('mainAudio').currentTime = 0;	
	   	
	}
	
	
    </script>
    <link type="text/css" rel="stylesheet" href="basic.css">
    <style>

        /* Styles for recorder buttons */
        .recorder button, .recorder .upload, .level {
            border: 1px solid #686868;
            height: 120px;
            background-color: white;
            display: inline-block;
            vertical-align: bottom;
            margin: 2px;
            box-sizing: border-box;
            border-radius: 4px;
        }

        /* Styles for level indicator - required! */
        .level {
            width: 30px;
            height: 30px;
            position: relative;
        }
        .progress {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #b10000;
        }
        .upload {
            padding-top: 10px;
			height:120px;
			width:120px;
        }
       #one23:hover{
   border: solid;
   border-color:#00F;
   border-radius:20%;
   border-width:10%;
   	
	}
	 #square:hover{
   border: solid;
   border-color:#00F;
   border-radius:20%;
   border-width:10%;
   	
	}
	
	 #listen:hover{
   border: solid;
   border-color:#00F;
   border-radius:20%;
   border-width:10%;
   	
	}
	
	 #hidden:hover{
   border: solid;
   border-color:#00F;
   border-radius:20%;
   border-width:10%;
   	
	}
	
	 #refresh:hover{
   border: solid;
   border-color:#00F;
   border-radius:20%;
   border-width:10%;
   	
	}
	
#backArrow:hover{
   border: solid;
   border-radius:20%;
   border-width:20%;
   border-color:#00F;	
	}
.backing{
    margin-top:20px;
	margin-left:20px;
	height:150px;
	width:200px;	
	}

    </style>
</head>
<body>

 <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style="display: inline-block; width:160px; height:160px;">
            <a id="back" href="../../profile.php?access=3" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img class="backing" id="backArrow" src="../../images/baku.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div> 
 </div>

<div class="container" >
   
    <section class="recorder-container" style="height:300px; width:400px;" >

 

        <!-- Recorder control buttons -->
        <div class="recorder" >
           
       <a>
            <button style="height:150px; width:150px; " id="one23"onClick="doIt(); FWRecorder.record('audio', 'audio.wav');" >
                <img src="../../images/mike.png" alt="Record">
            </button>
         </a>
            <div class="level">
                <div class="progress"></div>
            </div>
            <a>
            <button id="square" style="height:150px; width:150px;" onClick="FWRecorder.stopRecording('audio'); doItAgain();">
                <img src="../../images/Square.png" alt="Stop Recording"/>
            </button>
            </a>
           <a>
           <button id="listen" style="height:30%;width:60%;" class="start-playing" onClick="doIt(); FWRecorder.playBack('audio');" title="Play">
                <img style="height:90%; width:50%" src="../../images/download.png" alt="Play"/>
            </button>
           </a>
            <div id="hidden" class="upload" style="display: inline-block; width:160px; height:160px;">
               <a> 
                <div id="flashcontent">
                 <img src="../images/record.jpg" style="height:85px; width:85px;" >
                </div>
               </a>
            </div>
            <div id="refresh" class="upload" style="display: inline-block; width:160px; height:160px;">
                
            <a href="Record.php?Id=0&access=1&Pic_Name=<?php echo($_SESSION['rec_pic']); ?>" >
            <img src="../../images/Reply.jpg" style="height:90%; width:90%;">

</a>
</div>
            
          
        </div>
        <!-- Hidden form for easy specifying the upload request parameters -->
        <form id="uploadForm" name="uploadForm" action="../upload.php">
            <input name="authenticity_token" value="xxxxx" type="hidden">
            <input name="upload_file[parent_id]" value="1" type="hidden">
            <input name="format" value="json" type="hidden">
        </form>
    </section>
     
</div>
<!-- 
<form action="" method="post">

      <input type="submit" name="Done" id="Done" value="" style="background-image:url(../images/SendMessage.jpg); height:120px; width:120px; border:none;">
</form>
<a href="Record.php?Id=0&access=1&Pic_Name=" >
<input  type="button" id="refresh" value="" style="background-image:url(../images/RefreshNew.jpg); height:140px; width:140px; border:none;">
</a>
-->
<audio id="mainAudio" autoplay="true" loop  hidden="true" onEnded="doIt();">
   <source src="../../sounds/<?php echo($_SESSION['language']); ?>/<?php echo($value); ?>.mp3" type="audio/mpeg">

</audio>
<input type="hidden" id="pic" value="<?php echo($_SESSION['rec_pic']); ?>" >
<input type="hidden" id="lang" value="<?php echo($_SESSION['language']); ?>" >
</body>
</html>