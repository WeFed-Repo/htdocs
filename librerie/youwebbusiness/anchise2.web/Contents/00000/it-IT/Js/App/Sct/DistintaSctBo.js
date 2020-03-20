var App;
(function (App) {
    (function (Sct) {
        var DistintaSctBo = (function () {
            function DistintaSctBo(data) {
                if (typeof data === "undefined") { data = null; }

                App.Common.BaseDistintaBo.call(this, data);

                this.IdDivisa           = ko.observable(null);
                this.EsitoOrdinante     = ko.observable(null);
                this.AddebitoCumulativo = ko.observable(null);
                this.DataEsecuzione     = ko.observable(null);
                this.IsUrgP = ko.observable(null);
                this.IsInstant = ko.observable(null);
                this.Disposizioni       = ko.observableArray(null);

                this.TipoConto = new App.Sct.TipoContoBo(null);
                this.Commission = new App.Sct.CommissionBo(null);
                this.Beneficiario = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.IdDivisa(data.IdDivisa);
                    self.EsitoOrdinante(data.EsitoOrdinante);
                    self.AddebitoCumulativo(data.AddebitoCumulativo);
                    self.IsUrgP(data.IsUrgP);
                    self.IsInstant(data.IsInstant);
                    if (data.DataEsecuzione !== null && data.DataEsecuzione !== "undefined")
                        self.DataEsecuzione(new Date(moment(data.DataEsecuzione)));
                    
                    if (data.Disposizioni != null) {
                        ko.utils.arrayForEach(data.Disposizioni, function (item) {
                            self.Disposizioni.push(new App.Sct.DisposizioneSctBo(item));
                        });
                    }
                    self.TipoConto = new App.Sct.TipoContoBo(data.TipoConto);
                    self.Commission = new App.Sct.CommissionBo(data.Commission);
                    self.Beneficiario(data.Beneficiario);
                }
            }
            return DistintaSctBo;
        })();
        Sct.DistintaSctBo = DistintaSctBo;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));
