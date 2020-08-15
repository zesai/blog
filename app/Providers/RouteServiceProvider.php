<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdminRoutes();
        //
    }

    /**
     * web 页面路由
     * @author zesai
     * @date 2020/8/4
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->domain(config('app.domain.web_domain'))
            ->group(base_path('routes/web.php'));
    }

    /**
     * api 接口路由
     * @author zesai
     * @date 2020/8/4
     */
    protected function mapApiRoutes()
    {
        Route::namespace($this->namespace)
            ->domain(config('app.domain.api_domain'))
            ->group(base_path('routes/api.php'));
    }

    /**
     * admin 接口路由
     * @author zesai
     * @date 2020/8/4
     */
    protected function mapAdminRoutes()
    {
        Route::namespace($this->namespace)
            ->domain(config('app.domain.admin_domain'))
            ->group(base_path('routes/admin.php'));
    }
}
