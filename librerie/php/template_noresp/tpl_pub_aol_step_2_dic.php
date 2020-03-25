<!-- ESEMPIO DI SETTING ERRORI: NON COPIARE -->
<script type="text/javascript">
	//Esempio di setting di alcuni errori
	errori = false;
	function esempioErrori()
	{
		if (errori)
		{
			unsetError('inputNome','Lorem');
		return 0;
		}
		setViewElement('commissioni');
		setError('commissioni');
		setError('informativa2');
		setError('consensoDati');
		setError('consensoDati2');
		errori = true;
	}
</script>
<!-- FINE ESEMPIO DI SETTING ERRORI: NON COPIARE -->


<script type="text/javascript">
function attivaProdotti() {
$('#prodottiAttivi').html('');

var dt = $('#dt').length && $('#dt').is(':checked');
var cb = $('#cb').length && $('#cb').is(':checked');
var cj = $('#cj').length && $('#cj').is(':checked');

if (!cb && !cj && !dt) {
$('#prodottiAttivi').html('<li><span>Nessun prodotto</span></li>');
} else {
if (dt) {
if($('#promoDep').length>0) {var promoDep = $('#promoDep').html()}
$('#prodottiAttivi').append('<li><span>Deposito titoli</span>' + promoDep + '</li>');

}

if (cb) {
$('#prodottiAttivi').append('<li><span>Carta bancomat</span></li>');
}
if (cj) {
$('#prodottiAttivi').append('<li><span>Carta Je@ns</span></li>');
}
}
} 
</script>
<div id="aolcontainer">
	<div id="aolleft">
		<form id="aol" name="aol" action="/webankpub/wb/2l/do/aol/wbwsPUaol3.do?BV_UseBVCookie=Yes&fromPageName=wsPUaol2.jsp&CNT_TARGET=Privati&OBS_KEY=null" method="post" autocomplete="off">
			<input type="hidden" name="fromPageName" value="wsPUaol2.jsp">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
			</p><br>
			<h2>Conto Webank comprende:</h2>
			
			<!-- conto-->
			<div class="clearBlock">
				<!--<input type="checkbox" class="checkProd" checked disabled>-->
				<img src="/img/ret/ico2inf_spunta.gif" class="checkProd">
				<div class="prodGroup">
					<div class="prodDescription">
						<h3>Conto corrente e deposito di risparmio</h3>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur  <strong>lorem</strong></li>
							<li><strong>lorem ipsum</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</li>
						</ul>
						<a href="javascript:;" class="showConditionOverlayer" data-anchorposition="lBlT">Scopri di pi&ugrave;</a>
						<div class="condizionidetailsOverlayer" style="display:none">
							<a href="javascript:;" class="closeOverlayer"><img src="/img/ico_lightBox_close.gif" alt=""></a>
							<img src="/img/str_aolpush_conto_small.png" alt="" class="flLeft imgProd">
							<div class="flLeft">
								<h2>Conto Webank</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li><strong>lorem</strong> Lorem ipsum dolor</li>
									<li><strong>lorem</strong></li>
									<li><strong>Lorem ipsum dolor</strong> Lorem ipsum dolor</li>
									<li>Lorem ipsum dolor <strong>sit</strong> Lorem ipsum dolor</li>
									<li>Lorem ipsum dolor <strong>Lorem ipsum dolor</strong></li>
									<li>Lorem ipsum dolor</li>
								</ul>
							</div>
						</div>
					</div>
					<img class="prodImg" alt="" src="/img/str_aolpush_conto.png">
				</div>
			</div>
			
			<!-- paperless-->
			<div class="clearBlock">
				<!--<input type="checkbox" class="checkProd" checked disabled>-->
				<img src="/img/ret/ico2inf_spunta.gif" class="checkProd">
				<div class="prodGroup">
					<div class="prodDescription">
						<h3>FIRMA DIGITALE E POSTA ELETTRONICA CERTIFICATA</h3>
						<ul>
							<li><strong>Lorem</strong>  e <strong>ipsum</strong>lorem ipsum dolor</li>
							<li>Lorem <strong>ipsum dolor sit ame</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
						</ul>
						<div class="condizionidetailsWrapper">
							<div>
								<p class="ancoraT"><span>Firma Digitale: </span><a href="javascript:;" class="showConditionOverlayer" data-anchorposition="lBlT">Scopri di pi&ugrave;</a></p>
								<div class="condizionidetailsOverlayer" style="display:none">
									<a href="javascript:;" class="closeOverlayer"><img src="/img/ico_lightBox_close.gif" alt=""></a>
									<img src="/img/str_aolpush_digitale_small.png" alt="" class="flLeft imgProd">
									<div class="flLeft">
										<h2>Firma Digitale</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit <strong> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</strong> </p>
										<ul>
											<li><strong>Lorem ipsum dolor</strong>:consectetur adipisicing elit</li>
											<li><strong>Lorem ipsum dolor</strong>:consectetur adipisicing</li>
											<li><strong>Lorem</strong>:consectetur adipisicing elit</li>
										</ul>
										<strong>Lorem ipsum</strong>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
									</div>
								</div>
							</div>
							<br>
							<div>
								<p class="ancoraT"><span>PEC: </span><a href="javascript:;" class="showConditionOverlayer" data-anchorposition="lBlT">Scopri di pi&ugrave;</a></p>
								<div class="condizionidetailsOverlayer" style="display:none">
									<a href="javascript:;" class="closeOverlayer"><img src="/img/ico_lightBox_close.gif" alt=""></a>
									<img src="/img/str_aolpush_pec_small.png" alt="" class="flLeft imgProd">
									<div class="flLeft">
										<h2>Posta elettronica certificata</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</p>
										<ul>
											<li><strong>Lorem ipsum dolor</strong>:consectetur adipisicing elit</li>
											<li><strong>Lorem ipsum dolor</strong>:consectetur adipisicing</li>
											<li><strong>Lorem</strong>:consectetur adipisicing elit</li>
										</ul>
									</div>
								</div>
							</div>
							
						</div>
						<br>
					</div>
					<img class="prodImg" alt="" src="/img/str_paperless_conto.png">
				</div>
			</div>
			
			<!-- BLOCCO SELEZIONE PRODOTTI -->
			<div class="productPush">
				<h2>Aggiungi i prodotti che preferisci:</h2>
				<br class="clear">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
				<br>
				<!-- ACCORDION DEPOSITO TITOLI -->
				<div class="deposito product">
					<div id="aolDeposito">
						<div class="aolDepositotop">
							<fieldset>
								<label><input id ="dt" class="checkProd" type="checkbox" name="" value="1" onclick="attivaProdotti();if(!this.checked) {$('#aolDeposito').attr('class','')} else {$('#aolDeposito').attr('class','opened')}" id=""><span class="large">Deposito titoli<br> e servizi di investimento</span></label>
							</fieldset>
							<div class="prodDescription">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing <strong>dolor</strong></p>
								<br class="clear">
								<div>
									<a data-anchorposition="lBlT" class="showConditionOverlayer" href="javascript:;">Scopri di pi&ugrave;</a>
									<div style="display:none" class="condizionidetailsOverlayer">
										<a class="closeOverlayer" href="javascript:;"><img alt="" src="/img/ico_lightBox_close.gif"></a>
										<img class="flLeft imgProd" alt="" src="/img/str_aolpush_deposito_small.png">
										<div class="flLeft">
											<h2>Deposito titoli</h2>
											<p><strong>Lorem ipsum dolor sit amet</strong>dolor sit:</p>
											<ul>
												<li><strong>lorem</strong> Lorem ipsum dolor</li>
												<li><strong>lorem</strong></li>
												<li><strong>Lorem ipsum dolor</strong> Lorem ipsum dolor</li>
												<li>Lorem ipsum dolor <strong>sit</strong> Lorem ipsum dolor</li>
											</ul><br class="clear">
											<a href="#"><img src="/wscmn/img/ico2or_pdftrasp.gif" class="flLeft"><span>Documento di sintesi</span></a>
										</div>
									</div>
								
								</div>
								
							</div>
							<img src="/img/str_aolpush_deposito.png" alt="" class="prodImg">
						</div>
						
						<div id="aolDepositoCont">
							<div class="aolDepositoBody tolltipclick">
								
								<span class="tit">Scegli le impostazioni del tuo deposito titoli</span>
								<br class="clear">
								<h4>Regime fiscale</h4>
								<div class="tooltipTit">
									<span class="closed">
										<span id="regimeTool" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')}"><span class="uniqTooltipPos"> <a href="javascript:;" class="noborder"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span>
										<span class="uniqTooltipInnerHTML">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</span></span>
									</span>
								</div>
								<div id="regime" class="fieldblock">
								
								<fieldset class="fullwidth">
									<label>
										<input type="radio" name="ct_regimenew" value="1" checked="checked" id="ct_regimenew">
										<span class="optiontext"><strong>Regime fiscale amministrato (consigliato)</strong></span>
										<span class="dettaglio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>	
									</label>
								</fieldset>
								
								<fieldset class="fullwidth">
									<label>
										<input type="radio" name="ct_regimenew" value="0" id="ct_regimenew">
										<span class="optiontext"><strong>Regime fiscale dichiarativo</strong></span>
										<span class="dettaglio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
									</label>
								</fieldset>
								
								<span class="errortext">Seleziona</span>
								</div>
								
								<h4>Tipo di commissione</h4>
								<div class="tooltipTit">
									<span class="closed">
										<span id="regimeComm" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')}"><span class="uniqTooltipPos"> <a href="javascript:;" class="noborder"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span>
										<span class="uniqTooltipInnerHTML">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</span></span>
									</span>
								</div>
								<br class="clear">
								
								<div>
								<span class="closed">
									<span id="tabellaCommissioni" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this,'570', 'aolleft')}"><span class="uniqTooltipPos"> <a href="javascript:;" class="noborder">Dettagli commissioni</a></span>
									<span class="uniqTooltipInnerHTML">
									<div class="popupcontent">	
										<p>
										
										<table cellspacing="0" cellpadding="0" class="detail">
										<tr>
											<th width="34%" class="vuoto"></th>
											<th width="33%">Profilo fisso*</th>
											<th width="33%">Profilo variabile*</th>
										</tr>
										<tr>
											<td class="heading" colspan="3">
												Mercato azionario
											</td>
										</tr>
										<tr>
											<td>Lorem</td>
											<td class="center">12&euro;</td>
											<td class="center">22&euro;</td>
										</tr>
										<tr>
											<td>Ipsum</td>
											<td class="center">12&euro;</td>
											<td class="center">0,19% min 12&euro; - max 19,5&euro;</td>
										</tr>
										<tr>
											<td>Dolor sit</td>
											<td class="center">0,19% min 12&euro; - max 19,5&euro;</td>
											<td class="center">22&euro;</td>
										</tr>
										<tr>
											<td>Amet sit</td>
											<td class="center">12&euro;</td>
											<td class="center">22&euro;</td>
										</tr>
										<tr>
											<td class="heading" colspan="3">
												Mercato obbligazionario
											</td>
										</tr>
										<tr>
											<td>Dolor sit</td>
											<td class="center">0,19% min 12&euro; - max 19,5&euro;</td>
											<td class="center">22&euro;</td>
										</tr>
										<tr>
											<td>Amet sit</td>
											<td class="center">12&euro;</td>
											<td class="center">22&euro;</td>
										</tr>
											<tr>
											<td class="heading" colspan="3">
												Mercato dei derivati
											</td>
										</tr>
										<tr>
											<td>Dolor sit</td>
											<td class="center">0,19% min 12&euro; - max 19,5&euro;</td>
											<td class="center">22&euro;</td>
										</tr>
										<tr>
											<td>Amet sit</td>
											<td class="center">12&euro;</td>
											<td class="center">22&euro;</td>
										</tr>
									</tbody></table>
			</p></div>
									</span></span>
								</span>
								</div>
								<br>
								<div id="commissioni" class="fieldblock">
									
								<fieldset class="lastrow" style="width:160px">
									<label><input type="radio" name="ng_commissioni" value="1" id="ng_commissioni"><span class="optiontext">profilo fisso</span></label>
								</fieldset>
								
								<fieldset class="lastrow" style="width: 150px;">
									<label><input type="radio" name="ng_commissioni" value="0" id="ng_commissioni"><span class="optiontext">profilo variabile</span></label>
								</fieldset>
								
								<span class="errortext">Seleziona</span>
								</div>
								
								
								<br class="clear">
								<h4>ABILITAZIONE LONG OVERNIGHT</h4>
								<div class="tooltipTit">
									<span class="closed">
										<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')}" class="uniqTooltipText over fixed" id="longOver"><span class="uniqTooltipPos"> <a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
										<span class="uniqTooltipInnerHTML">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</span></span>
									</span>
								</div>
								<fieldset class="fullwidth check lastrow" style="min-height: 20px;">
									<label>
										<input type="checkbox" name="longOv" value="1" id="longOv">
										<span class="optiontext optiontextb">Desidero ricevere il modulo per l'abilitazione al servizio Long Overnight</span>
									</label>
									<span class="errortext">Compila</span>
								</fieldset>
									<br class="clear">
								<h4>Espressione del divieto a comunicare i propri dati a terzi</h4>
								<div class="tooltipTit">
									<span class="closed">
										<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')}" class="uniqTooltipText over fixed" id="consComunicazioni"><span class="uniqTooltipPos"> <a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
										<span class="uniqTooltipInnerHTML">
											<p>SLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <strong>lorem</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	</p>
										</span></span>
									</span>
								</div>
							<fieldset class="fullwidth lastrow check tolltipclick">
								<label>
									<span class="closed">
									<span onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this);}" class="uniqTooltipText over fixed flLeft" id="informativeCheck">
										<span class="uniqTooltipPos">
											<a class="hovfincont" href="javascript:;"><span class="hovfin"></span><input type="checkbox"  disabled id="informativa2"></a>
											<span class="uniqTooltipInnerHTML">
												<p>Per proseguire occorre prendere visione della documentazione aprendo il relativo .pdf.</p>
											</span>
										</span>
											  
									</span>
									</span>
									
									<span class="optiontextmini">Dichiaro di aver preso visione dell'<a href="#" onclick="fieldEnable('informativa2', true);fieldEnable('consensoDati', true);fieldEnable('consensoDati2', true);" >Informativa</a> relativa all'esercizio di alcuni diritti degli azionisti di societ&agrave; quotate.</span>
								</label>
								<span class="errortext">Seleziona</span>
							</fieldset>
								<!-- FINE CONTENUTO DEI CAMPI -->
							
							<br class="clear"><br>
							<p class="noPaddBott">Preso atto dell'informativa di cui sopra:</p>
							<div class="fieldblock" id="consensoDati">
								<fieldset style="width:160px" class="lastrow">
									<label><input type="radio" id="" value="1" name="consenso1" disabled><span class="optiontext">do  il consenso</span></label>
								</fieldset>
								<fieldset style="width:160px" class="lastrow">
									<label><input type="radio" id="" value="1" name="consenso1" disabled><span class="optiontext">nego il consenso</span></label>
								</fieldset>
								<span class="errortext">Seleziona</span>
							</div>
							<br class="clear">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <strong>lorem</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<br>
							<p class="noPaddBott">Preso atto dell'informativa di cui sopra:</p>
							<div class="fieldblock" id="consensoDati2">
								<fieldset style="width:160px" class="lastrow">
									<label><input type="radio" id="" value="1" name="consenso2" disabled><span class="optiontext">do il consenso</span></label>
								</fieldset>
								<fieldset style="width:160px" class="lastrow">
									<label><input type="radio" id="" value="1" name="consenso2" disabled><span class="optiontext">nego il consenso</span></label>
								</fieldset>
								<span class="errortext">Seleziona</span>
							</div>
							<br class="clear">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <strong>lorem</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<h4>Estratto conto e contabili online, gratuite</h4>
							<br class="clear">
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
							</div>
						</div>
						
						<div class="aolDepositoBottom"> </div>
					</div>
				</div>
				<!-- FINE ACCORDION DEPOSITO TITOLI -->
				
				<div class="product bancomat">
					<div class="aolDepositotop">
						<fieldset>
							<label><input type="checkbox" name="cb" value="1" onclick="attivaProdotti();" id="cb"><span class="large">Bancomat</span></label>
						</fieldset>
						<div class="prodDescription">
							<p><strong>Lorem</strong>,ipsum <strong>dolor</strong> sit <strong>amet</strong> consectetur <strong>consectetur</strong></p>
							<br class="clear">
							<div>
								<a href="javascript:;" class="showConditionOverlayer" data-anchorposition="lBlT">Scopri di pi&ugrave;</a>
								<div class="condizionidetailsOverlayer" style="display:none">
									<a href="javascript:;" class="closeOverlayer"><img src="/img/ico_lightBox_close.gif" alt=""></a>
									<img src="/img/str_aolpush_bancomat_small.png" alt="" class="flLeft imgProd">
									<div class="flLeft">
										<h2>Bancomat</h2>
										<ul>
												<li><strong>Lorem ipsum dolor</strong>:consectetur adipisicing elit</li>
												<li><strong>Lorem ipsum dolor</strong>:consectetur adipisicing</li>
												<li><strong>Lorem</strong>:consectetur adipisicing elit</li>
										</ul>
										<a href="#"><img src="/wscmn/img/ico2or_pdftrasp.gif" class="flLeft"><span>Foglio informativo</span></a>
									</div>
								</div>
							
							</div>
							
						</div>
						<img class="prodImg" alt="" src="/img/str_aolpush_bancomat.png">
					</div>
					<div class="aolDepositoBottom"></div>
				</div>
				
				
				<div class="product carta">
					<div class="aolDepositotop">
						<fieldset>
							<label><input type="checkbox" name="cj" value="1" onclick="attivaProdotti();" id="cj"><span class="large">Carta Je@ns</span></label>
						</fieldset>
						<div class="prodDescription">
							<p><strong>Lorem</strong>,ipsum <strong>dolor</strong> sit <strong>amet</strong> consectetur <strong>consectetur</strong></p>
								<br class="clear">
							<div>
								<a href="javascript:;" class="showConditionOverlayer" data-anchorposition="lBlT">Scopri di pi&ugrave;</a>
								<div class="condizionidetailsOverlayer" style="display:none;">
									<a href="javascript:;" class="closeOverlayer"><img src="/img/ico_lightBox_close.gif" alt=""></a>
									<img src="/img/str_aolpush_bg_carta_small.png" alt="" class="flLeft imgProd">
									<div class="flLeft">
										<h2>Cartaje@ns</h2>
										<ul>
												<li><strong>Lorem ipsum dolor</strong>:consectetur adipisicing elit</li>
												<li><strong>Lorem ipsum dolor</strong>:consectetur adipisicing</li>
												<li><strong>Lorem</strong>:consectetur adipisicing elit</li>
											</ul>
										<a href="#"><img src="/wscmn/img/ico2or_pdftrasp.gif" class="flLeft"><span>Foglio informativo</span></a>
									</div>
								</div>
							
							</div>
						</div>
						<img class="prodImg" alt="" src="/img/str_aolpush_carta.png">
					</div>
					<div class="aolDepositoBottom"></div>
				</div>
			</div>	
			
			<div class="cartimpronta">
				<div class="prodGroup">
					<div class="prodDescription">
						<h2>Cartimpronta one</h2>
						<p>Lorem ipsum dolor sit amet, consectetur <strong>adipisicing elit,</strong> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p><br><ul>
											<li><strong>Lorem ipsum dolor</strong>:consectetur adipisicing elit</li>
											<li><strong>Lorem ipsum dolor</strong>:consectetur adipisicing</li>
											<li><strong>Lorem</strong>:consectetur adipisicing elit</li>
										</ul>
					
					</div>
					<img src="/img/str_aolpush_cartimpronta.png" alt="" class="prodImg">
				</div>
			</div>
			
			
			<!-- FINE BLOCCO SELEZIONE PRODOTTI -->
			<div class="aolblock" id="ancoraDoc">
				<h3>Informativa precontrattuale</h3>
				<div class="aolblockwrapper">
					<p>
						Ti ricordiamo che &egrave; tuo diritto ricevere copia di tutta la documentazione contrattuale, idonea per la stipula e per una ponderata valutazione del contenuto:
					</p>
					<ul class="bulletSfumato">
						<li>questo diritto non può essere sottoposto a termini e condizioni</li>
						<li>l'esercizio di tale diritto non impegna le parti a stipulare il contratto</li>
					</ul>
					<fieldset class="fullwidth check" style="min-height: 20px">
						<label>
							<input type="checkbox" name="info_precontrattuale" value="1" id="info_precontrattuale">
							<span class="optiontextmini">Dichiaro di avvalermi di questo diritto e riconosco di aver stampato o salvato copia completa della documentazione precontrattuale*</span>
						</label>
						<span class="errortext">Seleziona</span>
					</fieldset>
					<fieldset class="fullwidth check lastrow">
						<label>
							<input type="checkbox" name="mod_precontratti" value="1" id="mod_precontratti">
							<span class="optiontextmini">Dichiaro di aver preso visione e di aver acquisito su supporto durevole copia dell'informativa precontrattuale disponibile qui a fianco*</span>
						</label>
						<span class="errortext">Seleziona</span>
					</fieldset>
				</div>
				<img class="promobottom" src="/img/str_aol_dacompilarebot.gif">
			</div>
			
			<div class="filettobutton linked">
				<a href="/webankpub/wb/2l/do/aol/wbwsPUaol1.do?BV_UseBVCookie=Yes&fromPageName=wsPUaol2.jsp&CNT_TARGET=Privati&lastStep=yes&OBS_KEY=null" title="indietro" class="backLinked">indietro</a>
				
				<a href="/webankpub/aol/registrazioneLogin.do?BV_UseBVCookie=Yes&numPag=2&&funz=bozze&fromAol=yes&CNT_TARGET=Privati&OBS_KEY=null" title="Vuoi continuare più tardi?" class="bozzaLinked"><span>Vuoi continuare più tardi?</span></a>
				
				<a onclick="esempioErrori();" title="avanti" class="greenbutton" href="javascript:;"><span>avanti</span></a>
			</div>
		</form>
	</div>
	<div id="aolright">
		<div class="leftit"><img alt="Il tuo conto" src="/img/tit_tuo_conto.gif"></div>
		<div class="gen">
			<ul class="elencoprodotti">
				<li>
					<span class="productname">Conto corrente</span>
					<span>Zero canone e zero commissioni.</span>
				</li>
				<li>
					<span class="productname">Deposito di risparmio</span>
					<span>Ottieni un rendimento più alto sui tuoi risparmi con le linee vincolate a 3, 6 o 12 mesi</span>
				</li>
				<li id="promoDT">
					<span class="productname">Pacchetto paperless</span>
					<span>Firma digitale</span>
					<span>Posta elettronica certificata</span>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_haiaggiunto.gif"  alt="Hai aggiunto" />
		</div>
		<div class="gen">
			<ul class="elencoprodotti" id="prodottiAttivi">
				<li>
					<span>Nessun prodotto</span>
				</li>
			</ul>
			<div id="promoDep" style="display:none">
				<span class="boxedgreen">
					<span><strong>Bolli gratis fino al 2014</strong></span>
				</span>
			</div>
		</div>
		
		<div class="filettolarge"></div>
		<div id="aoldoclistAncorato">
				<!-- INIZIO CODICE--> 
				<?php virtual("/librerie/include/commons/boxeditoriali/pub_aol_001.php"); ?>
		</div>
	</div>
</div>













		
	





	

