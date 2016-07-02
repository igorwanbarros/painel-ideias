<?php


namespace App\Http\Controllers;


use App\HtmlViews\Forms\ColunasForm;

class PreferenciasController extends Controller
{
    public function index()
    {
        return view('preferencias.index');
    }

    public function colunas()
    {
        $this->view->widget = ColunasForm::source();
        return $this->render('preferencias.colunas');
    }
}