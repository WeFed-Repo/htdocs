var App;
(function (App) {
    (function (Sct) {
        var DatiPerDetrazioneSctBo = (function () {
            function DatiPerDetrazioneSctBo(descrRiconc, codSoggBeneficiario, tipologieDetrazione) {
                if (typeof descrRiconc === "undefined") { descrRiconc = null; }

                this.DescrizioneRiconcilazioneBase = ko.observable(descrRiconc);
                this.DetrazioneOrdinanti = ko.observableArray(null);
                this.CurrentTipologiaOrdinante = ko.observable('CO');
                this.TipologieDetrazione = ko.observableArray(tipologieDetrazione);
                this.TipologiaDetrazioneObj = ko.observable(null);
                this.TipologiaDetrazione = ko.observable('');
                this.DescrizioneRiconcilazioneUtente = ko.observable('');
                this.CodiceSoggettoBeneficiario = ko.observable(codSoggBeneficiario);
                
                var self = this;

                function CodFiscModel(CodFisc) {
                    var self = this;
                    self.CodFisc = ko.observable(CodFisc);
                    //self.CodFisc.subscribe(function () {
                    //    self.CodFisc(self.CodFisc().toUpperCase());
                    //});
                }

                self.RefreshDatiRiconciliazione = function () {
                    if (self.DescrizioneRiconcilazioneBase() !== null) {
                        var riconciliazioneRows = self.DescrizioneRiconcilazioneBase().split("\n");
                        if (riconciliazioneRows.length >= 4 && riconciliazioneRows[0].indexOf("BONIFISC") !== -1)
                        {
                            var splitPattern = /^([a-zA-Z0-9]+)\/(.*)$/;
                            var match = riconciliazioneRows[0].substring(14).match(splitPattern);
                            var law = match[2];
                            self.TipologiaDetrazione(match[1]);
                            var causaleUtente = riconciliazioneRows[1].substring(14);

                            var tipologiaOrdinante = riconciliazioneRows[2].substring(14);
                            self.CurrentTipologiaOrdinante(tipologiaOrdinante == "CO" ? "CO" : tipologiaOrdinante == "PG" ? "PG" : "PF");

                            self.DetrazioneOrdinanti.removeAll();
                            var index = 0;
                            ko.utils.arrayForEach(riconciliazioneRows, function (item) {
                                if (index > 2 && item != null && item != "") {
                                    self.DetrazioneOrdinanti.push(new CodFiscModel(item.substring(14)));
                                }
                                index++;
                            });
                        
                            self.DescrizioneRiconcilazioneUtente(causaleUtente);
                        }
                    }
                };

                self.RefreshDatiRiconciliazione();

                self.TipologiaDetrazione.subscribe(function () {
                    self.TipologiaDetrazioneObj(ko.utils.arrayFirst(self.TipologieDetrazione(), function (tipo) { return tipo.Codice === self.TipologiaDetrazione(); }));
                });

                self.DescrizioneRiconcilazione = ko.computed(function () {
                    var returnvalue = '';
                    if (self.TipologiaDetrazione() != null && self.TipologiaDetrazione() != '' && self.TipologieDetrazione() != null && self.TipologieDetrazione().length > 0) {
                        if (self.TipologiaDetrazioneObj() == null) {
                            self.TipologiaDetrazioneObj(ko.utils.arrayFirst(self.TipologieDetrazione(), function (tipo) { return tipo.Codice === self.TipologiaDetrazione(); }));
                        }
                        
                        var legge = self.TipologiaDetrazioneObj();
                        var slash = '/';
                        var prefix = slash + slash + 'BONIFISC ';
                        var newline = '\n';
                        var line1 = prefix + '01' + slash + legge.Codice + slash + legge.Causale + newline;
                        var line2 = prefix + '02' + slash + self.DescrizioneRiconcilazioneUtente() + newline;
                        var line3 = prefix + '03' + slash + (self.CurrentTipologiaOrdinante() == "CO" ? "CO" : self.CurrentTipologiaOrdinante() == "PG" ? "PG" : "PF");
                        var lines = '';
                        $.each(self.DetrazioneOrdinanti(), function (index, value) {
                            lines += newline + prefix + ('0' + (index + 4)).slice(-2) + slash + value.CodFisc();
                        });
                        returnvalue = line1 + line2 + line3 + lines;
                    }
                    return returnvalue;
                });

                self.DescrizioneRiconcilazioneFissa = ko.computed(function () {
                    var returnvalue = '';
                    if (self.TipologiaDetrazione() != null && self.TipologiaDetrazione() != '' && self.TipologieDetrazione() != null && self.TipologieDetrazione().length > 0) {
                        returnvalue = self.TipologiaDetrazioneObj().Causale;
                        if (self.CodiceSoggettoBeneficiario()) {
                            returnvalue += ' CFDES: ' + self.CodiceSoggettoBeneficiario();
                        }
                        if (self.DetrazioneOrdinanti().length > 0 && self.DetrazioneOrdinanti()[0] && self.DetrazioneOrdinanti()[0].CodFisc()) {
                            returnvalue += ' CFORD: ' + self.DetrazioneOrdinanti()[0].CodFisc();
                        }
                    }
                    return returnvalue;
                });

                self.Causale = ko.computed(function () {
                    return self.DescrizioneRiconcilazioneUtente() + " " + self.DescrizioneRiconcilazioneFissa();
                });

                self.DescrizioneRiconcilazioneUtente.subscribe(function (newValue) {
                    self.DescrizioneRiconcilazioneUtente(self.DescrizioneRiconcilazioneUtente().replace(/(\r\n|\n|\r)/g, ""));
                });

                self.AddOrdinanteVuoto = function () {
                    if (self.DetrazioneOrdinanti().length < 16) {
                        self.DetrazioneOrdinanti.push(new CodFiscModel(''));
                    }
                }

                self.CancelOrdinante = function (item) {
                    self.DetrazioneOrdinanti.remove(item);
                }

                self.CambiaPrimoOrdinante = function (pivaCodfisc) {
                    self.DetrazioneOrdinanti.shift();
                    self.DetrazioneOrdinanti.unshift(new CodFiscModel(pivaCodfisc));
                }
                
                if (self.DetrazioneOrdinanti().length == 0) {
                    self.AddOrdinanteVuoto();
                    if (self.CurrentTipologiaOrdinante() == "CO" || self.CurrentTipologiaOrdinante() == "PG")
                    {
                        self.AddOrdinanteVuoto();
                    }
                }
            }
            return DatiPerDetrazioneSctBo;
        })();
        Sct.DatiPerDetrazioneSctBo = DatiPerDetrazioneSctBo;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));

var App;
(function (App) {
    (function (Sct) {
        var DisposizioneSctBo = (function () {
            function DisposizioneSctBo(data) {
                if (typeof data === "undefined") { data = null; }

                App.Common.BaseDisposizioneBo.call(this, data);
                this.Debitore = new App.Common.SoggettoBo(null);
                this.Beneficiario = new App.Common.SoggettoBo(null);
                this.Creditore = new App.Common.SoggettoBo(null);
                this.CreditoreOBeneficiario = new App.Common.SoggettoBo(null);
                this.DescrizioneRiconcilazione = ko.observable(null);
                this.CodiceUnivoco = ko.observable(null);
                this.CausaleIso = ko.observable(null);
                this.CausaleLibera = ko.observable(null);
                this.FinalitaPagamento = new Sct.FinalitaPagamentoBo(null);
                this.IsUrgP = ko.observable(null);
                this.Esito = new Sct.EsitoAlBeneficiarioBo(null);
                this.Cvs = ko.observableArray(null);
                if (this.Identifier.ClasseServizio() == App.Common.ClassiServizio.BONIFICO_FISCALE_SCT) {
                    this.DatiPerDetrazione = new Sct.DatiPerDetrazioneSctBo(null, null, null);
                }

                // Propriet� necessaria per la lista delle disposizioni
                // Da server se la disposizione non ha esito al beneficiario ritorna l'oggetto a null, mentre trona l'oggetto inizializzato con tutte le sue propriet� a null
                // Quindi il controllo sulla nullit� delle propriet� per controllare se la disposizione ha o meno l'esito al beneficiario non � un controllo valido
                // Togliendo l'inizializzazione dell'oggetto Esito dal costruttore sorgono i problemi nei binder dei dettagli
                this.HasEsitoAlBeneficiario = ko.observable(false);
                this.IdentifierAzienda = new App.Common.IdentifierBo(null);

                var self = this;

                if (data !== null) {
                    self.Debitore = new App.Common.SoggettoBo(data.Debitore);
                    self.Beneficiario = new App.Common.SoggettoBo(data.Beneficiario);
                    self.Creditore = new App.Common.SoggettoBo(data.Creditore);
                    //se esiste creditore effettivo (qui chiamato creditore) ho CreditoreOBeneficiario � quello altrimenti � il creditore (qui chiamato beneficiario)
                    if (data.Creditore != null && data.Creditore.Denominazione != null) {
                        self.CreditoreOBeneficiario = new App.Common.SoggettoBo(data.Creditore);
                    } else {
                        self.CreditoreOBeneficiario = new App.Common.SoggettoBo(data.Beneficiario);
                    }
                    self.DescrizioneRiconcilazione(data.DescrizioneRiconcilazione);
                    self.CodiceUnivoco(data.CodiceUnivoco);
                    self.CausaleIso(data.CausaleIso);
                    self.CausaleLibera(data.CausaleLibera);
                    self.FinalitaPagamento = new Sct.FinalitaPagamentoBo(data.FinalitaPagamento);
                    self.IsUrgP(data.IsUrgP);
                    self.Esito = new Sct.EsitoAlBeneficiarioBo(data.Esito);
                    if (data.Cvs != null)
                        ko.utils.arrayForEach(data.Cvs, function (item) {
                            self.Cvs.push(new App.Common.CvsBo(item));
                        });
                    if (self.Identifier.ClasseServizio() == App.Common.ClassiServizio.BONIFICO_FISCALE_SCT) {
                        self.DatiPerDetrazione = new Sct.DatiPerDetrazioneSctBo(self.DescrizioneRiconcilazione(), self.Beneficiario.DatiAggiuntivi.CodiceSoggetto(), null);
                    }

                    self.HasEsitoAlBeneficiario(data.Esito != null);
                    self.IdentifierAzienda = new App.Common.IdentifierBo(data.IdentifierAzienda);
                }
            }
            return DisposizioneSctBo;
        })();
        Sct.DisposizioneSctBo = DisposizioneSctBo;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));

var App;
(function (App) {
    (function (Sct) {
        var DistintaSctBo = (function () {
            function DistintaSctBo(data) {
                if (typeof data === "undefined") { data = null; }

                App.Common.BaseDistintaBo.call(this, data);

                this.IdDivisa           = ko.observable(null);
                this.EsitoOrdinante     = ko.observable(null);
                this.AddebitoCumulativo = ko.observable(null);
                this.DataEsecuzione     = ko.observable(null);
                this.IsUrgP = ko.observable(null);
                this.IsInstant = ko.observable(null);
                this.Disposizioni       = ko.observableArray(null);

                this.TipoConto = new App.Sct.TipoContoBo(null);
                this.Commission = new App.Sct.CommissionBo(null);
                this.Beneficiario = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.IdDivisa(data.IdDivisa);
                    self.EsitoOrdinante(data.EsitoOrdinante);
                    self.AddebitoCumulativo(data.AddebitoCumulativo);
                    self.IsUrgP(data.IsUrgP);
                    self.IsInstant(data.IsInstant);
                    if (data.DataEsecuzione !== null && data.DataEsecuzione !== "undefined")
                        self.DataEsecuzione(new Date(moment(data.DataEsecuzione)));
                    
                    if (data.Disposizioni != null) {
                        ko.utils.arrayForEach(data.Disposizioni, function (item) {
                            self.Disposizioni.push(new App.Sct.DisposizioneSctBo(item));
                        });
                    }
                    self.TipoConto = new App.Sct.TipoContoBo(data.TipoConto);
                    self.Commission = new App.Sct.CommissionBo(data.Commission);
                    self.Beneficiario(data.Beneficiario);
                }
            }
            return DistintaSctBo;
        })();
        Sct.DistintaSctBo = DistintaSctBo;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));

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

var App;
(function (App) {
    (function (Sct) {
        var FilterEsitoBeneficiario = (function () {
            function FilterEsitoBeneficiario(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.IdentifierEsitoBeneficiario = new App.Common.IdentifierBo(null);
                self.IdAziende          = ko.observableArray(null);
                self.ImportoTo          = ko.observable(null);
                self.ImportoFrom        = ko.observable(null);
                //self.DataCreazioneFrom  = ko.observable(null);
                //self.DataCreazioneTo = ko.observable(null);
                self.DataCaricamentoFrom = ko.observable(null);
                self.DataCaricamentoTo = ko.observable(null);
                self.DataEsecuzioneFrom = ko.observable(null);
                self.DataEsecuzioneTo = ko.observable(null);
                self.CodiceAbi          = ko.observable(null);
                self.RagioneSociale     = ko.observable(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    self.IdAziende(data.IdAzienda);
                    self.ImportoTo(data.ImportoTo);
                    self.ImportoFrom(data.ImportoFrom);
                    self.RagioneSociale(data.RagioneSociale);
                    //if (data.DataCreazioneFrom !== null && typeof data.DataCreazioneFrom !== "undefined")
                    //    self.DataCreazioneFrom(new Date(moment(data.DataCreazioneFrom)));
                    //if (data.DataCreazioneTo !== null && typeof data.DataCreazioneTo !== "undefined")
                    //    self.DataCreazioneTo(new Date(moment(data.DataCreazioneTo)));
                    if (data.DataCaricamentoFrom !== null && typeof data.DataCaricamentoFrom !== "undefined")
                        self.DataCaricamentoFrom(new Date(moment(data.DataCaricamentoFrom)));
                    if (data.DataCaricamentoTo !== null && typeof data.DataCaricamentoTo !== "undefined")
                        self.DataCaricamentoTo(new Date(moment(data.DataCaricamentoTo)));
                    if (data.DataEsecuzioneFrom !== null && typeof data.DataEsecuzioneFrom !== "undefined")
                        self.DataEsecuzioneFrom(new Date(moment(data.DataEsecuzioneFrom)));
                    if (data.DataEsecuzioneTo !== null && typeof data.DataEsecuzioneTo !== "undefined")
                        self.DataEsecuzioneTo(new Date(moment(data.DataEsecuzioneTo)));
                    self.CodiceAbi(data.CodiceAbi);
                    if (data.ClassiServizio != null)
                        ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                            self.ClassiServizio.push(item);
                        });
                    self.IdentifierEsitoBeneficiario = new App.Common.IdentifierBo(data);
                }
            }
            return FilterEsitoBeneficiario;
        })();
        Sct.FilterEsitoBeneficiario = FilterEsitoBeneficiario;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));
var App;
(function (App) {
    (function (Sct) {
        var FinalitaPagamentoBo = (function () {
            function FinalitaPagamentoBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Codice            = ko.observable(null);
                this.DescrizioneLibera = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Codice(data.Codice);
                    self.DescrizioneLibera(data.DescrizioneLibera);
                }
            }
            return FinalitaPagamentoBo;
        })();
        Sct.FinalitaPagamentoBo = FinalitaPagamentoBo;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));

var App;
(function (App) {
    (function (Sct) {
        var TipoContoBo = (function () {
            function TipoContoBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Codice            = ko.observable(null);
                this.DescrizioneLibera = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Codice(data.Codice);
                    self.DescrizioneLibera(data.DescrizioneLibera);
                }
            }
            return TipoContoBo;
        })();
        Sct.TipoContoBo = TipoContoBo;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));

var App;
(function (App) {
    (function (Sct) {
        var CommissionBo = (function () {
            function CommissionBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Ammount = ko.observable(null);
                this.AmmountCurrency = ko.observable(null);
                this.Charge = ko.observable(null);
                this.ChargeCurrency = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Ammount(data.Ammount);
                    self.AmmountCurrency(data.AmmountCurrency);
                    self.Charge(data.Charge);
                    self.ChargeCurrency(data.ChargeCurrency);
                }
            }
            return CommissionBo;
        })();
        Sct.CommissionBo = CommissionBo;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));