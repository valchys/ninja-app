<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/ninjas', 'App\Http\Controllers\NinjaController@index')->name('ninja.list');
Route::get('/ninjas/register', 'App\Http\Controllers\NinjaController@register')->name('ninja.register');
Route::post('/nijas/save', 'App\Http\Controllers\NinjaController@save')->name('ninja.save');
Route::get('/ninjas/stats', 'App\Http\Controllers\NinjaController@stats')->name('ninja.stats');
