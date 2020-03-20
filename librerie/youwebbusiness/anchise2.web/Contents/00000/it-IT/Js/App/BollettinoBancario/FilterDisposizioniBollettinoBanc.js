var App;
(function (App) {
    (function (BollettinoBancario) {
        var FilterDisposizioniBollettinoBanc = (function () {
            function FilterDisposizioniBollettinoBanc(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                App.Common.FilterDisposizioni.call(this, data);
            }
            return FilterDisposizioniBollettinoBanc;
        })();
        BollettinoBancario.FilterDisposizioniBollettinoBanc = FilterDisposizioniBollettinoBanc;
    })(App.BollettinoBancario || (App.BollettinoBancario = {}));
    var BollettinoBancario = App.BollettinoBancario;
})(App || (App = {}));