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
