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

Route::group(['prefix' => 'auth'], function () {
    Route::get('login','Auth\AuthController@getIndex');
    Route::post('login','Auth\AuthController@postLogin');
    Route::get('logout','Auth\AuthController@getLogout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',['as' => 'index', 'uses' => 'HomeController@index']);

Route::resource('situacao_processo', 'Situacao_processo_Controller');

Route::resource('tipo_infracao_disciplinar', 'Tipo_infracao_disciplinar_Controller');

Route::resource('local_infracao', 'Local_infracao_controller');

Route::get('local_infracao/{local_infracao}/imprimirDados', ['as' => 'local_infracao.imprimirDados', 'uses' => 'local_infracao_controller@imprimirDados' ]);

Route::resource('processo', 'Processo_controller');

