@extends('app')
@section('content')
    <table class="ui striped selectable table">
        <thead>
            <tr class="center aligned">
                <th>Código</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Alterado em</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @forelse($model as $row)
            <tr class="center aligned">
                <td>
                    <a href="{!! url('ideias/editar/' . $row->id) !!}">
                        {!! $row->id !!}
                    </a>
                </td>
                <td>
                    <a href="{!! url('ideias/editar/' . $row->id) !!}">
                        {!! $row->nome !!}
                    </a>
                </td>
                <td>
                    <a href="{!! url('ideias/editar/' . $row->id) !!}">
                        {!! $row->descricao !!}
                    </a>
                </td>
                <td>
                    <a href="{!! url('ideias/editar/' . $row->id) !!}">
                        {!! $row->updated_at !!}
                    </a>
                </td>
                <td>
                    <a href="{!! url('ideias/excluir/' . $row->id) !!}" class="ui icon inverted red button">
                        <i class="trash icon"></i>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5">
                    <a href="{!! url('ideias/novo') !!}" class="ui right floated black animated button">
                        <div class="hidden content">Novo</div>
                        <div class="visible content"><i class="plus icon"></i></div>
                    </a>
                </th>
            </tr>
        </tfoot>
    </table>
@stop

@section('lists')
    @include('ideias.lists')
@stop