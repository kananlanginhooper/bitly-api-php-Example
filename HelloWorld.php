<?php

// show all errors
$__ShowErrors = 'ALL';
error_reporting(E_ALL);

require_once "##CAEDO.inc";
// xdebug_break();

set_time_limit(60);

class HelloWorld extends BasePage {

	public function __construct(){
		parent::__construct();
	}

	public function __destruct(){
		parent::__destruct();
	}

	protected function __Run_Model(){
	
	}

	protected function __Route_To_View(){
	
	}

	protected function HEAD(){
		parent::HEAD();
	}

	protected function BODY(){
		parent::BODY();
		
		//
		//
		// step 1 - Create a Bitly account
		
		// step 2 - Registered your application with Bitly to get a client ID and client secret
		$clientId = null;
		$clientSecret = null;
		
		// step 3 - Enter your application access token or the access token for the current user. This is necessary for most API methods.
		$accessToken = '__Required__'; // <--- !!! Change this !!!
		
		$Bitly = new BitlyApiPhp\Bitly($clientId, $clientSecret, $accessToken);
		
		print "<h1>Hello World</h1>";
		
		$UrlToShorten = 'https://techcrunch.com/2016/07/25/nist-declares-the-age-of-sms-based-2-factor-authentication-over/';
		$UrlToShorten_Link = "<a href='$UrlToShorten'>$UrlToShorten</a>";
		
		$results = $Bitly->shorten($UrlToShorten);
		
		$UrlShortened = $results['url'];
		$UrlShortened_Link = "<a href='$UrlShortened'>$UrlShortened</a>";
		
		print "<h1>$UrlToShorten_Link has been shortned to $UrlShortened_Link</h1>";
	
	}
}

$ThisPage = new HelloWorld();




