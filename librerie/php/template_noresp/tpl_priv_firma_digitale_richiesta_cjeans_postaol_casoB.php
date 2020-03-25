<script type="text/javascript">
function errorBoxsetPosition(idErrorform) { // passa come parametro l'id del form sopra al quale posizionare box errore
	idErrorform = $('#'+ idErrorform);
	idErrorform.before($('#boxError'));
	$('#boxError').show();
	setElementonView($('#boxError')); //si posiziona all'altezza del box di errore scrollando la pagina
}

</script>
<!-- DA NON CONSIDERARE -- FUNZIONE CHE SIMULA IL COMPORTAMENTO DELLO STEP 2 DELLO STEP 3 RELATIVO ALL'INVIO CODICE OTP-->
<script  type="text/javascript">function ableFormOtp(inputButtons){ //controlla id passato e se sono tutti flaggati gli input all'interno del form scatena uan serie di azioni
inputButtons = $('#' +inputButtons).find('input[type="checkbox"]');
var inputChecked = 0;
$.each(inputButtons, function(index) {
var isChecked = $(this).attr('checked')?true:false;
if (isChecked==true) {inputChecked++}

if(inputChecked==inputButtons.length)
{
	if($('#firmaStep2Dis:visible').length)
	{
	
	$('#codiceFirmaTxt').css('visibility','visible');
	ableinput(this,'codFirmaInput');
	ableinput(this,'codControlloInput');
	$('#helpCodiceFirma').show()
	$('#firmaStep2Ab').show()
	$('#firmaStep2Dis').hide();
	$('#linkInviaCod').show();
	disableInput('condizioniAct');
	}
	
	else if($('#firmaStep3Dis:visible').length)
	{
	
	 $('#codiceFirmaTxt2').css('visibility','visible');
	 ableinput(this,'codFirmaInput2');
	 ableinput(this,'codControlloInput2');
	 $('#helpCodiceFirma2').show()
	 $('#firmaStep3Ab').show()
	 $('#firmaStep3Dis').hide();
	 $('#linkInviaCod2').show();
	 disableInput('condizioniAct2');
	}
}

})
}
 </script>
<h1>Info e gestione carta</h1>

<div class="divtabellalist" id="tabellaliststep">		 			
	<table border="0" class="tabellalist">
		<tbody><tr>
			<td class="off first" id="box5tab1">						
				<a href="#" title="scheda prodotto">scheda prodotto</a>
			</td>
			<td class="on " id="box5tab2">						
				<a href="#" title="Richiesta emissione">richiesta emissione</a>
			</td>
			<td class="off " id="box5tab3">						
				<a href="#" title="Ricarica la carta">ricarica</a>
			</td>
			<td class="off " id="box5tab4">						
				<a href="#" title="saldo e movimenti">saldo e movimenti</a>
			</td>
			<td class="off " id="box5tab5">						
				<a href="#" title="attivazione">attivazione</a>
			</td>
			<td class="end">&nbsp;</td>						
		</tr>
	</tbody></table>
</div>

