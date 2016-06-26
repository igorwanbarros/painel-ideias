<?php

namespace App\Http\Helpers;


use App\HtmlViews\PainelView;

class FormHelper extends ControllerHelpers
{
    public function logic()
    {
        $this->controller->resourceView = 'form-default';

        $view   = $this->controller->view;
        $model  = $this->controller->model;
        $id     = !is_array($this->parameters) ? $this->parameters : null;

        $view->model = $model->findOrNew($id);

        $title = sprintf($this->controller->title, $id ? 'Editar' : 'Adicionar');

        $view->widget = new PainelView($title);
        $view->widget->setBody($this->controller->form->fill($view->model));

        $this->execCallable();

        return $this->controller->render($this->controller->resourceView);
    }
}
