var App;
(function (App) {
    (function (Utility) {
        var FilterFlowTransaction = (function () {
            function FilterFlowTransaction(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.Identifier = ko.observableArray(null);
                self.IdCompany = ko.observable(null);
                self.CodAbi = ko.observable(null);
                self.DataFrom = ko.observable(null);
                self.DataTo = ko.observable(null);
                self.Product = ko.observable(null);

                self.ImportoFrom = ko.observable(null);
                self.ImportoTo = ko.observable(null);
                self.Type = ko.observable(null);
                self.NumTransaction = ko.observable(null);


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
                    self.Product = ko.observable(data.Product);

                    self.ImportoFrom(data.ImportoFrom);
                    self.ImportoTo(data.ImportoTo);
                    self.Type(data.Type);
                    self.NumTransaction(data.NumTransaction);
                }
            }
            return FilterFlowTransaction;
        })();
        Utility.FilterFlowTransaction = FilterFlowTransaction;
    })(App.Utility || (App.Utility = {}));
    var Utility = App.Utility;
})(App || (App = {}));