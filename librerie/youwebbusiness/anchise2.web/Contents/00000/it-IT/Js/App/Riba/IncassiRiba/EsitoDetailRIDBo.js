﻿var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.EsitoDetailRIDBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Riba.IncassiRiba.EsitoBo.call(this, data);

                    this.Divisa = ko.observable(null);
                    this.TipoDebitore = ko.observable(null);
                    this.TipoDebitoreDesc = ko.observable(null);
                    this.ImportoSpese = ko.observable(null);
                    this.RifPromemoria = ko.observable(null);
                    this.DataScadenzaEffettiva = ko.observable(null);
                    this.CausaleStorno = ko.observable(null);
                    this.FacoltaStorno = ko.observable(null);
                    var self = this;
                    if (data != null) {
                        self.Divisa(data.Divisa);
                        self.TipoDebitore(data.TipoDebitore);
                        self.TipoDebitoreDesc(data.TipoDebitoreDesc);
                        self.ImportoSpese(data.ImportoSpese);
                        self.RifPromemoria(data.RifPromemoria);

                        if (data.DataScadenzaEffettiva !== null && data.DataScadenzaEffettiva !== "undefined") {
                            this.DataScadenzaEffettiva(new Date(moment(data.DataScadenzaEffettiva)));
                        }
                        self.CausaleStorno(data.CausaleStorno);
                        self.FacoltaStorno(data.FacoltaStorno);
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));
