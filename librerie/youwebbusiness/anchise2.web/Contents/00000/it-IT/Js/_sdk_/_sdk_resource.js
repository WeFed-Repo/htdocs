/*
    RESOURCE DOC
    
    . sdk.resource.get(string)
      recupera il valore di una risorsa localizzata data la sua chiave
      
    . sdk.resource.set(object)

      aggiunge alle risorse le chiavi specificate nell'oggetto in input
      object = {
        'key.1': 'value',
        'key.2': 'value',
        'key.3': 'value'
      }


*/

var sdk;
var sdkParams;

(function (sdk, $, args) {

    sdk.resource = (function (resource, $, args) {

        var multilanguageResources = function () {

            this.get = function (resourceName) {

                if (commonResource && commonResource[resourceName]) {
                    return commonResource[resourceName];
                }

                return 'Risorsa: ' + resourceName + ' non trovata';
            };

            this.set = function (resources) {

                if (!commonResource) {

                    throw 'Non è stato possibile trovare il contenitore delle risorse';
                }

                $.extend(commonResource, resources);
            };

        };

        // export
        resource = new multilanguageResources();

        return resource;

    })(sdk.resource || {}, $, args || {});

    return sdk;

})(sdk || (sdk = {}), jQuery, sdkParams);
