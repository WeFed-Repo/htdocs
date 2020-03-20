var App;
(function (App) {
    (function (Sdd) {
        var FilterSottoDistinte = (function () {
            function FilterSottoDistinte(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.Destinatario = ko.observable(null);
                self.RequestedCollectionDate = ko.observable(null);
                self.IdentifierDistinta = ko.observable(null);
                self.IdentifierRapporti = ko.observableArray(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    self.Destinatario(data.Destinatario);
                    if (data.RequestedCollectionDate !== null && typeof data.RequestedCollectionDate !== "undefined")
                        self.RequestedCollectionDate(new Date(moment(data.RequestedCollectionDate)));
                    self.IdentifierDistinta(new App.Common.IdentifierBo(data.IdentifierDistinta));
                    if (data.IdentifierRapporti != null)
                        ko.utils.arrayForEach(data.IdentifierRapporti, function (item) {
                            self.IdentifierRapporti.push(new App.Common.IdentifierBo(item));
                        });
                }
            }
            return FilterSottoDistinte;
        })();
        Sdd.FilterSottoDistinte = FilterSottoDistinte;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));