<h1>a soglia</h1>
<div>
		<div class="boxcomunicaz">
			<div class="centrale">
				<ul>
					<li>Stai per <strong>modificare la tua soglia</strong> di conto corrente.</li>
					<li>Confermando l’operazione, la soglia modificata sarà <strong>immediatamente</strong> attiva.</li>				
				</ul>
			</div>
		</div>
	</div>
<div class="tithelp">
		<div class="helpleft2"><strong></strong></div><br><br>
		<div class="helpleft">Riepilogo dati</div>
		<div align="right" class="BvTableHeaderHelp">
			<a href=""><img height="16" width="16" src="/img/ret/help.gif" alt=""></a>
			<a class="hlp" href="">help</a><br class="clear">
		</div>
		<br class="clear">
	</div>
<table class="form01 form00">
		<tbody>
		

				<tr> 
					<td width="150">Conto corrente - deposito</td>
					<td><strong>CC XXXXX XXXXXXXXXX EUR +DEP</strong></td>
				</tr>
										

			</tbody>
		</table>
<table class="form01">
				<tr> 
					<td width="25" id="checkSogliaMaxID">
						<input type="checkbox" class="nobor" id="checkSogliaMax" name="checkSogliaMax">
					</td>
					<td width="350" id="">Quanti soldi vuoi tenere <strong>al massimo</strong> sul conto?</td>
					<td width="180" id=""> 
						 <input type="text" style="width: 100px;" maxlength="15" value="88.888" class="importo" onkeyup="loadImgSoglia();" id="" name=""> ,00 <input type="hidden" value="00" maxlength="2" class="importo2"  id="" name="">  <strong>EURO</strong>
					</td>
				</tr>
				<tr> 
					<td id="checkSogliaMinID">
						<input type="checkbox" class="nobor" id="" name="" checked disabled>
					</td>
					<td id="">Quanti soldi vuoi tenere <strong>al minimo</strong> sul conto?</td>
					<td id=""> 
						 <input type="text" style="width: 100px;" value="" class="importo" maxlength="15"  id="" name="">,00 <input type="hidden" value="00" maxlength="2" class="importo2"   name="">  <strong>EURO</strong>
					</td>
				</tr>
</table>
<table class="form01">
		
			<tr>			
				<td class="deposito" colspan="4">
					<div id="imgSupSoglie" class="top">Oltre i &euro; in c/c trasferisci sul dep.</div><br class="clear">
					<img id="imgSoglia" alt="" src="/img/ret/ico2inf_nosoglia.jpg"><br class="clear">
					<div id="imgInfSoglie" class="bottom">Sotto i &euro; sul c/c trasferisci dal dep.</div>
				</td>
			</tr>
	
	</table>
	<div class="fooform">
		<div class="fooformtop">Step <strong>1</strong> di 2</div>
		<div class="fooformleft">
			<div>
			</div>		
		</div>
		<div class="fooformright">
			<div>
				<a title="prosegui" class="btnformright" href="javascript:document.getElementById('impostaSogliaForm').action='/webankpri/wbOnetoone/2l/do/bnkg/insertSogliaConti.do?cf=0.5376684377983318&amp;method=insert';document.getElementById('impostaSogliaForm').submit();this.disabled=true;">
				<img alt="" src="/img/ret/btn_left_ar.gif"><span>conferma</span>
				<img alt="" src="/img/ret/btn_right_ar.gif"></a>
			</div>		
			<br class="clear">
		</div>	
		<br class="clear">
	</div>