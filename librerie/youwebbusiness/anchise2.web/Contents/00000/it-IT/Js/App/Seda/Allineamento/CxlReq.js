var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.CxlReq = (function () {
                return function(data) {
                    if (typeof data === "undefined") { data = null; }

                    // Identificativo creditore
                    this.OrgnlCdtrSchmeId = ko.observable(null);
                    // Tipo soggetto
                    this.OrgnlCdtrSchmeTp = ko.observable(null);
                    // Codice mandato originario
                    this.OrgnlMndtId = ko.observable(null);
                    // BIC del creditore
                    this.OrgnlCdtrAgt = ko.observable(null);
                    // Data di sottoscrizione del mandato
                    this.OrgnlDurationFromDate = ko.observable(null);
                    // Identificativo mandato
                    this.OrgnlMndtReqId = ko.observable(null);
                    // Sequenza incasso
                    this.OrgnlSeqTp = ko.observable(null);
                    // Tipo mandato
                    this.OrgnlLclInstrmPrtry = ko.observable(null);
                    // Domiciliazione mandato
                    this.OrgnlSvcLvlPrtry = ko.observable(null);

                    // Debitore
                    this.OrgnlDbtr = new App.Common.SoggettoBo(null);

                    if (data != null) {
                        this.OrgnlCdtrSchmeId(data.OrgnlCdtrSchmeId);
                        this.OrgnlCdtrSchmeTp(data.OrgnlCdtrSchmeTp);
                        this.OrgnlMndtId(data.OrgnlMndtId);
                        this.OrgnlCdtrAgt(data.OrgnlCdtrAgt);
                        this.OrgnlMndtReqId(data.OrgnlMndtReqId);
                        this.OrgnlSeqTp(data.OrgnlSeqTp);
                        this.OrgnlLclInstrmPrtry(data.OrgnlLclInstrmPrtry);
                        this.OrgnlSvcLvlPrtry(data.OrgnlSvcLvlPrtry);
                        if (data.OrgnlDurationFromDate !== null && data.OrgnlDurationFromDate !== "undefined") {
                            this.OrgnlDurationFromDate(new Date(moment(data.OrgnlDurationFromDate)));
                        }

                        this.OrgnlDbtr = new App.Common.SoggettoBo(data.OrgnlDbtr);
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));