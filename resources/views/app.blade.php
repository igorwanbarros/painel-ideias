<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Semantic</title>

    <!-- jquery -->
    <script src="{!! url('assets/jQuery-2.1.4.min.js') !!}" type="text/javascript"></script>

    <!-- semantic-ui -->
    <link rel="stylesheet" href="{!! url('assets/semantic.min.css') !!}"/>
    <script src="{!! url('assets/semantic.min.js') !!}" type="text/javascript"></script>

    <!-- sweetAlert -->
    <link rel="stylesheet" href="{!! url('assets/sweetalert/sweetalert.css') !!}"/>
    <script src="{!! url('assets/sweetalert/sweetalert.min.js') !!}" type="text/javascript"></script>

    <!-- app -->
    <link rel="stylesheet" href="{!! url('assets/app/app.css') !!}"/>
    <script src="{!! url('assets/app/app.js') !!}" type="text/javascript"></script>
</head>
<body>
@include('menu')

<section class="ui two column stackable grid padded">

    <div class="ui twelve wide column divided">
        <a href="{!! url('tags/novo') !!}" class="ui button red link-modal-ajax" data-modal-title="Adicionar Tag">bla2</a>
        @yield('content')
    </div>

    <div class="ui four wide column">
        @yield('lists')
    </div>
</section>

@include('modal')

<script type="text/javascript">
    app.btnRemover();
    var modal = app.make('modal');

    $('a.link-modal').on('click', function (event) {
        event.preventDefault();
        var $this   = $(this),
            titulo  = $this.data('modal-title') !== undefined ? $this.data('modal-title') : '';

        modal.transitions('fade left')
            .blurring()
            .setTitle(titulo)
            .show();
    });
    $('a.link-modal-ajax').on('click', function (event) {
       event.preventDefault();
        var $this = $(this),
            titulo = $this.data('modal-title') !== undefined ? $this.data('modal-title') : '';

        $.get($this.attr('href'), function(response) {
            modal.transitions('fade left')
                    .blurring()
                    .setTitle(titulo)
                    .setContent(response)
                    .show();
        });
    });
    $(modal.appModal).on('submit', 'form', function(event) {
        event.preventDefault();

        var $this = $(this),
            params = $this.serialize();

        $.post($this.attr('action'), params, function(response) {
            var options = {
                title: 'Alerta',
                text: 'Não consegui adicionar este registro',
                timer: 2000,
                type: 'warning'
            };
            if (response) {
                options = {
                    title: 'Sucesso',
                    text: 'Registro adicionado',
                    timer: 2000,
                    type: 'success'
                };

                modal.close();
            }

            swal(options);
        });
    });
</script>
</body>
</html>
