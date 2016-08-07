@extends('base')
@section('body')

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

            $.ajax({
                type: "POST",
                url: $this.attr('action'),
                data: params,
                success: function (response) {
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
                },
                //TODO remover duplicidade
                error: function (response) {
                    var errors = response.responseJSON;

                    $.each(errors, function (element, error) {
                        var errorText = '';

                        $.each(error, function (index, value) {
                            errorText += '<p class="text red"><i class="warning sign icon"></i>' + value + '</p>';
                        });

                        $this.addClass('error')
                            .find('#' + element).after('<div>' + errorText + '</div>')
                                .parents('div.field').addClass('error');
                    });
                    console.log(response.responseJSON);
                }
            });
        });
    });
</script>
@stop
