var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            (function (TipoBloccoLogico) {
                var _tipoBlocco_1 = 1;
                var _tipoBlocco_2 = 2;
                var _tipoBlocco_3 = 3;
                var _tipoBlocco_4 = 4;

                TipoBloccoLogico.INS = _tipoBlocco_1;
                TipoBloccoLogico.UPD = _tipoBlocco_2;
                TipoBloccoLogico.DEL = _tipoBlocco_3;
                TipoBloccoLogico.ACPT = _tipoBlocco_4;
            })(App.Seda.Allineamento.TipoBloccoLogico || (App.Seda.Allineamento.TipoBloccoLogico = {}));
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}));
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));

var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.AccptncRpt = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }

                    // Identificativo creditore
                    this.OrgnlCdtrSchmeId = ko.observable(null);
                    // Tipo soggetto
                    this.OrgnlCdtrSchmeTp = ko.observable(null);
                    // BIC del creditore
                    this.OrgnlCdtrAgt = ko.observable(null);
                    // Cod. fisc. sottoscrittore
                    this.OrgnlCFSottoscrittore = ko.observable(null);
                    // Identificativo richiesta originaria
                    this.OrgnlMsgId = ko.observable(null);
                    // Tipo richiesta originaria
                    this.OrgnlMsgNmId = ko.observable(null);
                    // Codice mandato originario
                    this.OrgnlMndtId = ko.observable(null);
                    // Domiciliazione mandato
                    this.OrgnlSvcLvlPrtry = ko.observable(null);
                    // Identificativo mandato
                    this.OrgnlMndtReqId = ko.observable(null);
                    // Tipo mandato
                    this.OrgnlLclInstrmPrtry = ko.observable(null);
                    // Esito richiesta
                    this.Accptd = ko.observable(null);
                    // Codice rifiuto
                    this.RjctRsnCd = ko.observable(null);
                    // Motivazioni aggiuntive
                    this.AddtlRjctRsnInf = ko.observable(null);

                    // Debitore
                    this.OrgnlDbtr = new App.Common.SoggettoBo(null);

                    if (data != null) {
                        this.OrgnlCdtrSchmeId(data.OrgnlCdtrSchmeId);
                        this.OrgnlCdtrSchmeTp(data.OrgnlCdtrSchmeTp);
                        this.OrgnlCdtrAgt(data.OrgnlCdtrAgt);
                        this.OrgnlCFSottoscrittore(data.OrgnlCFSottoscrittore);
                        this.OrgnlMsgId(data.OrgnlMsgId);
                        this.OrgnlMsgNmId(data.OrgnlMsgNmId);
                        this.OrgnlMndtId(data.OrgnlMndtId);
                        this.OrgnlSvcLvlPrtry(data.OrgnlSvcLvlPrtry);
                        this.OrgnlMndtReqId(data.OrgnlMndtReqId);
                        this.OrgnlLclInstrmPrtry(data.OrgnlLclInstrmPrtry);
                        this.Accptd(data.Accptd);
                        this.RjctRsnCd(data.RjctRsnCd);
                        this.AddtlRjctRsnInf(data.AddtlRjctRsnInf);

                        this.OrgnlDbtr = new App.Common.SoggettoBo(data.OrgnlDbtr);
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.AmdmntReq = (function (AmdmntReq) {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }

                    // Identificativo creditore
                    this.CdtrSchmeId = ko.observable(null);
                    // Tipo Soggetto
                    this.CdtrSchmeTp = ko.observable(null);
                    // BIC del creditore
                    this.CdtrAgt = ko.observable(null);
                    // Codice mandato
                    this.MndtId = ko.observable(null);
                    // Identificativo mandato
                    this.MndtReqId = ko.observable(null);
                    // Tipo mandato
                    this.LclInstrmPrtry = ko.observable(null);
                    // Sequenza incasso
                    this.SeqTp = ko.observable(null);
                    // Data sottoscrizione mandato
                    this.DurationFromDate = ko.observable(null);
                    // Richiesta modifica
                    this.RsnCd = ko.observable(null);
                    // Domiciliazione mandato
                    this.SvcLvlPrtry = ko.observable(null);
                    // Identificativo creditore originario
                    this.OrgnlCdtrSchmeId = ko.observable(null);
                    // Tipo soggetto
                    this.OrgnlCdtrSchmeTp = ko.observable(null);
                    // Codice mandato originario
                    this.OrgnlMndtId = ko.observable(null);
                    // Descrizione
                    this.OrgnlCdtrSchmeIssr = ko.observable(null);
                    // Creditore originario
                    this.OrgnlCdtrNm = ko.observable(null);
                    // Cod. fisc. sottoscrittore
                    this.CFSottoscrittore = ko.observable(null);
                    this.OrgnlCdtrIdentifier = new App.Common.IdentifierBo(null);

                    // Creditore effettivo
                    this.UltmtCdtr = new App.Seda.Allineamento.UltmtSubjectBo(null);
                    // Debitore
                    this.Dbtr = new App.Common.SoggettoBo(null);
                    // Debitore effettivo
                    this.UltmtDbtr = new App.Seda.Allineamento.UltmtSubjectBo(null);

                    if (data != null) {
                        this.CdtrSchmeId(data.CdtrSchmeId);
                        this.CdtrSchmeTp(data.CdtrSchmeTp);
                        this.CdtrAgt(data.CdtrAgt);
                        this.MndtId(data.MndtId);
                        this.MndtReqId(data.MndtReqId);
                        this.LclInstrmPrtry(data.LclInstrmPrtry);
                        this.SeqTp(data.SeqTp);
                        if (data.DurationFromDate !== null && data.DurationFromDate !== "undefined") {
                            this.DurationFromDate(new Date(moment(data.DurationFromDate)));
                        }
                        this.RsnCd(data.RsnCd);
                        this.SvcLvlPrtry(data.SvcLvlPrtry);
                        this.OrgnlCdtrSchmeId(data.OrgnlCdtrSchmeId);
                        this.OrgnlMndtId(data.OrgnlMndtId);
                        this.OrgnlCdtrSchmeIssr(data.OrgnlCdtrSchmeIssr);
                        this.OrgnlCdtrNm(data.OrgnlCdtrNm);
                        this.OrgnlCdtrSchmeTp(data.OrgnlCdtrSchmeTp);
                        this.CFSottoscrittore(data.CFSottoscrittore);

                        this.OrgnlCdtrIdentifier = new App.Common.IdentifierBo(data.OrgnlCdtrIdentifier);

                        this.UltmtCdtr = new App.Seda.Allineamento.UltmtSubjectBo(data.UltmtCdtr);
                        this.Dbtr = new App.Common.SoggettoBo(data.Dbtr);
                        this.UltmtDbtr = new App.Seda.Allineamento.UltmtSubjectBo(data.UltmtDbtr);
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.CxlReq = (function () {
                return function(data) {
                    if (typeof data === "undefined") { data = null; }

                    // Identificativo creditore
                    this.OrgnlCdtrSchmeId = ko.observable(null);
                    // Tipo soggetto
                    this.OrgnlCdtrSchmeTp = ko.observable(null);
                    // Codice mandato originario
                    this.OrgnlMndtId = ko.observable(null);
                    // BIC del creditore
                    this.OrgnlCdtrAgt = ko.observable(null);
                    // Data di sottoscrizione del mandato
                    this.OrgnlDurationFromDate = ko.observable(null);
                    // Identificativo mandato
                    this.OrgnlMndtReqId = ko.observable(null);
                    // Sequenza incasso
                    this.OrgnlSeqTp = ko.observable(null);
                    // Tipo mandato
                    this.OrgnlLclInstrmPrtry = ko.observable(null);
                    // Domiciliazione mandato
                    this.OrgnlSvcLvlPrtry = ko.observable(null);

                    // Debitore
                    this.OrgnlDbtr = new App.Common.SoggettoBo(null);

                    if (data != null) {
                        this.OrgnlCdtrSchmeId(data.OrgnlCdtrSchmeId);
                        this.OrgnlCdtrSchmeTp(data.OrgnlCdtrSchmeTp);
                        this.OrgnlMndtId(data.OrgnlMndtId);
                        this.OrgnlCdtrAgt(data.OrgnlCdtrAgt);
                        this.OrgnlMndtReqId(data.OrgnlMndtReqId);
                        this.OrgnlSeqTp(data.OrgnlSeqTp);
                        this.OrgnlLclInstrmPrtry(data.OrgnlLclInstrmPrtry);
                        this.OrgnlSvcLvlPrtry(data.OrgnlSvcLvlPrtry);
                        if (data.OrgnlDurationFromDate !== null && data.OrgnlDurationFromDate !== "undefined") {
                            this.OrgnlDurationFromDate(new Date(moment(data.OrgnlDurationFromDate)));
                        }

                        this.OrgnlDbtr = new App.Common.SoggettoBo(data.OrgnlDbtr);
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.DisposizioneSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    this.TipoBloccoLogico = ko.observable(null);

                    this.InitnReq = new App.Seda.Allineamento.InitnReq(null);
                    this.AmdmntReq = new App.Seda.Allineamento.AmdmntReq(null);
                    this.CxlReq = new App.Seda.Allineamento.CxlReq(null);
                    this.AccptncRpt = new App.Seda.Allineamento.AccptncRpt(null);

                    if (data != null) {
                        this.TipoBloccoLogico(data.TipoBloccoLogico);

                        this.InitnReq = new App.Seda.Allineamento.InitnReq(data.InitnReq);
                        this.AmdmntReq = new App.Seda.Allineamento.AmdmntReq(data.AmdmntReq);
                        this.CxlReq = new App.Seda.Allineamento.CxlReq(data.CxlReq);
                        this.AccptncRpt = new App.Seda.Allineamento.AccptncRpt(data.AccptncRpt);
                    }
                    var self = this;

                    this.GetBloccoLogico = ko.computed(function () {
                        switch (self.TipoBloccoLogico()) {
                            case App.Seda.Allineamento.TipoBloccoLogico.INS:
                                return self.InitnReq;
                            case App.Seda.Allineamento.TipoBloccoLogico.UPD:
                                return self.AmdmntReq;
                            case App.Seda.Allineamento.TipoBloccoLogico.DEL:
                                return self.CxlReq;
                            case App.Seda.Allineamento.TipoBloccoLogico.ACPT:
                                return self.AccptncRpt;
                        }
                    });
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.DisposizioneSedaSearchBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    // Ragione sociale Creditore Effettivo
                    this.UltmtCdtrNm = ko.observable(null);
                    // Ragione sociale Debitore
                    this.DbtrNm = ko.observable(null);
                    // IBAN Debitore
                    this.DbtrAcct = ko.observable(null);
                    // Check digit sull'Iban del debitore
                    this.IbanCheckDigit = ko.observable(null);
                    // Bic Debitore
                    this.DbtrAgt = ko.observable(null);
                    // Ragione sociale Debitore Effettivo
                    this.UltmtDbtrNm = ko.observable(null);
                    // Cod. fisc. sottoscrittore
                    this.CFSottoscrittore = ko.observable(null);
                    // Codice mandato
                    this.MndtId = ko.observable(null);
                    // Tipo di blocco logico della disposizione di allinemento
                    this.TipoBloccoLogico = ko.observable(null);
                    // Data di sottoscrizione del mandato
                    this.DurationFromDate = ko.observable(null);
                    // Tipo mandato
                    this.LclInstrmPrtry = ko.observable(null);
                    // Sequenza incasso
                    this.SeqTp = ko.observable(null);
                    // Modifica richiesta da
                    this.RsnCd = ko.observable(null);
                    // Domiciliazione mandato
                    this.SvcLvlPrtry = ko.observable(null);
                    // Codice mandato originario
                    this.OrgnlMndtId = ko.observable(null);
                    // Creditore originario
                    this.OrgnlCdtrNm = ko.observable(null);
                    // Identificativo creditore originario
                    this.OrgnlCdtrSchmeId = ko.observable(null);
                    // MsgID richiesta originaria
                    this.OrgnlMsgId = ko.observable(null);
                    // Tipo richiesta originaria
                    this.OrgnlMsgNmId = ko.observable(null);
                    // Esito richiesta
                    this.Accptd = ko.observable(null);
                    // Codice rifiuto
                    this.RjctRsnCd = ko.observable(null);
                    // Motivazioni aggiuntive
                    this.AddtlRjctRsnInf = ko.observable(null);
                    // Identificativo creditore
                    this.CdtrSchmeId = ko.observable(null);
                    // Tipo Soggetto
                    this.CdtrSchmeTp = ko.observable(null);
                    // BIC del creditore
                    this.CdtrAgt = ko.observable(null);


                    if (data != null) {
                        this.UltmtCdtrNm(data.UltmtCdtrNm);
                        this.DbtrNm(data.DbtrNm);
                        this.DbtrAcct(data.DbtrAcct);
                        this.IbanCheckDigit(data.IbanCheckDigit);
                        this.DbtrAgt(data.DbtrAgt);
                        this.UltmtDbtrNm(data.UltmtDbtrNm);
                        this.CFSottoscrittore(data.CFSottoscrittore);
                        this.MndtId(data.MndtId);
                        this.TipoBloccoLogico(data.TipoBloccoLogico);
                        if (data.DurationFromDate !== null && data.DurationFromDate !== "undefined") {
                            this.DurationFromDate(new Date(moment(data.DurationFromDate)));
                        }
                        this.LclInstrmPrtry(data.LclInstrmPrtry);
                        this.SeqTp(data.SeqTp);
                        this.RsnCd(data.RsnCd);
                        this.SvcLvlPrtry(data.SvcLvlPrtry);
                        this.OrgnlMndtId(data.OrgnlMndtId);
                        this.OrgnlCdtrNm(data.OrgnlCdtrNm);
                        this.OrgnlCdtrSchmeId(data.OrgnlCdtrSchmeId);
                        this.OrgnlMsgId(data.OrgnlMsgId);
                        this.OrgnlMsgNmId(data.OrgnlMsgNmId);
                        this.Accptd(data.Accptd);
                        this.RjctRsnCd(data.RjctRsnCd);
                        this.AddtlRjctRsnInf(data.AddtlRjctRsnInf);
                        this.CdtrSchmeId(data.CdtrSchmeId);
                        this.CdtrSchmeTp(data.CdtrSchmeTp);
                        this.CdtrAgt(data.CdtrAgt);
                    }
                    
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
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

var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.FilterEsito = (function () {
                return function(data) {
                    if (typeof data === "undefined") { data = null; }
                    var self = this;

                    self.CodiceAbi = ko.observable(null);
                    self.IdAzienda = ko.observable(null);
                    self.TipoFlusso = ko.observable(null);
                    self.CodiceMandato = ko.observable(null);
                    self.CodFiscSottoscrittore = ko.observable(null);
                    self.DataCreazioneFrom = ko.observable(null);
                    self.DataCreazioneTo = ko.observable(null);
                    self.DataRicezioneFrom = ko.observable(null);
                    self.DataRicezioneTo = ko.observable(null);
                    self.ClasseServizio = ko.observable(null);
                    self.BloccoLogico = ko.observable(null);
                    self.StatoEsito = ko.observable(null);

                    App.Core.BasePagingFilterAsync.call(this, data);

                    if (data !== null) {
                        self.CodiceAbi(data.CodiceAbi);
                        self.IdAzienda(data.IdAzienda);
                        self.TipoFlusso(data.TipoFlusso);
                        self.CodiceMandato(data.CodiceMandato);
                        self.CodFiscSottoscrittore(data.CodFiscSottoscrittore);
                        self.BloccoLogico(data.BloccoLogico);
                        self.StatoEsito(data.StatoEsito);

                        if (data.DataCreazioneFrom !== null && typeof data.DataCreazioneFrom !== "undefined")
                            self.DataCreazioneFrom(new Date(moment(data.DataCreazioneFrom)));
                        if (data.DataCreazioneTo !== null && typeof data.DataCreazioneTo !== "undefined")
                            self.DataCreazioneTo(new Date(moment(data.DataCreazioneTo)));
                        if (data.DataRicezioneFrom !== null && typeof data.DataRicezioneFrom !== "undefined")
                            self.DataRicezioneFrom(new Date(moment(data.DataRicezioneFrom)));
                        if (data.DataRicezioneTo !== null && typeof data.DataRicezioneTo !== "undefined")
                            self.DataRicezioneTo(new Date(moment(data.DataRicezioneTo)));

                        self.ClasseServizio(data.ClasseServizio);
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.InitnReq = (function () {
                return function(data) {
                    if (typeof data === "undefined") { data = null; }

                    // Identificativo creditore
                    this.CdtrSchmeId = ko.observable(null);
                    // Tipo Soggetto
                    this.CdtrSchmeTp = ko.observable(null);
                    // BIC del creditore
                    this.CdtrAgt = ko.observable(null);
                    // Codice mandato
                    this.MndtId = ko.observable(null);
                    // Identificativo mandato
                    this.MndtReqId = ko.observable(null);
                    // Tipo mandato
                    this.LclInstrmPrtry = ko.observable(null);
                    // Sequenza incasso
                    this.SeqTp = ko.observable(null);
                    // Data sottoscrizione mandato
                    this.DurationFromDate = ko.observable(null);
                    // Id documento
                    this.RfrDocNb = ko.observable(null);
                    // Cod. fisc. sottoscrittore
                    this.CFSottoscrittore = ko.observable(null);


                    // Creditore effettivo
                    this.UltmtCdtr = new App.Seda.Allineamento.UltmtSubjectBo(null);
                    // Debitore
                    this.Dbtr = new App.Common.SoggettoBo(null);
                    // Debitore effettivo
                    this.UltmtDbtr = new App.Seda.Allineamento.UltmtSubjectBo(null);

                    if (data != null) {
                        this.CdtrSchmeId(data.CdtrSchmeId);
                        this.CdtrSchmeTp(data.CdtrSchmeTp);
                        this.CFSottoscrittore(data.CFSottoscrittore);
                        this.CdtrAgt(data.CdtrAgt);
                        this.MndtId(data.MndtId);
                        this.MndtReqId(data.MndtReqId);
                        this.LclInstrmPrtry(data.LclInstrmPrtry);
                        this.SeqTp(data.SeqTp);
                        if (data.DurationFromDate !== null && data.DurationFromDate !== "undefined") {
                            this.DurationFromDate(new Date(moment(data.DurationFromDate)));
                        }
                        this.RfrDocNb(data.RfrDocNb);

                        this.UltmtCdtr = new App.Seda.Allineamento.UltmtSubjectBo(data.UltmtCdtr);
                        this.Dbtr = new App.Common.SoggettoBo(data.Dbtr);
                        this.UltmtDbtr = new App.Seda.Allineamento.UltmtSubjectBo(data.UltmtDbtr);
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.UltmtSubjectBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }

                    // Codice anagrafica
                    this.Codice = ko.observable(null);
                    // Ragione sociale
                    this.Nm = ko.observable(null);
                    // Tipo soggetto
                    this.TipoSoggetto = ko.observable(null);
                    // Bic
                    this.Bic = ko.observable(null);
                    // Identificativo
                    this.Id = ko.observable(null);
                    // Codice
                    this.Cd = ko.observable(null);
                    // Codice proprietario
                    this.Prtry = ko.observable(null);
                    // Descrizione
                    this.Issr = ko.observable(null);
                    // Data di nascita
                    this.BirthDt = ko.observable(null);
                    // Provincia di nascita
                    this.PrvcOfBirth = ko.observable(null);
                    // Comune di nascita
                    this.CityOfBirth = ko.observable(null);
                    // Stato di nascita
                    this.CtryOfBirth = ko.observable(null);

                    this.Identifier = new App.Common.IdentifierBo(null);
                    this.IdentifierAnagrafica = new App.Common.IdentifierBo(null);

                    if (data != null) {
                        this.Codice(data.Codice);
                        this.Nm(data.Nm);
                        this.TipoSoggetto(data.TipoSoggetto);
                        this.Bic(data.Bic);
                        this.Id(data.Id);
                        this.Cd(data.Cd);
                        this.Prtry(data.Prtry);
                        this.Issr(data.Issr);

                        if (data.BirthDt !== null && data.BirthDt !== "undefined") {
                            this.BirthDt(new Date(moment(data.BirthDt)));
                        }

                        this.PrvcOfBirth(data.PrvcOfBirth);
                        this.CityOfBirth(data.CityOfBirth);
                        this.CtryOfBirth(data.CtryOfBirth);

                        this.Identifier = new App.Common.IdentifierBo(data.Identifier);
                        this.IdentifierAnagrafica = new App.Common.IdentifierBo(data.IdentifierAnagrafica);
                    }
                };
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));
var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.DistintaSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDistintaBo.call(this, data);

                    this.Disposizioni = ko.observableArray(null);

                    var self = this;
                    if (data != null) {
                        if (data.Disposizioni != null) {
                            ko.utils.arrayForEach(data.Disposizioni, function (item) {
                                self.Disposizioni.push(new App.Seda.Allineamento.DisposizioneSedaSearchBo(item));
                            });
                        }
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));