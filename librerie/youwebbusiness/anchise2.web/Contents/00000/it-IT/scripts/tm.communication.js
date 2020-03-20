(function ($) {
    $.widget("tm.anchisecommunication", $.ui.dialog,
    {
        /***** extend dialog ********/
        _original_init: $.ui.dialog.prototype._init,
        _original_create: $.ui.dialog.prototype._create,
        _original_close: $.ui.dialog.prototype.close,
        _original_open: $.ui.dialog.prototype.open,

        options: {
            height: 'auto',
            delay: 2000,
            maxHeight: 300,
            showDelay: 0,
            maxWidth: true,
            resizable: false,
            connect: {
                url: null,
                type: 'POST',
                successHandler: $.noop,
                errorHandler: $.noop
            }
        },
        // current Status
        _loading: false,
        _create: function () {
            this._original_create.apply(this, arguments);
        },
        _init: function () {
            this._original_init.apply(this, arguments);
        },
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
            var responseHeader = jqXHR.getResponseHeader('X-Vantaggio-Error');
            if (responseHeader != undefined) {
                try {
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
        // identificativo della richiest
        _loadingId: null,
        _loadingInternal: function (startLoading) {
            startLoading = startLoading !== undefined && startLoading == true;
           
            if (startLoading && !this._loading) {
                this._original_open.apply(this, arguments);
                this._loading = true;
                // Spostato su css
                // $(".ui-widget-overlay").fadeTo(0, 0.1);
            } else {
                this._loading = false;
                this._original_close.apply(this, arguments);
            }
        },
        loading: function (startLoading, delay) {
            Logger.debugMessage("start loading");
            if (startLoading == true && delay != undefined && !isNaN(delay)) {
                var me = this;

                var fadeId = 'fadeId=' + new Date().getTime();
                Logger.debugMessage("Current fadeId: " + fadeId);
                me._loadingId = fadeId;
                
                me.element.fadeTo(delay, 0.0, function () {
                    me._fadingEnd(me, fadeId);
                });
            } else {
                this._loadingId = null;
            }

            return this._loadingInternal(startLoading);
        },
        _fadingEnd: function (currentObject, fadeId) {
            // debugger;
            if (currentObject != null && fadeId == currentObject._loadingId) {
                Logger.debugMessage("_fadingEnd. _loadingId" + currentObject._loadingId);
                currentObject.element.fadeTo(0, 1, function () {
                    Logger.debugMessage("Animation complete. LoadingBox should be visible.");
                });
            }
        },
        close: function (timeout) {
            this.loading(false, timeout);
        },
        open: function (timeout) {
            this.loading(true, timeout);
        },
        connectjson: function (currentConnectionInfo) {
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
                        var isJsonResponse = jsonResponse != null;
                        var errorMessage = me._getErrorResponse(jqXHR);
                        var hasErrorMessage = errorMessage != null;

                        me.loading(false);

                        if (hasErrorMessage) {
                            if (onErrorCallBack != $.noop) {
                                onErrorCallBack(hasErrorMessage, errorMessage, jqXHR, data, textStatus, null);
                            }
                            return;
                        }
                        if (onSuccessCallback != $.noop) {
                            onSuccessCallback(data, isJsonResponse, jsonResponse);
                        }
                    } catch (err) {

                    }
                })
            // error
                .error(function (jqXHR, textStatus, errorThrown) {
                    me.loading(false);
                    if (onErrorCallBack != $.noop) {
                        onErrorCallBack(false, null, jqXHR, null, textStatus, errorThrown);
                    }
                });
        }
    });
})(jQuery);
