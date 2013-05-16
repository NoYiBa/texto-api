<?php

	include ( "api.php" );
	//lets test the API

	//Send an SMS
	//sends one sms and returns a text
	
	//enter your api_key
	$api_key = ''; 
	
	//enter your company name
	$user = '';
	
	//enter message to be send
	$msg = "I love wasaTEXTO";
	
	//enter sender
	$from = "";
	
	//enter recipient's number
	$to = "";
		
	//send the message and a notice is returned
	$api = new Api($api_key, $user);
	
	$result = $api->send($msg, $from, $to);
		
	//json decode messsage
	$result_decoded = json_decode($result);
	
	// Status code = 200 if sms was delivered
	echo $result_decoded->status."<br />";
		
	// to get the notification do this
	echo $result_decoded->notice."<br />";
		
	//number of pages delivered
	echo $result_decoded->message_count. "<br /><br />";

	//to check your balance
	$balance = $api->balance();
	$balance_decoded = json_decode($balance);
	//Notice
	echo $balance_decoded->notice."<br />";
	
	//Credit Left
	echo $balance_decoded->balance."<br />";

?>
