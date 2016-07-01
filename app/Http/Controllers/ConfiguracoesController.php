<?php


namespace App\Http\Controllers;


use App\HtmlViews\Forms\ColunasForm;

class ConfiguracoesController extends Controller
{
    public function index()
    {
        return view('configuracoes.index');
    }

    public function colunas()
    {
        $this->view->widget = ColunasForm::source();
        return $this->render('configuracoes.colunas');
    }
}