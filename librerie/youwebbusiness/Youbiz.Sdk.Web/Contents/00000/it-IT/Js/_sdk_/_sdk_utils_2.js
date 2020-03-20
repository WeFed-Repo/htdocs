var sdk;
var sdkParams;
(function (sdk, $, args) {
    // namespace Sdk.Utils
    sdk.utils_2 = (function (utils_2, $, args) {

        var deepUpdateJs = function (path, ajaxValue, js) {
            var pList = path.split('.');
            var len = pList.length;

            for (var i = 0; i < (len - 1) && js != undefined; i++) {
                var elem = pList[i];
                js = js[elem];
            }

            if (js != undefined) {
                js[pList[len - 1]] = filterJS(js[pList[len - 1]], ajaxValue);
            }
        };

        var filterJS = function (baseJs, currentJs) {
            var toRet = {}, isCurObj;
            for (var key in baseJs) {

                if (currentJs.hasOwnProperty(key)) {
                    isCurObj = currentJs[key] === Object(currentJs[key]);
                    if (typeof (baseJs[key]) === typeof (currentJs[key]) && currentJs[key] != null) {
                        //valori dello stesso tipo
                        if (isCurObj) {
                            toRet[key] = filterJS(baseJs[key], currentJs[key]);  //copia profonda valore nuovo
                        } else {
                            toRet[key] = currentJs[key];  //set valore nuovo
                        }
                    } else {
                        //valori di tipo diverso
                        if (baseJs[key] == undefined && !isCurObj) {
                            toRet[key] = currentJs[key];  //set valore nuovo
                        } else {
                            //console.log('property type mismatch: ' + key);
                            toRet[key] = baseJs[key]; //set valore attuale
                        }
                    }
                } else {
                    if (baseJs[key] === Object(baseJs[key])) {
                        toRet[key] = filterJS(baseJs[key], {});  //copia profonda valore attuale
                    } else {
                        //console.log('property not found: ' + key);
                        toRet[key] = baseJs[key];  //set valore attuale
                    }
                }
            }
            return toRet;
        };

        // export

        utils_2.deepUpdateJs = deepUpdateJs;
        utils_2.filterJS = filterJS;

        return utils_2;
    })(sdk.utils_2 || {}, $, args && args.utils_2 ? args.utils_2 : {});
    // end namespace sdk.utils_2
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);