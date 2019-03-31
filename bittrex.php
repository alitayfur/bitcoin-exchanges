<?php
define('API_KEY', '');
define('PRIVATE_KEY', '');
define('API_URL','https://bittrex.com/api/v1.1/');

require_once('bittrex.class.php');

$path = 'public/getmarkets';
$params = [
];
	
$response = apiQuery($path, $params);
var_dump($response);

?>