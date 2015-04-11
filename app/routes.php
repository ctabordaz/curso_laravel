<?php

Route::get('/', function()
{
    if(Auth::check()){
        return Redirect::to("/perfil");
    }else{
    return View::make('general.login');
    
    }
});
Route::get('/test', function()
{
	return View::make('ejemplo');
});

Route::controller('personal','PersonalController');
Route::controller('clase','Clase2Controller');


Route::get('/perfil', array('before' => 'auth', function()
{
   return View::make('perfil.perfil')
                ->with("nombre",Auth::user()->nombre);
}));

Route::get('/logout', function()
{
	Auth::logout();
       return Redirect::to("/");
        
});
Route::post('/login', function()
{
    $correo = Input::get('correo');
    $pass = Input::get('pass');
      
   if (Auth::attempt(array('correo' => $correo, 'password' => $pass)))
    {
        return Redirect::to("/perfil");
    }else{
        echo "no";
    }
    
    
});


Route::get('/tiempo', function()
{
	return View::make('time');
});