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

        <div class="ui dropdown right item tooltip" data-content="Configurações">
            <i class="setting  icon"></i>

            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="{!! url('configuracoes') !!}" class="{!! strpos($currentRoute, 'configuracoes') !== false ? 'active' : ''!!} item">
                    Configurações
                </a>
                <a href="{!! url('perfil') !!}" class="{!! strpos($currentRoute, 'perfil') !== false ? 'active' : ''!!} item">
                    Perfil
                </a>
                <a href="{!! url('alterar-senha') !!}" class="{!! strpos($currentRoute, 'alterar-senha') !== false ? 'active' : ''!!} item">
                    Alterar Senha
                </a>
            </div>
        </div>
        <a href="{!! url('logout') !!}" class="item">
            <i class="power icon"></i> Sair
        </a>
    </div>
</nav>