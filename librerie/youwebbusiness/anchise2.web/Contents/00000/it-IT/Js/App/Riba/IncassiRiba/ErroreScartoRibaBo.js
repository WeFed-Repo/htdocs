var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.ErroreScartoRibaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    this.IdEsito = new App.Common.IdentifierBo(null);
                    this.IdDettaglio = ko.observable(null);
                    this.IdDettaglioER = ko.observable(null);
                    this.RagioneSocialeDebitore = ko.observable(null);
                    this.AbiDebitore = ko.observable(null);
                    this.CabDebitore = ko.observable(null);
                    this.DataScadenza = ko.observable(null);
                    this.Importo = ko.observable(null);
                    this.Divisa = ko.observable(null);
                    this.TipoValore = ko.observable(null);
                    this.ValoreErrato = ko.observable(null);
                    this.CodiceErrore = ko.observable(null);

                    var self = this;
                    if (data != null) {
                        self.IdEsito = new App.Common.IdentifierBo(data.IdEsito);

                        self.Importo(data.Importo);
                        self.IdDettaglio(data.IdDettaglio);
                        self.IdDettaglioER(data.IdDettaglioER);
                        self.RagioneSocialeDebitore(data.RagioneSocialeDebitore);
                        self.AbiDebitore(data.AbiDebitore);
                        self.CabDebitore(data.CabDebitore);
                        self.Divisa(data.Divisa);
                        self.TipoValore(data.TipoValore);
                        self.ValoreErrato(data.ValoreErrato);
                        self.CodiceErrore(data.CodiceErrore);

                        if (data.DataScadenza !== null && data.DataScadenza !== "undefined") {
                            this.DataScadenza(new Date(moment(data.DataScadenza)));
                        }
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));
