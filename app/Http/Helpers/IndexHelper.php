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

        if ($this->controller->userColumn) {
            $model = $model->where($this->controller->userColumn, '=', app_session('user_id'));
        }

        $view->model    = $model->get();

        $view->widget   = new PainelView(str_replace('%s', '', $this->controller->title));

        if (!isset($view->table))
            $view->table    = TableView::source($this->controller->headers, $view->model)
                ->addHeader('actions', '')
                ->callback(function ($row) use ($view) {
                    $data = $row->getData();
                    $data->actions = '<a href="' . url($view->urlBase . '/excluir/' . $data->id) . '" ' .
                        'class="ui mini icon red button"><i class="trash icon"></i></a>';
                })
                ->setLineLink(url($view->urlBase . '/editar/%s'));

        $view->widget->setBody($view->table);

        $this->execCallable();

        return $this->controller->render($this->controller->resourceView);
    }
}
