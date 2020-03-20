<?php 
	if ($site == "youweb") 
	{
		?>
<section>
	<div id="otp">
		<h3 class="titleSection titleForm">Lorem ispum</h3>
		<div class="formWrapper">
			<div class="form-group">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field">
							<label class="control-label">
								Confermo di aver preso visione della documentazione elencata nella finestra DOCUMENTI presente in questa videata e, per proseguire con la disposizione, inserisco la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
							</label>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field-input">
							<img src="/HT/fe/img/OTPWHV.png">
							<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control wauto" style="margin-top:5px"> 
							<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01','Help: lorem ipsum')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill icon-2x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>			
<?php
}?>	

<?php 
	if ($site == "webank") 
	{
		?>
		PER WEBANK CASISTICA NON CONTEPLATA
<?php
}?>	