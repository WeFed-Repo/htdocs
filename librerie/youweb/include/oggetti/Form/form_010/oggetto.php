<style type="text/css">


</style>

<div class="section clearfix">
	<h3 class="titleSection">Lorem ipsum dolor</h3>
	<div class="bs-example">
		
<!-- riga 01 -->		
		<div class="form-group auto">
			<div class="form-field-input col-xs-12 col-sm-4">
				<label class="control-label">Label01</label>
				<div class="form-field">
						<select id="contattoClient" class="form-control" name="contattoClient" onchange="popolaTelefonoResp();">				    	
					       	<option id="nuovoBen" value="nuovo beneficiario" selected="selected">Nuovo beneficiario</option>
					    					    			
				            	<option value='|Lorem ipsum dolor|||'>Lorem ipsum dolor </option>			                   
							
					    </select>
					</div>
				</div>
			<div class="form-field-input col-xs-12 col-sm-4" id="nomeBen">
				<label class="control-label">Label02:</label>
				<div class="form-field">
					<div class="col-xs-9">
						<input type="text" name="nomeBeneficiario" maxlength="35" size="30" value="" onblur="formattaStr(this, 35)" id="nomeBeneficiario" class="form-control">
					</div>
					<div class="col-xs-3">
						<button value="&nbsp;" id="beneficiari" title="Aggiungi/Modifica beneficiario" class="btnAggiungiBeneficiario" role="button" aria-pressed="false"></button>
					</div>				
				</div>
			</div>
			<div class="form-field-input col-xs-12 col-sm-4 nickname" id="nicknameBen" style="display: none;">
				<label class="control-label">Label03:</label>
				<div class="form-field">
					<input type="text" name="nickname" maxlength="20" size="30" value="" onblur="formattaStr(this, 20)" class="form-control">
				</div>
			</div>
			<div class="col-xs-12">
				<input type="checkbox" name="memorizza" value="S" id="memorizza" style="display:none">
				<input type="hidden" name="memorizza" value="N" id="memorizza" style="display:none">
			</div>
		</div>
<script type="text/javascript">
function popolaBeneficiario(){
	codice = $("#beneficiario :selected").val();
	changeDatiBeneficiario($("#beneficiario"));
	//compilaBeneficiario(codice, valorizzaDatiBeneficiario);
}


var contoDeposito = false; 
$(function( $, undefined ) {

	
	bpComboBox(changeDatiBeneficiario);

 	if (contoDeposito) {
		$("#beneficiari").hide();
		disabilitaModificaIntestatario($("#formInserimento"));
	}
	
}(jQuery));
</script>
<!-- fine riga 01 -->

<!-- riga 02 -->
		<div class="form-group clearfix">
			<div class="form-field-input col-sm-6 col-xs-12">
				<label class="control-label" for="nomeBeneficiario">Nome Beneficiario  </label>
				<div class="form-field">
					<input type="text" name="nomeBeneficiario" maxlength="35" size="36" value="NOME COGNOME" onblur="formattaStr(this, 35)" id="nomeBeneficiario" class="form-control">
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12">
				<label class="control-label" for="nickname">Nickname </label>
				<div class="form-field">
					<input type="text" name="nickname" maxlength="30" size="36" value="NICKNAME (LABEL)" readonly="readonly" id="nickname" class="form-control">
				</div>
			</div>
		</div>
<!-- fine riga 02 -->		

<!-- riga 03 -->
		<div class="form-group clearfix">
			<div class="form-field-input col-xs-12 col-sm-4 hidden-xs">
				<label class="control-label">Bonifico verso:</label>
				<div class="form-field">
					<div class="col-xs-6">
						<input type="radio" name="bonificoVersoNazione" value="1" checked="checked" onclick="checkEnabled()">
						Italia
					</div>
					<div class="col-xs-6">
						<input type="radio" name="bonificoVersoNazione" value="2" onclick="checkEnabled()"> Altre Nazioni
					</div>
				</div>
			</div>
			<div class="form-field-input col-sm-8 col-xs-12">
				<label class="control-label">IBAN intero:</label>
				<div class="form-field">
					<div class=" col-sm-5 col-xs-12 col-prt-12">
						<input type="text" name="iban" maxlength="35" size="30" value="IT00B0000000000000000000000" onblur="formattaStr(this,35);testABI();" id="iban" class="form-control">
					</div>
					<div class="pull-right col-sm-6 col-xs-12 padding-top-xs-5 hidden-xs" id="btnIban">
						<input type="button" name="trovaAbiCab" value="Trova ABI/CAB" id="trovaAbiCab" class="btn" alt="">
						<input type="button" name="calcolaIban" value="Calcolo IBAN" id="calcolaIban" class="btn" alt="">
					</div>
				</div>
			</div>
<script>
$(document).ready(function(){
$("#btnIban").on("beneficiariEvent", function(event, stato){
if(stato == "enable"){
$("#btnIban input[type='button']").each(function(){
$(this).removeClass("disabled");
})
}else{
$("#btnIban input[type='button']").each(function(){
$(this).addClass("disabled");
})
}
})
})
</script>
		</div>
<!-- fine riga 03 -->		


<!-- riga 04 -->
		<div class="form-group clearfix">
			<div class="form-field col-sm-6 col-xs-12 col-prt-6">
				<label class="control-label" for="gestore">Gestore </label>
				<div class="form-field">
					<select name="operatore" class="form-control">
						<option value="1">Vodafone</option>
						<option value="2">Tim</option>
						<option value="3">Wind</option>
						<option value="4">Tiscali</option>
						<option value="5">H3G</option>
						<option value="8">PosteMobile</option>
						<option value="9">CoopVoce</option>
					</select>
				</div>
			</div>
			<div class="form-field col-sm-6 col-xs-12 col-prt-6">
				<label class="control-label" for="prefTelefono">Numero di telefono </label>
				<div class="form-field">
					<input type="text" name="prefTelefono" maxlength="3" size="5" value="" class="form-control wauto  floatl-marginr10">
					<span class=" floatl-marginr10 top5">/</span>
					<input type="text" name="numTelefono" maxlength="7" size="9" value="" class="form-control wauto">
				</div>
			</div>
		</div>
<!-- fine riga 04 -->

<!-- riga 05 -->
		<div class="form-group clearfix">
			<div class="col-sm-6 col-xs-12 col-prt-6">
				<label for="cartaConto">Tipologia carta </label>
				<div class="form-field">
					<select name="tipoCarta" class="form-control">
						<option value="">Seleziona...</option>
						<option value="KALI">Kalibra</option>
						<option value="K2">K2</option>
						<option value="K3PP">YouCard</option>
						<option value="YOUP2P">Chat&amp;Cash</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12 col-prt-6">
				<label for="kalibra">Numero carta </label>
				<div class="form-field">
					<input type="text" name="numeroCarta" maxlength="16" size="18" value="" class="form-control">
				</div>
			</div>
		</div>
<!-- fine riga 05 -->

