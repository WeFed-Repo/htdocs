<!-- CONFIGURAZIONE RICERCA -->
<script type="text/javascript">
/* PARAMETRI GLOBALI */
/*
swFondiUrl = isFund : elenco fondi da switchare
swFondiSwitch = ex fesTabella.do

*/
var swFondiUrl = "/librerie/include/commons/ajax/priv_investimenti_fondi.json", 
swFondiSwitch = "/librerie/include/commons/ajax/priv_investimenti_fondi_switch.json",
swFondiConfirm = "/librerie/include/commons/ajax/priv_investimenti_fondi_confirm.json";

<!-- CONFIGURAZIONE RICERCA -->
var fesConf = {
 "fesRendimento":{
    "PERFORMANCE_1_GG":{
      "defaultmin":"-5",
      "min":"-12.975",
      "defaultmax":"5",
      "max":"7.029",
      "periodo":"1 giorno"
    },
    "PERFORMANCE_1_SS":{
      "defaultmin":"-10",
      "min":"-13.156",
      "defaultmax":"10",
      "max":"9.986",
      "periodo":"1 settimana"
    },
    "PERFORMANCE_1_MM":{
      "defaultmin":"-20",
      "min":"-14.363",
      "defaultmax":"20",
      "max":"14.366",
      "periodo":"1 mese"
    },
    "PERFORMANCE_3_MM":{
      "defaultmin":"-20",
      "min":"-20.065",
      "defaultmax":"20",
      "max":"17.972",
      "periodo":"3 mesi"
    },
    "PERFORMANCE_6_MM":{
      "defaultmin":"-20",
      "min":"-27.124",
      "defaultmax":"20",
      "max":"32.852",
      "periodo":"6 mesi"
    },
    "PERFORMANCE_1_AA":{
      "defaultmin":"-40",
      "min":"-46.758",
      "defaultmax":"40",
      "max":"110.158",
      "periodo":"1 anno"
    },
    "PERFORMANCE_3_AA":{
      "defaultmin":"-50",
      "min":"-57.636",
      "defaultmax":"50",
      "max":"216.489",
      "periodo":"3 anno"
    },
    "PERFORMANCE_5_AA":{
      "defaultmin":"-50",
      "min":"-67.049",
      "defaultmax":"50",
      "max":"479.588",
      "periodo":"5 anno"
    },
    "PERFORMANCE_INIZIO_ANNO":{
      "defaultmin":"-40",
      "min":"-25.815",
      "defaultmax":"40",
      "max":"46.19",
      "periodo":"da inizio anno"
    }
  },
  "dividendi":{
    "1":{
      "nome":"Con Dividendi"
    },
    "0":{
      "nome":"Senza Dividendi"
    }
  },
  "macroCat":{
    "6":{
      "nome":"Altri"
    },
    "1":{
      "nome":"Azionari"
    },
    "165":{
      "nome":"Bilanciati"
    },
    "164":{
      "nome":"Flessibili"
    },
    "8":{
      "nome":"Monetari"
    },
    "2":{
      "nome":"Obbligazionari"
    }
  },
  "codRating":{
    "5":{
      "nome":"5 corone"
    },
    "4":{
      "nome":"4 corone"
    },
    "3":{
      "nome":"3 corone"
    },
    "2":{
      "nome":"2 corone"
    },
    "1":{
      "nome":"1 corone"
    },
    "0":{
      "nome":"0 corone"
    }
  }
}
</script>

<!-- AGGIORNAMENTO PAGINA -->

<!-- FUNZIONE PER IL POSTING -->
<script type="text/javascript">


// RIEPILOGO DATI PRIMA DELL'ESPOSIZIONE NEL RECAP
swRevFundToSwitch = function(data)
{
	// Sequenza di rielaborazioni
	if(data.val == "EUR")
	{
		// Decidi quale tooltip mostrare
		$("#navFundTooltip").attr("data-tooltip", "#tooltipYYY");
	}

}

setTTCommMsg = function(){}


