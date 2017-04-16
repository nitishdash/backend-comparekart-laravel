<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('names/{id}', function($id)
{
    $names = array(
      1 => "John",
      2 => "Mary",
      3 => "Steven"
    );
    return array($id => $names[$id]);
});

Route::get('student/{id}', 'Controller@getStudent');

Route::get('sstudent/{id}', 'newController@getStudent');

Route::get('product/{pid}', 'newController@tracking');
Route::get('productd/{pid}', 'newController@trackingProduct');
