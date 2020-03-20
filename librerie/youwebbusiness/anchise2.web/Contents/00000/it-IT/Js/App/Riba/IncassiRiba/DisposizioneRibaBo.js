var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.DisposizioneRibaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    this.DataScadenza = ko.observable(null);
                    this.CodAbiDomiciliataria = ko.observable(null);
                    this.CodCabDomiciliataria = ko.observable(null);
                    this.DenominazioneCreditore = ko.observable(null);
                    this.DescrizioneCreditore = ko.observable(null);
                    this.DescrizioneRiba = ko.observable(null);
                    this.NumeroRicevuta = ko.observable(null);
                    this.TipoDocumento = ko.observable(null);
                    this.CreditoreNonResidente = ko.observable(null);
                    this.RichiestaEsito = ko.observable(null);
                    this.FlgRibaEstera = ko.observable(null);
                    this.ListCabOrdinante = ko.observable(null);

                    this.Debitore = new App.Common.SoggettoBo(null);

                    if (data != null) {
                        if (data.DataScadenza !== null && data.DataScadenza !== "undefined") {
                            this.DataScadenza(new Date(moment(data.DataScadenza)));
                        }
                        this.CodAbiDomiciliataria(data.CodAbiDomiciliataria);
                        this.CodCabDomiciliataria(data.CodCabDomiciliataria);
                        this.DenominazioneCreditore(data.DenominazioneCreditore);
                        this.DescrizioneCreditore(data.DescrizioneCreditore);
                        this.DescrizioneRiba(data.DescrizioneRiba);
                        this.NumeroRicevuta(data.NumeroRicevuta);
                        this.TipoDocumento(data.TipoDocumento);
                        this.CreditoreNonResidente(data.CreditoreNonResidente);
                        this.RichiestaEsito(data.RichiestaEsito);
                        this.FlgRibaEstera(data.FlgRibaEstera);
                        this.ListCabOrdinante(data.ListCabOrdinante);

                        this.Debitore = new App.Common.SoggettoBo(data.Debitore);
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));