var App;
(function (App) {
    (function (BollettinoBancario) {
        var DisposizioneBollettinoBancBo = (function () {
            function DisposizioneBollettinoBancBo(data) {
                if (typeof data === "undefined") { data = null; }
                App.Common.BaseDisposizioneBo.call(this, data);

                this.DataScadenza = ko.observable(null);
                this.Causale = ko.observable(null);

                this.CinImporto = ko.observable(null);
                this.SiaCreditore = ko.observable(null);
                this.RiferimentoCreditore = ko.observable(null);
                this.CinIntermedio = ko.observable(null);
                this.IbanCreditore = ko.observable(null);
                this.CodiceEsenzione = ko.observable(null);
                this.CinComplessivo = ko.observable(null);
                this.DescrizioneDebitore = ko.observable(null);
                this.DescrizioneOrdinante = ko.observable(null);
                this.CodificaBollettino = ko.observable(null);

                if (data != null) {
                    if (data.DataScadenza !== null && data.DataScadenza !== "undefined") {
                        this.DataScadenza(new Date(moment(data.DataScadenza)));
                    }
                    this.Causale(data.Causale);
                    this.CinImporto(data.CinImporto);
                    this.SiaCreditore(data.SiaCreditore);
                    this.RiferimentoCreditore(data.RiferimentoCreditore);
                    this.CinIntermedio(data.CinIntermedio);
                    this.IbanCreditore(data.IbanCreditore);
                    this.CodiceEsenzione(data.CodiceEsenzione);
                    this.CinComplessivo(data.CinComplessivo);
                    this.DescrizioneDebitore(data.DescrizioneDebitore);
                    this.DescrizioneOrdinante(data.DescrizioneOrdinante);
                    this.CodificaBollettino(data.CodificaBollettino);
                }

            }
            return DisposizioneBollettinoBancBo;
        })(); 
        BollettinoBancario.DisposizioneBollettinoBancBo = DisposizioneBollettinoBancBo;
    })(App.BollettinoBancario || (App.BollettinoBancario = {}));
    var BollettinoBancario = App.BollettinoBancario;
})(App || (App = {}));
