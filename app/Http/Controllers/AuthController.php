<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return $this->render('auth.login');
    }


    public function login()
    {
        $user = Auth::attempt([
            'email'     => $this->request->input('email'),
            'password'  => $this->request->input('password')
        ]);

        if ($user) {
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
        Auth::logout();
        return redirect('/');
    }
}