var App;
(function (App) {
    (function (Common) {
        (function (PoteriFirma) {
            var _firmatario = 1;
            var _nonFirmatario = -1;

            PoteriFirma.FIRMATARIO = _firmatario;
            PoteriFirma.NON_FIRMATARIO = _nonFirmatario;
        })(App.Common.PoteriFirma || (App.Common.PoteriFirma = {}));
    })(App.Common || (App.Common = {}));
})(App || (App = {}));
