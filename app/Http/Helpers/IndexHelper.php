<?php

namespace App\Http\Helpers;


use App\Views\PainelView;
use App\Views\TableView;

class IndexHelper extends ControllerHelpers
{
    public function logic()
    {
        $view   = $this->controller->view;
        $model  = $this->controller->model;

        $view->model    = $model->all();
        $view->painel   = new PainelView('<i class="idea icon"></i> Ideias');
        $view->table    = TableView::source($this->controller->headers, $view->model)
            ->addHeader('actions', '')
            ->setLineLink(url($view->urlBase . '/editar/%s'));

        $this->execCallable();

        return $this->controller->render('index');
    }
}
