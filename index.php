<?php
require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use Synfony\Componet\HttpFoundation\Response;

$app = new Silex\Application();

$app->get('/clima', function() use($app) {
	$Client = new Client ();
	$url = 'http://api.openweathermap.org/data/2.5/weather?id=3530597&APPID=98b29e5341cf645bbad39879110c608d&units=metric';
	$Response = $Client ->get($url);
	$Body = $Response-> GetBody();
	return $Body;
	
    
});

$app->run();