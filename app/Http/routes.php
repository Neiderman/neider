<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controllerdfdf to call when that URI is requested.
|
*/

Route::get('/', "ControllerInicio@index");
Route::get('inicio', "ControllerInicio@index");
Route::get('registros', "ControllerRegistros@index");
Route::get('registrosc', function(){
  $arra = [];
  return json_encode($arra);
});
