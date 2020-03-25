<script type="text/javascript">
$(function (){
var idProgr;
 $("#selectResidenzaFiscale1,#selectResidenzaFiscale2").bind('change',function(event) {
	idProgr = $(event.target).prop('id').charAt($(event.target).prop('id').length-1)
	if($('#selectResidenzaFiscale' + idProgr).find('option:selected').text() == 'STATI UNITI') {
		$('#maskedFieldId' + idProgr).show();
		$('#maskedField' + idProgr).focus();
	}
	else {
		$('#maskedFieldId' + idProgr).hide();
	}
})
 
 $.mask.definitions['_'] ='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
		$('#maskedField1').mask("__-_______", {completed: function(){$('#maskedField1').val(toUpperCase)} })
		$('#maskedField2').mask("__-_______", {completed: function(){$('#maskedField2').val(toUpperCase)} })
		$('#maskedField3').mask("__-_______", {completed: function(){$('#maskedField3').val(toUpperCase)} })
	})
function toUpperCase(idProgr) {
	var inputVal = $('#maskedField1,#maskedField2,#maskedField3').val();
	return inputVal.toUpperCase();
}
</script>


<h1>ACQUISTO</h1>

<div class="tithelp">
	<div class="helpleft">Adempimenti normativa FATCA</div>	
<br class="clear"></div>

<p>A seguito dell'entrata in vigore della Legge n.xxx del xxxx di ratifica  dell'Accordo bilaterale tra  il Governo Italiano e  Governo degli Stati Uniti, Le chiediamo di prendere visione dell'informativa FATCA e di autocertificare il Suo Paese di residenza fiscale e le informazioni di seguito esposto</p>

<div class="mutuitrasp">
	<ul>
		<li><a href="#">Documento Fatca</a></li>		
	</ul>
</div>
<br><br>
<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton">
<span>Lorem ipsum dolor lorem ipsum lorem ipsum</span>
<br class="clear"><br>

<table class="form01 form01b out">
	<tr>
		<td colspan="4">Verifica i dati. Se devi modificare i dati personali contenuti nel modulo , vai alla sezione <a href="#">cambio recapiti</a></td>
	</tr>
	
	<tr> 
		<td width="105" class="uno">Nome e Cognome</td>
		<td width="220"><strong>Pinko pallo della Gherardesca</strong></td>
		<td width="105" class="uno">&nbsp;</td>
		<td width="225">&nbsp;</td>
	</tr>
	<tr> 
		<td class="uno">Data di nascita</td>
		<td><strong>06/01/1910</strong></td>
		<td class="uno">Luogo di nascita</td>
		<td><strong>Messina (ME)</strong></td>
	</tr>
	<tr> 
		<td class="uno">Telefono</td>
		<td><strong>3214567890</strong></td>
		<td class="uno">Cittadinanza</td>
		<td><strong>Italiana</strong></td>
	</tr>
	<tr> 
		<td class="uno">Indirizzo di residenza</td>
		<td><strong>Piazza della Signoria1, 23456 Firenze (FI)</strong></td>
		<td class="uno">Indirizzo di corrispondenza</td>
		<td><strong>Piazza del campo 123, Siena (SI)</strong></td>
	</tr>
	<!--<tr> 
		<td class="uno">Quante quote vuoi vendere?</td>
		<td colspan="3">
			<select class="flLeft" id="selectResidenzaFiscale1">
				<option>-- seleziona --</option>
				<option>ITALIA</option>
				<option>USA</option>
			</select>
			<span class="flLeft paddLeftSmall"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help" data-tooltip="lorem ipsum dolor sit"></a></span>	
		</td>
	</tr>	
	<tr id="maskedFieldId1" style="display:none">
		<td class="uno">Tin (Tax Identification Number)*</td>
		<td colspan="3">
			<input type="text" id="maskedField1" maxlength="10" placeholder="__-_______" style="text-transform:uppercase">
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<div class="nobor3"><input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton">
			<span class="txtinput txtinputlungo">Sottoscrivo la presente autocertificazione e mi impegno a informare prontamente la Banca nel caso in cui si  verifichino cambiamenti di circostanza in merito alle informazioni soprariportate, al fine di consentire alla Banca di richiedermi, eventualmente,  un nuovo modulo di autocertificazione  per  variare o confermare la  residenza fiscale dichiarata</span>
			</div>

			<br class="clear">
		</td>
	</tr>-->	
</table>





