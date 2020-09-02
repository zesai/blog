<?php

/** 不需要登陆 */
Route::group([

], function () {

    /** 第三方登录 */
    Route::get('auth/socialite/redirectToProvider/{driver}', 'Auth\HomeController@redirectToProvider')
        ->name('socialite.redirect');
    Route::get('auth/socialite/handleProviderCallback/{driver}', 'Auth\HomeController@handleProviderCallback')
        ->name('socialite.callback');

    Route::group(['namespace' => 'Home'], function () {
        Route::get('/', 'IndexController@index');
        Route::get('/article', 'ArticleController@getArticleList');
        Route::get('/chat', 'ChatController@index');
    });

});


/** 需要登录 */
Route::group([
    ''
], function () {

    Route::post('/upload/{type}', 'IndexController@index');
    //退出登录
    Route::get('/logout', 'Auth\HomeController@logout')->name('logout');
});

