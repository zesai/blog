<?php

Auth::routes();

/** 不需要登陆 */
Route::group([
    'namespace' => 'Home'
], function () {
    Route::get('/', 'IndexController@index');
});

