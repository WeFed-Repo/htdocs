var WbAngularApp = angular.module('WbAngularApp',['timer']);

WbAngularApp.controller('AngularGenericController', function($scope, $location, $rootScope, $parse, $compile) {
	
	$rootScope.$watch(function() {
    	return $location.path();
	},  
	function(newValue, oldValue) {  
		if(newValue != "") {
    		$scope.navigationStep = newValue.substring(1);
		}
   	}, true);
	
	//controllo che vengano inseriti solo numeri
    $scope.onlyNumber = function(event) {
    	var key = event.keyCode;
    	if( !($scope.oldKeyNum == 17 || key == 17 || key > 95 && key < 106 || key > 47 && key < 58 || key == 8 || key == 188 || key == 46)) {
    		event.preventDefault();
    	} else {
    		$scope.oldKeyNum = key;
    	}
    }
    
    //controllo che venga inserito un numero di telefono valido
    $scope.checkNumeroTelefono = function(event) {
    	var key = event.keyCode;
    	if( !($scope.oldKeyTel == 17 || key == 17 || key > 95 && key < 106 || key > 47 && key < 58 || key == 8 || key == 46 || ((key == 107 || key == 187) && $scope.part.length == 0))) {
    		event.preventDefault();
    	} else {
    		$scope.oldKeyTel = key;
    	}
    }
    
    //controllo che venga inserito un numero di telefono valido
    $scope.checkAllowedCharacter = function(event) {
    	 var allowedChars=new Array(' ','A','B','C','D','E','F','G','H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'T', 'S', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 't', 's', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '"', '$', '%', '&', '\'', '(', ')', '*', '+', '-', '.', ';', '<', '=', '>', '?', ',', 'Õ', '/', 'þ');
         var allowedKey=new Array(8,9,10,35,36,37,38,39,40,45,46,47);

         console.log(String.fromCharCode(event.which), event);
    		if ($.inArray(event.keyCode, allowedKey) == -1) {  
   		  		if ($.inArray(String.fromCharCode(event.which), allowedChars) == -1) {
   		  			event.preventDefault();
   		  		}
		   }
    }
    
    $scope.manageEsito = function(esito) {
    	if(esito.esito == 'ko_alert' || (esito.info != undefined && esito.info.esito == 'ko_alert')) {
    		var boxErrore = "erroreGenerico";
    		if(esito.boxErrore) {
    			boxErrore = esito.boxErrore;
    		}
    		var scopeError = $parse(boxErrore);
    		if(esito.hasOwnProperty('info') && esito.info.hasOwnProperty('messaggio')) {
    			var messaggio = esito.info.messaggio;
    		}
    		if(messaggio) {
	    		scopeError.assign($scope, esito.info.messaggio);
    		} else {
    			scopeError.assign($scope, "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.");
    		}
    		return false;
    	}
    	return true;
    };
    
    $scope.setStep = function(numStep) {
    	var step = "/navigationStep" + numStep;
    	$location.path(step);
    }
    
    //generazione del pin32
    $scope.pin2render = function(pinDivId) {
    	try {
	    	if(!pinDivId) {
	    		pinDivId = 'pin2render';
	    	}
	    	var url = cgi_script + '/nsf/Pin2AjaxRender.action?',
	    	parameters = {},
	    	successFunc = function (resp) {
	    		var id = '#' + pinDivId;
	    		$(id).html(resp);
	    	},
	    	failureFunc = function () {
	    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
	    	};
	    	jqAJAXCall('POST', 'html', url, successFunc, failureFunc, parameters);
    	} catch(err) {
    		$scope.erroreGenerico = "Non e' stato possibile completare l'operazione. Ti invitiamo a riprovare piu' tardi.";
    	}
    }
    
    $scope.clearErrors = function() {
    	$scope.erroreGenerico = "";
    }
    
});