// Funzionalità Core ma con namespace di comodo per tenere le partial view meno prolisse
var Http;
(function (Http) {
    var _ajaxError = function (jqXHR, textStatus, errorThrown) {
        console.log("readyState: " + jqXHR.readyState);
        switch (jqXHR.readyState) {
            case 0:
                uiHelper.Alert({
                    text: 'Network Error: è successo qualcosa di inaspettato alla rete, si prega di controllare che il dispositivo sia connesso ad Internet.',
                    cssClass: 'alert-danger'
                });
                break;
            case 4:
                var contentType = jqXHR.getResponseHeader("Content-Type");
                if (jqXHR.status != 400 && jqXHR.status != 404 && contentType != 'application/json') {
                    uiHelper.Alert({
                        text: 'Error: è successo qualcosa di inaspettato durante il tentativo di connessione al server.',
                        cssClass: 'alert-danger'
                    });
                    //document.open();
                    //document.write(jqXHR.responseText);
                    //document.close();
                }
                break;
            case 1:
            case 2:
            case 3:
            default:
                uiHelper.Alert({
                    text: 'Error: è successo qualcosa di inaspettato durante il tentativo di connessione al server.',
                    cssClass: 'alert-danger'
                });
                break;
        }    
    };

    var _ajaxPost = function (url, json) {
        return $.ajax({
            contentType: 'application/json',
            url: url,
            method: "POST",
            data: json,
            beforeSend: function (xhr) {
                uiHelper.ShowLoader();
            },
            error: _ajaxError
        });
    }

    var _ajaxGet = function (url) {
        return $.ajax({
            contentType: 'application/json',
            url: url,
            method: "GET",
            beforeSend: function (xhr) {
                uiHelper.ShowLoader();
            },
            error: _ajaxError
        });
    }

    var _ajaxPostWithTxMon = function (url, json) {
        try {
            tmtmon.enrich();
        } catch (e) {
            console.log(e);
        }

        return _ajaxPost(url, json);
    };

    Http.Post = _ajaxPost;
    Http.PostWithTxMon = _ajaxPostWithTxMon;
    Http.Get = _ajaxGet;
})(Http || (Http = {}));