var App;
(function (App) {
    (function (Sdd) {
        var SottoDistintaSddBo = (function () {
            function SottoDistintaSddBo(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;
                self.Identifier = new App.Common.IdentifierBo(null);
                self.IdentifierDistinta = new App.Common.IdentifierBo(null);

                self.InstructionIdentification = ko.observable(null);
                self.LocalInstrument = ko.observable(null);
                self.SequenceType = ko.observable(null);
                self.BatchBooking = ko.observable(null);
                self.ServiceLevel = ko.observable(null);
                self.ChargeIban = ko.observable(null);
                self.Importo = ko.observable(null);
                self.NumeroOrdini = ko.observable(null);
                self.CreditorIdentification = ko.observable(null);
                self.Disposizioni = ko.observableArray(null);
                // Data Scadenza
                self.RequestedCollectionDate = ko.observable(null);

                self.Creditor = new App.Common.OrdinanteBo(null);
                self.UltimateCreditor = new App.Common.SoggettoBo(null);
                self.IdDivisa = ko.observable("EUR");
                self.CheckIban = ko.observable(null);
                this.Tipo = 0;

                if (data != null) {

                    self.Identifier = new App.Common.IdentifierBo(data.Identifier);
                    self.IdentifierDistinta = new App.Common.IdentifierBo(data.IdentifierDistinta);

                    self.InstructionIdentification(data.InstructionIdentification);
                    self.LocalInstrument(data.LocalInstrument);
                    self.SequenceType(data.SequenceType);
                    self.BatchBooking(data.BatchBooking);
                    self.ServiceLevel(data.ServiceLevel);
                    self.ChargeIban(data.ChargeIban);
                    self.Importo(data.Importo);
                    self.NumeroOrdini(data.NumeroOrdini);
                    self.CreditorIdentification(data.CreditorIdentification);

                    self.Creditor = new App.Common.OrdinanteBo(data.Creditor);
                    self.UltimateCreditor = new App.Common.SoggettoBo(data.UltimateCreditor);
                    self.CheckIban(data.CheckIban);

                    if (data.RequestedCollectionDate !== null && data.RequestedCollectionDate !== "undefined") {
                        self.RequestedCollectionDate(new Date(moment(data.RequestedCollectionDate)));
                    }

                    if (data.Disposizioni != null) {
                        ko.utils.arrayForEach(data.Disposizioni, function (item) {
                            self.Disposizioni.push(new App.Sdd.DisposizioneSddBo(item));
                        });
                    }
                    self.Tipo = data.Tipo;
                }
                
            }
            return SottoDistintaSddBo;
        })();
        Sdd.SottoDistintaSddBo = SottoDistintaSddBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));
