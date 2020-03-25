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
			<div class="span6">
				<label class="nomefield">Intestazione carta:</label>
				<span class="output">Lorem ipsum</span>
			</div>
			<div class="span6">
				<label class="nomefield">Conto di appoggio:</label>
				<span class="output">CC 00599 0000013336 EUR</span>
			</div>
		</div>
		
		<!--solo se si possiede già il bancomat -->
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Motivo della richiesta:</label>
				<select><option>lorem ipsum</option><option>lorem ipsum</option></select>
			</div>
			<div class="span6">
				<label class="nomefield">Bancomat da estinguere:</label>
				<span class="output">1333653422</span>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Massimali di spesa:</label>
				<span class="output">1500 al giorno/2500 al mese</span>
			</div>
		<div class="span6 tolltipclick">
		<label class="nomefield">
		<span class="closed">
			<span id="massimali" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="underline">Vedi dettagli</a>
							<span class="uniqTooltipInnerHTML">
								<p>
									<table class="piattrad">	
										<tr>
											<td class="grey">Tipologia </td>		
											<td class="grey center thfiletto">Al giorno </td>
											<td class="grey center">Al mese </td>		
										</tr>
										<tr>
											<td class="greyleft">
												<img alt="" src="/img/ret/quad_pic_blu.gif" class="padbot">
														<span class="closed">
														<span id="maxutilizzo" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
																<span class="uniqTooltipPos">
																	<a href="javascript:;"><strong>Max utilizzo carta</strong></a>
																		<span class="uniqTooltipInnerHTML">
																			<p>
																				Per  &quot;Max utilizzo carta &quot; si intende la cifra totale che puoi spendere con il bancomat, ovvero la somma dei vari tipi di utilizzo (prelievo e pagamenti).
																			ESEMPIO. Se il tuo massimale mensile &egrave; di 2000  &euro;,  prelevando 1200 &euro;, ti restano 800 &euro; per i tuoi pagamenti.
																			</p>
																		</span>
																</span>
														</span>
												</span>
											</td>
											<td class="right">1500 &euro;</td>
											<td class="right">2000 &euro;</td>
										</tr>
										<tr>
											<td class="greyleft"><img alt="" src="/img/ret/quad_pic_blu.gif" class="padbot">Max prelievo circuito Bancomat</td>
											<td class="right">500 &euro;</td>
											<td class="right">1500 &euro;</td>
										</tr>
										<tr>
											<td class="greyleft"><img alt="" src="/img/ret/quad_pic_blu.gif" class="padbot">Max prelievo circuito Cirrus (tra Italia ed estero)</td>
											<td class="right">250 &euro;</td>
											<td class="right">1000 &euro;</td>
										</tr>
										<tr>
											<td class="greyleft"><img alt="" src="/img/ret/quad_pic_blu.gif" class="padbot">Max pagamento circuito PagoBancomat</td>
											<td class="right">1000 &euro;</td>
											<td class="right">1000 &euro;</td>
										</tr>
										<tr>
											<td class="greyleft"><img alt="" src="/img/ret/quad_pic_blu.gif" class="padbot">Max pagamento circuito Maestro (tra Italia ed estero)</td>
											<td class="right">500 &euro;</td>
											<td class="right">1000 &euro;</td>
										</tr>
									</table>
								</p>
							</span>
					</span>
			</span>
		</span>
		</label>
	</div>
		
		</div>
		
		<div id="indirizzosped">
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Indirizzo di spedizione:</label>
					<span class="output">lorem ipsum dolor sit</span>
				</div>
				<div class="span6 tolltipclick">
					<label class="nomefield">
					<a class="underline linkTodisable" href="javascript:;" onclick="if(!$(this).hasClass('disabled')) {$('#indirizzosped').hide();$('#indirizzomod').show()}">Cambia indirizzo</a>
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
	
	</div>
	
	<div class="row-fluid">
		<label class="nomefield">Note:</label>
		<input type="text" placeholder="facoltativo" name="">
	</div>
	
	<div class="tolltipclick row-fluid">
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
		<span class="text nopadd">Dichiaro di aver preso visione dopo averlo stampato e/o salvato su supporto durevole <a href="javascript:;" onclick="ableinput(this)" target="_blank">&quot;la Documentazione Precontrattuale&quot;</a>(documento di sintesi e informativa precontrattuale).<br/> Puoi consultare se desideri anche il <a target="_blank" href="#">Foglio informativo</a> </span>
	</div>
	<div class="row-fluid">
		<label class="nomefield">Recesso:</label>
		<span class="text nopadd">Puoi recedere dalla richiesta della carta entro 14 giorni senza oneri penali. <a href="#">Leggi il documento</a></span>
	</div>
	<br class="clear" />
