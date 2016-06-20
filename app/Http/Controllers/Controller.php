<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $form;
    protected $model;
    protected $view;
    protected $request;


    public function __construct(Request $request)
    {
        $this->request = $request;

        $pathInfo = $request->getPathInfo();
        $method   = $request->getMethod();

        $this->view['currenteRoute'] = $method.$pathInfo;
    }


    protected function render($view, array $array = [])
    {
        $params = $this->view;

        if (count($array) > 0)
            $params = array_merge($params, $array);

        return view($view)
            ->with($params);
    }
}
