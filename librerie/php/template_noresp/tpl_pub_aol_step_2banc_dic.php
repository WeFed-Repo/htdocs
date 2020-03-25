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
			
			<div class="clearBlock">
				<img src="/img/ret/ico2inf_spunta.gif" class="checkProd">
				<div class="prodGroup">
					<div class="prodDescription">
						<h3>Deposito titoli </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing <strong>elit:</strong></p>
						<p>Deposito titoli<br>
						<strong>DT 599/1013050</strong></p>
					</div>
					<img class="prodImg" alt="" src="/img/str_aolpush_deposito_banc.jpg">
					<div id="aolDeposito" class="opened">
					<div id="aolDepositoCont">
							<div class="aolDepositoBody tolltipclick">
								
								<span class="tit">Completa le impostazioni del tuo deposito titoli</span>
								<h4>Caratteristiche</h4>
								<fieldset class="output">
									<span class="label">Regime fiscale</span>
									<span class="output">Amministrato</span>
								</fieldset>
								<fieldset class="output">
									<span class="label">Tipo di commissioni</span>
									<span class="output">Ipsum dolor sit</span>
								</fieldset>
								<h4>Servizi e piattaforme attive</h4>
								<fieldset class="output">
									<span class="output">Prestito titoli</span>
									<span class="output">Long Overnight</span>
									<span class="output">Derivati Idem</span>
								</fieldset>
								<fieldset class="output">
									<span class="output">Piattaforma T3 Open</span>
									<span class="output">Visaul Trader</span>
								</fieldset>
								<br class="clear"><br>
								<p><strong>Nota:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								<h4>Informative e strumenti di analisi attive</h4>
								<fieldset class="output">
									<span class="output">Quotazioni XETRA</span>
									<span class="output">Quotazioni FUTURES EUREX</span>
								</fieldset>
								<h4>Comunicazione a terzi dei dati degli azionisti di societ&agrave; quotate</h4>
								<div class="tooltipTit">
									<span class="closed">
										<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')}" class="uniqTooltipText over fixed" id="consComunicazioni"><span class="uniqTooltipPos"> <a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
										<span class="uniqTooltipInnerHTML">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <strong>lorem</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
							
							<br class="clear">
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
					</div>
				</div>
				
				
			
			</div>
			
			
			<!-- BLOCCO SELEZIONE PRODOTTI -->
			<div class="productPush">
				<h2>Aggiungi i prodotti che preferisci:</h2>
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
				
				<a href="javascript:valida(false);" title="avanti" class="greenbutton"><span>avanti</span></a>
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
				<li>
					<span class="productname">Deposito titoli</span>
					<span>lorem ipsum dolor sit</span>
					<span class="boxedgreen">
						<span><strong>Bolli gratis fino al 2014</strong></span>
					</span>
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
<div class="overlayer" id ="contattaci">
	<div class="abbandono">
		<div class="overlayertitle">
			<a href="javascript:;" onclick="closePopOverLayer('contattaci')"; class="chiudi" id="close"></a>
			<span>Contattaci!</span>
		</div>
		<div class="overlayerbody">
		<span class="sep"></span>
			<!-- primo blocco-->
			<div class="contact">
				<img src="/img/str_bg_overlayer_abb_top.gif" alt=""/>

				<div class="contactcont">
					
					<div class="contactText">
						<img src="/img/tit_box_num_verde.gif" alt="numero verde" />
						<div class="num">
							<img src="/img/img_or_nverde.gif" alt="numero verde"/>
							<span>Luned&igrave; - venerd&igrave;: 9.00-20.00<span class="pipe">|</span>sabato: 9.00 - 17.00 </span>
						</div>

						
					</div>
				</div>
				<img src="/img/str_bg_overlayer_abb_bot.gif" alt=""/>
			</div>
			<!--fine  primo blocco-->
			<!-- secondo blocco-->
			<div class="contact">
				<img src="/img/str_bg_overlayer_abb_top.gif" alt=""/>
				<div class="contactcont">

					
					<div class="contactText">
						<img src="/img/tit_richiama.gif" alt="webank ti richiama" />
						<div class="num">
							<img src="/img/img_or_operatore.gif" alt="webank ti richiama"/><span id="labelOperatore" class="vcenter">Segnalaci il tuo numero e prenota la tua chiamata!</span>
						</div>
					</div>
					<div id="formInsert">
						
						<form action="/webankpub/wb/AolAdesioneCMB.do?cf=0.4239500389462806" method="post" id="formCallMeBackAOL" name="formCallMeBackAOL">
						<input type="hidden" name="JSON" style="display:none;" value="true" />
						<input type="hidden" name="dataForm" id="dataForm" value="" />
							<div class="fieldblocklayer">
								<label>Numero di telefono</label>
								<input type="text" id="telefono1" name="telefono1">
								<br class="clear">
								<span class="error">Verifica</span>
							</div>
							<div class="fieldblocklayer middle" id="calendario1">
								<label>Giorno</label>
								<script type="text/javascript">DatePickerControl.createDp ('datepicker1','20131112|20131113|20131114|20131115|20131116|20131118|20131119|20131120|20131121|20131122|20131123|20131125|20131126|20131127|20131128|20131129|20131130|20131202|20131203|20131204|20131205|20131206|20131207|20131209|20131210|20131211|20131212|20131213', function(){getTimeSlotsList(this.value, 1);});</script>
								<br class="clear">
								<span class="error">Verifica</span>
							</div>
							<div class="fieldblocklayer dx">
								<label>Fascia oraria</label>
								<select id="orario1" name="orario1" style="visibility: visible;"></select>
								<br class="clear">
								<span class="error">Verifica</span>
							</div>
							<br class="clear" />
							
							<div class="fieldblocklayer">
								<label>Codice</label><a class="rightlink" href="javascript:void(0);" onclick="javascript:generaCaptcha('captcha','https://webanksvi8web.webank.local/webankpub');">Crea nuovo codice</a>
								<img class="imgCaptcha" id="captcha" src="https://webanksvi8web.webank.local/webankpub/wb/generaIMG.do" />
							</div>
							<div class="fieldblocklayer middle" id="captchaVerifica1">
								<label>Inserisci codice</label>
								<input type="text" onkeypress="verificaErrore(1);" class="lenghtmiddle" name="j_captcha_response" id="contactUserCaptcha" value="" />
								<br class="clear">
								<span class="error">Verifica</span>
								<br/><br/>
								<div class="pdf"><img src="/img/ico1gr_pdf.gif" class="nobor"><label><a href="/doc/nsf/InformativaTrattamentoDatiPersonali.pdf" target="_blank">Informativa privacy</a></label></div>
							</div>
							<div class="fieldblocklayer dx" id="bottoneContattami1">
							<a href="javascript:;" class="greenbutton" onclick="validateAndSendCMB(1);" ><span>Contattami</span></a>
							</div>
						</form>
					</div>
					
					<div class="txtconf" style="display:none" id="msgtxt1">
							Ti ricontatteremo nel giorno e nell'ora da te indicati. 
					</div>
					
					
				</div>
				<img src="/img/str_bg_overlayer_abb_bot.gif" alt=""/>

				<a class="redirect"  href="javascript:;" id="continua"><span>Continua</span></a>
			</div>
		</div>
	</div>
	
