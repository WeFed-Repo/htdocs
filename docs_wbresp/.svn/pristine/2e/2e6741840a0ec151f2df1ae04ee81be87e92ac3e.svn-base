 WbAngularApp.controller('P2PPagamentoController', function($scope, $location, $rootScope, $parse, $controller) {

	$controller('P2PGenericController', {
		$scope: $scope,
		$location: $location,
		$rootScope: $rootScope,
		$parse: $parse
	});
	
	$scope.msgPin = '';
	$scope.msgImporto = "";
	$scope.lista = [];
	$scope.numeriConPrefisso = [];
	$scope.isInRubrica = false;
	$scope.otp = "";
	$scope.selectFromRubrica = true;
	$scope.change = false;
	$scope.isStrong = false;
	
    $scope.initLogic = function() {
    	if($scope.isAttivo) {
			$scope.recuperaRubrica();
			$scope.sendMailDiff=false;
			$scope.calcolaContiAttivi();
		}
    	$scope.contestoAttivazione = false;
    	$scope.$apply()
    };
    
    //chiamata alla funzione di verifica pagamento, controllando inoltre se il beneficiario è iscritto al servizio,
    $scope.verifica = function() {
    	try{
	    	$scope.clearP2PBoxes();
	    	$('#contenuti').addClass('loading');
	    	$scope.beneficiario = "";
		   	var url = cgi_script + '/pda/PagamentoP2P.action',
	    	parameters = $('#form02').serialize(true),
	    	successFunc = function (esito) {
		   		$('#contenuti').removeClass('loading');
	    		if($scope.manageEsito(esito)) { 
	    			if(esito.iscritto == 'N') {
	    				$scope.nonIscritto = true;
	    			} else {
	    				$scope.nonIscritto = false;
	    				$scope.beneficiario = esito.nomeDestinatario;
	    			}
	    			$scope.data = esito.data;
	    			$scope.importo = esito.importo;
	    			$scope.isInRubrica = esito.isInRubrica;
	    			$scope.isStrong = esito.isStrong;
	    			$scope.causale = esito.causale;
	    			if(esito.codeotp) {
		    			$scope.otp = esito.codeotp;
		    		}
	    			$scope.setStep(2);
	    		}
	    		$scope.$apply();
	    	},
	    	failureFunc = function () { 
		   		$('#contenuti').removeClass('loading');
				$scope.errore = true;
			};
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
    	} catch(err) {
 	    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
	   		$('#contenuti').removeClass('loading');
 		}
    };
    
    //recupera la rubrica dell'utente dal sito contrassegnando con p2p i numeri
    //che hanno il servizio p2p attivo per il pagamento online
    $scope.recuperaRubrica = function() {
    	try{
	   		$('#box5ctntab2').addClass('loading');
	    	var url = cgi_script + '/pda/RecuperaRubricaP2P.action',
	    	parameters = {
	    		numeri : 'sito'
	    	},
	    	successFunc = function (esito) {
				if($scope.manageEsito(esito)) {
					$scope.rubrica = esito.rubrica.contatti;
		    		$scope.saldo = esito.saldo;
		    		if($scope.rubrica.length > 0) {
		    			for(var i = 0; i < $scope.rubrica.length; i++) {
		    				$scope.lista[i] = $scope.rubrica[i].nome + " - " + $scope.rubrica[i].prefisso + $scope.rubrica[i].numero;
		    				$scope.numeriConPrefisso[i] = $scope.rubrica[i].prefisso + $scope.rubrica[i].numero;
		    				if($scope.rubrica[i].iscritto == 'Y' || $scope.rubrica[i].p2PAttivo == true) {
		    					$scope.lista[i] = $scope.lista[i] + " - Jiffy attivo";
		    				}
		    			}
		    			$scope.initList();
		    			$scope.placeholderNumeroTelefonico = "scrivi o seleziona il numero di telefono";
		    		} else {
		    			$scope.placeholderNumeroTelefonico = "scrivi il numero di telefono";
		    			$scope.selectFromRubrica = false;
		    		} 
	    			$scope.recuperaResidui();
	    		} else {
	    			$scope.saldo = '-';
	    		}
				$scope.$apply();
		   		$('#box5ctntab2').removeClass('loading');
	    	},
	    	failureFunc = function () {
	    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
		   		$('#box5ctntab2').removeClass('loading');
	    	};
	    	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
    	} catch(err) {
 	    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
	   		$('#box5ctntab2').removeClass('loading');
 		}
    	
    };
    
    //chiamata a SIA per recuperare i residui, giornaliero e mensilie, dell'utente,
    //recupera anche il massimale per la singola transazione
    $scope.recuperaResidui = function() {
    	try {
	   		$('#contenuti').addClass('loading');
	    	var url = cgi_script + '/pda/ListaSoglieP2P.action',
	    	parameters = {},
	    	successFunc = function (esito) {
	    		if($scope.manageEsito(esito)) { 
	    			$scope.conto = esito.conto;
	    			$scope.giornaliero = esito.giornaliero;
	    			$scope.mensile = esito.mensile;
	    			$scope.transazione = esito.maxPayable;
	    		}
	    		$scope.$apply();
		   		$('#contenuti').removeClass('loading');
	    	},
			failureFunc = function () { 
	    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
		   		$('#contenuti').removeClass('loading');
			};
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
    	} catch(err) {
 	    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
	   		$('#contenuti').removeClass('loading');
 		}
    };
    
    //se il beneficiario è preso dalla rubrica toglie il nome con lo split,
    //se il numero è inserito manualmente valorizza semplicemente l'input
    $scope.setNumber = function(ui) {
			if(ui.indexOf("-") != -1) {
				$scope.contattoSelezionato = ui;
				$scope.beneficiario = ui.split(" - ")[0];
				$("#telefonoDestinatario").val(ui.split(" - ")[1]);
				$scope.telefonoBeneficiario = ui.split(" - ")[1];
			} else {
				$scope.contattoSelezionato = "";
				$scope.beneficiario = "";
				$("#telefonoDestinatario").val(ui);
				$scope.telefonoBeneficiario = ui;
			}
			
    };
        
    //riempie le option della select per la rubrica
    $scope.initList = function() {
    	$('#nomepartecipante').autoComplete($scope.lista, {
			selectable: true,
			select : function(event, ui) {
				$scope.setNumber(ui.item.value)
				$scope.$apply();
			}
		});
    };
    
    $scope.validateMail = function() {
    	$('#emailBeneficiario').parent().removeClass("errore");
    	$('#emailBeneficiario').removeAttr("data-error");
    	$scope.clearP2PBoxes();
    	if($('#emailBeneficiario').parent().parent().hasClass("ng-hide") || $('#emailBeneficiario').val().indexOf('@') != -1 || $('#emailBeneficiario').val() == '' || $('#emailBeneficiario').val() == 'Indirizzo email beneficiario' ) {
    		if($scope.hasApp) {
    			$('#btnProsegui').click();
    		} else {
    			$scope.pagamento();
    		}    		
    	} else {
    		var errors = [];
    		errors.push({ field: $('#emailBeneficiario'), text: "L'indirizzo email inserito non &egrave; valido. Verifica e riprova."});
			setErrors(errors, "#formGeneric");
			ttSet($('#contenuti'));
    	}
    }
    
    //chiamata per l'effettua pagamento, controlla anche che il pin32 sia corretto
    $scope.pagamento = function() {
		$('#autorizzazionePush').removeClass('fade');
		$('#autorizzazionePush').modal('hide');
    	try {
			if($('#emailBeneficiario').parent().parent().hasClass("ng-hide") || $('#emailBeneficiario').val().indexOf('@') != -1 || $('#emailBeneficiario').val() == '' || $('#emailBeneficiario').val() == 'Indirizzo email beneficiario' ) {
				if(!$scope.nonIscritto || $('#emailBeneficiario').val() == 'Indirizzo email beneficiario')
					$('#emailBeneficiario').val("");
				$('#contenuti').addClass('loading')
		    	var url = cgi_script + '/pda/ConfermaP2P.action',
		    	parameters = $('#form02').serialize(true),
		    	successFunc = function (esito) {
		    		$('#contenuti').removeClass('loading')
					$('#autorizzazionePush').modal('hide');
		    		if(esito.otp) {
		    			$scope.otp = esito.otp;
		    		}
		    		if($scope.manageEsito(esito)) {
		    			$scope.esitoRub = esito.esitoRub;
		    			$scope.setStep(3);
		    			$scope.clearErrors();
		    		} else {
		    			$scope.setStep(2);
		    		}
		    		if(esito.esito == "ko_alert" && $scope.hasApp) {
						checkPin2Data(esito);
						$('#autorizzazionePush').modal('show');
		    		}
		    		if(!$scope.hasApp) {
		    			$scope.pin2render();
		    		}
		    		$scope.$apply();
		    	},
				failureFunc = function () { 
		    		$('#contenuti').removeClass('loading')
		    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
		    		$scope.pin2render();
				};
				jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
				
			} else {
				errors.push({ field: $('#emailBeneficiario'), text: "L'indirizzo email inserito non &egrave; valido. Verifica e riprova."});
				setErrors(errors, "#formGeneric");
				ttSet($('#contenuti'));
			}
    	} catch(err) {
 	    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
 			$('#contenuti').removeClass('loading')
 		}
    };
	
	function checkPin2Data(esito){
		resetHasErrors('#bloccoGenerazioneManuale');
	    var errors = [];

	    errors.push({ field: $('#codiceotp'), text: esito.info.messaggio });
	    
	    if (errors.length > 0)  {
	      setHasErrors(errors, "#bloccoGenerazioneManuale");
	      return false;
	    }
	    
	    return true;
	  }
    
    $scope.selectConto = function(contoSelezionato) {
    	if($scope.change || contoSelezionato != $scope.conto) {
    		try {
        		$('#contenuti').addClass('loading')
        		var url = cgi_script + '/pda/SelectContoP2P.action',
        		parameters = {
        				idConto: $('#numeroConto').val()
        		},
        		successFunc = function(esito) {
        			if($scope.manageEsito(esito) && esito.esitoCambioConto) {
        				$scope.conto = esito.numeroConto;
        				$scope.saldo = esito.saldo;
        				$scope.change = true;
        			}
        		$scope.$apply();
        		$('#contenuti').removeClass('loading')
        		},
        		failureFunc = function() {
        			$scope.erroreGenerico = 'Ti invitiamo a riprovare piu\' tardi.';
        			$('#contenuti').removeClass('loading')
        		};
        		jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
        	} catch(err) {
        		$scope.erroreGenerico = 'Ti invitiamo a riprovare piu\' tardi.';
        		$('#contenuti').removeClass('loading')
        	}
    	}	
    };
    
    $scope.indietro = function() {
    	$scope.clearP2PBoxes();
    	$scope.sendMailDiff = false;
    	$("#checkMail").prop('checked', false);
    	$('#emailBeneficiario').val("");
    	$('input[name=codiceOTP]').val("");
    	$('#pwd1').val("");
    	$('#pwd2').val("");
    	$scope.setStep(1);
    }

    //controllo che l'importo non violi i vincoli dati dalle soglie e dai residui
    $scope.checkImporto = function () {
    	if($scope.checkFields()) {
	    	try {
		    	$scope.clearP2PBoxes();
		    	var importo = $scope.impor;
		    	importo = importo.replace(",",".");
			   	$scope.verifica();
			   	window.scrollTo(0, 0);
	    	} catch(err) {
	 	    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
	 		}
    	}
    };
    
    $scope.checkFields = function()	{
    	resetHasErrors('#form02');
		var errors = [];
		if($scope.selectFromRubrica) {
			if($('#nomepartecipante').val() == '') {
				errors.push({ field: $('#nomepartecipante'), text: "Selezionare il beneficiario dalla rubrica" });
			}
			if(!$scope.checkIsInRubrica()){
				errors.push({ field: $('#nomepartecipante'), text: "Selezionare il beneficiario dalla rubrica" });
			}
		} else {
			$("#telefonoDestinatario").val($('#telefonopartecipante').val());
			$scope.telefonoBeneficiario = $('#telefonopartecipante').val();
			$scope.beneficiario = $("#nomeInRubrica").val();
			if($('#telefonopartecipante').val() == '') {
				errors.push({ field: $('#telefonopartecipante'), text: "Inserire il numero di telefono del beneficiario" });
			}
		}
		if ($("#importo").val() == '')	{
			errors.push({ field: $('#importo'), text: "Inserire l'importo del pagamento" });
		} else if(parseFloat($scope.impor) > parseFloat($scope.transazione)) {
			errors.push({ field: $('#importo'), text: "Non e' possibile inserire un pagamento con importo superiore a ".concat($scope.transazione).concat(" euro")});
    	} else if(parseFloat($scope.impor) > parseFloat($scope.giornaliero.replace(".","").replace(",","."))) {
    		errors.push({ field: $('#importo'), text: "Il residuo giornaliero non e' sufficiente per effettuare l'operazione"});
    	} else if(parseFloat($scope.impor) > parseFloat($scope.mensile.replace(".","").replace(",","."))) {
    		errors.push({ field: $('#importo'), text: "Il residuo mensile non e' sufficiente per effettuare l'operazione"});
		} else if($scope.saldo != '-' && parseFloat($scope.impor) > parseFloat($scope.saldo.replace(".","").replace(",","."))) {
    		errors.push({ field: $('#importo'), text: "Il saldo disponibile del tuo conto non e' sufficiente per effettuare l'operazione"});
		}
		if (errors.length > 0)	{
			setHasErrors(errors, "#form02");
			return false;
		}
		return true;
    }
    
    $scope.checkIsInRubrica = function() {
    	var finded = false
    	angular.forEach($scope.lista, function(contatto) {
    		if(contatto == $scope.contattoSelezionato) {
    			finded =  true;
    		}
    	});
    	return finded;
    }
    
    $scope.resetCampi = function() {
    	$scope.selectFromRubrica = ! $scope.selectFromRubrica;
    	$("#nomepartecipante").val("");
    	$("#telefonopartecipante").val("");
    	$("#telefonoDestinatario").val("");
    	$("#nomepartecipante").autocomplete("close");
    }
    
    $('#numeroConto').change(function() {
    	$scope.selectConto($(this).val());
    })
    
});
    
    