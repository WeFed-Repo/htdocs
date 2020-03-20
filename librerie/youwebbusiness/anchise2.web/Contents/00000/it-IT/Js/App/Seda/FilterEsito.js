var App;
(function (App) {
    (function (Seda) {
        var FilterEsito = (function () {
            function FilterEsito(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.CodiceAbi = ko.observable(null);
                self.IdAzienda = ko.observableArray(null);
                self.TipoMandato = ko.observable(null);
                self.CodiceMandato = ko.observable(null); 
                self.CodFiscSottoscrittore = ko.observable(null);
                self.DataCreazioneFrom = ko.observable(null);
                self.DataCreazioneTo = ko.observable(null); 
                self.DataRicezioneFrom = ko.observable(null);
                self.DataRicezioneTo = ko.observable(null);

                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    self.CodiceAbi(data.CodiceAbi);
                    self.IdAzienda(data.IdAzienda);
                    self.TipoMandato(data.TipoMandato);
                    self.CodiceMandato(data.CodiceMandato);
                    self.CodFiscSottoscrittore(data.CodFiscSottoscrittore);

                    if (data.DataCreazioneFrom !== null && typeof data.DataCreazioneFrom !== "undefined")
                        self.DataCreazioneFrom(new Date(moment(data.DataCreazioneFrom)));
                    if (data.DataCreazioneTo !== null && typeof data.DataCreazioneTo !== "undefined")
                        self.DataCreazioneTo(new Date(moment(data.DataCreazioneTo)));
                    if (data.DataRicezioneFrom !== null && typeof data.DataRicezioneFrom !== "undefined")
                        self.DataRicezioneFrom(new Date(moment(data.DataRicezioneFrom)));
                    if (data.DataRicezioneTo !== null && typeof data.DataRicezioneTo !== "undefined")
                        self.DataRicezioneTo(new Date(moment(data.DataRicezioneTo)));

                    if (data.ClassiServizio != null)
                        ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                            self.ClassiServizio.push(item);
                        });
                }
            }
            return FilterEsito;
        })();
        Seda.FilterEsito = FilterEsito;
    })(App.Seda || (App.Seda = {}));
    var Seda = App.Seda;
})(App || (App = {}));