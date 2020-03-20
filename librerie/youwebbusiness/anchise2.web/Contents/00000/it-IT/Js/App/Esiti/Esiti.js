var App;
(function (App) {
    (function (Esiti) {
            Esiti.FilterEsito = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Core.BasePagingFilterAsync.call(this, data);

                    this.IdEsito = ko.observable(null);
                    this.ListaRapporti = ko.observable(null);
                    this.IdAzienda = ko.observable(null);
                    this.CodiceAbi = ko.observable(null);
                    this.TipoDato = ko.observable(null);
                    this.DataInvioFrom = ko.observable(null);
                    this.DataInvioTo = ko.observable(null);
                    this.DataEsecuzioneFrom = ko.observable(null);
                    this.DataEsecuzioneTo = ko.observable(null);
                    this.ImportoFrom = ko.observable(null);
                    this.ImportoTo = ko.observable(null);
                    this.ImportoDistFrom = ko.observable(null);
                    this.ImportoDistTo = ko.observable(null);
                    this.Stato = ko.observable(null);

                    this.ListaClassiServizio = ko.observableArray(null);

                    var self = this;
                    if (data != null) {
                        self.IdEsito(data.IdEsito);
                        self.ListaRapporti(data.ListaRapporti);
                        self.IdAzienda(data.IdAzienda);
                        self.CodiceAbi(data.CodiceAbi);
                        self.TipoDato(data.TipoDato);
                        self.ImportoFrom(data.ImportoFrom);
                        self.ImportoTo(data.ImportoTo);
                        self.ImportoDistFrom(data.ImportoDistFrom);
                        self.ImportoDistTo(data.ImportoDistTo);
                        self.Stato(data.Stato);

                        if (data.DataInvioFrom !== null && data.DataInvioFrom !== "undefined" && data.DataInvioFrom !== undefined) {
                            this.DataInvioFrom(new Date(moment(data.DataInvioFrom)));
                        }
                        if (data.DataInvioTo !== null && data.DataInvioTo !== "undefined" && data.DataInvioTo !== undefined) {
                            this.DataInvioTo(new Date(moment(data.DataInvioTo)));
                        }
                        if (data.DataEsecuzioneFrom !== null && data.DataEsecuzioneFrom !== "undefined" && data.DataEsecuzioneFrom !== undefined) {
                            this.DataEsecuzioneFrom(new Date(moment(data.DataEsecuzioneFrom)));
                        }
                        if (data.DataEsecuzioneTo !== null && data.DataEsecuzioneTo !== "undefined" && data.DataEsecuzioneTo !== undefined) {
                            this.DataEsecuzioneTo(new Date(moment(data.DataEsecuzioneTo)));
                        }

                        if (data.ListaClassiServizio != null) {
                            ko.utils.arrayForEach(data.ListaClassiServizio, function (item) {
                                self.ListaClassiServizio.push(item);
                            });
                        }
                    }
                }
            })();
    })(App.Esiti || (App.Esiti = {}));
})(App || (App = {}));

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

var App;
(function (App) {
    (function (Esiti) {
        var StatoAvanzamentoBo = (function () {
            function StatoAvanzamentoBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.StatoMessaggio = ko.observable(null);
                this.DataCreazione = ko.observable(null);
                this.DataCaricamento = ko.observable(null);
                this.NomeTag = ko.observable(null);
                this.DescrizioneLibera = ko.observable(null);
                this.CausaleEsito = ko.observable(null);
                this.CodErroreEsteso = ko.observable(null);

                var self = this;

                if (data != null) {
                    self.StatoMessaggio(data.StatoMessaggio);
                    if (data.DataCreazione !== null && data.DataCreazione !== "undefined") {
                        self.DataCreazione(new Date(moment(data.DataCreazione)));
                    }
                    if (data.DataCaricamento !== null && data.DataCaricamento !== "undefined") {
                        self.DataCaricamento(new Date(moment(data.DataCaricamento)));
                    }
                    self.NomeTag(data.NomeTag);
                    self.DescrizioneLibera(data.DescrizioneLibera);
                    self.CausaleEsito(data.CausaleEsito);
                    self.CodErroreEsteso(data.CodErroreEsteso);
                }
            }
            return StatoAvanzamentoBo;
        })();
        Esiti.StatoAvanzamentoBo = StatoAvanzamentoBo;
    })(App.Esiti || (App.Esiti = {}));
    var Esiti = App.Esiti;
})(App || (App = {}));

