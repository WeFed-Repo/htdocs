var App;
(function (App) {
    (function (Utility) {
        var ExtractedFlowSummary = (function () {
            function ExtractedFlowSummary(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.DistTotali = ko.observable(null);
                self.Azienda = ko.observable(null);
                self.DistAzienda = ko.observable(null);
                self.ImportoAzienda = ko.observable(null);
                
                if (data !== null) {
                    self.DistTotali(data.DistTotali);
                    self.Azienda(data.Azienda);
                    self.DistAzienda(data.DistAzienda);
                    self.ImportoAzienda(data.ImportoAzienda);
                }
            }
            return ExtractedFlowSummary;
        })();
        Utility.ExtractedFlowSummary = ExtractedFlowSummary;
    })(App.Utility || (App.Utility = {}));
    var Utility = App.Utility;
})(App || (App = {}));