var App;
(function (App) {
    (function (Common) {
        var BaseDistintaBo = (function () {
            function BaseDistintaBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Identifier         = new App.Common.IdentifierBo(null);
                this.NumeroOrdini       = ko.observable(null);
                this.NomeSupporto       = ko.observable(null);
                this.StatoDistinta      = ko.observable(null);
                this.Firmatari          = ko.observable(null);
                this.DataCreazione      = ko.observable(null);
                this.DataSpedizione     = ko.observable(null);
                this.DataDisponibilita  = ko.observable(null);
                this.DataConferma       = ko.observable(null);
                this.PotereFirma        = ko.observable(null);
                this.Importo            = ko.observable(null);
                this.Esito = ko.observable(null);
                this.CheckIban = ko.observable(false);
                this.Tipo = 0;
                var SOLA_LETTURA        = 1

                this.Intestatario       = new App.Common.OrdinanteBo(null);
                this.IsSolaLettura = function () { return (this.Tipo & SOLA_LETTURA) > 0 };
                this.ListaRapporti = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Identifier = new App.Common.IdentifierBo(data.Identifier);
                    self.NumeroOrdini(data.NumeroOrdini);
                    self.Importo(data.Importo);
                    self.StatoDistinta(data.StatoDistinta);
                    self.Firmatari(data.Firmatari);
                    self.Esito(data.Esito);
                    self.NomeSupporto(data.NomeSupporto);
                    self.PotereFirma(data.PotereFirma);
                    self.Tipo = data.Tipo;
                    self.CheckIban(data.CheckIban);
                    if (data.DataCreazione !== null && data.DataCreazione !== "undefined")
                        self.DataCreazione(new Date(moment(data.DataCreazione)));
                    if (data.DataSpedizione !== null && data.DataSpedizione !== "undefined")
                        self.DataSpedizione(new Date(moment(data.DataSpedizione)));
                    if (data.DataDisponibilita !== null && data.DataDisponibilita !== "undefined")
                        self.DataDisponibilita(new Date(moment(data.DataDisponibilita)));
                    if (data.DataConferma !== null && data.DataConferma)
                        self.DataConferma(new Date(moment(data.DataConferma)));
                    self.Intestatario = new App.Common.OrdinanteBo(data.Intestatario);
                    self.ListaRapporti(data.ListaRapporti);
                }
            }
            return BaseDistintaBo;
        })();
        Common.BaseDistintaBo = BaseDistintaBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
