<?php

	function db_query($query)
	{
		global $conn;

		$result = mysqli_query($conn,$query);

		if($result)
		{
			return $result;
		}
		die('not found '.$query .'<br />'.mysqli_error($conn) );
    	return false; 


	}
	
	 function find_subjects_by_examtype($examtype){
	 	
	 	$result = "SELECT * FROM `subjects` where `subject_type` ='$examtype'";
		return db_query($result);
	 }


?>