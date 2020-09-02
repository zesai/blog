<?php

namespace App\Http\Controllers\Home;

class ChatController extends BaseController
{
    public function index()
    {
        return view('home.chat.index');
    }
}
