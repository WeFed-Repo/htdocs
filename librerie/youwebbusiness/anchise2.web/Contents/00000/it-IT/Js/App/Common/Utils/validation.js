var App;
(function (App) {
    (function (Common) {

        var _identifierIsValid = function (identifier) {
            var jsIdentifier = ko.toJS(identifier);
            
            if (App.Core.IsNullOrUndefined(jsIdentifier)) {
                return false;
            }

            if (App.Core.IsNullOrEmpty(jsIdentifier.Crypt) && App.Core.IsNullOrEmpty(jsIdentifier.Crypted)) {
                return false;
            }

            return true;
        }

        var _identifierIsNotValid = function (identifier) {
            return !_identifierIsValid(identifier);
        }

        var _identifiersAreEqual = function (first, second) {
            var jsFirst = ko.toJS(first);
            var jsSecond = ko.toJS(second);

            var cryptEqual = jsFirst.Crypt === jsSecond.Crypt;
            var hashEqual = jsFirst.Hash === jsSecond.Hash;
            var allPropertiesEqual = jsFirst.Id === jsSecond.Id &&
                                     jsFirst.Version === jsSecond.Version &&
                                     jsFirst.IdAzienda === jsSecond.IdAzienda &&
                                     jsFirst.IdRapporto === jsSecond.IdRapporto &&
                                     jsFirst.ClasseServizio === jsSecond.ClasseServizio;
            
            return cryptEqual || hashEqual || allPropertiesEqual;
        }

        var _identifiersOrCryptAreEqual = function (first, second) {
            var jsFirst = ko.toJS(first);
            var jsSecond = ko.toJS(second);

            var cryptEqual = jsFirst.Crypt === jsSecond.Crypt;
            var hashEqual = jsFirst.Hash === jsSecond.Hash;
            return cryptEqual || hashEqual;
        }

        Common.IdentifierIsValid = _identifierIsValid;
        Common.IdentifierIsNotValid = _identifierIsNotValid;
        Common.IdentifiersAreEqual = _identifiersAreEqual;
        Common.IdentifiersOrCryptAreEqual = _identifiersOrCryptAreEqual;

    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
