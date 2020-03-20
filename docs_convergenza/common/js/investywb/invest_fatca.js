
var struts2NamespaceVal="/investywb";
var datiFatca = {}, datiFatcaConfermaJson= {};
var string_vuoto="";

//passa submitPreviewAction tramite JSP
function visualizzaFatca(){
	
	$('#sezioneFatca').show().addClass("loading");
	
	$('#checkDocFatca').attr('disabled', 'disabled');
	resetHasErrors("#sezioneFatca");
	
	$('#checkDocFatca').click(function() {
		resetHasErrors($("#checkDocFatca").parent().parent().parent().parent());
	});
	$('#checkDatiFatca').click(function() {
		resetHasErrors($("#checkDatiFatca").parent().parent().parent().parent());
	});

	$("#indietroBtnFatca").click(indietroDaFatca);
	
	$.ajax({
        url: wrp_script_direct + struts2NamespaceVal + "/FatcaInvestimentiJson.action" + "?cf=" + Math.random(),
        data: {},	//"forwardAction" : submitPreviewAction, "backAction": backSelectAction, "obskeyVal": obskeyVal
		dataType: "json",
        success: function (data, status, jqXHR) {
        	
        	datiFatca = data.datiFatca;
        	
        	datiFatca.forwardAction = submitPreviewAction;
        	datiFatca.backAction 	= backSelectAction;
        	datiFatca.obskeyVal 	= obskeyVal;
        	
        	datiFatca.listaIntestatariFatca = $.parseJSON(datiFatca.listaIntestatariFatca);
        	
        	enableDocLink();
        	caricaDatiFatcaIntestatario();
        	
        	$('#idDisclaimerFatca').html(datiFatca.disclaimerFatca);
        	
        	clickConferma();
        	
        },
        error : function(jqXHR, status, errorThrown) {
			var msg = "Si &egrave; verificato un errore di connessione";
			$("#sezioneFatca").hide();
			showError(true, "E", msg);
		},
		complete : function(jqXHR, status) {
			// if("success" == status){}
			$("#sezioneFatca").removeClass("loading");
		}
	});
}

function enableDocLink(){
	$('#linkDocFatca').click( function() {
		if (!$('#checkDocFatca').is(':checked')) {
			$('#checkDocFatca').removeAttr('disabled');
			resetErrors('#checkDocFatca');
		}
		open(wrp_script + "/common/apriDocumento.action?id="
				+ datiFatca.idDocFacta
				+ "&prodotto="
				+ datiFatca.idTypeFacta
				+ "&isPDF=true");
	});
}


function caricaDatiFatcaIntestatario() {

	if (datiFatca.listaIntestatariFatca != undefined) {  
		if(datiFatca.listaIntestatariFatca.length > 1) {
			$('#sezioneFatcaMultiInt').show();
		}

		$('#sezioneFatcaDatiInt').empty();
		jQuery('<div/>', {
			id : 'accordion',
			'class' : "panel-group",
			role : "tablist",
			'aria-multiselectable' : "true"
		}).appendTo('#sezioneFatcaDatiInt');
	
		var divAccordionVal = '';
	
		$.each(datiFatca.listaIntestatariFatca, function(index,intestatarioFatca) {
	
			divAccordionVal = divAccordion.replace(/{{index}}/g, index);
			divAccordionVal = divAccordionVal.replace(/{{nomeCognome}}/g,	intestatarioFatca.nome + ' ' + intestatarioFatca.cognome);
			divAccordionVal = divAccordionVal.replace('intestNomeCognome',	'intestNomeCognome_' 	+ index);
			divAccordionVal = divAccordionVal.replace('intestDataNascita',	'intestDataNascita_' 	+ index);
			divAccordionVal = divAccordionVal.replace('intestLuogoNascita',	'intestLuogoNascita_' 	+ index);
			divAccordionVal = divAccordionVal.replace('intestTelefono',		'intestTelefono_' 		+ index);
			divAccordionVal = divAccordionVal.replace('intestCittadinaza',	'intestCittadinaza_' 	+ index);
			divAccordionVal = divAccordionVal.replace('intestIndirizzoRes',	'intestIndirizzoRes_' 	+ index);
			divAccordionVal = divAccordionVal.replace('intestIndirizziCorr','intestIndirizziCorr_' 	+ index);
			divAccordionVal = divAccordionVal.replace('modaldis', 'modaldis_'+ index);
	
			$('#accordion').append(divAccordionVal);
			$('#intestNomeCognome_' + index).text(intestatarioFatca.nome + ' ' + intestatarioFatca.cognome);
			
			//bugfix per -912823200000 che fa differenza di 1 giorno
			var d = new Date(intestatarioFatca.dataNascita);
			var UTCDataNascita = new Date(Date.UTC(d.getFullYear(), d.getMonth(), d.getDate(), d.getHours(), d.getMinutes(), d.getSeconds()));
			$('#intestDataNascita_' + index).text($.datepicker.formatDate('dd/mm/yy',	new Date(UTCDataNascita)));
			
			//$('#intestDataNascita_' + index).text($.datepicker.formatDate('dd/mm/yy',new Date(intestatarioFatca.dataNascita).toLocaleDateString()));
			
			$('#intestLuogoNascita_' + index).text(intestatarioFatca.luogoNascita);
			$('#intestTelefono_' + index).text(intestatarioFatca.telefono);
			$('#intestCittadinaza_' + index).text(intestatarioFatca.cittadinanza);
			$('#intestIndirizzoRes_' + index).text(
					intestatarioFatca.residenza + ', '
							+ intestatarioFatca.residenzaCap + ', '
							+ intestatarioFatca.residenzaCitta + ' ('
							+ intestatarioFatca.residenzaProvincia + ')');
			$('#intestIndirizziCorr_' + index).text(
					intestatarioFatca.corrispondenza + ', '
							+ intestatarioFatca.corrispondenzaCap + ', '
							+ intestatarioFatca.corrispondenzaCitta + ' ('
							+ intestatarioFatca.corrispondenzaProvincia + ')');
	
			for (var j = 2; j <= 4; j++) {
				$('<input>').attr({
					type : 'hidden',
					id : 'TIN' + j + '_int1_' + index,
					name : 'TIN' + j + '_int1_' + index
				}).appendTo('#fatcaInvestimentiForm');
	
				$('<input>').attr({
					type : 'hidden',
					id : 'residenzaFiscale' + j + '_int1_' + index,
					name : 'residenzaFiscale' + j + '_int1_' + index
				}).appendTo('#fatcaInvestimentiForm');
	
			}
	
		});
	}
}


