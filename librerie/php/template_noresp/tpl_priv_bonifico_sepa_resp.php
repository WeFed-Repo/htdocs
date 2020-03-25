<h1 id="id_label">Bonifico Ordinario</h1>
<div class="fooform fooform_tit" id="id_aggiorna" style="display:none;"></div>
<br class="clear">
<!-- === it.weservice.WsBonifici_1:WsTransfers1 === { -->
<script type="text/javascript" src="/wscmn/js/Fiscal&VatCode.js"></script>
<script>
	var isLibrerie = true;
	var showCostruisciIban = true;
	var tipoBonifico = 'SEPA';
	var tipoBeneficiario = 'NEW';
	var fisrt =true;
	var firstvalue=false;
	var sepaCountries = new Array("BE","BG","CY","DK","DE","EE","FI","FR","GR","GI","GB","IE","IS","IT","LV","LI","LT","LU","MT","MC","NL","NO","AT","PL","PT","RO","SM","SE","CH","SK","SI","ES","CZ","HU");
	
	var lista_Iban_ord = new Array('IT52O0340201749000000083891');
	
	function setIban_ord() {
		var  idxC = 0;
		var  ibanId_ord = document.getElementById('IbanId_ord');
		ibanId_ord.innerHTML = lista_Iban_ord[idxC];
	}
	
	
	function setSepa() {
		var oldTipo = tipoBonifico;
		tipoBonifico = $("input:radio[name=tipoBonifico]:checked").val();
		if(tipoBonifico == 'ESTERO') {
			var naz = $("#nazioneBonificoEstero").val();
			var isSepa = false;
			if(naz == '') {
				isSepa = true;
			} else {
				for(var i = 0 ; i < sepaCountries.length ; i++) {
					if(sepaCountries[i] == naz) {
						isSepa = true;
					}
				}
			}
			if(isSepa == true) {
				var divisa = $("#divisaSelect").val();
				if(divisa && divisa == 'EUR') {
					tipoBonifico = 'SEPA';
				}
			}
		}
		var newTipo = tipoBonifico;
		return oldTipo != newTipo;
	}
	
	function setBban_ben() {
		var  ibanId = document.DATI.ibanId_ben.value;
		var  cin = ibanId.substr( 4, 1);
		var  abi = ibanId.substr( 5, 5);
		var  cab = ibanId.substr(10, 5);
		var  con = ibanId.substr(15);
		var  cod = ibanId.substring(0,2);
	
		document.DATI.cod.value = cod;
		document.DATI.cin.value = cin;
		document.DATI.abi.value = abi;
		document.DATI.cab.value = cab;
		document.DATI.numconto.value = con;
	}
	
	function setIban_ben() {
		var abi = document.DATI.abi.value;
		var cab = document.DATI.cab.value;
		var con = document.DATI.numconto.value;
		var cod = document.DATI.cod.value;
		if(abi != null && abi.length > 0 && cab != null && cab.length > 0 && con != null && con.length > 0){
			var url = cgi_script + '/banking/WsIbanGetPut.do?format=json&',
			parameters =  "cod="+ cod + '&abi=' + abi + '&cab=' + cab + '&numconto=' + con,
			successFunc = function (json) {
				manageIban(json.iban);
			},
			failureFunc = function (json) {
				//alert('esito ko : ');
			};				
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);				
		} 
	}
	
	
	//     callback di ritorno dalla WsIbanGetPut
	function manageIban(iban) {
		if ( showCostruisciIban == false ) {
				document.DATI.ibanId_ben.value = iban;
		}
	// alimenta il cin
		if ( iban.length>4 ) {
			document.DATI.cin.value = iban.substring(4,5);
		}
		document.DATI.cod.value = iban.substring(0,2);
	}
	
	
	function visualizzaListaBeneficiari() {
		with (document.DATI) {
			action = '/webankpri/wbOnetoone/2l/do/banking/recipients/WsPreRecipientsList.do';
			OBSCNT.value = 'TAB';
			forwardto.value = '';
			preBenef.value = 'Yes';
			keep.value = 'Yes';
			submit();
		}
	}
	
		 function visualizzaListaBeneficiariRistrutt() {
		with (document.DATI) {
			 action = '/webankpri/wbOnetoone/2l/do/banking/recipients/WsPreRecipientsListRistrutt.do';
			 OBSCNT.value = "TAB";
			 forwardto.value = '';
			 preBenef.value='Yes';
			 keep.value = 'Yes';
			 submit();
		}
		 }
	
	function openInfo() {
		var newwindow = window.open( '/webankpri/banking/webank/WsHelpIban.jsp?cf=0.887305136301199','IBAN_INFO','scrollbars=no,resizable=yes,width=590,height=450,status=no,location=no,toolbar=no');
	}
	
		  function callSubmit(salvaBozza) {
		
			if ( salvaBozza ) {
				document.DATI.action = '/webankpri/wbOnetoone/2l/do/banking/WsBonificoSepaConfirm.do';
				document.DATI.keep.value = 'Yes';
				document.DATI.submit();
			}
			
	}
	
		  function eseguiModifiche() {
		vai('INVIA1');
	}
	
		  function back() {
		document.BACK.submit();			
	}
		  
	function vai2() {
		var bic = $('#bicLayer').val();
		var causale = $('#causaleVal').val();
		$('#ErroriValidazione').hide();
		$('#bulletPoints').html('');
		var toSubmit = true;
		if(causale == '' || causale == 'undefined') {
			$('#bulletPoints').append('<li>Scegliere una causale valutaria</li>');
			$('#ErroriValidazione').show();
			toSubmit = false;
		}
		if(bic == '' || bic == 'undefined') {
			$('#bulletPoints').append('<li>Campo BIC vuoto</li>');
			$('#ErroriValidazione').show();
			toSubmit = false;
		}
		if(toSubmit == true) {
			unobscurateEl('oscuratore');
			closeAlert('layeralert');
			document.DATILAYER.submit();
		}
	}
	
	function vai3() {
		var bic = $('#bicLayer').val();
		var causale = $('#causaleVal').val();
		$('#ErroriValidazione').hide();
		$('#bulletPoints').html('');
		var toSubmit = true;
		if((causale == '' || causale == 'undefined') && (bic == '' || bic == 'undefined')) {
			$('#bulletPoints').append('<li>Per proseguire &egrave; necessario indicare la causale valutaria e il codice Bic</li>');
			$('#ErroriValidazione').show();
			toSubmit = false;
		} else {
			if(causale == '' || causale == 'undefined') {
				$('#bulletPoints').append('<li>Per proseguire &egrave; necessario indicare la causale valutaria</li>');
				$('#ErroriValidazione').show();
				toSubmit = false;
			}
			if(bic == '' || bic == 'undefined') {
				$('#bulletPoints').append('<li>Per proseguire &egrave; necessario indicare il codice Bic</li>');
				$('#ErroriValidazione').show();
				toSubmit = false;
			}
		}
		if(toSubmit == true) {
			$('#bicBOE').val($('#bicLayer').val());
			$('#causaleValBOE').val($('#causaleVal').val());
			unobscurateEl('oscuratore');
			closeAlert('layeralert');
			document.DATIBOE.submit();
		}
	}
	
	function annulla(layerID) {
		$('#ErroriValidazione').hide();
		$('#bulletPoints').html('');
		unobscurateEl('oscuratore');
		closeAlert(layerID);
	}
	
	function checkImporti() {
		var importo = formattaNumeriInput($('#iImporto').val());
		var balance = formattaNumeriInput($('#balanceValue').attr('value'));
		importo = parseFloat(importo);
		balance = parseFloat(balance);
		return importo > balance;
	}
	
	function checkImportoMax() {
		
			var importo = formattaNumeriInput($('#iImporto').val());
			var max = formattaNumeriInput($('#impMassimo').attr('value'));
			importo = parseFloat(importo);
			max = parseFloat(max);
			return importo > max;
		
	}
	
	function checkSepaMax() {
		var importo = formattaNumeriInput($('#iImporto').val());
		var sepaMax = '9999999';
		importo = parseFloat(importo);
		max = parseFloat(sepaMax);
		return importo > max;
	}
	
	function checkEsteroMax() {
		var importo = '';
		if($('#divisaSelect option:selected').val() == 'EUR') {
			importo = $('#iImporto').val();
		} else {
			importo = formattaNumeriInput($('#controValoreValue').html());
		}
		var esteroMax = parseFloat('50000');
		var max = formattaNumeriInput($('#impMassimo').attr('value'));
		max = parseFloat(max);
		if(max < 50000) {
			esteroMax = max;	
		}
		importo = parseFloat(importo);
		return importo > esteroMax;
	}
	
	function checkData() {
		var data = $('#datepicker').val();
		var today = '01/09/2014';
		return data == today;
	}
	
	var skipCheckData = false; 
	
	function callAjaxSepa() {
		setLoadingOnObject('contenuti',null,null,null);
		document.DATI.sepa.value = tipoBonifico;
		var url = cgi_script + '/banking/ControlloSepa.do',
		parameters = $( '#formDati' ).serialize( true ),
		successFunc = function (resp) {
			$('#bodyLayer').html(resp);
			skipCheckData = false;
		},
		failureFunc = function () { 
			unsetLoadingOnObject('contenuti');
			alert('Errore generico, riprovare più tardi.')
		};
		jqAJAXCall('POST', 'html', url, successFunc, failureFunc, parameters);
	}
	
	function validationImpl() {
		if(tipoBonifico == 'SEPA') {
			if(true && cleanStringSepa($('input[name="causale"]'))) {
				addValidationError('causale', "Sono stati rimossi dei caratteri non accettati dal campo Causale, si prega di contrallarne il valore attuale.", true);
			} else if (cleanStringSepa($('input[name="benef"]'))) {
				addValidationError('benef', "Sono stati rimossi dei caratteri non accettati dal campo Beneficiario, si prega di contrallarne il valore attuale.", true);
			} else if(checkImportoMax()) {
				var imp = $('#impMassimo').attr('value');
				addValidationError('importo', "HTML_Non &egrave; possibile inserire un bonifico con importo superiore a " + imp + ".  Se lo desideri, puoi <a href=/webankpri/wbOnetoone/2l/do/banking/WsDerogaImportoMax0.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_modif_importo_max&OBSKEY3=nav_priv_wbx_modif_importo_max&cf=0.7916549077620277>modificare l'importo massimo</a>.", true);
			} else if((checkImporti() || checkSepaMax()) && checkData()) {
				if (checkSepaMax()) {
					var imp = '9.999.999,00 &euro;';
					addValidationError('importo', 'Non &egrave; possibile inserire l\'operazione con data di esecuzione odierna, perch&eacute; l\'importo del bonifico &egrave; superiore al massimo importo disponibile per i bonifici SEPA: ' + imp, true);
				} else if (checkImporti()) {
					var imp = $('#balanceValue').attr('value') + ' &euro;';
					addValidationError('importo', 'Non &egrave; possibile inserire l\'operazione con data di esecuzione odierna, perch&eacute; l\'importo del bonifico &egrave; superiore al saldo disponibile. Modifica l\'importo oppure seleziona un\'altra data. Per quella data ricordati di integrare il saldo.', true);
				}
			}
		} else {
			if(checkEsteroMax()) {
				var imp = '50.000,00';
				addValidationError('importo', 'HTML_Non &egrave; possibile inserire online un bonifico estero in area extra Sepa con un importo superiore a ' + imp + ' &euro;. Per farlo scarica il <a href="/webankpri/wbOnetoone/2l/do/wbOnetoone/schedaModulisticaOffline.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=Modulistica_sportello&OBSKEY3=Modulistica_sportello&cf=0.24033999006206386"> modulo di richiesta</a> e spediscilo tramite fax al numero 02 43450599.', true); 
			}
		}
	}
		
	function vai(nomePuls) {
		if($("input:radio[name=tipoBonifico]:checked").val() == 'SEPA' && tipoBeneficiario == 'NEW') {
			setIban_ben();
		}
		document.DATI.forwardto.value = '';
		if ( nomePuls == 'INVIA1AI' ) {
			unobscurateEl('oscuratore');
			closeAlert('layeralertImporto');
			skipCheckData = true;
			nomePuls = 'INVIA1';
		}
		if ( nomePuls == 'INVIA1' ) {
			var  okToSubmit = false;
			if (doValidations(validationImpl)) {
				if(checkImporti() && !checkData() && !skipCheckData) {
					obscurateEl(5, 'contenuti', 'oscuratore', 'darkLayer');
					openAlertOnEl('contenuti','layeralertImporto');
				} else {
					callAjaxSepa();	
				}					
			}
		} else if ( nomePuls=='INVIARistrutt' ) {
			if ( doValidations(validationImpl, [false, true]) ) {
				document.DATI.action = '/webankpri/wbOnetoone/2l/do/banking/WsTransfersRistruttSummary.do';
				okToSubmit = true;
			}
		} else if ( nomePuls=='back' ) {
			document.DATI.action = '/webankpri/wbOnetoone/2l/do/banking/WsTransfersRistruttPrelim.do';
			document.DATI.keep.value = 'Yes';
			okToSubmit = true;
		} else {
			document.DATI.action = '/webankpri/wbOnetoone/2l/do/banking/WsBonificoSepaInput.do';
			document.DATI.keep.value = 'Yes';
			okToSubmit = true;
		}
	
		if ( okToSubmit ) { document.DATI.submit(); }
	}
	
			var listaContiMigrati = new Array('00599 - 0000083891 - EUR');
	
			function aggiornaSaldoECondizioni() {
				var account = document.DATI.idconto;
				var data = document.DATI.data_acc;
				setIban_ord();
				cercaSaldo(account.value, data.value);
			}
			
			function limiteDeroga() {
			  
		var accountDeroga = document.DATI.idconto;
		if(accountDeroga.value != null && accountDeroga.value.length > 0){
			var url = isLibrerie? '/librerie/include/commons/ajax/sportello/WsGetDeroga.php' : cgi_script + '/banking/WsGetDeroga.do',
			parameters =  "account="+ accountDeroga.value,
			successFunc = function (json) {
				$('#impMassimo').attr('value',json.importoDeroga);
				$('#impMassimo').html(json.importoDeroga + ' &euro; <a href="/webankpri/wbOnetoone/2l/do/banking/WsDerogaImportoMax0.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_modif_importo_max&OBSKEY3=nav_priv_wbx_modif_importo_max&cf=0.3568513523367255">modifica</a>' );
			},
			failureFunc = function (json) {
				alert('esito ko : ' + json.error);
			};				
			jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);				
		} 
			  
	}
			
			function selezionaDaRubrica(){
				$(document.DATI.benef).val($("#selectRubrica option:selected").attr("rubricaIntestazione"));
				$(document.DATI.emailBeneficiario).val($("#selectRubrica option:selected").attr("rubricaemail"));
			$(document.DATI.ibanId_ben).val($("#selectRubrica option:selected").attr("rubricaIban"));
			$(document.DATI.cod).val($("#selectRubrica option:selected").attr("rubricaNazione"));
			if($(document.DATI.cod).val() == '' && (tipoBonifico == 'SEPA')){
				$(document.DATI.cod).val('IT');
			}
			$("#note_benLabel").html($("#selectRubrica option:selected").attr("rubricaNote"));
			$("#ibanId_benLabel").html($("#selectRubrica option:selected").attr("rubricaIban"));
			$("#ibanId_benHidden").val($("#selectRubrica option:selected").attr("rubricaIban"));
			if( (tipoBonifico != 'SEPA') && (tipoBeneficiario == 'RUB' )){
				if($(document.DATI.benef).val() != '') {	
				if($("#selectRubrica option:selected").attr("rubricaBic") != ""){
					$("#box_bic").show();
				} else {
					$("#box_bic").hide();
				}
				$("#bic_benLabel").html($("#selectRubrica option:selected").attr("rubricaBic"));
				$("#bicHidden").val($("#selectRubrica option:selected").attr("rubricaBic"));
				$("#conto_benLabel").html($("#selectRubrica option:selected").attr("rubricaConto"));
				$("#esterocontoHidden").val($("#selectRubrica option:selected").attr("rubricaConto"));				
				$("#all_benBox").show();
				$("#nazione_benBox").show();
				if($("#selectRubrica option:selected").attr("rubricaIban") == ''){
					$("#ibanId_benBox").hide();
					$("#conto_benBox").show();
				} else {
					$("#ibanId_benBox").show();
					$("#conto_benBox").hide();
				}
				if($("#note_benLabel").html() != ''){
						$("#note_benBox").show();	
					} else {
						$("#note_benBox").hide();
					}
				}
			} else {	     	
				if($("#selectRubrica option:selected").attr("rubricaIban")==''){     	  	 
					$("#note_benBox").hide();
					$("#all_benBox").hide();
				} else {
					$("#all_benBox").show();
					if($("#note_benLabel").html() != ''){
						$("#note_benBox").show();	
					} else {
						$("#note_benBox").hide();
					}    	  		
				}
			}
				
		}
			
			function datiBeneficiarioShow(show, hasChanged, firstvalue) {
				var nazioneB = '';
				if($("input:radio[name=tipoBonifico]:checked").val() == 'SEPA'){
					nazioneB = $("#nazioneBonificoItalia").val();
				}else {
					nazioneB = $("#nazioneBonificoEstero").val();
					changeControValore();
				}
				var url = isLibrerie? '/librerie/include/commons/ajax/sportello/ChangeDatiBeneficiario.php' : cgi_script + '/banking/ChangeDatiBeneficiario.do',
		parameters = {
						tipoRadio : $("input:radio[name=tipoBonifico]:checked").val(),
				tipoBonifico : tipoBonifico,
				nazioneBon : nazioneB,
				tipoBeneficiario : tipoBeneficiario,
				cf : '0.5346148609394794'
		},
		successFunc = function (resp) {
			$('#datiBeneficiario').html(resp);
			if(!show){
				selezionaDaRubrica(); 	       	  	
			}
			if(hasChanged) {
				if(document.DATI.ibanId_ben) {
					document.DATI.ibanId_ben.value = '';
				}
				if(document.DATI.numconto) {
					document.DATI.numconto.value = '';
				}
			}
			//necessario per farci resettare i campi dopo la prima volta che facciamo la chiamata
			if(fisrt || firstvalue) {
				fisrt=false;
			}else{ 
				resettaCampi();
			}
		},
		failureFunc = function () {};
		jqAJAXCall('POST', 'html', url, successFunc, failureFunc, parameters);
			}
		
	
		  function nuovoBeneficiario(show) {  
			if(show) {
				$(document.DATI.fromRubrica).val(false);
				tipoBeneficiario = 'NEW';
			} else {
				$(document.DATI.fromRubrica).val(true);
				tipoBeneficiario = 'RUB';
			}        	 	
			destinazioneBonifico(show);
		   }  
		  
		  function senzaBeneficiari() {  
			$(document.DATI.fromRubrica).val(false);
		tipoBeneficiario = 'NEW';		    
		datiBeneficiarioShow(true, false,true);	
		first=true;
		  }   
		 
		   
		  function resettaCampi(){
				$("#selectRubrica").val('');
				$("#selectRubricaInput").val('');
				selezionaDaRubrica();  
		  }
		   
	//          nuove funzioni
		   
		   function mostraAggiungiDaRubrica(show){        	  
			  if(show){
				$('#aggiungiDaRubrica').show();        	  	
			  }else{
				$('#aggiungiDaRubrica').hide();	  
			  } 
			}
			
		  
		   function destinazioneBonifico(show) {
			 var type = $("input:radio[name=tipoBonifico]:checked").val();
			   if(type == 'SEPA') {
					$('#nazioneBonificoEstero').val('');
					$('#nazioneBonificoEstero').attr("disabled","disabled");
					$('#nazioneBonificoItalia').removeAttr("disabled");
				$('.italy').show();
				$('.world').hide();
				 } else {
					
					$('#nazioneBonificoItalia').attr("disabled","disabled");
					$('#nazioneBonificoEstero').removeAttr("disabled");
					$('.world').show();
					$('.italy').hide();
				
				 }
			   var hasChanged = setSepa();
			 if(tipoBonifico == 'SEPA'){
				 $('#dataTooltip').hide();
				 $('#outputDatePicker').hide();
				 $('.ui-datepicker-trigger').show();
				 $('#datepicker').show();
			 } else {
				 $('#dataTooltip').show();
				 $('#dataTooltip').attr("data-tooltip","Per i bonifici esteri in area extra Sepa non &egrave; possibile indicare la data di esecuzione.");
				 $('.ui-datepicker-trigger').hide();
				 $('#datepicker').hide();
				 $('#outputDatePicker').show();
				 changeControValore();
				 $('.showCostruisciIban').hide();
			}
			datiBeneficiarioShow(show, hasChanged,false);
		   }
	
		   function showAltriCampiIban(){
			 if(showCostruisciIban==true){
				 $('.showCostruisciIban').show();	
				 showCostruisciIban=false;
			 } else {
				 $('.showCostruisciIban').hide();
				 showCostruisciIban = true;
			 }        	  
		   }
		   
		   function esteroIbanConto(show){
			if(show == 'iban'){
					$('#esteroConto').attr("disabled","disabled");
					$('#esteroConto').addClass("disabled");
					$('#esteroConto').val("");
					$('#esteroIban').removeClass("disabled");
					$('#esteroIban').removeAttr("disabled");       		
				} else {
					$('#esteroIban').attr("disabled","disabled");
					$('#esteroIban').addClass("disabled");
					$('#esteroIban').val("");
					$('#esteroConto').removeClass("disabled");
					$('#esteroConto').removeAttr("disabled");
				}
		   }
	
		   function changeControValore() {
			 if($('#divisaSelect option:selected').val() == 'EUR') {
				 $('#controValore').hide();
			 } else {
				 $('#controValore').show();
				 var cambio = $('#divisaSelect option:selected').attr('cambio');
				 var importo = formattaNumeriInput($('#iImporto').val());
				 var totale = formattaNumeriOutput(parseFloat(importo/cambio).toFixed(2));
				 $('#controValoreValue').html(totale);
				 $('#controValoreValueInput').val(totale);
			 }
		   }
		   
		   function controllaBenef(){
			var idval = $('#checkBenef').attr("checked");
			if(idval){
				$(document.DATI.checkBenefparam).val("on");        		
			} else {
				$(document.DATI.checkBenefparam).val("");        		
			}        
		   }
		   
		   var allowedChars=new Array(' ','A','B','C','D','E','F','G','H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'T', 'S', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 't', 's', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '"', '$', '%', '&', '\'', '(', ')', '*', '+', '-', '.', ';', '<', '=', '>', '?', ',', 'Õ', '/', 'þ');
		   var allowedKey=new Array(8,9,10,35,36,37,38,39,40,45,46,47);
	
			 function cleanCharSepa(event){
			if ($.inArray(event.keyCode, allowedKey)!=-1) {  
					return true;
				}
				if ($.inArray(String.fromCharCode(event.which), allowedChars)==-1) {
				   return false;
			   }
			   return true;
			 }
			 
			 function cleanStringSepa(obj) {   			
				var newValue="";
				var foundWrongCharacters = false;
				for(i=0;i<$(obj).val().length;i++) {
					value=$(obj).val().charAt(i);
					if ($.inArray(value, allowedChars)!=-1) {
						newValue+=value;
					} else {
						foundWrongCharacters = true;
					}
				}
				$(obj).val(newValue);
				return foundWrongCharacters;
			  }
		   
		
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#iImporto').keypress(cleanImport);	
		
		$('input[name="causale"]').keypress(cleanCharSepa);
		$('input[name="causale"]').bind('change',function(){cleanStringSepa(this);});	
		$('input[name="causale"]').bind('focus',function(){cleanStringSepa(this);});
		$('input[name="causale"]').bind('blur',function(){cleanStringSepa(this);});
				
	});	
