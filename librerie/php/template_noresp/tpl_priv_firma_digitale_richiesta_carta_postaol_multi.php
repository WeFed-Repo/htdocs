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
		<img src="/img/ret/str_tit_uno_on.gif" alt="Compila la richiesta" />
		<h2 class="richiestaTit">Richiesta Cartimpronta ONE</h2>
		<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png" /></span>
		<span style="display:none"><a onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();stepRichiesta(this);disableForm(this,'contformrichiesta')" class="backstep second modifica" href="javascript:;">modifica</a></span>
    </div>
	
	<div class="formGeneric steprichiestacont">
	  <div id="contformrichiesta" class="row-fluid">  
		<p>Cartimpronta ONE &egrave; la carta di credito a zero canone annuale, zero commissioni e con tutti i vantaggi dei circuiti MasterCard e Visa. Ti ricordiamo che l'emissione &egrave; sempre soggetta a valutazione da parte della Banca.</p>
		<form id="formrichiesta1">
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Intestatario</label>
					<span class="output">Lorem ipsum</span>
				</div>
				<div class="span6">
					<label class="nomefield">Conto di addebito</label>
					<select class="withIco">
						<option>Seleziona</option>
						<option>Lorem</option>
					</select>
					<a class="flRight" title="Lorem ipsum" href="#"><img class="ico" alt="Lorem ipsum" src="/img/ico1gr_preferito.gif"></a>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Motivo richiesta</label>
					<select>
						<option>Seleziona</option>
						<option>Lorem</option>
					</select>
				</div>
				<div class="span6">
					<label class="nomefield">Carta da estinguere</label>
					<span class="output">XXXXXXXX3422</span>
				</div>
			</div>
			
			<div class="row-fluid tolltipclick">
				<div class="radiocont tolltipclick span6">
					<span class="nomefield">Circuito</span>
					<div class="row-fluid">
						<label class="span6"><input type="radio" name="carta" value="Mastercard">Mastercard<br/> 
							<span class="closed">
								<span id="consigliato" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
								<span class="uniqTooltipPos"><a href="javascript:;" class="underline textbottom">(Consigliato da Webank)</a>
									<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
								</span>
								</span>
							</span>
						</label>
						<label class="span6"><input type="radio"  name="carta" value="Visa">Visa</label>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">Limiti di spese</label>
					<span class="output">1.200 &euro; (Salvo valutazione di Webank)</span>
				</div>
			</div>			
			
			<div class="row-fluid">
				<label class="nomefield">Indirizzo di spedizione</label>
				<span class="output">Via tal dei tali N&deg;5<br/>
				Lorem ipsum lorem ipsum <strong>lorem ipsum</strong> lorem ipsum</span>
			</div>
			<div class="row-fluid">
				<label class="left nomefield">Note</label>
				<input type="text" name="" placeholder="facoltativo">
			</div>
		
			<div>
				<span class="nomefield">Privacy</span>
				<span class="text">Consenso al trattamento dei miei dati previsto previsto dall' <a href="javascript:;"  onclick="ableinput(this)" target="_blank">informativa sui sistemi di informazione creditizi privati</a></span>
				<div class="tolltipclick row-fluid">
					<div class="radiocont span6">
						<div class="row-fluid">
							<div class="span6">
								<span class="closed">
									<span id="consenso1" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
										<span class="uniqTooltipPos">
											<a href="javascript:;"><label><span class="hovfin"></span><input type="radio" name="consenso" id="consenso" disabled>do il consenso</label></a>
											<span class="uniqTooltipInnerHTML">
												<p>prima di fornire il consenso devi leggere l'informativa privacy</p>
											</span>
										</span>
									</span>
								</span>
							</div>
							<div class="span6">
								<span class="closed">
									<span id="consenso2" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
										<span class="uniqTooltipPos">
											<a href="javascript:;"><label><span class="hovfin"></span><input type="radio" name="consenso" id="noconsenso" disabled>non do il consenso</label></a>
											<span class="uniqTooltipInnerHTML">
												<p>prima di fornire il consenso devi leggere l'informativa privacy</p>
											</span>
										</span>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>	
	
			<div class="tolltipclick row-fluid">
				<label class="nomefield">Informative:</label>
					<span class="closed">
						<span id="informative" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
							<span class="uniqTooltipPos">
								<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="informative2" disabled></a>
								<span class="uniqTooltipInnerHTML">
									<p>per procedere occorre prendere visione</p>
								</span>
							</span>
								  
							</span>
					</span>
					<span class="text nopadd">Dichiaro di aver preso visione dopo averla stampata e/o salvata su supporto durevole <a href="javascript:;" onclick="ableinput(this)" target="_blank">&quot;la Documentazione Precontrattuale&quot;</a> sui contratti e servizi a distanza (documento di sintesi, informativa precontrattuale, contratto).<br/> Puoi consultare se desideri anche il <a target="_blank" href="#">Foglio informativo</a> </span>	
			</div>			
	
			<div class="row-fluid">
				<legend>Attivazione</legend>
				<label>
				<input type="checkbox"  class="placeholder"/><span class="text nopadd">Dopo aver ricevuto la carta e il relativo Pin la attiver&ograve; chiamamando il numero verde indicato nella lettera di spedizione</span></label>
			</div>
			
			<div class="row-fluid">
				<label class="nomefield">Recesso</label>
				<span class="text nopadd">Puoi recedere dalla richiesta della carta entro 14 giorni senza oneri penali. <a href="#">Leggi il documento</a></span>
			</div>
				
		</form>
		
	    
		<div class="titform"><h2>Normativa antiriciclaggio</h2></div>
		
		<div class="boxform">
		<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_324.php");?>
		
	     </div>
	      
		</div>
		<div id="contformrichiestaoutput" style="display:none">
			<p>Cartimpronta ONE &egrave; la carta di credito a zero canone annuale, zero commissioni e con tutti i vantaggi dei circuiti MasterCard e Visa. Ti ricordiamo che l'emissione &egrave; sempre soggetta a valutazione da parte della Banca.</p>
			<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_323_output.php");?>
			</div>
	    <div class="btnc aButtoncons" id="btnProsegui1"><a href="javascript:;" class="nextstep first aButton" onclick="$('#btnModifica1').show();$('#btnProsegui1').hide();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>prosegui</span></a></div>
	  <div class="btnc aButtoncons" style="display:none" id="btnModifica1"><a href="javascript:;" class="backstep second modifica" onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>modifica</span></a></div>
		<br class="clear" />
	</div>
    
	<!--contenuto da caricare come risposta di output visualizzazione e comparsa solo simulate-->
   
 </div>
 <div class="steprichiesta off">
    <div class="steprichiestatit">
		<img src="/img/ret/str_tit_due_off.png" alt="Firma il contratto" />
		<h2 class="richiestaTit">Firma il contratto</h2>
		<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
	</div>
	<div class="formGeneric steprichiestacont">
	  <div style="display:none" id="contformrichiesta2">
		<form>
			<div class="tolltipclick row-fluid">				
				<span class="closed">
					<span id="informative" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
						<span class="uniqTooltipPos">
							<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="" disabled></a>
							<span class="uniqTooltipInnerHTML">
								<p>per procedere occorre prendere visione del contratto aprendo il relativo .pdf</p>
							</span>
						</span>
							  
						</span>
				</span>
				<span class="text nopadd"><strong>Ho letto e firmo le </strong><a href="javascript:;" onclick="ableinput(this,'clausule')" target="_blank"> &quot;norme generali del contratto&quot;</a></span>	
			</div>
			
			<div class="tolltipclick row-fluid">				
				<span class="closed">
					<span id="informative" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
						<span class="uniqTooltipPos">
							<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="" disabled></a>
							<span class="uniqTooltipInnerHTML">
								<p>per procedere occorre prendere visione del contratto aprendo il relativo .pdf</p>
							</span>
						</span>
							  
						</span>
				</span>
				<span class="text nopadd"><strong>Ho letto e firmo le clausole specifiche:</strong> In particolare ho preso visione dei seguenti articoli: 2 Attestazione di avvenuta ricezione della carta e relativo sblocco; 5 Facoltà di bloccare la carta; 6,7,24. Validità, rimborso e recesso; 18 Risoluzione del contratto; 20 Responsabilità per l'utilizzo non autorizzato della carta (perdite a carico del cliente); 26 Determinazione e modifica unilaterale delle condizioni.</span>	
			</div>
			
			<div class="tolltipclick row-fluid">				
				<span class="closed">
					<span id="informative" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
						<span class="uniqTooltipPos">
							<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="" disabled></a>
							<span class="uniqTooltipInnerHTML">
								<p>leggi il questionario di adeguata verifica</p>
							</span>
						</span>
							  
						</span>
				</span>
				<span class="text nopadd"><strong>Ho letto e firmo il </strong><a href="javascript:;" onclick="ableinput(this)" target="_blank">questionario di adeguata verifica</a></span>	
			</div>
		  </form>
		  <?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_322.php");?>
		</div>
		<div style="display:none" id="contformrichiesta2output">
			<strong>Contratto di richiesta Cartimpronta firmato digitalmente</strong>
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
	  <form>
			<fieldset class="tolltipclick row">
			 <span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="contratto">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" disabled=""></a>
						<span class="uniqTooltipInnerHTML">
							<p>per procedere occorre prendere visione del contratto aprendo il relativo .pdf</p>
						</span>
					</span>
							  
				</span>
			</span>
			<span class="text"><strong>Ho letto e dichiaro di aver stampato e/o salvato su supporto durevole </strong><a href="javascript:;" onclick="ableinput(this,'clausule')" target="_blank"> il contratto di Cartimpronta</a></span>
			</fieldset>
	  </form>
	  
	 <div class="boxfirmabg row-fluid noMargbottom">
		<div class="logoCont"><img src="/img/ret/logo_digitallife.png" class="logo"/></div>
			<div class="span8">
				<p><strong>Ora firma il contratto: inserisci il Codice di Firma e il Codice di controllo</strong> che ti abbiamo inviato via SMS.</p>
				<div class="row-fluid noMargbottom">
					<form autocomplete="off">
						<div class="span6 tolltipclick">
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
						</div>
						<div class="span6 tolltipclick">
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
						</div>
						
					</form>
				</div>
			</div>
		</div>
<br class="clear" />
	   <div id="" class="btnc aButtoncons"><a href="javascript:;" class="nextstep firma aButton buttDis">
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
