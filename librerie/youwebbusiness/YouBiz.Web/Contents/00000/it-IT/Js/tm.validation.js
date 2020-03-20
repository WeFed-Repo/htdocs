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
 
        Core.ParseNumber = _parseNumber;
        Core.FormatNumber = _formatNumber;
        Core.FormatNumberSeparation = _formatNumberSeparation;
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
