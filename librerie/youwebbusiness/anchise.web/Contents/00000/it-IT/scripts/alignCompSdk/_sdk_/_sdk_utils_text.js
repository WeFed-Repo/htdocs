var sdk;
var sdkParams;
// required: moment.js --> 2.1.0
(function (sdk, $, args) {
    // namespace Sdk.Utils
    sdk.utils = (function (utils, $, args) {
        // namespace sdk.utils.text
        utils.text = (function (text, $, args) {

            var disableKeyboardSending = function (evento) {
                if (window.event || !evento.which) // IE o NE?
                {
                    tasto = evento.keyCode; // per IE
                }
                else if (evento) // netscape
                {
                    tasto = evento.which;
                }
                if (tasto == 13) {
                    return false;
                }
                return true;
            };
            var onlyIntNumbers = function (evento) {
                if (window.event || !evento.which) // IE o NE?
                {
                    tasto = evento.keyCode; // per IE
                }
                else if (evento) // netscape
                {
                    tasto = evento.which;
                }
                // gestione caso tasto backspace e tab
                if (tasto == 8 || tasto == 9) {
                    return true;
                }
                if (tasto < 48 || tasto > 57) {
                    return false;
                }
                return true;
            }

            var onlyRealNumbersChars = function (e) {
                var keyCode;
                if (window.event || !e.which) // IE o NE?
                {
                    keyCode = e.keyCode; // per IE
                }
                else if (e) // netscape
                {
                    keyCode = e.which;
                }

                // backspace\tab
                if (keyCode == 8 || keyCode == 9) {
                    return true;
                }

                if (keyCode < 48 || keyCode > 57) {
                    if (keyCode != 44 && keyCode != 45)//ammesso solo virgola e meno
                    {
                        return false;
                    }
                }

                return true;
            }

            var onlyAlpha = function (evento) {

                if (window.event || !evento.which) // IE o NE?
                {
                    tasto = evento.keyCode; // per IE
                }
                else if (evento) // netscape
                {
                    tasto = evento.which;
                }

                // gestione caso tasto backspace e tab
                if (tasto == 8 || tasto == 9) {
                    return true;
                }

                if (tasto < 65 || tasto > 122 || (tasto > 90 && tasto < 97))
                    return false;
                return true;

            }

            //AmmountDecimal************************************************************
            var formatAmmountDecimal = function (decimalValue, defaultValue, currency) {
                var toRet = '';
                if (decimalValue) {
                    toRet = decimalValue.formatMoney(2, ',', '.');
                    if (currency) {
                        toRet = toRet + ' ' + currency;
                    }
                } else {
                    if (defaultValue)
                        toRet = defaultValue;
                }
                return toRet;
            }
            Number.prototype.formatMoney = function (c, d, t) {
                var n = this,
                    c = isNaN(c = Math.abs(c)) ? 2 : c,
                    d = d == undefined ? "." : d,
                    t = t == undefined ? "," : t,
                    s = n < 0 ? "-" : "",
                    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
                    j = (j = i.length) > 3 ? j % 3 : 0;
                return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
            };
            //AmmountDecimal************************************************************

            //DateTime************************************************************
            var formatDateTime = function (dateValue, dateFormat) {
                if (dateValue) {
                    if (dateFormat) {
                        return moment(dateValue).format(dateFormat);
                    } else {
                        return moment(dateValue).format('DD/MM/YYYY');
                    }
                }
                return '';
            }

            //DateTime************************************************************
            var getCurrencySign = function(currencyCode) {
                if (currencyCode) {
                    switch (currencyCode) {
                        case "EUR":
                            return "€";
                        default:
                            return currencyCode;
                    }
                }
                return '';
            }

            //parseNumber************************************************************
            var parseNumber = function (value) {
                if (typeof (value) === "number") {
                    return value;
                } else {
                    value = value.toString().replace(/\./g, '');
                    return parseFloat(value.replace(',', '.'));
                }
            };




            text["onlyIntNumbers"] = onlyIntNumbers;
            text["formatAmmountDecimal"] = formatAmmountDecimal;
            text["formatDateTime"] = formatDateTime;
            text["getCurrencySign"] = getCurrencySign;
            text["onlyRealNumbersChars"] = onlyRealNumbersChars;
            text["onlyAlpha"] = onlyAlpha;
            text["parseNumber"] = parseNumber;
            text["disableKeyboardSending"] = disableKeyboardSending;



            return text;
        })(utils.text || {}, $, args.text || {});
        // end namespace sdk.utils.text
        return utils;
    })(sdk.utils || {}, $, args.utils || {});
    // end namespace sdk.utils
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);

