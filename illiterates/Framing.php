
<?php
session_start();
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
<script src="Java_Script/SignInIS.js" > </script>
<style>
a:hover{
   border-radius:20px;
   border-width:10px;
   border-color:#00F;
  
	}
	#myMainDiv:hover{
   border-radius:20px;
   border-width:10px;
   background-color: #393;
		}
	#asim:hover{
   border-radius:20px;
   border-width:10px;
   border:solid;
   border-color:#00F;
		}	
		
</style>
</head>

</html>
<?php
      $connection = mysqli_connect("localhost","root","");
	  mysqli_select_db($connection,"illiterates_db");
	  
	  if($_REQUEST['q'] == 'evl')
	  {
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
   $_SESSION['id'] = '-1';
//header('Location:profile.php');
}

else
{
  // header('Location:Selection.php?occ='.$occupation);	
       $_SESSION['id'] = '-2';
}
	 
	  }
	  else
	  {
            
$Query = "SELECT * FROM ".$_REQUEST['q']." WHERE 1"; 
//echo($Query);
$Q_Result = mysqli_query($connection,$Query) or die(mysqli_error());
if(mysqli_num_rows($Q_Result) <= 0)
{
 

}
$id = $_SESSION['id'];
settype($id,"integer");
$id = $id + 1;
 if(mysqli_num_rows($Q_Result) > 0)
 {
	print('<div id="myMainDiv" class="tableSetting"> 
	
	'); 
	
	while($row = mysqli_fetch_assoc($Q_Result))
	{
   //  echo("<div class='col-sm-6 col-md-3 bpad'> 
   
	echo("<a class='aClass' href='password.php?Pic_Name=".$row['Pic_Name']."&id=".$id."'>
	    
	  "); 
	echo("<img id='asim' style='height:220px; width:220px; margin-left:20px;  margin-top:20px;' src='images/".$_REQUEST['q']."/". $row['Pic_Name'].".jpg'       />");	
	//echo('</a>
//	</div>
	
//	');	
	}
	
	print('</div>');
	 
 }
 
	  }
?>