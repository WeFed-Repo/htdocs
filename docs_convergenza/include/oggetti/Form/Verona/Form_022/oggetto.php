<div class="formWrapper">
			<div class="form-group">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field">
							<label class="control-label">
								Per proseguire è necessario inserire la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
							</label>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field-input">
								<?php 
								if ($site == "youweb") 
								{
									?>
								<img src="/HT/fe/img/OTPWHV.png">
								<?php
									}?>	

								<?php 
										if ($site == "webank") 
										{
											?>
											<img src="/WB/fe/img/OTPWHV.png">
									<?php
									}?>	
								
								<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control wauto" style="margin-top:5px" > 
								<?php 
								if ($site == "youweb") 
								{
									?>
								<a href="#" onclick="javascript:OpenHelp('/HT/HTML/HelpOtp.html')" class="no-underline btn-icon hidden-xs">
										<i class="icon icon-info_fill icon-2x"></i>
									</a>
								<?php
									}?>	

								<?php 
										if ($site == "webank") 
										{
											?>
											<a href="#" onclick="javascript:OpenHelp('/WB/fe/html/HelpOtp.html')" class="no-underline btn-icon hidden-xs">
										<i class="icon icon-info_fill icon-2x"></i>
									</a>
									<?php
									}?>	
									
								
						</div>
					</div>
				</div>
			</div>
		</div>