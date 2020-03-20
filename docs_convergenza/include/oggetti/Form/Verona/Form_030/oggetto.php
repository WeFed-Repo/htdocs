<section>	
	<div class="clearfix selezioneCC selezioneCCNoBor">
		<h3 class="titleSection">
			<span class="hidden-xs">Selezione rapporti</span>
			<span class="visible-xs">Trasferisci da</span>
		</h3>
		<div class="innerSection row CCselezionato">
			<div class="verticalAlignMultipleColumns col-sm-6 col-xs-12">
				<div class="bgwhite" id="c_add">
					<div class="row hidden-xs">
						<div class="col-xs-12">Trasferisci da</div>
					</div>
					
					<input type="hidden" name="ndgContoAddebito" value="15865341" id="ndgContoAddebito">
					<input type="hidden" name="filialeContoAddebito" value="2070" id="filialeContoAddebito">
					<input type="hidden" name="descrizioneFilialeAddebito" value="MILANO" id="descrizioneFilialeAddebito">
					<input type="hidden" name="codiceContoAddebito" value="207000000000" id="codiceContoAddebito">
					<input type="hidden" name="intestzioneContoAddebito" value="Cognome Nome" id="intestzioneContoAddebito">
					<input type="hidden" name="saldoDisponibileAddebito" value="88,00" id="saldoDisponibileAddebito">


					<div class="row" id="trasf"> 
						<div class="riquadro clearfix" id="sliderAddValidi">
							<h3 class="titleSectionDouble col-xs-12">Conto corrente - 00000000 - MILANO - 0000- Cognome Nome</h3>
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-6">Saldo disponibile:</div>
									<div class="col-xs-6 output" id="saldoDisponibile">88,00</div>
								</div>
								<div class="row">
									<div class="col-xs-6">Saldo contabile:</div>
									<div class="col-xs-6 output" id="saldoContabile">88,00</div>
								</div>
								<div class="row">
									<div class="col-xs-6">Affidamento:</div>
									<div class="col-xs-6 output" id="affidamento">0,00</div>
								</div>
							</div>

							<!--MODIFICATO WEFED -->
							<div class="sliderStaticWrapper">
								<div class="sliderInner">
									<a class="meno prev disabled" href="">
										<span class="paginationArrow">
											<i class="icon icon-arrow_left"></i>
										</span>
									</a>
									<div id="sliderAdd" class="slider sliderStatic ui-slider-handle-disabled"><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0">1</span></div>
									<a href="" class="piu next">
										<span class="paginationArrow">
											<i class="icon icon-arrow_right"></i >
										</span>
									</a>
								</div>								
							</div>
						</div>
						<div class="riquadro clearfix" id="sliderAddNonValidi" style="display:none">
							<h3 class="titleSectionDouble">Conto corrente - 00000002 - MILANO - 0000- Cognome Nome</h3>
							<div class="ui-corner-all homeMsg boxNessRapp">
								<span class="ui-icon ui-icon-info"> </span> 
								<strong>Attenzione</strong> 
								<span class="msg">Nessun rapporto disponibile</span>
								
								<a href="/WEBHT/cd/listaContiAppoggio.do">Aggiungi rapporto</a>
								
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="section-responsive col-xs-12 visible-xs">
				<h3 class="titleSection">
					<span class="visible-xs">Trasferisci a</span>
				</h3>
			</div>
			<div class="verticalAlignMultipleColumns col-sm-6 col-xs-12">	
				<div class="bgwhite" id="c_acc">
					<div class="row hidden-xs">
						<div class="col-xs-12">a</div>
					</div>

					<input type="hidden" name="ndgContoAccredito" value="15865341" id="ndgContoAccredito">
					<input type="hidden" name="filialeContoAccredito" value="2070" id="filialeContoAccredito">
					<input type="hidden" name="descrizioneFilialeAccredito" value="MILANO" id="descrizioneFilialeAccredito">
					<input type="hidden" name="codiceContoAccredito" value="207000000000" id="codiceContoAccredito">
					<input type="hidden" name="saldoDisponibileAccredito" value="5,00" id="saldoDisponibileAccredito">

					<div class="row" id="trasf"> 
						<div class="riquadro clearfix" id="sliderAccValidi">
							<h3 class="titleSectionDouble col-xs-12">Conto deposito - 00000000 - MILANO - 0000- Cognome Nome</h3>
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-6">Saldo disponibile:</div>
									<div class="col-xs-6 output" id="saldoDisponibile">5,00</div>
								</div>
								<div class="row">
									<div class="col-xs-6">Saldo contabile:</div>
									<div class="col-xs-6 output" id="saldoContabile">5,00</div>
								</div>
								<div class="row">
									<div class="col-xs-6">Affidamento:</div>
									<div class="col-xs-6 output" id="affidamento">0,00</div>
								</div>
							</div>	
							<!--MODIFICATO WEFED -->
							<div class="sliderStaticWrapper">
								<div class="sliderInner">
									<a class="meno prev disabled" href=""><img src="/HT/fe/img/icon_slide_left.png"  title="Precedente" alt="Precedente"></a>
									<div id="sliderAcc" class="slider sliderStatic ui-slider-handle-disabled"><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0">1</span></div>
									<a href="" class="piu next"><img src="/HT/fe/img/icon_slide_right.png" title="Successivo" alt="Successivo"></a>
								</div>
							</div>
						</div>
						<div class="riquadro clearfix" id="sliderAccNonValidi" style="display:none">
							<h3 class="titleSectionDouble">Conto deposito - 00000000 - MILANO - 0000- Cognome Nome</h3>
							<div class="ui-corner-all homeMsg boxNessRapp">
								<span class="ui-icon ui-icon-info"> </span> 
								<strong>Attenzione</strong> 
								<span class="msg">Nessun rapporto disponibile</span><br>
								
								<a href="/WEBHT/cd/listaContiAppoggio.do">Aggiungi rapporto</a>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="section clearfix">
		<h3 class="titleSection">Dati trasferimento</h3>
		<div class="bs-example">
			<div class="form-group clearfix">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-4">
						<div class="sottolineato-ombra">Disponibilità conto addebito</div>
						<div class="form-field" id="saldoAddebitoShadow">88,00</div>
					</div>				
					<div class="form-field-input col-xs-12 col-sm-4">					
						<label class="control-label" for="importoInt">Importo da trasferire</label>
						<div class="form-field">						
							<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt"  class="form-control input-inline">
							<span class="fLeft paddingSmall">,</span>
							<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" class="form-control input-inline">
							<span class="fLeft paddingSmall vertical-center eur_nopad_right">EUR</span>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-4">
						<div class="sottolineato-ombra">Disponibilità conto accredito</div>

						<div class="form-field" id="saldoAccreditoShadow">5,00</div>
					</div>
				</div>
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-12">
						<label class="control-label">Causale</label>
						<div class="form-field">
							<input type="text" name="causale" value="" onblur="upperCase(this)" id="causale" class="form-control">
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	</div>	
<section>
<script type="text/javascript" language="javascript" src="http://localhost/lib/docs_convergenza./HT/fe/js/jquery/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" language="javascript" src="http://localhost/lib/docs_convergenza./HT/fe/js/jquery/jquery-ui.selectToUISlider.js"></script>
<link rel="Stylesheet" type="text/css" href="http://localhost/lib/docs_convergenza./HT/fe/css/ui.slider.extras.css">

