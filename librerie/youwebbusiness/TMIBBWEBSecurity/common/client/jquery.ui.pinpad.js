(function ($) {
    $.widget("ui.pinpad", {
        _isInitializedPP: false,
        _ppcode: '',
        _pptipoAuth: '',
        _pptitle: '',
        _ppdescription: '',
        _ppok: '',
        _ppannulla: '',
        _pperrpinlen: '',
        _pplblPasswordPin: '',
        _ppTIPOAUTH_PWD: '1',
        _ppTIPOAUTH_PP: '10',
        _isFirmaOld: true,
        _lang: 'it-IT',
        urlGetAuthInfo: '/TMIBBWEBSecurity/ws/SvcAuth.svc/GetAuthInfo',
        urlImgPP: '/TMIBBWEBSecurity/ws/imgPP.aspx',
        urlWait: '/TMIBBWEBSecurity/common/resources/ajax_loader_blue_256.gif',
        urlImgCancella: '/TMIBBWEBSecurity/common/resources/imgPP.png',
        urlImgCancellaEn: '/TMIBBWEBSecurity/common/resources/imgPP_en.png',
        idApplicazione: 0,
        idSubApplicazione: 0,
        idUsoSecurity: 0,
        overrideHtmlHeader: '',
        overrideTitle: '',
        options: {
            urlSetCarrello: '/TMIBBWEBSecurity/ws/SvcAuth.svc/SetCarrello',
            urlCheckCode: '/TMIBBWEBSecurity/ws/SvcAuth.svc/CheckCode',
            firmaOld: $.noop,
            setCarrelloOK: $.noop, // Callback(event,data) per OK set carrello
            setCarrelloKO: $.noop, // Callback(event,errdescr) per KO set carrello
            checkCodeOK: $.noop, // Callback(event) per Auth OK
            checkCodeKO: $.noop, // Callback(event,errdescr) per Auth KO
            annulla: $.noop, // Callback(event,data - null,null) per annulla - Sostiuisce chiusura dialog
            endAnnulla: $.noop, // Callback(event,data - null,null) per annulla - dopo chiusura dialog
            endOk: $.noop, // // Callback(event,data - null,null) per fine elaborazione OK
            htmlRiepilogo: '', // html di riepilogo per auth
            htmlHeader: '', // html visualizzato sopra campi di input
            title: '', // imposta titolo
            hideError: false, // Se impostato non visualizza errore in PP
            showCloseWindow: true,
            escEnabled: true,
            idTipoOperazione: '',
            elabCarrello: true,
            className: 'pinpadClass',
            buttonLayoutStandard: true,
            draggable: false
        },
        _create: function () {
        },
        _init: function () {
        },
        _urlDecode: function (str) {
            return decodeURIComponent((str + '').replace(/\+/g, '%20'));
        },
        _pphtmlEncode: function (value) {
            return $('<div/>').text(value).html();
        },
        _getDataCarrello: function (dataCarrello, token) {
            var toret = {
                tm_dataCarrello: dataCarrello,
                tm_token: token,
                tm_elabCarrello: this.options.elabCarrello ? "1" : "0",
                tm_tipo_operazione: this.options.idTipoOperazione
            }
            return toret;

        },
        _isString: function (str) {
            if (!str) return false;
            return (typeof str == "string");
        },
        _isStringJSon: function (str) {
            if (!str) return false;
            if (this._isString(str)) {
                var tmp = $.trim(str).substring(0, 1);
                if ((tmp == "[") || (tmp == "{")) return true;
            }
            return false;

        },
        _ppCancella: function () {
            this._ppResetPP();
            this._ppHideError();
        },
        _ppResetPP: function () {
            if (this._pptipoAuth == this._ppTIPOAUTH_PP) {
                $("._ppimgPinEmpty", this.element).css({ left: "-270px" });
                this._ppcode = '';
            }
            else {
                $("#_pppwd", this.element).val('');
            }
        },
        _ppClick: function (ix) {
            this._ppHideError();
            if (this._ppcode.length < 6) {
                $("#_ppimgPin" + this._ppcode.length, this.element).css({ left: "-294px" });
                this._ppcode += ix;
            }
        },
        _ppHideError: function () {
            if ($('#_pperrdiv', this.element).css("visibility") != "hidden") {
                $('#_pperrdiv', this.element).css("visibility", "hidden");
                $('#_pperrdiv', this.element).text('');
            }
        },
        _ppShowError: function (errdescr) {
            if (!this.options.hideError) {
                $('#_pperrdiv', this.element).html(errdescr);
                $('#_pperrdiv', this.element).css("visibility", "visible");
            }
        },
        _ppShowPinPad: function (_ppriepilogo) {
            $(this.element).dialog("open");
            this._ppwriteRiepilogo(_ppriepilogo);
        },
        _ppwriteRiepilogo: function (_ppriep) {
            //Implementazione di default per riepilogo
            var widget = this;
            $("#_ppdivRiepilogo", this.element).text('');
            if (this.options.htmlRiepilogo) {
                $("#_ppdivRiepilogo", this.element).append(this.options.htmlRiepilogo);
            }
            else {
                if (_ppriep) {
                    if ($.isArray(_ppriep)) { // Array
                        var _ppstrRows = '<table width="100%" id="_ppdivRiepilogo" class="ui-widget">';
                        var _ppfirst = true;
                        $.each(_ppriep, function (key, value) {
                            _ppstrRows += '<tr>';
                            $.each(value, function (keyEl, valueEl) {
                                if (_ppfirst) _ppstrRows = _ppstrRows + ('<td nowrap align="center" class="ui-state-highlight ui-priority-primary" style="padding: 0 .7em;">' + widget._pphtmlEncode(valueEl) + '</td>');
                                else _ppstrRows = _ppstrRows + ('<td align="center" style="padding: 0 .7em;">' + widget._pphtmlEncode(valueEl) + '</td>');
                            });
                            _ppfirst = false;
                            _ppstrRows += '</tr>';
                        });
                        _ppstrRows += '</table>'
                        $("#_ppdivRiepilogo", this.element).append(_ppstrRows);
                    }
                    else if (widget._isString(_ppriep)) { //Stringa
                        _ppstrRows = '<table width="100%" id="_ppdivRiepilogo" class="ui-widget"><tr><td class="ui-widget">';
                        _ppstrRows += _ppriep; // Non faccio encode per permettere chunk
                        _ppstrRows += '</td></tr></table>';
                        $("#_ppdivRiepilogo", this.element).append(_ppstrRows);
                    }
                    else { // Chiave valore
                        _ppstrRows = '<table width="100%" border="0" id="_ppdivRiepilogo" class="ui-widget">';
                        $.each(_ppriep, function (key, value) {
                            _ppstrRows = _ppstrRows + '<tr><td align="left" nowrap width="20%" class="ui-state-highlight ui-widget" style="padding: 0 .7em;">' + widget._pphtmlEncode(key) + '&nbsp;:</td><td nowrap style="padding: 0 .7em;" class="ui-widget" >' + widget._pphtmlEncode(value) + '</td></tr>';
                        });
                        _ppstrRows += '</table>';
                        $("#_ppdivRiepilogo", this.element).append(_ppstrRows);
                    }
                }
            }
        },
        _ppCenter: function () {
            var max = 0;
            try {
                $(this.element).dialog("option", "width", 450);
                max = $("#_pptbext", this.element).width() +
                parseInt($(".ui-dialog-titlebar").css("padding-left").replace("px", "")) +
                parseInt($(".ui-dialog-titlebar").css("padding-right").replace("px", "")) +
                20; // x IE7 
                $(this.element).dialog("option", "width", max);
            } catch (e) {
            }

            $(this.element).dialog("option", "position", { my: "center", at: "center", of: window });
        },
        firma: function (dataCarrello) {
            var widget = this;

            this._waitAll(true);
            $.ajax({
                type: 'POST',
                url: widget.urlGetAuthInfo,
                success: function (data) {
                    var p = $.parseJSON(data.d);
                    widget._pptipoAuth = p.tipoAuth;
                    widget._pptitle = p.title;
                    widget._isFirmaOld = (p.isFirmaOld == "1" ? true : false);
                    if (p.lang) widget._lang = p.lang;
                    if (widget._lang == 'en-GB') widget.urlImgCancella = widget.urlImgCancellaEn;

                    if (widget.options.title) widget._pptitle = widget.options.title;
                    if (p.htmlDescription) widget._ppdescription = p.htmlDescription;
                    else widget._ppdescription = widget._pphtmlEncode(p.description);
                    widget._ppok = p.ok; if (!widget._ppok) widget._ppok = "OK";
                    widget._ppannulla = p.annulla; if (!widget._ppannulla) widget._ppannulla = "Annulla";
                    widget._pperrpinlen = p.errpinlen;
                    widget._pplblPasswordPin = p.lblPasswordPin;
                    if (!widget._pplblPasswordPin) {
                        if (widget._pptipoAuth == widget._ppTIPOAUTH_PP) widget._pplblPasswordPin = "Pin";
                        else widget._pplblPasswordPin = "Password";
                    }
                    widget._setCarrello(dataCarrello)
                },
                error: function (data) {
                    try {
                        //widget._ppShowError(widget._urlDecode($.parseJSON(data.getResponseHeader("tmerr")).descrErr));
                        alert(widget._urlDecode($.parseJSON(data.getResponseHeader("tmerr")).descrErr));
                    }
                    catch (e) { widget._ppShowError(e); }
                    widget._waitAll(false);
                    widget._ppResetPP();
                },
                complete: function () {
                },
                dataType: "json",
                async: true
            });
        },
        _waitAll: function (bWait) {
            if ($("#_ppoverlayBody").length == 0) this._ppSetWaitAll();
            if (bWait) {
                $('#_ppoverlayBody').show();
                $(".ppcontrol").prop("disabled", true);
            }
            else {
                $('#_ppoverlayBody').hide();
                $(".ppcontrol").prop("disabled", false);
            }
        },
        _ppSetWaitAll: function () {
            var over = '<div id="_ppoverlayBody"><img id="_pploadingBody" src="' + this.urlWait + '"></div>';
            $(over).appendTo($("body"));
            $("#_ppoverlayBody").css({ "position": "absolute", "left": "0", "top": "0", "bottom": "0", "right": "0", "background": "#000", "opacity": "0.3", "filter": "alpha(opacity=30)" });
            $("#_pploadingBody").css({ "width": "32px", "height": "32px", "position": "absolute", "top": "50%", "left": "50%", "margin": "-16px 0 0 -16px" });
            $('#_ppoverlayBody').hide();
        },
        _ppWait: function (bEnable) {
            var btn = $("#" + this.element.attr("id") + " ~ .ui-dialog-buttonpane button");
            if (bEnable) {
                btn.button("disable");
                $('#_ppoverlay', this.element).show();
                $(this.element).dialog({ closeOnEscape: false })
                $(this.element).parent().children().children('.ui-dialog-titlebar-close').hide();
            }
            else {
                btn.button("enable");
                $('#_ppoverlay', this.element).hide();
                $(this.element).dialog({ closeOnEscape: false })
                $(this.element).parent().children().children('.ui-dialog-titlebar-close').hide();
            }
        },
        _ppGetTable: function () {
            var authInput;
            var toret;
            switch (this._pptipoAuth) {
                case this._ppTIPOAUTH_PWD: // pwd
                    authInput = '                <table width="100%" cellspacing="2" cellpadding="2" class="ui-widget"> \
                            <tr> \
                                <td nowrap class="ui-priority-primary">' + this._pphtmlEncode(this._pplblPasswordPin) + '&nbsp;:&nbsp;</td> \
                                <td valign="top" align="left" width="100%"><input type="password" name ="_pppwd" maxlength="50" size="50" id="_pppwd"></td> \
                            </tr> \
                        </table>';
                    break;
                case this._ppTIPOAUTH_PP: //pp
                    var strSrcImgPP = this.urlImgPP + '?tm_idApplicazione=' + this.idApplicazione + '&tm_idSubApplicazione=' + this.idSubApplicazione + '&tm_id_usosecurity_operazione_otp=' + this.idUsoSecurity + '&d=' + $.now();
                    authInput = '                <table cellspacing="2" cellpadding="2" width="100%" class="ui-widget"> \
                            <tr> \
                                <td align="left"> \
                                    <table style="border-collapse: separate !important; border-spacing: 2px !important;padding: 2px !important;"> \
                                        <tr> \
                                            <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg0" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg1" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg2" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg3" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                        </tr> \
                                        <tr> \
                                            <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg4" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg5" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg6" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg7" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                        </tr> \
                                        <tr> \
                                            <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg8" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            <td align="center" valign="middle"><div class="_ppdivImg"><img id="_ppimg9" class="_ppimgpp" src="' + strSrcImgPP + '" /></div></td> \
                                            <td colspan="2" align="center" valign="middle"> \
                                                <div class="_ppdivImgCancella" id="_ppdivImgcancella"><img id="_ppimgC" class="_ppimgCancella" src="' + this.urlImgCancella + '" border="0"></div> \
                                            </td> \
                                        </tr> \
                                    </table> \
                                </td> \
                                <td valign="top" align="left"> \
                                    <table class="ui-widget"> \
                                       <tr> \
                                            <td nowrap align="right" class="ui-priority-primary">' + this._pphtmlEncode(this._pplblPasswordPin) + '&nbsp;:&nbsp;</td> \
                                            <td align="center"><div class="_ppdivImgPin"><img id="_ppimgPin0" class="_ppimgPinEmpty _ppimgCancella" src="' + this.urlImgCancella + '"/></div></td> \
                                            <td align="center"><div class="_ppdivImgPin"><img id="_ppimgPin1" class="_ppimgPinEmpty _ppimgCancella" src="' + this.urlImgCancella + '"/></div></td> \
                                            <td align="center"><div class="_ppdivImgPin"><img id="_ppimgPin2" class="_ppimgPinEmpty _ppimgCancella" src="' + this.urlImgCancella + '"/></div></td> \
                                            <td align="center"><div class="_ppdivImgPin"><img id="_ppimgPin3" class="_ppimgPinEmpty _ppimgCancella" src="' + this.urlImgCancella + '"/></div></td> \
                                            <td align="center"><div class="_ppdivImgPin"><img id="_ppimgPin4" class="_ppimgPinEmpty _ppimgCancella" src="' + this.urlImgCancella + '"/></div></td> \
                                            <td align="center"><div class="_ppdivImgPin"><img id="_ppimgPin5" class="_ppimgPinEmpty _ppimgCancella" src="' + this.urlImgCancella + '"/></div></td> \
                                        </tr> \
                                    </table> \
                                </td> \
                            </tr> \
                        </table>';
                    break;
                default:
                    break;
            }
            var _ppvDescr = ''
            if (this.options.htmlHeader) {
                _ppvDescr = '        <tr> \
                        <td colspan="2" id="__ppHeader">' + this.options.htmlHeader + '</td> \
                    </tr>';
            }
            else if (this._ppdescription) {
                _ppvDescr = '        <tr> \
                    <td colspan="2" id="__ppHeader">' + this._ppdescription + '</td> \
                </tr>';

            }
            else {
                _ppvDescr = '        <tr> \
                    <td colspan="2" id="__ppHeader"></td> \
                </tr>';
            }

            toret = '<table id="_pptbext" border="0" width="100%" class="ui-widget" style="border-collapse: separate !important; border-spacing: 2px !important;padding: 2px !important;">' + _ppvDescr + '<tr> \
                    <td>' + authInput + '</td> \
                </tr> \
                <tr> \
                    <td colspan="2" width="100%"><div id="_pperrdiv" class="ui-state-error ui-corner-all ui-priority-primary" style="padding: 0 .7em;visibility:hidden;"></div></td> \
                </tr> \
                <tr> \
                    <td colspan="2"> \
                        <div id="_ppdivRiepilogo" /> \
                    </td> \
                </tr> \
            </table>';
            return toret;
        },
        _ppclickDialogOK: function () {
            var widget = this;
            var _pptoken = this._ppcode;
            if (this._pptipoAuth == this._ppTIPOAUTH_PP) {
                if (this._ppcode.length != 6) {
                    this._ppShowError(this._pperrpinlen);
                    return;
                }
            }
            if (this._pptipoAuth == this._ppTIPOAUTH_PWD) {
                _pptoken = $("#_pppwd", this.element).val();
                if (!_pptoken) {
                    this._ppShowError(this._pperrpinlen);
                    return;
                }
            }
            this._ppWait(true);
            var dataC = this._getDataCarrello('', _pptoken);
            var xhr = $.ajax({
                type: 'POST',
                url: widget.options.urlCheckCode,
                data: dataC,
                success: function (data) {
                    widget._ppWait(false);
                    $(widget.element).dialog("close");
                    var str = xhr.getResponseHeader("tmmsgok");
                    if (str) str = widget._urlDecode(str);
                    try { widget._trigger("checkCodeOK", null, str); } catch (e) { }
                    if (widget.options.endOk != $.noop) {
                        try { widget._trigger("endOk", null, null); } catch (e) { }
                    }
                },
                error: function (data) {
                    try {
                        widget._ppWait(false);
                        var err = widget._urlDecode($.parseJSON(data.getResponseHeader("tmerr")).descrErr);
                        widget._ppShowError(err);
                        if (data.getResponseHeader("tmclose") == "1") {
                            $(widget.element).dialog("close");
                            if (widget.options.checkCodeKO == $.noop) {
                                alert(err); //Nel caso la pp venga chiusa e non ho gestore visualizzo cmq msg
                            }
                        }
                        try { widget._trigger("checkCodeKO", null, err); } catch (e) { }
                    }
                    catch (e) {
                        widget._ppShowError(e);
                        try { widget._trigger("checkCodeKO", null, e); } catch (e) { }
                    }
                    if (widget._pptipoAuth == widget._ppTIPOAUTH_PP) {
                        $("._ppimgpp", widget.element).attr('src', widget.urlImgPP + '?tm_idApplicazione=' + widget.idApplicazione + '&tm_idSubApplicazione=' + widget.idSubApplicazione + '&tm_id_usosecurity_operazione_otp=' + widget.idUsoSecurity + '&d=' + $.now());
                    }
                    if (widget._pptipoAuth == widget._ppTIPOAUTH_PWD) {
                        $("#_pppwd", widget.element).val('');
                        $("#_pppwd", widget.element).focus();
                    }
                    widget._ppResetPP();
                },
                dataType: "json",
                async: true
            });
        },
        _setWaiting: function () {
            var over = '<div id="_ppoverlay"><img id="_pploading" src="' + this.urlWait + '"></div>';
            $(over).appendTo(this.element);
            $("#_ppoverlay", this.element).css({ "position": "absolute", "left": "0", "top": "0", "bottom": "0", "right": "0", "background": "#000", "opacity": "0.3", "filter": "alpha(opacity=30)" });
            $("#_pploading", this.element).css({ "width": "32px", "height": "32px", "position": "absolute", "top": "50%", "left": "50%", "margin": "-16px 0 0 -16px" });
            $('#_ppoverlay', this.element).hide();
        },
        _ppSetStyle: function () {
            if (this._pptipoAuth == this._ppTIPOAUTH_PP) {
                $("._ppimgpp").css({ "position": "absolute", "display": "block", "top": "0", "width": "800px", "height": "32px", "cursor": "pointer" });
                $("._ppimgCancella").css({ "position": "absolute", "display": "block", "top": "0", "width": "318px", "height": "32px" });
                $("._ppdivImg").css({ "width": "40px", "height": "32px", "position": "relative", "overflow": "hidden" });
                $("._ppdivImgCancella").css({ "width": "90px", "height": "32px", "position": "relative", "overflow": "hidden" });
                $("._ppdivImgPin").css({ "width": "24px", "height": "26px", "position": "relative", "overflow": "hidden" });
                $("._ppimgPinEmpty").css("left", "-270px");

                var widget = this;
                $("#_ppimg0", this.element).hover(function () { $("#_ppimg0", widget.element).css("left", "-400px"); }, function () { $("#_ppimg0", widget.element).css("left", "-0px"); }).css("left", "-0px").mousedown(function () { widget._ppClick(0); });
                $("#_ppimg1", this.element).hover(function () { $("#_ppimg1", widget.element).css("left", "-440px"); }, function () { $("#_ppimg1", widget.element).css("left", "-40px"); }).css("left", "-40px").mousedown(function () { widget._ppClick(1); });
                $("#_ppimg2", this.element).hover(function () { $("#_ppimg2", widget.element).css("left", "-480px"); }, function () { $("#_ppimg2", widget.element).css("left", "-80px"); }).css("left", "-80px").mousedown(function () { widget._ppClick(2); });
                $("#_ppimg3", this.element).hover(function () { $("#_ppimg3", widget.element).css("left", "-520px"); }, function () { $("#_ppimg3", widget.element).css("left", "-120px"); }).css("left", "-120px").mousedown(function () { widget._ppClick(3); });
                $("#_ppimg4", this.element).hover(function () { $("#_ppimg4", widget.element).css("left", "-560px"); }, function () { $("#_ppimg4", widget.element).css("left", "-160px"); }).css("left", "-160px").mousedown(function () { widget._ppClick(4); });
                $("#_ppimg5", this.element).hover(function () { $("#_ppimg5", widget.element).css("left", "-600px"); }, function () { $("#_ppimg5", widget.element).css("left", "-200px"); }).css("left", "-200px").mousedown(function () { widget._ppClick(5); });
                $("#_ppimg6", this.element).hover(function () { $("#_ppimg6", widget.element).css("left", "-640px"); }, function () { $("#_ppimg6", widget.element).css("left", "-240px"); }).css("left", "-240px").mousedown(function () { widget._ppClick(6); });
                $("#_ppimg7", this.element).hover(function () { $("#_ppimg7", widget.element).css("left", "-680px"); }, function () { $("#_ppimg7", widget.element).css("left", "-280px"); }).css("left", "-280px").mousedown(function () { widget._ppClick(7); });
                $("#_ppimg8", this.element).hover(function () { $("#_ppimg8", widget.element).css("left", "-720px"); }, function () { $("#_ppimg8", widget.element).css("left", "-320px"); }).css("left", "-320px").mousedown(function () { widget._ppClick(8); });
                $("#_ppimg9", this.element).hover(function () { $("#_ppimg9", widget.element).css("left", "-760px"); }, function () { $("#_ppimg9", widget.element).css("left", "-360px"); }).css("left", "-360px").mousedown(function () { widget._ppClick(9); });
                $("#_ppimgC", this.element).css({ "left": "-0px", "cursor": "pointer" }).hover(function () { $("#_ppimgC", widget.element).css("left", "-90px"); }, function () { $("#_ppimgC", widget.element).css("left", "-0px"); }).click(function () { widget._ppCancella(); })
            }
        },
        _ppInitPinPad: function () {
            var strDialog = this._ppGetTable();
            $(this.element).append(strDialog);
            this._ppSetStyle();
            var widget = this;
            if (this._pptipoAuth == this._ppTIPOAUTH_PWD) {
                $('#_pppwd', this.element).keypress(function (event) {
                    if (event.which == 13) {
                        event.preventDefault();
                        widget._ppclickDialogOK();
                    }
                    else {
                        widget._ppHideError();
                    }
                });
            }
            var btnok = {
                text: widget._ppok,
                'class': 'btnPPClass',
                //"class": '.ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only',
                click: function () {
                    widget._ppclickDialogOK();
                }
            };
            var btnCancel = {
                text: widget._ppannulla,
                'class': 'btnPPClass',
                click: function () {
                    if (widget.options.annulla == $.noop) {
                        $(widget.element).dialog("close");
                    }
                    else {
                        widget._trigger("annulla", null, null);
                    }
                    if (widget.options.endAnnulla != $.noop) {
                        widget._trigger("endAnnulla", null, null);
                    }
                }
            };
            var btns = widget.options.buttonLayoutStandard ? [btnok, btnCancel] : [btnCancel, btnok];
            $(this.element).dialog({
                open: function (event, ui) {
                    $(widget.element).parent().children().children('.ui-dialog-titlebar-close').hide();
                    widget._ppCancella();
                    if (widget._pptipoAuth == widget._ppTIPOAUTH_PP) {
                        var urlpp = widget.urlImgPP + '?tm_idApplicazione=' + widget.idApplicazione + '&tm_idSubApplicazione=' + widget.idSubApplicazione + '&tm_id_usosecurity_operazione_otp=' + widget.idUsoSecurity + '&d=' + $.now();
                        $("._ppimgpp", widget.element).attr('src', urlpp);
                    }

                },
                title: widget._pptitle,
                dialogClass: widget.options.className,
                modal: true,
                autoOpen: false,
                width: 450, //auto non funzia con ie7 - lo faccio programm.
                height: 'auto',
                autoResize: true,
                resizable: false,
                //draggable: false,
                draggable: widget.options.draggable,
                closeOnEscape: false,
                buttons: btns
            });
            widget._setWaiting();
        },
        _show: function (riepilogo) {

            if (!this._isInitializedPP) {
                this._ppInitPinPad();
                this._isInitializedPP = true;
            }
            var data;
            if (this._isStringJSon(riepilogo)) {
                data = $.parseJSON(riepilogo);

            }
            else {
                data = riepilogo;
            }
            if (this.overrideHtmlHeader) $("#__ppHeader", this.element).html(this.overrideHtmlHeader);
            if (this.overrideTitle) $(this.element).dialog('option', 'title', this.overrideTitle);
            this._ppShowPinPad(data);
            this._ppCenter();
        },
        _setCarrello: function (dataCarrello) {
            var widget = this;
            if (this._isFirmaOld) {
                this.options.firmaOld();
            }
            else {
                var dataC = this._getDataCarrello(dataCarrello, '');
                var xhr = $.ajax({
                    type: 'POST',
                    url: widget.options.urlSetCarrello,
                    data: dataC,
                    success: function (dataRiepilogo) {
                        widget.idApplicazione = xhr.getResponseHeader("tmidApplicazione");
                        widget.idSubApplicazione = xhr.getResponseHeader("tmidSubApplicazione");
                        widget.idUsoSecurity = xhr.getResponseHeader("tmidUsoSecurity");
                        widget.overrideHtmlHeader = xhr.getResponseHeader("tmheaderHTML");
                        if (widget.overrideHtmlHeader) widget.overrideHtmlHeader = widget._urlDecode(widget.overrideHtmlHeader);
                        widget.overrideTitle = xhr.getResponseHeader("tmtitle");
                        if (widget.overrideTitle) widget.overrideTitle = widget._urlDecode(widget.overrideTitle);
                        widget._trigger("setCarrelloOK", null, dataRiepilogo.d);
                        widget._show(dataRiepilogo.d);
                    },
                    error: function (dataError) {
                        try {
                            var err = widget._urlDecode($.parseJSON(dataError.getResponseHeader("tmerr")).descrErr);
                            if (widget.options.setCarrelloKO == $.noop) {
                                alert(err);
                            }
                            else {
                                widget._trigger("setCarrelloKO", null, err);
                            }
                        }
                        catch (e) {
                            if (widget.options.setCarrelloKO == $.noop) {
                                alert(err);
                            }
                            else {
                                widget._trigger("setCarrelloKO", null, e);
                            }
                        }
                    },
                    complete: function () {
                        widget._waitAll(false);
                    },
                    dataType: "json",
                    async: true
                });
            }
        }
    })
})(jQuery);
