function App()
{
    this.urlBase    = undefined;
    var self        = this,
        factory     = {
            modal: AppModal
        },
        messageConfig = {
            text: '',
            heading: '',
            showHideTransition: 'slide',
            allowToastClose: true,
            hideAfter: 6000,
            stack: 8,
            position: 'bottom-right',
            textAlign: 'left',
            loader: true
        };

    App.prototype.init = function()
    {
        $('select, .dropdown').dropdown();
        $('.ui.popup, .ui.tooltip').popup();
        $('.ui.modal').modal();
        $('.ui.checkbox, input[type="checkbox"]').checkbox();
        self.urlBase = $('#urlBase').data();
    };

    App.prototype.make = function (object) {
        object = object.toLowerCase();

        if (undefined === factory[object]) {
            console.log('App::make', 'Não foi possível instanciar o objeto ' + object);
            return false;
        }

        return new factory[object];
    };

    App.prototype.messageInfo = function(title, text)
    {
        messageConfig.heading   = title;
        messageConfig.text      = text;
        messageConfig.icon      = 'info';
        messageConfig.loaderBg  = '#6EA3BD';//#e7f3b9'


        $.toast(messageConfig);

        return this;
    };

    App.prototype.messageWarning = function(title, text)
    {
        messageConfig.heading   = title;
        messageConfig.text      = text;
        messageConfig.icon      = 'warning';
        messageConfig.loaderBg  = '#6EA3BD';//#e7f3b9'


        $.toast(messageConfig);

        return this;
    };

    App.prototype.btnRemover = function()
    {
        $('body').on('click', '.ui.icon.red', function(event) {
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
//                    swal({
//                        title:  'Exclusão Cancelada',
//                        text :  'Não se preoculpe nada foi excluído',
//                        type:   'error',
//                        timer:  2000
//                    });
                    self.messageInfo('Exclusão Cancelada', 'Não se preoculpe nada foi excluido');
                    return true;
                }
            });
        });
    };
}

function AppModal()
{
    this.appModal         = $('.ui.modal.app-modal');

    var transitions = {
            fade:               'fade',
            fadeup:             'fade up',
            fadedown:           'fade down',
            fadeleft:           'fade left',
            faderight:          'fade right',
            horizontalflip:     'horizontal flip',
            verticalflip:       'vertical flip',
            drop:               'drop',
            flyleft:            'fly left',
            flyright:           'fly right',
            flydown:            'fly down',
            swingleft:          'swing left',
            swingright:         'swing right',
            swingup:            'swing up',
            swingdown:          'swing down',
            browse:             'browse',
            browseright:        'browse right',
            slidedown:          'slide down',
            slideup:            'slide up',
            slideleft:          'slide left',
            slideright:         'slide right',
            jiggle:             'jiggle',
            flash:              'flash',
            pulse:              'pulse',
            tada:               'tada',
            bounce:             'bounce'
        };

    AppModal.prototype.show = function () {
        this.appModal.modal('show');

        return this;
    };

    AppModal.prototype.transitions = function (value) {
        value = value.toLowerCase().replace(' ', '');

        if (undefined == transitions[value])
            value = 'fade up';

        this.appModal.modal('setting', 'transition', transitions[value]);

        return this;
    };

    AppModal.prototype.blurring = function (isBlurring) {
        this.appModal.modal('setting', 'blurring', undefined == isBlurring ? true : isBlurring);

        return this;
    };

    AppModal.prototype.approveCallback = function(callback)
    {
        if (typeof callback == 'function')
            this.appModal.modal('setting', 'onApprove', callback);

        return this;
    };

    AppModal.prototype.denyCallback = function(callback)
    {
        if (typeof callback == 'function')
            this.appModal.modal('setting', 'onDeny', callback);

        return this;
    };

    AppModal.prototype.setTitle = function(titulo)
    {
        this.appModal.find('#app-modal-title').text(titulo);

        return this;
    };

    AppModal.prototype.setContent = function(html)
    {
        this.appModal.find('#app-modal-content').html(html);

        return this;
    };

    AppModal.prototype.enableButtons = function(buttonOk, buttonCancel)
    {
        buttonOk == true
            ? this.appModal.find('#app-modal-ok').show()
            : this.appModal.find('#app-modal-ok').hide();

        buttonCancel == true
            ? this.appModal.find('#app-modal-cancel').show()
            : this.appModal.find('#app-modal-cancel').hide();

        return this;
    };
    AppModal.prototype.close = function()
    {
        this.appModal.find('.close.icon').trigger('click');
        return this;
    };

    this.enableButtons(false, true);
}
