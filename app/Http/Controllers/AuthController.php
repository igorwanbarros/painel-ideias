<?php

namespace App\Http\Controllers;


class AuthController extends Controller
{
    public function index()
    {
        return $this->render('auth.login');
    }
}