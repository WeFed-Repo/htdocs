<h1>Libretto assegni</h1>
<div class="divtabellalist">
	<table border="0" class="tabellalist">
		<tr>
			<td class="on first"><a href="#1" title="Lorem ipsum">richiesta</a></td>
			<td class="off"><a href="#1" title="Lorem ipsum lorem">lorem ipsum</a></td>
			<td class="off"><a href="#1" title="Lorem ipsum">lorem ipsum</a></td>
			<td class="off"><a href="#1" title="Lorem ipsum">lorem ipsum<br>lorem ipsum</a></td>
			<td class="off"><a href="#1" title="Lorem ipsum">lorem ipsum</a></td>												
			<td class="end">&nbsp;</td>
		</tr>
	</table>
</div>
<br />

<div class="boxrichiesta">
	<div class="steprichiesta on">
		<div class="steprichiestatit">
			<img alt="Richiesta Assegni" src="/img/ret/str_tit_uno_on.gif">
			<h2 class="richiestaTit">Richiesta Carnet Assegni</h2>
			<span style="display: none;" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
			<span style="display: none;"><a href="javascript:;" class="backstep second modifica" onclick="$('#btnProsegui1').show();$('#btnModifica1').hide();stepRichiesta(this);disableForm(this,'contformrichiesta')">modifica</a></span>
		</div>
		<div class="formGeneric steprichiestacont">
			<div id="contformrichiesta"> 
				<form id="formrichiesta1">
					<span class="tolltipclick text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis <strong>aute irure</strong> lorem
						<span class="closed">
							<span id="indirizzo" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
								<span class="uniqTooltipPos">
									<a class="" href="javascript:;">cillum dolore eu </a>  
									<span class="uniqTooltipInnerHTML">
										<p>lorem ipsum</p>
									</span>
								</span>
							</span>
						</span>
						
					</span>
					<fieldset class="first">
						<label class="nomefield">lorem ipsum:</label>
						<span class="output">Lorem ipsum</span>
					</fieldset>
					<fieldset class="tolltipclick">
						<legend class="ico">lorem ipsum:</legend>
						<span class="iconahelp">
							<span class="closed">
								<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti7">
								<span class="uniqTooltipPos"><a href="javascript:;"><img class="help" src="/img/ret/ico2or_help2.gif"></a>
									<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
								</span>
								</span>
							</span>
						</span>
						<div class="radiocont">
							<label class="trecampi"><input type="radio" id="" name="#name1">lorem</label>
							<label class="trecampi"><input type="radio" id="" name="#name1">ipsum</label>
						</div>
					</fieldset>
					<div id="indirizzosped">
						<fieldset class="first">
							<label class="nomefield">lorem ipsum dolor sit:</label>
							<span class="output">lorem ipsum dolor sit</span>
						</fieldset>
						<fieldset class="vtop tolltipclick">
							<label class="nomefield">
							<a onclick="if(!($(this).hasClass('disabled'))) {$('#indirizzosped').hide();$('#indirizzomod').show()}" href="javascript:;" class="underline linkTodisable">Cambia indirizzo</a>
							<span class="iconahelp">
							<span class="closed">
										<span id="indirizzo" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
											<span class="uniqTooltipPos">
												<a href="javascript:;"><img class="help" src="/img/ret/ico2or_help2.gif"></a>
												<span class="uniqTooltipInnerHTML">
													<p>lorem ipsum dolor sit lorem ipsum dolor sit</p>
												</span>
											</span>
										</span>
							</span>
							</span></label>
							<span class="output"><strong></strong></span>
						</fieldset>
					</div>
					<div class="borderLeftgrey" style="display:none" id="indirizzomod">
						<fieldset class="row">
							<label class="nomefield">lorem ipsum dolor sit:</label>
							<span>lorem ipsum dolor sit</span>
						</fieldset>
						<fieldset class="first">
							<label class="nomefield">lorem ipsum dolor sit:</label>
							<input type="text">
						</fieldset>
						<fieldset>
							<label class="nomefield">lorem:</label>
							<input type="text">
						</fieldset>
						<fieldset class="row">
							<div class="trecampi">
								<label class="nomefield">lorem:</label>
								<select><option>lorem</option><option>lorem</option></select>
							</div>
							<div class="trecampi">
								<label class="nomefield">lorem:</label>
								<select><option>lorem</option><option>lorem</option></select>
							</div>
							<div class="trecampi">
								<label class="nomefield">lorem:</label>
								<select><option>lorem</option><option>lorem</option></select>
							</div>
						</fieldset>
					</div>
					<fieldset class="row">
						<legend>lorem ipsum:</legend>
						<div class="duecampi">
							<label><input type="radio" onclick="$('#spedizioneHidden').hide()" name="spedizione" value="Posta raccomandata">lorem ipsum<br> </label>
							<span>lorem ipsum</span>
						</div>
						<div class="duecampi">
							<label><input type="radio" onclick="$('#spedizioneHidden').show()" name="spedizione" value="Corriere">lorem ipsum</label>
							<span>Glorem ipsum</span>
						</div>
					</fieldset>
					<div style="display:none" id="spedizioneHidden">
						<fieldset class="tolltipclick first">
							<label class="nomefield ico">lorem ipsum:</label>
							<span class="iconahelp">
							<span class="closed">
									<span id="spedizione" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
										<span class="uniqTooltipPos">
											<a href="javascript:;"><img class="help" src="/img/ret/ico2or_help2.gif"></a>
											<span class="uniqTooltipInnerHTML">
												<p>Ilorem ipsum</p>
											</span>
										</span>
									</span>
							</span>
							</span>
							
							<input type="text">
						</fieldset>

					</div>
					
					<fieldset class="tolltipclick first">
						<legend class="ico">lorem ipsum:</legend>
						<span class="iconahelp">
							<span class="closed">
								<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti7">
								<span class="uniqTooltipPos"><a href="javascript:;"><img class="help" src="/img/ret/ico2or_help2.gif"></a>
									<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
								</span>
								</span>
							</span>
						</span><br class="clear" />
						<span class="output">Lorem ipsum</span>
					</fieldset>
					<fieldset>
						<label class="nomefield">lorem ipsum:</label>
						<span class="output">Lorem ipsum</span>
					</fieldset>
					<fieldset class="row">
						<label class="nomefield">Note:</label>
						<input type="text" name="" placeholder="facoltativo">
					</fieldset>
					<fieldset class=" row">
					<legend class="nomefield">Lorem ipsum:</legend>
					<label><input type="checkbox"  id="">	
						<span class="text nopadd">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons</span></label>
					</fieldset>
				</form>
				<div class="btnc aButtoncons" id="btnProsegui1"><a id="btnProsegui" onclick="openPopOverLayer('layeralert2', 'floating', 1)" class="nextstep first aButton" href="javascript:;"><span>prosegui</span></a></div>
				<div class="btnc aButtoncons" style="display:none" id="btnModifica1"><a  onclick="disableForm($(this),'contformrichiesta');$('#btnProsegui1').show();$('#btnModifica1').hide();stepRichiesta(this)" class="backstep second modifica" href="javascript:;"><span>modifica</span></a></div>
				<br class="clear">
			</div>
		</div>
	</div>
	
	<div class="steprichiesta off last">
		<div class="steprichiestatit">
			<img src="/img/ret/str_tit_due_off.png" alt="Invia la richiesta">
			<h2 class="richiestaTit">Invia la richiesta</h2>
			<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
		</div>
		<div class="formGeneric steprichiestacont">
			<div id="contformrichiesta2" style="display:none">
			<form action="#">
    
				<div class="pintxt">
				<p class="pin_testo2">Lorem ipsum</p>
				  <p class="pin_testo">Inserisci la <strong class="negativo">TERZA</strong> 
					e <strong class="negativo">QUARTA</strong> cifra del codice <strong class="negativo">12</strong> 
					della tua <strong>Carta Servizi Telematici</strong></p>
				</div>
				<div class="pincode">
				  <input type="password" maxlength="1" name="" class="pin pinfirst">
				  <img width="17" height="21" border="0" src="/img/ret/pin_aster.gif" class="aster pincenter" alt=""><img width="17" height="21" border="0" src="/img/ret/pin_aster.gif" class="aster pincenter" alt="">
				  <input type="password" maxlength="1" name="" class="pin pinlast">
				   <br class="clear">
				  <img width="104" height="12" border="0" src="/img/ret/pin_posiz.jpg" class="posizione" alt=""> 	  
				</div>
			 <br class="clear">
   
			</form>
			<div class="btnc aButtoncons"><a href="javascript:;" class="nextstep aButton" onclick="stepRichiesta(this,'true');$('contformrichiesta2').hide();$('contformrichiesta3').show();"><span>invia la richiesta</span></a></div>
			<br class="clear">
			</div>
			<div id="contformrichiesta3" style="display:none">
				<div class="boxesito positivo">
	
					<div class="middle"><span class="imgCont"></span>
					<div class="text"><p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
				et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p></div>
					
					</div>
	
				</div>
			</div>
		</div>
	</div>
	<div class="stepbottom"></div>
