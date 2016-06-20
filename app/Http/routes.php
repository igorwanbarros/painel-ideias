<?php

$app->get('/', function () use ($app) {
    return view('app');
});

$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'ideias'
], function () use ($app) {

    $app->get('/', [
        'uses' => 'IdeiaController@index'
    ]);

    $app->get('/novo', [
        'uses' => 'IdeiaController@form'
    ]);

    $app->get('/editar/{id}', [
        'uses' => 'IdeiaController@form'
    ]);

    $app->post('/salvar', [
        'uses' => 'IdeiaController@save'
    ]);

});
