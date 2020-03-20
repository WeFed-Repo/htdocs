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
                if (!funcSuccess || funcSuccess === $.noop) {
                    funcSuccess = this._defaultSuccessHtmlHandler;
                }

                var funcFail = this.options.connect.errorHandler;
                if (!funcFail || funcFail === $.noop) {
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
            

            //David 04/08/2015 aggiunto per prova
            //var toret = jqXHR.status + ' ' + errorThrown;
            var toret = errorThrown;
            var divError = '<div class="col-xs-12 messagePanel error" style="display: block;margin-bottom: 0;margin-top: 0;"><h3 class="titleSection">Attenzione</h3><p class="messagePanelErrorLabel"><strong>Errore nel caricamento<strong></p></div>';
            $('.web-widget-content', tmpObj.element).html(divError);
            
            //David 04/08/2015 commentato originale
            //$('.web-widget-content', tmpObj.element).html("Errore nel caricamento " + textStatus);
            return;
        },

        _defaultSuccessHtmlHandler: function (tmpObj, data, jsonResponse, warningObject) {
            //$('.web-widget-content homebox', widget).toggleClass('loading');
            if (!jsonResponse && data) {
                $('.web-widget-content', tmpObj.element).html(data);
                return;
            }
        },

        _communicationObject: null,

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
            }
        },

        connect: function (callOptions) {
            //debugger;
            $.extend(callOptions, this.options);
            this._communicationObject.enginecommunication('connectjson', callOptions.connect);
        }

        
});
})(jQuery);
