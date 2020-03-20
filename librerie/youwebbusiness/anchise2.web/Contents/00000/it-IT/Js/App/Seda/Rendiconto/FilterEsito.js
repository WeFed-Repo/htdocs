var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.FilterEsito = (function () {
                return function(data) {
                    if (typeof data === "undefined") { data = null; }
                    var self = this;

                    self.CodiceAbi = ko.observable(null);
                    self.IdAzienda = ko.observable(null);
                    self.TipoFlusso = ko.observable(null);
                    self.DataCreazioneFrom = ko.observable(null);
                    self.DataCreazioneTo = ko.observable(null);
                    self.DataRicezioneFrom = ko.observable(null);
                    self.DataRicezioneTo = ko.observable(null);
                    //self.ClassiServizio = ko.observable(null);
                    //self.BloccoLogico = ko.observable(null);

                    App.Core.BasePagingFilterAsync.call(this, data);

                    if (data !== null) {
                        self.CodiceAbi(data.CodiceAbi);
                        self.IdAzienda(data.IdAzienda);
                        self.TipoFlusso(data.TipoFlusso);
                        //self.BloccoLogico(data.BloccoLogico);

                        if (data.DataCreazioneFrom !== null && typeof data.DataCreazioneFrom !== "undefined")
                            self.DataCreazioneFrom(new Date(moment(data.DataCreazioneFrom)));
                        if (data.DataCreazioneTo !== null && typeof data.DataCreazioneTo !== "undefined")
                            self.DataCreazioneTo(new Date(moment(data.DataCreazioneTo)));
                        if (data.DataRicezioneFrom !== null && typeof data.DataRicezioneFrom !== "undefined")
                            self.DataRicezioneFrom(new Date(moment(data.DataRicezioneFrom)));
                        if (data.DataRicezioneTo !== null && typeof data.DataRicezioneTo !== "undefined")
                            self.DataRicezioneTo(new Date(moment(data.DataRicezioneTo)));

                        //if (data.ClassiServizio != null)
                        //    ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                        //        self.ClassiServizio.push(item);
                        //    });
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));