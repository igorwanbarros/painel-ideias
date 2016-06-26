<?php

namespace App\Http\Controllers;


use App\Models\Ideia;
use Illuminate\Http\Request;
use App\Http\Helpers\FormHelper;
use App\Http\Helpers\IndexHelper;
use App\Http\Helpers\StoreHelper;
use App\Http\Helpers\DestroyHelper;
use App\HtmlViews\Forms\IdeiasForm;

class IdeiasController extends Controller
{
    public function __construct(Request $request, Ideia $ideia)
    {
        parent::__construct($request, $ideia);

        $this->headers  = [
            'id'            => 'Código',
            'nome'          => 'Nome',
            'descricao'     => 'Descrição',
            'updated_at'    => 'Atualizado em',
        ];

        $this->title    = '<i class="idea icon"></i> %s uma Ideia';
        $this->form     = IdeiasForm::source();
    }


    public function index()
    {
        return IndexHelper::support($this);
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