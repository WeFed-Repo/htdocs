var App;
(function (App) {
    (function (Seda) {
        (function (Rendiconto) {
            Rendiconto.DisposizioneSedaBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    this.TipoSoggetto = ko.observable(null);
                    this.IdentificativoCreditore = ko.observable(null);
                    this.Qrtr = ko.observable(null);
                    this.Year = ko.observable(null);
                    this.MndtTp = ko.observable(null);
                    this.CdtrAgt = ko.observable(null);
                    this.DbtrAgt = ko.observable(null);
                    this.RqstTp = ko.observable(null);
                    this.OrgnlPrevId = ko.observable(null);
                    this.InqryId = ko.observable(null);

                    var self = this;
                    if (data !== null) {
                        self.TipoSoggetto(data.TipoSoggetto);
                        self.IdentificativoCreditore(data.IdentificativoCreditore);
                        self.Qrtr(data.Qrtr);
                        self.Year(data.Year);
                        self.MndtTp(data.MndtTp);
                        self.CdtrAgt(data.CdtrAgt);
                        self.DbtrAgt(data.DbtrAgt);
                        self.RqstTp(data.RqstTp);
                        self.OrgnlPrevId(data.OrgnlPrevId);
                        self.InqryId(data.InqryId);
                    }
                }
            })();
        })(App.Seda.Rendiconto || (App.Seda.Rendiconto = {}))
    })(App.Seda || (App.Seda = {}));

})(App || (App = {}));