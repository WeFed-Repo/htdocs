var App;
(function (App) {
    (function (Sdd) {
        var FilterDisposizioniSdd = (function () {
            function FilterDisposizioniSdd(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.IdentifierSottoDistinta = ko.observable(null);
                App.Common.FilterDisposizioni.call(this, data);

                if (data !== null) {
                    self.IdentifierSottoDistinta(new App.Common.IdentifierBo(data.IdentifierSottoDistinta));
                }
            }
            return FilterDisposizioniSdd;
        })();
        Sdd.FilterDisposizioniSdd = FilterDisposizioniSdd;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));