// INIZIALIZZAZIONE
$(function(){

	$("#switchProcediButton a").click(function(){

		/* Elenco oggetti JSON presenti al post
		
		fundData = <-- json contenente tutti i dati del fondo
		Di cui:

		- fundData.dettagli[fundData.selectedDetail] -> Contiene i dati del PAC/PIC scelto dall'utente per lo switch
		
		- fundData.switchFund -> Contiene tutti i dettagli del fondo per lo switch

		*/

		// Alert dei dati in post (gia' presenti nel form swForm)
		
		// alert(swForm.serialize().toString().split("&").join("\n"));
		
		
		$("#switchProcediButton").hide();
		setLoadingOn(swForm);
		$.ajax({
			url: swFondiConfirm,
			dataType: "html",
			success: function(data){
				$("#switchConferma").html(data);
				unsetLoadingOn(swForm);
				$("#switchConferma").show();
			},
			error: function(){
				alert("Si sono verificati errori.\nRiprovare in seguito.");

			}
		});
	});

})
</script>

<!-- FINE FUNZIONE PER IL POSTING DEI DATI -->

<script src="/wscmn/js/ret/priv_fes_ricerca.js" type="text/javascript"></script>
<script src="/wscmn/js/priv_fes_switch.js" type="text/javascript"></script>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>


<h1>Switch</h1>
<p>Lo switch ti consente di passare da un fondo comune/sicav a altro, gestito dalla stessa societ&agrave; di gestione.</p>

<div class="container">
<!-- <div class="tithelp"><div class="helpleft">Seleziona il fondo o sicav da vendere</div></div> -->

<!-- OVERLAY PER MESSAGGI BLOCCANTI -->

<!-- FINE OVERLAY -->

