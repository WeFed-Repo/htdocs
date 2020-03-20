var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.AccptncRpt = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }

                    // Identificativo creditore
                    this.OrgnlCdtrSchmeId = ko.observable(null);
                    // Tipo soggetto
                    this.OrgnlCdtrSchmeTp = ko.observable(null);
                    // BIC del creditore
                    this.OrgnlCdtrAgt = ko.observable(null);
                    // Cod. fisc. sottoscrittore
                    this.OrgnlCFSottoscrittore = ko.observable(null);
                    // Identificativo richiesta originaria
                    this.OrgnlMsgId = ko.observable(null);
                    // Tipo richiesta originaria
                    this.OrgnlMsgNmId = ko.observable(null);
                    // Codice mandato originario
                    this.OrgnlMndtId = ko.observable(null);
                    // Domiciliazione mandato
                    this.OrgnlSvcLvlPrtry = ko.observable(null);
                    // Identificativo mandato
                    this.OrgnlMndtReqId = ko.observable(null);
                    // Tipo mandato
                    this.OrgnlLclInstrmPrtry = ko.observable(null);
                    // Esito richiesta
                    this.Accptd = ko.observable(null);
                    // Codice rifiuto
                    this.RjctRsnCd = ko.observable(null);
                    // Motivazioni aggiuntive
                    this.AddtlRjctRsnInf = ko.observable(null);

                    // Debitore
                    this.OrgnlDbtr = new App.Common.SoggettoBo(null);

                    if (data != null) {
                        this.OrgnlCdtrSchmeId(data.OrgnlCdtrSchmeId);
                        this.OrgnlCdtrSchmeTp(data.OrgnlCdtrSchmeTp);
                        this.OrgnlCdtrAgt(data.OrgnlCdtrAgt);
                        this.OrgnlCFSottoscrittore(data.OrgnlCFSottoscrittore);
                        this.OrgnlMsgId(data.OrgnlMsgId);
                        this.OrgnlMsgNmId(data.OrgnlMsgNmId);
                        this.OrgnlMndtId(data.OrgnlMndtId);
                        this.OrgnlSvcLvlPrtry(data.OrgnlSvcLvlPrtry);
                        this.OrgnlMndtReqId(data.OrgnlMndtReqId);
                        this.OrgnlLclInstrmPrtry(data.OrgnlLclInstrmPrtry);
                        this.Accptd(data.Accptd);
                        this.RjctRsnCd(data.RjctRsnCd);
                        this.AddtlRjctRsnInf(data.AddtlRjctRsnInf);

                        this.OrgnlDbtr = new App.Common.SoggettoBo(data.OrgnlDbtr);
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));