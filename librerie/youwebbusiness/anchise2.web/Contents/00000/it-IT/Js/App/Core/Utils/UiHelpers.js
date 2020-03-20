var App;
(function (App) {
    (function (Core) {
        var _cssCollapse = function (value) {
            return function () {
                return value() ? 'icon-replace icon-collapse active' : 'icon-replace icon-expand active';
            }
        }

        var _cleanSpalla = function (spallaName) {
            $(spallaName).html('');
        };

        Core.CssCollapse = _cssCollapse;
        Core.CleanSpalla = _cleanSpalla;
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
