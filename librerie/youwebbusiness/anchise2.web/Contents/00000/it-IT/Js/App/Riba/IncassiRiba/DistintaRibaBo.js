var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.DistintaRibaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDistintaBo.call(this, data);

                    this.SiaOrdinante = ko.observable(null);
                    this.DataOraCaricamento = ko.observable(null);
                    this.Disposizioni = ko.observableArray(null);
                    this.IdDivisa = 'EUR';

                    var self = this;
                    if (data != null) {
                        self.SiaOrdinante(data.SiaOrdinante);
                        if (data.DataOraCaricamento !== null && data.DataOraCaricamento !== "undefined") {
                            this.DataOraCaricamento(new Date(moment(data.DataOraCaricamento)));
                        }
                        if (data.Disposizioni != null) {
                            ko.utils.arrayForEach(data.Disposizioni, function (item) {
                                self.Disposizioni.push(new App.Riba.IncassiRiba.DisposizioneRibaBo(item));
                            });
                        }
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));