<?php
/**
 * Created by Kubpro.com.
 * Devloper: Rauf Abbas
 * Date: 10/26/2018
 * Time: 2:03 PM
 * Website: Kubpro.com
 */

namespace Kubpro\Installer\Http\Helpers;


class AppConfigChanger
{
    /**
     * @var boolean
     */
    protected $result = true;
    /**
     * Changer function.
     *
     * @param array $data
     * @return boolean
     */
    public function changer(array $data){
        if(count($data) > 0){

            // Read .env-file
            $env = file_get_contents(base_path() . '/.env');

            // Split string on every " " and write into array
            $env = preg_split('/\s+/', $env);;

            // Loop through given data
            foreach((array)$data as $key => $value){

                // Loop through .env-data
                foreach($env as $env_key => $env_value){

                    // Turn the value into an array and stop after the first split
                    // So it's not possible to split e.g. the App-Key by accident
                    $entry = explode("=", $env_value, 2);

                    // Check, if new key fits the actual .env-key
                    if($entry[0] == $key){
                        // If yes, overwrite it with the new one
                        $env[$env_key] = $key . "=" . $value;
                    } else {
                        // If not, keep the old one
                        $env[$env_key] = $env_value;
                    }
                }
            }

            // Turn the array back to an String
            $env = implode("\n", $env);

            // And overwrite the .env with the new data
            file_put_contents(base_path() . '/.env', $env);

            return $result = true;
        } else {
            return $result = false;
        }

    }


}
