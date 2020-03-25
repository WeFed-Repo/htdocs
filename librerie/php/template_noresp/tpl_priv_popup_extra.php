<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>LIBRERIE BPM &raquo; Template pagina &raquo; Popup privata</title>
 	<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
	<link href="/wscmn/css/popup_gen.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript">
/*Comportamenti premianti*/

// Apre-Chiude accordion comportamenti premianti
function ApriAccordion(obj){
	if(obj.className == 'dettagliOff')
	{
		obj.parentNode.getElementsByTagName('table')[1].style.display='block';
		obj.className = 'dettagliOn';
	}
	else
	{
		obj.parentNode.getElementsByTagName('table')[1].style.display='none';
		obj.className = 'dettagliOff';
	}
}
 

</script>
</head>
<body>
<?php virtual ("/librerie/include/commons/navigazione/nav_wb_priv_009.html"); ?>
<div id="contenuti">
<div class="boxextraContainer">
<div class="rieextra"></div>
<table class="form01">		
	<tr><td width="109"><strong>Conto corrente</strong></td>
	<td colspan="3"> <select class="extra" name="select">
		<option>C/C 00599 - 0000099999 - EUR - MMMMMMMMMMMM</option>
		<option>C/C 00599 - 0000099999 - EUR - MMMMMMMMMMMM</option>
		</select><a class="preferito" title="Lorem ipsum" href="#"><img alt="Lorem ipsum" src="/img/ico1gr_preferito.gif"/></a></td>
	</tr>	
</table>		
<div class="txtextra"><strong>Scopri il dettaglio dei movimenti, entrate e uscite, che compongono il tuo saldo Extra Money.</strong></div>
<div class="valextra">
	<div class="extra_top"></div>
	<div class="extra_middle">
		<div class="extra_middlecont">
			<img src="/img/ret/tit_extra_entrate.gif" class="tit" alt="">
			<table class="totali">
				<td width="249" align="right"><span class="inextraval">X.XXX.XXX,XX &euro;</span></td>
				<td class="col2"><span>al giorno <span>dd/mm/aaaa</span> </span></td>
			</table>
			<a class="dettagliOff" href="javascript:;" onclick="javascript:ApriAccordion(this);">dettagli</a>
			<table class="dettHidden" cellpadding="0" cellspacing="0">
			<tr>
				<td width="20" class="last"></td>
				<td width="359"><span class="voce">- Accredito stipendio</span> <span>XX.XXX,XX &euro;</span></td>
				<td class="col2" width="282"><a onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/tpl_priv_lib_dettagliextra_popup.php&amp;flg=WT&amp;sid=priv');" class="iconaDettaglio" href="javascript:;"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td width="15" class="last"></td>
			</tr>
			<tr>
				<td width="20" class="last"></td>
				<td width="359"><span class="voce">- Bonifici in entrata</span> <span>XX.XXX,XX &euro;</span></td>
				<td class="col2"><a onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/tpl_priv_lib_dettagliextra_popup.php&amp;flg=WT&amp;sid=priv');" class="iconaDettaglio" href="javascript:;"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td width="15" class="last"></td>
				
			</tr>
			<tr>
				<td width="20" class="last"></td>
				<td width="359"><span class="voce">- lorem ipsum</span> <span>XX.XXX,XX &euro;</span></td>
				<td class="col2"><a onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/tpl_priv_lib_dettagliextra_popup.php&amp;flg=WT&amp;sid=priv');" class="iconaDettaglio" href="javascript:;"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td width="15" class="last"></td>
			</tr>
			<tr>
				<td width="20" class="last"></td>
				<td width="359" class="last"><span class="voce">- lorem ipsum</span> <span>XX.XXX,XX &euro;</span></td>
				<td class="col2 last"><a onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/tpl_priv_lib_dettagliextra_popup.php&amp;flg=WT&amp;sid=priv');" class="iconaDettaglio" href="javascript:;"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td width="15" class="last"></td>
			</tr>
			
			</table>
		</div>
	</div>
	<div class="extra_bottom"></div>
</div>

<div class="valextra">
	<div class="extra_top"></div>
	<div class="extra_middle">
		<div class="extra_middlecont">
			<img src="/img/ret/tit_extra_uscite.gif" class="tit" alt="">
			<table class="totali">
				<td width="249" align="right"><span class="inextraval">X.XXX.XXX,XX &euro;</span></td>
				<td class="col2"><span>al giorno <span>dd/mm/aaaa </span> </span></td>
			</table>
			<a class="dettagliOff" href="javascript:;" onclick="javascript:ApriAccordion(this);">dettagli</a>
			<table class="dettHidden" cellpadding="0" cellspacing="0">
			<tr>
				<td width="20" class="last"></td>
				<td width="359"><span class="voce">- Accredito stipendio</span> <span>XX.XXX,XX &euro;</span></td>
				<td class="col2" width="282"><a onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/tpl_priv_lib_dettagliextra_popup.php&amp;flg=WT&amp;sid=priv');" class="iconaDettaglio" href="javascript:;"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td width="15" class="last"></td>
			</tr>
			<tr>
				<td width="20" class="last"></td>
				<td width="359"><span class="voce">- Bonifici in entrata</span> <span>XX.XXX,XX &euro;</span></td>
				<td class="col2"><a onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/tpl_priv_lib_dettagliextra_popup.php&amp;flg=WT&amp;sid=priv');" class="iconaDettaglio" href="javascript:;"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td width="15" class="last"></td>
				
			</tr>
			<tr>
				<td width="20" class="last"></td>
				<td width="359"><span class="voce">- lorem ipsum</span> <span>XX.XXX,XX &euro;</span></td>
				<td class="col2"><a onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/tpl_priv_lib_dettagliextra_popup.php&amp;flg=WT&amp;sid=priv');" class="iconaDettaglio" href="javascript:;"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td width="15" class="last"></td>
			</tr>
			<tr>
				<td width="20" class="last"></td>
				<td width="359" class="last"><span class="voce">- lorem ipsum</span> <span>XX.XXX,XX &euro;</span></td>
				<td class="col2 last"><a onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/tpl_priv_lib_dettagliextra_popup.php&amp;flg=WT&amp;sid=priv');" class="iconaDettaglio" href="javascript:;"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td width="15" class="last"></td>
			</tr>
			
			</table>
		</div>
	</div>
	<div class="extra_bottom"></div>
</div>
<div class="saldoextra">
	<span class="saldodata">al giorno <span>dd/mm/aaaa</span></span>
	<div class="saldoimporto posi"><span>X.XXX.XXX.XXX,XX &euro;</span></div>
	<a href="#" class="saldobtn disabled"></a> <!-- aggiungere o togliere la classe disabled a seconda dell'importo del saldo-->
</div>

</div>
</div>
</body>
</html>
