
var struts2NamespaceVal="/investywb";
var datiAdeVer = {};
var string_F="F", string_vuoto="";

//passa submitPreviewAction,backSelectAction,obskeyVal tramite JSP
function visualizzaAdeVer(){
	
	$('#sezioneAdeVer').show().addClass("loading");
	
	resetHasErrors("#sezioneAdeVer");
	
	if(undefined != datiAdeVer.numint && datiAdeVer.deposito == deposito){}
	else{
		if(string_F == fondosicav){
			methodAdeVer = 'FONDI';
		}
		else{
			methodAdeVer = 'SICAV'
		}
		AdeVer.loadFields(methodAdeVer, 'all', deposito);	//chiama impostaValoriSelect()
		
	}
	
	$("#indietroBtnAdeVer").click(indietroDaAdeVer);
	
	$('#confermaAdeVer').click(function() {
		var errors = erroriAdever();	//fieldsFondi.jsp
		
		if (errors.length) {
			setHasErrors(errors, "#sezioneAdeVer");
			$(errors[0].field).trigger('focus');
		} else {
			chiamataAdeVer();
		}

		return (!errors.length);
	});
	
	$("#sezioneAdeVer").removeClass("loading");
}

//Chiamata da adever.js
function impostaValoriSelect() {
	
		salvaDatiAdeVer();
		
		//visualizza errore nel select senza valore e nasconde errore nel select con valore
		if(datiAdeVer.numint!=undefined && datiAdeVer.numint!=null && datiAdeVer.numint!= ""){
			var nome_cognome = '';
			for(var idx=0; idx<datiAdeVer.numint; idx++){
				resetAdeverError('#professioneAv'   	 +'_int'	+ (idx+1));
				resetAdeverError('#dettaglioSettoreAv'   +'_int'	+ (idx+1));
				resetAdeverError('#cittadinanza2Av'   	 +'_int'	+ (idx+1));
				resetAdeverError('#redditoAnnuoAv'   	 +'_int'	+ (idx+1));
				resetAdeverError('#originePatrimonioAv'  +'_int'	+ (idx+1));
				resetAdeverError('#origineRedditoAv'   	 +'_int'	+ (idx+1));
				resetAdeverError('input[name=politicEspostaAv'+'_int'+ (idx+1) + ']');
				resetAdeverError('#statoAttivitaAv'   	 +'_int'	+ (idx+1));
				resetAdeverError('#provinciaAttivitaAv'  +'_int'	+ (idx+1));
				
				//default stato=Italia
				nome_cognome = $('#nomecognome' + (idx+1)).val().replace(/ /g,"_");
				impostaValoreSelect('statoAttivitaAv'    +'_int' 	+ (idx+1), '86|ITALIA');
				AdeVer.populateSelectWithValue(methodAdeVer, 'COUNTRY', 'statoAttivitaAv'  +'_int'+(idx+1), 'provinciaAttivitaAv'  +'_int'+(idx+1), '86|ITALIA', datiAdeVer.elencoInt[nome_cognome].provinciaAttivitaAv);
			
			}
			resetAdeverError('#usoConto');
		}
		
}

function salvaDatiAdeVer(){
	datiAdeVer = {};
	datiAdeVer.usoConto = $('#usoConto').val();
	datiAdeVer.numint 	= $('#numint').val();
	
	if(datiAdeVer.numint!=undefined && datiAdeVer.numint!=null && datiAdeVer.numint!= ""){
		var elencoInt = {}, datiInt = {}, nome_cognome = '';
		for(var idx=0; idx<datiAdeVer.numint; idx++){
			nome_cognome = $('#nomecognome' + (idx+1)).val().replace(/ /g,"_");
			datiInt = {};
			datiInt.professioneAv 		=  $('#professioneAv' 				+'_int' + (idx+1)).val();
			datiInt.cittadinanza2Av		=  $('#cittadinanza2Av' 			+'_int' + (idx+1)).val();
			datiInt.dettaglioSettoreAv 	=  $('#dettaglioSettoreAv' 			+'_int' + (idx+1)).val();
			datiInt.statoAttivitaAv 	=  $('#statoAttivitaAv' 			+'_int' + (idx+1)).val();
			datiInt.provinciaAttivitaAv =  $('#provinciaAttivitaAv' 		+'_int'	+ (idx+1)).val();
			datiInt.redditoAnnuoAv 		=  $('#redditoAnnuoAv' 				+'_int' + (idx+1)).val();
			datiInt.origineRedditoAv	=  $('#origineRedditoAv' 			+'_int' + (idx+1)).val();
			datiInt.originePatrimonioAv	=  $('#originePatrimonioAv' 		+'_int' + (idx+1)).val();
			datiInt.politicEspostaAv	=  $('input[name=politicEspostaAv' 	+'_int' + (idx+1) + ']:checked').val();
			//TODO - StringEscapeUtils
			elencoInt[nome_cognome] 	= datiInt;
		}
		datiAdeVer.elencoInt	= elencoInt;
	}
	datiAdeVer.deposito 	= deposito;
}

