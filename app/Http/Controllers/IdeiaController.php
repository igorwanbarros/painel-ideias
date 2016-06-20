<?php

namespace App\Http\Controllers;


use App\Models\Ideia;
use Illuminate\Http\Request;

class IdeiaController extends Controller
{
    public function __construct(Request $request, Ideia $ideia)
    {
        parent::__construct($request);
        $this->model = $ideia;
    }

    public function index()
    {
        $this->view['model'] = Ideia::all();

        return $this->render('ideias.index');
    }


    public function form($id = null)
    {
        $model = $this->model->findOrNew($id);

        return $this->render('ideias.form', ['model' => $model]);
    }


    public function save()
    {
        $this->request->all();

        $this->validate($this->request, ['nome' => 'required', 'descricao' => 'required']);
        $this->model->fill($this->request->all());

        if ($this->request->id > 0)
            $this->model->update();
        else
            $this->model->save();

        return redirect('ideias');
    }
}