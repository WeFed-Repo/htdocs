var App;
(function (App) {
    (function (Esiti) {
        (function (BollettinoBanc) {
            var EsitoBollettinoBancBo = (function () {
                function EsitoBollettinoBancBo(data) {
                    if (typeof data === "undefined") { data = null; }
                    
                    this.Identifier = new App.Common.IdentifierBo(null);
                    this.RagSocIntestatario = ko.observable(null);
                    this.DataPagamento = ko.observable(null);
                    this.DataValuta = ko.observable(null);
                    this.ImportoBollettino = ko.observable(null);
                    this.Divisa = ko.observable(null);
                    this.Causale = ko.observable(null);
                    this.CodiceIdentificativo = ko.observable(null);
                    this.AbiEsattrice = ko.observable(null);
                    this.CabEsattrice = ko.observable(null);
                    this.DescrizioneEsattrice = ko.observable(null);
                    this.Abi = ko.observable(null);
                    this.Cab = ko.observable(null);
                    this.Conto = ko.observable(null);
                    this.CinIban = ko.observable(null);
                    this.CodicePaese = ko.observable(null);
                    this.CheckDigit = ko.observable(null);
                    this.ModalitaPagamento = ko.observable(null);
                    this.RiferimentoDebito = ko.observable(null);
                    this.CodificaBollettino = ko.observable(null);


                    var self = this;
                    if (data != null) {
                        self.Identifier = new App.Common.IdentifierBo(data.Identifier);
                        self.RagSocIntestatario(data.RagSocIntestatario);

                        if (data.DataPagamento !== null && data.DataPagamento !== "undefined" && data.DataPagamento !== undefined) {
                            this.DataPagamento(new Date(moment(data.DataPagamento)));
                        }
                        if (data.DataValuta !== null && data.DataValuta !== "undefined" && data.DataValuta !== undefined) {
                            this.DataValuta(new Date(moment(data.DataValuta)));
                        }

                        self.ImportoBollettino(data.ImportoBollettino);
                        self.Divisa(data.Divisa);
                        self.Causale(data.Causale);
                        self.CodiceIdentificativo(data.CodiceIdentificativo);
                        self.AbiEsattrice(data.AbiEsattrice);
                        self.CabEsattrice(data.CabEsattrice);
                        self.DescrizioneEsattrice(data.DescrizioneEsattrice);
                        self.Abi(data.Abi);
                        self.Cab(data.Cab);
                        self.Conto(data.Conto);
                        self.CinIban(data.CinIban);
                        self.CodicePaese(data.CodicePaese);
                        self.CheckDigit(data.CheckDigit);
                        self.ModalitaPagamento(data.ModalitaPagamento);
                        self.RiferimentoDebito(data.RiferimentoDebito);
                        self.CodificaBollettino(data.CodificaBollettino);
                    }
                }
                return EsitoBollettinoBancBo;
            })();
            BollettinoBanc.EsitoBollettinoBancBo = EsitoBollettinoBancBo;
        })(App.Esiti.BollettinoBanc || (App.Esiti.BollettinoBanc = {}))
    })(App.Esiti || (App.Esiti = {}));
    var Esiti = App.Esiti;
})(App || (App = {}));