<!-- riga 06 -->
<script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({
		minDate: new Date(1489100400000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
	});

	$('.datepickerDisabled').datepicker({
		minDate: new Date(1489100400000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});
		
	$('.calendarioDefault').datepicker({
		minDate: new Date(1489100400000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays
	});
	
	var formSubmitted=false;
	$('form').submit(function() {
		if (formSubmitted)
			return false;
		else 
			formSubmitted=true;	
		return true;
	});
});
</script>


		<div class="form-group clearfix">
			<div class="form-field-input col-xs-12 col-sm-4">
				<label class="control-label" for="importoInt">Importo</label>
				<div class="form-field">
					<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" style="width:auto;float: left; text-align: right" class="form-control">
					<span style="float: left; padding: 5px;">,</span>
					<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" style="width:auto" class="form-control">&nbsp;EUR
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label" for="dataEsecuzione">Data esecuzione <a href="javascript:OpenHelp('/template/modale.php')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
					<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header clearfix">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
								</div>
							</div>
						</div>
					</div>
				</label>
				<div class="form-field">
					<input type="text" name="dataEsecuzione" size="12" value="06/04/2017" id="dataEsecuzione" class="datepicker form-control floatl-marginr10 wauto" />
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label" for="causale">Causale</label>
				<div class="form-field">
					<div id="counter"></div>
						<textarea name="causale" cols="35" rows="4" onblur="upperCase(this)" id="causale" class="form-control"></textarea>
					</div>
				</div>
			</div>
<!-- fine riga 06 -->

<!-- riga 07 -->
		<div class="form-group clearfix">
			<div class="form-field-input col-sm-6 col-xs-12">
				<div class="form-field-input">
					<label class="control-label">
						La notifica viene inviata nel caso in cui l'ordine non vada a buon fine. Per ricevere la notifica anche in caso di esito positivo accedi alla sezione Alert-&gt;conto
					</label>
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12">
				<div class="form-field-input">
					<label class="control-label">Indirizzo e-mail <a href="javascript:OpenHelp('/template/modale.php')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
						<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header clearfix">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
									</div>
								</div>
							</div>
						</div>
					</label>
					<div class="form-field">
						<div class="form-field-input col-sm-10 col-xs-12"> 
							<input type="text" name="email" maxlength="60" value="NOMECOGNOME@DOMINIO.IT" readonly="readonly" id="email" class="form-control">
						</div>
						<div class="form-field-input col-sm-2 hidden-xs">
							<input type="button" name="contatti" value="&nbsp;" id="contatti" class="btnEdit">
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- fine riga 07 -->

<!-- riga 08 -->
		<div class="form-horizontal" style="margin-top:10px">
			<div class="form-field col-sm-6 col-xs-12">
				<div class="form-field-input">
					<label class="control-label">
						Per proseguire &egrave; necessario inserire la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
					</label>
				</div>
			</div>
			<div class="form-field col-sm-5 col-xs-11 col-xs-offset-1 otp ">
				<div class="form-field-input">
						<img src="/HT/IMAGES/OTPW.png">
						<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control with-help" style="margin-top:5px" autofocus=""> 
						
							<a href="#" onclick="javascript:OpenHelp('/template/modale.php')">
								<img src="/HT/IMAGES/nGrafica/i_help.png" style="margin-top:0px;margin-left:3px" title="Help On Line" alt="Help On Line">
							</a>
						
				</div>
			</div>
		</div>
<!-- fine riga 08 -->

<!-- riga 09 -->
		<div class="form-group clearfix">
			<div class="form-field col-sm-5 col-xs-12 margin-bottom-xs-10">
				<label class="control-label">
					Per proseguire con la disposizione &egrave; necessario cliccare su "Genera password": un codice di 6 cifre verr&agrave; automaticamente inviato via SMS al numero <b>******4345</b>
				</label>
			</div>

			<div class="form-field col-sm-7 col-xs-12 margin-top-xs-10 margin-bottom-xs-10">
				<div class="col-xs-3 col-sm-3">
					<img src="/HT/IMAGES/nGrafica/otp-phone-token2.png" class="img-responsive" title="otp sms" alt="otp sms">
				</div>
				<div class="col-xs-9 margin-bottom-xs-10 col-sm-3">
					<input type="text" id="codiceOTPConSMS" value="" class="form-control thin wauto" maxlength="6" name="codiceOTPConSMS" autocomplete="off" tabindex="1" disabled="disabled">
				</div>
				<div class="col-xs-12 col-sm-5 ">
					<div class="pull-xs-right">
						<input type="button" name="invioOTPConSMS" tabindex="3" value="Genera password" onclick="javascript:inviaOtpSMS()" id="invioOTPConSMS" class="btn">	
						<a href="#" id="helpPopUp" onclick="javascript:OpenHelp('/template/modale.php')"><img src="/HT/IMAGES/nGrafica/i_help.png" style="margin-bottom:-3px" title="Help On Line" alt="Help On Line"></a>
					</div>
				</div>
			</div>
		</div>
<!-- fine riga 09 -->

<!-- riga 10 -->
		<div class="bs-example">
			<div class="form-group clearfix">
				<div class="form-field-input col-sm-6 col-xs-12">
					<label class="control-label">Tipologia del bonifico:</label>
					<div class="form-field col-xs-12 col-sm-9 clear-padding">
						<select name="tipologiaDetrazione" class="form-control">
							<option value="ND" selected="selected">Seleziona</option>
							<option value="RISTRUTTURAZIONE_EDILIZIA">Ristrutturazione edilizia - (ART.16-BIS DPR 917/1986)</option>
							<option value="RISPARMIO_ENERGETICO">Risparmio energetico - N.296/2006 ART.1/344 E SEGG.</option>
							<option value="BONUS_ARREDO">Mobili ed elettrodomestici - (art.16 c.2 D.L. 63/2013)</option>
						</select>
					</div>
				</div>
				<div class="form-field-input col-sm-6 col-xs-12">
					<label class="control-label">P.IVA/Cod. Fisc. del beneficiario</label>
					<div class="form-field col-sm-6 col-xs-12 clear-padding">
						<input type="text" name="pIva" maxlength="30" size="30" value="" onblur="formattaStr(this,30);" class="form-control">
					</div>
				</div>
			</div>
		<!-- TIPOLOGIA ORDINANTE -->
			<div class="form-group clearfix padding-top5">
				<div class="form-field-input col-xs-12">
					<label class="control-label">Tipologia dell'ordinante (titolare della detrazione fiscale):</label>
					<div class="form-field col-xs-6 clear-padding">
						<div class="col-sm-5 col-xs-12">
							<input type="radio" name="tipologiaOrdinante" value="PERSONA_FISICA" checked="checked" onclick="modifica()"> Persona fisica
						</div>
						<div class="col-sm-7 col-xs-12">
							<input type="radio" name="tipologiaOrdinante" value="CONDOMINIO" onclick="modifica()"> Condominio
						</div>
					</div>
				</div>
			</div>
		<!-- DETRAENTI -->
			<div class="row">
				<div class="form-group clearfix padding-top5">
					<div class="form-field-input col-xs-12 clear-padding padding-left10 visible-xs">
						<div class="inside" style="margin-top: 10px; margin-bottom: 10px;">
							<a href="javascript:void(0);" onclick="addDetraente();"><img src="/HT/IMAGES/nGrafica/i_plus.png" height="14" width="14" title="aggiungi" alt="aggiungi">Aggiungi altro codice fiscale</a>
						</div>
					</div>
					<div class="form-field-input col-sm-6 col-xs-12 clear-padding">
						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante ">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 1:
								<a href="javascript:OpenHelp('/template/modale.php')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
								<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header clearfix">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
											</div>
										</div>
									</div>
								</div>
							</label>

							<div class="form-field">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[0]" maxlength="30" size="16" value="WWWWWW00W00W000W" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 2:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[1]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 3:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[2]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 4:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[3]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 5:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[4]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 6:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[5]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 7:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[6]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 8:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[7]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
						<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 9:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[8]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 10:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[9]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 11:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[10]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 12:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[11]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 13:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[12]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 14:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[13]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 15:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[14]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
		<!-- LABEL ORDINANTE -->
							<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 16:</label>
							<div class="form-field">
								<img src="/HT/IMAGES/i_cancella.gif" class="imgsrv imgBtn floatl" title="cancella categoria" onclick="deleteDetraente(this);">
								<div class="col-xs-10">
									<input type="text" name="cfOrdinante[15]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="form-field-input col-sm-3 clear-padding padding-left10 hidden-xs">
						<div class="inside">
							<a href="javascript:void(0);" onclick="addDetraente();"><img src="/HT/IMAGES/nGrafica/i_plus.png" height="14" width="14" title="aggiungi" alt="aggiungi">Aggiungi altro codice fiscale</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<script type="text/javascript">
var detrazioneTipologia = {

	
	ND: ""
	

	
	,RISTRUTTURAZIONE_EDILIZIA: "RISTRUTT.EDIL.(ART.16-BIS DPR 917/1986)"
	

	
	,RISPARMIO_ENERGETICO: "RISP.ENERG. N.296/2006 ART.1/344 E SEGG."
	

	
	,BONUS_ARREDO: "BONUS ARREDO (ART.16 C.2 D.L. 63/2013)"
	

};

$(function() {
	$("input[name^='cfOrdinante']").change(function(){updateCausale()});
	$('select[name="tipologiaDetrazione"]').change(function(){updateCausale()});
	$('input[name="pIva"]').change(function(){updateCausale()});
	
	$("#causale").attr('placeholder', 'Esempio: saldo fattura n.5 del 2015');

	updateCausale();
	// mostro i codici fiscali gia' compilati
	$(".codFiscaleOrdinante:hidden input").each(function (i, element) {
		if ($(element).val()!=undefined && $(element).val()!="") {
			$($(element).parents(".codFiscaleOrdinante")[0]).removeClass("hide");
		}
	});
});

window.updateCausale = function () {
	var causale = "";
	
	// legge
	var detrazioneTipologiaSelezionata = $('select[name="tipologiaDetrazione"] option:selected').val();
	causale = detrazioneTipologia[detrazioneTipologiaSelezionata];
	if ($.trim(causale)!='') { // se non c'e' la tipologia detrazione, non compongo la causale
		// p.iva.
		if ($('input[name="pIva"]').val()!="") {
			causale += " CFDES:"+$('input[name="pIva"]').val();
		}
		// detraenti
		$("input[name='cfOrdinante[0]']").each(function(i, cfOrdinante) {
			if ($(cfOrdinante).val()!="") {
				causale += " CFORD:"+$(cfOrdinante).val();
			}
		});
	}
	
	$('#causaleDetrazione').val(causale);
}
window.addDetraente = function() {
	$(".codFiscaleOrdinante:hidden").each(function (i, element) {
		$(element).removeClass("hide");
		return false;
	});
}
window.deleteDetraente = function(element) {
	// svuoto il campo
	$(element).parent().find("input").each(function (i, input){
		$(input).val("");
	});
	// nascondo il campo
	$(element).parents(".codFiscaleOrdinante").each(function(i, parent) {
		$(parent).addClass("hide");
		return false;
	});
}
window.modifica = function () {
	$('#formInserimento').append("<input type='hidden' name='modifica' value='modifica' />");
	$('#formInserimento').submit();
}
</script>
<!-- fine riga 10 -->


<!-- riga 11 -->
		<div class="form-group clearfix ">
			<div class="form-field-input col-xs-12 col-sm-4">
				<div class="sottolineato-ombra">Disponibilit&agrave; conto addebito</div>
				<div class="form-field" id="saldoAddebitoShadow" style="padding-left:10px">88,00</div>
			</div>
			<div class="form-field-input col-xs-12 col-sm-4 margin-bottom-xs-10 center-sm padding-left-xs-20">
				<div style=" display:inline-block">
					<label class="control-label" for="importoInt">Importo da trasferire</label>
					<div class="form-field">
					
						<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" style="width:auto;float: left; text-align: right" class="form-control blu-border">
						<span style="float: left; padding: 5px;">,</span>
						<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" style="width:auto" class="form-control blu-border">&nbsp;EUR
					
					</div>
				</div>
			</div>
			<div class="form-field-input col-xs-12 col-sm-4">
				<div class="sottolineato-ombra">Disponibilit&agrave; conto accredito</div>

				<div class="form-field" id="saldoAccreditoShadow" style="padding-left:10px">5,00</div>
			</div>
				<div class="form-field-input col-xs-12 col-sm-9">
					<label>Causale </label>
					<div class="form-field">
						<input type="text" name="causale" value="" onblur="upperCase(this)" id="causale" class="form-control">
					</div>
				</div>
		</div>
<!-- fine riga 11 -->


<!-- riga 12 -->
		<div class="form-group">
			<div class="form-field-input col-sm-3 col-xs-12">
				<label class="control-label">Numero di telefono:</label>
				<input type="text" name="prefTelefono" maxlength="3" size="4" value="" id="prefTelefono" class="form-control wauto floatl-marginr10" title="prefisso telefonico">
				<input type="text" name="numTelefono" maxlength="7" size="10" value="" id="numTelefono" class="form-control wauto" title="numero telefonico">
						
			</div>
			<div class="form-field-input col-sm-9 col-xs-12">
				<label class="control-label">Gestore Telefonico</label>
				<div class="form-field gestore">
					<label class="imgLabel" for="gestore0"><img class="gestoreNonAttivo" id="gestoreImg0" title="Vodafone" src="/HT/IMAGES/nGrafica/Vodafone.png" width="65px">
						<input type="radio" name="nomeGestore" value="Vodafone;1" id="gestore0" class="input_hidden inputGestore">
					</label>
											
				
					<label class="imgLabel" for="gestore1"><img class="gestoreNonAttivo" id="gestoreImg1" title="Tim" src="/HT/IMAGES/nGrafica/Tim.png" width="65px">
						<input type="radio" name="nomeGestore" value="Tim;2" id="gestore1" class="input_hidden inputGestore">
					</label>
								
				
					<label class="imgLabel" for="gestore2"><img class="gestoreNonAttivo" id="gestoreImg2" title="Wind" src="/HT/IMAGES/nGrafica/Wind.png" width="65px">
						<input type="radio" name="nomeGestore" value="Wind;3" id="gestore2" class="input_hidden inputGestore">
					</label>
								
				
					<label class="imgLabel" for="gestore3"><img class="gestoreNonAttivo" id="gestoreImg3" title="Tiscali" src="/HT/IMAGES/nGrafica/Tiscali.png" width="65px">
						<input type="radio" name="nomeGestore" value="Tiscali;4" id="gestore3" class="input_hidden inputGestore">
					</label>
								
				
					<label class="imgLabel" for="gestore4"><img class="gestoreNonAttivo" id="gestoreImg4" title="H3G" src="/HT/IMAGES/nGrafica/H3G.png" width="65px">
						<input type="radio" name="nomeGestore" value="H3G;5" id="gestore4" class="input_hidden inputGestore">
					</label>
								
				
					<label class="imgLabel" for="gestore5"><img class="gestoreNonAttivo" id="gestoreImg5" title="PosteMobile" src="/HT/IMAGES/nGrafica/PosteMobile.png" width="65px">
						<input type="radio" name="nomeGestore" value="PosteMobile;8" id="gestore5" class="input_hidden inputGestore">
					</label>
								
				
					<label class="imgLabel" for="gestore6"><img class="gestoreNonAttivo" id="gestoreImg6" title="CoopVoce" src="/HT/IMAGES/nGrafica/CoopVoce.png" width="65px">
						<input type="radio" name="nomeGestore" value="CoopVoce;9" id="gestore6" class="input_hidden inputGestore">
					</label>
				</div>  
			</div>
		</div>
<!-- fine riga 12 -->


<!-- riga 13 -->
		<div class="row">
			<div class="form-field-resume col-xs-12 margin-bottom-xs-10">
				<label class="control-label">Seleziona l'importo da ricaricare:</label>
				<div class="form-field gestore">
					<label class="imgLabel btn select-button" for="taglio1" style="text-align: center; font-weight: bold;" description="11,00">
						11
						<input type="radio" name="taglioSel" value="1" id="taglio1" class="input_hidden">
					</label>
				
					
					<label class="imgLabel btn select-button" for="taglio2" style="text-align: center; font-weight: bold;" description="66,00">
						66
						<input type="radio" name="taglioSel" value="2" id="taglio2" class="input_hidden">
					</label>
				
					
					<label class="imgLabel btn select-button" for="taglio3" style="text-align: center; font-weight: bold;" description="88,00">
						88
						<input type="radio" name="taglioSel" value="3" id="taglio3" class="input_hidden">
					</label>
				
					
					<label class="imgLabel btn select-button" for="taglio4" style="text-align: center; font-weight: bold;" description="111,00">
						111
						<input type="radio" name="taglioSel" value="4" id="taglio4" class="input_hidden">
					</label>
				
					
					<label class="imgLabel btn select-button" for="taglio5" style="text-align: center; font-weight: bold;" description="222,00">
						222
						<input type="radio" name="taglioSel" value="5" id="taglio5" class="input_hidden">
					</label>
				
					
					<label class="imgLabel btn select-button" for="taglio6" style="text-align: center; font-weight: bold;" description="333,00">
						333
						<input type="radio" name="taglioSel" value="6" id="taglio6" class="input_hidden">
					</label>
				
					
					<label class="imgLabel btn select-button" for="taglio7" style="text-align: center; font-weight: bold;" description="444,00">
						444
						<input type="radio" name="taglioSel" value="7" id="taglio7" class="input_hidden">
					</label>
				
					
					<label class="imgLabel btn select-button" for="taglio8" style="text-align: center; font-weight: bold;" description="555,00">
						555
						<input type="radio" name="taglioSel" value="8" id="taglio8" class="input_hidden">
					</label>

<script type="text/javascript">
	$(document).ready(function(e) {
		$('.select-button').on('click', function(){
			selectTaglio($(this));
		});

		var selected = $('input[name="taglioSel"]:checked');									
		if (selected.val()!=undefined && selected.val()!='') {
			selectTaglio($('#taglio'+selected.val()).parent());
		}
	});
	
	window.selectTaglio = function (elementSelected) {
		$('.select-button.active', $(elementSelected).parent()).removeClass('active');
		$(elementSelected).addClass('active');
		var input = $(elementSelected).find("input");
		// tolgo a tutti i radio l'attribute checked
		$('input[name="taglioSel"]').removeAttr("checked");
		// aggiungo al radio l'attributo checked
		$(input).attr("checked", "checked");
		var valore = $(input).attr("id").substring(6);
		
		var testo = $(elementSelected).attr("description");
		$("#tagli").empty().text(testo);
	}
</script>
				</div>
			</div>
		</div>
<!-- fine riga 13 -->


<!-- riga 14 -->
		<div class="form-group clearfix">
			<div class="col-xs-12 col-sm-6">
				<label for="bollettinoPremarcato" style="padding-left: 5px; margin-top: 1px;">Bollettino premarcato (tipo 674 e 896)</label>
				<input type="radio" name="tipoBollettino" value="P" checked="checked" id="bollettinoPremarcato" class="pull-left">
				<div class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0">
					<img src="/HT/IMAGES/PAGAMENTI/BOLLETTINI/BOLLETTINO_PREMARCATO.gif" class="img-responsive margin-top-xs-10 margin-bottom-xs-10" onclick="selezBollettino(this)"> 				
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<label for="bollettinoBianco" style="padding-left: 5px; margin-top: 1px;">Bollettino in bianco (tipo 123 e 451)</label>
				<input type="radio" name="tipoBollettino" value="B" id="bollettinoBianco" class="pull-left">
				<div class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0">
					<img src="/HT/IMAGES/PAGAMENTI/BOLLETTINI/BOLLETTINO_BIANCO.gif" class="img-responsive margin-top-xs-10 margin-bottom-xs-10" onclick="selezBollettino(this)"> 	
				</div>
			</div>
		</div>
<!-- fine riga 14 -->


<!-- riga 15 -->
<div class="clearfix">
					<div class="form-field-input col-xs-12 col-sm-4">
						
							
								<label for="beneficiario" class="control-label"> 
									Intestato a 
								</label>
								<div class="form-field">
									<input type="text" name="beneficiario2" size="50" value="" onblur="formattaStringa(this);" id="beneficiario2" class="form-control" />
								</div>
							
							
						
					</div>
					<div class="form-field-input col-xs-12 col-sm-3">
						<label for="importoIntero" class="control-label"> 
							Importo 
						</label>
						<div class="form-field">
							<input type="text" name="importoIntero" maxlength="6" size="6" value="" id="importoIntero" style="width:auto;float: left; text-align: right;" class="form-control wauto" />
							<span style="float: left; padding: 0 5px; margin-top: 8px;">,</span>
							<input type="text" name="importoDecimale" maxlength="2" size="2" value="00" id="importoDecimale" class="form-control wauto" />
						</div>
					</div>
					
					
						<div class="form-field-input col-xs-12 col-sm-5">
							<label for="contoCorrentePostalePrestampato" class="control-label"> 
								Il cc postale &egrave; prestampato sul bollettino?
								 
								




	
	<a href="javascript:OpenHelp('/template/modale.php')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line" /></a>
	







<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>
 
							</label>
							<div class="col-xs-2">
								<label for="contoCorrentePostalePrestampato" class="radio-inline"> 
									<input type="radio" name="codiceNumerico" value="451" id="contoCorrentePostalePrestampato" /> 
									Si 
								</label>
							</div>
							<div class="col-xs-4">
								<label for="contoCorrentePostaleNonPrestampato" class="radio-inline"> 
									<input type="radio" name="codiceNumerico" value="123" id="contoCorrentePostaleNonPrestampato" /> 
									No 
								</label>
							</div>
						</div>
					
				</div>

<!-- fine riga 15 -->


<!-- riga 16 -->
		<div class="form-group clearfix">
<!-- CODICE MAV -->
			<div class="form-field-input col-xs-12 col-sm-4">
				<label class="control-label" for="codiceMav">Codice Mav
					<a href="#" class="hidden-xs" onclick="javascript:ApriPopup('/HT/IMAGES/PAGAMENTI/BOL/MAV.gif',625,290,'popup')"><img src="/HT/IMAGES/i_dettaglio.gif" height="14" width="14" title="Dettaglio" alt="Dettaglio"> </a>&nbsp;
					<a href="#" class="hidden-xs" onclick="javascript:ApriPopup('/HT/IMAGES/PAGAMENTI/BOL/MAV.gif',625,290,'popup')">Fac-simile MAV </a>&nbsp;
				</label>
				<div class="form-field">
					<input type="text" name="codiceMav" maxlength="17" size="25" value="" id="codiceMav" class="form-control">
				</div>
			</div>
<!-- IMPORTO -->
			<div class="form-field-input col-xs-12 col-sm-2 clear-padding padding-left-xs-10">
				<label class="control-label" for="importoMav">Importo</label>
				<div class="form-field">
					<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" class="form-control wauto floatl">
					<span style="float: left; padding: 5px">,</span>
					<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" class="form-control wauto">
				</div>
			</div>
<!-- DATA ESECUZIONE -->
			<div class="form-field-input col-xs-12 col-sm-3">
				<label class="control-label" for="dataEsecuzione"> Data esecuzione 
					<a href="javascript:OpenHelp('/template/modale.php')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
					<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header clearfix">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
								</div>
							</div>
						</div>
					</div>
				</label>

				<div class="form-field">
					<input type="text" name="dataEsecuzione" size="12" value="06/04/2017" id="dataEsecuzione" class="form-control datepicker wauto floatl-marginr10 hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario">
				</div>
			</div>
<!-- DESCRIZIONE -->
			<div class="form-field-input col-xs-12 col-sm-3">
				<label class="control-label" for="note">Descrizione pagamento </label>
				<div class="form-field">
					<input type="text" name="note" maxlength="50" size="60" value="Opzionale" id="note" class="form-control placeh">
				</div>
			</div>
		</div>
<!-- fine riga 16 -->


<!-- riga 17 -->
	<div class="bs-example">
		<div class="form-group clearfix">
			<!-- <div class="container"> -->
			<!-- CAMPI DI AGGIORNAMENTO/CANCELLAZIONE -->
			<input type="hidden" name="key" value="0" id="keyVal">
			<input type="hidden" name="updateVal" value="0" id="updateVal">
						
						<!-- SEZIONE ELENCO VOUCHER -->	
		
						<!-- SEZIONE AGGIUNTA NUOVO VOUCHER -->
						
				<div class="row margin-top10" id="divAggiungi">	
					<div class="margin-left10 floatl margin-top5 clear-padding col-sm-1"> 
						Quantit&agrave;:
					</div>
						 		
			 		<div class="floatl margin-bottom10 clear-padding col-sm-5">
					 	<span class="vincola_box" onclick="btnUpdateAddVoucherClick('x')">X</span>
				        <input type="text" name="quantita" value="1" id="quantitaText" class="floatl form-control wauto vincola margin-top-xs-0">        
				        <span class="vincola_box" onclick="btnUpdateAddVoucherClick(1)">1</span>
				        <span class="vincola_box" onclick="btnUpdateAddVoucherClick(5)">5</span>
				        <span class="vincola_box" onclick="btnUpdateAddVoucherClick(10)">10</span>
				        <span class="vincola_box hidden-xs" onclick="btnUpdateAddVoucherClick(50)">50</span>
			        </div>
						        
			        <div class="floatl margin-top5 margin-top-xs-10 clear-padding col-sm-1">
			        	Taglio:
			        </div>
						        
			        <div class="floatl margin-top5 clear-padding col-sm-2">
				        <select name="taglio" id="dropDownTaglio" style="width:100px" class="form-control">
				        	<option value="0" selected="selected">0</option>
							<option value="10">10</option>
							<option value="20">20</option>
							<option value="30">30</option>
							<option value="40">40</option>
							<option value="50">50</option>
							<option value="60">60</option>
							<option value="70">70</option>
							<option value="80">80</option>
							<option value="90">90</option>
							<option value="100">100</option>
							<option value="110">110</option>
							<option value="120">120</option>
							<option value="130">130</option>
							<option value="140">140</option>
							<option value="150">150</option>
							
						</select> 
		        	</div>
						       
					<div class="floatl margin-top5 margin-top-xs-10 margin-left-xs-10 clear-padding col-sm-1">
						<span onclick="resetInput()">
							<a href="#">
					 			<img src="/HT/IMAGES/i_cancella.png">								 
							</a>
						</span>
					</div>
				</div>
						<!-- </div> -->  
					
					<div class="row margin-top10">  
						<div class="floatl margin-top5  col-xs-12"> 
							<span onclick="aggiungiVoucher()">
								
								<a href="#" style="text-decoration: none;">
								<img src="/HT/IMAGES/i_plus.gif">&nbsp;
								</a>
								<a href="#">
									Aggiungi un altro Voucher	
								</a>
							</span>
							
						</div>
					</div>

				</div>
			</div>
		
<script>
		$(document).ready(function(){
			$(".dropDown").change(function(e){
				var pre=$(this).data('previous');
				var newVal=$(this).val();
				
				$('#keyVal').val(pre);
				$('#updateVal').val(newVal);
				$('#btnReplaceTaglio').click();
			});
			
			$(".dropDown").on("focus",function(){  
    			 $(this).data('previous',$(this).val());
			});
		});

		function btnUpdateAddVoucherClick(p){
			if(p=='x')
				$('#quantitaText').val(1);
			else{
				if(checkInput()){
					var att=parseInt($('#quantitaText').val());
					var newValue=att+p;
					$('#quantitaText').val(newValue);
				}
				else
					$('#quantitaText').val(1);
			}
		}
		
		function resetInput(){
			$('#dropDownTaglio').prop('selectedIndex', 0);
			$('#quantitaText').attr('value',1);	
		}
		
		function resetInputWithHide(){
			$('#dropDownTaglio').prop('selectedIndex', 0);
			$('#quantitaText').attr('value',1);
			$('#divAggiungi').hide();
		}
		
		function aggiungiVoucher(){
			if($('#divAggiungi').is(':hidden'))
				$('#divAggiungi').show();
			else{
				var input=$('#quantitaText').val();
			
				if(checkInput() && input>0)   
					$('#btnAdd').click();
				else  
			   		alert("Insert a correct number"); 
			}	
		}
		
		function btnUpdateListVoucherClick(q,taglio){
			$('#keyVal').val(taglio);
			$('#updateVal').val(q);
			$('#btnUpdate').click();
		}
		function btnDeleteClick(taglio){
			$('#keyVal').val(taglio);
			$('#btnDelete').click();
		}
		function txtQuantTextChange(q,taglio){
			$('#keyVal').val(taglio);
			$('#updateVal').val(q);
			$('#btnReplace').click();
		
		}
		function checkInput(){
			var input=$('#quantitaText').val();
			var ckeck=isNaN(input);
			return !ckeck;
		}
		
</script>

<!-- fine riga 17 -->



<!-- riga 18 -->
		<div class="form-group clearfix">
			<div class="form-field-input col-xs-12 col-sm-12">
				<div class="form-field-input col-xs-12 col-sm-6 clear-padding">
					<div class="form-field-input col-xs-1 col-sm-1 clear-padding">	
						<input type="radio" name="opzione" value="DUE_LIBRETTI" checked="checked" id="libretti" class="sfondoForm">
					</div>
					<div class="form-field-input col-xs-11 col-sm-11 clear-padding">
						<label style="padding-top:2px" for="libretti">
							Situazione ultimi 2 libretti
						</label>
					</div>
				</div>
			</div>
			<div class="form-field-input col-xs-12 col-sm-12">
				<div class="form-field-input col-xs-12 col-sm-6 clear-padding">
					<div class="form-field-input col-xs-1 col-sm-1 clear-padding">
						<input type="radio" name="opzione" value="SING_LIBRETTO" id="libretto" class="sfondoForm">
					</div>
					<div class="form-field-input col-xs-11 col-sm-11 clear-padding">
						<label style="padding-top:2px" for="libretto">
							Situazione libretto
						</label>
					</div>
				</div>
				<div class="form-field-input col-sm-6 clear-padding margin-top-xs-60">
					<div class="form-field-input col-sm-2 clear-padding">
						<label class="control-label" style="padding-top:2px" for="assegno">
							Assegno
						</label>
					</div>
					<div class="form-field-input col-sm-10 clear-padding">
						<div class="form-field">
							<input type="text" name="numeroAssegno" maxlength="9" size="17" value="" onfocus="$('#libretto').prop('checked', true);" id="assegno" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- fine riga 18 -->


<!-- riga 19 -->
		<div class="form-group">
			<div class="form-field-input col-xs-12">
				<label class="control-label">
					Come preferisci comunicare all'azienda le coordinate per l'accredito dello stipendio?
				</label>
			</div>		  
			<div class="form-field-input col-xs-12">
				<div class="form-field-input col-xs-6 clear-padding">
					<div class="form-field-input col-xs-1 clear-padding">
						
						<input type="radio" name="modComunicazione" value="E" onclick="visualizzaContenuto('E');" id="canaleComunicazioneEmail" style="vertical-align: middle;">
					</div>
					<div class="form-field-input col-xs-11 clear-padding">
						<label style="padding-top:2px;">
							tramite e-mail
						</label>
					</div>
				</div>
				<div class="form-field-input col-xs-6 clear-padding">
					<div class="form-field-input col-xs-1 clear-padding">
						
						<input type="radio" name="modComunicazione" value="C" onclick="visualizzaContenuto('C');" id="canaleComunicazioneCartaceo" style="vertical-align: middle;">
					</div>
					<div class="form-field-input col-xs-11 clear-padding">
						<label style="padding-top:2px;">
							tramite modulo cartaceo
						</label>
					</div>
				</div>
			</div>
			<div class="form-field-input col-xs-12" id="boxEmailAzienda" style="display: none;">
				<div class="form-field-input col-xs-6 clear-padding-left">
					<label class="control-label">
						Inserisci di seguito l'indirizzo e-mail dell'azienda alla quale vuoi inviare le coordinate del tuo conto:
					</label>
				</div>
				<div class="form-field-input col-xs-6 clear-padding"> 
					<div class="form-field">
						<input type="text" name="emailAzienda" size="30" value="" id="emailAzienda" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-field-input col-xs-12" id="boxConferma" style="display: none;">
				<div class="form-field-input col-xs-4 clear-padding">
					<div class="form-field floatl">
						<input type="checkbox" name="conferma" value="on" id="conferma" class="floatl">
					</div>
					<label class="floatl" style="padding-top:2px">Conferma</label>
				</div>
				<div class="form-field-input col-xs-8 margin-bottom10 clear-padding" id="boxConferma">
					<div class="form-field">
						<textarea rows="2" cols="80" style="font-size: 10px; font-style: italic;" class="form-control" readonly="readonly">Con la richiesta di invio a mezzo e-mail della presente disposizione di accredito stipendio, confermi di essere consapevole del fatto che la medesima sarà trasmessa dalla Banca all'indirizzo da te indicato mediante semplice posta elettronica "in chiaro" e, a tal proposito, sollevi la Banca da ogni responsabilità e/o conseguenza riferita o altrimenti connessa con tale trasmissione.</textarea>
					</div>
				</div>
			</div>
		</div>
<!-- fine riga 19 -->


<!-- riga 20 -->
<div class="form-group clearfix">
							<div class="col-xs-12 col-sm-5"> 
								<div class="margin-left20 margin-top20 margin-left-xs-0">
									<fieldset>
										<div class="select col-xs-12 col-sm-7">
											<select name="codRegione" class="form-control"><option value="" selected="selected">Seleziona regione</option>
												
													
												
													
													<option value="01">Abruzzo</option>
													
												
													
													<option value="02">Basilicata</option>
													
												
													
													<option value="03">P.A. di Bolzano</option>
													
												
													
													<option value="04">Calabria</option>
													
												
													
													<option value="05">Campania</option>
													
												
													
													<option value="06">Emilia Romagna</option>
													
												
													
												
													
													<option value="08">Lazio</option>
													
												
													
													<option value="09">Liguria</option>
													
												
													
													<option value="10">Lombardia</option>
													
												
													
													<option value="11">Marche</option>
													
												
													
													<option value="12">Molise</option>
													
												
													
													<option value="13">Piemonte</option>
													
												
													
													<option value="14">Puglia</option>
													
												
													
												
													
													<option value="16">Sicilia</option>
													
												
													
													<option value="17">Toscana</option>
													
												
													
													<option value="18">P.A. di Trento</option>
													
												
													
													<option value="19">Umbria</option>
													
												
													
													<option value="20">Valle d'Aosta</option></select>
										</div>
									</fieldset>
								</div>	
								<!--  style="width: 80%; height: 400px;" -->
								<div class="col-xs-10 margin-top10 hidden-xs">
							

<svg width="430" height="393">
<g transform="scale(0.35) translate(65, 0)">
<path d="M97.4,113.6L97.2,115.3L91.9,115.7L88.0,114.5L85.0,114.7L82.1,111.6L80.8,111.0L72.6,109.2L69.7,111.9L65.7,113.0L61.1,116.0L58.5,116.8L52.5,116.2L44.4,119.5L36.9,119.5L35.0,118.5L31.3,115.0L30.2,115.5L27.3,120.5L22.2,122.9L19.7,123.0L19.5,124.6L17.3,123.6L15.2,124.2L12.6,127.9L12.6,129.7L13.9,135.5L15.6,137.6L17.8,139.0L27.6,143.2L28.1,144.7L26.9,147.8L29.6,156.0L33.3,157.8L37.2,160.4L37.2,160.4L41.5,156.1L42.0,155.9L42.4,155.9L42.4,156.2L42.1,157.1L42.1,157.2L42.2,157.3L42.3,157.6L42.3,157.6L42.5,157.7L42.7,157.9L44.1,158.2L48.1,158.7L50.2,158.1L61.8,154.7L62.1,154.5L68.0,149.8L69.1,149.4L72.0,149.1L73.1,148.5L73.8,148.3L74.4,148.2L82.2,149.7L83.9,150.6L84.7,150.8L89.4,151.0L90.2,150.9L90.8,150.8L93.5,149.1L101.1,146.9L104.1,142.4L103.3,138.9L103.6,135.7L103.1,133.3L101.4,132.5L100.7,132.1L100.5,131.9L100.3,131.5L100.1,131.1L99.7,129.4L99.5,128.9L98.6,122.4L97.4,116.8L97.3,116.1L97.4,115.8L98.0,115.6L97.4,113.6L97.4,113.6Z " data-code="IT-23" data-enabled="true" fill="#b1d2e5" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Valle d'Aosta" cursor="pointer"></path>
<path d="M90.2,150.9L89.4,151.0L84.7,150.8L83.9,150.6L82.2,149.7L74.4,148.2L73.8,148.3L73.1,148.5L72.0,149.1L69.1,149.4L68.0,149.8L62.1,154.5L61.8,154.7L50.2,158.1L48.1,158.7L44.1,158.2L42.7,157.9L42.5,157.7L42.3,157.6L42.2,157.3L42.1,157.2L42.1,157.1L42.4,156.2L42.4,155.9L42.4,155.9L42.0,155.9L41.5,156.1L37.2,160.4L37.7,161.1L44.1,167.1L41.9,171.2L39.0,174.5L40.5,180.9L38.4,182.5L36.9,184.9L34.3,183.9L31.5,184.6L25.2,189.6L22.0,190.1L22.3,192.5L19.7,193.6L13.8,191.3L7.7,192.6L5.5,192.7L0.4,196.2L3.2,199.1L4.6,202.9L8.3,203.8L10.4,205.1L11.0,207.9L11.1,213.4L12.5,215.5L15.2,217.5L20.9,220.3L22.4,220.6L27.7,220.0L31.8,221.5L33.9,223.9L38.2,237.4L32.3,236.7L30.5,237.6L28.6,241.2L29.6,243.3L28.5,244.0L25.8,248.2L21.8,250.9L21.0,252.2L21.4,255.3L23.3,258.1L27.9,261.8L24.0,268.1L24.3,269.0L29.4,275.7L34.9,281.3L37.9,280.8L43.8,283.3L47.0,284.3L55.8,289.0L60.5,290.2L62.4,292.4L66.4,292.6L80.3,289.1L82.6,288.9L85.9,287.0L88.4,287.4L87.4,290.6L91.3,295.7L91.3,295.7L93.0,295.7L95.3,294.9L95.3,294.9L95.3,294.7L95.3,294.5L95.0,294.3L94.8,294.1L94.6,293.7L94.5,293.4L94.6,293.0L94.7,292.7L94.8,292.4L96.7,290.5L97.3,290.5L98.1,290.7L99.4,291.2L100.5,291.8L103.0,292.4L108.3,292.6L116.5,293.3L115.0,291.1L114.9,290.7L114.9,290.2L115.2,289.7L116.8,288.5L117.6,288.6L118.7,289.0L119.5,289.2L119.9,289.2L120.2,289.1L120.4,289.0L120.9,288.6L121.7,287.6L122.4,286.4L122.4,286.4L122.6,286.0L122.7,285.5L122.7,284.5L122.5,284.1L122.5,284.1L122.2,283.7L121.9,283.5L121.7,283.1L121.8,275.3L121.3,274.5L121.5,274.1L122.0,273.7L122.9,273.4L123.4,273.0L123.9,272.5L124.5,271.7L125.0,271.2L126.5,270.3L128.2,266.1L131.0,264.2L131.3,264.0L131.9,263.2L132.1,262.6L132.3,262.0L132.2,260.9L130.8,259.0L130.8,258.6L132.7,253.8L133.9,252.4L135.0,252.2L135.8,252.9L136.3,253.5L136.4,253.6L137.0,254.0L138.4,254.7L139.2,255.3L139.8,255.7L140.2,255.9L141.7,256.3L142.4,256.6L142.7,256.8L142.9,257.1L143.2,257.3L146.4,254.9L147.5,254.1L149.0,254.3L149.6,254.4L150.2,254.4L153.3,253.8L160.4,254.0L163.1,251.4L163.2,251.1L163.2,250.7L163.1,250.4L163.0,250.1L162.8,249.8L162.8,249.5L162.9,249.2L163.6,247.5L163.7,247.2L164.0,247.0L164.7,246.9L165.6,246.9L171.9,247.5L172.6,247.7L173.0,247.9L173.3,248.1L173.5,248.4L173.8,249.0L174.2,249.6L175.4,251.3L175.8,251.9L176.7,253.4L176.5,254.4L176.6,254.8L176.7,255.1L176.9,255.4L177.1,255.5L177.1,255.5L177.3,255.5L177.5,255.3L178.2,254.4L178.6,253.7L178.8,253.5L180.0,252.7L180.3,252.5L180.5,252.2L180.6,251.9L180.8,251.6L181.1,250.1L182.8,249.5L184.8,249.5L186.5,249.8L186.9,249.7L186.9,249.7L187.6,249.2L187.8,248.8L187.9,248.3L187.9,247.9L187.9,247.5L187.8,246.7L187.7,245.4L187.7,245.0L187.6,244.6L187.4,244.3L187.2,244.0L186.3,243.4L185.3,242.9L185.1,242.7L184.9,242.4L185.0,242.1L185.1,241.8L186.5,240.8L187.3,239.9L187.4,239.8L187.5,239.5L187.9,238.2L188.0,238.0L188.1,237.8L188.6,237.6L190.3,237.4L191.0,237.5L191.5,237.6L192.3,238.7L192.7,239.0L193.4,239.3L197.1,241.8L198.3,242.6L202.2,243.9L203.1,244.3L203.6,244.8L203.7,245.6L203.8,246.0L203.9,246.3L204.2,246.6L206.1,247.4L207.2,247.6L207.7,247.6L208.9,247.4L209.6,247.0L210.6,246.5L211.2,245.8L211.4,244.4L211.0,237.7L211.2,233.9L210.8,232.8L210.6,232.6L210.2,232.1L209.8,231.4L208.1,227.5L207.2,225.9L206.9,225.4L206.5,225.1L206.2,224.9L205.9,224.7L205.5,224.6L203.7,224.3L201.7,224.3L201.1,224.1L200.3,223.7L198.9,222.5L198.3,221.8L198.0,221.3L197.9,220.9L197.9,220.6L198.4,219.2L198.4,218.5L198.0,217.9L193.5,214.5L191.9,213.0L191.5,212.4L191.2,211.9L191.4,211.1L191.4,210.5L191.2,209.6L186.4,207.6L184.1,206.5L184.0,206.4L183.8,206.1L183.6,205.8L183.5,205.4L183.4,205.1L183.4,204.7L183.4,204.3L183.7,201.8L183.6,201.2L183.4,201.1L183.4,201.1L181.1,200.7L179.8,201.2L175.1,203.7L173.3,204.0L170.3,204.0L166.7,204.0L164.8,202.4L163.6,200.4L161.4,195.8L158.6,192.9L157.8,191.2L157.7,191.0L157.1,190.2L156.6,188.8L157.2,187.4L156.9,186.8L156.9,186.8L156.4,186.5L155.9,186.0L153.6,179.7L151.9,177.3L152.0,177.0L152.5,176.4L152.8,175.6L153.0,175.5L153.0,175.5L153.8,174.6L154.4,173.2L156.3,170.3L157.5,170.3L161.1,171.0L161.8,171.2L162.2,171.4L162.4,171.6L162.9,172.2L163.3,172.8L164.7,175.2L165.1,175.6L165.7,176.0L167.2,176.4L167.8,176.4L168.2,176.4L168.4,176.1L168.5,175.8L168.6,174.6L168.7,174.2L168.9,173.9L169.1,173.6L169.3,173.3L169.8,172.9L172.0,171.7L172.3,171.5L172.4,171.2L172.4,170.9L172.2,170.6L171.9,170.4L170.8,169.9L170.5,169.7L170.5,169.4L172.9,167.9L178.2,166.2L176.7,164.6L176.4,164.2L173.0,157.7L172.7,157.6L171.1,157.1L169.3,155.9L168.8,155.3L167.3,151.0L167.4,150.0L166.6,146.9L166.4,146.5L164.1,144.3L163.8,143.7L163.8,143.3L164.1,143.3L164.5,143.3L164.9,143.3L165.2,142.8L165.1,142.4L164.8,141.8L164.7,141.3L164.6,140.7L164.6,140.0L164.5,139.7L164.1,139.6L164.1,139.6L163.3,139.7L162.9,139.6L162.4,139.2L162.1,138.8L162.1,138.4L162.3,137.6L162.4,137.1L162.4,136.1L162.2,135.6L161.9,135.3L161.3,135.0L159.6,134.6L155.5,127.0L155.7,126.7L157.3,125.4L157.5,125.2L157.7,124.9L157.8,124.6L157.5,120.7L156.9,118.8L156.7,116.1L156.9,115.8L166.7,106.4L167.0,106.0L167.2,105.5L167.6,104.3L167.6,103.6L167.6,103.0L166.9,96.9L166.5,96.8L164.3,98.2L162.9,98.2L156.7,95.5L149.1,87.0L146.8,86.1L142.3,82.7L143.1,72.6L142.7,64.5L141.5,63.2L134.8,63.6L131.0,66.2L131.4,69.2L129.3,71.6L127.1,72.6L123.3,77.0L121.7,78.0L115.1,80.7L114.3,81.7L118.7,88.2L119.1,91.9L117.5,95.1L110.8,98.6L109.0,106.6L108.0,107.7L101.1,109.4L100.0,110.2L99.0,113.5L97.4,113.6L98.0,115.6L97.4,115.8L97.3,116.1L97.4,116.8L98.6,122.4L99.5,128.9L99.7,129.4L100.1,131.1L100.3,131.5L100.5,131.9L100.7,132.1L101.4,132.5L103.1,133.3L103.6,135.7L103.3,138.9L104.1,142.4L101.1,146.9L93.5,149.1L90.8,150.8L90.2,150.9Z " data-code="IT-21" data-enabled="true" fill="#b1d2e5" fill-opacity="1" stroke="#fefefe" stroke-width="2" data-name="Piemonte" cursor="pointer"></path>
<path d="M485.9,460.1L485.9,459.5L483.3,458.8L480.9,455.4L476.6,452.6L474.7,452.0L473.2,452.8L472.7,452.1L471.2,449.9L470.9,448.2L470.6,447.0L470.6,445.7L470.4,445.3L470.1,445.3L469.7,445.4L469.4,445.3L468.2,443.4L468.3,442.1L467.0,437.3L465.8,436.7L465.7,436.5L464.4,436.6L460.4,434.5L460.1,434.5L459.8,434.6L459.6,434.8L459.0,435.7L458.8,435.9L458.6,436.1L458.3,436.3L457.9,436.4L457.4,436.3L455.8,436.0L455.4,436.0L453.0,436.5L450.6,437.4L450.3,437.5L449.9,437.5L449.4,437.2L447.3,435.1L443.4,432.9L441.8,431.2L442.3,429.3L442.9,429.0L443.8,428.5L444.6,427.9L445.0,427.0L445.0,426.2L444.8,425.7L444.8,425.7L443.9,425.1L442.9,424.6L441.6,423.2L437.7,417.4L433.8,418.8L433.2,419.1L431.3,421.0L430.7,421.2L430.3,421.2L429.7,420.7L429.3,420.4L428.5,420.2L428.1,420.3L427.7,420.5L426.8,421.5L426.6,421.7L426.4,422.5L428.7,424.2L429.0,424.6L429.8,426.3L431.3,427.5L430.8,430.2L430.5,430.4L430.3,431.0L430.2,432.1L430.6,435.0L430.6,436.1L430.4,436.9L430.1,437.1L429.8,437.2L428.5,437.4L428.2,437.5L428.0,437.6L427.8,437.7L427.6,437.9L427.5,438.2L426.9,439.6L426.6,440.0L426.4,440.4L425.9,440.8L425.3,441.1L423.9,441.6L423.5,441.8L423.1,442.1L417.4,445.9L416.1,445.0L416.1,445.0L415.7,444.9L415.3,445.0L414.4,446.0L414.5,446.3L414.7,446.7L414.8,447.1L414.8,447.6L414.6,448.2L413.5,449.3L413.2,449.8L413.2,450.2L413.3,450.5L413.6,450.7L416.0,452.3L416.5,452.7L416.7,453.0L416.9,453.5L416.9,454.3L416.8,455.7L416.7,456.4L416.4,456.9L416.2,457.2L415.9,457.3L415.5,457.5L408.1,458.2L407.7,458.4L407.2,458.6L406.5,459.0L406.2,459.4L406.0,459.8L404.6,464.1L404.6,464.1L407.7,465.6L411.8,466.6L421.9,473.5L424.0,476.1L428.9,484.3L429.8,487.5L432.9,491.8L434.0,492.6L437.1,497.6L444.4,497.2L450.7,501.3L453.1,501.6L455.7,504.9L464.0,510.5L468.1,516.0L469.2,518.0L470.2,523.8L471.0,525.6L473.0,527.2L475.5,527.7L479.7,529.4L490.1,537.4L498.5,546.0L505.1,554.4L506.4,555.5L507.9,553.7L509.9,554.5L515.9,557.9L523.5,558.4L525.2,558.9L530.5,562.2L536.5,568.6L540.2,574.4L541.3,577.3L545.1,577.4L546.9,575.0L549.8,574.1L554.1,571.8L560.7,570.6L563.9,570.7L577.0,576.2L579.3,577.9L579.8,577.1L582.4,579.4L583.8,576.3L586.3,574.8L591.3,574.2L596.7,574.9L598.6,576.3L598.6,576.3L600.0,575.5L603.6,574.7L604.0,574.4L604.1,573.2L604.4,572.5L604.8,572.1L606.8,571.3L608.3,569.6L608.4,569.2L608.3,568.0L608.6,566.6L608.2,564.4L608.5,562.1L608.5,561.4L608.5,560.9L607.0,558.3L607.5,557.5L611.0,556.0L611.1,555.9L613.2,553.9L613.7,553.5L614.3,553.3L615.1,553.2L616.7,551.7L616.7,550.9L616.5,550.6L618.4,548.4L618.7,547.9L618.7,547.9L618.7,547.5L618.5,547.1L618.4,546.7L618.4,545.1L618.3,544.5L618.1,544.1L617.9,543.9L617.5,543.7L617.3,543.1L617.1,542.1L616.9,538.7L616.8,538.0L616.6,537.6L615.5,536.0L614.8,534.3L614.6,534.0L614.4,533.8L613.5,533.1L613.0,532.6L612.4,531.7L607.8,528.2L606.2,527.5L602.7,526.7L601.0,525.7L600.1,525.4L599.6,525.3L599.3,525.5L599.0,525.7L598.6,525.8L598.0,525.9L596.7,525.7L596.0,525.4L595.5,525.2L595.3,524.9L595.1,524.6L594.7,524.0L594.2,522.7L594.0,522.2L593.6,521.8L592.9,521.2L587.9,519.8L587.2,519.6L586.0,520.4L584.7,521.8L583.5,522.9L581.9,523.7L580.6,523.8L579.1,523.8L578.4,523.7L577.8,523.6L577.5,523.4L577.2,523.2L576.9,522.9L576.7,522.6L576.6,522.4L576.5,522.0L576.0,521.6L575.4,521.1L567.3,517.6L566.9,517.5L566.4,517.5L566.0,517.6L565.0,517.8L564.2,518.0L563.7,517.9L563.1,517.0L563.0,516.6L563.0,516.2L563.0,513.6L563.8,511.7L563.9,511.3L564.0,510.9L564.0,510.5L563.8,510.1L563.4,509.6L562.5,508.9L561.5,508.6L560.6,508.1L559.4,506.8L557.8,506.2L557.8,506.2L557.6,506.2L556.4,506.2L540.9,498.6L539.8,499.1L538.9,499.1L537.0,498.7L535.9,498.2L535.3,497.8L535.0,497.5L534.9,497.2L534.3,495.9L534.2,495.6L536.6,488.6L538.3,487.0L540.2,483.9L546.4,485.9L547.8,486.6L549.3,487.6L549.8,487.8L550.4,488.0L551.5,488.2L552.1,488.2L552.1,488.2L552.6,488.1L553.2,487.6L553.6,487.3L554.0,487.4L554.8,487.8L555.6,488.0L556.8,487.6L557.0,487.4L557.2,487.1L557.3,486.9L556.9,485.7L556.8,485.3L556.8,484.9L557.1,484.5L558.0,484.0L561.1,483.4L561.8,483.1L562.1,482.7L561.9,482.5L561.6,482.3L561.2,482.2L560.8,482.1L559.4,482.1L558.5,481.9L558.2,481.8L557.9,481.6L557.7,481.3L557.5,481.0L557.3,480.3L557.2,479.9L553.6,478.0L552.5,476.2L550.1,474.2L549.7,473.6L549.4,472.9L549.2,472.2L548.8,470.7L548.7,470.4L548.5,470.1L548.1,469.6L547.5,469.1L546.6,468.5L544.5,467.6L544.2,467.4L543.8,466.6L543.7,465.7L544.0,464.8L545.1,462.8L545.4,462.1L541.8,459.6L541.0,457.1L541.2,456.2L541.4,455.9L542.5,455.2L543.7,453.7L543.8,453.2L543.8,452.7L543.6,452.1L543.6,451.9L543.6,451.2L543.6,450.9L543.4,450.6L543.2,450.3L543.0,450.0L542.7,449.8L541.0,447.6L541.8,447.0L543.6,446.7L544.0,446.1L544.2,445.4L544.4,444.1L544.5,443.6L544.8,443.2L545.2,443.2L548.5,443.9L550.8,443.9L556.5,444.6L556.9,444.5L557.3,444.4L559.7,443.3L560.2,441.6L560.2,441.6L560.9,438.9L560.9,438.3L560.8,437.6L560.5,437.4L560.2,437.2L559.5,436.9L558.6,436.7L557.6,436.1L557.2,435.7L556.7,435.1L556.5,434.5L556.4,434.1L556.6,433.3L554.3,430.2L553.6,429.6L551.8,428.2L551.1,427.9L550.5,427.7L549.2,428.4L548.9,428.6L548.5,428.6L544.6,428.7L543.9,429.8L543.9,430.2L543.8,430.6L543.9,431.0L544.0,431.4L544.3,432.0L544.3,433.1L544.2,433.4L542.7,435.6L542.4,436.6L542.2,437.0L542.0,437.2L541.8,437.5L541.5,437.7L541.0,437.8L539.6,437.5L539.0,437.4L538.5,437.6L534.3,439.6L531.2,438.7L530.8,438.8L530.5,439.3L530.2,439.7L528.6,441.2L521.5,441.0L519.8,442.9L519.8,442.9L519.7,443.8L520.0,445.4L519.2,445.9L512.1,449.1L511.8,449.4L511.0,451.0L510.8,451.2L510.4,451.6L510.3,451.7L507.5,452.1L507.2,452.3L507.3,453.5L507.3,453.5L508.0,454.7L508.1,455.0L508.2,455.4L508.1,455.7L501.4,457.1L500.2,455.5L499.9,455.2L499.6,455.1L498.8,455.4L498.5,456.0L498.8,457.1L498.9,457.5L498.9,457.9L498.9,458.3L498.6,459.4L498.4,460.0L497.5,461.5L493.2,464.6L492.0,464.0L490.8,462.6L490.4,462.5L487.2,462.9L485.7,462.8L485.0,462.7L485.5,460.5L485.9,460.1Z M489.0,510.5L489.0,510.4L489.0,510.4L489.0,510.5Z M575.2,620.8L574.6,620.3L574.3,621.3L575.2,620.8Z M536.2,611.7L536.3,609.6L538.6,606.6L535.1,608.1L534.7,609.9L536.2,611.7Z " data-code="IT-62" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Lazio" cursor="pointer"></path>
<path d="M166.9,96.9L167.6,103.0L167.6,103.6L167.6,104.3L167.2,105.5L167.0,106.0L166.7,106.4L156.9,115.8L156.7,116.1L156.9,118.8L157.5,120.7L157.8,124.6L157.7,124.9L157.5,125.2L157.3,125.4L155.7,126.7L155.5,127.0L155.3,127.3L159.6,134.6L161.3,135.0L161.9,135.3L162.2,135.6L162.4,136.1L162.4,137.1L162.3,137.6L162.1,138.4L162.1,138.8L162.4,139.2L162.9,139.6L163.3,139.7L164.5,139.7L164.6,140.0L164.7,141.3L164.8,141.8L165.1,142.4L165.2,142.8L164.9,143.3L164.5,143.3L164.1,143.3L163.8,143.3L163.8,143.7L164.1,144.3L166.4,146.5L166.6,146.9L167.4,150.0L167.3,151.0L168.8,155.3L169.3,155.9L171.1,157.1L172.7,157.6L173.0,157.7L176.4,164.2L176.7,164.6L178.2,166.2L172.9,167.9L170.5,169.4L170.5,169.7L170.8,169.9L171.9,170.4L172.2,170.6L172.4,170.9L172.4,171.2L172.3,171.5L172.0,171.7L169.8,172.9L169.3,173.3L169.1,173.6L168.9,173.9L168.7,174.2L168.6,174.6L168.5,175.8L168.4,176.1L168.2,176.4L167.8,176.4L167.2,176.4L165.7,176.0L165.1,175.6L164.7,175.2L163.3,172.8L162.9,172.2L162.4,171.6L162.2,171.4L161.8,171.2L161.1,171.0L157.5,170.3L156.3,170.3L156.3,170.3L154.4,173.2L153.8,174.6L153.0,175.5L153.0,175.5L152.8,175.6L152.5,176.4L152.0,177.0L151.9,177.3L153.6,179.7L155.9,186.0L156.4,186.5L156.9,186.8L157.2,187.4L156.6,188.8L157.1,190.2L157.7,191.0L157.8,191.2L158.6,192.9L161.4,195.8L163.6,200.4L164.8,202.4L166.7,204.0L170.3,204.0L170.3,204.0L173.3,204.0L175.1,203.7L179.8,201.2L181.1,200.7L183.4,201.1L183.6,201.2L183.7,201.8L183.4,204.3L183.4,204.7L183.4,205.1L183.5,205.4L183.6,205.8L183.8,206.1L184.0,206.4L184.1,206.5L184.1,206.5L186.4,207.6L191.2,209.6L191.4,210.5L191.4,211.1L191.2,211.9L191.5,212.4L191.9,213.0L193.5,214.5L198.0,217.9L198.4,218.5L198.4,219.2L197.9,220.6L197.9,220.9L198.0,221.3L198.3,221.8L198.9,222.5L200.3,223.7L201.1,224.1L201.7,224.3L203.7,224.3L205.5,224.6L205.9,224.7L206.2,224.9L206.5,225.1L206.9,225.4L207.2,225.9L208.1,227.5L209.8,231.4L210.2,232.1L210.6,232.6L210.8,232.8L211.2,233.9L211.0,237.7L213.5,238.0L214.3,237.6L214.4,236.9L214.9,234.4L215.1,234.5L215.3,234.8L215.8,235.8L216.2,236.1L216.9,236.3L218.3,236.5L219.0,236.5L219.6,236.4L220.0,236.1L220.4,235.6L220.6,235.2L220.7,234.7L220.6,234.3L220.2,232.9L219.1,230.1L219.4,229.3L219.9,228.1L221.7,225.5L222.7,223.5L222.9,221.0L222.9,220.5L222.8,220.1L222.2,219.3L221.6,218.9L220.1,218.3L219.4,218.0L219.1,217.8L218.6,217.3L218.4,217.1L218.2,216.6L218.1,216.0L218.1,215.0L218.8,213.0L219.4,212.1L224.0,202.0L226.3,198.4L227.1,196.4L230.8,196.4L232.5,196.2L233.2,196.3L234.1,196.4L235.8,197.7L236.6,197.9L236.6,197.9L236.2,194.2L236.4,193.5L240.3,195.3L241.3,194.8L242.2,194.0L243.3,193.8L244.3,194.0L244.4,194.4L244.1,194.9L243.9,195.4L244.0,196.7L244.2,197.2L245.2,197.8L247.8,199.0L251.1,199.3L253.5,198.3L253.4,195.8L253.6,195.6L253.7,195.7L253.8,195.6L253.8,195.6L253.8,195.1L254.3,195.1L255.2,196.4L258.3,198.1L260.1,199.7L260.6,199.1L260.3,198.2L259.7,196.9L260.4,196.7L263.8,197.4L265.0,197.4L265.2,196.6L264.0,194.8L263.7,193.2L265.4,192.8L267.0,193.6L266.5,195.8L272.1,193.7L275.0,195.6L277.2,199.9L279.4,202.7L282.0,203.0L288.3,201.8L291.6,202.7L300.1,207.3L302.0,208.0L305.9,207.3L307.1,207.9L308.6,211.2L309.7,212.6L312.6,214.0L316.1,214.7L319.7,214.7L322.5,214.1L324.9,212.4L327.3,209.8L328.5,207.7L329.5,207.4L329.8,207.5L330.2,207.7L333.4,207.9L334.5,208.7L335.1,210.9L335.0,211.2L335.0,211.5L335.0,211.5L335.2,211.8L335.5,212.0L343.2,213.6L343.8,213.8L344.4,214.2L344.7,214.4L345.6,214.9L348.2,214.2L350.1,213.2L353.3,212.2L353.7,211.6L353.9,211.4L354.1,211.2L354.3,211.0L361.0,210.2L366.4,211.9L366.7,212.2L367.4,212.9L367.6,213.2L369.4,213.1L375.1,211.6L376.6,212.1L376.9,212.1L377.5,211.7L377.8,210.9L378.7,210.3L384.2,210.5L388.3,211.4L388.0,209.7L385.5,209.0L378.6,205.1L375.9,203.1L375.7,200.5L371.0,200.6L369.5,200.2L369.5,200.0L369.0,197.8L369.0,197.5L369.1,197.2L369.4,196.9L370.5,196.1L369.9,195.3L369.9,195.3L367.4,194.7L366.5,194.6L366.0,194.7L365.7,194.9L365.2,195.1L364.6,195.3L362.3,195.5L362.1,195.7L361.8,195.9L361.5,196.3L360.9,196.6L360.4,196.7L359.8,196.6L359.2,196.3L358.8,196.0L357.7,194.9L357.3,194.0L357.3,193.6L357.4,193.3L357.7,192.7L357.8,192.3L357.7,191.9L357.3,191.4L357.3,191.4L353.8,191.3L353.5,191.1L353.3,189.9L353.5,189.2L353.6,189.0L353.6,188.7L353.5,188.3L353.2,188.0L352.6,187.3L352.1,187.0L351.4,186.7L348.7,185.8L340.6,180.5L340.4,180.2L336.8,176.6L333.9,177.3L331.6,175.3L328.2,174.8L328.8,171.5L329.6,170.8L329.6,170.2L328.5,169.6L328.2,168.7L328.3,166.8L328.0,164.7L328.0,164.7L326.8,164.6L326.8,164.6L323.8,164.0L323.4,162.9L323.2,162.2L323.2,161.7L323.4,161.1L323.6,161.0L323.5,157.3L322.4,150.9L322.3,148.1L322.4,146.3L330.0,135.6L331.1,134.4L332.8,131.8L333.8,129.2L334.2,128.5L337.3,124.1L335.8,123.4L334.7,123.0L334.4,122.9L333.6,122.9L331.1,123.3L330.6,123.3L330.2,123.2L329.2,122.7L328.8,122.6L328.4,122.6L327.9,122.6L326.4,123.0L325.9,123.1L324.7,123.0L324.3,123.1L324.3,123.1L324.1,123.3L323.9,123.6L323.7,123.9L323.7,124.3L323.6,125.1L323.6,125.4L323.5,125.8L323.3,126.0L323.1,126.3L322.7,126.5L322.4,126.6L321.5,126.7L319.5,126.6L319.1,126.6L318.8,126.8L317.8,127.7L317.5,127.9L316.3,128.0L315.5,127.7L314.5,127.1L314.4,126.7L314.6,125.5L314.5,125.0L314.1,124.7L313.7,124.5L311.8,123.8L311.5,123.3L310.6,120.9L310.1,119.8L310.0,119.3L310.1,118.7L310.4,117.7L310.8,116.7L310.9,116.3L310.9,115.9L310.6,115.3L309.8,114.3L309.1,111.1L308.9,110.8L308.7,110.7L307.0,110.3L306.6,110.2L306.3,110.0L306.0,109.7L305.8,109.5L305.7,109.1L305.7,108.5L305.9,107.8L306.3,106.5L308.0,105.0L308.3,104.3L308.6,103.3L309.0,101.1L309.4,100.1L309.7,99.5L310.2,99.1L312.5,97.1L312.7,96.8L312.8,96.5L312.9,96.0L313.2,92.1L313.0,89.6L313.1,89.0L313.3,88.5L313.9,87.2L314.9,84.5L314.8,83.8L313.7,79.7L313.6,77.0L309.3,73.7L311.1,71.5L316.4,70.4L317.2,69.7L317.4,69.4L317.9,68.1L317.8,66.9L317.0,64.0L316.7,63.3L311.9,60.0L309.7,59.1L305.8,58.6L305.4,58.3L304.9,57.9L302.7,53.9L302.2,53.5L301.6,54.3L300.2,54.6L284.8,50.6L284.7,47.5L283.2,45.5L281.1,45.5L272.7,48.5L271.8,51.7L268.9,54.8L269.0,57.7L270.2,61.4L268.8,63.4L270.2,64.8L278.2,67.7L277.7,69.9L275.0,72.8L274.6,74.1L275.8,77.0L279.2,79.9L280.3,81.6L279.4,83.5L273.9,85.8L271.3,85.8L270.2,81.9L265.1,75.9L264.9,74.0L262.3,71.2L260.6,70.9L255.6,71.3L250.4,73.6L244.1,73.7L244.2,76.8L241.5,78.7L232.4,78.6L227.7,75.9L223.4,70.9L222.7,68.4L221.8,58.9L220.9,58.4L217.6,61.4L213.2,57.9L209.3,58.3L206.6,61.9L206.1,64.4L209.4,73.5L209.1,77.0L207.0,81.2L205.3,85.7L202.6,87.4L201.9,89.6L195.7,94.0L194.3,95.9L194.1,100.6L188.8,104.9L190.3,108.3L187.8,111.4L189.5,114.0L194.5,117.6L194.3,119.3L192.5,122.7L190.0,125.4L185.0,124.0L181.8,124.8L182.7,120.9L182.5,119.2L177.9,111.9L173.2,109.8L170.6,109.3L172.3,105.8L174.5,103.4L175.5,101.1L173.4,98.8L166.9,96.9L166.9,96.9Z " data-code="IT-25" data-enabled="true" fill="#b1d2e5" fill-opacity="1" stroke="#fefefe" stroke-width="0" stroke-opacity="1" data-name="Lombardia" cursor="pointer"></path>
<path d="M471.3,343.9L471.5,343.2L471.6,342.8L471.6,342.4L471.5,342.0L471.2,341.8L470.8,341.9L467.6,343.0L467.6,343.0L467.3,343.1L467.1,343.3L466.9,343.6L466.6,344.3L466.3,344.6L465.7,344.7L462.3,343.2L461.6,343.1L459.4,342.8L459.0,342.2L455.3,348.9L454.0,350.6L453.6,350.7L452.6,350.8L452.0,350.9L451.2,351.4L450.9,351.9L450.8,352.3L451.0,352.6L451.2,352.9L451.5,353.0L453.0,353.6L453.6,354.0L453.8,354.4L454.0,354.8L454.0,355.5L453.8,355.9L453.6,356.1L451.6,357.1L450.1,358.9L449.7,359.3L449.3,359.3L448.7,359.5L448.1,359.8L447.0,360.8L446.6,361.4L446.5,361.8L446.5,361.8L446.8,362.1L447.1,362.3L447.1,362.3L447.5,362.3L449.2,362.2L449.5,362.4L449.7,362.7L449.8,363.3L449.7,364.9L450.1,366.0L450.3,366.2L450.3,366.2L453.6,367.1L454.3,367.4L454.6,367.7L454.9,368.3L455.0,369.3L455.1,371.6L455.2,372.6L455.5,373.3L455.8,373.5L456.6,373.7L459.0,372.9L459.4,371.9L459.8,371.5L460.2,371.4L460.6,371.5L461.5,374.1L456.6,377.1L454.7,377.1L452.7,378.5L452.3,378.6L452.0,378.7L451.6,378.7L450.7,378.5L448.5,377.6L448.0,377.6L447.5,377.7L446.8,378.1L446.5,378.5L446.4,379.0L446.0,381.9L445.9,382.6L445.5,383.4L444.9,384.0L444.3,384.4L442.0,385.0L441.3,385.4L441.1,385.6L440.4,386.2L438.8,389.2L438.5,390.7L438.6,391.1L438.7,391.5L438.8,391.8L439.0,392.1L439.2,392.7L439.3,393.5L439.6,395.2L439.8,396.0L440.1,396.4L440.4,396.5L441.4,395.7L441.7,395.5L442.0,395.4L442.5,395.5L443.0,395.9L443.5,396.9L443.7,397.6L443.8,398.1L443.8,399.9L443.7,400.3L443.6,400.7L443.4,401.4L443.3,401.6L441.6,405.9L441.2,407.1L441.2,407.1L440.8,409.8L440.8,410.5L441.0,411.0L442.0,411.7L442.4,412.3L442.5,413.2L442.4,413.5L442.3,413.9L442.1,414.2L441.9,414.4L441.4,415.0L441.0,415.3L437.7,417.4L441.6,423.2L442.9,424.6L443.9,425.1L444.8,425.7L445.0,426.2L445.0,427.0L444.6,427.9L443.8,428.5L442.9,429.0L442.3,429.3L441.8,431.2L443.4,432.9L447.3,435.1L449.4,437.2L449.9,437.5L450.3,437.5L450.6,437.4L453.0,436.5L455.4,436.0L455.8,436.0L457.4,436.3L457.9,436.4L458.3,436.3L458.6,436.1L458.8,435.9L459.0,435.7L459.6,434.8L459.8,434.6L460.1,434.5L460.4,434.5L464.4,436.6L465.7,436.5L465.8,436.7L467.0,437.3L468.3,442.1L468.2,443.4L469.4,445.3L469.7,445.4L469.7,445.4L469.7,445.4L470.1,445.3L470.4,445.3L470.6,445.7L470.6,447.0L470.9,448.2L471.2,449.9L472.7,452.1L473.2,452.8L473.2,452.8L474.7,452.0L476.6,452.6L480.9,455.4L483.3,458.8L485.9,459.5L485.9,460.1L485.5,460.5L485.0,462.7L485.7,462.8L487.1,462.9L487.2,462.9L490.4,462.5L490.8,462.6L492.0,464.0L493.2,464.6L497.5,461.5L498.4,460.0L498.6,459.4L498.9,458.3L498.9,457.9L498.9,457.5L498.8,457.1L498.5,456.0L498.8,455.4L499.6,455.1L499.9,455.2L500.2,455.5L501.4,457.1L508.1,455.7L508.2,455.4L508.2,455.4L508.1,455.0L507.2,452.3L510.3,451.7L510.4,451.6L510.8,451.2L511.0,451.0L511.8,449.4L512.1,449.1L519.2,445.9L520.0,445.4L519.7,443.8L519.8,442.9L521.5,441.0L528.6,441.2L530.2,439.7L530.5,439.3L530.8,438.8L531.2,438.7L534.3,439.6L538.5,437.6L539.0,437.4L539.6,437.5L541.0,437.8L541.5,437.7L541.8,437.5L542.0,437.2L542.2,437.0L542.4,436.6L542.7,435.6L544.2,433.4L544.3,433.1L544.3,432.0L544.0,431.4L543.9,431.0L543.8,430.6L543.9,430.2L543.9,429.8L544.6,428.7L544.5,427.3L544.9,426.6L545.2,426.2L545.6,426.2L546.0,426.3L546.5,426.4L547.0,426.4L548.0,426.1L548.5,425.8L548.8,425.5L548.9,425.2L549.3,423.1L549.3,422.5L549.2,422.1L549.2,421.7L548.9,421.0L548.3,419.7L547.6,418.5L547.4,418.3L547.2,418.0L546.4,417.6L541.8,419.9L540.2,419.3L540.0,418.6L539.8,418.3L539.7,418.0L539.3,417.5L536.5,414.8L536.1,414.3L535.2,413.6L533.4,412.4L532.3,411.3L531.6,410.7L531.2,410.6L530.8,410.7L527.3,410.8L526.8,411.0L526.6,411.2L526.6,411.5L526.7,411.9L527.0,412.5L527.2,412.8L527.1,413.2L526.7,413.5L526.0,413.7L525.6,413.6L525.3,413.3L525.3,412.9L525.2,411.3L524.9,410.2L524.7,409.9L521.8,407.8L520.3,406.3L519.8,405.5L519.6,404.8L519.5,403.9L519.4,403.5L519.3,403.2L518.9,402.6L518.7,401.6L518.7,400.8L518.7,400.4L518.7,400.1L518.6,399.9L518.2,398.7L518.0,397.5L518.0,396.7L518.1,395.0L515.1,390.4L513.8,390.2L513.4,390.0L513.2,389.7L512.8,388.7L512.8,388.3L513.6,387.3L514.0,386.8L514.3,386.2L514.4,385.8L514.5,385.5L514.5,385.1L514.5,384.6L514.3,383.9L513.9,382.5L513.8,382.2L509.5,376.3L508.9,375.4L508.8,374.6L508.8,373.3L508.5,371.9L508.3,371.3L508.1,370.9L505.0,366.9L504.6,366.1L504.7,362.8L504.7,362.0L504.7,361.5L504.6,360.8L504.8,359.5L504.9,359.1L504.8,357.5L500.8,358.4L500.5,358.7L499.9,359.7L499.5,360.1L495.7,359.2L494.6,359.4L494.0,360.1L493.3,360.6L492.9,360.6L492.5,360.5L484.4,352.4L482.5,351.5L478.7,350.1L477.8,349.9L477.4,350.0L477.1,350.1L476.8,350.3L476.4,350.8L476.1,351.1L475.6,351.3L474.8,351.5L473.9,351.3L468.7,349.1L468.1,348.8L467.4,347.6L468.1,347.0L470.6,347.1L470.9,347.0L471.1,346.7L471.5,345.8L471.6,345.4L471.5,345.1L471.2,344.5L471.2,344.2L471.3,343.9Z M478.5,342.8L478.3,341.9L477.8,341.2L476.1,341.1L476.1,341.1L475.6,341.8L475.5,342.9L478.5,343.8L478.5,342.8Z " data-code="IT-55" data-enabled="true" fill="#b1d2e5" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Umbria" cursor="pointer"></path>
<path d="M441.3,385.4L442.0,385.0L444.3,384.4L444.9,384.0L445.5,383.4L445.9,382.6L446.0,381.9L446.4,379.0L446.5,378.5L446.8,378.1L447.5,377.7L448.0,377.6L448.5,377.6L450.7,378.5L451.6,378.7L452.0,378.7L452.3,378.6L452.7,378.5L454.7,377.1L456.6,377.1L460.5,375.0L461.5,374.1L460.6,371.5L460.2,371.4L459.8,371.5L459.4,371.9L459.0,372.9L456.6,373.7L455.8,373.5L455.5,373.3L455.2,372.6L455.1,371.6L455.0,369.3L454.9,368.3L454.6,367.7L454.3,367.4L453.6,367.1L450.3,366.2L450.1,366.0L449.7,364.9L449.8,363.3L449.7,362.7L449.5,362.4L449.2,362.2L447.5,362.3L447.1,362.3L446.8,362.1L446.5,361.8L446.6,361.4L447.0,360.8L448.1,359.8L448.7,359.5L449.3,359.3L449.7,359.3L450.1,358.9L451.6,357.1L453.6,356.1L453.8,355.9L454.0,355.5L454.0,354.8L453.8,354.4L453.6,354.0L453.0,353.6L451.5,353.0L451.2,352.9L451.0,352.6L450.8,352.3L450.9,351.9L451.2,351.4L452.0,350.9L452.6,350.8L453.6,350.7L454.0,350.6L455.3,348.9L459.0,342.2L457.9,339.5L458.0,339.1L458.4,338.5L459.5,338.1L461.9,336.1L462.3,335.8L463.7,335.4L464.5,335.1L466.6,331.1L466.8,331.4L466.9,331.7L467.4,334.8L467.6,335.2L467.8,335.5L468.3,335.7L468.6,335.6L469.1,335.1L469.5,334.4L470.6,333.0L470.8,332.3L470.8,331.8L470.8,331.8L466.3,328.3L465.1,327.5L464.7,327.3L464.4,327.2L463.2,327.1L462.9,327.2L462.2,327.9L461.8,328.0L461.4,328.0L459.7,327.8L458.6,328.1L458.3,328.3L457.6,329.4L457.4,329.6L457.1,329.8L456.7,329.9L456.3,329.8L455.9,329.7L455.5,329.5L454.4,328.6L453.8,328.2L453.0,327.9L452.2,327.8L451.7,327.8L450.9,327.9L447.1,328.7L439.0,326.9L431.2,322.6L427.5,322.2L423.7,319.6L419.4,317.5L417.3,315.9L417.1,312.5L415.1,310.7L415.1,310.2L415.2,308.8L412.9,306.6L412.3,306.0L412.1,305.5L412.0,305.1L412.0,304.7L412.0,303.4L414.4,302.3L414.6,302.0L415.4,300.9L415.6,300.5L415.6,300.5L416.0,299.4L417.2,297.8L417.4,297.3L417.6,296.6L417.9,295.3L418.5,294.0L418.8,293.6L419.1,292.7L419.1,292.2L419.0,291.9L418.6,291.7L418.2,291.7L417.8,291.6L417.1,291.7L416.9,291.7L416.9,291.7L414.6,291.8L413.6,292.1L411.6,293.0L410.9,293.1L410.0,293.1L407.5,292.6L406.7,292.3L406.2,292.0L406.2,291.7L406.6,291.1L407.6,290.3L407.9,289.7L407.8,289.3L407.3,288.7L405.3,287.7L404.7,287.6L403.9,288.3L403.5,288.5L403.1,288.7L401.1,288.7L401.1,288.7L400.3,288.8L398.6,288.3L394.6,284.6L394.1,283.9L393.1,282.4L392.0,281.9L391.5,281.7L389.4,282.4L388.8,283.6L385.9,284.2L385.3,284.4L385.0,284.7L384.9,284.9L384.8,285.1L384.4,285.6L382.0,287.9L381.2,288.1L375.0,289.1L374.8,289.3L374.6,289.6L374.5,289.9L374.5,290.2L374.6,290.6L374.8,290.9L375.1,291.1L375.4,291.3L376.1,291.6L378.8,292.6L379.1,292.8L379.4,293.0L379.5,293.3L376.2,294.6L374.8,294.4L359.5,294.4L359.0,293.3L359.2,293.0L359.7,292.4L360.0,292.1L360.1,291.6L359.9,291.2L359.5,290.9L359.0,290.9L358.7,290.8L357.6,292.1L357.6,292.3L357.4,292.5L356.7,293.2L356.4,293.4L355.8,294.6L352.8,298.0L352.5,298.0L352.2,297.9L350.7,297.3L350.1,296.9L349.3,296.2L349.0,296.0L347.2,295.4L346.8,295.2L346.6,294.9L346.3,294.7L345.5,294.0L343.9,293.5L343.9,293.5L342.7,293.1L337.1,289.5L334.9,288.8L330.3,289.2L329.9,289.3L329.2,289.6L328.9,289.8L328.7,290.0L328.6,290.3L328.2,291.3L327.8,291.8L327.3,292.3L325.0,292.6L324.0,292.3L320.0,289.4L316.5,286.0L316.4,285.7L316.3,285.4L316.2,285.0L316.0,283.7L315.5,282.6L311.1,282.0L309.7,281.5L309.5,281.3L307.3,278.8L301.1,277.0L300.4,277.0L297.4,278.2L295.7,277.0L294.7,275.9L292.2,273.1L290.7,272.6L287.9,271.1L287.9,271.1L286.7,270.5L283.8,270.4L282.7,270.1L281.0,268.4L275.9,264.8L275.4,264.2L275.4,263.8L275.5,263.5L275.8,263.3L276.5,262.9L276.5,262.9L276.7,262.6L276.7,262.2L276.3,261.4L276.0,261.0L275.6,260.7L271.1,258.5L267.9,257.6L265.5,257.3L264.9,257.3L264.4,257.3L263.7,257.6L261.9,259.1L260.5,261.0L257.4,264.5L257.3,264.8L257.3,264.8L257.1,265.1L256.8,266.2L256.7,266.5L256.4,266.7L256.0,266.8L253.8,267.5L252.5,267.7L252.2,267.9L251.9,268.1L251.6,269.0L251.8,269.6L254.1,272.3L257.1,274.7L264.2,278.9L264.9,279.4L265.4,279.9L265.5,280.2L265.6,280.6L265.6,281.0L265.6,281.4L265.6,281.8L265.7,282.2L266.2,284.1L266.2,285.7L266.3,286.2L266.5,286.4L266.8,286.4L267.1,286.3L267.3,286.0L267.9,284.8L268.3,284.6L268.8,284.6L269.7,285.0L270.1,285.5L269.4,288.1L269.6,288.3L269.8,288.5L270.5,288.6L271.3,288.6L272.8,288.4L273.4,288.4L274.1,288.5L275.2,289.0L275.8,289.3L276.2,289.6L276.3,289.9L276.4,290.3L276.3,290.7L276.4,291.2L276.4,291.2L276.4,291.8L276.8,292.7L277.2,293.1L277.6,293.4L278.1,293.3L278.8,293.1L279.4,293.2L280.2,293.4L281.7,294.4L282.4,294.9L282.7,295.4L282.7,295.8L282.5,296.1L282.4,296.4L281.7,297.2L281.7,297.2L281.2,298.1L280.9,298.7L280.8,299.2L280.6,299.8L281.2,300.0L287.0,303.0L289.7,306.7L293.4,309.0L295.9,312.5L299.6,319.7L300.8,323.3L304.5,346.9L306.7,354.4L316.9,364.6L325.0,378.5L327.0,388.3L326.4,389.5L326.7,394.9L325.2,400.3L322.1,403.7L324.2,408.5L325.8,410.0L327.7,408.7L327.3,407.7L330.9,406.6L334.9,406.8L338.9,407.7L345.7,410.7L346.3,417.0L343.7,421.9L356.9,425.8L361.3,427.9L365.2,431.1L366.7,435.3L372.8,438.8L377.3,446.1L379.7,445.5L382.2,449.7L382.0,456.0L380.8,457.7L376.6,457.0L374.6,459.8L375.3,461.3L382.8,464.9L384.7,459.7L388.6,459.5L394.8,461.5L399.9,461.6L402.0,462.9L404.6,464.1L404.6,464.1L406.0,459.8L406.2,459.4L406.5,459.0L407.2,458.6L407.7,458.4L408.1,458.2L415.5,457.5L415.9,457.3L416.2,457.2L416.4,456.9L416.7,456.4L416.8,455.7L416.9,454.3L416.9,453.5L416.7,453.0L416.5,452.7L416.0,452.3L413.6,450.7L413.3,450.5L413.2,450.2L413.2,449.8L413.5,449.3L414.6,448.2L414.8,447.6L414.8,447.1L414.7,446.7L414.5,446.3L414.4,446.0L415.3,445.0L415.7,444.9L416.1,445.0L417.4,445.9L423.1,442.1L423.5,441.8L423.9,441.6L425.3,441.1L425.9,440.8L426.4,440.4L426.6,440.0L426.9,439.6L427.5,438.2L427.6,437.9L427.8,437.7L428.0,437.6L428.2,437.5L428.5,437.4L429.8,437.2L430.1,437.1L430.4,436.9L430.6,436.1L430.6,435.0L430.2,432.1L430.3,431.0L430.5,430.4L430.8,430.2L431.3,427.5L429.8,426.3L429.0,424.6L428.7,424.2L426.4,422.5L426.6,421.7L426.8,421.5L427.7,420.5L428.1,420.3L428.5,420.2L429.3,420.4L429.7,420.7L430.3,421.2L430.7,421.2L431.3,421.0L433.2,419.1L433.8,418.8L437.7,417.4L441.0,415.3L441.4,415.0L441.9,414.4L442.1,414.2L442.3,413.9L442.4,413.5L442.5,413.2L442.4,412.3L442.0,411.7L441.0,411.0L440.8,410.5L440.8,409.8L441.2,407.1L441.6,405.9L442.0,403.7L442.4,402.7L443.3,401.6L443.4,401.4L443.6,400.7L443.7,400.3L443.8,399.9L443.8,398.1L443.7,397.6L443.5,396.9L443.0,395.9L442.5,395.5L442.0,395.4L441.7,395.5L441.4,395.7L441.4,395.7L440.4,396.5L440.1,396.4L439.8,396.0L439.6,395.2L439.3,393.5L439.2,392.7L439.0,392.1L438.8,391.8L438.7,391.5L438.6,391.1L438.5,390.7L438.8,389.2L440.4,386.2L441.1,385.6L441.3,385.4Z M377.3,475.2L376.0,475.3L376.0,476.7L377.3,475.2Z M363.0,468.4L360.7,464.0L357.5,462.9L356.5,464.9L361.7,469.6L363.0,468.4Z M319.2,420.7L320.0,417.8L318.2,415.4L315.8,416.6L315.1,419.1L313.0,421.5L310.3,421.2L310.7,419.7L305.8,421.9L303.9,422.0L298.7,420.5L293.3,422.2L292.5,423.9L293.1,426.5L296.5,428.5L303.2,428.6L304.3,426.5L306.0,427.7L309.2,426.3L310.0,427.9L310.8,425.8L315.6,429.9L319.6,430.0L317.6,426.5L316.0,425.9L319.2,423.5L319.2,420.7Z M312.1,467.4L310.5,467.0L310.4,468.7L311.9,469.1L312.1,467.4Z M293.0,444.2L291.5,440.6L289.3,443.7L292.2,444.6L293.0,444.2Z M268.8,401.9L271.2,398.3L268.7,395.4L267.2,396.2L265.6,399.9L267.1,401.9L268.8,401.9Z M459.7,324.7L460.4,324.4L460.6,324.4L460.7,324.4L460.7,324.4L460.8,324.3L460.8,324.2L460.8,324.0L460.7,323.7L460.7,323.7L460.7,323.5L460.6,323.4L460.5,323.3L460.4,323.2L460.2,323.0L459.6,322.8L456.2,322.5L455.7,322.2L455.6,322.1L455.6,322.1L455.2,323.4L455.2,323.8L455.6,324.6L456.2,325.4L456.9,325.9L457.6,326.2L457.6,326.1L457.8,325.9L459.7,324.7Z " data-code="IT-52" data-enabled="true" fill="#b1d2e5" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Toscana" cursor="pointer"></path>
<path d="M484.5,44.1L485.3,48.8L485.9,50.9L486.0,52.2L485.9,53.1L486.2,54.0L486.1,54.4L485.8,54.7L480.6,55.4L479.9,55.6L479.2,55.9L478.9,56.1L478.5,56.4L477.2,57.9L477.0,58.5L477.0,59.0L477.2,59.2L477.5,59.4L477.9,59.6L477.9,59.6L478.3,59.7L479.0,60.0L479.3,60.4L479.5,60.9L479.5,61.7L479.4,62.1L479.0,62.3L478.6,62.2L477.9,61.9L477.0,61.7L473.2,61.7L469.9,62.3L468.2,63.1L467.8,63.5L467.5,63.8L466.0,68.3L463.7,72.3L461.6,74.7L457.6,76.6L454.1,80.5L453.9,80.9L454.0,81.2L454.0,81.2L454.3,81.8L454.5,82.1L455.8,83.4L455.8,83.4L457.9,84.9L460.5,85.2L460.8,85.3L461.4,86.2L461.6,86.5L461.9,86.7L463.6,86.9L463.9,87.2L464.1,87.9L464.3,89.3L464.4,89.7L465.4,90.7L467.0,91.6L467.3,92.2L467.6,93.1L468.0,95.0L468.1,96.0L468.1,96.6L467.9,97.1L467.8,97.3L467.6,97.6L467.0,98.0L464.5,98.8L464.2,99.0L463.5,99.7L463.3,100.0L463.1,100.7L462.7,101.4L461.9,102.6L462.2,103.4L462.2,103.5L463.3,106.0L463.9,107.9L464.4,111.0L464.7,111.6L465.1,112.0L466.0,112.2L466.3,112.3L466.8,112.6L468.6,114.2L470.1,114.7L470.9,115.1L471.4,115.9L471.5,116.5L471.8,117.3L474.1,122.0L474.4,122.8L474.7,123.3L475.1,123.6L477.9,124.8L479.6,124.3L480.0,124.2L480.4,124.2L480.8,124.3L481.2,124.5L482.6,125.6L488.2,124.7L493.5,122.2L494.1,122.6L494.4,122.8L494.6,123.1L495.2,124.7L495.8,125.0L495.8,125.0L497.2,123.6L498.0,123.0L499.6,122.9L500.0,123.1L500.3,123.3L500.5,123.5L500.6,123.9L500.6,124.2L500.8,124.6L500.8,124.6L501.3,124.9L504.9,125.5L505.5,125.5L505.9,125.4L506.1,125.1L506.1,125.1L507.4,123.2L509.0,124.1L510.1,129.2L512.2,131.4L512.4,132.0L512.5,132.3L512.5,132.4L512.5,133.1L512.8,133.6L513.2,134.1L514.1,134.9L514.5,135.5L516.6,139.9L517.2,140.8L518.4,142.0L518.4,142.0L518.9,140.4L521.6,138.4L522.4,137.0L516.5,137.6L516.0,136.0L520.0,132.9L519.1,132.5L519.6,130.2L522.8,131.9L523.6,130.5L526.4,129.6L538.4,133.3L539.8,132.9L544.1,134.9L544.5,137.5L540.7,139.0L542.8,139.8L544.9,139.2L548.8,136.3L551.0,135.9L554.6,133.6L552.5,133.3L552.0,131.4L552.7,129.2L554.0,128.2L560.3,130.1L561.9,131.2L571.0,140.1L571.4,141.8L573.1,143.7L575.7,145.8L569.5,145.9L568.1,147.9L572.1,147.6L575.3,149.1L579.1,148.7L582.0,145.4L582.5,144.1L579.5,142.3L572.5,133.0L562.7,128.2L558.6,127.6L554.9,124.4L555.0,121.0L557.0,116.3L558.6,111.0L557.1,109.1L551.9,110.7L549.5,110.9L546.6,106.0L546.8,103.2L557.0,95.3L559.0,91.6L558.3,89.8L552.0,89.4L549.5,87.3L544.5,85.5L542.1,85.4L542.1,86.7L540.0,87.0L537.7,83.6L535.9,78.9L537.9,77.8L540.9,72.6L548.3,69.2L553.6,63.8L558.2,63.5L560.4,61.3L560.4,58.7L558.6,56.2L548.8,53.5L545.4,53.4L543.0,51.8L538.2,52.1L534.7,51.6L526.7,53.0L516.5,49.7L509.9,48.4L491.2,47.2L486.5,44.7L484.5,44.1L484.5,44.1Z " data-code="IT-36" fill="#ccc" data-enabled="false" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Friuli-Venezia Giulia" cursor="normal"></path>
<path d="M203.9,246.3L203.8,246.0L203.7,245.6L203.6,244.8L203.1,244.3L202.2,243.9L198.3,242.6L197.1,241.8L193.4,239.3L192.7,239.0L192.3,238.7L191.5,237.6L191.0,237.5L190.3,237.4L188.6,237.6L188.1,237.8L188.0,238.0L187.9,238.2L187.5,239.5L187.4,239.8L187.3,239.9L186.5,240.8L185.1,241.8L185.0,242.1L184.9,242.4L185.1,242.7L185.3,242.9L186.3,243.4L187.2,244.0L187.4,244.3L187.6,244.6L187.7,245.0L187.7,245.4L187.8,246.7L187.9,247.5L187.9,247.9L187.9,248.3L187.8,248.8L187.6,249.2L186.9,249.7L186.5,249.8L184.8,249.5L182.8,249.5L181.1,250.1L180.8,251.6L180.6,251.9L180.5,252.2L180.3,252.5L180.0,252.7L178.8,253.5L178.6,253.7L178.2,254.4L177.5,255.3L177.3,255.5L177.1,255.5L176.9,255.4L176.7,255.1L176.6,254.8L176.5,254.4L176.7,253.4L175.8,251.9L175.4,251.3L174.2,249.6L173.8,249.0L173.5,248.4L173.3,248.1L173.0,247.9L172.6,247.7L171.9,247.5L165.6,246.9L164.7,246.9L164.0,247.0L163.7,247.2L163.6,247.5L162.9,249.2L162.8,249.5L162.8,249.8L163.0,250.1L163.1,250.4L163.2,250.7L163.2,251.1L163.1,251.4L160.4,254.0L153.3,253.8L151.0,254.1L150.2,254.4L149.6,254.4L149.0,254.3L147.5,254.1L146.4,254.9L143.2,257.3L142.9,257.1L142.7,256.8L142.4,256.6L141.7,256.3L140.2,255.9L139.8,255.7L139.2,255.3L138.4,254.7L137.0,254.0L136.4,253.6L136.3,253.5L135.8,252.9L135.0,252.2L133.9,252.4L132.7,253.8L130.8,258.6L130.8,259.0L132.2,260.9L132.3,262.0L132.1,262.6L131.9,263.2L131.3,264.0L131.0,264.2L128.2,266.1L126.5,270.3L125.0,271.2L124.5,271.7L123.9,272.5L123.4,273.0L122.9,273.4L122.0,273.7L121.5,274.1L121.3,274.5L121.8,275.3L121.7,283.1L121.9,283.5L122.2,283.7L122.5,284.1L122.7,284.5L122.7,285.5L122.6,286.0L122.4,286.4L121.7,287.6L120.9,288.6L120.4,289.0L120.2,289.1L119.9,289.2L119.5,289.2L118.7,289.0L117.6,288.6L116.8,288.5L115.2,289.7L114.9,290.2L114.9,290.7L115.0,291.1L116.5,293.3L108.3,292.6L103.0,292.4L100.5,291.8L99.4,291.2L98.1,290.7L97.3,290.5L96.7,290.5L94.8,292.4L94.8,292.4L94.7,292.7L94.6,293.0L94.5,293.4L94.6,293.7L94.8,294.1L95.0,294.3L95.3,294.5L95.3,294.7L95.3,294.9L93.0,295.7L91.3,295.7L91.7,296.4L90.7,299.1L87.1,305.3L76.3,315.8L75.1,317.8L75.6,320.3L78.2,325.0L93.0,325.1L96.3,324.4L100.2,322.1L114.2,319.1L119.8,315.7L122.7,314.8L123.8,313.0L128.8,309.3L130.6,308.9L129.3,306.3L130.5,304.0L134.2,300.2L135.3,294.5L139.3,290.1L141.6,288.9L148.0,286.8L149.1,285.7L149.7,282.0L150.9,281.3L152.2,278.7L151.7,276.8L153.3,274.8L162.0,269.3L163.4,269.1L168.2,265.9L176.7,262.3L181.9,262.6L185.3,264.5L189.1,264.5L196.2,266.7L204.3,268.0L206.6,269.0L209.7,273.4L213.4,274.7L214.8,270.0L217.5,271.7L226.1,275.8L226.8,278.0L230.7,279.5L231.9,281.2L235.8,280.7L236.3,282.0L244.3,287.2L247.2,290.1L259.7,296.9L263.7,298.4L264.8,299.5L263.5,295.5L265.5,294.0L268.2,296.0L275.3,300.3L279.5,299.5L280.6,299.8L280.8,299.2L280.9,298.7L281.2,298.1L281.7,297.2L282.4,296.4L282.5,296.1L282.7,295.8L282.7,295.4L282.4,294.9L281.7,294.4L280.2,293.4L279.4,293.2L278.8,293.1L278.1,293.3L277.6,293.4L277.2,293.1L276.8,292.7L276.4,291.8L276.4,291.2L276.3,290.7L276.4,290.3L276.3,289.9L276.2,289.6L275.8,289.3L275.2,289.0L274.1,288.5L273.4,288.4L272.8,288.4L271.3,288.6L270.5,288.6L269.8,288.5L269.6,288.3L269.4,288.1L270.1,285.5L269.7,285.0L268.8,284.6L268.3,284.6L267.9,284.8L267.3,286.0L267.1,286.3L266.8,286.4L266.5,286.4L266.3,286.2L266.2,285.7L266.2,284.1L265.7,282.2L265.6,281.8L265.6,281.4L265.6,281.0L265.6,280.6L265.5,280.2L265.4,279.9L264.9,279.4L264.2,278.9L257.1,274.7L254.1,272.3L251.8,269.6L250.5,268.4L248.5,264.8L244.1,262.7L237.2,262.6L236.7,262.7L236.2,263.2L235.9,263.5L235.5,263.7L235.2,263.9L234.4,264.2L232.5,264.3L231.5,264.3L231.3,264.0L231.1,263.5L231.4,261.6L232.1,258.7L232.2,258.3L232.4,258.1L232.6,257.8L233.0,257.7L233.5,257.4L234.0,256.9L235.3,254.4L235.4,252.7L234.9,250.2L234.0,249.4L230.8,248.4L228.5,246.3L228.0,246.1L227.7,246.2L227.7,246.2L226.8,247.2L226.4,247.4L224.3,247.5L223.6,247.4L223.0,247.2L222.8,247.0L219.4,245.2L218.5,244.8L217.8,244.8L217.0,245.2L216.4,245.4L215.9,245.3L215.5,245.2L214.8,244.5L214.2,244.0L213.7,243.8L213.2,243.8L212.4,244.0L211.4,244.4L211.2,245.8L210.6,246.5L209.6,247.0L208.9,247.4L207.7,247.6L207.2,247.6L206.1,247.4L204.2,246.6L203.9,246.3Z " data-code="IT-42" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Liguria" cursor="pointer"></path>
<path d="M366.7,212.2L366.4,211.9L361.0,210.2L354.3,211.0L354.1,211.2L353.9,211.4L353.7,211.6L353.3,212.2L350.1,213.2L348.2,214.2L345.6,214.9L344.7,214.4L344.4,214.2L343.8,213.8L343.2,213.6L335.5,212.0L335.2,211.8L335.0,211.5L335.0,211.2L335.1,210.9L334.5,208.7L333.4,207.9L330.2,207.7L329.8,207.5L329.5,207.4L328.5,207.7L327.3,209.8L324.9,212.4L322.5,214.1L319.7,214.7L316.1,214.7L312.6,214.0L309.7,212.6L308.6,211.2L307.1,207.9L307.1,207.9L305.9,207.3L302.0,208.0L300.1,207.3L291.6,202.7L288.3,201.8L282.0,203.0L279.4,202.7L277.2,199.9L275.0,195.6L272.1,193.7L266.5,195.8L267.0,193.6L265.4,192.8L263.7,193.2L264.0,194.8L264.0,194.8L265.2,196.6L265.0,197.4L263.8,197.4L260.4,196.7L259.7,196.9L260.3,198.2L260.6,199.1L260.1,199.7L258.3,198.1L255.2,196.4L254.3,195.1L253.8,195.1L253.8,195.1L253.8,195.6L253.7,195.7L253.6,195.6L253.4,195.8L253.5,198.3L251.1,199.3L247.8,199.0L245.2,197.8L244.2,197.2L244.0,196.7L243.9,195.4L244.1,194.9L244.4,194.4L244.3,194.0L243.3,193.8L242.2,194.0L241.3,194.8L240.3,195.3L236.4,193.5L236.2,194.2L236.6,197.9L235.8,197.7L234.1,196.4L233.2,196.3L232.5,196.2L230.8,196.4L227.1,196.4L226.3,198.4L224.0,202.0L219.4,212.1L218.8,213.0L218.1,215.0L218.1,216.0L218.2,216.6L218.4,217.1L218.6,217.3L219.1,217.8L219.4,218.0L220.1,218.3L221.6,218.9L222.2,219.3L222.8,220.1L222.9,220.5L222.9,221.0L222.7,223.5L221.7,225.5L219.9,228.1L219.4,229.3L219.1,230.1L220.2,232.9L220.6,234.3L220.7,234.7L220.6,235.2L220.4,235.6L220.0,236.1L219.6,236.4L219.0,236.5L218.3,236.5L216.9,236.3L216.2,236.1L215.8,235.8L215.3,234.8L215.1,234.5L214.9,234.4L214.6,234.5L214.4,236.9L214.3,237.6L213.5,238.0L211.0,237.7L211.4,244.4L212.4,244.0L213.2,243.8L213.7,243.8L214.2,244.0L214.8,244.5L215.5,245.2L215.9,245.3L216.4,245.4L217.0,245.2L217.8,244.8L218.5,244.8L219.4,245.2L222.8,247.0L223.0,247.2L223.6,247.4L224.3,247.5L226.4,247.4L226.8,247.2L227.7,246.2L228.0,246.1L228.5,246.3L230.8,248.4L230.8,248.4L234.0,249.4L234.9,250.2L235.4,252.7L235.3,254.4L234.0,256.9L233.5,257.4L233.0,257.7L232.6,257.8L232.4,258.1L232.2,258.3L232.1,258.7L231.4,261.6L231.2,262.4L231.1,263.5L231.3,264.0L231.5,264.3L232.5,264.3L234.4,264.2L235.2,263.9L235.5,263.7L235.9,263.5L236.2,263.2L236.7,262.7L237.2,262.6L244.1,262.7L248.5,264.8L250.5,268.4L251.8,269.6L251.6,269.0L251.9,268.1L252.2,267.9L252.5,267.7L253.8,267.5L256.0,266.8L256.4,266.7L256.7,266.5L256.8,266.2L257.1,265.1L257.3,264.8L257.4,264.5L260.5,261.0L261.9,259.1L263.7,257.6L264.4,257.3L264.9,257.3L265.5,257.3L267.9,257.6L271.1,258.5L275.6,260.7L276.0,261.0L276.3,261.4L276.7,262.2L276.7,262.6L276.5,262.9L275.8,263.3L275.5,263.5L275.4,263.8L275.4,264.2L275.9,264.8L281.0,268.4L282.7,270.1L283.8,270.4L286.7,270.5L287.9,271.1L287.9,271.1L290.7,272.6L292.2,273.1L294.7,275.9L295.7,277.0L297.4,278.2L300.4,277.0L301.1,277.0L307.3,278.8L309.5,281.3L309.7,281.5L311.1,282.0L315.5,282.6L316.0,283.7L316.2,285.0L316.3,285.4L316.4,285.7L316.5,286.0L320.0,289.4L324.0,292.3L325.0,292.6L327.3,292.3L327.8,291.8L328.2,291.3L328.6,290.3L328.7,290.0L328.9,289.8L329.2,289.6L329.9,289.3L330.3,289.2L334.9,288.8L337.1,289.5L342.7,293.1L343.9,293.5L343.9,293.5L345.5,294.0L346.3,294.7L346.6,294.9L346.8,295.2L347.2,295.4L349.0,296.0L349.3,296.2L350.1,296.9L350.7,297.3L352.2,297.9L352.5,298.0L352.8,298.0L355.8,294.6L356.4,293.4L356.7,293.2L357.4,292.5L357.6,292.3L357.6,292.1L358.7,290.8L359.0,290.9L359.5,290.9L359.9,291.2L360.1,291.6L360.0,292.1L359.7,292.4L359.2,293.0L359.0,293.3L359.5,294.4L374.8,294.4L376.2,294.6L379.5,293.3L379.4,293.0L379.1,292.8L378.8,292.6L376.1,291.6L375.4,291.3L375.1,291.1L374.8,290.9L374.6,290.6L374.5,290.2L374.5,289.9L374.6,289.6L374.8,289.3L375.0,289.1L381.2,288.1L382.0,287.9L384.4,285.6L384.8,285.1L384.9,284.9L385.0,284.7L385.3,284.4L385.9,284.2L388.8,283.6L389.4,282.4L391.5,281.7L392.0,281.9L393.1,282.4L394.1,283.9L394.6,284.6L398.6,288.3L400.3,288.8L401.1,288.7L401.1,288.7L403.1,288.7L403.5,288.5L403.9,288.3L404.7,287.6L405.3,287.7L407.3,288.7L407.8,289.3L407.9,289.7L407.6,290.3L406.6,291.1L406.2,291.7L406.2,292.0L406.7,292.3L407.5,292.6L410.0,293.1L410.9,293.1L411.6,293.0L413.6,292.1L414.6,291.8L416.9,291.7L416.9,291.7L417.1,291.7L417.8,291.6L418.2,291.7L418.6,291.7L419.0,291.9L419.1,292.2L419.1,292.7L418.8,293.6L418.5,294.0L417.9,295.3L417.6,296.6L417.4,297.3L417.2,297.8L416.0,299.4L415.6,300.5L415.4,300.9L414.6,302.0L414.4,302.3L412.0,303.4L412.0,304.7L412.0,305.1L412.1,305.5L412.3,306.0L412.9,306.6L412.9,306.6L415.2,308.8L415.1,310.2L415.1,310.7L417.1,312.5L417.3,315.9L419.4,317.5L423.7,319.6L427.5,322.2L431.2,322.6L439.0,326.9L447.1,328.7L450.9,327.9L451.7,327.8L452.2,327.8L453.0,327.9L453.8,328.2L454.4,328.6L455.5,329.5L455.9,329.7L456.3,329.8L456.7,329.9L457.1,329.8L457.4,329.6L457.6,329.4L458.3,328.3L458.6,328.1L459.7,327.8L461.4,328.0L461.8,328.0L462.2,327.9L462.9,327.2L463.2,327.1L464.4,327.2L464.7,327.3L464.9,326.6L464.9,326.0L464.8,325.4L464.5,324.8L466.0,324.0L467.3,322.9L468.3,321.5L469.1,319.7L469.2,318.0L469.4,317.4L470.1,317.0L471.4,316.5L472.0,316.2L472.3,316.0L472.6,316.1L472.9,316.3L474.1,317.1L474.4,317.0L474.7,316.9L474.9,316.6L475.1,316.2L475.1,315.8L475.1,315.8L475.0,315.3L474.9,314.9L473.1,314.1L471.9,312.1L472.5,309.7L479.3,306.4L479.9,307.3L479.7,311.6L479.7,311.6L485.2,315.9L485.5,316.6L486.9,315.8L487.1,315.4L487.4,315.1L488.0,314.8L488.4,314.9L488.7,315.1L489.1,315.7L489.7,316.5L490.1,317.1L490.7,318.6L490.9,319.0L490.9,319.0L491.4,319.7L491.9,320.0L492.4,320.1L495.2,320.1L495.7,320.0L496.1,319.8L496.3,319.6L496.5,319.3L496.8,318.6L496.9,318.4L497.1,318.1L497.4,317.8L497.7,317.7L499.3,316.9L499.6,316.7L499.8,316.5L500.0,316.2L500.7,314.7L500.8,314.3L500.8,314.0L500.7,313.6L500.4,313.0L500.3,312.6L500.3,311.4L500.4,310.7L501.1,308.5L501.3,307.5L501.4,307.4L501.3,307.4L493.6,303.8L491.1,301.7L486.2,296.3L483.9,295.5L478.1,291.0L468.6,280.1L463.9,269.2L463.4,266.7L460.3,256.8L459.8,252.5L459.6,244.4L458.8,243.7L456.8,239.0L456.0,234.8L456.4,230.9L458.1,224.1L456.9,223.5L458.9,221.8L461.3,222.8L465.9,226.9L467.4,226.7L463.7,224.3L463.5,224.1L463.3,223.8L463.2,223.4L463.1,222.5L463.1,222.2L462.9,221.8L462.7,221.6L462.5,221.3L461.7,220.9L459.8,220.3L458.7,219.4L458.6,219.1L458.4,218.3L458.3,217.3L458.0,216.2L457.9,215.8L457.9,215.4L458.0,215.1L458.2,214.7L458.5,214.2L458.6,213.9L458.6,213.6L458.5,213.3L457.5,212.7L456.7,212.7L453.8,213.4L453.8,213.4L453.6,213.6L453.5,213.7L452.9,213.7L450.3,213.2L448.9,212.6L448.5,212.6L448.0,212.8L447.5,213.0L446.8,213.0L445.7,212.6L445.2,212.3L444.9,212.0L444.5,211.0L444.3,210.7L444.0,210.5L443.1,209.9L441.7,209.3L433.9,208.0L433.5,207.9L432.8,207.8L432.0,207.9L429.0,208.5L424.1,207.9L418.4,208.6L414.5,210.7L413.8,211.4L413.6,212.5L412.3,213.1L409.0,214.1L406.2,216.4L404.7,216.7L403.4,216.4L399.0,213.4L396.7,212.3L396.7,212.3L395.4,212.1L393.7,212.0L390.6,212.6L389.2,212.6L388.3,211.4L384.2,210.5L378.7,210.3L377.8,210.9L377.5,211.7L376.9,212.1L376.6,212.1L375.1,211.6L375.1,211.6L369.4,213.1L367.6,213.2L367.4,212.9L366.7,212.2Z M456.2,325.4L455.6,324.6L455.2,323.8L455.2,323.4L455.6,322.1L455.7,322.2L456.2,322.5L459.6,322.8L460.2,323.0L460.4,323.2L460.5,323.3L460.6,323.4L460.7,323.5L460.7,323.7L460.8,324.0L460.8,324.2L460.8,324.3L460.4,324.4L459.7,324.7L457.8,325.9L457.6,326.1L457.6,326.2L456.9,325.9L456.2,325.4Z " data-code="IT-45" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Emilia-Romagna" cursor="pointer"></path>
<path d="M601.4,412.3L600.1,412.5L594.3,413.8L589.9,415.6L588.2,416.0L587.0,416.0L586.5,416.1L586.0,416.4L585.4,417.1L585.1,417.6L584.9,418.1L584.9,419.0L584.8,419.3L584.7,419.7L584.5,420.0L584.3,420.2L583.8,420.6L582.4,421.2L580.3,421.6L579.6,421.5L579.2,421.5L578.5,421.2L578.1,421.2L577.5,421.3L575.4,422.0L574.8,422.1L573.7,421.8L573.1,421.4L572.8,421.2L572.5,421.1L572.0,421.2L571.5,421.6L570.9,422.5L570.1,424.2L569.1,425.5L569.0,425.8L568.9,426.2L568.6,427.8L568.3,428.1L566.4,428.7L565.6,428.9L564.9,429.3L564.4,430.1L564.2,430.6L564.1,431.1L564.0,432.0L563.2,432.3L562.5,432.6L556.6,433.3L556.4,434.1L556.5,434.5L556.7,435.1L557.2,435.7L557.6,436.1L558.6,436.7L559.5,436.9L560.2,437.2L560.5,437.4L560.8,437.6L560.9,438.3L560.9,438.9L560.2,441.6L560.2,441.6L559.7,443.3L557.3,444.4L556.9,444.5L556.5,444.6L550.8,443.9L548.5,443.9L545.2,443.2L544.8,443.2L544.5,443.6L544.4,444.1L544.2,445.4L544.0,446.1L543.6,446.7L541.8,447.0L541.0,447.6L542.7,449.8L543.0,450.0L543.2,450.3L543.4,450.6L543.6,450.9L543.6,451.2L543.6,451.9L543.6,452.1L543.8,452.7L543.8,453.2L543.7,453.7L542.5,455.2L541.4,455.9L541.4,455.9L541.2,456.2L541.0,457.1L541.0,457.1L541.8,459.6L545.4,462.1L545.1,462.8L544.0,464.8L543.7,465.7L543.8,466.6L544.2,467.4L544.5,467.6L546.6,468.5L547.5,469.1L548.1,469.6L548.5,470.1L548.7,470.4L548.8,470.7L549.2,472.2L549.4,472.9L549.7,473.6L550.1,474.2L552.5,476.2L553.6,478.0L554.1,478.4L557.2,479.9L557.3,480.3L557.5,481.0L557.7,481.3L557.9,481.6L558.2,481.8L558.5,481.9L559.4,482.1L560.8,482.1L561.2,482.2L561.6,482.3L561.9,482.5L562.1,482.7L561.8,483.1L561.1,483.4L558.0,484.0L557.1,484.5L556.8,484.9L556.8,485.3L556.9,485.7L557.3,486.9L557.2,487.1L557.0,487.4L556.8,487.6L555.6,488.0L554.8,487.8L554.0,487.4L553.6,487.3L553.2,487.6L552.6,488.1L552.1,488.2L551.5,488.2L550.4,488.0L549.8,487.8L549.3,487.6L547.8,486.6L546.4,485.9L540.2,483.9L538.3,487.0L536.6,488.6L534.2,495.6L534.3,495.9L534.9,497.2L535.0,497.5L535.3,497.8L535.9,498.2L537.0,498.7L538.9,499.1L539.8,499.1L540.9,498.6L556.4,506.2L557.6,506.2L557.8,506.2L557.8,506.2L559.4,506.8L560.6,508.1L561.5,508.6L562.5,508.9L563.4,509.6L563.8,510.1L564.0,510.5L564.0,510.9L563.9,511.3L563.8,511.7L563.0,513.6L563.0,516.2L563.0,516.6L563.1,517.0L563.7,517.9L564.2,518.0L564.2,518.0L565.0,517.8L566.0,517.6L566.4,517.5L566.9,517.5L567.3,517.6L575.4,521.1L576.0,521.6L576.5,522.0L576.6,522.4L576.7,522.6L576.9,522.9L577.2,523.2L577.5,523.4L577.8,523.6L578.4,523.7L579.1,523.8L580.6,523.8L581.9,523.7L583.5,522.9L584.7,521.8L586.0,520.4L587.2,519.6L587.9,519.8L592.9,521.2L593.6,521.8L594.0,522.2L594.2,522.7L594.7,524.0L595.1,524.6L595.3,524.9L595.5,525.2L596.0,525.4L596.7,525.7L598.0,525.9L598.6,525.8L599.0,525.7L599.3,525.5L599.6,525.3L600.1,525.4L601.0,525.7L602.7,526.7L606.2,527.5L607.8,528.2L612.4,531.7L613.9,531.3L616.4,531.9L617.0,531.8L617.5,531.6L617.9,531.2L619.3,530.5L619.7,530.2L621.1,528.4L622.7,527.5L623.8,528.1L624.7,528.1L625.9,526.9L627.8,525.7L629.1,525.1L630.8,524.6L631.1,523.2L630.2,522.6L628.7,520.3L628.4,519.8L627.8,519.2L627.6,518.8L627.7,518.3L628.2,517.2L628.6,516.8L629.0,516.6L631.1,516.8L631.6,516.8L633.6,514.7L634.3,513.2L634.5,513.1L637.7,510.4L638.1,510.3L638.8,510.4L638.9,510.6L639.1,510.8L639.7,511.1L641.1,511.7L641.4,511.9L641.7,512.1L641.9,512.4L642.5,513.3L642.7,513.6L643.0,513.9L643.5,514.2L644.3,514.6L644.7,514.6L645.1,514.5L645.6,513.8L646.8,513.6L647.1,513.9L647.5,514.2L650.4,516.0L650.9,516.5L651.2,516.8L651.4,517.0L651.5,517.4L651.6,517.7L651.4,518.9L651.5,519.3L651.6,519.7L651.7,520.0L652.2,520.5L652.6,521.0L653.1,521.5L653.2,521.9L653.3,522.2L653.3,522.6L653.0,523.2L653.0,523.6L653.8,524.1L655.1,523.7L656.5,523.0L658.4,522.1L658.7,521.7L659.7,519.9L661.6,517.5L663.0,515.2L665.5,512.0L667.4,510.0L668.1,509.0L668.4,508.4L668.4,505.9L669.5,505.5L670.2,505.0L675.7,499.7L676.0,499.2L675.8,497.3L675.9,496.9L676.3,496.0L676.7,495.3L676.8,494.9L676.9,494.6L676.7,493.6L676.8,493.3L676.8,493.3L676.8,493.3L674.9,492.6L673.9,491.2L671.7,483.7L670.4,482.7L667.1,482.1L662.3,480.4L659.2,478.7L647.9,469.3L644.1,464.3L635.4,458.8L629.9,454.7L617.2,442.1L616.1,439.5L610.5,432.3L608.6,429.1L605.3,422.5L601.4,412.3L601.4,412.3Z " data-code="IT-65" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Abruzzo" cursor="pointer"></path>
<path d="M302.2,53.5L305.8,58.6L309.7,59.1L315.8,62.0L316.5,62.6L319.1,63.1L325.9,59.6L330.3,63.3L333.7,65.0L346.0,60.1L350.5,63.4L351.5,62.2L350.4,56.5L352.8,55.7L355.5,58.7L358.9,59.1L361.4,57.5L363.4,61.1L363.1,74.0L359.7,79.5L359.6,81.3L362.8,85.1L364.9,85.5L366.9,84.7L370.3,82.0L373.4,78.6L376.9,81.0L378.2,79.8L379.6,75.5L383.3,74.5L384.9,72.0L389.8,72.6L391.1,72.3L394.2,69.4L397.3,60.8L400.6,57.3L403.0,56.7L408.1,57.1L410.6,55.1L411.6,55.8L412.4,57.7L413.9,56.7L426.0,54.6L430.3,48.2L431.9,41.5L439.1,44.7L441.0,47.2L455.5,46.4L456.7,44.2L462.1,40.6L460.1,40.4L456.8,39.2L454.0,37.1L451.4,31.8L445.2,28.8L444.8,21.6L443.5,20.8L433.4,17.5L434.5,16.5L432.4,7.4L437.1,5.1L438.6,3.2L438.5,0.5L436.6,0.0L431.5,0.9L423.7,4.4L418.1,4.7L411.4,7.3L408.7,9.1L405.2,9.6L401.9,11.4L397.7,9.3L390.7,8.4L384.4,9.5L380.8,7.8L376.2,11.4L373.8,11.3L368.4,9.7L362.9,10.5L356.1,12.8L351.2,17.2L349.9,21.9L347.1,27.8L344.4,31.4L333.6,31.6L332.1,30.6L322.5,29.7L323.6,25.4L317.3,22.3L306.7,24.0L303.4,23.7L300.7,21.9L300.5,25.1L298.2,28.4L298.4,34.0L297.1,34.7L296.9,38.2L296.2,39.3L295.8,42.9L297.3,44.3L300.7,44.6L302.4,45.8L303.1,47.7L302.2,53.5L302.2,53.5Z " data-code="IT-BZ" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Trentino-Alto Adige" cursor="pointer"></path>
<path d="M316.5,62.6L316.7,63.3L317.9,68.1L316.4,70.4L314.8,71.2L311.1,71.5L309.8,72.6L309.3,73.7L312.6,75.7L314.9,84.5L313.0,89.6L313.2,92.1L310.2,99.1L309.0,101.1L308.0,105.0L307.0,105.5L305.8,109.5L308.7,110.7L310.6,115.3L310.1,118.7L310.6,120.9L314.5,127.1L316.3,128.0L323.1,126.3L326.4,123.0L327.9,122.6L331.1,123.3L335.8,123.4L337.3,124.1L340.6,125.8L341.7,129.7L340.7,130.6L339.9,135.1L342.6,136.5L345.5,139.1L347.1,137.9L348.8,138.1L350.9,136.1L355.4,136.1L359.5,137.3L360.9,137.4L362.2,136.3L364.9,131.9L364.6,129.6L365.9,128.6L365.9,126.4L370.1,119.1L371.5,115.7L374.7,113.6L376.5,115.1L379.7,113.1L379.6,110.1L384.1,108.9L387.6,106.7L394.5,106.6L398.0,110.1L401.2,110.1L403.6,109.2L403.2,107.2L404.4,98.2L407.7,97.2L412.1,97.2L418.7,94.9L422.3,90.9L424.6,87.7L422.1,86.6L421.0,84.5L421.4,82.8L415.1,80.2L411.0,73.4L412.7,70.3L414.0,70.2L415.1,65.3L417.7,62.6L416.4,60.9L412.7,59.7L412.4,57.7L411.6,55.8L410.6,55.1L408.1,57.1L403.0,56.7L400.6,57.3L397.3,60.8L394.2,69.4L391.1,72.3L389.8,72.6L384.9,72.0L383.3,74.5L379.6,75.5L378.2,79.8L376.9,81.0L373.4,78.6L370.3,82.0L366.9,84.7L364.9,85.5L362.8,85.1L359.6,81.3L359.7,79.5L363.1,74.0L363.4,61.1L361.4,57.5L358.9,59.1L355.5,58.7L352.8,55.7L350.4,56.5L351.5,62.2L350.5,63.4L346.0,60.1L333.7,65.0L330.3,63.3L325.9,59.6L319.1,63.1L316.5,62.6Z " data-code="IT-TN" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Trentino-Alto Adige" cursor="pointer"></path>
<path d="M501.4,307.4L501.3,307.5L501.1,308.5L500.4,310.7L500.3,311.4L500.3,312.6L500.4,313.0L500.7,313.6L500.8,314.0L500.8,314.3L500.7,314.7L500.0,316.2L499.8,316.5L499.6,316.7L499.3,316.9L497.7,317.7L497.4,317.8L497.1,318.1L496.9,318.4L496.8,318.6L496.5,319.3L496.3,319.6L496.1,319.8L495.7,320.0L495.2,320.1L492.4,320.1L491.9,320.0L491.4,319.7L490.9,319.0L490.7,318.6L490.1,317.1L489.7,316.5L489.1,315.7L488.7,315.1L488.4,314.9L488.0,314.8L487.4,315.1L487.1,315.4L486.9,315.8L485.5,316.6L485.2,315.9L479.7,311.6L479.6,311.7L478.4,314.5L475.6,315.2L474.9,314.9L475.1,316.2L474.9,316.6L474.7,316.9L474.4,317.0L474.1,317.1L472.9,316.3L472.6,316.1L472.3,316.0L472.0,316.2L471.4,316.5L470.1,317.0L469.4,317.4L469.2,318.0L469.1,319.7L468.3,321.5L467.3,322.9L466.0,324.0L464.5,324.8L464.8,325.4L464.9,326.0L464.9,326.6L464.7,327.3L465.1,327.5L466.3,328.3L470.8,331.8L470.8,332.3L470.6,333.0L469.5,334.4L469.1,335.1L468.6,335.6L468.3,335.7L467.8,335.5L467.6,335.2L467.4,334.8L466.9,331.7L466.8,331.4L466.6,331.1L465.4,333.0L464.5,335.1L463.7,335.4L462.3,335.8L461.9,336.1L459.5,338.1L458.4,338.5L458.0,339.1L457.9,339.5L459.0,342.2L459.4,342.8L461.6,343.1L462.3,343.2L465.7,344.7L466.3,344.6L466.6,344.3L466.9,343.6L467.1,343.3L467.3,343.1L467.6,343.0L470.8,341.9L471.2,341.8L471.5,342.0L471.6,342.4L471.6,342.8L471.5,343.2L471.3,343.9L471.2,344.2L471.2,344.5L471.5,345.1L471.6,345.4L471.5,345.8L471.1,346.7L470.9,347.0L470.6,347.1L468.1,347.0L467.4,347.6L468.1,348.8L468.7,349.1L473.9,351.3L474.8,351.5L475.6,351.3L476.1,351.1L476.4,350.8L476.8,350.3L477.1,350.1L477.4,350.0L477.8,349.9L478.7,350.1L482.5,351.5L484.4,352.4L492.5,360.5L492.9,360.6L493.3,360.6L493.3,360.6L494.0,360.1L494.6,359.4L495.7,359.2L499.5,360.1L499.9,359.7L500.5,358.7L500.8,358.4L504.8,357.5L504.9,359.1L504.8,359.5L504.6,360.8L504.7,361.5L504.7,362.0L504.7,362.8L504.6,366.1L505.0,366.9L508.1,370.9L508.3,371.3L508.5,371.9L508.8,373.3L508.8,374.6L508.9,375.4L509.5,376.3L513.8,382.2L513.9,382.5L514.3,383.9L514.5,384.6L514.5,385.1L514.5,385.5L514.4,385.8L514.3,386.2L514.0,386.8L513.6,387.3L512.8,388.3L512.8,388.7L513.2,389.7L513.4,390.0L513.8,390.2L515.1,390.4L518.1,395.0L518.0,396.7L518.0,397.5L518.2,398.7L518.6,399.9L518.7,400.1L518.7,400.4L518.7,400.8L518.7,401.6L518.9,402.6L519.3,403.2L519.4,403.5L519.5,403.9L519.6,404.8L519.8,405.5L520.3,406.3L521.8,407.8L524.7,409.9L524.9,410.2L525.2,411.3L525.3,412.9L525.3,413.3L525.6,413.6L526.0,413.7L526.7,413.5L526.7,413.5L527.1,413.2L527.2,412.8L527.0,412.5L526.7,411.9L526.6,411.5L526.6,411.2L526.8,411.0L527.3,410.8L530.8,410.7L531.2,410.6L531.6,410.7L532.3,411.3L533.4,412.4L535.2,413.6L536.1,414.3L536.5,414.8L539.3,417.5L539.7,418.0L539.8,418.3L540.0,418.6L540.2,419.3L541.8,419.9L546.4,417.6L547.2,418.0L547.4,418.3L547.6,418.5L548.3,419.7L548.9,421.0L549.2,421.7L549.2,422.1L549.3,422.5L549.3,423.1L548.9,425.2L548.8,425.5L548.5,425.8L548.0,426.1L547.0,426.4L546.5,426.4L546.0,426.3L545.6,426.2L545.6,426.2L545.2,426.2L544.9,426.6L544.5,427.3L544.6,428.7L548.5,428.6L548.9,428.6L549.2,428.4L550.5,427.7L551.1,427.9L551.8,428.2L553.6,429.6L554.3,430.2L556.6,433.3L562.5,432.6L563.2,432.3L564.0,432.0L564.1,431.1L564.2,430.6L564.4,430.1L564.9,429.3L565.6,428.9L566.4,428.7L568.3,428.1L568.3,428.1L568.6,427.8L568.9,426.2L569.0,425.8L569.1,425.5L570.1,424.2L570.9,422.5L571.5,421.6L572.0,421.2L572.5,421.1L572.8,421.2L573.1,421.4L573.7,421.8L574.8,422.1L575.4,422.0L577.5,421.3L578.1,421.2L578.5,421.2L579.2,421.5L579.6,421.5L580.3,421.6L582.4,421.2L583.8,420.6L584.3,420.2L584.5,420.0L584.7,419.7L584.8,419.3L584.9,419.0L584.9,418.1L585.1,417.6L585.4,417.1L586.0,416.4L586.5,416.1L587.0,416.0L588.2,416.0L589.9,415.6L594.3,413.8L600.1,412.5L601.4,412.3L597.5,402.0L594.2,390.2L591.3,385.2L587.3,376.8L574.0,350.6L574.5,349.0L572.2,346.9L570.6,346.5L567.5,342.6L563.2,341.6L559.6,341.5L555.7,340.4L543.4,333.8L517.4,314.7L515.8,312.9L510.3,311.0L505.4,307.9L501.5,307.4L501.4,307.4Z M478.5,342.8L478.5,343.8L475.5,342.9L475.6,341.8L476.1,341.1L477.8,341.2L478.3,341.9L478.5,342.8Z " data-code="IT-57" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Marche" cursor="pointer"></path>
<path d="M707.2,507.4L705.6,506.7L692.6,498.9L685.9,497.8L682.9,496.6L678.2,493.5L676.8,493.3L676.8,493.3L676.8,493.3L676.7,493.6L676.9,494.6L676.8,494.9L676.7,495.3L676.3,496.0L675.9,496.9L675.8,497.3L676.0,499.2L675.7,499.7L670.2,505.0L669.5,505.5L668.4,505.9L668.4,508.4L668.1,509.0L667.4,510.0L665.5,512.0L663.0,515.2L661.6,517.5L659.7,519.9L658.7,521.7L658.4,522.1L656.5,523.0L655.1,523.7L653.8,524.1L653.0,523.6L653.0,523.2L653.3,522.6L653.3,522.2L653.2,521.9L653.1,521.5L652.6,521.0L652.2,520.5L651.7,520.0L651.6,519.7L651.5,519.3L651.4,518.9L651.6,517.7L651.5,517.4L651.4,517.0L651.2,516.8L650.9,516.5L650.4,516.0L647.5,514.2L647.1,513.9L646.8,513.6L645.6,513.8L645.1,514.5L644.7,514.6L644.3,514.6L643.5,514.2L643.0,513.9L642.7,513.6L642.5,513.3L641.9,512.4L641.7,512.1L641.4,511.9L641.1,511.7L639.7,511.1L639.1,510.8L638.9,510.6L638.8,510.4L638.1,510.3L637.7,510.4L634.5,513.1L634.3,513.2L633.6,514.7L631.6,516.8L631.1,516.8L629.0,516.6L628.6,516.8L628.2,517.2L627.7,518.3L627.6,518.8L627.8,519.2L627.8,519.2L628.4,519.8L628.7,520.3L630.2,522.6L631.1,523.2L630.8,524.6L629.1,525.1L627.8,525.7L625.9,526.9L624.7,528.1L623.8,528.1L622.7,527.5L621.1,528.4L619.7,530.2L619.3,530.5L617.9,531.2L617.5,531.6L617.0,531.8L616.4,531.9L613.9,531.3L612.4,531.7L613.0,532.6L613.5,533.1L614.4,533.8L614.6,534.0L614.8,534.3L615.5,536.0L616.6,537.6L616.8,538.0L616.9,538.7L617.1,542.1L617.3,543.1L617.5,543.7L617.9,543.9L618.1,544.1L618.3,544.5L618.4,545.1L618.4,546.7L618.5,547.1L618.7,547.5L618.7,547.9L618.4,548.4L616.5,550.6L616.7,550.9L616.7,551.7L615.1,553.2L617.0,554.2L617.3,554.5L617.7,554.9L617.9,555.6L618.2,556.2L620.7,559.9L621.3,560.4L621.6,560.6L621.9,560.8L623.7,561.1L626.0,561.4L626.9,561.3L627.3,561.2L627.7,561.0L627.7,560.7L627.5,560.0L627.4,559.5L627.0,557.9L626.6,557.6L625.8,557.0L625.3,556.5L625.1,556.2L625.0,555.9L625.1,554.8L625.5,554.3L626.4,553.3L626.6,553.1L626.9,552.4L627.3,551.9L627.7,551.2L628.0,550.8L628.8,551.0L631.5,551.3L634.0,550.9L636.3,550.8L640.4,552.0L640.7,552.1L642.4,553.4L645.3,554.6L648.7,555.7L649.8,556.1L654.1,557.7L655.0,557.8L656.4,558.0L656.9,558.2L657.5,558.8L658.2,559.9L659.4,561.2L660.9,561.3L661.9,561.4L664.3,561.3L664.8,561.4L665.1,561.7L665.7,562.5L666.0,562.8L667.1,563.2L667.6,563.1L668.3,562.9L671.8,560.6L673.3,559.8L678.8,559.7L679.9,559.3L680.8,558.6L681.2,558.2L681.5,557.7L682.0,556.0L682.3,555.8L682.7,555.8L683.4,555.9L683.8,556.2L684.1,556.4L684.7,556.9L685.3,557.3L685.9,557.6L686.3,557.7L688.3,557.2L690.7,556.1L693.7,555.2L694.4,555.1L695.2,554.8L699.8,552.1L695.5,548.8L694.5,547.8L694.5,547.4L694.5,547.0L694.5,546.6L694.6,545.4L694.6,544.5L694.6,544.1L693.9,541.1L693.7,539.7L693.7,538.9L693.8,538.5L694.7,537.4L695.0,537.2L695.3,537.1L695.7,537.0L696.1,537.1L700.7,538.5L701.1,538.2L702.0,537.5L702.6,536.5L703.1,536.1L703.5,535.8L704.2,535.6L704.5,535.4L704.9,535.2L705.8,534.0L706.7,533.3L707.4,532.5L707.7,532.2L708.0,532.0L709.5,531.6L711.6,530.4L711.6,530.4L711.7,530.0L711.5,529.8L711.5,529.8L711.1,529.7L709.2,529.4L708.8,529.3L708.4,529.2L708.1,529.0L707.8,528.7L707.6,528.5L707.3,527.8L707.1,527.0L707.1,525.7L706.7,524.3L706.7,523.2L707.0,522.2L707.1,521.5L707.2,521.0L706.7,519.5L706.6,518.8L706.5,517.7L706.6,517.1L708.4,513.8L708.5,513.2L708.5,512.4L708.5,511.8L708.8,508.0L708.9,507.7L708.9,507.7L707.2,507.4Z " data-code="IT-67" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Molise" cursor="pointer"></path>
<path d="M494.1,122.6L493.5,122.2L488.2,124.7L482.6,125.6L481.2,124.5L480.8,124.3L480.4,124.2L480.0,124.2L479.6,124.3L477.9,124.8L475.1,123.6L474.7,123.3L474.4,122.8L474.1,122.0L471.8,117.3L471.5,116.5L471.4,115.9L471.2,115.5L470.9,115.1L470.1,114.7L468.6,114.2L466.8,112.6L466.3,112.3L466.0,112.2L465.1,112.0L464.7,111.6L464.4,111.0L463.9,107.9L463.3,106.0L462.2,103.5L462.2,103.4L461.9,102.6L462.7,101.4L463.1,100.7L463.3,100.0L463.5,99.7L464.2,99.0L464.5,98.8L467.0,98.0L467.6,97.6L467.8,97.3L467.9,97.1L468.1,96.6L468.1,96.0L468.0,95.0L467.6,93.1L467.3,92.2L467.0,91.6L465.4,90.7L464.4,89.7L464.3,89.3L464.1,87.9L463.9,87.2L463.6,86.9L461.9,86.7L461.6,86.5L461.4,86.2L460.8,85.3L460.8,85.3L460.5,85.2L457.9,84.9L455.8,83.4L454.5,82.1L454.3,81.8L454.0,81.2L453.9,80.9L454.1,80.5L457.6,76.6L461.6,74.7L463.7,72.3L466.0,68.3L467.5,63.8L467.8,63.5L468.2,63.1L469.9,62.3L473.2,61.7L477.0,61.7L477.9,61.9L478.6,62.2L479.0,62.3L479.4,62.1L479.5,61.7L479.5,60.9L479.5,60.9L479.3,60.4L479.0,60.0L478.3,59.7L477.2,59.2L477.0,59.0L477.0,58.5L477.2,57.9L478.5,56.4L478.9,56.1L479.2,55.9L479.9,55.6L480.6,55.4L485.8,54.7L486.1,54.4L486.2,54.0L485.9,53.1L486.0,52.2L485.9,50.9L485.3,48.8L484.5,44.1L483.8,43.9L481.9,44.4L478.9,43.2L474.2,42.6L469.6,43.1L464.5,41.0L462.1,40.6L462.1,40.6L460.1,41.7L459.2,42.4L458.8,43.0L458.6,43.3L458.2,43.5L456.7,44.2L456.3,44.6L456.2,44.9L456.3,45.7L456.3,46.0L456.0,46.2L455.5,46.4L452.7,45.3L452.1,45.4L451.5,45.6L450.7,46.1L450.0,46.5L449.1,46.7L445.2,47.1L444.0,47.6L442.2,48.6L441.8,48.7L441.4,48.3L441.2,47.6L441.0,47.2L439.1,44.7L438.8,44.5L438.4,44.4L438.4,44.4L436.6,44.1L435.9,43.8L432.6,41.4L432.3,41.4L431.9,41.5L431.9,41.5L431.5,42.2L431.3,42.7L431.3,43.2L431.2,44.6L431.1,45.4L430.8,46.9L430.3,48.2L429.6,49.5L428.6,50.6L428.4,51.0L428.2,51.4L428.1,52.7L428.0,53.0L427.5,53.9L427.3,54.2L426.0,54.6L413.9,56.7L412.4,57.7L412.7,59.7L413.4,60.2L415.6,60.6L417.7,62.2L417.7,62.6L416.7,64.0L416.1,64.4L415.5,64.8L415.3,65.0L414.8,66.6L414.8,66.6L414.5,69.5L414.4,69.9L414.0,70.2L412.7,70.3L412.3,70.4L410.8,71.4L410.6,71.6L410.5,72.0L410.6,72.6L411.0,73.4L414.9,77.5L415.1,80.2L418.9,80.9L419.2,81.1L419.5,81.7L419.7,82.0L420.1,82.2L420.9,82.4L421.2,82.6L421.4,82.7L421.4,82.8L421.0,84.5L421.0,85.1L421.0,85.6L422.1,86.6L424.6,87.7L424.9,87.9L425.1,88.2L425.3,88.5L425.2,88.9L425.0,89.3L424.3,89.7L423.3,90.1L422.8,90.4L422.3,90.9L420.7,93.1L420.4,93.7L420.1,94.1L419.7,94.5L418.7,94.9L415.3,95.9L413.7,96.8L413.0,97.1L412.1,97.2L407.7,97.2L405.1,97.6L404.7,97.8L404.4,98.2L404.2,99.0L404.3,100.1L404.5,100.7L404.8,101.5L403.8,103.4L403.5,103.9L403.2,107.2L403.6,109.2L396.8,109.7L396.5,109.5L396.3,109.2L396.1,108.9L395.5,107.6L395.5,107.6L395.0,107.0L394.5,106.6L394.2,106.4L393.8,106.2L391.9,106.1L384.1,108.9L380.3,109.5L379.9,109.7L379.6,110.1L379.3,110.8L379.3,111.3L379.4,111.8L379.8,112.4L379.8,112.7L379.7,113.1L379.2,113.6L378.8,114.1L378.3,114.9L377.9,115.3L377.3,115.4L376.5,115.1L375.0,113.7L374.7,113.6L374.3,113.6L374.0,113.8L373.7,114.0L372.8,115.0L371.5,115.7L371.5,115.7L371.2,116.1L365.9,126.4L365.8,126.7L365.8,127.2L364.6,129.6L364.9,131.9L362.2,136.3L360.9,137.4L359.5,137.3L355.4,136.1L355.0,136.0L354.6,136.1L353.8,136.2L353.3,136.2L352.6,136.1L351.7,135.8L351.2,135.9L350.9,136.1L348.8,138.1L347.1,137.9L347.1,137.9L345.5,139.1L341.9,135.9L341.9,135.9L341.3,135.6L340.5,135.8L340.1,135.6L339.9,135.1L339.9,134.3L340.2,132.4L340.2,132.3L340.2,131.9L340.3,131.6L340.4,131.3L340.5,130.9L340.7,130.6L342.0,129.0L340.6,125.8L337.3,124.1L334.2,128.5L333.8,129.2L332.8,131.8L331.1,134.4L330.0,135.6L322.4,146.3L322.3,148.1L322.4,150.9L323.5,157.3L323.6,161.0L323.4,161.1L323.2,161.7L323.2,162.2L323.4,162.9L323.8,164.0L324.8,165.1L326.8,164.6L328.0,164.7L328.3,166.8L328.2,168.7L328.5,169.6L329.6,170.2L329.6,170.8L328.8,171.5L328.2,174.8L331.6,175.3L333.9,177.3L336.8,176.6L340.4,180.2L340.6,180.5L348.7,185.8L351.4,186.7L352.1,187.0L352.6,187.3L353.2,188.0L353.5,188.3L353.6,188.7L353.6,189.0L353.5,189.2L353.3,189.9L353.3,190.9L353.5,191.1L353.8,191.3L357.3,191.4L357.7,191.9L357.8,192.3L357.7,192.7L357.4,193.3L357.3,193.6L357.3,194.0L357.7,194.9L358.8,196.0L359.2,196.3L359.8,196.6L359.8,196.6L360.4,196.7L360.9,196.6L361.5,196.3L361.8,195.9L362.1,195.7L362.3,195.5L364.6,195.3L365.2,195.1L365.7,194.9L366.0,194.7L366.5,194.6L367.4,194.7L369.9,195.3L370.5,196.1L369.4,196.9L369.1,197.2L369.0,197.5L369.0,197.5L369.0,197.8L369.5,200.0L369.5,200.2L371.0,200.6L375.7,200.5L375.9,203.1L375.9,203.1L378.6,205.1L385.5,209.0L388.0,209.7L388.3,211.4L389.2,212.6L390.6,212.6L393.7,212.0L395.4,212.1L396.7,212.3L399.0,213.4L403.4,216.4L404.7,216.7L404.7,216.7L406.2,216.4L409.0,214.1L412.3,213.1L413.6,212.5L413.8,211.4L414.5,210.7L418.4,208.6L424.1,207.9L429.0,208.5L432.0,207.9L432.8,207.8L433.5,207.9L433.9,208.0L441.7,209.3L443.1,209.9L444.0,210.5L444.3,210.7L444.5,211.0L444.9,212.0L445.2,212.3L445.7,212.6L446.8,213.0L447.5,213.0L448.0,212.8L448.5,212.6L448.9,212.6L450.3,213.2L452.9,213.7L453.5,213.7L453.6,213.6L453.8,213.4L456.7,212.7L457.5,212.7L458.5,213.3L458.6,213.6L458.6,213.9L458.5,214.2L458.2,214.7L458.0,215.1L457.9,215.4L457.9,215.8L458.0,216.2L458.3,217.3L458.4,218.3L458.6,219.1L458.7,219.4L459.8,220.3L461.7,220.9L462.5,221.3L462.7,221.6L462.9,221.8L463.1,222.2L463.1,222.5L463.2,223.4L463.3,223.8L463.5,224.1L463.7,224.3L467.4,226.7L467.7,226.7L468.9,221.8L466.8,220.3L469.4,215.8L470.5,218.5L469.5,220.7L471.2,223.6L473.5,221.6L474.9,218.4L474.8,215.2L477.6,209.4L475.0,207.3L473.7,208.7L467.3,203.2L467.5,202.2L463.8,200.0L465.2,203.8L464.1,205.3L462.9,204.0L464.5,202.6L461.4,198.4L458.7,198.7L457.8,195.9L459.5,196.2L459.4,190.2L457.0,184.1L453.2,187.0L451.8,186.3L450.0,182.5L451.1,181.7L450.2,177.4L448.6,176.9L448.4,180.5L445.7,178.5L445.1,175.5L449.5,175.9L450.3,174.2L450.4,171.5L452.2,169.1L452.2,163.4L453.7,160.7L456.5,158.2L459.7,156.6L462.3,156.7L463.2,157.9L465.6,156.7L462.3,154.8L463.2,153.2L466.4,155.9L468.1,152.3L471.8,149.9L472.8,152.2L475.0,153.5L477.3,153.1L473.3,155.2L472.9,157.8L470.6,156.7L466.2,158.7L465.4,161.9L465.9,163.2L472.9,160.0L480.6,157.5L493.8,151.8L506.4,144.4L509.4,143.8L515.7,143.6L518.4,142.1L518.4,142.0L517.2,140.8L516.6,139.9L514.5,135.5L514.1,134.9L513.2,134.1L512.8,133.6L512.5,133.1L512.5,132.4L512.5,132.3L512.4,132.0L512.2,131.4L510.1,129.2L509.7,125.1L509.0,124.1L507.4,123.2L507.4,123.2L506.1,125.1L505.9,125.4L505.5,125.5L504.9,125.5L501.3,124.9L500.8,124.6L500.6,124.2L500.6,123.9L500.5,123.5L500.5,123.5L500.3,123.3L500.0,123.1L499.6,122.9L498.0,123.0L497.2,123.6L495.8,125.0L495.2,124.7L494.6,123.1L494.4,122.8L494.1,122.6Z M464.7,163.9L460.4,166.4L458.6,169.7L458.3,172.1L462.2,164.7L466.6,165.4L464.7,163.9Z M463.7,162.1L465.3,160.2L465.0,159.8L463.7,162.1Z M460.2,163.6L461.1,162.1L457.3,162.7L457.7,164.0L460.2,163.6Z " data-code="IT-34" data-enabled="false" fill="#ccc" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Veneto" cursor="normal"></path>
<path d="M628.8,551.0L628.0,550.8L627.7,551.2L627.3,551.9L626.9,552.4L626.6,553.1L626.4,553.3L625.5,554.3L625.1,554.8L625.0,555.9L625.1,556.2L625.3,556.5L625.8,557.0L626.6,557.6L627.0,557.9L627.4,559.5L627.5,560.0L627.7,560.7L627.7,561.0L627.3,561.2L626.9,561.3L626.0,561.4L623.7,561.1L621.9,560.8L621.6,560.6L621.3,560.4L620.7,559.9L618.2,556.2L617.9,555.6L617.7,554.9L617.3,554.5L617.0,554.2L615.1,553.2L614.3,553.3L613.7,553.5L613.2,553.9L611.1,555.9L611.0,556.0L607.5,557.5L607.0,558.3L608.5,560.9L608.5,561.4L608.5,562.1L608.2,564.4L608.6,566.6L608.3,568.0L608.4,569.2L608.3,569.6L606.8,571.3L604.8,572.1L604.4,572.5L604.1,573.2L604.0,574.4L603.6,574.7L600.0,575.5L598.6,576.3L602.7,579.5L608.0,585.3L613.4,593.5L614.2,597.6L618.3,600.3L625.6,612.5L626.4,616.1L625.8,620.2L629.2,621.5L628.5,617.6L628.9,616.7L635.9,618.3L637.3,619.8L639.1,619.7L640.6,616.7L642.6,616.1L646.3,616.0L647.9,617.1L652.6,621.8L657.3,624.8L659.1,624.3L662.4,628.7L662.2,630.3L659.6,631.2L656.6,634.2L656.1,635.4L651.2,637.4L650.5,639.3L653.0,641.5L658.2,638.3L663.4,636.6L668.3,638.5L670.5,638.1L685.0,632.2L687.5,632.8L694.5,639.1L697.0,642.5L707.1,660.1L707.0,664.0L702.1,666.5L702.8,669.2L701.8,676.1L703.2,677.1L704.8,676.8L708.7,678.9L712.6,683.1L719.2,683.0L724.7,688.1L728.5,690.0L731.1,692.6L732.5,695.3L731.2,697.1L735.5,696.7L738.1,699.7L743.7,700.7L745.3,700.1L747.6,697.1L750.4,695.4L751.7,693.2L753.5,692.2L759.7,692.7L760.9,692.2L761.5,694.3L762.9,695.3L764.2,693.9L764.2,693.3L764.2,693.3L764.2,693.3L764.0,693.2L763.7,693.1L763.4,693.0L763.1,692.7L762.9,692.2L762.9,691.9L763.7,691.2L764.4,690.3L766.4,685.7L766.1,684.4L766.1,683.7L766.2,683.3L766.4,683.0L767.0,682.4L767.8,681.4L768.1,681.0L768.3,680.8L768.9,680.5L769.6,680.3L770.9,678.8L771.4,678.5L773.1,676.4L773.4,675.5L773.1,673.3L772.9,673.0L772.4,672.5L771.2,671.7L771.0,671.4L770.8,671.2L770.2,670.3L769.9,670.1L769.6,669.9L768.0,669.0L766.3,666.7L765.8,663.0L765.8,663.0L765.7,662.4L762.4,660.9L758.4,657.5L756.4,657.0L754.4,654.1L753.8,653.7L752.8,653.2L752.2,652.7L751.9,652.4L751.5,652.1L750.7,649.8L751.0,649.0L750.9,647.8L748.8,643.4L748.6,643.1L747.6,642.1L746.5,641.2L744.1,640.4L743.5,640.3L743.0,639.9L742.7,639.6L742.6,639.3L742.6,639.0L742.7,638.7L742.8,638.4L743.0,637.9L743.9,636.6L745.3,635.7L745.6,635.5L745.9,634.5L745.9,634.0L745.7,633.6L745.4,633.4L745.0,633.3L745.0,633.3L743.7,633.1L743.2,632.9L741.3,631.9L741.0,631.7L740.0,630.3L739.7,630.1L739.2,629.6L737.8,628.9L737.4,628.5L737.0,628.0L736.3,626.9L736.0,626.2L735.8,625.7L735.5,623.0L735.1,622.2L735.1,621.7L735.1,621.2L735.0,620.9L734.7,620.6L734.8,620.3L734.9,620.1L735.0,619.6L735.0,619.6L734.8,619.4L734.4,619.1L734.1,618.9L732.8,617.8L734.2,616.4L734.5,615.5L734.4,615.1L734.1,614.3L733.9,613.6L733.8,612.3L734.2,611.3L734.2,611.3L734.4,610.0L742.7,609.7L744.2,609.1L746.9,607.5L749.2,602.8L750.4,600.2L750.8,598.8L750.5,597.3L748.9,594.5L740.2,592.0L737.6,590.4L735.6,589.5L735.4,589.7L734.9,590.2L734.1,590.2L726.3,589.7L725.7,589.6L725.3,589.4L724.2,588.0L723.8,587.5L719.5,585.1L719.0,584.7L718.8,583.8L718.9,583.5L721.1,581.0L721.6,580.6L722.4,579.9L722.6,579.6L722.7,579.4L722.8,579.0L723.1,576.9L723.6,576.6L723.7,576.3L723.6,575.9L723.3,575.3L722.3,574.2L721.8,573.7L721.3,573.4L721.3,573.4L716.1,571.2L715.8,571.4L714.6,572.5L714.3,572.6L713.3,572.7L711.8,569.4L710.8,568.6L709.9,568.4L708.7,568.0L707.8,567.5L707.3,567.1L707.0,566.6L706.5,565.3L706.4,564.8L706.4,564.4L706.6,564.0L706.8,563.8L707.1,563.5L707.3,563.3L707.5,563.1L707.7,562.8L707.7,562.5L707.9,562.2L708.1,562.0L708.7,561.7L709.0,561.5L709.1,561.2L709.1,560.6L708.8,558.3L708.5,557.7L708.2,557.2L706.4,556.5L702.4,553.4L700.2,552.4L699.8,552.1L695.2,554.8L694.4,555.1L693.7,555.2L690.7,556.1L688.3,557.2L686.3,557.7L685.9,557.6L685.3,557.3L684.7,556.9L684.1,556.4L683.8,556.2L683.4,555.9L682.7,555.8L682.3,555.8L682.0,556.0L681.5,557.7L681.2,558.2L680.8,558.6L679.9,559.3L678.8,559.7L673.3,559.8L671.8,560.6L668.3,562.9L667.6,563.1L667.1,563.2L666.0,562.8L665.7,562.5L665.1,561.7L664.8,561.4L664.3,561.3L661.9,561.4L660.9,561.3L659.4,561.2L658.2,559.9L657.5,558.8L656.9,558.2L656.4,558.0L655.0,557.8L654.1,557.7L649.8,556.1L648.7,555.7L645.3,554.6L642.4,553.4L640.7,552.1L640.4,552.0L636.3,550.8L634.0,550.9L631.5,551.3L628.8,551.0Z M644.9,645.2L640.2,644.0L640.1,645.7L644.9,645.2Z M625.1,623.4L622.8,625.4L624.1,626.1L625.1,623.4Z M619.5,628.7L619.9,626.3L618.3,625.3L613.0,623.6L611.3,625.4L610.4,628.3L618.4,629.7L619.5,628.7Z " data-code="IT-72" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" cursor="pointer" data-name="Campania"></path>
<path d="M166.1,756.1L164.3,763.0L165.1,765.0L168.1,767.1L168.0,768.6L169.4,770.8L169.0,772.7L164.8,779.0L170.2,784.7L170.9,789.6L171.9,788.9L174.4,793.4L176.1,792.4L177.3,793.1L176.2,795.2L180.8,795.9L182.0,800.3L185.4,806.3L185.9,809.5L184.7,812.0L188.3,812.9L187.7,814.8L189.4,814.8L189.0,812.7L190.4,810.8L196.2,808.7L200.6,811.4L201.8,811.3L203.7,813.0L206.5,813.7L207.4,812.3L209.2,811.6L217.4,803.4L219.1,802.1L219.9,798.6L221.2,796.4L219.3,792.8L218.6,786.7L223.4,780.0L223.0,778.2L219.0,777.6L218.8,775.5L219.9,774.9L222.0,776.8L222.8,776.3L228.3,781.8L230.7,782.5L233.2,779.1L234.7,778.4L240.5,779.8L241.0,779.1L245.5,781.6L251.0,786.7L253.9,788.9L257.0,787.8L258.3,788.0L259.6,790.6L260.5,788.9L263.4,787.4L264.9,783.3L263.8,780.7L263.8,777.3L264.9,774.5L266.9,772.2L269.1,770.7L267.2,769.3L266.2,765.4L267.1,760.9L268.9,755.5L269.3,752.3L267.8,750.5L269.7,741.1L269.1,735.2L270.9,728.6L270.1,723.4L270.1,720.9L271.4,713.0L271.3,709.5L273.3,707.7L271.8,706.8L270.9,704.0L271.2,700.8L274.0,693.2L274.1,691.6L267.4,685.5L265.3,680.3L265.2,671.6L269.0,667.5L270.4,664.6L274.3,662.1L276.4,657.1L278.2,654.3L279.2,649.6L280.1,647.9L279.5,646.2L277.1,644.1L272.6,631.8L269.9,627.1L268.9,623.9L265.0,619.9L267.5,618.2L266.8,616.9L269.2,615.2L266.8,613.3L264.7,613.5L264.5,612.3L261.0,609.9L263.2,607.8L261.6,607.5L257.6,609.3L254.7,607.8L251.8,607.2L252.4,606.5L256.8,605.1L258.4,600.4L263.6,600.8L264.5,599.7L260.6,598.0L258.3,597.9L255.5,599.0L254.6,596.3L253.1,596.9L253.7,598.3L252.1,598.3L252.8,596.8L254.0,590.8L255.4,591.2L254.5,587.9L250.1,585.8L246.1,590.8L245.9,586.7L243.0,584.0L244.0,582.0L241.2,582.0L238.2,579.3L236.8,578.9L236.7,581.3L234.9,579.9L232.7,580.6L231.2,579.9L231.1,576.4L228.0,573.9L223.1,575.8L222.5,577.5L222.8,581.6L221.1,584.8L220.6,584.0L217.2,586.5L211.6,587.1L207.7,591.7L204.9,593.9L202.8,596.7L200.2,597.6L199.8,599.1L197.0,603.8L191.0,608.5L186.4,607.8L180.9,610.2L177.6,614.6L171.3,617.2L153.9,614.8L151.2,613.3L147.3,608.9L147.4,604.4L144.6,602.4L142.8,607.1L145.4,608.5L146.0,609.9L145.6,613.3L139.8,627.0L144.5,631.8L144.3,634.2L140.7,637.3L142.7,643.4L145.1,638.1L147.0,638.6L145.5,642.0L147.2,642.8L151.3,640.4L153.3,640.3L155.0,642.0L156.9,648.8L161.0,653.0L162.0,655.6L161.7,662.7L161.9,664.7L163.8,666.1L164.4,665.3L168.4,668.4L169.6,670.7L169.7,673.7L168.5,678.3L171.2,691.0L170.6,692.6L162.9,695.8L164.8,697.8L163.9,702.4L164.7,706.1L164.1,708.1L166.2,710.9L167.8,714.4L167.6,710.3L169.8,708.7L172.4,708.9L174.9,710.3L177.5,713.8L177.7,714.9L176.7,721.4L177.1,722.0L174.1,726.5L174.8,729.0L179.1,730.3L175.0,730.2L170.9,724.8L168.8,724.6L170.4,742.1L171.1,742.9L167.9,749.8L165.7,752.6L165.3,754.5L166.1,756.1Z M164.1,789.6L163.4,795.3L164.8,798.6L168.0,803.6L169.7,805.7L171.7,802.2L174.5,794.5L172.2,794.1L171.1,791.2L166.3,790.9L164.1,789.6Z M159.6,791.0L160.1,789.4L159.3,781.9L154.3,783.2L153.1,784.0L155.4,790.7L156.6,791.4L159.6,791.0Z M154.8,589.4L149.0,593.5L145.1,600.4L148.1,600.6L148.3,595.6L150.2,594.2L154.9,593.5L155.6,590.2L154.8,589.4Z M271.5,613.8L271.8,613.0L269.3,612.5L271.5,613.8Z M271.3,608.7L270.7,607.4L266.2,610.6L268.1,610.8L271.3,608.7Z M248.0,581.1L248.6,578.4L246.9,575.9L245.2,581.5L248.0,582.8L248.0,581.1Z M244.9,578.4L243.7,574.0L241.7,574.5L239.8,577.9L244.9,578.4Z M243.6,580.0L242.8,579.3L242.8,581.5L243.6,580.0Z M240.0,570.6L239.4,569.7L238.9,571.3L240.0,570.6Z M237.9,576.9L238.1,575.3L236.4,575.0L237.9,576.9Z M237.9,570.2L236.3,569.3L236.0,569.7L237.9,570.2Z M220.7,575.5L221.2,577.1L221.7,576.7L220.7,575.5Z " data-code="IT-88" data-enabled="false" fill="#ccc" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Sardegna" cursor="normal"></path>
<path d="M820.2,628.5L815.3,624.6L806.9,616.1L805.3,613.9L804.0,610.8L799.7,607.6L799.2,607.6L797.7,608.0L797.4,608.1L797.1,608.3L796.9,608.5L796.5,609.0L796.3,609.3L796.0,609.5L795.7,609.5L795.3,609.5L794.9,609.3L794.0,608.8L794.0,608.8L784.9,604.9L784.6,604.7L784.4,604.3L784.3,603.7L784.6,603.5L785.0,603.4L785.3,603.4L785.6,603.4L785.8,603.3L786.7,602.5L787.4,600.8L788.0,598.6L788.0,598.3L787.4,597.5L783.8,593.9L782.9,592.8L781.9,592.0L781.1,591.4L779.2,590.6L776.7,589.9L776.3,589.7L775.2,588.9L773.6,587.0L773.0,586.3L772.3,586.9L766.0,589.5L764.6,589.7L751.6,589.1L750.6,589.5L749.7,590.3L748.9,591.4L748.5,593.1L748.9,594.5L750.5,597.3L750.8,598.8L750.4,600.2L749.2,602.8L746.9,607.5L744.2,609.1L742.7,609.7L734.4,610.0L734.2,611.3L733.8,612.3L733.9,613.6L734.1,614.3L734.4,615.1L734.5,615.5L734.2,616.4L732.8,617.8L734.1,618.9L734.4,619.1L734.8,619.4L735.0,619.6L734.9,620.1L734.8,620.3L734.7,620.6L735.0,620.9L735.1,621.2L735.1,621.7L735.1,622.2L735.5,623.0L735.8,625.7L736.0,626.2L736.3,626.9L737.0,628.0L737.4,628.5L737.8,628.9L739.2,629.6L739.7,630.1L740.0,630.3L741.0,631.7L741.3,631.9L743.2,632.9L743.7,633.1L745.0,633.3L745.4,633.4L745.7,633.6L745.9,634.0L745.9,634.5L745.6,635.5L745.3,635.7L743.9,636.6L743.0,637.9L742.8,638.4L742.7,638.7L742.6,639.0L742.6,639.3L742.7,639.6L743.0,639.9L743.5,640.3L744.1,640.4L746.5,641.2L747.6,642.1L748.6,643.1L748.8,643.4L750.9,647.8L751.0,649.0L750.7,649.8L751.5,652.1L751.9,652.4L752.2,652.7L752.8,653.2L753.8,653.7L754.4,654.1L756.4,657.0L756.9,657.2L758.4,657.5L762.4,660.9L765.7,662.4L765.8,663.0L766.3,666.7L768.0,669.0L769.6,669.9L769.9,670.1L770.2,670.3L770.8,671.2L771.0,671.4L771.2,671.7L772.4,672.5L772.9,673.0L773.1,673.3L773.4,675.5L773.1,676.4L771.4,678.5L770.9,678.8L769.6,680.3L768.9,680.5L768.3,680.8L768.3,680.8L768.1,681.0L767.8,681.4L767.0,682.4L766.4,683.0L766.2,683.3L766.1,683.7L766.1,684.4L766.4,685.7L764.4,690.3L763.7,691.2L762.9,691.9L762.9,692.2L763.1,692.7L763.4,693.0L763.7,693.1L764.0,693.2L764.2,693.3L764.2,693.9L762.9,695.3L763.3,695.7L765.8,699.2L768.8,702.0L771.5,707.2L771.9,707.7L773.5,704.6L780.1,699.3L784.5,701.5L785.8,699.7L788.4,699.6L788.7,699.8L788.9,700.0L790.0,701.5L790.3,701.8L790.6,702.0L791.1,702.2L791.8,702.3L792.3,702.1L793.8,701.4L794.3,701.4L794.5,701.6L794.4,701.9L793.8,703.2L793.6,703.9L793.6,704.4L793.6,704.7L793.8,705.0L794.0,705.3L796.0,707.2L797.1,708.6L797.4,708.9L797.9,709.1L798.7,709.5L800.5,709.4L809.3,708.7L810.0,708.4L810.2,707.8L810.4,707.5L810.7,707.2L812.0,706.5L813.7,705.9L814.5,705.9L818.3,706.5L818.6,706.7L820.0,707.8L820.3,708.0L820.5,708.3L821.3,709.5L821.7,709.8L822.4,710.1L822.6,709.9L822.8,709.6L822.8,709.6L822.8,709.2L822.6,708.1L822.5,707.7L822.3,707.4L822.0,707.2L821.7,707.1L821.4,706.9L821.3,706.6L821.3,706.3L821.5,706.0L822.0,705.5L822.1,705.3L822.3,704.9L822.4,704.6L822.6,703.3L822.8,702.6L822.9,702.3L823.1,702.0L823.6,701.6L824.0,701.0L824.2,700.7L824.4,700.1L824.4,700.0L824.5,699.2L824.2,697.3L825.0,694.5L825.5,693.0L825.7,691.6L825.6,689.2L825.6,688.4L825.7,687.8L825.9,687.4L826.0,687.0L826.3,686.7L826.7,686.3L827.2,686.3L827.4,686.4L828.4,687.4L828.7,687.5L834.7,687.9L835.1,687.8L837.7,687.3L842.9,687.7L844.5,688.1L844.5,688.1L847.5,685.4L850.2,680.6L855.0,669.7L861.0,660.8L861.0,660.8L860.2,660.1L858.1,657.6L857.2,657.0L857.0,656.7L856.5,656.2L855.0,653.5L854.5,652.9L852.9,652.5L851.1,653.1L850.7,653.1L850.3,653.1L850.1,652.9L849.4,652.1L849.1,651.4L847.8,646.0L847.4,645.0L846.6,636.2L847.2,633.4L846.5,628.3L844.6,626.5L844.6,626.5L844.3,626.3L843.7,626.1L841.1,625.5L839.4,624.5L839.0,624.2L838.4,624.0L835.5,623.6L834.8,623.8L834.6,624.0L834.7,624.4L834.8,624.7L834.2,624.9L832.6,624.1L831.5,624.1L831.5,624.1L831.4,624.4L832.6,626.6L832.4,626.8L832.0,626.8L831.4,626.5L830.6,625.7L830.0,624.7L829.7,624.1L829.5,623.9L829.1,623.7L828.7,623.8L828.5,623.9L828.2,624.1L826.5,625.5L824.8,627.5L823.4,628.9L822.8,629.2L822.2,629.5L821.4,629.2L820.2,628.5Z " data-code="IT-77" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Basilicata" cursor="pointer"></path>
<path d="M827.2,686.3L827.2,686.3L826.7,686.3L826.3,686.7L826.0,687.0L825.9,687.4L825.7,687.8L825.6,688.4L825.6,689.2L825.7,691.6L825.5,693.0L825.0,694.5L824.2,697.3L824.5,699.2L824.4,700.0L824.4,700.1L824.2,700.7L824.0,701.0L823.6,701.6L823.1,702.0L822.9,702.3L822.8,702.6L822.6,703.3L822.4,704.6L822.3,704.9L822.1,705.3L822.0,705.5L821.5,706.0L821.3,706.3L821.3,706.6L821.4,706.9L821.7,707.1L822.0,707.2L822.3,707.4L822.5,707.7L822.6,708.1L822.8,709.2L822.8,709.6L822.6,709.9L822.4,710.1L821.7,709.8L821.3,709.5L820.5,708.3L820.3,708.0L820.0,707.8L818.6,706.7L818.3,706.5L814.5,705.9L813.7,705.9L812.0,706.5L810.7,707.2L810.4,707.5L810.4,707.5L810.2,707.8L810.0,708.4L809.3,708.7L800.5,709.4L798.7,709.5L797.9,709.1L797.4,708.9L797.1,708.6L796.0,707.2L794.0,705.3L793.8,705.0L793.6,704.7L793.6,704.4L793.6,703.9L793.8,703.2L794.4,701.9L794.5,701.6L794.3,701.4L793.8,701.4L792.3,702.1L791.8,702.3L791.1,702.2L790.6,702.0L790.3,701.8L790.0,701.5L788.9,700.0L788.7,699.8L788.4,699.6L788.4,699.6L785.8,699.7L784.5,701.5L780.1,699.3L773.5,704.6L771.9,707.7L774.5,711.1L775.3,713.3L775.3,718.2L775.8,719.3L778.4,730.9L781.2,735.2L784.3,744.2L785.1,745.5L790.1,749.3L792.4,753.0L795.8,756.9L799.6,766.4L800.5,770.0L805.4,794.0L810.7,804.3L812.1,806.2L816.4,808.4L817.9,812.0L818.3,816.3L817.1,824.5L815.5,827.4L810.8,830.2L804.8,829.5L800.9,829.8L798.2,831.1L793.1,834.5L787.6,837.6L788.4,840.8L790.7,842.2L793.3,844.8L794.8,847.7L794.4,855.6L785.7,875.7L777.4,878.3L774.6,879.5L773.3,881.6L774.8,887.6L773.3,894.8L776.5,900.0L774.9,901.5L774.8,903.4L777.6,907.8L783.6,911.5L785.8,912.0L800.8,911.2L805.8,912.7L811.0,911.3L814.0,908.4L815.7,903.8L817.2,892.9L818.5,889.6L829.1,875.8L831.7,873.4L839.4,869.3L842.0,868.4L849.4,861.5L850.0,860.1L850.0,850.0L848.1,843.0L846.7,835.2L845.4,832.4L845.6,830.0L847.4,826.5L848.1,823.6L850.9,820.4L855.7,817.9L860.2,814.0L869.2,810.0L877.1,807.9L878.9,807.8L884.5,811.3L888.4,809.5L890.5,809.9L891.4,812.0L896.5,805.1L896.3,801.1L899.0,798.6L894.9,797.5L891.7,792.4L891.3,789.3L892.5,783.4L892.3,779.0L889.7,774.2L889.8,767.1L892.4,760.2L889.5,759.9L886.5,758.6L883.7,756.6L880.3,752.8L874.7,750.8L870.6,747.7L865.5,745.3L864.0,743.0L859.8,739.4L857.0,738.5L846.6,738.0L843.8,736.8L839.9,734.4L837.2,731.4L835.7,725.6L834.4,722.8L834.4,719.7L835.5,716.5L838.0,711.6L841.7,708.2L844.8,703.5L843.1,700.4L841.8,691.6L843.3,689.2L844.5,688.1L842.9,687.7L837.7,687.3L835.1,687.8L834.7,687.9L828.7,687.5L828.4,687.4L827.4,686.4L827.2,686.3Z " data-code="IT-78" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Calabria" cursor="pointer"></path>
<path d="M531.6,884.5L531.2,888.8L531.4,891.4L526.2,892.4L524.4,896.1L521.9,897.9L519.2,896.9L515.0,901.1L512.5,902.1L513.5,903.2L512.6,909.1L510.9,913.0L512.0,917.5L511.0,922.3L508.1,925.3L512.5,935.0L516.8,939.6L520.1,939.7L522.9,941.7L526.6,947.5L528.6,949.2L531.8,949.5L538.7,948.3L545.5,948.1L552.3,948.9L555.0,950.0L558.8,956.2L561.7,955.9L572.0,957.3L578.9,963.0L581.2,966.9L584.0,968.3L585.6,969.8L589.3,971.9L596.3,976.7L599.3,977.8L606.2,979.4L608.7,981.1L616.2,988.1L619.0,989.9L622.0,991.2L625.7,991.9L628.9,993.2L634.3,997.2L650.5,995.5L653.7,996.0L660.7,999.3L666.8,1003.1L674.8,1010.4L677.0,1013.3L684.6,1027.8L685.6,1029.0L695.2,1031.2L700.2,1033.1L702.5,1036.0L707.6,1036.7L710.7,1038.8L716.1,1036.0L719.1,1035.5L722.2,1036.6L725.6,1038.9L731.9,1039.3L735.5,1042.9L737.3,1043.4L740.5,1041.3L740.5,1040.0L738.7,1033.8L736.5,1028.4L737.5,1026.3L741.2,1015.5L742.4,1013.4L748.1,1010.5L750.1,1010.4L749.9,1007.6L753.7,1006.4L755.3,1006.5L753.4,1003.1L751.7,1003.3L751.2,1000.5L752.5,1001.2L752.8,998.7L751.1,996.4L749.0,996.2L746.1,993.7L742.8,989.4L741.7,986.2L742.9,984.1L744.7,983.1L744.7,984.9L747.1,981.0L745.8,979.2L740.9,977.6L734.9,974.4L733.6,972.1L732.4,960.1L732.5,958.3L734.2,953.6L738.0,949.0L740.5,936.8L741.6,935.6L740.5,930.4L743.1,925.4L746.5,921.6L747.9,918.3L754.7,906.8L763.1,895.6L767.3,883.8L769.1,879.6L772.3,877.4L771.5,875.5L766.7,873.4L762.8,873.7L759.7,876.8L753.8,880.4L747.4,882.6L742.1,882.7L740.5,879.5L737.7,885.5L735.7,888.2L728.4,891.1L721.6,888.7L718.4,887.9L715.3,885.2L713.0,885.0L710.3,886.2L704.1,887.8L698.7,888.1L695.8,891.9L690.9,895.9L680.8,899.8L676.9,900.5L674.1,899.2L670.3,901.3L665.9,902.5L661.1,902.8L650.8,901.4L648.3,902.0L643.4,901.2L639.8,899.2L638.8,900.4L632.0,902.1L621.1,907.1L615.7,906.3L613.2,905.0L609.3,904.2L603.7,900.3L600.3,898.5L599.6,894.6L597.2,892.9L587.1,893.7L585.1,886.5L581.3,883.7L580.3,881.6L573.8,883.0L573.2,885.3L571.3,886.2L567.1,885.8L564.2,884.7L561.5,885.5L561.5,887.2L558.8,889.7L560.4,894.5L556.9,897.9L550.1,901.0L546.5,901.4L543.8,900.0L542.7,898.3L540.3,897.1L536.9,892.3L534.6,887.6L531.6,884.5Z M498.6,910.5L495.7,910.7L495.9,912.4L498.1,912.0L501.7,913.2L502.6,912.0L498.6,910.5Z M475.1,1025.5L471.2,1024.6L470.5,1027.1L473.8,1031.9L476.8,1034.0L479.7,1034.4L481.5,1031.7L481.3,1029.3L476.7,1024.6L475.1,1025.5Z M478.2,908.5L476.9,905.8L474.1,906.0L475.6,908.4L477.1,909.4L478.2,908.5Z M566.1,833.1L566.7,830.6L565.4,830.6L564.2,832.9L566.1,833.1Z M735.9,824.5L735.2,820.9L732.7,823.2L735.9,824.5Z M719.5,866.1L720.2,865.5L718.0,861.9L715.9,859.8L715.2,863.5L718.6,866.9L719.5,866.1Z M716.4,857.7L715.1,854.8L717.3,854.8L715.3,850.6L712.5,850.6L710.6,854.8L714.9,857.9L716.4,857.7Z M707.2,847.9L708.3,845.7L706.0,844.2L701.3,845.5L703.9,847.6L707.2,848.8L707.2,847.9Z M684.1,847.0L682.1,844.2L680.6,843.9L681.2,846.6L684.1,847.0Z M665.5,848.9L663.9,848.0L664.3,849.3L665.5,848.9Z M554.5,1126.4L552.3,1124.7L552.2,1125.3L554.5,1126.4Z M534.9,1163.5L527.4,1160.5L526.8,1161.0L534.9,1163.5Z " data-code="IT-82" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Sicilia" cursor="pointer"></path>
<path d="M708.9,507.7L708.8,508.0L708.5,511.8L708.5,512.4L708.5,513.2L708.4,513.8L706.6,517.1L706.5,517.7L706.6,518.8L706.7,519.5L707.2,521.0L707.1,521.5L707.0,522.2L706.7,523.2L706.7,524.3L707.1,525.7L707.1,527.0L707.3,527.8L707.6,528.5L707.8,528.7L708.1,529.0L708.4,529.2L708.8,529.3L709.2,529.4L711.1,529.7L711.5,529.8L711.7,530.0L711.6,530.4L709.5,531.6L708.0,532.0L707.7,532.2L707.4,532.5L707.4,532.5L706.7,533.3L705.8,534.0L704.9,535.2L704.5,535.4L704.2,535.6L703.5,535.8L703.1,536.1L702.6,536.5L702.6,536.5L702.0,537.5L701.1,538.2L700.7,538.5L696.1,537.1L695.7,537.0L695.3,537.1L695.0,537.2L694.7,537.4L693.8,538.5L693.7,538.9L693.7,539.7L693.9,541.1L694.6,544.1L694.6,544.5L694.6,545.4L694.5,546.6L694.5,547.0L694.5,547.4L694.5,547.8L695.5,548.8L699.8,552.1L700.2,552.4L702.4,553.4L706.4,556.5L706.4,556.5L708.2,557.2L708.5,557.7L708.8,558.3L709.1,560.6L709.1,561.2L709.0,561.5L708.7,561.7L708.1,562.0L707.9,562.2L707.7,562.5L707.7,562.8L707.5,563.1L707.3,563.3L707.1,563.5L706.8,563.8L706.6,564.0L706.4,564.4L706.4,564.8L706.5,565.3L707.0,566.6L707.3,567.1L707.8,567.5L708.7,568.0L709.9,568.4L710.8,568.6L711.8,569.4L713.3,572.7L714.3,572.6L714.6,572.5L715.8,571.4L716.1,571.2L721.3,573.4L721.8,573.7L722.3,574.2L723.3,575.3L723.6,575.9L723.7,576.3L723.6,576.6L723.1,576.9L722.8,579.0L722.7,579.4L722.6,579.6L722.4,579.9L721.6,580.6L721.1,581.0L718.9,583.5L718.8,583.8L719.0,584.7L719.5,585.1L723.8,587.5L724.2,588.0L725.3,589.4L725.7,589.6L726.3,589.7L734.1,590.2L734.9,590.2L735.4,589.7L735.6,589.5L737.6,590.4L740.2,592.0L748.9,594.5L748.9,594.5L748.5,593.1L748.9,591.4L749.7,590.3L750.6,589.5L751.6,589.1L764.6,589.7L766.0,589.5L772.3,586.9L773.0,586.3L773.6,587.0L775.2,588.9L776.3,589.7L776.7,589.9L779.2,590.6L781.1,591.4L781.9,592.0L782.9,592.8L783.8,593.9L787.4,597.5L788.0,598.3L788.0,598.6L787.4,600.8L786.7,602.5L785.8,603.3L785.6,603.4L785.3,603.4L785.0,603.4L784.6,603.5L784.3,603.7L784.4,604.3L784.6,604.7L784.9,604.9L794.0,608.8L794.9,609.3L795.3,609.5L795.7,609.5L796.0,609.5L796.3,609.3L796.5,609.0L796.9,608.5L797.1,608.3L797.4,608.1L797.7,608.0L799.2,607.6L799.7,607.6L804.0,610.8L805.3,613.9L806.9,616.1L815.3,624.6L820.2,628.5L821.4,629.2L822.2,629.5L822.8,629.2L823.4,628.9L824.8,627.5L826.5,625.5L828.2,624.1L828.5,623.9L828.7,623.8L829.1,623.7L829.5,623.9L829.7,624.1L830.0,624.7L830.6,625.7L830.6,625.7L831.4,626.5L832.0,626.8L832.4,626.8L832.6,626.6L831.4,624.4L831.5,624.1L832.6,624.1L834.2,624.9L834.2,624.9L834.6,624.9L834.8,624.7L834.8,624.7L834.7,624.4L834.6,624.0L834.8,623.8L835.5,623.6L838.4,624.0L839.0,624.2L839.4,624.5L841.1,625.5L843.7,626.1L844.3,626.3L844.6,626.5L846.5,628.3L845.1,629.8L845.3,630.6L847.2,633.4L846.6,636.2L847.4,645.0L847.8,646.0L849.1,651.4L849.4,652.1L850.1,652.9L850.3,653.1L850.7,653.1L851.1,653.1L852.9,652.5L854.5,652.9L855.0,653.5L856.5,656.2L857.0,656.7L857.2,657.0L858.1,657.6L860.2,660.1L861.0,660.8L861.0,660.8L864.6,655.3L869.5,650.6L875.4,647.9L884.2,648.6L887.2,651.6L891.8,649.5L898.1,650.0L897.7,651.6L896.0,652.5L892.0,651.8L890.4,652.4L892.2,654.1L891.9,655.7L888.5,657.8L889.7,659.2L896.8,661.9L905.6,666.8L909.0,666.8L915.1,669.5L942.9,670.9L944.2,671.3L948.6,674.4L950.3,682.3L956.6,687.9L957.9,690.4L957.4,692.6L957.8,695.5L959.3,699.0L957.4,700.5L958.4,701.5L964.3,709.0L969.4,711.8L972.1,714.2L974.2,715.0L982.3,716.9L986.5,719.9L989.7,720.6L991.0,717.7L991.7,712.3L990.9,707.6L993.4,697.8L997.2,694.5L997.7,691.5L999.3,686.0L997.8,684.7L991.8,673.1L985.7,666.0L982.1,663.2L979.7,659.9L975.8,656.8L973.9,654.1L971.6,653.4L963.7,649.4L956.5,644.1L953.3,634.8L949.0,635.1L948.9,632.8L946.0,631.5L939.5,630.4L931.2,625.1L921.6,621.4L914.4,619.7L908.2,616.9L902.7,611.8L897.0,608.7L893.6,604.4L890.6,601.9L884.3,597.9L871.9,591.8L857.4,587.6L855.6,586.0L854.6,586.7L852.8,585.4L832.9,579.4L826.6,575.1L821.5,573.9L808.0,567.4L792.2,560.9L789.6,559.0L784.3,557.5L776.7,552.4L774.8,550.1L773.3,546.7L772.6,542.7L773.0,539.0L774.9,536.5L783.0,532.5L785.8,530.4L789.1,526.8L793.8,524.3L795.7,521.6L793.9,511.5L792.4,511.5L790.5,508.9L781.1,506.5L760.6,508.7L747.2,508.1L733.8,510.1L730.1,510.1L720.2,508.1L710.7,508.1L708.9,507.7L708.9,507.7Z " data-code="IT-75" fill="#b1d2e5" data-enabled="true" fill-opacity="1" stroke="#fefefe" stroke-width="2" stroke-opacity="1" data-name="Puglia" cursor="pointer"></path>
</g>
</svg>
								</div>
							</div>							
							<div class="col-sm-6 col-sm-offset-1 col-xs-12 margin-top20">
								<div class="col-xs-12 margin-top-xs-20">
								 	<label class="control-label margin-top0">Tipologia di veicolo:</label>
									<div class="form-field gestore">
										
										
																								
										
											
												<div class="col-xs-6 col-sm-5 text-center">
												<label class="imgLabel labelAutomezzo" for="tipoVeicolo0" onmouseover="stateOver(this)" onmouseout="stateOut(this)" onclick="stateSelected(this)">
													<div class="tipoAutomezzo gestoreAttivo">
														<img class="image-responsive selected" id="gestoreImg0" title="Automobile" src="/HT/IMAGES/nGrafica/ico_bollo-AU.png" style="margin-top: -125px;">
													</div>
													<input type="radio" name="codTipoVeicolo" value="AU" checked="checked" id="tipoVeicolo0" class="input_hidden inputGestore">
													Autoveicolo
												</label>
												</div>
											
																								
										
																								
										
											
												<div class="col-xs-6 col-sm-5 text-center">
												<label class="imgLabel labelAutomezzo" for="tipoVeicolo1" onmouseover="stateOver(this)" onmouseout="stateOut(this)" onclick="stateSelected(this)">
													<div class="tipoAutomezzo">
														<img class="image-responsive" id="gestoreImg1" title="Motociclo" src="/HT/IMAGES/nGrafica/ico_bollo-MO.png" style="margin-top: -5px;">
													</div>
													<input type="radio" name="codTipoVeicolo" value="MO" id="tipoVeicolo1" class="input_hidden inputGestore">
													Motoveicolo
												</label>
												</div>
											
																								
										
																								
										
																								
										                    
									</div>
								</div>
								<div class="col-xs-12 margin-top-xs-40 margin-bottom-xs-10 margin-top-sm-60">
									<span class="scrittatarga float-xs-left margin-top-xs-20" style="display: inline;">Targa:</span>
									<span class="scrittatelaio" style="display: none;">Ultime 8 cifre telaio:</span>
									<div class="margin-top10">
										<input type="text" name="targa" maxlength="9" value="" id="targa" style="" class="form-control uppercase margin-left-xs-20 targa">
									</div>
								</div>
							</div>
						</div>
<!-- fine riga 20 -->


<!-- riga 21 -->
		<div class="form-group clearfix">
			<div class="form-field-input col-xs-12 col-sm-8">
				<div class="form-field-input col-xs-12 clear-padding">
					<div class="form-field-input col-xs-12 col-sm-8 clear-padding-left">
						<label for="codiceFreccia1" class="control-label">
							Cod. identific. pagamento 
							<a href="#" class="hidden-xs" onclick="javascript:ApriPopup('/HT/IMAGES/PAGAMENTI/BOL/FRECCIA.gif',625,290,'popup')">
								<img src="/HT/IMAGES/i_dettaglio.gif" height="14" width="14" align="right" title="Dettaglio" alt="Dettaglio">
							</a>&nbsp;
							<a href="#" class="hidden-xs" onclick="javascript:ApriPopup('/HT/IMAGES/PAGAMENTI/BOL/FRECCIA.gif',625,290,'popup')">
								Fac-simile Freccia 
							</a>
						</label>
						<div class="form-field">
							<div class="col-xs-3 col-sm-2">
								<input type="text" name="codiceFreccia1" maxlength="5" size="6" value="" id="codiceFreccia1" style="float:left;margin-right:5px" class="form-control">
							</div>
							<div class="col-xs-offset-1 col-xs-7 col-sm-offset-1 col-sm-6">
								<input type="text" name="codiceFreccia2" maxlength="16" size="17" value="" id="codiceFreccia2" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-4 clear-padding">
						<label for="importoFrecciaString" class="control-label">
								Importo 
						</label>
						<div class="form-field">
								<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" class="form-control wauto floatl">
								<span style="float:left;padding:0 5px 5px 5px">,</span>
								<input type="text" name="importoDec" maxlength="6" size="2" value="" id="importoInt" class="form-control wauto">
						</div>
					</div>
				</div>
				<div class="form-field-input col-xs-12 clear-padding">
					<label for="coordinateCreditore" class="control-label">
						Coordinate bancarie creditore
					</label>
					<div class="form-field">
						<input type="text" name="coordinateCreditore" maxlength="27" size="27" value="" id="coordinateCreditore" class="form-control">
					</div>
				</div>
				<div class="form-field-input col-xs-12 clear-padding">
					<label for="note" class="control-label">
						Descrizione pagamento
					</label>
					<div class="form-field">
						<input type="text" name="note" maxlength="50" size="55" value="Opzionale" id="note" class="form-control placeh">
					</div>
				</div>
				
				<div class="form-field-input col-xs-6 clear-padding">
					<label for="dataEsecuzione" class="control-label">
						Data esecuzione <a href="javascript:OpenHelp('/template/modale.php')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
						<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						  <div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header clearfix">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
								</div>
								<div class="modal-body">
									
								</div>
							</div>
						  </div>
						</div>
					</label>
					<div class="form-field">
						<input type="text" name="dataEsecuzione" size="12" value="06/04/2017" id="dataEsecuzione" class="datepicker form-control floatl-marginr10 wauto" />
					</div>
				</div>
				
				
				<div class="form-field-input col-xs-6 clear-padding">
					<label for="codEsenzione" class="control-label">
						Codice esenzione 
					</label>
					<div class="form-field">
						<input type="text" name="codEsenzione" maxlength="1" size="3" value="" id="codEsenzione" class="form-control">
					</div>
				</div>
			</div>
		
			<div class="form-field-input col-xs-12 col-sm-4">
				<div class="form-field-input col-xs-12 clear-padding">
					<label for="cinImporto" class="control-label">
						CIN Importo 
					</label>
					<div class="form-field">
						<input type="text" name="cinImporto" maxlength="1" size="10" value="" id="cinImporto" class="form-control wauto">
					</div>
				</div>
				<div class="form-field-input col-xs-12 clear-padding">
					<label for="cinIntermedio" class="control-label">
						CIN Intermedio 
					</label>
					<div class="form-field">
						<input type="text" name="cinIntermedio" maxlength="1" size="10" value="" id="cinIntermedio" class="form-control wauto">
					</div>
				</div>
				<div class="form-field-input col-xs-12 clear-padding">
					<label for="cinComplessivo" class="control-label">
						CIN Complessivo 
						</label>
					<div class="form-field">
						<input type="text" name="cinComplessivo" maxlength="1" size="10" value="" id="cinComplessivo" class="form-control wauto">
					</div>
				</div>
				<div class="form-field-input col-xs-12 clear-padding">
					<label for="codDivisa" class="control-label">
						Codice divisa 
					</label>
					<div class="form-field">
						<input type="text" name="codDivisa" maxlength="1" size="10" value="" id="codDivisa" class="form-control wauto">
					</div>
				</div>
			</div>
		</div>
<!-- fine riga 21 -->

<!-- riga 22 -->
		<div class="form-group clearfix">
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label">Importo</label>
				<div class="form-field">
					<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" style="width:auto;float: left; text-align: right" class="form-control">
					<span style="float: left; padding: 5px;">,</span>
					<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" style="width:auto" class="form-control">
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label">Causale</label>
				<div class="form-field">
					<textarea name="causale" cols="50" rows="3" onblur="formattaStr(this, 150)" id="causale" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
			</div>
		</div>
<!-- fine riga 22 -->

<!-- riga 23 -->
		<div class="form-group margin-bottom10 clearfix">
			<div class="form-field-input col-sm-4 col-xs-12">
				<label for="attualePwd" class="control-label">
					PIN originario
						<a href="#" onclick="javascript:ApriPopup('/HT/IMAGES/CARTE/FacSimilePINYouCard.gif',550,350,'popup')" class="hidden-xs">
							<img src="/HT/IMAGES/i_dettaglio.gif" height="14" width="14" style="text-align:right" class="margin-left20" title="Dettaglio" alt="Dettaglio">
						</a>
				</label>
				<div class="form-field floatl">
					<input type="password" name="oldPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="attualePwd" style="float:left;margin-right:10px" class="form-control w-auto">
					<input type="text" name="oldPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="attualeText" style="float: left; margin-right: 10px; display: none;" class="form-control w-auto" disabled="">
				</div>
				<div class="form-field" style="clear:both">
					<input type="checkbox" id="mostraPassword" onclick="settaValoreCheckbox();cambiaMostraPassword();" style="vertical-align: middle;">
					Mostra PIN
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
				<div class="form-field">
					<input name="mostraPwd" value="false" type="hidden" id="mostraPasswordParameter">
				</div>
			
				<label for="nuovaPwd" class="control-label"> PIN nuovo </label>
				<div class="form-field floatl">
					<input type="password" name="newPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="nuovaPwd" class="form-control w-auto">
					<input type="text" name="newPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="nuovaText" class="form-control w-auto" disabled="" style="display: none;">
				</div>
				<div class="form-field" style="font-style: italic;clear:both">
					(inserisci solo valori numerici)
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
				<label for="confermaPwd" class="control-label"> Conferma PIN nuovo </label>
				<div class="form-field">
					<input type="password" name="reNewPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="confermaPwd" class="form-control w-auto">
					<input type="text" name="reNewPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="confermaText" class="form-control w-auto" disabled="" style="display: none;">
				</div>
			</div>
		</div>
<!-- fine riga 23 -->

<!-- riga 24 -->
		<div class="form-field-resume col-xs-11 nopadding clearfix">
			<div class="form-field-input col-sm-4 col-xs-11 margin-top-xs-10">
				<label class="control-label">Prelievi da ATM</label>
				<div class="col-xs-10 col-xs-offset-1 clear-padding padding-left-xs-20">
					<div>
						<input type="radio" name="addebitoAtm" value="P" id="addebitoAtmPRE" class="sfondoForm">
						<span class="hidden-xxs">Addebito</span> prepagato 
					</div>
					<div class="padding-top-xs-5">
								<input type="radio" name="addebitoAtm" value="D" checked="checked" id="addebitoAtmIMM" class="sfondoForm">
						<span class="hidden-xxs">Addebito</span> immediato
					</div>
					<div class="padding-top-xs-5">
								<input type="radio" name="addebitoAtm" value="C" disabled="disabled" id="addebitoAtm" class="sfondoForm">
						<span class="hidden-xxs">Addebito</span> a fine mese
					</div>
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-11 margin-top-xs-10">
				<label class="control-label">Pagamenti in negozi fisici</label>
				<div class="col-xs-10 col-xs-offset-1 clear-padding padding-left-xs-20">
					<div>
						<input type="radio" name="addebitoPos" value="P" id="addebitoPosPRE" class="sfondoForm">
						<span class="hidden-xxs">Addebito</span> prepagato 
					</div>
					<div class="padding-top-xs-5">
								<input type="radio" name="addebitoPos" value="D" checked="checked" id="addebitoPosIMM" class="sfondoForm">
						<span class="hidden-xxs">Addebito</span> immediato
					</div>
					<div class="padding-top-xs-5">
								<input type="radio" name="addebitoPos" value="C" disabled="disabled" id="addebitoPos" class="sfondoForm">
						<span class="hidden-xxs">Addebito</span> a fine mese
					</div>
				</div>
			</div>
			<div class="form-field-input col-sm-3 col-xs-11 margin-top-xs-10">
				<label class="control-label">Pagamenti su internet</label>
				<div class="col-xs-10 col-xs-offset-1 clear-padding padding-left-xs-20">
					<div>
						<input type="radio" name="addebitoWeb" value="P" checked="checked" id="addebitoWebPRE" class="sfondoForm">
						<span class="hidden-xxs">Addebito</span> prepagato 
					</div>
					<div class="padding-top-xs-5">
								<input type="radio" name="addebitoWeb" value="D" id="addebitoWebIMM" class="sfondoForm">
						<span class="hidden-xxs">Addebito</span> immediato
					</div>
					<div class="padding-top-xs-5">
								<input type="radio" name="addebitoWeb" value="C" disabled="disabled" id="addebitoWeb" class="sfondoForm">
						<span class="hidden-xxs">Addebito</span> a fine mese
					</div>
				</div>
			</div>
		</div>
<!-- fine riga 24 -->

<!-- riga 25 -->
<script type="text/javascript" language="javascript" src="/HT/JS/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.selectToUISlider.js"></script>
<link rel="Stylesheet" type="text/css" href="/HT/CSS/ui.slider.extras.css">
<style>	
	.sliderContainer {
		position: relative;
		width: 100%;
		height: 31px;
	    padding-top: 8px;
	}
	.slider {
		margin-left: 45px;
	    margin-right: 45px;
	}
	.slider .ui-slider-handle {
		border-radius: 0 0 0 0;
		box-shadow: 1px 1px 2px #666666;
	    height: 17px;
	    margin-left: -22px;
	    text-align: center;
	    text-decoration: none;
	    top: -5px;
	    width: 45px;
	    font-size:12px
	}
	.slider .ui-slider-handle:hover {
	    text-decoration: none;
	    cursor: e-resize;
	}
	a.meno {
		position: absolute;
	    left: 4px;
	    top: 7px;
	}
	a.piu {
		position: absolute;
	    right: 4px;
	    top: 7px;
	}
	.min {
	    left: 43px;
	    position: absolute;
	    top: 24px;
	    font-weight: bold;
	}
	.max {
	    right: 26px;
	    position: absolute;
	    top: 24px;
	    font-weight: bold;
	}
	
	td.select2slider {
		padding-right: 50px;
	}
	td.select2slider .ui-slider-handle {
		border-radius: 0 0 0 0;
	    box-shadow: 1px 1px 2px #666666;
	    height: 11px;
	    margin-left: -8px;
	    padding: 0 0 6px;
	    text-align: center;
	    text-decoration: none;
	    top: -6px;
	    width: 15px;
	}
	td.select2slider .ui-slider-handle:hover {
	    cursor: e-resize;
	}
	#limitato {
	    float: right;
	    position: relative;
	    right: 68%;
	}
	td.limiteAutoricariche .ui-slider {
	    float: right;
		margin-right: -10px;
   		width: 62%;
	}
	
	td.small .ui-slider {
   		width: 50px;
	}
	
	td.medium .ui-slider {
   		width: 100px;
   		margin: auto;
	}
	
	span.ttContent{
		margin-left: 10px;
	}
