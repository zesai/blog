<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\View\View;

class AuthController extends BaseAdminController
{
    use AuthenticatesUsers;

    /**
     * 后台登陆页
     * @return Factory|View
     * @author zesai
     * @date 2020/8/11
     */
    public function login()
    {
        return view('admin.auth.login');
    }
}