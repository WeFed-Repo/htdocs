var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.EsitoBo = (function () {
                return function(data) {
                    if (typeof data === "undefined") { data = null; }

                    this.IdEsito = ko.observable(null);
                    this.RagioneSocialeOrdinante = ko.observable(null);
                    this.AbiOrdinante = ko.observable(null);
                    this.SiaOrdinante = ko.observable(null);
                    this.DataRicezione = ko.observable(null);
                    this.DataCreazione = ko.observable(null);
                    this.CodIdentificativoMandato = ko.observable(null);
                    this.TipoMandato = ko.observable(null);
                    this.DataSottoscrizioneMandato = ko.observable(null);
                    
                    this.CucOrdinante = ko.observable(null);
                    this.BicOrdinante = ko.observable(null);
                    this.IdCreditore = ko.observable(null);
                    this.RagioneSocialeCreditoreEff = ko.observable(null);
                    this.RagioneSocialeDebitoreEff = ko.observable(null);
                    this.IdentificativoDebitore = ko.observable(null);
                    this.Debitore = new App.Common.SoggettoBo(null);
                    this.IdRichiesta = ko.observable(null);
                    this.TipoFlusso = ko.observable(null);
                    this.TipoEsito = ko.observable(null);
                    this.SequenzaIncasso = ko.observable(null);
                    this.ModificaRichiestaDa = ko.observable(null);
                    this.DomiciliazioneMandato = ko.observable(null);
                    this.CodiceMandatoOriginario = ko.observable(null);
                    this.CreditoreOriginario = ko.observable(null);
                    this.IdCreditoreOriginario = ko.observable(null);
                    this.IbanDebitoreOriginario = ko.observable(null);
                    this.Stato = ko.observable(null);
                    this.CodiceMandato = ko.observable(null);
                    this.EsitoFlusso = ko.observable(null); 
                    this.MotivoAggiuntivoScarto = ko.observable(null); 
                    this.CodiceScarto = ko.observable(null); 
                    this.IdEsitoDistinta = ko.observable(null);
                    this.NumeroDisposizioni = ko.observable(null);

                    var self = this;
                    if (data !== null) {
                        self.IdEsito(data.IdEsito);
                        self.RagioneSocialeOrdinante(data.RagioneSocialeOrdinante);
                        self.AbiOrdinante(data.AbiOrdinante);
                        self.SiaOrdinante(data.SiaOrdinante);
                        self.CodIdentificativoMandato(data.CodIdentificativoMandato);
                        self.TipoMandato(data.TipoMandato);
                        self.TipoEsito(data.TipoEsito);
                        self.CucOrdinante(data.CucOrdinante);
                        self.BicOrdinante(data.BicOrdinante);
                        self.IdCreditore(data.IdCreditore);
                        self.RagioneSocialeCreditoreEff(data.RagioneSocialeCreditoreEff);
                        self.RagioneSocialeDebitoreEff(data.RagioneSocialeDebitoreEff);
                        self.IdentificativoDebitore(data.IdentificativoDebitore);
                        self.Debitore = new App.Common.SoggettoBo(data.Debitore);
                        self.IdRichiesta(data.IdRichiesta);
                        self.TipoFlusso(data.TipoFlusso);
                        self.SequenzaIncasso(data.SequenzaIncasso);
                        self.ModificaRichiestaDa(data.ModificaRichiestaDa);
                        self.DomiciliazioneMandato(data.DomiciliazioneMandato);
                        self.CodiceMandatoOriginario(data.CodiceMandatoOriginario);
                        self.CreditoreOriginario(data.CreditoreOriginario);
                        self.IdCreditoreOriginario(data.IdCreditoreOriginario);
                        self.IbanDebitoreOriginario(data.IbanDebitoreOriginario);
                        self.Stato(data.Stato);
                        self.CodiceMandato(data.CodiceMandato);
                        self.EsitoFlusso(data.EsitoFlusso); 
                        self.MotivoAggiuntivoScarto(data.MotivoAggiuntivoScarto); 
                        self.CodiceScarto(data.CodiceScarto); 
                        self.IdEsitoDistinta(data.IdEsitoDistinta);
                        self.NumeroDisposizioni(data.NumeroDisposizioni);

                        if (data.DataRicezione !== null && data.DataRicezione !== "undefined")
                            self.DataRicezione(new Date(moment(data.DataRicezione)));
                        if (data.DataCreazione !== null && data.DataCreazione !== "undefined")
                            self.DataCreazione(new Date(moment(data.DataCreazione)));
                        if (data.DataSottoscrizioneMandato !== null && data.DataSottoscrizioneMandato !== "undefined")
                            self.DataSottoscrizioneMandato(new Date(moment(data.DataSottoscrizioneMandato)));
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
