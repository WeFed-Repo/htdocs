<h1 id="id_label">Trasferisci</h1> <div class="fooform fooform_tit" id="id_aggiorna" style="display:none;"></div>
<link rel="stylesheet" type="text/css" href="/wscmn/css/priv_ret_rbf.css" media="all" /> 
<link rel="stylesheet" href="/wscmn/css/priv_calendar.css" type="text/css" media="all"/>
<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>

<script type="text/javascript">
var importoRisparmiabile;
var importoRisparmiato;
var capitaleRisparmiatoParteObiettiviFormat;
var capitaleRisparmiatoParteLiberaFormat;
var totAccantonamentoEvo;
var totAccantonamentoEvoFormat;
var listaVersamenti;
var dashboardData = {contoEvo: []}; 

function manageScadenza(selectedScadenzaType) {
	if(selectedScadenzaType == '0'){
		$('#numeroTrasferimenti').val('');
		$('#numeroTrasferimenti').attr("disabled", "disable");
	}else{
		$('#numeroTrasferimenti').val('');
		$('#numeroTrasferimenti').removeAttr("disabled");
	}
}

function trasferisci(isFromCCx) {
	if(isFromCCx){
		$('#importo').val($('#importoCCEvoVersamenti').val());
		$('#fromCC').val(true);
		callAjaxTrasferisci();
	} else {
		$('#importo').val($('#importoEvoCCVersamenti').val());
		$('#fromCC').val(false);
		callAjaxTrasferisciPre();
	}
	
}

function callAjaxTrasferisciPre() {
	if(validationSingolo()){
		var importoFormat = formattaNumeriInput($('#importo').val());
		if(parseFloat(importoFormat) > parseFloat(capitaleRisparmiatoParteLiberaFormat)){
			$('#labelImportoErosione').html(formattaNumOutput($('#importoEvoCCVersamenti').val())+' &euro;');
			setLoadingOnObject('contenuti',null,null,null);			
			openAlert('alertErosioneObiettivi');	
		} else {
			callAjaxTrasferisci();
		}		
	}	
}

function callAjaxTrasferisci() {
	$('#tipoForm').val('singolo');
	if(validationSingolo()){
		setLoadingOnObject('contenuti',null,null,null);
		var url = cgi_script + '/banking/WsGreenButton0.do',
		parameters = $( '#DATI' ).serialize( true ),
		successFunc = function (json) {
			unsetLoadingOnObject('contenuti');
			if(this.data.indexOf("fromCC=true")>=0){
				if(json.esito != 'ok'){
					//$('#boxEsitoTransfEvo').removeClass('positivo').addClass('negativo');
					$('#esitoTextTransfEvo').html(json.messaggio);
					$('#boxTransfEvo').hide('slow');
					$('#boxTrasfSingVsEvoEsiNega').show('slow');
				} else {
					$('#labelImportoTransfEvo').html(json.importoVersato);
					$('#labelDataAccreditoTransfEvo').html(json.dataAccredito);
					$('#boxTransfEvo').hide('slow');
					$('#boxTrasfSingVsEvoEsiPosi').show('slow');
				}
				
			} else {
				if(json.esito != 'ok'){
					//$('#boxEsitoSvuotaEvo').removeClass('positivo').addClass('negativo');
					$('#esitoTextSvuotaEvo').html(json.messaggio);
					$('#boxSvuotaEvo').hide('slow');
					$('#boxTrasfSingVsCCEvoEsiNega').show('slow');
					//$('#esitoTextSvuotaEvo').append('<div class="row-fluid formGeneric"><div class="span9"><span><a href="javascript:nuovoSvuotaEvo();resetForm();">chiudi</a></span></div></div>');
				} else {
					$('#labelImportoSvuotaEvo').html(json.importoVersato);
					$('#labelDataAccreditoSvuotaEvo').html(json.dataAccredito);	
					$('#boxSvuotaEvo').hide('slow');
					$('#boxTrasfSingVsCCEvoEsiPosi').show('slow');
				}
			}
			console.log('saldo vincolabile: '+json.saldoVincolabileFormat);
			console.log('capitale Risparmiato: '+json.capitaleRisparmiatoFormat);			
			dashboardData.contoEvo.saldoDisponibileFormat = parseFloat(json.saldoVincolabileFormat);
			dashboardData.contoEvo.capitaleRisparmiatoFormat = parseFloat(json.capitaleRisparmiatoFormat);
			resetAnimazioneTrEvo();
		},
		failureFunc = function () { 
			unsetLoadingOnObject('contenuti');
			alert('errore nella chiamata');
			
		};
		jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	}
}

