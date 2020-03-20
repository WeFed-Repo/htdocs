var App;
(function (App) {
    (function (BollettinoBancario) {
        BollettinoBancario.DistintaBollettinoBancBo = (function () {
            return function (data) {
                if (typeof data === "undefined") { data = null; }
                App.Common.BaseDistintaBo.call(this, data);

                this.Disposizioni = ko.observableArray(null);
                this.SiaSubholding = ko.observable(null);
                this.IsMulticonto = ko.observable(null);
                this.IdDivisa = 'E';

                var self = this;
                if (data != null) {
                    self.SiaSubholding(data.SiaSubholding);
                    self.IsMulticonto(data.IsMulticonto);
                    if (data.Disposizioni != null) {
                        ko.utils.arrayForEach(data.Disposizioni, function (item) {
                            self.Disposizioni.push(new App.BollettinoBancario.DisposizioneBollettinoBancBo(item));
                        });
                    }
                }
            }
        })();
    })(App.BollettinoBancario || (App.BollettinoBancario = {}));
})(App || (App = {}));