<script>

var jsonAddebito = [{"intestazione":"Conto corrente - 00000000 - MILANO - 0000- Cognome Nome","intestazioneBreve":"Cognome Nome","codice":"207000000000","ndgConto":"15865341","filiale":"2070","descrizioneFiliale":"MILANO","saldoDisponibile":"88,00","saldoContabile":"88,00","affidamento":"0,00"},{"intestazione":"Conto deposito - 00000000 - MILANO - 0000- Cognome Nome","intestazioneBreve":"Cognome Nome","codice":"207000000000","ndgConto":"15865341","filiale":"2070","descrizioneFiliale":"MILANO","saldoDisponibile":"5,00","saldoContabile":"5,00","affidamento":"0,00"},{"intestazione":"Conto deposito - 00000000 - MILANO - 0000- Cognome Nome","intestazioneBreve":"Cognome Nome","codice":"207000000000","ndgConto":"15865341","filiale":"2070","descrizioneFiliale":"MILANO","saldoDisponibile":"5,00","saldoContabile":"5,00","affidamento":"0,00"}];
var jsonAccredito = [{"intestazione":"Conto deposito - 00000000 - MILANO - 0000- Cognome Nome","intestazioneBreve":"Cognome Nome","codice":"207000000000","ndgConto":"15865341","filiale":"2070","descrizioneFiliale":"MILANO","saldoDisponibile":"5,00","saldoContabile":"5,00","affidamento":"0,00"}];

