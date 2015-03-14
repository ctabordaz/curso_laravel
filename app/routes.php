<?php

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/test', function()
{
	echo "esto es una prueba";
});

Route::controller('personal','PersonalController');
Route::controller('clase','Clase2Controller');
