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


$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'colunas'
], function () use ($app) {

    $app->get('/', [
        'uses' => 'ColunasController@index'
    ]);

    $app->get('/novo', [
        'uses' => 'ColunasController@form'
    ]);

    $app->get('/editar/{id}', [
        'uses' => 'ColunasController@form'
    ]);

    $app->post('/salvar', [
        'uses' => 'ColunasController@store'
    ]);

    $app->get('/excluir/{id}', [
        'uses' => 'ColunasController@destroy'
    ]);

});


$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'notas'
], function () use ($app) {

    $app->get('/', [
        'uses' => 'NotasController@index'
    ]);

    $app->get('/novo', [
        'uses' => 'NotasController@form'
    ]);

    $app->get('/editar/{id}', [
        'uses' => 'NotasController@form'
    ]);

    $app->post('/salvar', [
        'uses' => 'NotasController@store'
    ]);

    $app->get('/excluir/{id}', [
        'uses' => 'NotasController@destroy'
    ]);

});


$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'preferencias'
], function () use ($app) {

    $app->get('/', [
        'uses' => 'PreferenciasController@index'
    ]);

    $app->get('/colunas-usuario', [
        'uses' => 'PreferenciasController@colunas'
    ]);

    $app->get('/perfil-usuario', [
        'uses' => 'PreferenciasController@colunas'
    ]);

    $app->get('/alterar-senha', [
        'uses' => 'PreferenciasController@colunas'
    ]);

    $app->post('/salvar', [
        'uses' => 'PreferenciasController@store'
    ]);

    $app->get('/excluir/{id}', [
        'uses' => 'PreferenciasController@destroy'
    ]);

});
