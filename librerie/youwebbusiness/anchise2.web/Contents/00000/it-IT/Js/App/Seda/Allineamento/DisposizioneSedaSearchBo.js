var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.DisposizioneSedaSearchBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }
                    App.Common.BaseDisposizioneBo.call(this, data);

                    // Ragione sociale Creditore Effettivo
                    this.UltmtCdtrNm = ko.observable(null);
                    // Ragione sociale Debitore
                    this.DbtrNm = ko.observable(null);
                    // IBAN Debitore
                    this.DbtrAcct = ko.observable(null);
                    // Check digit sull'Iban del debitore
                    this.IbanCheckDigit = ko.observable(null);
                    // Bic Debitore
                    this.DbtrAgt = ko.observable(null);
                    // Ragione sociale Debitore Effettivo
                    this.UltmtDbtrNm = ko.observable(null);
                    // Cod. fisc. sottoscrittore
                    this.CFSottoscrittore = ko.observable(null);
                    // Codice mandato
                    this.MndtId = ko.observable(null);
                    // Tipo di blocco logico della disposizione di allinemento
                    this.TipoBloccoLogico = ko.observable(null);
                    // Data di sottoscrizione del mandato
                    this.DurationFromDate = ko.observable(null);
                    // Tipo mandato
                    this.LclInstrmPrtry = ko.observable(null);
                    // Sequenza incasso
                    this.SeqTp = ko.observable(null);
                    // Modifica richiesta da
                    this.RsnCd = ko.observable(null);
                    // Domiciliazione mandato
                    this.SvcLvlPrtry = ko.observable(null);
                    // Codice mandato originario
                    this.OrgnlMndtId = ko.observable(null);
                    // Creditore originario
                    this.OrgnlCdtrNm = ko.observable(null);
                    // Identificativo creditore originario
                    this.OrgnlCdtrSchmeId = ko.observable(null);
                    // MsgID richiesta originaria
                    this.OrgnlMsgId = ko.observable(null);
                    // Tipo richiesta originaria
                    this.OrgnlMsgNmId = ko.observable(null);
                    // Esito richiesta
                    this.Accptd = ko.observable(null);
                    // Codice rifiuto
                    this.RjctRsnCd = ko.observable(null);
                    // Motivazioni aggiuntive
                    this.AddtlRjctRsnInf = ko.observable(null);
                    // Identificativo creditore
                    this.CdtrSchmeId = ko.observable(null);
                    // Tipo Soggetto
                    this.CdtrSchmeTp = ko.observable(null);
                    // BIC del creditore
                    this.CdtrAgt = ko.observable(null);


                    if (data != null) {
                        this.UltmtCdtrNm(data.UltmtCdtrNm);
                        this.DbtrNm(data.DbtrNm);
                        this.DbtrAcct(data.DbtrAcct);
                        this.IbanCheckDigit(data.IbanCheckDigit);
                        this.DbtrAgt(data.DbtrAgt);
                        this.UltmtDbtrNm(data.UltmtDbtrNm);
                        this.CFSottoscrittore(data.CFSottoscrittore);
                        this.MndtId(data.MndtId);
                        this.TipoBloccoLogico(data.TipoBloccoLogico);
                        if (data.DurationFromDate !== null && data.DurationFromDate !== "undefined") {
                            this.DurationFromDate(new Date(moment(data.DurationFromDate)));
                        }
                        this.LclInstrmPrtry(data.LclInstrmPrtry);
                        this.SeqTp(data.SeqTp);
                        this.RsnCd(data.RsnCd);
                        this.SvcLvlPrtry(data.SvcLvlPrtry);
                        this.OrgnlMndtId(data.OrgnlMndtId);
                        this.OrgnlCdtrNm(data.OrgnlCdtrNm);
                        this.OrgnlCdtrSchmeId(data.OrgnlCdtrSchmeId);
                        this.OrgnlMsgId(data.OrgnlMsgId);
                        this.OrgnlMsgNmId(data.OrgnlMsgNmId);
                        this.Accptd(data.Accptd);
                        this.RjctRsnCd(data.RjctRsnCd);
                        this.AddtlRjctRsnInf(data.AddtlRjctRsnInf);
                        this.CdtrSchmeId(data.CdtrSchmeId);
                        this.CdtrSchmeTp(data.CdtrSchmeTp);
                        this.CdtrAgt(data.CdtrAgt);
                    }
                    
                }
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));