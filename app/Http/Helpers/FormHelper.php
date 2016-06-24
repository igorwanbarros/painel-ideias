<?php

namespace App\Http\Helpers;


use App\Views\PainelView;

class FormHelper extends ControllerHelpers
{
    public function logic()
    {
        $view   = $this->controller->view;
        $model  = $this->controller->model;
        $id     = !is_array($this->parameters) ? $this->parameters : null;

        $view->model = $model->findOrNew($id);

        $title = sprintf($this->controller->title, $id ? 'Editar' : 'Adicionar');

        $view->painel = new PainelView($title);

        return $this->controller->render('form');
    }
}
