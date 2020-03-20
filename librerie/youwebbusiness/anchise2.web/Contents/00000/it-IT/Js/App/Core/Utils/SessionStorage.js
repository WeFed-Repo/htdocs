var App;
(function (App) {
    (function (Core) {
        var _constantKeys = {
            DISTINTE: 'DISTINTE',
            DISPOSIZIONI: 'DISPOSIZIONI',
            FILTRO_DISTINTE: 'FILTRO_DISTINTE',
            FILTRO_DISPOSIZIONI: 'FILTRO_DISPOSIZIONI',
            ESITI: 'ESITI',
            FILTRO_ESITI: 'FILTRO_ESITI',
            CARTINFO: 'CARTINFO'
        };
        var _setSessionStorage = function (key, value) {
            if (typeof (key) !== "string") {
                throw "key must be a string";
            }

            sessionStorage.setItem(key, ko.toJSON(value));
        };
        var _getSessionStorage = function (key) {
            if (typeof (key) !== "string") {
                throw "key must be a string";
            }

            return JSON.parse(sessionStorage.getItem(key));
        };

        Core.GetSessionStorage = _getSessionStorage;
        Core.SetSessionStorage = _setSessionStorage;
        Core.SetDistinteSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.DISTINTE, value);
        }
        Core.GetDistinteSessionStorage = function () {
            return _getSessionStorage(_constantKeys.DISTINTE);
        }
        Core.SetDisposizioniSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.DISPOSIZIONI, value);
        }
        Core.GetDisposizioniSessionStorage = function () {
            return _getSessionStorage(_constantKeys.DISPOSIZIONI);
        }
        Core.SetEsitiSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.ESITI, value);
        }
        Core.GetEsitiSessionStorage = function () {
            return _getSessionStorage(_constantKeys.ESITI);
        }
        Core.SetFiltroDistinteSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.FILTRO_DISTINTE, value);
        }
        Core.GetFiltroDistinteSessionStorage = function () {
            return _getSessionStorage(_constantKeys.FILTRO_DISTINTE);
        }
        Core.SetFiltroDisposizioniSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.FILTRO_DISPOSIZIONI, value);
        }
        Core.GetFiltroDisposizioniSessionStorage = function () {
            return _getSessionStorage(_constantKeys.FILTRO_DISPOSIZIONI);
        }
        Core.SetFiltroEsitiSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.FILTRO_ESITI, value);
        }
        Core.GetFiltroEsitiSessionStorage = function (value) {
            return _getSessionStorage(_constantKeys.FILTRO_ESITI);
        }
        Core.SetCartInfoSessionStorage = function (value) {
            _setSessionStorage(_constantKeys.CARTINFO, value);
        }
        Core.GetCartInfoSessionStorage = function (value) {
            return _getSessionStorage(_constantKeys.CARTINFO);
        }
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));
