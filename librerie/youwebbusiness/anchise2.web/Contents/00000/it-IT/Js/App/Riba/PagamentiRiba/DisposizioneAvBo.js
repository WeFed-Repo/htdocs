var App;
(function (App) {
    (function (Riba) {
        (function (PagamentiRiba) {
            PagamentiRiba.DisposizioneAvBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Riba.PagamentiRiba.DisposizioneRibaBo.call(this, data);

                    this.LocalitaDebitore = ko.observable(null);
                    this.IdFiscaleCreditore = ko.observable(null);
                    this.DataCreazione = ko.observable(null);
                    this.RifOperazione = ko.observable(null);

                    if (data != null) {
                        this.LocalitaDebitore(data.LocalitaDebitore);
                        this.IdFiscaleCreditore(data.IdFiscaleCreditore);
                        if (data.DataCreazione !== null && data.DataCreazione !== "undefined") {
                            this.DataCreazione(new Date(moment(data.DataCreazione)));
                        }
                        this.RifOperazione(data.RifOperazione);
                    }
                }
            })();
        })(App.Riba.PagamentiRiba || (App.Riba.PagamentiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));