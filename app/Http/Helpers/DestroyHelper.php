<?php

namespace App\Http\Helpers;


class DestroyHelper extends ControllerHelpers
{

    public function logic()
    {
        $id = !is_array($this->parameters) ? $this->parameters : null;

        $this->controller->model->destroy($id);

        return redirect($this->controller->view->urlBase);
    }

}