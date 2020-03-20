/* globals $:false, COPWebRTC:false, testConfig:false, urlBase:false, console:false, nomeUtente:false */
/* exported testIniziale */
"use strict";
var test = COPWebRTC.getTestInstance(),
    localproperties = {
        width: 0,
        height: 0
    },
    throwError,
    ieDetect = {
        ie: false,
        ver: 99
    };
if (!(window.ActiveXObject) && "ActiveXObject" in window) {
    ieDetect = {
        ie: true,
        ver: 11
    };
} else if (document.all && window.atob) {
    ieDetect = {
        ie: true,
        ver: 10
    };
} else if (document.all) {
    ieDetect = {
        ie: true,
        ver: 9
    };
}
/****************************************************************************************************
 * TEST INIZIALE
 ****************************************************************************************************/
var esitoTestIniziale = false,
    netError = "&Egrave; stato impossibile stabilire una connessione con il server. Controllare la connessione a internet e utilizzare di nuovo il pulsante SALVA E PROSEGUI.",
    Config = {
        serverListUri: window.location.protocol + "//tokbox.com/tools/connectivity/server.php"
    },
    responses = [];
var handleResults = function(result) {
    if (result.value === 'fail') {
        responses.push(result);
        controllaTest();
        return false;
    } else {
        if (result.value === 'warning') {
            responses.push(result);
        }
        return true;
    }
};
var testWebcam, alertwebcam, alertbusy, identificazionecompletata;
var testIniziale = function() {
    var modalOption = {
            "backdrop": "static",
            "keyboard": false,
            "show": false
        };
    testWebcam = $('#testWebcam');
    testWebcam.modal(modalOption);
    alertwebcam = $('#alertwebcam');
    alertwebcam.modal(modalOption);
    alertbusy = $('#alertbusy');
    alertbusy.modal(modalOption);
    identificazionecompletata = $('#identificazionecompletata');
    identificazionecompletata.modal(modalOption);
    if (ieDetect.ie && ieDetect.ver === 9) {
        responses.push({
            "value": "fail",
            "description": {
                "code": 6
            }
        });
        controllaTest();
    } else {
        testWebcam.modal('show');
        throwError = false;
        $.ajax(Config.serverListUri, {
            "method": "GET",
            "dataType": "json",
            "cache": false
        }).then(function(data) {
            for (var i in testConfig) {
                var display = data.servers[testConfig[i].mappedName].display[0];
                testConfig[i].display = display;
                $("#" + i).find("h3").text(display.name);
                $("#" + i).find(".test-description").text(display.description);
            }
            testConfig.testAnvilConnection.testUrls = [data.servers.anvil.generic_url];
            testConfig.testWebSocketSecureConnection.testUrls = data.servers.mantis.urls.map(function(server) {
                return server + ".tokbox.com";
            });
            testConfig.testTurnConnection.testUrls = data.servers.turn.urls.map(function(server) {
                return server + ".tokbox.com";
            });
            testConfig.testLoggingConnection.testUrls = [data.servers.logging.generic_url];
            eseguiTest();
        }, function (jqXHR, textStatus, errorThrown) {
            logError(jqXHR, textStatus, errorThrown, 'server list');
        });
    }
};
var eseguiTest = function() {
    test.testBrowserCompatibility(function(response) {
        if (handleResults(response)) {
            test.testAccessToLocalAudioVideoDevice("localMediaStream", localproperties, function(response) {
                if (handleResults(response)) {
                    test.testServerConnectivity(function(response) {
                        if (handleResults(response)) {
                            test.testTurnConnectivity(function(response) {
                                if (handleResults(response)) {
                                    esitoTestIniziale = true;
                                    controllaTest();
                                }
                            });
                        }
                    });
                }
            });
        }
    });
};
var controllaTest = function() {
    var isFailed = false,
        isWarning = false,
        resultedHTMLMessage = '',
        i = 0,
        errorInserted = false,
        chromeMsg = ' consigliamo di utilizzare <a href="https://www.google.it/chrome/browser/desktop/" target="_blank">Chrome</a>.';
    for (i = 0; i < responses.length && !isFailed; i++) {
        if (responses[i].value === 'fail') {
            isWarning = false;
            isFailed = true;
        } else if (responses[i].value === 'warning') {
            isWarning = true;
        }
    }
    if (false && isWarning) {
        for (i = 0; i < responses.length; i++) {
            if (responses[i].description.code === 4) {
                resultedHTMLMessage = "Abbiamo riscontrato un problema con le impostazioni di connessione, se non dovesse funzionare la videochiamata, " + chromeMsg;
            }
        }
    } else if (isFailed) {
        for (i = 0; i < responses.length && !errorInserted; i++) {
            if (responses[i].description.code === 5) {
                var plugin_url = responses[i].details.webrtc_plugin_url;
                resultedHTMLMessage = "La verifica non ha dato esito positivo, lo strumento di videochiamata non &egrave; compatibile con il tuo PC. Per proseguire puoi installare il seguente <a  href='" + plugin_url + "'>plugin</a>. Ricordati di riavviare il browser o di aggiornare la pagina selezionando il tasto F5 prima di rieseguire il test. In alternativa puoi scegliere di cambiare la modalità di identificazione.";
                errorInserted = true;
            } else if (responses[i].description.code === 6) {
                resultedHTMLMessage = "Questo browser non consente di effettuare una connessione audio/video, ti " + chromeMsg;
                errorInserted = true;
            } else if (responses[i].description.code === 11) {
                resultedHTMLMessage = "&Egrave; stato impossibile accedere alla webcam e/o ai dispositivi audio. Controllare se tutti i dispositivi sono configurati correttamente e utilizzare di nuovo il pulsante SALVA E PROSEGUI. Nel caso l'errore dovesse ripresentarsi, " + chromeMsg;
            } else if (responses[i].description.code === 9) {
                resultedHTMLMessage = netError;
            } else if (responses[i].description.code === 10) {
                resultedHTMLMessage = "&Egrave; stato impossibile stabilire una connessione con i server remoti necessari alla videoconferenza. Controllare la connessione a internet e utilizzare di nuovo il pulsante SALVA E PROSEGUI.";
            } else if (responses[i].description.code === 13) {
                resultedHTMLMessage = "&Egrave; necessario aggiornare il browser all'ultima versione disponibile. Dopo aver eseguito l'aggiornamento, riavviare il browser prima di rieseguire il test. Oppure cambiare modalit&agrave; di identificazione.";
            }
        }
    }
    if (resultedHTMLMessage !== '') {
        testWebcam.modal('hide');
        setErrorWebcam(resultedHTMLMessage);
    }
    if (!isFailed) {
        test.stopTestWebcamAccess(function() {
            $('#localMediaBox .mediaStreamWrap').empty().append('<div id="localMediaStream"></div>');
            processStart();
        });
    } else {
        testWebcam.modal('hide');
        test.stopTestWebcamAccess(function() {
            $('#localMediaBox .mediaStreamWrap').empty().append('<div id="localMediaStream"></div>');
        });
    }
};
var setErrorWebcam = function(errore, intro) {
    var alertwebcam = $('#alertwebcam');
    $('#radiowebcam').prop('disabled', true);
    alertwebcam.modal('show');
    if (typeof intro !== 'undefined' && intro) {
        $('#introAlert').show();
    }
    $('#testo').html(errore);
};
var setNetError = function() {
    testWebcam.modal('hide');
    setErrorWebcam(netError, false);
};
var logError = function(jqXHR, textStatus, errorThrown, callingName) {
    var isBlocking = (callingName === 'processStart' || callingName === 'start' || callingName === 'queue');
    if (isBlocking && typeof jqXHR === 'object') {
        console.log('jqXHR.readyState: ' + jqXHR.readyState);
        console.log('jqXHR.status: ' + jqXHR.status);
        console.log('textStatus: ' + textStatus);
        console.log('errorThrown: ' + errorThrown);
        setNetError();
        closeWebcam();
    }
    if (typeof callingName === 'string') {
        console.log('callingName: ' + callingName);
    }
    return $.Deferred().reject(false, false, false).promise();
};
/****************************************************************************************************
 * FINE TEST INIZIALE
 ****************************************************************************************************/
