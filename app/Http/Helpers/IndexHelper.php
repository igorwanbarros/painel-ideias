<?php

namespace App\Http\Helpers;


use App\HtmlViews\PainelView;
use App\HtmlViews\TableView;

class IndexHelper extends ControllerHelpers
{
    public function logic()
    {
        $this->controller->resourceView = 'index-default';

        $model  = $this->controller->model;

        if ($this->controller->userColumn) {
            $model = $model->where($this->controller->userColumn, '=', app_session('user_id'));
        }

        $this->controller->view->model  = $model;
        $this->controller->view->widget = new PainelView(str_replace('%s', '', $this->controller->title));
        $this->controller->form         = $this->controller->form
            ->search($this->controller->headers)
            ->fill($this->controller->request->all());

        $this->_setFilter();

        $this->_setTable();

        $this->execCallable();
        //dd($view);

        $widgetBody = $this->controller->form->render() . $this->controller->view->table->render();
        $this->controller->view->widget->setBody($widgetBody);


        return $this->controller->render($this->controller->resourceView);
    }


    protected function _setFilter()
    {
        $filters    = $this->controller->request->get('filters');
        $search     = $this->controller->request->get('search');
        $where      = '';


        if (!is_array($filters)) {
            $filters = array_flip($this->controller->headers);
        }

        if ($search != null) {
            foreach ($filters as $filter) {
                if (array_key_exists($filter, $this->controller->headers)) {
                    $where .= "$filter like '%$search%' OR ";
                }
            }
        }

        if ($where != '') {
            $this->controller->view->model = $this->controller->view->model->whereRaw('(' . substr($where, 0, -4) . ')');
        } else {
            $this->controller->view->model = $this->controller->view->model->whereNull('deleted_at');
        }
    }


    protected function _setTable()
    {
        if (isset($this->controller->view->table)) {
            return;
        }
        $this->controller->view->table = TableView::source($this->controller->headers, $this->controller->view->model);

        $this->controller->view->table = TableView::source($this->controller->headers, $this->controller->view->model)
            ->addHeader('actions', '')
            ->callback(function ($row) {
                $data = $row->getData();
                $data->actions = '<a href="' . url($this->controller->view->urlBase . '/excluir/' . $data->id) . '" ' .
                    'class="ui mini icon red button"><i class="trash icon"></i></a>';
            })
            ->setLineLink(url($this->controller->view->urlBase . '/editar/%s'));
    }
}
