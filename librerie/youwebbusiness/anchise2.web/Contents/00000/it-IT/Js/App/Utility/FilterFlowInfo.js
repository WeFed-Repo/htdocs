var App;
(function (App) {
    (function (Utility) {
        var FilterFlowInfo = (function () {
            function FilterFlowInfo(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.Identifier = ko.observableArray(null);
                self.IdCompany = ko.observable(null);
                self.CodAbi = ko.observable(null);
                self.DataFrom = ko.observable(null);
                self.DataTo = ko.observable(null);
                self.TagProductCbi = ko.observable(null);

                self.SingleFileForCompany = ko.observable(false);


                if (data !== null) {
                    if (data.Identifier != null)
                        ko.utils.arrayForEach(data.Identifier, function (item) {
                            self.Identifier.push(new Common.IdentifierBo(item));
                        });
                    self.IdCompany(data.IdCompany);
                    self.CodAbi(data.CodAbi);
                    if (data.DataFrom !== null && data.DataFrom !== "undefined")
                        self.DataFrom(new Date(moment(data.DataFrom)));
                    if (data.DataTo !== null && data.DataTo !== "undefined")
                        self.DataTo(new Date(moment(data.DataTo)));
                    self.TagProductCbi = ko.observable(data.TagProductCbi);

                    self.SingleFileForCompany(data.SingleFileForCompany);
                }
            }
            return FilterFlowInfo;
        })();
        Utility.FilterFlowInfo = FilterFlowInfo;
    })(App.Utility || (App.Utility = {}));
    var Utility = App.Utility;
})(App || (App = {}));