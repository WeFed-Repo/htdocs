var App;
(function (App) {
    (function (Sct) {
        var EsitoAlBeneficiarioBo = (function () {
            function EsitoAlBeneficiarioBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.NomeSoggetto  = ko.observable(null);
                this.ModalitaEsito = ko.observable(null);
                this.Cuc           = ko.observable(null);
                this.Identifier = new App.Common.IdentifierBo(null);
                this.RagioneSociale = ko.observable(null);
                this.Debitore = ko.observable(null);
                this.DataCaricamento = ko.observable(null);
                this.DataEsecuzione = ko.observable(null);
                this.Importo = ko.observable(null);
                this.CodDivisa = ko.observable(null);
                this.CodUnivoco = ko.observable(null);
                this.CodCUC = ko.observable(null);
                this.CodRifOperazione = ko.observable(null);
                this.CausaleProp = ko.observable(null);
                this.CausaleISO = ko.observable(null);
                this.DataValutaBeneficiario = ko.observable(null);
                this.DataAccettazione = ko.observable(null);
                this.InfAgg = ko.observable(null);
                this.InfAggRic = ko.observable(null);
                this.InfRic = ko.observable(null);
                this.DebitoreEff = ko.observable(null);
                this.BancaDebitore = ko.observable(null);
                this.AbiDebitore = ko.observable(null);
                this.BancaCreditore = ko.observable(null);
                this.AbiCreditore = ko.observable(null);
                this.TitolareAcc = ko.observable(null);
                this.ContoCreditore = ko.observable(null);
                this.Beneficiario = ko.observable(null);
                this.CreditoreEff = ko.observable(null);
                this.MetodoPagamento = ko.observable(null);
                //this.Intestatario = 

                var self = this;
                if (data !== null) {
                    self.NomeSoggetto(data.NomeSoggetto);
                    self.ModalitaEsito(data.ModalitaEsito);
                    self.Cuc(data.Cuc);
                    self.Identifier = new App.Common.IdentifierBo(data.Identifier);
                    self.RagioneSociale(data.RagioneSociale);
                    self.Debitore(data.Debitore);
                    if (data.DataCaricamento !== null && data.DataCaricamento !== "undefined")
                            self.DataCaricamento(new Date(moment(data.DataCaricamento)));
                    if (data.DataEsecuzione !== null && data.DataEsecuzione !== "undefined")
                            self.DataEsecuzione(new Date(moment(data.DataEsecuzione)));
                    self.Importo(data.Importo);
                    self.CodDivisa(data.CodDivisa);
                    self.CodUnivoco(data.CodUnivoco);
                    self.CodCUC(data.CodCUC);
                    self.CodRifOperazione(data.CodRifOperazione);
                    self.CausaleProp(data.CausaleProp);
                    self.CausaleISO(data.CausaleISO);
                    if (data.DataValutaBeneficiario !== null && data.DataValutaBeneficiario !== "undefined")
                        self.DataValutaBeneficiario(new Date(moment(data.DataValutaBeneficiario)));
                    if (data.DataAccettazione !== null && data.DataAccettazione !== "undefined")
                        self.DataAccettazione(new Date(moment(data.DataAccettazione)));
                    self.InfAgg(data.InfAgg);
                    self.InfAggRic(data.InfAggRic);
                    self.InfRic(data.InfRic);
                    self.DebitoreEff(data.DebitoreEff);
                    self.BancaDebitore(data.BancaDebitore);
                    self.AbiDebitore(data.AbiDebitore);
                    self.BancaCreditore(data.BancaCreditore);
                    self.AbiCreditore(data.AbiCreditore);
                    self.TitolareAcc(data.TitolareAcc);
                    self.ContoCreditore(data.ContoCreditore);
                    self.CreditoreEff(data.CreditoreEff);
                    self.MetodoPagamento(data.MetodoPagamento);
                    self.Beneficiario(data.Beneficiario);

                    //if (data.DataEsecuzione !== null && data.DataEsecuzione !== "undefined")
                    //    self.DataEsecuzione(new Date(moment(data.DataEsecuzione)));

                    //self.NomeSoggetto(data.NomeSoggetto);
                    //self.ModalitaEsito(data.ModalitaEsito);
                    //self.Cuc(data.Cuc);
                }
            }
            return EsitoAlBeneficiarioBo;
        })();
        Sct.EsitoAlBeneficiarioBo = EsitoAlBeneficiarioBo;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));
