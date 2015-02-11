texto-api
========

This is a PHP Class to send sms using wasaTEXTO REST API

## Installation

### Dependancies
You must have a basic Apache and PHP environement:

	sudo apt-get install apache2 php5 libapache2-mod-php5 php5-curl

### System configuration
Add the class package (texto-api) to the root of your virtual host or domain</b>.

### API access
Every <a href="http://www.wasamundi.com/texto">wasaTEXTO</a> installation must use a unique key for the API. Please <a href="http://www.wasamundi.com/accounts?app=texto&redirect=http://www.wasamundi.com/texto/login">create an account</a> on www.wasatexto.com to get your unique API credentials.

After you login to your account obtain your account details(api credentials) from <a href="http://www.wasamundi.com/texto/api/usage">here </a></b>.

When you get your credentials, replace the following in the test file test.php

replace:

	//enter your api key
	$key = ''; 
	
	//enter your api username
	$username = '';

	//enter sender
	$from = "";
	
	//enter recipient's number
	$to = "";
	
with: 

	//enter your key
	$key = 'example-key'; 
	
	//enter your api username
	$username = 'example-username';

	//enter sender
	$from = "example-sender";
	
	//enter recipient's number
	$to = "example-recipient";

Then run test.php

Check the Api v2 Documentation for more info or [Contact Wasamundi Support](mailto:support@wasamundi.com) :)


