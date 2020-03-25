	<div id="toolbox" class="">
		<div id="toolwrap">
			<div id="toolhandle"><a class="btn-icon"><i class="icon icon-ellipsis-h"></i></a></div>
			<div id="toolcontainer">
				<!-- Vari tool -->
				
				<!-- ASSISTENTE VIRTUALE -->
				<div id="virtAss" style="display:none">
					<div id="vaExtended" style="display:none">
						<div class="vaExtTop">
							<a href="javascript:;" id="vaLinguetta" title="Espandi"></a>
						</div>
						<div id="vaExtConsole" style="display:none">
						</div>
						<div class="vaExtBody"></div>
					</div>
					<div class="vaContainer">
						<div class="vaTop">
							<span id="vaTitle">Paolo, l'assistente virtuale</span>
							<a href="javascript:;" class="vaChiudi" title="Chiudi">&nbsp;</a>
							<a href="javascript:;" class="vaWindow" title="Espandi/Riduci">&nbsp;</a>
						</div>
						<div class="vaFiletto" style="display:none"></div>
						<div class="vaBody">
							<div id="vaSpace"></div>
							<div class="vaConsole">
								<a href="javascript:;" class="vaAudio" title="Mute on/off"></a>
								<div id="vaSlider">
									<a href="javascript:;" id="vaSliderCursor" title="Volume"> </a>
								</div>
								<a id="vaTextControl" href="javascript:;"></a>
							</div>
							<div id="vaDialog">
							</div>
							<form autocomplete="off" id="vaFormTag" onsubmit="vaAsking(vaDomanda.val())" action="javascript:;" method="post">
							<div id="vaForm">
								<input type="text" id="vaDom" maxlength="200" name="campo" class="waiting" value="fammi una domanda..."/>
								<a title="Lorem ipsum" class="btnformright" href="javascript:;" id="vaAsking"><img alt="Chiedi" src="/img/ret/btn_left_ar.gif"/><span>chiedi</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a>
							</div>
							</form>
							<br class="clear"/>
						</div>
						<div class="vaBottom"></div>
					</div>
				</div>
				<script type="text/javascript" src="/wscmn/js/ret/priv_va.js?r=<?php echo $random ?>"></script>
				<!-- FINE ASSISTENTE VIRTUALE -->

				
				<!-- TOOL CALL ME BACK -->
				<div class="tool" id="tool2">
					<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
						<span class="tooltit handle"></span><img src="/wscmn/img/ret/xtool2.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
					</div>
					<div class="toolmiddle" id="formtbxCallMeBack" style="min-height:314px;height:auto">
						<p class="operatori"><strong>Gli operatori del Customer Care ti richiamano quando vuoi tu.</strong></p>
						
						
						<form class="formoperatori" method="post" action="" id="tbxCallMeBack">
							<p><label>Tel.</label>
							<span class="alRgFields"><input type="text" size="4" maxlength="4" onclick="this.focus()"/><input type="text" maxlength="16" size="16" style="" onclick="this.focus()" /></span>
							</p>
							<p><label>Giorno</label>
							<span class="alRgFields"><select class="txtgiorno" name="giorno"><option selected="selected" value="uno">12/07/2007 - gio.</option><option value="due">13/07/2007 - ven.</option><option value="tre">16/07/2007 - lun.</option></select></span>					
							</p>
							<p><label>Fascia oraria</label>
							<span class="alRgFields"><select class="txtfascia" name="fascia"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select></span>					
							</p>
							<p><label><strong>Argomento</strong></label><br/>
								<input type="radio" value="1" class="rd" name="canale"/> 
								<span class="rdtxt">sportello e carte</span><br class="clear"/>
								<input type="radio" value="2" class="rd" name="canale"/> 
								<span class="rdtxt">trading</span><br class="clear"/>
								<input type="radio" value="3" class="rd" name="canale"/> 
								<span class="rdtxt">altro</span><br class="clear"/>
							</p>
							<p class="pswchiamata"><label><strong>Password chiamata</strong></label><br/>
								<input type="text" class="txtpswchiamata" maxlength="12" size="14" value="" id="password" name="password" onclick="this.focus()"/><br/>
								<span>(solo per info sul conto o sul deposito titoli)</span>
							</p>					
							<a href="javascript:;" onclick="setLoading('tool2Img', 'formtbxCallMeBack', 'tbxCallMeBack'); setInterval(function(){stopLoading('tool2Img', 'formtbxCallMeBack', 'tbxCallMeBack')},3000);" class="btnformright posiz" title="Invia"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>Invia</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a>
						
						</form>
					
					</div>
					<div class="toolfooter"></div>
					<br class="clear" />
				</div>

				<!-- FINE CALL ME BACK -->


				<!-- APPUNTAMENTO IN AGENZIA -->
				<div class="tool" id="tool9">
					<div class="toolhead toolhead9" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
						<span class="tooltit handle tooltit9"></span><img src="/wscmn/img/ret/xtool2.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
					</div>


					<?php if ($bank=="webank") { ?>

					<!-- alert deposito -->
					<div class="toolmiddle" id="cmbAttenzione">
						<div class="boxesito attenzione">
							<div class="middle"><span class="imgCont"></span>
								<div class="text">
									<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
									et quas molestias excepturi sint occaecati cupiditate non provident, similiq <a href="#">link ipsum lorem</a>.</p>
								</div>
							</div>
						</div>
						
						<div class="fooform">
							<div class="fooformleft">
								<div><a href="javascript:;" class="btnformleft" title="Lorem" onclick="$('#tool9').hide();"><img src="/img/ret/btn_left_bi.gif" alt=""><span>Lorem</span><img src="/img/ret/btn_right_bi.gif" alt=""></a></div>
							</div>
							<div class="fooformright">
								<div><a href="#1" class="btnformright" title="Lorem ipsum" onclick="$('#cmbAttenzione').hide();$('#formtbxCallMeBack').fadeIn()"><img src="/img/ret/btn_left_ar.gif" alt=""><span>Ipsum</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
							</div>	
							<br class="clear">
						</div>

					</div>
					
					<!-- fine alert deposito -->

					<?php } ?>
					<div class="toolmiddle" id="formtbxCallMeBack" style="min-height:274px;height:auto;<?php if ($bank=="webank") print ("display:none"); ?>">
						
						<p class="operatori">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
						<form class="formoperatori" method="post" action="" id="tbxCallMeBack">
						<script type="text/javascript">	$(function () {
						$("#datepickerTool").datepicker({
						showOn: "button",
						buttonImage: "/img/btn_pickdate_priv.gif",
						buttonImageOnly: true,
						minDate: 1,
						//MxDate fissata solo come esempiomaxDate: "+1M +10D",
						//fissare maxDate alla scadenza del certificatodateFormat: "dd/mm/yy",
						showOtherMonths: true,
						beforeShow: function() {setTimeout(function() {$(".ui-datepicker").css("z-index", getNextHighestZindex());}, 10); }
						
						}).next(".ui-datepicker-trigger").css("float", "left");
						$("#datepickerTool").mask("99/99/9999");
						
						$("#datepickerTool2").datepicker({
						showOn: "button",
						buttonImage: "/img/btn_pickdate_priv.gif",buttonImageOnly: 
						true,minDate: 1,
						//MxDate fissata solo come esempiomaxDate: "+1M +10D",
						//fissare maxDate alla scadenza del certificatodateFormat: "dd/mm/yy",
						showOtherMonths: true,
						beforeShow: function() {setTimeout(function() {$(".ui-datepicker").css("z-index", getNextHighestZindex());}, 10); }
						
						}).next(".ui-datepicker-trigger").css("float", "left");
						$("#datepickerTool2").mask("99/99/9999");});

						</script>
							<?php 
								if ($bank == "bpm") {?>
								<p><label><strong>Numero cellulare</strong></label>
									<span class="alRgFields"><input type="text" maxlength="16" size="14" style="" onclick="this.focus()"/></span>				
								</p>
								<?php }

								else
								{ ?>
								<h3>Modalit&agrave; preferita di contatto</h3>
		 						<div class="radiogroup">
			 						<label><input type="radio" name="modocontatto" value="telefono">Telefono:</label><span class="output">000 000 0000</span>
									<label><input type="radio" name="modocontatto" value="email">E-mail:</label><span class="output" title="lorem.ipsum@lorem.ips">lorem.ipsum@lorem.ips</span>
		 						</div>
		 						<hr>
								<?php }
							?>
							
							<!-- giorno -->
							<p style="float:left"><label style="float:left"><strong>Giorno</strong></label>
								<span class="alRgFields"><input type="text" class="withIco" id="datepickerTool" placeholder="gg/mm/aaaa" value="22/11/2013" style="float:left;margin:-2px 0 0 5px;width:70px;margin-left:5px"></span>					
							</p>
							<p><label><strong>Fascia oraria</strong></label>
								<span class="alRgFields"><select class="txtfascia" name="fascia"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select></span>
							</p>
							<!-- Altro giorno -->
							<?php if ($bank =="webank") { ?>
							<hr>
							<h3>Eventuale data alternativa:</h3>
							<p style="float:left">
								<label style="float:left"><strong>Giorno</strong></label>
								<span class="alRgFields"><input type="text" class="withIco" id="datepickerTool2" placeholder="gg/mm/aaaa" value="22/11/2013" style="float:left;margin:-2px 0 0 5px;width:70px;margin-left:5px"></span>					
							</p>
							<p><label><strong>Fascia oraria</strong></label>
								<span class="alRgFields"><select class="txtfascia" name="fascia"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select></span>
							</p>
							<hr>
							<h3>Lorem ipsum dolor sit amet</h3>
							<?php } ?>
							<p><label><strong>Agenzia</strong></label>
								<input type="text" id="campoAutocomplete" name="fascia" class="autocomplete">
								<script type="text/javascript">
									$("#campoAutocomplete").autoComplete(["Agenzia 221 - Milano Lambrate","Agenzia 223 - Milano P. Genova"]);
									$("#campoAutocomplete").autocomplete( "widget" ).addClass( "agenzia" );
								</script>
							<!-- 
							<select class="txtagenzia" name="fascia">
								<option selected="selected" value="Lorem_ipsum">Lorem ipsum dolor 1</option><option value="Lorem_ipsum">Lorem ipsum dolor 2</option><option value="Lorem_ipsum">Lorem ipsum dolor 3</option>
							</select>
							-->
							</p>
							<p><label><strong>Argomento</strong></label>
							<?php
								if ($bank == "webank") {?>
									<span class="alRgFields">Lorem ipsum dolor</span>
									<p><strong>Attenzione!</strong><br>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude ipsum dolor sit amet consectetur adipiscing.
									</p>
								<?php }
								else
								{ ?>
									<span class="alRgFields"><select class="txtargomento" name="fascia"><option selected="selected" value="Lorem_ipsum">Lorem ipsum 1</option><option value="Lorem_ipsum">Lorem ipsum 2</option><option value="Lorem_ipsum">Lorem ipsum 3</option></select></span>					
								<?php }
							?>
							
							</p>
							<a href="javascript:;" onclick="setLoading('tool2Img', 'formtbxCallMeBack', 'tbxCallMeBack'); setInterval(function(){stopLoading('tool2Img', 'formtbxCallMeBack', 'tbxCallMeBack')},3000);" class="btnformright posiz" title="Invia"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>Lorem</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a>
						</form>
					</div>
					<div class="toolfooter"></div>
					<br class="clear" />
				</div>


				<!-- FINE APPUNTAMENTO IN AGENZIA -->
				

			</div>
			<!-- Pulsantiera -->
			<ul id="toolbtns">
			<?php if($bank=="bpm" || $bank=="webank") {?>
				<li class="toolbtn"><a href="javascript:;" title="Assistente virtuale" class="icon" id="toolbtnpaolo" data-toolid="virtAss"><img src="/wscmn/fe/img/priv_tool_paolo.png"></a></li>
			<?php } {?>
				<li class="toolbtn"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_priv_full_responsive_servizio_clienti.php&responsive=y&liv0=7&liv1=1" title="Servizio clienti" class="icon icon-helpcenter" ></a></li>
			
				<span id="vvcButton"><?php // <li class="toolbtn"><a href="javascript:;" title="Chat" class="icon icon-chat"></a></li> ?></span>
				<li class="toolbtn"><a href="javascript:;" title="Webank ti richiama" class="icon icon-prenota" id="toolCmbBtn" data-toolid="tool2"></a></li>
				<li class="toolbtn"><a href="### LINK SCRIVICI ###" title="Scrivici" class="icon icon-scrivici"></a></li>
			<?php }  if($bank=="bpm" || $bank=="webank") {?>
				<li class="toolbtn"><a href="javascript:;" title="Appuntamento in agenzia" class="icon icon-appuntamento" id="toolAppuntamentoBtn" data-toolid="tool9"></a></li>
			<?php }?>
			</ul>
		</div>
	</div>
