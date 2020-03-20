/*
 * SWFObject v1.5: Flash Player detection and embed - http://blog.deconcept.com/swfobject/In
 */
if (typeof deconcept === "undefined") { var deconcept = {}; }
if (typeof deconcept.util === "undefined") { deconcept.util = {}; }
if (typeof deconcept.SWFObjectUtil === "undefined") { deconcept.SWFObjectUtil = {}; } deconcept.SWFObject = function(_1, id, w, h, _5, c, _7, _8, _9, _a) { if (!document.getElementById) { return; } this.DETECT_KEY = _a ? _a : "detectflash";
    this.skipDetect = deconcept.util.getRequestParameter(this.DETECT_KEY);
    this.params = {};
    this.variables = {};
    this.attributes = []; if (_1) { this.setAttribute("swf", _1); } if (id) { this.setAttribute("id", id); } if (w) { this.setAttribute("width", w); } if (h) { this.setAttribute("height", h); } if (_5) { this.setAttribute("version", new deconcept.PlayerVersion(_5.toString().split("."))); } this.installedVer = deconcept.SWFObjectUtil.getPlayerVersion(); if (!window.opera && document.all && this.installedVer.major > 7) { deconcept.SWFObject.doPrepUnload = true; } if (c) { this.addParam("bgcolor", c); } var q = _7 ? _7 : "high";
    this.addParam("quality", q);
    this.setAttribute("useExpressInstall", false);
    this.setAttribute("doExpressInstall", false); var _c = (_8) ? _8 : window.location;
    this.setAttribute("xiRedirectUrl", _c);
    this.setAttribute("redirectUrl", ""); if (_9) { this.setAttribute("redirectUrl", _9); } };
deconcept.SWFObject.prototype = { useExpressInstall: function(_d) { this.xiSWFPath = !_d ? "expressinstall.swf" : _d;
        this.setAttribute("useExpressInstall", true); }, setAttribute: function(_e, _f) { this.attributes[_e] = _f; }, getAttribute: function(_10) { return this.attributes[_10]; }, addParam: function(_11, _12) { this.params[_11] = _12; }, getParams: function() { return this.params; }, addVariable: function(_13, _14) { this.variables[_13] = _14; }, getVariable: function(_15) { return this.variables[_15]; }, getVariables: function() { return this.variables; }, getVariablePairs: function() { var _16 = []; var key; var _18 = this.getVariables(); for (key in _18) { _16[_16.length] = key + "=" + _18[key]; } return _16; }, getSWFHTML: function() { var _19 = ""; if (navigator.plugins && navigator.mimeTypes && navigator.mimeTypes.length) { if (this.getAttribute("doExpressInstall")) { this.addVariable("MMplayerType", "PlugIn");
                this.setAttribute("swf", this.xiSWFPath); } _19 = "<embed type=\"application/x-shockwave-flash\" src=\"" + this.getAttribute("swf") + "\" width=\"" + this.getAttribute("width") + "\" height=\"" + this.getAttribute("height") + "\" style=\"" + this.getAttribute("style") + "\"";
            _19 += " id=\"" + this.getAttribute("id") + "\" name=\"" + this.getAttribute("id") + "\" "; var _1a = this.getParams(); for (var key in _1a) { _19 += [key] + "=\"" + _1a[key] + "\" "; } var _1c = this.getVariablePairs().join("&"); if (_1c.length > 0) { _19 += "flashvars=\"" + _1c + "\""; } _19 += "/>"; } else { if (this.getAttribute("doExpressInstall")) { this.addVariable("MMplayerType", "ActiveX");
                this.setAttribute("swf", this.xiSWFPath); } _19 = "<object id=\"" + this.getAttribute("id") + "\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\"" + this.getAttribute("width") + "\" height=\"" + this.getAttribute("height") + "\" style=\"" + this.getAttribute("style") + "\">";
            _19 += "<param name=\"movie\" value=\"" + this.getAttribute("swf") + "\" />"; var _1d = this.getParams(); for (var key in _1d) { _19 += "<param name=\"" + key + "\" value=\"" + _1d[key] + "\" />"; } var _1f = this.getVariablePairs().join("&"); if (_1f.length > 0) { _19 += "<param name=\"flashvars\" value=\"" + _1f + "\" />"; } _19 += "</object>"; } return _19; }, write: function(_20) { if (this.getAttribute("useExpressInstall")) { var _21 = new deconcept.PlayerVersion([6, 0, 65]); if (this.installedVer.versionIsValid(_21) && !this.installedVer.versionIsValid(this.getAttribute("version"))) { this.setAttribute("doExpressInstall", true);
                this.addVariable("MMredirectURL", escape(this.getAttribute("xiRedirectUrl")));
                document.title = document.title.slice(0, 47) + " - Flash Player Installation";
                this.addVariable("MMdoctitle", document.title); } } if (this.skipDetect || this.getAttribute("doExpressInstall") || this.installedVer.versionIsValid(this.getAttribute("version"))) { var n = (typeof _20 === "string") ? document.getElementById(_20) : _20;
            n.innerHTML = this.getSWFHTML(); return true; } else { if (this.getAttribute("redirectUrl") !== "") { document.location.replace(this.getAttribute("redirectUrl")); } } return false; } };
deconcept.SWFObjectUtil.getPlayerVersion = function() { var _23 = new deconcept.PlayerVersion([0, 0, 0]); if (navigator.plugins && navigator.mimeTypes.length) { var x = navigator.plugins["Shockwave Flash"]; if (x && x.description) { _23 = new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/, "").replace(/(\s+r|\s+b[0-9]+)/, ".").split(".")); } } else { if (navigator.userAgent && navigator.userAgent.indexOf("Windows CE") >= 0) { var axo = 1; var _26 = 3; while (axo) { try { _26++;
                    axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash." + _26);
                    _23 = new deconcept.PlayerVersion([_26, 0, 0]); } catch (e) { axo = null; } } } else { try { var axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7"); } catch (e) { try { var axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
                    _23 = new deconcept.PlayerVersion([6, 0, 21]);
                    axo.AllowScriptAccess = "always"; } catch (e) { if (_23.major === 6) { return _23; } } try { axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash"); } catch (e) {} } if (axo !== null) { _23 = new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(",")); } } } return _23; };
deconcept.PlayerVersion = function(_29) { this.major = _29[0] !== null ? parseInt(_29[0]) : 0;
    this.minor = _29[1] !== null ? parseInt(_29[1]) : 0;
    this.rev = _29[2] !== null ? parseInt(_29[2]) : 0; };
deconcept.PlayerVersion.prototype.versionIsValid = function(fv) { if (this.major < fv.major) { return false; } if (this.major > fv.major) { return true; } if (this.minor < fv.minor) { return false; } if (this.minor > fv.minor) { return true; } if (this.rev < fv.rev) { return false; } return true; };
deconcept.util = { getRequestParameter: function(_2b) { var q = document.location.search || document.location.hash; if (_2b === null) { return q; } if (q) { var _2d = q.substring(1).split("&"); for (var i = 0; i < _2d.length; i++) { if (_2d[i].substring(0, _2d[i].indexOf("=")) === _2b) { return _2d[i].substring((_2d[i].indexOf("=") + 1)); } } } return ""; } };
deconcept.SWFObjectUtil.cleanupSWFs = function() { var _2f = document.getElementsByTagName("OBJECT"); for (var i = _2f.length - 1; i >= 0; i--) { _2f[i].style.display = "none"; for (var x in _2f[i]) { if (typeof _2f[i][x] === "function") { _2f[i][x] = function() {}; } } } };
if (deconcept.SWFObject.doPrepUnload) { if (!deconcept.unloadSet) { deconcept.SWFObjectUtil.prepUnload = function() { __flash_unloadHandler = function() {};
            __flash_savedUnloadHandler = function() {};
            window.attachEvent("onunload", deconcept.SWFObjectUtil.cleanupSWFs); };
        window.attachEvent("onbeforeunload", deconcept.SWFObjectUtil.prepUnload);
        deconcept.unloadSet = true; } }
if (!document.getElementById && document.all) { document.getElementById = function(id) { return document.all[id]; }; }
var getQueryParamValue = deconcept.util.getRequestParameter;
var FlashObject = deconcept.SWFObject;
var SWFObject = deconcept.SWFObject;

/*
 * http://www.JSON.org/json2.js
 */
var JSON;
if (!JSON) { JSON = {} }(function() {
    function f(n) { return n < 10 ? "0" + n : n } if (typeof Date.prototype.toJSON !== "function") { Date.prototype.toJSON = function(key) { return isFinite(this.valueOf()) ? this.getUTCFullYear() + "-" + f(this.getUTCMonth() + 1) + "-" + f(this.getUTCDate()) + "T" + f(this.getUTCHours()) + ":" + f(this.getUTCMinutes()) + ":" + f(this.getUTCSeconds()) + "Z" : null };
        String.prototype.toJSON = Number.prototype.toJSON = Boolean.prototype.toJSON = function(key) { return this.valueOf() } } var cx = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
        escapable = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
        gap, indent, meta = { "\b": "\\b", "\t": "\\t", "\n": "\\n", "\f": "\\f", "\r": "\\r", '"': '\\"', "\\": "\\\\" },
        rep;

    function quote(string) { escapable.lastIndex = 0; return escapable.test(string) ? '"' + string.replace(escapable, function(a) { var c = meta[a]; return typeof c === "string" ? c : "\\u" + ("0000" + a.charCodeAt(0).toString(16)).slice(-4) }) + '"' : '"' + string + '"' }

    function str(key, holder) { var i, k, v, length, mind = gap,
            partial, value = holder[key]; if (value && typeof value === "object" && typeof value.toJSON === "function") { value = value.toJSON(key) } if (typeof rep === "function") { value = rep.call(holder, key, value) } switch (typeof value) {
            case "string":
                return quote(value);
            case "number":
                return isFinite(value) ? String(value) : "null";
            case "boolean":
            case "null":
                return String(value);
            case "object":
                if (!value) { return "null" } gap += indent;
                partial = []; if (Object.prototype.toString.apply(value) === "[object Array]") { length = value.length; for (i = 0; i < length; i += 1) { partial[i] = str(i, value) || "null" } v = partial.length === 0 ? "[]" : gap ? "[\n" + gap + partial.join(",\n" + gap) + "\n" + mind + "]" : "[" + partial.join(",") + "]";
                    gap = mind; return v } if (rep && typeof rep === "object") { length = rep.length; for (i = 0; i < length; i += 1) { if (typeof rep[i] === "string") { k = rep[i];
                            v = str(k, value); if (v) { partial.push(quote(k) + (gap ? ": " : ":") + v) } } } } else { for (k in value) { if (Object.prototype.hasOwnProperty.call(value, k)) { v = str(k, value); if (v) { partial.push(quote(k) + (gap ? ": " : ":") + v) } } } } v = partial.length === 0 ? "{}" : gap ? "{\n" + gap + partial.join(",\n" + gap) + "\n" + mind + "}" : "{" + partial.join(",") + "}";
                gap = mind; return v } } if (typeof JSON.stringify !== "function") { JSON.stringify = function(value, replacer, space) { var i;
            gap = "";
            indent = ""; if (typeof space === "number") { for (i = 0; i < space; i += 1) { indent += " " } } else { if (typeof space === "string") { indent = space } } rep = replacer; if (replacer && typeof replacer !== "function" && (typeof replacer !== "object" || typeof replacer.length !== "number")) { throw new Error("JSON.stringify") } return str("", { "": value }) } } if (typeof JSON.parse !== "function") { JSON.parse = function(text, reviver) { var j;

            function walk(holder, key) { var k, v, value = holder[key]; if (value && typeof value === "object") { for (k in value) { if (Object.prototype.hasOwnProperty.call(value, k)) { v = walk(value, k); if (v !== undefined) { value[k] = v } else { delete value[k] } } } } return reviver.call(holder, key, value) } text = String(text);
            cx.lastIndex = 0; if (cx.test(text)) { text = text.replace(cx, function(a) { return "\\u" + ("0000" + a.charCodeAt(0).toString(16)).slice(-4) }) } if (/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, "@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, "]").replace(/(?:^|:|,)(?:\s*\[)+/g, ""))) { j = eval("(" + text + ")"); return typeof reviver === "function" ? walk({ "": j }, "") : j } throw new SyntaxError("JSON.parse") } } }());

/* PLUGIN "NOSTRANI" PER JQUERY */
/* Plugin Autocomplete rivisitato con Jquery (nome in camelcase invece del suo nativo tutto minuscolo)*/
/* GESTIONE AUTOCOMPLETE OPTIONS
		selectable = boleano, se presente o meno la select nell'autocomplete
		clearable = boleano, se presente o meno la X di clear nell'autocomplete
		nRis = numero risultati da mostrare per volta
		beginning = pesca solo l'inizio delle parole
	*/
$.fn.autoComplete = function(elenco, params) {
    "use strict";
    var x, defaults, options;
    if (elenco) {
        defaults = {
            selectable: true,
            clearable: false,
            numResults: 10,
            minLength: 0,
            filter: 'all', // 'beginning', 'all' or function
            renderItem: null,
            renderMenu: null,
            resizeMenu: null
        };

        options = $.extend({}, defaults, params);
        // Filtra in base alla stringa di ricerca
        if (typeof options.filter === 'function') {
            this.autocomplete({
                source: options.filter,
                minLength: options.minLength
            });
        } else if (options.filter === 'beginning') {
            this.autocomplete({
                source: function(req, responseFn) {
                    var re, matcherIn, a;
                    re = $.ui.autocomplete.escapeRegex(req.term);
                    matcherIn = new RegExp('\\b' + re, 'i');
                    a = $.grep(elenco, function(value) {
                        return matcherIn.test(value);
                    });
                    responseFn(a);
                },
                minLength: Math.max(1, options.minLength)
            });

        } else {
            this.autocomplete({
                source: function(req, responseFn) {
                    var re, matcherIn, a;
                    re = $.ui.autocomplete.escapeRegex(req.term);
                    matcherIn = new RegExp(re, 'i');
                    a = $.grep(elenco, function(value) {
                        return matcherIn.test(value);
                    });
                    responseFn(a);
                },
                minLength: options.minLength
            });
        }
        // Classe per form vecchi
        if (this.parents(".form01").length) {
            this.autocomplete("widget").addClass("oldform");
        }
        // Personalizzazione con select
        if (options.selectable) {
            // Crea il pulsantino che emula la select 
            var sb = $("<a>").addClass("autoSelButt").append('<i class="icon icon-arrow_down">');
            this.after(sb);
            sb.click(function() {
                var acf = $(this).parent().find(".ui-autocomplete-input:first");
                if (acf.autocomplete("widget").css("display") === "none") {
                    acf.autocomplete("search", "");
                } else {
                    acf.autocomplete("close");
                }
            });
        }
        // Personalizzazione con tasto di clear
        if (options.clearable) {
            // Crea il pulsantino che emula la select 
            var sc = $("<a>").addClass("autoClearButt"),
                wrapperInput = $("<div>").addClass("autoClearWrapper esteso");
            this.wrap(wrapperInput);
            this.after(sc);
            sc.hide();
            this.keyup(function() {
                if ($(this).val() !== '') {
                    sc.show();
                    sc.closest('.autoClearWrapper').removeClass('esteso');
                } else {
                    sc.hide();
                    sc.closest('.autoClearWrapper').addClass('esteso');
                }
            });
            sc.click(function() {
                $(this).prev('input').val('');
                sc.closest('.autoClearWrapper').addClass('esteso');
                sc.hide();
            });

        }
        // Numero max elementi visibili
        if (options.numResults > 0) {
            var listaLi;
            this.autocomplete({
                open: function() {
                    listaLi = $(this).data("uiAutocomplete").menu.element.find('li');
                    if (listaLi.length > options.numResults) {
                        for (x = options.numResults; x < listaLi.length; x++) {
                            $(listaLi[x]).remove();
                        }
                    }
                }
            });
        }

        // Render e resize
        if (options.renderItem) {
            this.autocomplete().data("ui-autocomplete")._renderItem = options.renderItem;
        }
        if (options.renderMenu) {
            this.autocomplete().data("ui-autocomplete")._renderMenu = options.renderMenu;
        }
        if (options.resizeMenu) {
            this.autocomplete().data("ui-autocomplete")._resizeMenu = options.resizeMenu;
        }
        if (options.select) {
            this.autocomplete("option", "select", options.select);
        }
        if (options.close) {
            this.autocomplete("option", "close", options.close);
        }
    }
    return this;
};

//funzione di styling dell'autocomplete per evidenziare le lettere cercate
function stylingResults(ul, item) {
    "use strict";
    var resultItem,
        x = new RegExp('\\b' + $.ui.autocomplete.escapeRegex(this.term), 'ig');
    resultItem = item.label.replace(x, function(Match) {
        return '<strong>' + Match + '</strong>';
    });
    return $("<li></li>")
        .data("item.autocomplete", item)
        .append("<a class='autocomplete_link'>" + resultItem + "</a>")
        .appendTo(ul);
}

/* Verifica se il dispositivo � touchscreen */
var isTouch = ("ontouchstart" in document.documentElement);

/* Verifica se si � in librerie */
var isLib = (location.href.indexOf("//librerie") > 0) ? true : false;


/** * FUNZIONE CHECK E CONVERSIONE SOLO L' ID PER JQUERY SE NECESSARIO ** */
function jqc(element) {
    var returnVal = element;
    if (jQuery.type(element) === "string") {
        // Se non comincia con # o punto mette il #
        returnVal = (element.indexOf("#") !== 0) ? "#" + element : element;
    }
    return returnVal;
}

// FUNZIONI COMUNI //
/*** IE6-8 - Browser detection ***/
var isIE6 = ((typeof window.XMLHttpRequest === 'undefined') && (typeof ActiveXObject !== 'undefined')),
    isIE7 = (document.all && !document.querySelector),
    isIE8 = (document.all && document.querySelector && !document.addEventListener),
    ieVersion = (!!window.ActiveXObject && +(/msie\s(\d+)/i.exec(navigator.userAgent)[1])) || /*@cc_on!@*/ false || +(/Trident\/7.0; rv (11).0/i.exec(navigator.userAgent)) || NaN;
/*** |FINE| IE6-8 - Browser detection ***/

// Restituisce il nome della banca
function getBank() {
    var bankname = "";
    var bankNames = ["Bpm", "Bl", "Bm", "Webank"];
    for (x = 0; x < bankNames.length; x++) {
        if (location.href.replace("webank.local", "").indexOf(bankNames[x].toLowerCase()) >= 0) {
            bankname = (bankNames[x] !== "Webank") ? bankNames[x].toUpperCase() + " Banking" : bankNames[x];
        };
    }
    return bankname;
}

function ApriCartImpr(obj, esc) {
    var objEl = $(obj);
    var objImg = objEl.find('.bot:first');
    var objCartCont = objEl.closest('.cartcont');
    if (!objCartCont.length) { objCartCont = objEl.closest('.cartcontimg'); }
    var objText = objCartCont.find('.esteso:first');
    if (esc) // caso di accordion auto escudenti - non più d'uno aperto
    {
        var objCont = objEl.closest('.tipoc');
        var objEls = objCont.find('p.tit');
        var objText = objCartCont.find('.esteso:first');

        if (objImg[0].src.search('_off.gif') > 0) {
            for (i = 0; i <= objEls.length; i++) {
                var objImgs = objEls.find('.bot:first');
                var objTexts = objEls.closest('.cartcont').find('.esteso:first');

                $(objTexts).hide();
                $(objImgs).attr('src', $(objImgs).attr('src').replace('_on.gif', '_off.gif'));
                $(objText).show();
                $(objImg).attr('src', $(objImg).attr('src').replace('_off.gif', '_on.gif'));

            }
        } else { ApriCartImpr(obj) }
    } else { // caso di accordion NON auto escudenti - pi� d'uno aperto

        objText = objCartCont.find('.esteso');
        if (objImg[0].src.search('_off.gif') > 0) {
            objText.show();
            objImg.attr('src', objImg.attr('src').replace('_off.gif', '_on.gif'));
            $(objCartCont).addClass('on').removeClass('off');
        } else {
            objText.hide();
            objImg.attr('src', objImg.attr('src').replace('_on.gif', '_off.gif'));
            $(objCartCont).removeClass('on').addClass('off');
        }
    }
}

function activeNextAccBox(el) {
    var currAccBox = el.closest('.cartimpronta_lista');
    var nextAccBox = currAccBox.nextAll('.cartimpronta_lista').first();
    disableInput(currAccBox);

    // Chiudo il box corrente
    ApriCartImpr(currAccBox.find('p.tit:first'));
    if (nextAccBox) { activeAccBox(nextAccBox, true); }

}

function activeAccBox(accBox, open) {
    var accBoxTit = accBox.find('p.tit:first');

    // Se il box successivo � disabilitato
    if (accBox.hasClass('disabled')) {
        // Attivo il box successivo
        accBox.removeClass('disabled');
        accBoxTit.click(function(e) {
            ApriCartImpr(accBoxTit);
        }).css({
            cursor: 'pointer'
        })
    }

    // Se il box successivo � chiuso
    if (open && !accBox.find('.esteso:first').is(':visible')) {
        // Apro il box successivo
        ApriCartImpr(accBoxTit);
    }
}

function disableInput(container) {
    container = $(jqc(container));
    $("#" + container.attr('id') + " input:not([type=hidden])").prop('disabled', true);
}

function enableInput(container) {
    container = $(jqc(container));
    $("#" + container.attr('id') + " input:not([type=hidden])").prop('disabled', false);
    $("#" + container.attr('id') + " input:not([type=hidden])").prev('.hovfin').hide();
}

function disableForm(form) {
    var cartimprontaListaArr = $('.cartimpronta_lista');
    var cartimprontaListaArrNum = cartimprontaListaArr.length;
    disableInput(form);
    cartimprontaListaArr.each(function(index, item) {
        item = $(item);
        if (index === 0) activeAccBox(item, true);
        else activeAccBox(item, false);
    });
    activeBtn($('#questNext'), function() { document.simulazioneAlicoStep2.submit() });
}

// Attiva un pulsante e gli passa la funzione per l'onClick
function activeBtn(btn, func) {
    if (btn.hasClass('bottdis')) {
        var btnImgArr = btn.find('img');
        btnImgArr[0].src = '/img/ret/btn_left_ar.gif';
        btnImgArr[1].src = '/img/ret/btn_right_ar.gif';
        btn.removeClass('bottdis').find('a:first').click(func);
        btn.attr('title', '');
    }
}

// Attiva un pulsante e gli passa la funzione per l'onClick
function disactiveBtn(btn, title) {
    if (!btn.hasClass('bottdis')) {
        var btnImgArr = btn.find('img');
        btnImgArr[0].src = '/img/ret/btndis_left.gif';
        btnImgArr[1].src = '/img/ret/btndis_right.gif';
        btn.addClass('bottdis').find('a:first').off('click');
        btn.attr('title', title);
    }
}

function setpositionx(obj, x) {
    obj.style.left = Math.round(($(window).width() - 980) / 2) + x + 'px';
}

function vedi(ID) {
    document.getElementById(ID).src = '/img/ret/lampa_off.gif';
}

function nascondi(ID) {
    document.getElementById(ID).src = '/img/ret/lampa_on.gif';
}

function stopticker() {
    window.clearInterval(intervalticker);
}

function moveticker() {
    obj = $('#ticker')[0].firstChild.firstChild;
    obj.style.left = (parseInt(obj.style.left) - 2) + 'px';
    if (parseInt(obj.style.left) < (0 - $(obj.firstChild).width())) {
        obj.appendChild(obj.firstChild);
        obj.style.left = '0';
    }
}

function startticker() {
    intervalticker = window.setInterval(moveticker, 70);
}

function ticker(content) {
    var tic = $('#ticker');
    var t = document.createElement("div");
    t.className = 'tickercontainer';
    var div = document.createElement("div");
    div.className = 'tickermove';
    div.style.position = 'absolute';
    tic.appendChild(t);
    tic.firstChild.appendChild(div);
    div.innerHTML = content;
    to = tic.width() / div.width();
    for (i = 0; i < to; i++) {
        div.innerHTML = div.innerHTML + content;
    }
    div.style.left = '270px';
    startticker();
}

function chiudi() {
    parent.top.location.href = cgi_script + '/wbOnetoone/chiudi_servizio.jsp';
}

// --------- Framework per overlayer e alert ------------//
// Rileva il massimo z-index in tutto il documento corrente
function getNextHighestZindex() {
    var highestIndex = 0;
    $("div").each(function() {
        zInd = (this.style.zIndex) ? parseFloat(this.style.zIndex) : parseFloat($(this).css("z-index"));
        if (!isNaN(zInd) && zInd > highestIndex && zInd < 16777271) {
            highestIndex = zInd;
        }
    });
    return (highestIndex + 1);
}

var winW = 630,
    winH = 460;

// oscura tutto
function obscurateAll(opacitylevel) {
    // controlla che tutto non sia gia'oscurato da qualcosa
    if (!$('#layerpop').length) {
        layerpop = $('<DIV>').attr("id", "layerpop");
        $("body").append(layerpop);
        if ($('#overlayerLight').length) { $('#layerpop').attr("class", "overlayerchiaro") }
        layerpop.css({ "height": $(window).height() + 'px', "margin-top": $(window).scrollTop() + 'px', "z-index": getNextHighestZindex() });
        if (opacitylevel) layerpop.css({ "opacity": opacitylevel / 10, "filter": 'alpha(opacity=' + opacitylevel * 10 + ')' });
        obscuratescroll = function() { layerpop.css("margin-top", $(window).scrollTop() + "px") };
        obscurateresize = function() { layerpop.css("height", $(window).height() + "px") };
        $(window).on("resize", obscurateresize);
        $(window).on("scroll", obscuratescroll);
    }
}

function unobscurateAll() {

    if (window.obscurateresize) $(window).off("resize", obscurateresize);
    if (window.obscuratescroll) $(window).off("scroll", obscuratescroll);
    if (layerpop) layerpop.remove();
}

// funzione che rende invisibili le tendine tranne quelle contenute nel div che risulta essere attivo (e nei suoi figli)
/* DA DISMETTERE CON L'ESCLUSIONE DI IE6 */
function arrangeSelect(idElement) {
    if ($.browser.msie && parseInt($.browser.version, 10) < 7) {
        $("select").css("visibility", "hidden")
        if (idElement) $(jqc(idElement)).find("select").css("visibility", "visible");
    }
}

// Nuovo overlay con pulsante tondo per chiusura
function openNewOverlay(content, mode, closeFunc) {
    var overlayWrap, overlayBox, overlayClose,
        overlay = $('#newOverlay');
    if (overlay.length) {
        closeNewOverlay(closeFunc);
    }
    overlayWrap = $('<div id="newOverlayWrap"></div>');
    overlayBox = $('<div id="newOverlayBox"></div>');
    overlayClose = $('<div id="newOverlayClose"></div>').click(function() { closeNewOverlay(closeFunc); });
    overlay = $('<div id="newOverlay"></div>');
    $('body').append(overlayWrap);
    overlayWrap.append(overlayBox);
    overlayBox.append(overlayClose);
    overlayBox.append(overlay);
    if (mode === 'fixed') {
        overlayWrap.addClass('fixed');
    }
    overlay.append($(content).detach().show());
    openPopOverLayer('#newOverlayWrap', mode);
}

function closeNewOverlay(closeFunc) {
    var content = $('#newOverlay').children().first().detach().hide();
    if (typeof closeFunc === 'function') {
        closeFunc();
    }
    $('body').append(content);
    closePopOverLayer('#newOverlayWrap');
    $('#newOverlayWrap').remove();
}

// funzione che apre un popup con overlayer
// mode = 'fixed' overlayer con margin-top fisso da css
// mode = 'floating' overlayer sempre centrato nella pagina
function openPopOverLayer(idElement, mode, opacitylevel) {
    var closeImg;
    obscurateAll(opacitylevel);
    openAlert(idElement, mode);
    $(jqc(idElement)).find(".handle img").click(function() {
        unobscurateAll();
    });
}

// chiude l'overlayer + l'oscuratore
function closePopOverLayer(idElement) {
    closeAlert(idElement);
    unobscurateAll();
}

// apre una popup fissa da css o style nella pagina
// elemento ancora opzionale e serve per agganciare il layer ad un altro elemento di qualsiasi natura (i parametri TOP e LEFT sono configurabili nello
// stile per posizionare l'elemento rispetto a questo)
function openFixedAlert(idElement, anchorElement) {
    openAlert(idElement, "fixed", anchorElement);
}

// apre una popup sempre centrata nella pagina
function openAlert(idElement, mode, anchorElement) {
    idOl = jqc(idElement);
    var overlayer = $(idOl),
        // Detect handle draggable
        overdrag = overlayer.find(".handle"),
        overflow = overlayer.find('.overflow'),
        overClose = overlayer.find('.close'),
        //heightLimit = Math.round($(window).height() * 0.6666666667);
        heightLimit = $(window).height();
    if (!(overlayer.is($("body > header")))) {
        //$("body > div:first-child").before(overlayer);
        $("body").prepend(overlayer);
    }
    /*if (!(overlayer.is($("body > div:first-child")))) {
    	//$("body > div:first-child").before(overlayer);
    	$("body > div:first-child").before(overlayer);
    }*/
    // Resetta top e left
    overlayer.css({ "margin-top": 0, "margin-left": 0, "left": 0, "top": 0 })
    overlayer.show();

    // Close button
    if (overClose.length) {
        overClose.click(function() { closePopOverLayer(idOl); });
    }

    // FIX PER DRAGGABLE PROTOTYPE DA DISMETTERE
    if (overdrag.length) {
        if (overdrag.attr("onmouseover")) {
            if (overdrag.attr("onmouseover").indexOf("Draggable") > 0) {
                overdrag.attr("onmouseover", "");
            }
        }
        overdrag.css("cursor", "move");
        overdrag.off('mousedown').mousedown(ttHide);
        overlayer.draggable({ handle: ".handle", scroll: "window" });
    }

    // Toglie il wrapper "overflow" prima di calcolare l'altezza dell'overlayer
    if (overflow.length) {
        overlayer.find('.tithelp:first').unwrap();
    }

    // Quando l'altezza del layer e' > di quella della finestra,
    // fissa altezza max dell'overlayer in percentuale della risoluzione dello schermo, usando il wrapper "overflow"

    if (overlayer.outerHeight() > heightLimit) {

        if (overlayer.find('.overflow').length == 0) {

            overlayer.find('.body').wrapInner('<div class="overflow" />');
            overlayer.find('.overflow').css({
                'height': (heightLimit - 50) + 'px',
                'overflow-y': 'auto',
                'width': '100%'
            });
        }
    }

    if (anchorElement) {
        idAnchorElement = jqc(anchorElement);
        anchoralertresize = new Function("$('" + idOl + "').css({'margin-left': $('" + idAnchorElement + "').offset().left + 'px', 'margin-top': $('" + idAnchorElement + "').offset().top + 'px'})");
        $(window).on("resize", anchoralertresize);
        anchoralertresize();
    } else if (mode === "fixed" || (overlayer.height() > $(window).height())) {
        fixedalertresize = new Function("$('" + idOl + "').css({'margin-left': Math.round(($(window).width() - $('" + idOl + "').width())/2) + 'px'})");
        $(window).on("resize", fixedalertresize);
        fixedalertresize();
    } else {
        tooltipscroll = function() {
            if ($('#ttBox').length > 0 && $('#ttBox').is(':visible') && $(idOl).is(':visible')) {
                ttHide();
            }
        }
        alertresize = new Function("$('" + idOl + "').css({'margin-left': Math.round(($(window).width() - $('" + idOl + "').width())/2) + 'px', 'margin-top': $(window).scrollTop() + Math.round(($(window).height() - $('" + idOl + "').height())/2) + 'px'})");
        alertscroll = new Function("$('" + idOl + "').css({'margin-top': $(window).scrollTop() + Math.round(($(window).height() - $('" + idOl + "').height())/2) + 'px'})");
        $(window).on("resize", alertresize);
        $(window).on("scroll", alertscroll);
        $(window).on("scroll", tooltipscroll);
        alertresize();
    }


    /* Se l'overlay e' fuori dallo schermo , scolla fino al suo top */
    if (overlayer.offset().top < $(document).scrollTop()) $(document).scrollTop(overlayer.offset().top);

    arrangeSelect(idElement);
    overlayer.css("z-index", getNextHighestZindex());
    /* Fine openalert */
    ttSet(overlayer);
}

// chiude un alert qualsiasi (occorre indicarlo se esiste un overlayer o un padre altrimenti si puo' omettere e saranno riabilitate tutte le select
// nella pagina)
function closeAlert(idElement, idFather) {

    idElement = jqc(idElement);
    if ($(idElement).length) {
        /* Rimuove tutti gli eventi */
        if (window.alertscroll) $(window).off("scroll", alertscroll);
        if (window.alertresize) $(window).off("resize", alertresize);
        if (window.fixedalertresize) $(window).off("resize", fixedalertresize);
        if (window.anchoralertresize) $(window).off("resize", anchoralertresize)
        ttHide();
        $(idElement).hide();
        arrangeSelect(idFather)
    }
}

// chiude tutti gli alert aperti
function closeAllAlert() {
    $(".layeralert").hide();
}

function focusPrint(divId) {
    divId = jqc(divId);
    // appende a tutti gli elementi la classe "noprint"
    $("body div").addClass("noprint");
    // toglie la classe di "non stampa" da id e "sottoelementi"
    $(divId).removeClass("noprint");
    $(divId).find("div").removeClass("noprint");
}

function unFocusPrint() {
    $("div").removeClass("noprint");
}


/* apertura ol di loading */
function openLoading(clickfunction) {
    if (!$("#loadinglayer").length) {
        outclickfunction = (clickfunction) ? '<div class="outclickfunction"><a href=\"javascript:;\" onclick=\"' + clickfunction + ';closeLoading();\" id=\"loadinglayerbutton\" title=\"Annulla\">&nbsp;</a></div>' : "";
        var loadinglayer = $("<div />").html("<div class=\"top\">" + outclickfunction + "</div><div class=\"message\"><p>Caricamento in corso...</p><img src=\"/img/ret/loading.gif\"></div><div class=\"bottom\"></div>").addClass("loadinglayer").attr("id", "loadinglayer");
        $("body").prepend(loadinglayer);
        obscurateAll(3);
        openAlert("#loadinglayer");
    }
}

function closeLoading() {
    if ($("#loadinglayer").length) {
        unobscurateAll();
        closeAlert("loadinglayer");
        $("#loadinglayer").remove();
    }
}


// * ----- UTILITIES tratto da "black" */

function MM_findObj(n, d) {
    var p, i, x;
    if (!d) d = document;
    if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
        d = parent.frames[n.substring(p + 1)].document;
        n = n.substring(0, p);
    }
    if (!(x = d[n]) && d.all) x = d.all[n];
    for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
    for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
    if (!x && document.getElementById) x = document.getElementById(n);
    return x;
}

function MM_showHideLayers() {
    var i, p, v, obj, args = MM_showHideLayers.arguments;
    for (i = 0; i < (args.length - 2); i += 3)
        if ((obj = MM_findObj(args[i])) !== null) {
            v = args[i + 2];
            if (obj.style) { obj = obj.style;
                v = (v === 'show') ? 'visible' : (v = 'hide') ? 'hidden' : v; }
            obj.visibility = v;
        }
}
/* Box News */
function MM_showBoxNews(obj) {
    obj = obj + 'esteso';
    obj = MM_findObj(obj);
    if (obj.parentNode.parentNode.className.match('_aperto'))
        obj.parentNode.parentNode.className = obj.parentNode.parentNode.className.substr(0, (obj.parentNode.parentNode.className.length) - 7);
    else
        obj.parentNode.parentNode.className = obj.parentNode.parentNode.className + '_aperto';
}

/* Switch tab */
function showBox1Tab1() {
    MM_showHideLayers('box1ctntab1', '', 'show');
    MM_showHideLayers('box1ctntab2', '', 'hide');
    MM_showHideLayers('box1ctntab3', '', 'hide');
    $("#box1tab1").className = 'on first';
    $("#box1tab2").className = 'off';
    $("#box1tab3").className = 'off last';
}

function showBox1Tab2() {
    MM_showHideLayers('box1ctntab2', '', 'show');
    MM_showHideLayers('box1ctntab1', '', 'hide');
    MM_showHideLayers('box1ctntab3', '', 'hide');
    $("#box1tab1").className = 'off first';
    $("#box1tab2").className = 'on';
    $("#box1tab3").className = 'off last';
}

function showBox1Tab3() {
    MM_showHideLayers('box1ctntab3', '', 'show');
    MM_showHideLayers('box1ctntab1', '', 'hide');
    MM_showHideLayers('box1ctntab2', '', 'hide');
    $("#box1tab1").className = 'off first';
    $("#box1tab2").className = 'off';
    $("#box1tab3").className = 'on last';
}

// NUOVA FUNZIONE SHOWBOX3TAB
function showBox3Tab(tabid) {
    for (var i = 1; i <= 5; i++) {
        if (document.getElementById('conto' + i)) {
            $('#conto' + i).hide();
            $('#box3tab' + i).className = '';
        }
    }
    $('#conto' + tabid).show();
    $('#box3tab' + tabid).className = 'active';
}


// FUNZIONI OBSOLETE

function showBox3Tab1() {
    MM_showHideLayers('boxcellctntab1', '', 'show');
    MM_showHideLayers('boxcellctntab2', '', 'hide');
    MM_showHideLayers('boxcellctntab3', '', 'hide');
    $("#box3tab1").className = 'att';
    $("#box3tab2").className = 'off';
    $("#box3tab3").className = 'off';
    $('#box3tab1')[0].style.zIndex = 4;
    $('#box3tab2')[0].style.zIndex = 2;
    $('#box3tab3')[0].style.zIndex = 1;
}

function showBox3Tab2() {
    MM_showHideLayers('boxcellctntab2', '', 'show');
    MM_showHideLayers('boxcellctntab1', '', 'hide');
    MM_showHideLayers('boxcellctntab3', '', 'hide');
    $("#box3tab1").className = 'off';
    $("#box3tab2").className = 'att';
    $("#box3tab3").className = 'off';
    $('#box3tab2')[0].style.zIndex = 4;
    $('#box3tab1')[0].style.zIndex = 2;
    $('#box3tab3')[0].style.zIndex = 1;
}

function showBox3Tab3() {
    MM_showHideLayers('boxcellctntab3', '', 'show');
    MM_showHideLayers('boxcellctntab1', '', 'hide');
    MM_showHideLayers('boxcellctntab2', '', 'hide');
    $("#box3tab1").className = 'off';
    $("#box3tab2").className = 'off';
    $("#box3tab3").className = 'att';
    $('#box3tab3')[0].style.zIndex = 4;
    $('#box3tab2')[0].style.zIndex = 1;
    $('#box3tab1')[0].style.zIndex = 2;
}

function showBox4Tab1() {
    MM_showHideLayers('box4ctntab1', '', 'show');
    MM_showHideLayers('box4ctntab2', '', 'hide');
    MM_showHideLayers('box4ctntab3', '', 'hide');
    $("#box4tab1").className = 'on first';
    $("#box4tab2").className = 'off';
    $("#box4tab3").className = 'off last';
}

function showBox4Tab2() {
    MM_showHideLayers('box4ctntab2', '', 'show');
    MM_showHideLayers('box4ctntab1', '', 'hide');
    MM_showHideLayers('box4ctntab3', '', 'hide');
    $("#box4tab1").className = 'off first';
    $("#box4tab2").className = 'on';
    $("#box4tab3").className = 'off last';
}

function showBox4Tab3() {
    MM_showHideLayers('box4ctntab3', '', 'show');
    MM_showHideLayers('box4ctntab1', '', 'hide');
    MM_showHideLayers('box4ctntab2', '', 'hide');
    $("#box4tab1").className = 'off first';
    $("#box4tab2").className = 'off';
    $("#box4tab3").className = 'on last';
}

function showEdit(num) {
    MM_showHideLayers('edit' + num, '', 'show');
    obj = $('#funz' + num);
    if (obj) {
        obj.style.backgroundColor = '#dce7b5';
        obj.style.color = '#666';
        // obj.style.backgroundImage='url(/img/ret/bullet2.gif)';
    }
}

function hideEdit(num) {
    MM_showHideLayers('edit' + num, '', 'hide');
    obj = $('#funz' + num);
    if (obj) {
        obj.style.backgroundColor = 'transparent';
        obj.style.color = '#666';
        // obj.style.backgroundImage='url(/img/ret/bullet1.gif)';
    }
}


function hideAll(livello) {
    var tutti = 4;

    for (i = 1; i < tutti; i++) {
        // alert($("#level"+i)[0].style.display);
        if (livello !== 'level1_' + i) {
            $("#level1_" + i)[0].style.display = "none";
        }
    }
}

// tab programma sicurezza

function showTab1progrsic() {
    MM_showHideLayers('boxprogrsic1', '', 'show');
    MM_showHideLayers('boxprogrsic2', '', 'hide');

}

function showTab2progrsic() {
    MM_showHideLayers('boxprogrsic1', '', 'hide');
    MM_showHideLayers('boxprogrsic2', '', 'show');
}

function addEvent(o, n, h) {
    $(o).on(n, h);

}

function removeEvent(o, n, h) {
    $(o).off(n, h);
}


/* Menu */
function chiudimenu(ID) {
    var uls = document.getElementsByTagName("ul");
    for (i = 0; i < uls.length; i++) {
        if (uls[i].parentNode.parentNode.attr("id") === "menulevel" + (ID - 1)) {
            if (uls[i].attr("class") === "menulevel" + ID) uls[i].style.display = "none";
            if (uls[i].attr("id") && uls[i].attr("id").search("submenu-") !== -1) uls[i].style.display = "none";
        }
    }

}

function mmenu(ID) {
    var menu = document.getElementById(ID);
    var display = menu.style.display;
    menu.style.display = (display === "block") ? "none" : "block";
    document.getElementById(ID).className = 'current_aperto';
    var uls = document.getElementsByTagName("a");
    for (i = 0; i < uls.length; i++) {
        if (uls[i].className === 'padre_aperto') {
            uls[i].className = 'padre';
        }
    }
    document.getElementById(ID + "link").className = 'padre_aperto';

}

/* Toolbox */
function chiudiboxtools() {
    for (i = 1; i < 10; i++) {
        $('#boxtools' + i).hide();
        $('#imgboxtools' + i).src = '/img/ret/boxtools' + i + '.gif';
    }
}

function apriboxtools(n) {
    $('#boxtools' + n).show();
    $('#imgboxtools' + n).src = '/img/ret/boxtools' + n + 'on.gif';
}

function boxtools(n) {
    if ($('#boxtools' + n)[0].style.display !== 'block') {
        chiudiboxtools();
        apriboxtools(n);

    } else {
        chiudiboxtools();
    }
}

/* Ajax */
function getAjaxRequest() {
    var ajax_request;

    if (window.ActiveXObject) {
        var mSoftVersions = [
            'MSXML2.DOMDocument.5.0', 'MSXML2.DOMDocument.4.0',
            'MSXML2.DOMDocument.3.0', 'MSXML2.DOMDocument.2.0',
            'MSXML2.DOMDocument', 'Microsoft.XmlDom',
            'Msxml2.XMLHTTP', 'Microsoft.XMLHTTP'
        ];

        for (i = 0; i < mSoftVersions.length; i++) {
            try {
                ajax_request = new ActiveXObject(mSoftVersions[i]);
            } catch (e) {}
        }
    } else if (!ajax_request &&
        typeof XMLHttpRequest !== 'undefined') {
        try {
            ajax_request = new XMLHttpRequest;
        } catch (e) {}
    } else if (!ajax_request &&
        window.createRequest) {
        try {
            ajax_request = window.createRequest;
        } catch (e) {}
    } else
        ajax_request = false;

    return ajax_request;
}

function setStatus(xml, _divId, _htmlCode) {
    if (xml !== null) {
        if (xml.readyState === 4) {
            if (xml.status === 200) {
                var d = _divId !== null ? document.getElementById(_divId) : null;
                if (d !== null) d.innerHTML = xml.responseText;
            } else
                alert("Errore durante l'invio dei dati: " + xml.statusText);
        }
    } else {
        var d = _divId !== null ? document.getElementById(_divId) : null;
        if (d !== null) d.innerHTML = _htmlCode;
    }
}

function sendRequest(_divId, _sendTo, _params, _stateFunction, _waitHtml) {
    var myReq = getAjaxRequest();
    sendRequestxx(_divId, _sendTo, _params, _stateFunction, _waitHtml, myReq);

}

function sendRequestxx(_divId, _sendTo, _params, _stateFunction, _waitHtml, xml) {

    // default
    if (_stateFunction === null)
        _stateFunction = function() { setStatus(xml, _divId, null); };

    if (!xml) {
        alert('Funzione non supportata.');
        return false;
    }

    if (_sendTo.length > 0) {
        // Chiamata asincrona
        xml.open('POST', cgi_script + _sendTo, true);
        xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xml.onreadystatechange = _stateFunction;
        setStatus(null, _divId, _waitHtml);
        xml.send(_params);
    }
}
var tWinres;

function setWindowSize() {
    // var w = window.innerWidth;
    var w = document.body.clientWidth + 21;
    if (tWinres !== null) clearTimeout(tWinres);
    tWinres = setTimeout("sendRequest('', '/wbOnetoone/wbx/jsp/setWinSize.jsp', 'screenWdt=' + " + w + " , myVoid, '')", 500);
}

function myVoid() {}

function caricaCalendario(param) {
    var myReq = getAjaxRequest();
    sendRequestxx('', '/wbOnetoone/wbx/commons/calendarioScadenzeAjax.jsp', param, function() { cambiaHTMLcalendario(myReq) }, '', myReq);
}

function cambiaHTMLcalendario(pippo) {
    if (pippo !== null) {
        if (pippo.readyState === 4) {
            if (pippo.status === 200) {

                cambiaHTMLAgenda(pippo.responseXML);
            } else
                alert("Errore durante l'invio dei dati: " + pippo.statusText);
        }
    }
}


function cambiaHTMLAgenda(xml) {

    var xmlGiorni = xml.getElementsByTagName('giorni')[0];
    // alert('il doc e:' + xmlGiorni.childNodes);
    // alert('mese:' + xml.getElementsByTagName('mese')[0].firstChild.nodeValue);
    $("#mese_scadenze").innerHTML = xml.getElementsByTagName('mese')[0].firstChild.nodeValue;
    $("#mese_hidden_scadenze")[0].value = xml.getElementsByTagName('mese_hidden')[0].firstChild.nodeValue;
    $("#anno_hidden_scadenze")[0].value = xml.getElementsByTagName('anno_hidden')[0].firstChild.nodeValue;
    $("#ultimaRiga").hide();
    var contatoreUltimaRiga = false;
    var delta = 0;
    if (window.ActiveXObject) {
        delta = 1;
    }
    for (var i = 1; i < xmlGiorni.childNodes.length - 1; i++) {
        try {
            var td = $("#cella_scandenza_" + i);
            var giornoxml = xmlGiorni.childNodes[i - delta];
            if (giornoxml.getElementsByTagName('day')[0] !== null) {
                // alert(xmlGiorni.childNodes[i].getElementsByTagName('day')[0].firstChild.nodeValue);
                // alert(i);
                var dayMonth = giornoxml.getElementsByTagName('day')[0].firstChild.nodeValue;

                var t = giornoxml.getElementsByTagName('testo')[0];

                // alert(dayMonth);
                if (t !== null && t.firstChild !== null) {
                    var testo = t.firstChild.nodeValue;
                    td.className = "scadenza";
                    addEvent(td, 'mouseover', showAletText);
                    addEvent(td, 'mouseout', hideAlertText);
                    td.innerHTML = dayMonth + '<span class="bpop">' + testo + '</span>';
                    // alert(testo);
                    // alert(td.innerHTML);
                } else {
                    td.className = "";
                    removeEvent(td, 'mouseover', showAletText);
                    removeEvent(td, 'mouseout', hideAlertText);
                    td.innerHTML = dayMonth;
                }
                // alert(td.innerHTML);
                // break;
                if (i > 35 && !contatoreUltimaRiga) {
                    // alert('dentro');
                    contatoreUltimaRiga = true;
                }

            } else {
                td.className = "";
                td.innerHTML = '';
            }


        } catch (e) {
            // alert(e);
        }
    }
    // alert(contatoreUltimaRiga);
    if (contatoreUltimaRiga)
        $("#ultimaRiga").show();

}

function showAletText(evnt) {
    var td = null;
    if (this.id) {
        td = this;
    } else {
        td = evnt.srcElement;
    }
    var pos = td.id;
    pos = pos.substring(pos.lastIndexOf('_') + 1, pos.length);
    var modPos = pos % 7;
    if (modPos < 3 && modPos > 0)
        td.firstChild.nextSibling.className = 'bpopon';
    else if (modPos >= 3 && modPos < 5)
        td.firstChild.nextSibling.className = 'bpopon2';
    else
        td.firstChild.nextSibling.className = 'bpopon3';
}

function hideAlertText(evnt) {
    var td = null;
    if (this.id) {
        td = this;
    } else {
        td = evnt.srcElement;
    }
    td.firstChild.nextSibling.className = 'bpop';
}

function aggiornaCalendario(aggiorna) {
    var meseHidden = parseFloat($("#mese_hidden_scadenze").value);
    meseHidden += parseFloat(aggiorna);
    var annoHidden = parseFloat($("#anno_hidden_scadenze").value);
    caricaCalendario("mese=" + meseHidden + "&anno=" + annoHidden);
}

function callCompravendita(isin, mercato, valuta) {
    var mer = "";
    var divisa = "";
    var searchAction = "";
    var searchParam = "";
    var isWebank = cgi_script === '/webankpri';
    var navParam = '?tabId=nav_priv_wbx_trading&OBSKEY=nav_priv_wbx_inserim_ordini';
    if (mercato === 'otc') {
        searchAction = '/2l/do/otc/quickSearch.do';
        searchParam = '&PF=N&type=simple&tipoTitolo=1&descrizione=';
        mer = 'EM|OOTC';
    } else if (mercato === 'FNDB') {
    	navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto';
		searchAction ='/2l/action/investimenti/BuyFundSelect.action';
		searchParam='&codIsin=' + isin ;
		mer = 'IT|F1';
		divisa = "&divisa=" + valuta;
    } else if (mercato === 'FNDS') {
        navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita'
        searchAction = '/2l/do/FMP/researchFundMS.do';
        searchParam = '&codIsin=' + isin;
        mer = 'morningStar';
        divisa = "&divisa=" + valuta;
    } else if (mercato === 'topPicks') {
    	navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto';
		searchAction ='/2l/action/investimenti/BuyFundSelect.action';
		searchParam='&codIsin=' + isin ;
		mer = 'topPicks';
		divisa = "&divisa=" + valuta;
    } else if (mercato === 'ETF' && isWebank) {
        searchAction = '/2l/do/FMP/insertOrderFinanceWT.do';
        searchParam = '&method=index&titolo=' + isin;
        mer = 'MI|EQCON|E';
        navParam = '?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_inseri_ordini_wt';
    } else if (mercato === 'ETF' && !isWebank) {
        searchAction = '/2l/do/FMP/RicercaSemplice.do';
        searchParam = '&tipoDescrizione=ISIN&descrizione=' + isin;
        mer = 'IT|F1';
    } else {
        searchAction = '/2l/do/FMP/RicercaSemplice.do';
        searchParam = '&tipoDescrizione=ISIN&descrizione=' + isin;
        mer = 'IT|' + mercato;
    }
    var hrefValue = cgi_protocol + cgi_host + cgi_script + '/wbOnetoone' + searchAction + navParam + searchParam + '&mercato=' + mer + divisa;


    top.document.location.href = hrefValue;

}

function callCompravenditaFondi(isin, mercato, agenzia, deposito, sottodeposito) {
    var mer = "";
    var searchAction = "";
    var searchParam = "";
    var navParam = '?tabId=nav_priv_wbx_trading&OBSKEY=nav_priv_wbx_inserim_ordini';
    var depositoCompleto = agenzia + '/' + deposito + '/' + sottodeposito;

    if (mercato === 'FNDB') {
    	navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto';
		searchAction ='/2l/action/investimenti/BuyFundSelect.action';
		searchParam='&codIsin=' + isin + '&deposito=' + depositoCompleto;
		mer = 'IT|F1';
    } else if (mercato === 'FNDS') {
        navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita'
        searchAction = '/2l/do/FMP/researchFundMS.do';
        searchParam = '&codIsin=' + isin + '&deposito=' + depositoCompleto;
        mer = 'morningStar';
    } else {
        searchAction = '/2l/do/FMP/RicercaSemplice.do';
        searchParam = '&tipoDescrizione=ISIN&descrizione=' + isin;
        mer = 'IT|' + mercato;
    }
    var hrefValue = cgi_protocol + cgi_host + cgi_script + '/wbOnetoone' + searchAction + navParam + searchParam + '&portafoglio=true';

    top.document.location.href = hrefValue;
}

function callSwitch(isin, agenzia, deposito, sottodeposito) {
	var searchAction ='/2l/action/investimenti/SwitchFundSelect.action';
	var searchParam = '&deposito=' + agenzia +'/' + deposito+'/' + sottodeposito + '&codIsin=' +isin;
	var navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch';
	var hrefValue = cgi_protocol + cgi_host + cgi_script +  '/wbOnetoone' + searchAction + navParam + searchParam + '&mercato=portafoglio&type=switch';
	top.document.location.href = hrefValue;
}

function callVendi(isin, agenzia, deposito, sottodeposito) {
	var searchAction ='/2l/action/investimenti/SellFundSelect.action';
	var searchParam = '&deposito=' + agenzia +'/' + deposito+'/' + sottodeposito + '&codIsin=' +isin;
	var navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita';	
	var hrefValue = cgi_protocol + cgi_host + cgi_script +  '/wbOnetoone' + searchAction + navParam + searchParam + '&mercato=portafoglio&type=sell' ;
	top.document.location.href = hrefValue;
}

function callSituazionePAC(agenzia, deposito, sottodeposito) {
	var searchAction ='/2l/action/investimenti/SituazionePac.action';
	var searchParam = '&deposito=' + agenzia +'/' + deposito+'/' + sottodeposito;
	var navParam = '?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_sitauz_pac';
	var hrefValue = cgi_protocol + cgi_host + cgi_script +  '/wbOnetoone' + searchAction + navParam + searchParam + '&portafoglio=true';
	top.document.location.href = hrefValue;
}

function openLingubot() {
    if ($('#ctntools') === null) {
        window.open(cgi_protocol + cgi_host + cgi_script + '/wbOnetoone/popup/Toolbox.do?tabId=' + tabId + '&OBSKEY=' + obsKey + '&toolOpen=boxtools9', 'toolBox', 'width=215,height=550,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes,top=190,left=750');
    } else {
        boxtools(9)
    }
}
/* mutui 13-03-08 */
function mutui_acc(n, nid) {
    for (i = 1; i <= n; i++) {
        $('#pulitem' + i).className = $('#pulitem' + i).className.replace('_on', '_off');
        $('#item' + i).className = $('#item' + i).className.replace('_on', '_off');
    }
    $('#pulitem' + nid).className = $('#pulitem' + nid).className.replace('_off', '_on');
    $('#item' + nid).className = $('#item' + nid).className.replace('_off', '_on');
}

/* Gestione spostamento cursore data nascita e pin2 (FS 29/04/2008) */
function spostaFocus(obj, bkObj, next, length) {
    if (obj.value.length === length ) {
        if (typeof bkObj == "undefined") {
            next.focus();
        }
        else {
            if (obj.value !== bkObj.value) {
            next.focus();
            }
        }
    }
}


function vedi(ID) {
    document.getElementById(ID).src = '/img/ret/lampa_off.gif';
}

function nascondi(ID) {
    document.getElementById(ID).src = '/img/ret/lampa_on.gif';
}

function vedi2(ID) {
    document.getElementById(ID).src = '/img/ret/mostra_cor.gif';
}

function nascondi2(ID) {
    document.getElementById(ID).src = '/img/ret/mostra_cor_on.gif';
}
// tab grafico

function showTab1Grafico() {
    $("#box1imggrafico").src = '/img/ret/otc_flusso.gif';
    $("#box1grafico").className = 'on';
    $("#box2grafico").className = 'off';
    $("#box3grafico").className = 'off';
    $("#box4grafico").className = 'off last';
}

function showTab2Grafico() {
    $("#box1imggrafico").src = '/img/ret/otc_flusso2.gif';
    $("#box1grafico").className = 'off';
    $("#box2grafico").className = 'on';
    $("#box3grafico").className = 'off';
    $("#box4grafico").className = 'off last';
}

function showTab3Grafico() {
    $("#box1imggrafico").src = '/img/ret/otc_flusso3.gif';
    $("#box1grafico").className = 'off';
    $("#box2grafico").className = 'off';
    $("#box3grafico").className = 'on';
    $("#box4grafico").className = 'off last';
}

function showTab4Grafico() {
    $("#box1imggrafico").src = '/img/ret/otc_flusso4.gif';
    $("#box1grafico").className = 'off';
    $("#box2grafico").className = 'off';
    $("#box3grafico").className = 'off';
    $("#box4grafico").className = 'on last';
}


// tab grafico2

function showTab1Graficob() {
    $("#box1imggraficob").src = '/img/ret/otc_flussob.gif';
    $("#box1graficob").className = 'on';
    $("#box2graficob").className = 'off';
    $("#box3graficob").className = 'off';
    $("#box4graficob").className = 'off last';
}

function showTab2Graficob() {
    $("#box1imggraficob").src = '/img/ret/otc_flussob2.gif';
    $("#box1graficob").className = 'off';
    $("#box2graficob").className = 'on';
    $("#box3graficob").className = 'off';
    $("#box4graficob").className = 'off last';
}

function showTab3Graficob() {
    $("#box1imggraficob").src = '/img/ret/otc_flussob3.gif';
    $("#box1graficob").className = 'off';
    $("#box2graficob").className = 'off';
    $("#box3graficob").className = 'on';
    $("#box4graficob").className = 'off last';
}

function showTab4Graficob() {
    $("#box1imggraficob").src = '/img/ret/otc_flussob4.gif';
    $("#box1graficob").className = 'off';
    $("#box2graficob").className = 'off';
    $("#box3graficob").className = 'off';
    $("#box4graficob").className = 'on last';
}


// tab grafico2

function showTab1Graficoc() {
    $("#box1imggraficoc").src = '/img/ret/otc_flussoc.gif';
    $("#box1graficoc").className = 'on';
    $("#box2graficoc").className = 'off';
    $("#box3graficoc").className = 'off';
    $("#box4graficoc").className = 'off last';
}

function showTab2Graficoc() {
    $("#box1imggraficoc").src = '/img/ret/otc_flussoc2.gif';
    $("#box1graficoc").className = 'off';
    $("#box2graficoc").className = 'on';
    $("#box3graficoc").className = 'off';
    $("#box4graficoc").className = 'off last';
}

function showTab3Graficoc() {
    $("#box1imggraficoc").src = '/img/ret/otc_flussoc3.gif';
    $("#box1graficoc").className = 'off';
    $("#box2graficoc").className = 'off';
    $("#box3graficoc").className = 'on';
    $("#box4graficoc").className = 'off last';
}

function showTab4Graficoc() {
    $("#box1imggraficoc").src = '/img/ret/otc_flussoc4.gif';
    $("#box1graficoc").className = 'off';
    $("#box2graficoc").className = 'off';
    $("#box3graficoc").className = 'off';
    $("#box4graficoc").className = 'on last';
}


function openquick(obj) {
    closeallquick('quick1');
    openeditquick(obj.parentNode.firstChild);
    obj.parentNode.firstChild.style.backgroundColor = '#dce7b5';
    obj.parentNode.childNodes['2'].style.display = 'block';
}

function closequick(obj) {
    obj.parentNode.firstChild.style.backgroundColor = 'transparent';
    obj.parentNode.childNodes['3'].style.backgroundColor = 'transparent';
}

function openeditquick(obj) {
    closeul('quick1');
    closealleditquick('quick1');
    obj.parentNode.firstChild.style.backgroundColor = '#dce7b5';
    obj.parentNode.childNodes['1'].style.backgroundColor = '#dce7b5';
    obj.parentNode.childNodes['1'].firstChild.style.visibility = 'visible';
}

function closeeditquick(obj) {
    obj.parentNode.style.backgroundColor = 'transparent';
    obj.parentNode.childNodes['1'].style.backgroundColor = 'transparent';
    obj.parentNode.childNodes['1'].firstChild.style.visibility = 'hidden';
}

function closeallquick(id) {
    id = jqc(id);
    objs = $(id + " a");
    i = 1;
    while (i < objs.length) {
        if (objs[i].firstChild.tagName === 'IMG') {
            objs[i].parentNode.firstChild.style.backgroundColor = 'transparent';
            objs[i].parentNode.childNodes[2].style.display = 'none';
        }
        i++;
    }
}

function closealleditquick(id) {
    id = jqc(id);
    objs = $(id + " a");
    i = 1;
    while (i < objs.length) {
        if (objs[i].firstChild.tagName === 'IMG') {
            objs[i].parentNode.firstChild.style.backgroundColor = 'transparent';
            objs[i].style.backgroundColor = 'transparent';
            objs[i].firstChild.style.backgroundColor = 'transparent';
            objs[i].firstChild.style.visibility = 'hidden';
        }
        i++;
    }
}

function closeul(id) {
    id = jqc(id);
    objs = objs = $(id + " ul");
    i = 1;
    while (i < objs.length) {
        objs[i].style.display = 'none';
        i++;
    }
}

function opennext(obj) {
    closeul('quick1');
    obj.nextSibling.style.display = 'block';
}

function opennext2(obj) {
    closeul('quick1');
    obj.nextSibling.style.display = 'block';
    obj.parentNode.parentNode.style.display = 'block'
}

function closeallquick2(obj) {
    closeallquick(obj);
    closeul(obj);
    closealleditquick(obj);
}

/*function scrollObject(main, width, height, direct, pause, speed) {
	if ($("#news div").length > 0)
	{
		var self = this;
		this.main = main;
		this.width = width;
		this.height = height;
		this.direct = direct;
		this.pause = pause;
		this.speed = Math.max(1.001, Math.min((direct === "up" || direct === "down") ? height : width, speed));
		this.slope = (direct === "up" || direct === "left") ? 1 : -1;
		this.prev = this.offset = 0;
		this.curr = 1;
		this.mouse = false;
		this.scroll = function() {
			this.main = document.getElementById(this.main);
			this.main.style.overflow = "hidden";
			this.main.style.position = "absolute";
			// this.main.style.zIndex = "0"
				this.main.style.width = this.width + "px";
			this.main.style.height = this.height-15 + "px";
			var b = [], c;
			while (this.main.firstChild) if ((c = this.main.removeChild(this.main.firstChild)).nodeName === "DIV") b.push(c);
			for (var x = 0; x < b.length; x++) {
				var table = document.createElement('table');

				table.cellPadding = table.cellSpacing = table.border = "0";
				table.style.position = "absolute";
				table.style.left = table.style.top = "0px";
				table.style.width = table.style.height = "100%";
				// table.style.verticalAlign = "bottom";
				table.style.overflow = table.style.visibility = "hidden";
				var tbody = document.createElement('tbody');
				var tr = document.createElement('tr');
				var td = document.createElement('td');
				while (b[x].firstChild)
					td.appendChild(b[x].removeChild(b[x].firstChild));
				tr.appendChild(td);
				tbody.appendChild(tr);
				table.appendChild(tbody);
				this.main.appendChild(table);
			} b = c = null;
			if (this.main.childNodes.length > 1) {
				this.main.onmouseover = function() { self.mouse = true; };
				this.main.onmouseout = function() { self.mouse = false; };
				setInterval(function() {
					if (!self.offset && self.scrollLoop()) self.main.childNodes[self.curr].style.visibility = "visible";
				}, this.pause);
			} this.main.childNodes[this.prev].style.visibility = "visible";
		};
		this.scrollLoop = function() {
			if (!this.offset) {
				if (this.mouse) return false;
				this.offset = (this.direct === "up" || this.direct === "down") ? this.height : this.width;
			} else this.offset = Math.floor(this.offset / this.speed);
			if (this.direct === "up" || this.direct === "down") {
				this.main.childNodes[this.curr].style.top = (this.offset * this.slope) + "px";
				this.main.childNodes[this.prev].style.top = ((this.offset - this.height) * this.slope) + "px";
			} else {
				this.main.childNodes[this.curr].style.left = (this.offset * this.slope) + "px";
				this.main.childNodes[this.prev].style.left = ((this.offset - this.width) * this.slope) + "px";
			}
			if (!this.offset) {
				this.main.childNodes[this.prev].style.visibility = "hidden";
				this.prev = this.curr;
				if (++this.curr >= this.main.childNodes.length) this.curr = 0;
			} else setTimeout(function() { self.scrollLoop(); }, 30);
			return true;
		};
		if (window.addEventListener) {
			window.addEventListener('load', function() { self.scroll(); }, false); 
		} else if (window.attachEvent)
			window.attachEvent('onload', function() { self.scroll(); });
	}
	else
	{
		$('#news').html('<div class="nonews"><p>Al momento non ci sono news</p></div>');
		$('#news div').css('visibility', 'visible');
		$('#news.rotativa').addClass('positionBoxNews');
	}
}*/

/* CELLETTE NEWS FRONT PAGE CON BX SLIDER */
initNewsFPCarousel = function() {
    initFPCarousel($("#newsBx"));
};

initNewsTrFPCarousel = function() {
    var newsBx = $("#newsTrBx"),
        url = (isLib) ? "/librerie/include/commons/ajax/trading/marketInsight.php" : cgi_script + "/FMP/RssMarketInsight.do?campi=title%2CpubDate%2Cdescription%2Clink";
    $.ajax(url, {
        "success": function(data) {
            var itemNum = 0,
                newsSlideBxObj = null;
            newsBx.empty();
            $.each(data.news, function(index, item) {
                var textItem = $('<div class="text"/>'),
                    title = item.title.replace(/<[^>]+>/g, ""),
                    description = item.description.replace(/<[^>]+>/g, ""),
                    rest = itemNum % 5;
                if (!rest) {
                    if (newsSlideBxObj !== null) {
                        newsBx.append(newsSlideBxObj);
                    }
                    newsSlideBxObj = $('<div class="newsSlideBx"/>');
                    textItem.addClass('first');
                } else if (rest === 4) {
                    textItem.addClass('last');
                }
                textItem.append("<span class=\"data\">" + item.pubDate + "</span><br class=\"clear\" />");
                textItem.append("<a href=\"" + item.link + "\" target=\"_blank\"><span class=\"title\">" + title + "</span><span class=\"desc\">" + description + "</span></a>");
                newsSlideBxObj.append(textItem);
                ++itemNum;
            });
            // Aggiunge gli ultimi item
            if (newsSlideBxObj !== null) {
                newsBx.append(newsSlideBxObj);
            }
            // Se ci sono pi� di due pagine mette lo slider
            if (itemNum > 5) {
                initFPCarousel(newsBx, {
                    auto: true,
                    speed: 800,
                    pagerSelector: $('#boxinfoTrBx .pagerSlider')
                });
            }
        },
        "error": function() {
            newsBx.html('<div class="nonews"><p>Errore caricamento news</p></div>');
        }
    });
};
initNewsTrFPCarouselPlus = function() {
    var newsBx = $("#carouselPlusinfoTr"),
        newsBxWrappwer = '<div class="carouselPlusPages">',
        url = (isLib) ? "/librerie/include/commons/ajax/trading/marketInsight.php" : cgi_script + "/FMP/RssMarketInsight.do?campi=title%2CpubDate%2Cdescription%2Clink";
    $.ajax(url, {
        "success": function(data) {
            var itemNum = 0,
                newsSlideBxObj = null,
                indexNews = 0,
                j = 0,
                dataLengthDiv = Math.ceil(data.news.length / 5);
                newsBx.empty();
             newsBx.addClass('carouselPlus').attr('data-vertical',true).attr('data-loop',true).attr('data-interval',8000).append(newsBxWrappwer);
             $('<div class="carouselPlusNav">').insertAfter(newsBx.find('.carouselPlusPages'));
             for(i=0; i<dataLengthDiv;i++) {
                newsBx.find('.carouselPlusPages').append('<div class="carouselPlusPage"><div class="carouselPlusPageWrap"></div></div>');
                newsBx.find('.carouselPlusNav').append('<div class="carouselPlusBtn"></div>');
             }
               
             $.each(data.news, function(index, item) {
                   textItem = $('<div class="text"/>'),
                        title = item.title.replace(/<[^>]+>/g, ""),
                        description = item.description.replace(/<[^>]+>/g, "");
                        textItem.append("<span class=\"data\">" + item.pubDate + "</span><br class=\"clear\" />");
                        textItem.append("<a href=\"" + item.link + "\" target=\"_blank\"><span class=\"title\">" + title + "</span><span class=\"desc\">" + description + "</span></a>");
                    
                     /*for (i=0;i<textItem.length;i++) {
                       
                        console.log(indexNews % 5);
                        if (indexNews < 5) {
                            newsBx.find('.carouselPlusPageWrap').eq(0).append(textItem.eq(i));
                           
                        }
                        if (indexNews >= 5 && indexNews< 10) {
                            newsBx.find('.carouselPlusPageWrap').eq(1).append(textItem.eq(i));
                            
                        }
                        if (indexNews >= 10 && indexNews< 15) {
                            newsBx.find('.carouselPlusPageWrap').eq(2).append(textItem.eq(i));
                        }

                        indexNews++;
                    }*/
                    for (i=0;i<textItem.length;i++) {
                        newsBx.find('.carouselPlusPageWrap').eq(j).append(textItem.eq(i));
                         indexNews++;
                        if (indexNews % 5 == 0){
                            j++;
                        }
                    }
                    

              })
             initCarouselPlus(); 
             
            
            
            
            // Aggiunge gli ultimi item
            /*if (newsSlideBxObj !== null) {
               
               newsBx.append(newsSlideBxObj);
               
            }*/
            // Se ci sono pi� di due pagine mette lo slider
           
        
            
        },
        "error": function() {
            newsBx.html('<div class="nonews"><p>Errore caricamento news</p></div>');
        }
    });
};
function initFPCarousel(newsBx, options) {
    var newsSlideBx = newsBx.find(".newsSlideBx"),
        defaults = {
            auto: true,
            minSlides: 1,
            maxSlides: 1,
            infiniteLoop: true,
            touchEnabled: false,
            controls: false,
            useCSS: false,
            speed: 400,
            autoHover: true,
            mode: 'vertical',
            pause: 6000,
            onSliderLoad: function() {
                var arrLeng = newsSlideBx.length,
                    slideLast = newsSlideBx.eq(arrLeng - 2).find('.last');
                if (slideLast.length === 0) {
                    newsSlideBx.eq(0).addClass('singleNews');
                }
            }
        };
    if (typeof options === 'undefined') {
        options = {};
    }
    $.extend(defaults, options);
    if (newsSlideBx.length > 1) {
        var sliderFPNews = newsBx.bxSlider(defaults);
    } else if (newsSlideBx.length === 1 && newsSlideBx.find("div").length === 1) {
        newsSlideBx.eq(0).addClass('singleNews');
    } else if (newsSlideBx.length === 0) {
        newsBx.html('<div class="nonews"><p>Al momento non ci sono news</p></div>');
    }
}

/*CELLETTE PROMO FRONT PAGE CON BX SLIDER */
initCellFPCarousel = function() {
    if ($("#sideboxBx div.promo").length > 1) {
        var sliderFPCell = $('#sideboxBx').bxSlider({
            auto: true,
            infiniteLoop: true,
            touchEnabled: true,
            controls: false,
            useCSS: false,
            pagerSelector: $('#sideboxbarBx'),
            speed: 700,
            pause: 4000,
            autoHover: true,
            onSlideAfter: function() {
                setTimeout(function() {
                    sliderFPCell.startAuto(false)
                }, 500)
            }
        });
    }
}



function slide(id) {
    var idtoblind = 0;
    for (var i = 1; i <= 10; i++) {
        if ($('#slider' + i)) {
            $('#slider' + i).className = '';
            if ($('#sidebox' + i + 'content')[0].style.display !== 'none') {
                idtoblind = i;
            }
        }
    }
    if (idtoblind !== 0) {
        Effect.BlindUp('sidebox' + idtoblind + 'content');
    }
    if ($('#sidebox' + id + 'content')[0].style.display === 'none') {
        Effect.BlindDown('sidebox' + id + 'content');
        $('#slider' + id).className = 'selected';
    }
}

/* FUNZIONI CELLETTE */

/* Spostamento cellette avanti o indietro */
/*function sidebarnav(direction) 
{
	var sideboxelements = $('#ctnboxdx .promo')
	var sideboxindex = 0;
	for (i=0; i< sideboxelements.length; i++)
	{
		if (sideboxelements[i].style.display !=='none')
		{
			sideboxindex = i;
		}
		sideboxelements[i].style.display = 'none';
	}
	// ricalcola l'indice
	if (direction ==='prev')
	{
		sideboxindex = sideboxindex -1;
		if (sideboxindex <0) {sideboxindex = sideboxelements.length -1;}
	}
	if (direction ==='next')
	{
		sideboxindex = sideboxindex +1;
		if (sideboxindex === sideboxelements.length) {sideboxindex = 0;}
	}
	sideboxelements[sideboxindex].style.display = "";
	
}
*/
/* Autoswitch cellette */
/*function autoSwitchCellette()
{
	// Inizializza la variabile globale sideboxelements
	if ($('#sidebox').length)
	{
		var sideboxelements = $('#ctnboxdx .promo');
		if (sideboxelements.length>2)
		{
			autoswitchcell = window.setInterval(function() {sidebarnav('next')},'4000');
			$('#sidebox').onmouseover = function ()
			{
				window.clearInterval(autoswitchcell);
			}
			$('#sidebox').onmouseout = function ()
			{
				autoswitchcell = window.setInterval(function() {sidebarnav('next')},'4000');
			}
			$('.sideboxbar')[0].onmouseover = function ()
			{
				window.clearInterval(autoswitchcell);
			} 
			$('.sideboxbar')[0].onmouseout = function ()
			{
				autoswitchcell = window.setInterval(function() {sidebarnav('next')},'4000');
			} 
		}
	}
}

addEvent (window,'load', function(){autoSwitchCellette()});
/* FINE FUNZIONI CELLETTE */


function showsidebar(tabid) {
    for (i = 1; i <= 3; i++) {
        if ($('#tab' + i)) {
            $('#tab' + i).hide();
            $('#tabselect' + i).className = '';
        }
    }
    $('#tab' + tabid).show();
    $('#tabselect' + tabid).className = 'active';
}


function isadiv(element, index, array) {
    return ($(element).prop('tagName') === 'DIV');
}

function opentab(tab) {
    var tabs = tab.parentNode.getElementsByTagName('a');
    var tabbers = [];
    // var tabbers = tab.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div');
    var nodetotest = tab.parentNode.parentNode.getElementsByTagName('DIV')[1].childNodes;
    for (i = 0; i <= nodetotest.length - 1; i++) {
        if (nodetotest[i].tagName === 'DIV' && nodetotest[i].parentNode === tab.parentNode.parentNode.getElementsByTagName('div')[1]) {
            tabbers.push(nodetotest[i]);
        }
    }

    // var tabbers = tab.parentNode.parentNode.getElementsByTagName('div')[1].childNodes;
    var tabindex = 0;
    for (i = 0; i <= tabs.length - 1; i++) {
        if (tabbers[i] && tabs[i]) {
            tabbers[i].style.display = 'none';
            tabs[i].className = '';
            if (tabs[i] === tab) {
                // cattura l'indice del tab da aprire
                tabindex = i;
            }
        }
    }
    if (tabbers[tabindex] && tabs[tabindex]) {
        tabbers[tabindex].style.display = 'block';
        tabs[tabindex].className = 'active';
    }
}

// ------------ script per il controllo del menu ---------------------

// Variabili globali
var thirdlevellocked = 0;

// calcola offset di un oggetto
function getoffsetX(element) {
    var offsetX = 0;
    while (element) {
        offsetX += element.offsetLeft;
        element = element.offsetParent;
    }
    return offsetX;
}


/* NAVIGATORE */
$(function() {
    $('#conti').click(function(event) {
        if ($('.menuthird').length > 0 && $('.menuthird').is(':hidden')) {
            $('#menusecond').addClass('blocked');
            setTimeout(function() { $('#menusecond').removeClass('blocked') }, 100)
        }
    })
})

// over per il primo livello
function menufirstover(menuvoice) {
    var imgRep = $(menuvoice).find('img')[0];
    imgRep.src = imgRep.src.replace('normal', 'over');
}
// out per il primo livello
function menufirstout(menuvoice) {
    var imgRep = $(menuvoice).find('img')[0];
    imgRep.src = imgRep.src.replace('over', 'normal');
}

// funzione mouseover su secondo livello
function menusecondover(menudiv) {
    menudiv = $(menudiv);
    if (thirdlevellocked === 0) {
        if (menudiv.hasClass("level2voice")) {
            menudiv.addClass("over");
        }
        // posiziona il layer del terzo livello
        tlev = menudiv.find('div.menuthird');

        if (tlev) {
            // ritarda l'apertura di 0.5 secondi se il browser � lento (IE 6 e 7 )
            if ($.browser.msie && parseInt($.browser.version, 10) < 8) {
                t = window.setTimeout("openthirdlevellayer(tlev)", 150);

            } else {
                if (!$('#menusecond').hasClass('blocked')) {
                    openthirdlevellayer(tlev);
                }
            }
        }
    }
}


// funzione mouseout su secondo livello (catch a seconda del browser)
// out su IE
function menusecondoutie(menudiv) {
    if ($.browser.msie && parseInt($.browser.version, 10) < 8) { window.clearInterval(t);
        menusecondout(menudiv); }
}
// out su FIREFOX
function menusecondoutmoz(menudiv) {
    if (!($.browser.msie && parseInt($.browser.version, 10) < 8)) { menusecondout(menudiv); } else { window.clearInterval(t) }
}

// funzione out secondo livello generica
function menusecondout(menudiv) {
    if (thirdlevellocked === 0) {
        menudiv = $(menudiv);
        if ($.browser.msie && parseInt($.browser.version, 10) < 6) $("#ifr").css("visibility", "hidden");
        if (menudiv.hasClass("over")) menudiv.removeClass("over");
        var menuthird = menudiv.find("div.menuthird");
        if (menuthird) menuthird.css({ "display": "none", "z-index": 0 });
    }
}

// funzione click su secondo livello
function menusecondclick(menudiv) {
    menudiv = $(menudiv);
    // se l'utente clicca ed un livello risulta gi� cliccato...
    if (thirdlevellocked === 1) {
        // individua il nodo aperto e lo chiude
        var voicemenu = menudiv.parent().find(".level2voice.over");
        voicemenu.find(".menuthird").hide();
        voicemenu.removeClass("over");

        // apre il nuovo menudiv
        if (menudiv.hasClass('level2voice')) menudiv.addClass("over");
        // posiziona il layer del terzo livello
        var tlto = menudiv.find(".menuthird");
        openthirdlevellayer(tlto);
        thirdlevellocked = 1;
    }
    if (thirdlevellocked === 0) {
        var mtl = menudiv.find(".menuthird");
        if (mtl) mtl.show();
        thirdlevellocked = 1;
    }
    if (thirdlevellocked === 2) {
        var mtl = menudiv.find(".menuthird");
        if (mtl) mtl.hide();
        thirdlevellocked = 0;
    }
}

// apre il terzo livello indicato
function openthirdlevellayer(object) {
    var version = parseInt($.browser.version, 10);
    if (object.length) {
        object.css({ "visibility": "hidden", "display": "block", "z-index": getNextHighestZindex(), "margin-left": 0 });
        // Attribuisce agli ev. overlay di caricamento (chiocciole) uno zIndex inferiore a quello del menu' di terzo livello
        $('div.loadingOverlay').css("z-index", 2009);

        var defaultmargin = 0;

        // allineamento di default del terzo livello per IE
        if (document.all) {
            // ie 8 NON LO DEVE FARE
            if (!document.documentMode || document.documentMode !== 8) {
                object.css("margin-left", defaultmargin - object.parent().width() + "px");
            }
        }
        var rightoverflow = ($("#menusecond").offset().left + $("#menusecond").width()) - (object.offset().left + object.width());

        if (rightoverflow < 0) {
            if (document.all) {

                object.css("margin-left", rightoverflow - object.parent().width() + 'px');
            } else {
                object.css("margin-left", rightoverflow + 'px');
            }
        }

        // riposiziona la freccetta
        object.find('img:first')[0].style.marginLeft = (object.parent().offset().left - object.offset().left + (Math.round(object.parent().width() / 2))) - 16 + 'px';
        object.css({ "visibility": "visible", "height": (object.height()) + 'px' });

        // posiziona iframe per ie<=6
        if ($.browser.msie && version < 7) {
            $("#ifr").css({ "top": "160px", "position": "absolute", "visibility": "visible", "left": object.offset().left, "width": object.width() - 4 + 'px', "height": object.height() - 15 + 'px' })
            if (version < 6) $("#ifr").css("height", object.height() - 30 + 'px');
        }
    }
}

// chiusura del terzo livello a seconda dell'oggetto colpito
function menuthirdlevelclose(linka) {
    linka = $(linka);
    var thirdlevel = linka.closest(".menuthird");
    var menudiv = linka.closest(".menusecond");
    if (menudiv.hasClass("over")) menudiv.removeClass("over");
    thirdlevel.css("display", "none");
    thirdlevellocked = 2;
}
/* FINE NAVIGATORE */


// --- TOOLBOX --//
function closetools() {
    $(".tool").hide();
    $(".ui-menu.agenzia").hide();
}

function opentool(i, enlarged, relativex, relativey) {

    var tool = $('#tool' + i);
    // Chiude tutti i tool
    closetools();
    // appende il tool direttamente a "page1": il main container della parte privata
    if (!($("div").first().is(tool))) $("div").first().before(tool);
    tool.css({ "z-index": getNextHighestZindex(), "display": "block" });
    makeFocusable(tool);
    // da il "left" corretto all'elemento qualora l'utente non l'avesse impostato
    if (tool.css("left") === ""); {
        var toolconsole = $("#contenuti");
        tool.css("left", toolconsole.offset().left + (861 - tool.innerWidth()) + "px");
    }
    tool.css("display", "block");

    if (i === 1) {

        var paoloDomanda = $("#paoloDomanda");
        var paoloIframe = $("#paoloframe");
        if (paoloDomanda) {
            // refresh dell 'iframe per garantire il loading corretto
            paoloIframe.src = paoloIframe.src;
        }

        if (enlarged === 'enlarged') enlargePaolo();
        else if (enlarged === 'readonly') {
            $('#paoloespandi').hide();
            $('#paolocontrai').hide();
        }
        if (relativex) tool.style.left = relativex + 'px';
        if (relativey) tool.style.top = relativey + 'px';
    }
    tool.draggable({ handle: 'handle', scroll: window });
    if (i === 2) getTimeSlotsList(0);
}

// Funzioni di Paolo
function enlargePaolo() {
    $('#paoloframe').animate({ height: "193px" });
    $('#paolocontrai').show();
    $('#paoloespandi').hide();
    t = window.setTimeout("window.frames[0].$('#domanda').focus()", 2500);
}

function restrictPaolo() {
    $('paoloframe').animate({ height: "140px" });
    $('paolocontrai').hide();
    $('paoloespandi').show();
    clearTimeout(t);
}

// Paolo compare semitrasparente e poi diventa "full" dopo qualche secondo
// La funzione da invocare � "appearPaolo();" in qualsiasi punto della pagina
function appearPaolo(enlarged, relativex, relativey) {
    loadPaoloAppear = function() {
        // apre il Paolo e lo rende semitrasparente
        opentool(1, enlarged, relativex, relativey);
        // Inizializza l'oggetto di Paolo
        var tool1 = $('#tool1');
        // Setta l'opacit� di Paolo a 0.3
        tool1.setOpacity(0.3);
        // Setta un timeout per rendere Paolo completamente "pieno"
        setTimeout(function() { tool1.setOpacity(1); }, 2000)
    }
    addEvent(window, "load", loadPaoloAppear);
}


// funzione onload che risolve i problemi del corpo
function loadOptimizer() {
    var Navtype;
    Navtype = navigator.userAgent.toLowerCase();
    // appoggia il layout a sinistra se la risouzione diminuisce su Mozilla 1.4
    if (Navtype.indexOf('mozilla') !== -1 && Navtype.indexOf('rv:1.4') !== -1) {
        window.addEventListener("resize", function() { if (window.innerWidth <= document.body.getElementsByTagName('div')[1].width()) { document.body.getElementsByTagName('div')[1].style.margin = '0px 0px 0px 0px'; } else { document.body.getElementsByTagName('div')[1].style.margin = '0px auto'; } }, false);
        window.addEventListener("load", function() { if (window.innerWidth <= document.body.getElementsByTagName('div')[1].width()) { document.body.getElementsByTagName('div')[1].style.margin = '0px 0px 0px 0px'; } else { document.body.getElementsByTagName('div')[1].style.margin = '0px auto'; } }, false);
    }
}

loadOptimizer();

/*-----------------------------------------------------*/
/* Funzioni per la gestione della validazione dei form (secondo le specifiche CONDES) */
/*-----------------------------------------------------*/
/*
 * Uso: ---- Per usare questa gestione si devono ottemperare i seguenti punti: 1) Definire una funzione (es: validationImpl(data) ) quale
 * implementazione delle validazioni specifiche. Il nome di tale funzione deve poi essere fornito come argomento della funzione di cui al punto 3). La
 * funzione chiamer� addValidationError(labelId, message) per ogni label da marcare e/o ogni messaggio da mostrare. (es:
 * addValidationError('lbl_nome', 'Il dato &lt;nome&gt; deve essere specificato.'); ) Il nome della funzione pu� coincidere con "validationImpl()" o
 * essere diversa. La lblId pu� essere un nome singolo o un array. 2) Definire una sezione di nome "errorsSection" (es: <div id="errorsSection"
 * style="display: none;"> ) che rappresenta l'area in cui compariranno tutti i messaggi di errore. All'interno della quale ci deve essere un'altra
 * sezione di nome "errorMessages" (es: <ul class="alert" id="errorMessages"> ) e di tipo <ul> a cui saranno aggiunti i messaggi in forma <li> come da
 * specifiche CONDES. Vedere errorsSection.jsp 3) Chiamare la validazione "doValidations(validationImpl, data)" fornendo il nome della funzione di
 * implementazione specifica di cui al punto 1). (es: <... onclick="return doValidations(validationImpl, null);"... > )
 */
/* ======================================================================================================== */
var dbgLvlOff = 0,
    dbgLvlErr = 1,
    dbgLvlWarn = 2,
    dbgLvlInf = 3,
    dbgLvlDbg = 4;
var dbgLvlDescriptions = ['', 'Error', 'Warning', 'Info', 'Debug'];

function Logger(lvl) {
    this.currentLvl = lvl;
    this.log = function(lvl, functionName, message) {
        if (!(lvl > this.currentLvl)) {
            if (typeof console !== 'undefined') { console.log(dbgLvlDescriptions[lvl] + ' - ' + functionName + ': ' + message); } else { alert(dbgLvlDescriptions[lvl] + ' - ' + functionName + ': ' + message); }
        }
    }
    this.error = function(functionName, message) { this.log(dbgLvlErr, functionName, message); }
    this.warning = function(functionName, message) { this.log(dbgLvlWarn, functionName, message); }
    this.info = function(functionName, message) { this.log(dbgLvlInf, functionName, message); }
    this.debug = function(functionName, message) { this.log(dbgLvlDbg, functionName, message); }
    this.begin = function(functionName, message) { this.log(dbgLvlDbg, functionName, 'Begin...' + (message ? (' - ' + message) : '')); }
    this.end = function(functionName, message) { this.log(dbgLvlDbg, functionName, '... end.'); }
}
var dbgLvl_prod = dbgLvlOff,
    dbgLvl_svil = dbgLvlWarn,
    dbgLvl_max = dbgLvlDbg;

var dbgLvl;
if (typeof(dbgLvl) === 'undefined' || !dbgLvl) dbgLvl = dbgLvl_prod;
var logger = new Logger(dbgLvl);
/* ======================================================================================================== */
function isArray(testObject) {
    return testObject && !(testObject.propertyIsEnumerable('length')) && typeof testObject === 'object' && typeof testObject.length === 'number';
}
/* ======================================================================================================== */
/* Sezione relativa alla marcatura (evidenziazione) delle label dei campi */
/* ======================================================================================================== */
function PointedOutLabel(id, prevColor) {
    this.id = id;
    this.prevColor = prevColor;
}
var pointedOutLabels = [];
/* Marca la label di campo per la segnalazione dell'errore. */
function pointoutLabel(labelId) {
    var functionName = ('pointoutLabel()');
    logger.begin(functionName, 'labelId <' + labelId + '>.');

    // Ignoro "noField"
    if (labelId && (labelId === 'noField' || labelId === 'noLabel')) {
        logger.debug(functionName, '... label ignored: <' + labelId + '>.');
        logger.end(functionName);
        return false;
    }

    // Aggancio l'elemento html.
    var lblElem = document.getElementById(labelId);
    if (lblElem && lblElem.tagName !== 'INPUT') {
        //memorizzo il form di appartenenza
        if (!validationFormDOMObject)
            validationFormDOMObject = $(lblElem).closest("form");
        // .. salvo il colore attuale.
        var currentColor = lblElem.style.color;
        logger.debug(functionName, '... currentColor <' + currentColor + '>.');
        // .. imposto il colore di marcatura
        if ($(lblElem).hasClass('errorBor')) {
            $(lblElem).addClass('on');
        } else {
            lblElem.style.color = 'red';
        }
        // memorizzo l'elemento nella lista di quelli marcati/da ripristinare.
        var element = new PointedOutLabel(labelId, currentColor);
        var found = false;
        for (var idxL = 0; idxL < pointedOutLabels.length; ++idxL) {
            var k = pointedOutLabels[idxL];
            if (k.id === element.id) {
                found = true;
                break;
            }
        }
        if (found === false)
            pointedOutLabels.push(element);
    } else {
        if (!lblElem) {
            logger.warning(functionName, 'Element not found for label <' + labelId + '>.');
        } else {
            logger.warning(functionName, 'Wrong element for label <' + labelId + '>: is (uncorrectly) an "<input type...>".');
        }
    }

    logger.end(functionName);
    return true;
}
/* Marca le label di campo per la segnalazione dell'errore. */
function pointoutLabels(labelIds) {
    var functionName = ('pointoutLabels()');
    logger.begin(functionName, 'labelIds.length <' + labelIds.length + '>.');

    // Per ogni label...
    for (var idxL = 0; idxL < labelIds.length; ++idxL) {
        pointoutLabel(labelIds[idxL]);
    }

    logger.end(functionName);
}

/* Smarca tutte le label di campo */
function unpointoutLabels() {
    var functionName = ('unpointoutLabels()');
    logger.begin(functionName);

    logger.debug(functionName, 'pointedOutLabels.length: <' + pointedOutLabels.length + '>.');

    // Per ogni marcatura fatta...
    for (var idxL = 0; idxL < pointedOutLabels.length; ++idxL) {
        var pointedOutLabel = pointedOutLabels[idxL];
        // aggancio l'elemento html
        var lblElem = document.getElementById(pointedOutLabel.id);
        if (lblElem) {
            // ripristino il colore originale
            if ($(lblElem).hasClass('errorBor on')) {
                $(lblElem).removeClass('on');
            } else {
                lblElem.style.color = pointedOutLabel.prevColor;
            }
        } else {
            logger.warning(functionName, 'Label <' + pointedOutLabel.id + '> not found in DOM.');
        }
    }

    // Per ogni campo visibile toglie la classe "errore" qualora presente nel container centrale
    $("#contenuti").find("input, select, textarea").removeClass('errore');
    // Fine rimozione classe sui campi

    logger.end(functionName);
}

/* ======================================================================================================== */
/* Sezione relativa alla gestione della validazione */
/*
 * La validazione vera e propria, specifica per i singoli campi, deve essere fatta in una funzione il cui nome dovr� essere fornito. Uso:
 * doValidations(validationImpl, data) - ritorna <true> se _non_ ci sono errori.
 */
/* ======================================================================================================== */
var validationErrors; // boolean
var validationFormDOMObject; // form
/* Toglie tutti i messaggi di errore dalla sezione */
function removeAllValidationErrors() {
    var functionName = ('removeAllValidationErrors()');
    logger.begin(functionName);

    // Aggancio l'elemento html 'lista errori'
    var errorMessagesElem = $('#errorMessages');
    if (!errorMessagesElem.length) { throw new Error('Missing element <errorMessages>.'); }

    // .. e svuoto.
    errorMessagesElem.html('');
    validationErrors = false;
    validationFormDOMObject = null;
    logger.end(functionName);
}

/*
 * Aggiunge il messaggio nella sezione errori isOutOfScopeIntentional: fornire true se la chiamata a questa funzione � eseguita intenzionalmente fuori
 * del normale ciclo di validazione; altrimenti sar� notificato come errore di programmazione. Un tipico caso di <isOutOfScopeIntentional> � gestito
 * da addActionMessages.jsp
 */

function addValidationError(message) {
    addValidationError(null, message, false);
}

function addValidationError(labelId, message, isOutOfScopeIntentional) {
    var functionName = ('addValidationError()');
    logger.begin(functionName);

    validationErrors = true;

    // Notifico se: non � nel contesto di una validazione (mancata chiamata a doValidations())
    if (!isDoValidationsRunning && !isOutOfScopeIntentional && !isOutOfScopeAlreadyNotified) {
        isOutOfScopeAlreadyNotified = true;
        logger.error(functionName, 'Function invoked unintentionally out of doValidations() scope.');
    }

    if (labelId) {
        if (isArray(labelId)) {
            pointoutLabels(labelId);
        } else if (!(labelId == '')) {
            var pointed = pointoutLabel(labelId);
            if (!pointed) {
                logger.info(functionName, '... label <' + labelId + '> not pointed for message <' + message + '>.')
            }
        }
    }

    if (message && !message == '') {
        var errorMessagesElem = $('#errorMessages');
        if (!errorMessagesElem.length) { throw new Error('Missing element <errorMessages>.'); }
        if (message.substr(0, 5) !== 'HTML_') {
            message = $('<div>').html(message).text();
        } else {
            message = message.substr(5);
        }
        errorMessagesElem.append($('<li>').html(message));
    }

    logger.end(functionName);
}
/* ======================================================================================================== */
/* Esegue il ciclo di validazione: pre-, -impl, post- */
var isInLoop = false;
var isDoValidationsRunning = false;
var isOutOfScopeAlreadyNotified = false;
var firstError = true;
var subtitle = ''; // valore assunto: viene sostituito da errorsSection.jsp

function doValidations(validationImpl, data) {
    var functionName = ('doValidations()');
    logger.begin(functionName);

    try {
        if (isInLoop) { throw new Error('Code error.'); }
        isInLoop = true;

        isDoValidationsRunning = true; // isOutOfScopeAlreadyNotified = false; inutile.
        var validationImplException = null;

        // Resetta/nasconde
        if (typeof(validationImpl) !== 'string' || validationImpl !== '*onlyShow') {
            try { do_preValidations(); } catch (e) { throw new Error('Exception detected in do_preValidations(): ' + e.message); }
        }

        // Esegue controlli e aggiunge errori se: non � solo *RESET
        if (typeof(validationImpl) === 'string' && validationImpl === '*reset') {
            logger.debug(functionName, "... only reset; no validations");
        } else if (typeof(validationImpl) === 'string' && validationImpl === '*onlyShow') {
            logger.debug(functionName, "... only show; no validations");
        } else {
            try { validationImpl(data); } catch (e) { // Posticipa l'eventuale eccezione.
                validationImplException = e;
                if (!logger.currentLvl < dbgLvlErr) {
                    addValidationError("noField", ('Exception detected in \'' + validationImpl.name + '()\' (validationImpl): ' + e.message), false);
                }
            }
        }

        // Visualizza
        if (typeof(validationImpl) !== 'string' || validationImpl !== '*reset') {
            try { do_postValidations(); } catch (e) { throw new Error('Exception detected in do_postValidations(): ' + e.message); }
        }

        // Gestione posticipata dell'eccezione di validationImpl
        if (validationImplException !== null) {
            throw new Error('Exception detected in \'' + validationImpl.name + '()\' (validationImpl): ' + validationImplException.message);
        }
    } catch (e) {
        validationErrors = true;
        logger.error(functionName, (typeof(e) === 'string' ? e : e.message));
    }

    isDoValidationsRunning = false;

    logger.end(functionName);
    isInLoop = false;
    return (!validationErrors);
}

/* Esegue la fase di pre-validazione: disattiva tutti gli stati di errore */
function do_preValidations() {
    var functionName = ('do_preValidations()');
    logger.begin(functionName);

    // Aggancio l'elemento html 'sezione errori'
    var errorsSectionElem = $('#errorsSection');
    if (errorsSectionElem.length) {
        // chiudo la sezione
        errorsSectionElem.hide();
        // ripristino il sottotitolo originale
        $('#error_box').children().first().html(subtitle);
    } else {
        logger.error(functionName, 'ErrorsSection element <' + errorsSection + '> not found in document.');
    }

    // Ripristino lo stato di tutte le label marcate precedentemente
    unpointoutLabels();

    // Cancello tutti messaggi di errore presenti in sezione.
    try {
        removeAllValidationErrors();
        firstError = true;
    } catch (e) { logger.error(functionName, e); }

    logger.end(functionName);
}

/* Dummy: Nel caso non fosse definita l'implementazione specifica... */
function validationImpl(data) {
    if (logger.currentLvl < dbgLvlWarn) { return; }

    var functionName = ('validationImpl()');
    logger.begin(functionName);

    logger.warning(functionName, 'No validationImpl defined; default assumed.');

    if (logger.currentLvl < dbgLvlDbg) { return; }

    if (data && data !== null) {
        if (isArray(data)) {
            if (data.length === 0) {
                logger.debug('Argument provided is an Array of zero elements.');
            } else {
                if (confirm(functionName + ': Argument provided is an Array of ' + data.length + ' elements. Do you wish to log them?')) {
                    for (var idxA = 0; idxA < data.length; ++idxA) {
                        logger.debug('Elem [' + idxA + '] has value <' + data[idxA] + '>.');
                        if (data.length > 5 && idxA > 0 && data.length % 5 === 0) {
                            if (!confirm('Continue?')) { break; }
                        }
                    }
                }
            }
        }
    }

    logger.end(functionName);
    return;
}

/* Esegue la fase di post-validazione: visualizza la sezione errori. */
function do_postValidations() {
    var functionName = ('do_postValidations()');
    logger.begin(functionName);

    // Se ci sono errori...
    if (validationErrors) {
        // Aggancio l'elemento html 'sezione errori'...
        var errorsSectionElem = $('#errorsSection');
        if (errorsSectionElem.length) {
            // e visualizzo.
            if (validationErrors)
                errorsSectionElem.prependTo(validationFormDOMObject);
            errorsSectionElem.show();
            setElementonView(errorsSectionElem);
        } else {
            logger.error(functionName, 'ErrorsSection element <' + errorsSection + '> not found in document.');
        }
    }
    logger.end(functionName);
}

/* Aggiunge il messaggio di errore ed esegue select e focus del campo errato. */
function setCommonErrorCondition(fieldLabelId, message, form, fieldName, fieldIdx) {
    addValidationError(fieldLabelId, message);

    if (!firstError) { return; }

    // Condizione per non alterare
    form = $(form);
    if (!fieldName) { fieldName = fieldLabelId }
    if (fieldName === 'noField' || fieldName === 'noLabel') { return; }
    var fieldToSign = form.find('[name=' + fieldName + ']');
    if (fieldToSign) {
        if (!fieldToSign.hasClass('error')) { fieldToSign.addClass('error'); }
        // Fine apposizione classe sui campi
        try {
            // Individua il campo sul quale mettere l'errore
            if (fieldIdx) { fieldToSign = fieldToSign.eq(fieldIdx); }
            fieldToSign.trigger('focus').trigger('select');
            firstError = false;
        } catch (e) {
            // protezione contro IE
            if (e.message !== 'Can\'t move focus to the control because it is invisible, not enabled, or of a type that does not accept the focus.') {
                throw new Error("Unable to select/set focus on field named <" + fieldName + (fieldIdx ? ('[' + fieldIdx + ']') : '') + "> due to: " + e.message);
            }
        }
    }
}

/* Aggiunge il messaggio di avviso ed esegue select e focus dei campi da controllare. */
function setCommonWarningCondition(fieldLabelId, message, newSubtitle, form, fieldName, fieldIdx) {
    if (validationErrors)
        logger.warning(functionName, 'setCommonWarningCondition invoked in the presence of validation errors!');

    if (!newSubtitle) newSubtitle = '';

    $('#error_box').children().first().html(newSubtitle);

    addValidationError(fieldLabelId, message);

    // Individua il campo sul quale mettere l'errore
    if (fieldIdx) {
        var fieldToSign = form[fieldName][fieldIdx];
    } else {
        var fieldToSign = form[fieldName];
    }
    if (fieldToSign) {
        if (fieldToSign.className) {
            if (fieldToSign.className.indexOf("error") < 0) {
                fieldToSign.className = fieldToSign.className + " errore";
            }
        } else {
            fieldToSign.className = " errore";
        }
    }
    if (!firstError) return;

    if (!fieldName) fieldName = fieldLabelId;
    if (fieldName === 'noField' || fieldName === 'noLabel') return;

    try {
        if (fieldIdx) { // il field passato � un array...
            if (form[fieldName][fieldIdx].focus) { form[fieldName][fieldIdx].focus(); }
            if (form[fieldName][fieldIdx].select) { form[fieldName][fieldIdx].select(); }
        } else {
            if (form[fieldName].focus) { form[fieldName].focus(); }
            if (form[fieldName].select) { form[fieldName].find(); }
        }
        firstError = false;
    } catch (e) {
        // protezione contro IE
        if (e.message !== 'Can\'t move focus to the control because it is invisible, not enabled, or of a type that does not accept the focus.')
            throw new Error("Unable to select/set focus on field named <" + fieldName + (fieldIdx ? ('[' + fieldIdx + ']') : '') + "> due to: " + e.message);
    }
}

// javascript per il controllo di tutti gli accordion
function closeMyMenuSelector(element) {
    element.getElementsByTagName('div')[1].getElementsByTagName('a')[0].style.backgroundImage = 'url(/img/ret/ico1bt_checksectiontitle_open.gif)';
    element.getElementsByTagName('div')[2].style.display = 'none';
}

function openMyMenuSelector(element) {
    element.getElementsByTagName('div')[1].getElementsByTagName('a')[0].style.backgroundImage = 'url(/img/ret/ico1bt_checksectiontitle_close.gif)';
    element.getElementsByTagName('div')[2].style.display = 'block';
}

function switchMyMenuSelector(element) {
    if (element.getElementsByTagName('div')[2].style.display === 'none')
        openMyMenuSelector(element);
    else
        closeMyMenuSelector(element);
}

function switchMyMenuVoice(checkboxelement) {
    if (checkboxelement.checked === true)
        checkboxelement.parentNode.className = 'checked';
    else
        checkboxelement.parentNode.className = '';
}

function closeAllMyMenuVoices() {
    var divarray = document.getElementsByTagName('div');

    for (i = 0; i <= (divarray.length - 1); i++) {
        if (divarray[i].className === 'mymenuselector') {
            closeMyMenuSelector(divarray[i]);
        }
    }
}

function openAllMyMenuVoices() {
    var divarray = document.getElementsByTagName('div');

    for (i = 0; i <= (divarray.length - 1); i++) {
        if (divarray[i].className === 'mymenuselector') {
            openMyMenuSelector(divarray[i]);
        }
    }
}

function openSelectedMyMenuVoices() {
    closeAllMyMenuVoices();

    var divinput = document.getElementsByTagName('input');

    for (i = 0; i <= (divinput.length - 1); i++) {
        if ((divinput[i].parentNode.parentNode.parentNode.parentNode.className === 'mymenuselector') &&
            (divinput[i].checked === true)) {
            openMyMenuSelector(divinput[i].parentNode.parentNode.parentNode.parentNode);
        }
    }
}

function resetSelectedMyMenuVoices() {
    var divinput = document.getElementsByTagName('input');

    for (i = 0; i <= (divinput.length - 1); i++) {
        if ((divinput[i].parentNode.parentNode.parentNode.parentNode.className === 'mymenuselector') &&
            (divinput[i].checked === true)) {
            divinput[i].checked = false;
            divinput[i].parentNode.className = '';
        }
    }

    if (bkCnt !== null)
        bkCnt = 0;
}

// My Menu
var MAX_BOOKMARKS = 8;

function bookmarkCount(_checkbox) {
    if (_checkbox.checked) {
        if (bkCnt === MAX_BOOKMARKS) {
            _checkbox.checked = false;
            openAlert('alert');
            return false;
        } else
            bkCnt++;
    } else {
        if ((bkCnt - 1) === 0)
            return false;
        else
            bkCnt--;
    }

    switchMyMenuVoice(_checkbox);

    return true;
}


function openPdf(path, param, isStatico) {
    var link = "";
    if (param === null) { param = "" }
    if (param.indexOf("&") === 0)
        param = param.substring(1, param.length);

    if (!isStatico)
        link = cgi_script + path + "?" + param;
    else
        link = path + "?";

    //richiesto per Tablet
    link += (param.trim().length > 0) ? "&isPDF=true" : "isPDF=true";

    window.open(link);
}


function callJSP(path, target, param) { GPS(path, target, param, 'callJSP'); }

function callInfoFIN(path, param) { GPS(path, null, param, 'callInfoFIN'); }

function callInfoFINOBS(param) { GPS(null, null, param, 'callInfoFINOBS'); }

function callInfoFINOBS2(path, param) { GPS(null, null, param, 'callInfoFINOBS'); }

function callNSFSSL(path, target, param) { GPS(path, target, param, 'callNSFSSL'); }

function callNSF(path, target) { GPS(path, target, null, 'callNSF'); }

function big_pop_JSP(path, param) { GPS(path, null, param, 'big_pop_JSP'); }

function callPFV_XP(path, param) { GPS(path, null, param, 'callPFV_XP'); }

function callJSP_PF(path, target, param) { GPS(path, target, param, 'callJSP_PF'); }

function callBANK(path, target, param) { GPS(path, target, param, 'callBANK'); }

function callASPADB(path, target, param) { GPS(path, target, param, 'callASPADB'); }

function GPS(path, target, param, whoami) {
    var link = "";
    var pop_up_target = "";
    var pop_up_param = "";
    var larg = "";
    var alt = "";

    if (target === null) { target = "_self" }
    if (param === null) { param = "" } else if (param === "num_bca") { param = "&num_bca=" + banca_utente } else if (param === "param_notes") { param = "&param=" + param_bancomat }

    switch (whoami) {
        case "callJSP":
            if (param.indexOf("&") === 0)
                param = param.substring(1, param.length);
            link = cgi_script + path + "?" + param + "&BV_UseBVCookie=Yes&cf=" + Math.random();
            break;
        case "big_pop_JSP":
            if (path.indexOf(".asp") > -1) {
                link = path + param;
                larg = 800;
                alt = 605;
            } else {
                link = cgi_script + path + "?BV_UseBVCookie=Yes&cf=" + Math.random() + param;
                larg = 450;
                alt = 445;
            }
            target = "_blank";
            pop_up_target = "mainwin";
            pop_up_param = "width=" + larg + ",height=" + alt + ",top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes";
            break;
        case "callNSFSSL":
            link = bpm_mailurl_ssl + path + param;
            break;
        case "callNSF":
            link = bpm_mailurl + path;
            break;
        case "callInfoFIN":
            link = sole_24h + "%3FURL%3D" + cgi_serverurl + cgi_script + "/%26XPID%3D" + tibco_code + param;
            target = "_blank";
            pop_up_target = "infoFIN";
            pop_up_param = "";
            break;
        case "callInfoFINOBS":
            var calledURL = sole_24h + "/webankinfo/home.jsp%3FBV_UseBVCookie%3DYes%26URL%3D" + cgi_serverurl + cgi_script + "/%26Code%3D" + tibco_code + param;
            calledURL = sole_24h + "%3FURL%3D" + cgi_serverurl + cgi_script + "/%26XPID%3D" + tibco_code + param;
            link = cgi_script + "/wbOnetoone/ExtUrl.jsp?BV_UseBVCookie=Yes&cf=" + Math.random() + "&calledURL=" + calledURL;
            target = "_blank";
            pop_up_target = "infoFIN";
            pop_up_param = "";
            break;

        case "callJSP_PF":
            link = cgi_serverurl + cgi_script + path + "?BV_UseBVCookie=Yes&cf=" + Math.random() + param;
            break;
        case "callBANK":
            if (banca_utente === 4) {
                var ident = path.indexOf(".nsf");
                var len = path.length;
                if (ident > -1) {
                    var path_bv = path.substring(ident - 2, ident);
                    if (path_bv === "bv") { path = path.substring(0, ident - 2) + "04" + path.substring(ident, len); } else { path = path.substring(0, ident) + "04" + path.substring(ident, len); }
                    link = bpm_mailurl_ssl + path + param;
                }
            } else { link = bpm_mailurl_ssl + path + param; }
            break;
        case "callASPADB":
            var calledURLL = "https://www.frame222.it/" + path + "%3Fcod%3D" + ftCode;
            link = cgi_script + "/wbOnetoone/ExtUrl.jsp?BV_UseBVCookie=Yes&cf=" + Math.random() + "&calledURL=" + calledURLL + param;
            if (target === "yes") {
                link = link + "&UserId=" + cryp_adb;
            }
            target = "_blank";
            pop_up_target = "mainADB";
            pop_up_param = "top=1,left=1,status=yes,toolbar=yes,menubar=yes,resizable=yes,scrollbars=yes";
            break;
        case "callPFV_XP":
            var calledURL = cgi_script + path + "%3FBV_UseBVCookie%3DYes" + param;
            link = cgi_script + "/wbOnetoone/ExtUrl.jsp?BV_UseBVCookie=Yes&cf=" + Math.random() + "&calledURL=" + calledURL;
            target = "_blank";
            pop_up_target = "pvfWindow";
            pop_up_param = "scrollbars=yes,status=yes,width=600,height=480";
            break;
        default:
            link = cgi_script + path + "?BV_UseBVCookie=Yes&cf=" + Math.random() + param;
            break;
    }

    if (target === "_self") {
        var ifr = $("#funzione");
        if (ifr.length) {
            ifr.attr('src', link);
        } else {
            window.location.href = link;
        }
    } else if (target === "_monoFrame") {
        window.location.href = link;
    }
    if (target === "_blank" && pop_up_param === "" && pop_up_target === "") { window.open(link); } else if (target === "_blank" && (pop_up_param !== "" || pop_up_target !== "")) { window.open(link, pop_up_target, pop_up_param) }
    if (target === "_top") { parent.top.location = link; }
}

// ### GESTIONE GIF LOADER PER INVOCAZIONI FORM AJAX ###

var loading = {};
var startLoading = {};

function setLoading(i, c, s) {
    var key = 'loading';
    if (i) key = i;

    if (!loading) loading = {};
    if (!startLoading) startLoading = {};

    loading[key] = true;
    startLoading[key] = new Date();

    var tm = showLoading(i, c, s);
}

function showLoading(i, c, s) {

    var key = 'loading';
    var cont = 'contWish';
    var show = 'slider';
    var imgLoading = '/img/ret/loading.gif';
    var classe = 'normalcaricamento';

    if (i) key = getSafeId(i);
    if (c) cont = getSafeId(c);
    if (s) show = getSafeId(s);
    if (i === 'sceltaSmartphoneImg') {
        imgLoading = '/img/ret/ico2inf_loading.gif';
        classe = 'caricamento';
    }

    var contObj = $('#' + cont);
    var showObj = $('#' + show);
    loading[key] = true;

    if (loading[key] && contObj.length && showObj.length) {
        var myImg = $('<img />', { src: imgLoading, alt: 'loading', id: key, 'class': classe });
        contObj.append(myImg);
        showObj.css('display', 'none');

    }
}

function getSafeId(id) {
    return (id.indexOf("#") === -1) ? id : id.substring(1)
}

function stopLoading(i, c, s, error) {
    var key = 'loading';
    var cont = 'contWish';
    var show = 'slider';

    if (i !== null) key = getSafeId(i);
    if (c !== null) cont = getSafeId(c);
    if (s !== null) show = getSafeId(s);

    loading[key] = false;

    if ($('#' + key).length) {
        $('#' + key).remove();
    }

    if (!error) {
        $('#' + show).show();
    }
}
// ### FINE GESTIONE GIF LOADER PER INVOCAZIONI FORM AJAX ###

// Depends on Prototype
function jsonFormSubmit(_formID, _actionParams, _callBack, _isAsync) {
    var jsonResponse;

    _formID = jqc(_formID);

    if ($(_formID).length) {
        if (_actionParams === null) {
            _actionParams = {
                cf: Math.random()
            }
        } else {
            if (_actionParams.cf === null) {
                _actionParams['cf'] = Math.random();
            }
        }
        setLoading(_formID + "Img", _formID + "Loading", _formID + "Display");

        successFunc = function(data, textStatus, jqXHR) {
            stopLoading(_formID + "Img", _formID + "Loading", _formID + "Display");
            jsonResponse = data;
        }
        failureFunc = function(data) {
            stopLoading(_formID + "Img", _formID + "Loading", _formID + "Display");
        }
        jqAJAXCall('POST', 'json', $(_formID)[0].action, successFunc, failureFunc, $(_formID).eq(0).serialize() + '&' + $.param(_actionParams));
    }

    return jsonResponse;
}

function ajaxFormSubmit(_formID, _actionParams, _callBack, _isAsync) {
    var res;

    _formID = jqc(_formID);

    if ($(_formID) !== null) {
        if (_actionParams === null) {
            _actionParams = {
                cf: Math.random()
            }
        } else {
            if (_actionParams.cf === null) {
                _actionParams['cf'] = Math.random();
            }
        }
        setLoading(_formID + "Img", _formID + "Loading", _formID + "Display");

        successFunc = function(data, textStatus, jqXHR) {
            stopLoading(_formID + "Img", _formID + "Loading", _formID + "Display");
            res = data;
        }
        failureFunc = function(data) {
            stopLoading(_formID + "Img", _formID + "Loading", _formID + "Display");
        }
        jqAJAXCall('POST', 'html', $(_formID)[0].action, successFunc, failureFunc, $(_formID).eq(0).serialize() + '&' + $.param(_actionParams));
    }
    return res;
}

// Depends on Prototype
function getJsonResponse(_actionUrl, _actionParams, _isAsync) {
    var jsonResponse;

    successFunc = function(data, textStatus, jqXHR) {
        stopLoading(_formID + "Img", _formID + "Loading", _formID + "Display");
        jsonResponse = data;
    }
    failureFunc = function(data) {}
    jqAJAXCall('POST', 'json', _actionUrl, successFunc, failureFunc, $.param(_actionParams));

    return jsonResponse;
}

function getAjaxResponse(_actionUrl, _actionParams, _isAsync) {
    var res;


    successFunc = function(data, textStatus, jqXHR) {
        stopLoading(_formID + "Img", _formID + "Loading", _formID + "Display");
        res = data;
    }
    failureFunc = function(data) {}
    jqAJAXCall('POST', 'html', _actionUrl, successFunc, failureFunc, $.param(_actionParams));
    return res;
}

/*
 * populateSelectByJson(): popola l'elemento html select di n options per le n coppie chiave/valore dell'oggetto json
 */
function populateSelectByJson(_selectID, _jsonObj) {
    var sel = document.getElementById(_selectID);

    if (sel !== null) {
        sel.options.length = 0;

        for (var j = 0; j < _jsonObj.length; j++)
            sel.options[j] = new Option(_jsonObj[j], _jsonObj[j]);
    }
}

/*
 * selectOptionByValue(): seleziona la option avente come valore quello inidicato dal parametro _valueForSelect
 */
function selectOptionByValue(_selectID, _valueForSelect) {
    var sel = document.getElementById(_selectID);

    if (sel !== null) {
        for (var j = 0; j < sel.options.length; j++) {
            if (sel.options[j].value === _valueForSelect)
                sel.options[j].selected = true;
        }
    }
}

function populatePageElementsByJson(_jsonData) {
    var el;
    for (var elementId in _jsonData) {
        el = $('#' + elementId);
        if (el.length) {
            var formElementValue = _jsonData[elementId];
            if (el.prop('tagName').toUpperCase() === 'SELECT') {
                formElementValue = formElementValue.toString();
                for (var i = 0, j = el.prop('options').length; i < j; i++) {
                    if (el.prop('options')[i].value === formElementValue) {
                        el.prop('selectedIndex', i);
                        break;
                    }
                }
            } else if (el.prop('tagName').toUpperCase() === 'INPUT' && el.attr('type') === 'radio') {
                // *** modificata gestione dei radio button per includere il caso di valori non numerici ***
                // document.getElementsByName(elementId)[formElementValue].checked = true;
                formElementValue = formElementValue.toString();
                var radioEls = document.getElementsByName(elementId),
                    length = radioEls.length;
                for (var index = 0; index < length; index++) {
                    if (radioEls[index].value === formElementValue) {
                        radioEls[index].checked = true;
                        index = length;
                    }
                }
            } else {
                if (typeof formElementValue === 'boolean') {
                    el.prop('checked', formElementValue);
                } else {
                    el.val(formElementValue);
                }
            }
        }
    }
}

// box 5

function showBox5Tab1() {
    MM_showHideLayers('box5ctntab1', '', 'show');
    MM_showHideLayers('box5ctntab2', '', 'hide');
    MM_showHideLayers('box5ctntab3', '', 'hide');
    MM_showHideLayers('box5ctntab4', '', 'hide');
    MM_showHideLayers('box5ctntab5', '', 'hide');
    $("#box5tab1").className = 'on first';
    $("#box5tab2").className = 'off';
    $("#box5tab3").className = 'off';
    $("#box5tab4").className = 'off';
    $("#box5tab5").className = 'off last';
}

function showBox5Tab2() {
    MM_showHideLayers('box5ctntab1', '', 'hide');
    MM_showHideLayers('box5ctntab2', '', 'show');
    MM_showHideLayers('box5ctntab3', '', 'hide');
    MM_showHideLayers('box5ctntab4', '', 'hide');
    MM_showHideLayers('box5ctntab5', '', 'hide');
    $("#box5tab1").className = 'off first';
    $("#box5tab2").className = 'on';
    $("#box5tab3").className = 'off';
    $("#box5tab4").className = 'off';
    $("#box5tab5").className = 'off last';
}

function showBox5Tab3() {
    MM_showHideLayers('box5ctntab1', '', 'hide');
    MM_showHideLayers('box5ctntab2', '', 'hide');
    MM_showHideLayers('box5ctntab3', '', 'show');
    MM_showHideLayers('box5ctntab4', '', 'hide');
    MM_showHideLayers('box5ctntab5', '', 'hide');
    $("#box5tab1").className = 'off first';
    $("#box5tab2").className = 'off';
    $("#box5tab3").className = 'on';
    $("#box5tab4").className = 'off';
    $("#box5tab5").className = 'off last';
}

function showBox5Tab4() {
    MM_showHideLayers('box5ctntab1', '', 'hide');
    MM_showHideLayers('box5ctntab2', '', 'hide');
    MM_showHideLayers('box5ctntab3', '', 'hide');
    MM_showHideLayers('box5ctntab4', '', 'show');
    MM_showHideLayers('box5ctntab5', '', 'hide');
    $("#box5tab1").className = 'off first';
    $("#box5tab2").className = 'off';
    $("#box5tab3").className = 'off';
    $("#box5tab4").className = 'on';
    $("#box5tab5").className = 'off last';
}

function showBox5Tab5() {
    MM_showHideLayers('box5ctntab1', '', 'hide');
    MM_showHideLayers('box5ctntab2', '', 'hide');
    MM_showHideLayers('box5ctntab3', '', 'hide');
    MM_showHideLayers('box5ctntab4', '', 'hide');
    MM_showHideLayers('box5ctntab5', '', 'show');
    $("#box5tab1").className = 'off first';
    $("#box5tab2").className = 'off';
    $("#box5tab3").className = 'off';
    $("#box5tab4").className = 'off';
    $("#box5tab5").className = 'on last';
}

function switchTab(_container, _tab, _tabIndex, _tabCnt) {
    // _container = $(jqc(_container));
    if ($(_container + _tabIndex)) {
        for (var i = 1; i <= _tabCnt; i++) {
            if ($(_container + i))
                $(_container + i).hide();
        }

        // Tab content
        $(_container + _tabIndex).show();

        return true;
    }

    return false;
}

function vedi(ID) {
    document.getElementById(ID).src = '/img/ret/lampa_off.gif';
}

function nascondi(ID) {
    document.getElementById(ID).src = '/img/ret/lampa_on.gif';
}

// Popup //////////////////////////////////////////////////

var tinyPopupOpts = 'width=250,height=410,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes';
var medPopupOpts = 'width=450,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes';
var bigPopupOpts = 'width=610,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes';
var biggerPopupOpts = 'width=735,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes';

function tinyPopup(_action, _params, _title) {
    url = cgi_script + "/wbOnetoone/cstPopup" + _action + "?" + _params;

    window.open(url + '&title=' + _title, 'popup', tinyPopupOpts);
}

function medPopup(_action, _params, _title) {
    url = cgi_script + "/wbOnetoone/cstPopup" + _action + "?" + _params;

    window.open(url + '&title=' + _title, 'popup', medPopupOpts);
}

function bigPopup(_action, _params, _title) {
    url = cgi_script + "/wbOnetoone/cstPopup" + _action + "?" + _params;

    window.open(url + '&title=' + _title, 'popup', bigPopupOpts);
}


function biggerPopup(_action, _params, _title) {
    url = cgi_script + "/wbOnetoone/cstPopup" + _action + "?" + _params;

    window.open(url + '&title=' + _title, 'popup', biggerPopupOpts);
}

function cstPopup(url, title, width, height) {
    var newWidth, newHeight, diff, newWin, resize = false;

    // Defaults
    newWidth = width || 450;
    newHeight = height || 445;

    newWin = window.open(url + '&title=' + title, 'popup', 'width=' + newWidth + ',height=' + newHeight + ',top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');

    // Full width
    if (width === 0) {
        resize = true;
        newWidth = window.screen.availWidth;
    }
    // Full height
    if (height === 0) {
        resize = true;
        newHeight = window.screen.availHeight;
    }
    if (resize) {
        newWin.resizeTo(newWidth, newHeight);
    }
}

/*
 * this global variable is initialized to zero and is used to have a left offset among all the multiple popup windows existing in the current page.
 */
var privUtilitiesPopupLeftOffset = 0;

// Variabili globali per grandezza popub book
var popBookWidth = 418;
var popBookHeight = 255;

/*
 * cstMultiplePopup(): Creates a multiple popup. Only url is a requested input: if one or more of other parameters are not passed, then default values
 * are used.
 */
function cstMultiplePopup(url, title, width, height) {

    // set popup default values
    var newWidth = width || 565;
    if (newWidth === 425) {
        newWidth = 375;
    };
    var newHeight = height || 475; // 45;
    var newTitle = title || '';
    var windowName = 'bookFather';

    if (url.indexOf('ricercaBook.do') > 0) {
        url = url.replace(/ricercaBook.do/, 'ricercaBookNw.do');
        newWidth = popBookWidth;
        newHeight = popBookHeight;
    }



    // set popup left offset
    var popupOffsetStep = 20;
    var popupMaxNumberOfWindows = 10;
    var popupMaxOffset = (popupMaxNumberOfWindows * popupOffsetStep);
    privUtilitiesPopupLeftOffset = (privUtilitiesPopupLeftOffset + popupOffsetStep);
    if (privUtilitiesPopupLeftOffset > popupMaxOffset) {
        privUtilitiesPopupLeftOffset = 0;
    }

    var popupParams = '';

    if (newTitle !== 'Webank - Nuovo book') {

        // set popup parent window name
        if (window.name !== windowName) {
            window.name = windowName;
        }

        // set popup parent window domain
        changeOriginalDomain();

        // set popup parameters
        popupParams = 'width=' + newWidth + ',height=' + newHeight + ',top=0,left=' + privUtilitiesPopupLeftOffset + ',status=no,toolbar=no,menubar=no,resizable=yes,scrollbars=auto';
    } else {

        // set popup parameters
        var spostaDelta = 25;
        popX = (window.screenX) ? window.screenX : window.screenLeft;
        if (!parseInt(popX)) {
            popX = 0;
        }
        popX = popX + spostaDelta;
        popY = (window.screenY) ? window.screenY : window.screenTop;
        if (!parseInt(popY)) {
            popY = 0;
        }
        if (navigator.appVersion.indexOf("MSIE") < 0) {
            popY = popY + 25;
        }
        url = url + '&title=' + newTitle;
        popupParams = 'width=' + newWidth + ',height=' + newHeight + ',top=' + popY + ',left=' + popX + ',status=no,toolbar=no,menubar=no,resizable=yes,scrollbars=auto';
    }

    var popupUrl = url + '&formTarget=' + windowName;
    var popupWindowName = ('book' + new Date().getTime());

    // open popup window
    window.open(popupUrl, popupWindowName, popupParams);
}

function cstBookPopup(url, title, width, height) {

    // set popup default values
    var newWidth = width || 565;
    var newHeight = height || 45;
    var newTitle = title || '';
    var windowName = 'bookFather';

    // set popup left offset
    var popupOffsetStep = 20;
    var popupMaxNumberOfWindows = 10;
    var popupMaxOffset = (popupMaxNumberOfWindows * popupOffsetStep);
    privUtilitiesPopupLeftOffset = (privUtilitiesPopupLeftOffset + popupOffsetStep);
    if (privUtilitiesPopupLeftOffset > popupMaxOffset) {
        privUtilitiesPopupLeftOffset = 0;
    }

    var popupParams = '';

    if (newTitle !== 'Webank - Nuovo book') {

        // set popup parent window name
        if (window.name !== windowName) {
            window.name = windowName;
        }

        // set popup parent window domain
        changeOriginalDomain();

        // set popup parameters
        popupParams = 'width=' + newWidth + ',height=' + newHeight + ',top=0,left=' + privUtilitiesPopupLeftOffset + ',status=no,toolbar=no,menubar=no,resizable=yes,scrollbars=auto';
    } else {

        // set popup parameters
        var spostaDelta = 25;
        popX = (window.screenX) ? window.screenX : window.screenLeft;
        if (!parseInt(popX)) {
            popX = 0;
        }
        popX = popX + spostaDelta;
        popY = (window.screenY) ? window.screenY : window.screenTop;
        if (!parseInt(popY)) {
            popY = 0;
        }
        if (navigator.appVersion.indexOf("MSIE") < 0) {
            popY = popY + 25;
        }
        url = url + '&title=' + newTitle;
        popupParams = 'width=' + newWidth + ',height=' + newHeight + ',top=' + popY + ',left=' + popX + ',status=no,toolbar=no,menubar=no,resizable=yes,scrollbars=auto';
    }

    var popupUrl = url + '&formTarget=' + windowName;
    var popupWindowName = ('book' + new Date().getTime());

    // open popup window
    window.open(popupUrl, popupWindowName, popupParams);
}

// Popup //////////////////////////////////////////////////

/**
 * @description Restituisce il titolo completo o parziale del book
 * @popupTitle Il titolo della popup da aprire
 * @completeTitle boolean per decidere se il titolo va completato o meno
 * @byPassEncoding boolean per decidere se effettuare la codifica dei caratteri o meno
 */
function completeBookTitle(popupTitle, completeTitle, byPassEncoding) {
    if (popupTitle) {
        if (completeTitle) {
            popupTitle = popupTitle + " - Book Webank";
        }
        if (!byPassEncoding) {
            popupTitle = fixedEncodeURIComponent(popupTitle);
        }
    }
    return popupTitle;
}

function changeOriginalDomain() {

    try {
        if (cgi_host) {
            var oldDomain = cgi_host;
            var dotPosition = oldDomain.indexOf('.') + 1;
            if (dotPosition > 0) {
                var newDomain = oldDomain.substring(dotPosition);
                if (document.domain !== newDomain) {
                    document.domain = newDomain;
                }
            }
        }
    } catch (e) {}
}

function dynatabberScroll(direction) {
    // rileva il primo visibile
    var firstvis = 0;
    tabs = $('#dynatabber a');
    for (i = 1; i <= tabs.length - 1; i++) {
        if (firstvis === 0 && tabs[i].style.display === 'block') {
            firstvis = i;
        }
    }
    // reinizializza il dynatabber
    if (direction === 'left' && tabs[0].className === 'leftarrow') {
        dynatabberFlow(firstvis - 1);
    }
    if (direction === 'right' && tabs[tabs.length - 1].className === 'rightarrow') {
        dynatabberFlow(firstvis + 1);
    }
}

function dynatabberFlow(idinit) {
    tabs = $('#dynatabber a');
    var indexfirst = 1;
    var indexlast = tabs.length - 2;
    var indexfirstvisible = idinit;
    var indexlastvisible = idinit + 4;
    for (i = indexfirst; i <= indexlast; i++) {
        if (i >= indexfirstvisible && i <= indexlastvisible) { tabs[i].style.display = 'block'; } else { tabs[i].style.display = 'none'; }
    }
    if (tabs[1].style.display !== 'none') { tabs[0].className = 'leftarrow leftarrowunactive'; } else { tabs[0].className = 'leftarrow'; };
    if (tabs[indexlast].style.display !== 'none') { tabs[tabs.length - 1].className = 'rightarrow rightarrowunactive'; } else { tabs[tabs.length - 1].className = 'rightarrow'; };
}

function pop_up_int(url) {
    var s_width = screen.width;
    var s_height = screen.height;
    var sizeL = 530;
    if (s_width >= 1024 && s_height >= 768) {
        sizeL = 760;
    }
    window.open(url, 'mainwb', 'width=250,height=410,top=130,left=' + sizeL + ',status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');
}

function trading_desk(path, param) {
    var s_width = screen.width;
    var s_height = screen.height;
    var sizeW = 640;
    var sizeW = 480;
    var link = cgi_script + path + "?BV_UseBVCookie=Yes&cf=" + Math.random() + param;
    if (s_width >= 1024 && s_height >= 768) { sizeW = 800;
        sizeW = 600; }
    window.open(link, 'tdWindow', 'width=' + sizeW + ',height=' + sizeW + ',top=0,left=0,status=no,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');
}

/* funzione di autosize contenitori larghi */

function enlargecont(destinationwidth) {
    var delta = destinationwidth - 575;
    var page1 = $('#page1');
    if (delta > 0 && page1.length) {
        document.body.style.backgroundImage = 'none';
        $('#content')[0].style.width = 761 + delta + 'px';
        page1[0].style.width = 761 + delta + 'px';
        $('#fixedtools')[0].style.marginLeft = 778 + delta + 'px';
        // allargamento consequenziale del menu di primo e secondo livello
        if (delta >= 4) {
            $('#menufirst')[0].style.width = 761 + delta + 'px';
            $('#menusecond')[0].style.width = 761 + delta + 'px';
            $('#menufirst')[0].style.backgroundImage = 'url(/img/ret/str_menulevel1_bg_large.gif)';
            $('#menusecond')[0].style.backgroundImage = 'url(/img/ret/str_menulevel2_bg_large.gif)';
            closeDiv1 = document.createElement('DIV');
            closeDiv1.className = 'closer';
            var closeDiv1 = $('#menufirst')[0].appendChild(closeDiv1);
            closeDiv2 = document.createElement('DIV');
            closeDiv2.className = 'closer';
            var closeDiv2 = $('#menusecond')[0].appendChild(closeDiv2);
        }
    }
}

function autosize() {
    var maxwidth = 0;
    var allelements = $('#contenuti').childNodes;
    for (i = 0; i <= allelements.length - 1; i++) {
        if (allelements[i].width() > maxwidth) {
            maxwidth = allelements[i].width();
        }
    }
    enlargecont(maxwidth);
}


/* funzione di autorilevamento contenitori larghi */
function sensewidth() {
    var idtosense = '#obbcontenuti';
    if ($(idtosense).length) {
        enlargecont($(idtosense).width());
    }
}

function openClose(a) {
    // cambio immagine
    if (a.parentNode.className === 'open') {
        a.parentNode.className = 'close';
        a.parentNode.getElementsByTagName('div')[0].style.display = 'none';
    } else {
        a.parentNode.className = 'open';
        a.parentNode.getElementsByTagName('div')[0].style.display = 'block';
    }
}

addEvent(window, "load", sensewidth);

function formMailDettCoordSwitch() {
    if ($('#formMailDettCoord')[0].style.display === 'block' || $('#formMailDettCoord')[0].style.display === '') {
        $('#formMailDettCoord').hide();
        if ($('#mailCoordBankDisplayerLink') !== null) {
            $('#mailCoordBankDisplayerLink').html('Vedi dettaglio coordinate');
        }
    } else {
        $('#homeMailCBFdest').focus();
        $('#formMailDettCoord').show();
        if ($('#mailCoordBankDisplayerLink') !== null) {
            $('#mailCoordBankDisplayerLink').html('Nascondi dettaglio coordinate');
        }
    }
}

function openSendEmail(divId) { // divId=divtoupdate
    $('#' + divId).load(cgi_script + '/wbOnetoone/wbblack/ajax/json/getCoordBancarie.jsp', { divId: divId, idx: $('#selectConti').val() },
        function() {
            openAlert(divId);
        }
    );
}

function openSendEmailSimple(divId) { // divId=divtoupdate
    $('#' + divId).load(
        cgi_script + '/wbOnetoone/wbblack/ajax/json/getCoordBancarieSimple.jsp', {
            divId: divId,
            idx: $('#selectConti').val()
        },
        function() {
            openAlert(divId);
        }
    );
}

/*
 * Interrogazione remota asincrona alla action _actionUrl con parametri _actionParams che restituisce un stringa/oggetto json transport e chiama una
 * funzione _callBack
 */
function ajaxFormSubmitAsynch(_formID, _actionParams, _callBack) {
    _formID = jqc(_formID);
    var form = $(_formID),
        formJSON, successFunc, failureFunc;
    if (form.length) {
        if (_actionParams === null || _actionParams === '') {
            _actionParams = { cf: Math.random() }
        } else if ($.type(_actionParams) === 'object') {
            if (typeof _actionParams.cf === 'undefined') { _actionParams['cf'] = Math.random(); }
        } else { params = _actionParams; }
        setLoading(_formID + "Img", _formID + "Loading", _formID + "Display");
        formJSON = {};
        successFunc = function(data, textStatus, jqXHR) {
            stopLoading(_formID + "Img", _formID + "Loading", _formID + "Display", false);
            _callBack(data, jqXHR);
        };
        failureFunc = function(data) {
            stopLoading(_formID + "Img", _formID + "Loading", _formID + "Display", true);
        };
        $.map(form.serializeArray(), function(n, i) { formJSON[n.name] = n.value; })
        jqAJAXCall("POST", 'json', form.attr('action'), successFunc, failureFunc, $.extend(formJSON, _actionParams));
    }
}

function getJsonResponseAsynch(_actionUrl, _actionParams, _callBack, _formID) {
    var formImg = (_formID) ? _formID + "Img" : null,
        formLoading = (_formID) ? _formID + "Loading" : null,
        formDisplay = (_formID) ? _formID + "Display" : null,
        params;
    if (_actionParams === null || _actionParams === '') {
        params = $.param({ cf: Math.random() });
    } else if ($.type(_actionParams) === 'object') {
        if (typeof _actionParams.cf === 'undefined') { _actionParams['cf'] = Math.random(); }
        params = $.param(_actionParams);
    } else { params = _actionParams; }
    setLoading(formImg, formLoading, formDisplay);
    successFunc = function(data, textStatus, jqXHR) {
        stopLoading(_formID + "Img", _formID + "Loading", _formID + "Display");
        _callBack(data, jqXHR);
    }
    failureFunc = function(jqXHR, textStatus, errorThrown) {
        stopLoading(_formID + "Img", _formID + "Loading", _formID + "Display");
    }
    jqAJAXCall('GET', 'json', _actionUrl, successFunc, failureFunc, params);
}

function checkMailCoordBank() {
    var errors = [],
        homeMailCBFdest = $("#homeMailCBFdest"),
        email = homeMailCBFdest.val().replace(/\s+/g, ''),
        checkEmail = true;
    if (email === '') {
        checkEmail = false;
    } else {
        $.each(email.replace(/\s+/g, '').split(','), function() {
            checkEmail = mailAddressValidator(this);
            return checkEmail;
        });
    }
    if (!checkEmail) {
        errors.push({ field: homeMailCBFdest, text: "Occorre inserire almeno un'email valida" });
    } else {
        homeMailCBFdest.val(email);
    }
    setErrors(errors, $("#homeMailCoordBankForm"));
    return (!errors.length);
}

function inviaMailCoordBank() {

    // ripristino i colori delle label dopo un errore
    if ($('#homeMailCBFdest').length && $('homeMailCBFdestconf').length) {
        $('#homeMailCBFdestLabel')[0].style.color = "";
    }

    var chkMailDest = true;

    if ($('#homeMailCBFdest').length) { // && $('homeMailCBFdestconf')!==null
        chkMailDest = checkMailFormat($('#homeMailCBFdest').val());
    }

    if (chkMailDest) {
        $('#invioMailWarng').hide();
        var param = {
            idx: $('#selectConti').val(),
            cf: Math.random()
        }
        ajaxFormSubmitAsynch('homeMailCoordBankForm', param, handleMailCoordBank);
    } else {
        $('#invioMailWarng').html("<strong  class=\"nega\">ATTENZIONE!</strong><br/>L'indirizzo email non &egrave scritto in maniera corretta.").show();
        if ($('#homeMailCBFdest').length && $('#homeMailCBFdestconf').length) {
            if (!chkMailDest) $('#homeMailCBFdestLabel')[0].style.color = "red";
        }
    }
}

function inviaMailCoordBankSimple() {
    var param = {
        idx: $('#selectConti').val(),
        cf: Math.random()
    }
    ajaxFormSubmitAsynch('homeMailCoordBankForm', param, handleMailCoordBankSimple);
}

function certificaEmail() {
    if (checkMailFormat($('#certificaMailForm').mail.value)) {
        ajaxFormSubmitAsynch('#certificaMailForm', null, handleCertificaEmail);
    }
}

function checkMailFormat(mail) {
    var emails = new String(mail);
    var miaarray = emails.split(",");
    var esito = false;

    for (i = 0; i < miaarray.length; i++) {
        var mail2bchk = miaarray[i];
        mail2bchk = mail2bchk.replace(/^\s*/, "").replace(/\s*$/, "");
        if (mailAddressValidator(mail2bchk)) {
            esito = true;
        } else { return false; }
    }
    return esito;
}

function handleMailCoordBank(jsonResponse, transport) {

    if (jsonResponse.OK) {
        if ($('#mailEsitoOK') !== null && $('#mailBody') !== null) {
            $('#mailBody').hide();
            $('#mailEsitoOK').show();
        } else {
            closeAlert('homeInvioCoorBank');
        }
    } else {
        if (jsonResponse.warningMessage && jsonResponse.warningMessage !== "") {
            if ($('#invioMailWarng') !== null) {
                $('#invioMailWarng').innerHTML = jsonResponse.warningMessage;
                $('#invioMailWarng').show();
            }
        }
    }
}

function handleMailCoordBankSimple(jsonResponse, transport) {
    $('#mailBody').hide();
    if (jsonResponse.OK) {
        $('#mailEsitoKO').hide();
        $('#mailEsitoOK').show();
    } else {
        if (jsonResponse.warningMessage && jsonResponse.warningMessage !== "") {
            $('#invioMailWarng').html(jsonResponse.warningMessage);
        }
        $('#mailEsitoKO').show();
        $('#mailEsitoOK').hide();
    }
}

function handleCertificaEmail(jsonResponse, transport) {

    if (jsonResponse.OK) {
        if (typeof console !== 'undefined') console.debug('Tutto a posto: ' + $('#certificaMailForm').mail);
    }
}

/* BLOCCO DEI CAMPI */
function getFieldsToLock(containerId) {
    var fieldstolock = [],
        el = $('#' + containerId);
    el.find('select').each(function(index, item) { fieldstolock.push(item); });
    el.find('input').each(function(index, item) { fieldstolock.push(item); });
    el.find('textarea').each(function(index, item) { fieldstolock.push(item); });
    return fieldstolock;
}

function lockFields(containerId) {
    // accorpamento di tutti i tipi di input
    var fieldstolock = getFieldsToLock(containerId);
    // disabilitazione di tutti gli elementi
    for (var i = 0, j = fieldstolock.length; i < (j - 1); i++) {
        fieldstolock[i].className = 'disabled';
        fieldstolock[i].disabled = true;
    }
}

function unlockFields(containerId) {
    // accorpamento di tutti i tipi di input
    var fieldstolock = getFieldsToLock(containerId);
    // disabilitazione di tutti gli elementi
    for (var i = 0, j = fieldstolock.length; i < (j - 1); i++) {
        fieldstolock[i].className = '';
        fieldstolock[i].disabled = false;
    }
}


// NUOVA FUNZIONE SHOWBOXTAB
function showBoxTabAzioni(tabid) {
    for (var i = 1; i <= 2; i++) {
        var tabazioni = $('#tabazioni_' + i);
        if (tabazioni.length) { tabazioni.hide(); }
    }
    $('#tabazioni_' + tabid).show();

    var fieldstolock = getFieldsToLock(containerId);
    // disabilitazione di tutti gli elementi
    for (var i = 0, j = fieldstolock.length; i < (j - 1); i++) {
        fieldstolock[i].className = '';
        fieldstolock[i].disabled = false;
    }
}

// Restituisce l'url da chiamare per aprire la pagina di quotazione su xplane
// Serve il ticker radiocor del titolo;
function getLinkRadiocor(codRadiocor) {
    var url = sole_24h + '?URL=' + escape(cgi_serverurl + cgi_script + '/');
    url += '&urlxplane=' + escape('page=DettaglioTitoloGenerico&QUOTE=' + codRadiocor);
    url += '&XPID=' + tibco_code;
    return url;
}

// Stessa funzione di prima con l'aggiunta del parametro per distinguere una chiamata dal push o meno
function getLinkRadiocorPush(codRadiocor) {
    var url = getLinkRadiocor(codRadiocor);
    url += 'td=y';
    return url;
}

// Paragrafi espandibili
function expandArgument(title, img, imgOff) {
    if (title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display !== 'none') {
        title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display = 'none';
        title.firstChild.src = '/wscmn/img/ico1gr_indchiuso.gif';
        if (img) { title.firstChild.src = img }
    } else {
        title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display = '';
        title.firstChild.src = '/wscmn/img/ico1gr_indaperto.gif';
        if (imgOff) { title.firstChild.src = imgOff };

    }
    if ($(title).parents('.layeralert3').length > 0) {
        var overlayerInAccordion = $(title).parents('.layeralert3'),
            heightLimit = $(window).height();
        if (overlayerInAccordion.outerHeight() > heightLimit) {
            overlayerInAccordion.find('.body').wrapInner('<div class="overflow" />');
            overlayerInAccordion.find('.overflow').css({
                'height': (heightLimit - 50) + 'px',
                'overflow-y': 'auto',
                'width': '100%'
            });
            $('.overflow').on("scroll", function() { ttHide() });
        } else {
            overlayerInAccordion.find('.overflow').css('height', 'auto');
        }

    }
}

function expandArgumentAol(title, img, imgOff) {
    if (title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display !== 'none') {
        title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display = 'none';
        title.firstChild.src = '/img/ret/ico1gr_aol_chiuso.gif';
        if (img) { title.firstChild.src = img }
    } else {
        title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display = '';
        title.firstChild.src = '/img/ret/ico1gr_aol_aperto.gif';
        if (imgOff) { title.firstChild.src = imgOff }
    }
}

/* PAGINA DI FUNZIONI IN ORDINE ALFABETICO */
function funFilterLetter(letter, letterbtn) {
    if (letterbtn) funSetonBtn(letterbtn);
    var totallis = $('#functionlista li');
    letterelements = Array();
    for (i = 0; i < totallis.length; i++) {
        if (totallis[i].getElementsByTagName('A')[0].innerHTML.substring(0, 1).toUpperCase() === letter) {
            letterelements.push(totallis[i]);
        }
    }
    return letterelements;
}

function funShowLetter(letter, letterbtn) {
    $('#functionscontainer').html(funDetail(funFilterLetter(letter, letterbtn)));
    $('#cercafield').val('')
}

function funCerca(stringa) {
    if (stringa.length >= 3) {
        stringa = stringa.toLowerCase();
        var totallis = $('#functionlista li');
        cercacorpo = "";
        counter = 0;
        for (i = 0; i < totallis.length; i++) {
            stringtocheck = totallis[i].getElementsByTagName('A')[0].innerHTML.toLowerCase();
            if (stringtocheck.indexOf(stringa) >= 0) {
                cercacorpo = cercacorpo + '<li>' + totallis[i].innerHTML + '</li>';
                counter++;
            }
        }
        if (cercacorpo !== "") {
            $('#functionscontainer').html('<div class="functionsselector"><div class="selectortop"></div><div class="selectortitle"><p>Sono stati trovati <span>' + counter + '</span> risultati che corrispondono ai criteri di ricerca immessi</p></div><div class="selectorbody"><ul class="singlecol">' + cercacorpo + '</ul></div><div class="selectorbottom"></div></div></div>');
        } else {
            $('#functionscontainer').html('<div class="functionsselector"><div class="selectortop"></div><div class="selectortitle"><p>Sono stati trovati <span>' + counter + '</span> risultati che corrispondono ai criteri di ricerca immessi</p></div><div class="selectorbody"><p class="rosso">Non sono stati trovati risultati inerenti i riferimenti inseriti, prova ad effettuare la ricerca inserendo parametri differenti</p></div><div class="selectorbottom"></div></div></div>');
        }
        funSetonBtn();
    } else {
        $('#cercafielderror').html('Occorre specificare almeno 3 lettere');
        $('#cercafielderror').show();
        $('#cercafielderror').delay(2000).fadeOut(500);
    }
}

function funDetail(elements, title, up, message) {
    newlist = '<div class="functionsselector"><div class="selectortop"></div>';
    if (title) {
        newlist = newlist + '<div class="selectortitle"><span>' + title + '</span>';
        if (up) {
            newlist = newlist + '<a href="#">Torna su</a>';
        }
        newlist = newlist + '</div>'
    }

    newlist = newlist + '<div class="selectorbody">';
    if (message) {
        newlist = newlist + '<p class="red">' + message + '</p>';
    }
    spacca = Math.round(elements.length / 2);
    spaccacounter = 0;

    for (x = 0; x < elements.length; x++) {
        if (spaccacounter === 0) {
            if (x === 0) {
                newlist = newlist + '<ul class="first">';
            } else {
                newlist = newlist + '<ul>';
            }
        }
        newlist = newlist + '<li>' + elements[x].innerHTML + '</li>';
        spaccacounter++;
        if (spaccacounter === spacca || x === (elements.length - 1)) {
            newlist = newlist + '</ul>';
            spaccacounter = 0;
        }
    }
    newlist = newlist + '</div><div class="selectorbottom"></div></div></div>';

    return newlist;
}

function funShowall() {
    funSetonBtn($('#mostratutti'));
    $('#functionscontainer').innerHTML = "Caricamento in corso...";
    newcontent = "";
    for (j = 0; j < funLetters.length; j++) {
        if (funLettercheck.indexOf(funLetters[j]) >= 0) {
            newcontent = newcontent + funDetail(funFilterLetter(funLetters[j]), funLetters[j], 'up');
        }
    }
    // alert (newcontent);
    // $('#functionscontainer').innerHTML = newcontent;
    $('#functionscontainer').html(newcontent);
    $('#cercafield').value = '';
}


function funSetonBtn(btn) {
    // tutti i bottoni off
    var allletters = $('#indice a');
    for (i = 0; i < allletters.length; i++) {
        allletters[i].className = '';
    }
    // bottone on
    if (btn) btn.className = 'selected';
}


function funInitializepage() {
    funLetters = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    $('#cercafield').value = '';
    // inizializza la stringa lettere presenti
    // var totallis = $('#functionlista').getElementsByTagName('LI');
    var totallis = $('#functionlista LI');
    funLettercheck = "";
    for (i = 0; i < totallis.length; i++) {
        if (funLettercheck.indexOf(totallis[i].getElementsByTagName('A')[0].innerHTML.substring(0, 1).toUpperCase()) < 0) {
            funLettercheck = funLettercheck + totallis[i].getElementsByTagName('A')[0].innerHTML.substring(0, 1);
        }
    }
    var menucontent = "";
    for (x = 0; x < funLetters.length; x++) {
        if (funLettercheck.indexOf(funLetters[x]) >= 0) {
            menucontent = menucontent + ('<li><a href="javascript:;" onclick="javascript: funShowLetter (\'' + funLetters[x] + '\',this);">' + funLetters[x] + '</a></li>');
        } else {
            menucontent = menucontent + ('<li><span>' + funLetters[x] + '</span></li>');
        }
    }
    menucontent = menucontent + '<li><a href="javascript:;" onclick="javascript: funShowall();" id="mostratutti">Mostra tutti</a></li>'
    $('#indice').html('<ul>' + menucontent + '</ul>');
    funShowall();
}

/* Funzioni box chiedi all'esperto */
function boxChiediEspertoClose() {
    $('#boxChiediEsperto').hide();
}

function boxChiediEspertoOpen(mode) {
    var boxChiediEsperto = $('#boxChiediEsperto'),
        espertomenu = $('div.espertomenu');
    mode = $(jqc(mode));
    for (var i = 0, tot = espertomenu.length; i < tot; i++) {
        espertomenu.eq(i).hide();
    }

    boxChiediEsperto.hide();

    // setta il modulo da utilizzare
    $('#chiediEspertoChiamare').hide();
    $('#chiediEspertoScrivi').hide();
    $(mode).show();

    // setta la frase introduttiva
    if (mode === '#chiediEspertoChiamare') {
        $('#introPhrase').html('Un <strong>esperto</strong> ti richiama <strong>quando vuoi tu</strong>.');
        // popola combo orari
        getEspertoTimeSlotsList(0);
    } else {
        $('#introPhrase').html('Invia una <strong>email</strong>.<br />Il nostro <strong>esperto</strong> ti risponder&agrave;.');
    }

    if (boxChiediEsperto.css('display') !== 'block') {
        document.body.insertBefore(boxChiediEsperto[0], document.getElementsByTagName('DIV')[0]);

        boxChiediEsperto.css({
            zIndex: getNextHighestZindex(),
            display: 'block',
            marginLeft: $('#page1').offsetLeft - 8 + 'px',
            top: '0px',
            left: '0px',
            marginTop: $('#menusxc').height() + 180 + 'px'
        })

        if ($('#menusxc').height() + 180 <= $(window).scrollTop()) {
            boxChiediEsperto.css('margin-top', $(window).scrollTop() + 5 + 'px');
        }
        boxChiediEsperto.draggable({ handle: 'boxChiediEspertoTop' });
    }
}

function ChiediEspertoSwitch(button) {
    // chiude tutti gli altri "chiedi all'esperto" aperti
    for (i = 0; i < $('div.espertomenu').length; i++) {
        if ($('div.espertomenu')[i].parentNode.getElementsByTagName('A')[3] !== button) $('div.espertomenu')[i].style.display = 'none';
    }

    espertomenu = button.parentNode.getElementsByTagName('DIV')[0];
    if (espertomenu.style.display === 'none') {
        espertomenu.style.display = 'block';
    } else {
        espertomenu.style.display = 'none';
    }
}

function chiediEspertoCloseDisclaimer(clicked) {
    var selects = $('#chiediespertoform01 select');
    clicked.parentNode.style.display = 'none';
    for (var i = 0, tot = selects.length; i < tot; ++i) {
        selects[i].style.visibility = 'visible';
    }
}

function chiediEspertoOpenDisclaimer(clicked) {
    var selects = $('#chiediespertoform01 select');
    clicked.parentNode.getElementsByTagName('DIV')[0].style.display = 'block';
    for (var i = 0, tot = selects.length; i < tot; ++i) {
        selects[i].style.visibility = 'hidden';
    }
}


/* Fine Funzioni box chiedi all'esperto */


/* HOVER/OUT e SELECT DEI TAB NUOVI */
function newTabSelected(tabletda) {
    var tabletd = $(tabletda).parent();
    if (!tabletd.attr('isselected'))
    // toglie il "selezionato" dall'altro tab
    {
        var alltabs = tabletd[0].parentNode.getElementsByTagName('TD');
        for (i = 0; i < alltabs.length; i++) {
            if (alltabs[i].className === 'off2b' || alltabs[i].className === 'on2b') {
                alltabs[i].className = 'off2';
            }
            if ($(alltabs[i]).attr('isselected')) {
                alltabs[i].removeAttribute('isselected');
                newTabOff(alltabs[i].getElementsByTagName('A')[0]);
            }
        }
        // attiva quello cliccato
        tabletd.attr('isselected', 'true');
        newTabOn(tabletda);
    }
}


function newTabOn(tabletda) {
    // carica un array coi td
    var tabletd = $(tabletda).parent();
    var tdSibiling = tabletd.next();
    tabletd[0].className = tabletd[0].className.replace('off', 'on');
    tdSibiling[0].className = tdSibiling[0].className.replace('off', 'on');
    var bColor = (!tabletd.attr('isselected')) ? "#cccccc" : "#ffffff";
    tabletd.css("borderBottom", "solid 1px " + bColor);
    tdSibiling.css("borderBottom", "solid 1px " + bColor);
    previoustd = tabletd.prev();
    if (previoustd[0].className === 'off2') previoustd[0].className = 'off2b';
    if (previoustd[0].className === 'offinizio') previoustd[0].className = 'oninizio';
}

function newTabOff(tabletda) {
    var tabletd = $(tabletda).parent();
    var tdSibiling = tabletd.next();
    if (!tabletd.attr('isselected')) {
        tabletd[0].className = tabletd[0].className.replace('on', 'off');
        tdSibiling[0].className = tdSibiling[0].className.replace('on', 'off');
        var previoustd = tabletd.prev();
        if (previoustd[0].className === 'off2b') previoustd[0].className = 'off2';
        if (previoustd[0].className === 'oninizio') previoustd[0].className = 'offinizio';
        tabletd.css("borderBottom", "solid 1px #cccccc")
        tdSibiling.css("borderBottom", "solid 1px #cccccc")
    }
}


/* Funzioni per visual con tabber */
function thisMovie(movieName) {
    var movie = $("#" + movieName)[0];
    if (movie) return movie;
    else if ($.browser.msie) {
        return window[movieName];
    } else {
        return document[movieName];
    }
}

/* oggetto complesso */
function mainContentObjectOpen(maincontentobjectId) {
    maincontentobject = $(jqc(maincontentobjectId));
    // interrompe la riproduzione degli oggetti attivi
    try { thisMovie('flashguarda').stopPlayback_Video() } catch (e) {}
    try { thisMovie('flashascolta').stopPlayback_Audio() } catch (e) {}

    for (i = 0; i < maincontentobjectButtons.length; i++) {
        if ($(maincontentobjectButtons[i])) {
            $(maincontentobjectButtons[i]).hide();
            $('#tab' + maincontentobjectButtons[i]).attr('class', '');
        }
    }
    // stoppa tutto
    maincontentobject.show();
    $('#tab ' + maincontentobject.attr('id')).attr('class', 'selected');

}

function mainContentObjectFire() {
    var maincontentobjectmenu = $('#maincontentobjectmenu');
    if (maincontentobjectmenu.length) {
        maincontentobjectButtons = ['guarda', 'ascolta', 'simula'];
        for (i = 0; i < maincontentobjectButtons.length; i++) {
            // applicazione dei bottoni
            if (document.getElementById(maincontentobjectButtons[i])) {
                classappend = "";
                if (document.getElementById(maincontentobjectButtons[i]).style.display !== 'none') {
                    classappend = ' class=\"selected\" ';
                }
                maincontentobjectmenu[0].innerHTML = maincontentobjectmenu[0].innerHTML + '<a href=\"javascript:;\" alt=\"' + maincontentobjectButtons[i] + '\" ' + classappend + ' onclick=\"mainContentObjectOpen(\'' + maincontentobjectButtons[i] + '\');" id ="tab' + maincontentobjectButtons[i] + '"></a>'

            } else {
                maincontentobjectmenu[0].innerHTML = maincontentobjectmenu[0].innerHTML + '<span class="disabled"></span>'
            }
        }
        // controlla se esiste almeno un tab aperto ed eventualmente innesca il primo
        // per sicurezza se ci si dimentica nel codice di togliere il DISPLAY = NONE
        if ($('#maincontentobjectarea').find('div:first')[0].style.display === 'none') {
            mainContentObjectOpen(maincontentobjectmenu.find('a:first')[0].id.replace('tab', ''));
        }
    }
}

// Funzioni per autoadattamento dell'altezza della pagina con l'swf del calcolatore mutui
function setCalcolatoreHeight(altezza) {
    $("#calcolatore_mutui").height(altezza);

    // Conto tecnico
    calcolatoreCtCont = $("#ctcont");
    if (calcolatoreCtCont.length) {
        if (altezza < (calcolatoreCtCont.height() - 20)) {
            calcolatoreCtCont.height(393);
        } else {
            calcolatoreCtCont.height(altezza + 20);
        }
    }
}
// fine funzioni per autoadattamento


/* Tooltip */
function showTooltip(anchor, e) {
    var tooltip = anchor.getElementsByTagName('SPAN')[0];

    // Margin laterale
    var marginLeft = 5;
    var baseLeft = 0;

    // Margin superiore
    var marginTop = -(anchor.height() - tooltip.height()) / 2;
    var baseTop = 0;

    tooltip.style.marginTop = (baseTop - marginTop) + 'px';
    tooltip.style.marginLeft = (baseLeft - marginLeft - tooltip.width()) + 'px';
    tooltip.style.top = 0;
    tooltip.style.left = 0;
    tooltip.style.visibility = 'visible';
}

function hideTooltip(anchor) {
    anchor.getElementsByTagName('SPAN')[0].style.visibility = 'hidden';
}


/*
 * -- Get the rendered style of an element --
 * 
 * Example call of the function: getStyle($("#container"), "font-size");
 */
function getStyle(oElm, strCssRule) {
    var strValue = "";

    if (document.defaultView && document.defaultView.getComputedStyle) {
        strValue = document.defaultView.getComputedStyle(oElm, "").getPropertyValue(strCssRule);
    } else if (oElm.currentStyle) {
        try {
            strCssRule = strCssRule.replace(/\-(\w)/g, function(strMatch, p1) {
                return p1.toUpperCase();
            });
            strValue = oElm.currentStyle[strCssRule];
        } catch (e) {
            // Used to prevent an error in IE 5.0
        }
    }

    return strValue;
}

/* News z-index */
function newsHighZ(elem) {
    var el = $(elem);

    if (el !== null) {
        el.removeClass('newsLowZ');
        el.addClass('newsHighZ');
    }
}

function newsLowZ(elem) {
    var el = $(elem);

    if (el !== null) {
        el.removeClass('newsHighZ');
        el.addClass('newsLowZ');
    }
}

/*****************************************************************************************************************************************************
 * CAROUSEL LOGHI
 * Crea un carousel che fa roteare delle immagini e mostra un testo associato all'immagine in primo piano, in un box sottostante.
 * 
 * @author Andrea Colanicchia
 * @version 1.1, 2010/07/23
 */

// Non permette che parta uno scroll nuovo

var enableScroll = true;
var rapidScroll = false;

// Configurazione animazione
var logosToShow = 5;
var activeLogo = 3;
var tabWidth = 117;
var tabBigWidth = 164;

// Variabili per selezionare e memorizzare elementi del DOM
var currentLogo = 2;
var logosDiv = null;
var logosSelector = 'div.tab';
var logoToRemove = null;
var fakeTab = null;
var logos = null;
var totLogos = 0;
var visibleLogos = 0;
var logosText = new Object;
var oldActiveLogoDiv = null;
var newActiveLogoDiv = null;
var pos = 1;

// Variabili per memorizzare l'handle per il drag dell'alert
var dragHandleAlert3 = null;

$(initCarousel);

// Inizializza il carousel mettendo in primo piano un logo random
function initCarousel() {
    logosDiv = $("#logosDiv");

    if (logosDiv.length) {
        // Inizializza le variabili
        logosSelector = 'div.tab';
        logos = logosDiv.find(logosSelector).toArray();
        totLogos = logos.length;
        visibleLogos = totLogos - 1;
        var toggleProfileA = $('.toggleProfileA');
        var toggleProfileB = $('.toggleProfileB');

        toggleProfileA.click(openProfile);
        toggleProfileB.click(closeProfile);
        toggleProfileA.show();
        toggleProfileB.hide();
        $('#companyProfile1').hide();

        if (totLogos === 2) {
            singleLogo();
        } else {
            // Se ci sono massimo 3 loghi, + quello vuoto
            if (totLogos <= 4) {
                logosToShow = 3;
                activeLogo = 2;
                currentLogo = 1;
                tabWidth = 156;
                tabBigWidth = 203;

                $('#logoCarousel span').each(function(index, item) { $(item).addClass('lessThanFour'); });

                $.each(logos, function(index, item) { $(item).addClass('lessThanFour'); });
            }

            if (totLogos > 1) {
                $.each(logos, function(index, item) {
                    if (index > 0) { $(item).find('.logo:first').click(function() { pickLogo(index - 1); }); }
                });
            }

            var initialPos = Math.floor(Math.random() * (totLogos - 1)) + 1;

            // Sposta in coda tutti gli oggetti che stanno prima dell'oggetto iniziale
            for (var i = 1; i < initialPos; ++i) {
                var logoToMove = $(logos[i]).detach();

                logosDiv.append(logoToMove);
                increaseCurrent();
            }

            $(logos[0]).find('.logo:first').click(function() { pickLogo(initialPos - 2); });

            // Rilegge la lista degli elementi
            logos = logosDiv.find(logosSelector).toArray();
            activeLogoDiv = $(logos[activeLogo]);

            // Mette in evidenza l'elemento centrale
            selectLogo(activeLogoDiv);

            reset();
        }
    } else {
        logosDiv = null;
    }
}

function pickLogo(index) {
    if (enableScroll) {
        rapidScroll = true;

        for (var i = 1; i < activeLogo; ++i) {
            if (((currentLogo + i) % visibleLogos) === index) {
                pos = i;
                moveCarousel('right');
                return;
            } else if (((currentLogo + visibleLogos - i) % visibleLogos) === index) {
                pos = i;
                moveCarousel('left');
                return;
            }
        }
    }
}

function singleLogo() {
    currentLogo = 0;

    // Nasconde le immagini del logo vuoto
    // Allarga il logo vuoto per centrare l'unico logo da mostrare
    $(logos[0]).find('img').hide().width(tabWidth * 3);

    // Mette in evidenza l'unico logo da mostrare
    selectLogo($(logos[1]));

    // Nasconde le frecce per muovere il carousel
    $('#logoCarousel span > a').hide();
}

// Mette in evidenza il logo
function selectLogo(logoToSelect) {
    logoToSelect.css({
        width: tabBigWidth + 'px',
        height: '107px',
        margin: '4px 0 0 0',
        padding: '0'
    });

    var imgList = logoToSelect.find('img');

    imgList[0].style.zIndex = 10;
    imgList[1].style.zIndex = 20;

    imgList.first().hide();
    imgList.eq(1).show();

    // Carica il testo per l'elemento in evidenza
    loadText(currentLogo, 1);
}

// Muove il carousel nella direzione passata come argomento
function logoCarouselScroll(direction) {
    if (enableScroll) { moveCarousel(direction); }
}

function moveCarousel(direction) {
    var newActiveLogo = activeLogo;
    var animation = [];
    var oldLogo = currentLogo;
    var endFunc = null;
    var fakeTabIndex = null;
    var animationDuration = rapidScroll ? 200 : 300;

    enableScroll = false;

    // Legge la lista degli elementi
    logos = logosDiv.find(logosSelector).toArray();
    oldActiveLogoDiv = $(logos[activeLogo]);

    var imgList1 = oldActiveLogoDiv.find('img');
    var oldLogoData = corouselData.loghi[oldLogo];

    // Animazione che trasforma l'elemento evidenziato in elemento normale
    oldActiveLogoDiv.css({ color: '#66666' }).animate({ width: tabWidth + 'px', height: '70px', padding: 0, margin: '30px 0 20px 0' }, animationDuration);
    imgList1.eq(0).attr('src', oldLogoData.imgSmall).css({ zIndex: 10 }).fadeIn(animationDuration);
    imgList1.eq(1).css({ zIndex: 20 }).fadeOut(animationDuration);

    if (direction === 'right') {
        newActiveLogo++;
        increaseCurrent();

        // Imposta il primo elemento come elemento da rimuovere dopo l'animazione
        logoToRemove = $(logos[1]);
        fakeTab = $(logos[0]).css({ height: 70 + 'px', width: tabWidth + 'px' });
        fakeTabIndex = (currentLogo + 2) % visibleLogos;

        // Prende il primo elemento e lo copia all'ultimo posto
        logos.push(logoToRemove.clone(true, true)[0]);

        var lastLogo = $(logos[logos.length - 1]).unbind();
        lastLogo.find('.logo:first').click(function() { pickLogo(fakeTabIndex); });
        logosDiv.append(lastLogo);

        endFunc = endRight;

        // Animazione che fa scivolare gli elementi verso sinistra
        fakeTab.animate({ width: 0, height: 0 }, animationDuration);
    } else {
        newActiveLogo--;
        decreaseCurrent();

        // Imposta l'ultimo elemento come elemento da rimuovere dopo l'animazione
        logoToRemove = $(logos[visibleLogos]);

        fakeTab = $(logos[0]).clone().width(0).height(0);
        fakeTabIndex = (currentLogo + visibleLogos - 3) % visibleLogos;
        copyLogo(logoToRemove, $(logos[0]));
        $(logos[0]).find('img:first').show();
        fakeTab.find('.logo:first').click(function() { pickLogo(fakeTabIndex); });

        // Prende l'ultimo elemento e lo copia al primo posto
        logosDiv.prepend(fakeTab);

        endFunc = endLeft;

        // Animazione che fa scivolare gli elementi verso destra
        fakeTab.animate({ height: 70 + 'px', width: tabWidth + 'px' }, animationDuration);
    }

    newActiveLogoDiv = $(logos[newActiveLogo]);

    var imgList2 = newActiveLogoDiv.find('img');

    // Animazione che trasforma un elemento normale in elemento evidenziato
    newActiveLogoDiv.css({ color: '#ffffff' }).animate({ width: tabBigWidth + 'px', height: '107px', padding: 0, margin: '4px 0 0 0' }, animationDuration);
    imgList2.eq(1).fadeIn(animationDuration);
    imgList2.eq(0).fadeOut(animationDuration);

    // Seleziona due div di testo con cui fare il fade incrociato per il cambio testo
    var textToShow = $('#logoInnerText1');
    var textToHide = $('#logoInnerText2');
    var textToShowHeight = 0;
    var textToHideHeight = 0;

    // Mette il testo nuovo nel div da sfumare
    // e ne calcola l'altezza
    loadText(currentLogo, 2);
    textToShowHeight = textToHide.css({ opacity: 0, height: 'auto' }).show().height();

    // Mette il testo vecchio nel div da sfumare
    // e ne calcola l'altezza
    loadText(oldLogo, 2);
    textToHideHeight = textToHide.height();

    loadText(currentLogo, 1);

    // Mette il testo nuovo nel div da far apparire
    // Animazioni per il fade incrociato
    // Animazioni per passare dalla dimensione del testo vecchio a quella del testo nuovo
    textToShow.css({ opacity: 0, height: textToHideHeight }).animate({ opacity: 1, height: textToShowHeight + 'px' }, animationDuration);
    textToHide.css({ opacity: 1 }).fadeOut(animationDuration).animate({ height: textToShowHeight + 'px' }, animationDuration, endFunc);
}

// Genera il testo fittizio per l'elemento in evidenza
function loadText(logoNum, divNum) {
    // Carica i dati del logo da visualizzare
    var logo = corouselData.loghi[logoNum];
    var companyProfile = $('#companyProfile' + divNum);
    var logoInnerText = $('#logoInnerText' + divNum);

    $('.toggleProfileA').show();
    $('.toggleProfileB').hide();
    companyProfile.hide();

    // Visualizza i testi
    companyProfile.find('.CPcontent')[0].innerHTML = '<div>' + logo.profile + '</div>';
    logoInnerText.find('.linkFonte:first').replaceWith(logo.linkFonte);
    $('#companyDescription' + divNum + ' .CDcontent')[0].innerHTML = logo.descrizione.replace(/<\/?p>/gi, '');
    $('#cercaFondi' + divNum)[0].innerHTML = logo.testoBottone;
    $('#cercaFondi' + divNum)[0].href = logo.linkBottone;

    // Tabella dei documenti legali
    var tableDoc = $('#tableDocLegale')[0];

    // Lista dei documenti da scaricare
    var docList = logo.documentazioneLegale;

    // Cancella tutte le righe vecchie della tabella
    while (tableDoc.rows.length > 0) { tableDoc.deleteRow(tableDoc.rows.length - 1); }

    // Inserisce le righe nuove
    for (var i = 0, n = docList.length; i < n; ++i) {
        tableDoc.insertRow(i);

        var row = tableDoc.rows[i];

        row.insertCell(0);
        row.insertCell(1);

        row.cells[0].className = "uno";
        row.cells[1].className = "due";

        row.cells[0].innerHTML = '<img src="/img/ret/ico1gr_pdf.gif" width="20" height="20" alt=" " />';
        row.cells[1].innerHTML = '<a href="' + docList[i].path + '" target="_blank">' + docList[i].nome + '</a>';
    }
}

function openProfile() {
    $('#companyProfile1').show();
    $('.CDtrepunti').hide();
    $('.toggleProfileA').hide();
    $('.toggleProfileB').show();
}

function closeProfile() {
    $('#companyProfile1').hide();
    $('.CDtrepunti').show();
    $('.toggleProfileA').show();
    $('.toggleProfileB').hide();
}

function decreaseCurrent() {
    currentLogo = (--currentLogo < 0) ? totLogos - 2 : currentLogo;
}

function increaseCurrent() {
    currentLogo = (++currentLogo === (totLogos - 1)) ? 0 : currentLogo;
}

// Resetta variabili e impostazioni
function reset() {
    enableScroll = true;
    rapidScroll = false;
    logoToRemove = null;
    fakeTab = null;
    oldActiveLogoDiv = null;
    newActiveLogoDiv = null;
    pos = 1;
    $('#logoInnerText1:first').css('height', 'auto');
    $('#logoInnerText2:first').css('height', 'auto');
}

// Operazioni da fare dopo l'animazione verso destra
function endRight() {
    copyLogo(fakeTab, logoToRemove)
    fakeTab = fakeTab.remove();

    if (--pos === 0) { reset(); } else { moveCarousel('right'); }
}

// Operazioni da fare dopo l'animazione verso sinistra
function endLeft() {
    logoToRemove.remove();

    if (--pos === 0) { reset(); } else { moveCarousel('left'); }
}

// Sotituisce il contenuto di un logo con quello di un altro
function copyLogo(logoFrom, logoTo) {
    var imgListFrom = logoFrom.find('img');
    var imgListTo = logoTo.find('img');

    imgListTo[0].src = imgListFrom[0].src;
    imgListTo[1].src = imgListFrom[1].src;
}

// Mette una classe che aumenta lo z-index
function riseZIndexLogo(el) { if (el !== null) { el.className = 'logoHighZ'; } }

// Mette una classe che abbassa lo z-index
function lowerZIndexLogo(el) { if (el !== null) { el.className = 'logoLowZ'; } }

// Mette una classe che aumenta lo z-index
function switchOver(el) { if (el !== null) { el.className = 'over'; } }

// Mette una classe che abbassa lo z-index
function switchOut(el) { if (el !== null) { el.className = 'out'; } }
/** * |FINE| CAROUSEL LOGHI ** */


// -- FUNZIONI CALL I-FRAME MS ---//

function msApriFondo(pagina, bloccoparametri) {
    pagetocall = top.location.protocol + "//" + top.location.host + cgi_script + "/wbOnetoone/mf/servlet/" + pagina + ".do?" + bloccoparametri + "&BSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vantaggi_fs&OBSKEY3=nav_priv_wbx_scheda_fondo";
    top.location.href = pagetocall;
}

function msVediTutti() {
    pagetocall = top.location.protocol + "//" + top.location.host + cgi_script + "/wbOnetoone/mf/servlet/fundquickrank/default.aspx.do?sortby=ReturnM36&sortorder=desc&tab=Performance&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_classifiche";
    top.location.href = pagetocall;
}

function apriSchedaFondoMs(isin, valuta) {
    var pagetocall = "";
    if (document.domain.split(".").length > 2) {
        pagetocall = new String(document.domain.substring(document.domain.indexOf('.') + 1));
    } else {
        pagetocall = document.domain;
    }
    var pagetocall = top.location.protocol + "//fondiesicav." + pagetocall;

    pagetocall += msprefix + '/snapshot/snapshot.aspx?externalidtype=ISIN&externalid=' + isin + valuta;
    window.open(pagetocall);
}

function apriPdfFondoMs(isin, valuta) {

    var pagetocall = "";
    if (document.domain.split(".").length > 2) {
        pagetocall = new String(document.domain.substring(document.domain.indexOf('.') + 1));
    } else {
        pagetocall = document.domain;
    }
    var pagetocall = top.location.protocol + "//fondiesicav." + pagetocall;

    pagetocall += msprefix + '/snapshotpdf/default.aspx?externalidtype=ISIN&externalid=' + isin + valuta;
    window.open(pagetocall);
}
// -- FINE FUNZIONI CALL I-FRAME MS ---//

/*****************************************************************************************************************************************************
 * LOADING - Su un elemento *
 * 
 * @author Andrea Colanicchia
 */
// --- Aggiunge il loading con un layer oscurante e un alert col loading ---

// elementToCover: oggetto da oscurare
// idLayer: Id del layer oscurante
function setLoadingOnEl(elementToCover, idLayer) {
    if ((elementToCover !== null) && ($(idLayer) === null)) {
        var loadingLayer = $('<div>', { id: idLayer + 'loading' }).html('' +
            '<div class="top"></div>' +
            '<div class="message">' +
            '	<p>Caricamento in corso...</p>' +
            '	<img src="/img/ret/loading.gif">' +
            '</div>' +
            '<div class="bottom"></div>').addClass('loadinglayer');

        obscurateEl(3, elementToCover, idLayer, 'darkLayer');
        openAlertOnEl(idLayer, loadingLayer);
    }
}

// --- Toglie il loading ---
// idLayer: Id del layer oscurante
function unsetLoadingOnEl(idLayer) {
    idLayer = jqc(idLayer);
    var objLayer = $(idLayer);

    if (objLayer !== null) {
        unobscurateEl(idLayer);
        closeAlertOnEl(idLayer + 'loading');
    }
}
/** * |FINE| LOADING - Su un elemento ** */


/*****************************************************************************************************************************************************
 * OSCURAMENTO - Di un elemento *
 * 
 * @author Andrea Colanicchia
 */
// Array di event handler per il layer oscurante
var obscurateHandlers = {};

// --- Oscura un elemento ---

// elementToCover: oggetto da oscurare
// idLayer: Id del layer oscurante
function obscurateEl(opacitylevel, elementToCover, idLayer, classLayer) {
    // Estende l'oggetto da oscurare, con prototype
    var objElementToCover = $(jqc(elementToCover));
    if ((objElementToCover.length) && !$(idLayer).length) {
        var objIframe = null,
            objOffsetParent = getOffsetParentFixed(objElementToCover),
            // Crea il layer che oscura l'oggetto
            objLayer = $('<div>', { id: idLayer }).addClass(classLayer);
        objOffsetParent.append(objLayer);
        if ($('#overlayerLight')) { objLayer.addClass('overlayerchiaro'); }
        objLayer[0].style.zIndex = higherZIndex(objElementToCover);
        if (isIE6) {
            if (!(objIframe = objOffsetParent.find('.objIframe')[0])) {
                objIframe = $('<iframe>', { src: '' }).addClass('objIframe').hide();
            }
            objOffsetParent.append(objIframe);
        }
        // Imposta le dimensioni del layer a quelle dell'oggetto da oscurare
        var resetStyle = function(event) {
            var offsets = objElementToCover.position(),
                dimensions = { height: objElementToCover.height(), width: objElementToCover.width() };
            objLayer.css({
                top: offsets.top + 'px',
                left: offsets.left + 'px',
                width: dimensions.width + 'px',
                height: dimensions.height + 'px',
                overflow: 'hidden'
            });
            if (isIE6) {
                objIframe.css({
                    top: offsets.top + 'px',
                    left: offsets.left + 'px',
                    width: dimensions.width + 'px',
                    height: dimensions.height + 'px'
                }).show();
            }
        }
        obscurateHandlers[idLayer] = resetStyle;
        resetStyle();
        // Appende le funzioni di scrolling e resizing all'oscuratore
        $(window).resize(resetStyle).scroll(resetStyle);
        if (!window.attachEvent) { $(window).on('DOMMouseScroll', resetStyle); }
        if (opacitylevel) {
            objLayer.css({ opacity: opacitylevel / 10, filter: 'alpha(opacity=' + opacitylevel * 10 + ')' });
        }
    }
}

// --- Toglie l'oscuramento ad un elemento ---
// idLayer: Id del layer oscurante
function unobscurateEl(idLayer) {
    idLayer = jqc(idLayer);
    var objLayer = $(idLayer);
    if (objLayer) {
        $(window).off("resize", obscurateHandlers[idLayer]).off("scroll", obscurateHandlers[idLayer]);
        // (window).off("scroll", obscurateHandlers[idLayer]).off("scroll", obscurateHandlers[idLayer]);
        obscurateHandlers[idLayer] = null;
        if (isIE6) {
            var objOffsetParent = getOffsetParentFixed(objLayer),
                objIframe = objOffsetParent.find('.objIframe:first');
            if (objIframe.length) { objIframe.remove(); }
        }
        objLayer.remove();
    }
}
/** * |FINE| OSCURAMENTO - Di un elemento ** */


/*****************************************************************************************************************************************************
 * ALERT - Su un elemento *
 * 
 * @author Andrea Colanicchia
 */
// Array di event handler per l'alert centrato
var alertHandlers = {};

// --- Apre una popup sempre centrata su un elemento ---
// elementToCover: oggetto su cui mettere l'alert
// elementAlert: oggetto dell'alert
function openAlertOnEl(elementToCover, elementAlert) {
    // Estende l'oggetto da oscurare, con prototype
    var objElementToCover = $(jqc(elementToCover)),
        // Estende l'alert, con prototype
        objAlert = $(jqc(elementAlert));
    if ((objElementToCover.length) && (objAlert.length)) {
        // Estende l'alert, con prototype
        var idAlert = objAlert.attr('id');
        objAlert.show();
        objAlert.css('z-Index', higherZIndex(objElementToCover));
        var objOffsetParent = getOffsetParentFixed(objElementToCover);
        objOffsetParent.append(objAlert);
        // Imposta le dimensioni del layer a quelle dell'oggetto da oscurare
        var centerStyle = function(event) {
            var offsets = objElementToCover.position(),
                dimensions = { height: objElementToCover.height(), width: objElementToCover.width() },
                dimensionsAlert = { height: objAlert.height(), width: objAlert.width() };
            objAlert.css({
                top: (offsets.top + (dimensions.height - dimensionsAlert.height) / 2) + 'px',
                left: (offsets.left + (dimensions.width - dimensionsAlert.width) / 2) + 'px'
            });
        }
        alertHandlers[idAlert] = centerStyle;
        centerStyle();
        // Appende le funzioni di scrolling e resizing all'oscuratore
        $(window).resize(centerStyle).scroll(centerStyle);
        if (!window.attachEvent) { $(window).on('DOMMouseScroll', centerStyle); }
    }
}

// --- Chiude la popup ---
// idAlert: id dell'oggetto dell'alert
function closeAlertOnEl(idAlert) {
    var objAlert = $(jqc(idAlert));
    if (objAlert.length) {
        $(window).off(window, "resize", alertHandlers[idAlert]).off(window, "scroll", alertHandlers[idAlert]);
        if (!window.attachEvent) { $(window).off(("DOMMouseScroll", alertHandlers[idAlert])); }
        alertHandlers[idAlert] = null;
        objAlert.remove();
    }
}
/** * |FINE| ALERT - Su un elemento ** */

/*****************************************************************************************************************************************************
 * UTILITIES - Per il DOM *
 * 
 * @author Andrea Colanicchia
 */

function higherZIndex(elementToCover) {
    elementToCover = $(jqc(elementToCover));
    return (elementToCover.length) ? 1 : !isNaN(elementToCover.css('zIndex')) ? elementToCover.css('zIndex') + 1 : 1;
}

function getOffsetParentFixed(startElement) {
    var op = $(jqc(startElement)).offsetParent();
    return (op[0].nodeName.toUpperCase() === 'HTML') ? $(document.body) : op;
}
/** * |FINE| UTILITIES - Per il DOM ** */


/*****************************************************************************************************************************************************
 * AZIONI - Overlayer icona operativa *
 * 
 * @author Andrea Colanicchia
 */
// Array che registra se un overlayer e' visualizzato/nascosto
var multiLinksFlag = {},
    multiLinksLayer = {};

// Visualizza/nasconde un overlayer
function multiLinks(nomeFile, dir, link, toggleArray, modaltitle) {
    var idLayerMenu = nomeFile.replace('.', '_'),
        link = $(jqc(link)).first(),
        linkId = link.attr('id'),
        // Div container con position relative
        container = link.closest('.linkTooltip'),
        // Div del tooltip
        tooltip = $('#' + idLayerMenu).first(),
        openMenuIcona = function() {
            // Nasconde gli altri overlayer eventualmente visualizzati
            $('.condiz2 .over').each(function(index, linkTooltip) {
                linkTooltip = $(linkTooltip);
                linkTooltip.removeClass('over');
                var item = linkTooltip.find('.sezioneLinks2:first'),
                    linkVaiID = linkTooltip.find('.linkVai:first').attr('id');
                if (item.length) {
                    var itemKey = item.attr('id');
                    // Controlla se c'e' un tooltip, con un ID diverso da quello che stiamo aprendo,
                    // che era rimasto aperto
                    if ((itemKey !== idLayerMenu) && ((linkVaiID in multiLinksFlag) && (multiLinksFlag[linkVaiID] === 1))) {
                        multiLinksFlag[linkVaiID] = 0;
                        item.hide();
                    }
                }
            });

            multiLinksFlag[linkId] = 1;
            container.addClass('over');

            var onLinks = tooltip.find('.linkOn'),
                offLinks = tooltip.find('.linkOff');
            onLinks.each(function(index, item) {
                item = $(item);
                var toggleItem = toggleArray[index];
                if (toggleItem === '*#*ND') {
                    onLinks.eq(index).hide();
                    offLinks.eq(index).hide();
                } else if (toggleItem === null) {
                    onLinks.eq(index).hide();
                    offLinks.eq(index).show();
                } else {
                    var regexJS = /^javascript:/i;
                    onLinks.eq(index).show();
                    offLinks.eq(index).hide();
                    if (toggleItem === '') { return; } else {
                        var linkEl = onLinks.eq(index).find('a:first'),
                            linkElHref = linkEl.attr('href');
                        if (!regexJS.test(toggleItem)) {
                            var regexQS = /\?/;
                            linkEl.attr('href', linkElHref + ((regexQS.test(linkElHref)) ? '&' : '?') + toggleItem);
                        } else { // Caso "javascript:"
                            linkEl.attr('href', toggleArray[index]);
                        }
                    }
                }
            });
            // Immagine per aprire il tooltip
            var linkDimensions = { height: link.height(), width: link.width() };
            //AGGIUNTA PER GESTIRE ICONA OPERATIVA IN MODALE IN TPL RESPONSIVE
            if (container.attr('data-toggle') == 'modal') {
                if (typeof modaltitle == "undefined") modaltitle = "";
                tooltip.find(".modal-title").html(modaltitle);
                setOverlayerIconaOpertiva(tooltip)
            } else
            //COMPORTAMENTO AS IS
            {
                tooltip.css({
                    left: linkDimensions.width - tooltip.width() + 'px',
                    top: '0px',
                    display: 'block'
                });
            }
            //FINE AGGIUNTA PER GESTIRE ICONA OPERATIVA IN MODALE
        },
        readTooltip = function(data) {
            container.append(data);
            tooltip = container.find('#' + idLayerMenu).first();
            openMenuIcona();
        };

    if (tooltip.length) {
        // Se ho cliccato sulla stessa icona col tooltip aperto, lo chiudo
        if (((linkId in multiLinksFlag) && (multiLinksFlag[linkId] === 1))) {
            multiLinksFlag[linkId] = 0;
            container.removeClass('over');
            tooltip.hide();
        } else {

            tooltip = tooltip.remove();
            container.append(tooltip);
            openMenuIcona();
        }
    } else {
        // onLine
        jqAJAXCall('get', 'html', cgi_script + '/FMP/html/' + nomeFile, readTooltip, null, {});
        // locale
        // jqAJAXCall('get', 'text', nomeFile, readTooltip, null, {});
    }
    return true;
}

// Mette lo stile di over sulle opzioni dell'overlayer
function azioneOver(el) {
    $(el).addClass('over');
}

// Toglie lo stile di over sulle opzioni dell'overlayer
function azioneOut(el) {
    $(el).removeClass('over');
}
/** * |FINE| AZIONI - Overlayer icona operativa ** */


/** * FUNZIONE X VISUALIZZARE TITOLO PAGINA CON O SENZA AGGIORNA ** */
function functionDateHourUpdate(date_refresh, hour_refresh, page_type_tab, fName, divId) {
    var aggiornamento,
        div_aggiornamento,
        functionName = fName || 'window.location.reload(false)',
        divIdToAdd = '',
        aggiorna = $('#id_aggiorna'),
        aggiornaTab = $('#id_aggiorna_tab');
    if (divId) {
        divIdToAdd = ' id="' + divId + '"';
    }

    if (page_type_tab === false) {

        aggiornamento = '<div class="fooformright"><div id="idReloadBox"><a title="aggiorna" class="btnformright" href="javascript:' + functionName + ';">' +
            '<img alt="" src="/img/ret/btn_left_ar.gif"><span>aggiorna</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>' +
            '<div class="lastupdate"' + divIdToAdd + '>Ultimo Aggiornamento: ' + date_refresh + ' ore ' + hour_refresh + '</div><br class="clear"></div><br class="clear">';

        if (aggiorna.length) {
            aggiorna.html(aggiornamento).show();
            $('#id_label').prop('className', 'floatsx');
        }
    } else {
        aggiornamento = '<div class="fooformright"><div id="idReloadBox"><a title="aggiorna" class="btnformright" href="javascript:' + functionName + ';">' +
            '<img alt="" src="/img/ret/btn_left_ar.gif"><span>aggiorna</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>' +
            '<div class="lastupdate"' + divIdToAdd + '>Ultimo Aggiornamento: ' + date_refresh + ' ore ' + hour_refresh + '</div><br class="clear"></div><br class="clear"></div><br class="clear">';
        if (aggiornaTab.length) {
            aggiornaTab.html(aggiornamento).show();
        }
    }
}
/** * |FINE| FUNZIONE X VISUALIZZARE TITOLO PAGINA CON O SENZA AGGIORNA ** */

/** * FUNZIONE X VISUALIZZARE TITOLO PAGINA CON AGGIORNA E PUSH** */
function functionDateHourUpdatePush(date_refresh, hour_refresh) {
    var aggiornamento, aggiorna = $('#id_aggiorna');
    aggiornamento = '<div class="fooformright">' +
        '<div><a title="push" class="btnformright" href="javascript:togglePush();">' +
        '<img alt="" src="/img/ret/btn_left_ar.gif"/><span id="spanPush" class="btnnormal">push</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>' +
        '<div><a title="aggiorna" class="btnformright" href="javascript:window.location.reload( false )">' +
        '<img alt="" src="/img/ret/btn_left_ar.gif"><span>aggiorna</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>' +
        '<div class="lastupdate">Ultimo Aggiornamento: ' + date_refresh + ' ore ' + hour_refresh + '</div><br class="clear"></div><br class="clear">';

    if (aggiorna.length) {
        aggiorna.html(aggiornamento).show();
        $('#id_label').prop('className', 'floatsx');
    }
}


/*****************************************************************************************************************************************************
 * FRAMEWORK STILIZZAZIONE FORM *
 * 
 * @author Andrea Colanicchia
 */
// Variabile usata per controllare se chiudere la select o no
var closeOnBlur = [];
var hiddenIds = {};

/* CREAZIONE - Select fittizia stilizzata */
// Cerca le select da dinamicizzare e associa i gestori di eventi e le classi agli elementi della select
function createSelectRapp(idSelect, idHidden, funcSelect) {
    // Valorizzo gli oggetti globali
    var selectRapp = $(jqc(idSelect));

    if (selectRapp.length) {
        // Memorizza l'id del campo hidden
        hiddenIds[idSelect] = idHidden;

        // Div che contiene le option selezionabili
        var selector = selectRapp.find('.selector:first');

        // Option da impostare come selezionata
        var inputOption = selectRapp.find('.inputOption:first');

        // Lista option selezionabili
        var selectorOptions = selectRapp.find('.selectorOptions');

        // Lista option selezionabili
        var selectedOption = selectRapp.find('.selected:first');

        if (!selectedOption.length) { selectedOption = selectorOptions.first(); }

        // Imposta il valore selezionato di default
        setValueSelectRapp(funcSelect, selectedOption, selectRapp, idHidden);

        /* SELEZIONE - Gestione del click, mouseover, mouseout, focus e blur */
        // Associa gli handler agli eventi della option
        observeSelectRappEvents(inputOption, selectRapp, selector);

        selectorOptions.each(function(index, item) { observeOptionEvents($(item), inputOption, selectRapp, idHidden, funcSelect); });
        /* |FINE| SELEZIONE - Gestione del click, mouseover, mouseout, focus e blur */


        /* NAVIGAZIONE - Da tastiera */
        // Spostamento con i 'tab' e le frecce su (38) e giu' (40)
        inputOption.keydown(function(e) {
            if (e.which === 38) {
                e.stopPropagation();
            } else if (e.which === 40) {
                e.stopPropagation();
                setTimeout(function() { focusOptionDownRapp.call($(this), selectRapp); }, 0);
            }
        });

        selectorOptions.keydown(function(e) {
            var optionSel = $(this);
            if (e.which === 38) {
                e.stopPropagation();
                setTimeout(function() { focusOptionUpRapp.call(optionSel, selectRapp); }, 0);
            } else if (e.which === 40) {
                e.stopPropagation();
                setTimeout(function() { focusOptionDownRapp.call(optionSel, selectRapp); }, 0);
            }
        });
        /* |FINE| NAVIGAZIONE - Da tastiera */
    }
}

// Ritorna una oggetto per la option selezionata con 2 proprieta', "value" e "text"
function getSelectedOption(idSelect) {
    var selectedOption = $(jqc(idSelect)).find('.selected:first');
    return (selectedOption) ? { text: selectedOption.innerHTML, value: selectedOption.attr('value') } : null;
}

function preventClosingSelector(selectRapp) {
    var idRapp = selectRapp.attr('id');
    if (idRapp in closeOnBlur) clearTimeout(closeOnBlur[idRapp]);
}

function timeoutClosingSelector(selectRapp) {
    closeOnBlur[selectRapp.attr('id')] = setTimeout(function() { closeSelectRapp(selectRapp); }, 100);
}

function setValueSelectRapp(funcSelect, selectedOption, selectRapp, idHidden) {
    hiddenField = $(jqc(idHidden));
    selectedOption = $(jqc(selectedOption));
    selectRapp = $(jqc(selectRapp));

    // Valore selezionato
    var valueOption = selectedOption.attr('value');
    var titleOption = selectedOption.find('strong:first').html();
    var textOption = selectedOption.html();
    var inputOption = selectRapp.find('.inputOption:first');
    var prevSelectedOption = selectRapp.find('.selected:first');
    var isBookPopup = $('body:first').hasClass('book');

    // Aggiorna il tooltip degli intestatari
    if (isBookPopup) {
        selectedOption.closest('table').find('.uniqTooltipInnerHTML:first').html(selectedOption.find('.intestatari:first').html());
    }

    // Aggiorna il valore selezionato
    hiddenField.val(valueOption);
    inputOption.find('.input:first').html(titleOption);

    try { if (inputOption.next('.selector').css('display') === 'block') inputOption.trigger('focus'); } catch (ex) {}

    // Rimuove la classe "selected" dall'opzione selezionata precedentemente
    if (prevSelectedOption.length) {
        prevSelectedOption.removeClass('selected');
        prevSelectedOption.closest('.group').removeClass('selected');
    }

    // Aggiunge la classe "selected" dall'opzione selezionata correntemente
    selectedOption.addClass('selected');
    // Aggiunge la classe "selected" al gruppo dell'opzione selezionata correntemente
    selectedOption.closest('.group').addClass('selected');
    if ($.type(funcSelect) === "function") funcSelect({ text: textOption, value: valueOption });
}

function observeOptionEvents(optionEl, inputOption, selectRapp, idHidden, funcSelect) {
    optionEl
        .mouseover(function(e) { e.stopPropagation();
            $(this).trigger('focus'); })
        .mouseout(function(e) { e.stopPropagation(); })
        .focus(function(e) { setOverOption(optionEl, selectRapp); })
        .blur(function(e) { unSetOverOption(optionEl, selectRapp); })
        .click(function(e) {
            e.stopPropagation();

            // Chiude la tendina
            closeSelectRapp(selectRapp);

            // Aggiorna il valore selezinato
            setValueSelectRapp(funcSelect, $(this), selectRapp, idHidden);
        })
        .hideFocus = true;
}

function observeSelectRappEvents(inputOption, selectRapp, selector) {
    selectRapp.find('.inputSx:first')
        .mouseover(function(e) { inputOption.trigger('focus'); })
        .mouseout(function(e) { if (selector.css('display') === 'none') { inputOption.trigger('blur'); } })
        // Apre la tendina sul click sulla select
        .click(function(e) { toggleSelectRapp(selectRapp); });
    inputOption
        .focus(function(e) { setOverSelectRapp(selectRapp); })
        .blur(function(e) { if (selector.css('display') === 'none') { unSetOverSelectRapp(selectRapp); } })
        .hideFocus = true;
}
/* |FINE| CREAZIONE - Select fittizia stilizzata */


/* APERTURA - Options della select fittizia */
function toggleSelectRapp(selectRapp) {
    preventClosingSelector(selectRapp);

    var idHidden = hiddenIds[selectRapp.attr('id')];

    // Option selezionata
    var inputOption = selectRapp.find('.inputOption:first');

    // Div che contiene le option selezionabili
    var selector = selectRapp.find('.selector:first');

    // Iframe per coprire le select in IE6
    if (isIE6) {
        var selectorIframe = selectRapp.find('.selectorIframe:first');
        if (!selectorIframe.length) selectorIframe = $('<iframe src=""></iframe>').addClass('selectorIframe').hide();
        selectRapp.append(selectorIframe);
    }

    // Chiude/apre la tendina
    if (selector.css('display') !== 'none') {
        // Chiude la tendina
        closeSelectRapp(selectRapp);
    } else {
        // Prima di aprire la tendina, chiude altre tendine eventualmente aperte
        $('.selectRapp').each(function(index, item) {
            item = $(item);
            closeSelectRapp(item);
            unSetOverSelectRapp(item);
        });

        riseZIndex(selectRapp);
        setOverSelectRapp(selectRapp);

        // Lista option selezionabili, piu' i divisori
        var selectorItems = selector.find('.selectorOptions');

        // Valore selezionato
        var selectedValue = $('#' + idHidden).val();

        selectorItems.each(function(index, item) {
            // Rimuove la classe over che potrebbe essere rimasta sull'oggetto nascosto
            item = $(item);
            item.removeClass('over');

            // Toglie l'elemento doppione
            if (selectedValue === item.attr('value')) { item.addClass('selected'); } else { item.removeClass('selected'); }
        });

        // Spacer tra tendina e select
        var selectorSpacer = selectRapp.find('.selectorSpacer:first');

        // Imposta l'altezza della tendina
        selector.css('height', 'auto');

        var selectorHeight = selector.height(),
            // Modifica per IE6
            maxHeight = (isIE6) ? 217 : 218;

        selector.css({
            height: (selectorHeight > maxHeight) ? maxHeight + 'px' : selectorHeight + 'px',
            scrollTop: 0
        }).show();
        selectorSpacer.show();
        if (isIE6) {
            selectorIframe.css({
                width: selector.width() + 'px',
                height: selector.height() + 'px'
            }).show();
        }
        inputOption.trigger('focus');
    }
}

// Chiude la tendina
function closeSelectRapp(selectRapp) {
    if (isIE6) {
        var selectorIframe = selectRapp.find('.selectorIframe:first');
        if (selectorIframe.length) selectorIframe.hide();
    }
    selectRapp.find('.selector:first').hide();
    selectRapp.find('.selectorSpacer:first').hide();
    lowerZIndex(selectRapp);
}
/* |FINE| APERTURA - Options della select fittizia */


/* HOVER - Classe per l'hover */
// Imposta la classe per l'hover sulle option
function setOverOption(optionEl, selectRapp) { optionEl.addClass('optionOver'); }

// Toglie la classe per l'hover sulle option
function unSetOverOption(optionEl, selectRapp) { optionEl.removeClass('optionOver'); }

// Imposta la classe per l'hover sulla select
function setOverSelectRapp(selectRapp) { selectRapp.addClass('selectOver'); }

// Toglie la classe per l'hover sulla select
function unSetOverSelectRapp(selectRapp) { selectRapp.removeClass('selectOver'); }
/* |FINE| HOVER - Classe per l'hover */


/* Z-INDEX - Classe per lo z-index */
// Mette una classe che aumenta lo z-index
function riseZIndex(el) {
    if (el.length) { el.removeClass('lowZ').addClass('highZ'); }
}

// Mette una classe che abbassa lo z-index
function lowerZIndex(el) {
    if (el.length) { el.removeClass('highZ').addClass('lowZ'); }
}
/* |FINE| Z-INDEX - Classe per lo z-index */


/* FOCUS - Sposta il focus sui vari oggetti */
function focusOptionRapp(selectRapp) {
    // Mette il focus sulla prima option
    selectRapp.find('.inputOption:first').trigger('focus');
}

function focusOptionDownRapp(selectRapp) {
    // Div che contiene le option selezionabili
    var selector = selectRapp.find('.selector:first');

    if (selector.css('display') === 'none') toggleSelectRapp(selectRapp);

    // Lista option selezionabili non nascoste
    var selectorOptions = selector.find('.selectorOptions'),
        position = $.inArray($(this), selectorOptions);

    if (position === -1) { selectorOptions.first().trigger('focus'); } else if (position < (selectorOptions.length - 1)) { selectorOptions.eq(position + 1).trigger('focus'); }
}

function focusOptionUpRapp(selectRapp, focusedOption) {
    // Div che contiene le option selezionabili
    var selector = selectRapp.find('.selector:first');

    if (selector.css('display') === 'none') toggleSelectRapp(selectRapp);

    // Lista option selezionabili non nascoste
    var selectorOptions = selector.find('.selectorOptions');
    position = $.inArray($(this), selectorOptions);

    if (position <= 0) { focusOptionRapp(selectRapp); } else { selectorOptions.eq(position - 1).trigger('focus'); }
}
/* |FINE| FOCUS - Sposta il focus sui vari oggetti */

/** * |FINE| FRAMEWORK STILIZZAZIONE FORM ** */

/* LOADING OVERLAY */
/*
 * Setta il loading overlay - L'oggetto overlay ha sempre l'id uguale a quello dell'oggetto origine con append di "_loadingoverlay". - obj e'
 * l'oggetto da ricoprire - Il parametro opzionale objlowerlimit contiene un eventuale altro id oggetto al quale far "arrivare" l'overlay - Il
 * parametro opzionale coloroverlay contiene un eventuale altro colore di sfondo da attribuire all'overlay - Il parametro opzionale imgBck contiene un
 * eventuale immagine di sfondo da attribuire all'overlay
 */
function setLoadingOnObject(idobj, idobjlowerlimit, coloroverlay, imgBck) {
    var obj = $(jqc(idobj)),
        idobj = "#" + obj.attr('id'),
        objlowerlimit = ($.trim(idobjlowerlimit)) ? $(idobjlowerlimit) : $();
    // assegna l'oggetto ad una variabile
    // crea un nuovo div necessario a nascondere tutto con l'id ricavato
    var overlay = $("<div>", {
        'id': obj.attr('id') + "_loadingoverlay",
        'class': "loadingOverlay"
    });
    if (coloroverlay) {
        overlay.css('background-color', coloroverlay);

    }
    if (imgBck) {
        overlay.css('backgroundImage', 'imgBck').addClass('img');
    }
    $('body').append(overlay);

    // Proprieta' overlay impostate via JS
    overlay.css({
        height: obj.outerHeight() + 'px',
        zIndex: getNextHighestZindex(),
        top: obj.offset().top + 'px',
        width: obj.outerWidth() + 'px',
        left: obj.offset().left + 'px'
    });

    // Riassegna le proprieta' in caso di TR
    if (obj.is("tr")) {
        overlay.css({ width: obj.width() - 2 + 'px', left: obj.offset().left + 1 + 'px' });
    }
    // Reimposta altezza e larghezza se esiste objlowerlimit
    if (idobjlowerlimit) {

        lowerobject = $(objlowerlimit);
        overlay.height(lowerobject.offset().top - obj.offset().top + lowerobject.outerHeight() + 'px');
        overlay.width(lowerobject.offset().left - obj.offset().left + lowerobject.outerWidth() + 'px');
        if (lowerobject[0].tagName.toLowerCase() === 'tr') {
            overlay.width(lowerobject.offset().left - obj.offset().left + lowerobject.outerWidth() - 2 + 'px');
        }
    }

    // inserisce la chiocciola di caricamento
    var loadingimage = $("<img>");
    // seleziona il da farsi in base alla grandezza dell' overlay
    // determina il padding-top dell'immagine all'interno dell'oggetto loader
    if (overlay.height() < 37) {
        // chiocciola piccola
        loadingimage.attr('src', '/wscmn/img/ico2inf_loading.gif');
        if (overlay.height() > 16) { loadingimage.css('paddingTop', (overlay.height() / 2) - 8 + 'px'); } else { loadingimage.height(loadingimage.width(overlay.height() - 2 + 'px')); }
    } else {
        // chiocciola grande
        loadingimage.attr('src', '/wscmn/img/ico2inf_loadingbig.gif');
        if (overlay.height() / 2 > 16) {
            loadingimage.css('paddingTop', (overlay.height() / 2) - 16 + 'px');
        }
    }

    if (overlay.attr('class') === 'loadingOverlay' + ' ' + 'img') {
        // chiocciola piccola
        loadingimage.attr('src', '/img/ret/ico2inf_loading_green.gif');
        if (overlay.height() > 16) { loadingimage.css('paddingTop', (overlay.height() / 2) - 8 + 'px'); } else {
            loadingimage.height((overlay.height() - 2) + 'px');
            loadingimage.width((overlay.height() - 2) + 'px');
        }
    }
    overlay.append(loadingimage);

    // Controlla la grandezza dell'overlayer e, qualora superasse lo schermo, mette la chiocciola nella prima posizione verticale in alto visibile
    // L'oggetto esce dallo schermo nella parte superiore

    if ((obj.offset().top - $(window).scrollTop()) < 0) {
        // Se l'oggetto sta nello schermo...
        if ((obj.offset().top + overlay.height() - $(window).scrollTop()) > 0) {
            loadingimage.css('paddingTop', ($(window).scrollTop() - obj.offset().top + 1 + 'px'));
        }
    }
    // L'oggetto esce dallo schermo nella parte inferiore
    else if ((obj.offset().top + overlay.height()) - ($(window).scrollTop() + $(window).height()) > 0) {
        // Se l'oggetto sta nello schermo...
        if ((obj.offset().top) - ($(window).scrollTop() + $(window).height()) < 0) {
            loadingimage.css('paddingTop', '1px');
        }
    }
    // Addiziona l'evento onresize per tutti gli elementi loading in overlay se la funzione non e' definita
    $(window).on("resize", loadinglayersResize);
}

/*
 * Rileva il loading overlay dall'id di obj e lo distrugge
 */
function unsetLoadingOnObject(idobj) {
    idobj = jqc(idobj);
    var overlay = $(idobj + '_loadingoverlay');
    if (overlay.length) overlay.remove();

    // Se non sono piu' visibili loading overlay rimuove la funzione onresize
    if (!$('div.loadingOverlay').length) { $(window).off("resize", loadinglayersResize); }
}

/*
 * Se si ridimensiona lo schermo...
 */
function loadinglayersResize() {
    var loadinglayers = $('div.loadingOverlay');
    for (i = 0; i < loadinglayers.length; i++) {
        var obj = $('#' + loadinglayers[i].id.replace('_loadingoverlay', '')).eq(0);
        loadinglayers[i].style.left = obj.offset().left + 'px';
        if (obj.prop('tagName').toLowerCase() === 'tr') {
            loadinglayers[i].style.left = obj.offset().left + 1 + 'px';
        }
    }
}

/* FINE LOADING OVERLAY */

/* TABELLA AD ESPANSIONE */
function activetabledetail(button, rowHeadingClass) {
    var rigaorigine = $(button).parent().parent();
    var tuttelerighe = $('.activetable tr');
    $('.activetable').find('.openercontainer').parent().addClass('headerrow');

    if (rigaorigine.attr('class') !== undefined) { var rigaorigineClass = rigaorigine.attr('class') } else { var rigaorigineClass = ' ' };


    if ($(rigaorigine).hasClass('opened')) {
        $(rigaorigine).nextUntil('.headerrow').attr('class', 'closed');
        $(rigaorigine).removeClass('opened');
    } else {
        $(rigaorigine).nextUntil("tr:visible").attr('class', 'detailrow');
        $(rigaorigine).addClass('opened');
    }

}

function activetabledetailAll(buttonAll, rowHeadingClass) {
    var buttonAllRow = $(buttonAll).parent().parent();
    var buttonAllTable = $(buttonAllRow).parent().parent();
    var stato;
    if (buttonAllRow.hasClass('opened') === false) {
        buttonAllRow.attr('class', rowHeadingClass + ' ' + 'opened');
        stato = true;
    } else { buttonAllRow.attr('class', rowHeadingClass);
        stato = false; }

    var openedRow = buttonAllTable.find('tr.detailrow');
    var closedRow = buttonAllTable.find('tr.closed');

    if (closedRow && stato === true) {
        closedRow.prev().addClass('opened');
        closedRow.attr('class', 'detailrow');
    }
    if (openedRow && stato === false) {
        openedRow.prev().removeClass('opened');
        openedRow.attr('class', 'closed');
    }
}
/* FINE TABELLA AD ESPANSIONE */


// FUNZIONE che innesta il tooltip statico sull'input
function checkValuePrice(e, el, condition, id, dim) {

    id = jqc(id);
    el = jqc(el);
    var soglia = parseFloat($(id).html().replace(/\,/, "."));
    var valoreInput = $(el).val();
    valoreInput = parseFloat(valoreInput.replace(/\,/, "."));

    if (valoreInput !== '' &&
        ((condition === '<=' && valoreInput <= soglia) ||
            (condition === '>=' && valoreInput >= soglia))) { createUniqTooltip(e, el, dim); }
}


/*****************************************************************************************************************************************************
 * TOOLTIP UNICO - Tooltip da usare su tutto il sito *
 * 
 * @author Andrea Colanicchia
 */

// Crea il tooltip posizionandolo relativamente alla posizione del mouse
// dim: pu� avere come valore 'large', 'medium', 'small' oppure un numero per la larghezza in pixel
// offset: es. { top: 0, left: 10}
function createUniqTooltip(e, el, dim, idToAnc, offset) {

    el = $(el)
    e = $.event.fix(e || window.event);
    if (el.length) { // controlla se l'elemento esiste
        var uniqTooltipText = ((el.hasClass('uniqTooltipText')) || (el.hasClass('uniqTooltipIco'))) ? el : el.closest('.uniqTooltipText'),
            idTooltip = 'uniqTooltip',
            isStatic = uniqTooltipText.hasClass('static'), // tooltip che non si sposta col mouse, e si richiude da solo
            isNoautoClosed = uniqTooltipText.hasClass('noAutoClosed'), // tooltip che non si sposta col mouse, ma non si richiude da solo
            isFixed = uniqTooltipText.hasClass('fixed'), // tooltip che non si sposta col mouse e si apre al click
            isOver = uniqTooltipText.hasClass('over'), // tooltip che si apre con il testo sopra e la freccia verso il basso
            offsetTop = 22,
            offsetLeft = 0,
            offsetParent = $('body:first'),
            elPos = uniqTooltipText.find('.uniqTooltipPos:first');
        if (isStatic || isFixed) {
            idTooltip = uniqTooltipText.attr('id') + 'tooltip';
            offsetLeft = (isOver) ? 0 : 0;
            offsetTop = isStatic ? 0 : -4;
            offsetParent = el.offsetParent();

            if (offsetParent.prop('tagName').toUpperCase() === 'HTML') offsetParent = uniqTooltipText;
        }
        if (isFixed) {
            el[0].parentNode.className = 'opened';
        }
        if (offset) {
            if (offset.top) {
                offsetTop += offset.top;
            }
            if (offset.left) {
                offsetTop += offset.left;
            }
        }

        var idTooltipIframe = idTooltip + 'Iframe',
            tooltip = $('#' + idTooltip),
            tooltipIframe = $('#' + idTooltipIframe);

        // Crea il tooltip, se non esiste
        if (!tooltip.length) {
            if (isNaN(parseFloat(dim))) {
                switch (dim) {
                    case 'large':
                        var body = '<div class="uniqTooltipBody blarge">',
                            arrow = '<div class="uniqTooltipArrow alarge">',
                            arrowgiu = '<div class="uniqTooltipArrowgiu alarge"></div>';
                        break;
                    case 'medium':
                        var body = '<div class="uniqTooltipBody bmedium">',
                            arrow = '<div class="uniqTooltipArrow amedium">',
                            arrowgiu = '<div class="uniqTooltipArrowgiu amedium"></div>';
                        break;
                    case 'small':
                        var body = '<div class="uniqTooltipBody bsmall">',
                            arrow = '<div class="uniqTooltipArrow asmall">',
                            arrowgiu = '<div class="uniqTooltipArrowgiu asmall"></div>';
                        break;
                    default:
                        var body = '<div class="uniqTooltipBody bsmall">',
                            arrow = '<div class="uniqTooltipArrow">',
                            arrowgiu = '<div class="uniqTooltipArrowgiu"></div>';
                        break;
                }
            } else {
                var arrowPos = Math.floor(parseFloat(dim) / 2) - 5,
                    ancEl = $('#' + idToAnc);
                //tooltip ancorato a contenitore pagina
                if (ancEl.length) {
                    var offsetId = ancEl.offset(),
                        offsetEl = el.offset(),
                        arrowPos = (offsetEl.left - offsetId.left);
                    if (arrowPos === 0) {
                        arrowPos = 10;
                    }
                }
                body = '<div class="uniqTooltipBody" style="width:' + dim + 'px">',
                    arrow = '<div class="uniqTooltipArrow" style="left:' + arrowPos + 'px">',
                    arrowgiu = '<div class="uniqTooltipArrowgiu" style="left:' + arrowPos + 'px"></div>';

            }

            // Aggiunta iconcina di chiusura per il tooltip
            if (isOver) {
                tooltip = $('<div id="' + idTooltip + '" class="uniqTooltip"></div>').html(
                    '<div class="uniqTooltipPos">' +
                    body +
                    '<a class="closeUniqTooltip" href="javascript:void(0);" onclick="removeUniqTooltip(event, document.getElementById(\'' + idTooltip.replace("tooltip", "") + '\'))">&nbsp;</a>' +
                    '<div class="uniqTooltipContent">' +
                    uniqTooltipText.find('.uniqTooltipInnerHTML')[0].innerHTML +
                    '</div>' + arrowgiu +
                    '</div>' +
                    '</div>');
            } else {
                tooltip = $('<div id="' + idTooltip + '" class="uniqTooltip"></div>').html(
                    '<div class="uniqTooltipPos">' +
                    arrow + '</div>' +
                    body +
                    '<div class="uniqTooltipContent">' +
                    uniqTooltipText.find('.uniqTooltipInnerHTML')[0].innerHTML +
                    '</div>' +
                    '</div>'

                    +
                    '</div>');
            }
            tooltip.css({ zIndex: getNextHighestZindex() });

            offsetParent.append(tooltip);
        }

        if (isIE6) {
            if (!tooltipIframe.length) {
                tooltipIframe = $('<iframe src="" id="' + idTooltipIframe + '" class="objIframe"></iframe>').hide();
                offsetParent.append(tooltipIframe);
            }
        }

        var tooltipDim = { height: tooltip.height(), width: tooltip.width() },
            tooltipBody = tooltip.find('.uniqTooltipBody:first'),
            tooltipBodyDim = { height: tooltipBody.height(), width: tooltipBody.width() },
            tooltipBodyPos = tooltipBody.position(),
            elDim = { height: el.height(), width: el.width() },
            tooltipTop, tooltipLeft,
            viewportWidth = $(window).width(),
            viewportScrollLeft = $(window).scrollLeft();

        tooltip.removeClass('left');
        tooltip.removeClass('right');

        if (isStatic || isFixed) { // tooltip in posizione fissa
            if (isIE6 === false) {
                if (isOver) { tooltipTop = -tooltipBodyDim.height - tooltip.find('.uniqTooltipArrowgiu:first').height(); } else { tooltipTop = elDim.height; }
            } else {
                if (isOver) { tooltipTop = -tooltipBodyDim.height; } else { tooltipTop = elDim.height; }

            }

            tooltipTop += offsetTop;

            var tooltipLeft = (offsetLeft - Math.floor(tooltipBodyDim.width / 2) + Math.floor(elDim.width / 2));
            //parametro che ne determina il posizionamento
            if (idToAnc) {
                tooltipLeft = 0;
                var offsetId = $('#' + idToAnc).offset();
                var offsetEl = el.offset();
                tooltip.css('margin-left', -(offsetEl.left - offsetId.left));

            }
        } else { // tooltip che si muove con il mouse
            var mouseLeft = e.pageX,
                mouseTop = e.pageY;
            tooltipLeft = (offsetLeft + mouseLeft - Math.floor(tooltipBodyDim.width / 2));

            tooltipTop = offsetTop + mouseTop;

            if ((tooltipLeft < viewportScrollLeft) || (tooltipBodyDim.width > viewportWidth)) {
                tooltip.addClass('left');
                tooltipLeft = mouseLeft - 11;
            } else if ((tooltipLeft - viewportScrollLeft + tooltipBodyDim.width) > viewportWidth) {
                tooltip.addClass('right');
                tooltipLeft = mouseLeft - tooltipBodyDim.width + 11;
            }
        }

        if (isIE6) {
            tooltipIframe.css({
                top: tooltipTop + 'px',
                left: tooltipLeft + 'px',
                width: tooltipDim.width + 'px',
                height: tooltipBodyDim.height + 6 + 'px',
                display: 'block',
                zIndex: 1000
            });

            if (!isStatic && !isFixed) {
                tooltip.css({
                    width: tooltipBodyDim.width + 'px'
                });
            }
        }

        tooltip.css({
            width: tooltipBodyDim.width + 'px',
            height: tooltipBodyDim.height + 6 + 'px',
            top: tooltipTop + 'px',
            left: tooltipLeft + 'px'
        });

        // il tooltip statico si richiude da solo dopo 0,5 secondi
        if (isStatic && !isNoautoClosed) {

            var func = function() { removeUniqTooltip(e, el); }
            setTimeout(func, 5000);
        }
    }
}

// Rimuove il tooltip
function removeUniqTooltip(e, el) {
    var el = $(el),
        uniqTooltipText = ((el.hasClass('uniqTooltipText')) || (el.hasClass('uniqTooltipIco'))) ? el : el.closest('.uniqTooltipText'),
        idTooltip = 'uniqTooltip',
        isStatic = uniqTooltipText.hasClass('static'), // true se classe tooltip contiene 'static'
        isFixed = uniqTooltipText.hasClass('fixed'); // true se classe tooltip contiene 'fixed'

    if ((isStatic) || (isFixed)) {
        idTooltip = uniqTooltipText.attr('id') + 'tooltip';
    }
    if (isFixed) {
        el[0].parentNode.className = 'closed';
    }
    var idTooltipIframe = idTooltip + 'Iframe',
        tooltip = $('#' + idTooltip),
        tooltipIframe = $('#' + idTooltipIframe);

    if (tooltip.length) tooltip.remove();

    if (isIE6) {
        if (tooltipIframe.length) tooltipIframe.remove();
    }
}

function updateUniqTooltip(e, el) {
    var el = $(el),
        uniqTooltipText = ((el.hasClass('uniqTooltipText')) || (el.hasClass('uniqTooltipIco'))) ? el : el.closest('.uniqTooltipText'),
        idTooltip = 'uniqTooltip',
        isStatic = uniqTooltipText.hasClass('static'), // true se classe tooltip contiene 'static'
        isFixed = uniqTooltipText.hasClass('fixed'), // true se classe tooltip contiene 'fixed'
        isOver = uniqTooltipText.hasClass('over'); // true se classe tooltip contiene 'over'

    if ((isStatic) || (isFixed)) idTooltip = uniqTooltipText.attr('id') + 'tooltip';

    var tooltip = $('#' + idTooltip);

    // Aggiorna il tooltip, se esiste
    if (tooltip.length) {
        var tooltipContent = tooltip.find('.uniqTooltipContent:first'),
            hiddenContent = el.find('.uniqTooltipInnerHTML:first');

        tooltipContent.html(hiddenContent.html());
    }
}
/** * |FINE| TOOLTIP UNICO - Tooltip da usare su tutto il sito ** */


/*****************************************************************************************************************************************************
 * AJAX - Utility per fare chiamate AJAX *
 * 
 * @author Andrea Colanicchia
 */

function parseJSON(json) {
    var data = null;

    try {
        data = json.evalJSON();
    } catch (e) {
        data = null;
    }

    return data;
}
/* WRAPPER PER EX Generic Call */
function AJAXGenericCall(method, url, successFunc, failureFunc, parameters, type) {
    if (!type) type = "json";
    jqAJAXCall(method, type, url, successFunc, failureFunc, parameters);
}

function jqAJAXCall(method, type, url, successFunc, failureFunc, parameters) {
    var ajaxOptions = { type: method, url: url };
    // 'json', 'xml', 'html'
    if (type) { ajaxOptions.dataType = type; }
    if (successFunc) { ajaxOptions.success = successFunc; }
    if (failureFunc) { ajaxOptions.error = failureFunc; }
    if (parameters) { ajaxOptions.data = parameters }
    return $.ajax(ajaxOptions);
}

/* Wrapper per Ajax Request */



/** * |FINE| AJAX - Utility per fare chiamate AJAX ** */

/** * Funzioni del CONTO TECNICO ** */
function ctInitialize() {
    // Riadattamento per ie6
    {
        // valori top e left dei draggables
        draggablesLeft = 330;
        draggablesTop = 70;

        // Inizializza gli eventuali draggables
        draggablesOl = $('div.dragoverlay').css({
            "left": $('#ctpage').offset().left + draggablesLeft + 'px',
            "top": $('#ctpage').offset().top + draggablesTop + 'px'
        });
        $("body").append(draggablesOl);
        /* draggablesOl.draggable({handle: 'titleHandle'}); */

        // Inizializza hover e out dei link
        linksOl = $('#ctcont a.link');
        for (x = 0; x < linksOl.length; x++) {
            linksOl[x].onmouseover = function() { ctHover(this) };
            linksOl[x].onmouseout = function() { ctOut(this) };
        }

    }
}

function ctLinkReset() {
    for (x = 0; x < linksOl.length; x++) {
        linksOl[x].getElementsByTagName("IMG")[0].src = linksOl[x].getElementsByTagName('img')[0].src.replace("_on.gif", ".gif");
    }
}

function ctOpenDetailOverlay(idOverlay, link) {
    idOverlay = jqc(idOverlay);
    var thisOverlay = $(idOverlay);

    // resetta tutti i links
    ctLinkReset();
    link.getElementsByTagName('img')[0].src = link.getElementsByTagName('img')[0].src.replace(".gif", "_on.gif");

    for (x = 0; x < draggablesOl.length; x++) {
        if (draggablesOl[x].style.display !== 'none' && !$(draggablesOl[x]).is(thisOverlay)) {
            $(draggablesOl[x]).fadeOut(500);
        } else {
            if (thisOverlay.css("display") !== 'none') {
                thisOverlay.animate({ left: ($('#ctpage').offset().left + draggablesLeft + "px"), top: ($('#ctpage').offset().top + draggablesTop + "px") }, 500);
            } else {
                thisOverlay.fadeIn(500);
                thisOverlay.css({ "left": $('#ctpage').offset().left + draggablesLeft + 'px', "top": $('#ctpage').offset().top + draggablesTop + 'px' });
            }
        }
    }
}

function ctCloseDetailOverlay(idOverlay) {
    $(jqc(idOverlay)).fadeOut(500);
    ctLinkReset();
}

function ctHover(element) {
    var hoverObj = $(element);
    hoverObj.css("opacity", 0.8);
}

function ctOut(element) {
    var hoverObj = $(element);
    hoverObj.css("opacity", 1);
}

function ctScopri() {
    ctLinkReset();
    $("#btnScopri").fadeOut(500);
    for (x = 0; x < draggablesOl.length; x++) {
        if (draggablesOl[x].style.display !== "none") draggablesOl[x].fade({ duration: 0.3 });
    }
    var ctScopri = $("#ctscopri");
    if (!ctScopri.is($("BODY > div:first-child"))) $("BODY > div:first-child").before(ctScopri);
    ctScopri.css({ "left": $('#ctpage').offset().left - 33 + 'px', "top": $('#ctpage').offset().top + 'px', zIndex: getNextHighestZindex() });
    ctScopri.fadeIn(500);
    $("#ctScopriChiudi").delay(500).fadeIn(300);
    if ($("#btnApri").length) {
        $("#btnApri")[0].style.zIndex = getNextHighestZindex();
        $("#btnApri").animate({ marginLeft: "100px" }, 500);
    }
    if ($("#btnMutui").length) {
        $("#btnMutui")[0].style.zIndex = getNextHighestZindex();
        $("#btnMutui").delay(300).animate({ marginLeft: "100px" }, 500);
    }

    // inizializza la funzione di riallineamento dello "scopri" in caso di resize.
    ctScopriResize = function() {
        $("#ctscopri")[0].style.left = $('#ctpage').offset().left - 33 + 'px';
    }
    addEvent(window, "resize", ctScopriResize);
}

function ctMutui() {
    ctLinkReset();
    // se lo Scopri ? evidente lo fa andare via

    $("#btnScopri").fadeOut(300);
    $("#btnMutui").fadeOut(300);
    for (x = 0; x < draggablesOl.length; x++) {
        if (draggablesOl[x].style.display !== "none") draggablesOl[x].fade({ duration: 0.3 });
    }
    var ctMutui = $("#ctMutui");
    if (!ctMutui.is($("BODY > div:first-child"))) $("BODY > div:first-child").before(ctMutui);
    ctMutui.css({ "left": $('#ctpage').offset().left - 33 + 'px', "top": $('#ctpage').offset().top + 'px', "z-index": getNextHighestZindex() });

    if ($("#ctscopri")[0].style.display !== "none") {
        $("#ctscopri").fadeOut(300);
        ctMutui.fadeIn(500);
    } else {
        ctMutui.fadeIn(500);
    }

    // inizializza la funzione di riallineamento dello "scopri" in caso di resize.
    ctMutuiResize = function() {
        $("#ctMutui")[0].style.left = $('#ctpage').offset().left - 33 + 'px';
    }
    addEvent(window, "resize", ctMutuiResize);
    // Inizializza il simulatore
    mCalcShow();

    /*
    var calcolatoremutui = new  SWFObject("/swf/calcolatore_mutui.swf", "calcolatore_mutui", "560", "400", "8", "#FFFFFF");
    calcolatoremutui.addParam("quality", "high");		
    calcolatoremutui.addParam("wmode", "transparent");
    calcolatoremutui.addParam("menu", "false");
    calcolatoremutui.addParam("scale", "noscale"); 
    calcolatoremutui.addParam("allowscriptaccess", "always"); 
	
    // Post dati a pagina
    calcolatoremutui.addParam("FlashVars","btsubmit=&xmlfile=/webankpri/wbOnetoone/simulazioneMutui.do&pagetopost=/webankpri/wbOnetoone/2l/do/wbOnetoone/simulazioneMutui.do?OBSCNT=FNZ_NAV%26richiedi=%26tabId=nav_priv_wbx_finanziamenti_ct%26OBSKEY=nav_priv_wbx_finanziamenti_ct&targettopost=_self&" + parametriMutuo);
    calcolatoremutui.write("ctPreventivatoreSwf");
    */
}


function ctReset() {
    $("#btnScopri").delay(500).fadeIn(500);
    $("#ctScopriChiudi").delay(500).fadeOut(500);
    if ($("#ctscopri")) $("#ctscopri").fadeOut(500);
    if ($("#ctMutui")) {
        $("#ctMutui").fadeOut(500);
        $("#ctMutui").fadeOut(500);
    }
    if ($("#btnApri")) $("#btnApri").animate({ marginLeft: "442px" }, 500);
    if ($("#btnMutui")) {
        $("#btnMutui").animate({ marginLeft: "377px" }, 500);
        $("#btnMutui").delay(800).fadeIn(500);
    }

}
/* Fine funzioni del CONTO TECNICO */


// Apre popup di diverse dimensioni
function openPopUp(size, file) {
    if (size === "small") dime = "width=250,height=410";
    if (size === "medium") dime = "width=450,height=445";
    if (size === "large") dime = "width=735,height=445";

    window.open(file, 'main1', dime + ',top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes,location=no')
}

function eseguiFuncOnEnter(e, func) {
    var e = $.event.fix(e);
    if (e.which === 13) { func(e, $(e.target)); }
}

/* FAQ TRADING */
function loadFaq(faqa) {
    var allfaqa = $("#leftfaq a");
    var allfaqdiv = $(".faqargument");

    for (i = 0; i < allfaqa.length; i++) {
        if (allfaqa[i] === faqa) {
            allfaqa[i].className = "selected";
            $(allfaqdiv[i]).delay(400).fadeIn(400);
        } else {
            $(allfaqdiv[i]).fadeOut(400);
            allfaqa[i].className = "";
        }
    }

}
/* FINE FAQ TRADING */

/* FORMATTA NUMERI */
function formatDots(numberText) {
    // inizializza la stringa da "ritornare"
    var formattedNum = "";
    // Converte il numero in stringa
    numberText = numberText + "";
    // crea la nuova stringa partendo dal fondo
    for (x = numberText.length; x > 0; x--) {
        if ((x - numberText.length) % 3 === 0 && formattedNum.length > 0) formattedNum = "." + formattedNum;
        formattedNum = numberText.substr((x - 1), 1) + formattedNum;
    }
    return formattedNum;
}

function formatEuro(value, addDec) {
    var isNeg = false,
        valuePart, intValue, decValue, valueStr;
    value = parseFloat(value);
    if (!isNaN(value)) {
        if (value < 0) {
            isNeg = true;
            value *= -1;
        }
        value = value.toFixed(2);
        valuePart = value.toString().split('.');
        intValue = valuePart[0];
        valueStr = formatDots(intValue);
        if (addDec) {
            decValue = (typeof valuePart[1] !== 'undefined') ? ((valuePart[1].length == 2) ? valuePart[1] : valuePart[1] + '0') : '00';
            valueStr += ',' + decValue;
        }
    }
    return (isNeg) ? '-' + valueStr : valueStr;
}

function cleanCurrency(idImporto, limit) {
    // Toglie tutto ci� che non sono cifre
    var el = $('#' + idImporto),
        valoreString = el.val();
    if (/^\d+$/.test(valoreString)) {
        valore = parseFloat(valoreString);
        if (typeof limit !== 'undefined' && valore > limit) {
            valore = limit;
        }
    } else {
        valore = -1;
    }
    if (valore <= 0) {
        el.val('');
    } else {
        el.val(valore);
    }
    return valore;
}
/* |FINE| FORMATTA NUMERI */

/* FIX DEI FORMS */
// Insieme di funzioni da riconsiderare in fase di riprogettazione: utilizzate in accoglienza, per ora.
function fixForms() {
    // Fixa i tooltip, solo su Firefox
    if (!(navigator.appVersion.indexOf("MSIE") !== -1)) {
        var allinputs = document.getElementsByTagName("input");
        var aminiTT = null;
        for (x = 0; x < allinputs.length; x++) {
            if (allinputs[x].type === "checkbox" || allinputs[x].type === "radio") {
                currentInput = allinputs[x];
                aminiTT = document.createElement("A");
                aminiTT.className = "miniTT";
                aminiTT.title = allinputs[x].title;
                currentInput.parentNode.insertBefore(aminiTT, currentInput);
            }
        }
    }
}

function loadFormControl() {
    addEvent(window, "load", fixForms);
}
/* FINE FIX DEI FORMS */

/* PILOTAGGIO DEI CAMPI (ERRORE E ABILITAZIONE) */
// Acquisizione delle etichette
function fieldGetLabels(wrapper) {
    var labels = wrapper.getElementsByTagName("LABEL");
    return labels;
}

// Acquisizione dei campi
function fieldGetFields(wrapper) {
    var elementtags = Array("INPUT", "SELECT", "TEXTAREA")
    var elements = Array();
    var fieldarray = Array();
    for (x = 0; x < elementtags.length; x++) {
        elements = wrapper.getElementsByTagName(elementtags[x]);
        for (y = 0; y < elements.length; y++) {
            fieldarray.push(elements[y]);
        }
    }
    return fieldarray;
}
// Abilitazione tramite wrapper (pu� essere qualsiasi cosa indicizzabile alla quale toglie la classe "disabled")
function fieldEnable(wrapperId) {
    var wrapper = document.getElementById(wrapperId);
    wrapper.className = wrapper.className.replace("disabled", "");
    fields = fieldGetFields(wrapper);
    for (i = 0; i < fields.length; i++) {
        fields[i].disabled = false;
        // Rimuove l'attributo title (e di conseguenza il tooltip) in maniera definitiva (non reversibile)
        fields[i].title = "";
    }
}

// Disabilitazione tramite wrapper (pu� essere qualsiasi cosa indicizzabile alla quale appende, se necessario, la classe "disabled")
function fieldDisable(wrapperId) {
    var wrapper = document.getElementById(wrapperId);
    if (wrapper.className.indexOf("disabled") < 0) wrapper.className = wrapper.className + (" disabled");
    var fields = fieldGetFields(wrapper);
    for (i = 0; i < fields.length; i++) {
        fields[i].disabled = true;
    }
}
// Setta l'errore tramite il wrapper (appende al wrapper la classe error)
function fieldSetError(wrapperId) {
    var wrapper = document.getElementById(wrapperId);
    if (wrapper.className.indexOf("error") < 0) wrapper.className = wrapper.className + (" error");
}

// Setta l'errore tramite il wrapper (toglie dal wrapper la classe error)
function fieldResetError(wrapperId) {
    var wrapper = document.getElementById(wrapperId);
    wrapper.className = wrapper.className.replace("error", "");
}

// Testa se checkbox o radio button vengono flaggati ed eventualmente toglie l'errore al parent wrapper
function fieldCheck(field, parentWrapperId) {
    var wrapper = document.getElementById(parentWrapperId);
    if (field.checked) {
        wrapper.className = wrapper.className.replace("error", "");
        wrapper.className = wrapper.className.replace("disabled", "");
    }
}

/* FINE PILOTAGGIO DEI CAMPI (ERRORE E ABILITAZIONE) */

/* APERTURA POPUP VIDEO GRANDI */
function openPopVideoplayerBig(url) {
    window.open(url, "webankvideo", "toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=yes,width=800,height=550");
}
/* |FINE| APERTURA POPUP VIDEO GRANDI */


/** * FORMATTAZIONE DATE ** */
/*
 * Date Format 1.2.3 (c) 2007-2009 Steven Levithan <stevenlevithan.com> MIT license
 * 
 * Includes enhancements by Scott Trenda <scott.trenda.net> and Kris Kowal <cixar.com/~kris.kowal/>
 * 
 * Accepts a date, a mask, or a date and a mask. Returns a formatted version of the given date. The date defaults to the current date/time. The mask
 * defaults to dateFormat.masks.default.
 */

var dateFormat = function() {
    var token = /d{1,4}|m{1,4}|yy(?:yy)?|([HhMsTt])\1?|[LloSZ]|"[^"]*"|'[^']*'/g,
        timezone = /\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,
        timezoneClip = /[^-+\dA-Z]/g,
        pad = function(val, len) {
            val = String(val);
            len = len || 2;
            while (val.length < len) val = "0" + val;
            return val;
        };

    // Regexes and supporting functions are cached through closure
    return function(date, mask, utc) {
        var dF = dateFormat;

        // You can't provide utc if you skip other args (use the "UTC:" mask prefix)
        if (arguments.length === 1 && Object.prototype.toString.call(date) === "[object String]" && !/\d/.test(date)) {
            mask = date;
            date = undefined;
        }

        // Passing date through Date applies Date.parse, if necessary
        date = date ? new Date(date) : new Date;
        if (isNaN(date)) return; //throw console.debug("invalid date");

        mask = String(dF.masks[mask] || mask || dF.masks["default"]);

        // Allow setting the utc argument via the mask
        if (mask.slice(0, 4) === "UTC:") {
            mask = mask.slice(4);
            utc = true;
        }

        var _ = utc ? "getUTC" : "get",
            d = date[_ + "Date"](),
            D = date[_ + "Day"](),
            m = date[_ + "Month"](),
            y = date[_ + "FullYear"](),
            H = date[_ + "Hours"](),
            M = date[_ + "Minutes"](),
            s = date[_ + "Seconds"](),
            L = date[_ + "Milliseconds"](),
            o = utc ? 0 : date.getTimezoneOffset(),
            flags = {
                d: d,
                dd: pad(d),
                ddd: dF.i18n.dayNames[D],
                dddd: dF.i18n.dayNames[D + 7],
                m: m + 1,
                mm: pad(m + 1),
                mmm: dF.i18n.monthNames[m],
                mmmm: dF.i18n.monthNames[m + 12],
                yy: String(y).slice(2),
                yyyy: y,
                h: H % 12 || 12,
                hh: pad(H % 12 || 12),
                H: H,
                HH: pad(H),
                M: M,
                MM: pad(M),
                s: s,
                ss: pad(s),
                l: pad(L, 3),
                L: pad(L > 99 ? Math.round(L / 10) : L),
                t: H < 12 ? "a" : "p",
                tt: H < 12 ? "am" : "pm",
                T: H < 12 ? "A" : "P",
                TT: H < 12 ? "AM" : "PM",
                Z: utc ? "UTC" : (String(date).match(timezone) || [""]).pop().replace(timezoneClip, ""),
                o: (o > 0 ? "-" : "+") + pad(Math.floor(Math.abs(o) / 60) * 100 + Math.abs(o) % 60, 4),
                S: ["th", "st", "nd", "rd"][d % 10 > 3 ? 0 : (d % 100 - d % 10 !== 10) * d % 10]
            };

        return mask.replace(token, function($0) {
            return $0 in flags ? flags[$0] : $0.slice(1, $0.length - 1);
        });
    };
}();

// Some common format strings
dateFormat.masks = {
    "default": "ddd mmm dd yyyy HH:MM:ss",
    shortDate: "m/d/yy",
    mediumDate: "mmm d, yyyy",
    longDate: "mmmm d, yyyy",
    fullDate: "dddd, mmmm d, yyyy",
    shortTime: "h:MM TT",
    mediumTime: "h:MM:ss TT",
    longTime: "h:MM:ss TT Z",
    isoDate: "yyyy-mm-dd",
    isoTime: "HH:MM:ss",
    isoDateTime: "yyyy-mm-dd'T'HH:MM:ss",
    isoUtcDateTime: "UTC:yyyy-mm-dd'T'HH:MM:ss'Z'"
};

// Internationalization strings
dateFormat.i18n = {
    dayNames: ["Dom", "Lun", "Mar", "Mer", "Gio", "Ven", "Sab", "Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato"],
    monthNames: ["Gen", "Feb", "Mar", "Apr", "Mag", "Giu", "Lug", "Ago", "Set", "Ott", "Nov", "Dic", "Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"]
};

// For convenience...
Date.prototype.format = function(mask, utc) {
    return dateFormat(this, mask, utc);
};
/** * |FINE| FORMATTAZIONE DATE ** */


/** * FUNZIONI PER LE DATE ** */
// Aggiungere giorni mesi anni alla data
Date.prototype.addDays = function(d) {
    this.setDate(this.getDate() + d);

    return this;
};

Date.prototype.addWeeks = function(w) {
    this.addDays(w * 7);

    return this;
};

Date.prototype.addMonths = function(m) {
    var d = this.getDate();
    this.setMonth(this.getMonth() + m);

    if (this.getDate() < d) this.setDate(0);

    return this;
};

Date.prototype.addYears = function(y) {
    var m = this.getMonth();
    this.setFullYear(this.getFullYear() + y);

    if (m < this.getMonth()) {
        this.setDate(0);
    }

    return this;
};

Date.prototype.setZeroHour = function() {
    this.setHours(0);
    this.setMinutes(0);
    this.setSeconds(0);
    this.setMilliseconds(0);

    return this;
};

// Controlla la validita' di una data sia per il formato sia per l'esistenza
function isValidDate(stringa) {
    var espressione = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;

    if (!espressione.test(stringa)) {
        return false;
    } else {
        anno = parseInt(stringa.substr(6), 10);
        mese = parseInt(stringa.substr(3, 2), 10);
        giorno = parseInt(stringa.substr(0, 2), 10);

        var data = new Date(anno, mese - 1, giorno);

        if (data.getFullYear() === anno && data.getMonth() + 1 === mese && data.getDate() === giorno) {
            return true;
        } else {
            return false;
        }
    }
}

function getDateFromString(dateStr) {
    var dateObj = null,
        dateArr;
    if (typeof dateStr === 'string' && isValidDate(dateStr)) {
        dateArr = dateStr.split('/').reverse();
        dateObj = new Date(parseInt(dateArr[0], 10), parseInt(dateArr[1], 10) - 1, parseInt(dateArr[2], 10));
    }
    return dateObj;
}

var holidays = {};

function getHolidays(year) {
    var easterDay, angelDay, result;
    if (typeof holidays[year] === 'undefined') {
        easterDay = getEasterDay(year);
        holidays[year] = [
            year + '-01-01',
            year + '-01-06',
            easterDay.format('isoDate'),
            easterDay.addDays(1).format('isoDate'),
            year + '-04-25',
            year + '-05-01',
            year + '-06-02',
            year + '-08-15',
            year + '-11-01',
            year + '-12-08',
            year + '-12-25',
            year + '-12-26',
        ];
    }
    return holidays[year];
}

function getEasterDay(year) {
    var M = 24,
        N = 5,
        a = year % 19,
        b = year % 4,
        c = year % 7,
        d = ((19 * a) + M) % 30,
        e = ((2 * b) + (4 * c) + (6 * d) + N) % 7,
        day, month;
    if (d + e < 10) {
        day = d + e + 22;
        month = 3;
    } else {
        day = d + e - 9;
        month = 4;
    }
    if (day === 26 && month === 4) {
        day = 19;
        month = 4;
    }
    if (day === 25 && month === 4 && d === 28 && e === 6 && a > 10) {
        day = 18;
        month = 4;
    }
    return new Date(year, month - 1, day);
}

// Restituisce TRUE se "date" NON � festivo
function noHolidays(date) {
    var resultArr = $.datepicker.noWeekends(date);
    if (resultArr[0]) {
        resultArr[0] = ($.inArray(date.format('isoDate'), getHolidays(date.getFullYear())) === -1);
        if (resultArr[0] === false) { resultArr[1] = 'ui-datepicker-festivo' }
    }

    return resultArr;

}

function highlightDays(date) {
    var eventDates = {};
    eventDates = getHolidays(date.getFullYear());
    for (i = 0; i < (eventDates.length); i++) {

        if (eventDates[i] == date.format('isoDate')) {
            return [true, 'ui-datepicker-festivo'];
        }
    }
    return [true, ''];
}


var _MS_PER_DAY = 1000 * 60 * 60 * 24;

// a and b are javascript Date objects
function dateDiffInDays(a, b) {
    // Discard the time and time-zone information.
    var utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
    var utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());

    return Math.floor((utc2 - utc1) / _MS_PER_DAY);
}
/** * |FINE| FUNZIONI PER LE DATE ** */


/*****************************************************************************************************************************************************
 * ACCORDION ORIZZONTALE a due box *
 * 
 * @author Andrea Colanicchia - Thera
 */
function HzAccordion(idAccordion) {
    this.accordion = null;
    this.left = {};
    this.right = {};
    this.running = false;
    this.expanded = '';
    this.effect = null;

    this.calculatePerc = function(val1, val2) { return parseFloat((val1 / val2).toFixed(4)) * 100 }

    // ESPANSIONE box sinistro o destro
    this.expand = function(event, boxToExpand) {
        if (this.expanded !== boxToExpand) {
            this.expanded = boxToExpand;
            this.animate('expand');
        }
    }

    // REIMPOSTAZIONE allo stato iniziale
    this.reset = function(event) {
        var targetOk = true;

        // Controlla se l'evento mouseout avviene su un oggetto interno all'accordion, in tal caso blocca l'animazione
        if ($.browser.msie) targetOk = ($(event.relatedTarget || event.toElement).closest('.contentBox')) ? false : true;

        // Controlla che l'animazione sul mouseout non sia gi� in esecuzione
        if (this.expanded !== '' && targetOk) {
            this.expanded = '';

            // Se � in esecuzione un'animazione di espansione, la blocca
            if (this.running) this.effect.cancel();

            this.animate('reset');
        }
    }

    this.animate = function(type) {
        if (this.running) this.effect.cancel();

        this.running = true;

        var effectsScaleArray = [];
        var isExpand = (type === 'expand');
        var isRightExpand = (isExpand && this.expanded === 'dx');

        var box1 = (isRightExpand) ? this.right : this.left;
        var box2 = (isRightExpand) ? this.left : this.right;

        var endPerc1 = isExpand ? 100 : box1.startPerc;
        var endPerc2 = isExpand ? box2.compactPerc : box2.startPerc;

        effectsScaleArray.push(
            new Effect.Scale(box1.dom, endPerc1, {
                sync: true,
                scaleMode: {
                    originalWidth: box1.fullWidth
                },
                scaleY: false,
                scaleFrom: this.calculatePerc(box1.dom.getWidth(), box1.fullWidth)
            })
        );

        effectsScaleArray.push(
            new Effect.Scale(box2.dom, endPerc2, {
                sync: true,
                scaleMode: {
                    originalWidth: box2.fullWidth
                },
                scaleY: false,
                scaleFrom: this.calculatePerc(box2.dom.getWidth(), box2.fullWidth)
            })
        );

        this.effect = new Effect.Parallel(
            effectsScaleArray, {
                duration: 1.0,
                transition: Effect.Transitions.sinoidal,
                queue: {
                    scope: 'effects',
                    position: 'end'
                },
                afterFinish: function() {
                    this.running = false;
                }
            }
        );
    }

    // --- INIZIALIZZAZIONE accordion orizzontale ---
    this.accordion = $(jqc(idAccordion));
    this.accordion.find('.fpHidden:first').css({ width: 'auto' });
    this.accordion.find('.leftBox .contentBox:first').mouseover(function(e) { this.expand.call(this, e, 'sx'); });
    this.accordion.find('.rightBox .contentBox:first').mouseover(function(e) { this.expand.call(this, e, 'dx'); });
    this.accordion.find('.contentBox:first').mouseout(function(e) { this.reset.call(this); });
    this.left.dom = this.accordion.find('.leftBox')[0];
    this.left.fullWidth = this.left.dom.find('.contentBox')[0].getWidth();
    this.left.startWidth = this.left.dom.getWidth();
    this.right.dom = this.accordion.find('.rightBox')[0];
    this.right.fullWidth = this.right.dom.find('.contentBox')[0].getWidth();
    this.right.startWidth = this.right.dom.getWidth();
    this.left.compactWidth = this.left.startWidth - (this.right.fullWidth - this.right.startWidth);
    this.left.startPerc = this.calculatePerc(this.left.startWidth, this.left.fullWidth);
    this.left.compactPerc = this.calculatePerc(this.left.compactWidth, this.left.fullWidth);
    this.right.compactWidth = this.right.startWidth - (this.left.fullWidth - this.left.startWidth);
    this.right.startPerc = this.calculatePerc(this.right.startWidth, this.right.fullWidth);
    this.right.compactPerc = this.calculatePerc(this.right.compactWidth, this.right.fullWidth);
}
/* |FINE| ACCORDION ORIZZONTALE a due box */

//Imposta una select al valore passato come parametro
function impostaValoreSelect(idSelect, valore) {
    var el = $('#' + idSelect);
    if (el)
        el.val(valore);
}

// Calcolo degli importi da investire nei fondi del carrello
function aggiornaInvestimenti(event) {
    var importoFondi = $('#importoFondi'),
        impValue = getFieldIntValue(importoFondi),
        tbFondi = $('#tbFondi'),
        arrPerc = tbFondi.find('.perc'),
        arrImp = tbFondi.find('.imp'),
        arrStatus = tbFondi.find('.status'),
        totPerc = tbFondi.find('.totPerc')[0],
        totImp = tbFondi.find('.totImp')[0],
        totPercVal = 0,
        totImpVal = 0,
        tuttiAcquistati = true;

    if (impValue !== '') {
        if (impValue > 1000000000) impValue = 1000000000;

        arrPerc.each(function(index, percEl) {
            var impEl = arrImp.eq(index);

            if (arrStatus[index].innerHTML.indexOf('acquistato') === -1) {
                var perc = parseFloat(percEl.innerHTML.replace('%', '').replace(',', '.')),
                    impVal = parseInt(impValue / 100 * perc, 10);

                tuttiAcquistati = false;
                impEl.html(formatDots(impVal));
            } else impEl.html('');
        });
    } else {
        arrImp.each(function(index, impEl) {
            impEl = $(impEl);
            if (arrStatus[index].innerHTML.indexOf('acquistato') === -1) {
                impEl.html('0');
                tuttiAcquistati = false;
            } else impEl.html('');
        });
    }

    if (tuttiAcquistati) importoFondi.vale('').attr('disabled', 'disabled');
    else importoFondi.removeAttr('disabled').val(impValue);

    aggiornaTotRimanente();

    if (typeof changeParTimeout !== "undefined" && changeParTimeout) clearTimeout(changeParTimeout);

    changeParTimeout = setTimeout(function() { changeParamCarrello('') }, 500);
}

function getFieldIntValue(field) {
    var strVal = $(jqc(field)).val().replace(/[^\d]/g, '');
    var val = 0;

    if (strVal !== '') val = parseInt(strVal, 10);
    if (val < 1) val = '';

    return val
}

// Corregge i problemi di encodeURIComponent con i carattteri "+" e "'"
function fixedEncodeURIComponent(str) { return encodeURIComponent(str.replace(/&#39;/g, '%27').replace(/\+/g, '%2B')); }

/** * INVESTMENT SOLVER - FP investimenti ** */
function calcolaInteressi(importo, percNetto, mesi) {
    var calcValue = (importo * percNetto * mesi) / 1200;
    if (calcValue > 1) { calcValue = formatDots(parseInt(calcValue, 10)); } else { calcValue = format2Dec(calcValue.toString().replace('.', ',')); }
    return calcValue;
}

function format2Dec(tasso) {
    var pointPos = tasso.indexOf(',');
    if (pointPos < 0) return tasso + ',00';
    else if ((tasso.length - (pointPos + 1)) < 2) {
        return tasso.substring(0, pointPos + 2) + '0';
    } else return tasso.substring(0, pointPos + 3);
}
/** * |FINE| INVESTMENT SOLVER - FP investimenti ** */


/** * CARRELLO - Chiamate AJAX ** */
function getCarrello(callback) {
    jqAJAXCall('get', 'json', cgi_script + '/FMP/returnCart.jsp', function(json) { getCarrelloOK(json, callback); }, function(jqXHR, textStatus, errorThrown) { getCarrelloKO(jqXHR, textStatus, errorThrown, callback); }, { type: 'fida', cf: Math.random() });
}

function checkCarrello(cart, succFunc, failFunc) {
    jqAJAXCall('post', 'json', cgi_script + '/FMP/returnCart.jsp', succFunc, failFunc, { type: 'check', cart: JSON.stringify(cart) });
}

function overwriteCarrello(cart, callback) {
    jqAJAXCall('post', 'json', cgi_script + '/FMP/checkCart.do', function(json) { overwriteCarrelloOK(json, callback); }, function(jqXHR, textStatus, errorThrown) { overwriteCarrelloKO(jqXHR, textStatus, errorThrown, callback); }, { cart: JSON.stringify(cart) });
}

function setCarrello(cart, callback) {
    checkCarrello(cart, function(json) { checkCarrelloOK(json, cart, callback); }, function(jqXHR, textStatus, errorThrown) { checkCarrelloKO(jqXHR, textStatus, errorThrown, callback); });
}

function delFondo(el, isin) {
    if ($('#tbFondi tbody tr').length === 1) {
        openAlert('eliminaCarrello');
        return;
    }
    // Riga del fondo da rimuovere
    var riga = $(el).closest('tr');
    jqAJAXCall('post', 'json', cgi_script + '/FMP/checkCart.do', function(json) { delFondoOK(json, riga); }, delFondoKO, { deleteFund: isin });
}

function delCarrello() {
    jqAJAXCall('post', 'json', cgi_script + '/FMP/checkCart.do', delCarrelloOK, delCarrelloKO, { deleteCart: 'OK' });
}

function checkCarrello(cart, succFunc, failFunc) {
    jqAJAXCall('post', 'json', cgi_script + '/FMP/returnCart.jsp', succFunc, failFunc, { type: 'check', cart: JSON.stringify(cart) });
}

function changeParamCarrello(ordColumn) {
    var importo = getFieldIntValue('importoFondi');
    if (importo === '') { importo = 0; }
    if (ordColumn !== '') {
        if (ordColumn === ordColumnCart) { ordDirCart *= -1; } else {
            ordColumnCart = ordColumn;
            ordDirCart = 1;
        }
    }
    jqAJAXCall('post', 'json', cgi_script + '/FMP/changeParameterCart.jsp', null, null, { "ordColumn": ordColumnCart, "ordDir": ordDirCart, "quantita": importo });
}


/** * |FINE| CARRELLO - Chiamate AJAX ** */

/** * |FINE| CARRELLO - Callback ** */
function getCarrelloOK(json, callback) {
    var widget = $('#faseStart');
    if (json.alert) {
        widget.find('.carrelloType:first').html(json.profilo);
        widget.find('.carrelloNum:first').html(json.numFondi.toString());
        widget.show();
        callback(json);
    }
    // Ritorna a FIDA il fallito caricamento del carrello
    else { callback(json); }
}

function getCarrelloKO(jqXHR, textStatus, errorThrown, callback) {
    // Ritorna a FIDA il fallito caricamento del carrello
    callback(null);
}

function checkCarrelloOK(json, cart, callback) {
    if (json.alert) {
        var confermaIns = $('#confermaIns'),
            profiloOld = json.cartOld.charAt(0).toUpperCase() + json.cartOld.slice(1),
            profiloNew = json.cartNew.charAt(0).toUpperCase() + json.cartNew.slice(1),
            leftBtn = confermaIns.find('.btnformleft'),
            arrRightBtn = confermaIns.find('.btnformright');
        confermaIns.find('.cartOld').html(profiloOld);
        confermaIns.find('.cartNew').html(profiloNew);
        leftBtn.off('click')
            .click(function(event) { callback(false);
                closeAlert('confermaIns'); });
        arrRightBtn.eq(0).attr('title', 'vedi carrello "' + profiloOld + '"')
            .attr('href', cgi_script + '/wbOnetoone/2l/do/FMP/viewCart.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_carrello');
        arrRightBtn.eq(1).attr('title', 'vedi carrello "' + profiloNew + '"')
            .off('click')
            .click(function(event) { overwriteCarrello(cart, callback);
                closeAlert('confermaIns'); });
        openAlert('confermaIns');
    } else { overwriteCarrello(cart, callback); }
}

function checkCarrelloKO(jqXHR, textStatus, errorThrown, callback) {
    // Ritorna a FIDA il fallito inserimento del carrello
    callback(false);
}

function overwriteCarrelloOK(json, callback) {
    if (json.success) {
        var widget = $('#faseStart');
        widget.find('.carrelloType:first').html(json.profilo);
        widget.find('.carrelloNum:first').html(json.numFondi.toString());
        widget.show();
        callback(true);
    }
    // Ritorna a FIDA il fallito inserimento del carrello
    else { callback(false); }
}

function overwriteCarrelloKO(jqXHR, textStatus, errorThrown, callback) {
    // Ritorna a FIDA il fallito inserimento del carrello
    callback(false);
}

function delFondoOK(json, riga) {
    if (json.success) {
        // Rimuove la riga del fondo
        riga.remove();
        aggiornaTotRimanente();
        zebra($('#tbFondi tbody tr'));
    }
}

function delFondoKO(jqXHR, textStatus, errorThrown) {

}

function delCarrelloOK(json) {
    if (json.success) {
        callJSP('/wbOnetoone/mffida/servlet/portafogli/index.do', null, 'get=1&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello');
    }
}

function delCarrelloKO(jqXHR, textStatus, errorThrown) {

}

function aggiornaTotRimanente() {
    var totFondiPerc = 100.0,
        importo = getFieldIntValue('importoFondi'),
        tbFondi = $('#tbFondi'),
        tbFondiBody = tbFondi.find('tbody:first'),
        tbFondiFootTr = tbFondi.find('tfoot tr:first');
    tbFondiBody.find('td.perc').each(function(index, item) {
        totFondiPerc -= parseFloat(item.innerHTML.replace('%', '').replace(',', '.'));
    });
    var totImp = (importo === '') ? 0 : parseInt(importo / 100 * totFondiPerc, 10);
    if (totFondiPerc > 0) {
        tbFondiFootTr.show();
        tbFondiFootTr.find('.totPerc:first').html(totFondiPerc.toString() + '%');
        tbFondiFootTr.find('.totImp:first').html(formatDots(totImp));
    } else { tbFondiFootTr.hide(); }
}
/** * |FINE| CARRELLO - Callback ** */
function callCarrello() {
    var action = '/wbOnetoone/2l/do/FMP/viewCart.do?',
        param = 'tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_carrello';
    callExt(action, param);
}

function callTopS() {
    var action = '/wbOnetoone/mffida/servlet/toppicks/index.do?',
        param = 'OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_best_selected';
    callExt(action, param);
}

function callPortafogliModello() {
    var action = '/wbOnetoone/mffida/servlet/portafogli/index.do?',
        param = 'OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello&get=1';
    callExt(action, param);
}

function callAlertPortafogliModello(pageName) {
    var obs_key = '',
        action = '/wbOnetoone/2l/do/wbOnetoone/sms/fida/alertPortafMod.do?';
    if (pageName === 'PortafogliModello') {
        obs_key = 'nav_priv_wbx_portafogli_modello';
    } else if (pageName === 'TopSelection') {
        obs_key = 'nav_priv_wbx_best_selected';
    }
    var param = 'OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=' + obs_key;
    callExt(action, param);
}

function callProfili() {
    var action = '/wbOnetoone/mffida/servlet/profili/index.do?',
        param = 'OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_profili_investitore';
    callExt(action, param);
}

function apriSchedaFondoFida(codiceFida) {

    var obs = "OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto&";
    var action = "/wbOnetoone/2l/action/investimenti/RicercaFondi.action?" + obs;
    var param = "codicefida=" + codiceFida + "&fondo=true";

    callExt(action, param);

}

function callExt(action, param) {
    var hrefValue = cgi_protocol + cgi_host + cgi_script + action + param + "&cf=" + Math.random();
    top.document.location.href = hrefValue;
}

function pulisciNumeriInput(numero) {
    return parseFloat(numero.replace(/\./g, '').replace(/,/g, '.'));
}

function formattaNumeriOutput(numero) {
    var segno, parti, result, floatNum = parseFloat(numero).toFixed(2);
    segno = (floatNum < 0) ? '-' : '';
    parti = floatNum.toString().replace(segno, '').split('.');
    result = segno + formatDots(parti[0]);
    // Controllo se ci sono i decimali
    if (parti.length > 1) {
        result += ',' + parti[1];
    } else {
        result += ',00';
    }
    return result;
}

/** * FONDI - Layer pdf ** */
function getFogliInfo(fondo) {
    jqAJAXCall('get', 'html', cgi_script + '/FMP/fogliInformativi.jsp', getFogliInfoOK, getFogliInfoKO, { societaGestione: fondo, cf: Math.random() });
}

var dragFogliInfo = null,
    layer = null;

function getFogliInfoOK(html) {
    var layer = $('#layerFogliInfo');
    if (!layer.length) {
        layer = $('<div>', { 'id': 'layerFogliInfo', 'class': 'layeralert3', 'style': 'display:none' })
        $('body').append(layer);
    }
    layer.html(html);
    layer.find('.head img:first').click(function(event) {
        unobscurateAll();
        layer.remove();
        layer = null;
        closeAlert('layerFogliInfo');
    });
    layer.draggable({ handle: ".handle", scroll: "window" });
    // dragFogliInfo = new Draggable('layerFogliInfo', {handle: 'handle'}, { scroll: window });
    obscurateAll(1);
    openAlert('layerFogliInfo');
}

function getFogliInfoKO(jqXHR, textStatus, errorThrown) {}
/** * |FINE| FONDI - Layer pdf ** */

// Popup aucap
function openPopAucap(aucapUrl) {
    if (!cgi_script) cgi_script = "";
    window.open(cgi_script + aucapUrl, 'aucap', 'width=463,height=610,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');
}

// Automazione box assistente virtuale
function pagePaoloInit() {
    pageP = $("#pagePaolo");
    if (pageP.length) {
        pDomanda = $("#paoloDomanda");
        pForm = pageP.find("form:first");
        pClick = pageP.find(".buttonchiedi:first")
        var func = function() {
            if ($("#virtAss").length) {
                vaOpen();
                if (pDomanda.val() !== "" && pDomanda.val() !== "fagli una domanda...") vaAsking(pDomanda.val());
                return false;
            }
        }
        pForm.submit(func);
        pClick.click(func);
        pDomanda.focus(function() {
            if (pDomanda.val() === "fagli una domanda...") {
                pDomanda.val('');
            }
        });
        pDomanda.blur(function() {
            if (pDomanda.val() === "") {
                pDomanda.val("fagli una domanda...");
            }
        });
    }
    // Paolo in spalla destra
    if ($("#rightAss").length) {
        if ($("#virtAss").length) {
            $("#rightAss a.btnformright").click(function() {
                rAssDom = $("#rightAssInput").val();
                vaOpen();
                if (rAssDom !== "" && rAssDom !== "Fammi una domanda...") {
                    vaAsking(rAssDom);
                }
                return false;
            });
        }
    }
}
addEvent(window, "load", pagePaoloInit);

// scheda titoli tab assegnazione classi
function tabTitoliSelected(tabon) {
    var voci = tabon.parentNode.parentNode.children;
    for (i = 0; i < (voci.length); i++) { voci[i].className = 'off' }
    tabon.parentNode.className = 'active';
}

function tabTitoli(tabon) {
    var voci = $(tabon.parentNode);
    if (voci.className === 'off') { voci.addClassName('on');
        voci.removeClassName('off') }
}

function tabTitoliOff(tabon) {
    var voci = tabon.parentNode;
    if (voci.className === 'on') {
        voci.addClassName('off');
        voci.removeClassName('on')
    }
}

// scheda titoli primo livelllo menu
function firstMenuSelected(link) {
    var menuTab = $('#TabFirst');
    var menuV = $('#TabFirst a');

    for (i = 0; i < menuV.length; i++) {
        $(menuV[i].parentNode).addClass('off');
        $(menuV[i].parentNode).removeClass('on');
        $(menuV[i].parentNode.parentNode).removeClass('on');
    }
    $(link.parentNode).removeClass('off');
    $(link.parentNode).addClass('on');

    if ($(link.parentNode).attr('class') === 'secondo on') { $(link.parentNode.parentNode).addClass('on') };


    var menuSecond = $('#IdMenuFondamentale');
    var menuSecond2 = $('#IdMenuTecnico');
    if (menuSecond) { var vociSottoMenu = $('#IdMenuFondamentale li'); for (i = 0; i < vociSottoMenu.length; i++) { $(vociSottoMenu[i]).attr('class', 'off');
            $(vociSottoMenu[0]).attr('class', 'active') } }
    if (menuSecond2) { var vociSottoMenu2 = $('#IdMenuTecnico li'); for (i = 0; i < vociSottoMenu2.length; i++) { $(vociSottoMenu2[i]).attr('class', 'off');
            $(vociSottoMenu2[0]).attr('class', 'active') } }
}

/* Slider Trading */
function loSliderSetEvident(value, loLevaValuex, loSliderInterval) {
    // Toglie l'attivo da tutti gli elementi
    loLevaValuex.removeClass("active");

    // Ricerca il settore "attivo"
    loLevaValuex.eq(value / loSliderInterval).addClass("active");
}


function loSliderInit(loSlidervMin, loSlidervMax, loSlidervDefault, callBackFunction) {
    var loSlider = $("#loLevaSlider").html(""),
        loSliderVal = $("#loSliderValue").val(loSlidervDefault),
        loLevaValue = $("#loLevaValues").html(""),
        // Calcola le "milestones" in base al range immesso
        loSliderMil = [],
        loSliderInterval = Math.round((loSlidervMax - loSlidervMin) / 4),
        // Popola gli "SPAN" con i valori
        loSliderMilVal = [],
        loLevaValuex;
    for (x = 0; x < 5; x++) {
        loSliderMil[x] = loSlidervMin + (x * loSliderInterval);
        var loSpanVal = $("<span>").html(loSliderMil[x] + "%");
        loLevaValue.append(loSpanVal);
    }

    loLevaValuex = loLevaValue.find("span");

    loSlider.slider({
        min: loSlidervMin,
        max: loSlidervMax,
        step: loSliderInterval,
        slide: function(event, ui) {
            loSliderSetEvident(ui.value, loLevaValuex, loSliderInterval);
        },
        change: function(event, ui) {
            loSliderSetEvident(ui.value, loLevaValuex, loSliderInterval);
            loSliderVal.val(ui.value);
            if ($.isFunction(callBackFunction)) { callBackFunction(ui.value) }
        }
    });
    loSliderSetEvident(loSlidervDefault, loLevaValuex, loSliderInterval);
}
/* Fine slider Trading */

/* Tabella aggiungi nuovi recapiti */
function showDetrow(obj) {
    var objEl = $(obj);
    var tdParent = objEl.closest(2);
    if (obj.className === 'openDet') {
        tdParent.style.display = 'none';
        tdParent.next(0).show();
    } else {
        tdParent.style.display = 'none';
        tdParent.previous(0).show();
    }
}
/* Fine abella aggiungi nuovi recapiti */

/* Box aggiungi nuovi beneficiari */
var numBlockAlico = 0;

function showNewBen() {
    var numBlockAlicoSucc = numBlockAlico + 1;
    var contenuto = $('#beneficiari')[0].innerHTML.replace(/\$\$1/g, numBlockAlicoSucc.toString()).replace(/\$\$2/g, numBlockAlico.toString());
    $('#beneficiariDin').append(contenuto);
    numBlockAlico++;
    if ($('.deleteDeb').length > 0) {
        $('.deleteDeb').each(function(index) {
            $('.deleteDeb').eq($('.deleteDeb').length - 1).show();
            $('.deleteDeb').eq(1).hide();
        })
    }
}
var deleteBloccoDebitore = function(el) {
    $(el).closest('.bloccoDebitore').remove();
    $('.deleteDeb').eq($('.deleteDeb').length - 1).show();
    $('.deleteDeb').eq(1).hide();
    numBlockAlico--;
    aggiornaCountDebitore();
}
var aggiornaCountDebitore = function(el) {
    var bloccoDebitore = $('.bloccoDebitore');
    var bloccoDebitoreTit = bloccoDebitore.find('legend span');
    bloccoDebitoreTit.each(function(index) {
        $(this).html('Debitore' + ' ' + index);
        bloccoDebitoreTit.eq(0).html('Debitore' + ' ' + '$$1');
    })
}
/* Fine box aggiungi nuovi beneficiari */

/* Funzioni per lavorare con i numeri */
function moveToInteger(value) {
    return parseInt(Math.round(value * 100), 10);
}

function moveToFloat(value) {
    return (value / 100).toFixed(2);
}

function format2DecNum(value) {
    var isNeg = false;

    if (value < 0) {
        isNeg = true;
        value *= -1;
    }

    value = moveToFloat(value);

    var valuePart = value.toString().split('.');
    var intValue = valuePart[0];
    var decValue = (valuePart[1]) ? ((valuePart[1].length === 2) ? valuePart[1] : valuePart[1] + '0') : '00';
    var valueStr = formatDots(intValue) + ',' + decValue;

    return (isNeg) ? '-' + valueStr : valueStr;
}
/* |FINE| Funzioni per lavorare con i numeri */

/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
addEvent(window, "load", function() {
    var titRows = $('#contenuti .dettTable .titRow');

    if (titRows.length) {
        titRows.each(function(index, item) {
            $(item).mouseover(function(e) {
                $(e.target).closest('.titRow').addClass('overRow');
            }).mouseout(function(e) {
                $(e.target).closest('.titRow').removeClass('overRow');
            });
        });
    }
});

function createDettRow(titRow) {
    var dettRow = titRow.closest('.dettTable').find('.dettRow').eq(0);
    var divId = titRow.attr('id') + "chartDiv";
    if (titRow.hasClass('selRow')) {
        titRow.removeClass('selRow');
        dettRow.remove();
    } else {
        if (dettRow.length) {
            dettRow.closest('.dettTable').find('.selRow').eq(0).removeClass('selRow');
            dettRow.remove();
        }
        titRow.addClass('selRow').after("\n<tr class=\"dettRow\" style=\"border-bottom: 1px dotted #CACACA;\">\n<td colspan=\"7\"><div id=\"" + divId + "\" class=\"chart\"></div></td>\n</tr>");
    }
}

/* Apertura - chiusura iframe scheda titoli */
addEvent(window, 'load', function() {
    var boxImg = $('#boxImg');

    if (boxImg) boxImg.find('a:first').click(function(e) {
        var el = $(this);
        el.toggleClass('bottom');
        el.closest(0).toggleClass('boxInfobg2');
    });
});

/** * LOG - Funzione per scrivere log sulla console del browser ** */
function printLog(msg) {
    if (typeof console !== 'undefined' && console.log) {
        console.log(msg);
    }
}
/** * |FINE| LOG - Funzione per scrivere log sulla console del browser ** */



/* accordion inserimento ordini */
function popBookSwitch(aelement, idCont, forceOpen) {
    var desc_titolo = "prova"; /* $('book_desc_titolo'); */
    var isReady = (desc_titolo && desc_titolo.innerHTML !== '' && desc_titolo.innerHTML !== '&nbsp;');
    if (isReady && (aelement.className.indexOf("unactive") < 0)) {
        var elCont = document.getElementById(idCont);
        if (elCont.style.display === "none") {
            // Apre
            elCont.style.display = "block";
            aelement.className = aelement.className + " opened";
            if (idCont === 'stoploss') {
                aelement.title = 'Chiudi la sezione Stop loss e Take profit'
            } else {
                aelement.title = 'Chiudi la sezione Ordini'
            }
        } else if (!forceOpen) {
            // Chiude
            elCont.style.display = "none";
            aelement.className = aelement.className.replace(" opened", "");
            if (idCont === 'stoploss') {
                aelement.title = 'Apri la sezione Stop loss e Take profit'
            } else {
                aelement.title = 'Apri la sezione Ordini'
            }
        }
    }
}

function popBookOpen(aelement, idCont) {
    if (aelement.className.indexOf("unactive") < 0) {
        var elCont = document.getElementById(idCont);
        elCont.style.display = "block";
        aelement.className = aelement.className + " opened";
    }
}

function popBookClose(aelement, idCont) {
    if (aelement.className.indexOf("unactive") < 0) {
        var elCont = document.getElementById(idCont);
        elCont.style.display = "none";
        aelement.className = aelement.className.replace(" opened", "");
    }
}
/* fine accordion inserimento ordini */

/* Email optimizer */
function emailoGet() {
    emailo = $("#emailopt");
    if (!emailo.length) {
        // Crea il container
        emailo = $("<div>");
        emailo.attr('id', "emailopt");
        emailo.hide();
        $(emailo).append($('<div>', { 'class': 'top' }));
        var emailoCenter = $('<div>', { 'class': 'center' });
        emailoCont = $('<div>', { 'class': 'container' })
        $(emailoCenter).append(emailoCont);
        $(emailo).append(emailoCenter);

        // Inizializza variabili per controllo
        emailoLastQuest = "";

        // Bottone mail (rimosso 26-06-2012)
        // emailoMail = $('<div>', {'class': 'mail'}).html("<a href=\"#\">Lorem ipsum dolor</a>");
        // $(emailo).append(emailoMail);
        // Fine bottone mail

        $(emailo).append($('<div>', { 'class': 'bottom' }));
        $('body > div:first-child').before(emailo);

        // Faccino di Paolo
        $(emailoCont).append($('<img>', { src: "/wscmn/img/ret/emailo_avatar.gif", 'class': "avatar" }));

        // Predispone il contenitore dei suggerimenti
        emailoSugg = $('<div>', { id: "emailosugg" });
        $(emailoCont).append(emailoSugg);
        emailoSugg = $(emailoSugg);

        // Predispone la funzione di riposizionamento
        emailoPos = function() {
            emailo.css({ "z-index": getNextHighestZindex(), "height": "auto", "visibility": "hidden", "display": "block" });
            // Posiziona il box
            var offset = $("#menusxc").offset();
            var emailoTop = offset.top + $("#menusxc").height();
            emailo.css({ "marginTop": emailoTop + "px", "marginLeft": offset.left + "px" });

            // Posiziona la freccetta
            var offsetArrow = ($(emailoField).offset().top - $(emailoCont).offset().top) + Math.round(emailoField.height() / 2) - 10;
            emailoCont.css({ "backgroundPosition": "right " + offsetArrow + "px", "height": "auto" });

            // Imposta l'altezza minima, se necessario affinche' la freccia ci stia tutta
            var minHeight = offsetArrow + 28;
            if (emailoCont.height() < minHeight) {
                emailoCont.css("height", minHeight + "px");
            }
            emailo.css({ "visibility": "visible", "display": "none" });
        }

        // Inizializza la variabile per il controllo del response
        lastEmailoAnswer = "";

        // Evento che ricontrolla il posizionamento in caso di resize
        addEvent(window, "resize", emailoPos);

    }

    // Trim della request (agg. 27-06-2012) e pulizia spazi doppi
    emailoQuest = $.trim(emailoField.val()).replace(/\s\s+/g, ' ');


    // Controlli (valore !==vuoto, !==Scrivi un messaggio... e >= a 3 spazi)
    if (emailoQuest !== "" && emailoQuest !== "Scrivi un messaggio..." && emailoQuest.split(" ").length >= 3 && emailoQuest !== emailoLastQuest) {
        // Blocca l'interfaccia di trasferimento dati finch� necessario
        emailoField.optLocked = true;

        jqAJAXCall('get', 'json', cgi_script + "/wbOnetoone/wbblack/commons/virtass.jsp",
            // jqAJAXCall('get', 'json', "/wscmn/xml/emailo.json",
            function(transport) {
                // Controlla che la risposta non sia uguale a quella gi� ricevuta
                if (lastEmailoAnswer !== transport) {
                    emailoAnswer = transport.body.answer;
                    // Se non vi sono risposte nasconde il contenitore
                    var emailos = emailoAnswer.sugg;
                    if (emailos !== null && emailos.length > 0) {
                        // Mostra o nasconde il pulsantino di invio mail
                        // var emailomail = emailoAnswer.emailomail;
                        // emailoMail.style.display = (emailomail) ? "block" : "none";

                        // Svuota il contenitore
                        emailoSugg.html("");
                        // Array dei suggerimenti
                        for (x = 0; x < emailos.length; x++) {
                            if (x > 0) { emailoSugg.append($("<div>", { 'class': "filetto" })); }
                            emailoSugg.append("<h2>" + emailos[x].title + "</h2>" + "<p>" + emailos[x].html + "</p>");
                        }

                        // Assetta la posizione della nuvoletta e la mostra
                        emailoPos();
                        emailo.show();
                    }

                    lastEmailoAnswer = transport;
                }
                emailoField.optLocked = false;
                emailoLastQuest = emailoQuest;
            },
            null, { "cf": Math.random(), "tipo": "EMO", "userinput": emailoQuest }
        );
    } else {
        if (emailoQuest !== emailoLastQuest) emailo.hide();
    }

}

function emailOptimizer(idField) {
    idField = jqc(idField);
    // Inizializza il campo
    emailoField = $(idField);

    // Blocca l'interfaccia
    emailoField.optLocked = false;

    if (emailoField.html() === "") {
        emailoField.css("color", "#cacaca").html("Scrivi un messaggio...");
    }
    emailoField.on("focus", function() {
        if (this.value === "Scrivi un messaggio...") {
            this.value = "";
            this.style.color = "#666666";
        }
    });

    emailoField.on("blur", function() {
        if (this.value === "") {
            this.value = "Scrivi un messaggio...";
            this.style.color = "#cacaca";
        }
    });

    emailoField.on("keydown", function() {
        // La funzione di suggerimento si attiva solo se il valore del campo "somiglia" ad una mail
        var valoreCampo = this.value;
        // ## Blocca l'interfaccia di invio/ricezione finch� non viene ricevuto un pacchetto dati valido ed eventuali trasferimenti sono in corso
        // ## In questo caso lo fa solo 1 volta, come prova
        // Concretizza il fumetto, se necessario
        if (!emailoField.optLocked) {
            emailoGet();
        }

    });
}
/* Fine email optimizer */


/* form naming */
var inputXwm = '- Scrivi qui il nome della linea -',
    inputXwmArr = {};

function initInputX(id, wm) {
    var el = $(jqc(id)),
        input = el.find('input:first');
    setWatermark(el, wm);
    if ($.trim(input.val()) === '') { svuotaInputX(input.closest('.inputcont')); } else { resettaInputX(input.closest('.inputcont')); }
    input.focus(function(e) { attivaInputX($(e.target)); }).blur(testInputX);
    el.find('a:first').click(function(e) { disattivaInputX($(e.target)); });
}

function attivaInputX(el) {
    el = $(jqc(el));
    if (el.val() === getWatermark(el)) { el.val(''); }
    el.closest('.inputcont').removeClass('Inactive').addClass('Active');
}

function svuotaInputX(inputcont) {
    inputcont.removeClass('Inactive').addClass('Active').find('input:first').val('');
}

function disattivaInputX(el) {
    resettaInputX($(jqc(el)).closest('.descLVinput').find('.inputcont'));
}

function resettaInputX(inputcont) {
    inputcont.removeClass('Active').addClass('Inactive').find('input:first').val(getWatermark(inputcont));
}

function testInputX(e) {
    var el = $(e.target);
    if ($(this).val() === '') { disattivaInputX(el); }
}

function getInputX(el) {
    var elVal = $(jqc(el)).find('input:first').val();
    return (elVal === getWatermark(el)) ? '' : elVal;
}

function setInputX(el, elVal) {
    el = $(jqc(el)).find('input:first');
    if (elVal === '') { disattivaInputX(el); } else { attivaInputX(el.val(elVal)); }
}

function getWatermark(el) {
    return inputXwmArr[el.closest('.descLVinput').attr('id')];
}

function setWatermark(el, wm) {
    inputXwmArr[el.closest('.descLVinput').attr('id')] = (typeof wm !== 'undefined') ? wm : inputXwm;
}

/* front page investimenti */
// tab fp investiemnti
function showBox3TabInv(tabid) {
    for (var i = 1; i <= 5; i++) {
        if ($($('inv' + i))) {
            $('#inv' + i).css('display', 'none');
            // $('#box3tab' + i).className = '';
        }
    }

    $('#inv' + tabid).css('display', 'block')
    // $('#box3tab' + tabid).className = 'active';
}

// slider immagini fp investiemnti

function insertIMg() {

    ImmaginiRotanti = [];
    ImmaginiRotanti[0] = '<span><img src="/wscmn/img/ret/logo_sliderfp1.gif" alt ="anima" /></span>';
    ImmaginiRotanti[1] = '<span><img src="/wscmn/img/ret/logo_sliderfp2.gif" alt ="anima" /></span>';
    ImmaginiRotanti[2] = '<span><img src="/wscmn/img/ret/logo_sliderfp3.gif" alt ="anima" /></span>';
    ImmaginiRotanti[3] = '<span><img src="/wscmn/img/ret/logo_sliderfp4.gif" alt ="anima" /></span>';
    ImmaginiRotanti[4] = '<span><img src="/wscmn/img/ret/logo_sliderfp5.gif" alt ="anima" /></span>';
    ImmaginiRotanti[5] = '<span><img src="/wscmn/img/ret/logo_sliderfp6.gif" alt ="anima" /></span>';
    ImmaginiRotanti[6] = '<span><img src="/wscmn/img/ret/logo_sliderfp7.gif" alt ="anima" /></span>';
    ImmaginiRotanti[7] = '<span><img src="/wscmn/img/ret/logo_sliderfp8.gif" alt ="anima" /></span>';
    ImmaginiRotanti[8] = '<span><img src="/wscmn/img/ret/logo_sliderfp9.gif" alt ="anima" /></span>';
    ImmaginiRotanti[9] = '<span><img src="/wscmn/img/ret/logo_sliderfp10.gif" alt ="anima" /></span>';
    ImmaginiRotanti[10] = '<span><img src="/wscmn/img/ret/logo_sliderfp11.gif" alt ="anima" /></span>';
    ImmaginiRotanti[11] = '<span><img src="/wscmn/img/ret/logo_sliderfp12.gif" alt ="anima" /></span>';
    ImmaginiRotanti[12] = '<span><img src="/wscmn/img/ret/logo_sliderfp13.gif" alt ="anima" /></span>';
    ImmaginiRotanti[13] = '<span><img src="/wscmn/img/ret/logo_sliderfp14.gif" alt ="anima" /></span>';
    ImmaginiRotanti[14] = '<span><img src="/wscmn/img/ret/logo_sliderfp15.gif" alt ="allianz" /></span>';
    ImmaginiRotanti[15] = '<span><img src="/wscmn/img/ret/logo_sliderfp16.gif" alt ="pimco" /></span>';
    ImmaginiRotanti[16] = '<span><img src="/wscmn/img/ret/logo_sliderfp17.gif" alt ="fidelity" /></span>';
    ImmaginiRotanti[17] = '<span><img src="/wscmn/img/ret/logo_sliderfp18.gif" alt ="morgan stanley" /></span>';
    ImmaginiRotanti[18] = '<span><img src="/wscmn/img/ret/logo_sliderfp19.gif" alt ="invesco" /></span>';
    ImmaginiRotanti[19] = '<span><img src="/wscmn/img/ret/logo_sliderfp20.gif" alt ="Janus Capital Group" /></span>';
    ImmaginiRotanti[20] = '<span><img src="/wscmn/img/ret/logo_sliderfp21.gif" alt ="Legg Mason" /></span>';
    ImmaginiRotanti[21] = '<span><img src="/wscmn/img/ret/logo_sliderfp22.gif" alt ="Lombard Odierd" /></span>';
    ImmaginiRotanti[22] = '<span><img src="/wscmn/img/ret/logo_sliderfp23.gif" alt ="HSBC" /></span>';
    ImmaginiRotanti[23] = '<span><img src="/wscmn/img/ret/logo_sliderfp24.gif" alt ="Amundi" /></span>';
    ImmaginiRotanti[24] = '<span><img src="/wscmn/img/ret/logo_sliderfp25.gif" alt ="NN Investment partners" /></span>';
    ImmaginiRotanti[25] = '<span><img src="/wscmn/img/ret/logo_sliderfp26.gif" alt ="Raiffeisen capital management" /></span>';
    ImmaginiRotanti[26] = '<span><img src="/wscmn/img/ret/logo_sliderfp27.gif" alt ="Algebris Investments" /></span>';
    $('#contentSlider').html(ImmaginiRotanti.join(''));

}

function initSliderfp() {
    insertIMg();
    variazione = 0;
    alt = $("#slider").width();
    foglie = $("#contentSlider span");

    limite = 0;
    for (var j = 0; j < foglie.length; j++) {
        limite += (foglie.width());
    }
    limite += alt;

    $("#contentSlider").css("width", limite + 'px');
    $("#contentscroller").css("margin-left", 0);
    setTimeout('setInterval(\'initializeScroll()\', 1000/60)', 2000);
}

function initializeScroll() {
    variazione--;
    $("#contentscroller").css("left", variazione + 'px');
    if (variazione === (-(limite - alt))) { variazione = alt }

}




function openPopGuida(urlGuida) {
    // Calcola la "y" visibile
    var spostaDelta = 25;
    popX = (window.screenX) ? window.screenX : window.screenLeft;
    if (!parseInt(popX)) {
        popX = 0;
    }
    popX = popX + spostaDelta;
    popY = (window.screenY) ? window.screenY : window.screenTop;
    if (!parseInt(popY)) {
        popY = 0;
    }
    if (navigator.appVersion.indexOf("MSIE") < 0) { popY = popY + 25 };
    window.open(urlGuida, "", "width=420,height=430,top=" + popY + ",left=" + popX + ",status=no,toolbar=no,menubar=no,resizable=yes,scrollbars=1");
}

// Funzione cambia tab popup guida
function guidaArg(aElement) {
    var guida = $('#guidaBook');
    var aElements = guida.find(".leftSel a");
    var contents = guida.find(".rightBox");
    contents.hide();
    aElements.removeClass("selected");

    for (x = 0; x < aElements.length; x++) {
        if (aElement === aElements[x]) {
            $(contents[x]).show();
            $(aElements[x]).addClass("selected");
        }
    }
}

// Funzione grafici interattivi checkbox colorati e elimina
function selectScoreCheck(e) {
    var el = e.target;
    if ($(el).hasClass('on')) { $(el).removeClass('on').addClass('off'); } else { $(el).removeClass('off').addClass('on') }


}

function hideScoreValues(e) {
    var selezionati = $('.alleft a.on');
    if (selezionati) selezionati.each(function(index, item) { $(item).closest('div').hide(); })
}

// nuova toolbar
addEvent(window, "load", toolBarInit);

function toolBarInit() {

    // Eventuale inserimento del bottone chat TEMPORANEO, se vivochaKey non e' definito
    if (!window.vivochaKey && !window.vivocha2Key) {
        var chatSpace = $("#fixedtools #c2mToolbar");
        if (chatSpace) {
            chatSpace.append($("<a/>").addClass("tooltcons toolchat").attr("href", "javascript:;").click(function() { openChat() }));
        }
    }

    var fixedtools = $("#fixedtools");
    var tb = $("#toolconsole");
    tbtt = tb.find(".contTool")

    if (fixedtools.length && tbtt.length) {

        // Inizializza i bottoni della toolbox
        tbtttext = tbtt.find(".consoletooltip span");
        tbbuttons = tb.find("a.tooltcons");
        tbtooltipclass = "";
        tbtthoverfunction = function(e) {
            var mouseTop = e.pageY;
            tbtt.css("top", (mouseTop - tb.offset().top + tbtt.height()) + 'px');
            var elem = $(this);
            if (!elem.hasClass("notooltip")) tbtt.show();

            tbtooltipclass = elem.attr("class");
            ttind = getNextHighestZindex();
            if (parseFloat(tbtt.css("z-index")) < (ttind - 1)) tbtt.css("z-index", ttind);

            // var agenText = ((getBank()=="Webank") ? "Consulenza finanziaria" : "Appuntamento") + " in agenzia";

            // Etichetta che cambia a seconda della classe
            switch (tbtooltipclass.split(" ")[1]) {

                case "toolassistente":
                case "toolassistente2":
                case "toolassistentexx":
                    tbtttext.html("Assistente virtuale");
                    break;

                case "toolhelp":
                    tbtttext.html("Help Center");
                    break;

                case "toolhelpwb":
                    tbtttext.html("Servizio Clienti");
                    break;

                case "toolchat":
                    tbtttext.html("Chat");
                    break;

                case "toolrecallwb":
                    tbtttext.html("Webank ti richiama");
                    break;

                case "toolrecall":
                    tbtttext.html("Prenota un contatto");
                    break;

                case "toolmail":
                    tbtttext.html("Scrivici");
                    break;

                case "toolmailpec":
                    tbtttext.html("Email");
                    break;

                case "toolsafety":
                    tbtttext.html("Sicurezza");
                    break;

                case "toolagenzia":
                    tbtttext.html("Appuntamento in agenzia");
                    break;

                default:
                    tbtttext.html("");

            }

            // Riposiziona orizzontalmente l'elemento per centrarlo se occorre, agendo sul margine esterno destro
            var tbtte = tbtt.find(".consoletooltip");
            var tbw = 57;
            var tbttew = tbtte.width();
            if (tbttew < tbw) { tbtte.css("margin-right", Math.round((tbw - tbttew) / 2) + "px"); } else { tbtte.css("margin-right", 0); }

        }

        // Mouse out function
        tbttoutfunction = function() { tbtt.hide() };

        // Attribuzione funzioni sui bottoni
        tbbuttons.on("mouseover", tbtthoverfunction);
        tbbuttons.on("mousemove", tbtthoverfunction);
        tbbuttons.on("mouseout", tbttoutfunction);

        // Hover per chat "reitek"
        vivoConte = $("#c2mToolbar");
        // Controlla la presenza del bottone chat
        vivoContInit = false;
        if (vivoConte.length) {
            eovc = vivoConte.on("mouseover", function() {
                if (!vivoContInit) {
                    vivoBut = vivoConte.find(".tooltcons.toolchat");
                    if (vivoBut.length) {
                        vivoBut.on("mouseover", tbtthoverfunction);
                        vivoBut.on("mousemove", tbtthoverfunction);
                        vivoBut.on("mouseout", tbttoutfunction);
                        vivoContInit = true;
                    }
                }
            })
        };
    }
}

/* Revisione overlay dettaglio tabella FUNZIONA SOLO CON LE TABELLE */
function showDettTable(clickEl, idOverLay, idWrapper) {
    idOverLay = jqc(idOverLay);
    idWrapper = jqc(idWrapper);
    var ol = $(idOverLay);
    var wrap = $(idWrapper);
    var ce = $(clickEl)
    // Riposiziona l'overlay (se necessario) come primo figlio del wrapper
    if (wrap.children().eq(0) !== ol) { wrap.prepend(ol); }
    ol.css('visibility', "hidden");
    ol.show();
    // Margina l'elemento a sinistra se necessario
    ol.css('marginLeft', Math.round((wrap.width() - ol.width()) / 2) + "px");
    // Individua la posizione dell'elemento cliccato rispetto al wrapper
    var ofTop = ((ce.offset().top - wrap.offset().top) + ce.height()) - ol.height();
    ol.css({
        visibility: "visible",
        marginTop: ((ofTop > 0) ? ofTop + "px" : 0)
    });
    ol.css('marginTop', ((ofTop > 0) ? ofTop + "px" : 0));
    ol.css('visibility', "visible");
}

/* Switch attivi tabella su campo in TD */
function setActiveTr(obj) {
    obj = jqc(obj);
    // Risale al TR di competenza
    var trx = $(obj).parent().parent();
    var trs = trx.parent().find("tr");
    for (x = 0; x < trs.length; x++) {
        trs[x].className = trs[x].className.replace("evident", "")
    }
    trx[0].className = (trx[0].className.indexOf("evident") < 0) ? trx[0].className + " evident" : trx[0].className;
}

// Rende gli overlay sensibili al click
function makeFocusable(overlay) {
    overlay = jqc(overlay);
    // Prototipizza l'oggetto in modo che si possa passare anche solo l'ID
    var overlay = $(overlay);
    // L'evento viene istanziato come propriet� dell'oggetto, solo se necessario
    if (!overlay.mF) {
        overlay.mF = overlay.on("click", function() {
            nzi = getNextHighestZindex();
            if (this.style.zIndex < (nzi - 1))
                this.style.zIndex = nzi;
        });
    }
}

function viewBannerRetention(dataA, dataS) {
    var arrA = dataA.split("/"),
        arrS = dataS.split("/"),
        dataObjA = new Date(arrA[2], arrA[1] - 1, arrA[0]),
        dataObjS = new Date(arrS[2], arrS[1] - 1, arrS[0]).addDays(-15),
        todayObj = new Date();

    return (dataObjA <= todayObj && todayObj <= dataObjS);
}

/* FUNZIONE PER CONVERSIONE STRINGA IN XML DOCUMENT */
function stringToXML(stringa) {
    // Ripulisce la stringa
    stringa = unescape(stringa);
    if (window.ActiveXObject) {
        // Ie
        var Xdoc = new ActiveXObject("Microsoft.XMLDOM");
        Xdoc.async = false;
        Xdoc.loadXML(stringa);
    }
    // code for Mozilla, Firefox, Opera, etc.
    else {
        var DomP = new DOMParser();
        var Xdoc = DomP.parseFromString(stringa, "text/xml");
    }
    return Xdoc.documentElement;
}

/* FUNZIONE PER ATTRIBUIRE CLASSE ALL'HOVER E APRIRE CON EFFETTO SLIDE UN CONTENUTO NASCOSTO */
function boxEspandible() {
    $('#boxespandibile .boxespandibile').hover(function() { $(this).toggleClass("overbox"); })
    $("#boxespandibile .boxespandibile").toggle(function() {
            $("#boxespandibile .contenutiboxdet").slideDown();
        },
        function() {
            $("#boxespandibile .contenutiboxdet").slideUp();
        });
}

/* FIX LINK PER HOVER SU TOUCHSCREEN */
// Fix elementi in base al wrapper
if (isTouch) {
    $(window).on("load", function() {
        // Css blocchi da
        var allPageBlocks = $("#page1 div[onmouseover],#page1 div[onmouseout]");
        allPageBlocks.attr("onmouseover", "");
        allPageBlocks.attr("onmouseout", "");
        allPageBlocks.attr("onmouseenter", "");
        allPageBlocks.attr("onmouseleave", "");
    });
}

/* Sistema alcuni caratteri HTML */
function escapeHTML(str) {
    return str.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
}

function unescapeHTML(str) {
    return str.stripTags().replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&amp;/g, '&');
}

/****EVENTI ****/
/*transizione front page eventi */
/* Funzione acquisizione "root" XML */
function getXMLRoot(xmlPath) {
    if (window.XMLHttpRequest) {
        // Browser "nuovi" che supportano XHTTPRequest
        var xmlhttp = new XMLHttpRequest();
    } else {
        // Browser vecchi
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET", xmlPath, false);
    xmlhttp.send();
    xmlDocument = xmlhttp.responseXML;
    //Indice del primo nodo, sui vari Browser
    if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
        firstIndex = 1;
    } else {
        firstIndex = 0;
    }
    return xmlDocument.childNodes[firstIndex];
}
/* Fine acquisizione di una "root" XML*/

function slideEventiSwitch(cindex) {
    clearTimeout(slideEventiEvent);
    $(slideEventiDiv[slideEventiIndex]).animate({ 'margin-left': '-700px', 'opacity': '0' }, 300);
    $(slideEventiDiv[slideEventiIndex]).next().animate({ 'margin-left': '0px', 'opacity': '0' }, 300); //riporta a margine zero
    $(slideEventiDiv[slideEventiIndex]).prev().animate({ 'margin-left': '0px', 'opacity': '0' }, 300); //riporta a margine zero
    if (cindex >= 0) {
        slideEventiIndex = cindex;
    } else {
        slideEventiIndex = slideEventiIndex + 1;
        if (slideEventiIndex >= slideEventiA.length) slideEventiIndex = 0;
    }

    $(slideEventiDiv[slideEventiIndex]).fadeIn(100);

    $(slideEventiDiv[slideEventiIndex]).animate({ 'opacity': '100' })


    slideEventiEvent = setTimeout(function() { slideEventiSwitch() }, 6000);
}


function slideEventiInit() {
    //Acquisizione delle cellette via XML
    var xmlslideEventi = getXMLRoot(xmlPath);
    var slideEventiLink = xmlslideEventi.getElementsByTagName("link");
    var slideEventiId = xmlslideEventi.getElementsByTagName("eventid");
    var slideEventiImage = xmlslideEventi.getElementsByTagName("image");
    var slideEventicont_HTML = "";
    displayslideEventi = "";
    for (x = 0; x < slideEventiLink.length; x++) {
        slideEventicont_HTML = slideEventicont_HTML + '<div class="slideCont"' + displayslideEventi + '>' + '<img src="' + slideEventiImage[x].firstChild.nodeValue + '"/>' + '<a class= "greenbutton" href="' + slideEventiLink[x].firstChild.nodeValue + '&amp;openedEvent=' + slideEventiId[x].firstChild.nodeValue + '" title="Vedi i dettagli dell\'evento">' + '<span>dettagli</span>' + '</a>' + '</div>';
        displayslideEventi = ' style=\"display:none;margin-left:0\"';
    }
    $('#intslideEventi').css('overflow', 'hidden');
    $('#intslideEventi').html(function() { return slideEventicont_HTML });
    slideEventiDiv = $('#intslideEventi div');
    slideEventiA = $('#intslideEventi a');
    slideEventiIndex = 0;
    slideEventiEvent = setTimeout(function() { slideEventiSwitch() }, 6000);
}

function slideEventiInt() {
    var slideEventi = $('#intslideEventi');
    xmlPath = "/xml/ret/slideEventi.xml";
    addEvent(window, "load", slideEventiInit);

}

/* Area eventi cicli */
function initEventList(openedEvent, wrapper) {

    var eventLists = (wrapper) ? $(wrapper).find(".eventList") : $('.eventList');
    var totalRows = eventLists.find('.eventRow'),
        eventDets = eventLists.find('.eventDetail'),
        eventHovers = eventLists.find('.eventHover'),
        eventWraps = eventLists.find('.eventWrap');
    // Una volta cliccato un "iscriviti" blocca le animazioni
    eClickNav = false;


    eHover = function() {
        var eR = $(this).parent();
        var eH = $(eR).find(".eventHover").get(0);
        var eW = $(eR).find(".eventWrap").get(0);
        $(eW).attr('class', 'eventWrap hover');
        $(eH).fadeIn(300);
    }

    eOut = function() {
        var eR = $(this).parent();
        var eH = $(eR).find(".eventHover").get(0);
        $(eH).fadeOut(100);
        var eW = $(eR).find(".eventWrap").get(0);
        $(eW).attr('class', 'eventWrap');
    }

    eClick = function(idToOpen) {
        if (!eClickNav) {
            rowToOpen = $(idToOpen);

            var eventDet = $(rowToOpen).find('.eventDetail').get(0);
            var eventTitle = $(rowToOpen).find(".eventRowLeft a").get(0);
            $("#maincontent").css('height', 'auto');
            if (!$(rowToOpen).hasClass('opened')) {
                //Lo apre
                totalRows.removeClass('opened'); //resetto le classi su alte righe
                $(rowToOpen).addClass('opened');
                // Mette il Title al posto dell'InnerHTML
                eventDets.hide();
                setTimeout(function() { eventWraps.removeClass('hover');
                    eventHovers.hide() }, 300);
                //chiudo tutte le altre schede
                $(eventDet).slideDown(300);

            } else {
                //Lo chiude
                (rowToOpen).removeClass('opened');
                $(eventDet).hide();
            }
            var eventT = $(eventTitle).html();
            $(eventTitle).html($(eventTitle).attr('title'));
            $(eventTitle).attr('title', eventT);
        }
    }

    eLockClick = function() {
        eClickNav = true;
    }


    startEventList = function() {

        eRows = $(".tabInnerLargeWrap div.eventWrap, div.singleList div.eventWrap");


        $(eRows).each(function(index) {
            $(this).bind('mouseenter', eHover);
            $(this).bind('mouseleave', eOut);
            $(this).bind('click', function() { eClick($(this).parent()) });
            //Pulsante insert associato
            var eRowsIscriviti = $(this).find(".rightButt").get(0);
            if (eRowsIscriviti) $(eRowsIscriviti).bind('click', eLockClick);
        })
    }
    startEventList();
    //addEvent(window,"load",startEventList);



    if (openedEvent) {

        //Simula il click, ovvero apre l'accordion
        eClick(openedEvent);
        //Si sposta sull'evento
        var offsetopenedEvent = $('#' + openedEvent).offset()
        $('html, body').animate({ scrollTop: offsetopenedEvent.top }, 'slow');
    }

}


/****FINE EVENTI ****/

/* Funzione usata per creare un'icona operativa partendo da dati JSON
	v: non usato, messo solo per uniformit� con altre funzioni di formattazione
	obj: oggetto chiave-valore che deve contenere la chiave "terna" (es. MI.EQCON.2552) 
*/
function format_icona(v, obj) {
    "use strict";
    var isPCD = ((typeof(profiloConsultare) === 'undefined') || (profiloConsultare === 'N')),
        hasDep = ((typeof(hasValidDeposits) === 'undefined') || (hasValidDeposits === 'Y')),
        htmlIcona = '';
    if (isPCD) {
        var ternaArr = (typeof obj['terna'] === 'undefined') ? '' : obj['terna'].split('.'),
            tipoMercato = (typeof obj['tipoMercato'] === 'undefined') ? 'B' : obj['tipoMercato'];
        if (ternaArr[1].indexOf('TAH') > -1) {
            tipoMercato = 'XXX';
        }

        var linkBook;
        if (hasDep) {
            linkBook = "cstMultiplePopup(\\\'/webankpri/FMP/ricercaBookNw.do?borsa=" + ternaArr[0] + "&amp;mercato=" + ternaArr[1] + "&amp;tipo_mercato=XXX&amp;stockcode=" + ternaArr[2] + "\\\', \\\'\\\', 425, 255)";
        } else {
            linkBook = "cstPopup(\\\'/webankpri/wbOnetoone/cstPopup/do/wbOnetoone/schedaProdotto.do?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_book_nodep_wt&cf=" + Math.random() + "\\\', \\\'Book senza deposito titolo\\\')";
        }

        htmlIcona = "<div class=\"linkTooltip\">" +
            "<a title=\"Scegli quale operazione effettuare\" id=\"link" + obj['terna'].replace(/\./g, '') + "\" class=\"linkVai\"" +
            " onclick=\"multiLinks('iconaOperativaMenu1.html', 'left', this," +
            "['titolo=" + ternaArr[2] + "&amp;mercato=" + ternaArr[0] + "|" + ternaArr[1] + "|" + tipoMercato + "'," +
            "'*#*ND'," +
            "'javascript:" + linkBook + ";'," +
            "'titolo=" + ternaArr[2] + "&amp;mercato=" + ternaArr[0] + "|" + ternaArr[1] + "|" + tipoMercato + "'," +
            "'*#*ND'," +
            "'*#*ND'," +
            "'tab=5&amp;stock_code=" + ternaArr[2] + "&amp;mercato=" + ternaArr[1] + "&amp;borsa=" + ternaArr[0] + "&amp;skip=ric'," +
            "'*#*ND'," +
            "'*#*ND' ] )\"" +
            " href=\"javascript:;\">" +
            "</a>" +
            "</div>";
    } else {
        htmlIcona = '<img src="/wscmn/img/ret/ico1gr_tradingtitoli_off.gif" />';
    }
    return htmlIcona;
}

function stepRichiesta(el, rimuoviel, idToHide) {
    el = $(el);
    var contbutton = el.closest('.steprichiesta');
    var contbuttonNext = $(contbutton).next('.steprichiesta');
    var contbuttonPrev = $(contbutton).prev('.steprichiesta');
    var icospunta = $(contbutton).find('.steprichiestatit span');
    var imgOn = $(contbuttonNext).find('.steprichiestatit img');

    //funzione che chiude i tooltip quando lo step perde il focus
    var tooltipOpened = contbutton.find('.uniqTooltip');
    if (tooltipOpened.length) {
        tooltipOpened.closest('span').attr('class', 'closed');
        tooltipOpened.remove();
    }


    //aggiunge classe elemento successivo
    if (el.hasClass('nextstep')) {
        if (contbuttonNext.length) {

            $(contbuttonNext).addClass('on').removeClass('off');
            //scrolla fino all'elemento
            setElementonView(contbuttonNext);
            //espande il contenuto successivo aggiungendo una fix per IE7/necessario il position
            $(contbuttonNext).find('.steprichiestacont div').eq(0).slideDown(300, function() {
                $(this).css("position", "static");

            });



            //cambia immagine elemento successivo
            if (imgOn.length) {
                var imgOnSrc = $(imgOn).attr('src').replace('off', 'on');
                $(contbuttonNext).find('.steprichiestatit img').eq(0).attr('src', imgOnSrc);
            }
        }
        //visualizza icona spunta
        $(icospunta).show();
        if (rimuoviel) {
            $(contbuttonPrev).find('.btnc,.backstep').remove();
            el.closest('.btnc').remove();
        }
        //se c'� la classe stepToogle
        el.closest('.steprichiesta.on').find('.stepToggle').hide();
    } else if (el.hasClass('backstep')) {
        $(contbutton).addClass('on').removeClass('off');
        $(contbuttonNext).removeClass('on').addClass('off');
        setElementonView(contbutton);
        $(contbuttonNext).find('.steprichiestacont div').eq(0).slideUp(300, function() {
            $(this).css("position", "relative");
        });
        if (imgOn.length) {
            var imgOffSrc = $(imgOn).attr('src').replace('on', 'off');
            $(contbuttonNext).find('.steprichiestatit img').eq(0).attr('src', imgOffSrc);
        }
        $(icospunta).hide();
    }

    if (idToHide) { idToHide = $(idToHide);
        idToHide.hide() }


    if (!(el.closest('.steprichiesta').find('.steprichiestatit').hasClass('initToogle'))) {
        toggleStepRichiesta(el);
    }

}

function toggleStepRichiesta(el) {
    //el.addClass('initToogle');
    el.closest('.steprichiesta').find('.steprichiestatit').addClass('initToogle');
    var btnToogle = el.closest('.steprichiesta.on').find('.stepToggle');
    if (btnToogle.length > 0) {
        btnToogle.closest('.steprichiesta').find('.steprichiestatit').bind('mouseover', function(event) {
            $(this).closest('.steprichiesta').css('cursor', 'pointer');
        })
        btnToogle.closest('.steprichiesta').find('.steprichiestatit').bind('click', function(event) {
            $(this).closest('.steprichiesta').find('.stepToggle').eq(0).toggle();
            if ($(this).find('.modifica:visible').length > 0) {
                $(this).find('.modifica:visible').closest('span').hide();
                stepRichiesta($(this).find('.modifica'));
                var checkToDis = $(this).closest('.steprichiesta').next('.steprichiesta').find('input[type="checkbox"]'),
                    closeToDis = $(this).closest('.steprichiesta').next('.steprichiesta').find('.closePdfEmbedd');
                checkToDis.attr('checked', false).attr('disabled', true);
                checkToDis.prev('.hovfin').show();
                closeToDis.trigger('click');
            }
        })
    }

}

// fix per il placeholder dove non � supportato
IEputPh = function(item) {
    var text = item.attr('placeholder');
    if (item.val() === '') {
        item.val(text);

        if (item.hasClass('form-control')) {
            item.css({ 'color': '#a7a7a7', 'font-size': '14px' });
        } else {
            item.css({ 'color': '#a7a7a7', 'font-size': '10px' });
        }
    } else {
        if (item.val() != text) {
            item.css({ 'color': '', 'font-size': '' });
        }

    }
    item.bind('focus.placeholder', function(event) {
        if (item.val() === text)
            item.val('');
        item.css({ 'color': '', 'font-size': '' });
    });
    item.bind('blur.placeholder', function(event) {
        if (item.val() === '') {
            item.val(text);
            if (item.hasClass('form-control')) {
                item.css({ 'color': '#a7a7a7', 'font-size': '14px' });
            } else {
                item.css({ 'color': '#a7a7a7', 'font-size': '10px' });
            }
        }
    });
}

IEfixPh = function() {
    var version = parseInt($.browser.version, 10);
    if (($.browser.msie && version < 10) || ($.browser.mozilla && version <= 4)) {
        inputPH = $("input[placeholder]:not(input[type=password]), textarea[placeholder]");
        inputPH.each(function(i) {
            var item = $(this);
            IEputPh(item);
        });
    }
}
addEvent(window, "load", IEfixPh);


//funzione di gestione  abilitazione dopo lettura documenti
function ableinput(el, id, at, nDocrichiesti) {
    if (el !== '') {
        var inputToable = $(el).closest('div.disabledField,fieldset,label').find('input'); //abilita tutti i campi nello stesso fieldset
        //console.log(inputToable);
        if ($(inputToable).prop("disabled", true)) {
            $(inputToable).removeAttr('disabled');
            $(inputToable).prev('.hovfin').hide();
        }
    }
    if (id && !at) //abilita un particolare ID
    {
        if ($('#' + id).hasClass('printDoc')) { $('#' + id).toggleClass('disabled') }
        $('#' + id).removeAttr('disabled');
        $('#' + id).prev('.hovfin').hide();
    }
    if (at) //abilita solo dopo aver aperto un certo numero di documenti passati come parametro
    {
        $(at).addClass('docOpened');
        var docAperti = $(at).closest('span').find('.docOpened');
        if (docAperti.length === nDocrichiesti) {
            $('#' + id).removeAttr('disabled');
            $('#' + id).prev('.hovfin').hide();
        }
    }
    if ($(el).next().attr('class', 'visitedImg')) { $('.visitedImg').eq(0).show() }
}

function openPdfEmbed() {
    if ($('.pdfEmbedded').length > 0) {
        $('.openPdfEmbedd').click(function() {
            $(this).closest('.pdfEmbedded').find('.pdfToOpen').slideDown();
            $(this).closest('.pdfEmbedded').find('.closePdfEmbedd').show();
        });
        $('.closePdfEmbedd').click(function() {
            $(this).closest('.pdfEmbedded').find('.pdfToOpen').slideUp();
            $(this).hide();
        })
    }
}
//funzione che disabilita tutti i campi del form passato come id
function disableForm(el, id) {
    var forms = $('#' + id).find('form');
    var linkTodisable = forms.find('.linkTodisable');
    $.each(forms, function(index) {
        if ($(el).hasClass('nextstep')) {
            $(this).find('input,select,textarea').prop("disabled", true);
            linkTodisable.addClass('disabled');
        } else if ($(el).hasClass('backstep')) {
            $(this).find('input,select,textarea').removeAttr('disabled');
            $(this).find('.hovfin').hide();
            linkTodisable.removeClass('disabled');
        }
    });


}
//funzione scrolla con effetto sull'elemento passato
function setElementonView(elToancor) {
    var offsetEl = elToancor.offset();
    if ($.browser.safari) { bodyelem = $("body") } else { bodyelem = $("html") }
    bodyelem.animate({ scrollTop: offsetEl.top + 'px' }, 'slow');
}

/* Ritorna il timestamp */
function getTs() { return srvTs; }

// Filtro input per numeri con due decimali dopo la virgola
function cleanImport(e) {
    var el = $(e.target),
        val = el.val(),
        key = e.which,
        isOK = true,
        varArr;
    if (!(/^\d*(,\d?)?$/).test(val)) {
        val = val.replace('.', ','); //sostituisco il punto con la virgola
        if (!(/^\d*(,\d?\d?)?$/).test(val)) {
            if ((/^\d*,\d+$/).test(val)) {
                varArr = val.split(',');
                el.val(varArr[0] + ',' + varArr[1].substr(0, 2));
            } else {
                el.val('');
            }
        } else {
            el.val(val);
        }
    }

    if (($.inArray(key, [0, 8, 44]) === -1 && ((key < 48 || key > 57) && (key < 96 || key > 105)) && key != 46) || //controllo che non sia un punto
        (key === 44 && !(/^\d+$/).test(val)) ||
        ((key > 47 && key < 58) && !(/^\d*(,\d?)?$/).test(val))) {
        e.preventDefault();
        isOK = false;
    }
    return isOK;
}

// Filtro input per numeri interi
function cleanImportInt(e) {
    var el = $(e.target),
        val = el.val(),
        key = e.which,
        isOK = true;
    if (!(/^\d*$/).test(val)) {
        val = val.replace('.', '').replace(',', '');
        if (!(/^\d*$/).test(val)) {
            el.val('');
        } else {
            el.val(val);
        }
    }
    if (($.inArray(key, [0, 8, 44]) === -1 && ((key < 48 || key > 57) && (key < 96 || key > 105))) ||
        (key === 44 && !(/^\d+$/).test(val)) ||
        ((key > 47 && key < 58) && !(/^\d*$/).test(val))) {
        e.preventDefault();
        isOK = false;
    }
    return isOK;
}

/* Contatore in textarea */
initCounterTextarea = function(idCounter, idTextArea, nCarMax) {
    var nCarMaxWrapper = $('#' + idCounter);
    nCarMaxWrapper.html(nCarMax);
    $('#' + idTextArea).bind('keyup', function() {
        nCarMaxWrapper.html(nCarMax - $(this).val().length) //aggiorno il counter togliendo i caratteri inseriti
        if ($(this).val().length > nCarMax) //controllo di non superare il limite max di caratteri
        {
            $(this).val($(this).val().substr(0, nCarMax));
            nCarMaxWrapper.html('0');
        }

    });
}

function animateBanFin() {
    $('.fpFinMut').bind('mouseenter', function() {
        var deltaLeft = (parseInt($('.fpFin').css('width'))) / 2 + 167 + 'px';
        $('.fpFinPrest,.fpFin .txtAlCenter.right').stop().animate({
            left: deltaLeft
        }, 200);
    })

    $('.fpFinPrest').bind('mouseenter', function() {
        var deltaLeft = (parseInt($('.fpFin').css('width'))) / 2 - 167 + 'px';
        $('.fpFinPrest,.fpFin .txtAlCenter.right').stop().animate({
            left: deltaLeft
        }, 200);
    })

    $('.fpFin').bind('mouseleave', function() {
        $('.fpFinPrest,.fpFin .txtAlCenter.right').stop().animate({
            left: '321px'
        }, 200);
    })

    if (!($.browser.msie && parseInt($.browser.version, 10) < 9)) {

        $('.fpFin .greenbutton').bind('mouseenter', function() {
            $(this).animate({
                opacity: 0.7,
                duration: 200,
                easing: "easeOutBounce"
            })
        })
        $('.fpFin .greenbutton').bind('mouseleave', function() {
            $(this).animate({
                opacity: 1,
                duration: 200,
                easing: "easeOutBounce"
            })
        })
    }
}

// Mostra html caricaro via ajax
function fpFinAnimationShow() {
    // Prepara il contenitore, se necessario
    if (!$("#fpFinAnimationWrapper").length) {
        fpFinAnimationWrap = $("<div>").attr({ "id": "fpFinAnimationWrapper" });
        $("#ctnboxsx").append(fpFinAnimationWrap);
    } else {
        //Lo svuota e basta
        $("#fpFinAnimationWrapper").empty();
    }
    // Mostra il contenitore, inizializzandolo come "in caricamento"
    $("#fpFinAnimationWrapper").append($("<img>").attr({ "src": "/wscmn/img/ico2inf_loadingbig.gif" }).css({ "padding-left": "315px", "padding-top": "60px" })).show();
    // Carica i contenuti, via AJAX
    $.ajax({
        url: '/html/priv_fp_finanziamenti_visual.html' + "?rand=" + Math.random(),
        dataType: "html",
        success: function(data) {
            $("#fpFinAnimationWrapper").html(data);
            //costruisco i link dei bottoni in maniera dinamica
            $('#scopriFinanziamento').attr('href', cgi_script + "/wbOnetoone/3l/action/wbOnetoone/schedaPrivata.action?KEYLAND=Catalogo_acquisto&OBSCNT=TAB&tabId=nav_priv_wbx_finanziamenti&OBSKEY=nav_priv_wbx_mutuo_webank&OBSKEY3=nav_priv_wbx_cat_acquisto");
            $('#faiPreventivoFinanziamento').attr('href', cgi_script + "/wbOnetoone/2l/do/wbOnetoone/schedaProdotto.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_finanziamenti&OBSKEY=nav_priv_wbx_fai_il_preventivo");
            $('#scopriPrestito').attr('href', cgi_script + "/wbOnetoone/2l/action/wbOnetoone/WsRichiestaCatalogo.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_finanziamenti&OBSKEY=nav_priv_wbx_prestito_x_te_wb&sezione=prestiti");
            // Inizializzazione dell'html ricevuto
            animateBanFin();

        },
        failure: function() {
            alert("Errore ricezione dati");
        }

    });
}

//animazione fp finanziamenti webank
function startfpFinAnimation() {
    $(window).load(fpFinAnimationShow);
}

var timeoutAnimTrEvo = 0;

CCdiventaTrRBF = function(event) {
    /*
    var importo,
    	importoEvoCCVersamenti = $('#importoEvoCCVersamenti'),
    	diventa,
    	evo = dashboardData.contoEvo.capitaleRisparmiatoFormat,
    	margine = parseFloat(dashboardData.contoCorrente.margine);
    importo = importoEvoCCVersamenti.val();
    if (isNumber(importo)) {
    	importo = parseFloat(formattaNumeriInput(importo));
    	if (importo > evo) {
    		importo = evo;
    		importoEvoCCVersamenti.val(formattaNumOutput(importo).replace('.', ''));
    	}
    	diventa = margine + importo;
    	$('#CCDiventaRBFSpan').html(formattaNumOutput(diventa));
    	$('#CCDiventaRBF').css('visibility', 'visible');
    } else {
    	$('#CCDiventaRBF').css('visibility', 'hidden');
    }
    */
    $('#CCDiventaRBF').css('visibility', 'hidden');
}

//animazione CC EVO diventa trasferimenti
animazioneEvoDiventaTr = function(event, tipo) {
    var importo,
        importoCCEvoVersamenti = $('#importoCCEvoVersamenti'),
        importoEvoCCVersamenti = $('#importoEvoCCVersamenti'),
        diventa,
        evo = dashboardData.contoEvo.capitaleRisparmiatoFormat,
        saldo = dashboardData.contoEvo.saldoDisponibileFormat;
    if (timeoutAnimTrEvo) {
        clearTimeout(timeoutAnimTrEvo);
    }
    timeoutAnimTrEvo = setTimeout(function() { animazioneTrEvo(tipo); }, 500);
    if (tipo === 'CC') {
        importo = importoCCEvoVersamenti.val();
        importoEvoCCVersamenti.val('');
        if (isNumber(importo)) {
            importo = parseFloat(formattaNumeriInput(importo));
            if (importo > saldo) {
                importo = saldo;
                importoCCEvoVersamenti.val(formattaNumOutput(importo).replace('.', ''));
            }
            diventa = Math.min(evo + importo, 5000);
            $('#diventaCCEvoTr').html(formattaNumOutput(diventa));
            $('#diventaCCEvoTrspan').css('visibility', 'visible');
        } else {
            importoCCEvoVersamenti.val('');
            $('#diventaCCEvoTrspan').css('visibility', 'hidden');
            $('#diventaEvoCCTrspan').css('visibility', 'hidden');
        }
    } else { // tipo === 'EVO'
        importo = importoEvoCCVersamenti.val();
        importoCCEvoVersamenti.val('');
        if (isNumber(importo)) {
            importo = parseFloat(formattaNumeriInput(importo));
            if (importo > evo) {
                importo = evo;
                diventa = 0;
                importoEvoCCVersamenti.val(formattaNumOutput(importo).replace('.', ''));
            } else {
                diventa = evo - importo;
            }
            $('#diventaEvoCCTr').html(formattaNumOutput(diventa));
            $('#diventaEvoCCTrspan').css('visibility', 'visible');
        } else {
            importoEvoCCVersamenti.val('');
            $('#diventaCCEvoTrspan').css('visibility', 'hidden');
            $('#diventaEvoCCTrspan').css('visibility', 'hidden');
        }
    }
};

animazioneTrEvo = function(tipo) {
    var imgAnimTr = $('#imgAnimTr'),
        importoCCEvoVersamenti = $('#importoCCEvoVersamenti'),
        importoEvoCCVersamenti = $('#importoEvoCCVersamenti'),
        rbf = dashboardData.contoEvo.capitaleRisparmiatoFormat,
        importo;
    if (imgAnimTr.length && importoCCEvoVersamenti.length && importoEvoCCVersamenti.length) {
        if (tipo === 'CC') {
            importo = parseFloat(importoCCEvoVersamenti.val());
            if (isNaN(importo)) {
                resetAnimazioneTrEvo();
            } else {
                if (rbf === 0) {
                    if (importo !== 5000) {
                        imgAnimTr.attr('src', '/img/ret/img_animaz_evo_0-50.gif');
                    } else {
                        imgAnimTr.attr('src', '/img/ret/img_animaz_evo_0-100.gif');
                    }
                } else {
                    if (rbf !== 5000) {
                        imgAnimTr.attr('src', '/img/ret/img_animaz_evo_50-75.gif');
                    } else {
                        imgAnimTr.attr('src', '/img/ret/img_animaz_evo_100.gif');
                    }
                }
            }
        } else {
            importo = parseFloat(importoEvoCCVersamenti.val());
            if (isNaN(importo)) {
                resetAnimazioneTrEvo();
            } else {
                if (rbf === 5000) { //img_animaz_evo_50-75.gif
                    if (importo !== 5000) {
                        imgAnimTr.attr('src', '/img/ret/img_animaz_evo_100-75.gif');
                    } else {
                        imgAnimTr.attr('src', '/img/ret/img_animaz_evo_100-0.gif');
                    }
                } else {
                    if (rbf !== 0) {
                        imgAnimTr.attr('src', '/img/ret/img_animaz_evo_75-50.gif');
                    } else {
                        imgAnimTr.attr('src', '/img/ret/img_animaz_evo_0.gif');
                    }
                }
            }
        }
    }
};

resetAnimazioneTrEvo = function() {
    var imgAnimTr = $('#imgAnimTr'),
        rbf = dashboardData.contoEvo.capitaleRisparmiatoFormat;
    if (imgAnimTr.length) {
        if (rbf === 0) {
            imgAnimTr.attr('src', '/img/ret/img_animaz_evo_0.gif');
        } else if (rbf !== 5000) {
            imgAnimTr.attr('src', '/img/ret/img_animaz_evo_50.gif');
        } else {
            imgAnimTr.attr('src', '/img/ret/img_animaz_evo_100.gif');
        }
    }
};

resetAnimazioneSoglieEvo = function() {
    var imgAnimSoglie = $('#imgAnimSoglie'),
        rbf = dashboardData.contoEvo.capitaleRisparmiatoFormat;
    if (imgAnimSoglie.length) {
        if (rbf === 0) {
            imgAnimSoglie.attr('src', '/img/ret/img_animaz_evo_0.gif');
        } else if (rbf !== 5000) {
            imgAnimSoglie.attr('src', '/img/ret/img_animaz_evo_50.gif');
        } else {
            imgAnimSoglie.attr('src', '/img/ret/img_animaz_evo_100.gif');
        }
    }
};

resetSalvadanaio = function() {
    $('#diventaCCEvoTrspan').css('visibility', 'hidden');
    $('#diventaEvoCCTrspan').css('visibility', 'hidden');
};

//Controllo campi numerici
isNumber = function(value) {
    var importo = value.replace(',', '.'),
        ret = false;
    if (!isNaN(importo) && $.trim(importo) !== '') {
        ret = true;
    }
    return ret;
};

isZero = function (value) {
    return /^0+$/.test(value);
};

// Formattazione Numeri
formattaNumeriInput = function(importo) {
    try {
        importo = importo.toString();
        if ((/^\d+(\.?\d{3})*(,\d+)?$/).test(importo)) {
            importo = importo.replace(/\./g, '');
        }
        importo = importo.replace(/,/g, '.');
        // Toglie gli zero davanti ai numeri
        importo = importo.replace(/^0+(\d+(\.\d+)?)$/, "$1");
    } catch (e) {
        importo = "";
    }
    return importo;
};

formattaNumOutput = function(importo) {
    //DANIELA 
    var b = Math.round(parseFloat(importo.toString().replace(',', '.')) * 100) / 100;
    return formattaNumero(b.toString().replace('.', ','));
};

formattaNumero = function(nStr, decimali) {
    // Modifica doppio decimale - Paolo Moretti

    nStr = nStr.toString().replace(',', '.');
    nStr = Math.round(nStr * 100) / 100;
    nStr = nStr.toString().replace('.', ',');

    if (decimali)

        return formattaDecimali(nStr, decimali);

    else

        return formattaDecimali(nStr, 2);
};

formattaDecimali = function(nStr, numDec) {
    var x = nStr.split(',');
    var x1 = x[0];
    var x2; /* var x2 = x.length > 1 ? ',' + x[1] : ',00';*/
    var addZero = 0;

    // Gestisce anche uno zero dopo il primo decimale - Paolo Tonon
    if (x.length > 1) {
        x2 = ',' + x[1];

        if (x[1].length < numDec)
            for (addZero = x[1].length; addZero < numDec; ++addZero) { x2 += '0'; }
    } else {
        x2 = ',';

        for (addZero = 0; addZero < numDec; ++addZero) { x2 += '0'; }
    }

    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1)) x1 = x1.replace(rgx, '$1' + '.' + '$2');

    return x1 + x2;
};

// Apre-Chiude accordion in tabella
function ApriAccordion(obj) {
    obj = $(obj)
    if (obj.hasClass('dettagliOff')) {
        obj.parent().find('.dettHidden').slideDown();
        obj.removeClass('dettagliOff').addClass('dettagliOn');
    } else {
        obj.parent().find('.dettHidden').slideUp();
        obj.removeClass('dettagliOn').addClass('dettagliOff');
    }
}

//gestisce visualizzazione box in tabella MY price
function showFollowLevel(obj, classObj, tooltipShow) {
    obj = $(obj);
    var targetLevel = obj.closest('div').find('.' + classObj),
        targetAttr = $(targetLevel).attr('data-tooltip'),
        targetTrigger = targetLevel.closest('div');
    obj.closest('div').find('span[class*="level"]').removeClass('active')
    targetLevel.addClass('active');
    if (tooltipShow) {
        targetTrigger.attr('data-tooltip', 'Ricordati di salvare per attivare le modifiche');
        ttSet('.accordionTable');
        targetTrigger.trigger('click');
    } else {
        targetTrigger.removeAttr('data-tooltip');
        ttHide();
    }
}

function showDetailVetrina(el) {
    var el = $(el),
        elToMove = el.closest('.vetrinaProd').find('.dettagliVetrinaText').eq(0),
        elImg = el.closest('.vetrinaProd').find('img').eq(0),
        elText = el.closest('.vetrinaProd').find('.vetrinaProdtext').eq(0),
        HSpace = elImg.innerHeight() - elText.innerHeight(),
        HTextmin = elToMove.innerHeight();

    if (HTextmin < HSpace) { elToMove.css('height', HSpace) }
    elToMove.slideToggle(300);
    el.toggleClass('on');
}

// Calcola la rata settimanale
// dataInizio (opzionale) e dataFine sono nel formato 'dd/mm/yyyy'
function calcolaRataSettimanale(dataInizio, dataFine, importo) {
    var rata = 0,
        today = new Date();
    dataFine = getDateFromString(dataFine);
    if (dataFine >= today) {
        if (!isValidDate(dataInizio)) {
            dataInizio = today;
        } else {
            dataInizio = getDateFromString(dataInizio);
        }
        //weeks = Math.max(Math.ceil(dateDiffInDays(dataInizio, dataFine) + 1) / 7, 0);
        weeks = Math.ceil(Math.max(Math.ceil(dateDiffInDays(dataInizio, dataFine) + 1) / 7, 0));
        rata = Math.round(importo / weeks);
    }
    return rata;
}

/* Taglia un testo */
String.prototype.cut = function(number) {
    return (this.length > number) ? this.substring(0, number) + "..." : this;
};

/* Box expandibile */
$(function() {
    $('.expText, .expTextIco').click(function() {
        var el = $(this).closest('.boxExp'),
            content = el.find('.boxExpBottom'),
            status = content.attr('data-status');
        status = status ? status : 'close';
        if (status !== 'moving') {
            content.attr('data-status', 'moving');
            if (status === 'close') {
                content.slideDown(function() {
                    el.find('.expTextIco').addClass('open');
                    content.attr('data-status', 'open');
                });
            } else {
                content.slideUp(function() {
                    el.find('.expTextIco').removeClass('open');
                    content.attr('data-status', 'close');
                });
            }
        }
    });
});

/* nuovi accordion BPM*/
/*se l'accordion deve essere esclusivo aggiungere la classe 'autoExc' al tag ul*/
$(function() {
    $(".super-list h3").each(function() {
        $(this).bind("click", function(event) {
            var accordionBtn = $(event.target).closest('li');
            if ($(".super-list").hasClass('autoExc')) {
                accordionBtn.siblings().removeClass('active');
                accordionBtn.siblings().find('.list-box').hide(300);
            }
            $(this).closest('li').toggleClass('active')
            $(this).closest('li').find('.list-box').slideToggle(300);
            setTimeout(function() { var offsetActive = accordionBtn.offset();
                $('html, body').animate({ scrollTop: offsetActive.top }, 'slow'); }, 300);
        });
    });
});

/* Filtra oggetti rubrica */
function filtraRubrica(rubrica) {
    var filteredRubrica = [];
    $.each(rubrica, function() {
        var nomeCompleto = this.anagrafica.cognome_rag_soc;
        if (this.anagrafica.nome !== '') {
            nomeCompleto = this.anagrafica.nome + ' ' + nomeCompleto;
        }
        filteredRubrica.push({
            "label": nomeCompleto,
            "value": this.anagrafica.email
        });
    });
    return filteredRubrica;
}

/* Rimappa il json con gli obiettivi condivisi del Ben Fatto */
mappaObiettiviCondivisi = function(obiettivi) {
    "use strict";
    var obiettiviMappati = [],
        obiettivi, obiettivo, obiettivoFiglio;
    if (obiettivi && obiettivi.length > 0) {
        for (var j = 0; j < obiettivi.length; j++) {
            obiettivo = obiettivi[j];
            if (obiettivo.condiviso && obiettivo.figlio) {
                obiettivoFiglio = obiettivo.figli[0];
                obiettivo.idPadre = obiettivoFiglio.idPadre;
                obiettivo.progressivo = obiettivoFiglio.progressivo;
                obiettivo.importoMaturato = obiettivoFiglio.importoPromesso;
                obiettivo.stato = obiettivoFiglio.stato;
                obiettivo.numeroConto = obiettivoFiglio.numeroConto;
                obiettivo.valuta = obiettivoFiglio.valuta;
                obiettivo.colore = obiettivoFiglio.colore;
                obiettivo.coloreHEX = obiettivoFiglio.coloreHEX;
                obiettivo.coloreRGB = obiettivoFiglio.coloreRGB;
                obiettivo.tms_ins = obiettivoFiglio.tms_ins;
            }
            obiettiviMappati.push(obiettivo);
        }
    }
    return obiettiviMappati;
};

function capitalize(str) {
    var strArr = [];
    if (typeof str === 'string') {
        $.each(str.toLowerCase().split(' '), function() {
            strArr.push(this.charAt(0).toUpperCase() + this.slice(1));
        });
        str = strArr.join(' ');;
    }
    return str;
}

var toggleDefinition = function(element) {

    defi = $(element)
    // Crea ed appende il pulsante di chiusura, se non esiste
    var aclose = defi.find("a.close");
    if (!aclose.length) {
        aclose = $("<a>").addClass("close").hide().click(function() { $(this).fadeOut();
            $(this).parents(".definition").slideUp() });
        defi.prepend(aclose);
    }
    if (!defi.is(":visible")) {
        aclose.fadeIn()
        defi.slideDown();
    } else {
        aclose.trigger("click");
    }
}
//funzione per aggiungere e rimuovere campi
function maskTin(el, condition) {
    var elToMask = $(el);
    elToMask.each(function() {
        //if($(this).val() =='' && condition == true )
        if (condition == true) {
            $(this).val('').mask("999-99-9999", { 
                "placeholder": "_________"
			}).focus();
        } else {
            $(this).unmask();
            if ($(this).val() != 'Non previsto') { $(this).val('') }
        }

    })
}

function abilitaBtnField() {
    $('.fatcaintestatario').each(function() {
        var el = $(this),
            blocchiCampi = el.find('.fatcaFieldWrapper .fatcaField'),
            bloccoBtn = el.find('.fatcaFieldButton'),
            blocchiCampiLast = blocchiCampi.eq(blocchiCampi.length - 1), //ultimo campo aggiunto
            blocchiCampiLastSelect = blocchiCampiLast.find('select'),
            blocchiCampiLastInput = blocchiCampiLast.find('input');

        function abilitaBtn() {
            var requiredValue = blocchiCampiLastSelect.find('option:selected').val().split('|')[2];
            if (blocchiCampiLastSelect.find('option:selected').text().indexOf('seleziona') == -1) {
                if (requiredValue == 'N') {
                    blocchiCampiLastSelect.addClass('requiredValue');
                    blocchiCampiLastInput.attr('disabled', true).addClass('disabled').val('Non previsto');
                } else {
                    blocchiCampiLastSelect.removeClass('requiredValue');
                    blocchiCampiLastInput.attr('disabled', false).removeClass('disabled').val('');
                }
                bloccoBtn.find('.fieldButton.add').removeClass('disabled');
            } else {
                bloccoBtn.find('.fieldButton.add').addClass('disabled');
                blocchiCampiLastInput.attr('disabled', true).addClass('disabled');
                blocchiCampiLastSelect.removeClass('requiredValue');
            }
        }

        blocchiCampiLastSelect.bind('change', function() {
            abilitaBtn();
            if (blocchiCampiLastSelect.find('option:selected').text().indexOf('STATI UNITI') != -1) {
               maskTin(blocchiCampiLastInput, true);
            } else {
                maskTin(blocchiCampiLastInput, false);
            }
        })
    })
}

function returnSelectedOptions(e) {
    prevSelectedOptions = [];
    var prevSelect = $(e.target).closest('.fatcaintestatario').find('select');
    prevSelect.each(function(index) {
        prevSelectedOptions.push($(this).find('option:selected').text());
    });
    return prevSelectedOptions;
}

function addRemoveField() {
    var labelCounter = ["Secondo", "Terzo", "Quarto"];
    var labelCounterElimina = ["seconda", "terza", "quarta"];
    var numBlockField = [1, 1, 1]

    $('.fatcaintestatario').each(function(index) {

        var wrapperIntestatario = $(this);
        wrapperIntestatario.find('.fatcaField input').attr('disabled', true).addClass('disabled');
        wrapperIntestatario.find('.fieldButton').bind('click', function(event) {
            var targetBtn = $(event.target).closest('a'),
                contenuto = '',
                wrapperEl = (wrapperIntestatario.prop('tagName') != 'TR') ? '<div class="fatcaField">' : '<tr class="fatcaField">',
                wrapperElC = (wrapperIntestatario.prop('tagName') != 'TR') ? '</div>' : '</tr>',
                elHid = (wrapperIntestatario.prop('tagName') != 'TR') ? 'div' : 'td',
                el;

            //prima controllo che il bottone sia abilitato
            if (!targetBtn.hasClass('disabled') && targetBtn.hasClass('add')) {
                var numBlockFieldSucc = numBlockField[index] + 1,
                    rowFatca = wrapperIntestatario.find('.fatcaField'),
                    nameSelect = wrapperIntestatario.find('select').eq(0).attr('name'),
                    nameSelectSucc = nameSelect.replace('residenzaFiscale2', 'residenzaFiscale' + (numBlockField[index] + 2).toString()),
                    nameTin = wrapperIntestatario.find('input').eq(0).attr('name'),
                    nameTinSucc = nameTin.replace('TIN2', 'TIN' + (numBlockField[index] + 2).toString());
                if (wrapperIntestatario.find('input[type=\'hidden\']').eq(0).length > 0) {
                    var nameSelectInputHidden = wrapperIntestatario.find('input[type=\'hidden\']').eq(0).attr('name'),
                        nameSelectInputHiddenSucc = nameSelectInputHidden.replace('residenzaFiscale2', 'residenzaFiscale' + (numBlockField[index] + 2).toString()),
                        idSelectInputHidden = wrapperIntestatario.find('input[type=\'hidden\']').attr('id'),
                        idSelectInputHiddenSucc = nameSelectInputHidden.replace('residenzaFiscale2', 'residenzaFiscale' + (numBlockField[index] + 2).toString());
                }
                var contenuto = wrapperEl +
                    wrapperIntestatario.find('.fatcaField').eq(0).html()
                    .replace(/\_id1/g, '_id' + numBlockFieldSucc.toString())
                    .replace('Secondo', labelCounter[numBlockField[index]])
                    .replace(nameSelect, nameSelectSucc)
                    .replace(nameSelectInputHidden, nameSelectInputHiddenSucc)
                    .replace(idSelectInputHidden, idSelectInputHiddenSucc)
                    .replace(nameTin, nameTinSucc)
                    .replace('inited', '') +
                    wrapperElC;
                if (numBlockFieldSucc.toString() <= '3' && numBlockField[index].toString() > '0') {
                    wrapperIntestatario.find('.fatcaField:last-child select').attr('disabled', true);
                    // wrapperIntestatario.find('.fatcaField:last-child input').attr('disabled',true).addClass('disabled');
                    returnSelectedOptions(event);
                    wrapperIntestatario.find('.fatcaFieldWrapper').append(contenuto);
                    //funzione per eliminare options gia' selezionate
                    $.each(prevSelectedOptions, function(i, val) {
                        wrapperIntestatario.find('.fatcaField').eq(rowFatca.length).find('select option').each(function() {
                            if ($(this).text() == val) {
                                $(this).remove();
                            }
                        });
                    });
                    el = wrapperIntestatario.find('.fatcaField').eq(rowFatca.length).find('input');
                    el.unmask().val('').attr('disabled', true).addClass('disabled').attr('data-error', '').val('');
                    el.closest('div.errore').removeClass('errore');
                    el.closest('div.has-error').removeClass('has-error');
                    el.next('.with-errors').remove();
                    wrapperIntestatario.find('.fatcaField').eq(rowFatca.length).find('select').prop('selectedIndex', 0).attr('disabled', false).removeClass('requiredValue');

                    if (numBlockFieldSucc.toString() == '3') {
                        wrapperIntestatario.find('.fieldButton.add').closest(elHid).hide();
                    }
                } else {
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField').show();
                    wrapperIntestatario.find('.fieldButton.remove').closest(elHid).show();
                }

                wrapperIntestatario.find('.fieldButton.add').addClass('disabled');
                abilitaBtnField();
                ttSet('body');
                initTooltip();
                wrapperIntestatario.find('.labelCounterMeno').html(labelCounterElimina[numBlockField[index]]);
                numBlockField[index]++;
                wrapperIntestatario.find('.labelCounterPiu').html(labelCounterElimina[numBlockField[index]]);
            } else if (!targetBtn.hasClass('disabled') && targetBtn.hasClass('remove')) {
                if (numBlockField[index].toString() > '1') {
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField:last-child').remove();
                    wrapperIntestatario.find('.fieldButton.add').closest(elHid).show();
                    wrapperIntestatario.find('.fatcaField:last-child select').attr('disabled', false);
                    if (!wrapperIntestatario.find('.fatcaField:last-child select').hasClass('requiredValue')) {
                        wrapperIntestatario.find('.fatcaField:last-child input').attr('disabled', false).removeClass('disabled');
                    }
                } else {
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField input').unmask().val('').addClass('disabled').attr('disabled', true).attr('data-error', '').val('');
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField input').closest('div.errore').removeClass('errore');
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField input').closest('div.has-error').removeClass('has-error');
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField input').next('.with-errors').remove();
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField select').prop('selectedIndex', 0);
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField').hide();
                    wrapperIntestatario.find('.fieldButton.remove').closest(elHid).hide();
                }
                wrapperIntestatario.find('.fieldButton.add').removeClass('disabled');
                numBlockField[index]--;
                wrapperIntestatario.find('.labelCounterMeno').html(labelCounterElimina[numBlockField[index] - 1]);
                wrapperIntestatario.find('.labelCounterPiu').html(labelCounterElimina[numBlockField[index]]);
            } else {
                return false;
            }

        })
    })
}



function closeBoxAlertFunction() {
    $('.closeBoxAlert').click(function() {
        $(this).closest('.boxstepCont').hide();
    })
}


/* TABS automatici */
initTabs = function() {
    $("*[data-tabcont]").click(function() {
        var tl = $(this);
        var tabid = tl.attr("data-tabcont");
        var tw = tl.parents(".tabbed-content");
        tw.find(".tab-cont, .tabGeneric li").removeClass("active");
        tl.addClass("active");
        $(tabid).addClass("active");
    });
}

$(window).on("load", function() {
    initTabs();
});

/* funzioni per FATCA In deposito titoli e fondi e sicav */
addEvent(window, "load", function() {

    abilitaBtnField();
    addRemoveField();
    openPdfEmbed();
    closeBoxAlertFunction();

});