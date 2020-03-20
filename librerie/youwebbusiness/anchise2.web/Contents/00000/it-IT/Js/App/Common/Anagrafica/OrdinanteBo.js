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
