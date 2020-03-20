var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            var DettagliMandatoBo = (function () {
                function DettagliMandatoBo(data) {
                    if (typeof data === "undefined") { data = null; }
                    
                    this.IdEsito = ko.observable(null);
                    this.IdFlussoEsito = ko.observable(null);
                    this.CodiceMandato = ko.observable(null);
                    this.StatoMandato = ko.observable(null);
                    this.DataAttivazioneMandato = ko.observable(null);
                    this.DomiciliazioneMandato = ko.observable(null);
                    this.TipoMandato = ko.observable(null);
                    this.DataRevocaMandato = ko.observable(null);
                    this.PrezzoSingoloMandato = ko.observable(null);

                    var self = this;
                    if (data !== null) {
                        self.IdEsito(data.IdEsito);
                        self.IdFlussoEsito(data.IdFlussoEsito);
                        self.CodiceMandato(data.CodiceMandato);
                        self.StatoMandato(data.StatoMandato);
                        if (data.DataAttivazioneMandato !== null && data.DataAttivazioneMandato !== "undefined")
                            self.DataAttivazioneMandato(new Date(moment(data.DataAttivazioneMandato)));
                        self.DomiciliazioneMandato(data.DomiciliazioneMandato);
                        self.TipoMandato(data.TipoMandato);
                        if (data.DataRevocaMandato !== null && data.DataRevocaMandato !== "undefined")
                            self.DataRevocaMandato(new Date(moment(data.DataRevocaMandato)));
                        self.PrezzoSingoloMandato(data.PrezzoSingoloMandato);
                    }
                }
                return DettagliMandatoBo;
            })();
            Seda.DettagliMandatoBo = DettagliMandatoBo;
        })(App.Rendiconto || (App.Rendiconto = {}));
    })(App.Seda || (App.Seda = {}));
    var Seda = App.Seda;
})(App || (App = {}));
