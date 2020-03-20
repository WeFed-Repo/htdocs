var App;
(function (App) {
    (function (Core) {
        Core.UiComponent = function (data) {
            if (typeof data === "undefined") { data = null; }

            this.Name   = null;
            this.Params = null;

            if (data !== null) {
                this.Name   = data.Name;
                this.Params = data.Params;
            };
        }
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