function resetForm(){
	$('#importo').val();
// 	$('#importo').val(true);
// 	$('#importo').val('3');
	$('#tipoForm').val('');	
	$('#importoPeriodico').val('');
	$('#frequenza').val('');	
	$('#aPartireDaTREvof').val('');	
	$('#scadenza').val('');
	$('#numeroTrasferimenti').val('');	
	$('#sogliaMinima').val('');
	$('#sogliaMassima').val('');
	$('#importoCCEvoVersamenti').val('');
	$('#importoEvoCCVersamenti').val('');
	$('#revocaEvo').prop('checked', false);
	$('#dopoNEvo').prop('checked', false);
	$('#diventaEVOTrspan').hide();
	$('#diventaCCEVOTrspan').hide();
}

function validationSingolo(){
	var errors = [];
	
	if($('#fromCC').val()=="true"){
//  trasferimento su evo
		if(! parseFloat(importoRisparmiabile) > parseFloat(0)){
			errors.push({ field: $('#importoCCEvoVersamenti'), text: "Importo risparmiabile negativo" });
		} else {
			if($('#importoCCEvoVersamenti').val() == ''){
				errors.push({ field: $('#importoCCEvoVersamenti'), text: "Inserisci importo" });
			}
			else if(!parseFloat(formattaNumeriInput($('#importoCCEvoVersamenti').val())) > parseFloat(0)){
				errors.push({ field: $('#importoCCEvoVersamenti'), text: "Inserisci un valore maggiore di zero" });
			}
			else if(parseFloat(formattaNumeriInput($('#importoCCEvoVersamenti').val())) > parseFloat(importoRisparmiabile) ){
				errors.push({ field: $('#importoCCEvoVersamenti'), text:"Importo risparmiabile minore dell'importo da trasferire" });
			}
		}		
	} else {
//  trasferimento da evo
		if($('#importoEvoCCVersamenti').val() == ''){
			errors.push({ field: $('#importoEvoCCVersamenti'), text: "Inserisci importo" });
		}
		else if(!parseFloat(formattaNumeriInput($('#importoEvoCCVersamenti').val())) > parseFloat(0)){
			errors.push({ field: $('#importoEvoCCVersamenti'), text: "Inserisci un valore maggiore di zero" });
		}		
	}
	
	setErrors(errors, "#DATI");
	if (errors.length) {
		return false;
	} else {
		return true;
	}	
}

function nuovoTransfEvo(){
	$('#boxTrasfSingVsEvoEsiPosi').hide('slow');
	$('#boxTrasfSingVsEvoEsiNega').hide('slow');
	$('#boxTransfEvo').show('slow');
	$('#importoCCEvoVersamenti').val('');
	$('#importo').val('');
}

function nuovoSvuotaEvo(){
	$('#boxTrasfSingVsCCEvoEsiPosi').hide('slow');
	$('#boxTrasfSingVsCCEvoEsiNega').hide('slow');
	$('#boxSvuotaEvo').show('slow');
	$('#importoEvoCCVersamenti').val('');
	$('#importo').val('');
}




