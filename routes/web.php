<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'CategoryController@index')->name('category.index');
Route::get('/create', 'CategoryController@create')->name('category.create');
Route::post('/store', 'CategoryController@store')->name('category.store');

