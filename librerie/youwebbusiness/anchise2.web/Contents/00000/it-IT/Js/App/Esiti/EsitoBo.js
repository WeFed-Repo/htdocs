var App;
(function (App) {
    (function (Esiti) {
        Esiti.EsitoBo = (function () {
            return function (data) {
                if (typeof data === "undefined") { data = null; }
                this.Identifier = new App.Common.IdentifierBo(null);
                this.TipoDato = ko.observable(null);
                this.Ordinante = new App.Common.OrdinanteBo(null);
                this.Beneficiario = new App.Common.SoggettoBo(null);
                this.DataEsecuzione = ko.observable(null);
                this.DataFlusso = ko.observable(null);
                this.Importo = ko.observable(null);
                this.Divisa = ko.observable(null);
                this.EsitoOrdinante = ko.observable(null);
                this.NumeroDisposizioni = ko.observable(null);
                this.StatoEsito = ko.observable(null);
                this.Causale = ko.observable(null);
                this.Abi = ko.observable(null);
                this.Iban = ko.observable(null);
                this.IdentificativoPagamento = ko.observable(null);

                var self = this;
                if (data != null) {
                    self.Identifier = new App.Common.IdentifierBo(data.Identifier);
                    this.TipoDato(data.TipoDato);
                    this.Ordinante = new App.Common.OrdinanteBo(data.Ordinante);
                    this.Beneficiario = new App.Common.SoggettoBo(data.Beneficiario);
                    if (data.DataEsecuzione !== null && data.DataEsecuzione !== "undefined") {
                        this.DataEsecuzione(new Date(moment(data.DataEsecuzione)));
                    }
                    if (data.DataFlusso !== null && data.DataFlusso !== "undefined") {
                        this.DataFlusso(new Date(moment(data.DataFlusso)));
                    }
                    self.Importo(data.Importo);
                    this.Divisa(data.Divisa);
                    this.EsitoOrdinante(data.EsitoOrdinante);
                    this.NumeroDisposizioni(data.NumeroDisposizioni);
                    this.StatoEsito(data.StatoEsito);
                    this.Causale(data.Causale);
                    this.Abi(data.Abi);
                    this.Iban(data.Iban);
                    this.IdentificativoPagamento(data.IdentificativoPagamento);
                }
            }
        })();
    })(App.Esiti || (App.Esiti = {}));
})(App || (App = {}));