function resetAdeverError(idSelect){
	if(idSelect.indexOf('#')>-1){ 		//select
		$(idSelect).change(function() {
			if($(idSelect).val()!="-" || true == $(idSelect).is(':disabled')){
				var wrapper = $(idSelect).parent();
			    wrapper.removeClass("has-error");
			    wrapper.find(".help-block.with-errors").remove();
			    
			  //Cambia professione, canncella errore evidenziato per tutti (serve se Pensionato/Non occupato da cancellare errori sul settore, prov e origine reddito)
			    if(idSelect.indexOf("#professioneAv") == 0){
					var idPannelloInt =  "#pannelloAdvSogg" + idSelect.substring("#professioneAv".length) ;
					$(idPannelloInt + " .has-error").removeClass("has-error");
					$(idPannelloInt + " .help-block.with-errors").remove();
				}
			}
			else{
				var errors = [];
			    errors.push({
			        field : $(idSelect + '_label'),
			        text : getMsgErroreVuoto('')
			    });
				setHasErrors(errors, $(idSelect).parent());
			}
		});
	}
	else{	//radio
		$(idSelect).click(function() {
			if($(idSelect)[0].checked || $(idSelect)[1].checked){
				var wrapper = $(idSelect).parent().parent().parent().parent().parent();
			    wrapper.removeClass("has-error");
			    wrapper.find(".help-block.with-errors").remove();
			}
			else{
				var errors = [];
			    errors.push({
			        field : $(idSelect + '_label'),
			        text : getMsgErroreVuoto('')
			    });
				setHasErrors(errors, $(idSelect).parent().parent().parent().parent().parent());
			}
		});
	}
}

function indietroDaAdeVer() {
	//TODO - salvaDatiAdeVer()
	
	var urlParam = "";
	if(string_vuoto != codInt){
		urlParam = "&codInt="+codInt+"&codIsin="+codIsin+"&divisa="+divisa;
	}
	
	$("#numeroAppropriatezza").val("0");
	$("#adeverInvestimentiForm").attr("action", backSelectAction +"?"+"cf=" + Math.random() + urlParam + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
	$("#adeverInvestimentiForm").submit();
}

function chiamataAdeVer() {

	$('#sezioneAdeVer').addClass("loading");
	salvaDatiAdeVer();
	
	$.ajax({
		url : wrp_script_direct + struts2NamespaceVal + "/VerificaDatiAdeVer.action" + "?cf=" + Math.random(),
		dataType : "json",
		data : { 'datiAdeVer' : JSON.stringify(datiAdeVer),
				'deposito' 	 : deposito,
				'fondosicav' : fondosicav},
		success : function(dataOutJSON, status, jqXHR) { 
			var msg = "Si &egrave; verificato un errore di connessione";

			if (200 == jqXHR.status && dataOutJSON.action!= undefined) {

				if ("failure" == dataOutJSON.action) {
					if(dataOutJSON.msg !=undefined && stringa_N == dataOutJSON.msg){
						showError(true, "E", dataOutJSON.errorCode + ":" + dataOutJSON.errorMsg);
					}
					else if(dataOutJSON.errorMessage !=undefined && "" != dataOutJSON.errorMessage){
						showError(true, "E", dataOutJSON.errorMessage);
					}
					else{
						showError(true, "E", msg);
					}
				} 
				else {
					if("SUCCESS" == dataOutJSON.action && dataOutJSON.msg !=undefined && "Y" == dataOutJSON.msg){ 
						showError(false, null, null);
//						$('#sezioneAdeVer').removeClass("loading");
						
//						$("#checkFatca")				.val("false");	//solo per test
						$("#checkAdever")				.val("false");	//solo per test
						
						$("#numeroAppropriatezza").val("-1");
						$("#adeverInvestimentiForm").attr("action", submitPreviewAction + "?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
						$("#adeverInvestimentiForm").submit();
					}
					else{
						showError(true, "E", msg);
					}
				}
			} else {
				showError(true, "E", msg);

			}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "Si &egrave; verificato un errore di connessione";
			showError(true, "E", msg);
		},
		complete: function (jqXHR, status){
			 $('#sezioneAdeVer').removeClass("loading");
		 }
	});
}

function showError(show, tipo, msg) {
	if (!show) {
		$('#errorBox').hide();
	} else {
		var errorBorderClass = '';
		if ("E" == tipo) {
			errorBorderClass = 'negativo';
		} else if ("W" == tipo) {
			errorBorderClass = 'attenzione';
		}
		$("#errorBorder").addClass(errorBorderClass);
		$("#messaggio").html(msg);
		$('#errorBox').show();
		window.scrollTo(0, 0);
	}
}