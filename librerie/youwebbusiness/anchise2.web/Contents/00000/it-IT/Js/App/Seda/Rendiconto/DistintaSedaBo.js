var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.DistintaSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDistintaBo.call(this, data);

                    this.Disposizioni = ko.observableArray(null);

                    var self = this;
                    if (data != null) {
                        if (data.Disposizioni != null) {
                            ko.utils.arrayForEach(data.Disposizioni, function (item) {
                                self.Disposizioni.push(new App.Seda.Rendiconto.DisposizioneSedaBo(item));
                            });
                        }
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));