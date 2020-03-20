var App;
(function (App) {
    (function (Core) {
        var ValidationMessage = (function () {
            function ValidationMessage(data) {
                if (typeof data === "undefined") { data = null; }
                var self = this;

                self.ErrorMessage = ko.observable(null);
                self.ErrorMessageRes = ko.observable(null);
                self.PropertyName = ko.observable(null);
                if (data != null) {
                    self.ErrorMessage(data.ErrorMessage);
                    self.ErrorMessageRes(data.ErrorMessageRes);
                    self.PropertyName(data.PropertyName);
                }
            }
            return ValidationMessage;
        })();
        Core.ValidationMessage = ValidationMessage;
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));