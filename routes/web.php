<?php


Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
});
