function download(identity, url) {
    var param = {
        target: '_new',
        urlmenu: url,
        parameters: { Crypted: identity },
        behavior: 'download'
    };
    exportData(param);

}

function exportData(destinationParameter) {

    var currentLocation = {
        methodMenu: 'post',
        target: '_self',
        urlmenu: '#',
        parameters: '',
        behavior: ''

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

    var json = $.toJSON(currentLocation.parameters);
    form.append('<input type="hidden" name="requestbehavior" value="' + currentLocation.behavior + '" />');
    form.append('<input type="hidden" name="contenttype" value="application/json" />');
    var field = $('<input type="hidden" name="content" />');
    field.val(json);
    form.append(field);

    form.submit();
}