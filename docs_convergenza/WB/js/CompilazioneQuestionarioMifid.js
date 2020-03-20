var domandeMifid = new Array();

domandeMifid[0] = "Risposta.1.910";
domandeMifid[1] = "Risposta.1.911";
domandeMifid[2] = "Risposta.1.912";
domandeMifid[3] = "Risposta.1.913";


function toggle_aaa() {
    var selezionato = document.getElementById("mifid_checkbox").checked;
    for(var domanda = 0; domanda < domandeMifid.length; domanda++) {
        disable(domandeMifid[domanda], selezionato);
    }
}


function reset() {
    document.getElementById("mifid_checkbox").checked = false;
    for(var domanda = 0; domanda < domandeMifid.length; domanda++) {
        var rButton = getRadioButton(domandeMifid[domanda]);
        var radioLength = rButton.length;
        try {
            for(var i = 0; i < radioLength; i++) {
                rButton[i].checked = false;
                rButton[i].disabled = false;
            }
        } catch(err) {
            alert("Siamo spiacenti: si e' verificato un errore");
        }
    }
}


function disable(rButtonName, value) {
    var rButton = getRadioButton(rButtonName);
    var radioLength = rButton.length;
    for(var i = 0; i < radioLength; i++) {
        rButton[i].disabled = value;
        if(value) {
            rButton[i].checked = !value;
        }
    }
}



function valida_form() {
    try {
        var selezionato = document.getElementById("mifid_checkbox").checked;
        if (selezionato) {
            return true;
        }
        for(var domanda = 0; domanda < domandeMifid.length; domanda++) {
            var tmp = verifica_radio_button(domandeMifid[domanda], selezionato);
            if (tmp != true) {
                return false;
            }
        }
        return true;
    } catch(error) {
        return false;
    }
}


function verifica_radio_button(nameRadioButton) {
    var rButton = getRadioButton(nameRadioButton);
    var radioLength = rButton.length;
    try {
        for(var i = 0; i < radioLength; i++) {
            if(rButton[i].checked) {
                return true;
            }
        }
        alert("Tutte le risposte sono obbligatorie");
        return false;
    } catch(err) {
        alert("Siamo spiacenti: si e' verificato un errore");
        return false;
    }
}

function getRadioButton(name) {
    return document.forms['FormQuesitonarioMifid'].elements[name];
}

function submit_form_mifid() {
    if(valida_form()) {
        document.forms['FormQuesitonarioMifid'].submit();
    }
}

function submit_form_mifid_a() {
    document.forms['FormQuesitonarioMifidA'].submit();
}

function getRadioButtonValue(nameRadioButton) {
    var rButton = getRadioButton(nameRadioButton);
    var radioLength = rButton.length;
    try {
        for(var i = 0; i < radioLength; i++) {
            if(rButton[i].checked) {
                return rButton[i].value;
            }
        }
    } catch(err) {
    }
}

function submit_form_mifid_ajax_a() {
    var param = "isFromLogin=true";
    param += "&manleva=" + document.getElementById("A0").value;
    param += "&Risposta.2.113=" + document.getElementById("A1").value;
    param += "&Risposta.2.114=" + document.getElementById("A2").value;
    param += "&Risposta.2.115=" + document.getElementById("A3").value;
    sendRequest("h725", "/login/InsertQuestionarioMifid.do", param, null, "<div style=\" text-align:center\"> <img src=\"/wbx-pri/img/ico_loading.gif\"></div>");
}

function submit_form_mifid_ajax() {
    var param = "isFromLogin=true";
    if(valida_form()) {
        param += "&manleva=" + document.getElementById("mifid_checkbox").checked;
        for(var domanda = 0; domanda < domandeMifid.length; domanda++) {
            var tmp = getRadioButtonValue(domandeMifid[domanda]);
            if (tmp != "") {
                param += "&" + domandeMifid[domanda] + "=" + tmp;
            }
        }
        //alert("OK: " + param);
        sendRequest("h725", "/login/InsertQuestionarioMifid.do", param, null, "<div style=\" text-align:center\"> <img src=\"/wbx-pri/img/ico_loading.gif\"></div>");
    }
}


function onLoadCompilazione() {
	//alert("ciao");
	toggle_aaa();

}