function checkImportoNegativo(importo, id, parent){
	$("#"+parent + " #"+id).removeClass("negativo");
	if(parseInt(importo) < 0){
		$("#"+parent + " #"+id).addClass("negativo");
	}
}

function renderBox(id, elemento, json){
	
	var descrizione 	= json[id].intestazione;
	var saldoDisponibile= json[id].saldoDisponibile;
	var saldoContabile 	= json[id].saldoContabile;
	var affidamento 	= json[id].affidamento;
	var ndgConto	 	= json[id].ndgConto;
	var filialeConto	= json[id].filiale;
	var filialeDescr	= json[id].descrizioneFiliale;
	var codiceConto 	= json[id].codice;
	var intestatario	= json[id].intestazioneBreve;
	
	$("#"+elemento+" h3.titleSectionDouble").text(json[id].intestazione);
	$("#"+elemento+" #saldoDisponibile").text(json[id].saldoDisponibile);
	$("#"+elemento+" #saldoContabile").text(json[id].saldoContabile);
	$("#"+elemento+" #affidamento").text(json[id].affidamento);
	
	checkImportoNegativo(saldoDisponibile, "saldoDisponibile", elemento);
	checkImportoNegativo(saldoContabile, "saldoContabile", elemento);
	checkImportoNegativo(affidamento, "affidamento", elemento);
	
	if("c_add" == elemento){
		$("#c_add").find("#ndgContoAddebito").val(ndgConto);
		$("#c_add").find("#filialeContoAddebito").val(filialeConto);
		$("#c_add").find("#codiceContoAddebito").val(codiceConto);
		$("#c_add").find("#intestzioneContoAddebito").val(intestatario);
		$("#c_add").find("#descrizioneFilialeAddebito").val(filialeDescr);
		$("#c_add").find("#saldoDisponibileAddebito").val(saldoDisponibile);
		$("#saldoAddebitoShadow").empty().text(saldoDisponibile);
		
	}else if("c_acc" == elemento){
		$("#c_acc").find("#ndgContoAccredito").val(ndgConto);
		$("#c_acc").find("#filialeContoAccredito").val(filialeConto);
		$("#c_acc").find("#codiceContoAccredito").val(codiceConto);
		$("#c_acc").find("#intestazioneContoAccredito").val(intestatario);
		$("#c_acc").find("#descrizioneFilialeAccredito").val(filialeDescr);
		$("#c_acc").find("#saldoDisponibileAccredito").val(saldoDisponibile);
		$("#saldoAccreditoShadow").empty().text(saldoDisponibile);
	}
}

function localeString(x) {
  	var sep = '.'; 
  	var grp = '3'; 
    var sx = (''+x).split('.'), s = '', i, j;
    sep || (sep = '.'); // default seperator
    grp || grp === 0 || (grp = 3); // default grouping
    i = sx[0].length;
    while (i > grp) {
        j = i - grp;
        s = sep + sx[0].slice(j, i) + s;
        i = j;
    }
    s = sx[0].slice(0, i) + s;
    sx[0] = s;
    return sx.join(',')
}
	
$('#saldoAddebitoShadow').bind("DOMSubtreeModified",function(){
 	var numb = $('#saldoAddebitoShadow').text();
});