//Inizio - funzionanti ma ad ora inutilizzate
function aggiungiSalvadanaio(){
	if(!$('#importoCCEvoVersamenti').val() == ''){
		var salvadanaioFuturo;
		salvadanaioFuturo = parseFloat(totAccantonamentoEvo) + parseFloat($('#importoCCEvoVersamenti').val().replace(",","."));
		$('#diventaEVOTr').html(salvadanaioFuturo);
		$('#diventaEVOTrspan').show();
	} else {
		$('#diventaEVOTrspan').hide();
		$('#diventaEVOTr').html("");
	}	
}

function sottraiSalvadanaio(){
	if(!$('#importoEvoCCVersamenti').val()==""){
		var salvadanaioFuturo;
		salvadanaioFuturo = parseFloat(totAccantonamentoEvo) - parseFloat($('#importoEvoCCVersamenti').val().replace(",","."));
		$('#diventaCCEVOTr').html(salvadanaioFuturo);
		$('#diventaCCEVOTrspan').show();	
	} else {
		$('#diventaCCEVOTrspan').hide();
		$('#diventaCCEVOTr').html("");
	}	
}
//fine - funzionanti ma ad ora inutilizzate




</script>
	
<div class="boxcomunicaz_dettaglio">
	<p>
		In questa pagina puoi:<br>
		- alimentare il Risparmio Libero o i tuoi obiettivi.<br>
		- trasferire gli importi che desideri sul conto corrente.
	</p>
</div>
<br>
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

<div>
	<form name="DATI" action="" id="DATI">
	


<input name="tabId"	type="hidden"	value="nav_priv_wbx_rbf" />
<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_trasferisci" />

<input name="OBSKEY3"	type="hidden"	value="" />

