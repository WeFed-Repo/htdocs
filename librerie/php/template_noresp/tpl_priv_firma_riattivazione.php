<style type="text/css">
		@import url(/wscmn/css/priv_calendar.css);
</style>
<script type="text/javascript" src="/wscmn/js/ret/responsive/ui.datepicker-it.js"></script>
<script type="text/javascript">	
	$(function () {
				$("#datepicker").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd-mm-yy",
					showOtherMonths: true
					
				});
			});
</script>
<h1>sospensione e revoca</h1>
<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <strong>Duis aute</strong> irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<div id="BvTablePage" class="tipoc">
	
	
	<div class="bollfrecsx3">	
		<div class="cartimpronta_lista cartimpronta_lista2"><img alt="" class="carttit" src="/img/ret/1px.gif"/><div class="cartcont"><p  onclick="javascript:ApriCartImpr(this,'true');" onmouseover="javascript:this.style.cursor='pointer'" class="tit"><span><strong class="titolo">RIATTIVA FIRMA</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_on.gif" /></p><br class="clear" />
		<div class="esteso" style="display:block">
			<div class="steprichiesta on">
				<div class="steprichiestacont">
					<ul class="lista">
						<li class="lista">Lorem ipsum dolor sit amet, <strong>consectetuer</strong></li>
          
						<li class="lista">Lorem ipsum , consectetuer</li>
			
					</ul>
					<div class="formCenteredwrapper" id="contformrichiesta">
							<form class="formGeneric formCentered" autocomplete="off" >
									<fieldset class="row error">
										<label class="nomefield">Lorem ipsum:</label>
										<span class="output">lorem ipsum</span>
									</fieldset>
									<fieldset class="row">
										<legend>periodo di sospensione:</legend>
										<div class="quattrocampi">
											<label class="nomefield">dal:</label>
											<span class="output">26/10/2010</span>
										</div>
										<div class="duecampi">
											<label class="nomefield">al:</label>
											<span class="output">30/10/2010</span>
										</div>
									</fieldset>
							</form>
							
					</div>
					<div id="btnProsegui1" class="aButtoncons formCentered btnc"><a href="javascript:;" class="nextstep first aButton" id="buttonAvanti" onclick="$('#btnModifica1').show();$('#btnProsegui1').hide();stepRichiesta(this);disableForm(this,'contformrichiesta');$('#datepicker').datepicker('disable')"><span>avanti</span></a></div>
					
				</div>
			</div>
			<div class="steprichiesta">
				<div class="steprichiestacont">
					<div style="display:none" id="richiediCodice">
						<div class="formCenteredheader"><strong>lorem ipsum dolor sit</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
						<div class="formCenteredwrapper2">
							<form autocomplete="off" class="formGeneric formCentered">
									<fieldset class="row">
										<label class="nomefield">Lorem ipsum:</label>
										<input type="text">
										
									</fieldset>
									
							</form>
						</div>	
						<div class="aButtoncons formCentered btnc"><a href="javascript:;" class="aButton nextstep" id="" onclick="stepRichiesta(this,true);$('#richiediCodice').hide();"><span>lorem</span></a></div>
					</div>
				</div>
			</div>
			<div class="steprichiesta">
				<div class="steprichiestacont">
					<div style="display:none">
					
					  <div class="boxesito positivo">
							<div class="middle">
							<span class="imgCont"></span>
							<div class="text"><p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
							et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p></div>
							
							</div>
					</div>
					<div class="fooform">
					<div class="fooformtop"></div>
					<div class="fooformleft">
						<div><a href="#1" class="" title="lorem ipsum">lorem ipsum</a></div>	
					</div>
					<br class="clear">
					</div>
					</div>
				</div>
			</div>
		</div>
		</div><br /><br class="clear"/>
		</div>
	</div>	
	
	
	<div class="bollfrecsx3">
		<div class="cartimpronta_lista cartimpronta_lista2"><img alt="" class="carttit" src="/img/ret/1px.gif"/><div class="cartcont"><p  onclick="javascript:ApriCartImpr(this,'true');" onmouseover="javascript:this.style.cursor='pointer'" class="tit"><span><strong class="titolo">SCARICA IL MODULO DI REVOCA</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_off.gif" /></p><br class="clear" />
		<div class="esteso">
		
			<div class="steprichiesta on">
				<div class="steprichiestacont">
				<br/><br/>
					<div class="formCenteredwrapper" id="contformrichiesta">
							<!--FUNZIONE CHE EMULA L'ATTIVAZIONE DEL LINk -SOLO INDICATIVA -NON USARE -->
							
							<form class="formGeneric formCentered" autocomplete="off" >
									<fieldset class="row">
										<label class="nomefield">Lorem ipsum:</label>
										<select id="nCarnetInput" onchange="if($(this).val().indexOf('seleziona')==-1) {$('#link1').removeClass('disabled').addClass('underline')}">
											<option>seleziona</option>
											<option>lorem ipsum dolor</option>
										</select>
									</fieldset>
									<fieldset class="row">
										<label class="nomefield">Lorem ipsum:</label>
										<span class="output">Lorem ipsum</span>
									</fieldset>
									<fieldset class="row tolltipclick">
										<span class="closed">
											<span onclick="if(this.parentNode.className=='closed' && $('#link1').hasClass('disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="indirizzo">
												<span class="uniqTooltipPos">
													<a href="javascript:;" class="disabled" id="link1">lorem ipsum</a>
													<span class="uniqTooltipInnerHTML">
														<p>lorem ipsum dolor sit lorem ipsum dolor sit</p>
													</span>
												</span>
											</span>
										</span>	<br/><br/>
										<span class="text"><strong>lorem ipsum dolor:</strong><br/>lorem ipsum dolor sit lorem ipsum dolor sit</span>
										<br/><br/>
										<span class="text"><strong>lorem ipsum dolor:</strong><br/>lorem ipsum dolor sit lorem ipsum dolor sit</span>
									</fieldset>
							</form>
							
					</div>
					
					
				</div>
			</div>
		
		</div></div><br /><br class="clear"/>
		</div>
	</div>	
	
</div>