</script>
<!-- sezione "Errori form" -->
<table class="text01">
	<tbody>
		<tr>
			<td>
				<ul>
					<li>In questa pagina puoi disporre bonifici verso l&#8217;Italia e l&#8217;estero.
					</li>
					<li><strong>Costo dell&#8217;operazione</strong> per bonifici in<strong>
						euro</strong> in <strong>Italia</strong> e in <a href="javascript:openPopOverLayer('layerSepa', 'floating', 1);">area Sepa</a> :  
						gratis<br>
					</li>
					<li>Per i bonifici in <strong>valuta diversa
						dall&#8217;euro</strong> o verso <strong>Paesi</strong> in area <strong>extra
						Sepa</strong> <span class="txthelp" data-tooltip="<strong>BONIFICO IN AREA EXTRA SEPA<br>O IN VALUTA DIVERSA DELL'EURO</strong><br><br>Le commissioni sono suddivise tra ordinante e beneficiario.<br>L'importo a carico del beneficiario non &egrave; noto al momento dell'inserimento del bonifico.<br>Nel caso si rendesse necessario l'intervento di banche intermediarie, queste potrebbero addebitare ulteriori <strong>commissioni</strong>, da loro stabilite, a <strong>carico</strong> dell'<strong>ordinante</strong>.<br><br>Per maggiori informazioni sulle commissioni a carico dell'ordinante consulta i Fogli Informativi."><strong>verifica
						le commissioni</strong></span>
					</li>
					<li>
						<strong>Se vuoi effettuare un bonifico a favore di un beneficiario non presente in rubrica,</strong>
						<span class="txthelp" data-tooltip="Per sicurezza, ti invieremo un <b>Sms</b> con un <b>codice di controllo</b> al numero 321*****22: dovrai inserirlo online per concludere l'operazione."><strong> tieni a portata di mano il tuo cellulare</strong></span>
					</li>
				</ul>
			</td>
		</tr>
	</tbody>
