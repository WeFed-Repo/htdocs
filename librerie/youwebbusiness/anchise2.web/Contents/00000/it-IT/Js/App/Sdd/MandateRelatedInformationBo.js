var App;
(function (App) {
    (function (Sdd) {
        var MandateRelatedInformationBo = (function () {
            function MandateRelatedInformationBo(data) {
                if (typeof data === "undefined") { data = null; }

                var self = this;

                self.MandateIdentification = ko.observable(null);
                self.DateOfSignature = ko.observable(null);
                self.ElectronicSignature = ko.observable(null);
                self.Frequency = ko.observable(null);
                self.FirstCollectionDate = ko.observable(null);
                self.FinalCollectionDate = ko.observable(null);
                self.AmendmentIndicator = ko.observable(null);
                
                self.AmendmentInformationDetails = new App.Sdd.AmendmentInformationDetailsBo(null);

                if (data != null) {
                    self.MandateIdentification(data.MandateIdentification);

                    if (data.DateOfSignature !== null && data.DateOfSignature !== "undefined") {
                        self.DateOfSignature(new Date(moment(data.DateOfSignature)));
                    }

                    self.ElectronicSignature(data.ElectronicSignature);
                    self.Frequency(data.Frequency);

                    if (data.FirstCollectionDate !== null && data.FirstCollectionDate !== "undefined") {
                        self.FirstCollectionDate(new Date(moment(data.FirstCollectionDate)));
                    }

                    if (data.FinalCollectionDate !== null && data.FinalCollectionDate !== "undefined") {
                        self.FinalCollectionDate(new Date(moment(data.FinalCollectionDate)));
                    }

                    self.AmendmentIndicator(data.AmendmentIndicator);

                    self.AmendmentInformationDetails = new App.Sdd.AmendmentInformationDetailsBo(data.AmendmentInformationDetails);
                }

            }
            return MandateRelatedInformationBo;
        })();
        Sdd.MandateRelatedInformationBo = MandateRelatedInformationBo;
    })(App.Sdd || (App.Sdd = {}));
    var Sdd = App.Sdd;
})(App || (App = {}));
