<?php

$namespace = 'Kubpro\Installer\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'installer',
],function (){

    Route::get('/','DemoController@index');

});
