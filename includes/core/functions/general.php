<?php

	function feedback_message($message="",$message_type="") {

	if( isset($_SESSION['fb_message']) && $message == '' ){
		$message = $_SESSION['fb_message'];
		$message_type = $_SESSION['fb_message_type'];
		
		unset($_SESSION['fb_message']);
		unset($_SESSION['fb_message_type']);
	}

	$alert_type = ($message_type == 'error')? 'danger': $message_type;

	if (!empty($message) && is_string($message)) { 

		return "<div  class=\"alert alert-{$alert_type}\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
			<strong>".ucfirst($message_type)." !</strong> {$message}</div>";

	}  
	
}



?>