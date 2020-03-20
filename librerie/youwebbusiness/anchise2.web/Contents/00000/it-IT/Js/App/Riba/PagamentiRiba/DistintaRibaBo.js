var App;
(function (App) {
    (function (Riba) {
        (function (PagamentiRiba) {
            PagamentiRiba.DistintaRibaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDistintaBo.call(this, data);
                    this.SiaSubholding = ko.observable(null);
                    this.DataOraCaricamento = ko.observable(null);
                    this.ListCab = ko.observable(null);
                    this.IsMultiConto = ko.observable(null);
                    this.IsTelematico = ko.observable(null);
                    this.Disposizioni = ko.observableArray(null);
                    this.IdDivisa = 'EUR';

                    var self = this;
                    if (data != null) {
                        self.SiaSubholding(data.SiaSubholding);
                        if (data.DataOraCaricamento !== null && data.DataOraCaricamento !== "undefined") {
                            this.DataOraCaricamento(new Date(moment(data.DataOraCaricamento)));
                        }
                        self.ListCab(data.ListCab);
                        self.IsMultiConto(data.IsMultiConto);
                        self.IsTelematico(data.IsTelematico);
                        if (data.Disposizioni != null) {
                            ko.utils.arrayForEach(data.Disposizioni, function (item) {
                                self.Disposizioni.push(new App.Riba.PagamentiRiba.DisposizioneRibaBo(item));
                            });
                        }
                    }
                }
            })();
        })(App.Riba.PagamentiRiba || (App.Riba.PagamentiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));