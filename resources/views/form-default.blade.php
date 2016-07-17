@extends($isAjax ? 'app-ajax' : 'app')
@section('content')

    @if (count($errors->all()) > 0 && is_subclass_of($widget->getBody(), App\HtmlViews\Forms\FormLumen::class))
        <?php $widget->getBody()->setErrors($errors);?>
    @endif

    {!! $widget !!}

    @if (!$isAjax)
    <div class="ui equal width grid">
        <div class="column">
            <a href="{!! url($urlBase) !!}" class="ui animated button">
                <div class="hidden content">Voltar</div>
                <div class="visible content"><i class="chevron left icon"></i></div>
            </a>
        </div>
        @if ($model->id)
        <div class="column right aligned">
            <a href="{!! url($urlBase . '/excluir/' . $model->id) !!}" class="ui vertical red animated button">
                <div class="hidden content">Excluir</div>
                <div class="visible content"><i class="trash icon"></i></div>
            </a>
        </div>
        @endif
    </div>
    @endif
@stop

@if (!$isAjax)
    @section('lists')

        @include('lists')
    @stop
@endif