<input name="OBSCNT"	type="hidden"	value="" />
<input name="cf"	type="hidden"	value="0.22446901132986885" />
<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
<input name="siglaAzione"	type="hidden"	value="" />

	<input name="forwardto" type="hidden" value="" />
	<input name="keep" type="hidden" value="" />
	
	<input name="importo" type="hidden" value="" id="importo" />
	<input name="fromCC" type="hidden" value="" id="fromCC"/>
	<input name="tipoDispositivo" type="hidden" value="3" />
	
	<input name="tipoForm" id="tipoForm" type="hidden" value="" />
		<div class="borderFormRounded margBottomLarge margTopSmall">
			<div class="formGeneric">
				<div class="row-fluid">
					<div class="span4 no-desktop">
						<label class="nomefield">Conto corrente</label>
						<!-- === org.apache.jsp.banking.accountsListSelect_jsp === { -->
						<strong>CC 00000 0000066117 EUR</strong><input name="numeroConto" type="hidden" id="idNumeroConto" value="00000 - 0000066117 - EUR" />
						<!-- } === org.apache.jsp.banking.accountsListSelect_jsp === -->
					</div>
					<div class="span8 no-desktop">&nbsp;</div>				
				</div>	
			</div>
		</div>
		<br class="clear">
		
		<ul class="tabGeneric">
			<li class="active" id="tabRisparmio">
				<span class="tabBorder">
					<span class="tabGradient">
						<a href="javascript:;" title="Versa risparmio">Versa risparmio</a>
					</span>
				</span>
			</li>
			<li class="" id="tabContoCorrente">
				<span class="tabBorder">
					<span class="tabGradient">
						<a href="javascript:;" title="Versa conto corrente">Versa conto corrente</a>
					</span>
				</span>
			</li>
		</ul>
		
		<div class="formGeneric tabContent" id="formRisparmio">
			<div class="row-fluid">
				<div class="span6">
					<div class="withEsito" id="transferWrap">
						<div class="row-fluid paddBottomLarge  margTopLarge">
							<div class="span4">
								<label class="nomefield">Disponibilit&agrave;</label>
							</div>
							<div class="span8">
								<span data-tooltip="La disponibilità per il trasferimento è calcolata sottraendo dal tuo saldo disponibile l'eventuale fido, le linee vincolate a scadenza, l'importo già versato su Risparmio Ben Fatto e la soglia minima di conto corrente impostata." class="txthelp"><span id="massimoImpCCEvoLink"></span>4.999<span class="valuta">€</span></span>
							</div>
						</div>
						
						<div class="row-fluid paddBottomLarge">
							<div class="span4">
								<label class="nomefield">Destinazione</label>
							</div>
							<div class="span8">
								<select id="selectDestinazione">
									<option value="1">Risparmio ben fatto (overlay OK)</option>
									<option value="2">Obiettivo scaduto (overlay Alert)</option>
								</select>
							</div>
						</div>
						
						<div class="row-fluid  paddBottomLarge">
							<div class="span4">
								<label class="nomefield">Importo</label>
							</div>
							<div class="span4">
								<input type="text" class="withIco" id="transTo"/><span class="intertext">&euro;</span>
							</div>			
							<div class="span4">
								<div class="aButtonconsRight paddBottomLarge">
									<a class="aButton" href="javascript:;" id="btnTrasferisci"><span>trasferisci</span></a>
								</div>
							</div>
						</div>	
						<!-- ESEMPI DI ESITI -->
						<div class="esito" id="boxEsito" style="display: none;top:0">
							<div class="boxesito attenzione" id="esitoAttenzione" style="display: none">
								<div class="middle"><span class="imgCont"></span>
									<div class="text paddTopLarge">
										<br>L'obiettivo scelto risulta scaduto, modificane la data nella <a href="#">pagina di gestione</a> quindi riprova.<br>
										<div class="paddtopLarge paddRightLarge flRight">
												<a class="undoSlide" href="javascript:;">Nuovo</a>
										</div>
									</div>
								</div>
							</div>
							<div class="boxesito positivo" id="esitoConferma" style="display: none">
								<div class="middle"><span class="imgCont"></span>
									<div class="text paddTopLarge">
										<br>Trasferimento eseguito correttamente.<br>
										<div class="paddtopLarge paddRightLarge flRight">
												<a class="undoSlide" href="javascript:;">Nuovo</a>
										</div>
									</div>
								</div>
							</div>
						</div>						
						<!-- FINE ESEMPI DI ESITI -->
					</div>
				</div>
				
				<div class="span6">
					<img id="imgAnimTr" src="/img/ret/img_animaz_evo_01.gif">
				</div>
			</div>
		</div>
		
		<!-- RIPORTA SU CONTO CORRENTE -->
		<div class="formGeneric tabContent" id="formContoCorrente" style="display: none;">
			
			<div class="row-fluid">
				<div class="span6">
					<div class="withEsito" id="contoWrap">
						<div class="row-fluid  paddBottomLarge">
							<p>
							Puoi trasferire l'importo che desideri dal Risparmio Libero al conto corrente.<br>
							Attenzione: se l'importo che vuoi trasferire non è disponibile sul Risparmio Libero, la somma necessaria per eseguire l'operazione sarà prelevata da uno o più obiettivi. Controlla qui sotto le cifre attualmente impegnate. 
							</p>
							<div class="boxSaldi">
								<span class="totali"><strong>Saldo Totale</strong> al 22/10/2015<span class="flRight">5.999 &euro;</span></span>
								<ul class="dettagli">
									<li><span class="voce">di cui <a href="#"><strong>Risparmio libero</strong></a></span><span class="flRight">5.999 &euro;</span></li>
									<li><span class="voce">di cui <a href="#"><strong>Lorem ipsum</strong></a></span><span class="flRight">5.999 &euro;</span></li>
									<li><span class="voce">di cui <a href="#"><strong>Macladin supernova</strong></a></span><span class="flRight">5.999 &euro;</span></li>
									<li><span class="voce">di cui <a href="#"><strong>Dolor</strong></a></span><span class="flRight">5.999 &euro;</span></li>
									<li><span class="voce">di cui <a href="#"><strong>Sit amet consectetur adipiscing elit summa cum laude</strong></a></span><span class="flRight">5.999 &euro;</span></li>
								</ul>
							</div>
						</div>
						<div class="row-fluid  paddBottomLarge">
							<div class="span4">
								<label class="nomefield">Importo</label>
							</div>
							<div class="span4">
								<input type="text" class="withIco" id="transFrom"/><span class="intertext">&euro;</span>
							</div>			
							<div class="span4">
								<div class="aButtonconsRight paddBottomLarge">
									<a class="aButton" href="javascript:;" id="btnTrasferisciConto"><span>trasferisci</span></a>
								</div>
							</div>
						</div>	
						<!-- ESEMPI DI ESITI -->
						<div class="esito" id="boxEsitoConto" style="display: none;top:0">
							<div class="boxesito positivo" id="esitoConfermaConto" style="display: none">
								<div class="middle"><span class="imgCont"></span>
									<div class="text paddTopLarge">
										<br>Trasferimento eseguito correttamente.<br>
										<div class="paddtopLarge paddRightLarge flRight">
											<a class="undoSlide" href="javascript:;">Nuovo</a>
										</div>
									</div>
								</div>
							</div>
						</div>						
						<!-- FINE ESEMPI DI ESITI -->
					</div>
				</div>
				
				<div class="span6">
					<img id="imgAnimTrConto" src="/img/ret/img_animaz_evo_01.gif">
				</div>
			</div>
			
		</div>
		
	</form>