</table>
<!-- === org.apache.jsp.banking.errorsSection_jsp === { -->
<div id="errorsSection" style="display: none;">
	<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" border="0" alt="" /></div>
	<div class="boxtxt">
		<p class="box_mess">
			<img src="/wscmn/img/ico2inf_errorform.gif" border="0" alt="" class="dx" />
			<img src="/img/ret/box_attenzione.jpg" border="0" alt="" />
			<strong id='error_box'></strong>						
		</p>
		<br />
		<ul class="alert" id="errorMessages">
		</ul>
		<br class="clear"/>
	</div>
	<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" border="0" alt="" /></div>
	<br class="clear"/>
</div>
<script type="text/javascript">
	var subtitle = 'Errata compilazione form';
</script>
<!-- } === org.apache.jsp.banking.errorsSection_jsp === -->
<!--  NuovoBonifico: START  -->
<form name="DATI" id="formDati"
	action="/webankpri/wbOnetoone/2l/do/banking/WsBonificoSepaSummary.do">
	<input name="tabId"	type="hidden"	value="nav_priv_wbx_sportello" />
	<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_bonifico_ordinario" />
	<input name="OBSKEY3"	type="hidden"	value="" />
	<input name="OBSCNT"	type="hidden"	value="" />
	<input name="cf"	type="hidden"	value="0.8696076619719765" />
	<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
	<input name="siglaAzione"	type="hidden"	value="" />
	<input name="forwardto" type="hidden" value="" /> <input name="keep"
		type="hidden" value="" /> <input name="preBenef" type="hidden"
		value="" /> <input name="fromRubrica" type="hidden"
		value="false" /> <input name="sepa" type="hidden" value="" />
	<div class="tithelp">
		<div class="helpleft">Dati bonifico</div>
		<br class="clear">
	</div>
	<div class="borderFormRounded margBottomLarge">
		<div class="formGeneric">
			<div>
				<span class="nomefield" id="destinazioneBon">Destinazione bonifico*</span>
				<div class="row-fluid">
					<div class="span6">
						<div class="row-fluid">
							<div class="span2">
								<label>
								<input type="radio" value="SEPA"	name="tipoBonifico"	checked="checked" onclick="destinazioneBonifico(true)">Italia
								</label> 
								<input	type="hidden" name="nazioneBonifico" id="nazioneBonificoItalia"	value="IT"	>
							</div>
							<div class="span4">
								<label class="flLeft"><input type="radio" value="ESTERO"
									name="tipoBonifico" 
									onclick="destinazioneBonifico(true)"><span class="flLeft">Altri
								Paesi</span> 
								</label>
							</div>
							<div class="span6">
								<select name="nazioneBonifico"
									disabled
									id="nazioneBonificoEstero" onchange="destinazioneBonifico(true)"
									>
									<option value="">seleziona Paese</option>
									<optgroup label="Area Sepa">
										<option value="AT"	>Austria</option>
										<option value="BE"	>Belgio</option>
										<option value="BG"	>Bulgaria</option>
										<option value="CY"	>Cipro</option>
										<option value="DK"	>Danimarca</option>
										<option value="EE"	>Estonia</option>
										<option value="FI"	>Finlandia</option>
										<option value="FR"	>Francia</option>
										<option value="DE"	>Germania</option>
										<option value="GI"	>Gibilterra</option>
										<option value="GR"	>Grecia</option>
										<option value="IE"	>Irlanda</option>
										<option value="IS"	>Islanda</option>
										<option value="LV"	>Lettonia</option>
										<option value="LI"	>Liechtenstein</option>
										<option value="LT"	>Lituania</option>
										<option value="LU"	>Lussemburgo</option>
										<option value="MT"	>Malta</option>
										<option value="MC"	>Monaco</option>
										<option value="NO"	>Norvegia</option>
										<option value="NL"	>Olanda</option>
										<option value="PL"	>Polonia</option>
										<option value="PT"	>Portogallo</option>
										<option value="GB"	>Regno Unito</option>
										<option value="CZ"	>Rep. Ceca</option>
										<option value="RO"	>Romania</option>
										<option value="SM"	>San Marino</option>
										<option value="SK"	>Slovacchia</option>
										<option value="SI"	>Slovenia</option>
										<option value="ES"	>Spagna</option>
										<option value="SE"	>Svezia</option>
										<option value="CH"	>Svizzera</option>
										<option value="HU"	>Ungheria</option>
									</optgroup>
									<optgroup label="Area extra Sepa">
										<option value="AF"
											>Afghanistan
										</option>
										<option value="AL"
											>Albania
										</option>
										<option value="DZ"
											>Algeria
										</option>
										<option value="AD"
											>Andorra
										</option>
										<option value="AO"
											>Angola
										</option>
										<option value="AI"
											>Anguilla
										</option>
										<option value="AQ"
											>Antartide
										</option>
										<option value="AG"
											>Antigua e Barbuda
										</option>
										<option value="AN"
											>Antille Olandesi
										</option>
										<option value="SA"
											>Arabia Saudita
										</option>
										<option value="AR"
											>Argentina
										</option>
										<option value="AM"
											>Armenia
										</option>
										<option value="AW"
											>Aruba
										</option>
										<option value="AU"
											>Australia
										</option>
										<option value="AZ"
											>Azerbaigian
										</option>
										<option value="BS"
											>Bahamas
										</option>
										<option value="BH"
											>Bahrein
										</option>
										<option value="BD"
											>Bangladesh
										</option>
										<option value="BB"
											>Barbados
										</option>
										<option value="BZ"
											>Belize
										</option>
										<option value="BJ"
											>Benin
										</option>
										<option value="BM"
											>Bermuda
										</option>
										<option value="BT"
											>Bhutan
										</option>
										<option value="BY"
											>Bielorussia
										</option>
										<option value="MM"
											>Birmania
										</option>
										<option value="BO"
											>Bolivia
										</option>
										<option value="BA"
											>Bosnia ed Erzegovina
										</option>
										<option value="BW"
											>Botswana
										</option>
										<option value="BR"
											>Brasile
										</option>
										<option value="BN"
											>Brunei
										</option>
										<option value="BF"
											>Burkina Faso
										</option>
										<option value="BI"
											>Burundi
										</option>
										<option value="KH"
											>Cambogia
										</option>
										<option value="CM"
											>Camerun
										</option>
										<option value="CA"
											>Canada
										</option>
										<option value="CV"
											>Capo Verde
										</option>
										<option value="TD"
											>Ciad
										</option>
										<option value="CL"
											>Cile
										</option>
										<option value="CN"
											>Cina
										</option>
										<option value="VA"
											>Città del Vaticano
										</option>
										<option value="CO"
											>Colombia
										</option>
										<option value="KM"
											>Comore
										</option>
										<option value="KP"
											>Corea del Nord
										</option>
										<option value="KR"
											>Corea del Sud
										</option>
										<option value="CR"
											>Costa Rica
										</option>
										<option value="CI"
											>Costa d'Avorio
										</option>
										<option value="HR"
											>Croazia
										</option>
										<option value="CU"
											>Cuba
										</option>
										<option value="CW"
											>Curacao
										</option>
										<option value="DM"
											>Dominica
										</option>
										<option value="EC"
											>Ecuador
										</option>
										<option value="EG"
											>Egitto
										</option>
										<option value="SV"
											>El Salvador
										</option>
										<option value="AE"
											>Emirati Arabi Uniti
										</option>
										<option value="ER"
											>Eritrea
										</option>
										<option value="ET"
											>Etiopia
										</option>
										<option value="FJ"
											>Figi
										</option>
										<option value="PH"
											>Filippine
										</option>
										<option value="GA"
											>Gabon
										</option>
										<option value="GM"
											>Gambia
										</option>
										<option value="GE"
											>Georgia
										</option>
										<option value="GS"
											>Georgia del Sud e isole Sandwich meridionali
										</option>
										<option value="GH"
											>Ghana
										</option>
										<option value="JM"
											>Giamaica
										</option>
										<option value="JP"
											>Giappone
										</option>
										<option value="DJ"
											>Gibuti
										</option>
										<option value="JO"
											>Giordania
										</option>
										<option value="GD"
											>Grenada
										</option>
										<option value="GL"
											>Groenlandia
										</option>
										<option value="GP"
											>Guadalupa
										</option>
										<option value="GU"
											>Guam
										</option>
										<option value="GT"
											>Guatemala
										</option>
										<option value="GG"
											>Guernsey
										</option>
										<option value="GN"
											>Guinea
										</option>
										<option value="GQ"
											>Guinea Equatoriale
										</option>
										<option value="GW"
											>Guinea-Bissau
										</option>
										<option value="GY"
											>Guyana
										</option>
										<option value="GF"
											>Guyana francese
										</option>
										<option value="HT"
											>Haiti
										</option>
										<option value="HN"
											>Honduras
										</option>
										<option value="HK"
											>Hong Kong
										</option>
										<option value="IN"
											>India
										</option>
										<option value="ID"
											>Indonesia
										</option>
										<option value="IR"
											>Iran
										</option>
										<option value="IQ"
											>Iraq
										</option>
										<option value="BV"
											>Isola Bouvet
										</option>
										<option value="NF"
											>Isola Norfolk
										</option>
										<option value="IM"
											>Isola di Man
										</option>
										<option value="CX"
											>Isola di Natale
										</option>
										<option value="AX"
											>Isole Aland
										</option>
										<option value="BQ"
											>Isole BES
										</option>
										<option value="KY"
											>Isole Cayman
										</option>
										<option value="CC"
											>Isole Cocos e Keeling
										</option>
										<option value="CK"
											>Isole Cook
										</option>
										<option value="FK"
											>Isole Falkland
										</option>
										<option value="FO"
											>Isole Faroer
										</option>
										<option value="HM"
											>Isole Heard e McDonald
										</option>
										<option value="MP"
											>Isole Marianne Settentrionali
										</option>
										<option value="MH"
											>Isole Marshall
										</option>
										<option value="PN"
											>Isole Pitcairn
										</option>
										<option value="SB"
											>Isole Salomone
										</option>
										<option value="VI"
											>Isole Vergini americane
										</option>
										<option value="VG"
											>Isole Vergini britanniche
										</option>
										<option value="UM"
											>Isole minori esterne degli Stati Uniti
										</option>
										<option value="IL"
											>Israele
										</option>
										<option value="JE"
											>Jersey
										</option>
										<option value="KZ"
											>Kazakistan
										</option>
										<option value="KE"
											>Kenya
										</option>
										<option value="KG"
											>Kirghizistan
										</option>
										<option value="KI"
											>Kiribati
										</option>
										<option value="XK"
											>Kosovo
										</option>
										<option value="KW"
											>Kuwait
										</option>
										<option value="LA"
											>Laos
										</option>
										<option value="LS"
											>Lesotho
										</option>
										<option value="LB"
											>Libano
										</option>
										<option value="LR"
											>Liberia
										</option>
										<option value="LY"
											>Libia
										</option>
										<option value="MO"
											>Macao
										</option>
										<option value="MK"
											>Macedonia
										</option>
										<option value="MG"
											>Madagascar
										</option>
										<option value="MW"
											>Malawi
										</option>
										<option value="MV"
											>Maldive
										</option>
										<option value="MY"
											>Malesia
										</option>
										<option value="ML"
											>Mali
										</option>
										<option value="MA"
											>Marocco
										</option>
										<option value="MQ"
											>Martinica
										</option>
										<option value="MR"
											>Mauritania
										</option>
										<option value="MU"
											>Mauritius
										</option>
										<option value="YT"
											>Mayotte
										</option>
										<option value="MX"
											>Messico
										</option>
										<option value="FM"
											>Micronesia
										</option>
										<option value="MD"
											>Moldavia
										</option>
										<option value="MN"
											>Mongolia
										</option>
										<option value="ME"
											>Montenegro
										</option>
										<option value="MS"
											>Montserrat
										</option>
										<option value="MZ"
											>Mozambico
										</option>
										<option value="NA"
											>Namibia
										</option>
										<option value="NR"
											>Nauru
										</option>
										<option value="NP"
											>Nepal
										</option>
										<option value="NI"
											>Nicaragua
										</option>
										<option value="NE"
											>Niger
										</option>
										<option value="NG"
											>Nigeria
										</option>
										<option value="NU"
											>Niue
										</option>
										<option value="NC"
											>Nuova Caledonia
										</option>
										<option value="NZ"
											>Nuova Zelanda
										</option>
										<option value="OM"
											>Oman
										</option>
										<option value="PK"
											>Pakistan
										</option>
										<option value="PW"
											>Palau
										</option>
										<option value="PS"
											>Palestina
										</option>
										<option value="PA"
											>Panamá
										</option>
										<option value="PG"
											>Papua Nuova Guinea
										</option>
										<option value="PY"
											>Paraguay
										</option>
										<option value="PE"
											>Perù
										</option>
										<option value="PF"
											>Polinesia francese
										</option>
										<option value="PR"
											>Porto Rico
										</option>
										<option value="QA"
											>Qatar
										</option>
										<option value="CD"
											>RD del Congo
										</option>
										<option value="CF"
											>Rep. Centrafricana
										</option>
										<option value="DO"
											>Rep. Dominicana
										</option>
										<option value="CG"
											>Rep. del Congo
										</option>
										<option value="RE"
											>Riunione
										</option>
										<option value="RW"
											>Ruanda
										</option>
										<option value="RU"
											>Russia
										</option>
										<option value="EH"
											>Sahara Occidentale
										</option>
										<option value="KN"
											>Saint Kitts e Nevis
										</option>
										<option value="VC"
											>Saint Vincent e Grenadine
										</option>
										<option value="BL"
											>Saint-Barthélemy
										</option>
										<option value="MF"
											>Saint-Martin
										</option>
										<option value="PM"
											>Saint-Pierre e Miquelon
										</option>
										<option value="WS"
											>Samoa
										</option>
										<option value="AS"
											>Samoa Americane
										</option>
										<option value="SH"
											>Sant'Elena
										</option>
										<option value="LC"
											>Santa Lucia
										</option>
										<option value="SN"
											>Senegal
										</option>
										<option value="RS"
											>Serbia
										</option>
										<option value="SC"
											>Seychelles
										</option>
										<option value="SL"
											>Sierra Leone
										</option>
										<option value="SG"
											>Singapore
										</option>
										<option value="SX"
											>Sint Maarten
										</option>
										<option value="SY"
											>Siria
										</option>
										<option value="SO"
											>Somalia
										</option>
										<option value="LK"
											>Sri Lanka
										</option>
										<option value="US"
											>Stati Uniti d'America
										</option>
										<option value="ZA"
											>Sudafrica
										</option>
										<option value="SD"
											>Sudan
										</option>
										<option value="SS"
											>Sudan del Sud
										</option>
										<option value="SR"
											>Suriname
										</option>
										<option value="SJ"
											>Svalbard e Jan Mayen
										</option>
										<option value="SZ"
											>Swaziland
										</option>
										<option value="ST"
											>São Tomé e Príncipe
										</option>
										<option value="TJ"
											>Tagikistan
										</option>
										<option value="TW"
											>Taiwan
										</option>
										<option value="TZ"
											>Tanzania
										</option>
										<option value="TF"
											>Terre australi e antartiche francesi
										</option>
										<option value="IO"
											>Territorio britannico dell'oceano Indiano
										</option>
										<option value="TH"
											>Thailandia
										</option>
										<option value="TL"
											>Timor Est
										</option>
										<option value="TG"
											>Togo
										</option>
										<option value="TK"
											>Tokelau
										</option>
										<option value="TO"
											>Tonga
										</option>
										<option value="TT"
											>Trinidad e Tobago
										</option>
										<option value="TN"
											>Tunisia
										</option>
										<option value="TR"
											>Turchia
										</option>
										<option value="TM"
											>Turkmenistan
										</option>
										<option value="TC"
											>Turks e Caicos
										</option>
										<option value="TV"
											>Tuvalu
										</option>
										<option value="UA"
											>Ucraina
										</option>
										<option value="UG"
											>Uganda
										</option>
										<option value="UY"
											>Uruguay
										</option>
										<option value="UZ"
											>Uzbekistan
										</option>
										<option value="VU"
											>Vanuatu
										</option>
										<option value="VE"
											>Venezuela
										</option>
										<option value="VN"
											>Vietnam
										</option>
										<option value="WF"
											>Wallis e Futuna
										</option>
										<option value="YE"
											>Yemen
										</option>
										<option value="ZM"
											>Zambia
										</option>
										<option value="ZW"
											>Zimbabwe
										</option>
									</optgroup>
								</select>
							</div>
						</div>
					</div>
					<div class="span6"></div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span10">
							<label class="nomefield">Conto di addebito*</label>
							<!-- === org.apache.jsp.banking.accountsListSelect_jsp === { -->
							<strong>CC 00599 0000083891 EUR</strong><input name="idconto" type="hidden" value="00599 - 0000083891 - EUR" />
							<!-- } === org.apache.jsp.banking.accountsListSelect_jsp === -->
						</div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">Iban ordinante</label> <span
						class="output" id="IbanId_ord">*******************</span>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3 no-desktop">
					<label class="nomefield" id="importo">Importo*</label> <input
						maxlength="10" class="withIco" id="iImporto" value=""
						type="text" name="importo" class="importo" 
						onkeyup="changeControValore()" onpaste="return false;" ondrop="return false;">
				</div>
				<div class="span3 no-desktop italy"
					>
					<label class="nomefield">&nbsp;</label> <span class="output">
					EUR </span>
				</div>
				<div class="span3 no-desktop world"
					style="display: none" >
					<label class="nomefield" id="divisa">Divisa*</label> 
					<span class="output" id="divisaSpan">
						<select name="divisa" onchange="changeControValore();destinazioneBonifico();"	id="divisaSelect">
							<option cambio="7.4194" value="DKK" >CORONA DANESE                 </option>
							<option cambio="8.5748" value="NOK" >CORONA NORVEGESE              </option>
							<option cambio="10.2517" value="SEK" >CORONA SVEDESE                </option>
							<option cambio="1.686" value="AUD" >DOLLARO AUSTRALIANO           </option>
							<option cambio="1.5518" value="CAD" >DOLLARO CANADESE              </option>
							<option cambio="10.9938" value="HKD" >DOLLARO HONG KONG             </option>
							<option cambio="2.0762" value="NZD" >DOLLARO NUOVA ZELANDA         </option>
							<option cambio="1.0" value="EUR" selected='selected'>EURO                          </option>
							<option cambio="270.8145" value="HUF" >FORINT UNGHERIA               </option>
							<option cambio="1.5115" value="CHF" >FRANCO SVIZZERO               </option>
							<option cambio="2.1161" value="TRY" >NUOVA LIRA TURCHIA            </option>
							<option cambio="10.8147" value="ZAR" >RAND SUD AFRICA E NAMIBIA     </option>
							<option cambio="66.1276" value="INR" >RUPIA INDIA                   </option>
							<option cambio="0.8693" value="GBP" >STERLINA INGLESE              </option>
							<option cambio="1.4198" value="USD" >USA DOLLARI                   </option>
							<option cambio="131.9848" value="JPY" >YEN                           </option>
						</select>
					</span>
				</div>
				<div class="span6 no-desktop"   >
					<label class="nomefield">Importo massimo</label> <span
						class="output" id="impMassimo"
						value="50.000,00">
					50.000,00
					&euro; &nbsp;  
					<a	href="/webankpri/wbOnetoone/2l/do/banking/WsDerogaImportoMax0.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_modif_importo_max&OBSKEY3=nav_priv_wbx_modif_importo_max&cf=0.9847413598760605">modifica</a>
					</span>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6 no-desktop" id="controValore"
					style="display: none;">
					<span class="txthelp flLeft"
						data-tooltip="Il cambio effettivamente applicato potrebbe subire delle variazioni rispetto al cambio indicativo proposto a causa dell'intervallo di tempo tra la data di inserimento del bonifico e la sua effettiva esecuzione.">Controvalore
					indicativo in Euro : 
					</span>&ensp;
					<span id="controValoreValue"></span>
					<input type="hidden" name="controvalore" id="controValoreValueInput" value="" />
				</div>
			</div>
			<link rel="stylesheet" href="/wscmn/css/priv_calendar.css" type="text/css" media="all"/>
			<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
			<script type="text/javascript">	
				$(function () {
					$("#datepicker").datepicker({
						beforeShowDay: noHolidays,
						showOn: "button",
						buttonImage: "/img/btn_pickdate_priv.gif",
						buttonImageOnly: true,
						minDate: 0,
						maxDate: 60,
						dateFormat: "dd/mm/yy",
						showOtherMonths: false
					});
				});
			</script>
			<input name="saldoD" type="hidden" value="" />
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield ico" id="dataacc">Data esecuzione*</label>
					<span style="display: none" class="iconahelp" id="dataTooltip" data-tooltip="Indica la data per l'esecuzione del pagamento, verrà presa in considerazione solo per bonifici verso l'Italia e altri paesi SEPA.<br>Il bonifico verrà effettuato salvo disponibilità fondi alla data indicata."><img src="/img/ret/ico2or_help2.gif" class="help"></span>
					<div class="row-fluid">
						<div class="span4">
							<input type="text" class="withIco f_normal" id="datepicker"  value="01/09/2014" name="data_acc" size="15" maxlength="10" onchange="javascript:cercaSaldo(document.DATI.idconto.value, document.DATI.data_acc.value);"/>
							<span class="output" id="outputDatePicker" style="display: none;">01/09/2014</span>
						</div>
					</div>
				</div>
				<div class="span6 no-desktop">
					<label class="nomefield" id="balanceLabel">
					Saldo disponibile 			
					&nbsp;
					</label>
					<span class="output" id="balanceValue" value="">attuale</span>
				</div>
			</div>
			<script type="text/javascript">
				var saldiCache = new Array();
				
				function cercaSaldo(accid, data) {
					if (data != '01/01/1900')	{
						var idSaldo = cerca(accid,data,saldiCache);
						
						if(saldiCache.length == 0 || idSaldo == -1) {
							var urlStats = isLibrerie? '/librerie/include/commons/ajax/sportello/WsGetMarginDetail.php' : '/webankpri/banking/WsGetMarginDetail.do';
							var parameters = 'accountId=' + accid + '&dataRif='+data + '&showNegative='+ false;
							jqAJAXCall('POST', 'json', urlStats, aggiorna, null, parameters);
						}
						else
							aggiornaDaCache(saldiCache[idSaldo]);
					}
				}
				
				
				function aggiorna(resp) {
					
					var linkSaldo = '<a href="/webankpri/wbOnetoone/2l/do/banking/WsAvailableBalanceMultiAction.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=nav_priv_wbx_saldo&cf=0.6424319315719619' + '&CC=' + document.DATI.idconto.value + '">';
				
							
				
					if(resp.esito == 'KO'){
						$('#balanceValue').html('<strong>n/d</strong>');
						$('#balanceValue').attr('value', 'n/d');
						saldiCache.push(new saldoCache(document.DATI.idconto.value, document.DATI.data_acc.value,"n/d"));
					}else {
						var strong_tag = '<strong>';
						if(resp.saldoDisponibile.substr(0,1)=='-')
							strong_tag = '<strong class=\'nega\'>';
							
								$('#balanceValue').html(strong_tag + linkSaldo + resp.saldoDisponibile +'&nbsp;&euro;' + '</a></strong>');
							
							$('#balanceValue').attr('value',resp.saldoDisponibile);
									
						document.DATI.saldoD.value = resp.saldoNum;
						
							$('#balanceLabel').html('Saldo disponibile al ' + document.DATI.data_acc.value);
						
						saldiCache.push(new saldoCache(document.DATI.idconto.value, document.DATI.data_acc.value, resp.saldoDisponibile));
					}
					
				}
				
				function aggiornaDaCache(obj) {
					linkSaldo = '<a href="/webankpri/wbOnetoone/2l/do/banking/WsAvailableBalanceMultiAction.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=nav_priv_wbx_saldo&cf=0.27307245710301664' + '&CC=' + obj.numConto + '">';
					var strong_tag = '<strong>';
					if(obj.saldo.substr(0,1)=='-')
						strong_tag = '<strong class=\'nega\'>';
					
						$('#balanceValue').html(strong_tag + linkSaldo + obj.saldo +'&nbsp;&euro;' + '</a></strong>');
						
					$('#balanceValue').attr('value',obj.saldo);
					
						$('#balanceLabel').html('Saldo disponibile al ' + obj.data);	
							
					document.DATI.saldoD.value = obj.saldo;
				}
				
				function cerca(conto, data, saldi){
					var  id=-1;
					for (i=0;i<saldi.length;i++)
					{
						if(conto == saldi[i].numConto && data == saldi[i].data)
							id = i;
					}
					return id;
				}
				
				
				function saldoCache(numConto,data,saldo)
				{
					this.numConto=numConto;
					this.data=data;
					this.saldo=saldo;
				}
				
			</script>
			<script type="text/javascript">
				$(document).ready(function() {
					var selData = '01/09/2014';
				
					
					
					cercaSaldo(document.DATI.idconto.value, selData);
				});
				
				
			</script>
			<div class="row-fluid">
				<div class="span12 no-desktop">
					<label class="nomefield" id="causale">Causale*</label> 
					<span  class="output"><input type="text" name="causale"	maxlength="200" value="" ></span>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="tithelp">
		<div class="helpleft">Dati beneficiario</div>
		<br class="clear">
	</div>
	<br>
	<!-- beneficiario da rubrica -->
	<div class="borderFormRounded margBottomLarge " id="datiBeneficiario">
		<!-- 		default in caso di errore chiamata ajax -->
		<div class="row-fluid formGeneric">
			<div class="span12 clearfix">
				<div class="radiocont row-fluid">
					<div class="span6">
						<label class="nomefield" id="benef">Nome beneficiario*</label>
						<span class="output">
						<input type="text" maxlength="150" name="benef" value=""> &nbsp;
						</span>
					</div>
					<div class="span6">
						<label class="nomefield"> &nbsp;</label>
						<span class="output">
						<a href="javascript:nuovoBeneficiario(false);resettaCampi();">aggiungi da rubrica</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- IBAN italia -->
		<div class="row-fluid formGeneric">
			<div class="span6">
				<div class="row-fluid">
					<div class="span8">
						<label class="nomefield" id="ibanLabel">Iban Beneficiario*</label>
						<input type="text" name="ibanId_ben" id="ibanId_ben" maxlength="35" onblur='javascript:setBban_ben();' value="">
					</div>
					<div class="span4">
						<label class="nomefield" id="">&nbsp;</label>
						<a onclick="showAltriCampiIban();" >Non hai l'Iban?</a>
					</div>
				</div>
			</div>
			<div class="span6 showCostruisciIban" style="display: none;">
				<div class="row-fluid noMargbottom">
					<div class="span5">
						<label class="nomefield" id="">Numero c/c</label>
						<input type="text" name="numconto" maxlength="12" onblur="setIban_ben();" value="">
					</div>
					<div class="span3">
						<label class="nomefield ico">Abi*</label>
						<input type="text" name="abi" maxlength="5" onblur="setIban_ben();" value="">
					</div>
					<div class="span3">
						<label class="nomefield ico">Cab*</label>
						<input type="text" name="cab" maxlength="5"  onblur="setIban_ben();" value="">
					</div>
					<input type="hidden" name="cin" maxlength="1" onblur="setIban_ben();" value="">
				</div>
			</div>
		</div>
		<!-- nazione -->
		<div class="row-fluid formGeneric">
			<div class="span12 clearfix">
				<div class="radiocont row-fluid">
					<div class="span6">
						<label class="nomefield" id="cod">Nazione di residenza beneficiario*</label>
						<span class="output">
							<select name="cod">
								<option value=""> </option>
								<option value="AF" >Afghanistan</option>
								<option value="AL" >Albania</option>
								<option value="DZ" >Algeria</option>
								<option value="AD" >Andorra</option>
								<option value="AO" >Angola</option>
								<option value="AI" >Anguilla</option>
								<option value="AQ" >Antartide</option>
								<option value="AG" >Antigua e Barbuda</option>
								<option value="AN" >Antille Olandesi</option>
								<option value="SA" >Arabia Saudita</option>
								<option value="AR" >Argentina</option>
								<option value="AM" >Armenia</option>
								<option value="AW" >Aruba</option>
								<option value="AU" >Australia</option>
								<option value="AT" >Austria</option>
								<option value="AZ" >Azerbaigian</option>
								<option value="BS" >Bahamas</option>
								<option value="BH" >Bahrein</option>
								<option value="BD" >Bangladesh</option>
								<option value="BB" >Barbados</option>
								<option value="BE" >Belgio</option>
								<option value="BZ" >Belize</option>
								<option value="BJ" >Benin</option>
								<option value="BM" >Bermuda</option>
								<option value="BT" >Bhutan</option>
								<option value="BY" >Bielorussia</option>
								<option value="MM" >Birmania</option>
								<option value="BO" >Bolivia</option>
								<option value="BA" >Bosnia ed Erzegovina</option>
								<option value="BW" >Botswana</option>
								<option value="BR" >Brasile</option>
								<option value="BN" >Brunei</option>
								<option value="BG" >Bulgaria</option>
								<option value="BF" >Burkina Faso</option>
								<option value="BI" >Burundi</option>
								<option value="KH" >Cambogia</option>
								<option value="CM" >Camerun</option>
								<option value="CA" >Canada</option>
								<option value="CV" >Capo Verde</option>
								<option value="TD" >Ciad</option>
								<option value="CL" >Cile</option>
								<option value="CN" >Cina</option>
								<option value="CY" >Cipro</option>
								<option value="VA" >Città del Vaticano</option>
								<option value="CO" >Colombia</option>
								<option value="KM" >Comore</option>
								<option value="KP" >Corea del Nord</option>
								<option value="KR" >Corea del Sud</option>
								<option value="CR" >Costa Rica</option>
								<option value="CI" >Costa d'Avorio</option>
								<option value="HR" >Croazia</option>
								<option value="CU" >Cuba</option>
								<option value="CW" >Curacao</option>
								<option value="DK" >Danimarca</option>
								<option value="DM" >Dominica</option>
								<option value="EC" >Ecuador</option>
								<option value="EG" >Egitto</option>
								<option value="SV" >El Salvador</option>
								<option value="AE" >Emirati Arabi Uniti</option>
								<option value="ER" >Eritrea</option>
								<option value="EE" >Estonia</option>
								<option value="ET" >Etiopia</option>
								<option value="FJ" >Figi</option>
								<option value="PH" >Filippine</option>
								<option value="FI" >Finlandia</option>
								<option value="FR" >Francia</option>
								<option value="GA" >Gabon</option>
								<option value="GM" >Gambia</option>
								<option value="GE" >Georgia</option>
								<option value="GS" >Georgia del Sud e isole Sandwich meridionali</option>
								<option value="DE" >Germania</option>
								<option value="GH" >Ghana</option>
								<option value="JM" >Giamaica</option>
								<option value="JP" >Giappone</option>
								<option value="GI" >Gibilterra</option>
								<option value="DJ" >Gibuti</option>
								<option value="JO" >Giordania</option>
								<option value="GR" >Grecia</option>
								<option value="GD" >Grenada</option>
								<option value="GL" >Groenlandia</option>
								<option value="GP" >Guadalupa</option>
								<option value="GU" >Guam</option>
								<option value="GT" >Guatemala</option>
								<option value="GG" >Guernsey</option>
								<option value="GN" >Guinea</option>
								<option value="GQ" >Guinea Equatoriale</option>
								<option value="GW" >Guinea-Bissau</option>
								<option value="GY" >Guyana</option>
								<option value="GF" >Guyana francese</option>
								<option value="HT" >Haiti</option>
								<option value="HN" >Honduras</option>
								<option value="HK" >Hong Kong</option>
								<option value="IN" >India</option>
								<option value="ID" >Indonesia</option>
								<option value="IR" >Iran</option>
								<option value="IQ" >Iraq</option>
								<option value="IE" >Irlanda</option>
								<option value="IS" >Islanda</option>
								<option value="BV" >Isola Bouvet</option>
								<option value="NF" >Isola Norfolk</option>
								<option value="IM" >Isola di Man</option>
								<option value="CX" >Isola di Natale</option>
								<option value="AX" >Isole Aland</option>
								<option value="BQ" >Isole BES</option>
								<option value="KY" >Isole Cayman</option>
								<option value="CC" >Isole Cocos e Keeling</option>
								<option value="CK" >Isole Cook</option>
								<option value="FK" >Isole Falkland</option>
								<option value="FO" >Isole Faroer</option>
								<option value="HM" >Isole Heard e McDonald</option>
								<option value="MP" >Isole Marianne Settentrionali</option>
								<option value="MH" >Isole Marshall</option>
								<option value="PN" >Isole Pitcairn</option>
								<option value="SB" >Isole Salomone</option>
								<option value="VI" >Isole Vergini americane</option>
								<option value="VG" >Isole Vergini britanniche</option>
								<option value="UM" >Isole minori esterne degli Stati Uniti</option>
								<option value="IL" >Israele</option>
								<option value="IT" >Italia</option>
								<option value="JE" >Jersey</option>
								<option value="KZ" >Kazakistan</option>
								<option value="KE" >Kenya</option>
								<option value="KG" >Kirghizistan</option>
								<option value="KI" >Kiribati</option>
								<option value="XK" >Kosovo</option>
								<option value="KW" >Kuwait</option>
								<option value="LA" >Laos</option>
								<option value="LS" >Lesotho</option>
								<option value="LV" >Lettonia</option>
								<option value="LB" >Libano</option>
								<option value="LR" >Liberia</option>
								<option value="LY" >Libia</option>
								<option value="LI" >Liechtenstein</option>
								<option value="LT" >Lituania</option>
								<option value="LU" >Lussemburgo</option>
								<option value="MO" >Macao</option>
								<option value="MK" >Macedonia</option>
								<option value="MG" >Madagascar</option>
								<option value="MW" >Malawi</option>
								<option value="MV" >Maldive</option>
								<option value="MY" >Malesia</option>
								<option value="ML" >Mali</option>
								<option value="MT" >Malta</option>
								<option value="MA" >Marocco</option>
								<option value="MQ" >Martinica</option>
								<option value="MR" >Mauritania</option>
								<option value="MU" >Mauritius</option>
								<option value="YT" >Mayotte</option>
								<option value="MX" >Messico</option>
								<option value="FM" >Micronesia</option>
								<option value="MD" >Moldavia</option>
								<option value="MC" >Monaco</option>
								<option value="MN" >Mongolia</option>
								<option value="ME" >Montenegro</option>
								<option value="MS" >Montserrat</option>
								<option value="MZ" >Mozambico</option>
								<option value="NA" >Namibia</option>
								<option value="NR" >Nauru</option>
								<option value="NP" >Nepal</option>
								<option value="NI" >Nicaragua</option>
								<option value="NE" >Niger</option>
								<option value="NG" >Nigeria</option>
								<option value="NU" >Niue</option>
								<option value="NO" >Norvegia</option>
								<option value="NC" >Nuova Caledonia</option>
								<option value="NZ" >Nuova Zelanda</option>
								<option value="NL" >Olanda</option>
								<option value="OM" >Oman</option>
								<option value="PK" >Pakistan</option>
								<option value="PW" >Palau</option>
								<option value="PS" >Palestina</option>
								<option value="PA" >Panamá</option>
								<option value="PG" >Papua Nuova Guinea</option>
								<option value="PY" >Paraguay</option>
								<option value="PE" >Perù</option>
								<option value="PF" >Polinesia francese</option>
								<option value="PL" >Polonia</option>
								<option value="PR" >Porto Rico</option>
								<option value="PT" >Portogallo</option>
								<option value="QA" >Qatar</option>
								<option value="CD" >RD del Congo</option>
								<option value="GB" >Regno Unito</option>
								<option value="CZ" >Rep. Ceca</option>
								<option value="CF" >Rep. Centrafricana</option>
								<option value="DO" >Rep. Dominicana</option>
								<option value="CG" >Rep. del Congo</option>
								<option value="RE" >Riunione</option>
								<option value="RO" >Romania</option>
								<option value="RW" >Ruanda</option>
								<option value="RU" >Russia</option>
								<option value="EH" >Sahara Occidentale</option>
								<option value="KN" >Saint Kitts e Nevis</option>
								<option value="VC" >Saint Vincent e Grenadine</option>
								<option value="BL" >Saint-Barthélemy</option>
								<option value="MF" >Saint-Martin</option>
								<option value="PM" >Saint-Pierre e Miquelon</option>
								<option value="WS" >Samoa</option>
								<option value="AS" >Samoa Americane</option>
								<option value="SM" >San Marino</option>
								<option value="SH" >Sant'Elena</option>
								<option value="LC" >Santa Lucia</option>
								<option value="SN" >Senegal</option>
								<option value="RS" >Serbia</option>
								<option value="SC" >Seychelles</option>
								<option value="SL" >Sierra Leone</option>
								<option value="SG" >Singapore</option>
								<option value="SX" >Sint Maarten</option>
								<option value="SY" >Siria</option>
								<option value="SK" >Slovacchia</option>
								<option value="SI" >Slovenia</option>
								<option value="SO" >Somalia</option>
								<option value="ES" >Spagna</option>
								<option value="LK" >Sri Lanka</option>
								<option value="US" >Stati Uniti d'America</option>
								<option value="ZA" >Sudafrica</option>
								<option value="SD" >Sudan</option>
								<option value="SS" >Sudan del Sud</option>
								<option value="SR" >Suriname</option>
								<option value="SJ" >Svalbard e Jan Mayen</option>
								<option value="SE" >Svezia</option>
								<option value="CH" >Svizzera</option>
								<option value="SZ" >Swaziland</option>
								<option value="ST" >São Tomé e Príncipe</option>
								<option value="TJ" >Tagikistan</option>
								<option value="TW" >Taiwan</option>
								<option value="TZ" >Tanzania</option>
								<option value="TF" >Terre australi e antartiche francesi</option>
								<option value="IO" >Territorio britannico dell'oceano Indiano</option>
								<option value="TH" >Thailandia</option>
								<option value="TL" >Timor Est</option>
								<option value="TG" >Togo</option>
								<option value="TK" >Tokelau</option>
								<option value="TO" >Tonga</option>
								<option value="TT" >Trinidad e Tobago</option>
								<option value="TN" >Tunisia</option>
								<option value="TR" >Turchia</option>
								<option value="TM" >Turkmenistan</option>
								<option value="TC" >Turks e Caicos</option>
								<option value="TV" >Tuvalu</option>
								<option value="UA" >Ucraina</option>
								<option value="UG" >Uganda</option>
								<option value="HU" >Ungheria</option>
								<option value="UY" >Uruguay</option>
								<option value="UZ" >Uzbekistan</option>
								<option value="VU" >Vanuatu</option>
								<option value="VE" >Venezuela</option>
								<option value="VN" >Vietnam</option>
								<option value="WF" >Wallis e Futuna</option>
								<option value="YE" >Yemen</option>
								<option value="ZM" >Zambia</option>
								<option value="ZW" >Zimbabwe</option>
							</select>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid formGeneric">
			<div class="span12 clearfix">
				<div class="radiocont row-fluid">
					<div class="span6">
						<label class="nomefield">&nbsp;</label>
						<span class="output">
						<input type="checkbox" id="checkBenef" onchange="controllaBenef();"  >&nbsp; inserisci beneficiario in rubrica
						<input name="checkBenefparam" type="hidden" value="">
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<br class="clear">
<!--  Overlayer : START  -->
<div class="layeralert3" id="layeralert" style="display: none;">
	<div class="body roundedCornersSmall paddMedium">
		<p>
			<strong>Per il tipo di bonifico che intendi eseguire sono
			necessari i seguenti dati:</strong>
		</p>
		<div id="ErroriValidazione" style="display: none;">
			<div class="boxtxt">
				<p class="box_mess">
					<img border="0" src="/wscmn/img/ico2inf_errorform.gif"
						alt="" class="dx"> <img border="0"
						src="/img/ret/box_attenzione.jpg" alt=""><br>
					<br>
				<ul class="alert" id="bulletPoints"></ul>
			</div>
		</div>
		<div class="borderFormRounded  margBottomMedium">
			<div class="formGeneric">
				<form name="DATILAYER" method="get"
					action="/webankpri/wbOnetoone/2l/do/banking/WsBonificoSepaSummary.do">
					<input name="tabId"	type="hidden"	value="nav_priv_wbx_sportello" />
					<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_bonifico_ordinario" />
					<input name="OBSKEY3"	type="hidden"	value="" />
					<input name="OBSCNT"	type="hidden"	value="" />
					<input name="cf"	type="hidden"	value="0.918808479860277" />
					<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
					<input name="siglaAzione"	type="hidden"	value="" />
					<div class="row-fluid" id="bodyLayer"></div>
				</form>
			</div>
		</div>
		<br class="clear">
		<div class="fooform">
			<div class="fooformtop"></div>
			<div class="fooformleft">
				<div>
					<a title="annulla" class="btnformleft"
						href="javascript:annulla('layeralert');"><img alt=""
						src="/img/ret/btn_left_bi.gif"><span>annulla</span><img
						alt="" src="/img/ret/btn_right_bi.gif"></a>
				</div>
			</div>
			<div class="fooformright">
				<div>
					<a id="proseguiLayer" title="prosegui" class="btnformright"
						href="javascript:vai2();" id="proseguiBonifico2"><img
						src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img
						src="/img/ret/btn_right_ar.gif"></a>
				</div>
			</div>
		</div>
		<br class="clear">
	</div>
	<br class="clear">
