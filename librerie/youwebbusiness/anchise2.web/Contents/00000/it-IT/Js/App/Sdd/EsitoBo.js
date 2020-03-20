var App;
(function (App) {
    (function (Sdd) {
        var EsitoBo = (function () {
            function EsitoBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.IdEsito = ko.observable(null);
                this.TipoEsito = ko.observable(null);
                this.RagioneSocialeCreditore = ko.observable(null);
                this.RagioneSocialeDebitore = ko.observable(null);
                this.DataScadenza = ko.observable(null);
                this.DataFlusso = ko.observable(null);
                this.Importo = ko.observable(null);
                this.Divisa = ko.observable(null);
                this.TipoIncasso = ko.observable(null);
                this.StatoEsito = ko.observable(null);
                this.CodStatoErrore = ko.observable(null);
                this.NumeroDisposizioni = ko.observable(null);

                //Dettaglio
                this.CodiceSiaOrdinante = ko.observable(null);
                this.CodiceCucOrdinante = ko.observable(null);
                this.RapportoAbiOrdinante = ko.observable(null);
                this.IbanOrdinante = ko.observable(null);
                this.IbanCommissioniOrdinante = ko.observable(null);
                this.CodiceIdOrdinante = ko.observable(null);
                this.RagioneSocialeCreditoreEff = ko.observable(null);
                this.RagioneSocialeDebitoreEff = ko.observable(null);
                this.IdentificativoDebitore = ko.observable(null);
                this.IbanDebitore = ko.observable(null);
                this.BicDebitore = ko.observable(null);
                this.TipoDisposizione = ko.observable(null);
                this.CausaleIncassoId = ko.observable(null);
                this.IdUnivocoPag = ko.observable(null);
                this.SequenzaIncasso = ko.observable(null);
                this.DescrizioneRiconciliazione = ko.observable(null);
                this.NomeSupportoDistinta = ko.observable(null);
                this.CommissioneCodiceAbi = ko.observable(null);
                this.ImportoCommissione = ko.observable(null);
                this.DivisaCommissione = ko.observable(null);
                this.CodiceMandato = ko.observable(null);
                this.DataSottoscrizione = ko.observable(null);

                this.IdEsitoDistinta = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.IdEsito(data.IdEsito);
                    self.TipoEsito(data.TipoEsito);
                    self.RagioneSocialeCreditore(data.RagioneSocialeCreditore);
                    self.RagioneSocialeDebitore(data.RagioneSocialeDebitore);
                    self.Importo(data.Importo);
                    self.Divisa(data.Divisa);
                    self.TipoIncasso(data.TipoIncasso);
                    self.StatoEsito(data.StatoEsito);
                    self.CodStatoErrore(data.CodStatoErrore);
                    if (data.DataScadenza !== null && data.DataScadenza !== "undefined")
                        self.DataScadenza(new Date(moment(data.DataScadenza)));
                    if (data.DataFlusso !== null && data.DataFlusso !== "undefined")
                        self.DataFlusso(new Date(moment(data.DataFlusso)));
                    if (data.DataSottoscrizione !== null && data.DataSottoscrizione !== "undefined")
                        self.DataSottoscrizione(new Date(moment(data.DataSottoscrizione)));
                    self.CodiceSiaOrdinante(data.CodiceSiaOrdinante);
                    self.CodiceCucOrdinante(data.CodiceCucOrdinante);
                    self.RapportoAbiOrdinante(data.RapportoAbiOrdinante);
                    self.IbanOrdinante(data.IbanOrdinante);
                    self.IbanCommissioniOrdinante(data.IbanCommissioniOrdinante);
                    self.CodiceIdOrdinante(data.CodiceIdOrdinante);
                    self.RagioneSocialeCreditoreEff(data.RagioneSocialeCreditoreEff);
                    self.RagioneSocialeDebitoreEff(data.RagioneSocialeDebitoreEff);
                    self.IdentificativoDebitore(data.IdentificativoDebitore);
                    self.IbanDebitore(data.IbanDebitore);
                    self.BicDebitore(data.BicDebitore);
                    self.TipoDisposizione(data.TipoDisposizione);
                    self.CausaleIncassoId(data.CausaleIncassoId);
                    self.IdUnivocoPag(data.IdUnivocoPag);
                    self.SequenzaIncasso(data.SequenzaIncasso);
                    self.DescrizioneRiconciliazione(data.DescrizioneRiconciliazione);
                    self.NomeSupportoDistinta(data.NomeSupportoDistinta);
                    self.CommissioneCodiceAbi(data.CommissioneCodiceAbi);
                    self.ImportoCommissione(data.ImportoCommissione);
                    self.DivisaCommissione(data.DivisaCommissione);
                    self.CodiceMandato(data.CodiceMandato);
                    self.NumeroDisposizioni(data.NumeroDisposizioni);
                    self.IdEsitoDistinta(data.IdEsitoDistinta);
                }
            }
            return EsitoBo;
        })();
        Sdd.EsitoBo = EsitoBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));
