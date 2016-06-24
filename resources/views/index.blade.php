@extends('app')
@section('content')
    <?php
        $table
            ->callback(function($row) use($urlBase) {
                $data = $row->getData();
                $data->actions = '<a href="' . url($urlBase . '/excluir/' . $data->id) .'" ' .
                                    'class="ui mini icon red button"><i class="trash icon"></i></a>';
            })
    ?>

    {!! $painel->setBody($table) !!}

    <a href="{!! url($urlBase . '/novo') !!}" class="ui right floated black vertical animated button">
        <div class="hidden content">Novo</div>
        <div class="visible content"><i class="plus icon"></i></div>
    </a>

@stop

@section('lists')
    @include('ideias.lists')
@stop