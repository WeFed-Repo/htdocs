<script type="text/javascript" src="/wscmn/js/ret/priv_fes.js"></script>
<!-- FINE INCLUSIONI ESTERNE -->
<h1>Ricerca e confronta</h1>
<!-- BLOCCO DA CHIAMARE PER IL CARICAMENTO IN-PAGE -->
<div id="fesST">
	<!-- BLOCCO GENERICO TOP POPOLATO VIA BACKEND: SVILUPPO HTML STATICO-->
	<div style="width:100%;height:100px;background-color:#dedede;border-radius:10px;margin-bottom:20px">
		Blocco top con info titolo e pannello acquisto.
	</div>
	<!-- FINE BLOCCO GENERICO TOP POPOLATO VIA BACKEND: SVILUPPO HTML STATICO -->
	<!-- TABBER -->
	<div class="divtabellalist" id="fesSTTabs">
		<table class="tabellalist" border="0">
			<tr>
				<td class="on first"><a title="Sintesi" href="javascript:;" id="fesDetailSintesi">Sintesi</a></td>
				<td class="off"><a title="Grafico e rendimenti" href="javascript:;" id="fesDetailGrafico">Grafico e rendimenti</a></td>
				<td class="off"><a title="Rating e rischio" href="javascript:;" id="fesDetailRating">Rating e rischio</a></td>
				<td class="off"><a title="Composizione" href="javascript:;" id="fesDetailComposizione">Composizione</a></td>
				<td class="off"><a title="Societ&agrave; di gestione" href="javascript:;" id="fesDetailGestione">Societ&agrave; di gestione</a></td>												
				<td class="end"> </td>
			</tr>
		</table>
	</div>
	<!-- FINE TABBER -->
	<div id="fesSTDetail">
		
	</div>
</div>
<!-- FINE BLOCCO DA CHIAMARE PER IL CARICAMENTO IN-PAGE -->
<script type="text/javascript">
	//Inizializzazione per page stand-alone
	var fesIsin = "";
	fesSTInit();
</script>