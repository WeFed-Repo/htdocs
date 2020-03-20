/* globals $:false, AJAXGenericCall:false, AJAXGenericCallASync:false */
/* exported Cert */
"use strict";
var Cert = {},
    sendingOTP = {},
    validatingOTP = {},
    errCellNonUnivoco = 'Il numero di cellulare che hai inserito &egrave; associato a un codice cliente.<br>Inserisci un <strong>numero di cellulare diverso</strong>, che appartiene solo a te e confermarlo.',
    errMailNonUnivoco = 'L\'email che hai inserito &egrave; associata a un altro intestatario.<br>Inserisci un <strong>indirizzo email</strong>, che appartiene solo a te e confermarlo.';
//    errRichieste = 'Non &egrave; pi&ugrave; possibile richiedere altri codici di controllo.<br>Per motivi di sicurezza al primo accesso al conto dovrai <strong>obbligatoriamente confermare il tuo cellulare e indirizzo email</strong>.<br><br>Dopo l\'apertura del conto, ti invieremo i codici di accesso per posta.',
//    errTentativi = 'Non &egrave; pi&ugrave; possibile proseguire con la verifica delle credenziali.<br>Per motivi di sicurezza al primo accesso al conto dovrai <strong>obbligatoriamente confermare il tuo cellulare e indirizzo email</strong>.<br><br>Dopo l\'apertura del conto, ti invieremo i codici di accesso per posta.'
    
