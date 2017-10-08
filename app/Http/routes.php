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
<<<<<<< HEAD
   //route::get('panel','Desktop\Administrator@panel');
   //route::get('access','Desktop\Administrator@access');
  // route::get('reports','Desktop\Administrator@reports');
  route::get('dashboard','Desktop\DashboardController@index');
  route::get('product','Product\ProductController@index');
  route::get('market','Product\MarketController@index');
=======
    route::resource('product','Product\ProductController');
    route::get('market','Product\MarktController@index');
   //route::get('panel','Desktop\Administrator@panel');
   //route::get('access','Desktop\Administrator@access');
  // route::get('reports','Desktop\Administrator@reports');
    route::get('dashboard','Desktop\DashboardController@index');
>>>>>>> 15fe9a31578ece95c6aca0550e4fc7281d78af69
});

Route::auth();

Route::get('/home', 'HomeController@index');
