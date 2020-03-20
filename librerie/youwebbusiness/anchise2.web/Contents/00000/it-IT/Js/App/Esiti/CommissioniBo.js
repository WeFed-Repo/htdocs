var App;
(function (App) {
    (function (Esiti) {
        Esiti.CommissioniBo = (function () {
            return function (data) {
                if (typeof data === "undefined") { data = null; }

                this.IdCommissione = ko.observable(null);
                this.ImportoCommissione = ko.observable(null);
                this.DivisaCommissione = ko.observable(null);
                this.DescrizioneCommissione = ko.observable(null);

                var self = this;

                if (data != null) {
                    self.IdCommissione(data.IdCommissione);
                    self.ImportoCommissione(data.ImportoCommissione);
                    self.DivisaCommissione(data.DivisaCommissione);
                    self.DescrizioneCommissione(data.DescrizioneCommissione);
                }
            }
        })();
    })(App.Esiti || (App.Esiti = {}));
})(App || (App = {}));
