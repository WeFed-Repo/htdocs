WbAngularApp.controller('P2PActivationRequestController', function($scope, $location, $rootScope, $parse, $controller) {

	$controller('P2PGenericController', {
		$scope: $scope,
		$location: $location,
		$rootScope: $rootScope,
		$parse: $parse
	});
	
	$scope.costoServizio = '0,75';
	$scope.attivabile = false;
	$scope.inRichiesta = false;
	$scope.richiedibile = false;
	$scope.step = 1;
	
	$scope.initLogic = function() {
		$scope.setCheckbox();
		$('#contestoRichiesta').val("PrimaAttivazione");
		$scope.contestoAttivazione = true;
		$scope.isChecked = false;
		$scope.$apply();
	}
	
	$scope.modificato = function() {
		$scope.contiModificati = false;
		var arrayContiSerial = $('#checkForm').serializeArray();
		var arrayConti = [];
		var preferito = null;
		var trovato = false;
		var contiAttivi = [];
		for(var i = 0; i < $scope.listaConti.length; i++) {
			if($scope.listaConti[i].attivo == "true")
				contiAttivi[i] = $scope.listaConti[i].accountId;
		}
		for(var i = 0; i < arrayContiSerial.length; i++) {
			if(arrayContiSerial[i].name == "conti") {
				if(!trovato)
					arrayConti[i] = arrayContiSerial[i].value;
				else
					arrayConti[i-1] = arrayContiSerial[i].value;
			}	
			if(arrayContiSerial[i].name == "favourite") {
				preferito = arrayContiSerial[i].value;
				trovato = true;
			}		
		}
		var count = 0;
		for(var i = 0; i < $scope.listaConti.length; i++) {
			if($scope.listaConti[i].attivo == "true")
				count++;
		}
		if(arrayConti.length != count) {
			if(preferito != null)
				$scope.pref = preferito;
			$scope.contiModificati = true;
		}
		else {
			for(var i = 0; i < arrayConti.length; i++) {
				if($.inArray(arrayConti[i], contiAttivi) == -1 || $.inArray(contiAttivi[i], arrayConti) == -1) {
					$scope.contiModificati = true;
					break;
				}	
			}
			if(preferito != null && preferito != $scope.pref){
				$scope.pref = preferito;
				$scope.contiModificati = true;
			}
				
		}
	}
	
	$scope.setCheckbox = function() {
		var fav = false;
		for(var i = 0; i < $scope.listaConti.length; i++) {
			var checkbox = '#cbx' + i;
			var radioButton = '#' + i;
			if($scope.listaConti[i].attivo){
				$(checkbox).prop("checked", true);
				$(radioButton).show();
				if($scope.listaConti[i].favourite) {
					$(radioButton).prop("checked", true);
					$scope.hasFavourite = true;
					$scope.pref = $scope.listaConti[i].accountId;
					fav = true;
				}
			}
			else{
				$(checkbox).prop("checked", false);
				$(radioButton).hide();
			}
		}
		if(!fav)
			$scope.hasFavourite = false;
	}
	
	//nel caso in cui si disattivi la funzionalità p2p sul conto preferito, viene spostata la preferenza sul primo disponibile
	$scope.attivaDisattivaPreferito = function (idCheck) {
		var check = '#cbx' + idCheck;
		var radiocheck = '#' + idCheck;
		var count = 0;
		var uncheck = 0;
		if($(check).prop('checked')) {
			$(radiocheck).show();
			for(var i = 0; i < ($scope.listaConti.length); i++) {
				var checkFor = '#cbx' + i;
				var checkRadioFor = '#' + i;
				if($(checkFor).prop('checked') && !$scope.isChecked) {
					$(checkRadioFor).prop("checked", true);
					$scope.isChecked = true;
					break;
				}
			}
		} else {
			if($(radiocheck).prop('checked')) {
				$(radiocheck).prop("checked", false);
				while(count != -1 && count < ($scope.listaConti.length) && $scope.isChecked) {
					var checkWhile = '#cbx' + count;
					var radioCheckWhile = '#' + count;
					if($(checkWhile).prop('checked')) {
						$(radioCheckWhile).prop("checked", true);
						count = -1;
					} else 
						count = count + 1;
				}
			if (count == ($scope.listaConti.length)) 
				$scope.isChecked = false;
			}
			else {
				uncheck++;
			}
			$(radiocheck).hide();
		}
		if(uncheck == $scope.listaConti.length)
			$scope.isChecked = false;
		if($scope.isChecked) {
			$('#btnAttivazioneDis').hide();
			$('#btnAttivazione').show();
		} else {
			$('#btnAttivazione').hide();
			$('#btnAttivazioneDis').show();
		}
	}
	
	var buttonGlobal;
	
	$scope.creaPush = function(button) {
		var url = cgi_script + '/banking/P2PActivationSendPush.action',
		parameters = $('#formrichiesta1').serialize(true),
		successFunc = function(esito) {
			if(esito.code == 'ok') {
				$scope.hasApp = esito.hasApp;
				if($scope.hasApp) {
					$('#btnProsegui').click();
				}
				else 
					$scope.prosegui1($('#btnProsegui'));
			}
		},
		failureFunc = {};
		jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
		$('#conferma').attr('class', 'btn btn-primary');
	}
	
	function pin2render(id) {
		var url = cgi_script + '/nsf/Pin2AjaxRender.action?',
		parameters = {},
		successFunc = function (resp) {
			$('#' + id).html(resp);
		},
		failureFunc = function () {};
		jqAJAXCall('POST', 'html', url, successFunc, failureFunc, parameters);
		$('#conferma').attr('class', 'btn btn-primary');
	}
	
	function checkPin2Data(esito){
		resetHasErrors('#bloccoGenerazioneManuale');
	    var errors = [];

	    errors.push({ field: $('#codiceotp'), text: esito.messaggio });
	    
	    if (errors.length > 0)  {
	      setHasErrors(errors, "#bloccoGenerazioneManuale");
	      return false;
	    }
	    
	    return true;
	  }
	
	$scope.prosegui1 = function(button) {
		$('#autorizzazionePush').removeClass('fade');
		$('#autorizzazionePush').modal('hide');
		buttonGlobal = button;
		$('#errorsSection').hide();
		do_preValidations();
		if(checkInformativa()) {
			$('#boxrichiesta').addClass("loading");
			var url = cgi_script + '/banking/P2PActivationRequestConfirm.action',
			parameters = $('#formrichiesta1').serialize(true),
			successFunc = function (esito) {
				$('#boxrichiesta').removeClass("loading");
				$('#autorizzazionePush').modal('hide');
				if (esito.esito == 'ko_alert')  {
					if($scope.hasApp) {
						checkPin2Data(esito);
						$('#autorizzazionePush').modal('show');
					} else {
						addValidationError("noField",esito.info.messaggio,true);
						pin2render();
						$('#errorsSection').prependTo('#formrichiesta1');
						$('#errorsSection').show();
						setElementonView($('#errorsSection'));
					}
				} else if (esito.code == 'ko') {
					disableForm($('#btnProsegui'),'contformrichiesta');
					$('#btnProsegui1').hide();
					stepRichiesta($(buttonGlobal),false);
					$('#contformrichiesta').hide();
					$('#contformrichiestaRiepilogo').show();
					$('#pin32Div').hide();
					$('#contformrichiesta4').show();
					$('#contoRiepilogo').html(esito.contoRiepilogo);
					$('#noteRiepilogo').html(esito.noteRiepilogo);
					if(esito.noteRiepilogo == '' || esito.noteRiepilogo == 'facoltativo'){
						$('#divNoteRiepilogo').hide();
					}
				} else {
					$('#boxrichiesta').removeClass("loading");
					disableForm($('#btnProsegui'),'contformrichiesta');
					$('#btnProsegui1').hide();
					stepRichiesta($(buttonGlobal),false);
					$('#contformrichiesta').hide();
					$('#contformrichiestaRiepilogo').show();
					$('#icoSpuntaInutile').show();
					$('#contformrichiestaRiepilogo').show();
					$('#pin32Div').hide();
					$('#accordionCarteStep1').removeClass("editable");
					$('#accordionCarteStep1').addClass("done");
					$('#accordionCarteStep2').removeClass("disabled");
					$('#accordionCarteStep2').addClass("done");
					$('#headerCarteStep2').addClass("panel-selected");
					$('#collapseCarteStep2').addClass("in");
					$('#contformrichiesta3').show();
					$scope.contoRiepilogo = esito.contoRiepilogo;
					if(esito.noteRiepilogo == '' || esito.noteRiepilogo == 'facoltativo'){
						$('#divNoteRiepilogo').hide();
					}
					$scope.validitaDocumento = (esito.docVailido == "valido"); 
					if(esito.docVailido == "valido") 
						$scope.validitaDocumento = true;
					else
						$scope.validitaDocumento = false;
					$scope.$apply();
				}
			},
			failureFunc = function () { 
				$('#boxrichiesta').removeClass("loading");
				disableForm($('#btnProsegui'),'contformrichiesta');
				$('#btnProsegui1').hide();
				stepRichiesta($(buttonGlobal),false);
				$('#pin32Div').hide();
				$('#contformrichiesta4').show();
			};
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
		}
	}
	
	$scope.cambioPreferito = function(button) {
			try {
					buttonGlobal = button;
					$scope.clearP2PBoxes();
					$('#contenuti').addClass("loading");
					$scope.listaConti = [];
					var url = cgi_script + '/pda/CambioPreferitoP2P.action',
					parameters = $('#checkForm').serialize(true),
					successFunc = function(esito) {
						$('#contenuti').removeClass("loading");
						if($scope.manageEsito(esito)) {
							$scope.hasFavourite = true;
							$scope.listaConti = esito.listaConti;
							$scope.$apply();
							$scope.setCheckbox();
							$('#contenuti').removeClass("loading");
							$('#btnAttivazione').hide();$('#btngroup').hide();
							stepRichiesta($(buttonGlobal),false);
							$('#checkAttivo').show();
							$('#massimali').show();
							$('#accordionCarteStep6').removeClass("editable");
							$('#accordionCarteStep6').addClass("done");
							$('#accordionCarteStep7').removeClass("disabled");
							$('#accordionCarteStep7').addClass("unclosable");
							$('#headerCarteStep2').addClass("panel-selected");
							$('#headerCarteStep7').addClass("panel-selected");
							$('#collapseCarteStep7').addClass("in");
							$scope.recuperaSoglie();
							for(var i = 0; i < $scope.listaConti.length; i++) {
								var check = "#cbx" + i;
								var radio = "#" + i;
								$(check).attr('disabled', true);
								$(radio).attr('disabled', true);
							}
						}
						$scope.$apply();
							
					},
					failureFunc = function() {
						$scope.erroreGenerico = "Non è stato possibile completare l'operazione. Ti invitiamo a riprovare più tardi.";
						$('#contenuti').removeClass("loading");
					};
					jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
				} catch(err) {
					$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
					$('#contenuti').removeClass("loading");
				}
			}	
	
	$scope.checkAllUnchecked = function() {
		for(var i = 0; i < $scope.listaConti.length; i++) {
			var checkBox = '#cbx' + i;
			if($(checkBox).prop('checked'))
				break;
		}
		if(i == $scope.listaConti.length) 
			$scope.isChecked = false;
	}
	
	$scope.recuperaSoglie = function() {
    	try {
	    	setLoadingOnObject('contenuti');
	    	var url = cgi_script + '/pda/ListaSoglieP2P.action',
	    	parameters = {},
	    	successFunc = function (esito) {
	    		if($scope.manageEsito(esito)) { 
	    			$scope.conto = esito.conto;
	    			$scope.soglieIniziali = esito.listaSoglie;
	    			for(var i = 0; i < $scope.soglieIniziali.length; i++) {
	    				if($scope.soglieIniziali[i].tipoSoglia == "SP") {
	    					$scope.transazione = $scope.soglieIniziali[i].valoreSoglia;
	    				} else if ($scope.soglieIniziali[i].tipoSoglia == "G") {
	    					$scope.giornaliero = $scope.soglieIniziali[i].valoreSoglia;
	    				} else if ($scope.soglieIniziali[i].tipoSoglia == "M") {
	    					$scope.mensile = $scope.soglieIniziali[i].valoreSoglia;
	    				}
	    			}
	    			for(var i = 0; i < esito.listaRangeSoglie.length; i++) {
	    				if(esito.listaRangeSoglie[i].sogliaMinima.tipoSoglia == "SP") {
	    					$scope.minTransazione = esito.listaRangeSoglie[i].sogliaMinima.valoreSoglia;
	    					$scope.maxTransazione = esito.listaRangeSoglie[i].sogliaMassima.valoreSoglia;
	    				} else if (esito.listaRangeSoglie[i].sogliaMinima.tipoSoglia == "G") {
	    					$scope.minGiornaliero = esito.listaRangeSoglie[i].sogliaMinima.valoreSoglia;
	    					$scope.maxGiornaliero = esito.listaRangeSoglie[i].sogliaMassima.valoreSoglia;
	    				} else if (esito.listaRangeSoglie[i].sogliaMinima.tipoSoglia == "M") {
	    					$scope.minMensile = esito.listaRangeSoglie[i].sogliaMinima.valoreSoglia;
	    					$scope.maxMensile = esito.listaRangeSoglie[i].sogliaMassima.valoreSoglia;
	    				}
	    			}
	    			$scope.setSliders();
	    		}
	    		$scope.$apply();
	    		unsetLoadingOnObject('contenuti');
	    	},
			failureFunc = function () { 
	    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
	    		unsetLoadingOnObject('contenuti');
			};
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	    } catch(err) {
	    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
			unsetLoadingOnObject('contenuti');
		}
    };
	
	$scope.setSliders = function() {
    	var attualeTransazione = $scope.transazione;
    	attualeTransazione = attualeTransazione.replace('.','');
    	var attualeGiorno = $scope.giornaliero;
    	attualeGiorno = attualeGiorno.replace('.','');
    	var attualeMese = $scope.mensile;
    	attualeMese = attualeMese.replace('.','');
    	var minTransazione = $scope.minTransazione;
    	minTransazione = minTransazione.replace('.','');
    	var maxTransazione = $scope.maxTransazione;
    	maxTransazione = maxTransazione.replace('.','');
    	var minGiornaliero = $scope.minGiornaliero;
    	minGiornaliero = minGiornaliero.replace('.','');
    	var maxGiornaliero = $scope.maxGiornaliero;
    	maxGiornaliero = maxGiornaliero.replace('.','');
    	var minMensile = $scope.minMensile;
    	minMensile = minMensile.replace('.','');
    	var maxMensile = $scope.maxMensile;
    	maxMensile = maxMensile.replace('.','');
    	var confP2PSlider = $("#confP2PSliderTransizione").sliderPlus ({
			min: parseInt(minTransazione),
			max: parseInt(maxTransazione),
			value: parseInt(attualeTransazione),
			step: $scope.step,
			create: function(event, ui) {
				$('#minTransazione').html(minTransazione);
				$('#maxTransazione').html(maxTransazione);
				$('#confVal1').text(attualeTransazione);
				$('#maxSingle').val(attualeTransazione);
				$('#maxSingleOld').val(attualeTransazione);
			},
			slide: function(event,ui) {
				$('#confVal1').text(ui.value);
				$('#maxSingle').val(ui.value);
			},
			change :  function(event,ui) {
				$('#confVal1').text(ui.value);
				$('#maxSingle').val(ui.value);
			}
			
		})
		var confP2PSlider2 = $("#confP2PSliderGiornaliero").sliderPlus ({
			min: parseInt(minGiornaliero),
			max: parseInt(maxGiornaliero),
			value: parseInt(attualeGiorno),
			step: $scope.step,
			create: function(event, ui) {
				$('#minGiornaliero').html(minGiornaliero);
				$('#maxGiornaliero').html(maxGiornaliero);
				$('#confVal2').html(attualeGiorno);
				$('#maxGiorno').val(attualeGiorno);
				$('#maxGiornoOld').val(attualeGiorno);
			},
			slide: function(event,ui) {
				$('#confVal2').html(ui.value);
				$('#maxGiorno').val(ui.value);
			},
			change :  function(event,ui) {
				$('#confVal2').html(ui.value);
				$('#maxGiorno').val(ui.value);
			}
		})
		var confP2PSlider3 = $("#confP2PSliderMensile").sliderPlus ({
			min: parseInt(minMensile),
			max: parseInt(maxMensile),
			value: parseInt(attualeMese),
			step: $scope.step,
			create: function(event, ui) {
				$('#minMensile').html(minMensile);
				$('#maxMensile').html(maxMensile);
				$('#confVal3').text(attualeMese);
				$('#maxMese').val(attualeMese);
				$('#maxMeseOld').val(attualeMese);
			},
			slide: function(event,ui) {
				$('#confVal3').text(ui.value);
				$('#maxMese').val(ui.value);
			},
			change :  function(event,ui) {
				$('#confVal3').text(ui.value);
				$('#maxMese').val(ui.value);
			}
		})
    }
	
	$scope.resetSoglie = function() {
    	$scope.clearP2PBoxes();
    	$scope.transazione = $("#maxSingleOld").val();
		$scope.giornaliero = $("#maxGiornoOld").val();
		$scope.mensile = $("#maxMeseOld").val();
		$scope.setSliders();
    }
    
    //chiamata a SIA per la modifica delle soglie impostate dall'utente.
    //viene effettuata solamente se ci sono state effettivamente delle modifiche
    $scope.cambiaSoglie = function() {
    	try {
	    	$scope.clearP2PBoxes();
	    	if(Number($scope.transazione) !=  Number($("#maxSingle").val()) || Number($scope.giornaliero) !=  Number($("#maxGiorno").val()) || Number($scope.mensile) !=  Number($("#maxMese").val())) {
	    		$("#contenuti").addClass('loading');
		    	var url = cgi_script + '/pda/ModificaSoglieP2P.action',
		    	parameters = $('#sliderValues').serialize(true),
		    	successFunc = function (esito) {
		    		if($scope.manageEsito(esito)) { 
		    			$("#maxSingleOld").val($("#maxSingle").val());
		    			$("#maxGiornoOld").val($("#maxGiorno").val());
		    			$("#maxMeseOld").val($("#maxMese").val());
		    			$scope.resetSoglie();
		    			$scope.changedSoglie = true;
		    			$scope.$apply();
			    		$("#contenuti").removeClass('loading');
			    		$('#boxrichiestaattivabile').hide();
			    		$('#appenaAttivato').show();
			    		$('#appenaAttivatoButton').show();
		    		} else {
			    		$("#contenuti").removeClass('loading');
		    			$scope.$apply();
		    		}
		    		
			    },
				failureFunc = function () { 
			    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
			    	$("#contenuti").removeClass('loading');
				};
				jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	    	}
    	} catch(err) {
 	    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
 	    	$("#contenuti").removeClass('loading');
 		}
    };
	
});