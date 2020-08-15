<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    /**
     * 重定向到首页
     * @var string
     */
    protected $redirectTo = '/admin/index/index';


    /**
     * 设置 admin guard
     * @return Guard|StatefulGuard
     * @author zesai
     * @date 2020/8/11
     */
    public function guard()
    {
        return Auth::guard('admin');
    }
}