</div>
<!--  Overlayer : END  -->
<!--  Overlayer Importo : START  -->
<div class="layeralert3" id="layeralertImporto" style="display: none;">
	<div class="body roundedCornersSmall paddMedium">
		<div class="boxesito attenzione">
			<div class="middle">
				<span class="imgCont"></span>
				<div class="text">
					<div class="row-fluid">
						<div class="span10">
							<p>
								<strong>Attenzione</strong><br>
								<br> Il <strong>saldo disponibile</strong> del tuo conto <strong>non
								&egrave; sufficiente</strong> per effettuare l'operazione, ma puoi
								procedere e inoltrare la prenotazione di pagamento.<br>
								<br> Ricordati di <strong>integrare</strong> il saldo del
								conto prima della data di esecuzione del bonifico altrimenti non
								andr&agrave; a buon fine.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br class="clear">
		<div class="fooform">
			<div class="fooformtop"></div>
			<div class="fooformleft">
				<div>
					<a title="annulla" class="btnformleft"
						href="javascript:annulla('layeralertImporto');"><img alt=""
						src="/img/ret/btn_left_bi.gif"><span>annulla</span><img
						alt="" src="/img/ret/btn_right_bi.gif"></a>
				</div>
			</div>
			<div class="fooformright">
				<div>
					<a title="prosegui" class="btnformright"
						href="javascript:vai('INVIA1AI');" id="proseguiBonifico2"><img
						src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img
						src="/img/ret/btn_right_ar.gif"></a>
				</div>
			</div>
		</div>
		<br class="clear">
	</div>
	<br class="clear">
