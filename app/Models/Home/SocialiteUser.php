<?php

namespace App\Models\Home;


class SocialiteUser extends BaseUser
{

    protected $table = 'socialite_users';

    protected $fillable = [
        'socialite_client_id', 'name', 'openid', 'access_token', 'last_login_ip', 'login_times', 'email'
    ];


}
