var logger = {
    /* definitions */
    _levelDebug: 5,
    _levelInfo: 4,
    _levelWarning: 3,
    _levelError: 2,
    _levelFatal: 1,
    _levelNoLogging: 0,
    /* definitions */
    _trace: function (level, message) {
        try {
            if (this._currentLevel >= level && window.console) {
                window.console.log(this._getCurrentTime() + " - " + message);
            }
        } catch (exception) {
        }
    },
    _getCurrentTime: function () {
        return moment().format('YYYY-MM-DD HH:mm:ss.SSS');
    },

    debug: function (message) { this._trace(this._levelDebug, message); },
    info: function (message) { this._trace(this._levelInfo, message); },
    warning: function (message) { this._trace(this._levelWarning, message); },
    error: function (message) { this._trace(this._levelError, message); },
    fatal: function (message) { this._trace(this._levelFatal, message); },

    /* current level */
    _currentLevel: 5
    /* current level */
};