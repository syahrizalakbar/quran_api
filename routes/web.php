<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('', 'SuraController@sura');
$router->get('{lang:[a-z]+}', 'SuraController@suraTarjim');

$router->get('{sura:[0-9]+}', 'QuranController@quran');
$router->get('{sura:[0-9]+}/{lang:[a-z]+}', 'QuranController@quranTarjim');
