var App;
(function (App) {
    (function (Core) {
        Core.SearchJsonResult = function (data) {
            if (typeof data === "undefined") {
                data = null;
            }
            this.HasError = true;
            this.HasWarning = false;
            this.Messages = null;
            this.TotaleElementi = 0;
            this.PagingFilter = null;
            this.Response = null;
            if (data !== null) {
                this.HasError = data.HasError;
                this.HasWarning = data.HasWarning;
                this.Messages = data.Messages;
                this.TotaleElementi = data.TotaleElementi;
                this.PagingFilter = data.PagingFilter;
                this.Response = data.Response;
            };
        }
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
