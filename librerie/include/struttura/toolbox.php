	<div id="toolbox" class="resp">
		<div id="toolwrap">
			<div id="toolhandle"><a class="btn-icon"><i class="icon icon-ellipsis-h"></i></a></div>

			<div id="toolcontainer">
				<!-- ASSISTENTE VIRTUALE -->

				<script type="text/javascript" src="/wscmn/fe/js/priv_va_resp.js?r=<?php echo $random ?>"></script>
				<div id="virtAss" class="toolobj" style="display:none">
					<div id="vaExtended">
						<div class="vaExtTop">
							<span id="vaExtTitle">Contenuti correlati</span>
							<a href="javascript:;" id="vaLinguetta" title="Espandi"><i class="icon icon-enlarge_window"></i><i class="icon icon-reduce_toolbox"></i></a>
						</div>
						<!--
							<div id="vaExtConsole" style="display:none">
							</div>
						-->
						<div class="vaExtBody"></div>
					</div>
					<div class="toolcont">
						<div class="vaContainer">
							<div class="tooltop">
								<span class="titolo">Paolo, l'assistente virtuale</span>
								<a href="javascript:;" class="vaChiudi tooltop-btn chiudi" title="Chiudi"><i class="icon icon-close_toolbox"></i></a>
								<a href="javascript:;" class="vaWindow tooltop-btn minifizza" title="Espandi/Riduci"><i class="icon icon-reduce_toolbox"></i><i class="icon icon-enlarge_window"></i></a>
							</div>
							<div class="toolbody">
								<div class="vaAvatar">
									<div class="vaConsole">
										<!-- <a href="javascript:;" class="vaAudio" title="Mute on/off"></a> -->
										<div id="vaSliderWrapper" style="display:none">
											<div id="vaSlider">
												<a href="javascript:;" id="vaSliderCursor" title="Volume"></a>
											</div>
										</div>
										<a id="vaTextControl" href="javascript:;"><span class="va-control"><i class="icon icon-show_text"></i><i class="icon icon-hide_text"></i></span></a>
									</div>
									<div id="vaSpace"></div>
								</div>
								<div id="vaDialog">
								</div>
								<form autocomplete="off" id="vaFormTag" onsubmit="vaAsking(vaDomanda.val())" action="javascript:;" method="post" class="waiting">
								<div id="vaForm" >
									<input type="text" id="vaDom" maxlength="200" name="campo" value="Fammi una domanda..."/>
									<a title="Chiedi" class="askbtn" href="javascript:;" id="vaAsking"><i class="icon icon-send_message"></i></a>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- FINE ASSISTENTE VIRTUALE -->

				<!-- TOOL : CALL ME BACK -->
				<script type="text/javascript" src="/wscmn/fe/js/priv_cmb.js?r=<?php echo $random ?>"></script>
				<div id="toolCmb" class="toolobj"  style="display:none">
					<div class="toolcont">
						<div class="tooltop">
							<span class="titolo">Webank ti richiama</span>
							<a class="tooltop-btn chiudi hidden-sm hidden-xs"><i class="icon icon-close_toolbox"></i></a>
						</div>

						<div class="toolbody">
							<p>Ti richiamiamo quando vuoi tu.</p>

							<form class="formGenerico" role="form" id="toolCmbForm">
								<div class="row">
										<div class="form-group">
										<div class="col-xs-12 col-sm-6 col-md-12">
											<label class="control-label">Telefono</label>
											<input type="text" class="form-control clear-x" id="cmbPhone" maxlength="15">
										</div>
										<div class="col-xs-12 col-sm-6 col-md-12">
											<label class="control-label">Giorno</label>
											<select class="form-control" id="cmbGiorno"></select>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-12">
											<label class="control-label">Fascia oraria</label>
											<select class="form-control" id="cmbFascia">
											</select>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-12">
											<label class="control-label">Argomento</label>
											<select class="form-control">
												<option>Sportello</option>
												<option>Trading</option>
												<option>Altro</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group btnWrapper">
									<div class="btn-align-center">
										<a type="button" class="btn btn-primary" id="cmbButton">lorem</a>
										<br class="clear">
									</div>
								</div>


							</form>

							<!-- Feedback -->
							<div id="cmbFeedbackOk" style="display:none">
								<section class="boxesitoWrap">
									<div class="boxesito positivo">
										<i class="icon icon-alert_ok icon-2x"></i>
										<div class="text">
											<div class="row">
												<div class="col-xs-12">
													<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.<br>
													et quas molestias excepturi <a href="#">sint occaecati cupiditate non provident</a>, similiq</p>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<!-- Esito feedback -->

						</div>
					</div>

				</div>
				<!-- FINE TOOL : CALL ME BACK -->


				<!-- TOOL: APPUNTAMENTO IN AGENZIA -->
				<!--
				<script type="text/javascript" src="/wscmn/fe/js/priv_appuntamento.js?r=<?php echo $random ?>"></script>
				<div id="toolAppuntamento" class="toolobj large"  style="display:none">
					<div class="toolcont">
						<div class="tooltop">
							<span class="titolo">Prenota un appuntamento</span>
							<a class="tooltop-btn chiudi hidden-sm hidden-xs"><i class="icon icon-close_toolbox"></i></a>
						</div>

						<div class="toolbody">
            <div id="toolAppuAlert">

							<div class="boxesito attenzione">
								<i class="icon icon-alert_caution icon-2x"></i>
								<div class="text">
									<div class="row">
										<div class="col-sm-12">
											<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
										et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group btnWrapper">
								<div class="btn-align-left marginBottomMedium">
									<a type="button" class="btn btn-default"  onclick="$('#toolAppuntamento').find('.chiudi').trigger('click');">lorem</a>
									<br class="clear">
								</div>
								<div class="btn-align-right marginBottomMedium">
									<a type="button" class="btn btn-primary" onclick="$('#toolAppuAlert').hide();$('#toolAppuForm').show();">ipsum</a>
									<br class="clear">
								</div>
							</div>

						</div>




						<form class="formGenerico" role="form" id="toolAppuForm" style="display:none">
							<p>Lorem ipsum vero eos et accusamus et iusto odio dignissimos vero eos et accusamus et iusto odio dignissimos.</p>

							<div class="form-group">
								<div class="row">
									<div class="col-xs-12">
										<label class="control-label">Modalit&agrave; preferita di contatto</label>
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="radio inline">
													<label class="textWrapper">
									 					  <input type="radio" name="appuContatto">
									  					  <span class="text">
									  					  		<strong>Telefono</strong><br>
																999 000 99 99
									  					  </span>
									  				</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="radio inline">
													<label class="textWrapper">
									 					  <input type="radio" name="appuContatto">
									  					  <span class="text">
									  					  		<strong>Email</strong><br>
																lorem.ipsum@loremipsum.com
									  					  </span>
									  				</label>
												</div>
											</div>

										</div>


									</div>
								</div>
							</div>
							<hr>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<label class="control-label">Giorno</label>
										<div class="form-inline">
											<div class="input-group">
						       	 				<input type="text" id="appuData1" placeholder="gg/mm/aaaa"  class="form-control clear-x">
						       	 				<div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
						       	 			</div>
						       	 		</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<label class="control-label">Fascia oraria</label>
										<select class="form-control">
											<option>Seleziona...</option>
										</select>
									</div>
								</div>
							</div>

							<hr>

							<div class="form-group">
								<div class="row">
									<div class="col-xs-12">
										<label>Eventuale data alternativa:</label>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<label class="control-label">Giorno</label>
										<div class="form-inline">
											<div class="input-group">
						       	 				<input type="text" id="appuData2" placeholder="gg/mm/aaaa"  class="form-control clear-x">
						       	 				<div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
						       	 			</div>
						       	 		</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<label class="control-label">Fascia oraria</label>
										<select class="form-control">
											<option>Seleziona...</option>
										</select>
									</div>
								</div>
							</div>

							<hr>

							<div class="form-group">
								<div class="row">
									<div class="col-xs-12">
										<label>Lorem ipsum dolor sit amet</label>
										<label class="control-label">Agenzia</label>
										<select class="form-control">
											<option>Seleziona...</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-xs-12">
										<label class="control-label">Argomento</label>
										<span class="output">Lorem ipsum dolor</span>
									</div>
								</div>
							</div>

							<div class="form-group btnWrapper">
								<div class="btn-align-center">
									<a type="button" class="btn btn-primary" id="appuButton">lorem</a>
									<br class="clear">
								</div>
							</div>
						</form>



						<div id="appuFeedbackOk" style="display:none">
							<section class="boxesitoWrap">
								<div class="boxesito positivo">
									<i class="icon icon-alert_ok icon-2x"></i>
									<div class="text">
										<div class="row">
											<div class="col-xs-12">
												<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.<br>
												et quas molestias excepturi <a href="#">sint occaecati cupiditate non provident</a>, similiq</p>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>

						</div>
					</div>
					</div>
					<!-- FINE TOOL: APPUNTAMENTO IN AGENZIA -->

				</div>
				<!-- Pulsantiera -->


				<div id="toolconsole">
					<ul id="toolbtns">
						<li class="toolbtn"><a href="javascript:;" title="Assistente virtuale" class="icon" id="toolbtnpaolo" data-tool="#virtAss"><img src="/wscmn/fe/img/priv_tool_paolo.png"></a></li>
						<li class="toolbtn"><a href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_priv_full_responsive_servizio_clienti.php&amp;responsive=y&amp;liv0=7&amp;liv1=1" title="Servizio clienti"><i class="icon icon icon-helpcenter hidden-xs hidden-sm"></i><i class="icon icon-help_center_device hidden-md hidden-lg hidden-xl"></i></a></li>
						<li class="toolbtn"><a href="javascript:;" title="Chat"><i class="icon icon-chat hidden-xs hidden-sm"></i><i class="icon icon-chat_device hidden-md hidden-lg hidden-xl"></i></a></li>
						<li class="toolbtn"><a href="javascript:;" title="Webank ti richiama" data-tool="#toolCmb" data-toolid="tool2"><i class="icon icon-prenota hidden-xs hidden-sm"></i><i class="icon icon-appuntamento_telefonico_device hidden-md hidden-lg hidden-xl"></i></a></li>
						<li class="toolbtn"><a href="### LINK SCRIVICI ###" title="Scrivici"><i class="icon icon-scrivici hidden-xs hidden-sm"></i><i class="icon icon-scrivici_device hidden-md hidden-lg hidden-xl"></i></a></li>
						<!--<li class="toolbtn"><a href="javascript:;" title="Appuntamento in agenzia" id="toolAppuntamentoBtn" data-tool="#toolAppuntamento"><i class="icon icon-appuntamento hidden-xs hidden-sm"></i><i class="icon icon-appuntamento_agenzia_device hidden-md hidden-lg hidden-xl"></i></a></li>-->
					</ul>
				</div>
				<?php
				/*
				<ul id="toolbtns">
					<span id="toolVirtassBtn"></span>
					<li class="toolbtn"><a href="javascript:;" title="Help center" class="icon icon-helpcenter" ></a></li>
					<li class="toolbtn"><a href="javascript:;" title="Prenota un appuntamento telefonico" class="icon icon-prenota" data-tool="#toolCmb"></a></li>
					<span id="toolChatBtn"><li class="toolbtn"><a href="javascript:;" title="Chat" class="icon icon-chat"></a></li></span>
					<li class="toolbtn"><a href="javascript:;" title="Scrivici" class="icon icon-scrivici"></a></li>
					<li class="toolbtn"><a href="javascript:;" title="Appuntamento in agenzia" class="icon icon-appuntamento" data-tool="#toolAppuntamento"></a></li>
				</ul>

				*/
				?>
			</div>

	</div>
