<!-- IMPORTAZIONE DATEPICKER -->
<script type="text/javascript" src="/wscmn/js/priv_datepicker.js"></script>
<link href="/wscmn/css/priv_datepicker.css" rel="stylesheet"></link>
<!-- FINE IMPORTAZIONE DATEPICKER -->

<h1>INFO E GESTIONE CARTA</h1>
<?php virtual("/librerie/include/commons/navigazione/nav_black_priv_005.html"); ?>
<!-- BANNER GEOBLOCK -->
<div class="gbBanner">
	<h2>Parti per un paese extraeuropeo?</h2>
	<h3>Mantieni sicuro il tuo bancomat: decidi tu dove e quando può essere utilizzato.</h3>
	<p>
		Con GeoBLOCK, il servizio di prevenzioni frodi per il tuo bancomat, puoi abilitare l’utilizzo della carta secondo due diversi profili: Europa e Mondo. Il profilo assegnato automaticamente a ogni bancomat &egrave; Europa. 
		Se devi partire per un Paese extraeuropeo, attiva il profilo "Mondo" solo per il periodo di 
		permanenza all'estero. Al termine del tuo soggiorno il bancomat torner&agrave; ad avere, in automatico, il profilo Europa. In questo modo aumenterai la sicurezza del tuo bancomat.
	</p>
</div>
<!-- / BANNER GEOBLOCK -->
<!-- LINK -->
<ul class="listafrec">
<li><a href="javascript:;" onclick="javascript:window.open('/connect.php?page=str_popup_priv.php&tpl=tpl_priv_popup_carte_tempi.php','main3','width=450,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes')">Tempi di attivazione profilo internazionale </a></li>
</ul>
<!--/ LINK -->

<!-- SELETTORE BANCOMAT CARTA -->
<div class="tithelp">
	<div class="helpleft">Conto corrente e numero carta</div>
	<br class="clear">
</div>
<table class="form01">
	<tr> 
		<td>
			<select>
				<option>carta *** 00009093091203909120390- EUR</option>
			</select>
		</td>
		<td>Profilo: <strong>Europa</strong></td>
	</tr>
</table>

<!-- /SELETTORE BANCOMAT CARTA -->

<!-- SELETTORE ZONA -->
<div class="tithelp">
	<div class="helpleft">Profilo internazionale</div>
	<br class="clear">
</div>
<form autocomplete="off">
<table class="form01 gb">
	<tr <?php if($bank=="webank") print ("class=\"evident\""); ?>> 
		<td class="uno" valign="top">
			<input type="radio" name ="profilo" <?php if($bank=="webank") print ("checked"); ?> onclick="setActiveTr(this)">&nbsp;<strong>Profilo Europa:</strong>
		</td>
		<td class="gbbg" valign="top">
			puoi utilizzare il bancomat nei Paesi indicati nella mappa. Lascia impostato questo profilo per garantirti una maggior  sicurezza. Se devi recarti in un Paese non compreso nell'elenco, ricordati di attivare il profilo "Mondo".<br>
			<br>
			<strong>Paesi compresi nel profilo Europa:</strong><br>
			Albania, Andorra, Antartide, Armenia, Austria, Azerbaijan, Bielorussia, Belgio, <br>
			Bosnia Erzegovina, Bulgaria, Cipro, Croazia, Danimarca, Estonia, Finlandia, <br>
			Francia, Georgia, Germania, Gibilterra, Gran Bretagna, Grecia, Groenlandia, <br>
			Guadalupe, Irlanda, Islanda, Israele, Italia, Kazakistan, Kyrgyzstan, Lettonia, <br>
			Liechtenstein, Lituania, Lussemburgo, Macedonia, Malta, Martinica, Moldavia, <br>
			Principato di Monaco, Olanda, Norvegia, Polonia, Portogallo, Rep. Ceca, <br>
			Romania, Russia, San Marino, Serbia - Montenegro - Kosovo, Slovacchia, <br>
			Slovenia, Spagna, Svezia, Svizzera, Stato della Città del Vaticano, Tajikistan, <br>
			Turchia, Turkmenistan, Ucraina, Ungheria.<br><br>
			<br>
		</td>
	</tr>
	<tr> 
		<td class="uno" valign="top">
			<input type="radio" name ="profilo" onclick="setActiveTr(this)">&nbsp;<strong>Profilo Mondo:</strong>
		</td>
		<td  valign="top">
			puoi prelevare e effettuare pagamenti in <strong>tutto il mondo</strong>. Ti consigliamo di inserire la data di scadenza del profilo oltre 
		    la quale il bancomat tornerà ad avere il profilo Europa. Attivando il profilo "Mondo" <strong>solo per il periodo di 
		    permanenza all'estero</strong> potrai prevenire il rischio di frodi legate al tuo bancomat. L'attivazione di questo profilo può 
		    essere temporanea o definitiva.<br>
			<table cellpadding="0" cellspacing="0" class="fake">
				<tr>
					<td>Data inizio servizio</td>
					<td style="width:30%"><input type="text" class="datepicker" readonly size="10"><span>&nbsp;</span><img src="/wscmn/img/ret/btn_pickdate_priv_off.gif"></td>
					<td>Data fine servizio</td>
					<td><input type="text" class="datepicker" readonly size="10"><span>&nbsp;</span><img src="/wscmn/img/ret/btn_pickdate_priv_off.gif"></td>
				</tr>
			</table>
			<table cellpadding="0" cellspacing="0" class="real">
				<tr>
					<td>Data inizio servizio</td>
					<td style="width:30%"><script type="text/javascript">DatePickerControl.createDp("dp1");</script></td>
					<td>Data fine servizio</td>
					<td><script type="text/javascript">DatePickerControl.createDp("dp2");</script></td>
				</tr>
			</table>
		</td>
		
	</tr>
</table>
</form>
<!-- /SELETTORE ZONA -->

<!-- SINGOLO RIEPILOGO MONDO -->
<table class="form01">
	<tr> 
		<td class="uno" valign="top">
			<strong>Profilo Mondo:</strong>
		</td>
		<td width="20%">Data inizio servizio</td>
		<td><strong>00/00/0000</strong></td>
		<td width="20%">Data fine servizio</td>
		<td><strong>00/00/0000</strong></td>
		</tr>
	</tr>
	<tr class="nobor">
		<td>&nbsp;</td>
		<td colspan="4">Puoi usare il bamcomat in tutto il mondo.</td>
	</tr>
</table>
<!-- /SINGOLO RIEPILOGO MONDO -->

<!-- BOTTONE -->
<div class="fooform">
	<div class="fooformright">
		<div><a title="Modifica" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>modifica</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
	</div>	
	<br class="clear">
</div>
<!-- / BOTTONE -->

<!-- BANNER PROMO GEOBLOCK -->
<div class="gbPromo">
	<h2>NOVIT&Agrave;</h2>
	<ul>
		<li> Dal 15 marzo, sul tuo bancomat internazionale è attivo il nuovo servizio di prevenzione frodi "<strong>GeoBLOCK</strong>", che prevede 2 profili di utilizzo: <a href="#">Europa</a> e Mondo per tutti gli altri Paesi.</li>
		<li>Il profilo assegnato al tuo bancomat &egrave; <strong>Europa</strong>. Per abilitare il profilo Mondo chiama il numero<br> 800 060 070.</li>
		<li>Da <strong>fine marzo</strong> potrai modificare il tuo <strong>profilo</strong> direttamente </strong>online</strong>.</li>
	</ul>
	<p><a href="#" title="Dettagli">Dettagli</a></p>
</div>
<!-- / BANNER PROMO GEOBLOCK -->