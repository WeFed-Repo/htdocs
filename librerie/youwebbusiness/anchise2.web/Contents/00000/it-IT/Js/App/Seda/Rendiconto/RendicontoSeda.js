var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.FilterEsito = (function () {
                return function(data) {
                    if (typeof data === "undefined") { data = null; }
                    var self = this;

                    self.CodiceAbi = ko.observable(null);
                    self.IdAzienda = ko.observable(null);
                    self.TipoFlusso = ko.observable(null);
                    self.DataCreazioneFrom = ko.observable(null);
                    self.DataCreazioneTo = ko.observable(null);
                    self.DataRicezioneFrom = ko.observable(null);
                    self.DataRicezioneTo = ko.observable(null);
                    //self.ClassiServizio = ko.observable(null);
                    //self.BloccoLogico = ko.observable(null);

                    App.Core.BasePagingFilterAsync.call(this, data);

                    if (data !== null) {
                        self.CodiceAbi(data.CodiceAbi);
                        self.IdAzienda(data.IdAzienda);
                        self.TipoFlusso(data.TipoFlusso);
                        //self.BloccoLogico(data.BloccoLogico);

                        if (data.DataCreazioneFrom !== null && typeof data.DataCreazioneFrom !== "undefined")
                            self.DataCreazioneFrom(new Date(moment(data.DataCreazioneFrom)));
                        if (data.DataCreazioneTo !== null && typeof data.DataCreazioneTo !== "undefined")
                            self.DataCreazioneTo(new Date(moment(data.DataCreazioneTo)));
                        if (data.DataRicezioneFrom !== null && typeof data.DataRicezioneFrom !== "undefined")
                            self.DataRicezioneFrom(new Date(moment(data.DataRicezioneFrom)));
                        if (data.DataRicezioneTo !== null && typeof data.DataRicezioneTo !== "undefined")
                            self.DataRicezioneTo(new Date(moment(data.DataRicezioneTo)));

                        //if (data.ClassiServizio != null)
                        //    ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                        //        self.ClassiServizio.push(item);
                        //    });
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
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

var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.DisposizioneSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    this.TipoSoggetto = ko.observable(null);
                    this.IdentificativoCreditore = ko.observable(null);
                    this.Qrtr = ko.observable(null);
                    this.Year = ko.observable(null);
                    this.MndtTp = ko.observable(null);
                    this.CdtrAgt = ko.observable(null);
                    this.DbtrAgt = ko.observable(null);
                    this.RqstTp = ko.observable(null);
                    this.OrgnlPrevId = ko.observable(null);
                    this.InqryId = ko.observable(null);

                    var self = this;
                    if (data !== null) {
                        self.TipoSoggetto(data.TipoSoggetto);
                        self.IdentificativoCreditore(data.IdentificativoCreditore);
                        self.Qrtr(data.Qrtr);
                        self.Year(data.Year);
                        self.MndtTp(data.MndtTp);
                        self.CdtrAgt(data.CdtrAgt);
                        self.DbtrAgt(data.DbtrAgt);
                        self.RqstTp(data.RqstTp);
                        self.OrgnlPrevId(data.OrgnlPrevId);
                        self.InqryId(data.InqryId);
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));

})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.FilterIdentificativoPrevisionale = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    var self = this;

                    self.IdAzienda = ko.observable(null);
                    self.IdentificativoPrevisionale = ko.observable(null);
                    self.BicDebitore = ko.observable(null);
                    self.TrimestreRichiesto = ko.observable(null);
                    self.AnnoRichiesto = ko.observable(null);
                    self.AbiOrdinante = ko.observable(null);

                    App.Core.BasePagingFilterAsync.call(this, data);

                    if (data !== null) {
                        self.IdAzienda(data.IdAzienda);
                        self.IdentificativoPrevisionale(data.IdentificativoPrevisionale);
                        self.BicDebitore(data.BicDebitore);
                        self.TrimestreRichiesto(data.TrimestreRichiesto);
                        self.AnnoRichiesto(data.AnnoRichiesto);
                        self.AbiOrdinante(data.AbiOrdinante);
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.DisposizioneSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    this.TipoSoggetto = ko.observable(null);
                    this.IdentificativoCreditore = ko.observable(null);
                    this.Qrtr = ko.observable(null);
                    this.Year = ko.observable(null);
                    this.MndtTp = ko.observable(null);
                    this.CdtrAgt = ko.observable(null);
                    this.DbtrAgt = ko.observable(null);
                    this.RqstTp = ko.observable(null);
                    this.OrgnlPrevId = ko.observable(null);
                    this.InqryId = ko.observable(null);

                    var self = this;
                    if (data !== null) {
                        self.TipoSoggetto(data.TipoSoggetto);
                        self.IdentificativoCreditore(data.IdentificativoCreditore);
                        self.Qrtr(data.Qrtr);
                        self.Year(data.Year);
                        self.MndtTp(data.MndtTp);
                        self.CdtrAgt(data.CdtrAgt);
                        self.DbtrAgt(data.DbtrAgt);
                        self.RqstTp(data.RqstTp);
                        self.OrgnlPrevId(data.OrgnlPrevId);
                        self.InqryId(data.InqryId);
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));

})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            var DettagliMandatoBo = (function () {
                function DettagliMandatoBo(data) {
                    if (typeof data === "undefined") { data = null; }
                    
                    this.IdEsito = ko.observable(null);
                    this.IdFlussoEsito = ko.observable(null);
                    this.CodiceMandato = ko.observable(null);
                    this.StatoMandato = ko.observable(null);
                    this.DataAttivazioneMandato = ko.observable(null);
                    this.DomiciliazioneMandato = ko.observable(null);
                    this.TipoMandato = ko.observable(null);
                    this.DataRevocaMandato = ko.observable(null);
                    this.PrezzoSingoloMandato = ko.observable(null);

                    var self = this;
                    if (data !== null) {
                        self.IdEsito(data.IdEsito);
                        self.IdFlussoEsito(data.IdFlussoEsito);
                        self.CodiceMandato(data.CodiceMandato);
                        self.StatoMandato(data.StatoMandato);
                        if (data.DataAttivazioneMandato !== null && data.DataAttivazioneMandato !== "undefined")
                            self.DataAttivazioneMandato(new Date(moment(data.DataAttivazioneMandato)));
                        self.DomiciliazioneMandato(data.DomiciliazioneMandato);
                        self.TipoMandato(data.TipoMandato);
                        if (data.DataRevocaMandato !== null && data.DataRevocaMandato !== "undefined")
                            self.DataRevocaMandato(new Date(moment(data.DataRevocaMandato)));
                        self.PrezzoSingoloMandato(data.PrezzoSingoloMandato);
                    }
                }
                return DettagliMandatoBo;
            })();
            Seda.DettagliMandatoBo = DettagliMandatoBo;
        })(App.Rendiconto || (App.Rendiconto = {}));
    })(App.Seda || (App.Seda = {}));
    var Seda = App.Seda;
})(App || (App = {}));

var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.IdentificativoPrevisionaleSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    var self = this;

                    self.IdentificativoPrevisionale = ko.observable(null);
                    self.BICDebitore = ko.observable(null);
                    self.Trimestre = ko.observable(null);
                    self.Anno = ko.observable(null);
                    self.IdEsitoDispositivo = ko.observable(null);

                    App.Core.BasePagingFilterAsync.call(this, data);

                    if (data !== null) {
                        self.IdentificativoPrevisionale(data.IdentificativoPrevisionale);
                        self.BICDebitore(data.BICDebitore);
                        self.Trimestre(data.Trimestre);
                        self.Anno(data.Anno);
                        self.IdEsitoDispositivo(data.IdEsitoDispositivo);
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.DistintaSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDistintaBo.call(this, data);

                    this.Disposizioni = ko.observableArray(null);

                    var self = this;
                    if (data != null) {
                        if (data.Disposizioni != null) {
                            ko.utils.arrayForEach(data.Disposizioni, function (item) {
                                self.Disposizioni.push(new App.Seda.Rendiconto.DisposizioneSedaBo(item));
                            });
                        }
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));