<!-- FORM RACCOLTA DATI INIZIALE -->
<div class="formGeneric">
	<form id="form01" name="switchFormFund" class="paddBottomMedium">


		<div class="tithelp">
			<div class="helpleft">Fondo di origine</div>
			<br class="clear">
		</div>

		
		<div class="borderFormRounded margBottomMedium">
			<!-- CAMPI DA INVIARE -->
			<input type="hidden" name="codice" value="">
			<input type="hidden" name="divisa" value="">
			<input type="hidden" name="codAzione" value="">
			<input type="hidden" name="codSocieta" value="">
			<input type="hidden" name="tipocontratto" value="">
		

			<!-- CAMPI DA INVIARE PER LO SWITCH -->
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 paddBottomMedium">
					<label class="nomefield">Deposito</label>
					<!-- DA INSERIRE ALTERNATIVAMENTE : PIU' DEPOSITI -->
					<select id="switchDeposito">
							<option value="13212321">13212321</option>
							<option value="421414212">421414212</option>
					</select>
					<!-- DA INSERIRE ALTERNATIVAMENTE : UN SOLO DEPOSITO -->
					<!-- <span class="output">123132312312</span><input type="hidden" value="123132312312"/> -->
				</div>
			

				<div class="col-xs-12 col-sm-6 paddBottomMedium">
					<div id="switchSelezioneFondo">
						<label class="nomefield">Fondo/Sicav</label>
						<!-- DA INSERIRE ALTERNATIVAMENTE : PIU' DEPOSITI -->
						<select id="switchFund">
								<option value="">Seleziona un fondo/sicav di destinazione</option>
						</select>
						<span class="output" id="switchFundOutput" style="display:none"></span>
					</div>
				</div>
			</div>
				
			<!-- DATI UGUALI PER TUTTI I FONDI -->	
			<div id="switchFundData"  style="display:none">
				<div class="row">
					<div class="col-sm-6 col-xs-12 paddBottomMedium">
						<label class="nomefield">Valore quota/N.A.V. al <span class="datanav"></span></label>
						<span class="output"></span>
					</div>
					<div class="col-sm-3 col-xs-12 paddBottomMedium">
						<label class="nomefield">Tipologia strumento</label>
						<span class="output"></span>
					</div>
					<div class="col-sm-3 col-xs-12 paddBottomMedium">
						<label class="nomefield">Altri dettagli</label>
						<span class="output"></span>
					</div>
				</div>
			</div>
			
			<!-- Multiselettore -->
			<div id="switchFundDataSelector" style="display:none"></div>

			
			<!-- Selettore operazione -->

			<div id="switchFundOperation" style="display:none">

				<!-- RECAP DATI PAC/PIC-->
				<div class="row pac">
					<div class="col-xs-12 col-sm-12 paddBottomMedium">
						<label class="nomefield">N. contratto PAC</label>
						<span class="output"></span>
					</div>
					<div class="col-xs-12 col-sm-6 paddBottomMedium">
						<label class="nomefield">Importo rata</label>
						<span class="output"></span>
					</div>
					<div class="col-xs-12 col-sm-6 paddBottomMedium">
						<label class="nomefield">Rate residue</label>
						<span class="output"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 paddBottomMedium">
						<label class="nomefield">N. Quote/Azioni nel deposito selezionato</label>
						<span class="output"></span>
					</div>
					<div class="col-xs-12 col-sm-6 paddBottomMedium">
						<label class="nomefield">Controvalore</label>
						<span class="output"></span>
					</div>
				</div>
				<!-- FINE RECAP -->
				
				<div id="switchQuoteSelection">
					<div class="row" id="switchQuoteSelInput">
						<div class="col-xs-12 col-sm-6 paddBottomLarge">
							<label class="nomefield">Quante quote vuoi vendere?</label>
							<select class="lungmax" id="switchQuotes" name="tipoVendita">
								<option value="0">Seleziona...</option>
								<option value="1">Tutte le quote nel deposito selezionato</option>
								<option value="2">Specifica importo</option>
								<option value="3">Specifica numero di quote</option>
							</select>
						</div>
						
						<!-- VARIE OPERAZIONI POSSIBILI SUL FONDO SELEZIONATO -->

						<!-- PAC -->
						<div class="col-xs-12 col-sm-6 swQuotesSel" id="switchQuotes1" style="display:none">
							<label class="nomefield">Vuoi estinguere anche il PAC?</label>
							<div class="row">
								<div class="col-xs-3"><label><input type="radio" name="ChiusuraPiano" value="si">Si</label></div>
								<div class="col-xs-3"><label><input type="radio" name="ChiusuraPiano" value="no">No</label></div>
							</div>
							
							
						</div>
						
						<!-- FINE IMPORTO -->
						<div class="col-xs-12 col-sm-6 swQuotesSel" id="switchQuotes2" style="display:none">
							<label class="nomefield">Specifica l'importo</label>
							<input type="text" class="importo" id="switchImporto" name="importo">&nbsp;,&nbsp;<input type="text" id="switchImportoDec" name="decimporto"class="importo decimali" maxlength="4">&nbsp;<span class="viewdivisa"></span>
							<span class="output" style="display:none">corrispondenti a <span id="switchImportoQuote">00,00</span> quote</span>
						</div>

						<!-- QUOTE -->
						<div class="col-xs-12 col-sm-6 swQuotesSel" id="switchQuotes3" style="display:none">
							<label class="nomefield">Specifica il numero di quote</label>
							<input type="text" class="importo" id="switchQuote" name="quote">&nbsp;,&nbsp;<input type="text" id="switchQuoteDec" name="decquote"class="importo decimali" maxlength="4">
							<span class="output" style="display:none">corrispondenti a <span id="switchQuoteImporto">00,00</span>&nbsp;<span class="viewdivisa"></span></span>
						</div>
					</div>
				
					<div class="row" id="switchQuoteSelOutput" style="display:none">
						<div class="col-xs-6 paddBottomMedium">
							<label class="nomefield">Quote da vendere</label>
							<span class="output"></span>
						</div>
						<div class="col-xs-6 paddBottomMedium">
							<label class="nomefield">Vuoi cambiare la tua selezione?</label>
							<a href="javascript:;">Specifica un diverso numero di quote</a>
						</div>
					</div>
				
				</div>

				<!-- PULSANTE PER RICERCA -->
				<div class="aButtoncons" id="switchSearchButton">
					<span class="btnc"><a class="aButton buttDis" href="javascript:;"><span>Cerca il fondo/sicav di destinazione</span></a></span>
				</div>
			</div>
		</div>

		<!-- WRAPPER FONDO DI DESTINAZIONE -->

		<div id="switchToFundWrapper" style="display:none">

			<div class="tithelp">
				<div class="helpleft">Fondo di destinazione</div>
				<br class="clear">
			</div>
			<div class="borderFormRounded">
			<!-- TABELLA DATI -->
			<div id="switchSearchResults" style="display:none">
				<!-- CASELLA DI RICERCA -->
				<div id="switchSearchRicerca" >
					
					<div class="borderFormRounded searchFilter margBottomLarge">
						<!-- CAMPI DI CONFIGURAZIONE "ESTERNI" -->
						<div class="row-fluid">
							<div class="span4">
								<label class="nomefield">Nome o ISIN</label>
								<div>
									<input type="text" id="descrizione" name="descrizione" autocomplete="off">
								</div>								
							</div>
							<div class="span4">
								<label class="nomefield">Tipologia di fondo</label>
								<div id="fesMacro" class="btnMultiSel">
									<input type="hidden" id="macroCat" name="macroCat">
								</div>
							</div>
							<div class="span4">
								<label class="nomefield">Rating</label>
								<div id="fesRating" class="btnMultiSel">
									<input type="hidden" id="codRating" name="codRating">
								</div>
							</div>
						</div>	
						<div class="row-fluid">
							<div class="span4">
								<label class="nomefield">Rendimento</label>
								<div id="fesCategoria" class="btnMultiSel">
									<input type="hidden" id="fesRendimento" name="fesRendimento">
								</div>
							</div>
							<div class="span4">
								<label class="nomefield">Dividendi</label>
								<div id="fesDividendi" class="btnMultiSel">
									<input type="hidden" id="dividendi" name="dividendi">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- FINE CASELLA DI RICERCA -->
				<div id="switchSearchTableWrapper"></div>
			</div>

		
			<!-- RECAP PRE-INVIO -->

			<div id="switchSwitchRecap" style="display:none">
				<div class="row">
					<div class="col-xs-12 col-sm-6 paddBottomMedium">
						<label class="nomefield">Nome del fondo</label>
						<span class="output" data-field="nome"></span>
					</div>
					<div class="col-xs-12 col-sm-6 paddBottomMedium">
						<label class="nomefield">Vuoi cambiare la tua selezione?</label>
						<a id="switchChangeFund" href="javascript:;">Scegli un altro fondo/sicav</a>		
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 paddBottomMedium">
						<label class="nomefield">Categoria Assogestioni</label>
						<span class="output" data-field="assogestioni"></span>
					</div>
					<div class="col-xs-12 col-sm-6 paddBottomMedium">
						<!-- CODICE DEL TOOLTIP-->
						<span id="tooltipXXX" class="ttHtmlContent">
							LXXXorem <b>dolor</b> sit amet. Consectetur <i>adipiscing</i> elit.<br><ul>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Dolor sit amet</li>
								<li>Lorem ipsum sit amet</li>
							</ul>
						</span>
						<span id="tooltipYYY" class="ttHtmlContent">
						LoYYYrem <b>dolor</b> sit amet. Consectetur <i>adipiscing</i> elit.<br><ul>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Dolor sit amet</li>
									<li>Lorem ipsum sit amet</li>
								</ul>
							</span>
						<!-- CODICE DEL TOOLTIP-->
						<label class="nomefield">NAV data <span class="output" data-field="codicefida"></span> 
							<!-- INIZIO TOOLTIP --><span data-tooltip="#tooltipXXX" class="txthelp" id="navFundTooltip">
								<span class="iconahelp"><img class="help" src="/img/ret/ico2or_help2.gif"></span></span>
								<!-- FINE TOOLTIP -->
						</label>
						<span class="output" data-field="nav"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 paddBottomMedium">
						<label class="nomefield">Codice Fida</label>
						<span class="output" data-field="codicefida"></span>
					</div>
				</div>

				<!-- BOTTONE PROCEDI  -->
				<div class="aButtoncons" id="switchProcediButton">
					<span class="btnc"><a class="aButton" href="javascript:;"><span>Prosegui</span></a></span>
				</div>
				<br class="clear">
				<!-- CONFERMA  -->
				<div id="switchConferma" style="display:none">
					
				</div>

			</div>
		</div>
	</form>	
</div>



<!-- FINE AGGIORNAMENTO PAGINA -->