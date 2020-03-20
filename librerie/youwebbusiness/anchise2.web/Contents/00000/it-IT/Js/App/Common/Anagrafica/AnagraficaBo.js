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
