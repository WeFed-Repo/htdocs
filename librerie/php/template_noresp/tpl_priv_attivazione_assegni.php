<h1>Libretto assegni</h1>
<div class="divtabellalist">
	<table border="0" class="tabellalist">
		<tr>
			<td class="off first"><a href="#1" title="Lorem ipsum">lorem ipsum</a></td>
			<td class="on"><a href="#1" title="Lorem ipsum lorem">attivazione</a></td>
			<td class="off"><a href="#1" title="Lorem ipsum">lorem ipsum</a></td>
			<td class="off"><a href="#1" title="Lorem ipsum">lorem ipsum<br>lorem ipsum</a></td>
			<td class="off"><a href="#1" title="Lorem ipsum">lorem ipsum</a></td>												
			<td class="end">&nbsp;</td>
		</tr>
	</table>
</div>
<br />
<div class="">
	<div class="steprichiesta on">
	<div class="steprichiestacont">
	
		<div class="formCenteredwrapper no-desktop">
			<form autocomplete="off" class="formGeneric formCentered">
				<div class="row-fluid">
					<label class="nomefield">Lorem ipsum:</label>
						<select id="nCarnetInput">
							<option>Num.0000000000-00/Num. 0000000000-00</option>
							<option>Num. 0000000000-00</option>
						</select>
						<span class="output" id="nCarnetOuput" style="display:none"></span>
					
				</div>
				<div class="row-fluid">
						<label class="nomefield">Lorem ipsum:</label>
						<span class="output">lorem ipsum</span>
				</div>
			</form>
			<div class="aButtoncons" id="btnProsegui1"><a onclick="$('#btnModifica1').show();$('#btnProsegui1').hide();stepRichiesta(this);$('#nCarnetInput').hide();$('#nCarnetOuput').html($('#nCarnetInput>option:selected').text()).show()" id ="buttonAvanti" class="nextstep first aButton" href="javascript:;"><span>avanti</span></a></div>
			<div class="aButtoncons paddTop20" style="display:none" id="btnModifica1"><a onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();stepRichiesta(this);$('#nCarnetInput').hide();$('#nCarnetOuput').html($('#nCarnetInput>option:selected').text()).show()" id ="buttonAvanti" class="backstep second" href="javascript:;"><span>modifica</span></a></div>
		</div>
	</div><br class="clear" />
	</div>
	
	<div class="steprichiesta">
		<div class="steprichiestacont">
			<div style="display:none" id="richiediCodice">
				<div class="formCenteredheader" ><strong>lorem ipsum dolor sit</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
				<div class="formCenteredwrapper no-desktop">
					<form autocomplete="off" class="formGeneric formCentered">
							<div class="row-fluid">
								<label class="nomefield">Lorem ipsum:</label>
								<input type="text">
								<br><br>
								<!--<a class="underline textbottom" href="javascript:;">Richiedi un nuovo codice</a>-->
							</div>
							
					</form>
					<div class="aButtoncons"><a href="javascript:;" class="aButton nextstep" id="" onclick="stepRichiesta(this,true);$('#richiediCodice').hide();"><span>conferma</span></a></div>
				</div>	
				
			   
			</div>
		</div> 
	</div>
	
	<div class="steprichiesta"> 
		<div class="steprichiestacont">
			<div style="display:none">
			  <div class="formCenteredheader">
			  <br class="clear" />
			  <div class="boxesito positivo">
					<div class="middle">
					<span class="imgCont"></span>
					<div class="text"><p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
					et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p></div>
					
					</div>
				</div>
				<div class="boxesito negativo">
					<div class="middle">
					<span class="imgCont"></span>
					<div class="text"><p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
					et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p></div>
					
					</div>
				</div>
			 </div>
				<div class="fooform">
					<div class="fooformtop"></div>
					<div class="fooformleft">
						<div><a title="lorem ipsum" class="" href="#1">lorem ipsum</a></div>	
					</div>
					<div class="fooformright">
						<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
					<br class="clear">
					</div>	
					<br class="clear">
				</div>
			
			</div>
		</div>
	</div>
</div>