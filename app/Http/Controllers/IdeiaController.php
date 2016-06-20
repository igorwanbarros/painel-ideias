<?php

namespace App\Http\Controllers;


use App\Models\Tag;

class IdeiaController extends Controller
{
    public function index()
    {
        $this->view['model'] = Tag::all();

        return $this->render('ideias.index');
    }


    public function form()
    {
        return view('ideias.form');
    }
}