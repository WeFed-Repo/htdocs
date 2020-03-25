<?php 
	if ($bank=="webank")
	{
?>

<!-- OGGETTO CAROUSEL CARTE -->
<?php 
	virtual("/librerie/php/_slider_carte.php");
?>
<!-- FINE OGGETTO CAROUSEL CARTE -->
<!-- BLOCCO RICERCA CARTA GIUSTA -->
<script type="text/javascript" src="/js/ret/priv_cardconfig.js"></script>
<script type="text/javascript">featChartInit("<%3Fxml%20version%3D%221.0%22%20encoding%3D%22windows-1250%22%3F><cards><card id=%22nav_priv_wbx_compara_carte_bancomat%22><name><![CDATA[ Bancomat ]]></name><link><![CDATA[ %2FwbOnetoone%2F3l%2Fdo%2FwbOnetoone%2FschedaProdotto.do%3FOBSCNT%3DTAB%26tabId%3Dnav_priv_wbx_carte%26OBSKEY%3Dnav_priv_wbx_info_gestione_carta%26OBSKEY3%3Dnav_priv_wbx_bancomat_int_cosa_e ]]></link></card><card id=%22nav_priv_wbx_compara_carte_cartiprOne%22><name><![CDATA[ Cartimpronta One ]]></name><link><![CDATA[ %2FwbOnetoone%2F3l%2Fdo%2FwbOnetoone%2FschedaProdotto.do%3FCOL%3Dcarte%26OBSCNT%3DTAB%26tabId%3Dnav_priv_wbx_carte%26OBSKEY%3Dnav_priv_wbx_info_gestione_cartimp_one%26OBSKEY3%3Dnav_priv_wbx_cartimp_one]]></link></card><card id=%22nav_priv_wbx_compara_carte_cartiprGoldPlus%22><name><![CDATA[ Cartimpronta Gold Plus ]]></name><link><![CDATA[ /wbOnetoone/3l/do/wbOnetoone/schedaProdotto.do?OBSCNT=TAB&tabId=nav_priv_wbx_carte&OBSKEY=nav_priv_wbx_info_gestione_gold&OBSKEY3=nav_priv_wbx_cartimpr_gold_cosa_e]]></link></card><card id=%22nav_priv_wbx_compara_carte_cartaJeans%22><name><![CDATA[ Carta Jeans ]]></name><link><![CDATA[ /wbOnetoone/3l/do/wbOnetoone/schedaProdotto.do?OBSCNT=TAB&tabId=nav_priv_wbx_carte&OBSKEY=nav_priv_wbx_info_gestione_carta_jeans&OBSKEY3=nav_priv_wbx_cartajeans_cosa_e]]></link></card></cards>");</script>
<!-- Omettere questo blocco se non occorre l'accordion/inizio -->
<div id="featConfigAccordion">
	<a href="javascript:;">QUALI <strong>CARATTERISTICHE</strong> DEVE AVERE LA TUA CARTA? <strong>TROVA QUELLA GIUSTA PER TE</strong>.</a>
</div>
<!-- Omettere questo blocco se non occorre l'accordion/fine -->
<!-- Blocco da utilizzare qualora l'accordion non fosse presente
<h3 class="graphTit">QUALI <strong>CARATTERISTICHE</strong> DEVE AVERE LA TUA CARTA? <strong>TROVA QUELLA GIUSTA PER TE</strong>.</h3>
Fine blocco da utilizzare per accordion non presente -->
<div id="featConfig"" style="display:none"><!-- In caso non occorresse l'accordion togliere style="display:none" -->
	<p>Trascina le funzioni preferite nel portafoglio e scopri le carte giuste per te</p>
	<div id="featMasterCont">
		<!-- CONTENITORE CARATTERISTICHE -->
		<div id="featContainer"></div>
		<!-- DROP CHART A 6 POSIZIONI -->
		<div id="featChartWrap">
			<div id="featChart"></div>
			<a href="javascript:;" id="deleteAll" style="display:none;">Elimina tutto</a>
		</div>
		<div id="featMsg"><span>Nessun risultato presente in assenza di parametri</span></div>
		<div id="featCards"></div>
		<form method="post" action="#### METTERE ACTION" name="featConfrontaForm"><input type="hidden" name="elencoCarte" id="elCarte"></form>
		<a href="javascript:;" id="featConfronta" title="Confronta le carte" style="display:none"><img src="/img/ret/cfeat_confronta.gif"></a>
	</div>
</div>
<!-- FINE BLOCCO RICERCA CARTA GIUSTA -->
<?php
	}
	else
		{
		virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_110.html");
		virtual("/librerie/include/commons/tabelle/tab_black_priv_050d.html");
		}
		
?>
