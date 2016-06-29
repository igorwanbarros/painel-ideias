@extends($isAjax ? 'app-ajax' : 'app')
@section('content')
    {!! $widget !!}

    @if (!$isAjax)
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
    @endif
@stop

@section('lists')
    @include('ideias.lists')
@stop