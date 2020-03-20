

function Bridge() {

    var _registerGlobalActions = true;

    var _beforeLoadingGlobalActions = [];

    var _onReadyGlobalActions = [];
    var _onReadyPartialActions = [];

    
    


    var _bodyContainerSelector = null;



    this.useAjaxComposition = false;



    var _fixUrl = function (url) {
        url += (url.indexOf("?") < 0) ? '?' : '&';
        url += 'bodyOnly=true';
        return url;
    };
    
    var _resetTextSelection = function () {
        if (window.getSelection) {
            if (window.getSelection().empty) {  // Chrome
                window.getSelection().empty();
            } else if (window.getSelection().removeAllRanges) {  // Firefox
                window.getSelection().removeAllRanges();
            }
        } else if (document.selection) {  // IE?
            document.selection.empty();
        }
    };
    var _closeAllDatePickers = function() {
        $(".hasDatepicker").datepicker("hide");
    }
    
    var _postRenderActions = function () {
        _resetTextSelection();
        _closeAllDatePickers();
    }
    
    this.initAjaxComposition = function (bodySelector) {
        this.useAjaxComposition = true;
        _bodyContainerSelector = bodySelector;
    };


    this.beforeLoading = function (f) {
        _beforeLoadingGlobalActions.push(f);
    };

    this.beforeLoading(_postRenderActions);

    this.executeBeforeLoading = function (e) {

        for (var i = 0; i < _beforeLoadingGlobalActions.length; i++) {
            _beforeLoadingGlobalActions[i](e);
        }
    };

    this.ready = function (f) {
        if (_registerGlobalActions)
            _onReadyGlobalActions.push(f);
        else
            _onReadyPartialActions.push(f);
    };

    this.executeOnReady = function (e) {

        for (var i = 0; i < _onReadyGlobalActions.length; i++) {
            _onReadyGlobalActions[i](e);
        }

        for (var i = 0; i < _onReadyPartialActions.length; i++) {
            _onReadyPartialActions[i](e);
        }
        
    };

    this.redirect = function (url, onSuccess, onFailure) {
        if (this.useAjaxComposition) {

            url = _fixUrl(url);
            this.dynamicLoad(url, $(_bodyContainerSelector), null, onSuccess, onFailure);
        }
        else {
            //existing method
            document.location.href = (url);
        }
    };

    this.post = function (form, onSuccess, onFailure) {
        if (this.useAjaxComposition) {
            //lock UI?
            var url = _fixUrl(form.action);
        	//disabled input
            var myForm = $(form);
            var disabled = myForm.find(':input:disabled').removeAttr('disabled');
            var data = myForm.serialize();
        	disabled.attr('disabled','disabled');

            this.dynamicLoad(url, $(_bodyContainerSelector), data, onSuccess, onFailure);
        }
        else {
            form.submit();
        }
    };

    this.postData = function (url, data, onSuccess, onFailure) {
        if (!this.useAjaxComposition) {
            throw "Not supported with static rendering";
        }
            
        this.dynamicLoad(url, $(_bodyContainerSelector), data, onSuccess, onFailure);
    };

    var _handleError = function (ex, errorInfo) {

        if (errorInfo && errorInfo.content) {
            alert(errorInfo.content);
            return;
        }

        alert(ex);
    }

    var _getRenderingScope = function (jqXHR) {
        return jqXHR.getResponseHeader('X-Bridge-RenderingScope');
    }
    var _getRenderingTarget = function (container, jqXHR) {
        var scope = _getRenderingScope(jqXHR);
        switch (scope) {
            case 'pinpad':
                if (activateTxMonitorForNextCall)
                    activateTxMonitorForNextCall();
                return $('.div_OTP');
                break;
            default: return container;
        }
        
    }

    var _guid = 1;
    var _currentScopeId;
    var _currentScopeElements = [];
    var _interceptEventHooks = function(skip, action){

        if (skip) {
            action();
            return;
        }

        if (_currentScopeId) {

            try {
                $.each(_currentScopeElements || [], function (i, v) {
                    $(v).off("." + _currentScopeId);
                });
            } catch (ex) {
                
            } finally {
                _currentScopeId = null;
                _currentScopeElements = [];
            }
        }

        var coreOnMethod = $.fn.on;
        _currentScopeId = "es" + (_guid++);
        try {

            $.fn.on = function (types, selector, data, fn, /*INTERNAL*/ one) {

                if (_currentScopeElements.indexOf(this)<0)
                    _currentScopeElements.push(this);

                types = (types || "").match(/\S+/g) || [""]; //split by space
                $.each(types, function (i, v) {
                    if (v.indexOf(".") < 0) types[i] = v + "." + _currentScopeId;
                });
                types = types.join(" ");

                return (coreOnMethod.call(this, types, selector, data, fn, one));
            };

            action();

        } finally{
            $.fn.on = coreOnMethod;
        }
    }

    this.dynamicLoad = function (url, container, data, onSuccess, onFailure) {

        Bridge.instance.executeBeforeLoading();

        _registerGlobalActions = false;
        _onReadyPartialActions = [];

        
        $(this).enginecommunication().enginecommunication("connect",
        {
            url: url,
            data: data,
            successHandler: function (commObj, res, jsonResponse, warningObject, jqXHR) {
                try {
                    
                    var renderingTarget = _getRenderingTarget(container, jqXHR);
                    var isSubRequest = !($(_bodyContainerSelector).get(0) === $(container).get(0));
                    var isMainRenderingTarget = !(_getRenderingScope(jqXHR));

                    _interceptEventHooks(isSubRequest || !isMainRenderingTarget, function () {

                        $(renderingTarget).html(res);
                        _postRenderActions();
                        Bridge.instance.executeOnReady();
                    });

                    if (onSuccess) onSuccess();

                } catch (ex) {
                    console.log(ex);
                    _handleError(ex);
                    if (onFailure) onFailure();
                }

            },
            errorHandler: function (commObj, jqXHR, textStatus, errorThrown, errorObject) {
                console.log(errorThrown);
                _handleError(errorThrown, errorObject);
                if (onFailure) onFailure();
            }
        });
    }


    
};


Bridge.instance = new Bridge();


    

$(document).ready(function (e) {




    Bridge.instance.executeOnReady(e);


    //$(window).on('beforeunload', function (e) {
    //    e.preventDefault();
    //});   

      

    if (Bridge.instance.useAjaxComposition) {

        //alert("P:" + History.getState().name);

        //uses: https://github.com/browserstate/history.js/
        History.pushState(null, null, "./");
        //History.pushState({ state:2}, null, "");

        //alert("I:" + History.getState().state);

        $(window).on('statechange', function (e) {
            document.location.href = "";
        });
    }
});



