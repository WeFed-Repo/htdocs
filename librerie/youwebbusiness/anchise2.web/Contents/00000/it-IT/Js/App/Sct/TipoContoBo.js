var App;
(function (App) {
    (function (Sct) {
        var TipoContoBo = (function () {
            function TipoContoBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Codice            = ko.observable(null);
                this.DescrizioneLibera = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Codice(data.Codice);
                    self.DescrizioneLibera(data.DescrizioneLibera);
                }
            }
            return TipoContoBo;
        })();
        Sct.TipoContoBo = TipoContoBo;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));
