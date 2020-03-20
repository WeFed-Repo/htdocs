var sdk;
var sdkParams;
// required: radio.js --> 
(function (sdk, $, args) {
    // namespace Sdk.Utils
    sdk.utils = (function (utils, $, args) {
        // namespace sdk.utils.pubsub
        utils.pubsub = (function (pubsub, $, args) {

            var params = {
                
            };

            params = $.extend(params, args);

            var _subscribe = function (eventName, delegate, priority) {
                radio(eventName).subscribe(delegate);
            };

            var _publish = function(eventName, arg0, arg1, arg2, arg3, arg4, arg5, arg6, arg7, arg8, arg9) {
                radio(eventName).broadcast(arg0, arg1, arg2, arg3, arg4, arg5, arg6, arg7, arg8, arg9);
            };

            var _unsubscribe = function (eventName, delegate) {
                radio(eventName).unsubscribe(delegate);
            };

            var _sendNoop = function(eventName) {
                radio(eventName).broadcast({ pubSubPlaceHolder: true });
            };

            var _isNoop = function(eventArg) {
                return eventArg && eventArg.pubSubPlaceHolder;
            };



            
            // publish and subscribe
            pubsub["subscribe"] = _subscribe;
            pubsub["publish"] = _publish;
            pubsub["unsubscribe"] = _unsubscribe;
            

            // event mode
            pubsub["register"] = _subscribe;
            pubsub["unregister"] = _unsubscribe;
            pubsub["send"] = _publish;
            pubsub["sendNoop"] = _sendNoop;
            pubsub["isNoop"] = _isNoop;
            
            
            return pubsub;
        })(utils.pubsub || {}, $, args && args.pubsub ? args.pubsub : {});
        // end namespace sdk.utils.pubsub
        return utils;
    })(sdk.utils || {}, $, args && args.utils ? args.utils : {});
    // end namespace sdk.utils
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);

