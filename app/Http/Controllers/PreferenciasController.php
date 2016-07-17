<?php


namespace App\Http\Controllers;


class PreferenciasController extends Controller
{
    public function index()
    {
        return view('preferencias.index');
    }

    public function colunas()
    {
        $colunasController  = app(ColunasController::class);
        $this->view->table  = $colunasController->index();
        $this->title        = str_replace('%s Coluna', 'Colunas', $colunasController->title);
        $form               = $colunasController->form;
        $form->addAttribute('data-widget', 'ajax');

        $this->view->widget = $form;

        return $this->render('preferencias.colunas');
    }
}