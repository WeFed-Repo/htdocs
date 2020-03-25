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
			<span class="text"><strong>Ho letto e firmo le </strong><a href="javascript:;" onclick="ableinput(this,'clausule')" target="_blank"> &quot;norme generali del contratto&quot;</a></span>
			
			</div>
			<div class="tolltipclick row-fluid disabledField">
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
			<span class="text"><strong>Ho letto e firmo le clausole specifiche:</strong> In particolare ho preso visione dei seguenti articoli: 2 Attestazione di avvenuta ricezione della carta e relativo sblocco; 5 Facolt&a grave; di bloccare la carta; 6,7,24. Validit&agrave;, rimborso e recesso; 18 Risoluzione del contratto; 20 Responsabilit&agrave; per l'utilizzo non autorizzato della carta (perdite a carico del cliente); 26 Determinazione e modifica unilaterale delle condizioni.</span>
			</div>
		  	<div class="tolltipclick row-fluid disabledField">
			 <span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; !$(this).find('input').is(':checked')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="normegenerali2">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" disabled="" id="verifica" onclick="ableFormOtp('condizioniAct')"></a>
						<span class="uniqTooltipInnerHTML">
							<p>leggi il questionario di adeguata verifica</p>
						</span>
					</span>
							  
				</span>
			</span>
		<span class="text"><strong>Ho letto e firmo il </strong><a href="javascript:;" onclick="ableinput(this)" target="_blank"> questionario di adeguata verifica</a></span>
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
	  <form id="condizioniAct2">
			<div class="tolltipclick row-fluid disabledField">
			 <span class="closed">
				<span onclick="if(this.parentNode.className=='closed' &amp;&amp; !$(this).find('input').is(':checked')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="contratto">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" disabled=""  onclick="ableFormOtp('condizioniAct2')" id="printContratto"></a>
						<span class="uniqTooltipInnerHTML">
							<p>per procedere occorre prendere visione del contratto aprendo il relativo .pdf</p>
						</span>
					</span>
							  
				</span>
			</span>
			<span class="text"><strong>Ho letto e dichiaro di aver stampato e/o salvato su supporto durevole </strong><a href="javascript:;" onclick="ableinput(this,'clausule')" target="_blank">il contratto di Cartimpronta</a></span>
			</div>
	  </form>
	  
	   <div class="boxfirmabg row-fluid noMargbottom minHboxfirmabg">
		<div class="logoCont"><img src="/img/ret/logo_digitallife.png" class="logo"/></div>
			<div class="span8">
				<p id="codiceFirmaTxt2" style="visibility:hidden"><strong>Per firmare il contratto inserisci il Codice di Firma e il Codice di controllo</strong> che ti abbiamo inviato via SMS.</p>
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
