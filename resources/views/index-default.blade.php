@extends($isAjax ? 'app-ajax' : 'app')
@section('content')

    {!! $widget !!}

    @if (!$isAjax)
    <a href="{!! url($urlBase . '/novo') !!}"
       class="ui right floated black vertical animated button {!! $btnAddAjax ? 'link-modal-ajax' : '' !!}"
       data-modal-title="Novo">
        <div class="hidden content">Novo</div>
        <div class="visible content"><i class="plus icon"></i></div>
    </a>
    @endif

@stop

@if (!$isAjax)
    @section('lists')
        @include('lists')
    @stop
@endif
