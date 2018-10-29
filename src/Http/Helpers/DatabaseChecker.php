<?php
/**
 * Created by Kubpro.com.
 * Devloper: Rauf Abbas
 * Date: 10/26/2018
 * Time: 2:09 PM
 * Website: Kubpro.com
 */

namespace Kubpro\Installer\Http\Helpers;


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class DatabaseChecker
{
    /**
     * @var array
     *
     */
    protected $results = [];

    /**
     *
     * Check for the folders permissions.
     *
     * @param array $data
     * @return boolean
     */

    public function connection(){

        try {
            DB::connection()->getPdo();
            $results['connection'] = true;
            return $results;

        } catch (\Exception $e) {
            $results['connection'] = false;
            $results['message'] = $e->getMessage();
            return $results;
        }
    }

    public function configcache(){
        Artisan::call('config:cache');
    }

    public function kubmigrate(){
        Artisan::call('migrate');


        return $results = Artisan::call('db:seed');



    }

}
