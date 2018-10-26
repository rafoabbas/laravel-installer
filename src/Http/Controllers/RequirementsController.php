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

class RequirementsController extends Controller
{

    /**
     * @var RequirementsChecker
     */
    protected $requirements;
    /**
     * @param RequirementsChecker $checker
     */
    public function __construct(RequirementsChecker $checker)
    {
        $this->requirements = $checker;
    }


}