<div class="boxrichiesta">
 <div class="steprichiesta on">
    <div class="steprichiestatit">
		<img src="/img/ret/str_tit_uno_on.gif" alt="Lorem ipsum dolor">
		<h2 class="richiestaTit">Lorem ipsum dolor</h2>
		<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png" /></span>
		<span style="display:none"><a onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();stepRichiesta(this);disableForm(this,'contformrichiesta')" class="backstep second modifica" href="javascript:;">modifica</a></span>
    </div>
	
	<div class="formGeneric steprichiestacont">
	  <div id="contformrichiesta">  
	<form id="formrichiesta1">
		<div class="row-fluid">
			<label class="nomefield">Intestazione carta:</label>
			<span class="output">Lorem ipsum</span>
		</div>
		<div class="row-fluid">
			<label class="nomefield">Contabili:</label>
			<span class="output">online,gratuite (potrai modificare la modalit&agrave; di ricezione successivamente)</span>
		</div>
		<div id="indirizzosped">
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Indirizzo di spedizione:</label>
					<span class="output">lorem ipsum dolor sit</span>
				</div>
			
				<div class="span6">
					<label class="nomefield">
					<a class="underline linkTodisable" href="javascript:;" onclick="if(!$(this).hasClass('disabled')) {$('indirizzosped').hide();$('indirizzomod').show()}">Cambia indirizzo</a>
					<span class="iconahelp">
					<span class="closed">
								<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="indirizzo">
									<span class="uniqTooltipPos">
										<a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
										<span class="uniqTooltipInnerHTML">
											<p>Puoi cambiare indirizzo di spedizione cliccando sul link. La modifica dell'indirizzo  non comporta il cambio in anagrafe.</p>
										</span>
									</span>
								</span>
					</span>
					</span></label>
					<span class="output"><strong></strong></span>
				</div>
			</div>
		</div>
		<div id="indirizzomod" style="display:none" class="borderLeftgrey">
			<div class="row-fluid">
				<label class="nomefield">Indirizzo di Spedizione:</label>
				<span>La modifica &egrave; valida soltanto per la spedizione della carta, ma non implica il cambio dell'indirizzo presente in anagrafe.</span>
			</div>
			<div class="row-fluid">
				<label class="nomefield">Destinatario</label>
				<span>Mario Rossi</span>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Spedizione presso:</label>
					<input type="text">
				</div>
				<div class="span6">
					<label class="nomefield">Indirizzo:</label>
					<input type="text">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span4">
					<label class="nomefield">Provincia:</label>
					<select><option>lorem</option><option>lorem</option></select>
				</div>
				<div class="span4">
					<label class="nomefield">Citt&agrave;:</label>
					<select><option>lorem</option><option>lorem</option></select>
				</div>
				<div class="span4">
					<label class="nomefield">CAP:</label>
					<select><option>lorem</option><option>lorem</option></select>
				</div>
			</div>
			<div class="row-fluid"><a href="javascript:;" class="disabled flRight"><span>lorem ipsum</span></a></div>
		</div>
		<div class="row-fluid">
			<span class="nomefield">Modalit&agrave; di invio</span>
			<div class="row-fluid">		
				<div class="span6">
					<label><input type="radio" value="Posta raccomandata" name="spedizione" onclick="$('#spedizioneHidden').hide()">Posta raccomandata<br> </label>
					<span>Gratuita in  6/7 gg lavorativi</span>
				</div>
				<div class="span6">
					<label><input type="radio" value="Corriere" name="spedizione" onclick="$('#spedizioneHidden').show()">Corriere</label>
					<span>Gratuita in 2/3gg lavorativi</span>
				</div>
			</div>
		</div>
	
	<div id="spedizioneHidden" style="display:none">
		<div class="row-fluid">	
				<div class="tolltipclick span6">
					<label class="nomefield ico">Numero di Telefono:</label>
					<span class="iconahelp">
					<span class="closed">
							<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="spedizione">
								<span class="uniqTooltipPos">
									<a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
									<span class="uniqTooltipInnerHTML">
										<p>Il numero serve al corriere per contattarti in caso di contrattempi nella consegna.</p>
									</span>
								</span>
							</span>
					</span>
					</span>
					
					<input type="text">
					
					</span>
				</div>
			<div class="span6">
				<label class="nomefield">Addebito spese:</label>
				<select><option>XXXXXXXXXX</option><option>XXXXXXXXXX</option></select>
			</div>
		</div>
	</div>
	
	<div class="row-fluid">	
		<label class="left nomefield">Note:</label>
		<input type="text" placeholder="facoltativo" name="">
	</div>
	
	
	<div class="row-fluid tolltipclick">	
		<label class="nomefield">Informativa:</label>
		<span class="closed">
			<span id="informative2" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&& $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
				 <span class="uniqTooltipPos">
					<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="contratto2" disabled></a>
					<span class="uniqTooltipInnerHTML">
						<p>per procedere occorre prendere visione</p>
					</span>
				 </span>
			</span>
		</span>
		<span class="text">Dichiaro di aver preso visione dopo averlo stampato e/o salvato su supporto durevole <a href="javascript:;" onclick="ableinput(this)" target="_blank">&quot;la Documentazione Precontrattuale&quot;</a>(documento di sintesi e informativa precontrattuale).<br/> Puoi consultare se desideri anche il <a target="_blank" href="#">Foglio informativo</a> </span>
	</div>
		
	<div class="row-fluid">
			<label class="nomefield">Recesso:</label>
			<span class="text nopadd">Puoi recedere dalla richiesta della carta entro 14 giorni senza oneri penali. <a href="#">Leggi il documento</a></span>
	</div>
	<br class="clear" />