<div class="mutuitrasp">
	<ul>
		<li><a href="#">Documento Fatca</a></li>		
	</ul>
</div>
<br><br>
<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton">
<span>Lorem ipsum dolor lorem ipsum lorem ipsum</span>
<br class="clear"><br>
<div class="bollfrecsx2">
	<div class="cartimpronta_lista cartimpronta_lista2">
		<img alt="" class="carttit" src="/img/ret/1px.gif">
		<div class="cartcont">
		<p onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit" style="cursor: pointer;">
		<span><strong class="titolo">PINKO PALLO DELLA GHERARDESCA</strong><br></span>
		<img alt="" class="bot" src="/img/ret/cartimpr_off.gif"></p><br class="clear">
		<div class="esteso" style="display: none;">
		
	<p>Verifica i dati. Se devi modificare i dati personali contenuti nel modulo , vai alla sezione <a href="#">cambio recapiti</a></p>
<table class="form01 out">
	<tr> 
		<td width="105" class="uno">Nome e Cognome</td>
		<td width="220"><strong>Pinko pallo della Gherardesca</strong></td>
		<td width="105" class="uno">&nbsp;</td>
		<td width="225">&nbsp;</td>
	</tr>
	<tr> 
		<td class="uno">Data di nascita</td>
		<td><strong>06/01/1910</strong></td>
		<td class="uno">Luogo di nascita</td>
		<td><strong>Messina (ME)</strong></td>
	</tr>
	<tr> 
		<td class="uno">Telefono</td>
		<td><strong>3214567890</strong></td>
		<td class="uno">Cittadinanza</td>
		<td><strong>Italiana</strong></td>
	</tr>
	<tr> 
		<td class="uno">Indirizzo di residenza</td>
		<td><strong>Piazza della Signoria1, 23456 Firenze (FI)</strong></td>
		<td class="uno">Indirizzo di corrispondenza</td>
		<td><strong>Piazza del campo 123, Siena (SI)</strong></td>
	</tr>
	<tr> 
		<td colspan="4"><a href="javascript:;" class="colorBank" onclick="$('#infoAdressAdd,#infoAdressAdd2,#infoAdressAdd3').toggle()">Hai un indirizzo di corrispondenza estero?</a></td>
	</tr>
	<tr id="infoAdressAdd" style="display:none"> 
		<td class="uno">Stato</td>
		<td><select><option>Seleziona</option><option>ITALIA</option><option>STATI UNITI</option><option>CONGO REPUBBLICA DEMOCRATICA</option></select></td>
		<td class="uno">Indirizzo</td>
		<td><input type="text" placeholder="ES: lorem ipsum" style="width:201px"></td>
	</tr>
	<tr id="infoAdressAdd2" style="display:none"> 
		<td class="uno">Provincia</td>
		<td><input type="text" style="width:201px"></td>
		<td class="uno">Comune</td>
		<td><input type="text" style="width:201px"></td>
	</tr>
	<tr id="infoAdressAdd3" style="display:none"> 
		<td class="uno">CAP</td>
		<td colspan="3"><input type="text" class="medio"></td>
	</tr>
	
	<!--<tr> 
		<td class="uno">Paese di residenza fiscale</td>
		<td>
		<span class="flLeft">ITALIA</span> 
		<span class="flLeft paddLeftSmall"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help" data-tooltip="lorem ipsum dolor sit"></a></span></td>
		<td class="uno">Altra residenza fiscale (facoltatativo)</td>
		<td><select id="selectResidenzaFiscale1"><option>Seleziona</option><option>Lorem ipsum</option><option>CONGO REPUBBLICA DEMOCRATICA</option><option>STATI UNITI</option><option>-----------------------</option></select></td>
	</tr>-->
	
	<tr class="fatcaintestatario" id="fatca1">
	<td colspan="4">
		<table class="fatcaFieldWrapper" width="100%">
			<tr class="fatcaField">
				<td class="uno"><span class="margRightMedium"><span class="labelCounter">Secondo</span> paese di residenza fiscale</span><a class="noborder" href="javascript:;" data-tooltip="lorem ipsum dolor"><img alt="" src="/img/ret/ico2or_help2.gif"></a></td>
				<td>
					<select name="residenzaFiscale2_int1" id="selectfactaA_id1">
						<option>-- seleziona --</option>
						<option value="238|AFG|N">AFGHANISTAN</option>
						<option value="237|ALG|S">ALGERIA</option>
						<option value="235|AND|X">ANDORRA</option>
						<option value="234|USA|S">STATI UNITI D'AMERICA</option>
					</select>
				</td>
				<td class="uno">Taxpayer Identification Number (Tin)</td>
				<td><input class="" type="text" name="TIN2_int1" maxlength="10" value="" id="TIN_intA_id1" style="text-transform:uppercase"></td>
			</tr>
		</table>
		
		<table width="100%">
		<tr class="fatcaFieldButton">
				<td colspan="2">
					<a href="javascript:;" class="fieldButton remove"><span>Elimina <span class="labelCounterMeno">seconda</span> residenza fiscale</span></a>
				</td>
				<td colspan="2">
					<a href="javascript:;" class="fieldButton add disabled"><span>Aggiungi <span class="labelCounterPiu">terza</span> residenza fiscale</span></a>

				</td>
		</tr>
		</table>
	</tr>
		<script>
				$(function (){
					maskTin();
				})
			</script>
	<!--<tr id="maskedFieldId1" style="display:none">
		<td class="uno">Tin (Tax Identification Number)*</td>
		<td colspan="3">
			<input type="text" id="maskedField1" maxlength="10" placeholder="__-_______" style="text-transform:uppercase">
		</td>
	</tr>
	<!--<tr> 
		<td class="uno">Quante quote vuoi vendere?</td>
		<td colspan="3">
			<select class="flLeft" id="selectResidenzaFiscale2">
				<option>-- seleziona --</option>
				<option>ITALIA</option>
				<option>USA</option>
			</select>
			<span class="flLeft paddLeftSmall"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help" data-tooltip="lorem ipsum dolor sit"></a></span>	
		</td>
	</tr>	
	<tr id="maskedFieldId2" style="display:none">
		<td class="uno">Tin (Tax Identification Number)*</td>
		<td colspan="3">
			<input type="text" id="maskedField2" maxlength="10" placeholder="__-_______" style="text-transform:uppercase">
		</td>
	</tr>-->
