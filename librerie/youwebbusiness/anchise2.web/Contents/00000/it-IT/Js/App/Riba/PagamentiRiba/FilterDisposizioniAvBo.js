var App;
(function (App) {
    (function (Riba) {
        (function (PagamentiRiba) {
            PagamentiRiba.FilterDisposizioniAvBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    this.DataScadenzaDa = ko.observable(null);
                    this.DataScadenzaA = ko.observable(null);

                    App.Common.FilterDisposizioni.call(this, data);
                    
                    if (data != null) {
                        if (data.DataScadenzaDa !== null && data.DataScadenzaDa !== "undefined") {
                            this.DataScadenzaDa(new Date(moment(data.DataScadenzaDa)));
                        }
                        if (data.DataScadenzaA !== null && data.DataScadenzaA !== "undefined") {
                            this.DataScadenzaA(new Date(moment(data.DataScadenzaA)));
                        }
                    }
                }
            })();
        })(App.Riba.PagamentiRiba || (App.Riba.PagamentiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));