</div>
<!--  Overlayer Importo : END  -->
<!--  Overlayer Area Sepa : START  -->
<div style="display: none;" id="layerSepa" class="layeralert3">
	<div onmouseover="this.style.cursor='move'; $('layerSepa').dragHandle = new Draggable('layerSepa',{handle: 'handle'}, { scroll: window });" 
		class="head handle"><img onclick="closePopOverLayer('layerSepa')" alt="chiudi" src="/img/ret//layeralert_x.gif">
	</div>
	<div class="body">
		<div class="row-fluid">
			<strong>COS'È L'AREA SEPA?</strong><br><br>
			La <strong>Sepa</strong>, ovvero la <strong>Single Euro Payments Area</strong> (Area Unica dei Pagamenti in Euro), &egrave; l'area in cui i cittadini, 
			le imprese e le pubbliche amministrazioni possono <strong>effettuare e ricevere pagamenti in euro</strong>, 
			sia all'interno dei confini nazionali che fra i Paesi che ne fanno parte, alle <strong>stesse condizioni</strong> previste nel proprio Paese.<br><br>
			<strong>I PAESI DELL'AREA SEPA</strong><br><br>
			Paesi dell'Unione Europea<br><br>
			<table cellpadding="2" cellspacing="2" width="100%">
				<tbody>
					<tr class="tabcarttit">
						<td class="tabcart3left"><b>Austria</b></td>
						<td class="tabcart3left"><b>Estonia</b></td>
						<td class="tabcart3left"><b>Italia</b></td>
						<td class="tabcart3left"><b>Polonia</b></td>
						<td class="tabcart3left"><b>Slovenia</b></td>
					</tr>
					<tr class="tabcarttit">
						<td class="tabcart3left"><b>Belgio</b></td>
						<td class="tabcart3left"><b>Finlandia</b></td>
						<td class="tabcart3left"><b>Lettonia</b></td>
						<td class="tabcart3left"><b>Portogallo</b></td>
						<td class="tabcart3left"><b>Spagna</b></td>
					</tr>
					<tr class="tabcarttit">
						<td class="tabcart3left"><b>Bulgaria</b></td>
						<td class="tabcart3left"><b>Francia</b></td>
						<td class="tabcart3left"><b>Lituania</b></td>
						<td class="tabcart3left"><b>Regno Unito</b></td>
						<td class="tabcart3left"><b>Svezia</b></td>
					</tr>
					<tr class="tabcarttit">
						<td class="tabcart3left"><b>Cipro</b></td>
						<td class="tabcart3left"><b>Germania</b></td>
						<td class="tabcart3left"><b>Lussemburgo</b></td>
						<td class="tabcart3left"><b>Repubblica Ceca</b></td>
						<td class="tabcart3left"><b>Ungheria</b></td>
					</tr>
					<tr class="tabcarttit">
						<td class="tabcart3left"><b>Croazia</b></td>
						<td class="tabcart3left"><b>Grecia</b></td>
						<td class="tabcart3left"><b>Malta</b></td>
						<td class="tabcart3left"><b>Repubblica Slovacca</b></td>
					</tr>
					<tr class="tabcarttit">
						<td class="tabcart3left"><b>Danimarca</b></td>
						<td class="tabcart3left"><b>Irlanda</b></td>
						<td class="tabcart3left"><b>Paesi Bassi</b></td>
						<td class="tabcart3left"><b>Romania</b></td>
					</tr>
				</tbody>
			</table>
			<br>Paesi esterni all'Unione Europea<br><br>
			<table cellpadding="2" cellspacing="2" width="100%">
				<tbody>
					<tr class="tabcarttit">
						<td class="tabcart3left"><b>Islanda</b></td>
						<td class="tabcart3left"><b>Liechtenstein</b></td>
						<td class="tabcart3left"><b>Norvegia</b></td>
						<td class="tabcart3left"><b>Principato di Monaco</b></td>
						<td class="tabcart3left"><b>San Marino</b></td>
					</tr>
					<tr class="tabcarttit">
						<td class="tabcart3left"><b>Svizzera</b></td>
					</tr>
				</tbody>
			</table>
			<div class="btnc aButtoncons">
				<a href="javascript:;" class="aButton"  onclick="closePopOverLayer('layerSepa')"><span>Chiudi</span></a>
			</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--  Overlayer Area Sepa : END  -->
