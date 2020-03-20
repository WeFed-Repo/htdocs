<!-- APPUNTAMENTO IN AGENZIA -->
				<div class="tool" id="tool9">
					<div class="toolhead toolhead9" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
						<span class="tooltit handle tooltit9"></span><img src="/wscmn/img/ret/xtool2.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
					</div>


					
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
								<div><a href="javascript:;" class="btnformleft" title="Lorem" onclick="$('#tool9').hide();"><img src="/WB/fe/img/btn_left_bi.gif" alt=""><span>Lorem</span><img src="/WB/fe/img/btn_right_bi.gif" alt=""></a></div>
							</div>
							<div class="fooformright">
								<div><a href="#1" class="btnformright" title="Lorem ipsum" onclick="$('#cmbAttenzione').hide();$('#formtbxCallMeBack').fadeIn()"><img src="/WB/fe/img/btn_left_ar.gif" alt=""><span>Ipsum</span><img src="/WB/fe/img/btn_right_ar.gif" alt=""></a></div>
							</div>	
							<br class="clear">
						</div>

					</div>
					
					<!-- fine alert deposito -->

					<div class="toolmiddle" id="formtbxCallMeBack" style="min-height:274px;height:auto;display:none">
						
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
															<h3>Modalit&agrave; preferita di contatto</h3>
		 						<div class="radiogroup">
			 						<label><input type="radio" name="modocontatto" value="telefono">Telefono:</label><span class="output">000 000 0000</span>
									<label><input type="radio" name="modocontatto" value="email">E-mail:</label><span class="output" title="lorem.ipsum@lorem.ips">lorem.ipsum@lorem.ips</span>
		 						</div>
		 						<hr>
															
							<!-- giorno -->
							<p style="float:left"><label style="float:left"><strong>Giorno</strong></label>
								<span class="alRgFields"><input type="text" class="withIco" id="datepickerTool" placeholder="gg/mm/aaaa" value="22/11/2013" style="float:left;margin:-2px 0 0 5px;width:70px;margin-left:5px"></span>					
							</p>
							<p><label><strong>Fascia oraria</strong></label>
								<span class="alRgFields"><select class="txtfascia" name="fascia"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select></span>
							</p>
							<!-- Altro giorno -->
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
																<span class="alRgFields">Lorem ipsum dolor</span>
									<p><strong>Attenzione!</strong><br>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude ipsum dolor sit amet consectetur adipiscing.
									</p>
															
							</p>
							<a href="javascript:;" onclick="setLoading('tool2Img', 'formtbxCallMeBack', 'tbxCallMeBack'); setInterval(function(){stopLoading('tool2Img', 'formtbxCallMeBack', 'tbxCallMeBack')},3000);" class="btnformright posiz" title="Invia"><img src="/WB/fe/img/btn_left_ar.gif" alt="" /><span>Lorem</span><img src="/WB/fe/img/btn_right_ar.gif" alt="" /></a>
						</form>
					</div>
					<div class="toolfooter"></div>
					<br class="clear" />
				</div>
				<!-- FINE APPUNTAMENTO IN AGENZIA -->