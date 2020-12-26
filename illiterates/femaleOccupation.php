<?php
session_start(); 
?>
<Doctype! Html ..>
<?php
$_SESSION['gender'] = $_REQUEST['gender'];
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
<link href="css/myCSS.css" rel="stylesheet">
<!--    -->
<script src="Java_Script/occupationJS.js" > </script>
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
<body onLoad="initial();" id="mainBody">
<div id="top">
<!--  Main Div  -->
<div id="mainHeader" >
 <div class="row tpad myTooltip" >
      
      <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style="margin-left:10px;" onClick="<?php 
	 // session_unregister('gender');
	  ?>">
            <a href="gender.php?lang=<?php echo("no"); ?>" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="backArrow" height="150" width="150" src="images/baku.jpg" alt="logo">
            </a>
        </div> 

 </div>



</div>
<!-- Body  -->

<div id="midDiv" class="container padded" style="padding-top:0px; padding-bottom:0px;">
    <div id="midDivInner" class="row tpad myTooltip " style="background-color:#CCC; margin:0px;">
       
     <div id="gilkarDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('Farmer'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="gilkarA" style="height:100%; width:95%;"  class="pic" src="images/WomenOccupations/download (2).jpg"  alt="logo">
            </a>
        </div> 

  


<div id="mehanicDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('PuttingCloths'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="mechanicA" style="height:100%; width:95%;" class="pic" src="images/WomenOccupations/download.jpg"  alt="logo">
            </a>
        </div> 
        
        <div class="col-sm-6 col-md-3 bpad doIt">
        <a href="Selection.php?occ=<?php echo('Gardening'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
        <img class="pic"  id="mazdoorA" style="height:100%; width:95%;" src="images/WomenOccupations/images (1).jpg" alt="logo">
        </a>
          </div>
        
        
        
        
        <div id="mochiDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('PressingCloths'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic"  id="mochiA" style="height:100%; width:95%;" src="images/WomenOccupations/images (4).jpg" alt="logo">
            </a>
        </div> 

  <div id="barberDivA" class="col-sm-6 col-md-3 bpad doIt"  >
            <a href="Selection.php?occ=<?php echo('HomeKistchen'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic"  id="barberA" style="height:100%; width:95%;" src="images/WomenOccupations/images (6).jpg"  alt="logo">
          </a>
        </div> 


<div id="cookDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('Labour'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="cookA" class="pic" style="height:100%; width:95%;"   src="images/WomenOccupations/images (8).jpg"  alt="logo">
            </a>
        </div> 

 <div id="dishWasherDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('CleaningRoads'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" height="20%" style="height:100%; width:95%;"  id="dishWasherA" src="images/WomenOccupations/images (9).jpg" alt="logo">
            </a>
        </div> 


<div id="driverDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('BreadMakingatTandoor'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="driverA" class="pic" style="height:100%; width:95%;"  src="images/WomenOccupations/images (10).jpg"  alt="logo">
            </a>
        </div> 
        
        <div id="gateKeeperDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('WateratTubewell'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" style="height:100%; width:95%;"  id="gateKeeperA" src="images/WomenOccupations/images (11).jpg" alt="logo">
            </a>
        </div> 


<div id="gardenerDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('Tailor'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="gardenerA" style="height:100%; width:95%;" class="pic"  src="images/WomenOccupations/images (12).jpg"  alt="logo">
            </a>
        </div> 
        
        
      <div id="generatorDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('Karhayee'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" style="height:100%; width:95%;"  id="generatorA" src="images/WomenOccupations/images (13).jpg" alt="logo">
            </a>
        </div> 


    
        <div id="tailerDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('Construction'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" height="20%" style="height:100%; width:95%;"  id="generatorA" src="images/WomenOccupations/images (14).jpg" alt="logo">
            </a>
        </div> 




 <div id="waiterDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('KitchenWork'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic"  id="waiterA" style="height:100%; width:95%;" src="images/WomenOccupations/images (15).jpg" alt="logo">
            </a>
        </div> 


<div id="whiteDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('WashingCloths'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="whiteA" class="pic" style="height:100%; width:95%;"  src="images/WomenOccupations/images (16).jpg"  alt="logo">
            </a>
        </div> 




 </div>


 </div>

<!-- This is a footer -->
 <div class="row tpad myTooltip">
       
<audio id="mainAudio" loop autoplay="true" hidden="true">
   <source src="sounds/<?php echo($_SESSION['language']); ?>/third.mp3" type="audio/mpeg">
</audio>

 </div>
<input type="hidden" name="lang" id="lang"  value="<?php echo($_SESSION['language']); ?>" />

<input type="hidden" name="gender" id="gender"  value="<?php echo($_SESSION['gender']); ?>" />


</div> 
</div>
</body>
</html>