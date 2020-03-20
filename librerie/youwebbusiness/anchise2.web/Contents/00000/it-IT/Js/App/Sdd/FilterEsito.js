var App;
(function (App) {
    (function (Sdd) {
        var FilterEsito = (function () {
            function FilterEsito(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.IdEsito = ko.observable(null);
                self.IdAzienda = ko.observableArray(null);
                self.IdRapporto = ko.observableArray(null);
                self.ImportoDisposizioneTo = ko.observable(null);
                self.ImportoDisposizioneFrom = ko.observable(null);
                self.DataInvioDisposizioneFrom = ko.observable(null);
                self.DataInvioDisposizioneTo = ko.observable(null);
                self.DataScadenzaDisposizioneFrom = ko.observable(null);
                self.DataScadenzaDisposizioneTo = ko.observable(null);
                self.CodiceAbi = ko.observable(null);
                self.RagioneSociale = ko.observable(null);

                self.Debitore = ko.observable(null);
                self.TipoIncasso = ko.observable(null);
                self.StatoIncasso = ko.observable(null);
                self.SequenzaIncasso = ko.observable(null);
                self.ImportoDistintaTo = ko.observable(null);
                self.ImportoDistintaFrom = ko.observable(null);
                self.ImportoSottoDistintaTo = ko.observable(null);
                self.ImportoSottoDistintaFrom = ko.observable(null);
                self.IdDistinta = ko.observable(null);
                self.IdEsitoSottoDistinta = ko.observable(null);

                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    self.IdEsito(data.IdEsito);
                    self.IdRapporto(data.IdRapporto);
                    self.IdAzienda(data.IdAzienda);
                    self.ImportoDisposizioneTo(data.ImportoDisposizioneTo);
                    self.ImportoDisposizioneFrom(data.ImportoDisposizioneFrom);
                    self.ImportoDistintaTo(data.ImportoDistintaTo);
                    self.ImportoDistintaFrom(data.ImportoDistintaFrom);
                    self.ImportoSottoDistintaTo(data.ImportoSottoDistintaTo);
                    self.ImportoSottoDistintaFrom(data.ImportoSottoDistintaFrom);

                    self.TipoIncasso(data.TipoIncasso);
                    self.StatoIncasso(data.StatoIncasso);
                    self.SequenzaIncasso(data.SequenzaIncasso);
                    self.RagioneSociale(data.RagioneSociale);
                    self.Debitore(data.Debitore);
                    self.IdDistinta(data.IdDistinta);
                    self.IdEsitoSottoDistinta(data.IdEsitoSottoDistinta);

                    if (data.DataInvioDisposizioneFrom !== null && typeof data.DataInvioDisposizioneFrom !== "undefined")
                        self.DataInvioDisposizioneFrom(new Date(moment(data.DataInvioDisposizioneFrom)));
                    if (data.DataInvioDisposizioneTo !== null && typeof data.DataInvioDisposizioneTo !== "undefined")
                        self.DataInvioDisposizioneTo(new Date(moment(data.DataInvioDisposizioneTo)));
                    if (data.DataScadenzaDisposizioneFrom !== null && typeof data.DataScadenzaDisposizioneFrom !== "undefined")
                        self.DataScadenzaDisposizioneFrom(new Date(moment(data.DataScadenzaDisposizioneFrom)));
                    if (data.DataScadenzaDisposizioneTo !== null && typeof data.DataScadenzaDisposizioneTo !== "undefined")
                        self.DataScadenzaDisposizioneTo(new Date(moment(data.DataScadenzaDisposizioneTo)));
                    self.CodiceAbi(data.CodiceAbi);
                    if (data.ClassiServizio != null)
                        ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                            self.ClassiServizio.push(item);
                        });
                }
            }
            return FilterEsito;
        })();
        Sdd.FilterEsito = FilterEsito;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));