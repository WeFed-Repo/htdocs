var sdkParams = {
    utils: {
        log: {
            debugMessageEnabled: true
        }
    }
};
var customParam;
// accept customization
if (customParam !== undefined) {
    sdkParams = $.extend(sdkParams, customParam);
}
