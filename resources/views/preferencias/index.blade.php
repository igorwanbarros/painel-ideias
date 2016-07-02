@extends('app')
@section('content')
    <div class="ui pointing secondary menu">
      <a class="item active" data-tab="perfil-usuario">
          <i class="user icon"></i> Perfil
      </a>
      <a class="item" data-tab="colunas-usuario">
          <i class="grid layout icon"></i> Colunas
      </a>
      <a class="item" data-tab="alterar-senha">
          <i class="unlock alternate icon"></i> Alterar Senha
      </a>
    </div>

    <div class="ui tab segment active" data-tab="perfil-usuario">
        @include('preferencias.colunas')
    </div>

    <div class="ui tab segment" data-tab="colunas-usuario">
    </div>

    <div class="ui tab segment" data-tab="alterar-senha">
    </div>

    <script type="text/javascript">
        $('.ui.menu .item')
            .on('click', function() {
                $('.ui.pointing.secondary.menu').find('.item.active').removeClass('active');
                $(this).addClass('active');
            })
            .tab({
                    //contex: '.dynamic.example',
                    auto:true,
                    path: $('#urlBase').data('url') + '/preferencias/'
                });
    </script>
@stop