</style>
<script>
	 function updateSlider(event, ui, id, funCallBack){
		$('#slider_'+id).children('span').text( formatter( ui.value));
		$('#slider_'+id).siblings(':input').val(ui.value);
		
		if ($.isFunction(funCallBack)) {
		funCallBack(event, ui);
		}
 	} 	
 
  function sliderLimiti(id,valMin,valMax,valStep,funCallBack) {
	$('#slider_'+id).slider({
		value: $("#"+id).val(),
		min: valMin,
		max: valMax, //5000.00,
		range: "min",
		step: valStep,
		slide: function(event, ui) {
			updateSlider(event, ui, id, funCallBack);
			var id_elemento = $(this).closest('.boxContent').attr('id');
			$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
		},
		change: function(event, ui) {
			updateSlider(event, ui, id, funCallBack );
			
		}
	});
	$('#slider_'+id+' > a').text(formatter($("#"+id).val()));
	
} 
	
	function formatter(number) {
		return Math.max(0, number).toFixed(0).replace(/(?=(?:\d{3})+$)(?!^)/g, '.');
	}
	
	function somma(button) {
		var id_elemento = $(button).closest('.boxContent').attr('id');
		$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
		var slider = $(button).siblings('.slider');
		var val = parseInt( $(button).siblings(':input').val() );
		var max = parseInt( slider.slider('option','max'));
		if(val < max) {
			var step = slider.slider('option', 'step');
			slider.slider("value", val + step)
		}
		return false;
	}
	
	function sottrai(button) {
		var id_elemento = $(button).closest('.boxContent').attr('id');
		$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
		var slider = $(button).siblings('.slider');
		var val = parseInt( $(button).siblings(':input').val() );
		if(val > 0) {
			var step = slider.slider('option', 'step');
			slider.slider("value", val - step)
		}
		return false;
	}
