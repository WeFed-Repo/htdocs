var App;
(function (App) {
    (function (Sct) {
        var FilterEsitoBeneficiario = (function () {
            function FilterEsitoBeneficiario(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.IdentifierEsitoBeneficiario = new App.Common.IdentifierBo(null);
                self.IdAziende          = ko.observableArray(null);
                self.ImportoTo          = ko.observable(null);
                self.ImportoFrom        = ko.observable(null);
                //self.DataCreazioneFrom  = ko.observable(null);
                //self.DataCreazioneTo = ko.observable(null);
                self.DataCaricamentoFrom = ko.observable(null);
                self.DataCaricamentoTo = ko.observable(null);
                self.DataEsecuzioneFrom = ko.observable(null);
                self.DataEsecuzioneTo = ko.observable(null);
                self.CodiceAbi          = ko.observable(null);
                self.RagioneSociale     = ko.observable(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    self.IdAziende(data.IdAzienda);
                    self.ImportoTo(data.ImportoTo);
                    self.ImportoFrom(data.ImportoFrom);
                    self.RagioneSociale(data.RagioneSociale);
                    //if (data.DataCreazioneFrom !== null && typeof data.DataCreazioneFrom !== "undefined")
                    //    self.DataCreazioneFrom(new Date(moment(data.DataCreazioneFrom)));
                    //if (data.DataCreazioneTo !== null && typeof data.DataCreazioneTo !== "undefined")
                    //    self.DataCreazioneTo(new Date(moment(data.DataCreazioneTo)));
                    if (data.DataCaricamentoFrom !== null && typeof data.DataCaricamentoFrom !== "undefined")
                        self.DataCaricamentoFrom(new Date(moment(data.DataCaricamentoFrom)));
                    if (data.DataCaricamentoTo !== null && typeof data.DataCaricamentoTo !== "undefined")
                        self.DataCaricamentoTo(new Date(moment(data.DataCaricamentoTo)));
                    if (data.DataEsecuzioneFrom !== null && typeof data.DataEsecuzioneFrom !== "undefined")
                        self.DataEsecuzioneFrom(new Date(moment(data.DataEsecuzioneFrom)));
                    if (data.DataEsecuzioneTo !== null && typeof data.DataEsecuzioneTo !== "undefined")
                        self.DataEsecuzioneTo(new Date(moment(data.DataEsecuzioneTo)));
                    self.CodiceAbi(data.CodiceAbi);
                    if (data.ClassiServizio != null)
                        ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                            self.ClassiServizio.push(item);
                        });
                    self.IdentifierEsitoBeneficiario = new App.Common.IdentifierBo(data);
                }
            }
            return FilterEsitoBeneficiario;
        })();
        Sct.FilterEsitoBeneficiario = FilterEsitoBeneficiario;
    })(App.Sct || (App.Sct = {}));
    var Sct = App.Sct;
})(App || (App = {}));