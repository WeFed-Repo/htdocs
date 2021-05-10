<script>
	var cgi_script = "/webankpub";
	var isCovid = true
	var dateCovidIni = "01/02/2020";
	var dateCovidEnd = "30/09/2021";
</script>
<body class="aol">


<!-- CONTENITORE PRINCIPALE -->

		<div class="row rowArea1">
	
		<!-- COLONNA SINISTRA -->


		
		
		
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

		
</div>


<script type="text/javascript" >
var mono = true;

$(function() {
	noBack();
	
	Cert.loadBoxCertificazione();
});
</script>

<script type="text/javascript" src="/wbresp/js/aol/step2.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/certificazione.js?a=464"></script>



<script type="text/javascript" src="/wbresp/js/utilities.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/step_utils.js?a=464"></script>

<div class="modal" id="overlayConsensoNegato" role="dialog" aria-hidden="true" style="display: none;">
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