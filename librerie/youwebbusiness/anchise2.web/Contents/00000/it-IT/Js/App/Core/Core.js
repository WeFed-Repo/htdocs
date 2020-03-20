var App;
(function (App) {
    (function (Core) {
        var BasePagingFilterAsync = (function () {
            function BasePagingFilterAsync(data) {
                if (typeof data === "undefined") {
                    data = null;
                }
                this.IsSortAscending = ko.observable(false);
                this.Size            = ko.observable(10);
                this.SortColumn      = ko.observable(1);
                this.StartIndex      = ko.observable(1);
                
                if (data !== null) {
                    this.IsSortAscending(data.IsSortAscending != null ? data.IsSortAscending : false);
                    this.Size(data.Size || 10);
                    this.SortColumn(data.SortColumn || 1);
                    this.StartIndex(data.StartIndex || 1);
                }
            }
            return BasePagingFilterAsync;
        })();
        Core.BasePagingFilterAsync = BasePagingFilterAsync;
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
/**
    Input params:
        buttonId: Id del div a cui l'sdk aggancerà la dropdown e i relativi pulsanti di stampa
        parameter: oggetto che verrà passato all'sdk e successivamente come input alla action indicata nell'url (es. oggetto di filtro per effettuare la search)
        exportItems: array di oggetti del tipo 
                                var exportItems = [
                                    {
                                        type: "Pdf",
                                        url: '@Url.ActionCrypted("StampaListaEsitiSdd", "StampeLista", "Stampe")',
                                        fieldName: "json"
                                    },
                                    {
                                        type: "Excel",
                                        url: '@Url.ActionCrypted("StampaListaEsitiSddXls", "StampeLista", "Stampe")',
                                        fieldName: "json"
                                    }
                                ];
                    in cui è presente il tipo di documento, l'url e opzionalmente il fieldName che specifica il relativo fieldName nell'SDK (nome del parametro di input della action)
                    Di seguito i 2 casi di chiamata del client in cui venga o non venga passato il campo fieldName:
                        1) fieldName = "json":
                                contenttype:application/json
                                json:{"IdEsito":null,"IdAzienda":81318,"IdRapporto":1274110,"ImportoDisposizioneTo":null,"ImportoDisposizioneFrom":null,"DataInvioDisposizioneFrom":null,"DataInvioDisposizioneTo":null,"DataScadenzaDisposizioneFrom":null,"DataScadenzaDisposizioneTo":null,"CodiceAbi":"05034","RagioneSociale":null,"Debitore":null,"StatoIncasso":"RJCT,TMTB","ImportoDistintaTo":null,"ImportoDistintaFrom":null,"ImportoSottoDistintaTo":null,"ImportoSottoDistintaFrom":null,"IdDistinta":null,"IdEsitoSottoDistinta":null,"IsSortAscending":false,"Size":10,"SortColumn":"1","StartIndex":1}
                        
                        2) senza parametro fieldName:
                                IdEsito: null
                                IdAzienda: 81318
                                ...
**/
var Export;
(function (Export) {
    var _print = function (buttonId, exportItems, parameter) {
        var docs = [];
        for (var i = 0; i < exportItems.length; i++) {
            resourceForm = exportItems[i].hasOwnProperty("fieldName") ?
                {
                    action: exportItems[i].url,
                    parameter: parameter,
                    target: "_self",
                    serialization: {
                        fieldName: exportItems[i].fieldName,
                        mode: false,
                    },
                } :
                {
                    action: exportItems[i].url,
                    parameter: parameter,
                    target: "_self"
                }

            docs.push({
                id: "print",
                type: exportItems[i].type,
                title: "Export",
                iconClass: "anchise-icon anchise-icon-export-" + exportItems[i].type,
                saveAll: {
                    resourceForm: resourceForm
                }
            });
        }

        sdk.print('#' + buttonId).create({
            docs: docs,
            eventHandler: function (eventType, target, data) {

            },
        });
    };

    Export.print = _print;
})(Export || (Export = {}));
// Funzionalità Core ma con namespace di comodo per tenere le partial view meno prolisse
var Http;
(function (Http) {
    var _ajaxError = function (jqXHR, textStatus, errorThrown) {
        console.log("readyState: " + jqXHR.readyState);
        switch (jqXHR.readyState) {
            case 0:
                uiHelper.Alert({
                    text: 'Network Error: è successo qualcosa di inaspettato alla rete, si prega di controllare che il dispositivo sia connesso ad Internet.',
                    cssClass: 'alert-danger'
                });
                break;
            case 4:
                var contentType = jqXHR.getResponseHeader("Content-Type");
                if (jqXHR.status != 400 && jqXHR.status != 404 && contentType != 'application/json') {
                    uiHelper.Alert({
                        text: 'Error: è successo qualcosa di inaspettato durante il tentativo di connessione al server.',
                        cssClass: 'alert-danger'
                    });
                    //document.open();
                    //document.write(jqXHR.responseText);
                    //document.close();
                }
                break;
            case 1:
            case 2:
            case 3:
            default:
                uiHelper.Alert({
                    text: 'Error: è successo qualcosa di inaspettato durante il tentativo di connessione al server.',
                    cssClass: 'alert-danger'
                });
                break;
        }    
    };

    var _ajaxPost = function (url, json) {
        return $.ajax({
            contentType: 'application/json',
            url: url,
            method: "POST",
            data: json,
            beforeSend: function (xhr) {
                uiHelper.ShowLoader();
            },
            error: _ajaxError
        });
    }

    var _ajaxGet = function (url) {
        return $.ajax({
            contentType: 'application/json',
            url: url,
            method: "GET",
            beforeSend: function (xhr) {
                uiHelper.ShowLoader();
            },
            error: _ajaxError
        });
    }

    var _ajaxPostWithTxMon = function (url, json) {
        try {
            tmtmon.enrich();
        } catch (e) {
            console.log(e);
        }

        return _ajaxPost(url, json);
    };

    Http.Post = _ajaxPost;
    Http.PostWithTxMon = _ajaxPostWithTxMon;
    Http.Get = _ajaxGet;
})(Http || (Http = {}));
var App;
(function (App) {
    (function (Core) {
        Core.SearchJsonResult = function (data) {
            if (typeof data === "undefined") {
                data = null;
            }
            this.HasError = true;
            this.HasWarning = false;
            this.Messages = null;
            this.TotaleElementi = 0;
            this.PagingFilter = null;
            this.Response = null;
            if (data !== null) {
                this.HasError = data.HasError;
                this.HasWarning = data.HasWarning;
                this.Messages = data.Messages;
                this.TotaleElementi = data.TotaleElementi;
                this.PagingFilter = data.PagingFilter;
                this.Response = data.Response;
            };
        }
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));

var App;
(function (App) {
    (function (Core) {
        Core.StandardJsonResult = function (data) {
            if (typeof data === "undefined") {
                data = null;
            }
            this.HasError = true;
            this.HasWarning = false;
            this.Messages = null;
            this.Response = null;
            this.CssClass = 'success';
            if (data !== null) {
                this.HasError = data.HasError;
                this.HasWarning = data.HasWarning;
                this.Messages = data.Messages;
                this.Response = data.Response;

                if (data.HasWarning && !data.HasError) {
                    this.CssClass = 'alert';
                }
            };
        }

    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));

var App;
(function (App) {
    (function (Core) {
        Core.UiButton = function (data) {
            if (typeof data === "undefined") {
                data = null;
            }
            
            this.Label = null;
            this.Callback = $.noop;
            if (data !== null) {
                this.Label = data.Label || '';
                this.Callback = data.Callback || $.noop;
            };
        }
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));

var App;
(function (App) {
    (function (Core) {
        Core.UiComponent = function (data) {
            if (typeof data === "undefined") { data = null; }

            this.Name   = null;
            this.Params = null;

            if (data !== null) {
                this.Name   = data.Name;
                this.Params = data.Params;
            };
        }
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));

var App;
(function (App) {
    (function (Core) {
        var ValidationMessage = (function () {
            function ValidationMessage(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.ErrorMessage = ko.observable(null);
                self.ErrorMessageRes = ko.observable(null);
                self.PropertyName = ko.observable(null);
                if (data != null) {
                    self.ErrorMessage(data.ErrorMessage);
                    self.ErrorMessageRes(data.ErrorMessageRes);
                    self.PropertyName(data.PropertyName);
                }
            }
            return ValidationMessage;
        })();
        Core.ValidationMessage = ValidationMessage;
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
var App;
(function (App) {
    (function (Core) {
        var _calcoloPasqua = function (year) {
            var a = year % 19;
            var b = Math.floor(year / 100);
            var c = year % 100;
            var d = Math.floor(b / 4);
            var e = b % 4;
            var f = Math.floor((b + 8) / 25);
            var g = Math.floor((b - f + 1) / 3);
            var h = (19 * a + b - d - g + 15) % 30;
            var i = Math.floor(c / 4);
            var j = c % 4;
            var k = (32 + 2 * e + 2 * i - h - j) % 7;
            var m = Math.floor((a + 11 * h + 22 * k) / 451);
            var month = Math.floor((h + k - 7 * m + 114) / 31);
            var day = ((h + k - 7 * m + 114) % 31) + 1;
            var easter = new Date(year + "-" + month + "-" + day);
            var dayOffset = 1; //
            var millisecondOffset = dayOffset * 24 * 60 * 60 * 1000;
            easter.setTime(easter.getTime() + millisecondOffset);

            return easter.getTime();
        }

        // Module method
        Core.NoWeekendsOrHolidays = function (date) {
            var noWeekend = $.datepicker.noWeekends(date);
            if (noWeekend[0]) {
                var natDays = [
                    [1, 1], [6, 1], [25, 4], [1, 5], [2, 6], [15, 8], [1, 11], [8, 12], [25, 12], [26, 12]
                ];
                var today = new Date();
                var year = today.getFullYear();
                var easter = new Date(_calcoloPasqua(year));
                if (today > easter) {
                    easter = new Date(_calcoloPasqua(year + 1));
                    natDays.push([easter.getDay(), easter.getMonth() + 1]);
                } else {
                    natDays.push([easter.getDay(), easter.getMonth() + 1]);
                }
                for (i = 0; i < natDays.length; i++) {
                    if (date.getMonth() == natDays[i][1] - 1
                            && date.getDate() == natDays[i][0]) {
                        return [false, ''];
                    }
                }
                return [true, ''];
            } else {
                return noWeekend;
            }
        };
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
var App;
(function (App) {
    (function (Core) {
        // Codici da utilizzare per i valori in posizione dispari
        var codiciDispari = new Array(1, 0, 5, 7, 9, 13, 15, 17, 19, 21, 2, 4, 18, 20, 11, 3, 6, 8, 12, 14, 16, 10, 22, 25, 24, 23);

        // extract conto corrente number from iban
        var _getConto = function (iban) {
            iban = iban || "";

            return iban.substring(15);
        };

        // extract Abi Code from iban
        var _getAbi = function (iban) {
            iban = iban || "";

            return iban.substr(5, 5);
        }

        // extract Cab Code from iban
        var _getCab = function (iban) {
            iban = iban || "";

            return iban.substr(10, 5);
        }

        var _getPaese = function (iban) {
            iban = iban || "";

            return iban.substr(0, 2);
        }

        var _getCheckDigit = function (iban) {
            iban = iban || "";

            return iban.substr(2, 2);
        }

        var _getCin = function (iban) {
            iban = iban || "";

            return iban.substr(4, 1);
        }

        var _getCharCode = function (char, isIban) {
            var code = char.charCodeAt(0);

            if (48 <= code && code <= 57) {
                code = code - 48;
            }

            if (65 <= code && code <= 90) {
                code = code - 65;

                if (isIban) {
                    code += 10;
                }
            }

            return code;
        };

        var _calcolaCINBBAN = function (bban) {
            var intBban = ' ' + bban;
            var sum = 0;

            intBban = intBban.toUpperCase();
            for (var i = 1; i < intBban.length; i++) {
                var code = _getCharCode(intBban[i], false);

                if (i % 2 == 0) {
                    sum += code;
                } else {
                    sum += codiciDispari[code];
                }
            }

            var cinModule = (sum % 26);
            var cinBban = String.fromCharCode(cinModule + 65);

            return cinBban;
        };

        var _calcolaCINIBAN = function (bban) {
            var intBban = bban + 'IT' + '00';
            var digits = '';

            intBban = intBban.toUpperCase();
            for (var i = 0; i < intBban.length; i++) {
                var code = _getCharCode(intBban[i], true);
                digits += code;
            }

            var mod = _mod97(digits);
            
            var cin = 98 - mod;
            return _fill0('' + cin, 2);
        };

        var _fill0 = function (s, l) {
            while (s.length < l)
                s = "0" + s;
            return s;
        };

        var _fixAbi = function (abi) {
            return abi.toUpperCase();
        };

        var _fixCab = function (cab) {
            return cab.toUpperCase();
        };

        var _fixConto = function (conto) {
            return _fill0(conto, 12);
        };

        var _mod97 = function (digits) {
            var mod = 0;
            for (var i = 0; i < digits.length; ++i)
                mod = (mod * 10 + parseInt(digits.charAt(i))) % 97;

            return mod;
        };

        var _calcolaIBAN = function (abi, cab, conto, paese) {
            paese = paese.toUpperCase();
            // prevedere validazione
            var bban = abi + cab + conto;
            var cinBBAN = _calcolaCINBBAN(bban);
            
            bban = cinBBAN + bban;
            var cinIBAN = _calcolaCINIBAN(bban);

            return paese + cinIBAN + bban;
        };

        // Module method
        Core.GetConto = _getConto;
        Core.GetCab = _getCab;
        Core.GetAbi = _getAbi;
        Core.GetPaese = _getPaese;
        Core.GetCheckDigit = _getCheckDigit;
        Core.GetCin = _getCin;
        Core.FixAbi = _fixAbi;
        Core.FixCab = _fixCab;
        Core.FixConto = _fixConto;
        Core.CalcolaIBAN = _calcolaIBAN;
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
var App;
(function (App) {
    (function (Core) {
        var _constantKeys = {
            DISTINTE: 'DISTINTE',
            DISPOSIZIONI: 'DISPOSIZIONI',
            FILTRO_DISTINTE: 'FILTRO_DISTINTE',
            FILTRO_DISPOSIZIONI: 'FILTRO_DISPOSIZIONI',
            ESITI: 'ESITI',
            FILTRO_ESITI: 'FILTRO_ESITI'
        };
        var _setSessionStorage = function (key, value) {
            if (typeof (key) !== "string") {
                throw "key must be a string";
            }

            sessionStorage.setItem(key, ko.toJSON(value));
        };
        var _getSessionStorage = function (key) {
            if (typeof (key) !== "string") {
                throw "key must be a string";
            }

            return JSON.parse(sessionStorage.getItem(key));
        };

        Core.GetSessionStorage = _getSessionStorage;
        Core.SetSessionStorage = _setSessionStorage;
        Core.SetDistinteSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.DISTINTE, value);
        }
        Core.GetDistinteSessionStorage = function () {
            return _getSessionStorage(_constantKeys.DISTINTE);
        }
        Core.SetDisposizioniSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.DISPOSIZIONI, value);
        }
        Core.GetDisposizioniSessionStorage = function () {
            return _getSessionStorage(_constantKeys.DISPOSIZIONI);
        }
        Core.SetEsitiSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.ESITI, value);
        }
        Core.GetEsitiSessionStorage = function () {
            return _getSessionStorage(_constantKeys.ESITI);
        }
        Core.SetFiltroDistinteSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.FILTRO_DISTINTE, value);
        }
        Core.GetFiltroDistinteSessionStorage = function () {
            return _getSessionStorage(_constantKeys.FILTRO_DISTINTE);
        }
        Core.SetFiltroDisposizioniSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.FILTRO_DISPOSIZIONI, value);
        }
        Core.GetFiltroDisposizioniSessionStorage = function () {
            return _getSessionStorage(_constantKeys.FILTRO_DISPOSIZIONI);
        }
        Core.SetFiltroEsitiSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.FILTRO_ESITI, value);
        }
        Core.GetFiltroEsitiSessionStorage = function (value) {
            return _getSessionStorage(_constantKeys.FILTRO_ESITI);
        }
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));

var App;
(function (App) {
    (function (Core) {
        // Helper
        var _numberHelper = function (value, action) {
            if (!(typeof action === "function")) {
                throw "'action' is not a function";
            }

            var number = parseNumber(value);
            if (!isNaN(number)) {
                return action(number);
            } else {
                return false;
            }
        };

        // Core rules
        var _isNullOrUndefined = function (value) {
            return (value === null || typeof value === "undefined");
        }

        var _isNullOrEmpty = function (value) {
            if (_isNullOrUndefined(value) || value === '') {
                return true;
            }

            return false;
        };

        var _isLess = function (value, min) {
            return _numberHelper(value, function (number) {
                return (number < min);
            });
        };

        var _isLessEqual = function (value, min) {
            return _numberHelper(value, function (number) {
                return (number <= min);
            });
        };

        var _isGreat = function (value, max) {
            return _numberHelper(value, function (number) {
                return (number > max);
            });
        };

        var _isGreatEqual = function (value, max) {
            return _numberHelper(value, function (number) {
                return (number >= max);
            });
        };

        var _minLength = function (value, minLength) {
            return (value.length >= minLength);
        };

        var _maxLength = function (value, maxLength) {
            return (value.length <= maxLength);
        };

        var _isEmail = function (email) {
            var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        var _parseDateHelper = function (value, format, shortFormat) {
            var date = moment(value.trim(), [format]).toDate();

            if (date.getFullYear() < 1970) {
                date = moment(moment(value.trim(), [shortFormat]).toDate());
            }

            return date;
        }

        var _parseDate = function (value) {
            return _parseDateHelper(value, "DD/MM/YYYY", "DD/MM/YY");
        };

        var _parseDateTime = function (value) {
            return _parseDateHelper(value, "DD/MM/YYYYThhmmss", "DD/MM/YYThhmmss");
        };

        var _parseDateTimeFormatted = function (value, format, shortFormat) {
            return _parseDateHelper(value, format, shortFormat);
        };

        var _formatDate = function (value) {
            return moment(value).format("DD/MM/YYYY");
        };

        var _formatDateTime = function (value) {
            return moment(value).format("DD/MM/YYYYThhmmss");
        };

        var _formatNumber = function (value) {
            var number = parseNumber(value);

            if (isNaN(number)) {
                return null;
            } else {
                return number.toFixed(2)
                             .replace('.', ',');
            }
        };

        var _formatNumberSeparation = function (value) {
            return _formatNumber(value).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        };

        var _parseNumber = function (value) {
            if (typeof(value) === "number") {
                return value;
            } else {
                value = value.toString().replace(/\./g, '');

                return parseFloat(value.replace(',', '.'));
            }
        };

        // Module method
        Core.IsNullOrUndefined = _isNullOrUndefined;
        Core.IsNullOrEmpty = _isNullOrEmpty;
        Core.IsLess = _isLess;
        Core.IsLessEqual = _isLessEqual;
        Core.IsGreat = _isGreat;
        Core.IsGreatEqual = _isGreatEqual;
        Core.MinLength = _minLength;
        Core.MaxLength = _maxLength;
        Core.IsEmail = _isEmail;

        Core.ParseDate = _parseDate;
        Core.FormatDate = _formatDate;
        Core.ParseDateTime = _parseDateTime;
        Core.FormatDateTime = _formatDateTime;
        Core.ParseDateTimeFormatted = _parseDateTimeFormatted;

        Core.ParseNumber = _parseNumber;
        Core.FormatNumber = _formatNumber;
        Core.FormatNumberSeparation = _formatNumberSeparation;
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));

// -- Sammy.js -- /sammy.js
// http://sammyjs.org
// Version: 0.7.6
// Built: 2014-08-26 10:45:34 +0300
(function (factory) { if (typeof define === "function" && define.amd) { define(["jquery"], factory) } else { jQuery.sammy = window.Sammy = factory(jQuery) } })(function ($) { var Sammy, PATH_REPLACER = "([^/]+)", PATH_NAME_MATCHER = /:([\w\d]+)/g, QUERY_STRING_MATCHER = /\?([^#]*)?$/, _makeArray = function (nonarray) { return Array.prototype.slice.call(nonarray) }, _isFunction = function (obj) { return Object.prototype.toString.call(obj) === "[object Function]" }, _isArray = function (obj) { return Object.prototype.toString.call(obj) === "[object Array]" }, _isRegExp = function (obj) { return Object.prototype.toString.call(obj) === "[object RegExp]" }, _decode = function (str) { return decodeURIComponent((str || "").replace(/\+/g, " ")) }, _encode = encodeURIComponent, _escapeHTML = function (s) { return String(s).replace(/&(?!\w+;)/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;") }, _routeWrapper = function (verb) { return function () { return this.route.apply(this, [verb].concat(Array.prototype.slice.call(arguments))) } }, _template_cache = {}, _has_history = !!(window.history && history.pushState), loggers = []; Sammy = function () { var args = _makeArray(arguments), app, selector; Sammy.apps = Sammy.apps || {}; if (args.length === 0 || args[0] && _isFunction(args[0])) { return Sammy.apply(Sammy, ["body"].concat(args)) } else if (typeof (selector = args.shift()) == "string") { app = Sammy.apps[selector] || new Sammy.Application; app.element_selector = selector; if (args.length > 0) { $.each(args, function (i, plugin) { app.use(plugin) }) } if (app.element_selector != selector) { delete Sammy.apps[selector] } Sammy.apps[app.element_selector] = app; return app } }; Sammy.VERSION = "0.7.6"; Sammy.addLogger = function (logger) { loggers.push(logger) }; Sammy.log = function () { var args = _makeArray(arguments); args.unshift("[" + Date() + "]"); $.each(loggers, function (i, logger) { logger.apply(Sammy, args) }) }; if (typeof window.console != "undefined") { if (typeof window.console.log === "function" && _isFunction(window.console.log.apply)) { Sammy.addLogger(function () { window.console.log.apply(window.console, arguments) }) } else { Sammy.addLogger(function () { window.console.log(arguments) }) } } else if (typeof console != "undefined") { Sammy.addLogger(function () { console.log.apply(console, arguments) }) } $.extend(Sammy, { makeArray: _makeArray, isFunction: _isFunction, isArray: _isArray }); Sammy.Object = function (obj) { return $.extend(this, obj || {}) }; $.extend(Sammy.Object.prototype, { escapeHTML: _escapeHTML, h: _escapeHTML, toHash: function () { var json = {}; $.each(this, function (k, v) { if (!_isFunction(v)) { json[k] = v } }); return json }, toHTML: function () { var display = ""; $.each(this, function (k, v) { if (!_isFunction(v)) { display += "<strong>" + k + "</strong> " + v + "<br />" } }); return display }, keys: function (attributes_only) { var keys = []; for (var property in this) { if (!_isFunction(this[property]) || !attributes_only) { keys.push(property) } } return keys }, has: function (key) { return this[key] && $.trim(this[key].toString()) !== "" }, join: function () { var args = _makeArray(arguments); var delimiter = args.shift(); return args.join(delimiter) }, log: function () { Sammy.log.apply(Sammy, arguments) }, toString: function (include_functions) { var s = []; $.each(this, function (k, v) { if (!_isFunction(v) || include_functions) { s.push('"' + k + '": ' + v.toString()) } }); return "Sammy.Object: {" + s.join(",") + "}" } }); Sammy.targetIsThisWindow = function targetIsThisWindow(event, tagName) { var targetElement = $(event.target).closest(tagName); if (targetElement.length === 0) { return true } var targetWindow = targetElement.attr("target"); if (!targetWindow || targetWindow === window.name || targetWindow === "_self") { return true } if (targetWindow === "_blank") { return false } if (targetWindow === "top" && window === window.top) { return true } return false }; Sammy.DefaultLocationProxy = function (app, run_interval_every) { this.app = app; this.is_native = false; this.has_history = _has_history; this._startPolling(run_interval_every) }; Sammy.DefaultLocationProxy.fullPath = function (location_obj) { var matches = location_obj.toString().match(/^[^#]*(#.+)$/); var hash = matches ? matches[1] : ""; return [location_obj.pathname, location_obj.search, hash].join("") }; $.extend(Sammy.DefaultLocationProxy.prototype, { bind: function () { var proxy = this, app = this.app, lp = Sammy.DefaultLocationProxy; $(window).bind("hashchange." + this.app.eventNamespace(), function (e, non_native) { if (proxy.is_native === false && !non_native) { proxy.is_native = true; window.clearInterval(lp._interval); lp._interval = null } app.trigger("location-changed") }); if (_has_history && !app.disable_push_state) { $(window).bind("popstate." + this.app.eventNamespace(), function (e) { app.trigger("location-changed") }); $(document).delegate("a", "click.history-" + this.app.eventNamespace(), function (e) { if (e.isDefaultPrevented() || e.metaKey || e.ctrlKey) { return } var full_path = lp.fullPath(this), hostname = this.hostname ? this.hostname : function (a) { var l = document.createElement("a"); l.href = a.href; return l.hostname }(this); if (hostname == window.location.hostname && app.lookupRoute("get", full_path) && Sammy.targetIsThisWindow(e, "a")) { e.preventDefault(); proxy.setLocation(full_path); return false } }) } if (!lp._bindings) { lp._bindings = 0 } lp._bindings++ }, unbind: function () { $(window).unbind("hashchange." + this.app.eventNamespace()); $(window).unbind("popstate." + this.app.eventNamespace()); $(document).undelegate("a", "click.history-" + this.app.eventNamespace()); Sammy.DefaultLocationProxy._bindings--; if (Sammy.DefaultLocationProxy._bindings <= 0) { window.clearInterval(Sammy.DefaultLocationProxy._interval); Sammy.DefaultLocationProxy._interval = null } }, getLocation: function () { return Sammy.DefaultLocationProxy.fullPath(window.location) }, setLocation: function (new_location) { if (/^([^#\/]|$)/.test(new_location)) { if (_has_history && !this.app.disable_push_state) { new_location = "/" + new_location } else { new_location = "#!/" + new_location } } if (new_location != this.getLocation()) { if (_has_history && !this.app.disable_push_state && /^\//.test(new_location)) { history.pushState({ path: new_location }, window.title, new_location); this.app.trigger("location-changed") } else { return window.location = new_location } } }, _startPolling: function (every) { var proxy = this; if (!Sammy.DefaultLocationProxy._interval) { if (!every) { every = 10 } var hashCheck = function () { var current_location = proxy.getLocation(); if (typeof Sammy.DefaultLocationProxy._last_location == "undefined" || current_location != Sammy.DefaultLocationProxy._last_location) { window.setTimeout(function () { $(window).trigger("hashchange", [true]) }, 0) } Sammy.DefaultLocationProxy._last_location = current_location }; hashCheck(); Sammy.DefaultLocationProxy._interval = window.setInterval(hashCheck, every) } } }); Sammy.Application = function (app_function) { var app = this; this.routes = {}; this.listeners = new Sammy.Object({}); this.arounds = []; this.befores = []; this.namespace = (new Date).getTime() + "-" + parseInt(Math.random() * 1e3, 10); this.context_prototype = function () { Sammy.EventContext.apply(this, arguments) }; this.context_prototype.prototype = new Sammy.EventContext; if (_isFunction(app_function)) { app_function.apply(this, [this]) } if (!this._location_proxy) { this.setLocationProxy(new Sammy.DefaultLocationProxy(this, this.run_interval_every)) } if (this.debug) { this.bindToAllEvents(function (e, data) { app.log(app.toString(), e.cleaned_type, data || {}) }) } }; Sammy.Application.prototype = $.extend({}, Sammy.Object.prototype, { ROUTE_VERBS: ["get", "post", "put", "delete"], APP_EVENTS: ["run", "unload", "lookup-route", "run-route", "route-found", "event-context-before", "event-context-after", "changed", "error", "check-form-submission", "redirect", "location-changed"], _last_route: null, _location_proxy: null, _running: false, element_selector: "body", debug: false, raise_errors: false, run_interval_every: 50, disable_push_state: false, template_engine: null, toString: function () { return "Sammy.Application:" + this.element_selector }, $element: function (selector) { return selector ? $(this.element_selector).find(selector) : $(this.element_selector) }, use: function () { var args = _makeArray(arguments), plugin = args.shift(), plugin_name = plugin || ""; try { args.unshift(this); if (typeof plugin == "string") { plugin_name = "Sammy." + plugin; plugin = Sammy[plugin] } plugin.apply(this, args) } catch (e) { if (typeof plugin === "undefined") { this.error("Plugin Error: called use() but plugin (" + plugin_name.toString() + ") is not defined", e) } else if (!_isFunction(plugin)) { this.error("Plugin Error: called use() but '" + plugin_name.toString() + "' is not a function", e) } else { this.error("Plugin Error", e) } } return this }, setLocationProxy: function (new_proxy) { var original_proxy = this._location_proxy; this._location_proxy = new_proxy; if (this.isRunning()) { if (original_proxy) { original_proxy.unbind() } this._location_proxy.bind() } }, log: function () { Sammy.log.apply(Sammy, Array.prototype.concat.apply([this.element_selector], arguments)) }, route: function (verb, path) { var app = this, param_names = [], add_route, path_match, callback = Array.prototype.slice.call(arguments, 2); if (callback.length === 0 && _isFunction(path)) { callback = [path]; path = verb; verb = "any" } verb = verb.toLowerCase(); if (path.constructor == String) { PATH_NAME_MATCHER.lastIndex = 0; while ((path_match = PATH_NAME_MATCHER.exec(path)) !== null) { param_names.push(path_match[1]) } path = new RegExp(path.replace(PATH_NAME_MATCHER, PATH_REPLACER) + "$") } $.each(callback, function (i, cb) { if (typeof cb === "string") { callback[i] = app[cb] } }); add_route = function (with_verb) { var r = { verb: with_verb, path: path, callback: callback, param_names: param_names }; app.routes[with_verb] = app.routes[with_verb] || []; app.routes[with_verb].push(r) }; if (verb === "any") { $.each(this.ROUTE_VERBS, function (i, v) { add_route(v) }) } else { add_route(verb) } return this }, get: _routeWrapper("get"), post: _routeWrapper("post"), put: _routeWrapper("put"), del: _routeWrapper("delete"), any: _routeWrapper("any"), mapRoutes: function (route_array) { var app = this; $.each(route_array, function (i, route_args) { app.route.apply(app, route_args) }); return this }, eventNamespace: function () { return ["sammy-app", this.namespace].join("-") }, bind: function (name, data, callback) { var app = this; if (typeof callback == "undefined") { callback = data } var listener_callback = function () { var e, context, data; e = arguments[0]; data = arguments[1]; if (data && data.context) { context = data.context; delete data.context } else { context = new app.context_prototype(app, "bind", e.type, data, e.target) } e.cleaned_type = e.type.replace(app.eventNamespace(), ""); callback.apply(context, [e, data]) }; if (!this.listeners[name]) { this.listeners[name] = [] } this.listeners[name].push(listener_callback); if (this.isRunning()) { this._listen(name, listener_callback) } return this }, trigger: function (name, data) { this.$element().trigger([name, this.eventNamespace()].join("."), [data]); return this }, refresh: function () { this.last_location = null; this.trigger("location-changed"); return this }, before: function (options, callback) { if (_isFunction(options)) { callback = options; options = {} } this.befores.push([options, callback]); return this }, after: function (callback) { return this.bind("event-context-after", callback) }, around: function (callback) { this.arounds.push(callback); return this }, onComplete: function (callback) { this._onComplete = callback; return this }, isRunning: function () { return this._running }, helpers: function (extensions) { $.extend(this.context_prototype.prototype, extensions); return this }, helper: function (name, method) { this.context_prototype.prototype[name] = method; return this }, run: function (start_url) { if (this.isRunning()) { return false } var app = this; $.each(this.listeners.toHash(), function (name, callbacks) { $.each(callbacks, function (i, listener_callback) { app._listen(name, listener_callback) }) }); this.trigger("run", { start_url: start_url }); this._running = true; this.last_location = null; if (!/\#(.+)/.test(this.getLocation()) && typeof start_url != "undefined") { this.setLocation(start_url) } this._checkLocation(); this._location_proxy.bind(); this.bind("location-changed", function () { app._checkLocation() }); this.bind("submit", function (e) { if (!Sammy.targetIsThisWindow(e, "form")) { return true } var returned = app._checkFormSubmission($(e.target).closest("form")); return returned === false ? e.preventDefault() : false }); $(window).bind("unload", function () { app.unload() }); return this.trigger("changed") }, unload: function () { if (!this.isRunning()) { return false } var app = this; this.trigger("unload"); this._location_proxy.unbind(); this.$element().unbind("submit").removeClass(app.eventNamespace()); $.each(this.listeners.toHash(), function (name, listeners) { $.each(listeners, function (i, listener_callback) { app._unlisten(name, listener_callback) }) }); this._running = false; return this }, destroy: function () { this.unload(); delete Sammy.apps[this.element_selector]; return this }, bindToAllEvents: function (callback) { var app = this; $.each(this.APP_EVENTS, function (i, e) { app.bind(e, callback) }); $.each(this.listeners.keys(true), function (i, name) { if ($.inArray(name, app.APP_EVENTS) == -1) { app.bind(name, callback) } }); return this }, routablePath: function (path) { return path.replace(QUERY_STRING_MATCHER, "") }, lookupRoute: function (verb, path) { var app = this, routed = false, i = 0, l, route; if (typeof this.routes[verb] != "undefined") { l = this.routes[verb].length; for (; i < l; i++) { route = this.routes[verb][i]; if (app.routablePath(path).match(route.path)) { routed = route; break } } } return routed }, runRoute: function (verb, path, params, target) { var app = this, route = this.lookupRoute(verb, path), context, wrapped_route, arounds, around, befores, before, callback_args, path_params, final_returned; if (this.debug) { this.log("runRoute", [verb, path].join(" ")) } this.trigger("run-route", { verb: verb, path: path, params: params }); if (typeof params == "undefined") { params = {} } $.extend(params, this._parseQueryString(path)); if (route) { this.trigger("route-found", { route: route }); if ((path_params = route.path.exec(this.routablePath(path))) !== null) { path_params.shift(); $.each(path_params, function (i, param) { if (route.param_names[i]) { params[route.param_names[i]] = _decode(param) } else { if (!params.splat) { params.splat = [] } params.splat.push(_decode(param)) } }) } context = new this.context_prototype(this, verb, path, params, target); arounds = this.arounds.slice(0); befores = this.befores.slice(0); callback_args = [context]; if (params.splat) { callback_args = callback_args.concat(params.splat) } wrapped_route = function () { var returned, i, nextRoute; while (befores.length > 0) { before = befores.shift(); if (app.contextMatchesOptions(context, before[0])) { returned = before[1].apply(context, [context]); if (returned === false) { return false } } } app.last_route = route; context.trigger("event-context-before", { context: context }); if (typeof route.callback === "function") { route.callback = [route.callback] } if (route.callback && route.callback.length) { i = -1; nextRoute = function () { i++; if (route.callback[i]) { returned = route.callback[i].apply(context, callback_args) } else if (app._onComplete && typeof (app._onComplete === "function")) { app._onComplete(context) } }; callback_args.push(nextRoute); nextRoute() } context.trigger("event-context-after", { context: context }); return returned }; $.each(arounds.reverse(), function (i, around) { var last_wrapped_route = wrapped_route; wrapped_route = function () { return around.apply(context, [last_wrapped_route]) } }); try { final_returned = wrapped_route() } catch (e) { this.error(["500 Error", verb, path].join(" "), e) } return final_returned } else { return this.notFound(verb, path) } }, contextMatchesOptions: function (context, match_options, positive) { var options = match_options; if (typeof options === "string" || _isRegExp(options)) { options = { path: options } } if (typeof positive === "undefined") { positive = true } if ($.isEmptyObject(options)) { return true } if (_isArray(options.path)) { var results, numopt, opts, len; results = []; for (numopt = 0, len = options.path.length; numopt < len; numopt += 1) { opts = $.extend({}, options, { path: options.path[numopt] }); results.push(this.contextMatchesOptions(context, opts)) } var matched = $.inArray(true, results) > -1 ? true : false; return positive ? matched : !matched } if (options.only) { return this.contextMatchesOptions(context, options.only, true) } else if (options.except) { return this.contextMatchesOptions(context, options.except, false) } var path_matched = true, verb_matched = true; if (options.path) { if (!_isRegExp(options.path)) { options.path = new RegExp(options.path.toString() + "$") } path_matched = options.path.test(context.path) } if (options.verb) { if (typeof options.verb === "string") { verb_matched = options.verb === context.verb } else { verb_matched = options.verb.indexOf(context.verb) > -1 } } return positive ? verb_matched && path_matched : !(verb_matched && path_matched) }, getLocation: function () { return this._location_proxy.getLocation() }, setLocation: function (new_location) { return this._location_proxy.setLocation(new_location) }, swap: function (content, callback) { var $el = this.$element().html(content); if (_isFunction(callback)) { callback(content) } return $el }, templateCache: function (key, value) { if (typeof value != "undefined") { return _template_cache[key] = value } else { return _template_cache[key] } }, clearTemplateCache: function () { return _template_cache = {} }, notFound: function (verb, path) { var ret = this.error(["404 Not Found", verb, path].join(" ")); return verb === "get" ? ret : true }, error: function (message, original_error) { if (!original_error) { original_error = new Error } original_error.message = [message, original_error.message].join(" "); this.trigger("error", { message: original_error.message, error: original_error }); if (this.raise_errors) { throw original_error } else { this.log(original_error.message, original_error) } }, _checkLocation: function () { var location, returned; location = this.getLocation(); if (!this.last_location || this.last_location[0] != "get" || this.last_location[1] != location) { this.last_location = ["get", location]; returned = this.runRoute("get", location) } return returned }, _getFormVerb: function (form) { var $form = $(form), verb, $_method; $_method = $form.find('input[name="_method"]'); if ($_method.length > 0) { verb = $_method.val() } if (!verb) { verb = $form[0].getAttribute("method") } if (!verb || verb === "") { verb = "get" } return $.trim(verb.toString().toLowerCase()) }, _checkFormSubmission: function (form) { var $form, path, verb, params, returned; this.trigger("check-form-submission", { form: form }); $form = $(form); path = $form.attr("action") || ""; verb = this._getFormVerb($form); if (this.debug) { this.log("_checkFormSubmission", $form, path, verb) } if (verb === "get") { params = this._serializeFormParams($form); if (params !== "") { path += "?" + params } this.setLocation(path); returned = false } else { params = $.extend({}, this._parseFormParams($form)); returned = this.runRoute(verb, path, params, form.get(0)) } return typeof returned == "undefined" ? false : returned }, _serializeFormParams: function ($form) { var queryString = "", fields = $form.serializeArray(), i; if (fields.length > 0) { queryString = this._encodeFormPair(fields[0].name, fields[0].value); for (i = 1; i < fields.length; i++) { queryString = queryString + "&" + this._encodeFormPair(fields[i].name, fields[i].value) } } return queryString }, _encodeFormPair: function (name, value) { return _encode(name) + "=" + _encode(value) }, _parseFormParams: function ($form) { var params = {}, form_fields = $form.serializeArray(), i; for (i = 0; i < form_fields.length; i++) { params = this._parseParamPair(params, form_fields[i].name, form_fields[i].value) } return params }, _parseQueryString: function (path) { var params = {}, parts, pairs, pair, i; parts = path.match(QUERY_STRING_MATCHER); if (parts && parts[1]) { pairs = parts[1].split("&"); for (i = 0; i < pairs.length; i++) { pair = pairs[i].split("="); params = this._parseParamPair(params, _decode(pair[0]), _decode(pair[1] || "")) } } return params }, _parseParamPair: function (params, key, value) { if (typeof params[key] !== "undefined") { if (_isArray(params[key])) { params[key].push(value) } else { params[key] = [params[key], value] } } else { params[key] = value } return params }, _listen: function (name, callback) { return this.$element().bind([name, this.eventNamespace()].join("."), callback) }, _unlisten: function (name, callback) { return this.$element().unbind([name, this.eventNamespace()].join("."), callback) } }); Sammy.RenderContext = function (event_context) { this.event_context = event_context; this.callbacks = []; this.previous_content = null; this.content = null; this.next_engine = false; this.waiting = false }; Sammy.RenderContext.prototype = $.extend({}, Sammy.Object.prototype, { then: function (callback) { if (!_isFunction(callback)) { if (typeof callback === "string" && callback in this.event_context) { var helper = this.event_context[callback]; callback = function (content) { return helper.apply(this.event_context, [content]) } } else { return this } } var context = this; if (this.waiting) { this.callbacks.push(callback) } else { this.wait(); window.setTimeout(function () { var returned = callback.apply(context, [context.content, context.previous_content]); if (returned !== false) { context.next(returned) } }, 0) } return this }, wait: function () { this.waiting = true }, next: function (content) { this.waiting = false; if (typeof content !== "undefined") { this.previous_content = this.content; this.content = content } if (this.callbacks.length > 0) { this.then(this.callbacks.shift()) } }, load: function (location, options, callback) { var context = this; return this.then(function () { var should_cache, cached, is_json, location_array; if (_isFunction(options)) { callback = options; options = {} } else { options = $.extend({}, options) } if (callback) { this.then(callback) } if (typeof location === "string") { is_json = location.match(/\.json(\?|$)/) || options.json; should_cache = is_json ? options.cache === true : options.cache !== false; context.next_engine = context.event_context.engineFor(location); delete options.cache; delete options.json; if (options.engine) { context.next_engine = options.engine; delete options.engine } if (should_cache && (cached = this.event_context.app.templateCache(location))) { return cached } this.wait(); $.ajax($.extend({ url: location, data: {}, dataType: is_json ? "json" : "text", type: "get", success: function (data) { if (should_cache) { context.event_context.app.templateCache(location, data) } context.next(data) } }, options)); return false } else { if (location.nodeType) { return location.innerHTML } if (location.selector) { context.next_engine = location.attr("data-engine"); if (options.clone === false) { return location.remove()[0].innerHTML.toString() } else { return location[0].innerHTML.toString() } } } }) }, loadPartials: function (partials) { var name; if (partials) { this.partials = this.partials || {}; for (name in partials) { (function (context, name) { context.load(partials[name]).then(function (template) { this.partials[name] = template }) })(this, name) } } return this }, render: function (location, data, callback, partials) { if (_isFunction(location) && !data) { return this.then(location) } else { if (_isFunction(data)) { partials = callback; callback = data; data = null } else if (callback && !_isFunction(callback)) { partials = callback; callback = null } return this.loadPartials(partials).load(location).interpolate(data, location).then(callback) } }, partial: function (location, data, callback, partials) { if (_isFunction(callback)) { return this.render(location, data, partials).swap(callback) } else if (_isFunction(data)) { return this.render(location, {}, callback).swap(data) } else { return this.render(location, data, callback).swap() } }, send: function () { var context = this, args = _makeArray(arguments), fun = args.shift(); if (_isArray(args[0])) { args = args[0] } return this.then(function (content) { args.push(function (response) { context.next(response) }); context.wait(); fun.apply(fun, args); return false }) }, collect: function (array, callback, now) { var context = this; var coll = function () { if (_isFunction(array)) { callback = array; array = this.content } var contents = [], doms = false; $.each(array, function (i, item) { var returned = callback.apply(context, [i, item]); if (returned.jquery && returned.length == 1) { returned = returned[0]; doms = true } contents.push(returned); return returned }); return doms ? contents : contents.join("") }; return now ? coll() : this.then(coll) }, renderEach: function (location, name, data, callback) { if (_isArray(name)) { callback = data; data = name; name = null } return this.load(location).then(function (content) { var rctx = this; if (!data) { data = _isArray(this.previous_content) ? this.previous_content : [] } if (callback) { $.each(data, function (i, value) { var idata = {}, engine = this.next_engine || location; if (name) { idata[name] = value } else { idata = value } callback(value, rctx.event_context.interpolate(content, idata, engine)) }) } else { return this.collect(data, function (i, value) { var idata = {}, engine = this.next_engine || location; if (name) { idata[name] = value } else { idata = value } return this.event_context.interpolate(content, idata, engine) }, true) } }) }, interpolate: function (data, engine, retain) { var context = this; return this.then(function (content, prev) { if (!data && prev) { data = prev } if (this.next_engine) { engine = this.next_engine; this.next_engine = false } var rendered = context.event_context.interpolate(content, data, engine, this.partials); return retain ? prev + rendered : rendered }) }, swap: function (callback) { return this.then(function (content) { this.event_context.swap(content, callback); return content }).trigger("changed", {}) }, appendTo: function (selector) { return this.then(function (content) { $(selector).append(content) }).trigger("changed", {}) }, prependTo: function (selector) { return this.then(function (content) { $(selector).prepend(content) }).trigger("changed", {}) }, replace: function (selector) { return this.then(function (content) { $(selector).html(content) }).trigger("changed", {}) }, trigger: function (name, data) { return this.then(function (content) { if (typeof data == "undefined") { data = { content: content } } this.event_context.trigger(name, data); return content }) } }); Sammy.EventContext = function (app, verb, path, params, target) { this.app = app; this.verb = verb; this.path = path; this.params = new Sammy.Object(params); this.target = target }; Sammy.EventContext.prototype = $.extend({}, Sammy.Object.prototype, { $element: function () { return this.app.$element(_makeArray(arguments).shift()) }, engineFor: function (engine) { var context = this, engine_match; if (_isFunction(engine)) { return engine } engine = (engine || context.app.template_engine).toString(); if (engine_match = engine.match(/\.([^\.\?\#]+)(\?|$)/)) { engine = engine_match[1] } if (engine && _isFunction(context[engine])) { return context[engine] } if (context.app.template_engine) { return this.engineFor(context.app.template_engine) } return function (content, data) { return content } }, interpolate: function (content, data, engine, partials) { return this.engineFor(engine).apply(this, [content, data, partials]) }, render: function (location, data, callback, partials) { return new Sammy.RenderContext(this).render(location, data, callback, partials) }, renderEach: function (location, name, data, callback) { return new Sammy.RenderContext(this).renderEach(location, name, data, callback) }, load: function (location, options, callback) { return new Sammy.RenderContext(this).load(location, options, callback) }, loadPartials: function (partials) { return new Sammy.RenderContext(this).loadPartials(partials) }, partial: function (location, data, callback, partials) { return new Sammy.RenderContext(this).partial(location, data, callback, partials) }, send: function () { var rctx = new Sammy.RenderContext(this); return rctx.send.apply(rctx, arguments) }, redirect: function () { var to, args = _makeArray(arguments), current_location = this.app.getLocation(), l = args.length; if (l > 1) { var i = 0, paths = [], pairs = [], params = {}, has_params = false; for (; i < l; i++) { if (typeof args[i] == "string") { paths.push(args[i]) } else { $.extend(params, args[i]); has_params = true } } to = paths.join("/"); if (has_params) { for (var k in params) { pairs.push(this.app._encodeFormPair(k, params[k])) } to += "?" + pairs.join("&") } } else { to = args[0] } this.trigger("redirect", { to: to }); this.app.last_location = [this.verb, this.path]; this.app.setLocation(to); if (new RegExp(to).test(current_location)) { this.app.trigger("location-changed") } }, trigger: function (name, data) { if (typeof data == "undefined") { data = {} } if (!data.context) { data.context = this } return this.app.trigger(name, data) }, eventNamespace: function () { return this.app.eventNamespace() }, swap: function (contents, callback) { return this.app.swap(contents, callback) }, notFound: function () { return this.app.notFound(this.verb, this.path) }, json: function (string) { return $.parseJSON(string) }, toString: function () { return "Sammy.EventContext: " + [this.verb, this.path, this.params].join(" ") } }); return Sammy });

/*
* jQuery File Download Plugin v1.4.4
*
* http://www.johnculviner.com
*
* Copyright (c) 2013 - John Culviner
*
* Licensed under the MIT license:
*   http://www.opensource.org/licenses/mit-license.php
*
* !!!!NOTE!!!!
* You must also write a cookie in conjunction with using this plugin as mentioned in the orignal post:
* http://johnculviner.com/jquery-file-download-plugin-for-ajax-like-feature-rich-file-downloads/
* !!!!NOTE!!!!
*/

(function($, window){
	// i'll just put them here to get evaluated on script load
	var htmlSpecialCharsRegEx = /[<>&\r\n"']/gm;
	var htmlSpecialCharsPlaceHolders = {
				'<': 'lt;',
				'>': 'gt;',
				'&': 'amp;',
				'\r': "#13;",
				'\n': "#10;",
				'"': 'quot;',
				"'": '#39;' /*single quotes just to be safe, IE8 doesn't support &apos;, so use &#39; instead */
	};

$.extend({
    //
    //$.fileDownload('/path/to/url/', options)
    //  see directly below for possible 'options'
    fileDownload: function (fileUrl, options) {

        //provide some reasonable defaults to any unspecified options below
        var settings = $.extend({

            //
            //Requires jQuery UI: provide a message to display to the user when the file download is being prepared before the browser's dialog appears
            //
            preparingMessageHtml: null,

            //
            //Requires jQuery UI: provide a message to display to the user when a file download fails
            //
            failMessageHtml: null,

            //
            //the stock android browser straight up doesn't support file downloads initiated by a non GET: http://code.google.com/p/android/issues/detail?id=1780
            //specify a message here to display if a user tries with an android browser
            //if jQuery UI is installed this will be a dialog, otherwise it will be an alert
            //Set to null to disable the message and attempt to download anyway
            //
            androidPostUnsupportedMessageHtml: "Unfortunately your Android browser doesn't support this type of file download. Please try again with a different browser.",

            //
            //Requires jQuery UI: options to pass into jQuery UI Dialog
            //
            dialogOptions: { modal: true },

            //
            //a function to call while the dowload is being prepared before the browser's dialog appears
            //Args:
            //  url - the original url attempted
            //
            prepareCallback: function (url) { },

            //
            //a function to call after a file download dialog/ribbon has appeared
            //Args:
            //  url - the original url attempted
            //
            successCallback: function (url) { },

            //
            //a function to call after a file download dialog/ribbon has appeared
            //Args:
            //  responseHtml    - the html that came back in response to the file download. this won't necessarily come back depending on the browser.
            //                      in less than IE9 a cross domain error occurs because 500+ errors cause a cross domain issue due to IE subbing out the
            //                      server's error message with a "helpful" IE built in message
            //  url             - the original url attempted
            //  error           - original error cautch from exception
            //
            failCallback: function (responseHtml, url, error) { },

            //
            // the HTTP method to use. Defaults to "GET".
            //
            httpMethod: "GET",

            //
            // if specified will perform a "httpMethod" request to the specified 'fileUrl' using the specified data.
            // data must be an object (which will be $.param serialized) or already a key=value param string
            //
            data: null,

            //
            //a period in milliseconds to poll to determine if a successful file download has occured or not
            //
            checkInterval: 100,

            //
            //the cookie name to indicate if a file download has occured
            //
            cookieName: "fileDownload",

            //
            //the cookie value for the above name to indicate that a file download has occured
            //
            cookieValue: "true",

            //
            //the cookie path for above name value pair
            //
            cookiePath: "/",

            //
            //if specified it will be used when attempting to clear the above name value pair
            //useful for when downloads are being served on a subdomain (e.g. downloads.example.com)
            //
            cookieDomain: null,

            //
            //the title for the popup second window as a download is processing in the case of a mobile browser
            //
            popupWindowTitle: "Initiating file download...",

            //
            //Functionality to encode HTML entities for a POST, need this if data is an object with properties whose values contains strings with quotation marks.
            //HTML entity encoding is done by replacing all &,<,>,',",\r,\n characters.
            //Note that some browsers will POST the string htmlentity-encoded whilst others will decode it before POSTing.
            //It is recommended that on the server, htmlentity decoding is done irrespective.
            //
            encodeHTMLEntities: true

        }, options);

        var deferred = new $.Deferred();

        //Setup mobile browser detection: Partial credit: http://detectmobilebrowser.com/
        var userAgent = (navigator.userAgent || navigator.vendor || window.opera).toLowerCase();

        var isIos;                  //has full support of features in iOS 4.0+, uses a new window to accomplish this.
        var isAndroid;              //has full support of GET features in 4.0+ by using a new window. Non-GET is completely unsupported by the browser. See above for specifying a message.
        var isOtherMobileBrowser;   //there is no way to reliably guess here so all other mobile devices will GET and POST to the current window.

        if (/ip(ad|hone|od)/.test(userAgent)) {

            isIos = true;

        } else if (userAgent.indexOf('android') !== -1) {

            isAndroid = true;

        } else {

            isOtherMobileBrowser = /avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|playbook|silk|iemobile|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(userAgent.substr(0, 4));

        }

        var httpMethodUpper = settings.httpMethod.toUpperCase();

        if (isAndroid && httpMethodUpper !== "GET" && settings.androidPostUnsupportedMessageHtml) {
            //the stock android browser straight up doesn't support file downloads initiated by non GET requests: http://code.google.com/p/android/issues/detail?id=1780

            if ($().dialog) {
                $("<div>").html(settings.androidPostUnsupportedMessageHtml).dialog(settings.dialogOptions);
            } else {
                alert(settings.androidPostUnsupportedMessageHtml);
            }

            return deferred.reject();
        }

        var $preparingDialog = null;

        var internalCallbacks = {

            onPrepare: function (url) {

                //wire up a jquery dialog to display the preparing message if specified
                if (settings.preparingMessageHtml) {

                    $preparingDialog = $("<div>").html(settings.preparingMessageHtml).dialog(settings.dialogOptions);

                } else if (settings.prepareCallback) {

                    settings.prepareCallback(url);

                }

            },

            onSuccess: function (url) {

                //remove the perparing message if it was specified
                if ($preparingDialog) {
                    $preparingDialog.dialog('close');
                }

                settings.successCallback(url);

                deferred.resolve(url);
            },

            onFail: function (responseHtml, url, error) {

                //remove the perparing message if it was specified
                if ($preparingDialog) {
                    $preparingDialog.dialog('close');
                }

                //wire up a jquery dialog to display the fail message if specified
                if (settings.failMessageHtml) {
                    $("<div>").html(settings.failMessageHtml).dialog(settings.dialogOptions);
                }

                settings.failCallback(responseHtml, url, error);

                deferred.reject(responseHtml, url);
            }
        };

        internalCallbacks.onPrepare(fileUrl);

        //make settings.data a param string if it exists and isn't already
        if (settings.data !== null && typeof settings.data !== "string") {
            settings.data = $.param(settings.data);
        }


        var $iframe,
            downloadWindow,
            formDoc,
            $form;

        if (httpMethodUpper === "GET") {

            if (settings.data !== null) {
                //need to merge any fileUrl params with the data object

                var qsStart = fileUrl.indexOf('?');

                if (qsStart !== -1) {
                    //we have a querystring in the url

                    if (fileUrl.substring(fileUrl.length - 1) !== "&") {
                        fileUrl = fileUrl + "&";
                    }
                } else {

                    fileUrl = fileUrl + "?";
                }

                fileUrl = fileUrl + settings.data;
            }

            if (isIos || isAndroid) {

                downloadWindow = window.open(fileUrl);
                downloadWindow.document.title = settings.popupWindowTitle;
                window.focus();

            } else if (isOtherMobileBrowser) {

                window.location(fileUrl);

            } else {

                //create a temporary iframe that is used to request the fileUrl as a GET request
                $iframe = $("<iframe>")
                    .hide()
                    .prop("src", fileUrl)
                    .appendTo("body");
            }

        } else {

            var formInnerHtml = "";

            if (settings.data !== null) {
                $.each(settings.data.replace(/\+/g, ' ').split("&"), function () {

                    var kvp = this.split("=");

                    //Issue: When value contains sign '=' then the kvp array does have more than 2 items. We have to join value back
                    var k = kvp[0];
                    kvp.shift();
                    var v = kvp.join("=");
                    kvp = [k, v];

                    var key = settings.encodeHTMLEntities ? htmlSpecialCharsEntityEncode(decodeURIComponent(kvp[0])) : decodeURIComponent(kvp[0]);
                    if (key) {
                        var value = settings.encodeHTMLEntities ? htmlSpecialCharsEntityEncode(decodeURIComponent(kvp[1])) : decodeURIComponent(kvp[1]);
                    formInnerHtml += '<input type="hidden" name="' + key + '" value="' + value + '" />';
                    }
                });
            }

            if (isOtherMobileBrowser) {

                $form = $("<form>").appendTo("body");
                $form.hide()
                    .prop('method', settings.httpMethod)
                    .prop('action', fileUrl)
                    .html(formInnerHtml);

            } else {

                if (isIos) {

                    downloadWindow = window.open("about:blank");
                    downloadWindow.document.title = settings.popupWindowTitle;
                    formDoc = downloadWindow.document;
                    window.focus();

                } else {

                    $iframe = $("<iframe style='display: none' src='about:blank'></iframe>").appendTo("body");
                    formDoc = getiframeDocument($iframe);
                }

                formDoc.write("<html><head></head><body><form method='" + settings.httpMethod + "' action='" + fileUrl + "'>" + formInnerHtml + "</form>" + settings.popupWindowTitle + "</body></html>");
                $form = $(formDoc).find('form');
            }

            $form.submit();
        }


        //check if the file download has completed every checkInterval ms
        setTimeout(checkFileDownloadComplete, settings.checkInterval);


        function checkFileDownloadComplete() {
            //has the cookie been written due to a file download occuring?

            var cookieValue = settings.cookieValue;
            if(typeof cookieValue == 'string') {
                cookieValue = cookieValue.toLowerCase();
            }

            var lowerCaseCookie = settings.cookieName.toLowerCase() + "=" + cookieValue;

            if (document.cookie.toLowerCase().indexOf(lowerCaseCookie) > -1) {

                //execute specified callback
                internalCallbacks.onSuccess(fileUrl);

                //remove cookie
                var cookieData = settings.cookieName + "=; path=" + settings.cookiePath + "; expires=" + new Date(0).toUTCString() + ";";
                if (settings.cookieDomain) cookieData += " domain=" + settings.cookieDomain + ";";
                document.cookie = cookieData;

                //remove iframe
                cleanUp(false);

                return;
            }

            //has an error occured?
            //if neither containers exist below then the file download is occuring on the current window
            if (downloadWindow || $iframe) {

                //has an error occured?
                try {

                    var formDoc = downloadWindow ? downloadWindow.document : getiframeDocument($iframe);

                    if (formDoc && formDoc.body !== null && formDoc.body.innerHTML.length) {

                        var isFailure = true;

                        if ($form && $form.length) {
                            var $contents = $(formDoc.body).contents().first();

                            try {
                                if ($contents.length && $contents[0] === $form[0]) {
                                    isFailure = false;
                                }
                            } catch (e) {
                                if (e && e.number == -2146828218) {
                                    // IE 8-10 throw a permission denied after the form reloads on the "$contents[0] === $form[0]" comparison
                                    isFailure = true;
                                } else {
                                    throw e;
                                }
                            }
                        }

                        if (isFailure) {
                            // IE 8-10 don't always have the full content available right away, they need a litle bit to finish
                            setTimeout(function () {
                                internalCallbacks.onFail(formDoc.body.innerHTML, fileUrl);
                                cleanUp(true);
                            }, 100);

                            return;
                        }
                    }
                }
                catch (err) {

                    //500 error less than IE9
                    internalCallbacks.onFail('', fileUrl, err);

                    cleanUp(true);

                    return;
                }
            }


            //keep checking...
            setTimeout(checkFileDownloadComplete, settings.checkInterval);
        }

        //gets an iframes document in a cross browser compatible manner
        function getiframeDocument($iframe) {
            var iframeDoc = $iframe[0].contentWindow || $iframe[0].contentDocument;
            if (iframeDoc.document) {
                iframeDoc = iframeDoc.document;
            }
            return iframeDoc;
        }

        function cleanUp(isFailure) {

            setTimeout(function() {

                if (downloadWindow) {

                    if (isAndroid) {
                        downloadWindow.close();
                    }

                    if (isIos) {
                        if (downloadWindow.focus) {
                            downloadWindow.focus(); //ios safari bug doesn't allow a window to be closed unless it is focused
                            if (isFailure) {
                                downloadWindow.close();
                            }
                        }
                    }
                }

                //iframe cleanup appears to randomly cause the download to fail
                //not doing it seems better than failure...
                //if ($iframe) {
                //    $iframe.remove();
                //}

            }, 0);
        }


        function htmlSpecialCharsEntityEncode(str) {
            return str.replace(htmlSpecialCharsRegEx, function(match) {
                return '&' + htmlSpecialCharsPlaceHolders[match];
        	});
        }
        var promise = deferred.promise();
        promise.abort = function() {
            cleanUp();
            $iframe.remove();
        };
        return promise;
    }
});

})(jQuery, this);


// Visible alternative
ko.bindingHandlers['slideVisible'] = {
    init: function (element, valueAccessor) {
        var value = valueAccessor();
        $(element).toggle(ko.unwrap(value));
    },
    update: function (element, valueAccessor) {
        var value = valueAccessor();
        ko.unwrap(value) ? $(element).slideDown() : $(element).slideUp();
    }
};

// Visible alternative
ko.bindingHandlers['slideLateral'] = {
    init: function (element, valueAccessor) {
        var value = valueAccessor();
        $(element).toggle(ko.unwrap(value));
    },
    update: function (element, valueAccessor) {
        var value = valueAccessor();
        ko.unwrap(value) ? $(element).show("slide", { direction: "right" }, 1000) : $(element).hide("slide", { direction: "left" }, 1000);
    }
};

// Bind numeric text 
ko.bindingHandlers['numericText'] = {
    init: function (element, valueAccessor, allBindingsAccessor) {
        ko.utils.registerEventHandler(element, "keypress", function (event) {
            var isValid = onlyRealNumbersChars(event);
            if (!isValid) {
                event.preventDefault();
            }
        });

        ko.utils.registerEventHandler(element, "change", function (event) {
            var value = valueAccessor();
            var inputValue = event.target.value;

            value(inputValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();

        if (!App.Core.IsNullOrUndefined(value)) {
            var decimal = App.Core.ParseNumber(value);

            if (isNaN(decimal)) {
                valueAccessor()(null);
                element.value = "";
            } else {
                decimal = Math.round(decimal * 100) / 100;

                if (ko.isObservable(valueAccessor()))
                    valueAccessor()(decimal);

                if (typeof element.type === "undefined") {
                    element.innerHTML = App.Core.FormatNumber(decimal);
                } else {
                    element.value = App.Core.FormatNumber(decimal);
                }
            }
        } else {
            valueAccessor()(null);
            element.value = "";
        }
    }
};

ko.bindingHandlers['numeric'] = {

    init: function (element, valueAccessor) {

        $(element).on("keydown", function (event) {

            // Allow: backspace, delete, tab, escape, and enter

            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||

                // Allow: Ctrl+A

            (event.keyCode == 65 && event.ctrlKey === true) ||

                // Allow: F5

            (event.keyCode == 116) ||

                // Allow: home, end, left, right

            (event.keyCode >= 35 && event.keyCode <= 39)) {

                // let it happen, don't do anything

                return;

            }

            else {

                // Ensure that it is a number and stop the keypress

                if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {

                    event.preventDefault();

                }

            }

        });

    }

};

ko.bindingHandlers['valueAsInt'] = {

    init: function (element, valueAccessor, allBindingsAccessor) {

        var observable = valueAccessor(),

        interceptor = ko.computed({

            read: function () {

                var val = ko.utils.unwrapObservable(observable);

                return (observable() ? observable().toString() : observable());

            },

            write: function (newValue) {

                observable(newValue ? parseInt(newValue, 10) : undefined);

            },

            owner: this

        });

        ko.applyBindingsToNode(element, { value: interceptor });

    }

};


// Binding numeric text with dot for thousands separator
ko.bindingHandlers['numericTextSeparator'] = {
    init: function (element, valueAccessor, allBindingsAccessor) {
        ko.utils.registerEventHandler(element, "keypress", function (event) {
            var isValid = onlyRealNumbersChars(event);
            if (!isValid) {
                event.preventDefault();
            }
        });

        ko.utils.registerEventHandler(element, "change", function (event) {
            var value = valueAccessor();
            var inputValue = event.target.value;

            value(inputValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();

        if (!App.Core.IsNullOrUndefined(value)) {
            var decimal = App.Core.ParseNumber(value);

            if (isNaN(decimal)) {
                valueAccessor()(null);
                element.value = "";
            } else {
                decimal = Math.round(decimal * 100) / 100;

                if (ko.isObservable(valueAccessor()))
                    valueAccessor()(decimal);

                if (typeof element.type === "undefined") {
                    element.innerHTML = App.Core.FormatNumberSeparation(decimal);
                } else {
                    element.value = App.Core.FormatNumberSeparation(decimal);
                }
            }
        } else {
            element.value = "";
        }
    }
};

// Bind date, store a javascript Date in the observable property and show date in italian format
ko.bindingHandlers['dateText'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        ko.utils.registerEventHandler(element, "change", function () {
            var value = valueAccessor();
            
            var viewModelValue = App.Core.IsNullOrEmpty(element.value) ?
                "" :
                App.Core.ParseDate(element.value.trim());
            
            value(viewModelValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();

        var viewModelValue = App.Core.IsNullOrUndefined(value) || value == '' ?
            "" :
            App.Core.FormatDate(value);

        if (typeof element.type === "undefined" || element.type === "") {
            element.innerHTML = viewModelValue;
        } else {
            element.value = viewModelValue;
        }
    }
};

// Bind datetime, store a javascript Date in the observable property and show date in italian format
ko.bindingHandlers['dateTimeText'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        ko.utils.registerEventHandler(element, "change", function () {
            var value = valueAccessor();
            var viewModelValue = App.Core.IsNullOrEmpty(element.value) ?
                "" :
                App.Core.ParseDateTimeFormatted(element.value.trim(), "DD/MM/YYYY HH:mm", "DD/MM/YY HH:mm");
            value(viewModelValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();
        var viewModelValue = App.Core.IsNullOrUndefined(value) ?
            "" :
            moment(value).format("DD/MM/YYYY HH:mm");

        if (typeof element.type === "undefined" || element.type === "") {
            element.innerHTML = viewModelValue;
        } else {
            element.value = viewModelValue;
        }
    }
};

// Bind datetime esteso a hh:mm:ss
ko.bindingHandlers['dateTime2Text'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        ko.utils.registerEventHandler(element, "change", function () {
            var value = valueAccessor();
            var viewModelValue = App.Core.IsNullOrEmpty(element.value) ?
                "" :
                App.Core.ParseDateTimeFormatted(element.value.trim(), "DD/MM/YYYY HH:mm:ss", "DD/MM/YY HH:mm:ss");
            value(viewModelValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();
        var viewModelValue = App.Core.IsNullOrUndefined(value) ?
            "" :
            moment(value).format("DD/MM/YYYY HH:mm:ss");

        if (typeof element.type === "undefined" || element.type === "") {
            element.innerHTML = viewModelValue;
        } else {
            element.value = viewModelValue;
        }
    }
};

// Generate a unique identifier for a tag
ko.bindingHandlers['uniqueId'] = {
    init: function (element, valueAccessor) {
        var value = valueAccessor();
        var identifier = value.id || ko.bindingHandlers.uniqueId.prefix + (++ko.bindingHandlers.uniqueId.counter);

        element.id = identifier;
        value(identifier);
    },
    counter: 0,
    prefix: "ko_unique_"
};

// Enable all children
ko.bindingHandlers['enableChildren'] = {
    'update': function (element, valueAccessor) {
        var value = ko.utils.unwrapObservable(valueAccessor());

        if (value && element.disabled) {
            element.removeAttribute('disabled');
            $(element).find('*').removeAttr('disabled');
        } else if ((!value) && (!element.disabled)) {
            element.disabled = true;
            $(element).find('*').attr('disabled', 'disabled');
        }
    }
};

// Disable all children
ko.bindingHandlers['disableChildren'] = {
    'update': function (element, valueAccessor) {
        ko.bindingHandlers['enableChildren']['update'](element, function () { return !ko.utils.unwrapObservable(valueAccessor()) });
    }
};

ko.bindingHandlers['cbiText'] = {
    init: function (element, valueAccessor, allBindingsAccessor) {
        ko.utils.registerEventHandler(element, "keypress", function (event) {
            if (!cbiValidation(event)) {
                event.preventDefault();
            }
        });

        ko.utils.registerEventHandler(element, "change", function (event) {
            var value = valueAccessor();
            var inputValue = event.target.value;

            value(inputValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();
        
        if (typeof element.type === "undefined" || element.type === "") {
            element.innerHTML = value;
        } else {
            element.value = value;
        }
    }
}

// Binding uppercase text
ko.bindingHandlers['uppercaseText'] = {
    init: function (element, valueAccessor, allBindingsAccessor) {
        ko.utils.registerEventHandler(element, "keyup", function (event) {
            var value = valueAccessor();
            var inputValue = event.target.value;

            value(inputValue);
        });

        var observable = valueAccessor(),

            interceptor = ko.computed({

                read: function () {

                    var val = ko.utils.unwrapObservable(observable);

                    return (observable() ? observable().toString() : observable());

                },

                write: function (newValue) {

                    observable(newValue ? newValue.toUpperCase() : '');

                },

                owner: this

            });

        ko.applyBindingsToNode(element, { value: interceptor });
    },
    update: function (element, valueAccessor, allBindingsAccessor) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();
        
        if (element.tagName == "INPUT") {
            var start = element.selectionStart;
            var end = element.selectionEnd;
        }


        if (!App.Core.IsNullOrUndefined(value)) {
            var uppercase = value.toUpperCase();

            if (ko.isObservable(valueAccessor()))
                valueAccessor()(uppercase);

            if (typeof element.type === "undefined") {
                element.innerHTML = uppercase;
            } else {
                element.value = uppercase;
            }

            if (element.tagName == "INPUT") {
                element.setSelectionRange(start, end); // reset cursor position
            }

        } else {
            valueAccessor()(null);
            element.value = "";
        }
    }
};

/*
ko.bindingHandlers['uppercaseText'] = {
    init: function (element, valueAccessor, allBindings, viewModel, bindingContext) {
        ko.bindingHandlers["value"].init(element, valueAccessor, allBindings);
    },
    update: function (element, valueAccessor, allBindings, viewModel, bindingContext) {

        var newValue = ko.utils.unwrapObservable(valueAccessor()) || "";
        
        if (element.tagName == "INPUT") {
            var start = element.selectionStart;
            var end = element.selectionEnd;
        }

        ko.selectExtensions.writeValue(element, newValue); // set element value

        if (element.tagName == "INPUT") {
            element.setSelectionRange(start, end); // reset cursor position
        }
    }
};
*/

function cbiValidation(e) {
    var keyCode;
    var cbiValidChars = /^[0-9a-zA-Z\/\-\?:\(\)\.,'\+ ]+$/;

    var charCode = (event.which) ? event.which : event.keyCode;
    var charValue = String.fromCharCode(keyCode);
    return charCode > 31 && cbiValidChars.test(charValue);
}
// get value of a element check if it is observable
var _getRealValue = function (element) {
    return ko.isObservable(element) ?
        element() :
        element;
}

var _getValueByKey = function (item, key) {
    if (key.indexOf('.') != -1) {
        var keys = key.split('.');
        var result = '';

        keys.forEach(function(key) {
            if (result) {
                result = _getRealValue(result[key]);
            } else {
                result = _getRealValue(item[key]);
            }
        });

        return result;
    } else {
        return _getRealValue(item[key]);
    }
}

// make distinct operation on property values
var _arrayGetDistinctPropertyValues = function (array, property) {
    array = array || [];
    property = property || 0;

    return ko.utils
             .arrayGetDistinctValues(ko.utils
                                       .arrayMap(array, function (item) {
                                           return _getRealValue(item[property]);
                                       }));
};

// make distinct operation in property values and return the first object matching with that value
var _arrayGetDistinctValuesBy = function (array, property) {
    array = array || [];
    property = property || 0;
    var result = [];

    var values = _arrayGetDistinctPropertyValues(array, property);

    ko.utils.arrayForEach(values, function (value) {
        result.push(ko.utils.arrayFirst(array, function (item) {
            return _getRealValue(item[property]) === value;
        }));
    });

    return result;
};

// Group element of an array based on returned element for the function f
//var result = groupBy(list, function (item) {
//    return [item.lastname, item.age];
//});
var _arrayGroupBy = function (array, f) {
    var groups = {};

    var normalizedArray = ko.toJS(array);

    ko.utils.arrayForEach(normalizedArray, function (item) {
        var group = ko.toJSON(f(item));
        groups[group] = groups[group] || [];
        groups[group].push(item);
    });
    return Object.keys(groups).map(function (group) {
        return groups[group];
    })
}

// Sum 
var _arraySum = function (array, f) {
    var normalizedArray = ko.toJS(array);

    if (typeof f !== 'function') {
        f = function (item) {
            return item;
        }
    }

    var sum = 0;
    for (var i = 0; i < normalizedArray.length; i++) {
        sum += parseFloat(f(normalizedArray[i]));
    }

    return sum;
};

var _arrayCount = function () {
    var ret = 0;
    var arrayContent = this();

    if (arrayContent) {
        ret = arrayContent.length;
    }

    return ret;
};

var _getResource = function (resource) {
    return _getValueByKey(Resources, resource);
};

// public method
ko.utils.arrayGetDistinctPropertyValues = _arrayGetDistinctPropertyValues;
ko.utils.arrayGetDistinctValuesBy = _arrayGetDistinctValuesBy;
ko.utils.arrayGroupBy = _arrayGroupBy;
ko.utils.arraySum = _arraySum;
ko.utils.getValueByKey = _getValueByKey;
ko.utils.GetResource = _getResource;
ko.observableArray.fn.count = _arrayCount;
var PropertySelector = function (obj, dottedPropertyName) {
    var splitted = dottedPropertyName.split(".");

    var temp = obj[splitted[0]];
    for (var i = 1; i < splitted.length; i++) {
        temp = temp[splitted[i]];
    }

    return temp;
}


ko.observableArray.fn.sortAscProperty = function (prop) {
    this.sort(function (obj1, obj2) {
        if (PropertySelector(obj1, prop) >= PropertySelector(obj2, prop))
            return 1;
        else
            return -1;
    });
}

ko.observableArray.fn.sortDescProperty = function (prop) {
    this.sort(function (obj1, obj2) {
        if (PropertySelector(obj1, prop) <= PropertySelector(obj2, prop))
            return 1;
        else
            return -1;
    });
}

ko.observableArray.fn.sortAscObservableProperty = function (prop) {
    this.sort(function (obj1, obj2) {
        if (PropertySelector(obj1, prop)() >= PropertySelector(obj2, prop)())
            return 1;
        else
            return -1;
    });
}

ko.observableArray.fn.sortDescObservableProperty = function (prop) {
    this.sort(function (obj1, obj2) {
        if (PropertySelector(obj1, prop)() <= PropertySelector(obj2, prop)())
            return 1;
        else
            return -1;
    });
}
//NB: dependency of this Utils
//knockoutjs
//moment.js
//jQuery
var App;
(function (App) {
    (function (Core) {
        Core.PagedObservableArray = function (options) {
            options = options || {};

            var
            //the complete data collection
            _allData = ko.observableArray(options.allData || []),

            //the size of the pages to display
            _pageSize = ko.observable(options.pageSize || 10),

            //array to change page size
            _pageSizeDropDown = options.pageSizeDropDown || [],

            //text to search in all elements of _allData
            _cercaText = ko.observable(options.cercaText || ''),

            //current sort property
            _currentSort = ko.observable(options.currentSort || ''),

            //current sort direction
            _currentSortIsAsc = ko.observable(options.currentSortIsAsc || true),

            //the index of the current page
            _pageIndex = ko.observable(1),

            //the number of pages
            _pageCount = ko.observable(1),

            //the current page data
            _page = ko.computed(function () {
                var cercaText = _cercaText().toLowerCase(),
                    allData = ko.toJS(_allData) || [];

                if (cercaText) {
                    // reset start index
                    _pageIndex(1);
                    // filter
                    allData = ko.utils.arrayFilter(allData, function (item) {
                        var retThisItem = false;
                        var recursiveFullTextSearch = function (item) {

                            $.each(item, function (i, n) {
                                if (retThisItem) {
                                    //break jquery each 
                                    return false;
                                }

                                if (n !== null && typeof n === "object") {
                                    recursiveFullTextSearch(n);
                                } else {
                                    retThisItem = evalThisItem(n);
                                }
                            });
                        };
                        var evalThisItem = function (property) {
                            var value = "";
                            try {
                                // to avoid rsa.js bug
                                value = (typeof property === "function" ? property() : property) || '';
                            } catch (e) {
                                console.log(e);
                            }

                            var stringValue = value instanceof Date ?
                                moment(value).format("DD/MM/YYYY") :
                                value.toString();

                            return stringValue.toLowerCase().indexOf(cercaText) > -1;
                        }

                        // Recursive call to analyze nested javascript object
                        recursiveFullTextSearch(item);

                        return retThisItem;
                    });
                }

                var pageSize = _pageSize(),
                    pageIndex = _pageIndex() - 1,
                    startIndex = pageSize * pageIndex,
                    endIndex = pageSize * (pageIndex + 1);

                // update page count
                _pageCount(Math.ceil(allData.length / _pageSize()) || 1);

                return allData.slice(startIndex, endIndex);
            }, this),

            //move to the next page
            _nextPage = function () {
                if (_pageIndex() < (_pageCount()))
                    _pageIndex(_pageIndex() + 1);
            },

            //move to the previous page
            _previousPage = function () {
                if (_pageIndex() > 1)
                    _pageIndex(_pageIndex() - 1);
            },

            //move to first page
            _firstPage = function () {
                _pageIndex(1);
            },

            //move to last page
            _lastPage = function () {
                _pageIndex(_pageCount());
            },

            //sort column
            _sortToggleObservable = function (columnName) {
                if (columnName == _currentSort()) {
                    if (_currentSortIsAsc()) {
                        _sortDescObservable(columnName);
                    } else {
                        _sortAscObservable(columnName);
                    }

                    _currentSortIsAsc(!_currentSortIsAsc());
                } else {
                    _currentSortIsAsc(true);
                    _sortAscObservable(columnName);
                }
                _currentSort(columnName);
            },

            _sortToggle = function (columnName) {
                if (columnName == _currentSort()) {
                    if (_currentSortIsAsc()) {
                        _sortDesc(columnName);
                    } else {
                        _sortAsc(columnName);
                    }

                    _currentSortIsAsc(!_currentSortIsAsc());
                } else {
                    _currentSortIsAsc(true);
                    _sortAsc(columnName);
                }
                _currentSort(columnName);
            },

            _sortObservable = function (columnName, asc) {
                if (columnName == _currentSort()) {
                    if (_currentSortIsAsc()) {
                        _sortAscObservable(columnName);
                    } else {
                        _sortDescObservable(columnName);
                    }                    
                } else {
                    _currentSortIsAsc(asc);
                    _sortAscObservable(columnName);
                }
                _currentSort(columnName);
            },

            _sort = function (columnName, asc) {
                if (columnName == _currentSort()) {
                    if (_currentSortIsAsc()) {
                        _sortAsc(columnName);
                    } else {
                        _sortDesc(columnName);
                    }
                } else {
                    _currentSortIsAsc(asc);
                    _sortAsc(columnName);
                }
                _currentSort(columnName);
            },

            _sortAscObservable = function (columnName) {
                _allData.sortAscObservableProperty(columnName);
            },

            _sortDescObservable = function (columnName) {
                _allData.sortDescObservableProperty(columnName);
            },

            _sortAsc = function (columnName) {
                _allData.sortAscProperty(columnName);
            },

            _sortDesc = function (columnName) {
                _allData.sortDescProperty(columnName);
            };

            _goToPage = function (page) {
                _pageIndex(page);
            };
            //reset page index when page size changes
            _pageSize.subscribe(function () {
                _pageIndex(-1); // force _page to recompute
                _pageIndex(1);
            });


            //init
            if (options.currentSortIsAsc && options.currentSort) {
                _sortAscObservable(options.currentSort);

                _pageCount(Math.ceil(_allData().length / _pageSize()) || 1);
            }

            //public members
            this.AllData = _allData;
            this.PageSize = _pageSize;
            this.PageSizeDropDown = _pageSizeDropDown;
            this.CercaText = _cercaText;
            this.PageIndex = _pageIndex;
            this.GoToPage = _goToPage;
            this.Page = _page;
            this.PageCount = _pageCount;
            this.NextPage = _nextPage;
            this.PreviousPage = _previousPage;
            this.FirstPage = _firstPage;
            this.LastPage = _lastPage;
            this.SortToggleObservable = _sortToggleObservable;
            this.SortToggle = _sortToggle;
            this.SortObservable = _sortObservable;
            this.Sort = _sort;
            this.CurrentSort = _currentSort();
            this.ThCss = function (columnName) {
                if (_currentSort() == columnName) {
                    if (_currentSortIsAsc()) {
                        return "sorting_asc";
                    } else {
                        return "sorting_desc";
                    }
                } else {
                    return "sorting";
                }
            };
        };

        Core.PagedArrayAsync = function (options) {
            options = options || {};

            var
                // viewmodel that will be extended
                _self = options.self,

                // url to search action 
                _searchUrl = options.searchUrl || '',

                // the function used to map the result into javascript object
                _mappingResponse = options.mappingResponse || null,

                // Search callback
                _searchCallback = options.searchCallback || $.noop,

                // Search filter, pagingFilter must be a js object that implement the interface of BasePagingFilterAsync
                _pagingFilter = ko.mapping.fromJS(options.pagingFilter, null, _pagingFilter),

                // reset start page if page size change
                _prevSize = ko.observable(_pagingFilter.Size()),

                // fix paging filter in case of strange value
                _fixPagingFilter = function () {
                    if (_prevSize() != null && _prevSize() !== _pagingFilter.Size()) {
                        _pagingFilter.StartIndex(1);
                    } else {
                        _pagingFilter.StartIndex(_pagingFilter.StartIndex() || 1);
                    }

                    _pagingFilter.Size(_pagingFilter.Size() || 10);
                    _pagingFilter.SortColumn(_pagingFilter.SortColumn() || '1');
                    _pagingFilter.IsSortAscending(_pagingFilter.IsSortAscending() === null ? false : _pagingFilter.IsSortAscending());
                },

                // All data retrieved by server
                _page = ko.observableArray([]),

                // Validation 
                _validation = ko.observableArray([]),

                // The number of all record server side
                _totaleElementi = ko.observable(0),

                // The drop down page size
                _pageSizeDropDown = options.pageSizeDropDown || [10, 20, 50, 100],

                // fn to retrieve elements from the server
                _getJsonData = function () {
                    _fixPagingFilter();

                    Http.Post(_searchUrl, ko.mapping.toJSON(_pagingFilter)).success(function (data) {
                        var result = new App.Core.SearchJsonResult(data);

                        ko.mapping.fromJS(result.PagingFilter, null, _pagingFilter);
                        if (result.HasError) {
                            ko.mapping.fromJS(result.Messages, null, _validation);
                        }
                        _totaleElementi(result.TotaleElementi);
                        _prevSize(_pagingFilter.Size());

                        // mapping response into page
                        if (_mappingResponse !== null) {
                            _page([]);
                            ko.utils.arrayForEach(result.Response || [], function (item) {
                                _page.push(new _mappingResponse(item));
                            });
                        } else {
                            ko.mapping.fromJS(result.Response || [], null, _page);
                        }
                        
                        _pageCount(Math.ceil(_totaleElementi() / _pagingFilter.Size()) || 1);
                        _searchCallback(result);

                    });
                },

                // page count
                _pageCount = ko.observable(1),

                // get css class
                _thCss = function (columnName) {
                    if (_pagingFilter.SortColumn() == columnName) {
                        if (_pagingFilter.IsSortAscending()) {
                            return "sorting_asc";
                        } else {
                            return "sorting_desc";
                        }
                    } else {
                        return "sorting";
                    }
                },

                _nextPage = function () {
                    if (_pagingFilter.StartIndex() < _pageCount()) {
                        _pagingFilter.StartIndex(_pagingFilter.StartIndex() + 1);
                        _getJsonData();
                    }
                },

                _previuosPage = function () {
                    if (_pagingFilter.StartIndex() > 1) {
                        _pagingFilter.StartIndex(_pagingFilter.StartIndex() - 1);
                        _getJsonData();
                    }
                },

                _firstPage = function () {
                    _pagingFilter.StartIndex(1);
                    _getJsonData();
                },

                _lastPage = function () {
                    _pagingFilter.StartIndex(_pageCount());
                    _getJsonData();
                },

                _sortToggle = function (sortColumn) {
                    return function () {
                        if (_pagingFilter.SortColumn() === sortColumn) {
                            _pagingFilter.IsSortAscending(!_pagingFilter.IsSortAscending());
                        } else {
                            _pagingFilter.IsSortAscending(true);
                        }

                        _pagingFilter.SortColumn(sortColumn || '1');
                        _pagingFilter.StartIndex(1);
                        _getJsonData();
                    };
                },

                _search = function () {
                    _pagingFilter.StartIndex(1);
                    _getJsonData();
                }

                _goToPage = function (page) {
                    _pagingFilter.StartIndex(page);
                    _getJsonData();
                };

            //public members
            this.PagingFilter = _pagingFilter;
            this.PageSizeDropDown = _pageSizeDropDown;
            this.MappingResponse = _mappingResponse;
            this.Page = _page;
            this.Search = _search;
            this.SearchCallback = _searchCallback;
            this.Validation = _validation;
            this.PageCount = _pageCount;
            this.PageIndex = _pagingFilter.StartIndex;
            this.GoToPage = _goToPage;
            this.ThCss = _thCss;
            this.NextPage = _nextPage;
            this.PreviousPage = _previuosPage;
            this.FirstPage = _firstPage;
            this.LastPage = _lastPage;
            this.SortToggle = _sortToggle;
            this.TotaleElementi = _totaleElementi;
        };

    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
; (function (factory) {
    //CommonJS
    if (typeof require === "function" && typeof exports === "object" && typeof module === "object") {
        factory(require("knockout"), exports);
        //AMD
    } else if (typeof define === "function" && define.amd) {
        define(["knockout", "exports"], factory);
        //normal script tag
    } else {
        factory(ko, ko.postbox = {});
    }
}(function (ko, exports, undefined) {
    var disposeTopicSubscription, existingSubscribe,
        subscriptions = {},
        subId = 1;

    exports.subscriptions = subscriptions;

    //create a global postbox that supports subscribing/publishing
    ko.subscribable.call(exports);

    //keep a cache of the latest value and subscribers
    exports.topicCache = {};

    //allow customization of the function used to serialize values for the topic cache
    exports.serializer = ko.toJSON;

    //wrap notifySubscribers passing topic first and caching latest value
    exports.publish = function (topic, value) {
        if (topic) {
            //keep the value and a serialized version for comparison
            exports.topicCache[topic] = {
                value: value,
                serialized: exports.serializer(value)
            };
            exports.notifySubscribers(value, topic);
        }
    };

    //provide a subscribe API for the postbox that takes in the topic as first arg
    existingSubscribe = exports.subscribe;
    exports.subscribe = function (topic, action, target, initializeWithLatestValue) {
        var subscription, current, existingDispose;

        if (topic) {
            if (typeof target === "boolean") {
                initializeWithLatestValue = target;
                target = undefined;
            }

            subscription = existingSubscribe.call(exports, action, target, topic);
            subscription.subId = ++subId;
            subscriptions[subId] = subscription;

            if (initializeWithLatestValue) {
                current = exports.topicCache[topic];

                if (current !== undefined) {
                    action.call(target, current.value);
                }
            }

            existingDispose = subscription.dispose;
            subscription.dispose = function () {
                delete subscriptions[subscription.subId];
                existingDispose.call(subscription);
            };

            return subscription;
        }
    };

    //clean up all subscriptions and references
    exports.reset = function () {
        var subscription;

        for (var id in subscriptions) {
            if (subscriptions.hasOwnProperty(id)) {
                subscription = subscriptions[id];

                if (subscription && typeof subscription.dispose === "function") {
                    subscription.dispose();
                }
            }
        }

        exports.topicCache = {};
    };

    //by default publish when the previous cached value does not equal the new value
    exports.defaultComparer = function (newValue, cacheItem) {
        return cacheItem && exports.serializer(newValue) === cacheItem.serialized;
    };

    //augment observables/computeds with the ability to automatically publish updates on a topic
    ko.subscribable.fn.publishOn = function (topic, skipInitialOrEqualityComparer, equalityComparer) {
        var skipInitialPublish, subscription, existingDispose;

        if (topic) {
            //allow passing the equalityComparer as the second argument
            if (typeof skipInitialOrEqualityComparer === "function") {
                equalityComparer = skipInitialOrEqualityComparer;
            } else {
                skipInitialPublish = skipInitialOrEqualityComparer;
            }

            equalityComparer = equalityComparer || exports.defaultComparer;

            //remove any existing subs
            disposeTopicSubscription.call(this, topic, "publishOn");

            //keep a reference to the subscription, so we can stop publishing
            subscription = this.subscribe(function (newValue) {
                if (!equalityComparer.call(this, newValue, exports.topicCache[topic])) {
                    exports.publish(topic, newValue);
                }
            }, this);

            //track the subscription in case of a reset
            subscription.id = ++subId;
            subscriptions[subId] = subscription;

            //ensure that we cleanup pointers to subscription on dispose
            existingDispose = subscription.dispose;
            subscription.dispose = function () {
                delete this.postboxSubs[topic].publishOn;
                delete subscriptions[subscription.id];

                existingDispose.call(subscription);
            }.bind(this);

            this.postboxSubs[topic].publishOn = subscription;

            //do an initial publish
            if (!skipInitialPublish) {
                exports.publish(topic, this());
            }
        }

        return this;
    };

    //handle disposing a subscription used to publish or subscribe to a topic
    disposeTopicSubscription = function (topic, type) {
        var subs = this.postboxSubs = this.postboxSubs || {};
        subs[topic] = subs[topic] || {};

        if (subs[topic][type]) {
            subs[topic][type].dispose();
        }
    };

    //discontinue automatically publishing on a topic
    ko.subscribable.fn.stopPublishingOn = function (topic) {
        disposeTopicSubscription.call(this, topic, "publishOn");

        return this;
    };

    //augment observables/computeds to automatically be updated by notifications on a topic
    ko.subscribable.fn.subscribeTo = function (topic, initializeWithLatestValueOrTransform, transform) {
        var initializeWithLatestValue, current, callback, subscription, existingDispose,
            self = this;

        //allow passing the filter as the second argument
        if (typeof initializeWithLatestValueOrTransform === "function") {
            transform = initializeWithLatestValueOrTransform;
        } else {
            initializeWithLatestValue = initializeWithLatestValueOrTransform;
        }

        if (topic && ko.isWriteableObservable(this)) {
            //remove any existing subs
            disposeTopicSubscription.call(this, topic, "subscribeTo");

            //if specified, apply a filter function in the subscription
            callback = function (newValue) {
                self(transform ? transform.call(self, newValue) : newValue);
            };

            ////keep a reference to the subscription, so we can unsubscribe, if necessary
            subscription = exports.subscribe(topic, callback);
            this.postboxSubs[topic].subscribeTo = subscription;

            //ensure that we cleanup pointers to subscription on dispose
            existingDispose = subscription.dispose;
            subscription.dispose = function () {
                delete this.postboxSubs[topic].subscribeTo;
                existingDispose.call(subscription);
            }.bind(this);

            if (initializeWithLatestValue) {
                current = exports.topicCache[topic];

                if (current !== undefined) {
                    callback(current.value);
                }
            }
        }

        return this;
    };

    //discontinue receiving updates on a topic
    ko.subscribable.fn.unsubscribeFrom = function (topic) {
        disposeTopicSubscription.call(this, topic, "subscribeTo");

        return this;
    };

    // both subscribe and publish on the same topic
    //   -allows the ability to sync an observable/writeable computed/observableArray between view models
    //   -subscribeTo should really not use a filter function, as it would likely cause infinite recursion
    ko.subscribable.fn.syncWith = function (topic, initializeWithLatestValue, skipInitialOrEqualityComparer, equalityComparer) {
        this.subscribeTo(topic, initializeWithLatestValue).publishOn(topic, skipInitialOrEqualityComparer, equalityComparer);

        return this;
    };

    ko.postbox = exports;
}));


var App;
(function (App) {
    (function (Core) {
        var _cssCollapse = function (value) {
            return function () {
                return value() ? 'icon-replace icon-collapse active' : 'icon-replace icon-expand active';
            }
        }

        var _cleanSpalla = function (spallaName) {
            $(spallaName).html('');
        };

        Core.CssCollapse = _cssCollapse;
        Core.CleanSpalla = _cleanSpalla;
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));

$(function () {

    $.widget('et.PagedList', $.tm.itemSelectorPage, {
        _validation: ko.observableArray([]),

        _init: function () {

            this._super();
            var me = this;

            $('thead > tr > th', this.element).each(function (index, element) {
                if (!$(element).hasClass('dt-nosort')) {
                    $(element).removeClass();
                    if ($(element).attr("dt-sortColumn") == me.options.param.pagingFilter.SortColumn()) {
                        me._orderClass($("th[dt-sortColumn='" + me.options.param.pagingFilter.SortColumn() + "']", me.element));
                    }
                }
            });

            $("thead > tr > th", me.element).unbind();

            $("thead > tr > th", me.element).not("thead > tr > th.dt-nosort", me.element).click(function (event) {
                event.preventDefault();

                me._sort($(event.currentTarget));
                me.options.param.pagingFilter.StartIndex(1);
                me._popolaTabella(false);
            });
        },

        _sort: function (column) {
            var me = this;

            if (column.attr("dt-sortColumn")) {
                if (column.attr("dt-sortColumn") != me.options.param.pagingFilter.SortColumn()) {
                    me.options.param.pagingFilter.IsSortAscending(true);
                    me._orderClass($("th[dt-sortColumn='" + me.options.param.pagingFilter.SortColumn() + "']", me.element), 'sorting');
                } else {
                    me.options.param.pagingFilter.IsSortAscending(!me.options.param.pagingFilter.IsSortAscending());
                }

                me.options.param.pagingFilter.SortColumn(column.attr("dt-sortColumn"));

                me._orderClass(column);
            }
        },

        _orderClass: function (column, className) {
            column.removeClass();
            if (className) {
                column.addClass(className);
            } else {
                if (this.options.param.pagingFilter.IsSortAscending()) {
                    column.addClass("sorting_asc");
                } else {
                    column.addClass("sorting_desc");
                }
            }
        },
        
        _format_date: function (value) {
            return App.Core.FormatDate(value.trim());
        },
        _format_import: function (value) {
            var decimal = App.Core.ParseNumber(parseFloat(value));

            if (isNaN(decimal)) {
                return "";
            } else {
                decimal = App.Core.FormatNumberSeparation(Math.round(decimal * 100) / 100);

                return decimal;
            }
        },

        _clearTable: function () {
            $('tbody', this.element).html('');
        },

        _getData: function (callback) {
            var me = this;

            Http.Post(this.options.param.dataSourceUrl, ko.mapping.toJSON(me.options.param.pagingFilter)).success(function (data) {
                var result = new App.Core.SearchJsonResult(data);

                me.options.param.pagingFilter = ko.mapping.fromJS(result.PagingFilter, null, me.options.param.pagingFilter);
                if (result.HasError) {
                    ko.mapping.fromJS(result.Messages, null, me.options.param.validation);
                } else {
                    me._clearTable();
                    if (result.Response) {
                        callback(result);
                    }
                }

                me._trigger("complete", null);
            });
        },

        _initPostPopulate: function (result) {
            this._super();

            this.element.DataTable().page.len(10).draw();
        },

        _drawRows: function (items) {
            var me = this;

            $.each(items, function (index, item) {
                var row = $('<tr></tr>');
                var tbody = $('tbody', me.element);

                $.each($('thead > tr > th', me.element), function (index, column) {
                    var col = $('<td></td>');
                    var cssClass = $(column).attr('dt-cssClass');
                    if (cssClass) {
                        col.addClass(cssClass);
                    }

                    var fixedValue = $(column).attr('dt-fixedValue');
                    if (fixedValue) {
                        col.text(fixedValue);
                    } else {
                        var attrName = $(column).attr('dt-columnProperty');
                        if (attrName) {
                            var value = ko.utils.getValueByKey(item, attrName);
                            var tag = $('<span></span>');

                            if (value !== null && value !== undefined) {
                                var dataType = $(column).attr('dt-dataType');
                                if (dataType) {
                                    value = me['_format_' + dataType](value);
                                }

                                var prefix = $(column).attr('dt-resource');
                                if (prefix) {
                                    resource = prefix + '.' + value;
                                    value = ko.utils.GetResource(resource);
                                }

                                var clickable = $(column).attr('dt-clickable');
                                if (clickable) {
                                    var conditions = ['=', '<', '>', '!='];
                                    var condition = '';

                                    $.each(conditions, function (index, item) {
                                        if (clickable.indexOf(item) >= 0) {
                                            condition = item;
                                            return;
                                        }
                                    });

                                    if (condition) {
                                        var conditionSplitted = clickable.split(condition);
                                        condition = ko.utils.getValueByKey(item, conditionSplitted[0]) + condition + conditionSplitted[1];

                                        if (eval(condition)) {
                                            tag = $('<a></a>').css('cursor', 'pointer').click(function (internalItem) {
                                                return function (event) {
                                                    me.options.param.detailCallback(internalItem);
                                                }
                                            }(item));
                                        }
                                    } else {
                                        tag = $('<a></a>').css('cursor', 'pointer').click(function (internalItem) {
                                            return function (event) {
                                                me.options.param.detailCallback(internalItem);
                                            }
                                        }(item));
                                    }
                                }

                                var fixedPostValue = $(column).attr('dt-fixedPostValue');
                                if (fixedPostValue) {
                                    value += ' ' + fixedPostValue;
                                }

                                var attrPostValue = $(column).attr('dt-postValue');
                                if (attrPostValue) {
                                    var postValue = ko.utils.getValueByKey(item, attrPostValue);

                                    if (postValue !== undefined && postValue !== null) {
                                        value += ' ' + postValue;
                                    }
                                }

                                var drawImageCallback = $(column).attr('dt-drawImageCallback');
                                if (drawImageCallback) {
                                    eval(drawImageCallback)(col, value);
                                    value = '';
                                }
                            } else {
                                value = '';
                            }

                            var negativeValueColor = $(column).attr('dt-negativeValueColor');
                            if (negativeValueColor) {
                                if (value[0] == '-') {
                                    col.css({ 'color': negativeValueColor });
                                }
                            }
                            tag.text(value);
                            col.append(tag);
                        }
                    }

                    row.append(col);
                });

                tbody.append(row);
            });
        },

        _drawPaginator: function (totalElements) {
            var element = $(this.element);
            var totalPages = Math.ceil((totalElements / this.options.param.pagingFilter.Size()));

            var divPaginator = $('<div></div>').attr('id', element.attr('id') + '_paginator').addClass('dataTables_paginate');
            var span = $('<span></span>');

            var me = this;

            if (totalPages > me.options.param.maxPages) {
                if (me.options.param.pagingFilter.StartIndex() < me.options.param.maxPages) {
                    for (var pageIndex = 1; pageIndex <= me.options.param.maxPages; pageIndex++) {
                        var page = $('<a>' + pageIndex + '</a>').addClass('paginate_button');

                        if (pageIndex == me.options.param.pagingFilter.StartIndex()) {
                            page.addClass('current');
                        } else {
                            page.unbind();
                            page.click(function (internalIndex) {
                                return function (event) {
                                    me.options.param.pagingFilter.StartIndex(internalIndex);
                                    me._popolaTabella(false);
                                }
                            }(pageIndex));
                        }

                        span.append(page);
                    }

                    divPaginator.append(span);

                    divPaginator.append($('<span><a class="paginate_ellipsis">...</a></span>'));

                    span = $('<span></span>');
                    var page = $('<a>' + totalPages + '</a>').addClass('paginate_button');
                    page.click(function () {
                        me.options.param.pagingFilter.StartIndex(totalPages);
                        me._popolaTabella(false);
                    });
                    span.append(page);
                    divPaginator.append(span);
                } else if (me.options.param.pagingFilter.StartIndex() >= me.options.param.maxPages && me.options.param.pagingFilter.StartIndex() < totalPages - 2) {
                    span = $('<span></span>');
                    var page = $('<a>1</a>').addClass('paginate_button');
                    page.click(function () {
                        me.options.param.pagingFilter.StartIndex(1);
                        me._popolaTabella(false);
                    });
                    span.append(page);
                    divPaginator.append(span);

                    divPaginator.append($('<span><a class="paginate_ellipsis">...</a></span>'));

                    span = $('<span></span>');
                    for (var pageIndex = me.options.param.pagingFilter.StartIndex() - 1; pageIndex <= me.options.param.pagingFilter.StartIndex() + 1; pageIndex++) {
                        var page = $('<a>' + pageIndex + '</a>').addClass('paginate_button');

                        if (pageIndex == me.options.param.pagingFilter.StartIndex()) {
                            page.addClass('current');
                        } else {
                            page.unbind();
                            page.click(function (internalIndex) {
                                return function (event) {
                                    me.options.param.pagingFilter.StartIndex(internalIndex);
                                    me._popolaTabella(false);
                                }
                            }(pageIndex));
                        }

                        span.append(page);
                    }
                    divPaginator.append(span);

                    divPaginator.append($('<span><a class="paginate_ellipsis">...</a></span>'));

                    span = $('<span></span>');
                    var page = $('<a>' + totalPages + '</a>').addClass('paginate_button');
                    page.click(function () {
                        me.options.param.pagingFilter.StartIndex(totalPages);
                        me._popolaTabella(false);
                    });
                    span.append(page);
                    divPaginator.append(span);
                } else {
                    span = $('<span></span>');
                    var page = $('<a>1</a>').addClass('paginate_button');
                    page.click(function () {
                        me.options.param.pagingFilter.StartIndex(1);
                        me._popolaTabella(false);
                    });
                    span.append(page);
                    divPaginator.append(span);

                    divPaginator.append($('<span><a class="paginate_ellipsis">...</a></span>'));

                    span = $('<span></span>');
                    for (var pageIndex = me.options.param.pagingFilter.StartIndex() - 4; pageIndex <= totalPages; pageIndex++) {
                        var page = $('<a>' + pageIndex + '</a>').addClass('paginate_button');

                        if (pageIndex == me.options.param.pagingFilter.StartIndex()) {
                            page.addClass('current');
                        } else {
                            page.unbind();
                            page.click(function (internalIndex) {
                                return function (event) {
                                    me.options.param.pagingFilter.StartIndex(internalIndex);
                                    me._popolaTabella(false);
                                }
                            }(pageIndex));
                        }

                        span.append(page);
                    }
                    divPaginator.append(span);
                }
            } else {
                for (var pageIndex = 1; pageIndex <= totalPages; pageIndex++) {
                    var page = $('<a>' + pageIndex + '</a>').addClass('paginate_button');

                    if (pageIndex == me.options.param.pagingFilter.StartIndex()) {
                        page.addClass('current');
                    } else {
                        page.unbind();
                        page.click(function (internalIndex) {
                            return function (event) {
                                me.options.param.pagingFilter.StartIndex();
                                me.options.param.pagingFilter.StartIndex(internalIndex);
                                me._popolaTabella(false);
                            }
                        }(pageIndex));
                    }

                    span.append(page);
                }
                divPaginator.append(span);
            }
            
            element.after(divPaginator);
        },

        _popolaTabella: function (postPopulate) {
            var me = this;

            me._getData(function (result) {
                me._drawRows(result.Response);

                $('#' + me.element.attr('id') + '_paginator').html('');
                if (result.TotaleElementi > me.options.param.pagingFilter.Size()) {
                    me._drawPaginator(result.TotaleElementi);
                }

                me._orderClass($("th[dt-sortColumn='" + me.options.param.pagingFilter.SortColumn() + "']", me.element));

                if (postPopulate === undefined) {
                    postPopulate = null;
                }
                if (postPopulate || postPopulate == null) {
                    me._initPostPopulate(result.Response);
                }

                $("thead > tr > th.sorting_disabled", me.element).not("thead > tr > th.dt-nosort", me.element).removeClass("sorting_disabled").addClass("sorting");
            });
        },
    })

});