@extends('app')
@section('content')
    <a href="{!! url('ideias/novo') !!}" class="ui green button">Novo</a>
    <table class="ui striped table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Alterado em</th>
            </tr>
        </thead>
        <tbody>
        @forelse($model as $row)
            <tr>
                <td>{!! $row->nome !!}</td>
                <td>{!! $row->updated_at !!}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">Nenhum registro encontrado.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@stop