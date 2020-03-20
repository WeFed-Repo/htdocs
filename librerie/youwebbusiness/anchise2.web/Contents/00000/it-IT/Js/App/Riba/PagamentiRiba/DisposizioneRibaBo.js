var App;
(function (App) {
    (function (Riba) {
        (function (PagamentiRiba) {
            PagamentiRiba.DisposizioneRibaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    this.DataScadenza = ko.observable(null);
                    this.Causale = ko.observable(null);
                    this.CodAbiDomiciliataria = ko.observable(null);
                    this.CodCabDomiciliataria = ko.observable(null);
                    this.DescrizioneCreditore = ko.observable(null);
                    this.NumeroAvviso = ko.observable(null);
                    this.TipoEffetto = ko.observable(null);
                    this.FlagVista = ko.observable(null);
                    this.AbiCabCheck = ko.observable(null);
                    this.RiferimentoOperazione = ko.observable(null);

                    if (data != null) {
                        if (data.DataScadenza !== null && data.DataScadenza !== "undefined") {
                            this.DataScadenza(new Date(moment(data.DataScadenza)));
                        }
                        this.Causale(data.Causale);
                        this.CodAbiDomiciliataria(data.CodAbiDomiciliataria);
                        this.CodCabDomiciliataria(data.CodCabDomiciliataria);
                        this.DescrizioneCreditore(data.DescrizioneCreditore);
                        this.NumeroAvviso(data.NumeroAvviso);
                        this.TipoEffetto(data.TipoEffetto);
                        this.FlagVista(data.FlagVista);
                        this.AbiCabCheck(data.AbiCabCheck);
                        this.RiferimentoOperazione(data.RiferimentoOperazione);
                    }
                }
            })();
        })(App.Riba.PagamentiRiba || (App.Riba.PagamentiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));