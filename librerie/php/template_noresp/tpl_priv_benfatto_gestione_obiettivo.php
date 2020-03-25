<h1>Risparmio libero e obiettivi</h1>
<p>Controlla lo stato di avanzamento del tuo obiettivo: a che punto siete e quanti giorni mancano alla scadenza.</p>
<script type="text/javascript" src="/wscmn/js/common_validation.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
<script type="text/javascript">
/* Inizializzazione oggetti interattivi in pagina*/
 $(function(){
	// Alla compilazione del campo abilita il trasferimento (inserire qui eventuali controlli in linea)
	$("#inputImporto").on("keyup",function(){
		if ($(this).val() != "")
			{$("#btnTrasferisci").removeClass("buttDis")}
		else
			{$("#btnTrasferisci").addClass("buttDis")}
	
	}) 
	$("#btnTrasferisci").click(function(){
		if (!$(this).hasClass("buttDis"))
		{
			// Effettua il submit del dato
			alert("trasferimenton e refresh dei dati");
			var slide = $('#boxEsito');
			doSlide($("#alimentazione"), slide);
			
		}
	});
	
	// Autocomplete rubrica
	var url = 'http://libreriebpm/librerie/include/commons/ajax/rubrica/WsGestioneRubricaPDA.php',
			successFunc = function (json) {
				autoCompleteRubrica({
					data: filtraRubrica(json.listaRubricaAll),
					container: $('#nuoviPartecipanti'),
					input: $('#mailPartecipanti'),
					overlay: $('#layeralert2')
				});
			},
			failureFunc = function () { },
			parameters = {
				"onlyMail": "yes",
				"searchType": "ANAGRAFICA"
			};
		jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
 
 });
 

