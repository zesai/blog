<?php

namespace App\Http\Controllers\Home;

class IndexController extends BaseController
{
    public function index()
    {
        return view('home.index.index');
    }
}