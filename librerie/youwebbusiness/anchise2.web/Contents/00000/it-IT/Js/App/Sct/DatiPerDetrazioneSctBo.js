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
