<?php


namespace App\Http\Controllers\Home;


class ArticleController extends BaseController
{

    public function getArticleList()
    {
        if (request()->ajax()) {
            return 'ajax';
        } else {
            return 'no';
        }
    }

}