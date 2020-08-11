<?php


namespace App\Http\Controllers\Admin;


class IndexController extends BaseAdminController
{

    public function index()
    {
        return view('admin.index.index');
    }
}