<?php

namespace App\Http\Controllers\Home;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class AuthController extends BaseController
{
    /**
     * 后台登陆页
     * @return Factory|View
     * @author zesai
     * @date 2020/8/11
     */
    public function login()
    {
        return view('home.auth.login');
    }
}