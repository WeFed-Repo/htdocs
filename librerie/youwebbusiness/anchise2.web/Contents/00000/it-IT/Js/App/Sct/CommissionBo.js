var App;
(function (App) {
    (function (Sct) {
        var CommissionBo = (function () {
            function CommissionBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Ammount = ko.observable(null);
                this.AmmountCurrency = ko.observable(null);
                this.Charge = ko.observable(null);
                this.ChargeCurrency = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Ammount(data.Ammount);
                    self.AmmountCurrency(data.AmmountCurrency);
                    self.Charge(data.Charge);
                    self.ChargeCurrency(data.ChargeCurrency);
                }
            }
            return CommissionBo;
        })();
        Sct.CommissionBo = CommissionBo;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));
