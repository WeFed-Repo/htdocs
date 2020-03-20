var App;
(function (App) {
    (function (Common) {
        (function (StatiDistinta) {
            // Status
            var _confermata = 3;
            var _autorizzata = 2;
            var _parzialmenteAutorizzata = 5;
            var _inModifica = 6;
            var _daAutorizzare = 1;

            // Generic Validation
            var _IsEnableDisaggregate = function (statoDistinta) {
                return statoDistinta == _daAutorizzare;
            };

            var _IsEnableDelete = function (statoDistinta) {
                return statoDistinta != _autorizzata && statoDistinta != _confermata;
            };

            var _IsEnableAuthorize = function (statoDistinta) {
                return statoDistinta == _daAutorizzare ||
                       statoDistinta == _parzialmenteAutorizzata;
            };
            var _IsEnableCopy = function (statoDistinta) {
                return (statoDistinta == _confermata ||
                        statoDistinta == _autorizzata ||
                        statoDistinta == _parzialmenteAutorizzata ||
                        statoDistinta == _daAutorizzare);
            };
            var _IsEnableCheckIban = function (statoDistinta) {
                return statoDistinta == _daAutorizzare ||
                       statoDistinta == _parzialmenteAutorizzata ||
                       statoDistinta == _inModifica;
            };

            StatiDistinta.CONFERMATA = _confermata;
            StatiDistinta.AUTORIZZATA = _autorizzata;
            StatiDistinta.PARZIALMENTE_AUTORIZZATA = _parzialmenteAutorizzata;
            StatiDistinta.IN_MODIFICA = _inModifica;
            StatiDistinta.DA_AUTORIZZARE = _daAutorizzare;
            StatiDistinta.IsEnableAuthorize = _IsEnableAuthorize;
            StatiDistinta.IsEnableCopy = _IsEnableCopy;
            StatiDistinta.IsEnableDisaggregate = _IsEnableDisaggregate;
            StatiDistinta.IsEnableCheckIban = _IsEnableCheckIban;
            StatiDistinta.IsEnableDelete = _IsEnableDelete;
        })(App.Common.StatiDistinta || (App.Common.StatiDistinta = {}));
    })(App.Common || (App.Common = {}));
})(App || (App = {}));
