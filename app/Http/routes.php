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


Route::group(['middleware' => ['web']], function(){
  Route::get('/', 'ProductsController@index');
  Route::get('/products/{id}','ProductsController@show');
  Route::get('/products/search','ProductsController@search');
  Route::get('/products/{id}/reviews/create','ReviewsController@create');
  Route::post('/products/{id}/reviews','ReviewsController@store');
});
