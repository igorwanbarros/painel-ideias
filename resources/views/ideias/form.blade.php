@extends('app')
@section('content')
    <form method="POST" action="{!! url('ideias/salvar') !!}" class="ui form">
        <div class="field">
            <label for="titulo">Título</label>
            <input name="titulo" id="titulo" placeholder="Titulo da sua ideia ...">
        </div>
        <div class="field">
            <label for="descricao">Descrição</label>
            <textarea placeholder="sua descrição aqui . . ."></textarea>
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