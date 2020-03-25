<script type="text/javascript">	
	$(function () {
				$("#datepicker,#datepicker2").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
					
				});
				$("#datepicker,#datepicker2").mask("99/99/9999");
			});
	
</script>
<h1>Bollettini postali</h1>
<br class="clear">
<div class="box5">
	<div class="divtabellalist">
		<table border="0" class="tabellalist">
			<tr>
				<td id="" class="on first">						
					<a title="nuovo bollettino" href="#">nuovo bollettino</a>
				</td>
				<td id="" class="off">						
					<a title="bollettini inseriti" href="#">bollettini inseriti</a>
				</td>				
				<td class="end">&nbsp;</td>						
			</tr>
		</table>
	
	</div>
	<ul>
		<li>Il bollettino postale <strong>non &egrave; soggetto</strong> a commissioni, paghi soltanto le spese postali</li>
		<li>Inserendo come data di <strong>pagamento</strong> la data di oggi, il pagamento del bollettino sar&agrave; effettuato in <strong>tempo reale</strong>. La <strong>ricevuta</strong> del pagamento sarà <strong>immediatamente disponibile</strong>.</li>
		<li>Puoi <strong>prenotare il pagamento</strong> di un bollettino, indicando una <strong>data</strong> di <strong>pagamento</strong> successiva (quella in cui vuoi che avvenga effettivamente il pagamento).</li>
		<li>Una volta che il bollettino &egrave; <strong>stato pagato</strong> alla pagina &quot;bollettini inseriti&quot; trovi la <strong>ricevuta di pagamento.</strong></li>
		<li>Per pagare il <strong>canone Rai</strong>, seleziona la voce &quot;Bollettino bianco (da compilare)&quot;.</li>
	</ul>
	
	<!--<div class="boxExtrapre">
		<div class="boxExtrapreTop"><h2>Ricevuta di pagamento immediata</h2></div>
		<div class="boxExtrapreMdl">
		<p>Per i <strong>bollettini da compilare</strong>, il servizio di pagamento in tempo reale ti mette a disposizione <strong>immediatamente</strong> la ricevuta
	del pagamento effettuato. Per tasse automobilistiche, Ici e Canone Rai, nei giorni successivi al pagamento online, puoi stampare la relativa <strong>ricevuta (<a 
    href="javascript:apriImg('/webankpri/banking/webank/WsRidShowImage.jsp?cf=0.6244785437983217&imgName=%2Fwscmn%2Fimg/postalforms/bollettino_esempio.jpg&ownerBank=Webank')">esempio</a>)</strong>. Clicca sulla voce in alto &ldquo;bollettini inseriti&rdquo;

    e avvia la ricerca su bollettini postali. La ricevuta ha valore legale ed &egrave; identica al bollettino che pagheresti in un ufficio postale.</p>		
		</div>
		<div class="boxExtrapreBot"></div>
	</div>-->
	
	<div class="tithelp">
		<div class="helpleft">Scegli il tipo di bollettino</div>
		<br class="clear">
	</div>
	<div class="borderFormRounded">
		<div class="formGeneric">
			<form id="form01">
				<div class="row-fluid">
					<div class="span6">
						<label class="nomefield">Conto di addebito*</label>
						<select class="withIco">
							<option>CC 00599 0000082110 EUR</option>
							<option>CC 00599 0000082111 EUR</option>
						</select>
					</div>
					<div class="span6">
						<label class="nomefield">Saldo disponibile</label>
						<span class="output">1000</span>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span12">
						<label class="nomefield">Tipo di bollettino</label>
						<div class="radiocont">
							<label><input type="radio" name="bollettino" value="" id="" onclick="if($(this).is(':checked')) {$('#bolletino_step2A,#bolletino_step2Tit').show();$('#bolletino_step2B').hide()}">Bollettino premarcato (gi&agrave; compilato)</label><br class="clear">
							<label><input type="radio" name="bollettino" value="" id="" onclick="if($(this).is(':checked')) {$('#bolletino_step2B,#bolletino_step2Tit').show();$('#bolletino_step2A').hide()}">Bollettino bianco (da compilare)</label>
						</div>
						
					</div>
				</div>
			</form>
		</div>
	</div>
	<br class="clear"><br>
	<div class="tithelp" id="bolletino_step2Tit" style="display:none">
		<div class="helpleft">Inserisci i dati</div>
		<br class="clear">
	</div>
	<div class="borderFormRounded" id="bolletino_step2A" style="display:none">
		<div class="formGeneric">
			<form id="form01A">
				<div class="row-fluid">
					<div class="span4">
						<label class="nomefield">C/C postale di accredito*</label>
						<input type="text">
					</div>
					<div class="span4">
						<label class="nomefield ico">Codice bollettino*</label>
						<span class="iconahelp"><img src="/img/ret/ico2or_help2.gif" class="help" data-tooltip="#ttCodiceBollettinoId"></span>
						<span class="ttHtmlContent" id="ttCodiceBollettinoId">
							<div class="txtAlCenter">
								<img src ="/wscmn/img/img_codice_bollettino.jpg"  alt="Codice bollettino"/>
							</div>
						</span>
						<input type="text" id="" name="">
					</div>
					<div class="span4">
						<label class="nomefield ico">Tipo bollettino*</label>
						<span class="iconahelp"><img src="/img/ret/ico2or_help2.gif" class="help" data-tooltip="#ttTipoBollettinoId"></span>
						<span class="ttHtmlContent" id="ttTipoBollettinoId">
							<div class="txtAlCenter">
								<img src ="/wscmn/img/img_tipo_bollettino.jpg"  alt="Tipo bollettino"/>
							</div>
						</span>
						<div class="row-fluid">
							<div class="span6">
								<select>
									<option>XXX</option>
									<option>XXX</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span4">
						<label class="nomefield">Importo*</label>
						<div class="row-fluid">
							<div class="span6">
								<input type="text">
							</div>
						</div>
					</div>
					<div class="span4">
						<label class="nomefield">Data di pagamento*</label>
						<div class="row-fluid">
							<div class="span6">
								  <input type="text" class="withIco" id="datepicker" placeholder="gg/mm/aaaa" value="XX/XX/XXXX">
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4">
						<label class="nomefield">Eseguito da*</label>
						<input type="text">
					</div>
					<div class="span4">
						<label class="nomefield">Indirizzo di residenza*</label>
						<input type="text">
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span4">
						<label class="nomefield">Localit&agrave;*</label>
						<input type="text">
					</div>
					<div class="span4">
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">Provincia*</label>
								<select>
									<option>XX</option>
									<option>XX</option>
								</select>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">CAP*</label>
								<input type="text">
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="borderFormRounded" id="bolletino_step2B" style="display:none">
		<div class="formGeneric">
			<form id="form01B">
				<div class="row-fluid">
					<div class="span4">
						<label class="nomefield">C/C postale di accredito*</label>
						<input type="text">
					</div>
					<div class="span4">
						<label class="nomefield ico">Intestato a*</label>
						<input type="text" id="" name="">
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span4">
						<label class="nomefield">Importo*</label>
						<div class="row-fluid">
							<div class="span6">
								<input type="text">
							</div>
						</div>
					</div>
					<div class="span4">
						<label class="nomefield">Data di pagamento*</label>
						<div class="row-fluid">
							<div class="span6">
								  <input type="text" class="withIco" id="datepicker2" placeholder="gg/mm/aaaa" value="XX/XX/XXXX">
							</div>
						</div>
					</div>
					<div class="span4">
						<label class="nomefield">Causale*</label>
						<input type="text">
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4">
						<label class="nomefield">Eseguito da*</label>
						<input type="text">
					</div>
					<div class="span4">
						<label class="nomefield">Indirizzo di residenza*</label>
						<input type="text">
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span4">
						<label class="nomefield">Localit&agrave;*</label>
						<input type="text">
					</div>
					<div class="span4">
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">Provincia*</label>
								<select>
									<option>XX</option>
									<option>XX</option>
								</select>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">CAP*</label>
								<input type="text">
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<br class="clear"/><br>
	<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
	<div class="fooform">
		<div class="fooformright"><div><a title="prosegui" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div></div>
	</div>
	
</div>