<!--  invio BOE form : START  -->
<form id="DATIBOE" name="DATIBOE"
	action="/webankpri/wbOnetoone/mf/do/banking/WsSepaBoeApp.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bonifico_ordinario&OBSKEY3=&OBSCNT=&cf=0.8493408799107299&BV_UseBVCookie=Yes">
	<input type="hidden" name="extFunc" value="BOE" />
	<input type="hidden" name="page" value="INS" />
	<input type="hidden" name="useXml" value="true" />
	<input name="tabId"	type="hidden"	value="nav_priv_wbx_sportello" />
	<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_bonifico_ordinario" />
	<input name="OBSKEY3"	type="hidden"	value="" />
	<input name="OBSCNT"	type="hidden"	value="" />
	<input name="cf"	type="hidden"	value="0.34510765455089654" />
	<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
	<input name="siglaAzione"	type="hidden"	value="" />
</form>
<!--  invio BOE form : END  -->
<form name="BACK" method="GET"	action="/webankpri/wbOnetoone/2l/do/banking/WsBonificoSepaRistrutturazione.do">
	<input name="tabId"	type="hidden"	value="nav_priv_wbx_sportello" />
	<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_bonifico_ordinario" />
	<input name="OBSKEY3"	type="hidden"	value="" />
	<input name="OBSCNT"	type="hidden"	value="" />
	<input name="cf"	type="hidden"	value="0.8026671889707062" />
	<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
	<input name="siglaAzione"	type="hidden"	value="" />
	<input type="hidden" name="keep" value="yes">
