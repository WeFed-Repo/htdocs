var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.IdentificativoPrevisionaleSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    var self = this;

                    self.IdentificativoPrevisionale = ko.observable(null);
                    self.BICDebitore = ko.observable(null);
                    self.Trimestre = ko.observable(null);
                    self.Anno = ko.observable(null);
                    self.IdEsitoDispositivo = ko.observable(null);

                    App.Core.BasePagingFilterAsync.call(this, data);

                    if (data !== null) {
                        self.IdentificativoPrevisionale(data.IdentificativoPrevisionale);
                        self.BICDebitore(data.BICDebitore);
                        self.Trimestre(data.Trimestre);
                        self.Anno(data.Anno);
                        self.IdEsitoDispositivo(data.IdEsitoDispositivo);
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));