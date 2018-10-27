<?php
/**
 * Created by Kubpro.com.
 * Devloper: Rauf Abbas
 * Date: 10/26/2018
 * Time: 1:09 PM
 * Website: Kubpro.com
 */

namespace Kubpro\Installer\Http\Controllers;


use App\Http\Controllers\Controller;
use Kubpro\Installer\Http\Helpers\RequirementsChecker;
use Kubpro\Installer\Http\Helpers\InstalledFileManager;

class RequirementsController extends Controller
{

    /**
     * @var RequirementsChecker
     */
    protected $requirements;
    protected $fileinstall;
    /**
     * @param RequirementsChecker $checker
     */
    public function __construct(RequirementsChecker $checker, InstalledFileManager $file)
    {
        $this->requirements = $checker;
        $this->fileinstall = $file;
    }

    /**
     * Display the requirements page.
     *
     * @return \Illuminate\View\View
     */
    public function requirements()
    {
        $phpSupportInfo = $this->requirements->checkPHPversion(
            config('installer.core.minPhpVersion')
        );
        $requirements = $this->requirements->check(
            config('installer.requirements')
        );
        return view('kubpro::requirements', compact('requirements', 'phpSupportInfo'));
    }

    /**
     * Display the succsess page.
     *
     * @return \Illuminate\View\View
     */
    public function sucsess(){
        $this->fileinstall->create();
        return view('kubpro::sucsess');

    }




}