Cert.loadBoxCertificazione = function() {
    var sezione = '#boxCertificazione';
    var parameters = '';
    // setLoadingOnObject(sezione);
    AJAXGenericCall('POST', '/aol/loadCert.do',
        // Success
        function(data) {
            $(sezione).html(data);
        },
        // Error
        function() {
            Cert.showError('Errore chiamata, riprova');
        }, parameters);
};
Cert.modifica = function(comando, intestatario, indDaCertificare) {
    var parameters = null;
    if ('SMS' == comando) {
        parameters = $('#formModCell').serialize(true);
    } else if ('MAIL' == comando) {
        parameters = $('#formModEmail').serialize(true);
    }
    parameters = parameters + '&comando=' + comando + '&intestatario=' + intestatario;
    // setLoadingOnObject(sezione);
    AJAXGenericCallASync('POST', '/aol/modificaCert.do',
        // Success
        function(data) {
            if (data.isEsito) {
                var vet = data.daCertificare[indDaCertificare],
                    boxVerEl, outputBoxEl, outputArr;
                if ('SMS' == comando) {
                    $('#overlayModCell').modal('hide');
                    if (vet.cellNonUnivoco) {
                        Cert.showError(errCellNonUnivoco);
                    } else {
                        $('#tel_3_int' + intestatario).val($.trim($('#tel_mod').val()));
                        outputBoxEl = $('#outputCell_int' + intestatario);
                        outputArr = outputBoxEl.find('.output');
                        outputArr.eq(0).text($('#prefisso_mod').val() + ' ' + $('#num_mod').val());
                        outputArr.eq(1).text($('#operatore').val());
                        boxVerEl = outputBoxEl.closest('.boxVer');
                        boxVerEl.find('.sendOtp').removeClass('disabled');
                        boxVerEl.find('.verOtp').addClass('disabled');
                    }
                } else if ('MAIL' == comando) {
                    $('#overlayModEmail').modal('hide');
                    if (vet.mailNonUnivoco) {
                        Cert.showError(errMailNonUnivoco);
                    } else {
                        $('#mail_int' + intestatario).val($.trim($('#mail').val()));
                        outputBoxEl = $('#outputEmail_int' + intestatario);
                        outputBoxEl.find('.output').text($('#mail').val());
                        boxVerEl = outputBoxEl.closest('.boxVer');
                        boxVerEl.find('.sendOtp').removeClass('disabled');
                        boxVerEl.find('.verOtp').addClass('disabled');
                    }
                }
            } else {
                if ('SMS' == comando) {
                    $('#overlayModCell').modal('hide');
                } else if ('MAIL' == comando) {
                    $('#overlayModEmail').modal('hide');
                }
                // Cert.showError('1065 - Errore non previsto');
                Cert.showError('Errore chiamata, riprova');
            }
        },
        // Error
        function() {
            Cert.showError('Errore chiamata, riprova');
        }, parameters);
};
Cert.inviaOtp = function(comando, intestatario) {
    var parameters = 'comando=' + comando + '&intestatario=' + intestatario,
        key = comando + intestatario;
    if (typeof sendingOTP[key] === 'undefined') {
        sendingOTP[key] = false;
    }
    if (!sendingOTP[key]) {
        sendingOTP[key] = true;
        AJAXGenericCallASync('POST', '/aol/invioOtpCert.do',
            // Success
            function(data) {
                var vet, otp;
                if (data.isEsito) {
                    vet = data.daCertificare[intestatario - 1];
                    if ('SMS' == comando) {
                        if (vet.cellNonUnivoco) {
                            Cert.showError(errCellNonUnivoco);
//                        } else if (!vet.richiesteCell) {
//                            Cert.showError(errRichieste);
//                            Cert.disableAllBoxVer();
                        } else {
                            otp = vet.OTP_SMS;
                            if (otp) {
                                $('#otpCell_int' + intestatario).val(otp);
                            }
                            Cert.disableSendOtp(comando, intestatario);
                        }
                    } else if ('MAIL' == comando) {
                        if (vet.mailNonUnivoco) {
                            Cert.showError(errMailNonUnivoco);
//                        } else if (!vet.richiesteMail) {
//                            Cert.showError(errRichieste);
//                            Cert.disableAllBoxVer();
                        } else {
                            otp = vet.OTP_MAIL;
                            if (otp) {
                                $('#otpEmail_int' + intestatario).val(otp);
                            }
                            Cert.disableSendOtp(comando, intestatario);
                        }
                    }
                } else {
                    // TODO errore tecnico
                    // Cert.showError('1065 - Errore non previsto');
                    Cert.showError('Errore chiamata, riprova');
                }
                sendingOTP[key] = false;
            },
            // Error
            function() {
                Cert.showError('Errore chiamata, riprova');
                sendingOTP[key] = false;
            },
            parameters
        );
    }
};
Cert.validaOtp = function(comando, intestatario, codice) {
    var parameters = 'comando=' + comando + '&intestatario=' + intestatario + '&codOtp=' + codice,
        key = comando + intestatario;
    if (typeof validatingOTP[key] === 'undefined') {
        validatingOTP[key] = false;
    }
    if (!validatingOTP[key]) {
        validatingOTP[key] = true;
        // setLoadingOnObject(sezione);
        AJAXGenericCallASync('POST', '/aol/validaOtpCert.do',
            // Success
            function(data) {
                if (data.isEsito) {
                    var vet = data.daCertificare[intestatario - 1];
                    if ('SMS' == comando) {
                        if (vet.cellCertificato) {
                            Cert.showSuccess('VERIFICA CELLULARE COMPLETATA', 'La verifica del cellulare &egrave; stata completata con successo.');
                            Cert.disableVerOtp(comando, intestatario);
//                      } else if (!vet.tentativiCell) {
//                            Cert.showError(errTentativi);
//                            Cert.disableAllBoxVer();
                        } else {
//                          Cert.showError('Il codice di controllo non risulta corretto, riprova.<br>Numero di tentativi rimasti ' + vet.tentativiCell + '.');
                            Cert.showError('Il codice che hai inserito non &egrave; corretto.<br><br>Ti invitiamo a verificarne la correttezza e ad inserirlo nuovamente. In alternativa puoi richiedere l\'invio di un nuovo codice.');
                        }
                    } else if ('MAIL' == comando) {
                        if (vet.mailCertificato) {
                            Cert.showSuccess('VERIFICA EMAIL COMPLETATA', 'La verifica dell\'indirizzo email &egrave; stata completata con successo.');
                            Cert.disableVerOtp(comando, intestatario);
//                        } else if (!vet.tentativiMail) {
//                            Cert.showError(errTentativi);
//                            Cert.disableAllBoxVer();
                        } else {
//                            Cert.showError('Il codice di controllo non risulta corretto, riprova.<br>Numero di tentativi rimasti ' + vet.tentativiMail + '.');
                            Cert.showError('Il codice che hai inserito non &egrave; corretto.<br><br>Ti invitiamo a verificarne la correttezza e ad inserirlo nuovamente. In alternativa puoi richiedere l\'invio di un nuovo codice.');
                        }
                    }
                } else {
                    // TODO errore tecnico
                    // Cert.showError('1065 - Errore non previsto');
                    Cert.showError('Errore chiamata, riprova');
                }
                validatingOTP[key] = false;
            },
            // Error
            function() {
                Cert.showError('Errore chiamata, riprova');
                validatingOTP[key] = false;
            },
            parameters
        );
    }
};
Cert.showError = function(msg) {
    $('#title').html('Attenzione');
    $('#text').html(msg);
    $('#overlayInfo').modal('show');
};
Cert.showSuccess = function(title, msg) {
    $('#title').html(title);
    $('#text').html(msg);
    $('#overlayInfo').modal('show');
};
Cert.disableSendOtp = function(comando, intestatario) {
    var type = comando === 'SMS' ? 'Cell' : 'Email',
        btnEl = $('#boxVer' + type + '_int' + intestatario + ' .sendOtp'),
        boxVer = btnEl.closest('.boxVer');
    btnEl.addClass('disabled');
    boxVer.find('.verOtp').removeClass('disabled');
    boxVer.find('.nota').show();
};
Cert.disableVerOtp = function(comando, intestatario) {
    var type = comando === 'SMS' ? 'Cell' : 'Email';
    Cert.disableBoxVer($('#boxVer' + type + '_int' + intestatario));
};
Cert.disableBoxVer = function(boxVerEl) {
    boxVerEl.find('form .nota').hide();
    boxVerEl.find('form .textinput').prop('disabled', true);
    boxVerEl.find('.modEmail, .modCell, .sendOtp, .verOtp, .completaDopoEmail, .completaDopoCell').addClass('disabled');
};
Cert.disableAllBoxVer = function() {
    $('.boxVer').each(function() {
        Cert.disableBoxVer($(this));
    });
};