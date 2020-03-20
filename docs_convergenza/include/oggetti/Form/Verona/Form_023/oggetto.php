<div class="formWrapper">
				<div class="form-group">
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-6" id="sezioneDescrizione">
							<div class="form-field">
								<label class="control-label">
									Per proseguire con la disposizione è necessario cliccare su "Genera password": un codice di 6 cifre verrà automaticamente inviato via SMS al numero <b>******7269</b>
								</label>
							</div>
						</div>
						<div class="form-field-input col-xs-12 col-sm-6" id="sezionePassword">
						
							<div class="form-field-input">
							
										
								 <?php 
								if ($site == "youweb") 
								{
									?>
								<img src="/HT/fe/img/phone-token2.png">
								<?php
									}?>	

								<?php 
										if ($site == "webank") 
										{
											?>
											<img src="/WB/fe/img/phone-token2.png">
									<?php
									}?>	
									 
								     
										
										
									
								
							
								<input type="text" id="codiceOTPConSMS" value="" name="codiceOTPConSMS" maxlength="6" tabindex="1" class="form-control wauto" disabled=""> 						
							</div>
							
							<div>
							
								<input type="button" name="invioOTPConSMS" value="Genera password" onclick="javascript:inviaOtpSMS()" id="invioOTPConSMS" class="btn btn-primary btn-gen-pwd ">	
								
										  					  	
							</div>
							
						</div>
						
					</div>	
				</div>
			</div>