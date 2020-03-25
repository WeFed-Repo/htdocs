<!-- overlay informativo Token -->
<script type="text/javascript">
	$(function(){
		$("#infoOtpOpener").click(function(){openPopOverLayer("infoOtp")});
	});
</script>
<div id="infoOtp" class="overlayer">
	<a class="close"></a>
	<div class="overlayerCont">
	<h2>Strong authentication</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ipsam perferendis, nemo dolorem autem excepturi doloremque quia harum sapiente debitis quibusdam quis nulla illum non fuga quidem, in minus inventore.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ipsam perferendis, nemo dolorem autem excepturi doloremque quia harum sapiente debitis quibusdam quis nulla illum non fuga quidem, in minus inventore.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ipsam perferendis, nemo dolorem autem excepturi doloremque quia harum sapiente debitis quibusdam quis nulla illum non fuga quidem, in minus inventore.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ipsam perferendis, nemo dolorem autem excepturi doloremque quia harum sapiente debitis quibusdam quis nulla illum non fuga quidem, in minus inventore.</p>
	</div>
</div>
<!-- fine overlay informativo Token -->
<div class="borderFormRounded formotp">
	<div class="formGeneric">
		<form id="formEsempio">			
			<!--RIGA DIVISA IN QUATTRO CAMPI -->
			<div class="row-fluid otpdesc">
				<div class="span4">
					<span class="introtext"><strong>1.</strong> Sblocca il token con il <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice PIN</span></span>
					<div class="center"><img src="/wscmn/fe/img/token_info_1.png"></div>
				</div>
				<div class="span4">
					<span class="introtext"><strong>2.</strong> Premi il tasto 1 del token per generare il <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice OTP</span></span>
					<div class="center"><img src="/wscmn/fe/img/token_info_2.png"></div>
				</div>
				<div class="span4">
					<span class="introtext"><strong>3.</strong> Inserisci il codice OTP generato dal token qua sotto</span>
					<div class="center"><img src="/wscmn/fe/img/token_info_3.png"></div>
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
				<a href="#1" class="openinfo" id="infoOtpOpener">Problemi con l'operazione?</a>
			</div>
			<div class="span6">	
				<div class="btnc aButtoncons">
					<div class="aButtonconsRight">
						<a href="javascript:;" class="aButton" title="Accedi"><span>Accedi</span></a>
					</div>
				</div>
			</div>
		</div>
	
	</div>
</div>
<!-- Fine controllo TOKEN -->