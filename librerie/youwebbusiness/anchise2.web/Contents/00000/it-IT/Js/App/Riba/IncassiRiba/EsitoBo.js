var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.EsitoBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    this.IdEsito = ko.observable(null);
                    this.DataScadenza = ko.observable(null);
                    this.DataCaricamento = ko.observable(null);
                    this.Importo = ko.observable(null);
                    this.Causale = ko.observable(null);
                    this.RiferimentoDebito = ko.observable(null);

                    this.Ordinante = new App.Common.OrdinanteBo(null);
                    this.Debitore = new App.Common.SoggettoBo(null);
                    this.Commissioni = ko.observable(null);
                    this.NumeroRicevuta = ko.observable(null);
                    this.DbtrAbi = ko.observable(null);
                    this.DbtrCab = ko.observable(null);

                    var self = this;
                    if (data != null) {
                        self.IdEsito(data.IdEsito);
                        self.Importo(data.Importo);
                        self.Causale(data.Causale);
                        self.RiferimentoDebito(data.RiferimentoDebito);

                        if (data.DataScadenza !== null && data.DataScadenza !== "undefined") {
                            this.DataScadenza(new Date(moment(data.DataScadenza)));
                        }
                        if (data.DataCaricamento !== null && data.DataCaricamento !== "undefined") {
                            this.DataCaricamento(new Date(moment(data.DataCaricamento)));
                        }
                        this.Ordinante = new App.Common.OrdinanteBo(data.Ordinante);
                        this.Debitore = new App.Common.SoggettoBo(data.Debitore);
                        self.Commissioni(data.Commissioni);
                        self.NumeroRicevuta(data.NumeroRicevuta);
                        self.DbtrAbi(data.DbtrAbi);
                        self.DbtrCab(data.DbtrCab);
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));
