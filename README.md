[![Build Status](https://travis-ci.org/PyYoshi/google-api-php-client.svg)](https://travis-ci.org/PyYoshi/google-api-php-client)

# Google APIs Client Library for PHP #

## Description ##
The Google API Client Library enables you to work with Google APIs such as Google Cloud Storage, Google OAuth2 on your server.

## Requirements ##
* [PHP 5.5 or higher](http://www.php.net/)

## Developer Documentation ##
http://developers.google.com/api-client-library/php

## Basic Example ##

See the examples/ directory for examples of the key client features.

```PHP
<?php
  require_once 'Google/Autoloader.php';
  \Google\Autoloader::register();

  $client = new \Google\Client();
  $client->setApplicationName("Client_Library_Examples");
  $client->setDeveloperKey("YOUR_APP_KEY");
```

## Code Quality ##

```bash
$ ./check_psr.sh
```
