var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.FilterEsito = (function () {
                return function(data) {
                    if (typeof data === "undefined") { data = null; }
                    var self = this;

                    self.CodiceAbi = ko.observable(null);
                    self.IdAzienda = ko.observable(null);
                    self.TipoFlusso = ko.observable(null);
                    self.CodiceMandato = ko.observable(null);
                    self.CodFiscSottoscrittore = ko.observable(null);
                    self.DataCreazioneFrom = ko.observable(null);
                    self.DataCreazioneTo = ko.observable(null);
                    self.DataRicezioneFrom = ko.observable(null);
                    self.DataRicezioneTo = ko.observable(null);
                    self.ClasseServizio = ko.observable(null);
                    self.BloccoLogico = ko.observable(null);
                    self.StatoEsito = ko.observable(null);

                    App.Core.BasePagingFilterAsync.call(this, data);

                    if (data !== null) {
                        self.CodiceAbi(data.CodiceAbi);
                        self.IdAzienda(data.IdAzienda);
                        self.TipoFlusso(data.TipoFlusso);
                        self.CodiceMandato(data.CodiceMandato);
                        self.CodFiscSottoscrittore(data.CodFiscSottoscrittore);
                        self.BloccoLogico(data.BloccoLogico);
                        self.StatoEsito(data.StatoEsito);

                        if (data.DataCreazioneFrom !== null && typeof data.DataCreazioneFrom !== "undefined")
                            self.DataCreazioneFrom(new Date(moment(data.DataCreazioneFrom)));
                        if (data.DataCreazioneTo !== null && typeof data.DataCreazioneTo !== "undefined")
                            self.DataCreazioneTo(new Date(moment(data.DataCreazioneTo)));
                        if (data.DataRicezioneFrom !== null && typeof data.DataRicezioneFrom !== "undefined")
                            self.DataRicezioneFrom(new Date(moment(data.DataRicezioneFrom)));
                        if (data.DataRicezioneTo !== null && typeof data.DataRicezioneTo !== "undefined")
                            self.DataRicezioneTo(new Date(moment(data.DataRicezioneTo)));

                        self.ClasseServizio(data.ClasseServizio);
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));