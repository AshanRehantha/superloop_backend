<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', 'ApiAuthController@login');
});

Route::group(['middleware' => 'auth:api','prefix' => 'user'], function () {
    Route::get('/all', 'ApiUserController@index');
    Route::post('/create', 'ApiUserController@create');
    Route::post('/update/{id}/{name}', 'ApiUserController@update');
    Route::post('/delete/{id}', 'ApiUserController@destroy');
});