</table>

			
		</div>
		</div>
	</div>
	<div class="cartimpronta_lista cartimpronta_lista2">
		<img alt="" class="carttit" src="/img/ret/1px.gif">
		<div class="cartcont">
		<p onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit" style="cursor: pointer;">
		<span><strong class="titolo">FRANCO FRANCISCO DEI CONTI UBALDI</strong><br></span>
		<img alt="" class="bot" src="/img/ret/cartimpr_off.gif"></p><br class="clear">
		<div class="esteso" style="display: none;">
			
	<p>Verifica i dati. Se devi modificare i dati personali contenuti nel modulo , vai alla sezione <a href="#">cambio recapiti</a></p>
<table class="form01 out">
	<tr> 
		<td width="105" class="uno">Nome e Cognome</td>
		<td width="220"><strong>Pinko pallo della Gherardesca</strong></td>
		<td width="105" class="uno">&nbsp;</td>
		<td width="225">&nbsp;</td>
	</tr>
	<tr> 
		<td class="uno">Data di nascita</td>
		<td><strong>06/01/1910</strong></td>
		<td class="uno">Luogo di nascita</td>
		<td><strong>Messina (ME)</strong></td>
	</tr>
	<tr> 
		<td class="uno">Telefono</td>
		<td><strong>3214567890</strong></td>
		<td class="uno">Cittadinanza</td>
		<td><strong>Italiana</strong></td>
	</tr>
	<tr> 
		<td class="uno">Indirizzo di residenza</td>
		<td><strong>Piazza della Signoria1, 23456 Firenze (FI)</strong></td>
		<td class="uno">Indirizzo di corrispondenza</td>
		<td><strong>Piazza del campo 123, Siena (SI)</strong></td>
	</tr>
	<tr> 
		<td colspan="4"><a href="javascript:;" class="colorBank" onclick="$('#infoAdressAddb,#infoAdressAdd2b,#infoAdressAdd3b').toggle()">Hai un indirizzo di corrispondenza estero?</a></td>
	</tr>
	<tr id="infoAdressAddb" style="display:none"> 
		<td class="uno">Stato</td>
		<td><select><option>Seleziona</option><option>ITALIA</option><option>STATI UNITI</option><option>CONGO REPUBBLICA DEMOCRATICA</option><option>-----------------------</option></select></td>
		<td class="uno">Indirizzo</td>
		<td><input type="text" placeholder="ES: lorem ipsum" style="width:201px"></td>
	</tr>
	<tr id="infoAdressAdd2b" style="display:none"> 
		<td class="uno">Provincia</td>
		<td><input type="text" style="width:201px"></td>
		<td class="uno">Comune</td>
		<td><input type="text" style="width:201px"></td>
	</tr>
	<tr id="infoAdressAdd3b" style="display:none"> 
		<td class="uno">CAP</td>
		<td colspan="3"><input type="text" class="medio"></td>
	</tr>
	<tr> 
		<td class="uno">Paese di residenza fiscale</td>
		<td>
		<span class="flLeft">ITALIA</span> 
		<span class="flLeft paddLeftSmall"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help" data-tooltip="lorem ipsum dolor sit"></a></span></td>
		<td class="uno">ALtra residenza fiscale (facoltatativo)</td>
		<td><select id="selectResidenzaFiscale2"><option>Seleziona</option><option>Lorem ipsum</option><option>CONGO REPUBBLICA DEMOCRATICA</option><option>STATI UNITI</option></select></td>
	</tr>
	<tr class="fatcaintestatario" id="fatca2">
	<td colspan="4">
		<table class="fatcaFieldWrapper" width="100%">
			<tr class="fatcaField">
				<td class="uno"><span class="margRightMedium"><span class="labelCounter">Secondo</span> paese di residenza fiscale</span><a class="noborder" href="javascript:;" data-tooltip="lorem ipsum dolor"><img alt="" src="/img/ret/ico2or_help2.gif"></a></td>
				<td>
					<select name="residenzaFiscale2_int2" id="selectfactaB_id1">
						<option>-- seleziona --</option>
						<option value="238|AFG|N">AFGHANISTAN</option>
						<option value="237|ALG|S">ALGERIA</option>
						<option value="235|AND|X">ANDORRA</option>
						<option value="234|USA|S">STATI UNITI D'AMERICA</option>
					</select>
				</td>
				<td class="uno">Taxpayer Identification Number (Tin)</td>
				<td><input  type="text" name="TIN2_int2" maxlength="10" value="" id="TIN_intB_id1" style="text-transform:uppercase"></td>
			</tr>
		</table>
		<table width="100%">
		<tr class="fatcaFieldButton">
				<td colspan="2">
					<a href="javascript:;" class="fieldButton remove"><span>Elimina <span class="labelCounterMeno">seconda</span> residenza fiscale</span></a>
				</td>
				<td colspan="2">
					<a href="javascript:;" class="fieldButton add disabled"><span>Aggiungi <span class="labelCounterPiu">terza</span> residenza fiscale</span></a>

				</td>
		</tr>
		</table>
	</tr>
		<script>
				$(function (){
					maskTin();
				})
			</script>
	<!--<tr id="maskedFieldId2" style="display:none">
		<td class="uno">Tin (Tax Identification Number)*</td>
		<td colspan="3">
			<input type="text" id="maskedField2" maxlength="10" placeholder="__-_______" style="text-transform:uppercase">
		</td>
	</tr>
	<!--<tr> 
		<td class="uno">Quante quote vuoi vendere?</td>
		<td colspan="3">
			<select class="flLeft" id="selectResidenzaFiscale3">
				<option>-- seleziona --</option>
				<option>ITALIA</option>
				<option>USA</option>
			</select>
			<span class="flLeft paddLeftSmall"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help" data-tooltip="lorem ipsum dolor sit"></a></span>	
		</td>
	</tr>	
	<tr id="maskedFieldId3" style="display:none">
		<td class="uno">Tin (Tax Identification Number)*</td>
		<td colspan="3">
			<input type="text" id="maskedField3" maxlength="10" placeholder="__-_______" style="text-transform:uppercase">
		</td>
	</tr>-->
</table>

		</div>
	</div>
 </div>
 
 




<table class="form01 form01b out">
	<tr>
		<td colspan="4">
			<div class="nobor3"><input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton">
			<span class="txtinput txtinputlungo">Sottoscrivo la presente autocertificazione e mi impegno a informare prontamente la Banca nel caso in cui si  verifichino cambiamenti di circostanza in merito alle informazioni soprariportate, al fine di consentire alla Banca di richiedermi, eventualmente,  un nuovo modulo di autocertificazione  per  variare o confermare la  residenza fiscale dichiarata</span>
			</div>

			<br class="clear">
		</td>
	</tr>	
</table>



