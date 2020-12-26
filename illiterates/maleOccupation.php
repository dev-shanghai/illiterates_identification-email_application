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
                <img id="backArrow" src="images/baku.jpg" height="150" width="150" alt="logo">
            </a>
        </div> 

 </div>



</div>
<!-- Body  -->

<div id="midDiv" class="container padded mar" style="padding-top:0px; padding-bottom:0px;">
    <div id="midDivInner" class="row tpad myTooltip" style="background-color:#CCC; margin:0px;">
       
       <div id="gilkarDivA" class="col-sm-6 col-md-3 bpad doIt">
            <a href="Selection.php?occ=<?php echo('ConstructionWork'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="gilkarA" class="pic" src="images/MaleOccupations/Gilkar.jpg"  alt="logo">
            </a>
        </div> 

 <div id="mazdoorDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('Labour'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  class="pic" id="mazdoorA" src="images/MaleOccupations/mazdoor.jpg" alt="logo">
            </a>
        </div> 


<div id="mehanicDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('CarMechanic'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="mechanicA" class="pic" src="images/MaleOccupations/mechanic.jpg"  alt="logo">
            </a>
        </div> 
        
        <div id="mochiDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('mechanic'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" id="mochiA" src="images/MaleOccupations/mochi.jpg" alt="logo">
            </a>
        </div> 

  <div id="barberDivA" class="col-sm-6 col-md-3 bpad doIt"  >
            <a href="Selection.php?occ=<?php echo('barber'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" id="barberA" src="images/MaleOccupations/barber.jpg"  alt="logo">
          </a>
        </div> 


<div id="cookDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('cook'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="cookA" class="pic"  src="images/MaleOccupations/cook.jpg"  alt="logo">
            </a>
        </div> 

 <div id="dishWasherDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('WashingAtHotel'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" id="dishWasherA" src="images/MaleOccupations/dishwasher.jpg" alt="logo">
            </a>
        </div> 


<div id="driverDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('driver'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="driverA" class="pic" src="images/MaleOccupations/driver.jpg"  alt="logo">
            </a>
        </div> 
        
        <div id="gateKeeperDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('gatekeeper'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" id="gateKeeperA" src="images/MaleOccupations/gatekeeper.jpg" alt="logo">
            </a>
        </div> 


<div id="gardenerDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('gardener'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="gardenerA" class="pic" src="images/MaleOccupations/gardner.jpg"  alt="logo">
            </a>
        </div> 
        
        
      <div id="generatorDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('GeneratorMechanic'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" id="generatorA" src="images/MaleOccupations/generatoroperator.jpg" alt="logo">
            </a>
        </div> 


    
        <div id="tailerDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('tailer'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" id="tailerA" src="images/MaleOccupations/tailor.jpg" alt="logo">
            </a>
        </div> 




 <div id="waiterDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('waiter'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img class="pic" id="waiterA" src="images/MaleOccupations/waiter.jpg" alt="logo">
            </a>
        </div> 


<div id="whiteDivA" class="col-sm-6 col-md-3 bpad doIt" >
            <a href="Selection.php?occ=<?php echo('Painting'); ?>" style="margin:0px; padding:0px;" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img  id="whiteA" class="pic" src="images/MaleOccupations/whitewasher.jpg"  alt="logo">
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