</script>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric paddLeftMedium paddRightMedium">
		<form>
			<div class="row-fluid paddBottomMedium">
				<div class="span10">
					<ul class="bfConsole">
						<li class="obCondiviso">Obiettivo condiviso (4 partecipanti)</li>
						<li class="creatore">Creato da Morfeo Claudio Rossetti</li>
				</div>
				<div class="span2">
					<div class="contestMenu">
						<a class="opener" href="javascript:;"></a>
						<ul>
							<li><a class="modificaImporto disabled" href="javascript:;">Modifica importo</a></li>
							<li><a class="modificaScadenza disabled" href="javascript:;">Modifica scadenza</a></li>
							<li><a class="elimina" href="javascript:;">Elimina</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row-fluid paddBottomLarge">
				<div class="span5">
					<div class="boxImgVetrina boxImgVetrinaMaxW">
						<div class="radioVetrinaLayer">Lorem ipsum dolor sit amet</div>
						<img src="/img/ret/vetrina/0010/ldpi.png">
					</div>
				</div>
				<div class="span7">
					<ul class="bfConsole details">
						<li class="target"><label>Importo</label><span class="value">1.000,30&euro;</span></li>
						<li class="scadenza"><label>Raggiungi l'obiettivo entro</label><span class="value">22/12/2014</span></li>
						<li class="mancanoscadenza"><label>Mancano alla scadenza</label><span class="value">11 giorni</span></li>
						<li class="inCorso"><label>Stato obiettivo</label><span class="value">in corso</span></li>
					</ul>
				</div>
			</div>
			
			<div class="row-fluid">
				<!-- BARRA DI PROGRESSO E DETTAGLI -->
				<div class="progressBar" data-progress="76"></div>
				<div class="bfProgressConsole">
					<div class="row-fluid">
						<div class="span6"><span class="lev1">Avete risparmiato</span></div>
						<div class="span6 txtAlRight"><span>99.999&euro;</span></div>
					</div>
					<div class="row-fluid">
						<div class="span6"><span class="lev2">Effettivi</span></div>
						<div class="span6 txtAlRight"><span>99.999&euro;</span></div>
					</div>
					<div class="row-fluid">
						<div class="span6"><span class="lev3">Hai risparmiato</span></div>
						<div class="span6 txtAlRight"><span>99.999&euro;</span></div>
					</div>
				</div>
				<!-- FINE BARRA DI PROGRESSO E DETTAGLI -->
			</div>
			
			<!-- BOTTONE VERSA STANDALONE -->
			<div class="aButtonconsRight paddBottomLarge">
					<div class="btnc"><a class="aButton" href="javascript:;"><span>versa</span></a></div>
			</div>
			<!-- FINE BOTTONE VERSA STANDALONE -->
			
			<!-- BOX CONDIVISIONE -->
			<div class="boxCondivisione margBottomLarge vtTabs">
				<h3>Dettagli di condivisione</h3>
				<div class="vtMenu">
					<a href="javascript:;" class="contr"><span>Contribuenti: 7</span></a>
					<a href="javascript:;" class="aggiungi active"><span>Aggiungi partecipanti</span></a>
				</div>
				<div class="vtCont">
					<!-- Partecipanti -->
					<div class="vtContainer"  style="display:none">
						<ul class="partecipanti">
							<li>Pablo Lorem ipsum</li>
							<li>Olivia Dolor</li>
							<li>Stephen Lucenzo</li>
							<li>Jon Lord</li>
							<li>Mike Patton</li>
						</ul>
					</div>
					<!-- Fine partecipanti -->
					<!-- Aggiunta partecipanti con controllo evoluto -->
					<div class="vtContainer">
						<!-- AUTOCOMPLETE PARTECIPANTI -->
						<p><br>Digita l'indirizzo e-mail delle persone che vuoi invitare</p>
						<!-- E' necessario avere un tag form esterno -->
						<form class="formGeneric">
							<!-- INIZIO - HTML da copiare -->
							<!-- Mettere lo stesso id con cui si istanziera' l'oggetto "autoCompleteRubrica" -->
							<div id="nuoviPartecipanti" class="addressContainer">
									<div class="addressWrap">
										<div class="addressBox autoComp">
											<!-- E' possibile modificare "maxlength" e "space" -->
											<input type="text" class="addressInput" maxlength="60" data-autosize-input='{ "space": 10 }'>
											<input type="hidden" id="mailPartecipanti">
										</div>
									</div>
									<div>
										<input type="text" class="autocompleteInput">
									</div>
									<div class="addressBookBtn"></div>
								</div>
								<!-- FINE - HTML da copiare -->
						</form>


						<!-- LAYER -->
						<div class="layeralert2" id="layeralert2" style="display: none;">
							<div class="head handle">
								<img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="this.parentNode.parentNode.style.display='none'"/>
							</div>
							<div class="body">
								<h3 class="verde">RUBRICA</h3>
								<!-- E' possibile modificare "maxlength" e "space" -->
								<div class="addressBookFilter">
									<input type="text" class="addressBookInput"><br>
								</div>
								<table class="addressBookBox"><tbody></tbody></table>
								<br class="clear">
								<a href="javascript:;" class="btnformright addressBookSubmit" title="Fatto"><img src="/img/ret/btn_left_ar.gif" alt=""><span>fatto</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
								<br class="clear">
							</div>
							<div class="foot"></div>
						</div>
						<br class="clear">
					</div>
					<!-- Fine aggiunta partecipanti con controllo evoluto -->
				</div>
			</div>
			<!-- FINE BOX CONDIVISIONE -->
			
			<!-- ESEMPIO OBIETTIVO SCADUTO -->
				<div class="boxesito attenzione">
					<div class="middle"><span class="imgCont"></span>
						<div class="text">
							<div class="row-fluid">
								<div class="span10">
									<p><br>
										L'obiettivo risulta attualmente <strong>scaduto</strong>.<br>
										Puoi decidere se eliminarlo o modificarne la data.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- FINE MESSAGGIO SCADUTO -->
			<!-- CONSOLE DI TRASFERIMENTO -->
			<div class="filettoGrey paddBottomLarge"></div>
			<div class="contOverflow">
				<div id="alimentazione" class="withEsito">
					<div class="row-fluid">
						<div class="span4">
							<label class="nomefield">Alimenta il tuo obiettivo</label>
							<select>
								<option value="">Trasferisci da conto corrente</option>
								<option value="">Trasferisci da Risparmio Ben Fatto</option>
							</select>
						</div>
						<div class="span3">
							<label class="nomefield">Disponibilit&agrave; residua</label>
							<span class="output paddTopSmall">5.000,00&euro;</span>
						</div>
						<div class="span2">
								<label class="nomefield">Importo</label>
								<input type="text" class="withIco" id="inputImporto"><span class="intertext">&euro;</span>
						</div>
						<div class="span3 paddTopSmall">
							<div class="btnc aButtoncons"><a class="aButton buttDis" href="javascript:;" id="btnTrasferisci"><span>trasferisci</span></a></div>
						</div>
					</div>
					<div class="esito" id="boxEsito" style="display: none;top:0">
						<div class="boxesito attenzione">
							<div class="middle"><span class="imgCont"></span>
								<div class="text boxTrasfEsiEvo">
									L'obiettivo risulta attualmente <strong>scaduto</strong>.<br>
									Puoi decidere se eliminare l'obiettivo o modificarne la data.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- FINE CONSOLE DI TRASFERIMENTO -->
		</form>
	</div>
</div>
<!-- TORNA INDIETRO -->
<div class="aButtonconsLeft">
	<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>Indietro</span></a></span>
</div>
<!-- FINE TORNA INDIETRO -->