var sdk;
/*
    sdk.net["loadTarget"] (jTarget, action, objectToSend, extendedParameters)
        jTarget: il dom element che riceve nel [jquery].html() la risposta server in caso positivo
        action: url da invocare
        objectToSend: javascript object to send
        extendedParameters: additional parameter ...  

options = {
    delay: 2000,
    showDelay: 0,

    connect: {
        url: null,
        type: 'POST',
        // successHandler: function(me, data, jsonResponse, warningObject)
        successHandler: $.noop,
        // errorHandler: function (me, jqXHR, textStatus, errorThrown, errorObject, errorBody)
        errorHandler: $.noop
    },
    loadingBehavior: {
        startLoading: $.noop,
        stopLoading: $.noop,
        startFading: $.noop
    }

    params = {
        successHandler: $.noop,
        errorHandler: $.noop
    }

};


*/

(function (sdk, $, args) {
    //
    // namespace sdk.net
    
    sdk.net = (function (net, $, args) {
                
        var params = {
        
        };
        params = $.extend(params, args);

        var _engine = function(options) {                                    
            
            var tmpEngine = {
                _loading: false,
                _options: null,

                _defaultOptions: function() {
                    return {
                        dialogClass: "communication-dialog",
                        delay: 1500,
                        autoOpen: false,
                        modal: true,
                        width: "auto",
                        height: "auto",

                        connect: {
                            url: null,
                            type: 'POST',
                            // successHandler: function(me, data, jsonResponse, warningObject)
                            successHandler: $.noop,
                            // errorHandler: function (me, jqXHR, textStatus, errorThrown, errorObject, errorBody)
                            errorHandler: $.noop
                        },
                        loadingBehavior: {
                            startLoading: $.noop,
                            stopLoading: $.noop,
                            startFading: $.noop
                        }
                    };
                },
                _createAjaxSettings: function(optConnInfo, currentConnInfo) {

                    var toRet = {};
                    $.extend(toRet, optConnInfo);
                    $.extend(toRet, currentConnInfo);

                    toRet.beforeSend = null;
                    toRet.complete = null;
                    toRet.error = null;
                    toRet.success = null;

                    if (toRet.popup) {
                        if (!toRet.headers) {
                            toRet.headers = {
                                "PopupDisplay": "true"
                            };
                        } else {
                            $.extend(toRet.headers, { "PopupDisplay": "true" });
                        }

                    }
                    return toRet;
                },
                // quale azione intraprendere a fronte del success
                _evaluateSuccessCallBack: function(defaultConfiguration, currentConfiguration) {
                    if (currentConfiguration && currentConfiguration.successHandler)
                        return currentConfiguration.successHandler;
                    if (defaultConfiguration && defaultConfiguration.successHandler)
                        return defaultConfiguration.successHandler;
                    return $.noop;
                },
                _evaluateErrorCallBack: function(defaultConfiguration, currentConfiguration) {
                    if (currentConfiguration && currentConfiguration.errorHandler)
                        return currentConfiguration.errorHandler;
                    if (defaultConfiguration && defaultConfiguration.errorHandler)
                        return defaultConfiguration.errorHandler;
                    return $.noop;
                },
                // valuta se negli header di risposta esistono errori
                _getErrorResponse: function(jqXHR) {
                    var errorMessage = jqXHR.getResponseHeader('X-Web-Error');
                    if (!errorMessage)
                        errorMessage = jqXHR.responseJSON;
                    if (errorMessage != undefined) {
                        try {
                            // ErrorHeader 
                            return $.parseJSON(errorMessage);
                        } catch (exception) {
                            // no error to show
                        }
                    }
                    return null;
                },
                _getWarnResponse: function(jqXHR) {
                    var responseHeader = jqXHR.getResponseHeader('X-Web-Warn');
                    if (responseHeader != undefined) {
                        try {
                            // ErrorHeader 
                            return $.parseJSON(responseHeader);
                        } catch (exception) {
                            // no error to show
                        }
                    }
                    return null;
                },
                // valuta se la risposta del server è un oggetto json
                _getJsonResponse: function(jqXHR) {
                    try {
                        var ct = jqXHR.getResponseHeader("content-type") || "";
                        if (ct.indexOf("application/json") > -1) {
                            return $.parseJSON(jqXHR.responseText);
                        }
                    } catch (err) {
                    }
                    return null;
                },
                // fade spinner
                // identificativo della richiesta
                _loadingId: null,
                _loadingInternal: function(startLoading) {
                    startLoading = startLoading !== undefined && startLoading == true;

                    if (startLoading && !this._loading) {
                        try {
                            if (this.options.loadingBehavior.startLoading)
                                this.options.loadingBehavior.startLoading(this, arguments);
                        } catch (e) {
                        }
                        this._loading = true;
                        //sdk.utils.log.debugMessage('start loading chunkPage');
                        sdk.utils.log.debugMessage('start spinnerDialog chunkPage');
                        //$('#spinnerDialog').dialog('open');
                        sdk.utils.pubsub.send('spinnserDialog.open');
                        // Spostato su css
                        // $(".ui-widget-overlay").fadeTo(0, 0.1);
                    } else {
                        this._loading = false;
                        //sdk.utils.log.debugMessage('stop loading chunkPage');
                        sdk.utils.log.debugMessage('stop spinnerDialog chunkPage');
                        //$('#spinnerDialog').dialog('close');
                        sdk.utils.pubsub.send('spinnserDialog.close');
                        try {
                            if (this.options.loadingBehavior.stopLoading)
                                this.options.loadingBehavior.stopLoading(this, arguments);
                        } catch (e) {
                        }
                    }
                },
                loading: function(startLoading, delay) {

                    if (startLoading === true && delay != undefined && !isNaN(delay)) {
                        var me = this;
                        var fadeId = 'fadeId=' + new Date().getTime();
                        me._loadingId = fadeId;

                        try {

                            // da usare nel chiamante
                            //me.element.fadeTo(delay, 0.0, function () {
                            //    me._fadingEnd(me, fadeId);
                            //});

                            if (this.options.loadingBehavior.startFading)
                                this.options.loadingBehavior.startFading(this, arguments);
                        } catch (e) {
                        }


                    } else {
                        this._loadingId = null;
                    }

                    return this._loadingInternal(startLoading);
                },
                connectjson: function(currentConnectionInfo) {

                    if (currentConnectionInfo != null && currentConnectionInfo.data == undefined) {
                        currentConnectionInfo.data = null;
                    }
                    var jsonExtension = {
                        data: $.toJSON(currentConnectionInfo.data),
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        converters: { 'text json': true }
                        // la new  aveva -> headers: { "X-JsComm": "api" }
                    };

                    this.connect($.extend($.extend({}, currentConnectionInfo), jsonExtension));
                },

                connect: function(currentConnectionInfo) {

                    var me = this;
                    var connectionInfo = me._options.connect;
                    var onSuccessCallback = me._evaluateSuccessCallBack(connectionInfo, currentConnectionInfo);
                    var onErrorCallBack = me._evaluateErrorCallBack(connectionInfo, currentConnectionInfo);

                    currentConnectionInfo = this._createAjaxSettings(connectionInfo, currentConnectionInfo);

                    me.loading(true, me._options.delay);
                    $.ajax(
                            currentConnectionInfo
                        )
                        // success
                        .success(function(data, textStatus, jqXHR) {
                            try {

                                var jsonResponse = me._getJsonResponse(jqXHR);
                                var warningObject = me._getWarnResponse(jqXHR);

                                me.loading(false);

                                if (onSuccessCallback != $.noop) {
                                    onSuccessCallback(me, data, jsonResponse, warningObject);
                                }
                            } catch (err) {
                                sdk.utils.log.errorException("Error in comunication engine (success)", err);
                            }
                        })
                        // error
                        .error(function(jqXHR, textStatus, errorThrown) {
                            try {

                                me.loading(false);

                                var errorObject = me._getErrorResponse(jqXHR);


                                if (onErrorCallBack != $.noop) {
                                    onErrorCallBack(me, jqXHR, textStatus, errorThrown, errorObject);
                                }

                            } catch (err) {
                                sdk.utils.log.errorException("Error in comunication engine (error)", err);
                            }


                        });
                }
            };

            tmpEngine._options = $.extend(tmpEngine._defaultOptions, options);

            return tmpEngine;
        };


        /////////////////////////////////


        var _getCommunicationEngineOptions = function(jTarget) {
            if (jTarget != null) {
                var widgetContainer = (jTarget) ? jTarget.closest(".widget-container") : null;
                if (widgetContainer != null && widgetContainer.length > 0) {
                    // widget
                    return widgetPoint(widgetContainer);
                } else {
                    // chunk di pagina
                    return chunkPoint(jTarget);
                }
            } else {
                return null;
            }
        };


        var _widgetPoint = function(jTarget) {

            return {
                connect: {
                    successHandler: function(commObj, data, jsonResponse, warningObject) {
                        if (!jsonResponse && data) {
                            $('.web-widget-content', jTarget).html(data);
                            return;
                        }
                    },
                    errorHandler: function(commObj, jqXHR, textStatus, errorThrown, errorObject) {
                        var divError = jqXHR.responseText;
                        $('.web-widget-content', jTarget).html(divError);

                        return;
                    },
                    headers: { "X-JsComm": "widget" }
                }
            };
        };

        var chunkPoint = function(jTarget) {
            return {

                connect: {
                    successHandler: function (commObj, data, jsonResponse, warningObject) {
                        jTarget.html(data);
                    },
                    errorHandler: function (commObj, jqXHR, textStatus, errorThrown, errorObject) {
                        var divError = jqXHR.responseText.replace(/(\r\n|\n|\r)/gm, "");
                        $(jTarget).html(divError);
                    },
                    headers: { "X-JsComm": "partial" }
                }
            };
        }


        var _loadTarget = function(jTarget, action, objectToSend, extendedParameters) {
            
            var parameters = {
                url: action,
                data: objectToSend
            };

            parameters = $.extend(parameters, extendedParameters);
            var engineOptions = _getCommunicationEngineOptions(jTarget);
            if (engineOptions != null && engineOptions.connect != null) {
                engineOptions.connect.type = "POST";
            }
            
            new _engine(engineOptions).connectjson(parameters);
        };

        var _call = function(action, objectToSend, extendedParameters) {

            var parameters =
                $.extend(
                    {},
                    extendedParameters,
                    {
                        url: action,
                        data: $.toJSON(objectToSend),
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        converters: { 'text json': true }
                    }
                );

            var engineOptions = {
                connect: {
                    type: "POST"
                },
                headers: { "X-JsComm": "widget" }
            };

            new _engine(engineOptions).connect(parameters);
        };

        var _callpureJson = function (action, objectToSend, extendedParameters) {
            
            var parameters =
                $.extend(
                    {},
                    extendedParameters,
                    {
                        url: action,
                        data: $.toJSON(objectToSend),
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        converters: { 'text json': true },
                        headers: { "X-JsComm": "api" }
                    }
                );

            var engineOptions = {
                connect: {
                    type: "POST"
                },
                headers: { "X-JsComm": "api" }
            };

            new _engine(engineOptions).connect(parameters);
        };

        


        // export
        // le chiamate hanno uno scopo tipico
        

        net["loadTarget"] = _loadTarget;
        net["call"] = _call;
        net["json"] = _callpureJson;
        

        // namespace sdk.net
        return net;
    })(sdk.net || {}, $, args.net || {});
    // end namespace sdk.net
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
