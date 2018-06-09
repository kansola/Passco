<?php
	echo "This is example.php";

	//$global $number;
	$number = array();
	for($i=1;$i<=5;$i++){
		$number[$i] = $i;
		//echo $number[$i];
	}

	echo $number[2];

?>