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
        return FormHelper::support($this, $id);
    }


    public function store()
    {
        return StoreHelper::support($this, null, function (UserController $controller) {
            $controller->validandoPassword();
        });
    }


    protected function validandoPassword()
    {
        $dados = $this->request->all();

        if (isset($dados['password']) && $dados['password'] == '') {
            unset($dados['password']);
            unset($dados['re_password']);

            return;
        }

        if (isset($dados['re_password']) && $dados['password'] == $dados['re_password']) {
            $dados['password']      = bcrypt($dados['password']);
            $dados['re_password']   = $dados['password'];
        }

        $this->view->customAttributes = $dados;
    }


    public function destroy($id)
    {
        return DestroyHelper::support($this, $id);
    }
}
