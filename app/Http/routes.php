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
Route::group(['middleware'=>['web']], function ()
{
    route::resource('product','Product\ProductController');
    route::get('market','Product\MarktController@index');
   //route::get('panel','Desktop\Administrator@panel');
   //route::get('access','Desktop\Administrator@access');
  // route::get('reports','Desktop\Administrator@reports');
    route::get('dashboard','Desktop\DashboardController@index');
});
