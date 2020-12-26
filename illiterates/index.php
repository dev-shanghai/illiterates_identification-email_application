<?php 
session_start();
if(!isset($_REQUEST['hiden']))
{
//echo("ASIM'S DAY");
$_SESSION['language'] = 'undefined';
}
if(isset($_REQUEST['sssion']) && $_REQUEST['session'] == 'dest')
{
session_destroy();
	
}

?>
<Doctype! Html ..>
<html>
<head>
<title>Self Identification for Illiterates</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/moveme.css" rel="stylesheet">
<link href="css/myCSS.css" rel="stylesheet">
<!--    -->
<script src="Java_Script/indexJS.js" > </script>
<style>
a:hover{
   
   border:solid;
   border-radius:20px;
   border-width:10px;
   border-color:#00F;
   	
	}
</style>
</head>
<!--  Header -->
<body onLoad="initial();">
<div id="top">
<!--  Main Div  -->
<div id="mainHeader">
 <div class="row tpad myTooltip" >
 <!--    

-->
 </div>



</div>

<!--  Body -->
<div id="midDiv" class="container padded" style="padding-top:0px; padding-bottom:0px;">
    <div id="midDivInner" class="row tpad myTooltip">
       
        <div id="red" class="col-sm-6 col-md-3 bpad">
            <a id="abc" href="gender.php?lang=<?php echo('push'); ?>" data-toggle="tooltip" title data-original-title="client one">
           <div id="colorRed" class="checking" style="background-color:#0F0; width:30%; height:20%; border-color:#0F0;">
           </div>
       </a>
           
        </div> 
        
          <div id="blue" class="col-sm-6 col-md-3 bpad"  >
             <a href="gender.php?lang=<?php echo('hind'); ?>" data-toggle="tooltip" title data-original-title="client one">
                 <div id="colorBlue" class="checking" style="background-color:#F00; border-color: #F00;">
           </div>
                 </a>
        </div> 
        
  

 </div>


 </div>


<!-- This is a footer -->
     
<div  style="background-color:#FFF; padding-top:0px;  padding-bottom:0px;">
 <div class="row tpad myTooltip">
       
        
<!--<audio controls loop  id="currSong"/>
<audio id="newSong" />

 </div>
-->
<audio id="mainAudio"loop autoplay="true" hidden="true">
   <source src="sounds/introduction.mp3" type="audio/mpeg">
</audio>

<input type="hidden" name="hiden" id="hiden" />

</div> 
</div>
</body>
</html>