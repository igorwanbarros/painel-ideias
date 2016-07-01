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

    <!-- toastr -->
    <link rel="stylesheet" href="{!! url('assets/toast/jquery.toast.css') !!}"/>
    <script src="{!! url('assets/toast/jquery.toast.js') !!}" type="text/javascript"></script>

    <!-- app -->
    <link rel="stylesheet" href="{!! url('assets/app/app.css') !!}"/>
    <script src="{!! url('assets/app/app.js') !!}" type="text/javascript"></script>
</head>
<body>
@include('menu')

<section class="ui two column stackable grid padded">

    <div class="ui twelve wide column divided">
        @yield('content')
    </div>

    <div class="ui four wide column">
        @yield('lists')
    </div>
</section>

@include('modal')

<span id="urlBase" data-url="{!! url() !!}"></span>

<script type="text/javascript">

    var app = new App();

    $(document)
        .ready(app.init)
        .ajaxComplete(app.init);

    var modal = app.make('modal');

    $(document).ready(function () {
        app.btnRemover();

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
                if (response) {
                    app.messageInfo('Sucesso', 'Registro adicionado');

                    modal.close();
                    if ($this.find('[data-widget="reload"]').length > 0)
                        window.setTimeout(function () {
                            window.location.reload();
                        }, 2100);
                    return true;
                }

                app.messageWarning('Alerta', 'Não consegui adicionar este registro');
            });
        });
    });
</script>
</body>
</html>
