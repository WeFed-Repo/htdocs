/*
    RESOURCE DOC
    
    . sdk.resource.get(resourceName: string)
      recupera il valore di una risorsa data la sua chiave, ritorna una stringa
      
    . sdk.resource.set(resources: object)
      estende le risorse client con nuove chiavi

      resources := {
        'key.1': 'value 1',
        'key.2': 'value 2',
        'key.3': 'value 3'
      }

    . sdk.resource.has(resourceName: string)
      controlla se esiste una determinata risorsa data la sua chiave, ritorna un valore booleano


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
                sdk.utils.log.debugMessage("resource: " + resourceName + " NotFound");
                return 'Risorsa: ' + resourceName + ' non trovata';
            };

            this.has = function (resourceName) {

                if (commonResource && commonResource[resourceName]) {
                    return true;
                }
                return false;
            };

            this.set = function (resources) {

                if (!commonResource) {
                    sdk.utils.log.debugMessage("resource: Contenitore delle risorse NotFound");
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
