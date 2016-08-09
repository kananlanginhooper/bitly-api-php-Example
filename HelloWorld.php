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
		
		// step 2 (Optional) - Registered your application with Bitly to get a client ID and client secret
		$clientId = null;
		$clientSecret = null;
		
		// step 3 (Optional) - Enter your application access token or the access token for the current user. This is necessary for most API methods.
		$accessToken = '__Usually-Required__'; // <--- !!! Change this !!!
		
		$clientId = 'cc8152b2ba978bc754d4b92a287d081d584a4735';
		$clientSecret = '210118b4949d61e33482d7ec10d529ff6cf3cb84';
		$accessToken = '2a706adf8d7069ad40bd1376b863f76daaeda68d';
		
		$Bitly = new BitlyApiPhp\Bitly($clientId, $clientSecret, $accessToken);
		
		print "<h1>Hello World</h1>";
		
		$UrlToShorten = 'http://floormechanics.com/ProductDetail/Bona-Traffic-Waterborne-Hardwood-Floor-Finish--Semi-Gloss/WT150318075?2';
		$UrlToShorten_Link = "<a href='$UrlToShorten'>$UrlToShorten</a>";
		
		$results = $Bitly->shorten($UrlToShorten);
		
		$UrlShortened = $results['url'];
		$UrlShortened_Link = "<a href='$UrlShortened'>$UrlShortened</a>";
		
		print "<h1>$UrlToShorten_Link has been shortned to $UrlShortened_Link</h1>";
	
	}
}

$ThisPage = new HelloWorld();




