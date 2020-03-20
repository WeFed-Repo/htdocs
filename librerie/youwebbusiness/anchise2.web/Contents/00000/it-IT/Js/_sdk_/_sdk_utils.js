var sdk;
var sdkParams;
(function (sdk, $, args) {
    // namespace Sdk.Utils
    sdk.utils = (function (utils, $, args) {


        //var removeFromArray = function(value, list) {
        //    if (list == null) {
        //        return;
        //    }
        //    var index = list.indexOf(value);
        //    // Handle edge case so we dont do a range of 0 to -1
        //    if (index !== -1) {
        //        list.splice(index, 1);
        //    }
        //};

        //// MutualExcluded CheckBoxGroup
        //var enforceMutualExcludedCheckBox = function (checkBox, selector, propertyName) {

        //    var isChecked = checkBox.prop("checked");
        //    var checkBoxes = selector;
        //    checkBoxes.prop("checked", false);

        //    $.each(checkBoxes, function (index, checkbox) {
        //        var idDisposizione = checkbox.value;
        //        var fullpropertyname = $(checkbox).data("fullpropertyname");
        //        var propertiesArray = eval(fullpropertyname);
        //        removeFromArray(idDisposizione, propertiesArray);
        //    });

        //    checkBox.prop("checked", isChecked);
        //};

        //var getCurrencySign = function(currencyCode) {
        //    if (currencyCode) {
        //        switch (currencyCode) {
        //        case "EUR":
        //            return "€";
        //        default:
        //            return currencyCode;
        //        }
        //    }
        //    return '';
        //};

        //var formatAmmount = function(decimalValue) {
        //    if (decimalValue) {
        //        return decimalValue;
        //    }
        //    return '';
        //};

        var htmlEncode = function (value) {
            //create a in-memory div, set it's inner text(which jQuery automatically encodes)
            //then grab the encoded contents back out.  The div never exists on the page.
            return $('<div/>').text(value).html();
        };

        //var htmlDecode = function(value) {
        //    return $('<div/>').html(value).text();
        //};


        function navigateFormByParam(destinationParameter) {
            var currentLocation = {
                method: "post",
                target: "_self",
                action: "#",
                parameters: "",
                jsonAsFormFields: false,
                fieldName: 'content'
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
                method: objTag.attr("nav-method"),
                parameters: objTag.attr("nav-parameters"),
                target: objTag.attr("nav-target")
            };
        };

        //funzione per la creazione di una form nel DOM per redirect
        //i nav-parameters hanno la seguente struttura: chiave=valore;chiave1=valore1;ecc..
        var navigateFormByTag = function (srcTag) {
            navigateFormByParam(convertTagToParam(srcTag));
        };

        // attiva la navigazione di form sui contenuti dei tag dell'element
        //var activateNavigateFormByTagOnClick = function (item) {
        //    var jItem = $(item);
        //    var location = jItem.attr("nav-location");
        //    if (location) {
        //        jItem.click(function () {
        //            navigateFormByTag(this);
        //        });
        //    }
        //};


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









        return utils;
    })(sdk.utils || {}, $, args || {});
    // end namespace sdk.utils
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
