<?php

namespace App\Http\Controllers;


use App\Models\Tag;

class IdeiaController extends Controller
{
    public function index()
    {
        $model = Tag::all();
        return view('ideias.index')->with('model', $model);
    }

    public function form()
    {
        return view('ideias.form');
    }
}