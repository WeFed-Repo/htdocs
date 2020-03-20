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
