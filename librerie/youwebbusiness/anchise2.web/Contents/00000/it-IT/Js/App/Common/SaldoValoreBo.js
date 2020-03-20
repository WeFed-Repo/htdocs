var App;
(function (App) {
    (function (Common) {
        var SaldoValoreBo = (function () {
            function SaldoValoreBo(data) {

                if (typeof data === "undefined") { data = null; }

                this.CodiceDivisa = ko.observable(null);
                this.Valore = ko.observable(null);

                if (data !== null) {
                    this.CodiceDivisa(data.CodiceDivisa);
                    this.Valore(data.Valore);
                }
            }

            return SaldoValoreBo;
        })();
        Common.SaldoValoreBo = SaldoValoreBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));