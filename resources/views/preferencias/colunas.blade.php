@if (isset($widget))
    <h3 class="header">{!! $title !!}</h3>

    <div class="ui horizontal divider header">
        <i class="small icons">
            <i class="columns icon"></i>
            <i class="corner add icon"></i>
        </i> Adicionar
    </div>
    {!! $widget !!}

    <div class="ui horizontal divider header">
        <i class="small icons">
            <i class="table icon"></i>
        </i> Listagem
    </div>
    {!! $table !!}

    <h3 class="header"></h3>

    <script>
        app.init();
    </script>
@endif