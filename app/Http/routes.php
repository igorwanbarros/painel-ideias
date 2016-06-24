<?php

$app->get('/', function () use ($app) {
    return view('app');
});

$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'ideias'
], function () use ($app) {

    $app->get('/', [
        'uses' => 'IdeiasController@index'
    ]);

    $app->get('/novo', [
        'uses' => 'IdeiasController@form'
    ]);

    $app->get('/editar/{id}', [
        'uses' => 'IdeiasController@form'
    ]);

    $app->post('/salvar', [
        'uses' => 'IdeiasController@save'
    ]);

    $app->get('/excluir/{id}', [
        'uses' => 'IdeiasController@destroy'
    ]);

    //$app->post('/excluir/{id?}', [
    //    'uses' => 'IdeiasController@destroy'
    //]);

});
