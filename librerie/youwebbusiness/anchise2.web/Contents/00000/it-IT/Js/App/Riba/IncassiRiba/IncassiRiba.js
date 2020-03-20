var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.DisposizioneRibaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    this.DataScadenza = ko.observable(null);
                    this.CodAbiDomiciliataria = ko.observable(null);
                    this.CodCabDomiciliataria = ko.observable(null);
                    this.DenominazioneCreditore = ko.observable(null);
                    this.DescrizioneCreditore = ko.observable(null);
                    this.DescrizioneRiba = ko.observable(null);
                    this.NumeroRicevuta = ko.observable(null);
                    this.TipoDocumento = ko.observable(null);
                    this.CreditoreNonResidente = ko.observable(null);
                    this.RichiestaEsito = ko.observable(null);
                    this.FlgRibaEstera = ko.observable(null);
                    this.ListCabOrdinante = ko.observable(null);

                    this.Debitore = new App.Common.SoggettoBo(null);

                    if (data != null) {
                        if (data.DataScadenza !== null && data.DataScadenza !== "undefined") {
                            this.DataScadenza(new Date(moment(data.DataScadenza)));
                        }
                        this.CodAbiDomiciliataria(data.CodAbiDomiciliataria);
                        this.CodCabDomiciliataria(data.CodCabDomiciliataria);
                        this.DenominazioneCreditore(data.DenominazioneCreditore);
                        this.DescrizioneCreditore(data.DescrizioneCreditore);
                        this.DescrizioneRiba(data.DescrizioneRiba);
                        this.NumeroRicevuta(data.NumeroRicevuta);
                        this.TipoDocumento(data.TipoDocumento);
                        this.CreditoreNonResidente(data.CreditoreNonResidente);
                        this.RichiestaEsito(data.RichiestaEsito);
                        this.FlgRibaEstera(data.FlgRibaEstera);
                        this.ListCabOrdinante(data.ListCabOrdinante);

                        this.Debitore = new App.Common.SoggettoBo(data.Debitore);
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.DistintaRibaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDistintaBo.call(this, data);

                    this.SiaOrdinante = ko.observable(null);
                    this.DataOraCaricamento = ko.observable(null);
                    this.Disposizioni = ko.observableArray(null);
                    this.IdDivisa = 'EUR';

                    var self = this;
                    if (data != null) {
                        self.SiaOrdinante(data.SiaOrdinante);
                        if (data.DataOraCaricamento !== null && data.DataOraCaricamento !== "undefined") {
                            this.DataOraCaricamento(new Date(moment(data.DataOraCaricamento)));
                        }
                        if (data.Disposizioni != null) {
                            ko.utils.arrayForEach(data.Disposizioni, function (item) {
                                self.Disposizioni.push(new App.Riba.IncassiRiba.DisposizioneRibaBo(item));
                            });
                        }
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.FilterEsito = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Core.BasePagingFilterAsync.call(this, data);

                    this.ListaRapporti = ko.observable(null);
                    this.IdAzienda = ko.observable(null);
                    this.CodiceAbi = ko.observable(null);
                    this.DataScadenzaFrom = ko.observable(null);
                    this.DataScadenzaTo = ko.observable(null);
                    this.DataCaricamentoFrom = ko.observable(null);
                    this.DataCaricamentoTo = ko.observable(null);
                    this.ImportoFrom = ko.observable(null);
                    this.ImportoTo = ko.observable(null);
                    this.DescrizioneDebitore = ko.observable(null);

                    this.ListaClassiServizio = ko.observableArray(null);

                    var self = this;
                    if (data != null) {
                        self.ListaRapporti(data.ListaRapporti);
                        self.IdAzienda(data.IdAzienda);
                        self.CodiceAbi(data.CodiceAbi);
                        self.ImportoFrom(data.ImportoFrom);
                        self.ImportoTo(data.ImportoTo);
                        self.DescrizioneDebitore(data.DescrizioneDebitore);

                        if (data.DataScadenzaFrom !== null && data.DataScadenzaFrom !== "undefined") {
                            this.DataScadenzaFrom(new Date(moment(data.DataScadenzaFrom)));
                        }
                        if (data.DataScadenzaTo !== null && data.DataScadenzaTo !== "undefined") {
                            this.DataScadenzaTo(new Date(moment(data.DataScadenzaTo)));
                        }
                        if (data.DataCaricamentoFrom !== null && data.DataCaricamentoFrom !== "undefined") {
                            this.DataCaricamentoFrom(new Date(moment(data.DataCaricamentoFrom)));
                        }
                        if (data.DataCaricamentoTo !== null && data.DataCaricamentoTo !== "undefined") {
                            this.DataCaricamentoTo(new Date(moment(data.DataCaricamentoTo)));
                        }

                        if (data.ListaClassiServizio != null) {
                            ko.utils.arrayForEach(data.ListaClassiServizio, function (item) {
                                self.ListaClassiServizio.push(item);
                            });
                        }
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));

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

var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.EsitoDetailMAVBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Riba.IncassiRiba.EsitoBo.call(this, data);

                    this.Divisa = ko.observable(null);
                    this.TipoDebitore = ko.observable(null);
                    this.TipoDebitoreDesc = ko.observable(null);
                    this.ImportoSpese = ko.observable(null);
                    this.RifPromemoria = ko.observable(null);
                    this.DataValuta = ko.observable(null);

                    var self = this;
                    if (data != null) {
                        self.Divisa(data.Divisa);
                        self.TipoDebitore(data.TipoDebitore);
                        self.TipoDebitoreDesc(data.TipoDebitoreDesc);
                        self.ImportoSpese(data.ImportoSpese);
                        self.RifPromemoria(data.RifPromemoria);

                        if (data.DataValuta !== null && data.DataValuta !== "undefined") {
                            this.DataValuta(new Date(moment(data.DataValuta)));
                        }
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));

var App;
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

var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.EsitoDetailRIBABo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Riba.IncassiRiba.EsitoBo.call(this, data);

                    this.Divisa = ko.observable(null);
                    this.TipoDebitore = ko.observable(null);
                    this.TipoDebitoreDesc = ko.observable(null);
                    this.ImportoSpese = ko.observable(null);
                    this.RifPromemoria = ko.observable(null);
                    this.DataValuta = ko.observable(null);
                    
                    var self = this;
                    if (data != null) {
                        self.Divisa(data.Divisa);
                        self.TipoDebitore(data.TipoDebitore);
                        self.TipoDebitoreDesc(data.TipoDebitoreDesc);
                        self.ImportoSpese(data.ImportoSpese);
                        self.RifPromemoria(data.RifPromemoria);

                        if (data.DataValuta !== null && data.DataValuta !== "undefined") {
                            this.DataValuta(new Date(moment(data.DataValuta)));
                        }
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));

var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.EsitoDetailScartoRIBABo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Riba.IncassiRiba.EsitoBo.call(this, data);

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
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));

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