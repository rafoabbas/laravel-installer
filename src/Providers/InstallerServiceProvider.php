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

class InstallerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."./../Routes/web.php");
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */

    public function register()
    {

    }

}
