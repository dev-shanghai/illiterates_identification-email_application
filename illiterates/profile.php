<?php
session_start();
?>
<Doctype! Html ..>
<?php 
$_SESSION['message'] = 'not';
   if($_REQUEST['access'] == '1')
   {
	 
	  $connection = mysqli_connect("localhost","root","");
	  mysqli_select_db($connection,"illiterates_db");
	 
		//header('Location:index.php');  
	   $uname = $_SESSION['profilePic'];
	   $password = $_SESSION['picture1'] . $_SESSION['picture2'] . $_SESSION['picture3'] . $_SESSION['picture4'];
	   $language = $_SESSION['language'];
	   $gender = $_SESSION['gender'];
	   $occupation = $_SESSION['occupation'];
	 $Query = "SELECT * FROM user WHERE 
	 U_Name ='".$uname."' AND Password='".$password.
	 "' AND Language='".$language."' AND Gender='".$gender."' AND Occupation='".$occupation."'"; 
	 //echo($Query);
	 $Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
if(mysqli_num_rows($Q_Result) > 0)
{
   
}

else
{
	 $Query = "SELECT * FROM user WHERE 
	 U_Name ='".$uname."' AND Password='".$password."'"; 
	$Q_Result1 = mysqli_query($connection,$Query) or die(mysqli_error());
	if(mysqli_num_rows($Q_Result1) > 0)
{
	
	$Query = "SELECT * FROM user WHERE 
	 Language !='".$language."' And Password='".$password."' And U_Name ='".$uname."'";
	 echo($Query); 
	$Q_Result1 = mysqli_query($connection,$Query) or die(mysqli_error());
	if(mysqli_num_rows($Q_Result1) > 0)
{
	echo('asjdqwdh');
	
	header('Location:index.php?session=dest'); 
}

$Query = "SELECT * FROM user WHERE 
	Gender !='".$gender."' AND Password='".$password."' AND U_Name ='".$uname."'"; 
	$Q_Result1 = mysqli_query($connection,$Query) or die(mysqli_error());
	if(mysqli_num_rows($Q_Result1) > 0)
{
	header('Location:gender.php?lang=no'); 
}

$Query = "SELECT * FROM user WHERE 
	Occupation !='".$occupation. "' AND Password='".$password."' AND U_Name ='".$uname."'"; 
	$Q_Result1 = mysqli_query($connection,$Query) or die(mysqli_error());
	if(mysqli_num_rows($Q_Result1) > 0)
{
	if($gender = 'male')
	{
	header('Location:maleOccupation.php?selection=back&gender='.$_SESSION['gender']); 
	}
	else
	{
	header('Location:femaleOccupation.php?selection=back&gender='.$_SESSION['gender']);	
	}
}

   	
	
}
  
  else
  {
	header('Location:Selection.php?occ='.$occupation); 
  	
  }

}
   }
   else if($_REQUEST['access'] == '2')
   {
	   $connection = mysqli_connect("localhost","root","");
	   mysqli_select_db($connection,"illiterates_db");
	 
		//header('Location:index.php');  
	   $uname = $_SESSION['profilePic'];
	   $password = $_SESSION['picture1'] . $_SESSION['picture2'] . $_SESSION['picture3'] .      $_SESSION['picture4'];
	   $language = $_SESSION['language'];
	   $gender = $_SESSION['gender'];
	   $occupation = $_SESSION['occupation'];
	   $Query = "INSERT INTO user(U_Name,Password,Language,Gender,Occupation)
	    VALUES('".$uname."','".$password."','".$language."','".$gender."','".$occupation."')";
	    $Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
	   $Query = "INSERT INTO profile_pics(pic_Name) VALUES('".$uname."')";
	   $Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
	 
	   }
	   else
	   {
		   $connection = mysqli_connect("localhost","root","");
	  mysqli_select_db($connection,"illiterates_db");
	 
		//header('Location:index.php');  
	   $uname = $_SESSION['profilePic'];
	   $password = $_SESSION['picture1'] . $_SESSION['picture2'] . $_SESSION['picture3'] . $_SESSION['picture4'];
	   $language = $_SESSION['language'];
	   $gender = $_SESSION['gender'];
	   $occupation = $_SESSION['occupation'];
	 $Query = "SELECT * FROM user WHERE 
	 U_Name ='".$uname."' AND Password='".$password.
	 "' AND Language='".$language."' AND Gender='".$gender."' AND Occupation='".$occupation."'"; 
	 //echo($Query);
	 $Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
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
<script src="Java_Script/profileJS.js" > </script>
<style>
a:hover{
   border: solid;
   border-width:20%;
   border-radius:20%;
   border-color:#F00;
  
   	
	}
	#picture:hover{
   border: solid;
   border-width:30%;
   border-radius:30%;
   border-color:#F00;}
</style>

</head>
<!--  Header -->
<body onLoad="initial();">
<div id="top">
<!--  Main Div  -->
<div id="mainHeader" style="background-color:#FFF; padding-top:0px; padding-bottom:0px;">
 <div class="row tpad myTooltip" >
    <div>  
      <div id="backArrowDiv" class="col-sm-6 col-md-3 bpad" style=" margin-left:10px; width:100px; height:120px;" >
            <a href="index.php?session=<?php echo('dest'); ?>" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
                <img id="backArrow" src="images/baku.jpg" style="height:100px; width:100px;" alt="logo">
            </a>
        </div> 

 <div id="NewMail" class="col-sm-6 col-md-3 bpad" style=" margin-left:10px;width:100px; height:120px;">
            <a href="SignIn01.php?value=2" data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img id="nmail" src="images/blank-page.jpg" style="height:100px; width:100px; width:100px;" alt="logo">
            </a>
        </div> 
        
         <div id="Profile" class="col-sm-6 col-md-3 bpad" style=" margin-left:10px;width:100px; height:120px;">
            <a id="picture"  data-toggle="tooltip" title data-original-title="client one" class="thumbnail">
               <img id="ppic" src="images/Profile_Pics/<?php echo($_SESSION['profilePic']); ?>.jpg" style="height:100px; width:100px; width:100px;" alt="logo">
            </a>
        </div> 
</div>
</div>
<!--  Body -->
<div id="midDiv" class="container padded" style="padding-top:0px; padding-bottom:0px;">

<?php
  print('<div id="main"  class="tableSetting">');
      $connection = mysqli_connect("localhost","root","");
	  mysqli_select_db($connection,"illiterates_db");
	  $Query = "SELECT * FROM User WHERE U_Name='".$_SESSION['profilePic']."'";
	   $Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
	  $row = mysqli_fetch_assoc($Q_Result);
	  $_SESSION['U_Id'] = $row['Id'];
	  
	   $Query = "SELECT * FROM mailbox WHERE R_Id='".$_SESSION['U_Id']."' ORDER BY Date desc ";
	   $Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
	   if(mysqli_num_rows($Q_Result) > 0)
       {
	     $color = '';
	     while($row = mysqli_fetch_assoc($Q_Result))
	      {
			  if($row['Status'] == '0')
			  {
				$color = '#ff0000';  
				  }
			  else
			  {
				  $color = '#00b100';
				  }
				  $newQuery = 'SELECT * FROM user WHERE id='.$row['S_Id'];
				  $Q_Result1 = mysqli_query($connection,$newQuery) or die(mysqli_error());
				  $row1 = mysqli_fetch_assoc($Q_Result1);
				  
		print('<a class="aClass" href="mailHandle.php?M_Id='.$row['M_Id'].'&Profile='.$_SESSION['profilePic'].'"> 
  <div id="main2" style=" margin-bottom:5px;
	background-color:'.$color.';
	padding:5px;">
	
	<img style=" margin-left:20px;height:60px;width:100px;" class="pic" src="images/Profile_Pics/'. $row1['U_Name'].'.jpg" />	
	 
	</div>
    </a>
  ');
		  }
	   }

print('</div>');

 ?>
</div>



<!-- This is a footer -->
     
<div class="row tpad myTooltip" >
 <audio id="mainAudio" loop autoplay="true" hidden="true">
   <source src="sounds/<?php echo($_SESSION['language']); ?>/email01.mp3" type="audio/mpeg">
</audio>       
       
</div>

 </div>
<input type="hidden" name="hiden" id="hiden" value="0" />
<input type="hidden" name="lang" id="lang"  value="<?php echo($_SESSION['language']); ?>" />

</div> 
</div>
</body>
</html>