var App;
(function (App) {
    (function (Common) {
        (function (StatoRapporto) {
            // Status
            var _attivo = 1;
            var _sospeso = 2;
                        
            StatoRapporto.ATTIVO = _attivo;
            StatoRapporto.SOSPESO = _sospeso;
            
        })(App.Common.StatoRapporto || (App.Common.StatoRapporto = {}));
    })(App.Common || (App.Common = {}));
})(App || (App = {}));
