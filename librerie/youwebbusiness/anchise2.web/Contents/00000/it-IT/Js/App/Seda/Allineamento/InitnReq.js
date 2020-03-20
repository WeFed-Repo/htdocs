var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.InitnReq = (function () {
                return function(data) {
                    if (typeof data === "undefined") { data = null; }

                    // Identificativo creditore
                    this.CdtrSchmeId = ko.observable(null);
                    // Tipo Soggetto
                    this.CdtrSchmeTp = ko.observable(null);
                    // BIC del creditore
                    this.CdtrAgt = ko.observable(null);
                    // Codice mandato
                    this.MndtId = ko.observable(null);
                    // Identificativo mandato
                    this.MndtReqId = ko.observable(null);
                    // Tipo mandato
                    this.LclInstrmPrtry = ko.observable(null);
                    // Sequenza incasso
                    this.SeqTp = ko.observable(null);
                    // Data sottoscrizione mandato
                    this.DurationFromDate = ko.observable(null);
                    // Id documento
                    this.RfrDocNb = ko.observable(null);
                    // Cod. fisc. sottoscrittore
                    this.CFSottoscrittore = ko.observable(null);


                    // Creditore effettivo
                    this.UltmtCdtr = new App.Seda.Allineamento.UltmtSubjectBo(null);
                    // Debitore
                    this.Dbtr = new App.Common.SoggettoBo(null);
                    // Debitore effettivo
                    this.UltmtDbtr = new App.Seda.Allineamento.UltmtSubjectBo(null);

                    if (data != null) {
                        this.CdtrSchmeId(data.CdtrSchmeId);
                        this.CdtrSchmeTp(data.CdtrSchmeTp);
                        this.CFSottoscrittore(data.CFSottoscrittore);
                        this.CdtrAgt(data.CdtrAgt);
                        this.MndtId(data.MndtId);
                        this.MndtReqId(data.MndtReqId);
                        this.LclInstrmPrtry(data.LclInstrmPrtry);
                        this.SeqTp(data.SeqTp);
                        if (data.DurationFromDate !== null && data.DurationFromDate !== "undefined") {
                            this.DurationFromDate(new Date(moment(data.DurationFromDate)));
                        }
                        this.RfrDocNb(data.RfrDocNb);

                        this.UltmtCdtr = new App.Seda.Allineamento.UltmtSubjectBo(data.UltmtCdtr);
                        this.Dbtr = new App.Common.SoggettoBo(data.Dbtr);
                        this.UltmtDbtr = new App.Seda.Allineamento.UltmtSubjectBo(data.UltmtDbtr);
                    }
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));