</script>

<script>
		$(function() {
			$("#confirm").dialog({
				autoOpen : false,
				width : 300,
				height: 140,
				modal : true,
				open: function(event, ui){
					$('#confirm').removeClass('hide');
				},
				closeOnEscape:true
			});
		});
		
		$(document).ready(function() {
			$("#inputAddebito input[type=radio]").live('click', function(){
				$("#inputAddebito input[type=submit]").removeClass('disabled');
			});
			$("#inputWebsafe").on('click', 'input[type=radio]', function(){
				$("#inputWebsafe input[type=submit]").removeClass('disabled');
			});
			$("#inputWebsafe").on('click', 'input[type=text]', function(){
				$("#inputWebsafe input[type=submit]").removeClass('disabled');
			});
			$('input[name="geosafe"]').live('click' ,function(){
				$("#formPannelloControllo input[type=submit]").removeClass('disabled');
			});
							
			sliderLimiti('massimaleTotMensile',	0, 5000.00, 50);
			sliderLimiti('massimaleTotGiornalieroAtm', 0, 3000.00, 10);
			sliderLimiti('massimaleTotGiornalieroPos', 0, 5000.00, 50);
			sliderLimiti('massimaleTotGiornalieroWeb', 0, 5000.00,	50);
			

			$('<span class="ui-icon ui-icon-grip-dotted-vertical"></span>').appendTo('td.select2slider .ui-slider-handle');
			$('.showCarte > input[type="button"]').click(function() {
				mostraDivModifica("");
				showCarte();
			});
		
			// scroll to div esitoOperazione
			if ($("#esitoOperazione").length) {
				document.getElementById('esitoOperazione').scrollIntoView();
			}
		});

		function mostraDivModifica(id, esito) {
			$.each($('.formPannelloControllo > [id^="input"]').not('#input' + id), function(index, obj) {
				nascondiDivModifica(obj.id.substr(5), esito);
			});
			if (esito != 'KO') {
				$('#messagePanel').hide();
			}
				
			$('#dati' + id).fadeOut('fast', function() {
				$('#input' + id).fadeIn();
				try {
					eval('inizializzaForm' + id + '()');
				} catch (e) {
				}
				;
			});
		}

		function nascondiDivModifica(id, esito) {
			if (esito != 'KO') {
				$('.messagePanel').hide();
			}
				
			if(!$('.formPannelloControllo div[id="input'+id+'"] input[type="submit"]').hasClass('disabled')){
				$('#confirm').dialog('open');
				$('#yes').on('click', function(){
					$('.formPannelloControllo div[id="input'+id+'"]').parent().submit();
					$('.formPannelloControllo div[id="input'+id+'"] input').addClass('disabled')
				});
				$('#no').on('click', function(){
					$('#input' + id).fadeOut('fast', function() {
						$('#dati' + id).fadeIn();
					});
					resetForm(id);
					$('.formPannelloControllo div[id="input'+id+'"] input').addClass('disabled')
					$('.formPannelloControllo div[id="input'+id+'"]').parent()[0].reset();
					$('#confirm').dialog('close');
				});
			}else{
				$('#input' + id).fadeOut('fast', function() {
					$('#dati' + id).fadeIn();
				});
				resetForm(id);
			}
		}

		function resetForm(id) {
			$('.formPannelloControllo')[0].reset();
			$.each($('#formPannelloControllo > div [id^="slider_"]'), function(index, obj) {
				$('#' + obj.id).slider("value", $("#" + obj.id.substr(7)).val());
				$('#' + obj.id + ' > a').text(formatter($("#" + obj.id.substr(7)).val()));
			});
		}
	</script>
	
	<script>
	function inizializzaFormMassimali() {
		var maxMens = 5000.00;
		scalaDivSlider('massimaleTotGiornalieroAtm', maxMens, 3000.00);
		scalaDivSlider('massimaleTotGiornalieroPos', maxMens, 5000.00);
		scalaDivSlider('massimaleTotGiornalieroWeb', maxMens, 5000.00);
	}
	function scalaDivSlider(id, maxMens, val) {
		var element = $('#slider_massimaleTotMensile');
		var dimensioneMassima = $(element).width();
		var nuovaDimensione = (dimensioneMassima / maxMens) * val;
		//right commentate per fare gli slider della stessa dimensione
		//if (nuovaDimensione < 70)
		//	nuovaDimensione = 70;
		//var contenitore = $('#slider_' + id).parent('div').css('width',
		//		nuovaDimensione + 45 + 45);
	}
	
