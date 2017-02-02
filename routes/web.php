<?php

/*
|--------------------------------------------------------------------------
| Web <Routes></Routes>
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

*/


//Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/import', ['uses' => 'ExcelController@getImport', 'as' => 'import']);
Route::post('/import/post', ['uses' => 'ExcelController@postImport', 'as' => 'import']);

Route::post('/export', ['uses' => 'ExcelController@export', 'as' => 'export']);

