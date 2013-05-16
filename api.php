<?php
/**
 * Description: wasaTEXTO API v2
 * Send SMS
 * @package wasamundi.com
 * @subpackage:api
 * @license wasamundi labs 2011
 * @author Wasamundi Team
 */

class Api
{
	
	//default content-type: text/php charset=utf-8 , we also support xml/json
	var $uri_cont = 'http://api.wasamundi.com/v2/texto/';
	
	public function __construct($api_key, $user)
    {
        // This must be included
        $this->api_key = $api_key;
        $this->user = $user;	
    }
	
	//this function recieves the message, sender, and reciever\
	//$msg = message, $from= sender, $to = reciever
	public function send($msg, $from, $to) {
		// Build the post data
		$msg = urlencode($msg);
		$post = $this->uri_cont."send_sms?api_key=".$this->api_key."&user=".$this->user."&from=".$from."&to=".$to."&msg=".$msg;
		return $this->curl($post);
	}
	
	public function balance() {
		// Build the post data
		$post = $this->uri_cont."balance?api_key=".$this->api_key."&user=".$this->user;
		return $this->curl($post);
	}
	
	private function curl($post){
		//Initialize the cURL session
		$data = curl_init();
		//Set the URL
		curl_setopt($data, CURLOPT_URL, $post);		
		//Ask cURL to return the contents in a variable 
		//instead of simply echoing them to  the browser.
		curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
		//Execute the cURL session
		$notice = curl_exec ($data);
		//Close cURL session
		curl_close ($data);
		return $notice;
	}
	
}