</form>
		<div class="titform"><h2>Normativa antiriciclaggio</h2></div>
		
		<div class="boxform">
		<br/>
<form class="formGeneric" id="formrichiesta2">
	<div class="row-fluid tolltipclick">
		<span class="autosize">Per questa normativa sei tenuto a fornire alla Banca alcune informazioni obbligatorie</span>
	    <span class="iconahelp">
		<span class="closed">
					<span id="documenti5" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
						<span class="uniqTooltipPos">
							<a href="javascript:;"><img class="help" src="/img/ret/ico2or_help2.gif"></a>
							<span class="uniqTooltipInnerHTML">
								<p>

Ai sensi della normativa antiriciclaggio (D.Lgs. 231/07) il Cliente

è obbligato a fornire alla Banca alcune dichiarazioni e informazioni.Ti ricordiamo che il rilascio di false informazioni od omissioni comporta conseguenze anche di natura penale. I dati forniti di seguito devono ritenersi integrati (sempre per le finalità di cui alla normativa antiriciclaggio) con i dati forniti alla Banca in relazione ai rapporti bancari, finanziari e di investimento.
</p>
							</span>
						</span>
					</span>
		</span>
		</span>
		
	</div>
	
	
	<div class="row-fluid">
		<label class="nomefield">Utilizzo della carta:</label>
		<div class="radiocont">
			<label class="span4"><input type="radio" name="motivo">per esigenze familiari</label>
			<label class="span4"><input type="radio" name="motivo">per esigenze di finanziamento</label>
			<label class="span4"><input type="radio" name="motivo">per esigenze professionali</label>
		 </div>
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			<label class="nomefield">Professione:</label>
			<select>
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
		<div class="span6">
			<label class="nomefield">Settore dell'attivit&agrave; lavorativa:</label>
			<select>
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
	</div>
	<div class="row-fluid">
		<label class="nomefield">Dettaglio settore:</label>
		<select>
			<option>Seleziona</option>
			<option>Lorem</option>
		</select>
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			<label class="nomefield">Stato di svolgimento:</label>
			<select>
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
		<div class="span6">
			<label class="nomefield">Provincia di svolgimento:</label>
			<select>
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label class="nomefield">Reddito annuo netto:</label>
			<select>
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
		<div class="span6">
			<label class="nomefield">Dichiarazione origine del reddito:</label>
			<select>
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
    </div>
	 <div class="row-fluid">
		 <div class="span6 tolltipclick">
			<label class="nomefield ico">Origine dei fondi:</label>
				<span class="iconahelp">
					<span class="closed">
					<span id="documenti7" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
					<span class="uniqTooltipPos"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
						<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
					</span>
					</span>
				</span>
				</span>
			
			<select>
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
	 <div class="span6 tolltipclick">
		<label class="nomefield nopadd">Persona politicamente esposta:</label>
		<span class="text">Importante: prima di rispondere leggi la <span class="txthelp" onclick="openPopOverLayer('#overlayerPoli','floating',1);">definzione</span></span>
		<div class="layeralert3" id="overlayerPoli" style="display: none;">
			<div class="head handle" onmouseover="this.style.cursor='move'; $('overlayerPoli').dragHandle = new Draggable('overlayerPoli',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('overlayerPoli')"/></div>
				<div class="body">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</div>
				<div class="foot"></div>

		</div>
	
			
			
		<div class="radiocont">
			<label class="span4"><input type="radio" name="pol">no</label>
			<label class="span4"><input type="radio" name="pol">si</label>
		</div>
	</div>
	</div>
