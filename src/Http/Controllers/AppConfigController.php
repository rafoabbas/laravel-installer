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
use Illuminate\Http\Request;
use Kubpro\Installer\Http\Helpers\AppConfigChanger;
use Kubpro\Installer\Http\Helpers\DatabaseChecker;

class AppConfigController extends Controller
{
    /**
     * @var AppConfigChanger
     * @var DatabaseChecker
     */
    protected $envchanger;
    protected $database;
    protected $fileinstall;
    /**
     * @param EnvChanger $changer
     */
    public function __construct(AppConfigChanger $changer, DatabaseChecker $connection){
        $this->envchanger = $changer;
        $this->database = $connection;

    }



    /**
     * Display the setting check page.
     *
     * @return \Illuminate\View\View
     */

    public function AppConfig(){
        $error = false;
        return view('kubpro::appconfig',compact('error'));
    }
    public function AppConfigPost(Request $request){
        $request->validate([
            'APP_NAME' => 'required|max:255',
            'APP_DEBUG' => 'required',
            'APP_URL' => 'required|url',
        ]);
        $APP_NAME = "'".$request->APP_NAME."'";
        $data = [
            'APP_NAME' => $APP_NAME,
            'APP_DEBUG' => $request->APP_DEBUG,
            'APP_URL' => $request->APP_URL,
        ];
        $envchanger = $this->envchanger->changer($data);

        if ($envchanger){
            return redirect(route('Kubpro::database'));
        }else{
            $error = true;
            return view('kubpro::appconfig',compact('error'));
        }

    }

    //databese
    public function Dadabase(){
        $error = false;
        $message = '';
        return view('kubpro::database',compact('error','message'));
    }

    public function DadabasePost(Request $request){
        $request->validate([
            'DB_CONNECTION' => 'required|max:255',
            'DB_HOST' => 'required|max:255',
            'DB_PORT' => 'required|max:255',
            'DB_DATABASE' => 'required|max:255',
            'DB_USERNAME' => 'required|max:255',
        ]);

        $data = [
            'DB_CONNECTION' => $request->DB_CONNECTION,
            'DB_HOST' =>  $request->DB_HOST,
            'DB_PORT' =>  $request->DB_PORT,
            'DB_DATABASE' =>  $request->DB_DATABASE,
            'DB_USERNAME' =>  $request->DB_USERNAME,
            'DB_PASSWORD' =>  $request->DB_PASSWORD,
        ];
        $envchanger = $this->envchanger->changer($data);

        if ($envchanger){
            $this->database->configcache();
            $database = $this->database->connection();

            if ($database['connection']){
                $this->database->kubmigrate();

                return redirect(route('Kubpro::sucsess'));

            }else{
                $message = $database['message'];
                $error = true;
                return view('kubpro::database',compact('error','message'));
            }
        }else{
            $error = true;
            $message = '';
            return view('kubpro::database',compact('error','message'));
        }

    }

}
