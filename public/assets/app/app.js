function App()
{
    var self = this;


    App.prototype.init = function()
    {
        $('select, .dropdown').dropdown();
        $('.ui.popup, .ui.tooltip').popup();
    };


    App.prototype.btnRemover = function()
    {
        $('.ui.icon.red').on('click', function(event) {
            event.preventDefault();

            var $this = $(this);

            swal({
                title: 'Deseja excluir este registro?',
                text: 'ao executar esta ação o registro não poderá ser revertido',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Sim, desejo excluir',
                cancelButtonText: 'Não, desejo cancelar',
                closeOnConfirm: false,
                closeOnCancel: false
            }, function (isConfirm) {

                if (isConfirm) {
                    $.get($this.attr('href'), function(response) {
                        if (undefined !== response.status && response.status) {
                            $this.parents('tr').remove();

                            swal({
                                title: 'Sucesso',
                                text: 'Registro excluido com sucesso!',
                                timer: 2000,
                                type: 'success'
                            });
                        }
                    });

                } else {
                    swal({
                        title:  'Exclusão Cancelada',
                        text :  'Não se preoculpe nada foi excluído',
                        type:   'error',
                        timer:  2000
                    });
                }
            });
        });
    };
}

var app = new App();

$(document)
    .ready(app.init())
    .ajaxComplete(app.init());