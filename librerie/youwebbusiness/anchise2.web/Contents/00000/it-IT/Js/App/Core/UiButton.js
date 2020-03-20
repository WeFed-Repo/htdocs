var App;
(function (App) {
    (function (Core) {
        Core.UiButton = function (data) {
            if (typeof data === "undefined") {
                data = null;
            }
            
            this.Label = null;
            this.Callback = $.noop;
            if (data !== null) {
                this.Label = data.Label || '';
                this.Callback = data.Callback || $.noop;
            };
        }
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
