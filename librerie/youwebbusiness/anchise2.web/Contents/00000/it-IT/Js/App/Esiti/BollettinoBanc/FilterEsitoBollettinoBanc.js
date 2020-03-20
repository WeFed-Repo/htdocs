var App;
(function (App) {
    (function (Esiti) {
        (function (BollettinoBanc) {
            var FilterEsitoBollettinoBanc = (function () {
                function FilterEsitoBollettinoBanc(data) {
                    if (typeof data === "undefined") { data = null; }

                    App.Core.BasePagingFilterAsync.call(this, data);

                    this.IdEsito = ko.observable(null);
                    this.IdAzienda = ko.observable(null);
                    this.ListaRapporti = ko.observable(null);
                    this.CodiceAbi = ko.observable(null);
                    this.DataPagamentoFrom = ko.observable(null);
                    this.DataPagamentoTo = ko.observable(null);

                    this.DataValutaFrom = ko.observable(null);
                    this.DataValutaTo = ko.observable(null);

                    this.ImportoFrom = ko.observable(null);
                    this.ImportoTo = ko.observable(null);

                    this.ListaClassiServizio = ko.observableArray(null);

                    var self = this;
                    if (data != null) {
                        self.IdEsito(data.IdEsito);
                        self.ListaRapporti(data.ListaRapporti);
                        self.IdAzienda(data.IdAzienda);
                        self.CodiceAbi(data.CodiceAbi);
                        self.ImportoFrom(data.ImportoFrom);
                        self.ImportoTo(data.ImportoTo);

                        if (data.DataPagamentoFrom !== null && data.DataPagamentoFrom !== "undefined" && data.DataPagamentoFrom !== undefined) {
                            this.DataPagamentoFrom(new Date(moment(data.DataPagamentoFrom)));
                        }
                        if (data.DataPagamentoTo !== null && data.DataPagamentoTo !== "undefined" && data.DataPagamentoTo !== undefined) {
                            this.DataPagamentoTo(new Date(moment(data.DataPagamentoTo)));
                        }
                        if (data.DataValutaFrom !== null && data.DataValutaFrom !== "undefined" && data.DataValutaFrom !== undefined) {
                            this.DataValutaFrom(new Date(moment(data.DataValutaFrom)));
                        }
                        if (data.DataValutaTo !== null && data.DataValutaTo !== "undefined" && data.DataValutaTo !== undefined) {
                            this.DataValutaTo(new Date(moment(data.DataValutaTo)));
                        }

                        if (data.ListaClassiServizio != null) {
                            ko.utils.arrayForEach(data.ListaClassiServizio, function (item) {
                                self.ListaClassiServizio.push(item);
                            });
                        }
                    }
                }
                return FilterEsitoBollettinoBanc;
            })();
            BollettinoBanc.FilterEsitoBollettinoBanc = FilterEsitoBollettinoBanc;
        })(App.Esiti.BollettinoBanc || (App.Esiti.BollettinoBanc = {}))
    })(App.Esiti || (App.Esiti = {}));
    var Esiti = App.Esiti;
})(App || (App = {}));
