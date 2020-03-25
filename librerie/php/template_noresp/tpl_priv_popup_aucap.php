<?php
$rappo = $_GET["rappo"];
?>
<script src="/wscmn/js/ret/priv_calcolatore_aucap.js"></script>
<link rel="stylesheet" type="text/css" href="/wscmn/css/aucap.css">
<h3 class="verde">Aumento di capitale Bpm</h3>
<p>
<p>
	Con il calcolatore puoi simulare l'adesione all'aumento di capitale BPM e determinare il costo di adesione.
</p>
<form autocomplete = "off">
<div class="upperFiletto">
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
	<!-- Selezione del deposito -->
	<input id="aucap_deposito" type="hidden" value="000000000000000001">
	<table class="form01 formDepo">
		<tr> 
			<td class="uno">Deposito titoli</td>
			<td>
				<!-- campo hidden con deposito: valorizzare comunque con il primo deposito oppure come "vuoto" -->
				<!-- Qualora vi fosse un solo deposito titoli 
				<strong>Esempio deposito 000000000000000001</strong>
				 / fine un solo deposito titoli -->
				<!-- Selettore per piu' deposito titoli -->
				<select name="select" id="" onchange="auc_deposito.value=this.value; getCalcolatoreValues();">
					<option value="000000000000000001" selected>Esempio deposito 000000000000000001</option>
					<option value="000000000000000002">Esempio deposito 000000000000000002</option>
				</select>
				<!-- / selettore per piu' deposito titoli -->
			</td>
		</tr>
	</table>
	<!-- / Selezione del deposito -->
	<?php
	}
	?>
	
