var App;
(function (App) {
    (function (Esiti) {
            Esiti.FilterEsito = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Core.BasePagingFilterAsync.call(this, data);

                    this.IdEsito = ko.observable(null);
                    this.ListaRapporti = ko.observable(null);
                    this.IdAzienda = ko.observable(null);
                    this.CodiceAbi = ko.observable(null);
                    this.TipoDato = ko.observable(null);
                    this.DataInvioFrom = ko.observable(null);
                    this.DataInvioTo = ko.observable(null);
                    this.DataEsecuzioneFrom = ko.observable(null);
                    this.DataEsecuzioneTo = ko.observable(null);
                    this.ImportoFrom = ko.observable(null);
                    this.ImportoTo = ko.observable(null);
                    this.ImportoDistFrom = ko.observable(null);
                    this.ImportoDistTo = ko.observable(null);
                    this.Stato = ko.observable(null);

                    this.ListaClassiServizio = ko.observableArray(null);

                    var self = this;
                    if (data != null) {
                        self.IdEsito(data.IdEsito);
                        self.ListaRapporti(data.ListaRapporti);
                        self.IdAzienda(data.IdAzienda);
                        self.CodiceAbi(data.CodiceAbi);
                        self.TipoDato(data.TipoDato);
                        self.ImportoFrom(data.ImportoFrom);
                        self.ImportoTo(data.ImportoTo);
                        self.ImportoDistFrom(data.ImportoDistFrom);
                        self.ImportoDistTo(data.ImportoDistTo);
                        self.Stato(data.Stato);

                        if (data.DataInvioFrom !== null && data.DataInvioFrom !== "undefined" && data.DataInvioFrom !== undefined) {
                            this.DataInvioFrom(new Date(moment(data.DataInvioFrom)));
                        }
                        if (data.DataInvioTo !== null && data.DataInvioTo !== "undefined" && data.DataInvioTo !== undefined) {
                            this.DataInvioTo(new Date(moment(data.DataInvioTo)));
                        }
                        if (data.DataEsecuzioneFrom !== null && data.DataEsecuzioneFrom !== "undefined" && data.DataEsecuzioneFrom !== undefined) {
                            this.DataEsecuzioneFrom(new Date(moment(data.DataEsecuzioneFrom)));
                        }
                        if (data.DataEsecuzioneTo !== null && data.DataEsecuzioneTo !== "undefined" && data.DataEsecuzioneTo !== undefined) {
                            this.DataEsecuzioneTo(new Date(moment(data.DataEsecuzioneTo)));
                        }

                        if (data.ListaClassiServizio != null) {
                            ko.utils.arrayForEach(data.ListaClassiServizio, function (item) {
                                self.ListaClassiServizio.push(item);
                            });
                        }
                    }
                }
            })();
    })(App.Esiti || (App.Esiti = {}));
})(App || (App = {}));
