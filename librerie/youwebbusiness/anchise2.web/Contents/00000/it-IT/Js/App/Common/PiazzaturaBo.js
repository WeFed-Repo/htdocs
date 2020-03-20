var App;
(function (App) {
    (function (Common) {
        Common.PiazzaturaBo = function PiazzaturaBo(data) { 
            if (typeof data === "undefined") { data = null; }
            this.Identifier = new Common.IdentifierBo(null);
            this.Rapporto = new Common.RapportoBo(null);
            this.Azienda = new Common.AziendaBo(null);
            this.CbiIdentifier = new Common.IdentifierBo(null);
            this.OnlineIdentifier = new Common.IdentifierBo(null);
            this.Saldo = new Common.SaldoBo(null);
            if (data !== null) {
                this.Identifier = new Common.IdentifierBo(data.Identifier);
                this.Rapporto = new Common.RapportoBo(data.Rapporto);
                this.Azienda = new Common.AziendaBo(data.Azienda);
                this.CbiIdentifier = new Common.IdentifierBo(data.CbiIdentifier);
                this.OnlineIdentifier = new Common.IdentifierBo(data.OnlineIdentifier);
                this.Saldo = new Common.SaldoBo(data.Saldo);
            }
        };
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
