var App;
(function (App) {
    (function (Riba) {
        (function (IncassiRiba) {
            IncassiRiba.EsitoDetailScartoRIBABo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Riba.IncassiRiba.EsitoBo.call(this, data);

                    this.NomeSupporto = ko.observable(null);
                    this.DataCreazione = ko.observable(null);
                    this.IdDistinta = new App.Common.IdentifierBo(null);
                    this.IsIncrociata = ko.observable(null);
                    
                    var self = this;
                    if (data != null) {
                        self.NomeSupporto(data.NomeSupporto);
                        self.IsIncrociata(data.IsIncrociata);
                        
                        if (data.DataCreazione !== null && data.DataCreazione !== "undefined") {
                            this.DataCreazione(new Date(moment(data.DataCreazione)));
                        }

                        self.IdDistinta = new App.Common.IdentifierBo(data.IdDistinta);
                    }
                }
            })();
        })(App.Riba.IncassiRiba || (App.Riba.IncassiRiba = {}))
    })(App.Riba || (App.Riba = {}));
})(App || (App = {}));
