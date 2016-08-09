# Bitly PHP Api - Example using CAEDO

This is the Minimum Viable Example of the Bitly PHP Api.  This project was started by Bitly the company, then it appears to not have been updated in some time.  I have forked it so that I can show some examples, and add some documentation around it's use.  

The original project is located here: https://github.com/jsocol/bitly-api-php

This example is using the CAEDO framework.  CAEDO has a nice habit of staying out of the way when trying to show examples, which is why I chose it. 

To learn more about Caedo:

The Caedo PHP Framework Example Project is located here: https://github.com/kananlanginhooper/Caedo_Example

The Caedo PHP Framework Core Project is located here: https://github.com/kananlanginhooper/Caedo

# Using the Bitly PHP Api project

The easiest way to load in this project is by using composer.


```shell
./composer require kananlanginhooper/bitly-api-php '1.0.*'
```
or add to your `composer.json`
```json
{
    "require": {
        "kananlanginhooper/bitly-api-php": "1.0.*"
    }
}
```
and run 
```shell
./composer update
```

In this project, these commands have already been run.  So really all you need to do is download the code to a webserver running on http://localhost and you're set.

# Using the Caedo Framework

Caedo is also installed by using composer.  As mentioned above, composer update has already been run, so you don't need to do anything.  IF you're running on a different URL, you'll need to change the setting in the Caedo framework config to setup other urls.  Please go here: https://github.com/kananlanginhooper/Caedo_Example for more details on configuring Caedo.


# Hello World

This is an example project, the file HelloWorld.php in the root directory contains the most basic example and usage of the classes.

Here is the short version:

Step 1. Create a Bitly.com account

Unless you have an account, you won't be able to shorten urls.  Creating an account is free, so go on, go create one already!!

Step 2. Get your oAuth credentials

You can navigate through the bitly.com site, or just go here: https://bitly.com/a/oauth_apps once you are logged in.

Copy the Client ID, Client Secret and Generic Access Token

Step 3. Fill the Client ID, Client Secret and Generic Access Token into HelloWorld.php

Step 4. Change the $UrlToShorten

The $UrlToShorten can be any url.  I have a tech crunch article in there as the default.

Step 5. Run the page.

# Namespace and details

The Bitly class is in the BitlyApiPhp namespace.  In order to create a new class instance, you can use this command:

```
$Bitly = new BitlyApiPhp\Bitly($clientId, $clientSecret, $accessToken);
```

You can also include the BitlyApiPhp namespace at the top of your php file like this:

```
use BitlyApiPhp;
```

$clientId, $clientSecret and $accessToken seem to all be required.  Fill in the details from your bitly.com account.

shorten is the main function to do the actual shortening of URLs.  Keep in mind all shortened URLs are public.  Anyone can see what URLs have been shortened and follow the link, because of this it's a really bad idea to authentiation information into the shortened URL.  It is also not possible to pass query parameters along with your shortened url.  For example http://cnb.cx/2aDldcS resolves to http://www.cnbc.com/advisor-insight/.  http://cnb.cx/2aDldcS?Data=ThisISMoreData also resolves to http://www.cnbc.com/advisor-insight/, the query parameter is dropped and not passed along to the destination site.

There are other functions on the Bitly class.  These deal with doing translations from a shortened URL to full URL without using curl and waiting for the 301.  I'm not going to go into details on those here.















