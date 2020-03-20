var App;
(function (App) {
    (function (Common) {
        var AbiCabBo = (function () {
            function AbiCabBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Identifier         = new Common.IdentifierBo(null);
                this.DescrizioneBanca   = ko.observable(null);
                this.CodiceAbi          = ko.observable(null);
                this.CodiceCab          = ko.observable(null);
                this.DescrizioneFiliale = ko.observable(null);
                this.Indirizzo          = new App.Common.IndirizzoBo(null);
                this.Stato              = ko.observable(null);
                this.DataChiusura       = ko.observable(null);

                if (data !== null) {
                    this.Identifier = new Common.IdentifierBo(data.Identifier);
                    this.DescrizioneBanca(data.DescrizioneBanca);
                    this.CodiceAbi(data.CodiceAbi);
                    this.CodiceCab(data.CodiceCab);
                    this.DescrizioneFiliale(data.DescrizioneFiliale);
                    this.Indirizzo = new App.Common.IndirizzoBo(data.Indirizzo);
                    this.Stato(data.Stato);
                    if (data.DataChiusura !== null && data.DataChiusura !== "undefined") {
                        this.DataChiusura(new Date(moment(data.DataChiusura)));
                    }
                }
            }
            return AbiCabBo;
        })();
        Common.AbiCabBo = AbiCabBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
var App;
(function (App) {
    (function (Common) {
        var AziendaBo = (function () {
            function AziendaBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.CodiceAzienda = ko.observable(null);
                this.CodiceCuc = ko.observable(null);
                this.CodiceSia = ko.observable(null);
                this.Id = ko.observable(null);
                this.Identifier = ko.observable(null);
                this.RagioneSociale = ko.observable(null);
                this.StatoAzienda = ko.observable(null);
                this.CodiceFiscale = ko.observable(null);
                this.PartitaIva = ko.observable(null);
                this.CreditorId = ko.observable(null);

                var self = this;
                if (data !== null) {
                    this.CodiceAzienda(data.CodiceAzienda);
                    this.CodiceCuc(data.CodiceCuc);
                    this.CodiceSia(data.CodiceSia);
                    this.Id(data.Id);
                    this.Identifier(data.Identifier);
                    this.RagioneSociale(data.RagioneSociale);
                    this.StatoAzienda(data.StatoAzienda);
                    this.CodiceFiscale(data.CodiceFiscale);
                    this.PartitaIva(data.PartitaIva);
                    this.CreditorId(data.CreditorId);
                }
            }
            return AziendaBo;
        })();
        Common.AziendaBo = AziendaBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var BancaBo = (function () {
            function BancaBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.CodiceAbi   = ko.observable(null);
                this.Descrizione = ko.observable(null);

                if (data !== null) {
                    this.CodiceAbi(data.CodiceAbi);
                    this.Descrizione(data.Descrizione);
                }
            }
            return BancaBo;
        })();
        Common.BancaBo = BancaBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
var App;
(function (App) {
    (function (Common) {
        Common.BancaModel = function BancaModel(data) {
            if (typeof data === "undefined") { data = null; }
            this.Debitore = new App.Common.AbiCabBo(null);
            this.Creditore = new App.Common.AbiCabBo(null);

            if (data !== null) {
                this.Debitore = new App.Common.AbiCabBo(data.Debitore);
                this.Debitore = new App.Common.AbiCabBo(data.Debitore);
            }
        };
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var BaseDisposizioneBo = (function () {
            function BaseDisposizioneBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Identifier = new App.Common.IdentifierBo(null);
                this.IdentifierDistinta = new App.Common.IdentifierBo(null);
                this.Ordinante = new App.Common.OrdinanteBo(null);
                this.Importo = ko.observable(null);
                this.Divisa = ko.observable(null);

                var self = this;

                if (data !== null) {
                    self.Identifier = new App.Common.IdentifierBo(data.Identifier);
                    self.IdentifierDistinta = new App.Common.IdentifierBo(data.IdentifierDistinta);
                    self.Ordinante = new App.Common.OrdinanteBo(data.Ordinante);
                    self.Importo(data.Importo);
                    self.Divisa(data.Divisa);
                }
            }
            return BaseDisposizioneBo;
        })();
        Common.BaseDisposizioneBo = BaseDisposizioneBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var BaseDistintaBo = (function () {
            function BaseDistintaBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Identifier         = new App.Common.IdentifierBo(null);
                this.NumeroOrdini       = ko.observable(null);
                this.NomeSupporto       = ko.observable(null);
                this.StatoDistinta      = ko.observable(null);
                this.Firmatari          = ko.observable(null);
                this.DataCreazione      = ko.observable(null);
                this.DataSpedizione     = ko.observable(null);
                this.DataDisponibilita  = ko.observable(null);
                this.DataConferma       = ko.observable(null);
                this.PotereFirma        = ko.observable(null);
                this.Importo            = ko.observable(null);
                this.Esito = ko.observable(null);
                this.CheckIban = ko.observable(false);
                this.Tipo = 0;
                var SOLA_LETTURA        = 1

                this.Intestatario       = new App.Common.OrdinanteBo(null);
                this.IsSolaLettura = function () { return (this.Tipo & SOLA_LETTURA) > 0 };
                this.ListaRapporti = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Identifier = new App.Common.IdentifierBo(data.Identifier);
                    self.NumeroOrdini(data.NumeroOrdini);
                    self.Importo(data.Importo);
                    self.StatoDistinta(data.StatoDistinta);
                    self.Firmatari(data.Firmatari);
                    self.Esito(data.Esito);
                    self.NomeSupporto(data.NomeSupporto);
                    self.PotereFirma(data.PotereFirma);
                    self.Tipo = data.Tipo;
                    self.CheckIban(data.CheckIban);
                    if (data.DataCreazione !== null && data.DataCreazione !== "undefined")
                        self.DataCreazione(new Date(moment(data.DataCreazione)));
                    if (data.DataSpedizione !== null && data.DataSpedizione !== "undefined")
                        self.DataSpedizione(new Date(moment(data.DataSpedizione)));
                    if (data.DataDisponibilita !== null && data.DataDisponibilita !== "undefined")
                        self.DataDisponibilita(new Date(moment(data.DataDisponibilita)));
                    if (data.DataConferma !== null && data.DataConferma)
                        self.DataConferma(new Date(moment(data.DataConferma)));
                    self.Intestatario = new App.Common.OrdinanteBo(data.Intestatario);
                    self.ListaRapporti(data.ListaRapporti);
                }
            }
            return BaseDistintaBo;
        })();
        Common.BaseDistintaBo = BaseDistintaBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        (function (ClassiServizio) {
            var _bonificoSct = 1;
            var _bonificoVeloceSct = 2;
            var _stipendioSct = 3;
            var _allineamentoarchivi = 4;
            var _allineamentoarchiviiban = 5;
            var _assegnicircolari = 6;
            var _assegniquietanza = 7;
            var _bollettinobancario = 8;
            var _bonificiitalia = 9;
            var _bonificoestero = 10;
            var _effettiimpagati = 11;
            var _incassidirectdebit = 12;
            var _incassiestero = 13;
            var _mav = 14;
            var _mt101 = 15;
            var _f24 = 16;
            var _f24elementiidentificativi = 17;
            var _rid = 18;
            var _revochef24 = 19;
            var _riba = 20;
            var _richiamomav = 21;
            var _richiamorid = 22;
            var _richiamoriba = 23;
            var _richiesteseda = 24;
            var _ritiroeffetti = 25;
            var _stipendiitalia = 26;
            var _strutturelibere = 27;
            var _variazionicoordinaterid = 28;
            var _elcosribes = 29;
            var _euroincassi = 30;
            var _allineamentoseda = 31;
            var _bonificoFiscaleSct = 32;
            var _esitiincassidirectdebit = 44;
            var _EsitiRiba = 56;
            var _EsitiRid = 57;
            var _EsitiMav = 58;
            var _ScartiIncassiRiba = 59;
            var _EsitiBollettinoBancario = 64;
            var _EsitiBonificoEstero = 65;
            var _EsitiRitiroEffettiRIBA = 61;
            var _EsitiBonificiSEPA = 67;
            var _EsitiStipendiSEPA = 68;
            var _ScartiRitiroEffetti = 62;
            var _BonificoSctObn = 69;

            ClassiServizio.BONIFICO_SCT = _bonificoSct;
            ClassiServizio.BONIFICO_VELOCE_SCT = _bonificoVeloceSct;
            ClassiServizio.STIPENDIO_SCT = _stipendioSct;
            ClassiServizio.ALLINEAMENTOARCHIVI = _allineamentoarchivi;
            ClassiServizio.ALLINEAMENTOARCHIVIIBAN = _allineamentoarchiviiban;
            ClassiServizio.ASSEGNICIRCOLARI = _assegnicircolari;
            ClassiServizio.ASSEGNIQUIETANZA = _assegniquietanza;
            ClassiServizio.BOLLETTINOBANCARIO = _bollettinobancario;
            ClassiServizio.BONIFICIITALIA = _bonificiitalia;
            ClassiServizio.BONIFICOESTERO = _bonificoestero;
            ClassiServizio.EFFETTIIMPAGATI = _effettiimpagati;
            ClassiServizio.INCASSIDIRECTDEBIT = _incassidirectdebit;
            ClassiServizio.ESITIINCASSISEPADIRECTDEBIT = _esitiincassidirectdebit;
            ClassiServizio.INCASSIESTERO = _incassiestero;
            ClassiServizio.MAV = _mav;
            ClassiServizio.MT101 = _mt101;
            ClassiServizio.F24 = _f24;
            ClassiServizio.F24ELEMENTIIDENTIFICATIVI = _f24elementiidentificativi;
            ClassiServizio.RID = _rid;
            ClassiServizio.REVOCHEF24 = _revochef24;
            ClassiServizio.RIBA = _riba;
            ClassiServizio.RICHIAMOMAV = _richiamomav;
            ClassiServizio.RICHIAMORID = _richiamorid;
            ClassiServizio.RICHIAMORIBA = _richiamoriba;
            ClassiServizio.RICHIESTESEDA = _richiesteseda;
            ClassiServizio.RITIROEFFETTI = _ritiroeffetti;
            ClassiServizio.STIPENDIITALIA = _stipendiitalia;
            ClassiServizio.STRUTTURELIBERE = _strutturelibere;
            ClassiServizio.VARIAZIONICOORDINATERID = _variazionicoordinaterid;
            ClassiServizio.ELCOSRIBES =_elcosribes;   
            ClassiServizio.EUROINCASSI = _euroincassi;
            ClassiServizio.ALLINEAMENTOSEDA = _allineamentoseda;
            ClassiServizio.BONIFICO_FISCALE_SCT = _bonificoFiscaleSct;
            ClassiServizio.ESITI_RIBA = _EsitiRiba;
            ClassiServizio.ESITI_RID = _EsitiRid;
            ClassiServizio.ESITI_MAV = _EsitiMav;
            ClassiServizio.SCARTI_INCASSI_RIBA = _ScartiIncassiRiba;
            ClassiServizio.ESITI_PAG_BOLBAN = _EsitiBollettinoBancario;
            ClassiServizio.ESITI_PAG_ESTERO = _EsitiBonificoEstero;
            ClassiServizio.ESITI_PAG_RIBA = _EsitiRitiroEffettiRIBA;
            ClassiServizio.ESITI_PAG_BONIFICI = _EsitiBonificiSEPA;
            ClassiServizio.ESITI_PAG_STIPENDI = _EsitiStipendiSEPA;
            ClassiServizio.SCARTI_RITIRO_EFFETTI = _ScartiRitiroEffetti;
            ClassiServizio.BONIFICO_SCT_OBN = _BonificoSctObn;
        })(App.Common.ClassiServizio || (App.Common.ClassiServizio = {}));
    })(App.Common || (App.Common = {}));
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var CvsBo = (function () {
            function CvsBo(data) {
                if (typeof data === "undefined") { data = null; }

                var self = this;

                self.Tipologia        = ko.observable(null);
                self.CausaleValutaria = ko.observable(null);
                self.Importo          = ko.observable(null);
                self.Divisa           = ko.observable('EUR');
                self.DatiCvsEnabled = ko.computed(function () {
                    var enabled = !App.Core.IsNullOrUndefined(this.Tipologia()) && this.Tipologia().length > 0;

                    if (!enabled) {
                        self.Importo(null);
                    }

                    return enabled;
                }, self);
                self.CausaleValutariaEnable = ko.computed(function () {
                    var enabled = this.DatiCvsEnabled() && this.Tipologia() == 'CVA';

                    if (!enabled) {
                        self.CausaleValutaria(null);
                    }

                    return enabled;
                }, self);
                
                if (data !== null) {
                    self.Tipologia(data.Tipologia);
                    self.CausaleValutaria(data.CausaleValutaria);
                    self.Importo(data.Importo);
                    self.Divisa(data.Divisa);
                }
            }
            return CvsBo;
        })();
        Common.CvsBo = CvsBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var DistintaCartBo = (function () {
            function DistintaCartBo(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.Identifiers    = ko.observableArray([]);
                self.Denominazione  = ko.observable(null);
                self.ClasseServizio = ko.observable(null);
                self.Abi            = ko.observable(null);
                self.Divisa         = ko.observable(null);
                self.NumeroDistinte = ko.observable(null);
                self.NumeroOrdini   = ko.observable(null);
                self.Importo        = ko.observable(null);

                if (data !== null) {
                    ko.utils.arrayForEach(data.Identifiers, function (item) {
                        self.Identifiers.push(new Common.IdentifierBo(item));
                    });
                    self.Denominazione(data.Denominazione);
                    self.ClasseServizio(data.ClasseServizio);
                    self.Abi(data.Abi);
                    self.Divisa(data.Divisa);
                    self.NumeroDistinte(data.NumeroDistinte);
                    self.NumeroOrdini(data.NumeroOrdini);
                    self.Importo(data.Importo);
                }
            }
            return DistintaCartBo;
        })();
        Common.DistintaCartBo = DistintaCartBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var FilterDisposizioni = (function () {
            function FilterDisposizioni(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;
                
                self.IdAzienda              = ko.observable(null);
                self.IdentifierDistinta     = new Common.IdentifierBo(null);
                self.CodiceAbi              = ko.observable(null);
                self.ImportoDa              = ko.observable(null);
                self.ImportoA               = ko.observable(null);
                self.ClassiServizio         = ko.observableArray(null);
                self.IdentifierRapporti     = ko.observableArray(null);
                self.IdentifierDisposizioni = ko.observableArray(null);
                self.Beneficiario           = ko.observable(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {

                    self.IdAzienda(data.IdAzienda);
                    self.IdentifierDistinta = new Common.IdentifierBo(data.IdentifierDistinta);
                    self.CodiceAbi(data.CodiceAbi);
                    self.ImportoDa(data.ImportoDa);
                    self.ImportoA(data.ImportoA);
                    self.Beneficiario(data.beneficiario);
                    if (data.ClassiServizio != null) {
                        ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                            self.ClassiServizio.push(item);
                        });
                    }
                    if (data.IdentifierRapporti != null)
                        ko.utils.arrayForEach(data.IdentifierRapporti, function (item) {
                            self.IdentifierRapporti.push(new Common.IdentifierBo(item));
                        });
                    if (data.IdentifierDisposizioni != null)
                        ko.utils.arrayForEach(data.IdentifierDisposizioni, function (item) {
                            self.IdentifierDisposizioni.push(new Common.IdentifierBo(item));
                        });
                }
            }
            return FilterDisposizioni;
        })();
        Common.FilterDisposizioni = FilterDisposizioni;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
var App;
(function (App) {
    (function (Common) {
        var FilterDistinte = (function () {
            function FilterDistinte(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.IdAzienda          = ko.observable(null);
                self.ImportoTo          = ko.observable(null);
                self.ImportoFrom        = ko.observable(null);
                self.DataCreazioneFrom  = ko.observable(null);
                self.DataCreazioneTo    = ko.observable(null);
                self.CodiceAbi          = ko.observable(null);
                self.IdentifierDistinte = ko.observableArray(null);
                self.IdentifierRapporti = ko.observableArray(null);
                self.Stato              = ko.observable(null);
                self.ClassiServizio     = ko.observableArray(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    self.IdAzienda(data.IdAzienda);
                    self.ImportoTo(data.ImportoTo);
                    self.ImportoFrom(data.ImportoFrom);
                    if (data.DataCreazioneFrom !== null && typeof data.DataCreazioneFrom !== "undefined")
                        self.DataCreazioneFrom(new Date(moment(data.DataCreazioneFrom)));
                    if (data.DataCreazioneTo !== null && typeof data.DataCreazioneTo !== "undefined")
                        self.DataCreazioneTo(new Date(moment(data.DataCreazioneTo)));
                    self.CodiceAbi(data.CodiceAbi);
                    if (data.IdentifierDistinte != null)
                        ko.utils.arrayForEach(data.IdentifierDistinte, function (item) {
                            self.IdentifierDistinte.push(new Common.IdentifierBo(item));
                        });
                    if (data.IdentifierRapporti != null)
                        ko.utils.arrayForEach(data.IdentifierRapporti, function (item) {
                            self.IdentifierRapporti.push(new Common.IdentifierBo(item));
                        });
                    if (data.ClassiServizio != null)
                        ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                            self.ClassiServizio.push(item);
                        });
                    self.Stato(data.Stato);
                }
            }
            return FilterDistinte;
        })();
        Common.FilterDistinte = FilterDistinte;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
var App;
(function (App) {
    (function (Common) {
        var FlowBo = (function () {
            function FlowBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Key           = ko.observable(null);
                this.DataCreazione = ko.observable(null);
                this.DataInvio     = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Key(data.Key);
                    if (data.DataCreazione !== null && data.DataCreazione !== "undefined")
                        self.DataCreazione(new Date(common(data.DataCreazione)));
                    if (data.DataInvio !== null && data.DataInvio !== "undefined")
                        self.DataInvio(new Date(common(data.DataInvio)));
                }
            }
            return FlowBo;
        })();
        Common.FlowBo = FlowBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        Common.IdentifierBo = function IdentifierBo(data) {
            if (typeof data === "undefined") { data = null; }
            
            var self = this;
            self.Id             = ko.observable(null);
            self.Version        = ko.observable(null);
            self.IdAzienda      = ko.observable(null);
            self.IdRapporto     = ko.observable(null);
            self.ClasseServizio = ko.observable(null);
            self.Crypt          = ko.observable(null);
            self.Hash = ko.observable(null);
            self.Crypted = ko.observable();
            
            if (data !== null) {
                self.Id(data.Id);
                self.Version(data.Version);
                self.IdAzienda(data.IdAzienda);
                self.IdRapporto(data.IdRapporto);
                self.ClasseServizio(data.ClasseServizio);
                self.Crypt(data.Crypt);
                self.Hash(data.Hash);
                self.Crypted(data.Crypted);
            }
        };
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        Common.PiazzaturaBo = function PiazzaturaBo(data) { 
            if (typeof data === "undefined") { data = null; }
            this.Identifier = new Common.IdentifierBo(null);
            this.Rapporto = new Common.RapportoBo(null);
            this.Azienda = new Common.AziendaBo(null);
            this.CbiIdentifier = new Common.IdentifierBo(null);
            this.OnlineIdentifier = new Common.IdentifierBo(null);
            this.Saldo = new Common.SaldoBo(null);
            if (data !== null) {
                this.Identifier = new Common.IdentifierBo(data.Identifier);
                this.Rapporto = new Common.RapportoBo(data.Rapporto);
                this.Azienda = new Common.AziendaBo(data.Azienda);
                this.CbiIdentifier = new Common.IdentifierBo(data.CbiIdentifier);
                this.OnlineIdentifier = new Common.IdentifierBo(data.OnlineIdentifier);
                this.Saldo = new Common.SaldoBo(data.Saldo);
            }
        };
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        (function (PoteriFirma) {
            var _firmatario = 1;
            var _nonFirmatario = -1;

            PoteriFirma.FIRMATARIO = _firmatario;
            PoteriFirma.NON_FIRMATARIO = _nonFirmatario;
        })(App.Common.PoteriFirma || (App.Common.PoteriFirma = {}));
    })(App.Common || (App.Common = {}));
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var RapportoBo = (function () {
            function RapportoBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.CodiceAbi                 = ko.observable(null);
                this.CodiceCab                 = ko.observable(null);
                this.CodiceDivisa              = ko.observable(null);
                this.CodiceFiliale             = ko.observable(null);
                this.CodiceIban                = ko.observable(null);
                this.Descrizione               = ko.observable(null);
                this.DescrizionePersonalizzata = ko.observable(null);
                this.Id                        = ko.observable(null);
                this.IdAzienda                 = ko.observable(null);
                this.Identifier                = ko.observable(null);
                this.NumeroRapporto            = ko.observable(null);
                this.DescrizioneBanca = ko.observable(null);
                this.DescrizioneIstituto = ko.observable(null);
                this.DescrizioneSportello = ko.observable(null);
                this.Bic= ko.observable(null);
                this.UltimoAggiornamento = ko.observable(null);
                this.Saldo = ko.observable(null);
                this.DataSaldo = ko.observable(null);
                this.Stato = ko.observable(null);
                this.Status = ko.observable(null);

                if (data != null) {
                    this.CodiceAbi(data.CodiceAbi);
                    this.CodiceCab(data.CodiceCab);
                    this.CodiceDivisa(data.CodiceDivisa);
                    this.CodiceFiliale(data.CodiceFiliale);
                    this.CodiceIban(data.CodiceIban);
                    this.Descrizione(data.Descrizione);
                    this.DescrizionePersonalizzata(data.DescrizionePersonalizzata);
                    this.Bic(data.Bic);
                    this.Id(data.Id);
                    this.IdAzienda(data.IdAzienda);
                    this.Identifier(data.Identifier);
                    this.NumeroRapporto(data.NumeroRapporto);
                    this.DescrizioneBanca(data.DescrizioneBanca);
                    this.DescrizioneIstituto(data.DescrizioneIstituto);
                    this.DescrizioneSportello(data.DescrizioneSportello);
                    if (data.UltimoAggiornamento !== null && data.UltimoAggiornamento !== "undefined") {
                        this.UltimoAggiornamento(new Date(moment(data.UltimoAggiornamento)));
                    }
                    this.Saldo(data.Saldo);
                    if (data.DataSaldo !== null && data.DataSaldo !== "undefined") {
                        this.DataSaldo(new Date(moment(data.DataSaldo)));
                    }
                    this.Stato(data.Stato);
                    this.Status(data.Status);
                }
            }
            return RapportoBo;
        })();
        Common.RapportoBo = RapportoBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
var App;
(function (App) {
    (function (Common) {
        var SoggettoBo = (function () {
            function SoggettoBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Identifier           = new Common.IdentifierBo(null);
                this.IdentifierAnagrafica = new Common.IdentifierBo(null);
                this.TipologiaAnagrafica  = ko.observable(null);
                this.Denominazione        = ko.observable(null);
                this.Codice               = ko.observable(null);
                this.CodiceFiscale        = ko.observable(null);
                this.PartitaIva           = ko.observable(null);
                this.Indirizzo            = new App.Common.IndirizzoBo(null);
                this.Iban                 = ko.observable(null);
                this.IbanCheckDigit       = ko.observable(null);
                this.Bic                  = ko.observable(null);
                this.DatiAggiuntivi       = new App.Common.DatiAggiuntiviBo(null);
                this.TipoDocumento        = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Identifier = new Common.IdentifierBo(data.Identifier);
                    self.IdentifierAnagrafica = new Common.IdentifierBo(data.IdentifierAnagrafica);
                    self.TipologiaAnagrafica(data.TipologiaAnagrafica);
                    self.Denominazione(data.Denominazione);
                    self.Codice(data.Codice);
                    self.CodiceFiscale(data.CodiceFiscale);
                    self.PartitaIva(data.PartitaIva);
                    self.Indirizzo = new App.Common.IndirizzoBo(data.Indirizzo);
                    self.Iban(data.Iban);
                    self.IbanCheckDigit(data.IbanCheckDigit);
                    self.Bic(data.Bic);
                    self.DatiAggiuntivi = new App.Common.DatiAggiuntiviBo(data.DatiAggiuntivi);
                    self.TipoDocumento(data.TipoDocumento);
                }
            }
            return SoggettoBo;
        })();
        Common.SoggettoBo = SoggettoBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        (function (StatiDistinta) {
            // Status
            var _confermata = 3;
            var _autorizzata = 2;
            var _parzialmenteAutorizzata = 5;
            var _inModifica = 6;
            var _daAutorizzare = 1;

            // Generic Validation
            var _IsEnableDisaggregate = function (statoDistinta) {
                return statoDistinta == _daAutorizzare;
            };

            var _IsEnableDelete = function (statoDistinta) {
                return statoDistinta != _autorizzata && statoDistinta != _confermata;
            };

            var _IsEnableAuthorize = function (statoDistinta) {
                return statoDistinta == _daAutorizzare ||
                       statoDistinta == _parzialmenteAutorizzata;
            };
            var _IsEnableCopy = function (statoDistinta) {
                return (statoDistinta == _confermata ||
                        statoDistinta == _autorizzata ||
                        statoDistinta == _parzialmenteAutorizzata ||
                        statoDistinta == _daAutorizzare);
            };
            var _IsEnableCheckIban = function (statoDistinta) {
                return statoDistinta == _daAutorizzare ||
                       statoDistinta == _parzialmenteAutorizzata ||
                       statoDistinta == _inModifica;
            };

            StatiDistinta.CONFERMATA = _confermata;
            StatiDistinta.AUTORIZZATA = _autorizzata;
            StatiDistinta.PARZIALMENTE_AUTORIZZATA = _parzialmenteAutorizzata;
            StatiDistinta.IN_MODIFICA = _inModifica;
            StatiDistinta.DA_AUTORIZZARE = _daAutorizzare;
            StatiDistinta.IsEnableAuthorize = _IsEnableAuthorize;
            StatiDistinta.IsEnableCopy = _IsEnableCopy;
            StatiDistinta.IsEnableDisaggregate = _IsEnableDisaggregate;
            StatiDistinta.IsEnableCheckIban = _IsEnableCheckIban;
            StatiDistinta.IsEnableDelete = _IsEnableDelete;
        })(App.Common.StatiDistinta || (App.Common.StatiDistinta = {}));
    })(App.Common || (App.Common = {}));
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        (function (StatoRapporto) {
            // Status
            var _attivo = 1;
            var _sospeso = 2;
                        
            StatoRapporto.ATTIVO = _attivo;
            StatoRapporto.SOSPESO = _sospeso;
            
        })(App.Common.StatoRapporto || (App.Common.StatoRapporto = {}));
    })(App.Common || (App.Common = {}));
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var IndirizzoBo = (function () {
            function IndirizzoBo(data) {
                if (typeof data === "undefined") { data = null; }
                this.TipologiaIndirizzo = ko.observable(null);
                this.Via                = ko.observable(null);
                this.Numero             = ko.observable(null);
                this.Comune             = ko.observable(null);
                this.Cap                = ko.observable(null);
                this.Provincia = ko.observable(null);
                this.CodProvincia = ko.observable(null);
                this.Localita           = ko.observable(null);
                this.Nazione            = ko.observable(null);
                var self = this;
                if (data !== null) {
                    self.TipologiaIndirizzo(data.TipologiaIndirizzo);
                    self.Via(data.Via);
                    self.Numero(data.Numero);
                    self.Comune(data.Comune);
                    self.Cap(data.Cap);
                    self.Provincia(data.Provincia);
                    self.CodProvincia(data.CodProvincia);
                    self.Localita(data.Localita);
                    self.Nazione(data.Nazione);
                }
            }
            return IndirizzoBo;
        })();
        Common.IndirizzoBo = IndirizzoBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var DatiAggiuntiviBo = (function () {
            function DatiAggiuntiviBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.TipoSoggetto      = ko.observable(null);
                this.TipoCodice        = ko.observable(null);
                this.CodiceSoggetto    = ko.observable(null);
                this.DescrizioneCodice = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.TipoSoggetto(data.TipoSoggetto);
                    self.TipoCodice(data.TipoCodice);
                    self.CodiceSoggetto(data.CodiceSoggetto);
                    self.DescrizioneCodice(data.DescrizioneCodice);
                }
            }
            return DatiAggiuntiviBo;
        })();
        Common.DatiAggiuntiviBo = DatiAggiuntiviBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var AnagraficaBo = (function () {
            function AnagraficaBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Identifier            = new Common.IdentifierBo(null);
                this.IdAzienda             = ko.observable(null);
                this.TipologiaAnagrafica   = ko.observable(null);
                this.Codice                = ko.observable(null);
                this.TipoCodice            = ko.observable(null);
                this.Cuc                   = ko.observable(null);
                this.Sia                   = ko.observable(null);
                this.Denominazione         = ko.observable(null);
                this.Sesso                 = ko.observable(null);
                this.CodiceFiscale         = ko.observable(null);
                this.PartitaIva            = ko.observable(null);
                this.IdentificativoFiscale = ko.observable(null);
                this.DataNascita           = ko.observable(null);
                this.IndirizzoNascita      = new App.Common.IndirizzoBo(null);
                this.Indirizzo             = new App.Common.IndirizzoBo(null);
                this.DescrizioneBanca      = ko.observable(null);
                this.LocalitaSportello     = ko.observable(null);
                this.Iban                  = ko.observable(null);
                this.Bic                   = ko.observable(null);
                this.DatiAggiuntivi = new App.Common.DatiAggiuntiviBo(null);
                this.CodiceMandato         = ko.observable(null);
                this.DataSottoscrizione    = ko.observable(null);
                this.Email = ko.observable(null);
                this.CFSottoscrittore = ko.observable(null);
                this.Abi = ko.observable(null);
                this.Cab = ko.observable(null);
                this.TipoDocumento    = ko.observable(null);
                var self = this;

                if (data !== null) {
                    self.Identifier = new Common.IdentifierBo(data.Identifier);
                    self.IdAzienda(data.IdAzienda);
                    self.TipologiaAnagrafica(data.TipologiaAnagrafica);
                    self.Codice(data.Codice);
                    self.TipoCodice(data.TipoCodice);
                    self.Cuc(data.Cuc);
                    self.Sia(data.Sia);
                    self.Denominazione(data.Denominazione);
                    self.Sesso(data.Sesso);
                    self.CodiceFiscale(data.CodiceFiscale);
                    self.PartitaIva(data.PartitaIva);
                    self.IdentificativoFiscale(data.IdentificativoFiscale);
                    self.DataNascita(data.DataNascita);
                    self.IndirizzoNascita = new App.Common.IndirizzoBo(data.IndirizzoNascita);
                    self.Indirizzo = new App.Common.IndirizzoBo(data.Indirizzo);
                    self.DescrizioneBanca(data.DescrizioneBanca);
                    self.LocalitaSportello(data.LocalitaSportello);
                    self.Iban(data.Iban);
                    self.Bic(data.Bic);
                    self.DatiAggiuntivi = new App.Common.DatiAggiuntiviBo(data.DatiAggiuntivi);
                    self.CodiceMandato(data.CodiceMandato);
                    self.DataSottoscrizione(data.DataSottoscrizione);
                    self.Email(data.Email);
                    self.CFSottoscrittore(data.CFSottoscrittore);
                    self.Abi(data.Abi);
                    self.Cab(data.Cab);
                    self.TipoDocumento(data.TipoDocumento);
                }
            }
            return AnagraficaBo;
        })();
        Common.AnagraficaBo = AnagraficaBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var FilterAnagrafiche = (function () {
            function FilterAnagrafiche(data) {
                if (typeof data === "undefined") { data = null; }

                this.TipologiaAnagrafica  = ko.observable(null);
                this.IdentifierPiazzatura = new Common.IdentifierBo(null);
                this.IdentifierAzienda = new Common.IdentifierBo(null);
                this.Denominazione        = ko.observable(null);
                this.DescrizioneBanca     = ko.observable(null);
                this.Iban                 = ko.observable(null);
                this.Codice               = ko.observable(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                var self = this;
                if (data !== null) {
                    self.TipologiaAnagrafica(data.TipologiaAnagrafica);
                    self.IdentifierPiazzatura = new Common.IdentifierBo(data.IdentifierPiazzatura);
                    self.IdentifierAzienda = new Common.IdentifierBo(data.IdentifierAzienda);
                    self.Denominazione(data.Denominazione);
                    self.DescrizioneBanca(data.DescrizioneBanca);
                    self.Iban(data.Iban);
                    self.Codice(data.Codice);
                }
            }
            return FilterAnagrafiche;
        })();
        Common.FilterAnagrafiche = FilterAnagrafiche;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var FilterAbiCab = (function () {
            function FilterAbiCab(data) {
                if (typeof data === "undefined") { data = null; }

                this.DescrizioneBanca      = ko.observable(null);
                this.DescrizionFiliale     = ko.observable(null);
                this.Abi                   = ko.observable(null);
                this.Cab                   = ko.observable(null);
                this.Provincia             = ko.observable(null);
                this.Comune                = ko.observable(null);
                this.Localita              = ko.observable(null);
                this.Cap                   = ko.observable(null);
                this.Indirizzo             = ko.observable(null);
                this.DataChiusuraSportello = ko.observable(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    this.DescrizioneBanca(data.DescrizioneBanca);
                    this.DescrizionFiliale(data.DescrizionFiliale);
                    this.Abi(data.Abi);
                    this.Cab(data.Cab);
                    this.Provincia(data.Provincia);
                    this.Comune(data.Comune);
                    this.Localita(data.Localita);
                    this.Cap(data.Cap);
                    this.Indirizzo(data.Indirizzo);
                    if (data.DataChiusuraSportello !== null && data.DataChiusuraSportello !== "undefined")
                        this.DataChiusuraSportello(new Date(moment(data.DataChiusuraSportello)));
                }
            }
            return FilterAbiCab;
        })();
        Common.FilterAbiCab = FilterAbiCab;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var OrdinanteBo = (function () {
            function OrdinanteBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Identifier            = new Common.IdentifierBo(null);
                this.RagioneSociale        = ko.observable(null);
                this.Cuc                   = ko.observable(null);
                this.IdentificativoFiscale = ko.observable(null);
                this.Conto                 = ko.observable(null);
                this.Iban                  = ko.observable(null);
                this.Abi                   = ko.observable(null);
                this.Cab                   = ko.observable(null);
                this.Sia = ko.observable(null);
                this.StatoRapporto = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Identifier = new Common.IdentifierBo(data.Identifier);
                    self.RagioneSociale(data.RagioneSociale);
                    self.Cuc(data.Cuc);
                    self.IdentificativoFiscale(data.IdentificativoFiscale);
                    self.Conto(data.Conto);
                    self.Iban(data.Iban);
                    self.Abi(data.Abi);
                    self.Cab(data.Cab);
                    self.Sia(data.Sia);
                    self.StatoRapporto(data.StatoRapporto);
                }
            }
            return OrdinanteBo;
        })();
        Common.OrdinanteBo = OrdinanteBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var ContiBo = (function () {
            function ContiBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.RagSocIntestatario = ko.observable(null);
                this.ABI = ko.observable(null);
                this.CAB = ko.observable(null);
                this.Conto = ko.observable(null);
                this.CIN = ko.observable(null);
                this.IBAN = ko.observable(null);
                this.Descrizione = ko.observable(null);
                this.Tipo = ko.observable(null);
                this.Divisa = ko.observable(null);
                this.Swift = ko.observable(null);
                this.Sportello = ko.observable(null);
                this.Identifier = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.RagSocIntestatario(data.RagSocIntestatario);
                    self.ABI(data.ABI);
                    self.CAB(data.CAB);
                    self.Conto(data.Conto);
                    self.CIN(data.CIN);
                    self.IBAN(data.IBAN);
                    self.Descrizione(data.Descrizione);
                    self.Tipo(data.Tipo);
                    self.Divisa(data.Divisa);
                    self.Swift(data.Swift);
                    self.Sportello(data.Sportello);
                    self.Identifier(data.Identifier);
                }
            }
            return ContiBo;
        })();
        Common.ContiBo = ContiBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {

        var _identifierIsValid = function (identifier) {
            var jsIdentifier = ko.toJS(identifier);
            
            if (App.Core.IsNullOrUndefined(jsIdentifier)) {
                return false;
            }

            if (App.Core.IsNullOrEmpty(jsIdentifier.Crypt) && App.Core.IsNullOrEmpty(jsIdentifier.Crypted)) {
                return false;
            }

            return true;
        }

        var _identifierIsNotValid = function (identifier) {
            return !_identifierIsValid(identifier);
        }

        var _identifiersAreEqual = function (first, second) {
            var jsFirst = ko.toJS(first);
            var jsSecond = ko.toJS(second);

            var cryptEqual = jsFirst.Crypt === jsSecond.Crypt;
            var hashEqual = jsFirst.Hash === jsSecond.Hash;
            var allPropertiesEqual = jsFirst.Id === jsSecond.Id &&
                                     jsFirst.Version === jsSecond.Version &&
                                     jsFirst.IdAzienda === jsSecond.IdAzienda &&
                                     jsFirst.IdRapporto === jsSecond.IdRapporto &&
                                     jsFirst.ClasseServizio === jsSecond.ClasseServizio;
            
            return cryptEqual || hashEqual || allPropertiesEqual;
        }

        var _identifiersOrCryptAreEqual = function (first, second) {
            var jsFirst = ko.toJS(first);
            var jsSecond = ko.toJS(second);

            var cryptEqual = jsFirst.Crypt === jsSecond.Crypt;
            var hashEqual = jsFirst.Hash === jsSecond.Hash;
            return cryptEqual || hashEqual;
        }

        Common.IdentifierIsValid = _identifierIsValid;
        Common.IdentifierIsNotValid = _identifierIsNotValid;
        Common.IdentifiersAreEqual = _identifiersAreEqual;
        Common.IdentifiersOrCryptAreEqual = _identifiersOrCryptAreEqual;

    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {

        var _mapIdentifer = function (identifierBo, identifier) {
            var jsIdentifier = ko.toJS(identifier);

            identifierBo.Id(jsIdentifier.Id);
            identifierBo.Version(jsIdentifier.Version);
            identifierBo.IdAzienda(jsIdentifier.IdAzienda);
            identifierBo.IdRapporto(jsIdentifier.IdRapporto);
            identifierBo.Crypt(jsIdentifier.Crypt);
            identifierBo.Hash(jsIdentifier.Hash);
        }

        Common.MapIdentifier = _mapIdentifer;

    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {

        var _getAziendeFromPiazzatura = function (piazzatura, sortFn) {
            piazzatura = piazzatura || [];
            sortFn = sortFn || function (a, b) {
                var rsA = a.RagioneSociale().toUpperCase();
                var rsB = b.RagioneSociale().toUpperCase();
                if (rsA < rsB) {
                    return -1;
                }
                if (rsA > rsB) {
                    return 1;
                }

                return 0;
            };

            var aziende = ko.utils.arrayGetDistinctValuesBy(ko.utils.arrayMap(piazzatura, function (p) {
                var current = new App.Common.PiazzaturaBo(p);

                return current.Azienda;
            }), 'Id')


            return aziende.sort(sortFn);
        };

        var _getBancheFromPiazzatura = function (piazzatura) {
            piazzatura = piazzatura || [];

            return ko.utils.arrayGetDistinctValuesBy(ko.utils.arrayMap(piazzatura, function (p) {
                var current = new App.Common.PiazzaturaBo(p);
                var banca = new App.Common.BancaBo();

                banca.CodiceAbi(current.Rapporto.CodiceAbi);
                banca.Descrizione(current.Rapporto.DescrizioneBanca);

                return ko.toJS(banca);
            }), 'Descrizione');
        };

        Common.GetAziendeFromPiazzatura = _getAziendeFromPiazzatura;
        Common.GetBancheFromPiazzatura = _getBancheFromPiazzatura;

    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));

var App;
(function (App) {
    (function (Common) {
        var SaldoBo = (function () {
            function SaldoBo(data) {

                if (typeof data === "undefined") { data = null; }

                this.dataContabile = ko.observable(null);
                this.saldoContabile = new Common.SaldoValoreBo(null);
                this.saldoDisponibile = new Common.SaldoValoreBo(null);

                if (data !== null) {
                    this.dataContabile(data.dataContabile);
                    this.saldoContabile = new Common.SaldoValoreBo(data.saldoContabile);
                    this.saldoDisponibile = new Common.SaldoValoreBo(data.saldoDisponibile);
                }
            }

            return SaldoBo;
        })();
        Common.SaldoBo = SaldoBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
var App;
(function (App) {
    (function (Common) {
        var SaldoValoreBo = (function () {
            function SaldoValoreBo(data) {

                if (typeof data === "undefined") { data = null; }

                this.CodiceDivisa = ko.observable(null);
                this.Valore = ko.observable(null);

                if (data !== null) {
                    this.CodiceDivisa(data.CodiceDivisa);
                    this.Valore(data.Valore);
                }
            }

            return SaldoValoreBo;
        })();
        Common.SaldoValoreBo = SaldoValoreBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));