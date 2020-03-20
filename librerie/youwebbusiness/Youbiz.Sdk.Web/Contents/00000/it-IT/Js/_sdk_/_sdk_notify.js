/*
    NOTIFY MESSAGE DOCS
    . imposta element come elemento su cui avviare le logiche di notifica
      var notify = sdk.notifyMessage(element: string|jQueryElement): object //element può essere sia un selettore che un oggetto jQueryElement

    . aprire la notifica
      notify.open();

    . chiudere la notifica
      notify.close();

    . impostare una notifica
      notify.fill(notify: object)

      notify := {
        type: string                    tipo di notifica
        message: string|function        messaggio da visualizzare nella notifica in forma HTML
        title: string                   titolo della notifica
      }

      notify.message se stringa rappresenta una stringa HTML se una funzione allora resituisce una stringa HTML
      
    . notificare un errore (shortcut per notify.fill({ type: 'error', message: '', title: '' })
      notify.error(htmlMessage: string, title: string)
    
    . notificare un ok (shortcut per notify.fill({ type: 'success', message: '', title: '' })
      notify.success(htmlMessage: string, title: string)
    
    . notificare un'alert/warning (shortcut per notify.fill({ type: 'alert', message: '', title: '' })
      notify.alert(htmlMessage: string, title: string)
*/

var sdk;
var sdkParams;

(function (sdk, $, args) {

    sdk.notify = (function (notify, $, args) {

        var notifyMessage = function (element) {

            var scope = {
                
                element: $(element),
                
                _inner: {

                    resetClasses: function (context) {

                        context
                            .removeClass()
                            .addClass('messagePanel')
                            .hide();
                    }
                },

                open: function () {
                    this.element.show();
                },

                close: function () {
                    this.element.hide();
                },

                fill: function (notify) {

                    if (notify == undefined || typeof notify != "object" && Array.isArray(notify)) {

                        throw 'Err. sdk.nofiy.fill, input non corretto';
                    }

                    var _htmlMessageToDisplay = '';

                    if (typeof notify.message == 'string') {

                        _htmlMessageToDisplay = '<p>' + notify.message + '</p>';

                    } else {

                        _htmlMessageToDisplay = notify.message();

                    }

                    $('div', this.element).html(_htmlMessageToDisplay);
                    $('h3.titleSection', this.element).html(notify.title);

                    this.element.find('p').each(function () {

                        if ($(this).text() == undefined || $(this).text() == '') {
                            $(this).remove();
                        }
                    });

                    this._inner.resetClasses(this.element);
                    this.element.addClass(notify.type);

                    this.open();
                },

                success: function (htmlMessage, title) {

                    this.fill({ type: 'success', message: htmlMessage, title: title });
                },

                alert: function (htmlMessage, title) {

                    this.fill({ type: 'alert', message: htmlMessage, title: title });
                },

                error: function (htmlMessage, title) {

                    this.fill({ type: 'error', message: htmlMessage, title: title });
                }
            };

            scope.close();
            scope.element.html('<h3 class="titleSection"></h3><div></div>');

            scope.element[0].style.marginBottom = '0';
            scope.element[0].style.marginTop = '5px';

            scope.element.data(scope);

            return scope;
        };

        // export
        notify = notifyMessage;

        return notify;

    })(sdk.notify || {}, $, args || {});

    return sdk;

})(sdk || (sdk = {}), jQuery, sdkParams);
