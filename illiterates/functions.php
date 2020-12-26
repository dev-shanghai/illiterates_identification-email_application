<?php


function execute_query($query){
	
			$connection = mysqli_connect("localhost","root","");
			mysqli_select_db($connection,"illiterates_db");
			
			$result_set = mysqli_query($query);
			
			mysqli_close($connection);
			
			return $result_set;
	
}

?>