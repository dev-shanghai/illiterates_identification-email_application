<?php
session_start();

?>
<Doctype! Html ..>
<?php
//header('Location:index.php');
$colorA = '#ff2121';
$colorB = '#00b100';
$color1 = '';
$color2 = '';
$color3 = '';
$color4 = '';
$back = '';
$cond = '';
$src = '';
$_SESSION['picName'] = $_REQUEST['Pic_Name'];
$_SESSION['id'] = $_REQUEST['id'];
$location = "images/Profile_Pics/";
 if($_SESSION['id'] == -1)
 {
	echo('Asim Khan');
	//header('Location:profile.php'); 
 }
 else if($_SESSION['id'] == -2)
{
	echo('Asim Khan');
	//header('Location:Selection.php?occ='.$_SESSION['occ']); 
}
else if($_SESSION['id'] == 0)
{
	$_SESSION['profilePic'] = $_REQUEST['Pic_Name'];
	$back = 'SignIn01.php?value=1';
	$src = 'sixth.mp3';
	if($_REQUEST['access'] == 2)
	{
	$_SESSION['profilePic'] = $_SESSION['oldname'];
	$back = 'Camera/index.php?access=1';
	$src = 'signUp01.mp3';
	}
	$_SESSION['access'] = $_REQUEST['access'];
	$picture1 = "images/crossMark.jpg";
	$picture2 = "images/crossMark.jpg";
	$picture3 = "images/crossMark.jpg";
	$picture4 = "images/crossMark.jpg";
	$color1 = $colorA;
	$color2 = $colorA;
	$color3 = $colorA;
	$color4 = $colorA;
	
	$cond = 'true';
    
}
else if($_SESSION['id'] == 1)
{
	$_SESSION['picture1'] = $_SESSION['picName'];
	$_SESSION['picture2'] = "crossMark";
	$_SESSION['picture3'] = "crossMark";
	$_SESSION['picture4'] = "crossMark";
	
	$picture1 = "images/framea/".$_SESSION['picture1'].".jpg";
	$picture2 = "images/".$_SESSION['picture2'].".jpg";
	$picture3 = "images/".$_SESSION['picture3'].".jpg";
	$picture4 = "images/".$_SESSION['picture4'].".jpg";

	
	$color1 = $colorB;
	$color2 = $colorA;
	$color3 = $colorA;
	$color4 = $colorA;
	$back = 'password.php?Pic_Name='
	.$_SESSION['profilePic']
	.'&id=0'.'&access='.$_SESSION['access'];
	$cond = 'false';
    $src = '';
	
	}
else if($_SESSION['id'] == 2)
{
	
	$_SESSION['picture2'] = $_SESSION['picName'];
	$_SESSION['picture3'] = "crossMark";
	$_SESSION['picture4'] = "crossMark";
	
	$picture1 = "images/framea/".$_SESSION['picture1'].".jpg";
	$picture2 = "images/frameb/".$_SESSION['picture2'].".jpg";
	$picture3 = "images/".$_SESSION['picture3'].".jpg";
	$picture4 = "images/".$_SESSION['picture4'].".jpg";
	
	
	$color1 = $colorB;
	$color2 = $colorB;
	$color3 = $colorA;
	$color4 = $colorA;
	$back = 'password.php?Pic_Name='
	.$_SESSION['picture1']
	.'&id=1';
	$cond = 'false';
    $src = '';
}
else if($_SESSION['id'] == 3)
{
	
	$_SESSION['picture3'] = $_SESSION['picName'];
	$_SESSION['picture4'] = "crossMark";
	
	$picture1 = "images/framea/".$_SESSION['picture1'].".jpg";
	$picture2 = "images/frameb/".$_SESSION['picture2'].".jpg";
	$picture3 = "images/framec/".$_SESSION['picture3'].".jpg";
	$picture4 = "images/".$_SESSION['picture4'].".jpg";
	
	
	$color1 = $colorB;
	$color2 = $colorB;
	$color3 = $colorB;
	$color4 = $colorA;
	$back = 'password.php?Pic_Name='
	.$_SESSION['picture2']
	.'&id=2';
	$cond = 'false';
    $src = '';
}
else if($_SESSION['id'] == 4)
{
	
	$_SESSION['picture4'] = $_SESSION['picName'];
	
	$picture1 = "images/framea/".$_SESSION['picture1'].".jpg";
	$picture2 = "images/frameb/".$_SESSION['picture2'].".jpg";
	$picture3 = "images/framec/".$_SESSION['picture3'].".jpg";
	$picture4 = "images/framed/".$_SESSION['picture4'].".jpg";
	//print_r($_SESSION);
	
	$color1 = $colorB;
	$color2 = $colorB;
	$color3 = $colorB;
	$color4 = $colorB;
	$back = 'password.php?Pic_Name='
	.$_SESSION['picture3']
	.'&id=3';
	$cond = 'true';
	if($_SESSION['access'] == 2)
	{
    $src = 'signUp02.mp3';
	}
	else
	{
	$src = 'seventh.mp3';
	}
}
  function resultDisplay()
  {
	 echo('hi Asim Khan'); 
	  
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
<script src="Java_Script/PasswordJS.js" > </script>
<style>
a:hover{
   border-radius:20px;
   border-width:10px;
   border-color:#00F;
  
	}
 #actualDo:hover{
   border-radius:20px;
   border-width:10px;
   border-color:#008a0e;
   border:solid;
 
 }	
