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
        'uses' => 'IdeiasController@store'
    ]);

    $app->get('/excluir/{id}', [
        'uses' => 'IdeiasController@destroy'
    ]);

});

$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'tags'
], function () use ($app) {

    $app->get('/', [
        'uses' => 'TagsController@index'
    ]);

    $app->get('/novo', [
        'uses' => 'TagsController@form'
    ]);

    $app->get('/editar/{id}', [
        'uses' => 'TagsController@form'
    ]);

    $app->post('/salvar', [
        'uses' => 'TagsController@store'
    ]);

    $app->get('/excluir/{id}', [
        'uses' => 'TagsController@destroy'
    ]);

});


$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'check-list'
], function () use ($app) {

    $app->get('/', [
        'uses' => 'CheckListController@index'
    ]);

    $app->get('/novo', [
        'uses' => 'CheckListController@form'
    ]);

    $app->get('/editar/{id}', [
        'uses' => 'CheckListController@form'
    ]);

    $app->post('/salvar', [
        'uses' => 'CheckListController@store'
    ]);

    $app->get('/excluir/{id}', [
        'uses' => 'CheckListController@destroy'
    ]);

});
