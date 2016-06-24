@extends('app')
@section('content')
    {!! $painel !!}
    <div class="ui segment">
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
    </div>

    <div class="ui equal width grid">
        <div class="column">
            <a href="{!! url($urlBase) !!}" class="ui animated button">
                <div class="hidden content">Voltar</div>
                <div class="visible content"><i class="chevron left icon"></i></div>
            </a>
        </div>
        <div class="column right aligned">
            <a href="{!! url($urlBase . '/excluir/' . $model->id) !!}" class="ui vertical red animated button">
                <div class="hidden content">Excluir</div>
                <div class="visible content"><i class="trash icon"></i></div>
            </a>
        </div>
    </div>
@stop

@section('lists')
    @include('ideias.lists')
@stop