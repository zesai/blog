<?php

use Illuminate\Support\Facades\Route;

Route::post('login', 'Admin\Auth\LoginController@login');
Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');