var sdk;
var sdkParams;
(function (sdk, $, args) {
    // namespace Sdk.Utils
    sdk.utils = (function (utils, $, args) {

        var htmlEncode = function (value) {
            //create a in-memory div, set it's inner text(which jQuery automatically encodes)
            //then grab the encoded contents back out.  The div never exists on the page.
            return $('<div/>').text(value).html();
        };


        //TODO: Implementata David 09/03/2018
        var navigateFormByParamNew = function (destinationParameter) {

            var currentLocation = {
                methodMenu: "post",
                target: "_self",
                action: "#",
                parameters: "",
                jsonAsFormFields: true
            };

            if (destinationParameter) {
                $.extend(currentLocation, destinationParameter);

                if (destinationParameter.urlmenu) {
                    currentLocation.action = destinationParameter.urlmenu;
                }

                if (destinationParameter.parameters) {
                    currentLocation.parameters = destinationParameter.parameters;
                }
            }

            return navigateFormByParam(currentLocation);
        };

        //TODO: Aggiunto David 05/02/2018 per gestione stampe
        var navigateFormForExport = function (url, parameter) {
            navigateFormByParam({
                methodMenu: 'post',
                target: '_new',//_parent _self _top _new _blank Attenzione verificare target con browser diversi
                action: url,
                parameters: parameter,
                jsonAsFormFields: true//TODO:Introdotto da David allineando con quello che c'è in SDK (più avanti...)
            });
        }

        var navigateFormByParamUrlMenu = function (destinationParameter) {

            var currentLocation = {
                methodMenu: "post",
                target: "_self",
                action: "#",
                parameters: ""
            };

            if (destinationParameter) {
                $.extend(currentLocation, destinationParameter);
                if (destinationParameter.urlmenu) {
                    currentLocation.action = destinationParameter.urlmenu;
                }
            }

            return navigateFormByParam(currentLocation);
        };

        var navigateFormByParam = function (destinationParameter) {
            var currentLocation = {
                method: "post",
                target: "_self",
                action: "#",
                parameters: "",
                jsonAsFormFields: false,
                fieldName: 'content',
                XJsComm: ''
            }

            $.extend(currentLocation, destinationParameter);

            //se form non esiste lo creo
            if ($("#______frmnavigate______").length === 0) {
                $(":root").append('<form id="______frmnavigate______" name="______frmnavigate______"></form>');
            }
            var form = $("#______frmnavigate______");
            form.empty();
            form.attr("method", htmlEncode(currentLocation.method));
            form.attr("action", htmlEncode(currentLocation.action));
            form.attr("target", htmlEncode(currentLocation.target));

            if (currentLocation.XJsComm !== undefined && currentLocation.XJsComm !== '') {
                var tmpInput = $('<input type="hidden" name="X-JsComm" value=""/>');
                tmpInput.attr("value", currentLocation.XJsComm);
                form.append(tmpInput);
            }

            if (currentLocation.parameters) {
                if (typeof currentLocation.parameters === "string") {
                    $.each(currentLocation.parameters.split(";"),
                        function (index, part) {
                            var arrtmp = part.split("=");
                            var nameToSearch = arrtmp[0];
                            if (nameToSearch.indexOf(".") !== -1) {
                                nameToSearch = "'" + nameToSearch + "'";
                            }
                            if ($("input[name=" + nameToSearch + "]", form).length === 0) {
                                form.append('<input type="hidden" name="' + arrtmp[0] + '">');
                            }
                            $("input[name=" + nameToSearch + "]", form).attr("value", htmlEncode(arrtmp[1]));
                        });
                } else {
                    if (currentLocation.jsonAsFormFields) {
                        _utilSerializeToForm(form, "", currentLocation.parameters);
                    } else {
                        var json = $.toJSON(currentLocation.parameters);
                        form.append('<input type="hidden" name="contenttype" value="application/json" />');
                        var field = $('<input type="hidden" name="' + currentLocation.fieldName + '" />');
                        field.val(json);
                        form.append(field);
                    }
                }
            }
            form.submit();
        };

        //TODO:Introdotto da David allineando con quello che c'è in SDK (più avanti...)
        function _utilSerializeToForm(form, currentPath, currentObject) {
            if (currentPath !== "") {
                currentPath = currentPath + ".";
            }
            for (var p in currentObject) {
                if (currentObject.hasOwnProperty(p)) {
                    var localName = currentPath + p;
                    var localValue = currentObject[p];
                    if (typeof (localValue) === "object") {
                        _utilSerializeToForm(form, localName, localValue);
                    } else {
                        if ($('input[name="' + localName + '"]', form).length === 0) {
                            form.append('<input type="hidden" name="' + localName + '">');
                        }
                        $('input[name="' + localName + '"]', form).attr("value", htmlEncode(localValue));
                    }
                }
            }
        };


        var convertTagToParam = function (srcTag) {
            var objTag = $(srcTag);
            return {
                action: objTag.attr("nav-location"),
                methodMenu: objTag.attr("nav-method"),
                parameters: objTag.attr("nav-parameters"),
                target: objTag.attr("nav-target")
            };
        };

        //funzione per la creazione di una form nel DOM per redirect
        //i nav-parameters hanno la seguente struttura: chiave=valore;chiave1=valore1;ecc..
        var navigateFormByTag = function (srcTag) {
            navigateFormByParam(convertTagToParam(srcTag));
        };

        var getSafeResource = function (resourceName) {
            if (commonResource && commonResource[resourceName]) {
                return commonResource[resourceName];
            }
            return "RES: " + resourceName + " not found";
        };


        // export

        utils.getSafeResource = getSafeResource;
        utils.navigateFormByParam = navigateFormByParam;
        utils.navigateFormByTag = navigateFormByTag;
        utils.navigateFormByParamUrlMenu = navigateFormByParamUrlMenu;
        utils.navigateFormForExport = navigateFormForExport;
        utils.navigateFormByParamNew = navigateFormByParamNew;



        return utils;
    })(sdk.utils || {}, $, args && args.utils ? args.utils : {});
    // end namespace sdk.utils
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
