<?php

return [

    //Github OAuth 设置
    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('APP_URL').'/auth/oauth/handleProviderCallback/github',
    ],

    //Google OAuth 设置
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT_URI')
    ],

    //QQ OAuth 设置
    'qq' => [
        'client_id' => env('QQ_CLIENT_ID'),
        'client_secret' => env('QQ_CLIENT_SECRET'),
        'redirect' => env('QQ_REDIRECT_URI')
    ],

    //weiXinWeb OAuth 设置
    'weixinweb' => [
        'client_id' => env('WEIXINWEB_CLIENT_ID'),
        'client_secret' => env('WEIXINWEB_CLIENT_SECRET'),
        'redirect' => env('WEIXINWEB_REDIRECT_URI')
    ],
];