function clickConferma(){
	$('#confermaFatca').click(function() {
		
		var errors = [], chkBoxDocFatca = $("#checkDocFatca"), chkBoxDatiFatca = $("#checkDatiFatca");

		if (!chkBoxDocFatca.is(':checked')) {
			errors.push({
						field : chkBoxDocFatca,
						text : "Prendi visione dell'informativa FATCA aprendo il relativo pdf."
					});
			setHasErrors(errors, "#sezioneFatca");
		}
		if (!chkBoxDatiFatca.is(':checked')) {
			errors.push({
				field : chkBoxDatiFatca,
				text : "Conferma le dichiarazioni rilasciate."
			});
			setHasErrors(errors, "#sezioneFatca");
		}
		if (errors.length) {
			$(errors[0].field).trigger('focus');
		} else {
			chiamataFatca();
		}

		return (!errors.length);
	});
}


function chiamataFatca() {

	$('#sezioneFatca').addClass("loading");
	var objDatiFatcaJsonArray = {};
	if (datiFatca != undefined && datiFatca.listaIntestatariFatca != undefined) {
		for (var j = 0; j < datiFatca.listaIntestatariFatca.length; j++) {
			var datiFatcaJsonArray = [];
			if (undefined == $("#tinLayer")
					|| undefined == $("#tinLayer").val()) {
				for (var i = 2, idx = 0; i <= 4; i++, idx++) {
					var idTin = "TIN" + i + "_int1_" + j;
					var idRes = "residenzaFiscale" + i + "_int1_" + j;
					if ($('#' + idRes).val() != undefined
							&& $('#' + idRes).val() != '') {
						var valoreRes = $('#' + idRes).val();
						var valoreResArray = $('#' + idRes).val().split("|");
						datiFatcaJsonArray[idx] = {
							codNazione : valoreResArray[0],
							descNazione : valoreResArray[1],
							flagCadTin : valoreResArray[2],
							tin : $('#' + idTin).val()
						};
					}
				}
			} else {
				datiFatcaJsonArray[0] = {
					codiceUIC : $("#nazioneFiscaleLayer").val(),
					tin : $("#tinLayer").val()
				};
			}

			objDatiFatcaJsonArray[j] = datiFatcaJsonArray;

		}
	}

	$.ajax({
				url : wrp_script_direct + struts2NamespaceVal + "/VerificaDatiFatca.action"+ "?cf=" + Math.random(),
				dataType : "json",
				data : {
					'datiFatcaJsonArray' 	  : JSON.stringify(objDatiFatcaJsonArray) ,
					'codiceTitolo' 	  		  : datiFatca.codiceTitolo,		//verifica se deve essere quello di ingresso ?
					'codiceSocietaDiGestione' : datiFatca.codiceSocietaDiGestione,
					'deposito' 				  : datiFatca.deposito,
					'fondosicav' 			  : datiFatca.fondosicav,
					'tipoInvestimento' 		  : datiFatca.tipoInvestimento
				},

				success : function(dataOutJSON, status, jqXHR) { // jqXHR.statusText="OK"; status="success"
					var msg = "Si &egrave; verificato un errore di connessione";
					if (200 == jqXHR.status) {
						datiFatcaConfermaJson = $.parseJSON(dataOutJSON.data.datiFatcaJson);
						if (datiFatcaConfermaJson == undefined 	|| datiFatcaConfermaJson == null || datiFatcaConfermaJson == "") {
							showError(true, "E", msg);
							$('#sezioneFatca').removeClass("loading");
						} 
						else if ("failure" == datiFatcaConfermaJson.action) {
							showError(true, "E", datiFatcaConfermaJson.errorMessage);
							$('#sezioneFatca').removeClass("loading");
						} 
						else {
							showError(false, null, null);
							
							$("#numeroAppropriatezza").val("-1");
							
							$("#checkFatca")				.val("false");	//solo per test
//							$("#checkAdever")				.val("true");	//solo per test
							
							$("#fatcaInvestimentiForm").attr("action", datiFatca.forwardAction + "?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+datiFatca.obskeyVal);
							$("#fatcaInvestimentiForm").submit();
							
						}
					} else {
						showError(true, "E", msg);
						$('#sezioneFatca').removeClass("loading");
					}
				},
				error : function(jqXHR, status, errorThrown) {
					var msg = "Si &egrave; verificato un errore di connessione";
					showError(true, "E", msg);
					$('#sezioneFatca').removeClass("loading");
				}
//			 ,complete: function (jqXHR, status){
//				 $('#sezioneFatca').removeClass("loading");
//			 }
			});
}

function indietroDaFatca() {
	
	var urlParam = "";
	if(string_vuoto != codInt){
		urlParam = "&codInt="+codInt+"&codIsin="+codIsin+"&divisa="+divisa;
	}
	
	$("#numeroAppropriatezza").val("0");
	$("#fatcaInvestimentiForm").attr("action", datiFatca.backAction +"?"+"cf=" + Math.random() +urlParam+ "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+datiFatca.obskeyVal);
	$("#fatcaInvestimentiForm").submit();
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

var divAccordion = " \
	<div id=\"panel_{{index}}\" class=\"panel panel-default \"> \
		<div id=\"heading_{{index}}\" class=\"panel-heading\" role=\"tab\"> \
			<h4 id=\"title_{{index}}\" class=\"panel-title\"> \
				<a id=\"toggle_{{index}}\" data-toggle=\"collapse\" href=\"#collapse_{{index}}\" aria-expanded=\"true\" aria-controls=\"collapse_{{index}}\" class=\"collapsed\"> \
					{{nomeCognome}} \
					<i class=\"icon icon-arrow_down\"></i><i class=\"icon icon-arrow_up\"></i> \
				</a> \
			</h4> \
		</div> \
		<div id=\"collapse_{{index}}\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading_{{index}}\" aria-expanded=\"true\" style=\"\"> \
			<div id=\"panelbody_{{index}}\" class=\"panel-body\"> \
				<div class=\"formGenerico borderFormRounded\"> \
					<div class=\"form-group\"> \
						<div class=\"row\"> \
							<div class=\"col-sm-12\"> \
								<label class=\"control-label-output\">Nome Cognome</label>  \
								<span class=\"output\" id=\"intestNomeCognome\"></span> \
							</div> \
						</div> \
						<div class=\"row\"> \
							<div class=\"col-sm-6\"> \
								<label class=\"control-label-output\">Data di nascita</label>  \
								<span class=\"output\" id=\"intestDataNascita\"></span> \
							</div> \
							<div class=\"col-sm-6\"> \
								<label class=\"control-label-output\">Luogo di nascita</label>  \
								<span class=\"output\" id=\"intestLuogoNascita\"></span> \
							</div> \
						</div> \
						<div class=\"row\"> \
							<div class=\"col-sm-6\"> \
								<label class=\"control-label-output\">Telefono</label>  \
								<span class=\"output\" id=\"intestTelefono\"></span> \
							</div> \
							<div class=\"col-sm-6\"> \
								<label class=\"control-label-output\">Cittadinanza</label>  \
								<span class=\"output\" id=\"intestCittadinaza\"></span> \
							</div> \
						</div> \
						<div class=\"row\"> \
							<div class=\"col-sm-6\"> \
								<label class=\"control-label-output\">Indirizzo di residenza</label>  \
								<span class=\"output\" id=\"intestIndirizzoRes\"></span> \
							</div> \
							<div class=\"col-sm-6\"> \
								<label class=\"control-label-output\">Indirizzo di corrispondenza</label>  \
								<span class=\"output\" id=\"intestIndirizziCorr\"></span> \
							</div> \
						</div> \
						<div class=\"row\"> \
							<div class=\"col-sm-12\"> \
								<p>Alla luce di tali normative, ti chiediamo di \
									<a class=\"linkTodisable\" 			id=\"modaldis\" 		data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#layeralert2\" onclick=\"loadData(this.id);\" style=\"text-decoration:underline;color:#6f8f0a\" > \
									dichiarare il/i tuo/tuoi Paese/i di residenza fiscale.</a> \
									<a class=\"linkTodisable disabled\" 	id=\"modaldisabled\" 	data-backdrop=\"static\" style=\"display: none;\"> \
									dichiarare il/i tuo/tuoi Paese/i di residenza fiscale.</a> \
								</p> \
							</div> \
						</div> \
					</div> \
				</div> \
			</div> \
		</div> \
	</div>";