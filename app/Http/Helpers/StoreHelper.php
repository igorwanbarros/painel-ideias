<?php


namespace App\Http\Helpers;


class StoreHelper extends ControllerHelpers
{

    public function logic()
    {
        $this->controller->all = $this->controller->request->all();

        $this->controller->validate($this->controller->request, $this->controller->form->getRules());

        $this->execCallable();

        $model = $this->controller->model->saveOrUpdate($this->controller->all);


        return $this->controller->view->isAjax
            ? ['status' => isset($model->id) ? true : false, 'model' => $model]
            : redirect($this->controller->view->urlBase);
    }

}