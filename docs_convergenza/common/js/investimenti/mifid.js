
//TODO - event listener per accordion da priv_generic.js

var profiliEstesi = '', dataJson = '', compilaQuestionarioJson = '';
var OBSKEY_nuovo = 'nav_priv_wbx_questionario_MIFID_wt';	

function visualizzaDatiDepositi(){
	$.ajax({
		url : wrp_script + "/mifid/SelezioneDepositiMifid.action" + "?cf=" + Math.random(),
		dataType : "json",
		data : {},
		success : function(dataOutJSON, status, jqXHR) {
			if (200 == jqXHR.status) {
				//visualizzaProfiloBean = $.parseJSON(dataOutJSON.data.visualizzaProfiloBean);
				dataJson = dataOutJSON.data;
				if ("failure" == dataJson.action) {
					showError(true, "E", dataJson.errorMessage);
					$("#sezioneReipilogo").hide();
				}
				else{
					profiliEstesi = dataOutJSON.profiliEstesi;
					
					jQuery('<div/>', {
						id 		: 'accordion',
						'class' : "panel-group panel-group-icon",
						role 	: "tablist",
						'aria-multiselectable' : "true"
					}).appendTo('#depositoIntestatario');
//					initAccordionText();
//				    initAccordionIcon();
					
					var divAccordionVal = '', divIntestatarioVal = '';
					$.each(dataOutJSON.profiliEstesi, function(index, profiloEsteso) {

						divAccordionVal = divProfiloAccordion.replace(/{{index}}/g, index);

						divAccordionVal = divAccordionVal.replace(/{{cognomeNomeNDG}}/g, 
								'Deposito intestato a '+ profiloEsteso.intestatario + ' NDG ' + profiloEsteso.ndg);

						divAccordionVal = divAccordionVal.replace('esperienza'			,'esperienza_' 			+ index);
						divAccordionVal = divAccordionVal.replace('questionarioRaccolto','questionarioRaccolto_'+ index);
						divAccordionVal = divAccordionVal.replace('dataInizioValidita'  ,'dataInizioValidita_' 	+ index);
						divAccordionVal = divAccordionVal.replace('dataFineValidita'	,'dataFineValidita_' 	+ index);
						divAccordionVal = divAccordionVal.replace('canale'				,'canale_' + index);
						divAccordionVal = divAccordionVal.replace('visualizza'			,'visualizza_' + index);
						
						$('#accordion').append(divAccordionVal);
						
						$('#esperienza_' 			+ index).text(profiloEsteso.esperienza);
						$('#questionarioRaccolto_' 	+ index).text(profiloEsteso.questionarioRaccolto);
						$('#dataInizioValidita_' 	+ index).text(profiloEsteso.dataInizioValidita);
						$('#dataFineValidita_' 		+ index).text(profiloEsteso.dataFineValidita);
						$('#canale_' 				+ index).text(profiloEsteso.terminale.trim()=='&WEB'? 'WEB' : 'Agenzia');
						
						$.each(profiloEsteso.depositHolders, function(idx, depositHolder) {
							divIntestatarioVal = divIntestatario.replace(/{{index}}/g, index + '' + idx);
							divIntestatarioVal = divIntestatarioVal.replace('nomeCognome'	,'nomeCognome_'	+ index + '' + idx);
							divIntestatarioVal = divIntestatarioVal.replace('dataNascita'	,'dataNascita_'	+ index + '' + idx);
							divIntestatarioVal = divIntestatarioVal.replace('ndg'  		,'ndg_' 		+ index + '' + idx);
							
							$('#preIntestatario_'+index).append(divIntestatarioVal);
							$('#nomeCognome_'+ index + '' + idx).text(depositHolder.nomeCognome);
							$('#dataNascita_'+ index + '' + idx).text($.datepicker.formatDate('dd/mm/yy',new Date(depositHolder.dataNascita)));
							$('#ndg_' 		+ index + '' + idx).text(depositHolder.ndg);
							
						});
						
						$('#preIntestatario_'+index).append(divVisualizza.replace(/{{index}}/g, index));
						$('#preIntestatario_'+index).append(divDatiMifid.replace(/{{index}}/g, index));
						//$('datiMifid_'+index).hide();
					});
					
					//event-listeners
					$.each(dataOutJSON.profiliEstesi, function(index, profiloEsteso) {
						$(document).delegate('#toggle_' + index,'click',function(){
							if($('#toggle_'+ index).attr('aria-expanded') == 'false'){	//tab minimizzato
								$('#toggle_' + index).removeClass("collapsed");			//se intestazione e' lungo, visualizza in 2 righe
								$('#panel_' + index).removeClass("panel-selected");		//cambia colore da nero a verde per tab minimizzato
							}
							else{
								$('#panel_' + index).addClass("panel-selected");		//cambia colore da verde a nero per tab selezionato
								for(var tabIndex=0; tabIndex<profiliEstesi.length; tabIndex++){
									if(tabIndex != index){
										$('#panel_' + tabIndex).removeClass("panel-selected");	
										$('#toggle_'+ tabIndex).attr('aria-expanded',"false");
										$('#collapse_'+ tabIndex).removeClass("in");
										$('#collapse_'+ tabIndex).attr('aria-expanded',"false");
										$('#collapse_'+ tabIndex).attr('style',"");
									}
								}
							}
						});
					});
				}
			}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "l'operazione di MiFID non &egrave; possibile al momento";
			showError(true, "E", msg);
			$("#sezioneReipilogo").hide();
		},
		complete : function() {
			$("#questionarioMifidForm").removeClass("loading");
		}
	});
}