</style>
</head>
<!--  Header -->
<body onLoad="initial();" id='mainBody'>
<div id="top" style="background-color:#FFF; width:1200px;">
<!--  Main Div  -->
<div id="mainHeader" style="background-color:#FFF; margin-bottom:0px; padding-top:0px; padding-bottom:0px;">
 <div class="row tpad myTooltip" >
 
 <input type="hidden" id="hidenVar" value="<?php echo($_SESSION['id']); ?>" />
 <input type="hidden" id="hidenpic" value="<?php echo($_SESSION['picName']); ?>" />
      <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style=" width:100px; height:120px; margin-left:10px; width:100px; border-color:#00F;">
            <a href="<?php echo($back); ?>" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="backArrow" src="images/baku.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div>
      
     <div id="logInId" class="col-sm-6 col-md-3 bpad" style="background-color:#093; margin:0px; padding: 0px; float:left;">
         <div id="picSelect1" class="col-sm-6 col-md-3 bpad" style="background-color:<?php echo($color1); ?>;  margin-left:10px;width:100px; height:120px;">
             <div class="thumbnail">
                 <img id="pic1" src="<?php echo($picture1); ?>" style="height:100px; width:100px; width:100px;" alt="logo">
            </div>

         </div>
         <div id="picSelect2" class="col-sm-6 col-md-3 bpad" style="background-color:<?php echo($color2); ?>; margin-left:10px;width:100px; height:120px;">
             <div class="thumbnail">
             <img id="pic2" src="<?php echo($picture2); ?>" style="height:100px; width:100px; width:100px;" alt="logo">
             </div>
         </div>
         <div id="picSelect3" class="col-sm-6 col-md-3 bpad" style="background-color:<?php echo($color3); ?>; margin-left:10px;width:100px; height:120px;">
            <div class="thumbnail">
                 <img id="pic3" src="<?php echo($picture3); ?>" style="height:100px; width:100px; width:100px;" alt="logo">
           </div>
         </div>
         <div id="picSelect4" class="col-sm-6 col-md-3 bpad" style="background-color:<?php echo($color4); ?>; margin-left:10px;width:100px; height:120px;">
            <div class="thumbnail">
                 <img id="pic4" src="<?php echo($picture4); ?>" style="height:100px; width:100px; width:100px;" alt="logo">
           </div>
         </div>

     </div>

     
     <div id="womenDiv" class="col-sm-6 col-md-3 bpad" style="margin-left:10px;width:100px; height:120px;">
            
               <img id="women" src="images/Profile_Pics/<?php echo($_SESSION['profilePic']); ?>.jpg" style="height:100px; width:100px;" alt="logo">
        
        </div> 
 
 </div>
</div>

<!--  Body -->
<div id="midDiv" class="container padded" style="padding:0px; margin:0px;">
    <div class="row tpad myTooltip" style=" padding:0px; margin:0px;">
  
 <div id="midDivInner" style="border:none; background-color:#F30;">
 
 

</div>

 </div>


 </div>


<!-- This is a footer -->
     
<div  style="background-color:#FFF; margin-top:0px; padding-top:0px;  padding-bottom:0px;">
 <div class="row tpad myTooltip">
       
       
<audio id="mainAudio" loop autoplay="<?php echo($cond); ?>" hidden="true">
   <source src="sounds/<?php echo($_SESSION['language']); ?>/<?php echo($src); ?>" type="audio/mpeg">
</audio>


 </div>

 <div id="doButton" class="row tpad myTooltip">
 <a href="#" id="do" onClick="window.location='profile.php?access=<?php echo($_SESSION['access']); ?>';">
 <img id="actualDo" style="margin:0px; height:0px; width:0px; padding:0px;" id="menA" src="images/green tick.png" alt="logo">
 
 </a>
 </div>

</div> 
</div>
</body>
</html>