var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.FilterIdentificativoPrevisionale = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    var self = this;

                    self.IdAzienda = ko.observable(null);
                    self.IdentificativoPrevisionale = ko.observable(null);
                    self.BicDebitore = ko.observable(null);
                    self.TrimestreRichiesto = ko.observable(null);
                    self.AnnoRichiesto = ko.observable(null);
                    self.AbiOrdinante = ko.observable(null);

                    App.Core.BasePagingFilterAsync.call(this, data);

                    if (data !== null) {
                        self.IdAzienda(data.IdAzienda);
                        self.IdentificativoPrevisionale(data.IdentificativoPrevisionale);
                        self.BicDebitore(data.BicDebitore);
                        self.TrimestreRichiesto(data.TrimestreRichiesto);
                        self.AnnoRichiesto(data.AnnoRichiesto);
                        self.AbiOrdinante(data.AbiOrdinante);
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));