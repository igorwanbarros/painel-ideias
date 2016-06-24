<?php
if (!isset($currentRoute))
    $currentRoute = '';
?>
<nav class="ui attached stackable inverted pointing menu">
    <div class="ui container">
        <div class="item">
            <h4>Titulo do APP</h4>
        </div>
        <a href="{!! url('ideias') !!}" class="{!! strpos($currentRoute, 'ideias') !== false ? 'active' : ''!!} item">
            <i class="idea icon"></i> Painel de Ideias
        </a>
        <a href="{!! url('check-lists') !!}" class="{!! strpos($currentRoute, 'check-lists') !== false ? 'active' : ''!!} item">
            <i class="list layout icon"></i> Check Lists
        </a>
        <a href="{!! url('notas') !!}" class="{!! strpos($currentRoute, 'notas') !== false ? 'active' : ''!!} item">
            <i class="file text outline icon"></i> Notas
        </a>

        <a href="{!! url('logout') !!}" class="right item">
            <i class="power icon"></i> Sair
        </a>
        <a href="{!! url('logout') !!}" class="item">
            <i class="check icon"></i> Bla
        </a>
    </div>
</nav>