function showError(show, tipo, msg) {
	if (!show) {
		$('#erroreForm').hide();
	} else {
		var errorBorderClass = ''
		;
		if ("E" == tipo) {
			errorBorderClass = 'negativo';
		} else if ("W" == tipo) {
			errorBorderClass = 'attenzione';
		}
		$("#errorBorder").addClass(errorBorderClass);
		$("#messaggio").html(msg);
		$('#erroreForm').show();
		window.scrollTo(0, 0);
	}
}

function visualizza(idxDeposito){
	var id = -1;
	if(idxDeposito != undefined && idxDeposito != "" && idxDeposito.indexOf("_")>0){
		id = idxDeposito.substring(idxDeposito.indexOf("_")+1);
	}
	$("#questionarioMifid_"+id).empty();
	var profiloEsteso = profiliEstesi[id];
	
	if(113 == profiloEsteso.codiceQuestionario || 111 == profiloEsteso.codiceQuestionario){
		var testiMifid = $.parseJSON(profiloEsteso.testiMifid);
		if(testiMifid == undefined || testiMifid == "" || testiMifid.length == 0){
			$('#questionarioMifid_'+id).append("<p>" + profiloEsteso.errorMessage + "</p>");
		}
		else{
			$.each(testiMifid, function(idx, testo) {
				var divDomandaRispostaVal = divDomandaRisposta.replace(/{{index}}/g, id + '_' + idx);
				$("#questionarioMifid_"+id).append(divDomandaRispostaVal);
				if(1112 == testo.codDomanda){
					if(1 == testo.indiceDomanda){
						$('#domanda_' + id + '_' + idx).text(testo.domanda);
					}
					//else ?? TODO 1
					$('#risposta_' + id + '_' + idx).html("<ul class='small'><li>" + testo.risposta + "- componenti " + testo.risLibera + "</li></ul>");
				}
				else{
					$('#domanda_'  + id + '_' + idx).text(testo.domanda);
					$('#risposta_' + id + '_' + idx).text(testo.risposta);
				}
			});
		}
	}
	else{
		var testi = $.parseJSON(profiloEsteso.testi);
		if(testi == undefined || testi == "" || testi.length == 0){
			$('#questionarioMifid_'+id).append("<p>" + profiloEsteso.errorMessage + "</p>");
		}
		else{
			$.each(testi, function(idx, testo) {
				var divDomandaRispostaVal = divDomandaRisposta.replace(/{{index}}/g, id + '_' + idx);
				$("#questionarioMifid_"+id).append(divDomandaRispostaVal);
				$('#domanda_'  + id + '_' + idx).text(testo.domanda);
				$('#risposta_' + id + '_' + idx).text(testo.risposta);
			});
		}
	}
	
	if(true == profiloEsteso.domandaLeva){
		var divDomandaRispostaVal = divDomandaRisposta.replace('domanda','domandaLeva').replace('risposta','rispostaLeva').replace(/{{index}}/g, id);
		$("#questionarioMifid_"+id).append(divDomandaRispostaVal);
		$('#domandaLeva_'  + id).html(domandaLevaTesto);
		$('#rispostaLeva_' + id).text(profiloEsteso.rispostaLeva);
	}
	
	if(true == profiloEsteso.editable){
		$("#questionarioMifid_"+id).append(divBtnContainer.replace(/{{index}}/g, id));
		if(true == profiloEsteso.mostraPdf){
			$("#btnContainer_"+id).append(divScaricaPdf.replace(/{{index}}/g, id));
			$("#questionarioMifid_"+id).append("&nbsp;&nbsp;&nbsp;");
		}
		if( (true == dataJson.abilMifid && 113 != profiloEsteso.codiceQuestionario) || 
			(true == dataJson.abil 		&& 113 == profiloEsteso.codiceQuestionario))
		{
			$("#btnContainer_"+id).append(divAggiornaPdf.replace(/{{index}}/g, id));
		}
		//else if(true == dataJson.abil && 113 == profiloEsteso.codiceQuestionario){}	<br class="clear"> TODO 2 
	}
	
	$("#visualizza_"+id).hide();
	$("#datiMifid_"+id).show();
}

