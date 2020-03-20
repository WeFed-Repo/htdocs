var App;
(function (App) {
    (function (Common) {
        var FilterAnagrafiche = (function () {
            function FilterAnagrafiche(data) {
                if (typeof data === "undefined") { data = null; }

                this.TipologiaAnagrafica  = ko.observable(null);
                this.IdentifierPiazzatura = new Common.IdentifierBo(null);
                this.IdentifierAzienda = new Common.IdentifierBo(null);
                this.Denominazione        = ko.observable(null);
                this.DescrizioneBanca     = ko.observable(null);
                this.Iban                 = ko.observable(null);
                this.Codice               = ko.observable(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                var self = this;
                if (data !== null) {
                    self.TipologiaAnagrafica(data.TipologiaAnagrafica);
                    self.IdentifierPiazzatura = new Common.IdentifierBo(data.IdentifierPiazzatura);
                    self.IdentifierAzienda = new Common.IdentifierBo(data.IdentifierAzienda);
                    self.Denominazione(data.Denominazione);
                    self.DescrizioneBanca(data.DescrizioneBanca);
                    self.Iban(data.Iban);
                    self.Codice(data.Codice);
                }
            }
            return FilterAnagrafiche;
        })();
        Common.FilterAnagrafiche = FilterAnagrafiche;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