function updateSaldi(){
 	var imp = $("#importoInt").val()+"."+$("#importoDec").val();
 	
 	var dispAddebito = $("#c_add #saldoDisponibile").text();
    dispAddebito = dispAddebito.split(".").join("").split(",").join(".");
    var newDispAddebito = dispAddebito - imp;
    if(isNaN(newDispAddebito)){
    	newDispAddebito = dispAddebito;
    }
    var negativo = " ";
    if(newDispAddebito < 0){
    	$("#saldoAddebitoShadow").addClass("negativo");
    	negativo = "-";
    	newDispAddebito = newDispAddebito * -1;
    }else{
    	negativo = " ";
    	$("#saldoAddebitoShadow").removeClass("negativo");
    }
    $("#saldoAddebitoShadow").text(localeString(newDispAddebito.toFixed(2))).prepend(negativo);
    var dispAccredito= $("#c_acc #saldoDisponibile").text();
    
	dispAccredito =  dispAccredito.replace(".","").replace(",",".");
    var newDispAccredito = parseFloat(dispAccredito) + parseFloat(imp);
    if(isNaN(newDispAccredito)){
    	newDispAccredito = dispAccredito; 
    }
    if(newDispAccredito < 0){
    	$("#saldoAccreditoShadow").addClass("negativo");
    	negativo = "-";
    	newDispAccredito = newDispAccredito * -1;
    	
    }else{
    negativo = " ";
    	$("#saldoAccreditoShadow").removeClass("negativo");
    }
    $("#saldoAccreditoShadow").text(localeString(newDispAccredito.toFixed(2))).prepend(negativo);
}

$(document).ready(function(){
	//maxLengthTextArea(100);
	
	/* Aggancio eventi al cambio importo del trasferimento */
	$('#importoInt').on('propertychange', function(e){
 		updateSaldi();
	});
	$('#importoInt').on('input',function(e){
		updateSaldi();
	});
	
	$('#importoDec').on('propertychange',function(e){
 		updateSaldi();
 	});
	$('#importoDec').on('input',function(e){
		updateSaldi();
	});
	
	// inizializzo lo slider dei conti di addebito
	sliderAddebito();
	// setto la posizione dello slider dei conti di addebito
	renderBox(0, "c_add", jsonAddebito);
	$("#sliderAdd").slider("value", 0);
	if(0 == 0){
		$("#c_add a.meno").addClass("disabled");
	}

	// inizializzo lo slider dei conti di accredito
	sliderAccredito();
	
	if($("#importoInt").val()){
		updateSaldi();
	}
});

$(".next").click(function(e){
	e.preventDefault ? e.preventDefault() : (e.returnValue = false);
	var riquadro = $(this).parents(".riquadro")[0];
	var slider = $(riquadro).find(".slider")[0];
	var parent = $(this).closest("div[id^='c_a']").attr("id");
	var currentId = parseInt($("#"+parent+ " span.ui-slider-handle").text());
	var count = 0;
	if("c_add" == parent){
		count = jsonAddebito.length;
  	}else{
		count = jsonAccredito.length;
  	}
	if(currentId === count){
		return null;
	}

	$(slider).slider("value", currentId);

  	if("c_add" == parent){
		renderBox(currentId, parent, jsonAddebito);
  	}else{
		renderBox(currentId, parent, jsonAccredito);
  	}

	updateSaldi();
});
	
$(".prev").click(function(e){
	e.preventDefault ? e.preventDefault() : (e.returnValue = false);
	var parent = $(this).closest("div[id^='c_a']").attr("id");
	var currentId = parseInt($("#"+parent+" span.ui-slider-handle").text()) - 2;
	var riquadro = $(this).parents(".riquadro")[0];
	var slider = $(riquadro).find(".slider")[0];
	
	if(currentId + 1 === 0){
		return null;
	}

	$(slider).slider("value", currentId);
  	$("#"+ parent +" div[id^='trasf']").attr("id", "trasf"+currentId);
  	if("c_add" == parent){
		renderBox(currentId, parent, jsonAddebito);
  	}else{
		renderBox(currentId, parent, jsonAccredito);
  	}
	updateSaldi();
});

