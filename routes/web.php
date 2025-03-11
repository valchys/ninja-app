<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/ninjas', 'App\Http\Controllers\NinjaController@index')->name('ninja.index');
Route::get('/ninjas/register', 'App\Http\Controllers\NinjaController@create')->name('ninja.register');
Route::post('/nijas/save', 'App\Http\Controllers\NinjaController@save')->name('ninja.save');



