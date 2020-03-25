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
		<img alt="Lorem ipsum" src="/img/ret/str_tit_uno_on.gif">
		<h2 class="richiestaTit">Lorem ipsum</h2>
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
				<fieldset class="first">
					<label class="nomefield">Intestazione carta:</label>
					<span class="output">Lorem ipsum</span>
				</fieldset>
				<fieldset>
					<label class="nomefield">Conto di addebito:</label>
					<span class="output">CC 00599 0000013336 EUR</span>
				</fieldset>
				
				<fieldset class="first">
					<label class="nomefield">Massimali di spesa:</label>
					<span class="output">1000 al giorno/2500 al mese</span>
				</fieldset>
				<fieldset class="first">
					<label class="nomefield">Indirizzo di spedizione:</label>
					<span class="output">lorem ipsum</span>
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
					<legend class="vatop left">Informativa</legend>
					<span class="output">lorem ipsum</span>
					
				</fieldset>
				<fieldset class="first">
					<legend>Attivazione:</legend>
					<span class="output">lorem ipsum</span>
				</fieldset>
				<br class="clear">
				
				<fieldset class="tolltipclick row">
					<label class="nomefield">Firma digitale remota:</label>
					<span class="output">lorem </span>	
				</fieldset>
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
		  <form>
			<fieldset class="tolltipclick row">
			 <span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="normegenerali">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" disabled=""></a>
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
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="normegenerali2">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" disabled="" id="clausule"></a>
						<span class="uniqTooltipInnerHTML">
							<p>per procedere occorre prendere visione del contratto aprendo il relativo .pdf</p>
						</span>
					</span>
							  
				</span>
			</span>
			<span class="text"><strong>Ho letto e firmo le clausole specifiche:</strong> In particolare ho preso visione dei seguenti articoli: 2 Attestazione di avvenuta ricezione della carta e relativo sblocco; 5 Facoltà di bloccare la carta; 6,7,24. Validità, rimborso e recesso; 18 Risoluzione del contratto; 20 Responsabilità per l'utilizzo non autorizzato della carta (perdite a carico del cliente); 26 Determinazione e modifica unilaterale delle condizioni.</span>
			</fieldset>
		 
		  </form>
		 
<div class="boxfirmabg">
	<div class="logoCont"><img src="/img/ret/logo_digitallife.png" class="logo"/></div>
	<div class="">
	<p><strong>Ora firma il contratto: inserisci il Codice di Firma e il Codice di controllo</strong> che ti abbiamo inviato via SMS.</p>
	<form>
		<fieldset class="tolltipclick nofloat">
		<label class="left nomefield">Codice firma:</label>
		<input type="text" >
			<span class="closed">
				<span id="codfirma" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
				   <span class="uniqTooltipPos">
						<a href="javascript:;" title="help"><img src="/img/ret/ico2or_help2.gif" id="help" class="help" alt="help"></a>
						<span class="uniqTooltipInnerHTML">
							<p>Inserisci il Codice di Firma che hai scelto quando hai attivato la firma digitale. Se non lo ricordi, lo trovi nel PDF che ti abbiamo inviato alla tua email</p>
						</span>
					</span>
				</span>
			</span>
		</fieldset>
		<fieldset class="tolltipclick nofloat">
			<label class="left nomefield">Codice di controllo (SMS):</label>
			<input type="text" >
			<span class="closed">
				<span id="codcontrollo" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
				   <span class="uniqTooltipPos">
						<a href="javascript:;" title="help"><img src="/img/ret/ico2or_help2.gif" id="help" class="help" alt="help"></a>
						<span class="uniqTooltipInnerHTML">
							<p>Inserisci il codice di controllo che hai ricevuto in questo momento sul tuo cellulare; se non l'hai ricevuto, clicca su &quot;inviami nuovo codice&quot;.</p>
						</span>
					</span>
				</span>
			</span>
			
		</fieldset>
	    <div class="btnc"><a href="javascript:;" class="nextstep firma" onclick="stepRichiesta(this,true);$('contformrichiesta').hide();$('contformrichiestaoutput').show();$('contformrichiesta2').hide();$('contformrichiesta2output').show();">
		<img src="/img/ret/str_btn_firma.png" /></a>
		</div>
	</form>
	</div>
</div>
<br class="clear" />
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
	  <div class="boxesito positivo">
			<div class="middle"><span class="imgCont"></span>
			<div class="text"><p class="noPaddbottom"><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
		et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p></div>
			
			</div>
	  </div>
	  <br class="clear" />
	<strong class="verde">Prossimi passi per attivare e iniziare a utilizzare il tuo Bancomat:</strong><br/><br/>
	<br class="clear" />
	 <div class="boxstepCont">
		<div class="boxstep">
			<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
				<div class="middle">
					<div class="text">
						<p><strong>INVIA LA COPIA DI UN DOCUMENTO DI IDENTIT&Agrave; VALIDO A QUESTO INDIRIZZO EMAIL: webank@webank.it</strong><br>
						Oppure:<br>
						- fax n. 02/43450599 <br/>
						- posta: WeBank Spa - Via Massaua, 4 - 20146 Milano (Mi)<br/><br/>
						La fotocopia dovr&agrave; essere leggibile e chiara in ogni sua parte. La tua foto perfettamente riconoscibile. 
						</p>
					</div>
				</div>
				<div class="bottom"><span class="angololeft"></span><span class="angoloright"></span></div>
			</div>
	</div> 
	 <br class="clear" />
	  </div>
	  <div id="contformrichiesta3output" style="display:none">
	  
	  <?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_270.php");?>
	   <br class="clear" />
	  </div>
  </div>
 </div>
 <div class="stepbottom"></div>
</div>
