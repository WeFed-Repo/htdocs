var App;
(function (App) {
    (function (Common) {
        var RapportoBo = (function () {
            function RapportoBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.CodiceAbi                 = ko.observable(null);
                this.CodiceCab                 = ko.observable(null);
                this.CodiceDivisa              = ko.observable(null);
                this.CodiceFiliale             = ko.observable(null);
                this.CodiceIban                = ko.observable(null);
                this.Descrizione               = ko.observable(null);
                this.DescrizionePersonalizzata = ko.observable(null);
                this.Id                        = ko.observable(null);
                this.IdAzienda                 = ko.observable(null);
                this.Identifier                = ko.observable(null);
                this.NumeroRapporto            = ko.observable(null);
                this.DescrizioneBanca = ko.observable(null);
                this.DescrizioneIstituto = ko.observable(null);
                this.DescrizioneSportello = ko.observable(null);
                this.Bic= ko.observable(null);
                this.UltimoAggiornamento = ko.observable(null);
                this.Saldo = ko.observable(null);
                this.DataSaldo = ko.observable(null);
                this.Stato = ko.observable(null);
                this.Status = ko.observable(null);

                if (data != null) {
                    this.CodiceAbi(data.CodiceAbi);
                    this.CodiceCab(data.CodiceCab);
                    this.CodiceDivisa(data.CodiceDivisa);
                    this.CodiceFiliale(data.CodiceFiliale);
                    this.CodiceIban(data.CodiceIban);
                    this.Descrizione(data.Descrizione);
                    this.DescrizionePersonalizzata(data.DescrizionePersonalizzata);
                    this.Bic(data.Bic);
                    this.Id(data.Id);
                    this.IdAzienda(data.IdAzienda);
                    this.Identifier(data.Identifier);
                    this.NumeroRapporto(data.NumeroRapporto);
                    this.DescrizioneBanca(data.DescrizioneBanca);
                    this.DescrizioneIstituto(data.DescrizioneIstituto);
                    this.DescrizioneSportello(data.DescrizioneSportello);
                    if (data.UltimoAggiornamento !== null && data.UltimoAggiornamento !== "undefined") {
                        this.UltimoAggiornamento(new Date(moment(data.UltimoAggiornamento)));
                    }
                    this.Saldo(data.Saldo);
                    if (data.DataSaldo !== null && data.DataSaldo !== "undefined") {
                        this.DataSaldo(new Date(moment(data.DataSaldo)));
                    }
                    this.Stato(data.Stato);
                    this.Status(data.Status);
                }
            }
            return RapportoBo;
        })();
        Common.RapportoBo = RapportoBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));