(function($) {
    $.widget("tm.widgetcommunication", {
        _create: function() {
            this._initializeMe.apply(this, arguments);
        },
        _init: function() {
            this._initializeMe.apply(this, arguments);            
        },

        _initializeMe: function() {

            if (!this._communicationObject) {
                //debugger;

                var funcSuccess = this.options.connect.successHandler;
                if (!funcSuccess || funcSuccess == $.noop) {
                    funcSuccess = this._defaultSuccessHtmlHandler;
                }

                var funcFail = this.options.connect.errorHandler;
                if (!funcFail || funcFail == $.noop) {
                    funcFail = this._defaultErrorHandler;
                }

                var me = this;
                this.options.connect.successHandler = function (commObj, data, jsonResponse, warningObject) {
                    funcSuccess(me,  data, jsonResponse, warningObject);
                }
                this.options.connect.errorHandler = function (commObj, jqXHR, textStatus, errorThrown, errorObject) {
                    funcFail(me, jqXHR, textStatus, errorThrown, errorObject);
                }

                this._communicationObject = $(this).enginecommunication(arguments);

                if (this.options.autoLoad) {
                    this.connect({});
                }
                

            }
        },

        _defaultErrorHandler: function (tmpObj, jqXHR, textStatus, errorThrown, errorObject) {
            var title = 'Attenzione';
            var message = 'Errore nel caricamento';

            if (errorObject) {
                var exceptionType = errorObject.ExceptionType || '';
                message = errorObject.Content || 'Errore nel caricamento';

                switch (exceptionType) {
                    case 'ApplicationSecurityFunctionException':
                        title = 'Abilitazione funzione';
                        break;
                }
            }
            //var divError = '<div class="messagePanel error visible"><h3 class="titleSection">' + title + '</h3><p><strong>' + message + '</strong></p></div>';
            var divError = '<div class="homebox txt_center homeboxInfo"><div class="ui-state-active ui-corner-all state-activeInfo"><img class="cssImgNotifiche" style="height: 30px; width: 30px;" />&nbsp;<span class="msgInfo"> ' + message + '</span></div></div>';

            $('.web-widget-content', tmpObj.element).html(divError);
            
            //David 04/08/2015 commentato originale
            //$('.web-widget-content', tmpObj.element).html("Errore nel caricamento " + textStatus);
            return;
        },

        _defaultSuccessHtmlHandler: function (tmpObj, data, jsonResponse, warningObject) {            
            if (!jsonResponse && data) {
                $('.web-widget-content', tmpObj.element).html(data);
                return;
            }            
        },
        


        _communicationObject: null,

        _communicationEngineOptions: function () {
            return {
                dialogClass: "communication-dialog",
                delay: 5,
                autoOpen: false,
                modal: true,
                width: "auto",
                height: "auto",
                loadingBehavior: {
                    startFading: function (sender, args) {
                        sdk.utils.log.debugMessage('start fading widget');
                    },
                    startLoading: function (sender, args) {
                        sdk.utils.log.debugMessage('start loading widget');
                        $('#spinnerDialog').dialog('open');
                    },
                    stopLoading: function (sender, args) {
                        sdk.utils.log.debugMessage('stop loading widget');
                        $('#spinnerDialog').dialog('close');
                    }
                }
            };
        },

        options: {
            autoLoad: true,
            connect: {
                data: null,
                url: null,
                type: 'POST',
                // successHandler: function(me, data, jsonResponse, warningObject)
                successHandler: $.noop,
                // errorHandler: function (me, jqXHR, textStatus, errorThrown, errorObject)
                errorHandler: $.noop
            },
            loadingBehavior: {
                startLoading: $.noop,
                stopLoading: $.noop,
                startFading: $.noop
            }

        },

        connect: function (callOptions) {
            $.extend(callOptions, this.options);
            var engineOptions = this._communicationEngineOptions();
            //this._communicationObject.enginecommunication('connectjson', callOptions.connect);
            $(this).enginecommunication(engineOptions).enginecommunication('connectjson', callOptions.connect);
        }

        
});
})(jQuery);