var App;
(function (App) {
    (function (Esiti) {
        Esiti.CommissioniBo = (function () {
            return function (data) {
                if (typeof data === "undefined") { data = null; }

                this.IdCommissione = ko.observable(null);
                this.ImportoCommissione = ko.observable(null);
                this.DivisaCommissione = ko.observable(null);
                this.DescrizioneCommissione = ko.observable(null);

                var self = this;

                if (data != null) {
                    self.IdCommissione(data.IdCommissione);
                    self.ImportoCommissione(data.ImportoCommissione);
                    self.DivisaCommissione(data.DivisaCommissione);
                    self.DescrizioneCommissione(data.DescrizioneCommissione);
                }
            }
        })();
    })(App.Esiti || (App.Esiti = {}));
})(App || (App = {}));

var App;
(function (App) {
    (function (Esiti) {
        Esiti.ErroreScartoRibaBo = (function () {
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
                this.CodiceErrore = ko.observable(null);;

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
    })(App.Esiti || (App.Esiti = {}));
})(App || (App = {}));

var App;
(function (App) {
    (function (Esiti) {
        Esiti.EsitoDetailScartoRibaBo = (function () {
            return function (data) {
                if (typeof data === "undefined") { data = null; }

                App.Esiti.EsitoBo.call(this, data);

                this.NomeSupporto = ko.observable(null);
                this.DataCreazione = ko.observable(null);
                this.IdDistinta = new App.Common.IdentifierBo(null);
                this.IsIncrociata = ko.observable(null);

                var self = this;

                if (data != null) {
                    self.NomeSupporto(data.NomeSupporto);
                    self.IsIncrociata(data.IsIncrociata);

                    if (data.DataCreazione !== null && data.DataCreazione !== "undefined") {
                        this.DataCreazione(new Date(moment(data.DataCreazione)));
                    }
                    self.IdDistinta = new App.Common.IdentifierBo(data.IdDistinta);

                }
            }
        })();
    })(App.Esiti || (App.Esiti = {}));
})(App || (App = {}));

var App;
(function (App) {
    (function (Esiti) {
        (function (BollettinoBanc) {
            var FilterEsitoBollettinoBanc = (function () {
                function FilterEsitoBollettinoBanc(data) {
                    if (typeof data === "undefined") { data = null; }

                    App.Core.BasePagingFilterAsync.call(this, data);

                    this.IdEsito = ko.observable(null);
                    this.IdAzienda = ko.observable(null);
                    this.ListaRapporti = ko.observable(null);
                    this.CodiceAbi = ko.observable(null);
                    this.DataPagamentoFrom = ko.observable(null);
                    this.DataPagamentoTo = ko.observable(null);

                    this.DataValutaFrom = ko.observable(null);
                    this.DataValutaTo = ko.observable(null);

                    this.ImportoFrom = ko.observable(null);
                    this.ImportoTo = ko.observable(null);

                    this.ListaClassiServizio = ko.observableArray(null);

                    var self = this;
                    if (data != null) {
                        self.IdEsito(data.IdEsito);
                        self.ListaRapporti(data.ListaRapporti);
                        self.IdAzienda(data.IdAzienda);
                        self.CodiceAbi(data.CodiceAbi);
                        self.ImportoFrom(data.ImportoFrom);
                        self.ImportoTo(data.ImportoTo);

                        if (data.DataPagamentoFrom !== null && data.DataPagamentoFrom !== "undefined" && data.DataPagamentoFrom !== undefined) {
                            this.DataPagamentoFrom(new Date(moment(data.DataPagamentoFrom)));
                        }
                        if (data.DataPagamentoTo !== null && data.DataPagamentoTo !== "undefined" && data.DataPagamentoTo !== undefined) {
                            this.DataPagamentoTo(new Date(moment(data.DataPagamentoTo)));
                        }
                        if (data.DataValutaFrom !== null && data.DataValutaFrom !== "undefined" && data.DataValutaFrom !== undefined) {
                            this.DataValutaFrom(new Date(moment(data.DataValutaFrom)));
                        }
                        if (data.DataValutaTo !== null && data.DataValutaTo !== "undefined" && data.DataValutaTo !== undefined) {
                            this.DataValutaTo(new Date(moment(data.DataValutaTo)));
                        }

                        if (data.ListaClassiServizio != null) {
                            ko.utils.arrayForEach(data.ListaClassiServizio, function (item) {
                                self.ListaClassiServizio.push(item);
                            });
                        }
                    }
                }
                return FilterEsitoBollettinoBanc;
            })();
            BollettinoBanc.FilterEsitoBollettinoBanc = FilterEsitoBollettinoBanc;
        })(App.Esiti.BollettinoBanc || (App.Esiti.BollettinoBanc = {}))
    })(App.Esiti || (App.Esiti = {}));
    var Esiti = App.Esiti;
})(App || (App = {}));

var App;
(function (App) {
    (function (Esiti) {
        (function (BollettinoBanc) {
            var EsitoBollettinoBancBo = (function () {
                function EsitoBollettinoBancBo(data) {
                    if (typeof data === "undefined") { data = null; }
                    
                    this.Identifier = new App.Common.IdentifierBo(null);
                    this.RagSocIntestatario = ko.observable(null);
                    this.DataPagamento = ko.observable(null);
                    this.DataValuta = ko.observable(null);
                    this.ImportoBollettino = ko.observable(null);
                    this.Divisa = ko.observable(null);
                    this.Causale = ko.observable(null);
                    this.CodiceIdentificativo = ko.observable(null);
                    this.AbiEsattrice = ko.observable(null);
                    this.CabEsattrice = ko.observable(null);
                    this.DescrizioneEsattrice = ko.observable(null);
                    this.Abi = ko.observable(null);
                    this.Cab = ko.observable(null);
                    this.Conto = ko.observable(null);
                    this.CinIban = ko.observable(null);
                    this.CodicePaese = ko.observable(null);
                    this.CheckDigit = ko.observable(null);
                    this.ModalitaPagamento = ko.observable(null);
                    this.RiferimentoDebito = ko.observable(null);
                    this.CodificaBollettino = ko.observable(null);


                    var self = this;
                    if (data != null) {
                        self.Identifier = new App.Common.IdentifierBo(data.Identifier);
                        self.RagSocIntestatario(data.RagSocIntestatario);

                        if (data.DataPagamento !== null && data.DataPagamento !== "undefined" && data.DataPagamento !== undefined) {
                            this.DataPagamento(new Date(moment(data.DataPagamento)));
                        }
                        if (data.DataValuta !== null && data.DataValuta !== "undefined" && data.DataValuta !== undefined) {
                            this.DataValuta(new Date(moment(data.DataValuta)));
                        }

                        self.ImportoBollettino(data.ImportoBollettino);
                        self.Divisa(data.Divisa);
                        self.Causale(data.Causale);
                        self.CodiceIdentificativo(data.CodiceIdentificativo);
                        self.AbiEsattrice(data.AbiEsattrice);
                        self.CabEsattrice(data.CabEsattrice);
                        self.DescrizioneEsattrice(data.DescrizioneEsattrice);
                        self.Abi(data.Abi);
                        self.Cab(data.Cab);
                        self.Conto(data.Conto);
                        self.CinIban(data.CinIban);
                        self.CodicePaese(data.CodicePaese);
                        self.CheckDigit(data.CheckDigit);
                        self.ModalitaPagamento(data.ModalitaPagamento);
                        self.RiferimentoDebito(data.RiferimentoDebito);
                        self.CodificaBollettino(data.CodificaBollettino);
                    }
                }
                return EsitoBollettinoBancBo;
            })();
            BollettinoBanc.EsitoBollettinoBancBo = EsitoBollettinoBancBo;
        })(App.Esiti.BollettinoBanc || (App.Esiti.BollettinoBanc = {}))
    })(App.Esiti || (App.Esiti = {}));
    var Esiti = App.Esiti;
})(App || (App = {}));