</div>
<!-- OGGETTO COMPLETO -->
<div class="divtabellatabs">
	<!-- TABS -->
	<table cellspacing="0" cellpadding="0" border="0" class="tabellatabs">
		<tr>
			<td class="oninizio"></td><td isselected="true" class="on" style="border-bottom: 1px solid rgb(255, 255, 255);"><a onclick="aucapTabSwitch(this, 'azionario')" onmouseout="newTabOff(this);" onmouseover="newTabOn(this);" href="javascript:;" title="Diritto azionario">Diritto azionario</a></td><td class="on2b" style="border-bottom: 1px solid rgb(255, 255, 255);">&nbsp;</td>
			<td class="off"><a onclick="aucapTabSwitch(this, 'obbligazionario')" onmouseout="newTabOff(this);" onmouseover="newTabOn(this);" href="javascript:;" title="Diritto obbligazionario">Diritto obbligazionario</a></td><td class="off2">&nbsp;</td>
		</tr>
	</table>
	<input type="hidden" id="aucap_tipDir"  value="azionario"/>
	<!-- CONTENUTI-->
	<div class="divtabellacont" id ="aucap_aggiornabile">
		<!-- Diritto azionario -->
			<!-- Dati parte superiore -->
			<table class="dataElement" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<label>Rapporto di sottoscrizione</label>
						<span class="data" id="aucap_rappSott">- Azioni/- diritti</span>
					</td>
					<td>
						<label>N&deg; minimo di diritti da esercitare</label>
						<span class="data"id="aucap_minDir">- diritti</span>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Prezzo di sottoscrizione <span class="data" id="aucap_prezzoSott"> - &euro;</span>
					</td>
				</tr>
			</table>
			<div class="filetto"></div>
			<strong class="verde">Calcola il costo dell'operazione di esercizio</strong>
			<div class="calcolatore">
				<table cellpadding="0" cellspacing="0">
					<!-- Campo compilabile per agenzie
					<tr style="display:none">
						<td colspan="3" id="dirittiPossedutiTd">Diritti posseduti <input type="text" id="dirittiPosseduti"></td>
					</tr>
					-->
					<!-- Fine campo compilabile per agenzie -->
					<!-- Campo output per clienti -->
					<tr <?php if ($rappo == 0) print ("style=\"display:none\"");?>>
						<td id="dirittiPossedutiTd"><span>Diritti posseduti</span><span id="aucap_dirPoss" class="output"></span></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<!-- Fine campo output per clienti  -->
					<!-- CAMPI DI INPUT -->
					<tr>
						<td>
							<div class="erroreAbsolute" style="display:none">
								<p>Quantit&agrave;  arrotondata per difetto al multiplo dei diritti minimi</p>
							</div>
							<label>Diritti da esercitare</label>
							<div class="plusMinConsole">
								<a href="javascript:;" class="plusMinMin" onclick="plusMin(auc_dirEserc, 'minus' , aucap_qDiritti);">&nbsp;</a>
								<input id="aucap_dirEserc" maxlength="9" onkeyup="checkCampoPlusMin(this); aucapResetFields(this);" onclick="aucapResetFields(this)">
								<a href="javascript:;" class="plusMinPlus" onclick="plusMin(auc_dirEserc, 'plus', aucap_qDiritti);">&nbsp;</a>
								<span class="details">inserisci valore</span>
							</div>
						</td>
						<td class="dirittiSwitch">
							<a class="btn_aucapCalcola" href="javascript:;" onclick="aucapCalcola();" title="Calcola"></a>
						</td>
						<td>
							<div class="erroreAbsolute" style="display:none">
								<p>Quantit&agrave;  arrotondata per difetto al multiplo dei titoli minimi</p>
							</div>
							<label>Titoli rivenienti<span onmousemove="createUniqTooltip(event, this)" onmouseover="createUniqTooltip(event, this); nascondi('lampa1');" onmouseout="removeUniqTooltip(event,this); vedi('lampa1');" class="uniqTooltipText nodotted" id="tooltip1">
									<span class="uniqTooltipPos"><img src="/img/ret/lampa_off.gif" id="lampa1" class="lampa"></span>
									<span class="uniqTooltipInnerHTML">Le azioni rivenienti sono le nuove azioni emesse da Banca Popolare di Milano che ti verranno caricate in portafoglio alla chiusura dell'operazione di aumento di capitale</span></span>
							</label>
							<div class="plusMinConsole">
								<a href="javascript:;" class="plusMinMin"onclick="plusMin(auc_titRive, 'minus', aucap_qAzioni);">&nbsp;</a>
								<input id="aucap_titRive" maxlength="9" onkeyup="checkCampoPlusMin(this);aucapResetFields(this)" onclick="aucapResetFields(this)">
								<a href="javascript:;" class="plusMinPlus"onclick="plusMin(auc_titRive, 'plus', aucap_qAzioni);">&nbsp;</a>
								<span class="details">inserisci valore</span>
							</div>
						</td>
					</tr>
					<!-- / CAMPI DI INPUT -->
					<tr <?php if ($rappo == 0) print ("style=\"display:none\"");?>> 
						<td id="acquistareCustomer">
								<label>Diritti<br>da acquistare</label>
								<span class="output" id="aucap_dirAcq"></span>
								<div style="display:none">
									<label>Diritti da vendere</label>
									<span class="output" id="aucap_dirVend"></span>
								</div>
						</td>
						<td>&nbsp;</td>
						<td>&nbsp;
							<!--
							<label>Controvalore da verificare</label>
							<span class="output"></span>
							-->
						</td>
					</tr>
					<tr>
						<td>
							<div <?php if($rappo == 0) print("style=\"display:none\";"); ?>
								<label>Controvalore diritti*</label>
								<span class="output" id="aucap_controDir"></span>
								<div class="fooform">	
									<div class="fooformrightb">
										<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>acquista diritti</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
										<br class="clear">
									</div>	
									<br class="clear">
								</div>
							</div>
						</td>
						<td>&nbsp;</td>
						<td>
							<label>Controvalore AUCAP</label>
							<span class="output" id="aucap_controAucap"></span>
							<div class="fooform" <?php if ($rappo == 0) print ("style=\"display:none\"");?>>	
								<div class="fooformrightb">
									<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>aderisci all'AUCAP</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
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
	<img class="chiusura" alt="" src="/wscmn/img/str_tab_chiusura_pop.gif">
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