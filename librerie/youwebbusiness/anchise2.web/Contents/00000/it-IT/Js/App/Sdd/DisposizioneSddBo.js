var App;
(function (App) {
    (function (Sdd) {
        var DisposizioneSddBo = (function () {
            function DisposizioneSddBo(data) {
                if (typeof data === "undefined") { data = null; }

                var self = this;

                self.IdentifierSottoDistinta = new App.Common.IdentifierBo(null);
                self.ChargeIban = ko.observable(null);
                // <CdtrSchmeId>/<Id>/<PrvtId>/<Othr>/<Id>
                self.CreditorIdentification = ko.observable(null);
                // Corrisponde al codice univoco della Ui e dell'sct
                self.EndToEndIdentification = ko.observable(null);
                // "Dati incasso">"Data scadenza" TODO: da verificare
                self.RequestedCollectionDate = ko.observable(null);
                // <LclInstrm>/<cd>
                self.LocalInstrument = ko.observable(null);
                self.SequenceType = ko.observable(null);
                // Finalità incasso
                self.CategoryPurpose = ko.observable(null);
                // Causale
                self.Purpose = ko.observable(null);
                self.PurposeDescription = ko.observable(null);
                // Descrizione riconciliazione
                self.RemittanceInformationUnstructured = ko.observable(null);
                self.Cvs = ko.observableArray(null);

                self.IsUltimateCreditorSottodistinta = ko.observable();

                self.UltimateCreditor = new App.Common.SoggettoBo(null);
                self.Debtor = new App.Common.SoggettoBo(null);
                self.UltimateDebtor = new App.Common.SoggettoBo(null);
                self.MandateRelatedInformation = new App.Sdd.MandateRelatedInformationBo(null);

                App.Common.BaseDisposizioneBo.call(this, data);

                if (data != null) {
                    self.IdentifierSottoDistinta = new App.Common.IdentifierBo(data.IdentifierSottoDistinta);
                    self.ChargeIban(data.ChargeIban);
                    self.CreditorIdentification(data.CreditorIdentification);
                    self.EndToEndIdentification(data.EndToEndIdentification);
                    self.IsUltimateCreditorSottodistinta(data.IsUltimateCreditorSottodistinta);

                    if (data.RequestedCollectionDate !== null && data.RequestedCollectionDate !== "undefined") {
                        self.RequestedCollectionDate(new Date(moment(data.RequestedCollectionDate)));
                    }

                    self.LocalInstrument(data.LocalInstrument);
                    self.SequenceType(data.SequenceType);
                    self.CategoryPurpose(data.CategoryPurpose);
                    self.Purpose(data.Purpose);
                    self.PurposeDescription(data.PurposeDescription);
                    self.RemittanceInformationUnstructured(data.RemittanceInformationUnstructured);

                    if (data.Cvs != null)
                        ko.utils.arrayForEach(data.Cvs, function (item) {
                            self.Cvs.push(new App.Common.CvsBo(item));
                        });

                    self.UltimateCreditor = new App.Common.SoggettoBo(data.UltimateCreditor);
                    self.Debtor = new App.Common.SoggettoBo(data.Debtor);
                    self.UltimateDebtor = new App.Common.SoggettoBo(data.UltimateDebtor);
                    self.MandateRelatedInformation = new App.Sdd.MandateRelatedInformationBo(data.MandateRelatedInformation);
                }
                
            }
            return DisposizioneSddBo;
        })();
        Sdd.DisposizioneSddBo = DisposizioneSddBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));
