<script>
	var cgi_script = "/webankpub";
	var isCovid = true
	var dateCovidIni = "01/02/2020";
	var dateCovidEnd = "30/09/2021";
</script>

<body class="aol">



		<div class="row rowArea1">

		<!-- contenitore principale colonna centrale -->
		
		
		<div class="row">
			<div class="col-md-12">
				<h2>Verifica ora l'email e il numero di cellulare</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>
					<strong>Webank tutela la tua sicurezza</strong>: per questo motivo occorre indicare dei <strong>recapiti che appartengano esclusivamente a te</strong> e confermarli. 
				</p>
			</div>
		</div>
		<!-- BOX ALERT -->
		<div class="boxalert">
			<div class="boxcont">
				<p>
					Assicurati di <strong>avere a portata di mano</strong> il tuo <strong>cellulare</strong> a l'accesso alla casella <strong>email</strong>, su cui invieremo i codici di controllo per confermare i tuoi dati.
				</p>
			</div>
		</div>
		<!-- FINE BOX ALERT -->
		<hr>

		<div class="row">
			<div class="col-sm-12 form-section-title">
				1. Tecniche di comunicazione a distanza
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p id="AOL_TEC_COMUNICAZIONE_DISTANZA"></p>
			</div>
		</div>
		
		<form id="formConsenso" method="POST" action="/webankpub/aol/step3.do?BV_UseBVCookie=Yes&fromPageName=2&save=true" novalidate="novalidate">
			<div class="row">
				<div class="col-sm-6 form-group">
					<div class="radio radio-inline">
						<input type="radio" name="consDoc" id="acconsento1a" value="1" >
						<label for="acconsento1a">Acconsento</label>
					</div>
				</div>
				<div class="col-sm-6 form-group">
					<div class="radio radio-inline">
						<input type="radio" name="consDoc" id="acconsento1b" value="0" >
						<label for="acconsento1b">Non acconsento</label>
					</div>
				</div>
			</div>
		</form>

		<div class="spacer-no-border hidden-xs">&nbsp;</div>
		<div id="boxCertificazione">




















<script type="text/javascript">
	var userVerifiedCell = [], userVerifiedEmail = [];