</script>
<script>
	function inizializzaFormFamilysafe() {	
		$('#inputFamilysafe div.ui-slider').each(function(){$(this).remove();})
		
			$('#familySlider0').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(0);}		        	
		        	else if (ui.value==1){attivaOff(0);}
		        }
		    }});
		    var selectedValue = $('#familySlider0').val();
		    if (selectedValue=='S'){attivaOn(0);}
			else if (selectedValue=='N'){attivaOff(0);}
		
			$('#familySlider1').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(1);}		        	
		        	else if (ui.value==1){attivaOff(1);}
		        }
		    }});
		    var selectedValue = $('#familySlider1').val();
		    if (selectedValue=='S'){attivaOn(1);}
			else if (selectedValue=='N'){attivaOff(1);}
		
			$('#familySlider2').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(2);}		        	
		        	else if (ui.value==1){attivaOff(2);}
		        }
		    }});
		    var selectedValue = $('#familySlider2').val();
		    if (selectedValue=='S'){attivaOn(2);}
			else if (selectedValue=='N'){attivaOff(2);}
		
			$('#familySlider3').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(3);}		        	
		        	else if (ui.value==1){attivaOff(3);}
		        }
		    }});
		    var selectedValue = $('#familySlider3').val();
		    if (selectedValue=='S'){attivaOn(3);}
			else if (selectedValue=='N'){attivaOff(3);}
		
			$('#familySlider4').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(4);}		        	
		        	else if (ui.value==1){attivaOff(4);}
		        }
		    }});
		    var selectedValue = $('#familySlider4').val();
		    if (selectedValue=='S'){attivaOn(4);}
			else if (selectedValue=='N'){attivaOff(4);}
		
			$('#familySlider5').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(5);}		        	
		        	else if (ui.value==1){attivaOff(5);}
		        }
		    }});
		    var selectedValue = $('#familySlider5').val();
		    if (selectedValue=='S'){attivaOn(5);}
			else if (selectedValue=='N'){attivaOff(5);}
		
	}
	
	function attivaOn(id) {
		var primoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[0];
		//$(primoFiglio).css('color','#003F63').css('font-weight','bold').css('margin-left', '-30px');
		var secondoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[1];
		//$(secondoFiglio).css('color','#666666').css('font-weight','normal').css('margin-left', '-25px');
		$('#familySlider'+id+' option:eq(1)').attr('selected', false);
		$('#familySlider'+id+' option:eq(0)').attr('selected', true);
	}
	
	function attivaOff(id) {
		var primoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[0];
		//$(primoFiglio).css('color','#666666').css('font-weight','normal').css('margin-left', '-30px');;
		var secondoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[1];
		//$(secondoFiglio).css('color','#003F63').css('font-weight','bold').css('margin-left', '-25px');
		$('#familySlider'+id+' option:eq(1)').attr('selected', true);
			$('#familySlider'+id+' option:eq(0)').attr('selected', false);
	}
	

	// Inizializzazione slider massimali
	$(function(){
		$("#slider_massimaleTotMensile").slider("value", $("#massimaleTotMensile").val());
		$("#slider_massimaleTotGiornalieroPos").slider("value", $("#massimaleTotGiornalieroPos").val());
		$("#slider_massimaleTotGiornalieroWeb").slider("value", $("#massimaleTotGiornalieroWeb").val());
		$("#slider_massimaleTotGiornalieroAtm").slider("value", $("#massimaleTotGiornalieroAtm").val());
	});
