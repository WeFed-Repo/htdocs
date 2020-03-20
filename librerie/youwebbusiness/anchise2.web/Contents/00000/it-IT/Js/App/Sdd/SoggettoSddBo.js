var App;
(function (App) {
    (function (Sdd) {
        var SoggettoSddBo = (function () {
            function SoggettoSddBo(data) {
                if (typeof data === "undefined") { data = null; }

                var self = this;

                self.AccountIdentifier = ko.observable(null);
                self.OtherId = ko.observable(null);

                App.Common.SoggettoBo.call(this, data);

                if (data != null) {
                    self.AccountIdentifier(data.AccountIdentifier);
                    self.OtherId(data.OtherId);
                }
                
            }
            return SoggettoSddBo;
        })();
        Sdd.SoggettoSddBo = SoggettoSddBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));
