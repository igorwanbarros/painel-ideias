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
            'tags'          => 'Tags',
            'updated_at'    => 'Atualizado há',
        ];

        $this->title    = '<i class="idea icon"></i> %s Ideia';
        $this->form     = IdeiasForm::source();
    }


    public function index()
    {
        return IndexHelper::support($this, null, function($controller) {
            $controller->view->table->callback(function($row) {
                $data = $row->getData();
                $tags = null;
                foreach ($data->tags as $tag)
                    $tags .= $tag->tag->nome . ', ';

                $data->tags = substr($tags, 0, -2);
            });
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