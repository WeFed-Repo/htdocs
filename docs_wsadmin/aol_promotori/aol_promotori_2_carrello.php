<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">	
<head>
	<title>Webank - Apri conto Webank</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Language" content="it" />
	<meta name="author" content="We@service S.p.a" />
	<meta name="description" content="Webank - La banca online dal 1999" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="shortcut icon" href="/img/favicon.ico" />
	<link rel="stylesheet" href="/css/aol_promotori_new.css"></link>
	<script src="/wscmn/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="/js/aol_promotori_new.js"></script>
</head>
<body>
	<script type="text/javascript">
	function showDett(obj) 
	 { 
		var radioId =$(obj).closest('fieldset').find('.blockradio');
		if(!radioId.hasClass('opened')) radioId.addClass('opened');
		else{radioId.removeClass('opened');}
		if($('.btnCont')) {$('.btnCont:first').hide()};
		
	 }
	</script>
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
	<div id="pagecontainer">
		<div id="header">
			<h1><a href="/webankpub/wb/home.do?tabId=nav_pub_wb_home_nw&amp;OBS_KEY=nav_pub_wb_home_nw"><span>Webank</span></a></h1>
		</div>
		<div id="menu">
			<h2><img alt="Richiesta apertura conto" src="/img/tt_aperturaconto_small.gif"></h2>
		</div>
		<div id="content">
			<div id="aolcontainer">
				<div id="aolleft">
					<form>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						<br>
						<h2>Conto Webank comprende:</h2>
						<!-- conto-->
						<div class="clearBlock">
							<img src="/img/ico2inf_spunta.gif" class="checkProd">
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
							<img src="/img/ico2inf_spunta.gif" class="checkProd">
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
						<br class="clear" />
						<div class="aolblock">
							<h3>PROCEDURA DI IDENTIFICAZIONE</h3>
							<p>
							Tutti i <b>nuovi clienti</b> devono quindi scegliere una modalità di identificazione tra quelle previste.<br/>
							</p>
							
							<strong>MARIO GIORDANO</strong><p>ha dichiarato di essere già cliente Webank, quindi non dovrà  effettuare la procedura di identificazione.

Gli altri intestatari devono scegliere una modalità di identificazione tra quelle indicate.</p>
		
							<fieldset id="identificazioneCont" class="fullwidthradio lastrow identificazioneCont">
						<div class="blockradio">
							<label>
								<input type="radio" value="bonifico" name="identificazione" title="Lorem ipsum dolor sit amet" class="identificazione" onclick="showDett(this);" aolblockindex="0">
								<span class="optiontextmini"><strong>tramite bonifico</strong>
									<p class="minitext nobottpad">
									Lorem ipsum dolor sit amet, consectetur  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
								</span>
								
							</label>
							<span class="dett">
									<strong>MARIO GIORDANO</strong>
									<p class="minitext">
									Inserisci l'iBAN del conto corrente dal quale farai il bonifico.
									</p>
									<fieldset><div class="fieldCounter"><span>0</span>/27 caratteri</div>
										<span class="label">IBAN*</span>
										<input type="text" maxlength="27" id="iban">
										<script type="text/javascript" defer="defer">setCounterOnField("iban",27);</script>
									<span class="errortext">lorem</span>
									</fieldset>
							</span>
						</div>
						<div class="blockradio">
							<label class="tolltipclick flLeft">
								<input type="radio" value="agenzia" name="identificazione" title="Lorem ipsum dolor sit amet" class="identificazione" onclick="showDett(this);" aolblockindex="0">
								<span class="optiontextmini tolltipclick"><span><strong class="flLeft">in un'agenzia del Gruppo Bipiemme</strong><span class="labelConsigliato"></span></span>
								<span class="minitext nobottpad">
								Lorem ipsum dolor sit amet, consectetur  sed do 
								<span class="closed">
									<span id="documenti2" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
									<span class="uniqTooltipPos"> <a href="javascript:;"> medium </a></span>
										<span class="uniqTooltipInnerHTML">
										<p>dimensione in larghezza 300px</p>
										</span>
									</span>
								</span>
								
								eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								
								</span>
								</span>
							</label>
							
							<a class="openpop" onclick="$('listagenzia').show();" href="javascript:;">vuoi sapere qual'è l'agenzia più vicina a te?</a>
							<div class="btnCont" style="display: none;" id="listagenzia">
									<fieldset class="lastrow">
										<span class="label">Comune</span>
										<input type="text" value="" name="">
										<span class="errortext">Lorem</span>
									</fieldset>
									<fieldset class="btn lastrow">
										<a onclick="javascript:window.open('connect.php?page=str_pub_pop_agenzia.php','main1','width=450,height=410,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes')" title="cerca" href="javascript:;" class="greenbutton" aolblockindex="0"><span>cerca</span></a>
									</fieldset>
							</div>
						</div>
				
					<span class="errortext">lorem</span>
					</fieldset>
	

						</div>
					</form>
				</div>
				<div class="filettobutton linked">
							<a class="backLinked" href="/aol_promotori/aol_promotori.php" title="indietro">indietro</a>
							<a href="javascript:;" title="invia la richiesta" class="greenbutton" onclick="setError('col','lorem');"><span>invia la richiesta</span></a>
						</div>
			</div>
		</div>
	</div>
</body>