function scaricaPdf(idxDeposito){
	var id = -1;
	if(idxDeposito != undefined && idxDeposito != "" && idxDeposito.indexOf("_")>0){
		id = idxDeposito.substring(idxDeposito.indexOf("_")+1);
	}
	var profiloEsteso = profiliEstesi[id];
	open(wrp_script + "/mifid/VisualizzaPdfQuestionarioJson.action?deposito="+ profiloEsteso.deposito + "&codice=" + profiloEsteso.codiceQuestionario + "&isPDF=true");
}

function aggiornaProfilo(idxDeposito){
	var id = -1;
	if(idxDeposito != undefined && idxDeposito != "" && idxDeposito.indexOf("_")>0){
		id = idxDeposito.substring(idxDeposito.indexOf("_")+1);
	}
	var profiloEsteso = profiliEstesi[id];
	
	//var url = wrp_script + "/mifid/MostraQuestionarioMifidSelect.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_vendita"; OBSKEY_nuovo
	var url = "MostraQuestionarioMifidSelect.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=" +OBSKEY_nuovo ;
	url = url + "&deposito=" + profiloEsteso.deposito +  "&codice=" + profiloEsteso.codiceQuestionario;
	$('#questionarioMifidForm').attr('action', url);
	$("#questionarioMifidForm").submit();
	
}

function visualizzaDatiDepositoIntestatario(inputData){
	var test = "";
	$.ajax({
		url : wrp_script_direct + "/mifid/MostraQuestionarioMifidSelectJson.action" + "?cf=" + Math.random()+ "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=" +OBSKEY_nuovo ,
		dataType : "json",
		data : inputData,
		success : function(dataOutJSON, status, jqXHR) {
			if (200 == jqXHR.status) {
				compilaQuestionarioJson = dataOutJSON.data;
				if ("failure" == dataOutJSON.data.action) {
					showError(true, "E", dataOutJSON.data.errorMessage);
					//$("#sezioneReipilogo").hide();
				}
				else{
					$('#datiRiepilogo').text('Compilazione relativa al deposito intestato a ' + dataOutJSON.data.intestatario);
					var divIntestatarioVal = '';
					$.each(dataOutJSON.data.depositHolders, function(idx, depositHolder) {
						divIntestatarioVal = divIntestatario.replace(/{{index}}/g, idx);
						divIntestatarioVal = divIntestatarioVal.replace('nomeCognome'	,'nomeCognome_'	+ idx);
						divIntestatarioVal = divIntestatarioVal.replace('dataNascita'	,'dataNascita_'	+ idx);
						divIntestatarioVal = divIntestatarioVal.replace('ndg'  			,'ndg_' 		+ idx);
						
						$('#datiDepositoIntestatario').append(divIntestatarioVal);
						$('#nomeCognome_'+ idx).text(depositHolder.nomeCognome);
						$('#dataNascita_'+ idx).text($.datepicker.formatDate('dd/mm/yy',new Date(depositHolder.dataNascita)));
						$('#ndg_' 		 + idx).text(depositHolder.ndg);
						
					});
					
					$('#idInfoPerCliente').show();
					
					if(dataOutJSON.data.depositHolders.length > 1){
						$('#numIntestatari').show();
					}
					
					$('#compilaMifid').attr('disabled', 'disabled');
					$('#compilaMifid').attr('href', "#1");
					
					 $('#presaVisione').click(function() {
						if ($(this).is(':checked')) {
							$('#compilaMifid').removeAttr('disabled');
							$('#compilaMifid').removeClass('btn-default');
							$('#compilaMifid').addClass('btn-primary');
							$('#compilaMifid').attr('href', "javascript:compila();");
						}
						else{
							$('#compilaMifid').attr('disabled', 'disabled');
							$('#compilaMifid').removeClass('btn-primary');
							$('#compilaMifid').addClass('btn-default');
							$('#compilaMifid').attr('href', "#1");
						}
					}); 
					 $('#deposito').val(dataOutJSON.data.deposito);
				}
			}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "l'operazione di MiFID non &egrave; possibile al momento";
			showError(true, "E", msg);
			//$("#sezioneReipilogo").hide();
		},
		complete : function() {
			$("#questionarioMifidForm2").removeClass("loading");
		}
	});
}

