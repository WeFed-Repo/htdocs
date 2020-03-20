var App;
(function (App) {
    (function (Common) {
        var BaseDisposizioneBo = (function () {
            function BaseDisposizioneBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Identifier = new App.Common.IdentifierBo(null);
                this.IdentifierDistinta = new App.Common.IdentifierBo(null);
                this.Ordinante = new App.Common.OrdinanteBo(null);
                this.Importo = ko.observable(null);
                this.Divisa = ko.observable(null);

                var self = this;

                if (data !== null) {
                    self.Identifier = new App.Common.IdentifierBo(data.Identifier);
                    self.IdentifierDistinta = new App.Common.IdentifierBo(data.IdentifierDistinta);
                    self.Ordinante = new App.Common.OrdinanteBo(data.Ordinante);
                    self.Importo(data.Importo);
                    self.Divisa(data.Divisa);
                }
            }
            return BaseDisposizioneBo;
        })();
        Common.BaseDisposizioneBo = BaseDisposizioneBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
