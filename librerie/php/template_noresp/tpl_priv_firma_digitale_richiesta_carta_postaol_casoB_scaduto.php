<script type="text/javascript">
function errorBoxsetPosition(idErrorform) { // passa come parametro l'id del form sopra al quale posizionare box errore
	idErrorform = $('#'+ idErrorform);
	idErrorform.before($('#boxError'));
	$('#boxError').show();
	setElementonView($('#boxError')); //si posiziona all'altezza del box di errore scrollando la pagina
}

</script>
<div id="boxError" style="display:none">
	<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_034.html");?>
</div>
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
	  <div id="contformrichiesta">  
		<p>Cartimpronta ONE &egrave; la carta di credito a zero canone annuale, zero commissioni e con tutti i vantaggi dei circuiti MasterCard e Visa. Ti ricordiamo che l'emissione &egrave; sempre soggetta a valutazione da parte della Banca.</p>
		<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_323.php");?>
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
		<!--<div class="btnc aButtoncons" id="btnProsegui1">--><!--<a href="javascript:;" class="nextstep first aButton" onclick="$('#btnModifica1').show();$('#btnProsegui1').hide();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>prosegui</span></a>-->
			<!--<a onclick="errorBoxsetPosition('formrichiesta2')" class="nextstep first aButton"><span>prosegui</span></a>
		</div>-->
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
			<span class="text"><strong>Ho letto e firmo le </strong><a href="javascript:;" onclick="ableinput(this,'clausule')" target="_blank"> &quot;norme generali del contratto&quot;</a></span>
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
			<span class="text"><strong>Ho letto e firmo le clausole specifiche:</strong> In particolare ho preso visione dei seguenti articoli: 2 Attestazione di avvenuta ricezione della carta e relativo sblocco; 5 Facolt&a grave; di bloccare la carta; 6,7,24. Validit&agrave;, rimborso e recesso; 18 Risoluzione del contratto; 20 Responsabilit&agrave; per l'utilizzo non autorizzato della carta (perdite a carico del cliente); 26 Determinazione e modifica unilaterale delle condizioni.</span>
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
				<span class="text"><strong>Ho letto e firmo il </strong><a href="javascript:;" onclick="ableinput(this)" target="_blank"> questionario di adeguata verifica</a></span>
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
		<img src="/img/ret/str_tit_tre_off.png" alt="Salva il contratto" />
		<h2 class="richiestaTit">Salva il contratto</h2>
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
		<strong class="verde">Prossimi passi per attivare e iniziare a utilizzare la tua carta:</strong><br class="clear"/><br/>
		<div class="boxstepCont">
			<div class="boxstep">
				<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
				<div class="middle">
					<div class="text">
						<p><strong>INVIA UNA COPIA DI UN DOCUMENTO DI IDENTIT&Agrave;' VALIDO A QUESTO INDIRIZZO EMAIL: webank@webank.it</strong><br>
						Oppure:<br/>
						- fax n. 02/43450599 <br/>
						- posta: WeBank Spa - Via Massaua, 4 - 20146 Milano (Mi)
						</p>
						<p>La fotocopia dovr&agrave; essere leggibile e chiara in ogni sua parte. La tua foto perfettamente riconoscibile.</p>
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
