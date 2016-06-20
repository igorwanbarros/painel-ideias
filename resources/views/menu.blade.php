<?php
if (isset($currentRoute))
    $currentRoute = isset($app->getRoutes()[$currentRoute]) ? $app->getRoutes()[$currentRoute]['uri'] : [];
else
    $currentRoute = [];
?>
<nav class="ui pointing menu">
    <div class="item">
        <h3>Titulo do APP</h3>
    </div>
    <a href="{!! url('ideias') !!}" class="{!! $currentRoute === '/ideias' ? 'active' : ''!!} item">
        <i class="idea icon"></i> Painel de Ideias
    </a>
    <a href="" class="item">
        <i class="list layout icon"></i> Check Lists
    </a>
    <a href="" class="item">
        <i class="file text outline icon"></i> Notas
    </a>

    <div class="right menu">
        <a href="" class="item"><i class="power icon"></i> Sair</a>
    </div>
</nav>