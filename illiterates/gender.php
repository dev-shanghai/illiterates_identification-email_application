<?php
session_start();
?>
<Doctype! Html ..>
<?php
if($_REQUEST['lang'] != 'no')
{
$_SESSION["language"] = $_REQUEST['lang'];
}
  if($_SESSION['language'] == 'psh')
   {
	//echo($_SESSION['language']);
	
   }
   else if($_SESSION['language'] == 'urd')
   {
	//echo($_SESSION['language']);
	
   }
   
   else if($_SESSION['language'] == 'eng')
   {
	//echo($_SESSION['language']);
	
   }
   else
   {
	  // echo($_SESSION["gender"]);
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
<script src="Java_Script/genderJS.js" > </script>
<style>
a:hover{
   
   border-radius:20px;
   border-width:10px;
   border-color:#00F;	
	}
</style>
</head>
<!--  Header -->
<body onLoad="initial();">
<div id="top" style="background-color:#FFF; width:1200px;">
<!--  Main Div  -->
<div id="mainHeader" style="background-color:#FFF; padding-top:0px; padding-bottom:0px;">
 <div class="row tpad myTooltip" >
      
      <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style="margin-left:10px; width:100px; height:120px;" >
            <a href="index.php?session=<?php echo('dest'); ?>" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="backArrow" src="images/baku.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div> 
 </div>



</div>

<!--  Body -->
<div id="midDiv" class="container padded" style="padding-top:0px; padding-bottom:0px;">
    <div id="midDivInner" class="row tpad myTooltip" style="background-color:#CCC; padding:0px; margin:0px;">
       
        <div id="menDivA" class="col-sm-6 col-md-3 bpad" style=" padding:0px; background-color:#FFF; margin:0px;">
        <a href="maleOccupation.php?gender=<?php echo('male'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="menA" style="margin:0px; padding:0px;" src="images/images (9).jpg"  alt="logo">
            </a>
        </div> 


<div id="womenDivA" class="col-sm-6 col-md-3 bpad" style="padding:0px; background-color:#FFF; margin:0px;" >
            <a href="femaleOccupation.php?gender=<?php echo('fmale'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="womenA" style="margin:0px; padding:0px;" src="images/images (1).jpg"  alt="logo">
            </a>
        </div> 

 



 </div>


 </div>


<!-- This is a footer -->
     
<div  style="background-color:#FFF; padding-top:0px;  padding-bottom:0px;">
 <div class="row tpad myTooltip">
       
        

<audio id="mainAudio" loop autoplay="true" hidden="true">
   <source src="sounds/<?php echo($_SESSION['language']); ?>/second.mp3" type="audio/mpeg">
</audio>

</div>

 </div>
<input type="hidden" name="hiden" id="hiden" value="0" />
<input type="hidden" name="lang" id="lang"  value="<?php echo($_SESSION['language']); ?>" />

</div> 
</div>
</body>
</html>