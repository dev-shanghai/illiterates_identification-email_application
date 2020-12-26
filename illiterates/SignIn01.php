<?php
session_start(); 
?>
<Doctype! Html ..>
<?php
	  
      $connection = mysqli_connect("localhost","root","");
			mysqli_select_db($connection, "illiterates_db");
			$Query = "";
			$page = '';
			$back = '';	
			$recording = '';  
 if($_REQUEST['value'] == '1')
 {
   $Query = "SELECT Pic_Name FROM profile_pics WHERE 1";
   $page = 'password.php';
   $back = 'Selection.php?occ='. $_SESSION['occupation'];	 
   $recording = 'fifth.mp3';
 }
 else if($_REQUEST['value'] == '2')
 {
	// echo($_SESSION['profilePic']);
   $Query = "SELECT Pic_Name FROM profile_pics WHERE Pic_Name!='".$_SESSION['profilePic']."' ";
   $page = 'Record/basic/Record.php';
   $back = 'profile.php?access=1';
   $recording = 'selectingPerson.mp3';
   $_SESSION['message'] = '';	 
 }



$Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
if(mysqli_num_rows($Q_Result) <= 0)
{
 

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
<link href="css/myCSS.css" rel="stylesheet">
<!--    -->
<script src="Java_Script/SignInIS.js" > </script>
<style>
a:hover{
    border-radius:20px;
   border-width:10px;
   border-color:#00F;

	}
	#asim:hover{
   border-radius:20px;
   border-width:15px;
   border:solid;
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
      
      <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style=" margin-left:10px; width:100px; height:120px;" >
            <a href="<?php echo($back); ?>" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="backArrow" src="images/baku.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div> 
 </div>

</div>

<!--  Body -->
<div id="midDiv" class="container padded" style="padding-top:0px; padding-bottom:0px;">
    <div id="midDivInner" class="row tpad myTooltip" style="background-color:#FFF; padding:0px; margin:0px;">
       
<?php
 if(mysqli_num_rows($Q_Result) > 0)
 {
	print('<div data-toggle="tooltip" class="profile_table"> 
	
	'); 

	while($row = mysqli_fetch_assoc($Q_Result))
	{
   //  echo("<div class='col-sm-6 col-md-3 bpad'>
  // print('<div id="picC" class=" picC" >'); 
	echo("<a class='hoverring' href='".$page."?Pic_Name=".$row['Pic_Name']."&id=0&access=1"."'>
	    
	  "); 
	echo("<img id='asim' class='profile'  src='images/Profile_Pics/". $row['Pic_Name'].".jpg'       />");	
	echo('</a>');
	
    //print('</div>');
	}
	
	print('</div>');
	 
 }
 

?>

 </div>


 </div>


<!-- This is a footer -->
     
<div  style="background-color:#FFF; padding-top:0px;  padding-bottom:0px;">
 <div class="row tpad myTooltip">
       
       
<audio id="mainAudio" loop autoplay="true" hidden="true">
   <source src="sounds/<?php echo($_SESSION['language']); ?>/<?php echo($recording); ?>" type="audio/mpeg">
</audio>
 </div>
<input type="hidden" name="hiden" id="hiden" value="0" />
<input type="hidden" name="lang" id="lang"  value="<?php echo($_SESSION['language']); ?>" />

</div> 
</div>
</body>
</html>