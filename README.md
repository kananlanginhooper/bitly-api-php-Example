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
    ...
    "require": {
        ...
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










