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
