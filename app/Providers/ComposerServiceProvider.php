<?php

namespace App\Providers;

use App\Models\Home\SocialiteUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['home/index/index'], function (View $view) {

            $socialiteUser = auth()->guard('socialite')->user();

            $assign = compact('socialiteUser');

            $view->with($assign);
        });
    }
}
