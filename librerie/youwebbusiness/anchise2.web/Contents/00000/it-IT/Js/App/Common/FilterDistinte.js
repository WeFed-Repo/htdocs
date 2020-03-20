var App;
(function (App) {
    (function (Common) {
        var FilterDistinte = (function () {
            function FilterDistinte(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.IdAzienda          = ko.observable(null);
                self.ImportoTo          = ko.observable(null);
                self.ImportoFrom        = ko.observable(null);
                self.DataCreazioneFrom  = ko.observable(null);
                self.DataCreazioneTo    = ko.observable(null);
                self.CodiceAbi          = ko.observable(null);
                self.IdentifierDistinte = ko.observableArray(null);
                self.IdentifierRapporti = ko.observableArray(null);
                self.Stato              = ko.observable(null);
                self.ClassiServizio     = ko.observableArray(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    self.IdAzienda(data.IdAzienda);
                    self.ImportoTo(data.ImportoTo);
                    self.ImportoFrom(data.ImportoFrom);
                    if (data.DataCreazioneFrom !== null && typeof data.DataCreazioneFrom !== "undefined")
                        self.DataCreazioneFrom(new Date(moment(data.DataCreazioneFrom)));
                    if (data.DataCreazioneTo !== null && typeof data.DataCreazioneTo !== "undefined")
                        self.DataCreazioneTo(new Date(moment(data.DataCreazioneTo)));
                    self.CodiceAbi(data.CodiceAbi);
                    if (data.IdentifierDistinte != null)
                        ko.utils.arrayForEach(data.IdentifierDistinte, function (item) {
                            self.IdentifierDistinte.push(new Common.IdentifierBo(item));
                        });
                    if (data.IdentifierRapporti != null)
                        ko.utils.arrayForEach(data.IdentifierRapporti, function (item) {
                            self.IdentifierRapporti.push(new Common.IdentifierBo(item));
                        });
                    if (data.ClassiServizio != null)
                        ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                            self.ClassiServizio.push(item);
                        });
                    self.Stato(data.Stato);
                }
            }
            return FilterDistinte;
        })();
        Common.FilterDistinte = FilterDistinte;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));