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
            'updated_at'    => 'Atualizado em',
        ];
        $this->title    = '<i class="file text icon"></i> %s Nota';
        $this->form     = NotasForm::source();

        $this->view->btnAddAjax = true;
    }


    public function index()
    {
        return IndexHelper::support($this);
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