</form>
		
	     </div>
	      
		</div>
		 <div id="contformrichiestaoutput" style="display:none">
			<form id="formrichiesta1">
				<fieldset class="first">
					<label class="nomefield">Intestazione carta:</label>
					<span class="output">Lorem ipsum</span>
				</fieldset>
				<fieldset class="row">
					<label class="nomefield">Contabili, estratto conto:</label>
					<span class="output">online,gratuite (potrai modificare la modalità di ricezione successivamente)</span>
				</fieldset>
				<fieldset class="row">
					<label class="nomefield">Indirizzo di spedizione:</label>
						<span class="output">lorem ipsum</span>
					</label>
				</fieldset>
				<fieldset>
					<label class="nomefield"> Modalit&agrave; di invio:</label>
					<span class="output">lorem ipsum</span>
					<span>Gratuita in  6/7 gg lavorativi</span>
				</fieldset>
				<fieldset class="first">
					<label class="nomefield">Numero di Telefono:</label>
					<span class="output">lorem ipsum</span>
				</fieldset>
				<fieldset class="row">
					<label class="nomefield">Note:</label>
					<span class="output">lorem ipsum</span>
				</fieldset>
				<fieldset class="row">
					<legend>Attivazione:</legend>
					<span class="output">lorem ipsum</span>
				</fieldset>
				<fieldset class="row">
					<legend class="vatop left">Informativa:</legend>
					<span class="output">lorem ipsum</span>
				</fieldset>
				<br class="clear">
				
				<fieldset class="tolltipclick row">
					<label class="nomefield">Firma digitale remota:</label>
					<span class="output">lorem</span>	
				</fieldset>
	        
			
			</form>
			<div class="titform"><h2>Normativa antiriciclaggio</h2></div>
	        <div class="boxform">
					<form id="formrichiesta2" class="formGeneric">
					<fieldset class="row">
						<label class="nomefield">Utilizzo della carta:</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
					<fieldset class="first">
						<label class="nomefield">Professione:</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
					<fieldset>
						<label class="nomefield">Settore dell'attività lavorativa:</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
					<fieldset class="first">
						<label class="nomefield">Dettaglio settore:</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
					<fieldset>
						<label class="nomefield">Stato di svolgimento:</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
					<fieldset class="first">
						<label class="nomefield">Provincia di svolgimento:</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
					<fieldset>
						<label class="nomefield">Reddito annuo netto:</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
					<fieldset class="first">
						<label class="nomefield">Dichiarazione origine del reddito:</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
					 <fieldset class="tolltipclick">
						<label class="nomefield">Origine dei fondi:</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
					<fieldset class="first tolltipclick row">
						<label class="nomefield">Persona politicamente esposta:</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
				</form>
		</div>
	  </div>
	     <div class="btnc aButtoncons" id="btnProsegui1"><a href="javascript:;" class="nextstep first aButton" onclick="$('#btnModifica1').show();$('#btnProsegui1').hide();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>prosegui</span></a></div>
	    <div class="btnc aButtoncons" style="display:none" id="btnModifica1"><a href="javascript:;" class="backstep second modifica" onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>modifica</span></a></div>
	<br class="clear" />
	</div>
    
	<!--contenuto da caricare come risposta di output visualizzazione e comparsa solo simulate-->
   
 </div>
 <div class="steprichiesta off">
    <div class="steprichiestatit">
		<img alt="Lorem ipsum" src="/img/ret/str_tit_due_off.png">
		<h2 class="richiestaTit">Lorem ipsum</h2>
		<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
	</div>
	<div class="formGeneric steprichiestacont">
	  <div style="display:none" id="contformrichiesta2">
		<form id="condizioniAct">
			<p><strong>Leggi e prendi visione</strong> delle norme contrattuali.<br/>
			Riceverai un <strong>sms</strong> con il codice di controllo al numero xxxxxxx  che ti servir&agrave; per firmare il contratto
			</p>
			<fieldset class="tolltipclick row">
			 <span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; !$(this).find('input').is(':checked')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="normegenerali">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" disabled="" onclick="ableFormOtp('condizioniAct')" id="accettoFirma"></a>
						<span class="uniqTooltipInnerHTML">
							<p>per procedere occorre prendere visione del contratto aprendo il relativo .pdf</p>
						</span>
					</span>
							  
				</span>
			</span>
			<span class="text"><strong>Ho letto e firmo le </strong><a href="javascript:;" onclick="ableinput(this,'clausule')" target="_blank">&quot;norme generali del contratto&quot;</a></span>
			</fieldset>
			<fieldset class="tolltipclick row">
			 <span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; !$(this).find('input').is(':checked')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="normegenerali2">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" disabled="" id="clausule" onclick="ableFormOtp('condizioniAct')"></a>
						<span class="uniqTooltipInnerHTML">
							<p>per procedere occorre prendere visione del contratto aprendo il relativo .pdf</p>
						</span>
					</span>
							  
				</span>
			</span>
			<span class="text"><strong>Ho letto e firmo le clausole specifiche:</strong> In particolare ho preso visione dei seguenti articoli: 2 Attestazione di avvenuta ricezione della carta e relativo sblocco; 5 Facoltà di bloccare la carta; 6,7,24. Validità, rimborso e recesso; 18 Risoluzione del contratto; 20 Responsabilità per l'utilizzo non autorizzato della carta (perdite a carico del cliente); 26 Determinazione e modifica unilaterale delle condizioni.</span>
			</fieldset>
		   <fieldset class="tolltipclick row">
			<span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; !$(this).find('input').is(':checked')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="questionario">
							 <span class="uniqTooltipPos">
								<a href="javascript:;" class="hovfin"><span class="hovfin"></span><input type="checkbox" disabled="" disabled="" id="accettoVerifica" onclick="ableFormOtp('condizioniAct')"></a>
								<span class="uniqTooltipInnerHTML">
									<p>leggi il questionario di adeguata verifica</p>
								</span>
							  </span>
							  
						</span>
					</span>
				<span class="text"><strong>Ho letto e firmo il </strong><a href="javascript:;" onclick="ableinput(this)" target="_blank"> questionario di adeguata verifica</a></span>
		   </fieldset>
		  </form>
		 
		 
