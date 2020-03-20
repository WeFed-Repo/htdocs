var App;
(function (App) {
    (function (Common) {
        var AziendaBo = (function () {
            function AziendaBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.CodiceAzienda = ko.observable(null);
                this.CodiceCuc = ko.observable(null);
                this.CodiceSia = ko.observable(null);
                this.Id = ko.observable(null);
                this.Identifier = ko.observable(null);
                this.RagioneSociale = ko.observable(null);
                this.StatoAzienda = ko.observable(null);
                this.CodiceFiscale = ko.observable(null);
                this.PartitaIva = ko.observable(null);
                this.CreditorId = ko.observable(null);

                var self = this;
                if (data !== null) {
                    this.CodiceAzienda(data.CodiceAzienda);
                    this.CodiceCuc(data.CodiceCuc);
                    this.CodiceSia(data.CodiceSia);
                    this.Id(data.Id);
                    this.Identifier(data.Identifier);
                    this.RagioneSociale(data.RagioneSociale);
                    this.StatoAzienda(data.StatoAzienda);
                    this.CodiceFiscale(data.CodiceFiscale);
                    this.PartitaIva(data.PartitaIva);
                    this.CreditorId(data.CreditorId);
                }
            }
            return AziendaBo;
        })();
        Common.AziendaBo = AziendaBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
