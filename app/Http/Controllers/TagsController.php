<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use Illuminate\Http\Request;
use App\HtmlViews\Forms\TagForm;
use App\Http\Helpers\FormHelper;
use App\Http\Helpers\IndexHelper;
use App\Http\Helpers\StoreHelper;
use App\Http\Helpers\DestroyHelper;

class TagsController extends Controller
{
    public function __construct(Request $request, Tag $tag)
    {
        parent::__construct($request, $tag);
        $this->headers  = [
            'id'            => 'Código',
            'nome'          => 'Nome',
            'tipo'          => 'Tipo',
            'updated_at'    => 'Atualizado em',
        ];
        $this->title    = '<i class="tags icon"></i> %s Tag';
        $this->form     = TagForm::source();
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