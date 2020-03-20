var App;
(function (App) {
    (function (Sdd) {
        var AmendmentInformationDetailsBo = (function () {
            function AmendmentInformationDetailsBo(data) {
                if (typeof data === "undefined") { data = null; }

                var self = this;

                self.OriginalMandateIdentification = ko.observable(null);
                self.OriginalFrequency = ko.observable(null);
                self.OriginalFinalCollectionDate = ko.observable(null);
                self.OriginalCreditor = new App.Common.SoggettoBo(null);
                self.OriginalDebtor = new App.Sdd.SoggettoSddBo(null);

                if (data != null) {
                    self.OriginalMandateIdentification(data.OriginalMandateIdentification);
                    self.OriginalFrequency(data.OriginalFrequency);

                    if (data.OriginalFinalCollectionDate !== null && data.OriginalFinalCollectionDate !== "undefined") {
                        self.OriginalFinalCollectionDate(new Date(moment(data.OriginalFinalCollectionDate)));
                    }

                    self.OriginalCreditor = new App.Common.SoggettoBo(data.OriginalCreditor);
                    self.OriginalDebtor = new App.Sdd.SoggettoSddBo(data.OriginalDebtor);
                }

            }
            return AmendmentInformationDetailsBo;
        })();
        Sdd.AmendmentInformationDetailsBo = AmendmentInformationDetailsBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));
