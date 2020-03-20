var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.DistintaSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDistintaBo.call(this, data);

                    this.Disposizioni = ko.observableArray(null);

                    var self = this;
                    if (data != null) {
                        if (data.Disposizioni != null) {
                            ko.utils.arrayForEach(data.Disposizioni, function (item) {
                                self.Disposizioni.push(new App.Seda.Allineamento.DisposizioneSedaSearchBo(item));
                            });
                        }
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));