</form>
		

	      
		</div>
		<div id="contformrichiestaoutput" style="display:none">
			<form id="formrichiesta1">
				<div class="row-fluid">
					<div class="span6">
						<label class="nomefield">Intestazione carta:</label>
						<span class="output">Lorem ipsum</span>
					</div>
					<div class="span6">
						<label class="nomefield">Conto di addebito:</label>
						<span class="output">CC 00599 0000013336 EUR</span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<label class="nomefield">Massimali di spesa:</label>
						<span class="output">1000 al giorno/2500 al mese</span>
					</div>
					<div class="span6">
						<label class="nomefield">Indirizzo di spedizione:</label>
						<span class="output">lorem ipsum</span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<label class="nomefield"> Modalit&agrave; di invio:</label>
						<span class="output">lorem ipsum</span>
						<span>Gratuita in  6/7 gg lavorativi</span>
					</div>
					<div class="span6">
						<label class="nomefield">Numero di Telefono:</label>
						<span class="output">lorem ipsum</span>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span12">
						<label class="nomefield">Note:</label>
						<span class="output">lorem ipsum</span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">	
						<label class="nomefield">Informativa</label>
						<span class="output">lorem ipsum</span>
					</div>
				</div>
				<div class="row-fluid">
						<div class="span6">
						<label class="nomefield">Attivazione:</label>
						<span class="output">lorem ipsum</span>
					</div>
					<br class="clear">
				</div>
				<div class="row-fluid">
					<div class="span12">	
						<label class="nomefield">Firma digitale remota:</label>
						<span class="output">lorem </span>	
					</div>
				</div>
	        </form>
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
			<div class="tolltipclick row-fluid disabledField">
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
			<span class="text"><strong>Ho letto e firmo le </strong><a href="javascript:;" onclick="ableinput(this,'clausule');" target="_blank">&quot;norme generali del contratto&quot;</a></span>
			</div>
			<div class="tolltipclick row-fluid disabledField">
			 <span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; !$(this).find('input').is(':checked')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="normegenerali2">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" disabled="" id="clausule"  onclick="ableFormOtp('condizioniAct')"></a>
						<span class="uniqTooltipInnerHTML">
							<p>per procedere occorre prendere visione del contratto aprendo il relativo .pdf</p>
						</span>
					</span>
							  
				</span>
			</span>
			<span class="text"><strong>Ho letto e firmo le clausole specifiche:</strong> In particolare ho preso visione dei seguenti articoli: 2 Attestazione di avvenuta ricezione della carta e relativo sblocco; 5 Facoltà di bloccare la carta; 6,7,24. Validità, rimborso e recesso; 18 Risoluzione del contratto; 20 Responsabilità per l'utilizzo non autorizzato della carta (perdite a carico del cliente); 26 Determinazione e modifica unilaterale delle condizioni.</span>
			</div>
		 
		  </form>
		
<div class="boxfirmabg row-fluid noMargbottom minHboxfirmabg">
		<div class="logoCont"><img src="/img/ret/logo_digitallife.png" class="logo"/></div>
			<div class="span8">
				<p id="codiceFirmaTxt" style="visibility:hidden"><strong>Per firmare inserisci il Codice di Firma e il Codice di controllo</strong> che ti abbiamo inviato via SMS.</p>
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
											<p>lorem ipsum dolor</p>
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
			<strong>Contratto di richiesta Bancomat firmato digitalmente</strong>
		</div>
	</div>
 </div>
 <div class="steprichiesta off last">
   <div class="steprichiestatit">
		<img alt="Lorem ipsum" src="/img/ret/str_tit_tre_off.png">
		<h2 class="richiestaTit">Lorem ipsum</h2>
		<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png" /></span>
  </div>
  <div class="formGeneric steprichiestacont">
	  <div style="display:none" id="contformrichiesta3">
	   <form id="condizioniAct2">
			<div class="tolltipclick row-fluid disabledField">
			 <span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; !$(this).find('input').is(':checked')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="contratto">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" disabled="" onclick="ableFormOtp('condizioniAct2')" id="printContratto"></a>
						<span class="uniqTooltipInnerHTML">
							<p>per procedere occorre prendere visione del contratto aprendo il relativo .pdf</p>
						</span>
					</span>
							  
				</span>
			</span>
			<span class="text"><strong>Ho letto e dichiaro di aver stampato e/o salvato su supporto durevole </strong><a href="javascript:;" onclick="ableinput(this,'clausule')" target="_blank">il contratto Bancomat</a></span>
			</div>
	  </form>
	  
 <div class="boxfirmabg row-fluid noMargbottom minHboxfirmabg">
		<div class="logoCont"><img src="/img/ret/logo_digitallife.png" class="logo"/></div>
			<div class="span8">
				<p id="codiceFirmaTxt2" style="visibility:hidden"><strong>Per firmare inserisci il Codice di Firma e il Codice di controllo</strong> che ti abbiamo inviato via SMS.</p>
				<div class="row-fluid noMargbottom">
					<form autocomplete="off">
						<div class="span6 tolltipclick">
							<label class="left nomefield">Codice firma</label>
							<input type="text" disabled="" id="codFirmaInput2">
							<span class="closed">
								<span id="codfirma2" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
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
							<label class="left nomefield">Codice di controllo</label>
							<input type="text" disabled="" id="codControlloInput2">
							<a class="underline noMarg" href="#" style="display:none" id="linkInviaCod2">Inviami codice</a>
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
