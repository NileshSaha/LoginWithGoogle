<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'NileshSaha\Login\Http\Controllers'], function(){
    Route::get('login', 'LoginController@index');
    Route::post('login', 'LoginController@login');
});
