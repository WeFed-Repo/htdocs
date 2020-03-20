var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.EsitoBo = (function () {
                return function(data) {
                    if (typeof data === "undefined") { data = null; }

                    this.IdEsito = ko.observable(null);
                    this.RagioneSocialeOrdinante = ko.observable(null);
                    this.AbiOrdinante = ko.observable(null);
                    this.SiaOrdinante = ko.observable(null);
                    this.DataRicezione = ko.observable(null);
                    this.DataCreazione = ko.observable(null);
                    this.CodicePrevisionale = ko.observable(null);
                    this.CodiceRichiesta = ko.observable(null);
                    this.CucOrdinante = ko.observable(null);
                    this.BicOrdinante = ko.observable(null);
                    this.IdCreditore = ko.observable(null);
                    this.Debitore = new App.Common.SoggettoBo(null);
                    this.TipoFlusso = ko.observable(null);
                    this.TipoEsito = ko.observable(null);

                    this.TrimestreDiRiferimento = ko.observable(null);
                    this.AnnoDiRiferimento = ko.observable(null); 
                    this.ImportoTotaleTrimestre = ko.observable(null);
                    this.NumMandatiCred = ko.observable(null);
                    this.PrezzoMandatoCred = ko.observable(null);
                    this.ImportoTotMandatiCred = ko.observable(null);
                    this.PrezzoFlatMandatoCred = ko.observable(null);
                    this.NumMandatiPag = ko.observable(null);
                    this.PrezzoMandatoPag = ko.observable(null);
                    this.ImportoTotMandatiPag = ko.observable(null);
                    this.PrezzoFlatMandatoPag = ko.observable(null);
                    this.ImportoTotFlat = ko.observable(null);
                    this.Motivazione = ko.observable(null);
                    this.DomiciliazioneMandato = ko.observable(null);
                    this.TipoRichiesta = ko.observable(null);
                    this.IdentificativoRendiconto = ko.observable(null);

                    var self = this;
                    if (data !== null) {
                        self.IdEsito(data.IdEsito);
                        self.RagioneSocialeOrdinante(data.RagioneSocialeOrdinante);
                        self.AbiOrdinante(data.AbiOrdinante);
                        self.SiaOrdinante(data.SiaOrdinante);
                        self.CodicePrevisionale(data.CodicePrevisionale);
                        self.CodiceRichiesta(data.CodiceRichiesta);
                        self.TipoEsito(data.TipoEsito);
                        self.CucOrdinante(data.CucOrdinante);
                        self.BicOrdinante(data.BicOrdinante);
                        self.IdCreditore(data.IdCreditore);
                        self.Debitore = new App.Common.SoggettoBo(data.Debitore);
                        self.TipoFlusso(data.TipoFlusso);
                        self.TipoFlusso(data.TipoFlusso);

                        self.TrimestreDiRiferimento(data.TrimestreDiRiferimento);
                        self.AnnoDiRiferimento(data.AnnoDiRiferimento);
                        self.ImportoTotaleTrimestre(data.ImportoTotaleTrimestre);
                        self.NumMandatiCred(data.NumMandatiCred);
                        self.PrezzoMandatoCred(data.PrezzoMandatoCred);
                        self.ImportoTotMandatiCred(data.ImportoTotMandatiCred);
                        self.PrezzoFlatMandatoCred(data.PrezzoFlatMandatoCred);
                        self.NumMandatiPag(data.NumMandatiPag);
                        self.PrezzoMandatoPag(data.PrezzoMandatoPag);
                        self.ImportoTotMandatiPag(data.ImportoTotMandatiPag);
                        self.PrezzoFlatMandatoPag(data.PrezzoFlatMandatoPag);
                        self.ImportoTotFlat(data.ImportoTotFlat);
                        self.Motivazione(data.Motivazione);
                        self.DomiciliazioneMandato(data.DomiciliazioneMandato);
                        self.TipoRichiesta(data.TipoRichiesta);
                        self.IdentificativoRendiconto(data.IdentificativoRendiconto);

                        if (data.DataRicezione !== null && data.DataRicezione !== "undefined")
                            self.DataRicezione(new Date(moment(data.DataRicezione)));
                        if (data.DataCreazione !== null && data.DataCreazione !== "undefined")
                            self.DataCreazione(new Date(moment(data.DataCreazione)));
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
