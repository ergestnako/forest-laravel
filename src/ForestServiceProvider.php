<?php namespace ForestAdmin\ForestLaravel;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class ForestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $namespace = $this->app->getNamespace();

//        Log::info('Getting the namespace from ForestServiceProvider : '.$namespace);
//        Log::info('Getting the dir from ForestServiceProvider : '.__DIR__);

        $this->app->router->group(['namespace' => $namespace . 'Http\Controllers'], function() {
            require __DIR__. '/Http/routes.php';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}