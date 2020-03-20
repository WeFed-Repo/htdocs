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
