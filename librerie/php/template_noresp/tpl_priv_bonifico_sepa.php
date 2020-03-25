<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
<script type="text/javascript">	
	$(function () {
				$("#datepicker").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
					
				});
				$("#datepicker").mask("99/99/9999");
			});
	$(document).ready(function() {
		/*openPopOverLayer('contoTerziOverlay','floated', 1) */
	})
</script>
<style type="text/css">
		@import url(/wscmn/css/priv_calendar.css);
</style>
<h1>BONIFICO LOREM IPSUM</h1>
<table class="text01">
	<tbody>
		<tr>
			<td>
				<ul>
					
					<li>In questa pagina puoi disporre bonifici verso l’Italia e l’estero.
					</li>
					
					<li><strong>Costo dell’operazione</strong> per bonifici in<strong>
							euro</strong> in <strong>Italia</strong> e in <a href="javascript:openPopOverLayer('layerSepa', 'floating', 1);">area Sepa</a> :  
							<div id="costoBon" style="display: inline;">gratis</div><br>
					</li>
					
					<li>Per i bonifici in <strong>valuta diversa
						dall’euro</strong> o verso <strong>Paesi</strong> in area <strong>extra
						Sepa</strong> <span class="txthelp" data-tooltip="<strong>BONIFICO IN AREA EXTRA SEPA<br>O IN VALUTA DIVERSA DELL'EURO</strong><br><br>Le commissioni sono suddivise tra ordinante e beneficiario.<br>L'importo a carico del beneficiario non è noto al momento dell'inserimento del bonifico.<br>Nel caso si rendesse necessario l'intervento di banche intermediarie, queste potrebbero addebitare ulteriori <strong>commissioni</strong>, da loro stabilite, a <strong>carico</strong> dell'<strong>ordinante</strong>.<br><br>Per maggiori informazioni sulle commissioni a carico dell'ordinante consulta i Fogli Informativi."><strong>verifica
						le commissioni</strong></span>
					</li>
							
					<li>
						







<strong>Se vuoi effettuare un bonifico a favore di un beneficiario non presente in rubrica, </strong>
<span class="txthelp" data-tooltip="Per sicurezza, ti invieremo un <b>Sms</b> con un <b>codice di controllo</b> al numero : dovrai inserirlo online per concludere l'operazione."><strong>tieni a portata di mano il tuo cellulare</strong></span>
					</li>
								
				</ul>
			</td>
		</tr>
		
	</tbody>
</table>
<div class="boxesito attenzione">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span9"><p>
					<strong>Aggiorna l'Iban dei conti correnti Webank salvati in rubrica.</strong><br> <br>
					Vai alla pagina «rubrica»: puoi aggiornare <b>automaticamente</b>  gli <b>Iban</b> dei contatti con conto corrente Webank con quello
					<b>nuovo</b> da utilizzare a seguito della fusione per incorporazione di Webank in Banca Popolare di Milano.
					</p>
				</div>
				<div class="span3">
					<div class="aButtoncons formCenteredBtn txtAlRight">
						<a href="/webankpri/wbOnetoone/2l/do/banking/WsGestioneRubrica.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_rubricha&amp;OBSKEY3=nav_priv_wbx_rubricha&amp;cf=0.9221928473831437" class="aButton"><span>vai alla rubrica</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- BOX TYPE -->
<div class="tip" id="tipDailypay">
	<a class="close" data-tip-action="close"></a>
	<div class="tipCont">
		<h3>Lo sapevi che...</h3>
		<p>puoi effettuare un pagamento o trasferire denaro "in tempo reale" utilizzando il servizio <strong>DailyPay</strong>?</p>
	</div>
	<div class="tipConsole">
		<a class="btn" title="Non mostrare piu'" data-tip-action="save close">non mostrare pi&ugrave;</a>
		<a class="btn fright green" href="###LINKSCOPRIDIPIU###" title="Scopri di piu'">scopri di pi&ugrave;</a>
		<a class="btn fright" data-tip-action="close">ricordamelo pi&ugrave; tardi</a>
	</div>
</div>
<!-- FINE BOX REMINDER -->

