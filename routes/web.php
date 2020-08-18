<?php

//Auth::routes();

/** 不需要登陆 */
Route::group([
    'namespace' => 'Home'
], function () {
    Route::get('login', 'AuthController@login');
    Route::get('/', 'IndexController@index');
    Route::get('/article', 'ArticleController@getArticleList');
});

