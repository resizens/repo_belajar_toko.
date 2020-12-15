<?php
use Illuminate\Http\Request;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
   });
   
 Route::get('/customers', 'CustomersController@show');
 Route::get('/product', 'ProducstController@show');
 Route::get('/orders', 'OrderssController@show');

 Route::post('/customers', 'CustomersController@store');
 Route::post('/product', 'ProductController@store');
 Route::post('/orders', 'OrderssController@store');

 Route::put('/customers/{id}', 'CustomersController@update');
 Route::put('/product/{id}', 'ProductController@update');
 Route::put('/orders/{id}', 'OrderssController@update');

 Route::delete('/customers/{id}', 'CustomersController@destroy');
 Route::delete('/product/{id}', 'ProductController@destroy');
 Route::delete('/orders/{id}', 'OrderssController@destroy');