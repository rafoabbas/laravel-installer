<?php
/**
 * Created by Kubpro.com.
 * Devloper: Rauf Abbas
 * Date: 10/26/2018
 * Time: 3:00 PM
 * Website: Kubpro.com
 */

namespace Kubpro\Installer\Http\Helpers;


class InstalledFileManager
{
    /**
     * Create installed file.
     *
     * @return int
     */
    public function create()
    {
        $installedLogFile = storage_path('installed');
        $dateStamp = date("Y/m/d h:i:sa");
        if (!file_exists($installedLogFile))
        {
            $message = 'Laravel Installer successfully INSTALLED' . $dateStamp . "\n";
            file_put_contents($installedLogFile, $message);
        }
        return $message;
    }

}