<div class="boxfirmabg row-fluid noMargbottom minHboxfirmabg">
		<div class="logoCont"><img src="/img/ret/logo_digitallife.png" class="logo"/></div>
			<div class="span8">
				<p><strong>Per firmare inserisci il Codice di Firma e il Codice di controllo</strong> che ti abbiamo inviato via SMS.</p>
				<div class="row-fluid noMargbottom">
					<form autocomplete="off">
						<div class="span6 tolltipclick">
							<label class="left nomefield">Codice firma</label>
							<input type="text" disabled="" id="codFirmaInput">
							<span class="closed">
								<span id="codfirma" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
								   <span class="uniqTooltipPos">
										<a href="javascript:;" title="help" style="display:none" id="helpCodiceFirma"><img src="/img/ret/ico2or_help2.gif" id="help" class="help" alt="help"></a>
										<span class="uniqTooltipInnerHTML">
											<p>Inserisci il Codice di Firma che hai scelto quando hai attivato la firma digitale. Se non lo ricordi, lo trovi nel PDF che ti abbiamo inviato alla tua email</p>
										</span>
									</span>
								</span>
							</span>
						</div>
						<div class="span6 tolltipclick">
							<label class="left nomefield">Codice di controllo</label>
							<input type="text" disabled="" id="codControlloInput">
							<a class="underline noMarg" href="#" style="display:none" id="linkInviaCod">Inviami codice</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>
