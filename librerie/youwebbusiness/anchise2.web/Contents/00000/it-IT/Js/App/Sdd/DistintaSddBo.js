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
