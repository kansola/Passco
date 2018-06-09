
<?php


	function array_sanitize(&$item)
	{
		$item = mysql_real_escape_string($item);
	}
	
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


	function insert_into_table($table,$data)
	{

			array_walk($data,'array_sanitize');

			$fields = '`'.implode('`, `', array_keys($data)).'`';
			$values = '\''.implode('\',\'',$data). '\'';
			$query = "INSERT INTO {$table} ($fields) VALUES ($values)";
			db_query($query);


			global $conn;
    		return mysqli_insert_id($conn); // returns the id(generated with AUTO_INCREMENT) used in the last query


	}

	function subject_exists($subjectname,$examtype)
	{
		global $conn;

		$query = mysqli_query($conn,"SELECT * FROM `subjects` where `subject_name` = '$subjectname' AND `subject_type` = '$examtype'");

		//return (mysqli_result($query,0) === 1) ? true:false;
		if(mysqli_num_rows($query) > 0)
		{
			return false;
		}
		
	}

	function retreive_subject_test_id($year,$subject_id){
		global $conn;

		$result = mysqli_query($conn, "SELECT * FROM `subject_test` where `subject_id` = '$subject_id' and `year` = '$year'");

		$row = mysqli_fetch_assoc($result);

	    return  $row['id'];	
	    

	}

	function loop_through_test_questions($subject_test_id){

		//global $conn;

		$result = "SELECT * FROM `subject_test_questions` where `subject_test_id` ='$subject_test_id'";
		return db_query($result);
	}


	function subject_test_exists($id,$noofquestions,$year)
	{
		global $conn;

		$query = mysqli_query($conn,"SELECT * FROM `subject_test` where `subject_id` = '$id' AND  `no_of_questions` = '$noofquestions' AND `year` = '$year'");
		
		if(mysqli_num_rows($query) > 0)
		{
			return false;
		}

	}

	function  find_all_from_table($table)
	{
		$query = "SELECT * FROM {$table}";
		return db_query($query);
	}



	function find_all_from_table_where($table, $col, $value){
	$query = "SELECT * FROM {$table} where {$col} = '$value'";

	$query .= "ORDER BY {$col}  DESC";

	return db_query($query);
}

function update_subject_questions($question_text,$alt_a,$alt_b,$alt_c,$alt_d,$answer_alt,$subject_test_questions_id){
	global $conn;
	//$query ="UPDATE `subject_test_questions` set `question_text`=$question_text, `alt_a`=$alt_a, `alt_b`=$alt_b, `alt_c`=$alt_c, `alt_d`=$alt_d, `answer_alt`=$answer_alt  WHERE `subject_test_id`=$subject_test_id";
	$query = mysqli_query($conn,"UPDATE `subject_test_questions` set `question_text`='$question_text', `alt_a`='$alt_a', `alt_b`='$alt_b', `alt_c`='$alt_c', `alt_d`='$alt_d', `answer_alt`='$answer_alt'  WHERE `id`='$subject_test_questions_id'");
	//if($query){
		//return true;
	//}else{

		//return false;
	//}
	//var_dump($query);

}

function insert_subject_questions($subject_test_questions_id,$question_text,$alt_a,$alt_b,$alt_c,$alt_d,$answer_alt){
	global $conn;
	//$query ="UPDATE `subject_test_questions` set `question_text`=$question_text, `alt_a`=$alt_a, `alt_b`=$alt_b, `alt_c`=$alt_c, `alt_d`=$alt_d, `answer_alt`=$answer_alt  WHERE `subject_test_id`=$subject_test_id";
	//$query = mysqli_query($conn,"INSERT into `subject_test_questions` (`subject_test_id`,`question_text`,`alt_a`,`alt_b`,`alt_c`,`alt_d`,`answer_alt`) VALUES ('$subject_test_questions_id','$question_text','$alt_a','$alt_b','$alt_c','$alt_d','$answer_alt')");
	$query = "INSERT into `subject_test_questions` (`subject_test_id`,`question_text`,`alt_a`,`alt_b`,`alt_c`,`alt_d`,`answer_alt`) VALUES ('$subject_test_questions_id','$question_text','$alt_a','$alt_b','$alt_c','$alt_d','$answer_alt')";
	
	var_dump($query);

}

	function no_rows_subject_questions($subject_test_id){
		global $conn;
		$query = mysqli_query($conn,"SELECT * FROM `subject_test_questions` where `subject_test_id`='$subject_test_id'");
		$no_rows = mysqli_num_rows($query);
		return $no_rows;
	}


	function get_subject_test_questions_id($subject_test_id){
		global $conn;
		$query = mysqli_query($conn,"SELECT `id` from `subject_test_questions` where `subject_test_id`='$subject_test_id' LIMIT 1");
		$row = mysqli_fetch_assoc($query);
		return $row['id'];
	}

	function check_question_text($question_text){

		global $conn;
	}

	function redirect_to($url)
	{
		header("Location: {$url}");
		exit; 
	}





	function find_by_id_from_table($table,$colname,$id)
	{
		global $conn;
		//$query = "SELECT * FROM {$table} WHERE id = '{$id}' LIMIT 1";
		$query = "SELECT * FROM {$table} WHERE {$colname} = '$id'";
		//var_dump($query);
		//die();
		$result = mysqli_query($conn,$query);

		if($result)
		{
			return mysqli_fetch_assoc($result);
			//return $result;
		}

		die('DB PROCESS ERROR <br /><br />'.$query .'<br /><br /><br />'.mysqli_error($conn) );
		return false; 
	}





































?>