<?php
if (!isset($currentRoute))
    $currentRoute = '';
?>
<nav class="ui attached stackable inverted pointing menu">
    <div class="ui container">
        <a class="item header" href="{!! url('/') !!}">
            Titulo do APP
        </a>
        <a href="{!! url('ideias') !!}" class="{!! strpos($currentRoute, 'ideias') !== false ? 'active' : ''!!} item">
            <i class="idea icon"></i> Painel de Ideias
        </a>
        <a href="{!! url('check-list') !!}" class="{!! strpos($currentRoute, 'check-list') !== false ? 'active' : ''!!} item">
            <i class="list layout icon"></i> Check Lists
        </a>
        <a href="{!! url('notas') !!}" class="{!! strpos($currentRoute, 'notas') !== false ? 'active' : ''!!} item">
            <i class="file text outline icon"></i> Notas
        </a>

        <a href="{!! url('preferencias') !!}" class="right {!! strpos($currentRoute, 'configuracoes') !== false ? 'active' : ''!!} item">
            <i class="options icon"></i> Preferências
        </a>
        </div>
        <a href="{!! url('logout') !!}" class="item">
            <i class="power icon"></i> Sair
        </a>
    </div>
</nav>