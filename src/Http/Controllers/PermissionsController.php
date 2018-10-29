<?php
/**
 * Created by Kubpro.com.
 * Devloper: Rauf Abbas
 * Date: 10/26/2018
 * Time: 2:01 PM
 * Website: Kubpro.com
 */

namespace Kubpro\Installer\Http\Controllers;
use Kubpro\Installer\Http\Helpers\PermissionsChecker;

use App\Http\Controllers\Controller;

class PermissionsController extends  Controller
{
    /**
     * @var PermissionsChecker
     */
    protected $permissions;
    /**
     * @param PermissionsChecker $checker
     */
    public function __construct(PermissionsChecker $checker)
    {
        $this->permissions = $checker;
    }
    /**
     * Display the permissions check page.
     *
     * @return \Illuminate\View\View
     */
    public function permissions()
    {
        $permissions = $this->permissions->check(
            config('installer.permissions')
        );
        return view('kubpro::permissions', compact('permissions'));
    }


}
