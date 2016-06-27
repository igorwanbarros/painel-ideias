<?php

namespace App\Http\Helpers;


class DestroyHelper extends ControllerHelpers
{

    public function logic()
    {
        $id = !is_array($this->parameters) ? $this->parameters : null;

        $this->controller->model->destroy($id);

        if ($this->controller->request->ajax())
            return ['status' => true];

        return redirect($this->controller->view->urlBase);
    }

}