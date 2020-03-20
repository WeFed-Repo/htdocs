WbAngularApp.controller('P2PMovimentiController', function($scope, $location, $rootScope, $parse, $controller) {

	$controller('P2PGenericController', {
		$scope: $scope,
		$location: $location,
		$rootScope: $rootScope,
		$parse: $parse
	});
	
	$scope.erroreAnnullato = false;
	$scope.lista = [];
	$scope.tbodyMovP2P = null;
	
	$scope.initLogic = function() {
		if($scope.isAttivo) {
			$scope.filtraTransazioni();
		}
		$scope.contestoAttivazione = false;
		$scope.$apply()
	}
	
	var $tbMovP2P = $('#tb-MovP2P');
	
    //recupero delle transazioni in entrata e in uscita (anche pending) dell'utente,
    //i parametri sono i filtri con cui le transazioni verranno recuperate
    $scope.filtraTransazioni = function(fromAnnullo) {
    	$('#contenuti').addClass('loading');
    	$scope.erroreAnnullato == false;
    	if(!fromAnnullo || fromAnnullo === false) {
    		$(".positivo").closest('.errorlayer').remove();
    		$(".attenzione").closest('.errorlayer').remove();
    	}
    	$('#selTutti').attr('checked', false);
    	try {
	    	var url = cgi_script + '/pda/TransazioniP2P.action',
	    	parameters = $("#filtroForm").serialize(),
	    	successFunc = function (esito) {
	    		if($scope.manageEsito(esito)) {
    				$tbMovP2P.bootstrapTable('destroy');
					$scope.tbodyMovP2P = $scope.populateTableBody(esito.listaTransazioni)
					$scope.lista = esito.listaTransazioni;
					if(fromAnnullo && $scope.lista.length > 0) {
						$('#annullamentoOk').modal('show');
					}
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
    
    $scope.populateTableBody = function(listaTransazioni) {
    	$tbMovP2P.bootstrapTable({
	    	data: listaTransazioni,
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
    
    //chiamata a SIA per annullare un pagamento in uscita che si trova in stato pending
    $scope.annullaPagamento = function(idPagamento, telefonoDestinatario, importo) {
    	$('#contenuti').addClass('loading');
    	try {
			var url = cgi_script + '/pda/AnnullaPagamentoP2P.action',
	    	parameters = {
					idPagamento : idPagamento,
					telefonoDestinatario : telefonoDestinatario,
					importo : importo
			},
	    	successFunc = function (esito) {
				if($scope.manageEsito(esito)) {
					$scope.filtraTransazioni(true);
	    		}
				$('#contenuti').removeClass('loading');
	    		$scope.$apply();
	    	},
			failureFunc = function () { 
	    		$('#contenuti').removeClass('loading');
	    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
			};
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	    } catch(err) {
	    	$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
	    	$('#contenuti').removeClass('loading');
		}
    };
    
    //apre l'overlayer per l'invio della mail
    $scope.openLayerInvioMail = function() {
 	   $scope.clearP2PBoxes();
 	   $('#layerSollecitoMail').modal('show');
    }
    
    $scope.inviaMailPagamento = function() {
    	$scope.clearP2PBoxes();
       	var errors = [];
    		if($('#emailRemindPagamento').val() == "") {
    			errors.push({ field: $('#emailRemindPagamento'), text: "Inserire un indirizzo mail" });
    			setErrors(errors, "#formRemindPagamento");
    			ttSet($('#contenuti'));
    		} else {
    	    	$('#emailRemindPagamento').parent().removeClass("errore");
    	    	$('#emailRemindPagamento').removeAttr("data-error");
    	    	var url = cgi_script + '/pda/RemindInvioPagamentoP2P.action',
    	    	parameters = {
    	    			email: $('#emailRemindPagamento').val()
    	    	},
    	    	successFunc = function (esito) {
    	    		if($scope.manageEsito(esito)) {
    	    			$('#formInvioMailPagamento').hide();
    	    			$('#bottonieraMail').hide();
    	    			$('#esitoInvioMailPagamentoOK').show();
    	    			$('#alertInvioMail').hide();
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
    
    $scope.closeLayerInvioMail = function() {
    	$('#layerSollecitoMail').modal('hide');
    	$('#formInvioMailPagamento').show();
    	$('#esitoInvioMailPagamentoOK').hide();
    	$('#alertInvioMail').show();
    	$('#emailRemindPagamento').val('');
    	$scope.clearP2PBoxes();
    }
    
});
    
    