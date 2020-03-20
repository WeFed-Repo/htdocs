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

                // Proprietà necessaria per la lista delle disposizioni
                // Da server se la disposizione non ha esito al beneficiario ritorna l'oggetto a null, mentre trona l'oggetto inizializzato con tutte le sue proprietà a null
                // Quindi il controllo sulla nullità delle proprietà per controllare se la disposizione ha o meno l'esito al beneficiario non è un controllo valido
                // Togliendo l'inizializzazione dell'oggetto Esito dal costruttore sorgono i problemi nei binder dei dettagli
                this.HasEsitoAlBeneficiario = ko.observable(false);
                this.IdentifierAzienda = new App.Common.IdentifierBo(null);

                var self = this;

                if (data !== null) {
                    self.Debitore = new App.Common.SoggettoBo(data.Debitore);
                    self.Beneficiario = new App.Common.SoggettoBo(data.Beneficiario);
                    self.Creditore = new App.Common.SoggettoBo(data.Creditore);
                    //se esiste creditore effettivo (qui chiamato creditore) ho CreditoreOBeneficiario è quello altrimenti è il creditore (qui chiamato beneficiario)
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