</script>




		<div class="panel-group accordion-group" id="accordion" role="tablist" aria-multiselectable="true">
		
		<!-- INTESTAZIONE ACCORDION -->
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="heading_int1">
				<h4 class="panel-title">
					<a href="#OOO" class="collapsed" role="button" data-toggle="collapse" data-target="#collapse_int1" aria-expanded="false" aria-controls="collapse_int1">
					Verifica email e cellulare di Mario Rossi
					</a>
				</h4>
			</div>
			<div id="collapse_int1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_int1" aria-expanded="false" style="height: 0px;">
				<div id="panel_int1" class="panel-body">

					<!-- FINE - INTESTAZIONE ACCORDION -->
					<div id="boxVerCell_int1" class="boxVer">
						<h4>Verifica numero di cellulare</h4>
						<p>
							1. Clicca su "Invia codice via SMS" per ricevere immediatamente il <strong>codice</strong>. Se il numero di cellulare o l'operatore telefonico non sono corretti&nbsp;puoi modificarli&nbsp;cliccando&nbsp;sull'icona a fianco.
						</p>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label class="labelIco">Intestatario</label>
								<span class="output">MARIO ROSSI</span>
							</div>
						</div>
						<div class="spacer-no-border hidden-xs">&nbsp;</div>
						<div id="outputCell_int1" class="row">
							<div class="col-sm-6 form-group">
								<label class="labelIco">Numero di cellulare</label>
								<a href="javascript:;" class="icomod modCell" title="Modifica"></a>
								<span class="output">0039 3333333333</span>
							</div>
							<div class="col-sm-6 form-group">
								<label class="labelIco">Operatore</label>
								<a href="javascript:;" class="icomod modCell" title="Modifica"></a>
								<span class="output">Wind</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<button type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB sendOtp">INVIA CODICE VIA SMS</button>
							</div>
						</div>
						<div class="spacer-no-border hidden-xs">&nbsp;</div>
						<p>
							2. Inserisci il <strong>codice di controllo</strong>&nbsp;che ti abbiamo inviato via <strong>sms</strong> per verificare il tuo <strong>numero di cellulare</strong>.
							Se non hai ricevuto o hai perso l'sms, puoi richiedere l'invio di un nuovo codice.
						</p>
						<form id="formVerificaOTPCell_int1" novalidate="novalidate">
							<div class="row">
								<div class="col-sm-6 from-group otpenabled">
									<label for="otpCell_int1">Codice di controllo</label>
									<input type="text" id="otpCell_int1" name="otpCell_int1" class="textinput form-control" placeholder="Inserisci codice di controllo">
									<div class="nota" style="display:none;"><a href="javascript:;" id="lnkRecuperaOtpCell_int1">Rinvia nuovo codice</a></div>
								</div>
								<div class="col-sm-6">
									<a id="btnVerificaOtpCell_int1" class="btn-grlit btn-grlit-arrow fright uppercase disabled inlineB verOtp">CONFERMA E PROSEGUI</a>
								</div>
							</div>
						</form>			
					</div>
					
					<hr>
					
					<div id="boxVerEmail_int1" class="boxVer">
						<h4>Verifica email</h4>
						<p>
							1. Clicca su "Invia codice via email" per ricevere immediatamente il <strong>codice</strong>. Se l'indirizzo email non è corretto&nbsp;puoi modificarlo&nbsp;cliccando&nbsp;sull'icona a fianco.
						</p>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label class="labelIco">Intestatario</label>
								<span class="output">MARIO ROSSI</span>
							</div>
						</div>
						<div class="spacer-no-border hidden-xs">&nbsp;</div>
						<div id="outputEmail_int1" class="row">
							<div class="col-sm-6 form-group">
								<label class="labelIco">Email</label>
								<a href="javascript:;" class="icomod modEmail" title="Modifica"></a>
								<span class="output">mario.rossi@tin.it</span>
							</div>
							<div class="col-sm-6 form-group">&nbsp;</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<button type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB sendOtp">INVIA CODICE VIA EMAIL</button>
							</div>
						</div>
						<div class="spacer-no-border hidden-xs">&nbsp;</div>
						<p>
							2. Inserisci il <strong>codice di controllo</strong>&nbsp;che ti abbiamo inviato via <strong>email</strong> per verificare il tuo <strong>indirizzo</strong> di posta elettronica.
							Se non hai ricevuto o hai perso l'email, puoi richiedere l'invio di un nuovo codice.
						</p>
						<form id="formVerificaOTPEmail_int1" novalidate="novalidate">
							<div class="row">
								<div class="col-sm-6 from-group otpenabled">
									<label for="otpEmail_int1">Codice di controllo</label>
									<input type="text" id="otpEmail_int1" name="otpEmail_int1" class="textinput form-control" placeholder="Inserisci codice di controllo">
									<div class="nota" style="display:none;"><a href="javascript:;" id="lnkRecuperaOtpEmail_int1">Rinvia nuovo codice</a></div>
								</div>
								<div class="col-sm-6">
									<button type="button" id="btnVerificaOtpEmail_int1" class="btn-grlit btn-grlit-arrow fright uppercase disabled inlineB verOtp">CONFERMA E PROSEGUI</button>
								</div>
							</div>
						</form>	
					</div>
					<!-- CHIUSURA ACCORDION -->
			
				</div>
			</div>
		</div>
		</div>
		<!-- FINE - CHIUSURA ACCORDION -->



<script type="text/javascript">
	userVerifiedCell.push(false);
	userVerifiedEmail.push(false);
