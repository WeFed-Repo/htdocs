var App;
(function (App) {
    (function (InfoConti) {
        (function (StampaMovimentiPeriodici) {
            StampaMovimentiPeriodici.FiltroStampaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }

                    this.ListaRapporti = ko.observableArray();
                    this.SaldiNegativiInRosso = ko.observable(true);
                    this.EvidenzaAtergate = ko.observable(true);
                    this.EvidenzaPostergate = ko.observable(true);
                    this.DataDa = ko.observable(null);
                    this.DataA = ko.observable(null);
                    App.Core.BasePagingFilterAsync.call(this, data);

                    if (data != null) {
                        if (data.ListaRapporti != null)
                            ko.utils.arrayForEach(data.ListaRapporti, function (item) {
                                self.ListaRapporti.push(new Common.IdentifierBo(item));
                            });
                        self.SaldiNegativiInRosso(data.SaldiNegativiInRosso);
                        self.EvidenzaAtergate(data.EvidenzaAtergate);
                        self.EvidenzaPostergate(data.EvidenzaPostergate);
                        if (data.DataDa !== null && data.DataDa !== "undefined") {
                            this.DataDa(new Date(moment(data.DataDa)));
                        }
                        if (data.DataA !== null && data.DataA !== "undefined") {
                            this.DataA(new Date(moment(data.DataA)));
                        }
                    }
                }
            })();
        })(App.InfoConti.StampaMovimentiPeriodici || (App.InfoConti.StampaMovimentiPeriodici = {}))
    })(App.InfoConti || (App.InfoConti = {}));
})(App || (App = {}));