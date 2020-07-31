<?php


require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://localhost/login/');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', 'usbw');
define( 'DB_NAME', 'career');



function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}

