var App;
(function (App) {
    (function (Esiti) {
        var StatoAvanzamentoBo = (function () {
            function StatoAvanzamentoBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.StatoMessaggio = ko.observable(null);
                this.DataCreazione = ko.observable(null);
                this.DataCaricamento = ko.observable(null);
                this.NomeTag = ko.observable(null);
                this.DescrizioneLibera = ko.observable(null);
                this.CausaleEsito = ko.observable(null);
                this.CodErroreEsteso = ko.observable(null);

                var self = this;

                if (data != null) {
                    self.StatoMessaggio(data.StatoMessaggio);
                    if (data.DataCreazione !== null && data.DataCreazione !== "undefined") {
                        self.DataCreazione(new Date(moment(data.DataCreazione)));
                    }
                    if (data.DataCaricamento !== null && data.DataCaricamento !== "undefined") {
                        self.DataCaricamento(new Date(moment(data.DataCaricamento)));
                    }
                    self.NomeTag(data.NomeTag);
                    self.DescrizioneLibera(data.DescrizioneLibera);
                    self.CausaleEsito(data.CausaleEsito);
                    self.CodErroreEsteso(data.CodErroreEsteso);
                }
            }
            return StatoAvanzamentoBo;
        })();
        Esiti.StatoAvanzamentoBo = StatoAvanzamentoBo;
    })(App.Esiti || (App.Esiti = {}));
    var Esiti = App.Esiti;
})(App || (App = {}));