</div>


<div class="layeralert2" id="layeralert2" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert2').dragHandle = new Draggable('layeralert2',{handle: 'handle'}, {scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert2')"/></div>
	<div class="body">
		<h3 class="verde">lorem</h3>
		<div class="boxesito attenzione">
	
			<div class="middle"><span class="imgCont"></span>
				<div class="text">
				<p class="nopadd"><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores </p>
			</div>
			</div>
	
		</div>
		<div class="fooform">
			<div class="fooformleft">
				<div><a href="javascript:;" class="btnformleft" title="lorem" id="" onclick="closePopOverLayer('layeralert2');"><img src="/img/ret/btn_left_bi.gif" alt=""><span>lorem</span><img src="/img/ret/btn_right_bi.gif" alt=""></a></div>
			</div>
			<div class="fooformright">
				<div><a href="javascript:;" class="btnformright nextstep first" title="lorem" id="" onclick="closePopOverLayer('layeralert2');disableForm($('#btnProsegui'),'contformrichiesta');$('#btnProsegui1').hide();$('#btnModifica1').show();stepRichiesta($('#btnProsegui'));"><img src="/img/ret/btn_left_ar.gif" alt=""><span>lorem</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
			</div>
		</div><br class="clear" />
	</div>
	<div class="foot"></div>
</div>
