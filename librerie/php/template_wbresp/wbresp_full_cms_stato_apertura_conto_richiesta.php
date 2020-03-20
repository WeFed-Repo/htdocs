<link rel="stylesheet" href="/wbresp/css/stato-apertura-conto.css">
<div class="stato-apertura-conto mainContent">
		<div class="stato-apertura-conto container">
			<div class="row rowArea1">
				<!-- colonna centrale -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="stato-apertura-conto basic-content">
					<h2>Richieste di apertura conti correnti</h2>
					<p>In questa area puoi vedere e completare le <strong>richieste di apertura conto Webank</strong>.</p>
					<p class="hidden-md hidden-lg">Inserisci il codice fiscale ed il codice OTP ricevuto via SMS:</p></strong>.</p>
					 <div class="row">


						<form action="stato-apertura-conto-ko.html" method="POST" id="formStatoAperturaconto" name="formStatoAperturaconto" class="form-group stato-apertura-conto"  autocomplete="off">

							<div class="col-xs-12 hidden-xs hidden-sm">
								<div class="row">
									<div class="col-sm-6 col-lg-4">
										<p>1. Inserisci il tuo <strong>codice fiscale</strong></p>
									</div>
									<div class="col-sm-6 col-lg-8">
										<div class="otpenabled" style="display:none">
											<p>2. Inserisci il tuo codice OTP <strong>ricevuto via SMS</strong></p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<label for="codiceFiscale">Codice fiscale</label>
		                        <input type="text" name="codiceFiscale" value="" id="codiceFiscale" class="textinput form-control" maxlength="16" />
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="otpenabled" style="display:none">
									 <label for="otp">Codice OTP</label>
				                      <input type="text" name="otp" value="" id="otp" class="textinput form-control"/>
				                      <div class="nota"><a href="#" id="recuperaOtp">Rinvia codice OTP</a></div>
			                     </div>
							</div>
							<div class="col-sm-12 col-lg-4">
							 	<button id="btn-invia" class="btn-grlit btn-grlit-arrow btn-fs14 uppercase">Prosegui</button>
							</div>
						  </form>
		            </div>


					</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
	   <!-- Modal ERRORE RECUPERA PSW -->
<div class="modal fade" id="recuperaPswKo" role="dialog">
    <div class="modal-dialog">
			<!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body feedback">
				<div class="row">
                  <div class="col-md-12 col-sm-12 light-thankyou-block">
					<div class="title-content">
					   <strong></strong>
					</div>
                  </div>
                </div>
			</div>
		</div>
	</div>
</div>