var taskId = null;
var sessionKey = null;
var processStart = function() {
    /****************************************************************************************************
     * processStart
     ****************************************************************************************************/
    throwError = true;
    $.ajax({
        "url": urlBase + 'process/' + $('#token').val() + '/start',
        "type": "POST",
        "data": {},
        "dataType": "json",
        "cache": false
    }).then(function(data) {
        console.log(data);
        taskId = data.taskId;
        sessionKey = data.sessionKey;
        /****************************************************************************************************
         * start
         ****************************************************************************************************/
        return $.ajax({
            "url": urlBase + 'webid' + '/' + taskId + '/start',
            "type": "POST",
            "data": {},
            "headers": {
                "Authorization": 'COP ' + sessionKey
            },
            "dataType": "json",
            "cache": false
        });
    }, function (jqXHR, textStatus, errorThrown) {
        logError(jqXHR, textStatus, errorThrown, 'processStart');
    }).then(function(data) {
        console.log(data);
        if (data.meetingStatus == 'NO_OPERATORS') {
            testWebcam.modal('hide');
            alertwebcam.modal('show');
            return $.Deferred().reject("NO_OPERATORS").promise();
        } else {
            /****************************************************************************************************
             * queue
             ****************************************************************************************************/
            throwError = false;
            return $.ajax({
                "url": urlBase + 'webid' + '/' + taskId + '/queue',
                "type": "POST",
                "data": {},
                "headers": {
                    "Authorization": 'COP ' + sessionKey
                },
                "dataType": "json",
                "cache": false
            });
        }
    }, function (jqXHR, textStatus, errorThrown) {
        logError(jqXHR, textStatus, errorThrown, 'start');
    }).then(function(data) {
        var callReference = {
            customer: $('#apikey').val(),
            webRTCRoom: data.meetingId,
            authWebRTCRoom: data.meetingUrl
        };
        var testHidden = false;
        var waitingPoll = setInterval(function() {
            /*****************************************************************************************************************
             * polling for web conference
             ****************************************************************************************************************/
            $.ajax({
                "url": urlBase + 'webid' + '/' + taskId + '/poll',
                "type": "POST",
                "data": {},
                "headers": {
                    "Authorization": 'COP ' + sessionKey
                },
                "dataType": "json",
                "cache": false
            }).then(function(data) {
                console.log(data);
                if (!testHidden) {
                    testHidden = true;
                    testWebcam.modal('hide');
                }
                if (data.meetingStatus == 'NO_OPERATORS') {
                    alertbusy.modal('hide');
                    deQueue();
                } else if (data.meetingStatus == 'OPERATORS_BUSY') {
                    var mm, ss,
                        waitingTime = data.meetingWaitingTime;
                    mm = Math.floor(waitingTime / 60);
                    ss = waitingTime - (mm * 60);
                    mm = mm < 10 ? '0' + mm : mm;
                    ss = ss < 10 ? '0' + ss : ss;
                    $('#waitingTime').text(mm + ':' + ss);
                    if (!alertbusy.hasClass('in')) {
                        alertbusy.modal('show');
                    }
                } else if (data.meetingStatus == 'OPERATOR_AVAILABLE') {
                    // Esito test positivo
                    $('#informativa').hide();
                    $('#webcamBox').show();
                    alertbusy.modal('hide');
                    clearInterval(waitingPoll);
                    startWebcam(callReference);
                    var dossierPoll = setInterval(function() {
                        /*************************************************************************************************
                         * polling for dossier
                         ************************************************************************************************/
                        $.ajax({
                            "url": urlBase + 'webid' + '/' + taskId + '/dossier',
                            "type": "GET",
                            "data": {},
                            "headers": {
                                "Authorization": 'COP ' + sessionKey
                            },
                            "dataType": "json",
                            "cache": false
                        }).then(function(data) {
                            console.log(data);
                            if (data.dossier.status == 'COMPLETED' || data.dossier.status == 'ARCHIVED') {
                                clearInterval(dossierPoll);
                                if (data.dossier.person.personalDataUpdated === true) {
                                    $('#persMod').text('Dati personali modificati');
                                    $('#persMod').attr('style', 'color: red;');
                                }
                                if (data.dossier.person.addressUpdated === true) {
                                    $('#addrMod').text('Indirizzo modificato');
                                    $('#addrMod').attr('style', 'color: red;');
                                }
                                if (data.dossier.person.identityDocumentInfoUpdated === true) {
                                    $('#docuMod').text('Documento d\'identita\' modificato');
                                    $('#docuMod').attr('style', 'color: red;');
                                }
                                if (data.dossier.person.contactInfoUpdated === true) {
                                    $('#infoMod').text('Informazioni di contatto modificate');
                                    $('#infoMod').attr('style', 'color: red;');
                                }
                                identificazionecompletata.modal('show');
                                $('#webcamBox .btn-console a').last().show();
                                closeWebcam();
                            } else if (data.dossier.status == 'REJECTED') {
                                clearInterval(dossierPoll);
                                var reason,
                                    verificatoErrore = "Si &egrave; verificato un errore. ",
                                    cambiaModalita = "un'altra modalit&agrave; di identificazione.";
                                switch (data.dossier.rejectReason) {
                                    case "10":
                                        reason = "La registrazione della videochiamata &egrave; necessaria per procedere con l'identificazione. Per proseguire scegli " + cambiaModalita;
                                        break;
                                    case "20":
                                        reason = "Non &egrave; stato possibile proseguire. Scegli " + cambiaModalita;
                                        break;
                                    case "30":
                                        reason = "La videochiamata &egrave; stata interrotta perch&eacute; i documenti erano incompleti o illeggibili. Assicurati di avere a tua disposizione tutta la documentazione necessaria e procedi nuovamente all'identificazione.";
                                        break;
                                    case "40":
                                        reason = "Non &egrave; stato possibile proseguire perch&acute; la certificazione del cellullare non &egrave; andata a buon fine.";
                                        break;
                                    case "50":
                                    case "60":
                                        reason = verificatoErrore + "Puoi avviare nuovamente la videochiamata oppure scegliere " + cambiaModalita;
                                        break;
                                    case "70":
                                        reason = verificatoErrore + "Per procedere puoi avviare nuovamente la videochiamata oppure scegliere " + cambiaModalita;
                                        break;
                                }
                                alertwebcam.modal('show');
                                $('#testo').html(reason);
                                closeWebcam();
                            }
                        }, function (jqXHR, textStatus, errorThrown) {
                            //clearInterval(dossierPoll);
                            logError(jqXHR, textStatus, errorThrown, 'polling for dossier');
                        });
                    }, 5000);
                }
            }, function (jqXHR, textStatus, errorThrown) {
                //clearInterval(waitingPoll);
                logError(jqXHR, textStatus, errorThrown, 'polling for web conference');
            });
        }, 5000);
    }, function (jqXHR, textStatus, errorThrown) {
        logError(jqXHR, textStatus, errorThrown, 'queue');
    });
};
var cop;
var startWebcam = function(callReference) {
    cop = new COPWebRTC(callReference);
    var chat = cop.createChat('me', COPWebRTC.SenderCategories.USER),
        lastAuthor = "";
    var sendMessageText = function() {
        var messageEl = $('#message');
        chat.sendMessage(messageEl.val());
        messageEl.val('');
    };
    var loadWebcam = function() {
        var localBox = $('#localMediaStream').closest('.mediaStreamWrap'),
            remoteBox = $('#remoteMediaStream').closest('.mediaStreamWrap'),
            localproperties = {
                width: localBox.outerWidth(),
                height: localBox.outerHeight()
            },
            remoteproperties = {
                width: remoteBox.outerWidth(),
                height: remoteBox.outerHeight()
            };
        cop.publishLocalStream('localMediaStream', localproperties, function(msg) {
            console.log('publishLocalStream: ' + msg);
        });
        cop.subscribeRemoteStream('remoteMediaStream', remoteproperties, function(msg) {
            console.log('subscribeRemoteStream: ' + msg);
        });
    };
    loadWebcam();
    chat.addEventListener('messageReceived', function(chatContent) {
        var textMessage = "",
            rowClass = (chatContent.author === 'localUser') ? '' : ' fromOperator',
            now = new Date(),
            messageUser = (chatContent.author === 'localUser') ? nomeUtente : 'Operatore - IC',
            gg = now.getDate() < 10 ? '0' + now.getDate() : now.getDate(),
            mm = now.getMonth() < 9 ? '0' + (now.getMonth() + 1) : (now.getMonth() + 1),
            messageDate = now.getFullYear() + "-" + mm + "-" + gg + ', ' + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds(),
            chatHistory = $('#chatHistory'),
            chatSpacer, textEl;
        if (lastAuthor !== chatContent.author) {
            // lastAuthor === '' 
            chatSpacer = (lastAuthor === '') ? '' : ' chatSpacer';
            textMessage += '<div class="row' + chatSpacer + rowClass + '">' + '<div class="col-md-12">' + '<span class="messageName">' + messageUser + '</span><br>' + '</div>' + '</div>';
        }
        lastAuthor = chatContent.author;
        textMessage += '<div class="row' + rowClass + '">' + '<div class="col-md-3">' + '<span class="messageDate">' + messageDate + '</span>' + '</div>' + '<div class="col-md-9">' + '<div class="messageText">' + chatContent.message + '</div>' + '</div>' + '</div>';
        textEl = $(textMessage);
        lastAuthor = chatContent.author;
        chatHistory.append(textEl);
        chatHistory.animate({
            scrollTop: textEl.offset().top
        }, 500);
    });
    $('#message').keyup(function(event) {
        if (event.keyCode == 13) { // 13 = Enter Key
            sendMessageText();
        }
    });
    $('#mediaRefreshBox').click(function() {
        cop.close(function() {
            loadWebcam();
        });
    });
    $("#sendText").click(function() {
        sendMessageText();
    });
    $('#chatBox').submit(function() {
        sendMessageText();
    });
};
var closeWebcam = function () {
    if (typeof cop !== 'undefined') {
        cop.close();
    }
    $('#message').off('keyup');
    $('#mediaRefreshBox, #sendText').off('click');
    $('#chatBox').off('submit');
};
var deQueue = function() {
    $.ajax({
        "url": urlBase + 'webid' + '/' + taskId + '/dequeue',
        "type": "POST",
        "data": {},
        "headers": {
            "Authorization": 'COP ' + sessionKey
        },
        "dataType": "json",
        "cache": false
    }).then(function(data) {
        console.log(data);
        // $('#testPositivo').hide();
        // $('#testAttenzione').show();
    }, function (jqXHR, textStatus, errorThrown) {
        logError(jqXHR, textStatus, errorThrown, 'dequeue');
    });
};
$(function () {
    $('#webcamBox .btn-console a').last().hide();
});