</script>




		<div class="panel-group accordion-group" id="accordion" role="tablist" aria-multiselectable="true">
		
		<!-- INTESTAZIONE ACCORDION -->
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="heading_int2">
				<h4 class="panel-title">
					<a href="#OOO" class="collapsed" role="button" data-toggle="collapse" data-target="#collapse_int2" aria-expanded="false" aria-controls="collapse_int2">
					Verifica email e cellulare di Paolo Rossi
					</a>
				</h4>
			</div>
			<div id="collapse_int2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_int2" aria-expanded="false" style="height: 0px;">
				<div id="panel_int2" class="panel-body">

					<!-- FINE - INTESTAZIONE ACCORDION -->
					<div id="boxVerCell_int2" class="boxVer">
						<h4>Verifica numero di cellulare</h4>
						<p>
							1. Clicca su "Invia codice via SMS" per ricevere immediatamente il <strong>codice</strong>. Se il numero di cellulare o l'operatore telefonico non sono corretti&nbsp;puoi modificarli&nbsp;cliccando&nbsp;sull'icona a fianco.
						</p>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label class="labelIco">Intestatario</label>
								<span class="output">PAOLO ROSSI</span>
							</div>
						</div>
						<div class="spacer-no-border hidden-xs">&nbsp;</div>
						<div id="outputCell_int2" class="row">
							<div class="col-sm-6 form-group">
								<label class="labelIco">Numero di cellulare</label>
								<a href="javascript:;" class="icomod modCell" title="Modifica"></a>
								<span class="output">0039 5555555555</span>
							</div>
							<div class="col-sm-6 form-group">
								<label class="labelIco">Operatore</label>
								<a href="javascript:;" class="icomod modCell" title="Modifica"></a>
								<span class="output">Wind</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<button type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB sendOtp">INVIA CODICE VIA SMS</button>
							</div>
						</div>
						<div class="spacer-no-border hidden-xs">&nbsp;</div>
						<p>
							2. Inserisci il <strong>codice di controllo</strong>&nbsp;che ti abbiamo inviato via <strong>sms</strong> per verificare il tuo <strong>numero di cellulare</strong>.
							Se non hai ricevuto o hai perso l'sms, puoi richiedere l'invio di un nuovo codice.
						</p>
						<form id="formVerificaOTPCell_int2" novalidate="novalidate">
							<div class="row">
								<div class="col-sm-6 from-group otpenabled">
									<label for="otpCell_int2">Codice di controllo</label>
									<input type="text" id="otpCell_int2" name="otpCell_int2" class="textinput form-control" placeholder="Inserisci codice di controllo">
									<div class="nota" style="display:none;"><a href="javascript:;" id="lnkRecuperaOtpCell_int2">Rinvia nuovo codice</a></div>
								</div>
								<div class="col-sm-6">
									<a id="btnVerificaOtpCell_int2" class="btn-grlit btn-grlit-arrow fright uppercase disabled inlineB verOtp">CONFERMA E PROSEGUI</a>
								</div>
							</div>
						</form>			
					</div>
					
					<hr>
					
					<div id="boxVerEmail_int2" class="boxVer">
						<h4>Verifica email</h4>
						<p>
							1. Clicca su "Invia codice via email" per ricevere immediatamente il <strong>codice</strong>. Se l'indirizzo email non è corretto&nbsp;puoi modificarlo&nbsp;cliccando&nbsp;sull'icona a fianco.
						</p>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label class="labelIco">Intestatario</label>
								<span class="output">PAOLO ROSSI</span>
							</div>
						</div>
						<div class="spacer-no-border hidden-xs">&nbsp;</div>
						<div id="outputEmail_int2" class="row">
							<div class="col-sm-6 form-group">
								<label class="labelIco">Email</label>
								<a href="javascript:;" class="icomod modEmail" title="Modifica"></a>
								<span class="output">paolor@tin.it</span>
							</div>
							<div class="col-sm-6 form-group">&nbsp;</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<button type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB sendOtp">INVIA CODICE VIA EMAIL</button>
							</div>
						</div>
						<div class="spacer-no-border hidden-xs">&nbsp;</div>
						<p>
							2. Inserisci il <strong>codice di controllo</strong>&nbsp;che ti abbiamo inviato via <strong>email</strong> per verificare il tuo <strong>indirizzo</strong> di posta elettronica.
							Se non hai ricevuto o hai perso l'email, puoi richiedere l'invio di un nuovo codice.
						</p>
						<form id="formVerificaOTPEmail_int2" novalidate="novalidate">
							<div class="row">
								<div class="col-sm-6 from-group otpenabled">
									<label for="otpEmail_int2">Codice di controllo</label>
									<input type="text" id="otpEmail_int2" name="otpEmail_int2" class="textinput form-control" placeholder="Inserisci codice di controllo">
									<div class="nota" style="display:none;"><a href="javascript:;" id="lnkRecuperaOtpEmail_int2">Rinvia nuovo codice</a></div>
								</div>
								<div class="col-sm-6">
									<button type="button" id="btnVerificaOtpEmail_int2" class="btn-grlit btn-grlit-arrow fright uppercase disabled inlineB verOtp">CONFERMA E PROSEGUI</button>
								</div>
							</div>
						</form>	
					</div>
					<!-- CHIUSURA ACCORDION -->
			
				</div>
			</div>
		</div>
		</div>
		<!-- FINE - CHIUSURA ACCORDION -->



<script type="text/javascript">
	userVerifiedCell.push(false);
	userVerifiedEmail.push(false);
</script>



