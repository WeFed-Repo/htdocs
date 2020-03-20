var App;
(function (App) {
    (function (Common) {
        var DatiAggiuntiviBo = (function () {
            function DatiAggiuntiviBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.TipoSoggetto      = ko.observable(null);
                this.TipoCodice        = ko.observable(null);
                this.CodiceSoggetto    = ko.observable(null);
                this.DescrizioneCodice = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.TipoSoggetto(data.TipoSoggetto);
                    self.TipoCodice(data.TipoCodice);
                    self.CodiceSoggetto(data.CodiceSoggetto);
                    self.DescrizioneCodice(data.DescrizioneCodice);
                }
            }
            return DatiAggiuntiviBo;
        })();
        Common.DatiAggiuntiviBo = DatiAggiuntiviBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
