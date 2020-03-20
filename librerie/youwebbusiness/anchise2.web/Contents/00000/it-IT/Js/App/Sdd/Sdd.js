var App;
(function (App) {
    (function (Sdd) {
        var AmendmentInformationDetailsBo = (function () {
            function AmendmentInformationDetailsBo(data) {
                if (typeof data === "undefined") { data = null; }

                var self = this;

                self.OriginalMandateIdentification = ko.observable(null);
                self.OriginalFrequency = ko.observable(null);
                self.OriginalFinalCollectionDate = ko.observable(null);
                self.OriginalCreditor = new App.Common.SoggettoBo(null);
                self.OriginalDebtor = new App.Sdd.SoggettoSddBo(null);

                if (data != null) {
                    self.OriginalMandateIdentification(data.OriginalMandateIdentification);
                    self.OriginalFrequency(data.OriginalFrequency);

                    if (data.OriginalFinalCollectionDate !== null && data.OriginalFinalCollectionDate !== "undefined") {
                        self.OriginalFinalCollectionDate(new Date(moment(data.OriginalFinalCollectionDate)));
                    }

                    self.OriginalCreditor = new App.Common.SoggettoBo(data.OriginalCreditor);
                    self.OriginalDebtor = new App.Sdd.SoggettoSddBo(data.OriginalDebtor);
                }

            }
            return AmendmentInformationDetailsBo;
        })();
        Sdd.AmendmentInformationDetailsBo = AmendmentInformationDetailsBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));

var App;
(function (App) {
    (function (Sdd) {
        var DisposizioneSddBo = (function () {
            function DisposizioneSddBo(data) {
                if (typeof data === "undefined") { data = null; }

                var self = this;

                self.IdentifierSottoDistinta = new App.Common.IdentifierBo(null);
                self.ChargeIban = ko.observable(null);
                // <CdtrSchmeId>/<Id>/<PrvtId>/<Othr>/<Id>
                self.CreditorIdentification = ko.observable(null);
                // Corrisponde al codice univoco della Ui e dell'sct
                self.EndToEndIdentification = ko.observable(null);
                // "Dati incasso">"Data scadenza" TODO: da verificare
                self.RequestedCollectionDate = ko.observable(null);
                // <LclInstrm>/<cd>
                self.LocalInstrument = ko.observable(null);
                self.SequenceType = ko.observable(null);
                // Finalit� incasso
                self.CategoryPurpose = ko.observable(null);
                // Causale
                self.Purpose = ko.observable(null);
                self.PurposeDescription = ko.observable(null);
                // Descrizione riconciliazione
                self.RemittanceInformationUnstructured = ko.observable(null);
                self.Cvs = ko.observableArray(null);

                self.IsUltimateCreditorSottodistinta = ko.observable();

                self.UltimateCreditor = new App.Common.SoggettoBo(null);
                self.Debtor = new App.Common.SoggettoBo(null);
                self.UltimateDebtor = new App.Common.SoggettoBo(null);
                self.MandateRelatedInformation = new App.Sdd.MandateRelatedInformationBo(null);

                App.Common.BaseDisposizioneBo.call(this, data);

                if (data != null) {
                    self.IdentifierSottoDistinta = new App.Common.IdentifierBo(data.IdentifierSottoDistinta);
                    self.ChargeIban(data.ChargeIban);
                    self.CreditorIdentification(data.CreditorIdentification);
                    self.EndToEndIdentification(data.EndToEndIdentification);
                    self.IsUltimateCreditorSottodistinta(data.IsUltimateCreditorSottodistinta);

                    if (data.RequestedCollectionDate !== null && data.RequestedCollectionDate !== "undefined") {
                        self.RequestedCollectionDate(new Date(moment(data.RequestedCollectionDate)));
                    }

                    self.LocalInstrument(data.LocalInstrument);
                    self.SequenceType(data.SequenceType);
                    self.CategoryPurpose(data.CategoryPurpose);
                    self.Purpose(data.Purpose);
                    self.PurposeDescription(data.PurposeDescription);
                    self.RemittanceInformationUnstructured(data.RemittanceInformationUnstructured);

                    if (data.Cvs != null)
                        ko.utils.arrayForEach(data.Cvs, function (item) {
                            self.Cvs.push(new App.Common.CvsBo(item));
                        });

                    self.UltimateCreditor = new App.Common.SoggettoBo(data.UltimateCreditor);
                    self.Debtor = new App.Common.SoggettoBo(data.Debtor);
                    self.UltimateDebtor = new App.Common.SoggettoBo(data.UltimateDebtor);
                    self.MandateRelatedInformation = new App.Sdd.MandateRelatedInformationBo(data.MandateRelatedInformation);
                }
                
            }
            return DisposizioneSddBo;
        })();
        Sdd.DisposizioneSddBo = DisposizioneSddBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));

var App;
(function (App) {
    (function (Sdd) {
        var DistintaSddBo = (function () {
            function DistintaSddBo(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                App.Common.BaseDistintaBo.call(this, data);

                self.LocalInstrument = ko.observable(null);
                // Addebito cumulativo dell'sct
                self.BatchBooking = ko.observable(null);
                self.SottoDistinte = ko.observableArray(null);
                self.RequestedCollectionDate = ko.observable(null);
                self.IdDivisa = ko.observable("EUR");
                self.NumeroSottoDistinta = ko.observable(null);
                self.IsMultiConto = ko.observable(null);
                self.IsMultiScadenza = ko.observable(null);

                if (data != null) {
                    self.LocalInstrument(data.LocalInstrument);
                    self.BatchBooking(data.BatchBooking);
                    self.IsMultiConto(data.IsMultiConto);
                    self.IsMultiScadenza(data.IsMultiScadenza);
                    self.NumeroSottoDistinta(data.NumeroSottoDistinta);

                    if (data.RequestedCollectionDate !== null && data.RequestedCollectionDate !== "undefined") {
                        self.RequestedCollectionDate(new Date(moment(data.RequestedCollectionDate)));
                    }

                    if (data.SottoDistinte != null) {
                        ko.utils.arrayForEach(data.SottoDistinte, function (item) {
                            self.SottoDistinte.push(new App.Sdd.SottoDistintaSddBo(item));
                        });
                    }
                }
                
            }
            return DistintaSddBo;
        })();
        Sdd.DistintaSddBo = DistintaSddBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));

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

var App;
(function (App) {
    (function (Sdd) {
        var EsitoDetailBo = (function () {
            function EsitoDetailBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.StatoMessaggio = ko.observable(null);
                this.DescrizioneStato = ko.observable(null);
                this.DataCreazione = ko.observable(null);
                this.DataCaricamento = ko.observable(null);
                this.NomeTag = ko.observable(null);
                this.DescrizioneLibera = ko.observable(null);
                this.IdEsito = ko.observable(null);
                this.IdFlussoEsito = ko.observable(null);
                this.CausaleEsito = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.StatoMessaggio(data.StatoMessaggio);
                    self.CausaleEsito(data.CausaleEsito);
                    self.DescrizioneStato(data.DescrizioneStato);
                    self.NomeTag(data.NomeTag);
                    self.DescrizioneLibera(data.DescrizioneLibera);
                    if (data.DataCreazione !== null && data.DataCreazione !== "undefined")
                        self.DataCreazione(new Date(moment(data.DataCreazione)));
                    if (data.DataCaricamento !== null && data.DataCaricamento !== "undefined")
                        self.DataCaricamento(new Date(moment(data.DataCaricamento)));
                    self.IdEsito(data.IdEsito);
                    self.IdFlussoEsito(data.IdFlussoEsito);
                }
            }
            return EsitoDetailBo;
        })();
        Sdd.EsitoDetailBo = EsitoDetailBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));

var App;
(function (App) {
    (function (Sdd) {
        var FilterDisposizioniSdd = (function () {
            function FilterDisposizioniSdd(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.IdentifierSottoDistinta = ko.observable(null);
                App.Common.FilterDisposizioni.call(this, data);

                if (data !== null) {
                    self.IdentifierSottoDistinta(new App.Common.IdentifierBo(data.IdentifierSottoDistinta));
                }
            }
            return FilterDisposizioniSdd;
        })();
        Sdd.FilterDisposizioniSdd = FilterDisposizioniSdd;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));
var App;
(function (App) {
    (function (Sdd) {
        var FilterEsito = (function () {
            function FilterEsito(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.IdEsito = ko.observable(null);
                self.IdAzienda = ko.observableArray(null);
                self.IdRapporto = ko.observableArray(null);
                self.ImportoDisposizioneTo = ko.observable(null);
                self.ImportoDisposizioneFrom = ko.observable(null);
                self.DataInvioDisposizioneFrom = ko.observable(null);
                self.DataInvioDisposizioneTo = ko.observable(null);
                self.DataScadenzaDisposizioneFrom = ko.observable(null);
                self.DataScadenzaDisposizioneTo = ko.observable(null);
                self.CodiceAbi = ko.observable(null);
                self.RagioneSociale = ko.observable(null);

                self.Debitore = ko.observable(null);
                self.TipoIncasso = ko.observable(null);
                self.StatoIncasso = ko.observable(null);
                self.SequenzaIncasso = ko.observable(null);
                self.ImportoDistintaTo = ko.observable(null);
                self.ImportoDistintaFrom = ko.observable(null);
                self.ImportoSottoDistintaTo = ko.observable(null);
                self.ImportoSottoDistintaFrom = ko.observable(null);
                self.IdDistinta = ko.observable(null);
                self.IdEsitoSottoDistinta = ko.observable(null);

                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    self.IdEsito(data.IdEsito);
                    self.IdRapporto(data.IdRapporto);
                    self.IdAzienda(data.IdAzienda);
                    self.ImportoDisposizioneTo(data.ImportoDisposizioneTo);
                    self.ImportoDisposizioneFrom(data.ImportoDisposizioneFrom);
                    self.ImportoDistintaTo(data.ImportoDistintaTo);
                    self.ImportoDistintaFrom(data.ImportoDistintaFrom);
                    self.ImportoSottoDistintaTo(data.ImportoSottoDistintaTo);
                    self.ImportoSottoDistintaFrom(data.ImportoSottoDistintaFrom);

                    self.TipoIncasso(data.TipoIncasso);
                    self.StatoIncasso(data.StatoIncasso);
                    self.SequenzaIncasso(data.SequenzaIncasso);
                    self.RagioneSociale(data.RagioneSociale);
                    self.Debitore(data.Debitore);
                    self.IdDistinta(data.IdDistinta);
                    self.IdEsitoSottoDistinta(data.IdEsitoSottoDistinta);

                    if (data.DataInvioDisposizioneFrom !== null && typeof data.DataInvioDisposizioneFrom !== "undefined")
                        self.DataInvioDisposizioneFrom(new Date(moment(data.DataInvioDisposizioneFrom)));
                    if (data.DataInvioDisposizioneTo !== null && typeof data.DataInvioDisposizioneTo !== "undefined")
                        self.DataInvioDisposizioneTo(new Date(moment(data.DataInvioDisposizioneTo)));
                    if (data.DataScadenzaDisposizioneFrom !== null && typeof data.DataScadenzaDisposizioneFrom !== "undefined")
                        self.DataScadenzaDisposizioneFrom(new Date(moment(data.DataScadenzaDisposizioneFrom)));
                    if (data.DataScadenzaDisposizioneTo !== null && typeof data.DataScadenzaDisposizioneTo !== "undefined")
                        self.DataScadenzaDisposizioneTo(new Date(moment(data.DataScadenzaDisposizioneTo)));
                    self.CodiceAbi(data.CodiceAbi);
                    if (data.ClassiServizio != null)
                        ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                            self.ClassiServizio.push(item);
                        });
                }
            }
            return FilterEsito;
        })();
        Sdd.FilterEsito = FilterEsito;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));
var App;
(function (App) {
    (function (Sdd) {
        var FilterSottoDistinte = (function () {
            function FilterSottoDistinte(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.Destinatario = ko.observable(null);
                self.RequestedCollectionDate = ko.observable(null);
                self.IdentifierDistinta = ko.observable(null);
                self.IdentifierRapporti = ko.observableArray(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    self.Destinatario(data.Destinatario);
                    if (data.RequestedCollectionDate !== null && typeof data.RequestedCollectionDate !== "undefined")
                        self.RequestedCollectionDate(new Date(moment(data.RequestedCollectionDate)));
                    self.IdentifierDistinta(new App.Common.IdentifierBo(data.IdentifierDistinta));
                    if (data.IdentifierRapporti != null)
                        ko.utils.arrayForEach(data.IdentifierRapporti, function (item) {
                            self.IdentifierRapporti.push(new App.Common.IdentifierBo(item));
                        });
                }
            }
            return FilterSottoDistinte;
        })();
        Sdd.FilterSottoDistinte = FilterSottoDistinte;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));
var App;
(function (App) {
    (function (Sdd) {
        var MandateRelatedInformationBo = (function () {
            function MandateRelatedInformationBo(data) {
                if (typeof data === "undefined") { data = null; }

                var self = this;

                self.MandateIdentification = ko.observable(null);
                self.DateOfSignature = ko.observable(null);
                self.ElectronicSignature = ko.observable(null);
                self.Frequency = ko.observable(null);
                self.FirstCollectionDate = ko.observable(null);
                self.FinalCollectionDate = ko.observable(null);
                self.AmendmentIndicator = ko.observable(null);
                
                self.AmendmentInformationDetails = new App.Sdd.AmendmentInformationDetailsBo(null);

                if (data != null) {
                    self.MandateIdentification(data.MandateIdentification);

                    if (data.DateOfSignature !== null && data.DateOfSignature !== "undefined") {
                        self.DateOfSignature(new Date(moment(data.DateOfSignature)));
                    }

                    self.ElectronicSignature(data.ElectronicSignature);
                    self.Frequency(data.Frequency);

                    if (data.FirstCollectionDate !== null && data.FirstCollectionDate !== "undefined") {
                        self.FirstCollectionDate(new Date(moment(data.FirstCollectionDate)));
                    }

                    if (data.FinalCollectionDate !== null && data.FinalCollectionDate !== "undefined") {
                        self.FinalCollectionDate(new Date(moment(data.FinalCollectionDate)));
                    }

                    self.AmendmentIndicator(data.AmendmentIndicator);

                    self.AmendmentInformationDetails = new App.Sdd.AmendmentInformationDetailsBo(data.AmendmentInformationDetails);
                }

            }
            return MandateRelatedInformationBo;
        })();
        Sdd.MandateRelatedInformationBo = MandateRelatedInformationBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));

var App;
(function (App) {
    (function (Sdd) {
        var SoggettoSddBo = (function () {
            function SoggettoSddBo(data) {
                if (typeof data === "undefined") { data = null; }

                var self = this;

                self.AccountIdentifier = ko.observable(null);
                self.OtherId = ko.observable(null);

                App.Common.SoggettoBo.call(this, data);

                if (data != null) {
                    self.AccountIdentifier(data.AccountIdentifier);
                    self.OtherId(data.OtherId);
                }
                
            }
            return SoggettoSddBo;
        })();
        Sdd.SoggettoSddBo = SoggettoSddBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));

var App;
(function (App) {
    (function (Sdd) {
        var SottoDistintaEsitoBo = (function () {
            function SottoDistintaEsitoBo(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                App.Sdd.SottoDistintaSddBo.call(this, data);
                self.NumEsiti = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.NumEsiti(data.NumEsiti);
                }
            }
            return SottoDistintaEsitoBo;
        })();
        Sdd.SottoDistintaEsitoBo = SottoDistintaEsitoBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));

var App;
(function (App) {
    (function (Sdd) {
        var SottoDistintaSddBo = (function () {
            function SottoDistintaSddBo(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;
                self.Identifier = new App.Common.IdentifierBo(null);
                self.IdentifierDistinta = new App.Common.IdentifierBo(null);

                self.InstructionIdentification = ko.observable(null);
                self.LocalInstrument = ko.observable(null);
                self.SequenceType = ko.observable(null);
                self.BatchBooking = ko.observable(null);
                self.ServiceLevel = ko.observable(null);
                self.ChargeIban = ko.observable(null);
                self.Importo = ko.observable(null);
                self.NumeroOrdini = ko.observable(null);
                self.CreditorIdentification = ko.observable(null);
                self.Disposizioni = ko.observableArray(null);
                // Data Scadenza
                self.RequestedCollectionDate = ko.observable(null);

                self.Creditor = new App.Common.OrdinanteBo(null);
                self.UltimateCreditor = new App.Common.SoggettoBo(null);
                self.IdDivisa = ko.observable("EUR");
                self.CheckIban = ko.observable(null);
                this.Tipo = 0;

                if (data != null) {

                    self.Identifier = new App.Common.IdentifierBo(data.Identifier);
                    self.IdentifierDistinta = new App.Common.IdentifierBo(data.IdentifierDistinta);

                    self.InstructionIdentification(data.InstructionIdentification);
                    self.LocalInstrument(data.LocalInstrument);
                    self.SequenceType(data.SequenceType);
                    self.BatchBooking(data.BatchBooking);
                    self.ServiceLevel(data.ServiceLevel);
                    self.ChargeIban(data.ChargeIban);
                    self.Importo(data.Importo);
                    self.NumeroOrdini(data.NumeroOrdini);
                    self.CreditorIdentification(data.CreditorIdentification);

                    self.Creditor = new App.Common.OrdinanteBo(data.Creditor);
                    self.UltimateCreditor = new App.Common.SoggettoBo(data.UltimateCreditor);
                    self.CheckIban(data.CheckIban);

                    if (data.RequestedCollectionDate !== null && data.RequestedCollectionDate !== "undefined") {
                        self.RequestedCollectionDate(new Date(moment(data.RequestedCollectionDate)));
                    }

                    if (data.Disposizioni != null) {
                        ko.utils.arrayForEach(data.Disposizioni, function (item) {
                            self.Disposizioni.push(new App.Sdd.DisposizioneSddBo(item));
                        });
                    }
                    self.Tipo = data.Tipo;
                }
                
            }
            return SottoDistintaSddBo;
        })();
        Sdd.SottoDistintaSddBo = SottoDistintaSddBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));