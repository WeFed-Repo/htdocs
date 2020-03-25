

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
		<img src="/img/ret/str_tit_riccarta_uno_on.gif" alt="Compila la richiesta" />
		<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png" /></span>
		<span style="display:none"><a onclick="stepRichiesta(this);disableForm(this,'contformrichiesta')" class="backstep second modifica" href="javascript:;">modifica</a></span>
    </div>
	
	<div class="formGeneric steprichiestacont">
	  <div id="contformrichiesta">  
		<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_323.php");?>
		<div class="titform"><h2>Normativa antiriciclaggio</h2></div>
		
		<div class="boxform">
		<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_324.php");?>
		
	     </div>
	      
		</div>
		<div id="contformrichiestaoutput" style="display:none">
				<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_323_output.php");?>
			</div>
	    <div class="btnc aButtoncons"><a href="javascript:;" class="nextstep first aButton" onclick="disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>prosegui</span></a></div>
	<br class="clear" />
	</div>
    
	<!--contenuto da caricare come risposta di output visualizzazione e comparsa solo simulate-->
   
 </div>
 <div class="steprichiesta off">
    <div class="steprichiestatit">
		<img src="/img/ret/str_tit_riccarta_due_off.png" alt="Firma il contratto" />
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
			<span class="text"><strong>Ho letto e firmo le </strong><a href="javascript:;" onclick="ableinput(this,'clausule')" target="_blank"><strong class="verde"> &quot;norme generali del contratto&quot;</strong></a></span>
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
		   <fieldset class="tolltipclick row">
			<span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="questionario">
							 <span class="uniqTooltipPos">
								<a href="javascript:;" class="hovfin"><span class="hovfin"></span><input type="checkbox" disabled=""></a>
								<span class="uniqTooltipInnerHTML">
									<p>leggi il questionario di adeguata verifica</p>
								</span>
							  </span>
							  
						</span>
					</span>
				<span class="text"><strong>Ho letto e firmo il </strong><a href="javascript:;" onclick="ableinput(this)" target="_blank"><strong class="verde"> questionario di adeguata verifica</strong></a></span>
		   </fieldset>
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
		<img src="/img/ret/str_tit_riccarta_tre_off.png" alt="Salva il contratto" />
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
			<span class="text"><strong>Ho letto e dichiaro di aver stampato e/o salvato su supporto durevole </strong><a href="javascript:;" onclick="ableinput(this,'clausule')" target="_blank"><strong class="verde"> il contratto di Cartimpronta</strong></a></span>
			</fieldset>
	  </form>
	  
	   <div class="boxfirmabg">
	<div class="logoCont">&nbsp;<!--<img src="/img/ret/logo_digitallife.gif" class="logo"/>--></div>
	<div class="">
	<p><strong>Ora firma il contratto: inserisci il Codice di Firma e il Codice di controllo</strong> che ti abbiamo inviato via SMS.</p>
	<form autocomplete="off">
		<fieldset class="tolltipclick nofloat"><input type="text" placeholder="Codice firma">
			<span class="closed">
				<span id="codfirma" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
				   <span class="uniqTooltipPos">
						<a href="javascript:;"><img id="lampa3" class="lampa" src="/img/ret/lampa_off.gif"></a>
						<span class="uniqTooltipInnerHTML">
							<p>Inserisci il Codice di Firma che hai scelto quando hai attivato la firma digitale. Se non lo ricordi, lo trovi nel PDF che ti abbiamo inviato alla tua email</p>
						</span>
					</span>
				</span>
			</span>
		</fieldset>
		<fieldset class="tolltipclick nofloat">
			<input type="text" placeholder="Codice di controllo(SMS)">
			<span class="closed">
				<span id="codcontrollo" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
				   <span class="uniqTooltipPos">
						<a href="javascript:;"><img id="lampa3" class="lampa" src="/img/ret/lampa_off.gif"></a>
						<span class="uniqTooltipInnerHTML">
							<p>Inserisci il codice di controllo che hai ricevuto in questo momento sul tuo cellulare; se non l'hai ricevuto, clicca su &quot;inviami nuovo codice&quot;.</p>
						</span>
					</span>
				</span>
			</span>
		</fieldset>
	    <div class="btnc"><a href="javascript:;" class="nextstep firma" onclick="stepRichiesta(this);$('contformrichiesta3').hide();$('contformrichiesta3output').show();$('contformrichiesta2').hide();$('contformrichiesta2output').show();">
		<img src="/img/ret/str_btn_firma.png" /></a>
		</div>
	</form>
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
