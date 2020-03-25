<!-- CONFIGURAZIONE RICERCA -->
<script type="text/javascript">
/* PARAMETRI GLOBALI */
/*
swFondiUrl = isFund : elenco fondi da switchare
swFondiSwitch = ex fesTabella.do

*/
var swFondiUrl = "/librerie/include/commons/ajax/priv_investimenti_fondi.json", 
swFondiSwitch = "/librerie/include/commons/ajax/priv_investimenti_fondi_switch.json",
swFondiConfirm = "/librerie/include/commons/ajax/priv_investimenti_fondi_confirm.html";

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
		swForm.addClass("loading");
		$.ajax({
			url: swFondiConfirm,
			dataType: "html",
			success: function(data){
				$("#switchConferma").html(data);
				swForm.removeClass("loading");
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

<script src="/wscmn/fe/js/priv_fes_ricerca_resp.js" type="text/javascript"></script>
<script src="/wscmn/fe/js/priv_fes_switch.js" type="text/javascript"></script>

<h2>Switch</h2>
<p>Lo switch ti consente di passare da un fondo comune/sicav a altro, gestito dalla stessa societ&agrave; di gestione.</p>
<!-- FORM RACCOLTA DATI INIZIALE -->
	<form id="form01" name="switchFormFund">


		<div class="tithelp">
		    <h4>Fondo di origine</h4>
		    <br class="clear">
		</div>

		<div class="formGenerico borderFormRounded">
			<!-- CAMPI DA INVIARE -->
			<input type="hidden" name="codice" value="">
			<input type="hidden" name="divisa" value="">
			<input type="hidden" name="codAzione" value="">
			<input type="hidden" name="codSocieta" value="">
			<input type="hidden" name="tipocontratto" value="">
		

			<!-- CAMPI DA INVIARE PER LO SWITCH -->
			<div class="form-group">
				<div class="row">
				
					<div class="col-xs-12 col-sm-6">
						<label class="control-label">Deposito</label>
						<!-- DA INSERIRE ALTERNATIVAMENTE : PIU' DEPOSITI -->
						<select id="switchDeposito" class="form-control">
								<option value="13212321">13212321</option>
								<option value="421414212">421414212</option>
						</select>
						<!-- DA INSERIRE ALTERNATIVAMENTE : UN SOLO DEPOSITO -->
						<!-- <span class="output">123132312312</span><input type="hidden" value="123132312312"/> -->
					</div>
					<div class="col-xs-12 col-sm-6">
						<div id="switchSelezioneFondo">
							<label class="control-label">Fondo/Sicav</label>
							<!-- DA INSERIRE ALTERNATIVAMENTE : PIU' DEPOSITI -->
							<select id="switchFund" class="form-control">
									<option value="">Seleziona un fondo/sicav di destinazione</option>
							</select>
							<span class="output" id="switchFundOutput" style="display:none"></span>
						</div>
					</div>
				</div>
			</div>
				
			<!-- DATI UGUALI PER TUTTI I FONDI -->	
			<div id="switchFundData" style="display:none">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6 col-xs-12 paddBottomMedium">
							<label class="control-label">Valore quota/N.A.V. al <span class="datanav"></span></label>
							<span class="output"></span>
						</div>
						<div class="col-sm-3 col-xs-12 paddBottomMedium">
							<label class="control-label">Tipologia strumento</label>
							<span class="output"></span>
						</div>
						<div class="col-sm-3 col-xs-12 paddBottomMedium">
							<label class="control-label">Altri dettagli</label>
							<span class="output"></span>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Multiselettore -->
			<div id="switchFundDataSelector" style="display:none"></div>

			
			<!-- Selettore operazione -->

			<div id="switchFundOperation" style="display:none">

				<!-- RECAP DATI PAC/PIC-->
				<div class="pac">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<label class="control-label">N. contratto PAC</label>
								<span class="output"></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label class="control-label">Importo rata</label>
								<span class="output"></span>
							</div>
							<div class="col-xs-12 col-sm-6">
								<label class="control-label">Rate residue</label>
								<span class="output"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label class="control-label">N. Quote/Azioni nel deposito selezionato</label>
							<span class="output"></span>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label class="control-label">Controvalore</label>
							<span class="output"></span>
						</div>
					</div>
				</div>
				<!-- FINE RECAP -->
				
				<div id="switchQuoteSelection">
					<div class="form-group">
						<div class="row" id="switchQuoteSelInput">
							<div class="col-xs-12 col-sm-6">
								<label class="control-label">Quante quote vuoi vendere?</label>
								<select class="form-control" id="switchQuotes" name="tipoVendita">
									<option value="0">Seleziona...</option>
									<option value="1">Tutte le quote nel deposito selezionato</option>
									<option value="2">Specifica importo</option>
									<option value="3">Specifica numero di quote</option>
								</select>
							</div>
							
							<!-- VARIE OPERAZIONI POSSIBILI SUL FONDO SELEZIONATO -->

							<!-- PAC -->
							<div class="col-xs-12 col-sm-6 swQuotesSel" id="switchQuotes1" style="display:none">
								<label class="control-label">Vuoi estinguere anche il PAC?</label>
								<div class="row">
									<div class="col-xs-3">
										<div class="radio inline"><label class="textWrapper"><input type="radio" name="ChiusuraPiano" value="si"><span class="text">Si</span></label></div>
									</div>
									<div class="col-xs-3">
										<div class="radio inline"><label class="textWrapper"><input type="radio" name="ChiusuraPiano" value="no"><span class="text">No</span></label></div>
									</div>
								</div>
							</div>
							<!-- FINE IMPORTO -->
							<div class="col-xs-12 col-sm-6 swQuotesSel" id="switchQuotes2" style="display:none">
								<label class="control-label">Specifica l'importo</label>

								<div class="form-inline">
									<div class="input-group input-group-decimali">
										<input type="text" class="importo intero form-control" id="switchImporto" name="importo">
 										<span class="input-group-addon virgola">,</span>
										<input type="text" id="switchImportoDec" name="decimporto" class="importo decimali form-control" maxlength="4">
										<span class="viewdivisa input-group-addon"></span>	
									</div>
								</div>
								<span class="output note" style="display:none">corrispondenti a <span id="switchImportoQuote">00,00</span> quote</span>
							</div>

							<!-- QUOTE -->
							<div class="col-xs-12 col-sm-6 swQuotesSel" id="switchQuotes3" style="display:none">
								<label class="control-label">Specifica il numero di quote</label>
								<div class="form-inline">
									<div class="input-group input-group-decimali">
										<input type="text" class="importo intero form-control" id="switchQuote" name="quote">
										<span class="input-group-addon virgola">,</span>
										<input type="text" id="switchQuoteDec" name="decquote"class="importo decimali form-control" maxlength="4">
									</div>
									<div class="form-inline">
									<span class="output note" style="display:none">corrispondenti a <span id="switchQuoteImporto">00,00</span>&nbsp;<span class="viewdivisa"></span></span>
								</div>
							</div>
						</div>
					</div>

					<div class="row" id="switchQuoteSelOutput" style="display:none">
						<div class="col-xs-6 paddBottomMedium">
							<label class="control-label">Quote da vendere</label>
							<span class="output"></span>
						</div>
						<div class="col-xs-6 paddBottomMedium">
							<label class="control-label">Vuoi cambiare la tua selezione?</label>
							<a href="javascript:;">Specifica un diverso numero di quote</a>
						</div>
					</div>
				
				</div>

				<!-- PULSANTE PER RICERCA -->
				<div class="form-group btnWrapper" id="switchSearchButton">
					<div class="row">
						<div class="col-sm-6 col-xs-12 hidden-sm hidden-xs">
						</div>
						<div class="col-sm-6">
							 <div class="btn-align-left">
			                    <a type="button" class="btn btn-primary btn-disabled" title="Cerca il fondo/sicav di destinazione">Cerca il fondo/sicav di destinazione</a>
			                </div>
						</div>
		            </div>
	            </div>

	            <!-- FINE PULSANTE PER RICERCA -->
			</div>
		</div>
	</div>


		<!-- WRAPPER FONDO DI DESTINAZIONE -->

		<div id="switchToFundWrapper" style="display:none">

			<div class="tithelp">
			    <h4>Fondo di destinazione</h4>
			    <br class="clear">
			</div>

			<div class="formGenerico borderFormRounded">
			<!-- TABELLA DATI -->
			<div id="switchSearchResults" style="display:none">
				<!-- CASELLA DI RICERCA -->
				<div id="switchSearchRicerca">
					<!-- CAMPI DI CONFIGURAZIONE "ESTERNI" -->
					<div class="form-group">
						<div class="row">
							<div class="col-sm-4 col-xs-12">
								<label class="control-label">Nome o ISIN</label>
								<input type="text" id="descrizione" name="descrizione" autocomplete="off" placeholder="Digita un termine di ricerca">
							</div>
							<div class="col-sm-4 col-xs-12">
								<label class="control-label">Tipologia di fondo</label>
								<div id="fesMacro" class="btnMultiSel">
									<input type="hidden" id="macroCat" name="macroCat">
								</div>
							</div>
							<div class="col-sm-4 col-xs-12">
								<label class="control-label">Rating</label>
								<div id="fesRating" class="btnMultiSel">
									<input type="hidden" id="codRating" name="codRating">
								</div>
							</div>
						</div>	
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-4 col-xs-12">
								<label class="control-label">Rendimento</label>
								<div id="fesCategoria" class="btnMultiSel">
									<input type="hidden" id="fesRendimento" name="fesRendimento">
								</div>
							</div>
							<div class="col-sm-4 col-xs-12">
								<label class="control-label">Dividendi</label>
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
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label class="control-label">Nome del fondo</label>
							<span class="output" data-field="nome"></span>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="btnWrapper" id="switchSearchButton">
				                <div class="btn-align-left">
				                    <a type="button" class="btn btn-primary" title="Scegli un altro fondo/sicav" id="switchChangeFund">Scegli un altro fondo/sicav</a>
				                </div>
				                <br class="clear">
				            </div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-6 paddBottomMedium">
							<label class="control-label">Categoria Assogestioni</label>
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
							<!-- CODICE DEL TOOLTIP-->
							<script type="text/javascript">
							// Esempio di funzione aggiornamento del tooltip 
							$(function(){
								$("#idNavDataRefresh").click(function(){
									// Aggiorna il testo del tooltip prendendo ogni volta un testo diverso (dinamico)
									// Gli ID sono improvvisati
									$(this).tooltipPlus("update",$("#tooltipXXX").html());
								});

							});

							</script>
							<label class="control-label txthelp closeable" data-toggle="tooltip" id="idNavDataRefresh">NAV data</label>
							<span class="output" data-field="nav"></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label class="control-label">Codice Fida</label>
							<span class="output" data-field="codicefida"></span>
						</div>
					</div>
				</div>
				<!-- CONFERMA  -->
				<!-- BOTTONE PROCEDI  -->
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6 col-xs-12 hidden-sm hidden-xs">
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="btnWrapper" id="switchProcediButton">
				                <div class="btn-align-left">
				                    <a type="button" class="btn btn-primary" title="Prosegui">Prosegui</a>
				                </div>
				                <br class="clear">
				            </div>
						</div>
					</div>
				</div>
				<div id="switchConferma" style="display:none"></div>
			</div>
		</div>
	</div>
	</form>	
<!-- FINE AGGIORNAMENTO PAGINA -->