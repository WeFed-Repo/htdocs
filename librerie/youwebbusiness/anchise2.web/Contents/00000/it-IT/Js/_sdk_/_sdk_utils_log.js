/*
    sdk.utils.log.debugMessage(message)
    sdk.utils.log.errorMessage(message)
    sdk.utils.log.errorException(message, exception)
*/

var sdk;
var sdkParams;

// required: moment.js --> 2.1.0
(function (sdk, $, args) {
    // namespace Sdk.Utils
    sdk.utils = (function (utils, $, args) {
        // namespace sdk.utils.log
        utils.log = (function (log, $, args) {

            var params = {
                debugMessageEnabled: false,
                errorMessageEnabled: true,
                remoteLoggingEnabled: false
            };

            params = $.extend(params, args);

            // add logger implementation
            
            var getExceptionDetail = function (exception) {
                var toRet = "Exception";
                if (exception) {
                    toRet += "(";
                    if (exception.message)
                        toRet += " Message: " + exception.message;
                    if (exception.description)
                        toRet += " Description: " + exception.description;
                    if (exception.stack)
                        toRet += " Stack: " + exception.stack;
                    toRet += ")";
                } else {
                    toRet += "(null)";
                }
                return toRet;
            };

            var getCurrentTime = function () {
                if (moment) {
                    // versione 2.1.0 di moment
                    return moment().toISOString();
                } else {
                    return "missing moment ...";
                }
            }

            var _remoteLogging = function (logMode, message, exception) {
                
            }

            

            var _debugMessage = function (message) {
                if (params.debugMessageEnabled && window.console) {
                    window.console.log(getCurrentTime() + " - DBG - " + message);
                }
                if (params.remoteLoggingEnabled) {
                    _remoteLogging("debug", message);
                }
            };

            var _errorMessage = function (message) {
                if (params.errorMessageEnabled && window.console) {
                    window.console.log(getCurrentTime() + " - ERR - " + message);
                }
                if (params.remoteLoggingEnabled) {
                    _remoteLogging("error", message);
                }
            };

            var _errorException = function (message, exception) {
                if (params.errorMessageEnabled && window.console) {
                    window.console.log(getCurrentTime() +
                        " - ERR - " +
                        message +
                        " - " +
                        getExceptionDetail(exception));
                }
                if (params.remoteLoggingEnabled) {
                    _remoteLogging("exception", message, exception);
                }
            };

            // export
            log["debugMessage"] = _debugMessage;
            log["errorMessage"] = _errorMessage;
            log["errorException"] =_errorException;
            // logger done
            return log;
        })(utils.log || {}, $, args.log || {});
        // end namespace sdk.utils.log
        return utils;
    })(sdk.utils || {}, $, args.utils || {});
    // end namespace sdk.utils
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
