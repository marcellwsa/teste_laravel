<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('situacao_processo', 'Situacao_processo_Controller');

Route::resource('tipo_infracao_disciplinar', 'Tipo_infracao_disciplinar_Controller');


