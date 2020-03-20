/////*
////* ***************************************************
////* tm.pinpad - Client-side
////* Version 1.0
////* @requires jquery-jquery-1.11.3.min.js
////* Copyright (c) 2017 David Passilongo e Laura Lovato
////* ***************************************************
////*/

(function ($) {

    $.widget("tm.pinpadnew", {
        options: {
            cartInfo: null, // Oggetto contenente: esempio(ApplicationPath: "/YouBiz.Web", CartMode: "32,0,17,10,", SecureType: 2, WorkflowHandlerChunkUri: "", WorkflowHandlerUri: "")
            pinpadDisclaimer: '', //Se impostato stampa il valore a sinistra dell'icona dell'OTP
            idInputHidden: null,
            regional: 'it-IT',//Default Current Preferences Language
            staticResourcesPinPadOld: {
                urlImg: "/Contents/00000/",
                nameImgFull: "PIN-full.bmp",
                nameImgEmpty: "PIN-empty.bmp",
                url: "/_wk/PinPad/GetOldPinpad",
                nameImgCancella: "CANCELLA.bmp",
                nameImgCancellaDown: "CANCELLA-down.bmp",
                nameImgCancellaOver: "CANCELLA-over.bmp"
            },
            staticResourcesPinPadNew: {
                url: '_wk/PinPad'
            },
            param: {
                ctrPinLenght: $.noop,
            }
            
        },


        _inputFieldOtpName: "pinpad-field-otp",

        //_contClick: 0,

        _init: function() {
            sdk.utils.log.debugMessage('tm.pinpadnew - init');

            try {
                this._fixedParamOptions(this.options);
                //Inizializzo la pin pad in base al pinpadMode
                this._initializePinPad(this.options);
                //Evento change che valorizza l'oggetto passato dalla pagina che richiama la pinpad
                if (this.options && this.options.idInputHidden) {
                    //debugger;
                    var ctrInternal = $("#" + this._inputFieldOtpName);
                    var ctrExternal = $("#" + this.options.idInputHidden);
                    $(ctrInternal).change(function () {
                        $(ctrExternal).val($(this).val());
                    });
                }
            }catch(exc) {
                sdk.utils.log.errorException(exc.message, exc);
            }
        },

        _fixedParamOptions: function(option) {
            sdk.utils.log.debugMessage('tm.pinpadnew - fixedParamOptions');
            if (option != null) {

                if (option.cartInfo == null) {
                    sdk.utils.log.errorMessage('tm.pinpadnew - fixedParamOptions - errore: cartInfo is null!');
                } else {
                    if (option.cartInfo.pinpadMode == null || (option.cartInfo.pinpadMode != 0 && option.cartInfo.pinpadMode != 1 && option.cartInfo.pinpadMode != 2)) {
                        sdk.utils.log.errorMessage('tm.pinpadnew - fixedParamOptions - errore: cartInfo.pinpadMode is null! Di default settato a 0');
                        this.options.cartInfo.pinpadMode = 0;
                    }
                }
                if (option.pinpadDisclaimer == null) {
                    this.options.pinpadDisclaimer = '';
                }
                if (option.idInputHidden == null) {
                    sdk.utils.log.errorMessage('tm.pinpadnew - fixedParamOptions - errore: idInputHidden non valorizzato');
                } else {
                    //aggiungo attributi per renderlo standard
                    $("#" + this.options.idInputHidden).attr('type','hidden').attr('value','');
                }
                if (option.regional == null) {
                    this.options.regional = 'it-IT';
                }
                option.staticResourcesPinPadOld.urlImg += option.regional + '/images/Pinpad/';
            }


        },

        _initializePinPad: function (option) {
            //inizializzo i vari tipi di pin pad
            var toret = "";            
            sdk.utils.log.debugMessage('tm.pinpadnew - initializePinPad - pinpadMode:' + option.cartInfo.pinpadMode);
            var me = this;
            switch (option.cartInfo.pinpadMode) {
                case 0: //pinpad old
                    sdk.utils.log.debugMessage('tm.pinpadnew - pinpad old - start initializePinPad');
                    option.srcImgEmpty = option.cartInfo.ApplicationPath + option.staticResourcesPinPadOld.urlImg + option.staticResourcesPinPadOld.nameImgEmpty;
                    toret = me._openPinpadOld(option);
                    me.element.append(toret);
                    option.tmpcontatore = 0;
                    //valorizza la funzione del Click del bottone numerico con classe .searchidimagenumber
                    me._clickFunctionNumber(option);
                    //valorizza la funzione del Click del bottone cancella con classe .searchidimagedelete
                    me._clickFunctionDelete(option);
                    break;
                case 1: //pinpad new
                    sdk.utils.log.debugMessage('tm.pinpadnew - pinpad new - start initializePinPad');
                    toret = me._htmlPinPadBase();
                    me.element.append(toret);
                    me._inputJPanel(true).appendTo("#divPinPadInputText");
                    me._openPinpadNew(option);
                    $("#" + me._inputFieldOtpName).change(function () {
                        me._onKeyUp(this, option.param);
                    });
                    break;
                case 2: //pinpad testuale
                    sdk.utils.log.debugMessage('tm.pinpadnew - pinpad testuale - start initializePinPad');
                    toret = this._htmlPinPadBase();
                    me.element.append(toret);
                    me._inputJPanel(false).appendTo("#divPinPadInputText");
                    $("#" + me._inputFieldOtpName).on("keyup", function () {
                        me._onKeyUp(this, option.param);
                    });
                    break;
            }
            
        },

        _onKeyUp: function (myCtr,opt) {
            var bEnabeld = true;
            if ($(myCtr).val().length < 6) bEnabeld = false;
            opt.ctrPinLenght(bEnabeld);
        },

        _inputJPanel: function (isTypePassword) {
            sdk.utils.log.debugMessage('tm.pinpadnew - inputJPanel');
            var toret = $('<input>');
            toret.attr("id", this._inputFieldOtpName).attr("maxlength", "6").addClass("col-md-12 form-control").css("margin-left", "20px").width(62);
            if (isTypePassword) {
                toret.attr("type", "password").attr("readonly", true).css("cursor", "pointer");
            } else {
                toret.attr("onkeypress", "return sdk.utils.text.onlyIntNumbers(event);");
            }
            return toret;
        },

        _htmlPinPadBase: function () {
            sdk.utils.log.debugMessage('tm.pinpadnew - htmlPinPadBase');
            //var toret = '<div class="col-xs-6"> ' + this.options.pinpadDisclaimer + ' </div> \
            //             <div class="col-xs-2"> &nbsp; </div> \
            //             <div class="col-md-5" style="background-color: #f7fcf7; padding-top: 2px;"> \
            //                <span class="col-md-4"><img class="col-md-12" src="' + this.options.cartInfo.pathTokenImg + '" style="width: 110px; height: 43px" /></span> \
            //                <div class="col-md-6" style="padding-top: 8px" id="divPinPadInputText"></div> \
            //                <div class="col-md-2"></div> \
            //             </div>';
            var toret = '<div class="col-xs-6" style="padding-top: 14px"> ' + this.options.pinpadDisclaimer + ' </div> \
                         <div class="col-xs-2"><img src="' + this.options.cartInfo.pathTokenImg + '" /></div> \
                         <div class="col-xs-4" style="padding-top: 14px" id="divPinPadInputText"></div> \
                         ';

            return toret;
        },

        _openPinpadNew: function (executionParam) {
            sdk.utils.log.debugMessage('tm.pinpadnew - openPinpadNew');
            executionParam.urlImgCancella = 'Contents/00000/' + executionParam.regional + '/images/pp/imgPPGeneric2.jpg';
            $("#" + this._inputFieldOtpName).attr("value", "");
            if ($("#" + this._inputFieldOtpName).attr("tm_isCreated") == "1") {
                //
            }
            else {
                $("#" + this._inputFieldOtpName).attr("tm_isCreated", "1");
                var strName = "tm_divPP_" + this._inputFieldOtpName;
                var strFieldName = this._inputFieldOtpName;
                var strImgCancella = executionParam.cartInfo.ApplicationPath + "/" + executionParam.urlImgCancella;
                var imgUrl = executionParam.cartInfo.ApplicationPath + "/" + executionParam.staticResourcesPinPadNew.url + '?d=' + $.now();
                var authInput = '<div id="' + strName + '"><table> \
                                    <tr> \
                                        <td align="left"> \
                                            <table style="border-collapse: separate !important; border-spacing: 10px !important;padding: 1px !important;"> \
                                                <tr> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -0px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-250px\');" onMouseOut="javascript:$(this).css(\'left\',\'-0px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'0\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) {$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\'); $(\'[data-toggle=\\\'popover\\\']\').trigger(\'change\');}" src="' + imgUrl + '" /></div></td> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -25px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-275px\');" onMouseOut="javascript:$(this).css(\'left\',\'-25px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'1\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) {$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\'); $(\'[data-toggle=\\\'popover\\\']\').trigger(\'change\');}" src="' + imgUrl + '" /></div></td> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -50px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-300px\');" onMouseOut="javascript:$(this).css(\'left\',\'-50px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'2\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) {$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\'); $(\'[data-toggle=\\\'popover\\\']\').trigger(\'change\');}" src="' + imgUrl + '" /></div></td> \
                                                </tr> \
                                                <tr> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -75px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-325px\');" onMouseOut="javascript:$(this).css(\'left\',\'-75px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'3\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) {$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\'); $(\'[data-toggle=\\\'popover\\\']\').trigger(\'change\');}" src="' + imgUrl + '" /></div></td> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -100px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-350px\');" onMouseOut="javascript:$(this).css(\'left\',\'-100px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'4\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) {$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\'); $(\'[data-toggle=\\\'popover\\\']\').trigger(\'change\');}" src="' + imgUrl + '" /></div></td> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -125px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-375px\');" onMouseOut="javascript:$(this).css(\'left\',\'-125px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'5\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) {$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\'); $(\'[data-toggle=\\\'popover\\\']\').trigger(\'change\');}" src="' + imgUrl + '" /></div></td> \
                                                </tr> \
                                                <tr> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -150px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-400px\');" onMouseOut="javascript:$(this).css(\'left\',\'-150px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'6\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) {$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\'); $(\'[data-toggle=\\\'popover\\\']\').trigger(\'change\');}" src="' + imgUrl + '" /></div></td> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -175px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-425px\');" onMouseOut="javascript:$(this).css(\'left\',\'-175px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'7\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) {$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\'); $(\'[data-toggle=\\\'popover\\\']\').trigger(\'change\');}" src="' + imgUrl + '" /></div></td> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -200px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-450px\');" onMouseOut="javascript:$(this).css(\'left\',\'-200px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'8\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) {$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\'); $(\'[data-toggle=\\\'popover\\\']\').trigger(\'change\');}" src="' + imgUrl + '" /></div></td> \
                                                </tr> \
                                                <tr> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -0px;position: absolute; display: block; top: 0; width: 150px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-25px\');" onMouseOut="javascript:$(this).css(\'left\',\'-0px\');" onMouseDown="javascript:cntrlJQuery=$(\'#\' +\'' + strFieldName + '\').attr(\'value\', \'\').trigger(\'change\');" src="' + strImgCancella + '" /></div></td> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -225px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-475px\');" onMouseOut="javascript:$(this).css(\'left\',\'-225px\');" onMouseDown="javascript:var cntrlJQuery=$(\'#\' +\'' + strFieldName + '\');var newValue= \'\' + cntrlJQuery.attr(\'value\') + \'9\'; cntrlJQuery.attr(\'value\', newValue);if (newValue.length >= 6) {$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\'); $(\'[data-toggle=\\\'popover\\\']\').trigger(\'change\');}" src="' + imgUrl + '" /></div></td> \
                                                    <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -75px;position: absolute; display: block; top: 0; width: 150px; height: 25px; cursor: pointer;" onMouseOver="javascript:$(this).css(\'left\',\'-100px\');" onMouseOut="javascript:$(this).css(\'left\',\'-75px\');" onMouseDown="javascript:$(\'[data-toggle=\\\'popover\\\']\').popover(\'hide\');" src="' + strImgCancella + '" /></div></td> \
                                                </tr> \
                                            </table> \
                                        </td> \
                                    </tr> \
                                </table></div>';
                $("#" + this._inputFieldOtpName).attr("data-toggle", "popover").attr("data-placement", "bottom");
                $("#" + this._inputFieldOtpName).popover({ content: authInput, html: true });

            }

        },
        
        _openPinpadOld: function (executionParam) {
            sdk.utils.log.debugMessage('tm.pinpadnew - openPinpadOld');
            var url = executionParam.cartInfo.ApplicationPath + executionParam.staticResourcesPinPadOld.url;
            var urlImg = executionParam.cartInfo.ApplicationPath + executionParam.staticResourcesPinPadOld.urlImg;
            var srcImgEmpty = executionParam.srcImgEmpty;
            var imgToken = this._getImgToken(executionParam);

            $("#" + this._inputFieldOtpName).attr("value", "");
            if ($("#" + this._inputFieldOtpName).attr("tm_isCreated") == "1") {
                //
            }
            else {
            $("#" + this._inputFieldOtpName).attr("tm_isCreated", "1");

            var strName = "tm_divPP_" + executionParam.idInputHidden; 
            var imgSource = url + '?d=' + $.now();
            
            var authInput = '<div id="' + strName + '"> \
                            <table class="sfondoTabelle" style="width: 100%;" border="0" cellspacing="0" cellpadding="0" align="left">\
                                             <tbody cellpadding="0" cellspacing="0">\
                                               <tr class="col-xs-12" valign="middle">\
            									 <td class="col-xs-4" style="vertical-align:middle"><span>' + executionParam.pinpadDisclaimer + '</span></td>\
            									 <td class="col-xs-2" style="vertical-align:middle"><div align="center">' + imgToken + '</div></td>\
            									 <td class="col-xs-5" style="vertical-align:middle">\
            									   <table width="100%" align="center" style="background-color: rgb(216, 233, 216);" border="0">\
            										 <tbody>\
            										   <tr>\
            											 <td valign="top">\
            											   <table border="0" cellspacing="2" cellpadding="2" style="border-spacing: 4px; border-collapse: separate">\
            												 <tbody>\
            												   <tr>\
            													 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img class="searchidimagenumber" id="img0" style="left: -0px;  position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-400px\');" onMouseUp="javascript:$(this).css(\'left\',\'-400px\');" onMouseOut="javascript:$(this).css(\'left\',\'-0px\');" onMouseDown="$(this).css(\'left\',\'-800px\');" src="' + imgSource + '" /></div></td> \
                                                                 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img class="searchidimagenumber" id="img1" style="left: -40px; position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-440px\');" onMouseUp="javascript:$(this).css(\'left\',\'-440px\');" onMouseOut="javascript:$(this).css(\'left\',\'-40px\');" onMouseDown="$(this).css(\'left\',\'-840px\');" src="' + imgSource + '" /></div></td> \
                                                                 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img class="searchidimagenumber" id="img2" style="left: -80px; position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-480px\');" onMouseUp="javascript:$(this).css(\'left\',\'-480px\');" onMouseOut="javascript:$(this).css(\'left\',\'-80px\');" onMouseDown="$(this).css(\'left\',\'-880px\');" src="' + imgSource + '" /></div></td> \
                                                                 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img class="searchidimagenumber" id="img3" style="left: -120px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-520px\');" onMouseUp="javascript:$(this).css(\'left\',\'-520px\');" onMouseOut="javascript:$(this).css(\'left\',\'-120px\');" onMouseDown="$(this).css(\'left\',\'-920px\');" src="' + imgSource + '" /></div></td> \
                                                               </tr> \
                                                               <tr> \
                                                                 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img class="searchidimagenumber" id="img4" style="left: -160px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-560px\');" onMouseUp="javascript:$(this).css(\'left\',\'-560px\');" onMouseOut="javascript:$(this).css(\'left\',\'-160px\');" onMouseDown="$(this).css(\'left\',\'-960px\');" src="' + imgSource + '" /></div></td> \
                                                                 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img class="searchidimagenumber" id="img5" style="left: -200px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-600px\');" onMouseUp="javascript:$(this).css(\'left\',\'-600px\');" onMouseOut="javascript:$(this).css(\'left\',\'-200px\');" onMouseDown="$(this).css(\'left\',\'-1000px\');" src="' + imgSource + '" /></div></td> \
                                                                 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img class="searchidimagenumber" id="img6" style="left: -240px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-640px\');" onMouseUp="javascript:$(this).css(\'left\',\'-640px\');" onMouseOut="javascript:$(this).css(\'left\',\'-240px\');" onMouseDown="$(this).css(\'left\',\'-1040px\');" src="' + imgSource + '" /></div></td> \
                                                                 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img class="searchidimagenumber" id="img7" style="left: -280px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-680px\');" onMouseUp="javascript:$(this).css(\'left\',\'-680px\');" onMouseOut="javascript:$(this).css(\'left\',\'-280px\');" onMouseDown="$(this).css(\'left\',\'-1080px\');" src="' + imgSource + '" /></div></td> \
                                                               </tr> \
                                                               <tr> \
                                                                 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img class="searchidimagenumber" id="img8" style="left: -320px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-720px\');" onMouseUp="javascript:$(this).css(\'left\',\'-720px\');" onMouseOut="javascript:$(this).css(\'left\',\'-320px\');" onMouseDown="$(this).css(\'left\',\'-1120px\');" src="' + imgSource + '" /></div></td> \
                                                                 <td class="txt_center" align="center" valign="middle"><div style="width: 40px;height: 32px;position: relative; overflow: hidden"><img class="searchidimagenumber" id="img9" style="left: -360px;position: absolute; display: block; top: 0; cursor: hand; width: 1200px; height: 32px;" onMouseOver="javascript:$(this).css(\'left\',\'-760px\');" onMouseUp="javascript:$(this).css(\'left\',\'-760px\');" onMouseOut="javascript:$(this).css(\'left\',\'-360px\');" onMouseDown="$(this).css(\'left\',\'-1160px\');" src="' + imgSource + '" /></div></td> \
                                                                 <td class="txt_center" align="center" valign="middle" colspan="2"><div style="width: 90px;height: 32px; position: relative; overflow: hidden"><img class="searchidimagedelete" style="position: absolute; display: block; cursor: hand; height: 32px; width: 90px" src="' + urlImg + executionParam.staticResourcesPinPadOld.nameImgCancella + '"  onMouseOver="this.src=\'' + urlImg + executionParam.staticResourcesPinPadOld.nameImgCancellaOver + '\'" onMouseUp="this.src=\'' + urlImg + executionParam.staticResourcesPinPadOld.nameImgCancellaOver + '\'" onMouseOut="this.src=\'' + urlImg + executionParam.staticResourcesPinPadOld.nameImgCancella + '\'" onMouseDown="this.src=\'' + urlImg + executionParam.staticResourcesPinPadOld.nameImgCancellaDown + '\'" /></div></td> \
                                                              </tr>\
            												 </tbody>\
            											   </table>\
            											 </td>\
            										     <td class="txt_center" valign="top">\
            										       <table border="0" cellspacing="2" cellpadding="2" style="width: 197px">\
            									             <tbody>\
            									               <tr height="32">\
            								                     <td style="vertical-align:middle">PIN:</td>\
            								                     <td style="vertical-align:middle"><img id="imgPin0" src="' + srcImgEmpty + '">&nbsp;<img id="imgPin1" src="' + srcImgEmpty + '">&nbsp;<img id="imgPin2" src="' + srcImgEmpty + '">&nbsp;<img id="imgPin3" src="' + srcImgEmpty + '">&nbsp;<img id="imgPin4" src="' + srcImgEmpty + '">&nbsp;<img id="imgPin5" src="' + srcImgEmpty + '">&nbsp;</td>\
            							                       </tr>\
            							                       <tr height="32"><td>&nbsp;</td></tr>\
            						                           <tr height="32">\
            													 <td class="testoBlackNormalBold right">&nbsp;</td>\
             													 <td class="txt_center" valign="center" colspan="3"></td>\
            												   </tr>\
            											     </tbody>\
            											   </table>\
            											 </td>\
            										   </tr>\
            									     </tbody>\
            									   </table>\
            									 </td>\
            								   </tr>\
            								   <tr></tr>\
            								 </tbody>\
            							   </table>\
                                         </div>';

                return authInput;
            }
        },

        _getImgToken: function (executionParamInternal) {
            sdk.utils.log.debugMessage('tm.pinpadnew - getImgToken');
            var imgToken = '<img src="' + executionParamInternal.cartInfo.pathTokenImg + '" border="0" >';
            try {
                if (executionParamInternal.sizeTokenImg) {
                    var imdJquery = $('<img>');
                    imdJquery.attr('src', executionParamInternal.cartInfo.pathTokenImg);
                    if (executionParamInternal.sizeTokenImg.width && executionParamInternal.sizeTokenImg.height) {
                        imdJquery.css('width', executionParamInternal.sizeTokenImg.width);
                        imdJquery.css('height', executionParamInternal.sizeTokenImg.height);
                    } else {
                        if (executionParamInternal.sizeTokenImg.width) {
                            imdJquery.concat('width', executionParamInternal.sizeTokenImg.width);
                        } else {
                            if (executionParamInternal.sizeTokenImg.height) {
                                imdJquery.css('height', executionParamInternal.sizeTokenImg.height);
                            }
                        }
                    }
                    imgToken = imdJquery[0].outerHTML;
                }
            } catch (e) {
                sdk.utils.log.debugMessage('tm.pinpad - error in GetTagImgToken: ' + e);
            }
            return imgToken;
        },
        
        _clickFunctionNumber: function (paramOptions) {
            sdk.utils.log.debugMessage('tm.pinpadnew - clickFunctionNumber');
            var srcImgFull = paramOptions.cartInfo.ApplicationPath + paramOptions.staticResourcesPinPadOld.urlImg + '' + paramOptions.staticResourcesPinPadOld.nameImgFull;
            $(".searchidimagenumber").each(function (index, element) {
                $("#" + element.id).click(function () {
                    //associa il valore cliccato all'input hidden 
                    var cntrlJQuery = $('#' + paramOptions.idInputHidden);
                    if (cntrlJQuery.attr('value').length < 6) {
                        var newValue = cntrlJQuery.attr('value') + index;
                        cntrlJQuery.attr('value', newValue);
                    }

                    //associa l'img con * se non ho cliccato tutti i 6 valori 
                    if (paramOptions.tmpcontatore < 6) {
                        var imgToChange = "imgPin" + paramOptions.tmpcontatore;
                        var cntrlJQuery2 = $('#' + imgToChange);
                        cntrlJQuery2.attr('src', srcImgFull);
                        if (paramOptions.ctrPinLenght !== $.noop) {
                            paramOptions.param.ctrPinLenght(false);
                            if (paramOptions.tmpcontatore == 5) {
                                paramOptions.param.ctrPinLenght(true);
                            }
                        }

                        paramOptions.tmpcontatore++;
                        
                    }
                });

            });
            return true;
        },

        _clickFunctionDelete: function (paramOptions) {
            sdk.utils.log.debugMessage('tm.pinpadnew - clickFunctionDelete');
            $(".searchidimagedelete").click(function () {
                var cntrlJQuery = $('#' + paramOptions.idInputHidden);
                cntrlJQuery.attr('value', '');

                if (paramOptions.ctrPinLenght !== $.noop) {
                    paramOptions.param.ctrPinLenght(false);
                }

                paramOptions.tmpcontatore = 0;
                for (i = 0; i < 6; i++) {
                    var imgToChange = "imgPin" + i;
                    var cntrlJQuery2 = $('#' + imgToChange);
                    cntrlJQuery2.attr('src', paramOptions.srcImgEmpty);
                }
            });
            return true;
        }


    });
})(jQuery);