<div id="bonificoCont">
<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"/></div>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<form>
			<div>
				<span class="nomefield">lorem ipsum dolor</span>
				<div class="row-fluid">
					<div class="span6">
						<div class="row-fluid">
							<div class="span2">
								<label><input type="radio" value="" name="name1" checked onclick="$('#selectCount').attr('disabled','true');$('#noEstero').show();$('#Estero').hide()">Italia</label>
							</div>
							<div class="span3">
								<label class="flLeft"><input type="radio" value="" name="name1" onclick="$('#selectCount').removeAttr('disabled');$('#noEstero').hide();$('#Estero').show()"><span class="flLeft">Altri paesi</span><span class="iconahelp flLeft"></span></label>
							</div>
							<div class="span7">
								<select disabled id="selectCount"><option>Seleziona paese</option> 
									<optgroup label="Paesi SEPA">
										<option>Lorem ipsum</option>
									</optgroup>
									<optgroup label="Altri paesi">
										<option>Lorem ipsum</option>
									</optgroup>
								</select>
							</div>
						</div>
					</div>
					<div class="span6">
						<a href="#" data-tooltip="loren ipsum dolor sit lorem ipum dolor">commissioni per questo tipo di bonifico</a>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span10">
							<label class="nomefield">lorem ipsum dolor*</label>
							<select class="withIco">
								<option>lorem ipsum</option>
								<option>lorem ipsum</option>
							</select>
							<a href="#" class="flRight"><img src="/img/ico1gr_preferito.gif"></a>
						</div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">lorem ipsum dolor</label>
					<span class="output">lorem ipsum dolor sit </span>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span4">
							<label class="nomefield">lorem*</label>
							<input type="text">
						</div>
						<div class="span8" id="noEstero">
							<label class="nomefield">&nbsp;</label>
							<span class="text">EUR</span>
						</div>
						<div class="span8" id="Estero" style="display:none">
							<label class="nomefield">Divisa*</label>
							<select><option>EUR -EURO</option></select>
						</div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">lorem ipsum dolor</label>
					<div class="row-fluid">
						<div class="span3">
							<span class="output">1.000.000&euro;</span>
						</div>
						<div class="span9"><a href="#">modifica</a></div>
					</div>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span4">
							<label class="nomefield">lorem*</label>
							<input type="text">
						</div>
						<div class="span8">
							<label class="nomefield">lorem ipsum</label>
							<select><option>lorem ipsum</option><option>lorem ipsum</option><option>NOK - CORONA NORVEGESE</option></select>
						</div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">lorem ipsum dolor</label>
					<div class="row-fluid">
						<div class="span3">
							<span class="output">1.000.000&euro;</span>
						</div>
						<div class="span9"><a href="#">modifica</a></div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield ico">Lorem ipsum*</label>
					<span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim"><img src="/img/ret/ico2or_help2.gif" class="help"></span>
					<div class="row-fluid">
						<div class="span4">
							<input type="text" class="withIco" id="datepicker" placeholder="gg/mm/aaaa" value="22/11/2013">
					    </div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">Lorem ipsum dolor</label>
					<span class="output"><a href="#">1.000.000&euro;</a></span>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<label class="nomefield ico">Lorem ipsum*</label>
					<input type="text">
				</div>
			</div>
		</form>
	</div>
</div>

<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"/></div>

<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<form>
			<div class="row-fluid">
				
				 <div class="span6">
						<label class="nomefield">Lorem ipsum</label>
						<input type="text">
				</div>
				<div class="span6">
						<label class="nomefield">&nbsp;</label>	
						<div>
							<a id="" href="#">aggiungi da rubrica</a>
						</div>			
															
				</div>
					
			</div>
			<div class="row-fluid">	
				<div class="span6">
					<div class="row-fluid noMargbottom">
							<div class="span8">
								<label class="nomefield" id="">Iban Beneficiario*</label>
								<input type="text">
							</div>
							<div class="span4">
								<label class="nomefield" id="">&nbsp;</label>
								<a class="flRight linkInForm" href="#">Non hai l'iban</a>
							</div>
					</div>
				</div>
				<div class="span6">
					<div class="row-fluid noMargbottom">
						<div class="span5">
							<label class="nomefield" id="">Numero c/c</label>
							<input type="text">
						</div>
						<div class="span1"><label class="nomefield">CIN</label><input type="text"></div>
						<div class="span3"><label class="nomefield ico">ABI*</label><a href="#"><img src="/img/ret/ico2or_dettagliosmall.gif"></a><input type="text"></div>
						<div class="span3"><label class="nomefield ico">CAB*</label><a href="#"><img src="/img/ret/ico2or_dettagliosmall.gif"></a><input type="text"></div>
					</div>
				</div>
			</div>
			
			<div class="row-fluid">	
				<div class="span12">
					<label class="nomefield">Lorem ipsum*</label>
					<span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </span>
				</div>
			</div>
			<div class="row-fluid">	
				<div class="span6">
					<label><input type="radio" value="" name="">Lorem ipsum dolor sit amet</label>
					<input type="text" name="radio1">
				</div>
				<div class="span6">
					<label><input type="radio" value="" name="">Lorem ipsum dolor sit amet</label>
					<input type="text" name="radio1" disabled="" class="disabled">
				</div>
			</div>
			
			<div class="row-fluid">	
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<select><option>Lorem ipsum</option></select>
				</div>
			</div>
			<div class="row-fluid">	
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<input type="text">
				</div>
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<input type="text">
				</div>
			</div>
			<div class="row-fluid">	
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<input type="text" placeholder="Lorem ipsum dolor sit">
				</div>
				<div class="span6">
					<label class="nomefield">&nbsp;</label>
					<label><input type="checkbox" name="" value="">Lorem ipsum dolor sit amet, consectetur</label>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="fooform">		
		<div class="fooformtop">Step <strong>1</strong> di 2</div>
		<div class="fooformright"><div><a id="proseguiBonifico" class="btnformright" href="javascript:;" title="prosegui"><img src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img src="/img/ret/btn_right_ar.gif"></a></div></div>	
