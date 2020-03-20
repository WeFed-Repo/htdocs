var Logger = {
    debugMessageEnabled: true,
    debugMessage: function (message) {
        if (this.debugMessageEnabled && window.console) {
            window.console.log(this._getCurrentTime() + " - DBG - " + message);
        }
    },
    errorMessageEnabled: true,
    errorMessage: function (message) {
        if (this.errorMessageEnabled && window.console) {
            window.console.log(this._getCurrentTime() + " - ERR - " + message);
        }
    },
    errorException: function (message, exception) {
        if (this.errorMessageEnabled && window.console) {
            window.console.log(this._getCurrentTime() + " - ERR - " + message + ' - ' + this._getExceptionDetail(exception));
        }
    },
    _getExceptionDetail: function (exception) {
        
        var toRet = 'Exception';
        if (exception) {
            toRet += '(';
            if (exception.message)
                toRet += " Message: " + exception.message;
            if (exception.description)
                toRet += " Description: " + exception.description;
            if (exception.stack)
                toRet += " Stack: " + exception.stack;
            toRet += ')';
        } else {
            toRet += '(null)';
        }
        return toRet;
    },
    _getCurrentTime: function () {
        var currentDate = new Date();
        var hours = currentDate.getHours();
        var minutes = currentDate.getMinutes();
        var seconds = currentDate.getSeconds();
        var millis = currentDate.getMilliseconds();

        if (minutes < 10) {
            minutes = "0" + minutes;
        }

        if (seconds < 10) {
            seconds = "0" + seconds;
        }

        if (millis < 100 && millis > 9) {
            millis = "0" + millis;
        }
        else if (millis < 100) {
            millis = "00" + millis;
        }

        var currentTime = hours + ":" + minutes + ":" + seconds + "." + millis;
        return currentTime;
    }
};

// MutualExcluded CheckBoxGroup
function enforceMutualExcludedCheckBox(checkBox, selector, propertyName) {
    //debugger;
    var isChecked = checkBox.prop("checked");
    var checkBoxes = selector;  
    checkBoxes.prop("checked", false);

    $.each(checkBoxes, function (index, checkbox) {
        var idDisposizione = checkbox.value;
        // debugger;
        var fullpropertyname = $(checkbox).data("fullpropertyname");
        var propertiesArray = eval(fullpropertyname);
        removeFromArray(idDisposizione, propertiesArray);
    });

    checkBox.prop("checked", isChecked);
};

function removeFromArray(value, list) {
    var index;
    if (list == null) {
        return;
    }
    index = list.indexOf(value);
    // Handle edge case so we dont do a range of 0 to -1
    if (index !== -1) {
        list.splice(index, 1);
    }
}


function GetCurrencySign(currencyCode) {
    if (currencyCode) {
        switch (currencyCode) {
            case "EUR":
                return "€";
            default:
                return currencyCode;
        }    
    }
    return '';
}

function FormatAmmount(decimalValue) {
    if (decimalValue) {
        return decimalValue;
        }
    return '';
}

function htmlEncode(value) {
    //create a in-memory div, set it's inner text(which jQuery automatically encodes)
    //then grab the encoded contents back out.  The div never exists on the page.
    return $('<div/>').text(value).html();
}

function htmlDecode(value) {
    return $('<div/>').html(value).text();
}


//funzione per la creazione di una form nel DOM per redirect
//i nav-parameters hanno la seguente struttura: chiave=valore;chiave1=valore1;ecc.. 
//function navigateForm1(srcTag) {
//    var objTag = $(srcTag);

//    var currentLocation = {
//        methodMenu: 'post',
//        target: '_self',
//        urlmenu: '#',
//        parameters: ''
//    }

//    $.extend(currentLocation, {
//        urlmenu: objTag.attr("nav-location"),
//        methodMenu: objTag.attr("nav-method"),
//        parameters: objTag.attr('nav-parameters'),
//        target: objTag.attr('nav-target')
//    });

//    //se form non esiste lo creo
//    if ($('#______frmnavigate______').length == 0) {
//        $(":root").append('<form id="______frmnavigate______" name="______frmnavigate______"></form>');
//    }
//    var form = $('#______frmnavigate______');
//    form.attr('method', htmlEncode(currentLocation.methodMenu));
//    form.attr('action', htmlEncode(currentLocation.urlmenu));
//    form.attr('target', htmlEncode(currentLocation.target));

//    if (currentLocation.parameters) {
//        $.each(currentLocation.parameters.split(';'), function (index, part) {
//            var arrtmp = part.split('=');
//            if ($('input[name=' + arrtmp[0] + ']', form).length==0) {
//                form.append('<input type="hidden" name="' + arrtmp[0] + '">');
//            }
//            $('input[name=' + arrtmp[0] + ']', form).attr('value', htmlEncode(arrtmp[1]));
//        });
//    }
//    form.submit();
//}

//funzione per la creazione di una form nel DOM per redirect
//i nav-parameters hanno la seguente struttura: chiave=valore;chiave1=valore1;ecc..
function navigateForm(srcTag) {
    navigateFormByParam(convertTagToParam(srcTag));
}

function convertTagToParam(srcTag) {
    var objTag = $(srcTag);
    return {
        urlmenu: objTag.attr("nav-location"),
        methodMenu: objTag.attr("nav-method"),
        parameters: objTag.attr('nav-parameters'),
        target: objTag.attr('nav-target')
    };
}


function navigateFormByParam(destinationParameter) {

    var currentLocation = {
        methodMenu: 'post',
        target: '_self',
        urlmenu: '#',
        parameters: ''
    }

    $.extend(currentLocation, destinationParameter);

    //se form non esiste lo creo
    if ($('#______frmnavigate______').length == 0) {
        $(":root").append('<form id="______frmnavigate______" name="______frmnavigate______"></form>');
    }
    var form = $('#______frmnavigate______');
    form.empty();
    form.attr('method', htmlEncode(currentLocation.methodMenu));
    form.attr('action', htmlEncode(currentLocation.urlmenu));
    form.attr('target', htmlEncode(currentLocation.target));

    if (currentLocation.parameters) {
        if (typeof currentLocation.parameters === 'string') {
            $.each(currentLocation.parameters.split(';'), function(index, part) {
                var arrtmp = part.split('=');
                var nameToSearch = arrtmp[0];
                if (nameToSearch.indexOf('.') != -1) {
                    nameToSearch = '\'' + nameToSearch + '\'';
                }
                if ($('input[name=' + nameToSearch + ']', form).length == 0) {
                    form.append('<input type="hidden" name="' + arrtmp[0] + '">');
                }
                $('input[name=' + nameToSearch + ']', form).attr('value', htmlEncode(arrtmp[1]));
            });
        } else {
            var json = $.toJSON(currentLocation.parameters);
            form.append('<input type="hidden" name="contenttype" value="application/json" />');
            var field = $('<input type="hidden" name="content" />');
            field.val(json);
            form.append(field);
            
        }
        
    }
    form.submit();
}