function compila(){
	
	$("#compilaMifid").hide();
	$("#listaDomande").empty();
	var listaDomande = $.parseJSON(compilaQuestionarioJson.listaDomande);
	
	$.each(listaDomande, function(idxDomanda, domanda) {
		var divDomandaVal = divCompilaDomanda.replace(/{{index}}/g, idxDomanda);
		$("#listaDomande").append(divDomandaVal);
		$('#testoDomanda_'+ idxDomanda).text(domanda.ordine + ' - ' + domanda.domanda);
		
		$.each(domanda.listaRisposte, function(idxRisposta, risposta) {
			var divRispostaVal = divCompilaRadioRisposta;
			if(2 == domanda.ordine){
				divRispostaVal = divCompilaCheckboxRisposta;
			}
			
			divRispostaVal = divRispostaVal.replace(/{{index}}/g,  idxDomanda + '_' + idxRisposta);
			divRispostaVal = divRispostaVal.replace(/{{index2}}/g, domanda.externalId);
			$("#domanda_" + idxDomanda).parent().parent().append(divRispostaVal);
			$('#testoRisposta_'+ idxDomanda + '_' + idxRisposta).text(risposta.value);
			
			$('#risposta_'+ idxDomanda + '_' + idxRisposta).attr('disabled', 'disabled');
			$('#risposta_'+ idxDomanda + '_' + idxRisposta).val(risposta.ordine);
			
			$('#testoCheckBox_'+ idxDomanda + '_' + idxRisposta).attr('disabled', 'disabled');
			
			if(1 == domanda.ordine){
				$('#risposta_'+ idxDomanda + '_' + idxRisposta).removeAttr('disabled');
			}
			
			
		});
		
		$("#domanda_" 		+ idxDomanda).parent().parent().append(divCampoObbligatorio.replace(/{{index}}/g, idxDomanda));
		$("#showMsgErrore_" + idxDomanda).addClass("requiredField");
		
		if(2 == domanda.ordine){
			$("#domanda_" + idxDomanda).parent().parent().append(divComponentiTotale);
		}
	});
	
	
	
	//event listeners
	$.each(listaDomande, function(idxDomanda, domanda) {
		$.each(domanda.listaRisposte, function(idxRisposta, risposta) {
			 
			//croce nel box di testo per cancellare tutto testo
			$("#testoCheckBox_" + idxDomanda + '_' + idxRisposta).focusin(function() {	//idxDomanda=2
		            for(var i=0; i<domanda.listaRisposte.length; i++){
		            	$('#clear_'+ idxDomanda + '_' + i).hide();
		            }
		            $(this).siblings('.editable-clear-x').show();
		    });
			
			$("#clear_" + idxDomanda + '_' + idxRisposta).click(function() {
	            $(this).prev('input').val('').focus();
	            $(this).prev('input').trigger('change');
	        });
			
			//solo valori numerici
			$("#testoCheckBox_" + idxDomanda + '_' + idxRisposta).bind('keyup change', function(e) {
				 $('#testoCheckBox_'+ idxDomanda + '_' + idxRisposta).val($('#testoCheckBox_'+ idxDomanda + '_' + idxRisposta).val().replace(/[^\d.-]/g, ''));
				 
				 $('#totComponenti').text('');
				 var totComponenti = 0;
				 for(var i=0; i<domanda.listaRisposte.length; i++){
					 totComponenti = totComponenti + new Number($('#testoCheckBox_'+ idxDomanda + '_' + i).val());
				 }
				 if(totComponenti != 0){
						$('#totComponenti').text(totComponenti);
				 }
			});
			 
			//abilitare risposte per la domanda succesiva
			 $('#risposta_'+ idxDomanda + '_' + idxRisposta).click(function() {
				 
				 if(idxDomanda+1 < listaDomande.length){
					 for(var i=0; i<listaDomande[idxDomanda+1].listaRisposte.length; i++){
						 $('#risposta_'+ (idxDomanda+1) + '_' + i).removeAttr('disabled');
						 
						 if(0==idxDomanda && 0==idxRisposta){
							 $('#risposta_'+ (idxDomanda+1) + '_' + 0).prop('checked', false);
							 $('#risposta_'+ (idxDomanda+1) + '_' + 0).attr('disabled', 'disabled');
							 $('#testoCheckBox_'+ (idxDomanda+1) + '_' + 0).attr('disabled', 'disabled');
							 $('#testoCheckBox_'+ (idxDomanda+1) + '_' + 0).val('');
						 }
						
						if( (15 == idxDomanda && ! $('#risposta_' + 17 + '_' + 0).is(':disabled')) || 16 == idxDomanda){
							if( $('#risposta_'	+ 15 + '_' + 3).is(':checked') ) {
								$('#risposta_'+ 17 + '_' + 2).removeAttr('disabled');
								$('#risposta_'+ 17 + '_' + 3).attr('disabled', 'disabled');
								$('#risposta_'+ 17 + '_' + 3).prop('checked', false);
							}
							else if( $('#risposta_'	+ 15 + '_' + 4).is(':checked')) {
								$('#risposta_'+ 17 + '_' + 2).attr('disabled', 'disabled');
								$('#risposta_'+ 17 + '_' + 3).attr('disabled', 'disabled');
								$('#risposta_'+ 17 + '_' + 2).prop('checked', false);
								$('#risposta_'+ 17 + '_' + 3).prop('checked', false);
							}
							else{
								$('#risposta_'+ 17 + '_' + 2).removeAttr('disabled');
								$('#risposta_'+ 17 + '_' + 3).removeAttr('disabled');
							}
						}
					 }
				 }
				 
				 if("checkbox" == $('#risposta_'+ idxDomanda + '_' + idxRisposta).attr('type')){
					 if($('#risposta_'+ idxDomanda + '_' + idxRisposta).is(':checked')){
						 $('#testoCheckBox_'+ idxDomanda + '_' + idxRisposta).removeAttr('disabled'); 
					 }
					 else{
						 $('#testoCheckBox_'+ idxDomanda + '_' + idxRisposta).attr('disabled', 'disabled');
						 var totComponenti = new Number( $('#totComponenti').text()) - new Number( $('#testoCheckBox_'+ idxDomanda + '_' + idxRisposta).val())
						 if(totComponenti == 0){
							 $('#totComponenti').text('');
						 }
						 else{
							 $('#totComponenti').text(totComponenti);
						 }
						 $('#testoCheckBox_'+ idxDomanda + '_' + idxRisposta).val('');
					 }
				 }
				 
				 resetHasErrors("#showMsgErrore_" + idxDomanda);
				 $("#showMsgErrore_" +idxDomanda).removeClass("has-error");
			 });
			 
			 
		});
		
		
	});
	
	if(listaDomande.length>0){
		$('#questionarioInput').show();
	}
	
	$('#ricomincia').click(function() {
		reset();
	});
	
	$('#prosegui').click(function() {
		submit_form_mifid();
	});
	
}