<br class="clear" />
<div id="firmaStep2Dis" class="btnc aButtoncons"><a class="aButton buttDis" title="lorem ipsum dolor"><span>FIRMA</span></a></div>
<div class="btnc aButtoncons" id="firmaStep2Ab" style="display:none"><a onclick="stepRichiesta(this,true);$('contformrichiesta').hide();$('contformrichiestaoutput').show();$('contformrichiesta2').hide();$('contformrichiesta2output').show();" class="nextstep firma aButton" href="javascript:;">
		FIRMA</a>
</div>
		</div>
		<div style="display:none" id="contformrichiesta2output">
			<strong>Contratto di richiesta Carta Jeans firmato digitalmente</strong>
		</div>
	</div>
 </div>
 <div class="steprichiesta off last">
   <div class="steprichiestatit">
		<img src="/img/ret/str_tit_tre_off.png" alt="Salva il contratto" />
		<h2 class="richiestaTit">Salva il contratto</h2>
		<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png" /></span>
  </div>
  <div class="formGeneric steprichiestacont">
	  <div style="display:none" id="contformrichiesta3">
	  <form id="condizioniAct2">
			<div class="tolltipclick row-fluid disabledField">
			 <span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; !$(this).find('input').is(':checked)) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="contratto">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" disabled=""  onclick="ableFormOtp('condizioniAct2')" id="printContratto"></a>
						<span class="uniqTooltipInnerHTML">
							<p>per procedere occorre prendere visione del contratto aprendo il relativo .pdf</p>
						</span>
					</span>
							  
				</span>
			</span>
			<span class="text"><strong>Ho letto e dichiaro di aver stampato e/o salvato su supporto durevole </strong><a href="javascript:;" onclick="ableinput(this,'clausule')" target="_blank">il contratto di CartaJeans</a></span>
			</div>
	  </form>
	  
	   <div class="boxfirmabg row-fluid noMargbottom minHboxfirmabg">
		<div class="logoCont"><img src="/img/ret/logo_digitallife.png" class="logo"/></div>
			<div class="span8">
				<p id="codiceFirmaTxt2" style="visibility:hidden"><strong>Ora firma il contratto: inserisci il Codice di Firma e il Codice di controllo</strong> che ti abbiamo inviato via SMS.</p>
				<div class="row-fluid noMargbottom">
					<form autocomplete="off">
						<div class="span6 tolltipclick">
							<label class="left nomefield">Codice firma</label>
							<input type="text" id="codFirmaInput2">
							<span class="closed">
								<span id="codfirma" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
								   <span class="uniqTooltipPos">
										<a href="javascript:;" title="help" style="display:none" id="helpCodiceFirma2"><img src="/img/ret/ico2or_help2.gif" id="help" class="help" alt="help"></a>
										<span class="uniqTooltipInnerHTML">
											<p>Inserisci il Codice di Firma che hai scelto quando hai attivato la firma digitale. Se non lo ricordi, lo trovi nel PDF che ti abbiamo inviato alla tua email</p>
										</span>
									</span>
								</span>
							</span>
						</div>
						<div class="span6 tolltipclick">
							<label class="left nomefield">Codice di controllo:</label>
							<input type="text" disabled="" id="codControlloInput2">
							<a class="underline noMarg" href="#" style="display:none" id="linkInviaCod2">Inviami un nuovo codice</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>
		
		<br class="clear" />
	   	   <div id="firmaStep3Dis" class="btnc aButtoncons"><a class="aButton buttDis" title="lorem ipsum dolor"><span>FIRMA</span></a></div>
		   <div class="btnc aButtoncons" id="firmaStep3Ab" style="display:none"><a href="javascript:;" class="nextstep firma aButton" onclick="stepRichiesta(this,true);$('#contformrichiesta3').hide();$('#contformrichiesta3output').show()">
			FIRMA</a>
			</div>
	  </div>
	  <div id="contformrichiesta3output" style="display:none">
	  
	  <?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_270.php");?>
	   <br class="clear" />
	  </div>
  </div>
 </div>
 <div class="stepbottom"></div>
</div>