</script>

		<div class="boxContent" style="margin-bottom: 10px;" id="inputMassimali">
			<div class="form-group col-sm-6 col-xs-12">
				<div>
					<label for="massimaleTotMensile">Complessivo mensile</label>
				</div>
			<div>
				<div class="sliderContainer">
					<span class="min">0</span> 
					<span class="max">5.000</span> 
					<a href="#" class="meno" onclick="return sottrai(this)"><img src="/HT/IMAGES/nGrafica/i_minus.png" height="14" width="14" title="Meno" alt="Meno"></a>
					<div id="slider_massimaleTotMensile" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 60%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%;"></span></div>
					<a href="#" class="piu" onclick="return somma(this)"><img src="/HT/IMAGES/nGrafica/i_plus.png" height="14" width="14" title="Più" alt="Più"></a>
					<input type="text" name="massimaleTotMensile" value="3000" id="massimaleTotMensile" style="display:none;">
				</div>
			</div>
		</div>

		<div class="form-group col-sm-6 col-xs-12">
			<div>
				<label for="massimaleTotGiornalieroPos">Giornaliero negozi fisici </label>
			</div>
			<div>
				<div class="sliderContainer">
					<span class="min">0</span> <span class="max">5.000</span> 
					<a href="#" class="meno" onclick="return sottrai(this)"><img src="/HT/IMAGES/nGrafica/i_minus.png" height="14" width="14" title="Meno" alt="Meno"></a>
					<div id="slider_massimaleTotGiornalieroPos" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 60%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%;"></span></div>
					<a href="#" class="piu" onclick="return somma(this)"><img src="/HT/IMAGES/nGrafica/i_plus.png" height="14" width="14" title="Più" alt="Più"></a>
					<input type="text" name="massimaleTotGiornalieroPos" value="3000" id="massimaleTotGiornalieroPos" style="display:none;">
				</div>
			</div>
		</div>
		<div class="form-group col-sm-6 col-xs-12">
			<div>
				<label for="massimaleTotGiornalieroWeb">Giornaliero internet</label>
			</div>
			<div>
				<div class="sliderContainer">
					<span class="min">0</span> 
					<span class="max">5.000</span> 
					<a href="#" class="meno" onclick="return sottrai(this)"><img src="/HT/IMAGES/nGrafica/i_minus.png" height="14" width="14" title="Meno" alt="Meno"></a>
					<div id="slider_massimaleTotGiornalieroWeb" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 60%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%;"></span></div>
					<a href="#" class="piu" onclick="return somma(this)"><img src="/HT/IMAGES/nGrafica/i_plus.png" height="14" width="14" title="Più" alt="Più"></a>
					<input type="text" name="massimaleTotGiornalieroWeb" value="3000" id="massimaleTotGiornalieroWeb" style="display:none;">
				</div>
			</div>
		</div>
		<div class="form-group col-sm-6 col-xs-12">
			<div>
				<label for="massimaleTotGiornalieroAtm">Giornaliero per prelievi da ATM</label>
			</div>
			<div>
				<div class="sliderContainer">
					<span class="min">0</span> 
					<span class="max">3.000</span> 
					<a href="#" class="meno" onclick="return sottrai(this)"><img src="/HT/IMAGES/nGrafica/i_minus.png" height="14" width="14" title="Meno" alt="Meno"></a>
					<div id="slider_massimaleTotGiornalieroAtm" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 50%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 50%;"></span></div>
					<a href="#" class="piu" onclick="return somma(this)"><img src="/HT/IMAGES/nGrafica/i_plus.png" height="14" width="14" title="Più" alt="Più"></a>
					<input type="text" name="massimaleTotGiornalieroAtm" value="1500" id="massimaleTotGiornalieroAtm" style="display:none;">
				</div>
			</div>
		</div>
		<div class="pull-right margin-top10">
			<div class="actions">
				<input type="submit" value="Conferma" class="btn btn-primary disabled execute" alt="Conferma">
			</div>
		</div>