</div>
<br class="clear">
<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
</div>
<div class="layeralert3" id="layeralert1" style="display: none;">
	<div class="body roundedCornersSmall paddMedium">
		<div class="boxesito attenzione">
			<div class="middle"><span class="imgCont"></span>
				<div class="text">
					<div class="row-fluid">
						<div class="span12">
							<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
								<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<p><strong>Questo tipo di bonifico necessita di ulteriori dati per proseguire:</strong></p>
		<div id="ErroriValidazione">
			<div class="boxtxt"><p class="box_mess"><img border="0" src="/wscmn/img/ico2inf_errorform.gif" alt="" class="dx">
			<img border="0" src="/img/ret/box_attenzione.jpg" alt=""><br><br>
			Lorem ipsum dolor sit amet,
			<ul class="alert"><li>Lorem ipsum dolor sit amet</li></ul>
			</p>
			</div>
		</div>
		<div class="borderFormRounded  margBottomMedium">
			<div class="formGeneric">
				<form>
					<div class="row-fluid">
						<div class="span6">
							<label class="nomefield ico">Lorem ipsum*</label>
							<span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim" class="iconahelp"><img class="help" src="/img/ret/ico2or_help2.gif"></span>
							<select><option>Lorem ipsum</option><option>Lorem ipsum</option><option>Lorem ipsum</option></select>
						</div>
						<div class="span6">
							<label class="nomefield ico">Lorem ipsum*</label>
							<span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim" class="iconahelp"><img class="help" src="/img/ret/ico2or_help2.gif"></span>
							<div class="row-fluid">
								<div class="span6">
									<input type ="text">
								</div>
								<div class="span6">
									<a href="#" class="underline"><img src="/img/ret/ico2or_dettagliosmall.gif" class="flLeft margRightSmall"><span>lorem ipsum</span></a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<br class="clear" />
		<div class="fooform">	
			<div class="fooformtop"></div>
			<div class="fooformleft">
			<div><a title="lorem ipsum" class="btnformleft" href="#1"><img alt="" src="/img/ret/btn_left_bi.gif"><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_bi.gif"></a></div>	
			</div>
			<div class="fooformright"><div><a title="prosegui" class="btnformright" href="javascript:;" id="proseguiBonifico2"><img src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img src="/img/ret/btn_right_ar.gif"></a></div></div>	
		</div><br class="clear" />
		
	
	</div>
	
</div>
<script type="text/javascript">	
$('#proseguiBonifico').bind('click',function()
{
	ttHide();
	obscurateEl(5, 'bonificoCont', 'oscuratore', 'darkLayer');
	openAlertOnEl('bonificoCont','layeralert1')
})
$('#proseguiBonifico2').bind('click',function()
{
	unobscurateEl('oscuratore');
	closeAlert('layeralert1');
	
})
</script>
<div class="layeralert3" id="contoTerziOverlay" style="display: none;">
	<div class="roundedCornersSmall paddMedium">
		<div class="boxesito attenzione">
			<div class="middle">
				<span class="imgCont"></span>
				<div class="text">
					<div class="row-fluid">
						<div class="span12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <strong>quis nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
					</div>
					<br>
					<div class="row-fluid">
						<div class="span12">
							<div class="aButtonconsLeft">
								<span class="btnc"><a href="javascript:;" class="aButtonClear" onclick="closePopOverLayer('contoTerziOverlay')"><span>lorem ipsum</span></a></span>
							</div>
							<div class="aButtonconsRight">
								<span class="btnc"><a id="demoSetErrorBtn" href="javascript:;" class="aButton" onclick="closePopOverLayer('contoTerziOverlay')"><span>lorem ipsum</span></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br class="clear">
</div>