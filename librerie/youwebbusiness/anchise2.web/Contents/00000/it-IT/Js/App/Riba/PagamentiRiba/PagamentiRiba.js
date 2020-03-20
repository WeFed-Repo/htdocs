var App;
(function (App) {
    (function (Riba) {
        (function (PagamentiRiba) {
            PagamentiRiba.DisposizioneRibaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    this.DataScadenza = ko.observable(null);
                    this.Causale = ko.observable(null);
                    this.CodAbiDomiciliataria = ko.observable(null);
                    this.CodCabDomiciliataria = ko.observable(null);
                    this.DescrizioneCreditore = ko.observable(null);
                    this.NumeroAvviso = ko.observable(null);
                    this.TipoEffetto = ko.observable(null);
                    this.FlagVista = ko.observable(null);
                    this.AbiCabCheck = ko.observable(null);
                    this.RiferimentoOperazione = ko.observable(null);

                    if (data != null) {
                        if (data.DataScadenza !== null && data.DataScadenza !== "undefined") {
                            this.DataScadenza(new Date(moment(data.DataScadenza)));
                        }
                        this.Causale(data.Causale);
                        this.CodAbiDomiciliataria(data.CodAbiDomiciliataria);
                        this.CodCabDomiciliataria(data.CodCabDomiciliataria);
                        this.DescrizioneCreditore(data.DescrizioneCreditore);
                        this.NumeroAvviso(data.NumeroAvviso);
                        this.TipoEffetto(data.TipoEffetto);
                        this.FlagVista(data.FlagVista);
                        this.AbiCabCheck(data.AbiCabCheck);
                        this.RiferimentoOperazione(data.RiferimentoOperazione);
                    }
                }
            })();
        })(App.Riba.PagamentiRiba || (App.Riba.PagamentiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Riba) {
        (function (PagamentiRiba) {
            PagamentiRiba.DistintaRibaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDistintaBo.call(this, data);
                    this.SiaSubholding = ko.observable(null);
                    this.DataOraCaricamento = ko.observable(null);
                    this.ListCab = ko.observable(null);
                    this.IsMultiConto = ko.observable(null);
                    this.IsTelematico = ko.observable(null);
                    this.Disposizioni = ko.observableArray(null);
                    this.IdDivisa = 'EUR';

                    var self = this;
                    if (data != null) {
                        self.SiaSubholding(data.SiaSubholding);
                        if (data.DataOraCaricamento !== null && data.DataOraCaricamento !== "undefined") {
                            this.DataOraCaricamento(new Date(moment(data.DataOraCaricamento)));
                        }
                        self.ListCab(data.ListCab);
                        self.IsMultiConto(data.IsMultiConto);
                        self.IsTelematico(data.IsTelematico);
                        if (data.Disposizioni != null) {
                            ko.utils.arrayForEach(data.Disposizioni, function (item) {
                                self.Disposizioni.push(new App.Riba.PagamentiRiba.DisposizioneRibaBo(item));
                            });
                        }
                    }
                }
            })();
        })(App.Riba.PagamentiRiba || (App.Riba.PagamentiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Riba) {
        (function (PagamentiRiba) {
            PagamentiRiba.DisposizioneAvBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Riba.PagamentiRiba.DisposizioneRibaBo.call(this, data);

                    this.LocalitaDebitore = ko.observable(null);
                    this.IdFiscaleCreditore = ko.observable(null);
                    this.DataCreazione = ko.observable(null);
                    this.RifOperazione = ko.observable(null);

                    if (data != null) {
                        this.LocalitaDebitore(data.LocalitaDebitore);
                        this.IdFiscaleCreditore(data.IdFiscaleCreditore);
                        if (data.DataCreazione !== null && data.DataCreazione !== "undefined") {
                            this.DataCreazione(new Date(moment(data.DataCreazione)));
                        }
                        this.RifOperazione(data.RifOperazione);
                    }
                }
            })();
        })(App.Riba.PagamentiRiba || (App.Riba.PagamentiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Riba) {
        (function (PagamentiRiba) {
            PagamentiRiba.FilterDisposizioniAvBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    this.DataScadenzaDa = ko.observable(null);
                    this.DataScadenzaA = ko.observable(null);

                    App.Common.FilterDisposizioni.call(this, data);
                    
                    if (data != null) {
                        if (data.DataScadenzaDa !== null && data.DataScadenzaDa !== "undefined") {
                            this.DataScadenzaDa(new Date(moment(data.DataScadenzaDa)));
                        }
                        if (data.DataScadenzaA !== null && data.DataScadenzaA !== "undefined") {
                            this.DataScadenzaA(new Date(moment(data.DataScadenzaA)));
                        }
                    }
                }
            })();
        })(App.Riba.PagamentiRiba || (App.Riba.PagamentiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));