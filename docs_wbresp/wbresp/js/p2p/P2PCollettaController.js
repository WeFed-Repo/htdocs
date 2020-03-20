WbAngularApp.controller('P2PCollettaController', function($scope, $q, $location, $controller, $rootScope, $parse, $compile) {

	$controller('P2PGenericController', {
		$scope: $scope,
		$location: $location,
		$rootScope: $rootScope,
		$parse: $parse,
		$compile: $compile
	});
	
	$scope.initVariables = function(){
		$scope.myself = "false";
		$scope.updatePart = false;
		$scope.numPartecipanti = 1;
		$scope.partecipanti = {};
		$scope.participants = [{nome : '', numero : '', email : ''}];
		$scope.erroreDettaglio = "";
		$scope.numeriConPrefisso = [];
		$scope.paniereTB = null;
		$scope.maxTimeUnit = "minute";
	}
	 
	$scope.initLogic = function() {
		if($scope.isAttivo) {
    		$scope.recuperaRubrica();
			$scope.recuperaCollette(false);
			$scope.initVariables();
		}
    	$scope.contestoAttivazione = false;
    	$scope.$apply();
    	clearInputText();
    };
	
    //recupera la rubrica dell'utente dal sito contrassegnando con p2p i numeri
    //che hanno il servizio p2p attivo per il pagamento online
    $scope.recuperaRubrica = function() {
    	var url = cgi_script + '/pda/RecuperaRubricaP2P.action',
    	parameters = {
	    		numeri : 'sito'
    	},
    	successFunc = function (esito) {
    		if($scope.manageEsito(esito)) {
				$scope.rubrica = esito.rubrica.contatti;
	    		if($scope.rubrica.length > 0) {
	    			$scope.lista = [];
	    			for(var i = 0; i < $scope.rubrica.length; i++) {
	    				$scope.lista[i] = $scope.rubrica[i].nome + " - " + $scope.rubrica[i].prefisso + $scope.rubrica[i].numero;
	    				$scope.numeriConPrefisso[i] = $scope.rubrica[i].prefisso + $scope.rubrica[i].numero;
	    				if($scope.rubrica[i].iscritto == 'Y' || $scope.rubrica[i].p2PAttivo == true) {
	    					$scope.lista[i] = $scope.lista[i] + " - Jiffy attivo";
	    				}
	    			}
	    			$scope.placeholderNumeroTelefonico = "scrivi o seleziona il partecipante";
	    			$scope.initList();
	    		} else {
	    			$scope.placeholderNumeroTelefonico = "scrivi il partecipante"
	    		}
    		} 
			$scope.stato = "TUTTI";
			$scope.periodo = "M1";
			$scope.loaded = true;
			unsetLoadingOnObject('divPagamentoP2P');
			$scope.$apply();
    	},
    	failureFunc = function () { 
    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
    	};
    	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
    }
    
    
    var $tbPaniere = $('#tb-paniere');
    
    //recupera da db le collette già create dall'utente
    $scope.recuperaCollette = function(fromAnnullo) {
    	var url = cgi_script + '/pda/SplitCollettaP2P.action',
    	parameters = $("#filtraCollette").serialize(),
    	successFunc = function (esito) {
    		$scope.listaCollette = esito.listaCollette;
    		$tbPaniere.bootstrapTable('destroy');
    		$scope.tbPaniere = $scope.populateTableBody($scope.listaCollette);
			$scope.lista = esito.listaTransazioni;
			if(fromAnnullo && $scope.lista.length > 0) {
				$('#annullamentoOk').modal('show');
			}
			$scope.creatore = esito.creatore;
			if($scope.manageEsito(esito)) { 
    			$scope.loaded = true;
    		}
			$('#contenuti').removeClass('loading');
			$scope.$apply();
    	},
    	failureFunc = function () { 
    		$('#contenuti').removeClass('loading');
    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
		
    	};
    	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
    };
    
    $scope.populateTableBody = function(listaCollette) {
    	$tbPaniere.bootstrapTable({
	    	data: listaCollette,
	    	sortable: true,
	    	sortName: "data",
	    	sortOrder: "desc",
	    	
	    	rowStyle: function(row, index) {
	    		if(index%2 == 0) {
	    			return {
	    				classes: "dispari"
	    			}
	    		} else {
	    			return {
	    				classes: "pari"
	    			}
	    		}
	    	},
	    });
    }
    
    //aggiunta del template per inserire un ulteriore partecipante alla colletta che l'utente sta creando
    $scope.aggiungiPartecipante = function() {
    	$scope.numPartecipanti = $scope.numPartecipanti + 1;
    	$scope.participants.push({nome : '', numero : '', email : ''});
    	$scope.$apply();
    	if($scope.rubrica.length > 0) {
    		$scope.initList();
    	}
    	clearInputText();
    }
    
    //riempie le option della select con i numeri della rubrica
    $scope.initList = function() {
    	$('input[name=partecipante]').eq($('input[name=partecipante]').length - 1).autoComplete($scope.lista, {
			selectable: true,
			close: function(event, ui) {
				$scope.setParticipantData($(event.target).closest( ".bloccoDebitore" ).prevAll( ".bloccoDebitore" ).length);
				$scope.$apply();
			}
		});
    }
    
    $scope.addMySelf = function() {
    	if($scope.myself == "false") {
    		$scope.myself = "true";
    		$scope.numPartecipanti = $scope.numPartecipanti + 1;
    	} else {
    		$scope.myself = "false";
    		$scope.numPartecipanti = $scope.numPartecipanti - 1;
    	}
    	$scope.$apply();
    }
    
    //rimozione del template e dei dati del partecipante alla colletta, che l'utente sta creando, che si vuole eliminare
    $scope.rimuovi = function(num) {
    	$scope.participants.splice(num , 1);
    	$scope.numPartecipanti = $scope.numPartecipanti - 1;
    }

    //controllo dei dati obbligatori per la creazione della colletta
    //serialize della form per calcolare l'importo e mantenere la lista dei partecipanti,
    //set del navigationstep2 per cambiare la parte di pagina visualizzata
    $scope.nextStep = function() {
    	$scope.clearP2PBoxes();
    	$('#tb-paniere_errorlayer').remove();
    	var campiMancanti = $scope.checkParametriColletta();
    		if(!campiMancanti) {
    			$('#contenuti').addClass('loading')
		    	var url = cgi_script + '/pda/SplitCollettaStep1P2P.action',
		    	parameters = $("#formColletta").serialize(),
		    	successFunc = function (esito) {
		    		if($scope.manageEsito(esito)) { 
		    			$scope.loaded = true;
		    			$scope.dovuto = esito.dovuto;
		    			$scope.nomecolletta = esito.nomecolletta;
		    			$scope.importototale = esito.importototale.replace(".","");
		    			$scope.riepilogo = esito.listaPartecipanti;
		    			$scope.setStep(2);
		    		} 
		    		window.scrollTo(0, 0);
			    	$('#contenuti').removeClass('loading');
			    	$scope.$apply();
		    	},
		    	failureFunc = function () { 
		    		$('#contenuti').removeClass('loading');
		    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
				
		    	};
		    	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	    	}
    	}
    
    //riempimento automatico del numero di telefono e della mail all'interno del template d'inserimento del partecipante
    //nel caso in cui quest'ultimo venga scelto dalla rubrica
    $scope.setParticipantData = function(index) {
    	var value = $($('input[name=partecipante]')[index]).val();
		$scope.participants[index].numero = '';
		$scope.participants[index].nome = value.split(" - ")[0];
		$scope.participants[index].numero = value.split(" - ")[1];
		if(value.split(" - ")[2] != undefined && !value.split(" - ")[2] == "Jiffy attivo") { 
			$scope.participants[index].email = value.split(" - ")[2];
		}
		$scope.$apply();
		$('input[name=partecipante]').val("");
		$('input[name=partecipante]').val($scope.participants[index].nome);
    }
    
    //riporto il navigatore al navigationStep1 che è la pagina di creazione della collette,
    //se il check di myself è attivo decremento il numero dei partecipanti
    $scope.indietro = function() {
    	$scope.clearP2PBoxes();
    	$scope.removeErroreCampiMancanti();
    	$scope.setStep(1);
    	window.scrollTo(0, 0);
    }
    
    //se l'utente conferma la colletta dopo il riepilogo setto il navigatore al navigationStep3
    //chiamo il backend per il salvataggio della colletta e dei partecipanti su db
    $scope.confermaColletta = function() {
    	$scope.clearP2PBoxes();
    	var url = cgi_script + '/pda/InsertSplitCollettaP2P.action',
    	parameters = {},
    	successFunc = function (esito) {
    		if($scope.manageEsito(esito)) { 
    			$scope.idColletta = esito.idColletta;
    			$('#idColletta').val($scope.idColletta);
    			$scope.loaded = true;
    			$scope.riempiListaPartecipanti(esito.dettaglio.partecipanti);
    			$scope.importoricevuto = esito.importoricevuto;
    			$scope.importodaricevere = esito.importodaricevere;
    		}
			$scope.permettiAnnullo = true;
			$scope.setStep(3);
			$scope.$apply();
			ttSet($('#contenuti'));
			for(var i = 0; i < esito.dettaglio.partecipanti.length; i++) {
				var indiceAttesa = "#attesa" + i;
		    	var indiceFatto = "#fatto" + i;
				if(numeTmp.pagamentoEffettuato == 'N') {
					$(indiceFatto).addClass('off');
					$(indiceFatto).removeClass('onOk');
					$(indiceAttesa).addClass('onKo');
    			} else if(numeTmp.pagamentoEffettuato == 'Y') {
    				$(indiceAttesa).addClass('off');
    				$(indiceAttesa).removeClass('onKo');
    				$(indiceFatto).addClass('onOk');
    			}
			}
			window.scrollTo(0, 0);
			initTooltip();
    	},
    	failureFunc = function () { 
    		$('#contenuti').removeClass('loading');
    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
		
    	};
    	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
    }
    
    //viene chiamata, se la colletta non è completa, dalla lista delle collette,
    //oppure nel navigationStep3 appena è stata creata cliccando sul tasto annulla
    $scope.annullaColletta = function(numColletta) {
    	$scope.clearP2PBoxes();
    	$scope.collettaDaEliminare = numColletta;
    	$('#mySelf').prop('checked', false);
    	$('#layeralertAnnullo').modal('show');
    }
    
    $scope.confermaAnnulloColletta = function() {
    	$('#contenuti').addClass('loading')
    	$('#layeralertAnnullo').modal('hide');
    	$scope.permettiAnnullo = false;
    	var url = cgi_script + '/pda/DeleteSplitCollettaP2P.action',
    	parameters = {
    			idColletta : $scope.collettaDaEliminare
    	},
    	successFunc = function (esito) {
    		if($scope.manageEsito(esito)) { 
    			$scope.loaded = true;
    		}
			$scope.recuperaCollette(true);
			$scope.initVariables();
			$scope.setStep(1);
			$('#importoTotale').val('');
			$('#nomeColletta').val('');
			$scope.$apply();
			$('#contenuti').removeClass('loading');
    	},
    	failureFunc = function () { 
    		$('#contenuti').removeClass('loading');
    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
		
    	};
    	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
    }
    
    //cliccando sul nome della colletta mostra il riepilogo della colletta
    $scope.dettaglioColletta = function(numColletta) {
    	$scope.clearP2PBoxes();
    	var url = cgi_script + '/pda/DetailSplitCollettaP2P.action',
    	parameters = {
    			idColletta : numColletta
    	},
    	successFunc = function (esito) {
    		if($scope.manageEsito(esito)) {
    			var numeTmp;
    			$('#idColletta').val(esito.dettaglio.id);
    			$scope.loaded = true;
    			$scope.myself = false;
    			$scope.nomecolletta = esito.dettaglio.nomeColletta;
    			$scope.importototale = esito.dettaglio.importoTotale;
    			// da sostituire con esito.dettaglio.partecipanti[].importoPagato
    			$scope.importoricevuto = esito.dettaglio.importoPagato;
    			$scope.importodaricevere = esito.dettaglio.importoDaRicevere;
    			// da inserire controllo se "esito.dettaglio.partecipanti.length" è vuoto 
    			$scope.numPartecipanti = esito.dettaglio.partecipanti.length;
    			$scope.riempiListaPartecipanti(esito.dettaglio.partecipanti);
    		}
			$scope.permettiAnnullo = false;
			$scope.setStep(3);
			$scope.$apply();
			ttSet($('#contenuti'));
			var partecipanti = $scope.riepilogoColletta;
			for(var i = 0; i < partecipanti.length; i++) {
				var indiceAttesa = "#attesa" + i;
		    	var indiceFatto = "#fatto" + i;
				numeTmp = partecipanti[i];
				var idTimerBox = 'timerBox' + i;
				$scope.noTimer = true;
				if(numeTmp.remindAllowed) {
					$('#'+idTimerBox).html('<a class="btn-icon" href="javascript:;" ng-click="openPopMail(\'' + numeTmp.email + '\', \'' + numeTmp.progressivo + '\', \'' + i + '\', \'' + true + '\')"><i class="icon icon-2x icon-mail_ria_outline"></i></a>');
				} else if(!numeTmp.remindAllowed && numeTmp.countdown && numeTmp.countdown > 1) {
    				$scope.noTimer = false;
    				$('#'+idTimerBox).html('<span data-tooltip="Potrai inviare una nuova mail di invito alla colletta allo scadere del tempo"><timer countdown="' + numeTmp.countdown + '" interval="1000" finish-callback="dettaglioColletta(\'' + numeTmp.splitId + '\')"> Attendi <br/> {{mminutes}} : {{sseconds}}</timer></span>');
    			} else if(!numeTmp.remindAllowed && numeTmp.pagamentoEffettuato == 'N') {
    				$scope.noTimer = false;
					$('#'+idTimerBox).html('<span data-tooltip="Potrai inviare una nuova mail di invito alla colletta allo scadere del tempo"><timer countdown="125" interval="1000" finish-callback="dettaglioColletta(\'' + numeTmp.splitId + '\')"> Attendi <br/> {{mminutes}} : {{sseconds}}</timer></span>');
				} else {
					$('#'+idTimerBox).html('');
				}
				if(numeTmp.pagamentoEffettuato == 'N') {
					$(indiceFatto).removeClass('swtActive');
					$(indiceAttesa).addClass('swtActive');
    			} else if(numeTmp.pagamentoEffettuato == 'Y') {
    				$(indiceFatto).addClass('swtActive');
    				$(indiceAttesa).removeClass('swtActive');
    			}
				$compile( document.getElementById(idTimerBox) )($scope);
			}
			if(!$scope.updatePart && !$scope.isTimer) {
				window.scrollTo(0, 0);
			}
			initTooltip();
    	},
    	failureFunc = function () { 
    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
		
    	};
    	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
    }
    
    //crea l'array dei partecipanti sia dopo l'inserimento della colletta che dopo il click sul dettaglio
    $scope.riempiListaPartecipanti = function(listaEsito) {
    	$scope.riepilogoColletta = [];
    	for(var i = 0; i < listaEsito.length; i++) {
    		numeTmp = listaEsito[i];
    		if(numeTmp.creatoreColletta == 'Y') {
    			$scope.myself = true;
    			$scope.importoCreatore = numeTmp.importoPagato;
    		} else {
	    		$scope.riepilogoColletta.push(numeTmp);
    		}
    	}
    }
    
    //se lo stato del pagamento viene cambiato manualmente dall'utente cambia lo stato e l'importo pagato su db
    $scope.cambiaStatoDebitore = function(utente, pagato) {
    	$scope.clearP2PBoxes();
    	utente.importoPagato = pagato;
    	var url = cgi_script + '/pda/UpdateSplitParticipantP2P.action',
    	parameters = {
    			progressivo : utente.progressivo,
    			pagamentoEffettuato : pagato
    	},
    	successFunc = function (esito) {
    		if($scope.manageEsito(esito)) {
    			$scope.updatePart = true;
    			$scope.dettaglioColletta(utente.splitId);
    		}
    	},
    	failureFunc = function () { 
    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
		
    	};
    	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
    }

    //controllo sui campi obbligatori nella creazione della colletta
    $scope.checkParametriColletta = function() {
    	var errors = [];
    	resetHasErrors('#formColletta');
    	var campiMancanti = false;
    	if($('#importoTotale').val() == "") {
			errors.push({ field: $('#importoTotale'), text: "Inserire l'importo della colletta" });
			campiMancanti = true;
    	}
    	if($('#nomeColletta').val() == "") {
			errors.push({ field: $('#nomeColletta'), text: "Inserire il nome della colletta" });
			campiMancanti = true;
    	} 
		$('input[name=partecipante]').each(function(index, value) {
			if( $(this).val() == "") {
				errors.push({ field: $(this), text: "Inserire il nome del partecipante" });
				campiMancanti = true;
			}
		});
		$('input[name=numero]').each(function(index, value) {
			if( $(this).val().length > 15) {
				errors.push({ field: $(this), text: "Telefono partecipante superiore a 15 cifre" });
				campiMancanti = true;
			}
		});
		$('input[name=email]').each(function(index, value) {
			if( $(this).val().length > 0 && $(this).val().indexOf('@') < 0) {
				errors.push({ field: $(this), text: "Indirizzo email non valido" });
				campiMancanti = true;
			}
		});
		if(errors.length > 0) {
			setHasErrors(errors, "#formColletta");
		}
		return campiMancanti;
   };
   
   $scope.removeErroreCampiMancanti = function() {
		$('#importoTotale').parent().removeClass("errore");
		$('#importoTotale').removeAttr("data-error");
		$('#nomeColletta').parent().removeClass("errore");
		$('#nomeColletta').removeAttr("data-error");
		$('input[name=partecipante]').each(function(index, value) {
			$(this).parent().removeClass("errore");
			$(this).removeAttr("data-error");
		});
   }
   
   //apre l'overlayer per l'invio della mail
   $scope.openPopMail = function(mail, progressivo, ind, isTimer) {
	   $scope.clearP2PBoxes();
	   $scope.indice = ind;
	   $scope.isTimer = isTimer;
	   if(mail != "undefined")
		   $('#emailRemind').val(mail);
	   $('#progressivo').val(progressivo);
	   $('#layeralert3').modal('show');
   }
   
   //chiude l'overlayer per l'invio della mail e sostituisce l'indirizzo mail in pagina
   $scope.closePopMail = function(number) {
	   $('#layeralert3').modal('hide');
	   var idEmail = 'emailCliente' +  $scope.indice;
	   $('#'+idEmail).next().html('<span class="output">' +  $('#emailRemind').val() + '</span>');
	   $('#formInvioMail').show();
	   $('#esitoInvioOK').hide();
	   $scope.$apply();
   }
   
   //controlla che il campo email sia compilato, chiama l'invio della mail e fa partire il timer per quel partecipante
   $scope.inviaMail = function() {
   	$scope.clearP2PBoxes();
   	var errors = [];
		if($('#emailRemind').val() == "") {
			errors.push({ field: $('#emailRemind'), text: "Inserire un indirizzo mail" });
			setErrors(errors, "#formRemind");
			ttSet($('#contenuti'));
		} else {
	    	$('#emailRemind').parent().removeClass("errore");
	    	$('#emailRemind').removeAttr("data-error");
	    	var url = cgi_script + '/pda/RemindSplitParticipantP2P.action',
	    	parameters = $('#formRemind').serialize(true),
	    	successFunc = function (esito) {
	    		if($scope.manageEsito(esito)) {
	    			var idTimerBox = 'timerBox' + $scope.indice;
	    			$('#'+idTimerBox).html('<span data-tooltip="Potrai inviare una nuova mail di invito alla colletta allo scadere del tempo"><timer countdown="125" interval="1000" finish-callback="dettaglioColletta(utente.splitId)"> Attendi <br/> {{mminutes}} : {{sseconds}}</timer></span>');
	    			$compile( document.getElementById(idTimerBox) )($scope);
	    			$('#formInvioMail').hide();
	    			$('#btnmodal').hide();
	    			$('#esitoInvioOK').show();
	    		} 
	    		$scope.$apply();
	    	},
	    	failureFunc = function () { 
	    		$scope.msgMail = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
	    		$scope.$apply();
	    	};
	    	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	    }
   }
   
});
    
    