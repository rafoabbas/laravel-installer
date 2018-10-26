<?php
/**
 * Created by Kubpro.com.
 * Devloper: Rauf Abbas
 * Date: 10/26/2018
 * Time: 12:50 PM
 * Website: Kubpro.com
 */

namespace Kubpro\Installer\Http\Controllers;


use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function index()
    {
        return view('kubpro::test');
    }

}
