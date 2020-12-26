<?php 
 if(preg_match("/connection.php/",$_SERVER['SCRIPT_FILENAME']))
 {
	  define("HOST_NAME","localhost");
	  define("USER_NAME","root");
	  define("PWD","");
	  define("DB_NAME","illiterates_db");
	  
	  if(!$link = mysqli_connect(HOST_NAME,USER_NAME,PWD))
	  {
		die("Cannot connect to MYSQL server. <br> \n ".mysqli_error());  
	  }
	  if(!mysqli_select_db($link,DB_NAME))
	  {
		  
		  die("Cannot select Database. <br> \n ".mysqli_error());  
	 }
 }

?>