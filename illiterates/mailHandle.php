<?php
session_start();
?>
<Doctype! Html ..>
<?php 

$value = 'hidden'; 
$cond = 'true';
$src = 'sounds/'.$_SESSION['language'].'/listenndelete.mp3'; 
$src1 = '';
$del = '';

 if($_REQUEST['M_Id'] == '1')
{
	  $connection = mysqli_connect("localhost","root","");
	  mysqli_select_db($connection,"illiterates_db");
	  $Query = "UPDATE mailbox SET Status='1' WHERE M_Id='".$_SESSION['recording']."'";
	  
	 try {
		$Q_Result = mysqli_query($connection,$Query); // or die(mysqli_error($connection));
		//echo $Q_Result;
		//echo $_SESSION['recording'];
		//echo $_SESSION['R_Name'];
	 } catch (\Throwable $th) {
		 //echo("failed");
	 }
	  
	  $value = 'visible';
	  $cond = 'true';
	  $src1 = 'Record/Audio/'.$_SESSION['R_Name'].'.mp3';
	  $src = '';
	  $del = '2';
}
else if($_REQUEST['M_Id'] == '2')
{
	  $cond = 'true';
	  $src =  'sounds/'.$_SESSION['language'].'/ConfirmDel.mp3';
	  $src1 = '';
	  $del = '3';
	  //echo $_SESSION['M_ID'];
}
else if($_REQUEST['M_Id'] == '3')
{
	  //echo $_SESSION['recording'];
	  $cond = 'true';
	  $src =  'sounds/'.$_SESSION['language'].'/listenndelete.mp3';
	  $src1 = '';
	  $del = '3';
	  $connection = mysqli_connect("localhost","root","");
	  mysqli_select_db($connection,"illiterates_db");
	  $Query = "DELETE FROM mailbox WHERE M_Id='".$_SESSION['recording']."'";
	  $Q_Result = mysqli_query($connection,$Query) or die(mysqli_error($connection));
	  unlink('Record/Audio/'.$_SESSION['recording'].'.mp3');
	  header('Location:profile.php?access=1');
}

else
{
	  //echo $_SESSION['recording'];
	  //echo '\n';
	  $_SESSION['recording'] = $_REQUEST['M_Id'];
	  //echo $_SESSION['recording'];
	  //echo $_REQUEST['M_Id'];
      $connection = mysqli_connect("localhost","root","");
	  mysqli_select_db($connection,"illiterates_db");
	  $Query = "SELECT * FROM mailbox WHERE M_Id='".$_SESSION['recording']."'";
	  $Q_Result = mysqli_query($connection,$Query) or die(mysqli_error($connection));
	  $row = mysqli_fetch_assoc($Q_Result);
	  $_SESSION['R_Name'] = $row['M_Name'];
	  $del = '2';
}

?>
<html>
<head>
<title>Illiterate Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/moveme.css" rel="stylesheet">
<link href="css/myCSS.css" rel="stylesheet">
<!--    -->
<script src="Java_Script/mailHandle.js" > </script>
</head>
<!--  Header -->
<body onLoad="initial();">
<div id="top">
<!--  Main Div  -->
<div id="mainHeader" style="background-color:#FFF; padding-top:0px; padding-bottom:0px;">
 <div class="row tpad myTooltip" >
    <div>  
      <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style=" margin-left:10px; width:100px; height:120px;" >
            <a href="profile.php?access=1" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="backArrow" src="images/baku.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div> 

 <div id="NewMail" class="col-sm-6 col-md-3 bpad" style="border:double; border-color:#FFF; margin-left:10px;width:100px; height:120px;">
            
        </div> 
        
         <div id="Profile" class="col-sm-6 col-md-3 bpad" style="margin-left:10px;width:100px; height:120px;">
            <a href="#" class="thumbnail" onClick="showUser('frame');" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img id="ppic" src="images/Profile_Pics/<?php echo($_SESSION['profilePic']); ?>.jpg" style="height:100px; width:100px; width:100px;" alt="logo">
            </a>
        </div> 
</div>
</div>
<!--  Body -->


<div id="midDiv" class="container padded" style="padding-top:0px; padding-bottom:0px;">
    <div id="midDivInner" class="row tpad myTooltip" style="background-color:#FFF; padding:0px; margin:0px;">
    
       <form action="" method="post"> 
	
	<div id="womenDivA" class="col-sm-6 col-md-3 bpad" style=" padding:0px; background-color:#FFF; margin:0px;">
        <a href="mailHandle.php?M_Id=1&Profile=<?php $_SESSION['profilePic']?>" class="thumbnail">
          <img id="Listen" src="images/download.png" style="height:100px; width:100px; width:100px;" alt="logo">
                  
         </a>
    </div> 

     </form>


 
<div id="womenDivB" class="col-sm-6 col-md-3 bpad" style="padding-left:10px; background-color:#FFF; margin:0px;" >
           <a href="mailHandle.php?M_Id=<?php echo($del); ?>"  class="thumbnail" >
            <img id="Delete" src="images/Delete.jpg" style="height:100px; width:100px; width:100px;" alt="logo">
              
            </a>
        </div> 

 

 </div>


 </div>



<!-- This is a footer -->
     
<div class="row tpad myTooltip" >
   <audio id="mainAudio" controls loop autoplay="<?php echo($cond); ?>" hidden="true" style=" height:100px; width:250px;">
   <source src="<?php echo($src); ?>" type="audio/mpeg">
</audio>     
  <div style="height:200px; width:320px; background-color:#FFF; padding-top:150px; padding-left:50px;   margin-top:150px; margin-left:450px; visibility:<?php echo($value); ?>">
<audio title="Player" controls autoplay="true" src="<?php echo($src1); ?>" id="audio" >
  </audio>       
  </div>

 </div>
<input type="hidden" name="hiden" id="hiden" value="0" />
<input type="hidden" name="lang" id="lang"  value="<?php echo($_SESSION['language']); ?>" />

</div> 
</div>
</body>
</html>