
<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('455546341164-7bt6mtor228b570iggs4acq2ian6afoe.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('i4Wj-eCkH3wZbNwqOcH33Uhm');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/tutorial/php-login-using-google-demo/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>