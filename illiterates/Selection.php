<?php
session_start();
?>
<Doctype! Html ..>
<?php
$_SESSION['occupation'] = $_REQUEST['occ'];
$var = '';
if($_SESSION['gender'] == 'male')
{
   	$var = 'maleOccupation.php';
}
else
{
	$var = 'femaleOccupation.php';

}


?>
<html>
<head>
<title>Self Identification for Illiterates</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/moveme.css" rel="stylesheet">
<!--    -->
<script src="Java_Script/selectionJS.js" > </script>
<style>
a:hover{
   
   border-radius:20px;
   border-width:10px;
   border-color:#00F;
   background-color:#FFF;	
	}
</style>
</head>
<!--  Header -->
<body onLoad="initial();">
<div id="top" style="background-color:#FFF; width:1200px;">
<!--  Main Div  -->
<div id="mainHeader" style="background-color:#FFF; padding-top:0px; padding-bottom:0px;">
 <div class="row tpad myTooltip" >
      
      <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style="margin-left:10px;">
            <a href="<?php echo($var); ?>?selection=<?php echo('back'); ?>&gender=<?php echo($_SESSION['gender']); ?> " data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="backArrow" src="images/baku.jpg" height="150" width="150" alt="logo">
            </a>
        </div> 
       
       



 </div>



</div>

<!--  Body -->
<div id="midDiv" class="container padded" style="padding-top:0px; padding-bottom:0px;">
    <div id="midDivInner" class="row tpad myTooltip" style="background-color:#CCC; padding:0px; margin:0px;">
       
        <div id="menDivA" class="col-sm-6 col-md-3 bpad" style="padding:0px; background-color:#FFF; margin:0px;">
            <a href="SignIn01.php?value=1" style="margin:0px; padding-right:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img style="margin:0px; padding:0px;" id="menA" src="images/tickMark.jpg" alt="logo">
            </a>
        </div> 

<div id="womenDivA" class="col-sm-6 col-md-3 bpad" style=" padding:0px; background-color:#FFF; margin:0px;">
            <a href="Camera/index.php?access=0" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="womenA" style="margin:0px; padding:0px;" src="images/crossMark.jpg"  alt="logo">
            </a>
        </div> 

 </div>


 </div>


<!-- This is a footer -->
     
<div  style="background-color:#FFF; padding-top:0px;  padding-bottom:0px;">
 <div class="row tpad myTooltip">
     
        
<audio id="mainAudio" loop autoplay="true" hidden="true">
   <source src="sounds/<?php echo($_SESSION['language']); ?>/fourth.mp3" type="audio/mpeg">
</audio>


 </div>



</div> 
</div>
</body>
</html>