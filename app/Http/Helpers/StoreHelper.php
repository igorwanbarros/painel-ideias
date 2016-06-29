<?php


namespace App\Http\Helpers;


class StoreHelper extends ControllerHelpers
{

    public function logic()
    {
        $all = $this->controller->request->all();

        //TODO: implementar retorno do metodo validate
        //TODO: adicionar método publico para o validate
        //$this->controller->validate($this->controller->request, []);

        $model = $this->controller->model->saveOrUpdate($all);

        $this->execCallable();

        return $this->controller->view->isAjax
            ? ['status' => isset($model->id) ? true : false]
            : redirect($this->controller->view->urlBase);
    }

}