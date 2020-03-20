var App;
(function (App) {
    (function (Common) {
        var FilterDisposizioni = (function () {
            function FilterDisposizioni(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;
                
                self.IdAzienda              = ko.observable(null);
                self.IdentifierDistinta     = new Common.IdentifierBo(null);
                self.CodiceAbi              = ko.observable(null);
                self.ImportoDa              = ko.observable(null);
                self.ImportoA               = ko.observable(null);
                self.ClassiServizio         = ko.observableArray(null);
                self.IdentifierRapporti     = ko.observableArray(null);
                self.IdentifierDisposizioni = ko.observableArray(null);
                self.Beneficiario           = ko.observable(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {

                    self.IdAzienda(data.IdAzienda);
                    self.IdentifierDistinta = new Common.IdentifierBo(data.IdentifierDistinta);
                    self.CodiceAbi(data.CodiceAbi);
                    self.ImportoDa(data.ImportoDa);
                    self.ImportoA(data.ImportoA);
                    self.Beneficiario(data.beneficiario);
                    if (data.ClassiServizio != null) {
                        ko.utils.arrayForEach(data.ClassiServizio, function (item) {
                            self.ClassiServizio.push(item);
                        });
                    }
                    if (data.IdentifierRapporti != null)
                        ko.utils.arrayForEach(data.IdentifierRapporti, function (item) {
                            self.IdentifierRapporti.push(new Common.IdentifierBo(item));
                        });
                    if (data.IdentifierDisposizioni != null)
                        ko.utils.arrayForEach(data.IdentifierDisposizioni, function (item) {
                            self.IdentifierDisposizioni.push(new Common.IdentifierBo(item));
                        });
                }
            }
            return FilterDisposizioni;
        })();
        Common.FilterDisposizioni = FilterDisposizioni;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));