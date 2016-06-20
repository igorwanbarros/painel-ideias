@extends('app')
@section('content')
    <form method="POST" action="{!! url('ideias/salvar') !!}" class="ui form">
        <input name="id" id="id" type="hidden" value="{!! $model->id !!}">
        <div class="field">
            <label for="nome">Nome</label>
            <input name="nome" id="nome" type="text" placeholder="Nome da sua ideia ..." value="{!! $model->nome !!}">
        </div>
        <div class="field">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" placeholder="sua descrição aqui . . .">{!! $model->descricao !!}</textarea>
        </div>
        <div class="field">
            <button class="ui animated black button">
                <div class="hidden content">Salvar</div>
                <div class="visible content">
                    <i class="save icon"></i>
                </div>
            </button>
        </div>
    </form>
@stop

@section('lists')
    @include('ideias.lists')
@stop