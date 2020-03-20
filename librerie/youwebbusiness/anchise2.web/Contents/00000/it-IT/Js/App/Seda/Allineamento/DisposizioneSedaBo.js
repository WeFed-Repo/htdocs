var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.DisposizioneSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    this.TipoBloccoLogico = ko.observable(null);

                    this.InitnReq = new App.Seda.Allineamento.InitnReq(null);
                    this.AmdmntReq = new App.Seda.Allineamento.AmdmntReq(null);
                    this.CxlReq = new App.Seda.Allineamento.CxlReq(null);
                    this.AccptncRpt = new App.Seda.Allineamento.AccptncRpt(null);

                    if (data != null) {
                        this.TipoBloccoLogico(data.TipoBloccoLogico);

                        this.InitnReq = new App.Seda.Allineamento.InitnReq(data.InitnReq);
                        this.AmdmntReq = new App.Seda.Allineamento.AmdmntReq(data.AmdmntReq);
                        this.CxlReq = new App.Seda.Allineamento.CxlReq(data.CxlReq);
                        this.AccptncRpt = new App.Seda.Allineamento.AccptncRpt(data.AccptncRpt);
                    }
                    var self = this;

                    this.GetBloccoLogico = ko.computed(function () {
                        switch (self.TipoBloccoLogico()) {
                            case App.Seda.Allineamento.TipoBloccoLogico.INS:
                                return self.InitnReq;
                            case App.Seda.Allineamento.TipoBloccoLogico.UPD:
                                return self.AmdmntReq;
                            case App.Seda.Allineamento.TipoBloccoLogico.DEL:
                                return self.CxlReq;
                            case App.Seda.Allineamento.TipoBloccoLogico.ACPT:
                                return self.AccptncRpt;
                        }
                    });
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));