<!-- fine riga 25 -->

<!-- riga 26 -->
		<div class="clearfix" id="inputWebsafe" style="margin-bottom: 10px;">
			<div id="tableFormWebsafe" class="form-group clearfix">
				<div class="col-xs-11">
					<div class="col-xs-12 margin-top5">
						<div class="" style="width:3%;float:left;">
							<input type="radio" name="flagServiziWebsafe" value="0" checked="checked" onclick="disabilitaInputFunc()" id="flagServiziAbilita" class="sfondoForm">
						</div>
						<div class="col-xs-11">
							<label for="flagServiziAbilita" class="margin-top0 margin-left-xs-10">Abilita permanentemente ad effettuare acquisti su internet. </label>
						</div> 			
					</div>
					<div class="col-xs-12 margin-top5">
						<div class="" style="width:3%;float:left;">
							<input type="radio" name="flagServiziWebsafe" value="1" onclick="disabilitaInputFunc()" id="flagServiziDisabilita" class="sfondoForm">
						</div>
						<div class="col-xs-11">
							<label for="flagServiziDisabilita" class="margin-top0 margin-left-xs-10">Disabilita permanentemente ad effettuare acquisti su internet.</label>
						</div> 			
					</div>
					<div class="col-xs-12 margin-top5">
						<div class="" style="width:3%;float:left;">
							<input type="radio" name="flagServiziWebsafe" value="2" onclick="maxOperazioniFunc()" id="flagServiziMaxOp" class="sfondoForm">
						</div>
						<div class="col-xs-11">
							<label for="flagServiziMaxOp" class="margin-top0 margin-left-xs-10">Abilita per n.</label>
							<input type="text" name="maxOperazioniWebsafe" maxlength="8" size="8" value="" disabled="disabled" id="maxOperazioni" class="form-control wauto">
							<label for="flagServiziMaxOp" class="margin-top0">acquisti su internet.</label>
						</div>
					</div>
					<div class="col-xs-12 margin-top5">
						<div style="width:3%;float:left;">
							<input type="radio" name="flagServiziWebsafe" value="3" onclick="maxImportoFunc()" id="flagServiziMaxImporto" class="sfondoForm">&nbsp;&nbsp;
						</div>
						<div class="col-xs-11">
							<label for="flagServiziMaxImporto" class="margin-top0 margin-left-xs-10">Abilita ad effettuare acquisti su internet per un importo massimo di </label>
							<input type="text" name="maxImportoWebsafe" maxlength="8" size="8" value="" disabled="disabled" id="maxImporto" class="form-control wauto">
							<label for="flagServiziMaxImporto" class="margin-top0">Euro.</label>
						</div>
					</div>
					<div class="col-xs-12 margin-top5">
						<div style="width:3%;float:left;">
							<input type="radio" name="flagServiziWebsafe" value="4" onclick="dataOraAttivitaFunc()" id="flagServiziDataAtt" class="sfondoForm">&nbsp;&nbsp;
						</div>
						<div class="col-xs-10">
							<label for="flagServiziDataAtt" class="margin-top0 margin-left-xs-10">Abilita ad effettuare acquisti su internet dal</label>
							<input type="text" name="dataOraInizioAttivitaWebsafe" maxlength="10" size="9" value="" disabled="disabled" id="dataInizioAttivita" class="calendarioDefault hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario">
							<label for="flagServiziDataAtt" class="margin-top0">al</label>
							<input type="text" name="dataOraFineAttivitaWebsafe" maxlength="10" size="9" value="" disabled="disabled" id="dataFineAttivita" class="calendarioDefault hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario">
						</div>
					</div>
					<div class="col-xs-12 margin-top5">
						<div style="width:3%;float:left;">
							<input type="radio" name="flagServiziWebsafe" value="5" onclick="maxOreAttivitaFunc()" id="flagServiziMaxOre" class="sfondoForm">&nbsp;&nbsp;
						</div>
						<div class="col-xs-10">
							<label for="flagServiziMaxOre" class="margin-top0 margin-left-xs-10">Abilita ad effettuare acquisti su internet per</label>
							<input type="text" name="maxOreAttivitaWebsafe" maxlength="2" size="5" value="" disabled="disabled" id="maxOreAttivita" class="form-control wauto">
							<label for="flagServiziMaxOre" class="margin-top0">ore.</label>
						</div>
					</div>
				</div>
				<div class="col-xs-1">
					&nbsp;
				</div>
				</div>
			<div class="pull-right">
				<input type="submit" value="Conferma" class="btn btn-primary execute disabled" alt="Conferma">
			</div>
		</div>
