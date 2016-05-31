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

$app->get('getKey', ['as' => 'getKey','uses' => 'MainController@getKey']);
$app->get('get', ['as' => 'getData','uses' => 'MainController@getData']);
$app->get('submit', ['as' => 'submit','uses' => 'MainController@submit']);
$app->get('/', ['as' => 'top','uses' => 'MainController@index']);