</form>
<!--  NuovoBonifico: END  -->
<!-- sezione "bottoniera" -->
<!-- === org.apache.jsp.banking.webank.Buttons_jsp === { -->
<div class="fooform">
	<div class="fooformtop">
		Step <strong>1</strong> di 2
	</div>
	<div class="fooformright">
		<div><a  href="javascript:vai('INVIA1')" class="btnformright"
			title="prosegui"><img src="/img/ret/btn_left_ar.gif" /><span>prosegui</span><img
			src="/img/ret/btn_right_ar.gif" /></a></div>
	</div>
</div>
<br class="clear"/>
<!-- } === org.apache.jsp.banking.webank.Buttons_jsp === -->
<!-- sezione "note" -->
<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
<script type="text/javascript">
	var oggi = new Date();
	
	$(function () {
			setIban_ord();
			
				nuovoBeneficiario(false);
			  
			limiteDeroga();
			$("#dataFattura").datepicker({
				showOn: "button",
				buttonImage: "/img/btn_pickdate_priv.gif",
				buttonImageOnly: true,
				dateFormat: "dd/mm/yy",
				showOtherMonths: true,
				minDate: new Date(oggi.getFullYear() - 10, 1 - 1, 1),
				maxDate: oggi,
				changeYear: true
			}).mask("99/99/9999");
		});
		
</script>
<!-- } === it.weservice.WsBonifici_1:WsTransfers1 === -->