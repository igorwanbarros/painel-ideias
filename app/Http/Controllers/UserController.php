<?php

namespace App\Http\Controllers;


use App\HtmlViews\Forms\UserForm;
use App\User;
use Illuminate\Http\Request;
use App\Http\Helpers\FormHelper;
use App\Http\Helpers\IndexHelper;
use App\Http\Helpers\StoreHelper;
use App\Http\Helpers\DestroyHelper;


class UserController extends Controller
{
    public function __construct(Request $request, User $user)
    {
        parent::__construct($request, $user);

        $this->headers  = [
            'id'            => 'Código',
            'name'          => 'Nome',
            'email'         => 'Email',
            'updated_at'    => 'Atualizado em',
        ];
        $this->title    = '<i class="user icon"></i> %s Usuário';
        $this->form     = UserForm::source();
        $this->view->urlBase = 'usuario';
    }


    public function index()
    {
        return IndexHelper::support($this);
    }


    public function form($id = NULL)
    {
        //dd($this->request->all());
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
