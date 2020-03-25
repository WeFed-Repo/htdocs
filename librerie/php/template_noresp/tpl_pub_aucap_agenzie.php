<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	<head>
		<link rel="stylesheet" type="text/css" href="/wscmn/css/aucap.css">
		<script src="/wscmn/js/ret/priv_calcolatore_aucap.js"></script>
	</head>
	<body>
		<!-- OVERLAYER  AUCAP-->
<div class="layeralert3" id="layeralertAucap" style="display: none;">
		<div class="head"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closeAlert('layeralertAucap');  unobscurateAll();"/></div>
		<div class="body">
<h3 class="verde">Calcolatore Aucap <span id="overlay_title"></span></h3>
<p>
	Con il calcolatore puoi simulare l'adesione all'aumento di capitale e determinare il costo di adesione.<br>
	Puoi effettuare la simulazione inserendo i diritti da esercitare e/o i titoli rivenienti e cliccando su calcola.
</p>
<form autocomplete = "off">
<!-- DATI AGGIORNABILI -->
<strong class="verde" id="aucap_title">BPM III - Aucap 1375106907099</strong>
<div class="boxed">
<table class="dataElement" cellspacing="0" cellpadding="0" id="dataFromServer">
	<tr>
		<td>
			<label>Rapporto di sottoscrizione</label>
			<span class="data" id="aucap_rappSott">- Azioni/- diritti</span>
		</td>
		<td>
			<label>N&deg; minimo di diritti da esercitare</label>
			<span class="data"id="aucap_minDir">- diritti</span>
		</td>
		<td>
			<label>Prezzo di sottoscrizione</label>
			<span class="data" id="aucap_prezzoSott"> - &euro;</span>
		</td>
	</tr>
</table>
</div>
<!-- FINE DATI AGGIORNABILI -->

	<?php
	if ($rappo == 0)
	{
	?>
	<input id="aucap_deposito" type="hidden" value="">
	<?php
	}	
	else
	{
	?>
	<strong class="verde">Seleziona il deposito titoli e calcola il costo</strong>
	<div class="boxed neutro">
	<!-- Selezione del deposito -->
	<input id="aucap_deposito" type="hidden" value="000000000000000001">
	<table class="form01 formDepo">
		<tr> 
			<td>
				<label>Deposito titoli:</label>
				<!-- campo hidden con deposito: valorizzare comunque con il primo deposito oppure come "vuoto" -->
				<!-- Qualora vi fosse un solo deposito titoli 
				<span class="data">0000000001</span>
				/ fine un solo deposito titoli -->
				<!-- Selettore per piu' deposito titoli -->
				<select name="select" id="" onchange="auc_deposito.value=this.value; getCalcolatoreValues();">
					<option value="000000000000000001" selected>00000000001</option>
					<option value="000000000000000002">00000000002</option>
				</select>
				<!-- / selettore per piu' deposito titoli -->
			</td>
			<td id="dirittiPossedutiTd">
				<label>Diritti posseduti</label>
				<span id="aucap_dirPoss" class="data"></span>
			</td>
			<td>&nbsp;
			</td>
		</tr>
	</table>
	</div>
	<!-- / Selezione del deposito -->
	<?php
	}
	?>

