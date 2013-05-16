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
Every <a href="http://www.wasamundi.com/texto">wasaTEXTO</a> installation must use a unique key for the API. [Do not hesitate to ask for a key!](mailto:support@wasamundi.com)

When you recieve the key replace the following in the test file test.php

replace: <br />
	//enter your api key
	$key = ''; 
	
	//enter your api username
	$username = '';

with: <br />
	//enter your key
	$key = 'example-key'; 
	
	//enter your api username
	$username = 'example-username';


Then run test.php

Check the Api v2 Documentation for more info or [Contact Wasamundi Support](mailto:support@wasamundi.com) :)


