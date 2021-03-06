<?php

use App\Models\Admin\Admins;

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'socialite' => [
            'driver' => 'session',
            'provider' => 'socialite',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\Home\User::class,
        ],

         'admins' => [
             'driver' => 'eloquent',
             'model' => App\Models\Admin\Admins::class,
         ],

        'socialite' => [
            'driver' => 'eloquent',
            'model' => App\Models\Home\SocialiteUser::class,
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | 重设密码
    |--------------------------------------------------------------------------
    |
    | 如果您有更多密码重置配置，则可以指定多个
    | 而不是应用程序中的一个用户表或模型
    | 根据特定的用户类型分别设置密码重置设置。
    |
    | 到期时间是重置令牌应为的分钟数
    | 认为有效。 此安全功能使令牌的寿命很短，因此
    | 他们有更少的时间可以猜测。 您可以根据需要更改此设置。
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | 密码确认超时
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
