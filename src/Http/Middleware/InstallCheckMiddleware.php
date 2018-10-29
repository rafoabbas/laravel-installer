<?php
/**
 * Created by Kubpro.com.
 * Devloper: Rauf Abbas
 * Date: 10/26/2018
 * Time: 3:06 PM
 * Website: Kubpro.com
 */

namespace Kubpro\Installer\Http\Middleware;
use Closure;



class InstallCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\RedirectResponse|mixed
     */

    public function handle($request, Closure $next)
    {

        if($this->Installed()) {
            $re = config('installer.installedAction');
            return redirect("$re");
        }
        return $next($request);

    }



    /**
     * If application is already installed.
     *
     * @return bool
     */
    public function Installed()
    {
        return file_exists(storage_path('installed'));
    }
}
