<?php

/** 后台 Auth 模块*/
Route::group([
    'prefix' => 'auth',
    'middleware' => 'web'
], function () {

    // 登录页面
    Route::get('login', 'Admin\AuthController@login')->middleware('admin.auth.login');

    Route::group([
        'namespace' => 'Auth',
    ], function () {
        Route::post('login', 'AdminController@login')->name('admin.login');
        // 退出
        Route::get('logout', 'AdminController@logout')->name('admin.logout');
    });
});

/** 后台模块 */
Route::group([
    'namespace' => 'Admin',
    'middleware' => 'admin.auth'
], function () {
    Route::get('/', 'IndexController@index');

});
