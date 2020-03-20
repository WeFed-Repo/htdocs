﻿(function ($) {
    $.widget("tm.enginecommunication",
    {
        options: {
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
        },
        // current Status
        _loading: false,

        /******************************************/
        _createAjaxSettings: function (optConnInfo, currentConnInfo) {
            var toRet = {};
            $.extend(toRet, optConnInfo);
            $.extend(toRet, currentConnInfo);

            toRet.beforeSend = null;
            toRet.complete = null;
            toRet.error = null;
            toRet.success = null;

            if (toRet.popup) {
                toRet.headers = {
                    "PopupDisplay": "true"
                };
            }
            return toRet;
        },
        // quale azione intraprendere a fronte del success
        _evaluateSuccessCallBack: function (defaultConfiguration, currentConfiguration) {
            if (currentConfiguration && currentConfiguration.successHandler)
                return currentConfiguration.successHandler;
            if (defaultConfiguration && defaultConfiguration.successHandler)
                return defaultConfiguration.successHandler;
            return $.noop;
        },
        _evaluateErrorCallBack: function (defaultConfiguration, currentConfiguration) {
            if (currentConfiguration && currentConfiguration.errorHandler)
                return currentConfiguration.errorHandler;
            if (defaultConfiguration && defaultConfiguration.errorHandler)
                return defaultConfiguration.errorHandler;
            return $.noop;
        },
        // valuta se negli header di risposta esistono errori
        _getErrorResponse: function (jqXHR) {
            var responseHeader = jqXHR.getResponseHeader('X-Web-Error');
            if (responseHeader != undefined) {
                try {
                    // ErrorHeader 
                    return $.parseJSON(responseHeader);
                }
                catch (exception) {
                    // no error to show
                }
            }
            return null;
        },
        _getWarnResponse: function (jqXHR) {
            var responseHeader = jqXHR.getResponseHeader('X-Web-Warn');
            if (responseHeader != undefined) {
                try {
                    // ErrorHeader 
                    return $.parseJSON(responseHeader);
                }
                catch (exception) {
                    // no error to show
                }
            }
            return null;
        },
        // valuta se la risposta del server è un oggetto json
        _getJsonResponse: function (jqXHR) {
            try {
                var ct = jqXHR.getResponseHeader("content-type") || "";
                if (ct.indexOf("application/json") > -1) {
                    return $.parseJSON(jqXHR.responseText);
                }
            }
            catch (err) {
            }
            return null;
        },

        // fade spinner
        // identificativo della richiesta
        _loadingId: null,
        _loadingInternal: function (startLoading) {
            //debugger;
            startLoading = startLoading !== undefined && startLoading == true;
           
            if (startLoading && !this._loading) {

                //try {
                //    if (this.options.loadingBehavior.startLoading)
                //        this.options.loadingBehavior.startLoading(this, arguments);
                //} catch (e) {
                //    }

                this._loading = true;

                // Spostato su css
                // $(".ui-widget-overlay").fadeTo(0, 0.1);
            } else {

                this._loading = false;

                try {
                    if (this.options.loadingBehavior.stopLoading)
                        this.options.loadingBehavior.stopLoading(this, arguments);
                } catch (e) {
                }
            }
        },
        loading: function (startLoading, delay) {
            //debugger;
            if (startLoading == true && delay != undefined && !isNaN(delay)) {
                var me = this;
                var fadeId = 'fadeId=' + new Date().getTime();
                me._loadingId = fadeId;

                try {

                    // da usare nel chiamante
                    //me.element.fadeTo(delay, 0.0, function () {
                    //    me._fadingEnd(me, fadeId);
                    //});
                    // debugger;
                    setTimeout(function() {
                        me._evaluateShow(me, fadeId);
                    }, delay);

                    if (this.options.loadingBehavior.startFading)
                        this.options.loadingBehavior.startFading(this, arguments);
                } catch (e) {
                    Logger.errorMessage(e);
                }


                
            } else {
                this._loadingId = null;
            }

            return this._loadingInternal(startLoading);
        },
        _evaluateShow: function(currentObject, fadeId) {
            // debugger;
                if (currentObject != null && fadeId == currentObject._loadingId) {

                    try {
                        if (this.options.loadingBehavior.startLoading)
                            this.options.loadingBehavior.startLoading(this, arguments);
                    } catch (e) {
                    }

                }
            },
    
        //_fadingEnd: function (currentObject, fadeId) {
        //    if (currentObject != null && fadeId == currentObject._loadingId) {

        //        try {
        //            if (this.options.loadingBehavior.fadingEnd)
        //                this.options.loadingBehavior.fadingEnd(this, arguments);
        //        } catch (e) {
        //        }

        //        //currentObject.element.fadeTo(0, 1, function () {

        //        //    Logger.debugMessage("Animation complete. LoadingBox should be visible.");
        //        //});
        //    }
        //},

        //start: function (timeout) {
        //    this.loading(false, timeout);
        //},

        //stop: function (timeout) {
        //    this.loading(true, timeout);
        //},
        // fade spinner
        connectjson: function (currentConnectionInfo) {
            //debugger;
            if (currentConnectionInfo != null && currentConnectionInfo.data == undefined) {
                currentConnectionInfo.data = null;
            }
            var jsonExtension = {
                data: $.toJSON(currentConnectionInfo.data),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                converters: { 'text json': true }
            };
            this.connect($.extend($.extend({}, currentConnectionInfo), jsonExtension));
        },
        connect: function (currentConnectionInfo) {
            //debugger;
            var me = this;
            var connectionInfo = me.options.connect;
            var onSuccessCallback = me._evaluateSuccessCallBack(connectionInfo, currentConnectionInfo);
            var onErrorCallBack = me._evaluateErrorCallBack(connectionInfo, currentConnectionInfo);

            currentConnectionInfo = this._createAjaxSettings(connectionInfo, currentConnectionInfo);
            me.loading(true, me.options.delay);
            $.ajax(
                currentConnectionInfo
            )
            // success
                .success(function (data, textStatus, jqXHR) {
                    try {
                        var jsonResponse = me._getJsonResponse(jqXHR);
                        var warningObject = me._getWarnResponse(jqXHR);

                        me.loading(false);

                        if (onSuccessCallback != $.noop) {
                            onSuccessCallback(me, data, jsonResponse, warningObject);
                        }
                    } catch (err) {
                        Logger.errorException("Error in comunication engine (success)", err);
                    }
                })
            // error
                .error(function (jqXHR, textStatus, errorThrown) {
                    try {
                        me.loading(false);
                        var errorObject = me._getErrorResponse(jqXHR);


                        if (onErrorCallBack != $.noop) {
                            onErrorCallBack(me, jqXHR, textStatus, errorThrown, errorObject);
                        }

                    } catch (err) {
                        Logger.errorException("Error in comunication engine (error)", err);
                    }


                    
                });
        }
    });
})(jQuery);