<!-- fine riga 26 -->

<!-- riga 27 -->
		<div class="section clearfix">
			<form id="formPannelloControllo" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
				<input type="hidden" name="codContoCorrente" value="001|0898|089800911819">
<script>
$(document).ready(function (){
	var tipoGeosafe = 'ITA';
	$('#img'+tipoGeosafe).attr('src','/HT/IMAGES/geosafe'+tipoGeosafe+'.png');
	$('.labelGeosafe').find('[for="geosafe'+tipoGeosafe+'"]').removeAttr('style');
	
	$('input[name="geosafe"]').click(function(){
		disabilitaRadio();
		var tipoGeosafe = $(this).attr('value');
		$('#img'+tipoGeosafe).attr('src','/HT/IMAGES/geosafe'+tipoGeosafe+'.png');
		$('#label'+tipoGeosafe).removeAttr('style');
		
	});
	
	
});
function disabilitaRadio() {
	$('.imgGeosafe').find('span').each(function () {
		$(this).css('color','#888888');
	});
	$('.imgGeosafe').find('div img').each(function (){
		var urlImg=$(this).attr('src');
		if (urlImg.indexOf('Off')<0)
			$(this).attr('src',urlImg.substring(0,urlImg.length-4)+'_Off.png');
	});
}

</script>

				<input type="hidden" name="formModificata" value="Geosafe">
				<div class="divForm boxContent" id="inputGeosafe" style="margin-bottom: 10px;">
					<div class="col-xs-11">Abilita la carta per gli utilizzi:</div>
					<div class="col-xs-1"></div>
					<div class="imgGeosafe">
						<div class="col-sm-4 col-xs-12">
							<div class="col-xs-12 pull-left">
								<input type="radio" name="geosafe" value="ITA" checked="checked" id="geosafeITA" style="vertical-align: top;" class="sfondoForm hidden-xs">
							</div>
							<label for="geosafeITA" class="col-xs-10 col-xs-offset-1">
								<img src="/HT/IMAGES/geosafeITA.png" id="imgITA" title="Italia" alt="Italia">
							</label>
							<span id="labelITA" class="col-xs-12" style="color: #888888">Solo in Italia</span>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="col-xs-12 pull-left">
								<input type="radio" name="geosafe" value="EU" id="geosafeEU" style="vertical-align: top;" class="sfondoForm hidden-xs">
							</div>
							<label for="geosafeEU" class="col-xs-10 col-xs-offset-1">
								<img src="/HT/IMAGES/geosafeEU_Off.png" id="imgEU" title="Europa" alt="Europa">
							</label>
							<span id="labelEU" class="col-xs-12" style="color: #888888">In Europa <br> (abilitazione valida per 3 mesi)</span>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="col-xs-12 pull-left">
								<input type="radio" name="geosafe" value="MONDO" id="geosafeMONDO" style="vertical-align: top;" class="sfondoForm hidden-xs">&nbsp;&nbsp;
							</div>
							<label for="geosafeMONDO" class="col-xs-10 col-xs-offset-1">
								<img src="/HT/IMAGES/geosafeMONDO_Off.png" id="imgMONDO" title="Mondo" alt="Mondo">
							</label>
							<span id="labelMONDO" class="col-xs-12" style="color: #888888">In tutto il mondo <br> (abilitazione valida per 1 mese)</span>
						</div>
					</div>
					<div class="col-xs-12 margin-top10">
						<div>La possibilit&agrave; di pagare su internet &egrave; indipendente dall'abilitazione definita all'interno della sezione GeoSafe. </div>
					</div>
					<div class="otpCheck">
						
					</div>
					<div class="pull-right">
						<input type="submit" value="Conferma" class="btn btn-primary execute disabled" alt="Conferma">
					</div>
				</div>
			</form>
		</div>
<!-- fine riga 27 -->

<!-- riga 28 -->

<!-- fine riga 28 -->

<!-- riga 29 -->

<!-- fine riga 29 -->








	</div>
	<script type="text/javascript">
	function popolaBeneficiario(){
		codice = $("#beneficiario :selected").val();
		changeDatiBeneficiario($("#beneficiario"));
		//compilaBeneficiario(codice, valorizzaDatiBeneficiario);
	}

	var contoDeposito = false; 
	$(function( $, undefined ) {
		bpComboBox(changeDatiBeneficiario);
		if (contoDeposito) {
			$("#beneficiari").hide();
			disabilitaModificaIntestatario($("#formInserimento"));
		}
	}(jQuery));
</script>
</div>