function reset(){
	var errors = [];
	var listaDomande = $.parseJSON(compilaQuestionarioJson.listaDomande);
	$.each(listaDomande, function(idxDomanda, domanda) {
		$.each(domanda.listaRisposte, function(idxRisposta, risposta) {
			$('#risposta_'		+ idxDomanda + '_' + idxRisposta).prop('checked', false);
			$('#risposta_'		+ idxDomanda + '_' + idxRisposta).attr('disabled', 'disabled');
			
			$('#testoCheckBox_'	+ idxDomanda + '_' + idxRisposta).attr('disabled', 'disabled');
			$('#testoCheckBox_'	+ idxDomanda + '_' + idxRisposta).val('');
			
			$('#totComponenti').text('');
			if(1 == domanda.ordine){
				$('#risposta_'	+ idxDomanda + '_' + idxRisposta).removeAttr('disabled');
			}
		});
		resetHasErrors("#showMsgErrore_" + idxDomanda);
		$("#showMsgErrore_" +idxDomanda).removeClass("has-error");
	});
	errors.push({
		field : $('#showMsgErrore_0'),
		text : "Occorre selezionare una risposta"
	});
	setHasErrors(errors, "#showMsgErrore_0");
	
	if (errors.length) {
		$(errors[0].field).trigger('focus');
		$("html, body").stop().animate({ scrollTop: $('.has-error').eq(0).parent().parent().offset().top - $('.headerMobile').height() + 'px' }, "300", function() { $('.has-error').eq(0).parent().parent().trigger('focus'); });
	}
}

