<?php
session_start();
?>
<Doctype! Html ..>
<?php
	  
           

?>
<html>
<head>
<title>Taking Picture</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/moveme.css" rel="stylesheet">
<link href="css/myCSS.css" rel="stylesheet">
<!--    -->
<script src="Java_Script/SignUpJS.js" > </script>
</head>
<!--  Header -->
<body onLoad="initial();">
<div id="top" style="background-color:#FFF; width:1200px;">
<!--  Main Div  -->
<div id="mainHeader" style="background-color:#FFF; padding-top:0px; padding-bottom:0px;">
 <div class="row tpad myTooltip" >
      
      <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style=" border:double; margin-left:10px; width:100px; height:120px; border-color:#00F;" >
            <a href="index.php?session=<?php echo('dest'); ?>" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="backArrow" src="images/baku.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div> 
 </div>



</div>

<!--  Body -->
<div id="midDiv" class="container padded" style="padding-top:0px; padding-bottom:0px;">
    <div id="midDivInner" class="row tpad myTooltip" style="border:double;border-color:#666;background-color:#CCC; padding:0px; margin:0px;">
       

 </div>


 </div>


<!-- This is a footer -->
     
<div  style="background-color:#FFF; padding-top:0px;  padding-bottom:0px;">
 <div class="row tpad myTooltip">
       
        <div id="help" class="col-sm-6 col-md-3 bpad" style=" border:double; height:120px; width:100px; margin-left:10px; border-color:#00F;">
            <a href="#" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="helpPic" src="images/help2.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div> 
        
        <div id="ear" class="col-sm-6 col-md-3 bpad" style=" height:120px; width:100px; border:double; margin-left:10px; border-color:#00F;" onClick="playSong(2);">
            <a href="#" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img id="earPic" src="images/ear1.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div> 

<audio id="currSong"/>
<audio id="newSong" />

 </div>
<input type="hidden" name="hiden" id="hiden" value="0" />
<input type="hidden" name="lang" id="lang"  value="<?php echo($_SESSION['language']); ?>" />

</div> 
</div>
</body>
</html>