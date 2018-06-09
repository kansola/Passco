<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "examquestions";

	// Create Connection

	$conn =  mysqli_connect("$servername","$username","$password",$database); // an object is created

	//Check Connection

	if(!$conn){
		die("Connection failed:". mysqli_error());
	}

	//$query = "USE examquestions";
	//$result = mysqli_query($conn,$query);

	//if(!$result){

		//die("error db selected");
	//}



?>