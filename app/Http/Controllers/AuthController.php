<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return $this->render('auth.login');
    }


    public function login()
    {
        //$user    = User::where('email', '=', $this->request->input('email'))
        //    ->where('password', '=', $this->request->input('password'))
        //    ->whereNull('deleted_at');

        $attempt = Auth::attempt([
            'email'     => $this->request->input('email'),
            'password'  => $this->request->input('password')
        ]);

        if ($attempt) {
            $this->_dataSession(true);
            return redirect('home');
        }

        return redirect()->back()
            ->withInput($this->request->only('email'))
            ->withErrors([
                'email' => 'Não consegui encontrar um usuário que contenha os dados informados.',
            ]);
    }


    public function logout()
    {
        $this->_dataSession();
        $this->request->session()->forget('login');
        Auth::logout();
        return redirect('/');
    }


    protected function _dataSession($setSession = false)
    {
        if (!$setSession) {
            $this->request->session()->forget('app.session');
            return $this;
        }

        $user = Auth::getLastAttempted();

        $this->request->session()->set('app.session.user_id', $user->id);
        $this->request->session()->set('app.session.user_name', $user->name);
        $this->request->session()->set('app.session.user_email', $user->email);

        return $this;
    }
}