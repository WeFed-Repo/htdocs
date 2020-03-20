var App;
(function (App) {
    (function (Common) {
        Common.BancaModel = function BancaModel(data) {
            if (typeof data === "undefined") { data = null; }
            this.Debitore = new App.Common.AbiCabBo(null);
            this.Creditore = new App.Common.AbiCabBo(null);

            if (data !== null) {
                this.Debitore = new App.Common.AbiCabBo(data.Debitore);
                this.Debitore = new App.Common.AbiCabBo(data.Debitore);
            }
        };
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
