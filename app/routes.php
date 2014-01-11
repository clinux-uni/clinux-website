<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('site.home');
});

<<<<<<< HEAD
Route::get('/site/msj', function()
{
	return View::make('site.msj');
});

Route::get('/nada', function()
{
	return "lol";
});*/

Route::controller("/","TestController");

Route::get('/site/msj', function()
{
	return View::make('site.msj');
});
=======
Route::get('/usuario', function()
{
    return 'Users!';
});
>>>>>>> ba5f7c6942a1ace5d69172118434b5f99f601ea5