function submit_form_mifid(){
	var errors = [];
	var risposta_0_idx = '';
	var listaRisposteArray = [];
	
	var listaDomande = $.parseJSON(compilaQuestionarioJson.listaDomande);
	$.each(listaDomande, function(idxDomanda, domanda) {
		var noRadioOptionSelected = true, noCheckboxOptionSelected = true, noComponentiNucleo=true, numComponentiNucleoKO=true, hasError=true;
		$.each(domanda.listaRisposte, function(idxRisposta, risposta) {
			var rispostaJson = {'idDomanda_idRisposta':'','sezione':'1','domanda':'','risposta':'','numComponenti':''};
			if ($('#risposta_'	+ idxDomanda + '_' + idxRisposta).is(':checked')) {
				if("radio" == $('#risposta_'+ idxDomanda + '_' + idxRisposta).attr('type')){
					noRadioOptionSelected = false;
					hasError = false;
					rispostaJson.idDomanda_idRisposta 	= idxDomanda + '_' + idxRisposta;
					rispostaJson.domanda				= domanda.externalId ;
					rispostaJson.risposta				= $('#risposta_'	+ idxDomanda + '_' + idxRisposta).val();
					rispostaJson.numComponenti			= 0;
					listaRisposteArray[listaRisposteArray.length] = rispostaJson;
					if(0 == idxDomanda){
						risposta_0_idx = idxRisposta;
					}
					
				}
				else if("checkbox" == $('#risposta_'+ idxDomanda + '_' + idxRisposta).attr('type')){
					noCheckboxOptionSelected = false;
					noRadioOptionSelected = false;
					if('' != $('#testoCheckBox_'+ idxDomanda + '_' + idxRisposta).val()){
						noComponentiNucleo = false;
						var totComponenti = new Number($('#totComponenti').text());
						if('' != totComponenti){
							if( (0 == risposta_0_idx && 1 == totComponenti) 						||
								(1 == risposta_0_idx && 1 <= totComponenti && 3 >= totComponenti) 	||
								(2 == risposta_0_idx && 4 <= totComponenti && 6 >= totComponenti) 	||
								(3 == risposta_0_idx && 6 < totComponenti) )
							{
								numComponentiNucleoKO = false;
								hasError = false;
								rispostaJson.idDomanda_idRisposta 	= idxDomanda + '_' + idxRisposta;
								rispostaJson.domanda				= domanda.externalId ;
								rispostaJson.risposta				= $('#risposta_'	+ idxDomanda + '_' + idxRisposta).val();
								rispostaJson.numComponenti			= $('#testoCheckBox_'+ idxDomanda + '_' + idxRisposta).val();
								listaRisposteArray[listaRisposteArray.length] = rispostaJson;
							}
							
						}
						
					}
				}
				return false; //break dal loop di risposte
			}
		});
		resetHasErrors("#showMsgErrore_" + idxDomanda); 
		$("#showMsgErrore_" +idxDomanda).removeClass("has-error");
		var errMsg = "";
		if(hasError){
			if(noRadioOptionSelected){
				errMsg = "Occorre selezionare una risposta";
			}
			else if(noCheckboxOptionSelected){
				errMsg = "Occorre selezionare almeno una risposta";
			}
			else if(noComponentiNucleo){
				errMsg = "occorre inserire i componenti del Vostro nucleo familiare appartenenti al range";
			}
			else if(numComponentiNucleoKO){
				errMsg = "Il numero dei componenti non &egrave; coerente con la risposta 1";
			}
			errors.push({
				field : $('#showMsgErrore_' + idxDomanda),
				text : errMsg
			});
			setHasErrors(errors, "#showMsgErrore_" + idxDomanda);
			return false; //break dal loop di domande
		}
	});
	
	if (errors.length) {
		//priv_generic.js
		//$("html, body").stop().animate({ scrollTop: $('.has-error').eq(0).offset().top - $('.headerMobile').height() + 'px' }, "300", function() { $('.has-error').eq(0).find('input').eq(0).trigger('focus'); });
		$(errors[0].field).trigger('focus');
		$("html, body").stop().animate({ scrollTop: $('.has-error').eq(0).parent().parent().offset().top - $('.headerMobile').height() + 'px' }, "300", function() { $('.has-error').eq(0).parent().parent().trigger('focus'); });
	}
	else{
		
		//$("#codice").val("113");
		//$("#deposito").val("");
		$("#listaRisposte").val(JSON.stringify(listaRisposteArray));
		var url = "InsertQuestionarioMifidSelect.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=" +OBSKEY_nuovo ;
		$('#questionarioMifidForm2').attr('action', url);
		$("#questionarioMifidForm2").submit();
	}
	return (!errors.length);
	
}

function visualizzaDatiDepositiConferma(inputData){
	var test = "";
	$.ajax({
		url : wrp_script_direct + "/mifid/InsertQuestionarioMifidSelectJson.action"+ "?cf=" + Math.random()+"&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=" +OBSKEY_nuovo ,
		dataType : "json",
		data : inputData,
		success : function(dataOutJSON, status, jqXHR) {
			if (200 == jqXHR.status) {
				if("failure" == dataOutJSON.data.action) {
					showError(true, "E", dataOutJSON.data.errorMessage);
					$("#erroreSezioneBtnContainer").show();
				}
				else if("warning" == dataOutJSON.data.action) {
					showError(true, "E", dataOutJSON.data.errorMessage);
					$("#erroreSezioneBtnContainer").show();
				}
				else{
					$('#errorBorder').addClass("positivo");
					$('#messaggio').text($('#messaggio').text().replace('{{Intestatario}}',dataOutJSON.data.intestatario));
					$('#erroreForm').show();
					
					$('#sezioneReipilogo').show();
					$("#datiIntestatario").text("Profilo relativo al deposito intestato a " + dataOutJSON.data.intestatario);
					$("#esperienza").text(dataOutJSON.data.esperienza);
					$("#questionarioRaccolto").text(dataOutJSON.data.questionarioRaccolto);
					
					$('#sezioneBtnContainer').show();
					var hrefDepositiMifid = "javascript:document.location.href=";
					hrefDepositiMifid += "wrp_script";
					hrefDepositiMifid += "+'/wbOnetoone/2l/action/mifid/DepositiMifid.action";
					hrefDepositiMifid += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=" + OBSKEY_nuovo + "'"; 
					$("#prosegui").attr("href",hrefDepositiMifid);
					
					if("successLeva" == dataOutJSON.data.action) {
						$('#conferma').click(function() {
							invioDomandaLeva(dataOutJSON.data.deposito);
						});
						$('#sezioneLeva').show();
					}
				}
			}
			else{
				var msg = "l'operazione di MiFID non &egrave; possibile al momento";
				showError(true, "E", msg);
				$("#erroreSezioneBtnContainer").show();
			}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "l'operazione di MiFID non &egrave; possibile al momento";
			showError(true, "E", msg);
			$("#erroreSezioneBtnContainer").show();
		},
		complete : function() {
			$("#questionarioMifidConfermaForm").removeClass("loading");
		}
	});
}

