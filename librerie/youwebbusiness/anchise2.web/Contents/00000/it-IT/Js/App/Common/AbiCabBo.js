var App;
(function (App) {
    (function (Common) {
        var AbiCabBo = (function () {
            function AbiCabBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Identifier         = new Common.IdentifierBo(null);
                this.DescrizioneBanca   = ko.observable(null);
                this.CodiceAbi          = ko.observable(null);
                this.CodiceCab          = ko.observable(null);
                this.DescrizioneFiliale = ko.observable(null);
                this.Indirizzo          = new App.Common.IndirizzoBo(null);
                this.Stato              = ko.observable(null);
                this.DataChiusura       = ko.observable(null);

                if (data !== null) {
                    this.Identifier = new Common.IdentifierBo(data.Identifier);
                    this.DescrizioneBanca(data.DescrizioneBanca);
                    this.CodiceAbi(data.CodiceAbi);
                    this.CodiceCab(data.CodiceCab);
                    this.DescrizioneFiliale(data.DescrizioneFiliale);
                    this.Indirizzo = new App.Common.IndirizzoBo(data.Indirizzo);
                    this.Stato(data.Stato);
                    if (data.DataChiusura !== null && data.DataChiusura !== "undefined") {
                        this.DataChiusura(new Date(moment(data.DataChiusura)));
                    }
                }
            }
            return AbiCabBo;
        })();
        Common.AbiCabBo = AbiCabBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));