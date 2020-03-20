WbAngularApp.controller('P2PGenericController', function($scope, $location, $rootScope, $parse, $controller, $compile) {

	$controller('AngularGenericController', {
		$scope: $scope,
		$location: $location,
		$rootScope: $rootScope,
		$parse: $parse,
		$compile: $compile
	});
	
	$scope.errore = '';
	$scope.erroreGenerico = '';
	$scope.activeNow = false;
	$scope.isChecked = false;
	
	$scope.calcolaContiAttivi = function() {
    	var count = 0;
    	for(var i = 0; i < $scope.listaConti.length; i++) {
    		if($scope.listaConti[i].attivo) {
    			count++;
    		}
    	}
    	$scope.lunghezzaListaContiAttivi = count;
    }
	
	//controlla se l'utente è iscritto al servizio p2p
    $scope.checkP2PAttivo = function() {
    	try {
	    	$('#contenuti').addClass('loading');
	    	var url = cgi_script + '/pda/P2PAction.action',
	    	parameters = {},
	    	successFunc = function (esito) {
	    		if($scope.manageEsito(esito)) {
	    			$scope.listaConti = [];
	    			$scope.isAttivo = esito.p2pAttivo;
	    			$scope.statoRichiesta = esito.statoRichiesta;
	    			if($scope.statoRichiesta == "IN_RICHIESTA")
	    				$scope.inRichiesta = true;
	    			else
	    				$scope.inRichiesta = false;
	    			if($scope.statoRichiesta == "RICHIEDIBILE")
	    				$scope.richiedibile = true;
	    			else
	    				$scope.richiedibile = false;
	    			if($scope.statoRichiesta == "ATTIVABILE")
	    				$scope.attivabile = true;
	    			else
	    				$scope.attivabile = false;
	    			if($scope.statoRichiesta == "ATTIVO") {
	    				$scope.attivo = true;
	    				$scope.hasApp = esito.hasApp;
	    			} else
	    				$scope.attivo = false;
	    			$scope.cellulare = esito.cellulare;
	    			$scope.listaConti = esito.listaConti;
	    			$scope.appenaRichiesto = esito.appenaRichiesto;
	    			if(!$scope.appenaRichiesto)
	    				$("#btnStatoRichiesta").show();
	    			$scope.manageEsito(esito);
	    			if ($scope.listaConti.length > 0){
	    				$scope.isChecked = true;
	    				$scope.fillList();
	    				$scope.placeholderConto = 'Scrivi o seleziona il numero del conto';
	    			}
	    			$scope.setStep(1);
	    			$scope.$apply();
	    			$("#ng-app").show();
	    			$('#contenuti').removeClass('loading');
	    			$scope.initLogic();
	    		} else {
	    			$("#ng-app").show();
		    		$scope.$apply();
		    		$('#contenuti').removeClass('loading');
	    		}
	    	},
	    	failureFunc = function () { 
	    		$scope.erroreGenerico = 'Ti invitiamo a riprovare piu\' tardi.';
	    		$('#contenuti').removeClass('loading');
	    		$("#ng-app").show();
	    	};
	    	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	    } catch(err) {
	    	$scope.erroreGenerico = 'Ti invitiamo a riprovare piu\' tardi.';
	    	$('#contenuti').removeClass('loading');
    		$("#ng-app").show();
		}
    };
    
    //riempie le option per la selezione del conto per gli utenti che ne hanno più di uno
    $scope.fillList = function() {
    	for(var i = 0; i < $scope.listaConti.length; i++) {
    		if($scope.listaConti[i].attivo){
    			var html = '<option value=\'' + $scope.listaConti[i].accountId + '\'>' + $scope.listaConti[i].idToShow + '</option>'
    			$('#numeroConto').append(html);
    		}
    		if($scope.listaConti[i].favourite){
    			$scope.preferito = $scope.listaConti[i].idToShow;
    			$scope.pref = $scope.listaConti[i].accountId;
    		}
    	}
    };
    
    //chiamata al servizio di attivazione p2p
    $scope.attivazione = function() {
    	try {
	    	$scope.clearP2PBoxes();
	    	setLoadingOnObject('contenuti');
	    	var url = cgi_script + '/pda/GestioneP2P.do',
	    	parameters = $('#formAttivazione').serialize(true),	
	    	successFunc = function (esito) {
	    		if($scope.manageEsito(esito)) {
	    			$scope.isAttivo = true;
	    			$scope.activeNow = true;
	    			$scope.listaConti = esito.listaConti;
	    			$scope.isChecked = true;
	    			$scope.initLogic();
	    		}
	    		$scope.$apply();
				unsetLoadingOnObject('contenuti');
	    	},
			failureFunc = function () {
	    		$scope.erroreGenerico = 'Ti invitiamo a riprovare piu\' tardi.';
				unsetLoadingOnObject('contenuti');
			};
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	    } catch(err) {
	    	$scope.erroreGenerico = 'Ti invitiamo a riprovare piu\' tardi.';
			unsetLoadingOnObject('contenuti');
		}
    };
    
    $scope.clearP2PBoxes = function() {
    	$scope.clearErrors();
    	$scope.errore = "";
    	$scope.erroreModifica = "";
    	$scope.erroreParametri = "";
    	$scope.erroreConto = "";
    	$scope.erroreDettaglio = "";
    	$scope.erroreDisattivazione = "";
    	$scope.erroreAnnullato = "";
    	$scope.erroreVerificaPagamento = "";
    	$scope.msgMail = "";
    	$scope.activeNow = false;
    	$scope.disactiveNow = false;
    	$scope.changedSoglie = false;
    	$scope.changed = false;
    	$scope.msgPin = "";
    	$scope.contiModificati = false;
    	$scope.cambioMassimali = false;
    }
    
});
    
    