var sdk;
var sdkParams;

(function (sdk, $, args) {
    // namespace sdk.core
    sdk.core = (function (core, $, args) {
        // namespace sdk.core
        return core;
    })(sdk.core || {}, $, args && args.core ? args.core : {});
    // end namespace sdk.core
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
