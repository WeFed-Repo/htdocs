WbAngularApp.controller('P2PConfigurazioneController', function($scope, $location, $rootScope, $parse, $controller) {

	$controller('P2PGenericController', {
		$scope: $scope,
		$location: $location,
		$rootScope: $rootScope,
		$parse: $parse
	});
	
	$scope.costoServizio = '0,75';
	$scope.erroreModifica = '';
	$scope.errore = false;
	$scope.activeNow = false;
	$scope.disactiveNow = false;
	$scope.changed = false;
	$scope.changedSoglie = false;
	$scope.cambioconto = true;
	$scope.step = 1;
	$scope.hasFavourite = true;
	
	//controlla se l'utente è iscritto al servizio p2p
	$scope.initLogic = function() {
		if($scope.isAttivo) {
			$scope.recuperaSoglie();
			$scope.$apply();
			$scope.setCheckbox();
		}
		$('#contestoRichiesta').val("Configurazione");
		$scope.contestoAttivazione = false;
		$scope.$apply();
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
					if($scope.hasFavourite)
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
	}
	
	$scope.modificato = function() {
		$scope.contiModificati = false;
		var arrayContiSerial = $('#checkForm').serializeArray();
		var arrayConti = [];
		var preferito = null;
		var trovato = false;
		var trovatoContesto = false;
		var contiAttivi = [];
		for(var i = 0; i < $scope.listaConti.length; i++) {
			if($scope.listaConti[i].attivo)
				contiAttivi[i] = $scope.listaConti[i].accountId;
		}
		for(var i = 0; i < arrayContiSerial.length; i++) {
			if(arrayContiSerial[i].name == "contestoRichiesta")
				trovatoContesto = true;
			if(arrayContiSerial[i].name == "conti") {
				if(!trovato && !trovatoContesto)
					arrayConti[i] = arrayContiSerial[i].value;
				if(!trovato && trovatoContesto)
					arrayConti[i-1] = arrayContiSerial[i].value
				if(trovato && trovatoContesto)
					arrayConti[i-2] = arrayContiSerial[i].value;
			}	
			if(arrayContiSerial[i].name == "favourite"){
				preferito = arrayContiSerial[i].value;
				trovato = true;
			}		
		}
		var count = 0;
		for(var i = 0; i < $scope.listaConti.length; i++) {
			if($scope.listaConti[i].attivo)
				count++;
		}
		if(arrayConti.length != count){
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
	
	$scope.checkAllUnchecked = function() {
		for(var i = 0; i < $scope.listaConti.length; i++) {
			var checkBox = '#cbx' + i;
			if($(checkBox).prop('checked'))
				break;
		}
		if(i == $scope.listaConti.length) 
			$scope.isChecked = false;
	}
	
	$scope.salva = function () {
		$scope.checkAllUnchecked();
		if(!$scope.isChecked)
			$('#layeralertDisattivaTutto').modal('show');
		else 
			$scope.cambioPreferito();
	}
	
	$scope.mantieniImpostazioni = function() {
		$('#layeralertDisattivaTutto').modal('hide');
	}
	
	$scope.disattivaTutto = function() {
		try {
			$scope.clearP2PBoxes();
			$('#contenuti').addClass('loading')
			$('#layeralertDisattivaTutto').modal('hide');
			var url = cgi_script + '/pda/DisattivaTuttoP2P.action',
			parameters = {},
			successFunc = function(esito) {
				$('#contenuti').removeClass('loading')
				if($scope.manageEsito(esito)) {
					$scope.checkP2PAttivo();
				}
				$scope.appenaDisattivato = true;
				$scope.$apply();
			},
			failureFunc = function() {
				$scope.erroreGenerico = "Non è stato possibile completare l'operazione. Ti invitiamo a riprovare più tardi.";
				$('#layeralertDisattivaTutto').modal('hide');
				$('#contenuti').removeClass('loading')				
			};
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);	
		} catch(err) {
			$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
			$('#contenuti').removeClass('loading')
		}
	}
	
	//disattiva o attiva il servizio P2P su uno o più conti selezionati in base alla check sulla checkbox
	$scope.cambioPreferito = function() {
		$scope.modificato();
		if($scope.contiModificati){
			try {
				$scope.clearP2PBoxes();
				$scope.contiModificati = true;
				$('#contenuti').addClass('loading')
				$scope.listaConti = [];
				var url = cgi_script + '/pda/CambioPreferitoP2P.action',
				parameters = $('#checkForm').serialize(true),
				successFunc = function(esito) {
					$('#contenuti').removeClass('loading')
					if($scope.manageEsito(esito)) {
						$scope.hasFavourite = true;
						$scope.listaConti = esito.listaConti;
						$scope.$apply();
						$scope.setCheckbox();
						$scope.$apply();	
					}	
				},
				failureFunc = function() {
					$scope.erroreGenerico = "Non è stato possibile completare l'operazione. Ti invitiamo a riprovare più tardi.";
					$('#contenuti').removeClass('loading')
				};
				jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
			} catch(err) {
				$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
				$('#contenuti').removeClass('loading')
			}
		}
	}
	
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
	//		orientation: "horizontal",
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
//			orientation: "horizontal",
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
//			orientation: "horizontal",
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
    
    // annulla le modifiche ai valori degli slider riportandole a quelle recuperate da SIA
    $scope.resetSoglie = function() {
    	$scope.clearP2PBoxes();
    	$scope.transazione = $("#maxSingleOld").val();
		$scope.giornaliero = $("#maxGiornoOld").val();
		$scope.mensile = $("#maxMeseOld").val();
		$scope.setSliders();
    }
    
    //chiamata a SIA per recuperare le soglie impostate dall'utente e i massimali imposti dalla banca
    $scope.recuperaSoglie = function() {
    	try {
	    	$('#contenuti').addClass('loading')
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
	    			$('#prevenConfP2P').addClass('loading');
	    			$scope.setSliders();
	    			$('#prevenConfP2P').removeClass('loading');
	    		}
	    		$scope.$apply();
	    		$('#contenuti').removeClass('loading')
	    	},
			failureFunc = function () { 
	    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
	    		$('#contenuti').removeClass('loading')
			};
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	    } catch(err) {
	    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
			$('#contenuti').removeClass('loading')
		}
    };
    
    //chiamata a SIA per la modifica delle soglie impostate dall'utente.
    //viene effettuata solamente se ci sono state effettivamente delle modifiche
    $scope.cambiaSoglie = function() {
    	try {
	    	$scope.clearP2PBoxes();
	    	$scope.cambioMassimali = true;
	    	if(Number($scope.transazione) !=  Number($("#maxSingle").val()) || Number($scope.giornaliero) !=  Number($("#maxGiorno").val()) || Number($scope.mensile) !=  Number($("#maxMese").val())) {
	    		$('#contenuti').addClass('loading');
		    	var url = cgi_script + '/pda/ModificaSoglieP2P.action',
		    	parameters = $('#sliderValues').serialize(true),
		    	successFunc = function (esito) {
		    		if($scope.manageEsito(esito)) { 
		    			$("#maxSingleOld").val($("#maxSingle").val());
		    			$("#maxGiornoOld").val($("#maxGiorno").val());
		    			$("#maxMeseOld").val($("#maxMese").val());
		    			$scope.resetSoglie();
		    			$scope.changedSoglie = true;
		    		}
		    		$scope.$apply();
		    		$('#contenuti').removeClass('loading')
			    },
				failureFunc = function () { 
			    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
			    	$('#contenuti').removeClass('loading')
				};
				jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	    	}
    	} catch(err) {
 	    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
 			$('#contenuti').removeClass('loading')
 		}
    };
	
});
    
    