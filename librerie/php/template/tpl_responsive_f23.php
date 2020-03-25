<link rel="stylesheet" href="/wscmn/fe/css/delega.css" type="text/css">

<h2>Pagamento</h2>

<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_f24.php&responsive=y&liv0=1&liv1=1&liv2=7&liv3=0">F24</a></li>
			<li class="on"><a href="#">F23</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">

	<table>
		<tr>
			<td class="nota">I campi marcati con '*' sono obbligatori - <img src="/wscmn/img/campovis.gif"/> Campi di sola visualizzazione - <img src="/wscmn/img//campoerr.gif" alt=""/> Campi in errore</td>
		</tr>
	</table>	

	<table class="f23">
		<tr>		
			<td rowspan="2" class="nopad"><img src="/wscmn/img/immagineTitolof23.jpg" alt="" align="middle"></td>
			<td class="nopad"><img src="/wscmn/img/immagineTitolof23b.jpg" alt="" align="middle"></td>		
		</tr>
		<tr>		
			<td class="numrif">NUMERO DI RIFERIMENTO<br><input class="f_big" value="" type="text"></td>			
		</tr>
	</table>
	

	<table  class="f23">	
		<tr>
			<th colspan="2">DATI ANAGRAFICI</th>
		</tr>
		<tr>
			<td>cognome, denominazione o ragione sociale<br><input class="f_bigx" value="" type="text"></td>
			<td>
			<table class="f23sub">	
				<tr>
					<td>nome<br><input class="f_big" value="" type="text"></td>
					<td>sesso<br><select>
								<option value=""></option>
								<option value="F"> F</option>
								<option value="M" selected="selected"> M</option>
								</select>
					</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td>
			<table class="f23sub">	
				<tr>
					<td>data di nascita (ggmmaaaa)<br><input class="f_normal" maxlength="8" value="" type="text"></td>
					<td>comune (o Stato estero) di nascita<br><input class="f_medium" value="" type="text"></td>
				</tr>
			</table></td>
			<td>
			<table class="f23sub">	
				<tr>
					<td>
					<!--NUOVO TOOLTIP-->
					<span class="txthelp"><strong data-title="Per i nati all'estero dal campo provincia va selezionato il valore EE" data-toggle="tooltip" data-original-title="" title="">provincia</strong></span><br>		
					<!--fine NUOVO TOOLTIP-->				
					<select>
				<option value=""></option>
				<option value="AL"> AL</option>
				<option value="AL" selected="selected"> AL</option>
				</select></td>
					<td>codice fiscale<br><input class="f_big" maxlength="16" value="" type="text"></td>				
				</tr>
			</table>
			</td>
		</tr>	
	</table>
	<table  class="f23">	
		<tr>
			<td>cognome, denominazione o ragione sociale<br><input class="f_bigx" value="" type="text"></td>
			<td>
			<table class="f23sub">	
				<tr>
					<td>nome<br><input class="f_big" value="" type="text"></td>
					<td>sesso<br><select>
								<option value=""></option>
								<option value="F"> F</option>
								<option value="M" selected="selected"> M</option>
								</select>
					</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td>
			<table class="f23sub">	
				<tr>
					<td>data di nascita (ggmmaaaa)<br><input class="f_normal" maxlength="8" value="" type="text"></td>
					<td>comune (o Stato estero) di nascita<br><input class="f_medium" value="" type="text"></td>
				</tr>
			</table></td>
			<td>
			<table class="f23sub">	
				<tr>
					<td>
					<!--NUOVO TOOLTIP-->
					<span class="txthelp"><strong data-title="Per i nati all'estero dal campo provincia va selezionato il valore EE" data-toggle="tooltip" data-original-title="" title="">provincia</strong></span><br>			
					<!--fine NUOVO TOOLTIP-->
					<select>
				<option value=""></option>
				<option value="AL"> AL</option>
				<option value="AL" selected="selected"> AL</option>
				</select></td>
					<td>codice fiscale<br><input class="f_big" maxlength="16" value="" type="text"></td>				
				</tr>
			</table>
			</td>
		</tr>	
	</table>

	<table class="f23">	
		<tr>
			<th>DATI DEL VERSAMENTO</th>
		</tr>
	</table>

	<table class="f23">
		<tr>
			<th colspan="2" class="nobg">UFFICIO O ENTE</th>
			<th class="nobg">COD. TERRITORIALE</th>
			<th class="nobg">CONTENZIOSO</th>
			<th class="nobg">CAUSALE</th>
			<th colspan="2" class="nobg">ESTREMI DELL'ATTO DEL DOCUMENTO</th>
		</tr>
		</tr>
			<td width="40">codice<br/><input class="f_4num" id="" type="text" maxlength="3"></td>
			<td>sub codice<br/><input class="f_3num" id="" type="text" maxlength="2"></td>
			<td>&nbsp;<br/><input class="f_small" id="" type="text" maxlength="4"></td>
			<td>&nbsp;<br/><input id="" type="text" maxlength="1"></td>
			<td>&nbsp;<br/><input class="f_3num" id="" type="text" maxlength="2"></td>
			<td width="50">anno<br/><input class="f_small" id="" type="text" maxlength="4"></td>
			<td>numero<br/><input class="f_15num" id="" type="text"></td>
		</tr></tr>
	</table>


	<table class="f23 f23h">
		<tr>
			<th class="nobg" style="width:90px">CODICE<br/>TRIBUTO</th>
			<th class="nobg" style="width:260px">
			<!--NUOVO TOOLTIP-->
					<span class="txthelp"><strong data-title="Per i nati all'estero dal campo provincia va selezionato il valore EE" data-toggle="tooltip" data-original-title="" title="">DESCRIZIONE</strong></span><br>		
					<!--fine NUOVO TOOLTIP-->
			
			</th>
			<th class="nobg">IMPORTO</th>
			<th class="nobg" style="width:90px">CODICE<br/>DESTINATARIO</th>		
		</tr>
		<tr>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
			<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
			<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>	
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
		</tr>
		<tr>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
			<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
			<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
		</tr>
		<tr>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
			<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
			<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>	
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
		</tr>
		<tr>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
			<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
			<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		</tr>
		<tr>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
			<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
			<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
		</tr>
		<tr>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
			<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
			<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
		</tr>
		<tr>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
			<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
			<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
		</tr>
		<tr>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
			<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
			<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		</tr>
		<tr>
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
			<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
			<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>	
			<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="rg">PER UN IMPORTO COMPLESSIVO DI EURO</td>
			<td><input class="f_medium rg" id="" type="text">,<input id="" type="text"></td>	
			<td>&nbsp;</td>		
		</tr>
	</table>



	<table class="f23">	
		<tr>
			<th>ESTREMI DEL VERSAMENTO</th>
		</tr>
	</table>
	<table class="f23">
		<tr>
			<td>Numero conto<br><input class="f_medium" readonly="readonly"  maxlength="16"  type="text"></td>
			<td>Abi<br><input class="f_5num" maxlength="5" type="text"></td>
			<td>Cab<br><input class="f_5num" maxlength="5" type="text"></td>
			<td>Data pagamento (ggmmaaaa)<br>
				<div style="width:100px; position:relative"><input id="datepicker" name="dataIncassoHtml" size="15" maxlength="8" class="f_8num flLeftf23" type="text" value=""/>
				<img src="/img/btn_pickdate_priv.gif" alt="..." title="..."></div>
			</td>
		</tr>
		<tr>
			<td colspan="4">Autorizzo addebito su conto corrente codice IBAN IT52O0340201749000000083891</td>
		</tr>
	</table>
	<br /><br />
	<section>
	    <div class="form-group btnWrapper">
	        <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
	        <div class="btn-align-right">
	            <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_f23_output.php&responsive=y&liv0=1&liv1=1&liv2=7&liv3=0">prosegui</a>
	        </div>
	        <div class="clear"></div>
	    </div>

	</section>
	</div>
</div>	



<script type="text/javascript">
$("#datepicker").mask("99/99/9999");
	$("#datepicker").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper1').modal('hide');
    }
    });
   appendDatePickerIcon('datepicker');
 </script>