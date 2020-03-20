<div class="sectionTitle">
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h1>Entra in Webank</h1>
        </div>
      </div>
 		</div> <!-- /container -->
</div>

<div class="mainContent">
	<div class="container">
			<div class="erroreLogin basic-content no-submenu">
				<!-- colonna centrale HTML ORA IN PRODUZIONE-->
					<!-- CONTENITORE PRINCIPALE -->
					<div id="content" class="cont1col">
						<div id="maincontent" class="maincontent_1col row">
							<div class="errore_center col-lg-9 col-md-9 col-sm-12">
								<!-- testo -->
								<p class="black">Gentile cliente, il servizio non &egrave; momentaneamente disponibile per cause tecniche.<br/><br/>
							
								Data di segnalazione  <strong>16/02/2016</strong><br/><br/>Ci scusiamo per il disagio arrecato.<br/><br/>Grazie.</p>
								<!--fine  testo -->
								
									<div class="col-md-12">
										<form id="inviaerroreinfo" action="/webankpri/login/errorLogin.do" method="post" autocomplete="off">
											<input class="hidden" name="BV_UseBVCookie" value="Yes" type="hidden" />
											<input class="hidden" name="salva" value="Yes" type="hidden" />
											<input class="hidden" name="pubblico" value="yes" size="40" type="hidden" />
											<input class="hidden" type="hidden" name="data" value="16/02/2016 10:32:07" />
											<input class="hidden" type="hidden" name="appoEmail" id="appoEmailId"/>
											<input class="hidden" type="hidden" name="appoNome" id="appoNomeId"/>
											<input class="hidden" type="hidden" name="data" value="16/02/2016 10:32:07" />
											<div class="row">
												<div class="col-md-6 form-group">
													<label>Nome e Cognome*</label>
													<input id="idnickname" name="nome" class="textinput form-control"/>
												</div>
												<div class="col-md-6 form-group">
													<label>Indirizzo e-mail*</label>
													<input id="idmail" name="e_mail" class="textinput form-control"/>
												</div>
											</div>
											<button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">Invia</button>
										</form>
									</div>
								
							</div>
							<div class="errore_info col-lg-3 col-md-3 col-sm-12">
								<!-- Chiamata ai widget dinamici -->
									<div id="widgetContainer" class="loading"></div>
									<script type="text/javascript">
										var loadWidgets = ["wdg_aiuto.html"];
									</script>
									<!-- Fine chiamata ai widget dinamici -->
							</div>	

						<!-- /colonna centrale -->
						</div>
						
					</div> <!-- /container -->
				<!-- FINE colonna centrale HTML ORA IN PRODUZIONE-->
					</div>
		</div>
</div>
    <!-- Modal ERRORE APERTURA CONTO -->
<div class="modal fade" id="sendemailLogin" role="dialog">
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