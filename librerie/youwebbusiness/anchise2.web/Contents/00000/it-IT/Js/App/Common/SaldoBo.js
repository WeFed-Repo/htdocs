var App;
(function (App) {
    (function (Common) {
        var SaldoBo = (function () {
            function SaldoBo(data) {

                if (typeof data === "undefined") { data = null; }

                this.dataContabile = ko.observable(null);
                this.saldoContabile = new Common.SaldoValoreBo(null);
                this.saldoDisponibile = new Common.SaldoValoreBo(null);

                if (data !== null) {
                    this.dataContabile(data.dataContabile);
                    this.saldoContabile = new Common.SaldoValoreBo(data.saldoContabile);
                    this.saldoDisponibile = new Common.SaldoValoreBo(data.saldoDisponibile);
                }
            }

            return SaldoBo;
        })();
        Common.SaldoBo = SaldoBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));