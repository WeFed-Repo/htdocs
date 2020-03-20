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