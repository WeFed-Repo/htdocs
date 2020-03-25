<form action="/wt/strategie/grafici" method="post" name="formlinkgrafici">
	<input type="hidden" name="borsa1"/>
	<input type="hidden" name="mercato1"/>
	<input type="hidden" name="stockcode1"/>
</form>
<form action="/wt/grafici/visualizzagraficogrande" method="post" name="popupgraficigrandi">
	<input type="hidden" value="MI" name="borsa"/>
	<input type="hidden" value="-1" name="mercato"/> 
	<input type="hidden" value="SPMIB" name="idStrumento"/>
	<input type="hidden" value="FTSE MIB" name="descrizione"/>
</form>
<form action="" method="post" name="formgrafici">
	<input type="hidden" name="scelta"/>
	<h2 class="titTable">Grafico Intraday</h2>
	<div class="box_grafico">
		
		<table cellspacing="0" cellpadding="0" class="form05">
		<tbody><tr>
			<td class="right">Mercato</td>
			<td><select onchange="document.forms.formgrafici.submit();" name="mercatoDerivati">
					<option selected="selected" value="IDEM">IDEM</option>
					<option value="EUREX">EUREX</option>
					<option value="EURONEXT-LIFFE">EURONEXT - LIFFE</option>
					<option value="CME">CME</option>
					<option value="ECBOT">eCBOT</option>
			</select></td>
		</tr>
		<tr>
			<td class="right">Stato</td>
			<td><strong>APERTO</strong></td>
		</tr>
		<tr>
			<td class="right">Indice</td>
			<td><select onchange="javascript:VerificaIndiceSel();" name="graficoscelto">
				<option value="MI.-1.SPMIB">FTSE MIB </option>
				<option value="MI.-1.MINISPMIB">Mini FTSE MIB </option>
			</select></td>
		</tr>
		</tbody></table>
		<a href="javascript:;" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_visualizza_garfico_grande_pop_up.php&amp;flg=WT&amp;sid=priv');"><img border="0" name="Grafici" alt="Clicca qui per il grafico multiday" src="img/ret/wt_chart.gif"/></a>
	</div>
	
	
</form>