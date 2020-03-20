var App;
(function (App) {
    (function (Core) {
        Core.StandardJsonResult = function (data) {
            if (typeof data === "undefined") {
                data = null;
            }
            this.HasError = true;
            this.HasWarning = false;
            this.Messages = null;
            this.Response = null;
            this.CssClass = 'success';
            if (data !== null) {
                this.HasError = data.HasError;
                this.HasWarning = data.HasWarning;
                this.Messages = data.Messages;
                this.Response = data.Response;

                if (data.HasWarning && !data.HasError) {
                    this.CssClass = 'alert';
                }
            };
        }

    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
