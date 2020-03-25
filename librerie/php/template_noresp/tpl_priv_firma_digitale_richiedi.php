<script type="text/javascript">	
	$(function () {
				$("#dateToMask").mask("99/99/9999");
			});
</script>

<h1>Richiedi firma</h1>
<div class="banner">
	<img alt="" src="/img/ret/banner_firma_dig_richiedi.jpg">
</div>
<p>Sed ut <strong>perspiciatis</strong> unde omnis iste natus error sit voluptatem</p>

<div class="boxrichiesta">
	<div class="steprichiesta on">
		<div class="steprichiestatit">
			<img alt="Lorem ipsum dolor" src="/img/ret/str_tit_uno_on.gif">
			<h2 class="richiestaTit">Lorem ipsum dolor</h2>
			<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
		</div>
	
		<div class="formGeneric steprichiestacont">
			<br/>
			<div id="formRichiestaFirmaStep1">
				<form id="formRichiestaFirma">
					<div id="docRichiestaFirma">
						<div class="row-fluid">
							<div class="span4">
								<label class="nomefield">Lorem ipsum</label>
								<span class="output">Lorem ipsum dolor</span>
								<span class="output">data di rilascio/ultimo rinnovo 12/05/2011</span>
							</div>
							<div class="span4">
								<label class="nomefield">&nbsp;</label>
							</div>
							<div class="span4">
								<a class="underline" href="javascript:;" onclick="$('#docRichiestaFirma').hide();$('#modDocRichiestaFirma').show();">Lorem ipsum dolor</a>
							</div>
						</div>
					</div>
					
					<div id="modDocRichiestaFirma" style="display:none">
						<div class="borderLeftgrey">
							<div class="row-fluid">
								<div class="span4">
									<label class="nomefield">Lorem ipsum</label>
									<select><option>lorem</option><option>lorem</option></select>
								</div>
								<div class="span4">
									<label class="nomefield">Lorem ipsum</label>
									<input type="text" value="lorem">
								</div>
								<div class="span4">
									<label class="nomefield">Lorem ipsum</label>
									<div class="row-fluid">
										<div class="span6">
											<input type="text" value="12/12/2012" id="dateToMask">
											<br/><br/>
											<a class="underline indent" href="javascript:;" onclick="$('#modDocRichiestaFirma').hide();$('#docRichiestaFirma').show();">Lorem ipsum dolor</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br/><br/>
					</div>
					<div id="indRichiestaFirma">
						<div class="row-fluid">
							<div class="span4">
								<label class="nomefield">Lorem ipsum</label>
								<span class="output">Lorem ipsum dolor</span>
							</div>
							<div class="span4"><label class="nomefield">&nbsp;</label></div>
							<div class="span4">
								<a class="underline textbottom" href="javascript:;" onclick="$('#indRichiestaFirma').hide();$('#modIndRichiestaFirma').show();">Lorem ipsum dolor</a>
							</div>
						</div>
					</div>
					
					<div id="modIndRichiestaFirma" class="borderLeftgrey" style="display:none">
						<div class="row-fluid">
							<div class="span4">
								<label class="nomefield">Lorem ipsum</label>
								<input type="text" value="lorem ipsum">
							</div>
							<div class="span4">
								<label class="nomefield">Lorem ipsum <span>(facoltativo)</span></label>
								<input type="text" placeholder="nome e cognome o nome azienda">
							</div>
							<div class="span4">
								<label class="nomefield">Lorem ipsum</label>
								<select><option>lorem</option><option>lorem</option></select>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<div class="row-fluid">
									<div class="span6">
										<label class="nomefield">Lorem ipsum</label>
										<select><option>lorem</option><option>lorem</option></select>
									</div>
								</div>
							</div>
							<div class="span4">
								<label class="nomefield">Lorem ipsum</label>
								<select><option>lorem</option><option>lorem</option></select>
							</div>
							<div class="span4">
								<div class="row-fluid">
									<div class="span6">
										<label class="nomefield">Lorem ipsum</label>
										<select><option>lorem</option><option>lorem</option></select>
										<br/><br/>
										<a class="underline indent" href="javascript:;" onclick="$('#modIndRichiestaFirma').hide();$('#indRichiestaFirma').show();">Lorem ipsum dolor</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div id="btnProsegui1" class="btnc aButtoncons"><a onclick="$('#formRichiestaFirmaStep1').hide();$('#formRichiestaFirmaStep1output').show();stepRichiesta(this);" class="nextstep first aButton" href="javascript:;"><span>prosegui</span></a></div>
			</div>
			<div id="formRichiestaFirmaStep1output" style="display:none">
				<strong>Lorem ipsum dolor sit lorem ipsum dolor</strong>
			</div>
			
		</div>
	</div>
	<div class="steprichiesta off">
		<div class="steprichiestatit">
			<img alt="Lorem ipsum dolor sit" src="/img/ret/str_tit_due_off.png">
			<h2 class="richiestaTit">Lorem ipsum dolor sit</h2>
			<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png"></span>
		</div>
		<div class="formGeneric steprichiestacont">
			<div id="formRichiestaFirmaStep2" style="display:none">
				<form id="" class="formGeneric">
					<div class="tolltipclick row-fluid disabledField">
						<label class="nomefield">Lorem ipsum dolor </label>
						<span class="closed">
							<span id="informative" class="uniqTooltipText over fixed nextstep" onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this);$('#formRichiestaFirmaStep2').hide();$('#formRichiestaFirmaStep2output').show();stepRichiesta(this);}">
								<span class="uniqTooltipPos">
									<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="informative2" disabled></a>
									<span class="uniqTooltipInnerHTML">
										<p>Lorem ipsum dolor</p>
									</span>
								</span>
									  
							</span>
						</span>
						<span class="text nopadd">Lorem ipsum dolor sit lorem ipsum dolor <a href="javascript:;" onclick="ableinput(this)" target="_blank">Lorem ipsum dolor sit lorem ipsum dolor</a> Lorem ipsum dolor sit lorem ipsum dolor</span>	
					</div>
				</form>
			</div>
			<div id="formRichiestaFirmaStep2output" style="display:none">
				<strong>Lorem ipsum dolor sit lorem ipsum dolor</strong>
			</div>
		</div>
	</div>
	<div class="steprichiesta last off">
		<div class="steprichiestatit">
			<img alt="Lorem ipsum dolor sit lorem" src="/img/ret/str_tit_tre_off.png">
			<h2 class="richiestaTit">Lorem ipsum dolor sit lorem</h2>
		</div>
		<div class="steprichiestacont">
			<div id="formRichiestaFirmaStep3" style="display:none">
				<div class="boxstepCont">
					<div class="boxstep">
						<div class="middle">
							<div class="half text">
								<p><strong>LOREM IPSUM DOLOR SIT</strong> lorem ipsum</p>
								<ul class="pdfinline nopadd">
									<li>
										<a class="printDoc" href="javascript:;" id="contratto" onclick="$(this).next().css('visibility','visible')">lorem ipsum</a>
										<img class="visitedImgStep" src="/img/img_or_visited.gif" style="visibility:hidden">
									</li>
								</ul>
								<p>lorem ipsum dolor sito lorem <strong>ipsum dolor</strong> lorem ipsum<br/>
								lorem ipsum dolor<br/>
								lorem ipsum dolor<br/>
								lorem ipsum dolor
								</p>
								<p><strong>LOREM IPSUM DOLOR SIT</strong> lorem ipsum</p>
							</div>
						</div>
					</div>
				</div>
				<br class="clear"/>
			</div>
		
		</div>
	</div>
	<div class="stepbottom"></div>
</div>