<!-- OGGETTO COMPLETO -->
	<!-- CONTENUTI-->
	<div id ="aucap_aggiornabile">
		<!-- Diritto azionario -->
			<!-- Dati parte superiore -->
			<strong class="verde">Calcola il costo di adesione</strong>
			<div class="boxed">
				<table cellpadding="0" cellspacing="0">
					<!-- Campo compilabile per agenzie
					<tr style="display:none">
						<td colspan="3" id="dirittiPossedutiTd">Diritti posseduti <input type="text" id="dirittiPosseduti"></td>
					</tr>
					-->
					<!-- Fine campo compilabile per agenzie -->
					<!-- CAMPI DI INPUT -->
					<tr>
						<td>
							<label class="big">Diritti da esercitare</label>
							<div class="plusMinConsole">
								<a href="javascript:;" class="plusMinMin" onclick="plusMin(auc_dirEserc, 'minus' , aucap_qDiritti);">&nbsp;</a>
								<input id="aucap_dirEserc" maxlength="9" onkeyup="checkCampoPlusMin(this); aucapResetFields(this);" onclick="aucapResetFields(this)" placeholder="inserisci un valore">
								<a href="javascript:;" class="plusMinPlus" onclick="plusMin(auc_dirEserc, 'plus', aucap_qDiritti);">&nbsp;</a>
							</div>
						</td>
						<td>&nbsp;</td>
						<td>
							<div class="erroreAbsolute" style="display:none">
								<p>Quantit&agrave;  arrotondata per difetto al multiplo dei titoli minimi</p>
							</div>
							<label class="big"><span class="txthelp"  data-tooltip="Le azioni rivenienti sono le nuove azioni emesse da Banca Popolare di Milano che ti verranno caricate in portafoglio alla chiusura dell'operazione di aumento di capitale">Titoli rivenienti</span></label>
							<div class="plusMinConsole">
								<a href="javascript:;" class="plusMinMin"onclick="plusMin(auc_titRive, 'minus', aucap_qAzioni);">&nbsp;</a>
								<input id="aucap_titRive" maxlength="9" onkeyup="checkCampoPlusMin(this);aucapResetFields(this)" onclick="aucapResetFields(this)" placeholder="inserisci un valore">
								<a href="javascript:;" class="plusMinPlus"onclick="plusMin(auc_titRive, 'plus', aucap_qAzioni);">&nbsp;</a>
							</div>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="calcolaSpace"><a class="aButton" href="javascript:;" id="calcolaButton" onclick="aucapCalcola()" title="Calcola aucap">calcola</a></td>
						<td>&nbsp;</td>
					</tr>
					
					<td colspan="3"><hr class="filo"></td>
					<!-- / CAMPI DI OUTPUT -->
					<tr>
						<td id="acquistareCustomer">
								<label>Diritti da acquistare</label>
								<span class="output" id="aucap_dirAcq"></span>
								<div style="display:none">
									<label>Diritti da vendere</label>
									<span class="output" id="aucap_dirVend"></span>
								</div>
						</td>
						<td>
							<div <?php if($rappo == 0) print("style=\"display:none\";"); ?>>
								<label>Controvalore diritti*</label>
								<span class="output" id="aucap_controDir"></span>
							</div>
						</td>
						<td>
							<div class="fooform">	
							<!-- BOTTONE OFFLINE -->
							<a class="btnDisab" id="aucapAcquistaDis" href="javascript:;" data-tooltip="Testo del tooltip alternativo" style="display:none">acquista diritti</a>
							<!-- FINE BOTTONE OFFLINE -->
							
							<!-- BOTTONE ONLINE -->
							<div class="fooformrightb" id="aucapAcquista">
									<div><a title="Acquista diritti" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>acquista diritti</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
									<br class="clear">
								</div>	
								<br class="clear">
							</div>
							<!-- FINE BOTTONE ONLINE -->
						</td>
					</tr>	
					<tr>
						<td>
							<label>Controvalore AUCAP</label>
							<span class="output" id="aucap_controAucap"></span>
						</td>
						<td>&nbsp;</td>
						<td>
							<div class="fooform" <?php if ($rappo == 0) print ("style=\"display:none\"");?>>	
								<div class="fooformrightb">
									<div><a title="Aderisci all'AUCAP" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>aderisci all'AUCAP</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
									<br class="clear">
								</div>	
								<br class="clear">
							</div>
						</td>
					</tr>
				</table>
			</div>
		<!-- / Diritto azionario -->
		<?php if ($rappo != 0) 
		{
		?>
		<!-- Notine -->
		<p class="mininote">* al netto delle commissioni d'acquisto</p>
		<!-- / Notine -->
		<?php
		}
		?>
	</div>
	

</form>
<!-- FINE TABS -->
<?php
if($rappo==0)
{
?>
<br class="clear" />
<p>
	Ti ricordiamo che per aderire alle operazioni di AUCAP &egrave; necessario possedere un deposito titoli.
</p>
<br class="clear" />
<div class="fooform">
	<div class="fooformright">
		<div>
			<a href="#1" class="btnformright" title="apri deposito"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>apri deposito</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
		<br class="clear" />
	</div>	
	
</div>
<?php
}
?>
</div>
<!-- FINE OVERLAYER AUCAP-->
	</body>
</html>