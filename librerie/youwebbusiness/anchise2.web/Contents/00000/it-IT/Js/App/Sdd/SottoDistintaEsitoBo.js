var App;
(function (App) {
    (function (Sdd) {
        var SottoDistintaEsitoBo = (function () {
            function SottoDistintaEsitoBo(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                App.Sdd.SottoDistintaSddBo.call(this, data);
                self.NumEsiti = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.NumEsiti(data.NumEsiti);
                }
            }
            return SottoDistintaEsitoBo;
        })();
        Sdd.SottoDistintaEsitoBo = SottoDistintaEsitoBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));
