<?php
/**
 * Created by Kubpro.com.
 * Devloper: Rauf Abbas
 * Date: 10/26/2018
 * Time: 12:27 PM
 * Website: Kubpro.com
 */

namespace Kubpro\Installer\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Kubpro\Installer\Http\Middleware\InstallCheckMiddleware;

class InstallerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */

    public function boot(Router $router)
    {
        $router->middlewareGroup('install',[InstallCheckMiddleware::class]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */

    public function register()
    {
        $this->publishFiles();
        $this->loadRoutesFrom(__DIR__."./../Routes/web.php");
        $this->loadViewsFrom(__DIR__.'./../Views', 'kubpro');
    }


    private function publishFiles()
    {
        $this->publishes([
            __DIR__ . '/../Publish/Config/installer.php' => base_path('config/installer.php'),
        ], 'installer');

        $this->publishes([
            __DIR__.'/../Publish/Assets' => public_path('installer'),
        ], 'installer');

        $this->publishes([
            __DIR__ . '/../Publish/Lang' => base_path('resources/lang'),
        ], 'installer');

    }

}
