<?php

namespace App\Http\Controllers;


use App\Models\Notas;
use Illuminate\Http\Request;
use App\Http\Helpers\FormHelper;
use App\Http\Helpers\IndexHelper;
use App\Http\Helpers\StoreHelper;
use App\HtmlViews\Forms\NotasForm;
use App\Http\Helpers\DestroyHelper;

class NotasController extends Controller
{
    public function __construct(Request $request, Notas $notas)
    {
        parent::__construct($request, $notas);
        $this->headers  = [
            'id'            => 'Código',
            'titulo'        => 'Título',
            'descricao'     => 'Descrição',
            'realizado'     => 'Realizado',
        ];
        $this->title    = '<i class="file text icon"></i> %s Nota';
        $this->form     = NotasForm::source();

        $this->view->btnAddAjax = true;
    }


    public function index()
    {
        return IndexHelper::support($this, null, function ($controller) {
            $controller->view->table->callback(function ($row) {
                $data = $row->getData();

                if ($data->realizado == 0) {
                    $data->realizado = 'Não Realizado';
                } else {
                    $data->realizado = 'Realizado';
                }
            });
        });
    }


    public function form($id = NULL)
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