var App;
(function (App) {
    (function (Common) {
        var BancaBo = (function () {
            function BancaBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.CodiceAbi   = ko.observable(null);
                this.Descrizione = ko.observable(null);

                if (data !== null) {
                    this.CodiceAbi(data.CodiceAbi);
                    this.Descrizione(data.Descrizione);
                }
            }
            return BancaBo;
        })();
        Common.BancaBo = BancaBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));