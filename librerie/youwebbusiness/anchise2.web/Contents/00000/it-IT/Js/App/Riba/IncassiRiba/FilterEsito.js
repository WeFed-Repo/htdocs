var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.FilterEsito = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Core.BasePagingFilterAsync.call(this, data);

                    this.ListaRapporti = ko.observable(null);
                    this.IdAzienda = ko.observable(null);
                    this.CodiceAbi = ko.observable(null);
                    this.DataScadenzaFrom = ko.observable(null);
                    this.DataScadenzaTo = ko.observable(null);
                    this.DataCaricamentoFrom = ko.observable(null);
                    this.DataCaricamentoTo = ko.observable(null);
                    this.ImportoFrom = ko.observable(null);
                    this.ImportoTo = ko.observable(null);
                    this.DescrizioneDebitore = ko.observable(null);

                    this.ListaClassiServizio = ko.observableArray(null);

                    var self = this;
                    if (data != null) {
                        self.ListaRapporti(data.ListaRapporti);
                        self.IdAzienda(data.IdAzienda);
                        self.CodiceAbi(data.CodiceAbi);
                        self.ImportoFrom(data.ImportoFrom);
                        self.ImportoTo(data.ImportoTo);
                        self.DescrizioneDebitore(data.DescrizioneDebitore);

                        if (data.DataScadenzaFrom !== null && data.DataScadenzaFrom !== "undefined") {
                            this.DataScadenzaFrom(new Date(moment(data.DataScadenzaFrom)));
                        }
                        if (data.DataScadenzaTo !== null && data.DataScadenzaTo !== "undefined") {
                            this.DataScadenzaTo(new Date(moment(data.DataScadenzaTo)));
                        }
                        if (data.DataCaricamentoFrom !== null && data.DataCaricamentoFrom !== "undefined") {
                            this.DataCaricamentoFrom(new Date(moment(data.DataCaricamentoFrom)));
                        }
                        if (data.DataCaricamentoTo !== null && data.DataCaricamentoTo !== "undefined") {
                            this.DataCaricamentoTo(new Date(moment(data.DataCaricamentoTo)));
                        }

                        if (data.ListaClassiServizio != null) {
                            ko.utils.arrayForEach(data.ListaClassiServizio, function (item) {
                                self.ListaClassiServizio.push(item);
                            });
                        }
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));