</div>










<script type="text/javascript" src="/wscmn/js/priv_ret_rbf.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
<script type="text/javascript">
var capitaleRisparmiatoFormat;
var capitaleRisparmiatoParteLiberaFormat;
var capitaleRisparmiatoParteObiettiviFormat;
var saldoDisponibileFormat;
var sogliaContoEvoMaxFormat;
var sogliaContoEvoMinFormat;
var sogliaMinimaDefault;

/* Inizializzazione oggetti interattivi in pagina*/
$(function(){
	// Tab
	$(".tabGeneric li").click(function(){
		$(".tabGeneric li").removeClass("active");
		$(this).addClass("active");
		$(".tabContent").hide();
		$("#form" + $(this).attr("id").replace("tab","")).show();
	});
	
		
	// Select destinazione (esempio raccolta overlay)
	$("#selectDestinazione").change(function(){
		if ($(this).val() == "2")
		{
			var slide = $('#boxEsito');
			$('#boxEsito').find(".boxesito").hide();
			$("#esitoAttenzione").show();
			doSlide($("#transferWrap"), slide);
		}
	});
	
	// Trasferisci ed overlay conferma
	$("#btnTrasferisci").click(function(){
		var slide = $('#boxEsito');
		$('#boxEsito').find(".boxesito").hide();
		$("#esitoConferma").show();
		doSlide($("#transferWrap"), slide);
	});

	// Chiude eventuali elementi slidati (conferme, box attenzione, ecc...)
	$("#formRisparmio .undoSlide").click(function(){
		undoSlide($("#transferWrap"), $('#boxEsito'));
	});
	
	// Trasferisci sul conto ed overlay conferma
	$("#btnTrasferisciConto").click(function(){
		var slide = $('#boxEsitoConto');
		$('#boxEsitoConto').find(".boxesito").hide();
		$("#esitoConfermaConto").show();
		doSlide($("#contoWrap"), slide);
	});
	
	// Chiude eventuali elementi slidati (conferme, box attenzione, ecc...)
	$("#formContoCorrente .undoSlide").click(function(){
		undoSlide($("#contoWrap"), $('#boxEsitoConto'));
	});
	
	// Animazione del porcellino (id campi modificabile)
	$("#transFrom").on("keyup",function(){
		$("#imgAnimTrConto").attr("src",($(this).val().length > 0)? "/img/ret/img_animaz_evo_75-50.gif" : "/img/ret/img_animaz_evo_01.gif")
	});
	
	$("#transTo").on("keyup",function(){
		$("#imgAnimTr").attr("src",($(this).val().length > 0)? "/img/ret/img_animaz_evo_50-75.gif" : "/img/ret/img_animaz_evo_01.gif")
	});
	
});
	
	
</script>
</div>


		