<h1>Info e gestione carta</h1>
<br class="clear">
<div class="box5">
	<div class="divtabellalist">
		<table border="0" class="tabellalist">
			<tr>
				<td id="" class="off first">						
					<a title="Scheda prodotto Cartimpronta Webank" href="#">scheda prodotto</a>
				</td>
				<td id="box5tab2" class="off">						
					<a title="richiesta emissione " href="#">richiesta emissione</a>
				</td>
				<td id="box5tab3" class="off ">						
					<a title="saldo e movimenti" target="blank" href="#">saldo e movimenti</a>
				</td>
				<td id="box5tab4" class="off ">						
					<a title="Paga a rate" href="#">paga a rate</a>
				</td>
				<td id="box5tab5" class="on ">						
					<a title="Richiedi più credito" href="#">richiedi<br> pi&ugrave; credito</a>
				</td>
				<td id="box5tab6" class="off ">						
					<a title="estinzione" href="#">estinzione</a>
				</td>
				<td class="end">&nbsp;</td>						
			</tr>
		</table>
	
	</div>
	<p>Lorem ipsum dolor sit amet</p>
	<p>Lorem ipsum dolor sit amet</p>
	<ul class="lista">
          <li class="lista">Lorem ipsum <a title="#" href="#1">Lorem ipsum</a> dolor sit amet, <strong>consectetuer</strong></li>
		  <li class="lista">Lorem ipsum , consectetuer</li>
          <li class="lista">Lorem ipsum dolor sit amet, consectetuer</li>
     </ul>
	 <p>Phasellus semper faucibus velit. <a title="#" href="#1">Proin elit</a>. In hac habitasse platea dictumst. Donec purus. Donec varius egestas orci.</p>
	<table class="form01">
		
		<!--CASO UNICO CONTO -->
		<tr> 
			<td width="105" class="uno">N&deg; Conto Corrente</td>
			<td width="550" colspan="3">
				<strong>CC XXXXX ZZZZZZZZZ</strong>
			</td>
		</tr>
		<!--FINE CASO MULTICONTO -->
		
		
		<!--CASO MULTICONTO -->
		<tr> 
			<td width="105" class="uno">N&deg; Conto Corrente</td>
			<td width="550" colspan="3">
				<select name="select">
					<option>CC XXXXX ZZZZZZZZZ</option>
					<option>CC KKKKKK YYYYYYYYY</option>
				</select>
				<a class="preferito" title="Lorem ipsum" href="#"><img alt="Lorem ipsum" src="/img/ico1gr_preferito.gif"></a>
			</td>
		</tr>
		<!--FINE CASO MULTICONTO -->
		<tr> 
			<td width="105" class="uno">Ultime 4 cifre della carta</td>
			<td width="550" colspan="3">
				<input type="text" class="piccolo" >
			</td>
		</tr>
		<tr> 
			<td width="105" class="uno">Richiesta</td>
			<td width="550" colspan="3">
				<script type="text/javascript">
				function titleRadio(){
				var radiosecondaLinea = $('secondaLinea');
				if(radiosecondaLinea.checked)
				{
					radiosecondaLinea.title="In aggiunta alla linea principale, stai attivando una seconda linea di credito rateale. Il limite massimo di spesa della prima linea non cambia."
				}
					else{radiosecondaLinea.removeAttribute('title')}
				}
				</script>
				<form id="variazione">
					<div class="nobor3"><input onclick ="titleRadio()" type="radio" class="nobor3" value="variazione" name="radiobutton">variazione prima linea</div>
					<div class="nobor3"><input onclick ="titleRadio()" id ="secondaLinea" type="radio" class="nobor3" value="aggiunta" name="radiobutton">attivazione seconda linea</div>
				</form>
			</td>
		</tr>
		<tr> 
			<td width="105" class="uno">Importo richiesto</td>
			<td width="550" colspan="3">
				<input type="text" name="text" class="importo">
				<strong>,00</strong>
			</td>
		</tr>
		<tr> 
			<td width="105" class="uno">Note</td>
			<td width="550" colspan="3">
				<textarea class="singleRow" onfocus="document.getElementById('6').value='';" id="6" style="color:#7f7f7f;" name="textarea" rows="1">Lorem ipsum lorem ipsum</textarea>
			</td>
		</tr>
	</table>
	<div class="fooform">
		<div class="fooformtop">Step <strong>1</strong> di 2</div>
		<div class="fooformright">
			<div><a title="lorem ipsum" class="btnformright" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_aumenta_credito_esi.php"><img alt="" src="/img/ret/btn_left_ar.gif"><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
		</div>
	</div>
	<br /><br />
	<!--CASO NO CARTE -->
	<table cellspacing="0" cellpadding="0" border="0" class="TableF24">
		<tr>
			<td class="TopF24"><img hspace="0" border="0" alt="" src="/img/ret/f24_top.gif"></td>
		</tr>
		<tr>
			<td class="BoxF24"><img border="0" align="left" alt="" class="icoF24" src="/img/ret/ico2_or_warning.gif">
			Attenzione! <br /><br />
			Non risulta alcuna <span>Cartimpronta Classic</span> intestata a tuo nome.
			
			</td>
		</tr>

		<tr>
			<td class="BottomF24"><img border="0" alt="" src="/img/ret/f24_bottom.gif"></td>
		</tr>
	</table>
	<div class="fooform">
		<div class="fooformright">
			<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>richiedila subito</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
		</div>
	</div>
</div>