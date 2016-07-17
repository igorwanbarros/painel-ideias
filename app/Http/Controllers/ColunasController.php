<?php

namespace App\Http\Controllers;


use App\Models\Colunas;
use Illuminate\Http\Request;
use App\Http\Helpers\FormHelper;
use App\Http\Helpers\IndexHelper;
use App\Http\Helpers\StoreHelper;
use App\Http\Helpers\DestroyHelper;
use App\HtmlViews\Forms\ColunasForm;

class ColunasController extends Controller
{
    public function __construct(Request $request, Colunas $colunas)
    {
        parent::__construct($request, $colunas);

        $this->headers  = [
            'id'            => 'Código',
            'nome'          => 'Título',
            'painel'        => 'Painel',
            'updated_at'    => 'Atualizado há',
        ];

        $this->title    = '<i class="columns  icon"></i> %s Coluna';
        $this->form     = ColunasForm::source();
    }


    public function index()
    {
        return IndexHelper::support($this, null, function($controller) {
            if ($controller->view->isAjax) {
                $controller->view->widget = $controller->view->table;
            }
        });
    }


    public function form($id = null)
    {
        return FormHelper::support($this, $id);
    }


    public function store()
    {
        return StoreHelper::support($this);
    }


    public function destroy($id)
    {
        return DestroyHelper::support($this, $id);
    }
}