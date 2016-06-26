<?php

namespace App\Http\Helpers;


use App\HtmlViews\PainelView;
use App\HtmlViews\TableView;

class IndexHelper extends ControllerHelpers
{
    public function logic()
    {
        $this->controller->resourceView = 'index-default';

        $view   = $this->controller->view;
        $model  = $this->controller->model;

        $view->model    = $model->all();
        $view->painel   = new PainelView(str_replace('%s', '', $this->controller->title));
        $view->table    = TableView::source($this->controller->headers, $view->model)
            ->addHeader('actions', '')
            ->setLineLink(url($view->urlBase . '/editar/%s'));

        $this->execCallable();

        return $this->controller->render($this->controller->resourceView);
    }
}
