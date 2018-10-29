<?php



$namespace = 'Kubpro\Installer\Http\Controllers';


Route::group([
    'namespace' => $namespace,
    'prefix' => 'install',
    'as' => 'Kubpro::',
    'middleware' => 'install'
],function (){

    Route::get('/', [
        'as' => 'welcome',
        'uses' => 'RequirementsController@requirements'
    ]);
    Route::get('/sucsess', [
        'as' => 'sucsess',
        'uses' => 'RequirementsController@sucsess'
    ]);

    Route::get('/permission', [
        'as' => 'permissions',
        'uses' => 'PermissionsController@permissions'
    ]);

    Route::get('/env', [
        'as' => 'env',
        'uses' => 'AppConfigController@AppConfig'
    ]);
    Route::post('/env', [
        'as' => 'env.post',
        'uses' => 'AppConfigController@AppConfigPost'
    ]);

    Route::get('/database', [
        'as' => 'database',
        'uses' => 'AppConfigController@Dadabase'
    ]);
    Route::post('/database', [
        'as' => 'database.post',
        'uses' => 'AppConfigController@DadabasePost'
    ]);




});
