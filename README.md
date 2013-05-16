texto-api
========

#This is a PHP Class to send sms using wasaTEXTO REST API

## Installation

### Dependancies
You must have a basic Apache and PHP environement:

	sudo apt-get install apache2 php5 libapache2-mod-php5 php5-curl

### System configuration
Add the class package (texto-api) to the root of your virtual host or domain</b>.

### API access
Every wasaTEXTO installation must use a unique key for the API. [Do not hesitate to ask for a key!](mailto:support@wasamundi.com)

When you recieve the key replace the following in the test file test.php

replace:
	//enter your api_key
	$api_key = ''; 
	
	//enter your api username
	$user = '';

with: 
	//enter your api_key
	$api_key = 'eaxample-key'; 
	
	//enter your api username
	$user = 'eaxample-username';


Then run test.php

Check the Api v2 Documentation for more info or [Contact WAasamundi Support](mailto:support@wasamundi.com) :)
