<?php

namespace App\Http\Controllers;


use App\HtmlViews\Forms\CheckListForm;
use App\Models\CheckList;
use Illuminate\Http\Request;
use App\Http\Helpers\FormHelper;
use App\Http\Helpers\IndexHelper;
use App\Http\Helpers\StoreHelper;
use App\Http\Helpers\DestroyHelper;

class CheckListController extends Controller
{
    public function __construct(Request $request, CheckList $checkList)
    {
        parent::__construct($request, $checkList);

        $this->headers  = [
            'id'            => 'Código',
            'titulo'        => 'Título',
            'descricao'     => 'Descrição',
            'updated_at'    => 'Atualizado em',
        ];
        $this->title    = '<i class=" list layout icon"></i> %s Check List';
        $this->form     = CheckListForm::source();
        $this->view->urlBase = 'check-list';
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
