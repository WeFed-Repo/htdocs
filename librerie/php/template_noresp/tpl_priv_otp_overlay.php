<div id="otpRequest" class="overlayer">
	<a class="close"></a>
	<div class="overlayerCont">
	<h2>Lorem ipsum dolor sit amet</h2>
		<div class="formotp">
			<div class="formGeneric">
				<form id="formEsempio">			
					<!--RIGA DIVISA IN QUATTRO CAMPI -->
					<div class="row-fluid otpdesc">
						<div class="span4">
							<span class="introtext"><strong>1.</strong> Sblocca il token con il <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice PIN</span></span>
							<div class="center"><img src="/wscmn/img/token_info_1.png"></div>
						</div>
						<div class="span4">
							<span class="introtext"><strong>2.</strong> Premi il tasto 1 del token per generare il <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice OTP</span></span>
							<div class="center"><img src="/wscmn/img/token_info_2.png"></div>
						</div>
						<div class="span4">
							<span class="introtext"><strong>3.</strong> Inserisci il codice OTP generato dal token qua sotto</span>
							<div class="center"><img src="/wscmn/img/token_info_3.png"></div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span8">
							&nbsp;
						</div>
						<div class="span4 otpGroup">
							<label for="codiceotp" class="nomefield">Codice OTP</label>
							<input id="codiceotp" type="text" maxlength="11">
						</div>
					</div>
				</form>
				<div class="row-fluid otpconsole">
					<div class="span6 paddTopMedium">
						<!-- <a href="#1" class="openinfo" id="infoOtpOpener">Problemi con l'operazione?</a> -->
					</div>
					<div class="span6">	
						<div class="btnc aButtoncons">
							<div class="aButtonconsRight">
								<a href="javascript:;" class="aButton" title="Lorem"><span>Lorem</span></a>
							</div>
						</div>
					</div>
				</div>
		
			</div>
		</div>
	</div>
</div>


<h2>Test overlay OTP</h2>
<p>Premere il pulsante per aprire l'overlay. L'interattivit&agrave; &egrave; emulata nel javascript sottostante, visibile nel codice di pagina.</p>
<button id="otpLaunchBtn">Apri overlay</button>
<!-- Javascript innesco dell'overlayer -->
<script type="text/javascript">
	$(function(){
		$("#otpLaunchBtn").click(function(){
			openPopOverLayer("otpRequest");
		});
	});
</script>
<!-- Fine javascript innesco dell'overlayer -->