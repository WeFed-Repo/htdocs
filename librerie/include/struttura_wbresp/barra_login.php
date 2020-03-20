<!-- MODALE LOGIN -->
<!--<div id="modalBlockLogin" class="modal fade">
    <div class="modal-dialog">
		<div id="modalBlockLoginContent" class="modal-content">
			<div class="formLogin"> <a class="btn-c-accesso btn-c" id="accessoClientiMob">ACCESSO CLIENTI</a> <span id="accessoClientiMobForm"></span> </div>
		</div>
	</div>
</div>

-->
<!-- FINE MODALE LOGIN -->
<!-- MODALE LOGIN -->
<div id="modalBlockLogin">
    <div id="modalBlockLoginContent">
		<div class="formLogin"> <a class="btn-c-accesso btn-c" id="accessoClientiMob">ACCESSO CLIENTI</a> <span id="accessoClientiMobForm"></span> </div>
	</div>
</div>
<!-- FINE MODALE LOGIN -->
<!-- BARRA TOP LOGIN -->
<div class="fixedPosition">
<div id="topContent">
    <div class="container">
        <div class="row">
            <ul>
                <li id="deskLoginContent"> <a class="btn-c-accesso btn-c" id="accessoClienti">
							ACCESSO CLIENTI
						</a>
                    <div class="formLogin" id="formLoginNav">
                        <form role="form" method="post" action="#" name="toplogin" id="toplogin">
								<div class="wrapper-login">
									<div class="row">
										<div class="col-xs-5">USERID</div>
										<div class="col-xs-7">
											<span class="serveAiuto"><a href="serve-aiuto.html">Serve aiuto?</a></span>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<input type="tel" pattern="[0-9]*" name="userid" />
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 mrg">PASSWORD</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<input type="password" name="userid" />
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="radio">
												<input type="radio" name="azione" id="azioneCondisp" value="Condisp" checked />
												<label for="azioneCondisp">Consultare e disporre</label>
											 </div>
                                        </div>
										 <div class="col-xs-12">
                                            <div class="radio">    
												<input type="radio" name="azione" id="azioneConsultare" value="Consultare" />
                                                <label for="azioneConsultare">Consultare</label>
											</div>
                                         </div>
									</div>
									<div class="row mrg">
										<div class="col-xs-12">
											<input type="submit" value="ENTRA" id="buttonentra" onclick="return checkUserAndPwd(toplogin.idCl,toplogin.idCl,toplogin.pwd1b,toplogin.pwd1b);" class="btn-whlit btn-whlit-arrow fleft uppercase"/>
										</div>
									</div>
								 	
								 	<div class="row">
									  	<div class="col-xs-12 mrg">
									 		 <a href="#" id="recuperaCBtn">Link a recupera codici</a>
										</div>
									</div>
									<script>
								 		$('#recuperaCBtn').on('click',function(){
								 			if ($('#modalBlockLogin').is(':visible')) {
        										$('#modalBlockLogin').hide();
        										$('html,body').css({ 'overflow': 'visible', 'position': 'static', 'height': 'auto', 'width': 'auto' });
        									}
        									$('#modalRecuperaCodici').modal('show');
								 		})
								 	</script>
									<!-- Modal -->
							      <div class="modal" id="modalRecuperaCodici" role="dialog">
							        <div class="modal-dialog">
									<!-- Modal content-->
							          <div class="modal-content">
							            <div class="modal-header">
							              <button type="button" class="close" data-dismiss="modal">&times;</button>
							            </div>
							            <div class="modal-body">
							            	<style>
							            	iframe {
												width: 100%;
												height: 100%;
												min-height: 450px;
											}
											</style>
							            	<iframe src="http://convergenza.webank.local/template/recupera_codici_iframe.php" width="100%" height="100%" frameborder="0"></iframe>

							            </div>
							          </div>
							         </div>
							   		</div>





							   </div>
                            </form>
                    </div>
                </li>
                <li> <a class="btn-c-stato btn-c">
							STATO DI APERTURA CONTO
						</a> </li>
				<li> <a class="btn-c-trasparenza btn-c" href="#">
							<img src="/wbresp/img/img_trasparenza_header.png" class="" alt="Qui informazioni sulla trasparenza" title="Qui informazioni sulla trasparenza" />
						</a> </li>		
                <!--<li id="openChat"> <a class="btn-c-chat btn-c">
							APRI LA CHAT
						</a> </li>-->
                <!--li>
						<a class="btn-c-search btn-c">
							CERCA NEL SITO
						</a>
					</li--></ul>
        </div>
    </div>
</div>
<!-- FINE BARRA TOP LOGIN -->