</div>
<div id="callmeback" class="overlayer" style="display:none">
	<div class="overlayertitle">

		<a id="close" class="chiudi" ;="" onclick="closePopOverLayer('callmeback')" href="#"></a>
		<span id="helptxt">Hai bisogno di aiuto per completare il form? <br />lasciaci il tuo numero di telefono e ti richiameremo noi quando vuoi tu!</span>
	</div>
	<div class="overlayerbody">
		<span class="sep"></span>
		<form action="/webankpub/wb/AolAdesioneCMB.do?cf=0.4239500389462806" method="post" id="formCallMeBackAOL2" name="formCallMeBackAOL2">
			<input type="hidden" name="CallMeBack" value="16" />
			<input type="hidden" name="JSON" style="display:none;" value="true" />
			<input type="hidden" name="dataForm2" id="dataForm2" value="" />
			<div class="contact">
				<div class="contactcont" id="formcont">
					<div class="fieldblocklayer">
						<label>Numero di telefono</label>
						<input type="text" id="telefono2" name="telefono2">
						<br class="clear">
						<span class="error">Verifica</span>
					</div>
					<div id="calendario2" class="fieldblocklayer middle">
						<label>Giorno</label>
						<script type="text/javascript">DatePickerControl.createDp ('datepicker2','20131112|20131113|20131114|20131115|20131116|20131118|20131119|20131120|20131121|20131122|20131123|20131125|20131126|20131127|20131128|20131129|20131130|20131202|20131203|20131204|20131205|20131206|20131207|20131209|20131210|20131211|20131212|20131213', function(){getTimeSlotsList(this.value, 2);});</script>
						<br class="clear">
						<span class="error">Verifica</span>
					</div>
					<div class="fieldblocklayer dx">
						<label>Fascia oraria</label>
						<select name="orario2" id="orario2" style="visibility: visible;"></select>
						<br class="clear">
						<span class="error">Verifica</span>
					</div>
					<br class="clear">
					<br />
					<br />
					<div class="fieldblocklayer">
						<label>Codice</label><a class="rightlink" href="javascript:void(0);" onclick="javascript:generaCaptcha('captcha','https://webanksvi8web.webank.local/webankpub');">Crea nuovo codice</a>
						<img class="imgCaptcha" id="captcha" src="https://webanksvi8web.webank.local/webankpub/wb/generaIMG.do" />
					</div>
					<div class="fieldblocklayer middle bottom" id="captchaVerifica2">
						<label>Inserisci codice</label>
						<input type="text" onkeypress="verificaErrore(2);" class="lenghtmiddle" name="j_captcha_response" id="contactUserCaptcha" value="" />
						<br class="clear">
						<span class="error">Verifica</span>
						<br><br>
					</div>
					<div class="fieldblocklayer dx" id="bottoneContattami2">
						<a href="javascript:;" class="greenbutton" onclick="validateAndSendCMB(2);" ><span>Contattami</span></a>
					</div>
				
				</div>
				<div class="contactbox small" style="display:none" id="msgtxt2">
					<img alt="" src="/img/str_bg_overlayer_abb_top_sm.gif">
					<div class="contactcont">
							
						<div class="contactText">

								Abbiamo ricevuto la tua richiesta di contatto, <br />ti richiameremo nel giorno e nell'ora da te indicati.
								
						</div>
					</div>
					<img alt="" src="/img/str_bg_overlayer_abb_bot_sm.gif">
				</div>
			</div>
		</form>
	</div>
</div>











		
	





	