function invioDomandaLeva(deposito){
	
	var errors = [];
	if (! $('#flaglevaSi').is(':checked') && ! $('#flaglevaNo').is(':checked') ) {
		errors.push({
					field : $('#flaglevaSi'),
					text : "Tutte le risposte sono obbligatoriei"
				});
		setHasErrors(errors, "#flagleva");
	}
	
	if (errors.length) {
		$(errors[0].field).trigger('focus');
	} 
	else {
		var rispostaLeva = '';
		if( $('#flaglevaSi').is(':checked') ){
			rispostaLeva = $('#flaglevaSi').val();
		}
		else if( $('#flaglevaNo').is(':checked') ){
			rispostaLeva = $('#flaglevaNo').val();
		}
		
		var inputData = {"rispostaLeva": rispostaLeva, 'deposito': deposito};
		$.ajax({
			url : wrp_script_direct + "/mifid/InsertDomandaLevaJson.action"+ "?cf=" + Math.random()+"&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=" +OBSKEY_nuovo ,
			dataType : "json",
			data : inputData,
			success : function(dataOutJSON, status, jqXHR) {
				if (200 == jqXHR.status) {
//					$('#sezioneLeva').hide();
				}
				else{
//					var msg = "l'operazione di MiFID non &egrave; possibile al momento";
//					showError(true, "E", msg);
//					$("#erroreSezioneBtnContainer").show();
				}
			},
			error : function(jqXHR, status, errorThrown) {
//				var msg = "l'operazione di MiFID non &egrave; possibile al momento";
//				showError(true, "E", msg);
//				$("#erroreSezioneBtnContainer").show();
			},
			complete : function() {
				$('#sezioneLeva').hide();
			}
		});
	}

	return (!errors.length);
	
}

var divProfiloAccordion = " \
			<div id=\"panel_{{index}}\" class=\"panel panel-default \"> \
				<div id=\"heading_{{index}}\" class=\"panel-heading\" role=\"tab\"> \
					<h4 id=\"title_{{index}}\" class=\"panel-title\"> \
						<a id=\"toggle_{{index}}\" data-toggle=\"collapse\" href=\"#collapse_{{index}}\" aria-expanded=\"false\" aria-controls=\"collapse_{{index}}\"> \
							{{cognomeNomeNDG}} \
							<i class=\"icon icon-arrow_down\"></i><i class=\"icon icon-arrow_up\"></i> \
						</a> \
					</h4> \
				</div> \
				<div id=\"collapse_{{index}}\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading_{{index}}\" aria-expanded=\"false\" style=\"\"> \
					<div id=\"panelbody_{{index}}\" class=\"panel-body\"> \
						<h4>Profilo	</h4>\
						<div class=\"formGenerico borderFormRounded\" id=\"preIntestatario_{{index}}\"> \
							<div class=\"form-group\"> \
								<div class=\"row\"> \
									<div class=\"col-sm-4\"> \
										<label class=\"control-label-output\">Classificazione cliente</label>  \
										<span class=\"output\" id=\"classificazioneCliente\">Al dettaglio</span> \
									</div> \
									<div class=\"col-sm-4\"> \
										<label class=\"control-label-output\">Esperienza e conoscenza</label>  \
										<span class=\"output\" id=\"esperienza\"></span> \
									</div> \
									<div class=\"col-sm-4\"> \
										<label class=\"control-label-output\">Tipo profilo</label>  \
										<span class=\"output\" id=\"questionarioRaccolto\"></span> \
									</div> \
								</div> \
							</div> \
							<div class=\"form-group\"> \
								<div class=\"row\"> \
									<div class=\"col-sm-4\"> \
										<label class=\"control-label-output\">Data di compilazione</label>  \
										<span class=\"output\" id=\"dataInizioValidita\"></span> \
									</div> \
									<div class=\"col-sm-4\"> \
										<label class=\"control-label-output\">Valido fino a</label>  \
										<span class=\"output\" id=\"dataFineValidita\"></span> \
									</div> \
									<div class=\"col-sm-4\"> \
										<label class=\"control-label-output\">Canale di compilazione</label>  \
										<span class=\"output\" id=\"canale\"></span> \
									</div> \
								</div> \
							</div> \
						</div> \
					</div> \
				</div> \
			</div>";


var divIntestatario = "\
					<div class=\"form-group\"> \
						<div class=\"row\" id=\"intestatario_{{index}}\"> \
							<div class=\"col-sm-4\"> \
								<label class=\"control-label-output\">Nome Cognome</label>  \
								<span class=\"output\" id=\"nomeCognome\"></span> \
							</div> \
							<div class=\"col-sm-4\"> \
								<label class=\"control-label-output\">Data di nascita</label>  \
								<span class=\"output\" id=\"dataNascita\"></span> \
							</div> \
							<div class=\"col-sm-4\"> \
								<label class=\"control-label-output\">NDG</label>  \
								<span class=\"output\" id=\"ndg\"></span> \
							</div> \
						</div> \
					</div> \
		";

var divVisualizza = "<a type=\"button\" class=\"btn btn-primary btn-align-right\" id=\"visualizza_{{index}}\" onclick=\"visualizza(this.id);\">visualizza</a>";