/* Slider sezione accredito */
window.sliderAccredito = function () {	
	$("#sliderAcc").slider({
		max: jsonAccredito.length - 1,
		step: 1,
		slide: function(event, ui){
			//$("#c_acc .ui-slider-handle").text(ui.value + 1);
			event.preventDefault(); //MODIFICATA WEFED 
		},
		change: function( event, ui ) {
			renderBox(ui.value, "c_acc",jsonAccredito);
			// aggiorno l'indicatore di posizione dello slider
			// aggiorno l'indicatore di posizione dello slider //MODIFICATA WEFED ETICHETTA
			$("#c_acc .ui-slider-handle").text(ui.value + 1 + ' di ' + jsonAccredito.length);
			var count = jsonAccredito.length;
			if(ui.value == 0){
				$("#c_acc a.meno").addClass("disabled");
			}else{
				$("#c_acc a.meno").removeClass("disabled");
			}
			if(ui.value == count - 1){
				$("#c_acc a.piu").addClass("disabled");
			}else{
				$("#c_acc a.piu").removeClass("disabled");
			}
		}
	});
	
	// setto la posizione dello slider dei conti di accredito
	if(jsonAccredito.length > 0){
		$("#sliderAccNonValidi").hide();
 		$("#sliderAccValidi").show(); 
		//$("input[type='submit']").removeClass("disabled");
		
		var contoAccredito = 0;
		if (contoAccredito>(jsonAccredito.length-1)) contoAccredito = 0;
		
		renderBox(contoAccredito, "c_acc", jsonAccredito);
		$("#sliderAcc").slider("value", contoAccredito);
		
		if(contoAccredito === 0){
			$("#c_acc a.meno").addClass("disabled");
		}
	}else{
		$("#sliderAccNonValidi").height($("#sliderAccValidi").height());
		$("#sliderAccValidi").hide();
		$("#sliderAccNonValidi h3.titleSectionDouble").text("");
		$("#sliderAccNonValidi").show();
		
		//$("input[type='submit']").addClass("disabled");
	}
};

/* Slider sezione addebito */
window.sliderAddebito = function () {
	$( "#sliderAdd").slider({
		max: jsonAddebito.length - 1,
		step: 1,
	 	slide: function(event, ui){
	 		//indicatore slider fisso
			event.preventDefault(); //MODIFICATA WEFED 
		},
		change: function( event, ui ) {
			
			renderBox(ui.value, "c_add",jsonAddebito);
			// al cambio del conto di addebito, aggiorno la lista dei conti di accredito
			updateJsonAccredito(jsonAddebito[ui.value]);
			// aggiorno l'indicatore di posizione dello slider //MODIFICATA WEFED ETICHETTA
			$("#c_add .ui-slider-handle").text(ui.value + 1 + ' di ' + jsonAddebito.length);
			
			var count = jsonAddebito.length;
			if(ui.value == 0){
				$("#c_add a.meno").addClass("disabled");
			}else{
				$("#c_add a.meno").removeClass("disabled");
			}
			if(ui.value == count - 1){
				$("#c_add a.piu").addClass("disabled");
			}else{
				$("#c_add a.piu").removeClass("disabled");
			}
		 }
	});
	
}

window.updateJsonAccredito = function(rapportoAddebito) {
	// blocco interfaccia
	if (!isMobile() && !$("body").hasClass("catalogo-oggetti")){
		$.blockUI({
			theme: true,
		    message: '<div class="margin-left10"><p><br />Attendere prego...</p></div><br /><br />' 
		});
	};
	// chiamata ajax di update conto di accredito
	$.ajax({
		method: "POST",
   		// url: getPathContext()+"/pagamenti/trasferimentoContiJson.do",
   		url: "/pagamenti/trasferimentoContiJson.do",
   		data: {codiceConto: rapportoAddebito.codice},
   		dataType: "json",
		complete: function(response) {
	   		jsonAccredito = response.responseJSON;
	   		if (jsonAccredito==undefined){
	   			jsonAccredito = [];
	   		}
	   		sliderAccredito();
   		}
  	});
  	// sblocco interfaccia
  	if (!isMobile()){
		$.unblockUI();
	};
};
</script>