<!-- Overlay modifica cell -->
<div class="modal fade" id="overlayModCell" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Modifica Cellulare</h4>
            </div>
            <div class="modal-body">
                <form id="formModCell" action="" novalidate="novalidate">
                                 
                	<input type="hidden" name="tel_3_int1" id="tel_3_int1" value="00393333333333">                              
						<input type="hidden" name="tel_3_int2" id="tel_3_int2" value="00395555555555">               	

 
           			<p>Inserisci e salva i dati corretti per il tuo numero di cellulare e operatore telefonico.</p>
				    <div class="spacer-no-border hidden-xs">&nbsp;</div>
				    <div class="row">
				        <div class="col-md-6 form-group input-tel">
				            <label for="num_mod">Numero di cellulare*</label>
				            <div class="input input-inline clearfix">
				                <input type="tel" maxlength="5" name="prefisso_mod" id="prefisso_mod" value="0039" class="textinput form-control numPref ignore" placeholder="Prefisso">
				                <input type="tel" maxlength="10" name="num_mod" id="num_mod" value="" class="textinput form-control numCell ignore" placeholder="Senza spazi, barre o trattini">
				                <input type="tel" name="tel" id="tel_mod" class="hidden-input">
				            </div>
				        </div>
				        <div class="col-md-6 form-group">
				            <label for="operatore">Operatore*</label>
				            <select name="operatore" id="operatore" class="form-control">				               			
				            <option value="">Seleziona</option>
									<option value="WIND">Wind</option>
									<option value="VODAF">Vodafone</option>
									<option value="TRE">Tre</option>
									<option value="TIM">Tim</option>
									<option value="POSTE">Poste Mobile</option>
									<option value="COOP">Coop Voce</option>
									<option value="UNO">Uno Mobile</option>
									<option value="MTV">Mtv Mobile</option>
									<option value="ILIAD">Iliad</option>
									<option value="FASTWEB">Fastweb Mobile</option>
									<option value="DAILY">Daily Telecom Mobile</option>
									<option value="CONAD">Conad Insim</option>
									<option value="BT">BT Mobile</option>
									<option value="AMOBILE">A-Mobile</option>
									<option value="ALTRO">Altro...</option>
							</select>
				        </div>
				    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" id="resetModCell" class="btn-whlit btn-whlit-arrowleft fleft uppercase">ANNULLA</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" id="submitModCell" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA MODIFICHE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay modifica cell - fine -->

<!-- Overlay modifica email -->
<div class="modal fade" id="overlayModEmail" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Modifica indirizzo email</h4>
            </div>
            <div class="modal-body">
                <form id="formModEmail" action="" novalidate="novalidate">
                
					<input type="hidden" name="mail_int1" id="mail_int1" value="mario.rossi@tin.it">                              
						<input type="hidden" name="mail_int2" id="mail_int2" value="paolor@tin.it">


                	<p>Inserisci e salva il tuo indirizzo email corretto.</p>
				    <div class="spacer-no-border hidden-xs">&nbsp;</div>
				    <div class="row">
				        <div class="col-md-6 form-group">
				            <label for="mail">Email*</label>
				            <input type="email" required="" placeholder="Es. email@esempio.it" name="mail" id="mail" value="" class="textinput form-control" aria-required="true">
				        </div>
				    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" id="resetModEmail" class="btn-whlit btn-whlit-arrowleft fleft uppercase">ANNULLA</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" id="submitModEmail" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA MODIFICHE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay modifica email - fine -->

<!-- Overlay verifica dopo cell -->
<div class="modal" id="overlayInfo" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 id="title" class="modal-title"></h4>
            </div>
            <div class="modal-body" id="text"></div>
             <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- Overlay verifica dopo cell - fine -->
		
<!-- Overlay consenso negato -->
<div class="modal" id="overlayConsensoNegato" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Consenso negato</h4>
            </div>
            <div class="modal-body">
                Se non dai il consenso alle tecniche di comunicazione a distanza, non è possibile procedere all'apertura del conto.
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn-whlit btn-whlit-arrowleft fleft uppercase" data-toggle="modal" data-target="#overlayConsensoNegato">ANNULLA</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" id="btnConsensoOK" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">ACCONSENTO</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay consenso negato - fine -->
</div>
		<div class="spacer-no-border">&nbsp;</div>
		
		<!-- Footnotes -->
		<div class="row">
			<div class="col-sm-12">
				<p class="note">(*) I campi contrassegnati con l'asterisco sono obbligatori.</p>
			</div>
		</div>
		<!-- Footnotes -->
		<hr>
		<div class="row">
		    <div class="col-xs-12">
		        <div class="btn-console">
		            <a href="/webankpub/aol/step1.do?BV_UseBVCookie=Yes&fromPageName=2&save=true" class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
		            <button id="btnSubmit" type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
		        </div>
		    </div>
		</div>

		
		<!-- fine contenitore principale  -->

	

		</div>
	
		

<script type="text/javascript" >
var mono = false;

$(function() {
	noBack();
});
</script>

<script type="text/javascript" src="/wbresp/js/aol/step2.js?a=464"></script>
<script type="text/javascript" src="/wscmn/js/disclaimer.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/certificazione.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/utilities.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/step_utils.js?a=464"></script>