var divDomandaRisposta = "\
						<div class=\"form-group\"> \
							<div class=\"row\"> \
								<div class=\"col-sm-12\"> \
									<label class=\"control-label-output\" id=\"domanda_{{index}}\"></label>  \
									<span class=\"output\" id=\"risposta_{{index}}\"></span> \
								</div> \
							</div> \
						</div> \
					";

var divDatiMifid = "\
					<section class=\"tithelp\" id=\"datiMifid_{{index}}\" style=\"display: none;\"> \
						<hr><h4><div class=\"helpleft\" >Questionario MiFID</div></h4>	\
						<div class=\"formGenerico borderFormRounded\" id=\"questionarioMifid_{{index}}\"> \
						</div> \
					</section> \
				";

var domandaLevaTesto = "La Marginazione &egrave; una modalit&#224; di negoziazione con effetto leva che permette all&apos;investitore di poter acquistare ( Long) o vendere (Short Selling) impegnando solo una parte del capitale necessario per regolare le operazioni sottostanti.</br>" +
				"La Banca richiama espressamente l&apos;attenzione del Cliente sul fatto che questa modalit&#224; di trading  presuppone una conoscenza avanzata dei mercati e degli strumenti finanziari negoziati e si tratta di una tipologia di operativit&#224; altamente speculativa che comporta l&apos;assunzione di un elevato rischio di perdite di dimensioni anche eccedenti l&apos;esborso originario e comunque non quantificabili a priori.</br>" + 
				"Per quanto sopra descritto, il Cliente dichiara di essere informato e pienamente consapevole delle modalit&#224; e dei rischi connessi agli investimenti con effetto leva.";

var divBtnContainer = "<div class=\"form-group btnWrapper\" id=\"btnContainer_{{index}}\"></div>";

var divScaricaPdf = "<div class=\"btn-align-right\"><a type=\"button\" class=\"btn btn-primary\" id=\"scaricaPdf_{{index}}\" onclick=\"scaricaPdf(this.id);\">scarica pdf</a></div>";

var divAggiornaPdf = "<div class=\"btn-align-right\"><a type=\"button\" class=\"btn btn-primary btn-align-right\" id=\"aggiornaProfilo_{{index}}\" onclick=\"aggiornaProfilo(this.id);\">aggiorna profilo</a></div>";

var divCompilaDomanda = "<div class=\"form-group\"> 																	\
								<div class=\"row\"> 																	\
									<div class=\"col-xs-12\" id=\"domanda_{{index}}\"> 									\
										<label class=\"control-label domanda\" id=\"testoDomanda_{{index}}\"></label>  	\
									</div> 																				\
								</div> 																					\
						</div> 																							\
						";

var divCompilaRadioRisposta = "	<div class=\"row\"> 																			\
									<div class=\"col-xs-12\" > 																	\
										<div class=\"radio\">																	\
	                   						<label class=\"textWrapper\">														\
	                       						<input type=\"radio\" id=\"risposta_{{index}}\" name=\"risposta_{{index2}}\">	\
	                        						<span class=\"text\" id=\"testoRisposta_{{index}}\"></span>					\
	                    					</label>																			\
	                					</div>																					\
									</div> 																						\
								</div> 																							\
						 	";

var divCompilaCheckboxRisposta = " <div class=\"row\"> 																								\
											<div class=\"col-xs-10\" > 																				\
												<div class=\"checkbox\">																			\
					                   				<label class=\"textWrapper\">																	\
					                       				<input type=\"checkbox\" id=\"risposta_{{index}}\" name=\"risposta_{{index2}}\">			\
					                        				<span class=\"text\" id=\"testoRisposta_{{index}}\"></span>								\
					                    			</label>																						\
				                			   </div>																								\
				                			</div>																									\
											<div class=\"col-xs-2\" > 																				\
					 						   <div class=\"editable-input\">																		\
					 						   		<input type=\"text\" name=\"\" class=\"form-control clear-x\" id=\"testoCheckBox_{{index}}\">	\
					 						   		<span class=\"editable-clear-x\" style=\"display: none\" id=\"clear_{{index}}\">				\
					 						   			<i class=\"icon icon-close icon-1x\"></i>													\
					 						   		</span>																							\
					 						   </div>																								\
					 						</div>																									\
					 					</div>																										\
		 						";

var divComponentiTotale = " <div class=\"row\"> 												\
								<div class=\"col-xs-10\" > 										\
									<label class=\"control-label\">Totale componenti</label>	\
								</div>															\
							 	<div class=\"col-xs-2\" > 										\
									<label class=\"control-label\" id=\"totComponenti\"></label>\
					 			</div>															\
					 		</div>																\
						";

var divCampoObbligatorio = "<div class=\"row\"> 									\
    							<div class=\"col-sm-12\" id=\"showMsgErrore_{{index}}\"> 	\
    							</div>												\
							</div>";
