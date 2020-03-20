var App;
(function (App) {
    (function (Esiti) {
        (function (Pagamenti) {
            var EsitoDetailBo = (function () {
                function EsitoDetailBo (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Esiti.EsitoBo.call(this, data);

                    this.DebitoreEffettivo = ko.observable(null);
                    this.CreditoreEffettivo = ko.observable(null);
                    this.ModalitaPagamento = ko.observable(null);
                    this.CausaleIso = ko.observable(null);
                    this.EsitoBeneficiario = ko.observable(null);
                    this.CodiceUnivoco = ko.observable(null);
                    this.CausaleLibera = ko.observable(null);
                    this.NomeSupportoDistinta = ko.observable(null);
                    this.DataAccettazione = ko.observable(null);
                    this.DataValutaOrdinante = ko.observable(null);
                    this.DataValutaBeneficiario = ko.observable(null);
                    this.DataEsecuzioneBanca = ko.observable(null);
                    this.CausaleBancaria = ko.observable(null);
                    this.CommissioneImporto = ko.observable(null);
                    this.TassoCambioAddebito = ko.observable(null);
                    this.Cro = ko.observable(null);
                    this.IsSepa = ko.observable(null);
                    this.IsPsd = ko.observable(null);
                    this.IdModalitaPagamento = ko.observable(null);
                    this.DataInvio = ko.observable(null);
                    this.IdentificativoPagamento = ko.observable(null);
                    this.RiferimentoOperazione = ko.observable(null);
                    this.StatoEsitoDisposizione = ko.observable(null);
                    this.IsCodMovEsteso = ko.observable(null);
                    this.CommissioneDescrizione = ko.observable(null);
                    this.ImportoAddebito = ko.observable(null);
                    this.Causale = ko.observable(null);
                    this.TipoDisposizione = ko.observable(null);
                    this.ImportoCommissioniGruppo = ko.observable(null);
                    this.DivisaCommissioniGruppo = ko.observable(null);
                    this.CommissioneDivisa = ko.observable(null);
                    this.DivisaAddebito = ko.observable(null);

                    var self = this;
                    if (data != null) {
                        self.DebitoreEffettivo(data.DebitoreEffettivo);
                        self.CreditoreEffettivo(data.CreditoreEffettivo);
                        self.ModalitaPagamento(data.ModalitaPagamento);
                        self.CausaleIso(data.CausaleIso);
                        self.EsitoBeneficiario(data.EsitoBeneficiario);
                        self.CodiceUnivoco(data.CodiceUnivoco);
                        self.CausaleLibera(data.CausaleLibera);
                        self.NomeSupportoDistinta(data.NomeSupportoDistinta);
                        if (data.DataAccettazione !== null && data.DataAccettazione !== "undefined") {
                            this.DataAccettazione(new Date(moment(data.DataAccettazione)));
                        }
                        if (data.DataValutaOrdinante !== null && data.DataValutaOrdinante !== "undefined") {
                            this.DataValutaOrdinante(new Date(moment(data.DataValutaOrdinante)));
                        }
                        if (data.DataValutaBeneficiario !== null && data.DataValutaBeneficiario !== "undefined") {
                            this.DataValutaBeneficiario(new Date(moment(data.DataValutaBeneficiario)));
                        }
                        if (data.DataEsecuzioneBanca !== null && data.DataEsecuzioneBanca !== "undefined") {
                            this.DataEsecuzioneBanca(new Date(moment(data.DataEsecuzioneBanca)));
                        }
                        self.CausaleBancaria(data.CausaleBancaria);
                        self.CommissioneImporto(data.CommissioneImporto);
                        self.TassoCambioAddebito(data.TassoCambioAddebito);
                        self.Cro(data.Cro);
                        self.IsSepa(data.IsSepa);
                        self.IsPsd(data.IsPsd);
                        self.IdModalitaPagamento(data.IdModalitaPagamento);

                        if (data.DataInvio !== null && data.DataInvio !== "undefined") {
                            this.DataInvio(new Date(moment(data.DataInvio)));
                        }
                        self.IdentificativoPagamento(data.IdentificativoPagamento);
                        self.RiferimentoOperazione(data.RiferimentoOperazione);
                        self.StatoEsitoDisposizione(data.StatoEsitoDisposizione);
                        self.IsCodMovEsteso(data.IsCodMovEsteso);
                        self.CommissioneDescrizione(data.CommissioneDescrizione);
                        self.ImportoAddebito(data.ImportoAddebito);
                        self.Causale(data.Causale);
                        self.TipoDisposizione(data.TipoDisposizione);
                        self.ImportoCommissioniGruppo(data.ImportoCommissioniGruppo);
                        self.DivisaCommissioniGruppo(data.DivisaCommissioniGruppo);
                        self.CommissioneDivisa(data.CommissioneDivisa);
                        self.DivisaAddebito(data.DivisaAddebito);
                    }
                }
                return EsitoDetailBo;
            })();
            Pagamenti.EsitoDetailBo = EsitoDetailBo;
        })(App.Esiti.Pagamenti || (App.Esiti.Pagamenti = {}))
    })(App.Esiti || (App.Esiti = {}));
    var Esiti = App.Esiti;
})(App || (App = {}));
