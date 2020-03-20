///#source 1 1 /Contents/00000/it-IT/js/App/Seda/StatoAvanzamentoBo.js
var App;
(function (App) {
    (function (Seda) {
        var StatoAvanzamentoBo = (function () {
            function StatoAvanzamentoBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.StatoMessaggio = ko.observable(null);
                this.DescrizioneStato = ko.observable(null);
                this.DataCreazione = ko.observable(null);
                this.DataCaricamento = ko.observable(null);
                this.NomeTag = ko.observable(null);
                this.DescrizioneLibera = ko.observable(null);
                this.IdEsito = ko.observable(null);
                this.IdFlussoEsito = ko.observable(null);
                this.CausaleEsito = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.StatoMessaggio(data.StatoMessaggio);
                    self.CausaleEsito(data.CausaleEsito);
                    self.DescrizioneStato(data.DescrizioneStato);
                    self.NomeTag(data.NomeTag);
                    self.DescrizioneLibera(data.DescrizioneLibera);
                    if (data.DataCreazione !== null && data.DataCreazione !== "undefined")
                        self.DataCreazione(new Date(moment(data.DataCreazione)));
                    if (data.DataCaricamento !== null && data.DataCaricamento !== "undefined")
                        self.DataCaricamento(new Date(moment(data.DataCaricamento)));
                    self.IdEsito(data.IdEsito);
                    self.IdFlussoEsito(data.IdFlussoEsito);
                }
            }
            return StatoAvanzamentoBo;
        })();
        Seda.StatoAvanzamentoBo = StatoAvanzamentoBo;
    })(App.Seda || (App.Seda = {}));
    var Seda = App.Seda;
})(App || (App = {}));

