<?php



$namespace = 'Kubpro\Installer\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'install',
    
],function (){

    Route::get('/','RequirementsController@requirements');



});
