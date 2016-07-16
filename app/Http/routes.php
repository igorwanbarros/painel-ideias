<?php

/*
 |-----------------------------------------------------------------------------
 | rotas do AuthController
 |-----------------------------------------------------------------------------
*/
$app->group([
    'namespace' => 'App\Http\Controllers',
], function () use ($app) {

    $app->get('/', [
        'middleware'    => 'auth:dashboard_home',
        'uses'          => 'DashboardController@index'
    ]);

    $app->get('/login', [
        'as'            => 'login',
        'uses'          => 'AuthController@index'
    ]);

    $app->post('/login', [
        'uses'          => 'AuthController@login'
    ]);

    $app->get('/logout', [
        'as'            => 'logout',
        'uses'          => 'AuthController@logout'
    ]);
});


/*
 |-----------------------------------------------------------------------------
 | rotas do DasboardController
 |-----------------------------------------------------------------------------
*/
$app->group([
    'namespace' => 'App\Http\Controllers',
], function () use ($app) {

    $app->get('/home', [
        'middleware'    => 'auth:dashboard_home',
        'uses'          => 'DashboardController@index'
    ]);

});


/*
 |-----------------------------------------------------------------------------
 | rotas do IdeiasController
 |-----------------------------------------------------------------------------
*/
$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'ideias'
], function () use ($app) {

    $app->get('/', [
        'middleware'    => 'auth:ideias_',
        'uses'          => 'IdeiasController@index'
    ]);

    $app->get('/novo', [
        'middleware'    => 'auth:ideias_',
        'uses'          => 'IdeiasController@form'
    ]);

    $app->get('/editar/{id}', [
        'middleware'    => 'auth:ideias_',
        'uses'          => 'IdeiasController@form'
    ]);

    $app->post('/salvar', [
        'middleware'    => 'auth:ideias_',
        'uses'          => 'IdeiasController@store'
    ]);

    $app->get('/excluir/{id}', [
        'middleware'    => 'auth:ideias_',
        'uses'          => 'IdeiasController@destroy'
    ]);
});


/*
 |-----------------------------------------------------------------------------
 | rotas do TagsController
 |-----------------------------------------------------------------------------
*/
$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'tags'
], function () use ($app) {
    $app->get('/', [
        'middleware'    => 'auth:tags_',
        'uses'          => 'TagsController@index'
    ]);

    $app->get('/novo', [
        'middleware'    => 'auth:tags_',
        'uses'          => 'TagsController@form'
    ]);

    $app->get('/editar/{id}', [
        'middleware'    => 'auth:tags_',
        'uses'          => 'TagsController@form'
    ]);

    $app->post('/salvar', [
        'middleware'    => 'auth:tags_',
        'uses'          => 'TagsController@store'
    ]);

    $app->get('/excluir/{id}', [
        'middleware'    => 'auth:tags_',
        'uses'          => 'TagsController@destroy'
    ]);

});


/*
 |-----------------------------------------------------------------------------
 | rotas do CheckListController
 |-----------------------------------------------------------------------------
*/
$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'check-list'
], function () use ($app) {

    $app->get('/', [
        'middleware'    => 'auth:check-list_',
        'uses'          => 'CheckListController@index'
    ]);

    $app->get('/novo', [
        'middleware'    => 'auth:check-list_',
        'uses'          => 'CheckListController@form'
    ]);

    $app->get('/editar/{id}', [
        'middleware'    => 'auth:check-list_',
        'uses'          => 'CheckListController@form'
    ]);

    $app->post('/salvar', [
        'middleware'    => 'auth:check-list_',
        'uses'          => 'CheckListController@store'
    ]);

    $app->get('/excluir/{id}', [
        'middleware'    => 'auth:check-list_',
        'uses'          => 'CheckListController@destroy'
    ]);

});


/*
 |-----------------------------------------------------------------------------
 | rotas do ColunasController
 |-----------------------------------------------------------------------------
*/
$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'colunas'
], function () use ($app) {

    $app->get('/', [
        'middleware'    => 'auth:colunas_',
        'uses'          => 'ColunasController@index'
    ]);

    $app->get('/novo', [
        'middleware'    => 'auth:colunas_',
        'uses'          => 'ColunasController@form'
    ]);

    $app->get('/editar/{id}', [
        'middleware'    => 'auth:colunas_',
        'uses'          => 'ColunasController@form'
    ]);

    $app->post('/salvar', [
        'middleware'    => 'auth:colunas_',
        'uses'          => 'ColunasController@store'
    ]);

    $app->get('/excluir/{id}', [
        'middleware'    => 'auth:colunas_',
        'uses'          => 'ColunasController@destroy'
    ]);
});


/*
 |-----------------------------------------------------------------------------
 | rotas do NotasController
 |-----------------------------------------------------------------------------
*/
$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'notas'
], function () use ($app) {

    $app->get('/', [
        'middleware'    => 'auth:notas_',
        'uses'          => 'NotasController@index'
    ]);

    $app->get('/novo', [
        'middleware'    => 'auth:notas_',
        'uses'          => 'NotasController@form'
    ]);

    $app->get('/editar/{id}', [
        'middleware'    => 'auth:notas_',
        'uses'          => 'NotasController@form'
    ]);

    $app->post('/salvar', [
        'middleware'    => 'auth:notas_',
        'uses'          => 'NotasController@store'
    ]);

    $app->get('/excluir/{id}', [
        'middleware'    => 'auth:notas_',
        'uses'          => 'NotasController@destroy'
    ]);

});


/*
 |-----------------------------------------------------------------------------
 | rotas do PreferenciasController
 |-----------------------------------------------------------------------------
*/
$app->group([
    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'preferencias'
], function () use ($app) {

    $app->get('/', [
        'middleware'    => 'auth:preferencias_',
        'uses'          => 'PreferenciasController@index'
    ]);

    $app->get('/colunas-usuario', [
        'middleware'    => 'auth:preferencias_',
        'uses'          => 'PreferenciasController@colunas'
    ]);

    $app->get('/perfil-usuario', [
        'middleware'    => 'auth:preferencias_',
        'uses'          => 'PreferenciasController@colunas'
    ]);

    $app->get('/alterar-senha', [
        'middleware'    => 'auth:preferencias_',
        'uses'          => 'PreferenciasController@colunas'
    ]);

    $app->post('/salvar', [
        'middleware'    => 'auth:preferencias_',
        'uses'          => 'PreferenciasController@store'
    ]);

    $app->get('/excluir/{id}', [
        'middleware'    => 'auth:preferencias_',
        'uses'          => 'PreferenciasController@destroy'
    ]);
});


/*
 |-----------------------------------------------------------------------------
 | rotas do
 |-----------------------------------------------------------------------------
*/
//$app->group([
//    'namespace' => 'App\Http\Controllers',
//    'prefix'    => ''
//], function () use ($app) {
//
//});
