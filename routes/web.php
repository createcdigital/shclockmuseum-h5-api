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

$app->get('/booking/list','BookingController@index');
$app->get('/booking/create','BookingController@create');
$app->post('/booking/store','BookingController@store');
$app->get('/booking/selectCount/{sdata}','BookingController@selectTime');